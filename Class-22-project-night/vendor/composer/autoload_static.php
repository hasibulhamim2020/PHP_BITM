<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc417b2615a30ccd5398432b5c5b474b7
{
    public static $files = array (
        'a71aa1c08a5f7c11a89e953a5e87d38f' => __DIR__ . '/../..' . '/app/helpers/helpers.php',
    );

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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc417b2615a30ccd5398432b5c5b474b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc417b2615a30ccd5398432b5c5b474b7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc417b2615a30ccd5398432b5c5b474b7::$classMap;

        }, null, ClassLoader::class);
    }
}
