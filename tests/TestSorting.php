<?php

class TestSorting extends \PHPUnit\Framework\TestCase
{
    public function testSortOnEmpty()
    {
        $this->expectNotToPerformAssertions();
        require_once('sorting.php');
        $testtomb = [];
        $sort = new Sorting();
        $result = $sort->sort($testtomb);
    }

    public function testSortOnNotArray()
    {
        $this->expectNotToPerformAssertions();
        require_once('sorting.php');
        $testtomb = 123;
        $sort = new Sorting();
        $result = $sort->sort($testtomb);


    }

    public function testArray()
    {
        $this->expectNotToPerformAssertions();
        require_once('sorting.php');
        $testarray = [];
        for ($i = 0; $i < 100; $i++)
        {
            array_push($testarray, rand(0, 100));
        }
        $sort = new Sorting();

        $result = $sort->sort($testtomb);


    }

}