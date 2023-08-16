<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite3a093fb2348a11ee4b1a6bc416f1e2d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite3a093fb2348a11ee4b1a6bc416f1e2d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite3a093fb2348a11ee4b1a6bc416f1e2d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite3a093fb2348a11ee4b1a6bc416f1e2d::$classMap;

        }, null, ClassLoader::class);
    }
}