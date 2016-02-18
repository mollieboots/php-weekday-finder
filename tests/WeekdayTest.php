<?php
require_once "src/Weekday.php";

class WeekdayTest extends PHPUnit_Framework_TestCase
{
    // function test_addDayAndMonth()
    // {
    //     $test_weekday = new Weekday;
    //     $input_day = 28;
    //     $input_month = 6;
    //
    //     $result = $test_weekday->addDayAndMonth($input_day, $input_month);
    //
    //     $this->assertEquals(6, $result);
    // }
    function test_calculateDay()
    {
        $test_weekday = new Weekday;
        $input_month = 7;
        $input_day = 4;
        $input_year = 1776;

        $result = $test_weekday->calculateDay($input_month, $input_day, $input_year);

        $this->assertEquals("Thursday", $result);
    }
}

 ?>
