<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbe5450d83eeac69981b6a61f70081c43
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitbe5450d83eeac69981b6a61f70081c43', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbe5450d83eeac69981b6a61f70081c43', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbe5450d83eeac69981b6a61f70081c43::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
