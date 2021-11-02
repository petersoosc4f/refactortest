<?php

class TestOrderH extends \PHPUnit\Framework\TestCase
{
    public function testorderHOnEmpty()
    {
        $this->expectNotToPerformAssertions();
        require_once('OrderH.php');
        $testtomb = [];
        $orderh = new OrderH();
        $result = $orderh->proch($testtomb);
    }

    public function testorderHOnNotArray()
    {
        $this->expectNotToPerformAssertions();
        require_once('OrderH.php');
        $testtomb = 123;
        $orderh = new OrderH();
        $result = $orderh->proch($testtomb);
    }

    public function testorderH()
    {
        $this->expectNotToPerformAssertions();
        require_once('OrderH.php');
        $testtomb = ['asd', 'asd1'];
        $orderh = new OrderH();
        $result = $orderh->proch($testtomb);


    }


}