<?php

$Foreign_Object_ST_new = function() {
    return new \stdClass();
};

$Foreign_Object_ST_peekImpl = function($just, $nothing = null, $k = null, $m = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Foreign_Object_ST_peekImpl;
            return $Foreign_Object_ST_peekImpl(...array_merge($__args, $more));
        };
    }
    return function() use ($just, $nothing, $k, $m) {
        return property_exists($m, $k) ? $just($m->$k) : $nothing;
    };
};

$Foreign_Object_ST_poke = function($k, $v = null, $m = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Foreign_Object_ST_poke;
            return $Foreign_Object_ST_poke(...array_merge($__args, $more));
        };
    }
    return function() use ($k, $v, $m) {
        $m->$k = $v;
        return $m;
    };
};

$Foreign_Object_ST_delete = function($k, $m = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Foreign_Object_ST_delete;
            return $Foreign_Object_ST_delete(...array_merge($__args, $more));
        };
    }
    return function() use ($k, $m) {
        unset($m->$k);
        return $m;
    };
};
