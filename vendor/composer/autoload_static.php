<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1191bc816ed5ffb945091dd38a3877f9
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1191bc816ed5ffb945091dd38a3877f9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1191bc816ed5ffb945091dd38a3877f9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
