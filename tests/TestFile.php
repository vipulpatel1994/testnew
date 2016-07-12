<?php
/**
 * Created by PhpStorm.
 * User: webwerks
 * Date: 12/7/16
 * Time: 11:05 AM
 * @author vipul patel
 */
use Vip;

class TestFile extends PHPUnit_Framework_TestCase {

    public function testNachHasCheese()
    {
        $nacho = new Nacho;
        $this->assertTrue($nacho->hasCheese());
    }

}