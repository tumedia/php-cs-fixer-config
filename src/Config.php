<?php

namespace Tumedia\CS;

use Closure;
use PhpCsFixer\Config as BaseConfig;

class Config extends BaseConfig
{
    /**
     * Creates a new config instance and then invokes the given callback with
     * the new instance as the only argument.
     *
     * @param  \Closure  $callback
     * @return \Tumedia\CS\Config
     */
    public static function tap(Closure $callback)
    {
        $config = static::create();

        $callback($config);

        return $config;
    }

    /**
     * {@inheritdoc}
     */
    public function getRules()
    {
        return require __DIR__.'/rules.php';
    }
}
