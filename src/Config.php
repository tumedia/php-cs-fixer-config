<?php

namespace Tumedia\CS;

use Closure;
use PhpCsFixer\Config as BaseConfig;

class Config extends BaseConfig
{
    /**
     * Creates a new Config instance and then invokes a callback with the new
     * instance and its finder instance.
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
