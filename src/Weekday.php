<?php
class Weekday
{

    // function addDayAndMonth($day, $month)
    // {
    //     $day_and_month = $day + $month;
    //     if ($day_and_month > 6) {
    //         $for_step_3 = $day_and_month % 7;
    //     } else {
    //         $for_step_3 = $day_and_month;
    //     }
    //     return $for_step_3;
    // }
    function calculateDay($month, $day, $year)
    {
        $day_of_week = date("l", mktime(0,0,0, $month, $day, $year));
        return $day_of_week;
    }
}


 ?>
