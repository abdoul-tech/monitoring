<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3dc99e364dc7219274a60a3069e61bec
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3dc99e364dc7219274a60a3069e61bec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3dc99e364dc7219274a60a3069e61bec::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}