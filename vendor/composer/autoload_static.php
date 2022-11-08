<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a60fe29b90100d5685d532b78883657
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Valitron\\' => 9,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Valitron\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/valitron/src/Valitron',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a60fe29b90100d5685d532b78883657::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a60fe29b90100d5685d532b78883657::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2a60fe29b90100d5685d532b78883657::$classMap;

        }, null, ClassLoader::class);
    }
}
