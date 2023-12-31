<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ccb770811be107832df5a22a02b3a1d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ccb770811be107832df5a22a02b3a1d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ccb770811be107832df5a22a02b3a1d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8ccb770811be107832df5a22a02b3a1d::$classMap;

        }, null, ClassLoader::class);
    }
}
