<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfdab62c9a6d509440325ba381904f9bb
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'ObjectiveDane\\RadiatorCalculator\\' => 33,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ObjectiveDane\\RadiatorCalculator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfdab62c9a6d509440325ba381904f9bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfdab62c9a6d509440325ba381904f9bb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
