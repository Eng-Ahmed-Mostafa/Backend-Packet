<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit565fd1630696810901813c9c9e1ffdfd
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'DBHash\\Session\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DBHash\\Session\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit565fd1630696810901813c9c9e1ffdfd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit565fd1630696810901813c9c9e1ffdfd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit565fd1630696810901813c9c9e1ffdfd::$classMap;

        }, null, ClassLoader::class);
    }
}
