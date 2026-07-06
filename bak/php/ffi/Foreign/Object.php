<?php

$Foreign_Object__copyST = function($m) {
    return function() use ($m) {
        $r = new \stdClass();
        foreach ($m as $k => $v) {
            $r->$k = $v;
        }
        return $r;
    };
};

$Foreign_Object_empty = new \stdClass();

$Foreign_Object_runST = function($f) {
    return $f();
};

$Foreign_Object__fmapObject = function($m0, $f = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Foreign_Object__fmapObject;
            return $Foreign_Object__fmapObject(...array_merge($__args, $more));
        };
    }
    $m = new \stdClass();
    foreach ($m0 as $k => $v) {
        $m->$k = $f($v);
    }
    return $m;
};

$Foreign_Object__mapWithKey = function($m0, $f = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Foreign_Object__mapWithKey;
            return $Foreign_Object__mapWithKey(...array_merge($__args, $more));
        };
    }
    $m = new \stdClass();
    foreach ($m0 as $k => $v) {
        $m->$k = $f($k)($v);
    }
    return $m;
};

$Foreign_Object__foldM = function($bind) {
    return function($f) use ($bind) {
        return function($mz) use ($bind, $f) {
            return function($m) use ($bind, $f, $mz) {
                $acc = $mz;
                foreach ($m as $k => $v) {
                    $g = function($z) use ($f, $k, $v) {
                        return $f($z)($k)($v);
                    };
                    $acc = $bind($acc)($g);
                }
                return $acc;
            };
        };
    };
};

$Foreign_Object__foldSCObject = function($m, $z = null, $f = null, $fromMaybe = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Foreign_Object__foldSCObject;
            return $Foreign_Object__foldSCObject(...array_merge($__args, $more));
        };
    }
    $acc = $z;
    foreach ($m as $k => $v) {
        $maybeR = $f($acc)($k)($v);
        $r = $fromMaybe(null)($maybeR);
        if ($r === null) return $acc;
        else $acc = $r;
    }
    return $acc;
};

$Foreign_Object_all = function($f, $m = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Foreign_Object_all;
            return $Foreign_Object_all(...array_merge($__args, $more));
        };
    }
    foreach ($m as $k => $v) {
        if (!$f($k)($v)) return false;
    }
    return true;
};

$Foreign_Object_size = function($m) {
    $s = 0;
    foreach ($m as $k => $v) {
        $s++;
    }
    return $s;
};

$Foreign_Object__lookup = function($no, $yes = null, $k = null, $m = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Foreign_Object__lookup;
            return $Foreign_Object__lookup(...array_merge($__args, $more));
        };
    }
    return property_exists($m, $k) ? $yes($m->$k) : $no;
};

$Foreign_Object__lookupST = function($no, $yes = null, $k = null, $m = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Foreign_Object__lookupST;
            return $Foreign_Object__lookupST(...array_merge($__args, $more));
        };
    }
    return function() use ($no, $yes, $k, $m) {
        return property_exists($m, $k) ? $yes($m->$k) : $no;
    };
};

$Foreign_Object_toArrayWithKey = function($f, $m = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Foreign_Object_toArrayWithKey;
            return $Foreign_Object_toArrayWithKey(...array_merge($__args, $more));
        };
    }
    $r = [];
    foreach ($m as $k => $v) {
        $r[] = $f($k)($v);
    }
    return $r;
};

$Foreign_Object_keys = function($m) {
    $r = [];
    foreach ($m as $k => $v) {
        $r[] = (string)$k;
    }
    return $r;
};
