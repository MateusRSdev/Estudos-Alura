<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit75a71ec5d8697d866a1e298b34081b2a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\DesignPatern\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\DesignPatern\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit75a71ec5d8697d866a1e298b34081b2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit75a71ec5d8697d866a1e298b34081b2a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit75a71ec5d8697d866a1e298b34081b2a::$classMap;

        }, null, ClassLoader::class);
    }
}