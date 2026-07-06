<?php

$Data_Number_Format_toPrecisionNative = function($d, $num = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Number_Format_toPrecisionNative;
            return $Data_Number_Format_toPrecisionNative(...array_merge($__args, $more));
        };
    }
    return sprintf("%.{$d}g", $num);
};

$Data_Number_Format_toFixedNative = function($d, $num = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Number_Format_toFixedNative;
            return $Data_Number_Format_toFixedNative(...array_merge($__args, $more));
        };
    }
    return sprintf("%.{$d}F", $num);
};

$Data_Number_Format_toExponentialNative = function($d, $num = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Number_Format_toExponentialNative;
            return $Data_Number_Format_toExponentialNative(...array_merge($__args, $more));
        };
    }
    return sprintf("%.{$d}e", $num);
};

$Data_Number_Format_toString = function($num) {
    return strval($num);
};
