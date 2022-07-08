<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite25ac9924af71414dc6c3f56a4fcd04b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PZN\\Belajar\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PZN\\Belajar\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite25ac9924af71414dc6c3f56a4fcd04b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite25ac9924af71414dc6c3f56a4fcd04b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite25ac9924af71414dc6c3f56a4fcd04b::$classMap;

        }, null, ClassLoader::class);
    }
}
