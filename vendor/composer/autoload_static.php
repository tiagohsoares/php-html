<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4bef97210b417908501e82ac16e79b37
{
    public static $files = array (
        'aff3f3d4f43db276588467db9bc0e06f' => __DIR__ . '/..' . '/canducci/cep/src/Canducci/Cep/Helpers/cep_helper.php',
        '3946b5b20890af3b27231acdf0dff15b' => __DIR__ . '/..' . '/canducci/cep/src/Canducci/Cep/Helpers/uf_helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Canducci\\Cep\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Canducci\\Cep\\' => 
        array (
            0 => __DIR__ . '/..' . '/canducci/cep/src/Canducci/Cep',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4bef97210b417908501e82ac16e79b37::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4bef97210b417908501e82ac16e79b37::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4bef97210b417908501e82ac16e79b37::$classMap;

        }, null, ClassLoader::class);
    }
}
