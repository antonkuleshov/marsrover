<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbec326e6363fb64a736d7d1dab4e29e6
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInitbec326e6363fb64a736d7d1dab4e29e6::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInitbec326e6363fb64a736d7d1dab4e29e6::$classMap;

        }, null, ClassLoader::class);
    }
}
