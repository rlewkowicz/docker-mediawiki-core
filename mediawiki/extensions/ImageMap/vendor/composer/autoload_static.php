<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47bc5a9c2060d47ac6f5dec79289f73c
{
    public static $files = array (
        '54e8153addf3583acb81ffc5ae64997d' => __DIR__ . '/../..' . '/ImageMap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'ImageMap' => __DIR__ . '/../..' . '/ImageMap_body.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit47bc5a9c2060d47ac6f5dec79289f73c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47bc5a9c2060d47ac6f5dec79289f73c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit47bc5a9c2060d47ac6f5dec79289f73c::$classMap;

        }, null, ClassLoader::class);
    }
}
