<?php

$Data_Date_createDate = function($y, $m, $d) {
    $dt = new \DateTime('now', new \DateTimeZone('UTC'));
    $dt->setDate($y, $m + 1, $d);
    $dt->setTime(0, 0, 0, 0);
    return $dt;
};

$Data_Date_canonicalDateImpl = function($ctor, $y = null, $m = null, $d = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Date_canonicalDateImpl;
            return $Data_Date_canonicalDateImpl(...array_merge($__args, $more));
        };
    }
    global $Data_Date_createDate;
    $date = $Data_Date_createDate($y, $m - 1, $d);
    return $ctor
        ((int)$date->format('Y'))
        ((int)$date->format('n'))
        ((int)$date->format('j'));
};

$Data_Date_calcWeekday = function($y, $m = null, $d = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Date_calcWeekday;
            return $Data_Date_calcWeekday(...array_merge($__args, $more));
        };
    }
    global $Data_Date_createDate;
    $date = $Data_Date_createDate($y, $m - 1, $d);
    return (int)$date->format('w'); // 0 (for Sunday) through 6 (for Saturday)
};

$Data_Date_calcDiff = function($y1, $m1 = null, $d1 = null, $y2 = null, $m2 = null, $d2 = null) {
    if (func_num_args() < 6) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Date_calcDiff;
            return $Data_Date_calcDiff(...array_merge($__args, $more));
        };
    }
    global $Data_Date_createDate;
    $dt1 = $Data_Date_createDate($y1, $m1 - 1, $d1);
    $dt2 = $Data_Date_createDate($y2, $m2 - 1, $d2);
    // returns diff in milliseconds
    return ($dt1->getTimestamp() - $dt2->getTimestamp()) * 1000;
};
