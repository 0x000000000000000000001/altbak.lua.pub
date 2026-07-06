<?php

$Control_Monad_ST_Uncurried_mkSTFn1 = function($fn) {
    return function($x) use ($fn) { return $fn($x)(); };
};
$Control_Monad_ST_Uncurried_mkSTFn2 = function($fn) {
    return function($a, $b) use ($fn) { return $fn($a)($b)(); };
};
$Control_Monad_ST_Uncurried_mkSTFn3 = function($fn) {
    return function($a, $b, $c) use ($fn) { return $fn($a)($b)($c)(); };
};
$Control_Monad_ST_Uncurried_mkSTFn4 = function($fn) {
    return function($a, $b, $c, $d) use ($fn) { return $fn($a)($b)($c)($d)(); };
};
$Control_Monad_ST_Uncurried_mkSTFn5 = function($fn) {
    return function($a, $b, $c, $d, $e) use ($fn) { return $fn($a)($b)($c)($d)($e)(); };
};
$Control_Monad_ST_Uncurried_mkSTFn6 = function($fn) {
    return function($a, $b, $c, $d, $e, $f) use ($fn) { return $fn($a)($b)($c)($d)($e)($f)(); };
};
$Control_Monad_ST_Uncurried_mkSTFn7 = function($fn) {
    return function($a, $b, $c, $d, $e, $f, $g) use ($fn) { return $fn($a)($b)($c)($d)($e)($f)($g)(); };
};
$Control_Monad_ST_Uncurried_mkSTFn8 = function($fn) {
    return function($a, $b, $c, $d, $e, $f, $g, $h) use ($fn) { return $fn($a)($b)($c)($d)($e)($f)($g)($h)(); };
};
$Control_Monad_ST_Uncurried_mkSTFn9 = function($fn) {
    return function($a, $b, $c, $d, $e, $f, $g, $h, $i) use ($fn) { return $fn($a)($b)($c)($d)($e)($f)($g)($h)($i)(); };
};
$Control_Monad_ST_Uncurried_mkSTFn10 = function($fn) {
    return function($a, $b, $c, $d, $e, $f, $g, $h, $i, $j) use ($fn) { return $fn($a)($b)($c)($d)($e)($f)($g)($h)($i)($j)(); };
};

$Control_Monad_ST_Uncurried_runSTFn1 = function($fn, $a = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Uncurried_runSTFn1;
            return $Control_Monad_ST_Uncurried_runSTFn1(...array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a) { return $fn($a); };
};
$Control_Monad_ST_Uncurried_runSTFn2 = function($fn, $a = null, $b = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Uncurried_runSTFn2;
            return $Control_Monad_ST_Uncurried_runSTFn2(...array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b) { return $fn($a, $b); };
};
$Control_Monad_ST_Uncurried_runSTFn3 = function($fn, $a = null, $b = null, $c = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Uncurried_runSTFn3;
            return $Control_Monad_ST_Uncurried_runSTFn3(...array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c) { return $fn($a, $b, $c); };
};
$Control_Monad_ST_Uncurried_runSTFn4 = function($fn, $a = null, $b = null, $c = null, $d = null) {
    if (func_num_args() < 5) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Uncurried_runSTFn4;
            return $Control_Monad_ST_Uncurried_runSTFn4(...array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d) { return $fn($a, $b, $c, $d); };
};
$Control_Monad_ST_Uncurried_runSTFn5 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null) {
    if (func_num_args() < 6) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Uncurried_runSTFn5;
            return $Control_Monad_ST_Uncurried_runSTFn5(...array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e) { return $fn($a, $b, $c, $d, $e); };
};
$Control_Monad_ST_Uncurried_runSTFn6 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null) {
    if (func_num_args() < 7) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Uncurried_runSTFn6;
            return $Control_Monad_ST_Uncurried_runSTFn6(...array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e, $f) { return $fn($a, $b, $c, $d, $e, $f); };
};
$Control_Monad_ST_Uncurried_runSTFn7 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null) {
    if (func_num_args() < 8) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Uncurried_runSTFn7;
            return $Control_Monad_ST_Uncurried_runSTFn7(...array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e, $f, $g) { return $fn($a, $b, $c, $d, $e, $f, $g); };
};
$Control_Monad_ST_Uncurried_runSTFn8 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null) {
    if (func_num_args() < 9) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Uncurried_runSTFn8;
            return $Control_Monad_ST_Uncurried_runSTFn8(...array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e, $f, $g, $h) { return $fn($a, $b, $c, $d, $e, $f, $g, $h); };
};
$Control_Monad_ST_Uncurried_runSTFn9 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null) {
    if (func_num_args() < 10) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Uncurried_runSTFn9;
            return $Control_Monad_ST_Uncurried_runSTFn9(...array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e, $f, $g, $h, $i) { return $fn($a, $b, $c, $d, $e, $f, $g, $h, $i); };
};
$Control_Monad_ST_Uncurried_runSTFn10 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null) {
    if (func_num_args() < 11) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Uncurried_runSTFn10;
            return $Control_Monad_ST_Uncurried_runSTFn10(...array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j) { return $fn($a, $b, $c, $d, $e, $f, $g, $h, $i, $j); };
};
