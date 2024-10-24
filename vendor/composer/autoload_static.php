<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb8e4ea5ad00724f233081dc8d150c635
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gregoriohc\\LaravelNovaThemeResponsive\\' => 38,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gregoriohc\\LaravelNovaThemeResponsive\\' => 
        array (
            0 => __DIR__ . '/..' . '/gregoriohc/laravel-nova-theme-responsive/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb8e4ea5ad00724f233081dc8d150c635::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb8e4ea5ad00724f233081dc8d150c635::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb8e4ea5ad00724f233081dc8d150c635::$classMap;

        }, null, ClassLoader::class);
    }
}
