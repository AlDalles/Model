<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0445217a7ac843fbc8ac5f2ab6228dc
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hillel\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hillel\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite0445217a7ac843fbc8ac5f2ab6228dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0445217a7ac843fbc8ac5f2ab6228dc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite0445217a7ac843fbc8ac5f2ab6228dc::$classMap;

        }, null, ClassLoader::class);
    }
}
