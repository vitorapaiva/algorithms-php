<?php
function timeConversion($s)
{
    $arrayTime["AM"]["12"] = "00";
    $arrayTime["AM"]["01"] = "01";
    $arrayTime["AM"]["02"] = "02";
    $arrayTime["AM"]["03"] = "03";
    $arrayTime["AM"]["04"] = "04";
    $arrayTime["AM"]["05"] = "05";
    $arrayTime["AM"]["06"] = "06";
    $arrayTime["AM"]["07"] = "07";
    $arrayTime["AM"]["08"] = "08";
    $arrayTime["AM"]["09"] = "09";
    $arrayTime["AM"]["10"] = "10";
    $arrayTime["AM"]["11"] = "11";
    $arrayTime["PM"]["12"] = "12";
    $arrayTime["PM"]["01"] = "13";
    $arrayTime["PM"]["02"] = "14";
    $arrayTime["PM"]["03"] = "15";
    $arrayTime["PM"]["04"] = "16";
    $arrayTime["PM"]["05"] = "17";
    $arrayTime["PM"]["06"] = "18";
    $arrayTime["PM"]["07"] = "19";
    $arrayTime["PM"]["08"] = "20";
    $arrayTime["PM"]["09"] = "21";
    $arrayTime["PM"]["10"] = "22";
    $arrayTime["PM"]["11"] = "23";
    $final = substr($s, -2);
    $hour = substr($s, 0, 2);
    $minuteAndSecond = substr($s, 2, 6);
    return $arrayTime[$final][$hour] . $minuteAndSecond;

}