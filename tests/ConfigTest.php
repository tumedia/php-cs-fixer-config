<?php

namespace Tests;

use Tumedia\CS\Config;
use PHPUnit\Framework\TestCase;
use PhpCsFixer\Config as PhpCsFixerConfig;

class ConfigTest extends TestCase
{
    /** @test */
    public function it_should_load_custom_rules()
    {
        $config = Config::create();

        $this->assertArraySubset([
            '@PSR2' => true,
            'no_unused_imports' => true,
        ], $config->getRules(), true);
    }

    /** @test */
    public function just_the_tap()
    {
        $tappedInstance = null;

        $config = Config::tap(function ($config) use (&$tappedInstance) {
            $tappedInstance = $config;
        });

        $this->assertSame($config, $tappedInstance);

        $this->assertInstanceOf(Config::class, $config);

        $this->assertInstanceOf(PhpCsFixerConfig::class, $config);
    }
}
