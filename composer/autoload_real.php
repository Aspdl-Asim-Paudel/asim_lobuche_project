<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitff274a7e52dff04efc5bbca71005aa2a
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitff274a7e52dff04efc5bbca71005aa2a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitff274a7e52dff04efc5bbca71005aa2a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitff274a7e52dff04efc5bbca71005aa2a::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitff274a7e52dff04efc5bbca71005aa2a::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequireff274a7e52dff04efc5bbca71005aa2a($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequireff274a7e52dff04efc5bbca71005aa2a($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
