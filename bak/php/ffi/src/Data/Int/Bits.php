<?php

$Data_Int_Bits_and = function($n1, $n2 = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Int_Bits_and;
            return $Data_Int_Bits_and(...array_merge($__args, $more));
        };
    }
    return $n1 & $n2;
};

$Data_Int_Bits_or = function($n1, $n2 = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Int_Bits_or;
            return $Data_Int_Bits_or(...array_merge($__args, $more));
        };
    }
    return $n1 | $n2;
};

$Data_Int_Bits_xor = function($n1, $n2 = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Int_Bits_xor;
            return $Data_Int_Bits_xor(...array_merge($__args, $more));
        };
    }
    return $n1 ^ $n2;
};

$Data_Int_Bits_shl = function($n1, $n2 = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Int_Bits_shl;
            return $Data_Int_Bits_shl(...array_merge($__args, $more));
        };
    }
    return $n1 << $n2;
};

$Data_Int_Bits_shr = function($n1, $n2 = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Int_Bits_shr;
            return $Data_Int_Bits_shr(...array_merge($__args, $more));
        };
    }
    return $n1 >> $n2;
};

$Data_Int_Bits_zshr = function($n1, $n2 = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Int_Bits_zshr;
            return $Data_Int_Bits_zshr(...array_merge($__args, $more));
        };
    }
    // PHP doesn't have >>> operator. Emulate 32-bit zero-fill right shift.
    return ($n1 >> $n2) & (0x7fffffff >> ($n2 - 1));
};

$Data_Int_Bits_complement = function($n) {
    return ~$n;
};
