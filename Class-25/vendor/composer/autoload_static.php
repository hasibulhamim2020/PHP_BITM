<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5556396391a08fa9a2fd334c9cb88fda
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5556396391a08fa9a2fd334c9cb88fda::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5556396391a08fa9a2fd334c9cb88fda::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5556396391a08fa9a2fd334c9cb88fda::$classMap;

        }, null, ClassLoader::class);
    }
}