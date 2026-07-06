<?php

$Data_Array_rangeImpl = function($start, $end = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_rangeImpl;
            return $Data_Array_rangeImpl(...array_merge($__args, $more));
        };
    }
    $step = $start > $end ? -1 : 1;
    $result = [];
    $i = $start;
    while ($i !== $end) {
        $result[] = $i;
        $i += $step;
    }
    $result[] = $i;
    return $result;
};

$Data_Array_replicateImpl = function($count, $value = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_replicateImpl;
            return $Data_Array_replicateImpl(...array_merge($__args, $more));
        };
    }
    if ($count < 1) return [];
    return array_fill(0, $count, $value);
};

$Data_Array_fromFoldableImpl = function($foldr, $xs = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_fromFoldableImpl;
            return $Data_Array_fromFoldableImpl(...array_merge($__args, $more));
        };
    }
    
    $emptyList = new \stdClass();
    $curryCons = function($head) {
        return function($tail) use ($head) {
            $obj = new \stdClass();
            $obj->head = $head;
            $obj->tail = $tail;
            return $obj;
        };
    };
    
    $listToArray = function($list) use ($emptyList) {
        $result = [];
        $xs = $list;
        while ($xs !== $emptyList) {
            $result[] = $xs->head;
            $xs = $xs->tail;
        }
        return $result;
    };
    
    return $listToArray($foldr($curryCons)($emptyList)($xs));
};

$Data_Array_length = function($xs) {
    return count($xs);
};

$Data_Array_unconsImpl = function($empty, $next = null, $xs = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_unconsImpl;
            return $Data_Array_unconsImpl(...array_merge($__args, $more));
        };
    }
    if (count($xs) === 0) return $empty((object)[]);
    return $next($xs[0])(array_slice($xs, 1));
};

$Data_Array_indexImpl = function($just, $nothing = null, $xs = null, $i = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_indexImpl;
            return $Data_Array_indexImpl(...array_merge($__args, $more));
        };
    }
    return ($i < 0 || $i >= count($xs)) ? $nothing : $just($xs[$i]);
};

$Data_Array_findMapImpl = function($nothing, $isJust = null, $f = null, $xs = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_findMapImpl;
            return $Data_Array_findMapImpl(...array_merge($__args, $more));
        };
    }
    foreach ($xs as $x) {
        $result = $f($x);
        if ($isJust($result)) return $result;
    }
    return $nothing;
};

$Data_Array_findIndexImpl = function($just, $nothing = null, $f = null, $xs = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_findIndexImpl;
            return $Data_Array_findIndexImpl(...array_merge($__args, $more));
        };
    }
    foreach ($xs as $i => $x) {
        if ($f($x)) return $just($i);
    }
    return $nothing;
};

$Data_Array_findLastIndexImpl = function($just, $nothing = null, $f = null, $xs = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_findLastIndexImpl;
            return $Data_Array_findLastIndexImpl(...array_merge($__args, $more));
        };
    }
    for ($i = count($xs) - 1; $i >= 0; $i--) {
        if ($f($xs[$i])) return $just($i);
    }
    return $nothing;
};

$Data_Array__insertAt = function($just, $nothing = null, $i = null, $a = null, $l = null) {
    if (func_num_args() < 5) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array__insertAt;
            return $Data_Array__insertAt(...array_merge($__args, $more));
        };
    }
    if ($i < 0 || $i > count($l)) return $nothing;
    $l1 = $l;
    array_splice($l1, $i, 0, [$a]);
    return $just($l1);
};

$Data_Array__deleteAt = function($just, $nothing = null, $i = null, $l = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array__deleteAt;
            return $Data_Array__deleteAt(...array_merge($__args, $more));
        };
    }
    if ($i < 0 || $i >= count($l)) return $nothing;
    $l1 = $l;
    array_splice($l1, $i, 1);
    return $just($l1);
};

$Data_Array__updateAt = function($just, $nothing = null, $i = null, $a = null, $l = null) {
    if (func_num_args() < 5) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array__updateAt;
            return $Data_Array__updateAt(...array_merge($__args, $more));
        };
    }
    if ($i < 0 || $i >= count($l)) return $nothing;
    $l1 = $l;
    $l1[$i] = $a;
    return $just($l1);
};

$Data_Array_reverse = function($l) {
    return array_reverse($l);
};

$Data_Array_concat = function($xss) {
    if (count($xss) === 0) return [];
    return array_merge(...$xss);
};

$Data_Array_filterImpl = function($f, $xs = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_filterImpl;
            return $Data_Array_filterImpl(...array_merge($__args, $more));
        };
    }
    $res = [];
    foreach ($xs as $x) {
        if ($f($x)) $res[] = $x;
    }
    return $res;
};

$Data_Array_partitionImpl = function($f, $xs = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_partitionImpl;
            return $Data_Array_partitionImpl(...array_merge($__args, $more));
        };
    }
    $yes = [];
    $no = [];
    foreach ($xs as $x) {
        if ($f($x)) $yes[] = $x;
        else $no[] = $x;
    }
    return (object)["yes" => $yes, "no" => $no];
};

$Data_Array_scanlImpl = function($f, $b = null, $xs = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_scanlImpl;
            return $Data_Array_scanlImpl(...array_merge($__args, $more));
        };
    }
    $acc = $b;
    $out = [];
    foreach ($xs as $x) {
        $acc = $f($acc)($x);
        $out[] = $acc;
    }
    return $out;
};

$Data_Array_scanrImpl = function($f, $b = null, $xs = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_scanrImpl;
            return $Data_Array_scanrImpl(...array_merge($__args, $more));
        };
    }
    $len = count($xs);
    $acc = $b;
    $out = array_fill(0, $len, null);
    for ($i = $len - 1; $i >= 0; $i--) {
        $acc = $f($xs[$i])($acc);
        $out[$i] = $acc;
    }
    return $out;
};

$Data_Array_sortByImpl = function($compare, $fromOrdering = null, $xs = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_sortByImpl;
            return $Data_Array_sortByImpl(...array_merge($__args, $more));
        };
    }
    $out = $xs;
    usort($out, function($a, $b) use ($compare, $fromOrdering) {
        return $fromOrdering($compare($a)($b));
    });
    return $out;
};

$Data_Array_sliceImpl = function($s, $e = null, $l = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_sliceImpl;
            return $Data_Array_sliceImpl(...array_merge($__args, $more));
        };
    }
    return array_slice($l, $s, $e - $s);
};

$Data_Array_zipWithImpl = function($f, $xs = null, $ys = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_zipWithImpl;
            return $Data_Array_zipWithImpl(...array_merge($__args, $more));
        };
    }
    $l = min(count($xs), count($ys));
    $result = [];
    for ($i = 0; $i < $l; $i++) {
        $result[] = $f($xs[$i])($ys[$i]);
    }
    return $result;
};

$Data_Array_anyImpl = function($p, $xs = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_anyImpl;
            return $Data_Array_anyImpl(...array_merge($__args, $more));
        };
    }
    foreach ($xs as $x) {
        if ($p($x)) return true;
    }
    return false;
};

$Data_Array_allImpl = function($p, $xs = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_allImpl;
            return $Data_Array_allImpl(...array_merge($__args, $more));
        };
    }
    foreach ($xs as $x) {
        if (!$p($x)) return false;
    }
    return true;
};

$Data_Array_unsafeIndexImpl = function($xs, $n = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_unsafeIndexImpl;
            return $Data_Array_unsafeIndexImpl(...array_merge($__args, $more));
        };
    }
    return $xs[$n];
};
