<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit18508e1185f1472dcb5a56fe3679e10c
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'A' => 
        array (
            'Ahmed\\Mvc\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Ahmed\\Mvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit18508e1185f1472dcb5a56fe3679e10c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit18508e1185f1472dcb5a56fe3679e10c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit18508e1185f1472dcb5a56fe3679e10c::$classMap;

        }, null, ClassLoader::class);
    }
}
