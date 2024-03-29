<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitddeda76f390368103e8aad01766fd593
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ReCaptcha\\ReCaptcha' => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha/ReCaptcha.php',
        'ReCaptcha\\RequestMethod' => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha/RequestMethod.php',
        'ReCaptcha\\RequestMethod\\Curl' => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha/RequestMethod/Curl.php',
        'ReCaptcha\\RequestMethod\\CurlPost' => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha/RequestMethod/CurlPost.php',
        'ReCaptcha\\RequestMethod\\Post' => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha/RequestMethod/Post.php',
        'ReCaptcha\\RequestMethod\\Socket' => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha/RequestMethod/Socket.php',
        'ReCaptcha\\RequestMethod\\SocketPost' => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha/RequestMethod/SocketPost.php',
        'ReCaptcha\\RequestParameters' => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha/RequestParameters.php',
        'ReCaptcha\\Response' => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha/Response.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitddeda76f390368103e8aad01766fd593::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitddeda76f390368103e8aad01766fd593::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitddeda76f390368103e8aad01766fd593::$classMap;

        }, null, ClassLoader::class);
    }
}
