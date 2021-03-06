<?php

namespace yiiunit\framework\base;

use yiiunit\TestCase;

/**
 * @group base
 */
class ModuleTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->mockApplication();
    }

    public function testControllerPath()
    {
        $module = new TestModule('test');
        $this->assertEquals('yiiunit\framework\base\controllers', $module->controllerNamespace);
        $this->assertEquals(__DIR__ . '/controllers', $module->controllerPath);
    }
}

class TestModule extends \yii\base\Module
{

}