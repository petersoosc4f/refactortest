<?php
class Sorting extends Csv{

    public function sort($orders){
        /************ Sort orders by priority */
        usort($orders , function ($a, $b) {
            $pc = -1 * ($a['priority'] <=> $b['priority']);
            return $pc == 0 ? $a['created_at'] <=> $b['created_at'] : $pc;
        });

        /************ Return with sorted orders */
        return $orders;
    }
}
