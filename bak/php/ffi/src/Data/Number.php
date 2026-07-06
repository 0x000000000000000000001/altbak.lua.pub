<?php

$Data_Number_nan = NAN;
$Data_Number_isNaN = function($n) {
    return is_nan($n);
};

$Data_Number_infinity = INF;
$Data_Number_isFinite = function($n) {
    return is_finite($n);
};

$Data_Number_fromStringImpl = function($str, $isFinite = null, $just = null, $nothing = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Number_fromStringImpl;
            return $Data_Number_fromStringImpl(...array_merge($__args, $more));
        };
    }
    // JS parseFloat behavior: parse leading float
    if (preg_match('/^[+-]?(?:(?:\d+\.?\d*)|(?:\.\d+))(?:[eE][+-]?\d+)?/', trim($str), $matches)) {
        $num = floatval($matches[0]);
        if ($isFinite($num)) {
            return $just($num);
        }
    }
    return $nothing;
};

$Data_Number_abs = function($n) { return abs($n); };
$Data_Number_acos = function($n) { return acos($n); };
$Data_Number_asin = function($n) { return asin($n); };
$Data_Number_atan = function($n) { return atan($n); };

$Data_Number_atan2 = function($y, $x = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Number_atan2;
            return $Data_Number_atan2(...array_merge($__args, $more));
        };
    }
    return atan2($y, $x);
};

$Data_Number_ceil = function($n) { return ceil($n); };
$Data_Number_cos = function($n) { return cos($n); };
$Data_Number_exp = function($n) { return exp($n); };
$Data_Number_floor = function($n) { return floor($n); };
$Data_Number_log = function($n) { return log($n); };

$Data_Number_max = function($n1, $n2 = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Number_max;
            return $Data_Number_max(...array_merge($__args, $more));
        };
    }
    if (is_nan($n1) || is_nan($n2)) return NAN;
    return max($n1, $n2);
};

$Data_Number_min = function($n1, $n2 = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Number_min;
            return $Data_Number_min(...array_merge($__args, $more));
        };
    }
    if (is_nan($n1) || is_nan($n2)) return NAN;
    return min($n1, $n2);
};

$Data_Number_pow = function($n, $p = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Number_pow;
            return $Data_Number_pow(...array_merge($__args, $more));
        };
    }
    return pow($n, $p);
};

$Data_Number_remainder = function($n, $m = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Number_remainder;
            return $Data_Number_remainder(...array_merge($__args, $more));
        };
    }
    return fmod($n, $m);
};

$Data_Number_round = function($n) { return round($n); };

$Data_Number_sign = function($x) {
    if (is_nan($x)) return NAN;
    if ($x === 0.0 || $x === -0.0) return $x;
    return $x < 0 ? -1.0 : 1.0;
};

$Data_Number_sin = function($n) { return sin($n); };
$Data_Number_sqrt = function($n) { return sqrt($n); };
$Data_Number_tan = function($n) { return tan($n); };

$Data_Number_trunc = function($x) {
    return $x < 0 ? ceil($x) : floor($x);
};
