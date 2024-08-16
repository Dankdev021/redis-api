<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf5608aab45b99873dbfb7a3124039346
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RedisApi\\' => 9,
        ),
        'P' => 
        array (
            'Predis\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RedisApi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf5608aab45b99873dbfb7a3124039346::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf5608aab45b99873dbfb7a3124039346::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf5608aab45b99873dbfb7a3124039346::$classMap;

        }, null, ClassLoader::class);
    }
}