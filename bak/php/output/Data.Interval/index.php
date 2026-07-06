<?php

namespace Data\Interval;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifoldable/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Bitraversable/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Interval/index.php';
require_once __DIR__ . '/../Data.Interval.Duration/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Prelude/index.php';

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $v0; public function __construct($t, $v0) { $this->tag = $t; $this->v0 = $v0; } }
  class Phpurs_Data2 { public $tag; public $v0, $v1; public function __construct($t, $v0, $v1) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; } }
  class Phpurs_Data3 { public $tag; public $v0, $v1, $v2; public function __construct($t, $v0, $v1, $v2) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; } }
  class Phpurs_Data4 { public $tag; public $v0, $v1, $v2, $v3; public function __construct($t, $v0, $v1, $v2, $v3) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; } }
  class Phpurs_Data5 { public $tag; public $v0, $v1, $v2, $v3, $v4; public function __construct($t, $v0, $v1, $v2, $v3, $v4) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; } }
  class Phpurs_Data6 { public $tag; public $v0, $v1, $v2, $v3, $v4, $v5; public function __construct($t, $v0, $v1, $v2, $v3, $v4, $v5) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; $this->v5 = $v5; } }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num > 1) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...array_slice($merged, 0, $expected));
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_eval_thunk')) {
  function phpurs_eval_thunk($id) {
    static $cache = [];
    if (array_key_exists($id, $cache)) return $cache[$id];
    switch ($id) {
      case 'Data_Interval_append': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semigroup_semigroupString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupString'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_show': $v = (function() {
  $__case_0 = $dict;
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_compose': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compose;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_conj': $v = (function() {
  $__case_0 = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->conj;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_eq': $v = (function() {
  $__case_0 = $dict;
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_compare': $v = (function() {
  $__case_0 = $dict;
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_foldableInterval': $v = (object)["foldl" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "StartEnd":
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
$y = ($__case_2)->v1;
return ($f)(($f)($z, $x), $y);
break;
case "DurationEnd":
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v1;
return ($f)($z, $x);
break;
case "StartDuration":
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
return ($f)($z, $x);
break;
default:
$z = $__case_1;
return $z;
break;
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($v, $v1, $v2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldr" => (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_foldableInterval = ($GLOBALS['Data_Interval_foldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldableInterval'));
$__global_Data_Foldable_monoidFreeMonoidTree = ($GLOBALS['Data_Foldable_monoidFreeMonoidTree'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_monoidFreeMonoidTree'));
$__global_Data_Foldable_foldr2 = ($GLOBALS['Data_Foldable_foldr2'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldr2'));
$__case_0 = $__global_Data_Interval_foldableInterval;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = ($__case_res_0)($__global_Data_Foldable_monoidFreeMonoidTree);
    $__res = ((function() use ($__global_Data_Foldable_foldr2, $foldMap2) {
  $__fn = function($c, $u = null, $xs = null) use ($__global_Data_Foldable_foldr2, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($c, $u, &$__fn) { return $__fn($c, $u, $xs); };
    if ($__num === 1) return function($u, $xs = null) use ($c, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($c, $u, $xs);
      if ($__num2 === 1) return function($xs) use ($c, $u, &$__fn) { return $__fn($c, $u, $xs); };
      return phpurs_curry_fallback($__fn, [$c], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Foldable_foldr2)($c, $u, ($foldMap2)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Node", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($dict) {
  $__fn = function($dictMonoid) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_foldableInterval = ($GLOBALS['Data_Interval_foldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldableInterval'));
$__case_0 = $__global_Data_Interval_foldableInterval;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_1;
    $__res = ((function() use ($dict, $foldl3) {
  $__fn = function($dictMonoid) use ($dict, $foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_2;
$__case_0 = $dictMonoid;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_3;
    $__res = (function() use ($foldl3, $append, $mempty) {
  $__fn = function($f) use ($foldl3, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldl3)((function() use ($append, $f) {
  $__fn = function($acc, $x = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($acc, &$__fn) { return $__fn($acc, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($append)($acc, ($f)($x));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $mempty);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($dictMonoid);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_foldl': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Interval_foldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldableInterval'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_foldr': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Interval_foldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldableInterval'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_foldableRecurringInterval': $v = (object)["foldl" => (function() {
  $__fn = function($f, $i = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($i) use ($f, &$__fn) { return $__fn($f, $i); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Interval_compose = ($GLOBALS['Data_Interval_compose'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_compose'));
$__global_Data_Interval_foldl = ($GLOBALS['Data_Interval_foldl'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldl'));
$__global_Data_Interval_interval = ($GLOBALS['Data_Interval_interval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_interval'));
    $__res = ($__global_Data_Interval_compose)(($__global_Data_Interval_foldl)($f, $i), $__global_Data_Interval_interval);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldr" => (function() {
  $__fn = function($f, $i = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($i) use ($f, &$__fn) { return $__fn($f, $i); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Interval_compose = ($GLOBALS['Data_Interval_compose'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_compose'));
$__global_Data_Interval_foldr = ($GLOBALS['Data_Interval_foldr'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldr'));
$__global_Data_Interval_interval = ($GLOBALS['Data_Interval_interval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_interval'));
    $__res = ($__global_Data_Interval_compose)(($__global_Data_Interval_foldr)($f, $i), $__global_Data_Interval_interval);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($dict) {
  $__fn = function($dictMonoid) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_foldableRecurringInterval = ($GLOBALS['Data_Interval_foldableRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldableRecurringInterval'));
$__case_0 = $__global_Data_Interval_foldableRecurringInterval;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_0;
    $__res = ((function() use ($dict, $foldl3) {
  $__fn = function($dictMonoid) use ($dict, $foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_1;
$__case_0 = $dictMonoid;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_2;
    $__res = (function() use ($foldl3, $append, $mempty) {
  $__fn = function($f) use ($foldl3, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldl3)((function() use ($append, $f) {
  $__fn = function($acc, $x = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($acc, &$__fn) { return $__fn($acc, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($append)($acc, ($f)($x));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $mempty);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($dictMonoid);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_bifunctorInterval': $v = (object)["bimap" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "StartEnd":
$f = $__case_1;
$x = ($__case_2)->v0;
$y = ($__case_2)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("StartEnd", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($x), ($f)($y));
break;
case "DurationEnd":
$g = $__case_0;
$f = $__case_1;
$d = ($__case_2)->v0;
$x = ($__case_2)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("DurationEnd", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($g)($d), ($f)($x));
break;
case "StartDuration":
$g = $__case_0;
$f = $__case_1;
$x = ($__case_2)->v0;
$d = ($__case_2)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("StartDuration", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($x), ($g)($d));
break;
case "DurationOnly":
$g = $__case_0;
$d = ($__case_2)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("DurationOnly", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($g)($d));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($v, $v1, $v2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_bimap': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Interval_bifunctorInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifunctorInterval'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bimap;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_bifunctorRecurringInterval': $v = (object)["bimap" => (function() {
  $__body = function($f, $g, $v) {
    $__global_Data_Interval_bimap = ($GLOBALS['Data_Interval_bimap'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bimap'));
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "RecurringInterval":
$f1 = $__case_0;
$g1 = $__case_1;
$n = ($__case_2)->v0;
$i = ($__case_2)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("RecurringInterval", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($n, ($__global_Data_Interval_bimap)($f1, $g1, $i));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $g = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $g, &$__fn) { return $__fn($f, $g, $v); };
    if ($__num === 1) return function($g, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $v);
      if ($__num2 === 1) return function($v) use ($f, $g, &$__fn) { return $__fn($f, $g, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $g, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_functorInterval': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->identity;
} else {
throw new \Exception("Pattern match failure");
};
  return (object)["map" => (($GLOBALS['Data_Interval_bimap'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bimap')))($__case_res_0)];
})(); break;
      case 'Data_Interval_map': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Interval_functorInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_functorInterval'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_extendInterval': $v = (object)["extend" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "StartEnd":
$f = $__case_0;
$a = $__case_1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("StartEnd", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), ($f)($a));
break;
case "DurationEnd":
$f = $__case_0;
$a = $__case_1;
$d = ($__case_1)->v0;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("DurationEnd", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($d, ($f)($a));
break;
case "StartDuration":
$f = $__case_0;
$a = $__case_1;
$d = ($__case_1)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("StartDuration", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), $d);
break;
case "DurationOnly":
$d = ($__case_1)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("DurationOnly", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($d);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_functorInterval = ($GLOBALS['Data_Interval_functorInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_functorInterval'));
    $__res = $__global_Data_Interval_functorInterval;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_extend': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Interval_extendInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_extendInterval'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->extend;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_functorRecurringInterval': $v = (object)["map" => (function() {
  $__body = function($f, $v) {
    $__global_Data_Interval_map = ($GLOBALS['Data_Interval_map'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_map'));
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "RecurringInterval":
$f1 = $__case_0;
$n = ($__case_1)->v0;
$i = ($__case_1)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("RecurringInterval", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($n, ($__global_Data_Interval_map)($f1, $i));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_extendRecurringInterval': $v = (object)["extend" => (function() {
  $__body = function($f, $v) {
    $__global_Data_Interval_extend = ($GLOBALS['Data_Interval_extend'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_extend'));
    $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "RecurringInterval":
$f1 = $__case_0;
$a = $__case_1;
$n = ($__case_1)->v0;
$i = ($__case_1)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("RecurringInterval", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($n, ($__global_Data_Interval_extend)(($__global_Data_Function_const)(($f1)($a)), $i));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_functorRecurringInterval = ($GLOBALS['Data_Interval_functorRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_functorRecurringInterval'));
    $__res = $__global_Data_Interval_functorRecurringInterval;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_traversableInterval': $v = (object)["traverse" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
$__case_0 = $Apply0;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_0;
$Functor0 = (($Apply0)->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_1;
$__case_0 = $Functor0;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_2;
$mapFlipped = (function() use ($map1) {
  $__fn = function($fa, $f = null) use ($map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($fa, &$__fn) { return $__fn($fa, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map1)($f, $fa);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictApplicative;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_3;
    $__res = (function() use ($apply, $map1, $mapFlipped, $pure) {
  $__body = function($v, $v1) use ($apply, $map1, $mapFlipped, $pure) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "StartEnd":
$f = $__case_0;
$x = ($__case_1)->v0;
$y = ($__case_1)->v1;
return ($apply)(($map1)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("StartEnd", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($f)($x)), ($f)($y));
break;
case "DurationEnd":
$f = $__case_0;
$d = ($__case_1)->v0;
$x = ($__case_1)->v1;
return ($mapFlipped)(($f)($x), ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("DurationEnd", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($d));
break;
case "StartDuration":
$f = $__case_0;
$x = ($__case_1)->v0;
$d = ($__case_1)->v1;
return ($mapFlipped)(($f)($x), (function() use ($d) {
  $__fn = function($v2) use ($d, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("StartDuration", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($v2, $d);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
case "DurationOnly":
$d = ($__case_1)->v0;
return ($pure)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("DurationOnly", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($d));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($apply, $map1, $mapFlipped, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequence" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_traversableInterval = ($GLOBALS['Data_Interval_traversableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_traversableInterval'));
$__global_Data_Traversable_identity = ($GLOBALS['Data_Traversable_identity'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_identity'));
$__case_0 = $__global_Data_Interval_traversableInterval;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse2 = $__case_res_4;
    $__res = ((function() use ($traverse2, $__global_Data_Traversable_identity) {
  $__fn = function($dictApplicative) use ($traverse2, $__global_Data_Traversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse2)($dictApplicative, $__global_Data_Traversable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($dictApplicative);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_functorInterval = ($GLOBALS['Data_Interval_functorInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_functorInterval'));
    $__res = $__global_Data_Interval_functorInterval;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_foldableInterval = ($GLOBALS['Data_Interval_foldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldableInterval'));
    $__res = $__global_Data_Interval_foldableInterval;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_traverse': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Interval_traversableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_traversableInterval'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_traversableRecurringInterval': $v = (object)["traverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_traverse = ($GLOBALS['Data_Interval_traverse'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_traverse'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_0;
$over1 = (function() use ($map1) {
  $__body = function($f, $v) use ($map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "RecurringInterval":
$f1 = $__case_0;
$n = ($__case_1)->v0;
$i = ($__case_1)->v1;
return ($map1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("RecurringInterval", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($n), ($f1)($i));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$traverse1 = ($__global_Data_Interval_traverse)($dictApplicative);
    $__res = (function() use ($over1, $traverse1) {
  $__fn = function($f, $i = null) use ($over1, $traverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($i) use ($f, &$__fn) { return $__fn($f, $i); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($over1)(($traverse1)($f), $i);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequence" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_traversableRecurringInterval = ($GLOBALS['Data_Interval_traversableRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_traversableRecurringInterval'));
$__global_Data_Traversable_identity = ($GLOBALS['Data_Traversable_identity'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_identity'));
$__case_0 = $__global_Data_Interval_traversableRecurringInterval;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse2 = $__case_res_1;
    $__res = ((function() use ($traverse2, $__global_Data_Traversable_identity) {
  $__fn = function($dictApplicative) use ($traverse2, $__global_Data_Traversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse2)($dictApplicative, $__global_Data_Traversable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($dictApplicative);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_functorRecurringInterval = ($GLOBALS['Data_Interval_functorRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_functorRecurringInterval'));
    $__res = $__global_Data_Interval_functorRecurringInterval;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_foldableRecurringInterval = ($GLOBALS['Data_Interval_foldableRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldableRecurringInterval'));
    $__res = $__global_Data_Interval_foldableRecurringInterval;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_bifoldableInterval': $v = (object)["bifoldl" => (function() {
  $__body = function($v, $v1, $v2, $v3) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    $__case_3 = $v3;
    switch (($__case_3)->tag) {
case "StartEnd":
$f = $__case_1;
$z = $__case_2;
$x = ($__case_3)->v0;
$y = ($__case_3)->v1;
return ($f)(($f)($z, $x), $y);
break;
case "DurationEnd":
$g = $__case_0;
$f = $__case_1;
$z = $__case_2;
$d = ($__case_3)->v0;
$x = ($__case_3)->v1;
return ($f)(($g)($z, $d), $x);
break;
case "StartDuration":
$g = $__case_0;
$f = $__case_1;
$z = $__case_2;
$x = ($__case_3)->v0;
$d = ($__case_3)->v1;
return ($f)(($g)($z, $d), $x);
break;
case "DurationOnly":
$g = $__case_0;
$z = $__case_2;
$d = ($__case_3)->v0;
return ($g)($z, $d);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v3) use ($v, $v1, $v2, &$__fn) { return $__fn($v, $v1, $v2, $v3); };
    if ($__num === 2) return function($v2, $v3 = null) use ($v, $v1, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2, $v3);
      if ($__num2 === 1) return function($v3) use ($v, $v1, $v2, &$__fn) { return $__fn($v, $v1, $v2, $v3); };
      return phpurs_curry_fallback($__fn, [$v, $v1], 4);
    };
    if ($__num === 1) return function($v1, $v2 = null, $v3 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($v, $v1, $v2, $v3);
      if ($__num2 === 2) return function($v3) use ($v, $v1, $v2, &$__fn) { return $__fn($v, $v1, $v2, $v3); };
      if ($__num2 === 1) return function($v2, $v3 = null) use ($v, $v1, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($v, $v1, $v2, $v3);
        if ($__num3 === 1) return function($v3) use ($v, $v1, $v2, &$__fn) { return $__fn($v, $v1, $v2, $v3); };
        return phpurs_curry_fallback($__fn, [$v, $v1], 4);
      };
      return phpurs_curry_fallback($__fn, [$v], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($v, $v1, $v2, $v3);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldr" => (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_bifoldableInterval = ($GLOBALS['Data_Interval_bifoldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldableInterval'));
$__global_Data_Bifoldable_monoidEndo = ($GLOBALS['Data_Bifoldable_monoidEndo'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_monoidEndo'));
$__global_Data_Bifoldable_unwrap = ($GLOBALS['Data_Bifoldable_unwrap'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_unwrap'));
$__global_Data_Bifoldable_compose = ($GLOBALS['Data_Bifoldable_compose'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_compose'));
$__global_Data_Monoid_Endo_Endo = ($GLOBALS['Data_Monoid_Endo_Endo'] ?? \Data\Monoid\Endo\phpurs_eval_thunk('Data_Monoid_Endo_Endo'));
$__case_0 = $__global_Data_Interval_bifoldableInterval;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bifoldMap;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldMap1 = ($__case_res_0)($__global_Data_Bifoldable_monoidEndo);
    $__res = ((function() use ($__global_Data_Bifoldable_unwrap, $bifoldMap1, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Endo_Endo) {
  $__fn = function($f, $g = null, $z = null, $p = null) use ($__global_Data_Bifoldable_unwrap, $bifoldMap1, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Endo_Endo, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
    if ($__num === 2) return function($z, $p = null) use ($f, $g, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $z, $p);
      if ($__num2 === 1) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
      return phpurs_curry_fallback($__fn, [$f, $g], 4);
    };
    if ($__num === 1) return function($g, $z = null, $p = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $g, $z, $p);
      if ($__num2 === 2) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
      if ($__num2 === 1) return function($z, $p = null) use ($f, $g, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $g, $z, $p);
        if ($__num3 === 1) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
        return phpurs_curry_fallback($__fn, [$f, $g], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = ($__global_Data_Bifoldable_unwrap)(($bifoldMap1)(($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Endo_Endo, $f), ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Endo_Endo, $g), $p), $z);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})())($x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() use ($dict) {
  $__fn = function($dictMonoid) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_bifoldableInterval = ($GLOBALS['Data_Interval_bifoldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldableInterval'));
$__case_0 = $__global_Data_Interval_bifoldableInterval;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bifoldl;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldl1 = $__case_res_1;
    $__res = ((function() use ($dict, $bifoldl1) {
  $__fn = function($dictMonoid) use ($dict, $bifoldl1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_2;
$__case_0 = $dictMonoid;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_3;
    $__res = (function() use ($bifoldl1, $append, $mempty) {
  $__fn = function($f, $g = null) use ($bifoldl1, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($g) use ($f, &$__fn) { return $__fn($f, $g); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bifoldl1)((function() use ($append, $f) {
  $__fn = function($m, $a = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($m, &$__fn) { return $__fn($m, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($append)($m, ($f)($a));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), (function() use ($append, $g) {
  $__fn = function($m, $b = null) use ($append, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($m, &$__fn) { return $__fn($m, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($append)($m, ($g)($b));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $mempty);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($dictMonoid);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_bifoldl': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Interval_bifoldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldableInterval'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bifoldl;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_bifoldr': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Interval_bifoldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldableInterval'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bifoldr;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_bifoldableRecurringInterval': $v = (object)["bifoldl" => (function() {
  $__fn = function($f, $g = null, $i = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($i) use ($f, $g, &$__fn) { return $__fn($f, $g, $i); };
    if ($__num === 1) return function($g, $i = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $i);
      if ($__num2 === 1) return function($i) use ($f, $g, &$__fn) { return $__fn($f, $g, $i); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_Interval_compose = ($GLOBALS['Data_Interval_compose'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_compose'));
$__global_Data_Interval_bifoldl = ($GLOBALS['Data_Interval_bifoldl'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldl'));
$__global_Data_Interval_interval = ($GLOBALS['Data_Interval_interval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_interval'));
    $__res = ($__global_Data_Interval_compose)(($__global_Data_Interval_bifoldl)($f, $g, $i), $__global_Data_Interval_interval);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "bifoldr" => (function() {
  $__fn = function($f, $g = null, $i = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($i) use ($f, $g, &$__fn) { return $__fn($f, $g, $i); };
    if ($__num === 1) return function($g, $i = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $i);
      if ($__num2 === 1) return function($i) use ($f, $g, &$__fn) { return $__fn($f, $g, $i); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_Interval_compose = ($GLOBALS['Data_Interval_compose'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_compose'));
$__global_Data_Interval_bifoldr = ($GLOBALS['Data_Interval_bifoldr'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldr'));
$__global_Data_Interval_interval = ($GLOBALS['Data_Interval_interval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_interval'));
    $__res = ($__global_Data_Interval_compose)(($__global_Data_Interval_bifoldr)($f, $g, $i), $__global_Data_Interval_interval);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() use ($dict) {
  $__fn = function($dictMonoid) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_bifoldableRecurringInterval = ($GLOBALS['Data_Interval_bifoldableRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldableRecurringInterval'));
$__case_0 = $__global_Data_Interval_bifoldableRecurringInterval;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bifoldl;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldl1 = $__case_res_0;
    $__res = ((function() use ($dict, $bifoldl1) {
  $__fn = function($dictMonoid) use ($dict, $bifoldl1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_1;
$__case_0 = $dictMonoid;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_2;
    $__res = (function() use ($bifoldl1, $append, $mempty) {
  $__fn = function($f, $g = null) use ($bifoldl1, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($g) use ($f, &$__fn) { return $__fn($f, $g); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bifoldl1)((function() use ($append, $f) {
  $__fn = function($m, $a = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($m, &$__fn) { return $__fn($m, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($append)($m, ($f)($a));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), (function() use ($append, $g) {
  $__fn = function($m, $b = null) use ($append, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($m, &$__fn) { return $__fn($m, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($append)($m, ($g)($b));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $mempty);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($dictMonoid);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_bitraversableInterval': $v = (object)["bitraverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
$__case_0 = $Apply0;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_1;
    $__res = (function() use ($apply, $map1) {
  $__body = function($v, $v1, $v2) use ($apply, $map1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "StartEnd":
$r = $__case_1;
$x = ($__case_2)->v0;
$y = ($__case_2)->v1;
return ($apply)(($map1)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("StartEnd", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($r)($x)), ($r)($y));
break;
case "DurationEnd":
$l = $__case_0;
$r = $__case_1;
$d = ($__case_2)->v0;
$x = ($__case_2)->v1;
return ($apply)(($map1)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("DurationEnd", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($l)($d)), ($r)($x));
break;
case "StartDuration":
$l = $__case_0;
$r = $__case_1;
$x = ($__case_2)->v0;
$d = ($__case_2)->v1;
return ($apply)(($map1)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("StartDuration", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($r)($x)), ($l)($d));
break;
case "DurationOnly":
$l = $__case_0;
$d = ($__case_2)->v0;
return ($map1)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("DurationOnly", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($l)($d));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($apply, $map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($v, $v1, $v2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_bitraversableInterval = ($GLOBALS['Data_Interval_bitraversableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bitraversableInterval'));
$__global_Data_Bitraversable_identity = ($GLOBALS['Data_Bitraversable_identity'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_identity'));
$__case_0 = $__global_Data_Interval_bitraversableInterval;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bitraverse;
} else {
throw new \Exception("Pattern match failure");
};
$bitraverse1 = $__case_res_2;
    $__res = ((function() use ($bitraverse1, $__global_Data_Bitraversable_identity) {
  $__fn = function($dictApplicative) use ($bitraverse1, $__global_Data_Bitraversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bitraverse1)($dictApplicative, $__global_Data_Bitraversable_identity, $__global_Data_Bitraversable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($dictApplicative);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_bifunctorInterval = ($GLOBALS['Data_Interval_bifunctorInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifunctorInterval'));
    $__res = $__global_Data_Interval_bifunctorInterval;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_bifoldableInterval = ($GLOBALS['Data_Interval_bifoldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldableInterval'));
    $__res = $__global_Data_Interval_bifoldableInterval;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_bitraverse': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Interval_bitraversableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bitraversableInterval'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bitraverse;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_bitraversableRecurringInterval': $v = (object)["bitraverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_bitraverse = ($GLOBALS['Data_Interval_bitraverse'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bitraverse'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_0;
$over1 = (function() use ($map1) {
  $__body = function($f, $v) use ($map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "RecurringInterval":
$f1 = $__case_0;
$n = ($__case_1)->v0;
$i = ($__case_1)->v1;
return ($map1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("RecurringInterval", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($n), ($f1)($i));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$bitraverse1 = ($__global_Data_Interval_bitraverse)($dictApplicative);
    $__res = (function() use ($over1, $bitraverse1) {
  $__fn = function($l, $r = null, $i = null) use ($over1, $bitraverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($i) use ($l, $r, &$__fn) { return $__fn($l, $r, $i); };
    if ($__num === 1) return function($r, $i = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $r, $i);
      if ($__num2 === 1) return function($i) use ($l, $r, &$__fn) { return $__fn($l, $r, $i); };
      return phpurs_curry_fallback($__fn, [$l], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($over1)(($bitraverse1)($l, $r), $i);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_bitraversableRecurringInterval = ($GLOBALS['Data_Interval_bitraversableRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bitraversableRecurringInterval'));
$__global_Data_Bitraversable_identity = ($GLOBALS['Data_Bitraversable_identity'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_identity'));
$__case_0 = $__global_Data_Interval_bitraversableRecurringInterval;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bitraverse;
} else {
throw new \Exception("Pattern match failure");
};
$bitraverse1 = $__case_res_1;
    $__res = ((function() use ($bitraverse1, $__global_Data_Bitraversable_identity) {
  $__fn = function($dictApplicative) use ($bitraverse1, $__global_Data_Bitraversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bitraverse1)($dictApplicative, $__global_Data_Bitraversable_identity, $__global_Data_Bitraversable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($dictApplicative);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_bifunctorRecurringInterval = ($GLOBALS['Data_Interval_bifunctorRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifunctorRecurringInterval'));
    $__res = $__global_Data_Interval_bifunctorRecurringInterval;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_bifoldableRecurringInterval = ($GLOBALS['Data_Interval_bifoldableRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldableRecurringInterval'));
    $__res = $__global_Data_Interval_bifoldableRecurringInterval;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };








// Data_Interval_StartEnd
function Data_Interval_StartEnd($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_StartEnd';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("StartEnd", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Interval_StartEnd'] = __NAMESPACE__ . '\\Data_Interval_StartEnd';

// Data_Interval_DurationEnd
function Data_Interval_DurationEnd($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_DurationEnd';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("DurationEnd", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Interval_DurationEnd'] = __NAMESPACE__ . '\\Data_Interval_DurationEnd';

// Data_Interval_StartDuration
function Data_Interval_StartDuration($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_StartDuration';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("StartDuration", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Interval_StartDuration'] = __NAMESPACE__ . '\\Data_Interval_StartDuration';

// Data_Interval_DurationOnly
function Data_Interval_DurationOnly($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_DurationOnly';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("DurationOnly", $value0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_DurationOnly'] = __NAMESPACE__ . '\\Data_Interval_DurationOnly';

// Data_Interval_RecurringInterval
function Data_Interval_RecurringInterval($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_RecurringInterval';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("RecurringInterval", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Interval_RecurringInterval'] = __NAMESPACE__ . '\\Data_Interval_RecurringInterval';

// Data_Interval_showInterval
function Data_Interval_showInterval($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_showInterval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_append = ($GLOBALS['Data_Interval_append'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_append'));
$__case_0 = $dictShow;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show1 = $__case_res_0;
    $__res = (function() use ($__global_Data_Interval_append, $show1) {
  $__fn = function($dictShow1) use ($__global_Data_Interval_append, $show1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictShow1;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show2 = $__case_res_1;
    $__res = (object)["show" => (function() use ($__global_Data_Interval_append, $show2, $show1) {
  $__body = function($v) use ($__global_Data_Interval_append, $show2, $show1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "StartEnd":
$x = ($__case_0)->v0;
$y = ($__case_0)->v1;
return ($__global_Data_Interval_append)("(StartEnd ", ($__global_Data_Interval_append)(($show2)($x), ($__global_Data_Interval_append)(" ", ($__global_Data_Interval_append)(($show2)($y), ")"))));
break;
case "DurationEnd":
$d = ($__case_0)->v0;
$x = ($__case_0)->v1;
return ($__global_Data_Interval_append)("(DurationEnd ", ($__global_Data_Interval_append)(($show1)($d), ($__global_Data_Interval_append)(" ", ($__global_Data_Interval_append)(($show2)($x), ")"))));
break;
case "StartDuration":
$x = ($__case_0)->v0;
$d = ($__case_0)->v1;
return ($__global_Data_Interval_append)("(StartDuration ", ($__global_Data_Interval_append)(($show2)($x), ($__global_Data_Interval_append)(" ", ($__global_Data_Interval_append)(($show1)($d), ")"))));
break;
case "DurationOnly":
$d = ($__case_0)->v0;
return ($__global_Data_Interval_append)("(DurationOnly ", ($__global_Data_Interval_append)(($show1)($d), ")"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Data_Interval_append, $show2, $show1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_showInterval'] = __NAMESPACE__ . '\\Data_Interval_showInterval';

// Data_Interval_showRecurringInterval
function Data_Interval_showRecurringInterval($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_showRecurringInterval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_append = ($GLOBALS['Data_Interval_append'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_append'));
$__global_Data_Interval_show = ($GLOBALS['Data_Interval_show'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_show'));
$__case_0 = $dictShow;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show1 = $__case_res_0;
$showInterval1 = (function() use ($__global_Data_Interval_append, $show1) {
  $__fn = function($dictShow1) use ($__global_Data_Interval_append, $show1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictShow1;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show2 = $__case_res_1;
    $__res = (object)["show" => (function() use ($__global_Data_Interval_append, $show2, $show1) {
  $__body = function($v) use ($__global_Data_Interval_append, $show2, $show1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "StartEnd":
$x = ($__case_0)->v0;
$y = ($__case_0)->v1;
return ($__global_Data_Interval_append)("(StartEnd ", ($__global_Data_Interval_append)(($show2)($x), ($__global_Data_Interval_append)(" ", ($__global_Data_Interval_append)(($show2)($y), ")"))));
break;
case "DurationEnd":
$d = ($__case_0)->v0;
$x = ($__case_0)->v1;
return ($__global_Data_Interval_append)("(DurationEnd ", ($__global_Data_Interval_append)(($show1)($d), ($__global_Data_Interval_append)(" ", ($__global_Data_Interval_append)(($show2)($x), ")"))));
break;
case "StartDuration":
$x = ($__case_0)->v0;
$d = ($__case_0)->v1;
return ($__global_Data_Interval_append)("(StartDuration ", ($__global_Data_Interval_append)(($show2)($x), ($__global_Data_Interval_append)(" ", ($__global_Data_Interval_append)(($show1)($d), ")"))));
break;
case "DurationOnly":
$d = ($__case_0)->v0;
return ($__global_Data_Interval_append)("(DurationOnly ", ($__global_Data_Interval_append)(($show1)($d), ")"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Data_Interval_append, $show2, $show1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($dict, $__global_Data_Interval_append, $__global_Data_Interval_show) {
  $__fn = function($dictShow1) use ($dict, $__global_Data_Interval_append, $__global_Data_Interval_show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show1 = $__case_res_2;
    $__res = (object)["show" => (function() use ($__global_Data_Interval_append, $__global_Data_Interval_show, $show1) {
  $__body = function($v) use ($__global_Data_Interval_append, $__global_Data_Interval_show, $show1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "RecurringInterval":
$x = ($__case_0)->v0;
$y = ($__case_0)->v1;
return ($__global_Data_Interval_append)("(RecurringInterval ", ($__global_Data_Interval_append)(($__global_Data_Interval_show)($x), ($__global_Data_Interval_append)(" ", ($__global_Data_Interval_append)(($show1)($y), ")"))));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Data_Interval_append, $__global_Data_Interval_show, $show1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_showRecurringInterval'] = __NAMESPACE__ . '\\Data_Interval_showRecurringInterval';

// Data_Interval_over
function Data_Interval_over($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_over';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctor;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_0;
    $__res = (function() use ($map1) {
  $__body = function($f, $v) use ($map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "RecurringInterval":
$f1 = $__case_0;
$n = ($__case_1)->v0;
$i = ($__case_1)->v1;
return ($map1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("RecurringInterval", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($n), ($f1)($i));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_over'] = __NAMESPACE__ . '\\Data_Interval_over';

// Data_Interval_interval
function Data_Interval_interval($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_interval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "RecurringInterval":
$i = ($__case_0)->v1;
return $i;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_interval'] = __NAMESPACE__ . '\\Data_Interval_interval';





// Data_Interval_eqInterval
function Data_Interval_eqInterval($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_eqInterval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_conj = ($GLOBALS['Data_Interval_conj'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_conj'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_0;
    $__res = (function() use ($__global_Data_Interval_conj, $eq1) {
  $__fn = function($dictEq1) use ($__global_Data_Interval_conj, $eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictEq1;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_1;
    $__res = (object)["eq" => (function() use ($__global_Data_Interval_conj, $eq2, $eq1) {
  $__body = function($x, $y) use ($__global_Data_Interval_conj, $eq2, $eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "StartEnd") && (($__case_1)->tag === "StartEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_Interval_conj)(($eq2)($l, $r), ($eq2)($l1, $r1));
} else {
if (((($__case_0)->tag === "DurationEnd") && (($__case_1)->tag === "DurationEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_Interval_conj)(($eq1)($l, $r), ($eq2)($l1, $r1));
} else {
if (((($__case_0)->tag === "StartDuration") && (($__case_1)->tag === "StartDuration"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_Interval_conj)(($eq2)($l, $r), ($eq1)($l1, $r1));
} else {
if (((($__case_0)->tag === "DurationOnly") && (($__case_1)->tag === "DurationOnly"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return ($eq1)($l, $r);
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
  };
  $__fn = function($x, $y = null) use ($__global_Data_Interval_conj, $eq2, $eq1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_eqInterval'] = __NAMESPACE__ . '\\Data_Interval_eqInterval';

// Data_Interval_eqRecurringInterval
function Data_Interval_eqRecurringInterval($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_eqRecurringInterval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_conj = ($GLOBALS['Data_Interval_conj'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_conj'));
$__global_Data_Interval_eq = ($GLOBALS['Data_Interval_eq'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_eq'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_0;
$eqInterval1 = (function() use ($__global_Data_Interval_conj, $eq1) {
  $__fn = function($dictEq1) use ($__global_Data_Interval_conj, $eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictEq1;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_1;
    $__res = (object)["eq" => (function() use ($__global_Data_Interval_conj, $eq2, $eq1) {
  $__body = function($x, $y) use ($__global_Data_Interval_conj, $eq2, $eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "StartEnd") && (($__case_1)->tag === "StartEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_Interval_conj)(($eq2)($l, $r), ($eq2)($l1, $r1));
} else {
if (((($__case_0)->tag === "DurationEnd") && (($__case_1)->tag === "DurationEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_Interval_conj)(($eq1)($l, $r), ($eq2)($l1, $r1));
} else {
if (((($__case_0)->tag === "StartDuration") && (($__case_1)->tag === "StartDuration"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_Interval_conj)(($eq2)($l, $r), ($eq1)($l1, $r1));
} else {
if (((($__case_0)->tag === "DurationOnly") && (($__case_1)->tag === "DurationOnly"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return ($eq1)($l, $r);
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
  };
  $__fn = function($x, $y = null) use ($__global_Data_Interval_conj, $eq2, $eq1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($dict, $__global_Data_Interval_conj, $__global_Data_Interval_eq) {
  $__fn = function($dictEq1) use ($dict, $__global_Data_Interval_conj, $__global_Data_Interval_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_2;
    $__res = (object)["eq" => (function() use ($__global_Data_Interval_conj, $__global_Data_Interval_eq, $eq1) {
  $__body = function($x, $y) use ($__global_Data_Interval_conj, $__global_Data_Interval_eq, $eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "RecurringInterval") && (($__case_1)->tag === "RecurringInterval"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_Interval_conj)(($__global_Data_Interval_eq)($l, $r), ($eq1)($l1, $r1));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($__global_Data_Interval_conj, $__global_Data_Interval_eq, $eq1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_eqRecurringInterval'] = __NAMESPACE__ . '\\Data_Interval_eqRecurringInterval';

// Data_Interval_ordInterval
function Data_Interval_ordInterval($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_ordInterval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_conj = ($GLOBALS['Data_Interval_conj'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_conj'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_1;
$eqInterval1 = (function() use ($__global_Data_Interval_conj, $eq1) {
  $__fn = function($dictEq1) use ($__global_Data_Interval_conj, $eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictEq1;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_2;
    $__res = (object)["eq" => (function() use ($__global_Data_Interval_conj, $eq2, $eq1) {
  $__body = function($x, $y) use ($__global_Data_Interval_conj, $eq2, $eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "StartEnd") && (($__case_1)->tag === "StartEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_Interval_conj)(($eq2)($l, $r), ($eq2)($l1, $r1));
} else {
if (((($__case_0)->tag === "DurationEnd") && (($__case_1)->tag === "DurationEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_Interval_conj)(($eq1)($l, $r), ($eq2)($l1, $r1));
} else {
if (((($__case_0)->tag === "StartDuration") && (($__case_1)->tag === "StartDuration"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_Interval_conj)(($eq2)($l, $r), ($eq1)($l1, $r1));
} else {
if (((($__case_0)->tag === "DurationOnly") && (($__case_1)->tag === "DurationOnly"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return ($eq1)($l, $r);
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
  };
  $__fn = function($x, $y = null) use ($__global_Data_Interval_conj, $eq2, $eq1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($eqInterval1, $__global_Prim_undefined, $compare1) {
  $__fn = function($dictOrd1) use ($eqInterval1, $__global_Prim_undefined, $compare1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictOrd1;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare2 = $__case_res_3;
$eqInterval2 = ($eqInterval1)((($dictOrd1)->Eq0)($__global_Prim_undefined));
    $__res = (object)["compare" => (function() use ($compare2, $compare1) {
  $__body = function($x, $y) use ($compare2, $compare1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "StartEnd") && (($__case_1)->tag === "StartEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = ($compare2)($l, $r);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "LT":
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
case "GT":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
return ($compare2)($l1, $r1);
break;
};
} else {
if ((($__case_0)->tag === "StartEnd")) {
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
} else {
if ((($__case_1)->tag === "StartEnd")) {
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
} else {
if (((($__case_0)->tag === "DurationEnd") && (($__case_1)->tag === "DurationEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = ($compare1)($l, $r);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "LT":
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
case "GT":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
return ($compare2)($l1, $r1);
break;
};
} else {
if ((($__case_0)->tag === "DurationEnd")) {
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
} else {
if ((($__case_1)->tag === "DurationEnd")) {
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
} else {
if (((($__case_0)->tag === "StartDuration") && (($__case_1)->tag === "StartDuration"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = ($compare2)($l, $r);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "LT":
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
case "GT":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
return ($compare1)($l1, $r1);
break;
};
} else {
if ((($__case_0)->tag === "StartDuration")) {
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
} else {
if ((($__case_1)->tag === "StartDuration")) {
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
} else {
if (((($__case_0)->tag === "DurationOnly") && (($__case_1)->tag === "DurationOnly"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return ($compare1)($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
};
};
};
};
};
  };
  $__fn = function($x, $y = null) use ($compare2, $compare1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqInterval2) {
  $__fn = function($__dollar____unused) use ($eqInterval2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqInterval2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_ordInterval'] = __NAMESPACE__ . '\\Data_Interval_ordInterval';

// Data_Interval_ordRecurringInterval
function Data_Interval_ordRecurringInterval($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_ordRecurringInterval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_conj = ($GLOBALS['Data_Interval_conj'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_conj'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Interval_eq = ($GLOBALS['Data_Interval_eq'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_eq'));
$__global_Data_Interval_compare = ($GLOBALS['Data_Interval_compare'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_compare'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_1;
$eqInterval1 = (function() use ($__global_Data_Interval_conj, $eq1) {
  $__fn = function($dictEq1) use ($__global_Data_Interval_conj, $eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictEq1;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_2;
    $__res = (object)["eq" => (function() use ($__global_Data_Interval_conj, $eq2, $eq1) {
  $__body = function($x, $y) use ($__global_Data_Interval_conj, $eq2, $eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "StartEnd") && (($__case_1)->tag === "StartEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_Interval_conj)(($eq2)($l, $r), ($eq2)($l1, $r1));
} else {
if (((($__case_0)->tag === "DurationEnd") && (($__case_1)->tag === "DurationEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_Interval_conj)(($eq1)($l, $r), ($eq2)($l1, $r1));
} else {
if (((($__case_0)->tag === "StartDuration") && (($__case_1)->tag === "StartDuration"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_Interval_conj)(($eq2)($l, $r), ($eq1)($l1, $r1));
} else {
if (((($__case_0)->tag === "DurationOnly") && (($__case_1)->tag === "DurationOnly"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return ($eq1)($l, $r);
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
  };
  $__fn = function($x, $y = null) use ($__global_Data_Interval_conj, $eq2, $eq1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$ordInterval1 = (function() use ($eqInterval1, $__global_Prim_undefined, $compare1) {
  $__fn = function($dictOrd1) use ($eqInterval1, $__global_Prim_undefined, $compare1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictOrd1;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare2 = $__case_res_3;
$eqInterval2 = ($eqInterval1)((($dictOrd1)->Eq0)($__global_Prim_undefined));
    $__res = (object)["compare" => (function() use ($compare2, $compare1) {
  $__body = function($x, $y) use ($compare2, $compare1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "StartEnd") && (($__case_1)->tag === "StartEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = ($compare2)($l, $r);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "LT":
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
case "GT":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
return ($compare2)($l1, $r1);
break;
};
} else {
if ((($__case_0)->tag === "StartEnd")) {
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
} else {
if ((($__case_1)->tag === "StartEnd")) {
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
} else {
if (((($__case_0)->tag === "DurationEnd") && (($__case_1)->tag === "DurationEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = ($compare1)($l, $r);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "LT":
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
case "GT":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
return ($compare2)($l1, $r1);
break;
};
} else {
if ((($__case_0)->tag === "DurationEnd")) {
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
} else {
if ((($__case_1)->tag === "DurationEnd")) {
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
} else {
if (((($__case_0)->tag === "StartDuration") && (($__case_1)->tag === "StartDuration"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = ($compare2)($l, $r);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "LT":
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
case "GT":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
return ($compare1)($l1, $r1);
break;
};
} else {
if ((($__case_0)->tag === "StartDuration")) {
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
} else {
if ((($__case_1)->tag === "StartDuration")) {
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
} else {
if (((($__case_0)->tag === "DurationOnly") && (($__case_1)->tag === "DurationOnly"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return ($compare1)($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
};
};
};
};
};
  };
  $__fn = function($x, $y = null) use ($compare2, $compare1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqInterval2) {
  $__fn = function($__dollar____unused) use ($eqInterval2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqInterval2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_4;
$eqInterval1 = (function() use ($__global_Data_Interval_conj, $eq1) {
  $__fn = function($dictEq1) use ($__global_Data_Interval_conj, $eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictEq1;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_5;
    $__res = (object)["eq" => (function() use ($__global_Data_Interval_conj, $eq2, $eq1) {
  $__body = function($x, $y) use ($__global_Data_Interval_conj, $eq2, $eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "StartEnd") && (($__case_1)->tag === "StartEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_Interval_conj)(($eq2)($l, $r), ($eq2)($l1, $r1));
} else {
if (((($__case_0)->tag === "DurationEnd") && (($__case_1)->tag === "DurationEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_Interval_conj)(($eq1)($l, $r), ($eq2)($l1, $r1));
} else {
if (((($__case_0)->tag === "StartDuration") && (($__case_1)->tag === "StartDuration"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_Interval_conj)(($eq2)($l, $r), ($eq1)($l1, $r1));
} else {
if (((($__case_0)->tag === "DurationOnly") && (($__case_1)->tag === "DurationOnly"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return ($eq1)($l, $r);
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
  };
  $__fn = function($x, $y = null) use ($__global_Data_Interval_conj, $eq2, $eq1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$eqRecurringInterval1 = (function() use ($dict, $__global_Data_Interval_conj, $__global_Data_Interval_eq) {
  $__fn = function($dictEq1) use ($dict, $__global_Data_Interval_conj, $__global_Data_Interval_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_6;
    $__res = (object)["eq" => (function() use ($__global_Data_Interval_conj, $__global_Data_Interval_eq, $eq1) {
  $__body = function($x, $y) use ($__global_Data_Interval_conj, $__global_Data_Interval_eq, $eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "RecurringInterval") && (($__case_1)->tag === "RecurringInterval"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_Interval_conj)(($__global_Data_Interval_eq)($l, $r), ($eq1)($l1, $r1));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($__global_Data_Interval_conj, $__global_Data_Interval_eq, $eq1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($dict, $eqRecurringInterval1, $__global_Prim_undefined, $__global_Data_Interval_compare) {
  $__fn = function($dictOrd1) use ($dict, $eqRecurringInterval1, $__global_Prim_undefined, $__global_Data_Interval_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare1 = $__case_res_7;
$eqRecurringInterval2 = ($eqRecurringInterval1)((($dictOrd1)->Eq0)($__global_Prim_undefined));
    $__res = (object)["compare" => (function() use ($__global_Data_Interval_compare, $compare1) {
  $__body = function($x, $y) use ($__global_Data_Interval_compare, $compare1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "RecurringInterval") && (($__case_1)->tag === "RecurringInterval"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = ($__global_Data_Interval_compare)($l, $r);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "LT":
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
case "GT":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
return ($compare1)($l1, $r1);
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($__global_Data_Interval_compare, $compare1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqRecurringInterval2) {
  $__fn = function($__dollar____unused) use ($eqRecurringInterval2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqRecurringInterval2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_ordRecurringInterval'] = __NAMESPACE__ . '\\Data_Interval_ordRecurringInterval';




















