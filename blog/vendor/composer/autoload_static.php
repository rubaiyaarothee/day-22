<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8bd25f4e50360bfc3e889a1364310a6e
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8bd25f4e50360bfc3e889a1364310a6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8bd25f4e50360bfc3e889a1364310a6e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
