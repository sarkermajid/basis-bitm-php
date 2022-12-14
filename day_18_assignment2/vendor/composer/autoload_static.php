<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f37c3906b41d9dbd7c9d9fb7e275361
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f37c3906b41d9dbd7c9d9fb7e275361::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f37c3906b41d9dbd7c9d9fb7e275361::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4f37c3906b41d9dbd7c9d9fb7e275361::$classMap;

        }, null, ClassLoader::class);
    }
}
