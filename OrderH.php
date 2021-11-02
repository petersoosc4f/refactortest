<?php

class OrderH 
{
    /************ Formating header */
    function proch($ordersH)
    {
        /************ Create equal length */
        foreach ($ordersH as $h) {
            echo str_pad($h, 20);
        }
        echo "\n";

        /************ Create divider under the header */
        foreach ($ordersH as $h) {
            echo str_repeat('=', 20);
        }
        echo "\n";

        /************ Return width formated header */
        return $ordersH;
    }
}