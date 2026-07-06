<?php

$Data_Array_ST_Partial_peekImpl = function($i, $xs = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_ST_Partial_peekImpl;
            return $Data_Array_ST_Partial_peekImpl(...array_merge($__args, $more));
        };
    }
    return $xs->value[$i];
};

$Data_Array_ST_Partial_pokeImpl = function($i, $a = null, $xs = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_ST_Partial_pokeImpl;
            return $Data_Array_ST_Partial_pokeImpl(...array_merge($__args, $more));
        };
    }
    $xs->value[$i] = $a;
    return null; // pure purescript FFI typically returns undefined/Unit here if not STFn, wait, pokeImpl here is an STFn! STFn3 doesn't return anything useful?
};
