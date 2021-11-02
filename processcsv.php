<?php
class Csv{
    /************* csv proccess */
    function proccsv($name){
        $orders = [];
        $ordersH = [];
        $arrays=[];
        $content = file($name);
        $row = 1;
        /*************** check file exits and also check content*/
        if (($handle = fopen($name, 'r')) !== false && (empty($content) || count($content) > 1 )) {
            
            /*************** go through on csv*/
            while (($data = fgetcsv($handle)) !== false) {
                /*************** Separate header from data */
                if ($row == 1) {
                    $ordersH = $data;
                } else {
                    $o = [];
                    /*************** Process rows */
                    for ($i = 0; $i < count($ordersH); $i++) {
                        $o[$ordersH[$i]] = $data[$i];
                    }
                    $orders[] = $o;
                }
                $row++;
            }
            /***************  Exit from file*/
            fclose($handle);
        }
        else{
            echo "Invalid csv file name or empty csv!";
            exit(1);
        }
        /************** Give back two arrays in one */
        array_push($arrays,$orders);
        array_push($arrays,$ordersH);
        return $arrays;

    }
   
}
