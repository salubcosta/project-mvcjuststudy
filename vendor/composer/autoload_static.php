<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit02e0b88bd032085029fe66087919a6cf
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit02e0b88bd032085029fe66087919a6cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit02e0b88bd032085029fe66087919a6cf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
