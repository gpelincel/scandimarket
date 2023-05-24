<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitace3e0a255f80e1c7e221ded51777d98
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gabriel\\Skandimarket\\' => 21,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gabriel\\Skandimarket\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitace3e0a255f80e1c7e221ded51777d98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitace3e0a255f80e1c7e221ded51777d98::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitace3e0a255f80e1c7e221ded51777d98::$classMap;

        }, null, ClassLoader::class);
    }
}
