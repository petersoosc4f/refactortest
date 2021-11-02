<?php

class TestOrder extends \PHPUnit\Framework\TestCase
{

    public function testorder()
    {
        $this->expectNotToPerformAssertions();
        require_once('Procorder.php');
        $testtomb = [1, 2, 3, 4];
        $order = new Procorder($argc, $argv);
        $result = $order->process($testtomb);
    }
    public function testorderOnNotArray(){
        $this->expectNotToPerformAssertions();
        require_once('Procorder.php');
        $testtomb = 12345;
        $order = new Procorder($argc, $argv);

            $result = $order->process($testtomb);

    }


}