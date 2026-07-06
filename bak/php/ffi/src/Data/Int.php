<?php

$Data_Int_fromNumberImpl = function($just, $nothing = null, $n = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Int_fromNumberImpl;
            return $Data_Int_fromNumberImpl(...array_merge($__args, $more));
        };
    }
    // JS bitwise OR 0 limits to 32-bit signed integer. 
    // PHP integers are typically 64-bit, but to match JS semantics we can just cast to int.
    return (intval($n) == $n) ? $just(intval($n)) : $nothing;
};

$Data_Int_toNumber = function($n) {
    return floatval($n);
};

$Data_Int_fromStringAsImpl = function($just, $nothing = null, $radix = null, $s = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Int_fromStringAsImpl;
            return $Data_Int_fromStringAsImpl(...array_merge($__args, $more));
        };
    }
    
    if ($radix < 11) {
        $digits = "[0-" . ($radix - 1) . "]";
    } else if ($radix === 11) {
        $digits = "[0-9a]";
    } else {
        $digits = "[0-9a-" . chr(86 + $radix) . "]";
    }
    $pattern = "/^[\+\-]?" . $digits . "+$/i";

    if (preg_match($pattern, $s)) {
        $i = intval(base_convert($s, $radix, 10));
        return $just($i);
    } else {
        return $nothing;
    }
};

$Data_Int_toStringAs = function($radix, $i = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Int_toStringAs;
            return $Data_Int_toStringAs(...array_merge($__args, $more));
        };
    }
    return base_convert($i, 10, $radix);
};

$Data_Int_quot = function($x, $y = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Int_quot;
            return $Data_Int_quot(...array_merge($__args, $more));
        };
    }
    return intdiv($x, $y);
};

$Data_Int_rem = function($x, $y = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Int_rem;
            return $Data_Int_rem(...array_merge($__args, $more));
        };
    }
    return $x % $y;
};

$Data_Int_pow = function($x, $y = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Int_pow;
            return $Data_Int_pow(...array_merge($__args, $more));
        };
    }
    return intval(pow($x, $y));
};
