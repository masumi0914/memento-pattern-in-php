<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26a462c90145887fb5c2dc57c5c0ee04
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26a462c90145887fb5c2dc57c5c0ee04::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26a462c90145887fb5c2dc57c5c0ee04::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}