<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit00e634ef2b07a52c1caeff5bbbbdef1a
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit00e634ef2b07a52c1caeff5bbbbdef1a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit00e634ef2b07a52c1caeff5bbbbdef1a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
