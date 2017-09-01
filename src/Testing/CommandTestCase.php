<?php
namespace CLIFramework\Testing;

use PHPUnit\Framework\TestCase;

abstract class CommandTestCase extends TestCase
{
    public $app;

    public $outputBufferingActive = false;

    abstract public static function setupApplication();

    public function getApplication()
    {
        return $this->app;
    }

    public function setUp()
    {
        if ($this->outputBufferingActive) {
            ob_start();
        }
        $this->app = static::setupApplication();
    }

    public function tearDown()
    {
        $this->app = null;
        if ($this->outputBufferingActive) {
            ob_end_clean();
        }
    }

    public function runCommand($args)
    {
        if (is_string($args)) {
            $args = Parser::getArguments($args);
        }
        return $this->app->run($args);
    }
}
