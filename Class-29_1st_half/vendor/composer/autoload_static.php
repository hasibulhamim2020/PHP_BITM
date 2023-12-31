<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfad4a378e430efc80ad915e733494ac5
{
    public static $files = array (
        '0c779ae2ef5fcc7aa15ed3633534e221' => __DIR__ . '/../..' . '/app/helpers/helpers.php',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfad4a378e430efc80ad915e733494ac5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfad4a378e430efc80ad915e733494ac5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfad4a378e430efc80ad915e733494ac5::$classMap;

        }, null, ClassLoader::class);
    }
}
