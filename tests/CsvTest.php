<?php

class CsvTest extends \PHPUnit\Framework\TestCase{
    public function testCsv(){
        $this->expectNotToPerformAssertions();
        require_once('processcsv.php');
        $name = "orders.csv";
        $csv = new Csv();
        $result = $csv->proccsv($name);
    }
    public function testEmptyCsv(){
        $this->expectNotToPerformAssertions();
        require_once('processcsv.php');
        $name = "";
        $csv = new Csv();
        $result = $csv->proccsv($name);
    }
    public function passNotCsv(){
        $this->expectNotToPerformAssertions();
        require_once('processcsv.php');
        $csv = new Csv();
        $result = $csv->proccsv('dummy.pdf');
    }
    public function testCsvOnSpecChars(){
        $this->expectNotToPerformAssertions();
        require_once('processcsv.php');
        $csv = new Csv();
        $result = $csv->proccsv('dummyáé@.pdf');
    }
}