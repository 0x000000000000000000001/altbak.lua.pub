<?php

$Data_Function_Uncurried_runFn2 = function($fn, $a = null, $b = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Function_Uncurried_runFn2;
            return $Data_Function_Uncurried_runFn2(...array_merge($__args, $more));
        };
    }
    return $fn($a, $b);
};
$Data_Function_Uncurried_runFn3 = function($fn, $a = null, $b = null, $c = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Function_Uncurried_runFn3;
            return $Data_Function_Uncurried_runFn3(...array_merge($__args, $more));
        };
    }
    return $fn($a, $b, $c);
};