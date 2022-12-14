<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit143131be78a0c093c14d0bb1a5eff32e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit143131be78a0c093c14d0bb1a5eff32e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit143131be78a0c093c14d0bb1a5eff32e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit143131be78a0c093c14d0bb1a5eff32e::$classMap;

        }, null, ClassLoader::class);
    }
}
