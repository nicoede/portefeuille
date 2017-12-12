<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit035efde991efcd72a6808d44642c4c6c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit035efde991efcd72a6808d44642c4c6c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit035efde991efcd72a6808d44642c4c6c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
