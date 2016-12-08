<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit875e54f7f4be57d2e25635ca5762eb62
{
    public static $files = array (
        'a24b5daa493ecb5e767c7d1592a8da36' => __DIR__ . '/..' . '/mediawiki/at-ease/src/Functions.php',
        'c3f7f0e81464740a933532e81fa26cc7' => __DIR__ . '/..' . '/wikimedia/base-convert/src/Functions.php',
        'd55c27a601de788b19a09b7d057d07ae' => __DIR__ . '/..' . '/wikimedia/relpath/src/RelPath.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WrappedString\\' => 14,
            'Wikimedia\\Composer\\' => 19,
            'Wikimedia\\Assert\\Test\\' => 22,
            'Wikimedia\\Assert\\' => 17,
        ),
        'C' => 
        array (
            'Composer\\Semver\\' => 16,
            'CLDRPluralRuleParser\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WrappedString\\' => 
        array (
            0 => __DIR__ . '/..' . '/wikimedia/wrappedstring/src',
        ),
        'Wikimedia\\Composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src',
        ),
        'Wikimedia\\Assert\\Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/wikimedia/assert/tests/phpunit',
        ),
        'Wikimedia\\Assert\\' => 
        array (
            0 => __DIR__ . '/..' . '/wikimedia/assert/src',
        ),
        'Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
        'CLDRPluralRuleParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/wikimedia/cldr-plural-rule-parser/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 
            array (
                0 => __DIR__ . '/..' . '/psr/log',
            ),
        ),
        'L' => 
        array (
            'Liuggio' => 
            array (
                0 => __DIR__ . '/..' . '/liuggio/statsd-php-client/src',
            ),
            'Less' => 
            array (
                0 => __DIR__ . '/..' . '/oyejorge/less.php/lib',
            ),
        ),
        'C' => 
        array (
            'ComposerHookHandler' => 
            array (
                0 => __DIR__ . '/../..' . '/includes/composer',
            ),
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/..' . '/cssjanus/cssjanus/src',
    );

    public static $classMap = array (
        'CLDRPluralRuleParser\\Converter' => __DIR__ . '/..' . '/wikimedia/cldr-plural-rule-parser/src/Converter.php',
        'CLDRPluralRuleParser\\Converter\\Expression' => __DIR__ . '/..' . '/wikimedia/cldr-plural-rule-parser/src/Converter/Expression.php',
        'CLDRPluralRuleParser\\Converter\\Fragment' => __DIR__ . '/..' . '/wikimedia/cldr-plural-rule-parser/src/Converter/Fragment.php',
        'CLDRPluralRuleParser\\Converter\\Operator' => __DIR__ . '/..' . '/wikimedia/cldr-plural-rule-parser/src/Converter/Operator.php',
        'CLDRPluralRuleParser\\Error' => __DIR__ . '/..' . '/wikimedia/cldr-plural-rule-parser/src/Error.php',
        'CLDRPluralRuleParser\\Evaluator' => __DIR__ . '/..' . '/wikimedia/cldr-plural-rule-parser/src/Evaluator.php',
        'CLDRPluralRuleParser\\Range' => __DIR__ . '/..' . '/wikimedia/cldr-plural-rule-parser/src/Range.php',
        'CSSJanus' => __DIR__ . '/..' . '/cssjanus/cssjanus/src/CSSJanus.php',
        'CSSJanusTokenizer' => __DIR__ . '/..' . '/cssjanus/cssjanus/src/CSSJanus.php',
        'Cdb\\Exception' => __DIR__ . '/..' . '/wikimedia/cdb/src/Exception.php',
        'Cdb\\Reader' => __DIR__ . '/..' . '/wikimedia/cdb/src/Reader.php',
        'Cdb\\Reader\\DBA' => __DIR__ . '/..' . '/wikimedia/cdb/src/Reader/DBA.php',
        'Cdb\\Reader\\Hash' => __DIR__ . '/..' . '/wikimedia/cdb/src/Reader/Hash.php',
        'Cdb\\Reader\\PHP' => __DIR__ . '/..' . '/wikimedia/cdb/src/Reader/PHP.php',
        'Cdb\\Util' => __DIR__ . '/..' . '/wikimedia/cdb/src/Util.php',
        'Cdb\\Writer' => __DIR__ . '/..' . '/wikimedia/cdb/src/Writer.php',
        'Cdb\\Writer\\DBA' => __DIR__ . '/..' . '/wikimedia/cdb/src/Writer/DBA.php',
        'Cdb\\Writer\\PHP' => __DIR__ . '/..' . '/wikimedia/cdb/src/Writer/PHP.php',
        'ComposerHookHandler' => __DIR__ . '/../..' . '/includes/composer/ComposerHookHandler.php',
        'Composer\\Semver\\Comparator' => __DIR__ . '/..' . '/composer/semver/src/Comparator.php',
        'Composer\\Semver\\Constraint\\AbstractConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/AbstractConstraint.php',
        'Composer\\Semver\\Constraint\\Constraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/Constraint.php',
        'Composer\\Semver\\Constraint\\ConstraintInterface' => __DIR__ . '/..' . '/composer/semver/src/Constraint/ConstraintInterface.php',
        'Composer\\Semver\\Constraint\\EmptyConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/EmptyConstraint.php',
        'Composer\\Semver\\Constraint\\MultiConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/MultiConstraint.php',
        'Composer\\Semver\\Semver' => __DIR__ . '/..' . '/composer/semver/src/Semver.php',
        'Composer\\Semver\\VersionParser' => __DIR__ . '/..' . '/composer/semver/src/VersionParser.php',
        'HtmlFormatter\\HtmlFormatter' => __DIR__ . '/..' . '/wikimedia/html-formatter/src/HtmlFormatter.php',
        'IPSet\\IPSet' => __DIR__ . '/..' . '/wikimedia/ip-set/src/IPSet.php',
        'LCRun3' => __DIR__ . '/..' . '/zordius/lightncandy/src/lightncandy.php',
        'Less_Autoloader' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Autoloader.php',
        'Less_Cache' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Cache.php',
        'Less_Colors' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Colors.php',
        'Less_Configurable' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Configurable.php',
        'Less_Environment' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Environment.php',
        'Less_Exception_Chunk' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Exception/Chunk.php',
        'Less_Exception_Compiler' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Exception/Compiler.php',
        'Less_Exception_Parser' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Exception/Parser.php',
        'Less_Functions' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Functions.php',
        'Less_Mime' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Mime.php',
        'Less_Output' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Output.php',
        'Less_Output_Mapped' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Output/Mapped.php',
        'Less_Parser' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Parser.php',
        'Less_SourceMap_Base64VLQ' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/SourceMap/Base64VLQ.php',
        'Less_SourceMap_Generator' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/SourceMap/Generator.php',
        'Less_Tree' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree.php',
        'Less_Tree_Alpha' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Alpha.php',
        'Less_Tree_Anonymous' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Anonymous.php',
        'Less_Tree_Assignment' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Assignment.php',
        'Less_Tree_Attribute' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Attribute.php',
        'Less_Tree_Call' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Call.php',
        'Less_Tree_Color' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Color.php',
        'Less_Tree_Comment' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Comment.php',
        'Less_Tree_Condition' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Condition.php',
        'Less_Tree_DefaultFunc' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/DefaultFunc.php',
        'Less_Tree_DetachedRuleset' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/DetachedRuleset.php',
        'Less_Tree_Dimension' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Dimension.php',
        'Less_Tree_Directive' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Directive.php',
        'Less_Tree_Element' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Element.php',
        'Less_Tree_Expression' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Expression.php',
        'Less_Tree_Extend' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Extend.php',
        'Less_Tree_Import' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Import.php',
        'Less_Tree_Javascript' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Javascript.php',
        'Less_Tree_Keyword' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Keyword.php',
        'Less_Tree_Media' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Media.php',
        'Less_Tree_Mixin_Call' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Mixin/Call.php',
        'Less_Tree_Mixin_Definition' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Mixin/Definition.php',
        'Less_Tree_NameValue' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/NameValue.php',
        'Less_Tree_Negative' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Negative.php',
        'Less_Tree_Operation' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Operation.php',
        'Less_Tree_Paren' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Paren.php',
        'Less_Tree_Quoted' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Quoted.php',
        'Less_Tree_Rule' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Rule.php',
        'Less_Tree_Ruleset' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Ruleset.php',
        'Less_Tree_RulesetCall' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/RulesetCall.php',
        'Less_Tree_Selector' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Selector.php',
        'Less_Tree_UnicodeDescriptor' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/UnicodeDescriptor.php',
        'Less_Tree_Unit' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Unit.php',
        'Less_Tree_UnitConversions' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/UnitConversions.php',
        'Less_Tree_Url' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Url.php',
        'Less_Tree_Value' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Value.php',
        'Less_Tree_Variable' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Variable.php',
        'Less_Version' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Version.php',
        'Less_Visitor' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Visitor.php',
        'Less_VisitorReplacing' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/VisitorReplacing.php',
        'Less_Visitor_extendFinder' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Visitor/extendFinder.php',
        'Less_Visitor_joinSelector' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Visitor/joinSelector.php',
        'Less_Visitor_processExtends' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Visitor/processExtends.php',
        'Less_Visitor_toCSS' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Visitor/toCSS.php',
        'LightnCandy' => __DIR__ . '/..' . '/zordius/lightncandy/src/lightncandy.php',
        'Liuggio\\StatsdClient\\Entity\\StatsdData' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Entity/StatsdData.php',
        'Liuggio\\StatsdClient\\Entity\\StatsdDataInterface' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Entity/StatsdDataInterface.php',
        'Liuggio\\StatsdClient\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Exception/InvalidArgumentException.php',
        'Liuggio\\StatsdClient\\Factory\\StatsdDataFactory' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Factory/StatsdDataFactory.php',
        'Liuggio\\StatsdClient\\Factory\\StatsdDataFactoryInterface' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Factory/StatsdDataFactoryInterface.php',
        'Liuggio\\StatsdClient\\Monolog\\Formatter\\StatsDFormatter' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Monolog/Formatter/StatsDFormatter.php',
        'Liuggio\\StatsdClient\\Monolog\\Handler\\StatsDHandler' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Monolog/Handler/StatsDHandler.php',
        'Liuggio\\StatsdClient\\Sender\\EchoSender' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Sender/EchoSender.php',
        'Liuggio\\StatsdClient\\Sender\\SenderInterface' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Sender/SenderInterface.php',
        'Liuggio\\StatsdClient\\Sender\\SocketSender' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Sender/SocketSender.php',
        'Liuggio\\StatsdClient\\Sender\\SysLogSender' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Sender/SysLogSender.php',
        'Liuggio\\StatsdClient\\Service\\StatsdService' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Service/StatsdService.php',
        'Liuggio\\StatsdClient\\StatsdClient' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/StatsdClient.php',
        'Liuggio\\StatsdClient\\StatsdClientInterface' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/StatsdClientInterface.php',
        'OOUI\\AccessKeyedElement' => __DIR__ . '/..' . '/oojs/oojs-ui/php/mixins/AccessKeyedElement.php',
        'OOUI\\ActionFieldLayout' => __DIR__ . '/..' . '/oojs/oojs-ui/php/layouts/ActionFieldLayout.php',
        'OOUI\\ApexTheme' => __DIR__ . '/..' . '/oojs/oojs-ui/php/themes/ApexTheme.php',
        'OOUI\\ButtonElement' => __DIR__ . '/..' . '/oojs/oojs-ui/php/mixins/ButtonElement.php',
        'OOUI\\ButtonGroupWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/ButtonGroupWidget.php',
        'OOUI\\ButtonInputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/ButtonInputWidget.php',
        'OOUI\\ButtonWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/ButtonWidget.php',
        'OOUI\\CheckboxInputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/CheckboxInputWidget.php',
        'OOUI\\CheckboxMultiselectInputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/CheckboxMultiselectInputWidget.php',
        'OOUI\\ComboBoxInputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/ComboBoxInputWidget.php',
        'OOUI\\DropdownInputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/DropdownInputWidget.php',
        'OOUI\\Element' => __DIR__ . '/..' . '/oojs/oojs-ui/php/Element.php',
        'OOUI\\Exception' => __DIR__ . '/..' . '/oojs/oojs-ui/php/Exception.php',
        'OOUI\\FieldLayout' => __DIR__ . '/..' . '/oojs/oojs-ui/php/layouts/FieldLayout.php',
        'OOUI\\FieldsetLayout' => __DIR__ . '/..' . '/oojs/oojs-ui/php/layouts/FieldsetLayout.php',
        'OOUI\\FlaggedElement' => __DIR__ . '/..' . '/oojs/oojs-ui/php/mixins/FlaggedElement.php',
        'OOUI\\FormLayout' => __DIR__ . '/..' . '/oojs/oojs-ui/php/layouts/FormLayout.php',
        'OOUI\\GroupElement' => __DIR__ . '/..' . '/oojs/oojs-ui/php/mixins/GroupElement.php',
        'OOUI\\HorizontalLayout' => __DIR__ . '/..' . '/oojs/oojs-ui/php/layouts/HorizontalLayout.php',
        'OOUI\\HtmlSnippet' => __DIR__ . '/..' . '/oojs/oojs-ui/php/HtmlSnippet.php',
        'OOUI\\IconElement' => __DIR__ . '/..' . '/oojs/oojs-ui/php/mixins/IconElement.php',
        'OOUI\\IconWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/IconWidget.php',
        'OOUI\\IndicatorElement' => __DIR__ . '/..' . '/oojs/oojs-ui/php/mixins/IndicatorElement.php',
        'OOUI\\IndicatorWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/IndicatorWidget.php',
        'OOUI\\InputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/InputWidget.php',
        'OOUI\\LabelElement' => __DIR__ . '/..' . '/oojs/oojs-ui/php/mixins/LabelElement.php',
        'OOUI\\LabelWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/LabelWidget.php',
        'OOUI\\Layout' => __DIR__ . '/..' . '/oojs/oojs-ui/php/Layout.php',
        'OOUI\\MediaWikiTheme' => __DIR__ . '/..' . '/oojs/oojs-ui/php/themes/MediaWikiTheme.php',
        'OOUI\\PanelLayout' => __DIR__ . '/..' . '/oojs/oojs-ui/php/layouts/PanelLayout.php',
        'OOUI\\ProgressBarWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/ProgressBarWidget.php',
        'OOUI\\RadioInputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/RadioInputWidget.php',
        'OOUI\\RadioSelectInputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/RadioSelectInputWidget.php',
        'OOUI\\TabIndexedElement' => __DIR__ . '/..' . '/oojs/oojs-ui/php/mixins/TabIndexedElement.php',
        'OOUI\\Tag' => __DIR__ . '/..' . '/oojs/oojs-ui/php/Tag.php',
        'OOUI\\TextInputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/TextInputWidget.php',
        'OOUI\\Theme' => __DIR__ . '/..' . '/oojs/oojs-ui/php/Theme.php',
        'OOUI\\TitledElement' => __DIR__ . '/..' . '/oojs/oojs-ui/php/mixins/TitledElement.php',
        'OOUI\\Widget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/Widget.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'RunningStat\\PSquare' => __DIR__ . '/..' . '/wikimedia/running-stat/src/PSquare.php',
        'RunningStat\\RunningStat' => __DIR__ . '/..' . '/wikimedia/running-stat/src/RunningStat.php',
        'UtfNormal\\Constants' => __DIR__ . '/..' . '/wikimedia/utfnormal/src/Constants.php',
        'UtfNormal\\Utils' => __DIR__ . '/..' . '/wikimedia/utfnormal/src/Util.php',
        'UtfNormal\\Validator' => __DIR__ . '/..' . '/wikimedia/utfnormal/src/Validator.php',
        'Wikimedia\\Assert\\Assert' => __DIR__ . '/..' . '/wikimedia/assert/src/Assert.php',
        'Wikimedia\\Assert\\AssertionException' => __DIR__ . '/..' . '/wikimedia/assert/src/AssertionException.php',
        'Wikimedia\\Assert\\InvariantException' => __DIR__ . '/..' . '/wikimedia/assert/src/InvariantException.php',
        'Wikimedia\\Assert\\ParameterAssertionException' => __DIR__ . '/..' . '/wikimedia/assert/src/ParameterAssertionException.php',
        'Wikimedia\\Assert\\ParameterElementTypeException' => __DIR__ . '/..' . '/wikimedia/assert/src/ParameterElementTypeException.php',
        'Wikimedia\\Assert\\ParameterTypeException' => __DIR__ . '/..' . '/wikimedia/assert/src/ParameterTypeException.php',
        'Wikimedia\\Assert\\PostconditionException' => __DIR__ . '/..' . '/wikimedia/assert/src/PostconditionException.php',
        'Wikimedia\\Assert\\PreconditionException' => __DIR__ . '/..' . '/wikimedia/assert/src/PreconditionException.php',
        'Wikimedia\\Assert\\Test\\AssertTest' => __DIR__ . '/..' . '/wikimedia/assert/tests/phpunit/AssertTest.php',
        'Wikimedia\\Composer\\Logger' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/Logger.php',
        'Wikimedia\\Composer\\MergePlugin' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/MergePlugin.php',
        'Wikimedia\\Composer\\Merge\\ExtraPackage' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/Merge/ExtraPackage.php',
        'Wikimedia\\Composer\\Merge\\MissingFileException' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/Merge/MissingFileException.php',
        'Wikimedia\\Composer\\Merge\\PluginState' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/Merge/PluginState.php',
        'Wikimedia\\Composer\\Merge\\StabilityFlags' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/Merge/StabilityFlags.php',
        'Wikimedia\\PhpSessionSerializer' => __DIR__ . '/..' . '/wikimedia/php-session-serializer/src/Wikimedia/PhpSessionSerializer.php',
        'Wikimedia\\ScopedCallback' => __DIR__ . '/..' . '/wikimedia/scoped-callback/src/ScopedCallback.php',
        'Wikimedia\\WaitConditionLoop' => __DIR__ . '/..' . '/wikimedia/wait-condition-loop/src/WaitConditionLoop.php',
        'WrappedString\\WrappedString' => __DIR__ . '/..' . '/wikimedia/wrappedstring/src/WrappedString.php',
        'WrappedString\\WrappedStringList' => __DIR__ . '/..' . '/wikimedia/wrappedstring/src/WrappedStringList.php',
        'lessc' => __DIR__ . '/..' . '/oyejorge/less.php/lessc.inc.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit875e54f7f4be57d2e25635ca5762eb62::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit875e54f7f4be57d2e25635ca5762eb62::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit875e54f7f4be57d2e25635ca5762eb62::$prefixesPsr0;
            $loader->fallbackDirsPsr0 = ComposerStaticInit875e54f7f4be57d2e25635ca5762eb62::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInit875e54f7f4be57d2e25635ca5762eb62::$classMap;

        }, null, ClassLoader::class);
    }
}
