<?php

class Procorder 
{
    public $argc;
    public $argv;
    
    function __construct($argc, $argv){
        $this->argc = $argc;
        $this->argv = $argv;
    }

    function process($neworder,$ordersH)
    {
        /***************  Check parameters quantity */
        if ($this->argc != 2) {
            echo 'Ambiguous number of parameters!';
            exit(1);
        }
        /***************  Check json format */
        if (($stock = json_decode($this->argv[1])) == null) {
            echo 'Invalid json!';
            exit(1);
        }
        
        /***************   Iterate array */
        foreach ($neworder as $item) {
            /***************  Check item product id */
            if ($stock->{$item['product_id']} >= $item['quantity']) {
                /***************   Iterate array */
                foreach ($ordersH as $h) {
                    /*************** check rows header */
                    if ($h === 'priority') {
                        /***************  set text instead of number */
                        switch($item['priority']){
                            case 1:
                                $text = 'low';
                                break;
                            case 2:
                                $text = 'medium';
                                break;
                            case 3:
                                $text = 'high';
                                break;
                        }
                        /*************** set equal length priority column */
                        echo str_pad($text, 20);
                    } else {
                        /*************** set equal length data column */
                        echo str_pad($item[$h], 20);
                    }
                }
                /*************** create  line break*/
                echo "\n";
            }
        }
    }
}