<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitae0a1b878d23a78d70894206f12dc768 {
    public static $classMap = array(
        'DB'                => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
        'DBTransaction'     => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
        'MeekroDB'          => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
        'MeekroDBEval'      => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
        'MeekroDBException' => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
        'MeekroDBWalk'      => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
        'WhereClause'       => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
    );

    public static function getInitializer(ClassLoader $loader) {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitae0a1b878d23a78d70894206f12dc768::$classMap;
        }, null, ClassLoader::class);
    }
}
