<?php

$Data_Array_NonEmpty_Internal_foldr1Impl = function($f, $xs = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_NonEmpty_Internal_foldr1Impl;
            return $Data_Array_NonEmpty_Internal_foldr1Impl(...array_merge($__args, $more));
        };
    }
    $acc = $xs[count($xs) - 1];
    for ($i = count($xs) - 2; $i >= 0; $i--) {
        $acc = $f($xs[$i])($acc);
    }
    return $acc;
};

$Data_Array_NonEmpty_Internal_foldl1Impl = function($f, $xs = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_NonEmpty_Internal_foldl1Impl;
            return $Data_Array_NonEmpty_Internal_foldl1Impl(...array_merge($__args, $more));
        };
    }
    $acc = $xs[0];
    $len = count($xs);
    for ($i = 1; $i < $len; $i++) {
        $acc = $f($acc)($xs[$i]);
    }
    return $acc;
};

$Data_Array_NonEmpty_Internal_traverse1Impl = function($apply, $map = null, $f = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_NonEmpty_Internal_traverse1Impl;
            return $Data_Array_NonEmpty_Internal_traverse1Impl(...array_merge($__args, $more));
        };
    }

    $emptyList = new \stdClass();

    $consList = function($x) {
        return function($xs) use ($x) {
            $obj = new \stdClass();
            $obj->head = $x;
            $obj->tail = $xs;
            return $obj;
        };
    };

    $finalCell = function($head) use ($emptyList) {
        $obj = new \stdClass();
        $obj->head = $head;
        $obj->tail = $emptyList;
        return $obj;
    };

    $listToArray = function($list) use ($emptyList) {
        $arr = [];
        $xs = $list;
        while ($xs !== $emptyList) {
            $arr[] = $xs->head;
            $xs = $xs->tail;
        }
        return $arr;
    };

    $buildFrom = function($x, $ys) use ($apply, $map, $f, $consList) {
        return $apply($map($consList)($f($x)))($ys);
    };

    $go = function($acc, $currentLen, $xs) use (&$go, $buildFrom) {
        if ($currentLen === 0) {
            return $acc;
        } else {
            $last = $xs[$currentLen - 1];
            $cont = new \stdClass();
            $cont->_isCont = true;
            $cont->fn = function() use (&$go, $buildFrom, $last, $acc, $currentLen, $xs) {
                return $go($buildFrom($last, $acc), $currentLen - 1, $xs);
            };
            return $cont;
        }
    };

    return function($array) use ($map, $finalCell, $f, $go, $listToArray) {
        $acc = $map($finalCell)($f($array[count($array) - 1]));
        $result = $go($acc, count($array) - 1, $array);
        while (isset($result->_isCont) && $result->_isCont) {
            $fn = $result->fn;
            $result = $fn();
        }
        return $map($listToArray)($result);
    };
};
