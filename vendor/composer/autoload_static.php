<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc80b5abe3ba9325f580b4c75af2b707b
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc80b5abe3ba9325f580b4c75af2b707b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc80b5abe3ba9325f580b4c75af2b707b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
