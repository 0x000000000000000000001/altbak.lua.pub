<?php

$Data_DateTime_createUTC = function($y, $mo, $d, $h, $m, $s, $ms) {
    $dt = new \DateTime('now', new \DateTimeZone('UTC'));
    $dt->setDate($y, $mo + 1, $d);
    $dt->setTime($h, $m, $s, $ms * 1000);
    return (float)$dt->getTimestamp() * 1000 + (int)$dt->format('v');
};

$Data_DateTime_calcDiff = function($rec1, $rec2 = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_DateTime_calcDiff;
            return $Data_DateTime_calcDiff(...array_merge($__args, $more));
        };
    }
    global $Data_DateTime_createUTC;
    $msUTC1 = $Data_DateTime_createUTC($rec1->year, $rec1->month - 1, $rec1->day, $rec1->hour, $rec1->minute, $rec1->second, $rec1->millisecond);
    $msUTC2 = $Data_DateTime_createUTC($rec2->year, $rec2->month - 1, $rec2->day, $rec2->hour, $rec2->minute, $rec2->second, $rec2->millisecond);
    return $msUTC1 - $msUTC2;
};

$Data_DateTime_adjustImpl = function($just, $nothing = null, $offset = null, $rec = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_DateTime_adjustImpl;
            return $Data_DateTime_adjustImpl(...array_merge($__args, $more));
        };
    }
    global $Data_DateTime_createUTC;
    $msUTC = $Data_DateTime_createUTC($rec->year, $rec->month - 1, $rec->day, $rec->hour, $rec->minute, $rec->second, $rec->millisecond);
    $targetMs = $msUTC + $offset;
    
    $seconds = floor($targetMs / 1000);
    $ms = $targetMs - ($seconds * 1000);
    
    try {
        $dt = new \DateTime("@" . $seconds, new \DateTimeZone('UTC'));
        return $just((object)[
            'year' => (int)$dt->format('Y'),
            'month' => (int)$dt->format('n'),
            'day' => (int)$dt->format('j'),
            'hour' => (int)$dt->format('G'),
            'minute' => (int)$dt->format('i'),
            'second' => (int)$dt->format('s'),
            'millisecond' => (int)$ms
        ]);
    } catch (\Exception $e) {
        return $nothing;
    }
};
