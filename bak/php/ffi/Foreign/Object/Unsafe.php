<?php

$Foreign_Object_Unsafe_unsafeIndex = function($m, $k = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Foreign_Object_Unsafe_unsafeIndex;
            return $Foreign_Object_Unsafe_unsafeIndex(...array_merge($__args, $more));
        };
    }
    return $m->$k;
};
