<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf6ecac4907a3060186f1e9f135c17d14
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf6ecac4907a3060186f1e9f135c17d14::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf6ecac4907a3060186f1e9f135c17d14::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf6ecac4907a3060186f1e9f135c17d14::$classMap;

        }, null, ClassLoader::class);
    }
}
