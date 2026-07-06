<?php

$Data_Array_ST_new = function() {
    return (object)["value" => []];
};

$Data_Array_ST_peekImpl = function($just, $nothing = null, $i = null, $xs = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_ST_peekImpl;
            return $Data_Array_ST_peekImpl(...array_merge($__args, $more));
        };
    }
    return ($i >= 0 && $i < count($xs->value)) ? $just($xs->value[$i]) : $nothing;
};

$Data_Array_ST_pokeImpl = function($i, $a = null, $xs = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_ST_pokeImpl;
            return $Data_Array_ST_pokeImpl(...array_merge($__args, $more));
        };
    }
    if ($i >= 0 && $i < count($xs->value)) {
        $xs->value[$i] = $a;
        return true;
    }
    return false;
};

$Data_Array_ST_lengthImpl = function($xs) {
    return count($xs->value);
};

$Data_Array_ST_popImpl = function($just, $nothing = null, $xs = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_ST_popImpl;
            return $Data_Array_ST_popImpl(...array_merge($__args, $more));
        };
    }
    return count($xs->value) > 0 ? $just(array_pop($xs->value)) : $nothing;
};

$Data_Array_ST_pushAllImpl = function($as, $xs = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_ST_pushAllImpl;
            return $Data_Array_ST_pushAllImpl(...array_merge($__args, $more));
        };
    }
    foreach ($as as $a) {
        $xs->value[] = $a;
    }
    return count($xs->value);
};

$Data_Array_ST_shiftImpl = function($just, $nothing = null, $xs = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_ST_shiftImpl;
            return $Data_Array_ST_shiftImpl(...array_merge($__args, $more));
        };
    }
    return count($xs->value) > 0 ? $just(array_shift($xs->value)) : $nothing;
};

$Data_Array_ST_unshiftAllImpl = function($as, $xs = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_ST_unshiftAllImpl;
            return $Data_Array_ST_unshiftAllImpl(...array_merge($__args, $more));
        };
    }
    array_unshift($xs->value, ...$as);
    return count($xs->value);
};

$Data_Array_ST_spliceImpl = function($i, $howMany = null, $bs = null, $xs = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_ST_spliceImpl;
            return $Data_Array_ST_spliceImpl(...array_merge($__args, $more));
        };
    }
    return array_splice($xs->value, $i, $howMany, $bs);
};

$Data_Array_ST_unsafeFreezeImpl = function($xs) {
    return $xs->value;
};

$Data_Array_ST_unsafeThawImpl = function($xs) {
    return (object)["value" => $xs];
};

$Data_Array_ST_freezeImpl = function($xs) {
    return $xs->value;
};

$Data_Array_ST_thawImpl = function($xs) {
    return (object)["value" => $xs];
};

$Data_Array_ST_cloneImpl = function($xs) {
    return (object)["value" => $xs->value];
};

$Data_Array_ST_sortByImpl = function($compare, $fromOrdering = null, $xs = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_ST_sortByImpl;
            return $Data_Array_ST_sortByImpl(...array_merge($__args, $more));
        };
    }
    usort($xs->value, function($a, $b) use ($compare, $fromOrdering) {
        return $fromOrdering($compare($a)($b));
    });
    return $xs;
};

$Data_Array_ST_toAssocArrayImpl = function($xs) {
    $n = count($xs->value);
    $as = [];
    for ($i = 0; $i < $n; $i++) {
        $as[] = (object)["value" => $xs->value[$i], "index" => $i];
    }
    return $as;
};

$Data_Array_ST_pushImpl = function($a, $xs = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_ST_pushImpl;
            return $Data_Array_ST_pushImpl(...array_merge($__args, $more));
        };
    }
    $xs->value[] = $a;
    return count($xs->value);
};
