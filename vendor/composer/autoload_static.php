<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb4f76d074b658ce911d2a5360d4cb604
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tubalmartin\\CssMin\\' => 19,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
        'I' => 
        array (
            'Intervention\\Httpauth\\' => 22,
            'Interop\\Container\\' => 18,
        ),
        'D' => 
        array (
            'Dwoo\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tubalmartin\\CssMin\\' => 
        array (
            0 => __DIR__ . '/..' . '/tubalmartin/cssmin/src',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
        'Intervention\\Httpauth\\' => 
        array (
            0 => __DIR__ . '/..' . '/intervention/httpauth/src/Intervention/Httpauth',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'Dwoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/dwoo/dwoo/lib/Dwoo',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Props\\' => 
            array (
                0 => __DIR__ . '/..' . '/mrclay/props-dic/src',
                1 => __DIR__ . '/..' . '/mrclay/props-dic/test',
            ),
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
        'J' => 
        array (
            'JSMin\\' => 
            array (
                0 => __DIR__ . '/..' . '/mrclay/jsmin-php/src',
            ),
        ),
    );

    public static $classMap = array (
        'HTTP_ConditionalGet' => __DIR__ . '/..' . '/mrclay/minify/lib/HTTP/ConditionalGet.php',
        'HTTP_Encoder' => __DIR__ . '/..' . '/mrclay/minify/lib/HTTP/Encoder.php',
        'Minify' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify.php',
        'Minify\\App' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/App.php',
        'Minify\\Config' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Config.php',
        'Minify\\JS\\JShrink' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/JS/JShrink.php',
        'Minify\\Logger\\LegacyHandler' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Logger/LegacyHandler.php',
        'Minify_Build' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Build.php',
        'Minify_CSS' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/CSS.php',
        'Minify_CSS_Compressor' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/CSS/Compressor.php',
        'Minify_CSS_UriRewriter' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/CSS/UriRewriter.php',
        'Minify_CSSmin' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/CSSmin.php',
        'Minify_CacheInterface' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/CacheInterface.php',
        'Minify_Cache_APC' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Cache/APC.php',
        'Minify_Cache_File' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Cache/File.php',
        'Minify_Cache_Memcache' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Cache/Memcache.php',
        'Minify_Cache_Null' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Cache/Null.php',
        'Minify_Cache_WinCache' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Cache/WinCache.php',
        'Minify_Cache_XCache' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Cache/XCache.php',
        'Minify_Cache_ZendPlatform' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Cache/ZendPlatform.php',
        'Minify_ClosureCompiler' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/ClosureCompiler.php',
        'Minify_ClosureCompiler_Exception' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/ClosureCompiler.php',
        'Minify_CommentPreserver' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/CommentPreserver.php',
        'Minify_ControllerInterface' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/ControllerInterface.php',
        'Minify_Controller_Base' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Controller/Base.php',
        'Minify_Controller_Files' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Controller/Files.php',
        'Minify_Controller_Groups' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Controller/Groups.php',
        'Minify_Controller_MinApp' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Controller/MinApp.php',
        'Minify_Controller_Page' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Controller/Page.php',
        'Minify_DebugDetector' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/DebugDetector.php',
        'Minify_Env' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Env.php',
        'Minify_HTML' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/HTML.php',
        'Minify_HTML_Helper' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/HTML/Helper.php',
        'Minify_ImportProcessor' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/ImportProcessor.php',
        'Minify_JS_ClosureCompiler' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/JS/ClosureCompiler.php',
        'Minify_JS_ClosureCompiler_Exception' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/JS/ClosureCompiler.php',
        'Minify_LessCssSource' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/LessCssSource.php',
        'Minify_Lines' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Lines.php',
        'Minify_NailgunClosureCompiler' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/NailgunClosureCompiler.php',
        'Minify_Packer' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Packer.php',
        'Minify_ScssCssSource' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/ScssCssSource.php',
        'Minify_ServeConfiguration' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/ServeConfiguration.php',
        'Minify_Source' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Source.php',
        'Minify_SourceInterface' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/SourceInterface.php',
        'Minify_SourceSet' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/SourceSet.php',
        'Minify_Source_Factory' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Source/Factory.php',
        'Minify_Source_FactoryException' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Source/FactoryException.php',
        'Minify_YUICompressor' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/YUICompressor.php',
        'MrClay\\Cli' => __DIR__ . '/..' . '/mrclay/minify/lib/MrClay/Cli.php',
        'MrClay\\Cli\\Arg' => __DIR__ . '/..' . '/mrclay/minify/lib/MrClay/Cli/Arg.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb4f76d074b658ce911d2a5360d4cb604::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb4f76d074b658ce911d2a5360d4cb604::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb4f76d074b658ce911d2a5360d4cb604::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitb4f76d074b658ce911d2a5360d4cb604::$classMap;

        }, null, ClassLoader::class);
    }
}
