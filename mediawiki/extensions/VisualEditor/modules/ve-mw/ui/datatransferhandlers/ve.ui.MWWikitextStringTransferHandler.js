/*!
 * VisualEditor UserInterface MWWikitextStringTransferHandler class.
 *
 * @copyright 2011-2016 VisualEditor Team and others; see http://ve.mit-license.org
 */

/**
 * Detect an attempt to paste wikitext, and convert it to proper
 * HTML.
 *
 * @class
 * @extends ve.ui.PlainTextStringTransferHandler
 *
 * @constructor
 * @param {ve.ui.Surface} surface
 * @param {ve.ui.DataTransferItem} item
 */
ve.ui.MWWikitextStringTransferHandler = function VeUiMWWikitextStringTransferHandler() {
	// Parent constructor
	ve.ui.MWWikitextStringTransferHandler.super.apply( this, arguments );

	// Properties
	this.parsoidRequest = null;
};

/* Inheritance */

OO.inheritClass( ve.ui.MWWikitextStringTransferHandler, ve.ui.PlainTextStringTransferHandler );

/* Static properties */

ve.ui.MWWikitextStringTransferHandler.static.name = 'wikitextString';

ve.ui.MWWikitextStringTransferHandler.static.types =
	ve.ui.MWWikitextStringTransferHandler.super.static.types.concat(
		[ 'text/x-wiki' ]
	);

ve.ui.MWWikitextStringTransferHandler.static.handlesPaste = true;

ve.ui.MWWikitextStringTransferHandler.static.matchFunction = function ( item ) {
	var i, rule,
		text = item.getAsString(),
		registry = ve.ui.mwWikitextTransferRegistry;

	// If the mime type is explicitly wikitext (ie, not plain text),
	// always accept.
	if ( item.type === 'text/x-wiki' ) {
		return true;
	}

	// Detect autolink opportunities for magic words.
	// (The link should be the only contents of paste to match this heuristic)
	if ( ve.dm.MWMagicLinkNode.static.validateContent( text.trim() ) ) {
		return true;
	}

	// Use a heuristic regexp to find text likely to be wikitext.
	// This test could be made more sophisticated in the future.
	for ( i in registry.registry ) {
		rule = registry.registry[ i ];
		if ( rule instanceof RegExp ) {
			if ( registry.registry[ i ].test( text ) ) {
				return true;
			}
		} else if ( text.indexOf( rule ) !== -1 ) {
			return true;
		}
	}
	return false;
};

/* Methods */

/**
 * @inheritdoc
 */
ve.ui.MWWikitextStringTransferHandler.prototype.process = function () {
	var i, data,
		handler = this,
		wikitext = this.item.getAsString();

	function failure() {
		// There's no DTH fallback handling for failures, so just paste
		// the raw wikitext if things go wrong.
		handler.resolve( wikitext );
	}

	// Convert wikitext to html using Parsoid.
	this.parsoidRequest = new mw.Api().post( {
		action: 'visualeditor',
		paction: 'parsefragment',
		page: mw.config.get( 'wgRelevantPageName' ),
		wikitext: wikitext
	} );

	// Don't immediately chain, as this.parsoidRequest must be abortable
	this.parsoidRequest.then( function ( response ) {
		var htmlDoc, doc, surface;

		if ( ve.getProp( response, 'visualeditor', 'result' ) !== 'success' ) {
			return failure();
		}

		htmlDoc = ve.createDocumentFromHtml( response.visualeditor.content );

		// Pass an empty object for the second argument (importRules) so that clipboard mode is used
		// TODO: Fix that API
		doc = handler.surface.getModel().getDocument().newFromHtml( htmlDoc, {} );
		data = doc.data.data;
		surface = new ve.dm.Surface( doc );

		// Filter out auto-generated items, e.g. reference lists
		// This is done after conversion as the autoGenerated item may contain data
		// required by other non-autoGenerated items, e.g. reference contents
		for ( i = data.length - 1; i >= 0; i-- ) {
			if ( ve.getProp( data[ i ], 'attributes', 'mw', 'autoGenerated' ) ) {
				surface.change(
					ve.dm.Transaction.newFromRemoval(
						doc,
						surface.getDocument().getDocumentNode().getNodeFromOffset( i + 1 ).getOuterRange()
					)
				);
			}
		}

		if ( !doc.data.hasContent() ) {
			return failure();
		}

		// Attempt to undo outermost p-wrapping if possible
		try {
			surface.change(
				ve.dm.Transaction.newFromWrap( doc, new ve.Range( 0, doc.data.countNonInternalElements() ), [], [], [ { type: 'paragraph' } ], [] )
			);
		} catch ( e ) {
			// Sometimes there is no p-wrapping, for example: "* foo"
			// Sometimes there are multiple <p> tags in the output.
			// That's okay: ignore the error and paste what we've got.
		}
		handler.resolve( doc );
	}, failure );

	this.createProgress( this.parsoidRequest, ve.msg( 'visualeditor-wikitext-progress' ) );
	// Indeterminate progress
	this.setProgress( null );
};

/**
 * @inheritdoc
 */
ve.ui.MWWikitextStringTransferHandler.prototype.abort = function () {
	// Parent method
	ve.ui.MWWikitextStringTransferHandler.super.prototype.abort.apply( this, arguments );

	if ( this.parsoidRequest ) {
		this.parsoidRequest.abort();
	}
};

/* Registration */

ve.ui.dataTransferHandlerFactory.register( ve.ui.MWWikitextStringTransferHandler );
