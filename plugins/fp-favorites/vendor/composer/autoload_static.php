<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteabce54e2b72ff8adfdf475366e68cb1
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FP_Favorites\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FP_Favorites\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'FP_Favorites\\Main' => __DIR__ . '/../..' . '/includes/Main.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteabce54e2b72ff8adfdf475366e68cb1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteabce54e2b72ff8adfdf475366e68cb1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteabce54e2b72ff8adfdf475366e68cb1::$classMap;

        }, null, ClassLoader::class);
    }
}
