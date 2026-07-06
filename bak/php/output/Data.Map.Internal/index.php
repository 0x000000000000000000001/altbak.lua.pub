<?php

namespace Data\Map\Internal;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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
      case 'Data_Map_Internal_add': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semiring_semiringInt'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Map_Internal_greaterThan': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  $compare3 = $__case_res_0;
  return (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "GT":
return true;
break;
default:
return false;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Map_Internal_lessThanOrEq': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  $compare3 = $__case_res_0;
  return (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "GT":
return false;
break;
default:
return true;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Map_Internal_append': $v = (function() {
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
      case 'Data_Map_Internal_show': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Show_showInt'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Map_Internal_map': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Map_Internal_compose': $v = (function() {
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
      case 'Data_Map_Internal_conj': $v = (function() {
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
      case 'Data_Map_Internal_identity': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->identity;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Map_Internal_eq': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Map_Internal_lessThan': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  $compare3 = $__case_res_0;
  return (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return true;
break;
default:
return false;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Map_Internal_abs': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  $compare3 = $__case_res_0;
  $greaterThanOrEq1 = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return false;
break;
default:
return true;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return ((function() use ($dict, $greaterThanOrEq1) {
  $__fn = function($dictRing) use ($dict, $greaterThanOrEq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->zero;
} else {
throw new \Exception("Pattern match failure");
};
$zero = $__case_res_1;
$__case_0 = $dictRing;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->sub;
} else {
throw new \Exception("Pattern match failure");
};
$sub1 = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->zero;
} else {
throw new \Exception("Pattern match failure");
};
$zero = $__case_res_3;
$negate1 = (function() use ($sub1, $zero) {
  $__fn = function($a) use ($sub1, $zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($sub1)($zero, $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($greaterThanOrEq1, $zero, $negate1) {
  $__body = function($x) use ($greaterThanOrEq1, $zero, $negate1) {
    $__case_0 = ($greaterThanOrEq1)($x, $zero);
    switch ($__case_0) {
case true:
return $x;
break;
default:
return ($negate1)($x);
break;
};
  };
  $__fn = function($x) use ($greaterThanOrEq1, $zero, $negate1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($GLOBALS['Data_Ring_ringInt'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringInt')));
})(); break;
      case 'Data_Map_Internal_sub': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ring_ringInt'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sub;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Map_Internal_disj': $v = (function() {
  $__case_0 = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->disj;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Map_Internal_Leaf': $v = ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")); break;
      case 'Data_Map_Internal_IterLeaf': $v = ($GLOBALS['__phpurs_data0_IterLeaf'] ??= new Phpurs_Data0("IterLeaf")); break;
      case 'Data_Map_Internal_IterDone': $v = ($GLOBALS['__phpurs_data0_IterDone'] ??= new Phpurs_Data0("IterDone")); break;
      case 'Data_Map_Internal_unsafeNode': $v = (($GLOBALS['Data_Function_Uncurried_mkFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn4')))((function() {
  $__body = function($k, $v, $l, $r) {
    $__global_Data_Map_Internal_add = ($GLOBALS['Data_Map_Internal_add'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_add'));
    $__global_Data_Map_Internal_greaterThan = ($GLOBALS['Data_Map_Internal_greaterThan'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_greaterThan'));
    $__case_0 = $l;
    switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())(1, 1, $k, $v, $l, $r);
break;
case "Node":
$h2 = ($__case_0)->v0;
$s2 = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())(($__global_Data_Map_Internal_add)(1, $h2), ($__global_Data_Map_Internal_add)(1, $s2), $k, $v, $l, $r);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
case "Node":
$h1 = ($__case_0)->v0;
$s1 = ($__case_0)->v1;
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())(($__global_Data_Map_Internal_add)(1, $h1), ($__global_Data_Map_Internal_add)(1, $s1), $k, $v, $l, $r);
break;
case "Node":
$h2 = ($__case_0)->v0;
$s2 = ($__case_0)->v1;
$__case_0 = ($__global_Data_Map_Internal_greaterThan)($h1, $h2);
$__case_res_0 = null;
switch ($__case_0) {
case true:
$__case_res_0 = $h1;
break;
default:
$__case_res_0 = $h2;
break;
};
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())(($__global_Data_Map_Internal_add)(1, $__case_res_0), ($__global_Data_Map_Internal_add)(($__global_Data_Map_Internal_add)(1, $s1), $s2), $k, $v, $l, $r);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($k, $v = null, $l = null, $r = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
    if ($__num === 2) return function($l, $r = null) use ($k, $v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $l, $r);
      if ($__num2 === 1) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
      return phpurs_curry_fallback($__fn, [$k, $v], 4);
    };
    if ($__num === 1) return function($v, $l = null, $r = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($k, $v, $l, $r);
      if ($__num2 === 2) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
      if ($__num2 === 1) return function($l, $r = null) use ($k, $v, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($k, $v, $l, $r);
        if ($__num3 === 1) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
        return phpurs_curry_fallback($__fn, [$k, $v], 4);
      };
      return phpurs_curry_fallback($__fn, [$k], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($k, $v, $l, $r);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Map_Internal_toMapIter': $v = (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("IterNode", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_IterLeaf'] ??= new Phpurs_Data0("IterLeaf"))); break;
      case 'Data_Map_Internal_unsafeBalancedNode': $v = (function() {
  $height = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Leaf":
return 0;
break;
case "Node":
$h = ($__case_0)->v0;
return $h;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  $rotateLeft = (($GLOBALS['Data_Function_Uncurried_mkFn7'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn7')))((function() {
  $__body = function($k, $v, $l, $rk, $rv, $rl, $rr) {
    $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
    $__global_Data_Map_Internal_unsafeNode = ($GLOBALS['Data_Map_Internal_unsafeNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeNode'));
    $__case_0 = $rl;
    switch (($__case_0)->tag) {
case "Node":
$lh = ($__case_0)->v0;
$lk = ($__case_0)->v2;
$lv = ($__case_0)->v3;
$ll = ($__case_0)->v4;
$lr = ($__case_0)->v5;
return "/* Unsupported: Guards not supported */";
break;
default:
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeNode, $rk, $rv, ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeNode, $k, $v, $l, $rl), $rr);
break;
};
  };
  $__fn = function($k, $v = null, $l = null, $rk = null, $rv = null, $rl = null, $rr = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 7) {
    return phpurs_curry_fallback($__fn, func_get_args(), 7);
  }
    $__res = $__body($k, $v, $l, $rk, $rv, $rl, $rr);
  return $__num > 7 ? $__res(...array_slice(func_get_args(), 7)) : $__res;
  };
  return $__fn;
})());
  $rotateRight = (($GLOBALS['Data_Function_Uncurried_mkFn7'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn7')))((function() {
  $__body = function($k, $v, $lk, $lv, $ll, $lr, $r) {
    $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
    $__global_Data_Map_Internal_unsafeNode = ($GLOBALS['Data_Map_Internal_unsafeNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeNode'));
    $__case_0 = $lr;
    switch (($__case_0)->tag) {
case "Node":
$rh = ($__case_0)->v0;
$rk = ($__case_0)->v2;
$rv = ($__case_0)->v3;
$rl = ($__case_0)->v4;
$rr = ($__case_0)->v5;
return "/* Unsupported: Guards not supported */";
break;
default:
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeNode, $lk, $lv, $ll, ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeNode, $k, $v, $lr, $r));
break;
};
  };
  $__fn = function($k, $v = null, $lk = null, $lv = null, $ll = null, $lr = null, $r = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 7) {
    return phpurs_curry_fallback($__fn, func_get_args(), 7);
  }
    $__res = $__body($k, $v, $lk, $lv, $ll, $lr, $r);
  return $__num > 7 ? $__res(...array_slice(func_get_args(), 7)) : $__res;
  };
  return $__fn;
})());
  return (($GLOBALS['Data_Function_Uncurried_mkFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn4')))((function() {
  $__body = function($k, $v, $l, $r) {
    $__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
    $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
    $__global_Data_Map_Internal_unsafeNode = ($GLOBALS['Data_Map_Internal_unsafeNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeNode'));
    $__case_0 = $l;
    switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
return ($__global_Data_Map_Internal_singleton)($k, $v);
break;
case "Node":
$rh = ($__case_0)->v0;
$rk = ($__case_0)->v2;
$rv = ($__case_0)->v3;
$rl = ($__case_0)->v4;
$rr = ($__case_0)->v5;
return "/* Unsupported: Guards not supported */";
break;
default:
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeNode, $k, $v, $l, $r);
break;
};
break;
case "Node":
$lh = ($__case_0)->v0;
$lk = ($__case_0)->v2;
$lv = ($__case_0)->v3;
$ll = ($__case_0)->v4;
$lr = ($__case_0)->v5;
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Node":
$rh = ($__case_0)->v0;
$rk = ($__case_0)->v2;
$rv = ($__case_0)->v3;
$rl = ($__case_0)->v4;
$rr = ($__case_0)->v5;
return "/* Unsupported: Guards not supported */";
break;
case "Leaf":
return "/* Unsupported: Guards not supported */";
break;
default:
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeNode, $k, $v, $l, $r);
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($k, $v = null, $l = null, $r = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
    if ($__num === 2) return function($l, $r = null) use ($k, $v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $l, $r);
      if ($__num2 === 1) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
      return phpurs_curry_fallback($__fn, [$k, $v], 4);
    };
    if ($__num === 1) return function($v, $l = null, $r = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($k, $v, $l, $r);
      if ($__num2 === 2) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
      if ($__num2 === 1) return function($l, $r = null) use ($k, $v, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($k, $v, $l, $r);
        if ($__num3 === 1) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
        return phpurs_curry_fallback($__fn, [$k, $v], 4);
      };
      return phpurs_curry_fallback($__fn, [$k], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($k, $v, $l, $r);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})());
})(); break;
      case 'Data_Map_Internal_unsafeSplit': $v = (($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3')))((function() {
  $__body = function($comp, $k, $m) {
    $__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
    $__global_Data_Map_Internal_unsafeSplit = ($GLOBALS['Data_Map_Internal_unsafeSplit'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeSplit'));
    $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
    $__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
    $__case_0 = $m;
    switch (($__case_0)->tag) {
case "Leaf":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("Split", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v = ($comp)($k, $mk);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "LT":
$v1 = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeSplit, $comp, $k, $ml);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Split":
$b = ($__case_0)->v0;
$ll = ($__case_0)->v1;
$lr = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("Split", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($b, $ll, ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $lr, $mr));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
case "GT":
$v1 = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeSplit, $comp, $k, $mr);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Split":
$b = ($__case_0)->v0;
$rl = ($__case_0)->v1;
$rr = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("Split", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($b, ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, $rl), $rr);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
case "EQ":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("Split", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($mv), $ml, $mr);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($comp, $k = null, $m = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m) use ($comp, $k, &$__fn) { return $__fn($comp, $k, $m); };
    if ($__num === 1) return function($k, $m = null) use ($comp, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($comp, $k, $m);
      if ($__num2 === 1) return function($m) use ($comp, $k, &$__fn) { return $__fn($comp, $k, $m); };
      return phpurs_curry_fallback($__fn, [$comp], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($comp, $k, $m);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Map_Internal_unsafeSplitLast': $v = (($GLOBALS['Data_Function_Uncurried_mkFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn4')))((function() {
  $__body = function($k, $v, $l, $r) {
    $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
    $__global_Data_Map_Internal_unsafeSplitLast = ($GLOBALS['Data_Map_Internal_unsafeSplitLast'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeSplitLast'));
    $__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
    $__case_0 = $r;
    switch (($__case_0)->tag) {
case "Leaf":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("SplitLast", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($k, $v, $l);
break;
case "Node":
$rk = ($__case_0)->v2;
$rv = ($__case_0)->v3;
$rl = ($__case_0)->v4;
$rr = ($__case_0)->v5;
$v1 = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeSplitLast, $rk, $rv, $rl, $rr);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "SplitLast":
$k__prime__ = ($__case_0)->v0;
$v__prime__ = ($__case_0)->v1;
$t__prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("SplitLast", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($k__prime__, $v__prime__, ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $k, $v, $l, $t__prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($k, $v = null, $l = null, $r = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
    if ($__num === 2) return function($l, $r = null) use ($k, $v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $l, $r);
      if ($__num2 === 1) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
      return phpurs_curry_fallback($__fn, [$k, $v], 4);
    };
    if ($__num === 1) return function($v, $l = null, $r = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($k, $v, $l, $r);
      if ($__num2 === 2) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
      if ($__num2 === 1) return function($l, $r = null) use ($k, $v, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($k, $v, $l, $r);
        if ($__num3 === 1) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
        return phpurs_curry_fallback($__fn, [$k, $v], 4);
      };
      return phpurs_curry_fallback($__fn, [$k], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($k, $v, $l, $r);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Map_Internal_unsafeJoinNodes': $v = (($GLOBALS['Data_Function_Uncurried_mkFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn2')))((function() {
  $__body = function($v, $v1) {
    $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
    $__global_Data_Map_Internal_unsafeSplitLast = ($GLOBALS['Data_Map_Internal_unsafeSplitLast'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeSplitLast'));
    $__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_0)->tag) {
case "Leaf":
$b = $__case_1;
return $b;
break;
case "Node":
$lk = ($__case_0)->v2;
$lv = ($__case_0)->v3;
$ll = ($__case_0)->v4;
$lr = ($__case_0)->v5;
$r = $__case_1;
$v2 = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeSplitLast, $lk, $lv, $ll, $lr);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "SplitLast":
$k = ($__case_0)->v0;
$v3 = ($__case_0)->v1;
$l = ($__case_0)->v2;
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $k, $v3, $l, $r);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
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
})()); break;
      case 'Data_Map_Internal_unsafeDifference': $v = (($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3')))((function() {
  $__body = function($comp, $l, $r) {
    $__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
    $__global_Data_Map_Internal_unsafeSplit = ($GLOBALS['Data_Map_Internal_unsafeSplit'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeSplit'));
    $__global_Data_Map_Internal_unsafeDifference = ($GLOBALS['Data_Map_Internal_unsafeDifference'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeDifference'));
    $__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
    $__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
    $__case_0 = $l;
    $__case_1 = $r;
    if ((($__case_0)->tag === "Leaf")) {
return ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
} else {
switch (($__case_1)->tag) {
case "Leaf":
return $l;
break;
case "Node":
$rk = ($__case_1)->v2;
$rl = ($__case_1)->v4;
$rr = ($__case_1)->v5;
$v = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeSplit, $comp, $rk, $l);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Split":
$ll = ($__case_0)->v1;
$lr = ($__case_0)->v2;
$l__prime__ = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeDifference, $comp, $ll, $rl);
$r__prime__ = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeDifference, $comp, $lr, $rr);
return ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, $l__prime__, $r__prime__);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  };
  $__fn = function($comp, $l = null, $r = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($r) use ($comp, $l, &$__fn) { return $__fn($comp, $l, $r); };
    if ($__num === 1) return function($l, $r = null) use ($comp, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($comp, $l, $r);
      if ($__num2 === 1) return function($r) use ($comp, $l, &$__fn) { return $__fn($comp, $l, $r); };
      return phpurs_curry_fallback($__fn, [$comp], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($comp, $l, $r);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Map_Internal_unsafeIntersectionWith': $v = (($GLOBALS['Data_Function_Uncurried_mkFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn4')))((function() {
  $__body = function($comp, $app, $l, $r) {
    $__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
    $__global_Data_Map_Internal_unsafeSplit = ($GLOBALS['Data_Map_Internal_unsafeSplit'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeSplit'));
    $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
    $__global_Data_Map_Internal_unsafeIntersectionWith = ($GLOBALS['Data_Map_Internal_unsafeIntersectionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeIntersectionWith'));
    $__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
    $__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
    $__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
    $__case_0 = $l;
    $__case_1 = $r;
    if ((($__case_0)->tag === "Leaf")) {
return ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
} else {
switch (($__case_1)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
break;
case "Node":
$rk = ($__case_1)->v2;
$rv = ($__case_1)->v3;
$rl = ($__case_1)->v4;
$rr = ($__case_1)->v5;
$v = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeSplit, $comp, $rk, $l);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Split":
$lv = ($__case_0)->v0;
$ll = ($__case_0)->v1;
$lr = ($__case_0)->v2;
$l__prime__ = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeIntersectionWith, $comp, $app, $ll, $rl);
$r__prime__ = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeIntersectionWith, $comp, $app, $lr, $rr);
$__case_0 = $lv;
switch (($__case_0)->tag) {
case "Just":
$lv__prime__ = ($__case_0)->v0;
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $rk, ($app)($lv__prime__, $rv), $l__prime__, $r__prime__);
break;
case "Nothing":
return ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, $l__prime__, $r__prime__);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  };
  $__fn = function($comp, $app = null, $l = null, $r = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($r) use ($comp, $app, $l, &$__fn) { return $__fn($comp, $app, $l, $r); };
    if ($__num === 2) return function($l, $r = null) use ($comp, $app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($comp, $app, $l, $r);
      if ($__num2 === 1) return function($r) use ($comp, $app, $l, &$__fn) { return $__fn($comp, $app, $l, $r); };
      return phpurs_curry_fallback($__fn, [$comp, $app], 4);
    };
    if ($__num === 1) return function($app, $l = null, $r = null) use ($comp, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($comp, $app, $l, $r);
      if ($__num2 === 2) return function($r) use ($comp, $app, $l, &$__fn) { return $__fn($comp, $app, $l, $r); };
      if ($__num2 === 1) return function($l, $r = null) use ($comp, $app, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($comp, $app, $l, $r);
        if ($__num3 === 1) return function($r) use ($comp, $app, $l, &$__fn) { return $__fn($comp, $app, $l, $r); };
        return phpurs_curry_fallback($__fn, [$comp, $app], 4);
      };
      return phpurs_curry_fallback($__fn, [$comp], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($comp, $app, $l, $r);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Map_Internal_unsafeUnionWith': $v = (($GLOBALS['Data_Function_Uncurried_mkFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn4')))((function() {
  $__body = function($comp, $app, $l, $r) {
    $__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
    $__global_Data_Map_Internal_unsafeSplit = ($GLOBALS['Data_Map_Internal_unsafeSplit'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeSplit'));
    $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
    $__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
    $__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
    $__case_0 = $l;
    $__case_1 = $r;
    if ((($__case_0)->tag === "Leaf")) {
return $r;
} else {
switch (($__case_1)->tag) {
case "Leaf":
return $l;
break;
case "Node":
$rk = ($__case_1)->v2;
$rv = ($__case_1)->v3;
$rl = ($__case_1)->v4;
$rr = ($__case_1)->v5;
$v = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeSplit, $comp, $rk, $l);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Split":
$lv = ($__case_0)->v0;
$ll = ($__case_0)->v1;
$lr = ($__case_0)->v2;
$l__prime__ = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeUnionWith, $comp, $app, $ll, $rl);
$r__prime__ = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeUnionWith, $comp, $app, $lr, $rr);
$__case_0 = $lv;
switch (($__case_0)->tag) {
case "Just":
$lv__prime__ = ($__case_0)->v0;
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $rk, ($app)($lv__prime__, $rv), $l__prime__, $r__prime__);
break;
case "Nothing":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $rk, $rv, $l__prime__, $r__prime__);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  };
  $__fn = function($comp, $app = null, $l = null, $r = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($r) use ($comp, $app, $l, &$__fn) { return $__fn($comp, $app, $l, $r); };
    if ($__num === 2) return function($l, $r = null) use ($comp, $app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($comp, $app, $l, $r);
      if ($__num2 === 1) return function($r) use ($comp, $app, $l, &$__fn) { return $__fn($comp, $app, $l, $r); };
      return phpurs_curry_fallback($__fn, [$comp, $app], 4);
    };
    if ($__num === 1) return function($app, $l = null, $r = null) use ($comp, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($comp, $app, $l, $r);
      if ($__num2 === 2) return function($r) use ($comp, $app, $l, &$__fn) { return $__fn($comp, $app, $l, $r); };
      if ($__num2 === 1) return function($l, $r = null) use ($comp, $app, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($comp, $app, $l, $r);
        if ($__num3 === 1) return function($r) use ($comp, $app, $l, &$__fn) { return $__fn($comp, $app, $l, $r); };
        return phpurs_curry_fallback($__fn, [$comp, $app], 4);
      };
      return phpurs_curry_fallback($__fn, [$comp], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($comp, $app, $l, $r);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Map_Internal_semigroupMap1': $v = (($GLOBALS['Data_Map_Internal_semigroupMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_semigroupMap')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Map_Internal_stepUnorderedCps': $v = (($GLOBALS['Data_Map_Internal_stepWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepWith')))(($GLOBALS['Data_Map_Internal_iterMapU'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_iterMapU'))); break;
      case 'Data_Map_Internal_stepUnfoldrUnordered': $v = (function() {
  $step = (($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3')))((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
    if ($__num === 1) return function($v, $next = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $next);
      if ($__num2 === 1) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($k, $v), $next));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})());
  return (($GLOBALS['Data_Map_Internal_stepUnorderedCps'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepUnorderedCps')))($step, (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
})(); break;
      case 'Data_Map_Internal_stepUnordered': $v = (($GLOBALS['Data_Map_Internal_stepUnorderedCps'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepUnorderedCps')))((($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3')))((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
    if ($__num === 1) return function($v, $next = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $next);
      if ($__num2 === 1) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("IterNext", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($k, $v, $next);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['__phpurs_data0_IterDone'] ??= new Phpurs_Data0("IterDone")))); break;
      case 'Data_Map_Internal_iterMapR': $v = (function() {
  $go = (function() use (&$go) {
  $__fn = function($iter, $v = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($iter, &$__fn) { return $__fn($iter, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return $iter;
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
$__tco_tmp_0 = ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("IterEmit", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($k, $v1, $iter);
$__tco_tmp_1 = $l;
$iter = $__tco_tmp_0;
$v = $__tco_tmp_1;
continue 3;
break;
default:
$__tco_tmp_0 = ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("IterEmit", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($k, $v1, ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("IterNode", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($l, $iter));
$__tco_tmp_1 = $r;
$iter = $__tco_tmp_0;
$v = $__tco_tmp_1;
continue 3;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $go;
})(); break;
      case 'Data_Map_Internal_stepDescCps': $v = (($GLOBALS['Data_Map_Internal_stepWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepWith')))(($GLOBALS['Data_Map_Internal_iterMapR'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_iterMapR'))); break;
      case 'Data_Map_Internal_stepDesc': $v = (($GLOBALS['Data_Map_Internal_stepDescCps'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepDescCps')))((($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3')))((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
    if ($__num === 1) return function($v, $next = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $next);
      if ($__num2 === 1) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("IterNext", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($k, $v, $next);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['__phpurs_data0_IterDone'] ??= new Phpurs_Data0("IterDone")))); break;
      case 'Data_Map_Internal_iterMapL': $v = (function() {
  $go = (function() use (&$go) {
  $__fn = function($iter, $v = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($iter, &$__fn) { return $__fn($iter, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return $iter;
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
$__tco_tmp_0 = ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("IterEmit", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($k, $v1, $iter);
$__tco_tmp_1 = $l;
$iter = $__tco_tmp_0;
$v = $__tco_tmp_1;
continue 3;
break;
default:
$__tco_tmp_0 = ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("IterEmit", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($k, $v1, ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("IterNode", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($r, $iter));
$__tco_tmp_1 = $l;
$iter = $__tco_tmp_0;
$v = $__tco_tmp_1;
continue 3;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $go;
})(); break;
      case 'Data_Map_Internal_stepAscCps': $v = (($GLOBALS['Data_Map_Internal_stepWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepWith')))(($GLOBALS['Data_Map_Internal_iterMapL'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_iterMapL'))); break;
      case 'Data_Map_Internal_stepAsc': $v = (($GLOBALS['Data_Map_Internal_stepAscCps'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAscCps')))((($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3')))((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
    if ($__num === 1) return function($v, $next = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $next);
      if ($__num2 === 1) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("IterNext", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($k, $v, $next);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['__phpurs_data0_IterDone'] ??= new Phpurs_Data0("IterDone")))); break;
      case 'Data_Map_Internal_stepUnfoldr': $v = (function() {
  $step = (($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3')))((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
    if ($__num === 1) return function($v, $next = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $next);
      if ($__num2 === 1) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($k, $v), $next));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})());
  return (($GLOBALS['Data_Map_Internal_stepAscCps'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAscCps')))($step, (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
})(); break;
      case 'Data_Map_Internal_toUnfoldable1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Unfoldable_unfoldableArray'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_unfoldableArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->unfoldr;
} else {
throw new \Exception("Pattern match failure");
};
  return (($GLOBALS['Data_Map_Internal_compose'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_compose')))(($__case_res_0)(($GLOBALS['Data_Map_Internal_stepUnfoldr'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepUnfoldr'))), ($GLOBALS['Data_Map_Internal_toMapIter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_toMapIter')));
})(); break;
      case 'Data_Map_Internal_functorMap': $v = (object)["map" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($f, &$go) {
  $__fn = function($v) use ($f, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
break;
case "Node":
$h = ($__case_0)->v0;
$s = ($__case_0)->v1;
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($h, $s, $k, ($f)($v1), ($go)($l), ($go)($r));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Map_Internal_functorWithIndexMap': $v = (object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($f, &$go) {
  $__fn = function($v) use ($f, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
break;
case "Node":
$h = ($__case_0)->v0;
$s = ($__case_0)->v1;
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($h, $s, $k, ($f)($k, $v1), ($go)($l), ($go)($r));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_functorMap = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorMap'));
    $__res = $__global_Data_Map_Internal_functorMap;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Map_Internal_foldableMap': $v = (object)["foldr" => (function() {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Function_Uncurried_mkFn2 = ($GLOBALS['Data_Function_Uncurried_mkFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn2'));
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$go = ($__global_Data_Function_Uncurried_mkFn2)((function() use ($__global_Data_Function_Uncurried_runFn2, &$go, $f) {
  $__body = function($m__prime__, $z__prime__) use ($__global_Data_Function_Uncurried_runFn2, &$go, $f) {
    $__case_0 = $m__prime__;
    switch (($__case_0)->tag) {
case "Leaf":
return $z__prime__;
break;
case "Node":
$v = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
return ($__global_Data_Function_Uncurried_runFn2)($go, $l, ($f)($v, ($__global_Data_Function_Uncurried_runFn2)($go, $r, $z__prime__)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($m__prime__, $z__prime__ = null) use ($__global_Data_Function_Uncurried_runFn2, &$go, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z__prime__) use ($m__prime__, &$__fn) { return $__fn($m__prime__, $z__prime__); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($m__prime__, $z__prime__);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    $__res = (function() use ($__global_Data_Function_Uncurried_runFn2, &$go, $z) {
  $__fn = function($m) use ($__global_Data_Function_Uncurried_runFn2, &$go, $z, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn2)($go, $m, $z);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Function_Uncurried_mkFn2 = ($GLOBALS['Data_Function_Uncurried_mkFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn2'));
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$go = ($__global_Data_Function_Uncurried_mkFn2)((function() use ($__global_Data_Function_Uncurried_runFn2, &$go, $f) {
  $__body = function($z__prime__, $m__prime__) use ($__global_Data_Function_Uncurried_runFn2, &$go, $f) {
    $__case_0 = $m__prime__;
    switch (($__case_0)->tag) {
case "Leaf":
return $z__prime__;
break;
case "Node":
$v = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
return ($__global_Data_Function_Uncurried_runFn2)($go, ($f)(($__global_Data_Function_Uncurried_runFn2)($go, $z__prime__, $l), $v), $r);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($z__prime__, $m__prime__ = null) use ($__global_Data_Function_Uncurried_runFn2, &$go, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m__prime__) use ($z__prime__, &$__fn) { return $__fn($z__prime__, $m__prime__); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($z__prime__, $m__prime__);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    $__res = (function() use ($__global_Data_Function_Uncurried_runFn2, &$go, $z) {
  $__fn = function($m) use ($__global_Data_Function_Uncurried_runFn2, &$go, $z, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn2)($go, $z, $m);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($dict) {
  $__fn = function($dictMonoid) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append1 = $__case_res_1;
    $__res = (function() use ($mempty, $append1) {
  $__fn = function($f) use ($mempty, $append1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($mempty, $append1, &$go, $f) {
  $__fn = function($v) use ($mempty, $append1, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return $mempty;
break;
case "Node":
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
return ($append1)(($go)($l), ($append1)(($f)($v1), ($go)($r)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Map_Internal_foldableWithIndexMap': $v = (object)["foldrWithIndex" => (function() {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Function_Uncurried_mkFn2 = ($GLOBALS['Data_Function_Uncurried_mkFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn2'));
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$go = ($__global_Data_Function_Uncurried_mkFn2)((function() use ($__global_Data_Function_Uncurried_runFn2, &$go, $f) {
  $__body = function($m__prime__, $z__prime__) use ($__global_Data_Function_Uncurried_runFn2, &$go, $f) {
    $__case_0 = $m__prime__;
    switch (($__case_0)->tag) {
case "Leaf":
return $z__prime__;
break;
case "Node":
$k = ($__case_0)->v2;
$v = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
return ($__global_Data_Function_Uncurried_runFn2)($go, $l, ($f)($k, $v, ($__global_Data_Function_Uncurried_runFn2)($go, $r, $z__prime__)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($m__prime__, $z__prime__ = null) use ($__global_Data_Function_Uncurried_runFn2, &$go, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z__prime__) use ($m__prime__, &$__fn) { return $__fn($m__prime__, $z__prime__); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($m__prime__, $z__prime__);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    $__res = (function() use ($__global_Data_Function_Uncurried_runFn2, &$go, $z) {
  $__fn = function($m) use ($__global_Data_Function_Uncurried_runFn2, &$go, $z, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn2)($go, $m, $z);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Function_Uncurried_mkFn2 = ($GLOBALS['Data_Function_Uncurried_mkFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn2'));
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$go = ($__global_Data_Function_Uncurried_mkFn2)((function() use ($__global_Data_Function_Uncurried_runFn2, &$go, $f) {
  $__body = function($z__prime__, $m__prime__) use ($__global_Data_Function_Uncurried_runFn2, &$go, $f) {
    $__case_0 = $m__prime__;
    switch (($__case_0)->tag) {
case "Leaf":
return $z__prime__;
break;
case "Node":
$k = ($__case_0)->v2;
$v = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
return ($__global_Data_Function_Uncurried_runFn2)($go, ($f)($k, ($__global_Data_Function_Uncurried_runFn2)($go, $z__prime__, $l), $v), $r);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($z__prime__, $m__prime__ = null) use ($__global_Data_Function_Uncurried_runFn2, &$go, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m__prime__) use ($z__prime__, &$__fn) { return $__fn($z__prime__, $m__prime__); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($z__prime__, $m__prime__);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    $__res = (function() use ($__global_Data_Function_Uncurried_runFn2, &$go, $z) {
  $__fn = function($m) use ($__global_Data_Function_Uncurried_runFn2, &$go, $z, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn2)($go, $z, $m);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($dict) {
  $__fn = function($dictMonoid) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append1 = $__case_res_1;
    $__res = (function() use ($mempty, $append1) {
  $__fn = function($f) use ($mempty, $append1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($mempty, $append1, &$go, $f) {
  $__fn = function($v) use ($mempty, $append1, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return $mempty;
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
return ($append1)(($go)($l), ($append1)(($f)($k, $v1), ($go)($r)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_foldableMap = ($GLOBALS['Data_Map_Internal_foldableMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_foldableMap'));
    $__res = $__global_Data_Map_Internal_foldableMap;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Map_Internal_keys': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Map_Internal_foldableWithIndexMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_foldableWithIndexMap'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldrWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
  return ($__case_res_0)((function() {
  $__fn = function($k, $v = null, $acc = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($acc) use ($k, $v, &$__fn) { return $__fn($k, $v, $acc); };
    if ($__num === 1) return function($v, $acc = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $acc);
      if ($__num2 === 1) return function($acc) use ($k, $v, &$__fn) { return $__fn($k, $v, $acc); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($k, $acc);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
})(); break;
      case 'Data_Map_Internal_traversableMap': $v = (object)["traverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__case_0 = $dictApplicative;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_0;
$Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
$__case_0 = $Apply0;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_2;
    $__res = (function() use ($pure, $apply, $map1) {
  $__fn = function($f) use ($pure, $apply, $map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($pure, $apply, $map1, &$go, $f) {
  $__fn = function($v) use ($pure, $apply, $map1, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($pure)(($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
break;
case "Node":
$h = ($__case_0)->v0;
$s = ($__case_0)->v1;
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
return ($apply)(($apply)(($map1)((function() use ($h, $s, $k) {
  $__fn = function($l__prime__, $v__prime__ = null, $r__prime__ = null) use ($h, $s, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($r__prime__) use ($l__prime__, $v__prime__, &$__fn) { return $__fn($l__prime__, $v__prime__, $r__prime__); };
    if ($__num === 1) return function($v__prime__, $r__prime__ = null) use ($l__prime__, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l__prime__, $v__prime__, $r__prime__);
      if ($__num2 === 1) return function($r__prime__) use ($l__prime__, $v__prime__, &$__fn) { return $__fn($l__prime__, $v__prime__, $r__prime__); };
      return phpurs_curry_fallback($__fn, [$l__prime__], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($h, $s, $k, $v__prime__, $l__prime__, $r__prime__);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), ($go)($l)), ($f)($v1)), ($go)($r));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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
$__global_Data_Map_Internal_traversableMap = ($GLOBALS['Data_Map_Internal_traversableMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_traversableMap'));
$__global_Data_Map_Internal_identity = ($GLOBALS['Data_Map_Internal_identity'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_identity'));
$__case_0 = $__global_Data_Map_Internal_traversableMap;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_3)($dictApplicative, $__global_Data_Map_Internal_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_functorMap = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorMap'));
    $__res = $__global_Data_Map_Internal_functorMap;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_foldableMap = ($GLOBALS['Data_Map_Internal_foldableMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_foldableMap'));
    $__res = $__global_Data_Map_Internal_foldableMap;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Map_Internal_traversableWithIndexMap': $v = (object)["traverseWithIndex" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__case_0 = $dictApplicative;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_0;
$Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
$__case_0 = $Apply0;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_2;
    $__res = (function() use ($pure, $apply, $map1) {
  $__fn = function($f) use ($pure, $apply, $map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($pure, $apply, $map1, &$go, $f) {
  $__fn = function($v) use ($pure, $apply, $map1, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($pure)(($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
break;
case "Node":
$h = ($__case_0)->v0;
$s = ($__case_0)->v1;
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
return ($apply)(($apply)(($map1)((function() use ($h, $s, $k) {
  $__fn = function($l__prime__, $v__prime__ = null, $r__prime__ = null) use ($h, $s, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($r__prime__) use ($l__prime__, $v__prime__, &$__fn) { return $__fn($l__prime__, $v__prime__, $r__prime__); };
    if ($__num === 1) return function($v__prime__, $r__prime__ = null) use ($l__prime__, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l__prime__, $v__prime__, $r__prime__);
      if ($__num2 === 1) return function($r__prime__) use ($l__prime__, $v__prime__, &$__fn) { return $__fn($l__prime__, $v__prime__, $r__prime__); };
      return phpurs_curry_fallback($__fn, [$l__prime__], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($h, $s, $k, $v__prime__, $l__prime__, $r__prime__);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), ($go)($l)), ($f)($k, $v1)), ($go)($r));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_functorWithIndexMap = ($GLOBALS['Data_Map_Internal_functorWithIndexMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorWithIndexMap'));
    $__res = $__global_Data_Map_Internal_functorWithIndexMap;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_foldableWithIndexMap = ($GLOBALS['Data_Map_Internal_foldableWithIndexMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_foldableWithIndexMap'));
    $__res = $__global_Data_Map_Internal_foldableWithIndexMap;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_traversableMap = ($GLOBALS['Data_Map_Internal_traversableMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_traversableMap'));
    $__res = $__global_Data_Map_Internal_traversableMap;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Map_Internal_values': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Map_Internal_foldableMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_foldableMap'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
  return ($__case_res_0)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
})(); break;
      case 'Data_Map_Internal_empty': $v = ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };

















// Data_Map_Internal_Node
function Data_Map_Internal_Node($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_Node';
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
    return 6 < $__num ? $__res(...array_slice(func_get_args(), 6)) : $__res;
}
$GLOBALS['Data_Map_Internal_Node'] = __NAMESPACE__ . '\\Data_Map_Internal_Node';


// Data_Map_Internal_IterEmit
function Data_Map_Internal_IterEmit($value0, $value1 = null, $value2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_IterEmit';
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("IterEmit", $value0, $value1, $value2);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Map_Internal_IterEmit'] = __NAMESPACE__ . '\\Data_Map_Internal_IterEmit';

// Data_Map_Internal_IterNode
function Data_Map_Internal_IterNode($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_IterNode';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("IterNode", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Map_Internal_IterNode'] = __NAMESPACE__ . '\\Data_Map_Internal_IterNode';


// Data_Map_Internal_IterNext
function Data_Map_Internal_IterNext($value0, $value1 = null, $value2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_IterNext';
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("IterNext", $value0, $value1, $value2);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Map_Internal_IterNext'] = __NAMESPACE__ . '\\Data_Map_Internal_IterNext';

// Data_Map_Internal_Split
function Data_Map_Internal_Split($value0, $value1 = null, $value2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_Split';
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("Split", $value0, $value1, $value2);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Map_Internal_Split'] = __NAMESPACE__ . '\\Data_Map_Internal_Split';

// Data_Map_Internal_SplitLast
function Data_Map_Internal_SplitLast($value0, $value1 = null, $value2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_SplitLast';
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("SplitLast", $value0, $value1, $value2);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Map_Internal_SplitLast'] = __NAMESPACE__ . '\\Data_Map_Internal_SplitLast';



// Data_Map_Internal_stepWith
function Data_Map_Internal_stepWith($f, $next = null, $done = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_stepWith';
  if ($__num < 3) {
    if ($__num === 2) return function($done) use ($f, $next, $__fn) { return $__fn($f, $next, $done); };
    if ($__num === 1) return function($next, $done = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $next, $done);
      if ($__num2 === 1) return function($done) use ($f, $next, $__fn) { return $__fn($f, $next, $done); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
$go = (function() use ($done, $__global_Data_Unit_unit, $__global_Data_Function_Uncurried_runFn3, $next, &$go, $f) {
  $__fn = function($v) use ($done, $__global_Data_Unit_unit, $__global_Data_Function_Uncurried_runFn3, $next, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "IterLeaf":
return ($done)($__global_Data_Unit_unit);
break;
case "IterEmit":
$k = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$iter = ($__case_0)->v2;
return ($__global_Data_Function_Uncurried_runFn3)($next, $k, $v1, $iter);
break;
case "IterNode":
$m = ($__case_0)->v0;
$iter = ($__case_0)->v1;
$__tco_tmp_0 = ($f)($iter, $m);
$v = $__tco_tmp_0;
continue 2;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Map_Internal_stepWith'] = __NAMESPACE__ . '\\Data_Map_Internal_stepWith';

// Data_Map_Internal_size
function Data_Map_Internal_size($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_size';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Leaf":
return 0;
break;
case "Node":
$s = ($__case_0)->v1;
return $s;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_size'] = __NAMESPACE__ . '\\Data_Map_Internal_size';

// Data_Map_Internal_singleton
function Data_Map_Internal_singleton($k, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_singleton';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($k, $__fn) { return $__fn($k, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())(1, 1, $k, $v, ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Map_Internal_singleton'] = __NAMESPACE__ . '\\Data_Map_Internal_singleton';








// Data_Map_Internal_unionWith
function Data_Map_Internal_unionWith($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_unionWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeUnionWith, $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_unionWith'] = __NAMESPACE__ . '\\Data_Map_Internal_unionWith';

// Data_Map_Internal_union
function Data_Map_Internal_union($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_union';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = ((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeUnionWith, $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($__global_Data_Function_const);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_union'] = __NAMESPACE__ . '\\Data_Map_Internal_union';

// Data_Map_Internal_update
function Data_Map_Internal_update($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_update';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (function() use ($compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($f, $k = null) use ($compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($f, &$__fn) { return $__fn($f, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($compare, $k, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $f, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($v) use ($compare, $k, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $f, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
break;
case "Node":
$mh = ($__case_0)->v0;
$ms = ($__case_0)->v1;
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
break;
case "GT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
break;
case "EQ":
$v2 = ($f)($mv);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Nothing":
return ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, $ml, $mr);
break;
case "Just":
$mv__prime__ = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($mh, $ms, $mk, $mv__prime__, $ml, $mr);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_update'] = __NAMESPACE__ . '\\Data_Map_Internal_update';

// Data_Map_Internal_showTree
function Data_Map_Internal_showTree($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_showTree';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_append = ($GLOBALS['Data_Map_Internal_append'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_append'));
$__global_Data_Map_Internal_show = ($GLOBALS['Data_Map_Internal_show'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_show'));
$__case_0 = $dictShow;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show1 = $__case_res_0;
    $__res = (function() use ($__global_Data_Map_Internal_append, $__global_Data_Map_Internal_show, $show1) {
  $__fn = function($dictShow1) use ($__global_Data_Map_Internal_append, $__global_Data_Map_Internal_show, $show1, &$__fn) {
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
$go = (function() use ($__global_Data_Map_Internal_append, $__global_Data_Map_Internal_show, $show1, $show2, &$go) {
  $__fn = function($ind, $v = null) use ($__global_Data_Map_Internal_append, $__global_Data_Map_Internal_show, $show1, $show2, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($ind, &$__fn) { return $__fn($ind, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($__global_Data_Map_Internal_append)($ind, "Leaf");
break;
case "Node":
$h = ($__case_0)->v0;
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
return ($__global_Data_Map_Internal_append)(($__global_Data_Map_Internal_append)($ind, ($__global_Data_Map_Internal_append)("[", ($__global_Data_Map_Internal_append)(($__global_Data_Map_Internal_show)($h), ($__global_Data_Map_Internal_append)("] ", ($__global_Data_Map_Internal_append)(($show1)($k), ($__global_Data_Map_Internal_append)(" => ", ($__global_Data_Map_Internal_append)(($show2)($v1), "
"))))))), ($__global_Data_Map_Internal_append)(($__global_Data_Map_Internal_append)(($go)(($__global_Data_Map_Internal_append)($ind, "    "), $l), "
"), ($go)(($__global_Data_Map_Internal_append)($ind, "    "), $r)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)("");
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_showTree'] = __NAMESPACE__ . '\\Data_Map_Internal_showTree';

// Data_Map_Internal_semigroupMap
function Data_Map_Internal_semigroupMap($__dollar____unused, $dictOrd = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_semigroupMap';
  if ($__num < 2) {
    if ($__num === 1) return function($dictOrd) use ($__dollar____unused, $__fn) { return $__fn($__dollar____unused, $dictOrd); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$unionWith1 = (function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeUnionWith, $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($unionWith1) {
  $__fn = function($dictSemigroup) use ($unionWith1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictSemigroup;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["append" => ($unionWith1)($__case_res_1)];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Map_Internal_semigroupMap'] = __NAMESPACE__ . '\\Data_Map_Internal_semigroupMap';


// Data_Map_Internal_pop
function Data_Map_Internal_pop($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_pop';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
$__global_Data_Map_Internal_unsafeSplit = ($GLOBALS['Data_Map_Internal_unsafeSplit'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeSplit'));
$__global_Data_Map_Internal_map = ($GLOBALS['Data_Map_Internal_map'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_map'));
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (function() use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeSplit, $compare, $__global_Data_Map_Internal_map, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__body = function($k, $m) use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeSplit, $compare, $__global_Data_Map_Internal_map, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
    $v = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeSplit, $compare, $k, $m);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Split":
$x = ($__case_0)->v0;
$l = ($__case_0)->v1;
$r = ($__case_0)->v2;
return ($__global_Data_Map_Internal_map)((function() use ($__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, $l, $r) {
  $__fn = function($a) use ($__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, $l, $r, &$__fn) {
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
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, $l, $r));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($k, $m = null) use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeSplit, $compare, $__global_Data_Map_Internal_map, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($k, &$__fn) { return $__fn($k, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($k, $m);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_pop'] = __NAMESPACE__ . '\\Data_Map_Internal_pop';

// Data_Map_Internal_member
function Data_Map_Internal_member($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_member';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (function() use ($compare) {
  $__fn = function($k) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($compare, $k, &$go) {
  $__fn = function($v) use ($compare, $k, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return false;
break;
case "Node":
$mk = ($__case_0)->v2;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue 3;
break;
case "GT":
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue 3;
break;
case "EQ":
return true;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_member'] = __NAMESPACE__ . '\\Data_Map_Internal_member';

// Data_Map_Internal_mapMaybeWithKey
function Data_Map_Internal_mapMaybeWithKey($dictOrd, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_mapMaybeWithKey';
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($dictOrd, $__fn) { return $__fn($dictOrd, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
$go = (function() use ($f, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($v) use ($f, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$v2 = ($f)($k, $v1);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Just":
$v__prime__ = ($__case_0)->v0;
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $k, $v__prime__, ($go)($l), ($go)($r));
break;
case "Nothing":
return ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, ($go)($l), ($go)($r));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Map_Internal_mapMaybeWithKey'] = __NAMESPACE__ . '\\Data_Map_Internal_mapMaybeWithKey';

// Data_Map_Internal_mapMaybe
function Data_Map_Internal_mapMaybe($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_mapMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_compose = ($GLOBALS['Data_Map_Internal_compose'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_compose'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
    $__res = ($__global_Data_Map_Internal_compose)((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($f) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($f, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($v) use ($f, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$v2 = ($f)($k, $v1);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Just":
$v__prime__ = ($__case_0)->v0;
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $k, $v__prime__, ($go)($l), ($go)($r));
break;
case "Nothing":
return ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, ($go)($l), ($go)($r));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $__global_Data_Function_const);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_mapMaybe'] = __NAMESPACE__ . '\\Data_Map_Internal_mapMaybe';

// Data_Map_Internal_lookupLE
function Data_Map_Internal_lookupLE($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_lookupLE';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (function() use ($compare) {
  $__fn = function($k) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($compare, $k, &$go) {
  $__fn = function($v) use ($compare, $k, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue 3;
break;
case "GT":
$v2 = ($go)($mr);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Nothing":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())((object)["key" => $mk, "value" => $mv]);
break;
default:
$other = $__case_0;
return $other;
break;
};
break;
case "EQ":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())((object)["key" => $mk, "value" => $mv]);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_lookupLE'] = __NAMESPACE__ . '\\Data_Map_Internal_lookupLE';

// Data_Map_Internal_lookupGE
function Data_Map_Internal_lookupGE($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_lookupGE';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (function() use ($compare) {
  $__fn = function($k) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($compare, $k, &$go) {
  $__fn = function($v) use ($compare, $k, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
$v2 = ($go)($ml);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Nothing":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())((object)["key" => $mk, "value" => $mv]);
break;
default:
$other = $__case_0;
return $other;
break;
};
break;
case "GT":
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue 3;
break;
case "EQ":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())((object)["key" => $mk, "value" => $mv]);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_lookupGE'] = __NAMESPACE__ . '\\Data_Map_Internal_lookupGE';

// Data_Map_Internal_lookup
function Data_Map_Internal_lookup($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_lookup';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (function() use ($compare) {
  $__fn = function($k) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($compare, $k, &$go) {
  $__fn = function($v) use ($compare, $k, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue 3;
break;
case "GT":
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue 3;
break;
case "EQ":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($mv);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_lookup'] = __NAMESPACE__ . '\\Data_Map_Internal_lookup';

// Data_Map_Internal_iterMapU
function Data_Map_Internal_iterMapU($iter, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_iterMapU';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($iter, $__fn) { return $__fn($iter, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($iter, $v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Leaf":
return $iter;
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__case_0 = $l;
switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("IterEmit", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($k, $v1, $iter);
break;
default:
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("IterEmit", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($k, $v1, ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("IterNode", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($r, $iter));
break;
};
break;
default:
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("IterEmit", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($k, $v1, ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("IterNode", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($l, $iter));
break;
default:
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("IterEmit", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($k, $v1, ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("IterNode", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($l, ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("IterNode", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($r, $iter)));
break;
};
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($iter, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Map_Internal_iterMapU'] = __NAMESPACE__ . '\\Data_Map_Internal_iterMapU';



// Data_Map_Internal_toUnfoldableUnordered
function Data_Map_Internal_toUnfoldableUnordered($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_toUnfoldableUnordered';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_compose = ($GLOBALS['Data_Map_Internal_compose'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_compose'));
$__global_Data_Map_Internal_stepUnfoldrUnordered = ($GLOBALS['Data_Map_Internal_stepUnfoldrUnordered'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepUnfoldrUnordered'));
$__global_Data_Map_Internal_toMapIter = ($GLOBALS['Data_Map_Internal_toMapIter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_toMapIter'));
$__case_0 = $dictUnfoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->unfoldr;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Map_Internal_compose)(($__case_res_0)($__global_Data_Map_Internal_stepUnfoldrUnordered), $__global_Data_Map_Internal_toMapIter);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_toUnfoldableUnordered'] = __NAMESPACE__ . '\\Data_Map_Internal_toUnfoldableUnordered';








// Data_Map_Internal_eqMapIter
function Data_Map_Internal_eqMapIter($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_eqMapIter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_stepAsc = ($GLOBALS['Data_Map_Internal_stepAsc'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAsc'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_0;
    $__res = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($dictEq1) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
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
$go = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "IterNext":
$k1 = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$v2 = ($__global_Data_Map_Internal_stepAsc)($b);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "IterNext":
$k2 = ($__case_0)->v0;
$v21 = ($__case_0)->v1;
$b__prime__ = ($__case_0)->v2;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
case "IterDone":
return true;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (object)["eq" => $go];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_eqMapIter'] = __NAMESPACE__ . '\\Data_Map_Internal_eqMapIter';

// Data_Map_Internal_ordMapIter
function Data_Map_Internal_ordMapIter($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_ordMapIter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_stepAsc = ($GLOBALS['Data_Map_Internal_stepAsc'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAsc'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_1;
$eqMapIter1 = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($dictEq1) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
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
$go = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "IterNext":
$k1 = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$v2 = ($__global_Data_Map_Internal_stepAsc)($b);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "IterNext":
$k2 = ($__case_0)->v0;
$v21 = ($__case_0)->v1;
$b__prime__ = ($__case_0)->v2;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
case "IterDone":
return true;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (object)["eq" => $go];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($eqMapIter1, $__global_Prim_undefined, $__global_Data_Map_Internal_stepAsc, $compare) {
  $__fn = function($dictOrd1) use ($eqMapIter1, $__global_Prim_undefined, $__global_Data_Map_Internal_stepAsc, $compare, &$__fn) {
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
$compare1 = $__case_res_3;
$eqMapIter2 = ($eqMapIter1)((($dictOrd1)->Eq0)($__global_Prim_undefined));
$go = (function() use ($__global_Data_Map_Internal_stepAsc, $compare, $compare1, &$go) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, $compare, $compare1, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($b);
$v1 = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v1;
$__case_1 = $v;
if (((($__case_0)->tag === "IterNext") && (($__case_1)->tag === "IterNext"))) {
$k1 = ($__case_0)->v0;
$v11 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$k2 = ($__case_1)->v0;
$v2 = ($__case_1)->v1;
$b__prime__ = ($__case_1)->v2;
$v3 = ($compare)($k1, $k2);
$__case_0 = $v3;
switch (($__case_0)->tag) {
case "EQ":
$v4 = ($compare1)($v11, $v2);
$__case_0 = $v4;
switch (($__case_0)->tag) {
case "EQ":
$__tco_tmp_0 = $a__prime__;
$__tco_tmp_1 = $b__prime__;
$a = $__tco_tmp_0;
$b = $__tco_tmp_1;
continue 3;
break;
default:
$other = $__case_0;
return $other;
break;
};
break;
default:
$other = $__case_0;
return $other;
break;
};
} else {
if ((($__case_0)->tag === "IterDone")) {
$b__prime__ = $__case_1;
$__case_0 = $b__prime__;
switch (($__case_0)->tag) {
case "IterDone":
return ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
break;
default:
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
};
} else {
switch (($__case_1)->tag) {
case "IterDone":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (object)["compare" => $go, "Eq0" => (function() use ($eqMapIter2) {
  $__fn = function($__dollar____unused) use ($eqMapIter2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqMapIter2;
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
$GLOBALS['Data_Map_Internal_ordMapIter'] = __NAMESPACE__ . '\\Data_Map_Internal_ordMapIter';


// Data_Map_Internal_toUnfoldable
function Data_Map_Internal_toUnfoldable($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_toUnfoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_compose = ($GLOBALS['Data_Map_Internal_compose'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_compose'));
$__global_Data_Map_Internal_stepUnfoldr = ($GLOBALS['Data_Map_Internal_stepUnfoldr'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepUnfoldr'));
$__global_Data_Map_Internal_toMapIter = ($GLOBALS['Data_Map_Internal_toMapIter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_toMapIter'));
$__case_0 = $dictUnfoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->unfoldr;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Map_Internal_compose)(($__case_res_0)($__global_Data_Map_Internal_stepUnfoldr), $__global_Data_Map_Internal_toMapIter);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_toUnfoldable'] = __NAMESPACE__ . '\\Data_Map_Internal_toUnfoldable';


// Data_Map_Internal_showMap
function Data_Map_Internal_showMap($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_showMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Tuple_append = ($GLOBALS['Data_Tuple_append'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_append'));
$__global_Data_Map_Internal_append = ($GLOBALS['Data_Map_Internal_append'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_append'));
$__global_Data_Map_Internal_toUnfoldable1 = ($GLOBALS['Data_Map_Internal_toUnfoldable1'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_toUnfoldable1'));
$__case_0 = $dictShow;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show = $__case_res_0;
$showTuple = (function() use ($__global_Data_Tuple_append, $show) {
  $__fn = function($dictShow1) use ($__global_Data_Tuple_append, $show, &$__fn) {
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
$show1 = $__case_res_1;
    $__res = (object)["show" => (function() use ($__global_Data_Tuple_append, $show, $show1) {
  $__body = function($v) use ($__global_Data_Tuple_append, $show, $show1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
return ($__global_Data_Tuple_append)("(Tuple ", ($__global_Data_Tuple_append)(($show)($a), ($__global_Data_Tuple_append)(" ", ($__global_Data_Tuple_append)(($show1)($b), ")"))));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Data_Tuple_append, $show, $show1, $__body, &$__fn) {
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
    $__res = (function() use ($dict, $__global_Data_Map_Internal_append, $__global_Data_Map_Internal_toUnfoldable1) {
  $__fn = function($dictShow1) use ($dict, $__global_Data_Map_Internal_append, $__global_Data_Map_Internal_toUnfoldable1, &$__fn) {
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
    $__res = (object)["show" => (function() use ($__global_Data_Map_Internal_append, $show1, $__global_Data_Map_Internal_toUnfoldable1) {
  $__fn = function($as) use ($__global_Data_Map_Internal_append, $show1, $__global_Data_Map_Internal_toUnfoldable1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Map_Internal_append)("(fromFoldable ", ($__global_Data_Map_Internal_append)(($show1)(($__global_Data_Map_Internal_toUnfoldable1)($as)), ")"));
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
$GLOBALS['Data_Map_Internal_showMap'] = __NAMESPACE__ . '\\Data_Map_Internal_showMap';

// Data_Map_Internal_isSubmap
function Data_Map_Internal_isSubmap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_isSubmap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_conj = ($GLOBALS['Data_Map_Internal_conj'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_conj'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$lookup1 = (function() use ($compare) {
  $__fn = function($k) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($compare, $k, &$go) {
  $__fn = function($v) use ($compare, $k, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue 3;
break;
case "GT":
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue 3;
break;
case "EQ":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($mv);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($lookup1, $__global_Data_Map_Internal_conj) {
  $__fn = function($dictEq) use ($lookup1, $__global_Data_Map_Internal_conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictEq;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_1;
$go = (function() use ($lookup1, $__global_Data_Map_Internal_conj, $eq1, &$go) {
  $__fn = function($m1, $m2 = null) use ($lookup1, $__global_Data_Map_Internal_conj, $eq1, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m2) use ($m1, &$__fn) { return $__fn($m1, $m2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $m1;
switch (($__case_0)->tag) {
case "Leaf":
return true;
break;
case "Node":
$k = ($__case_0)->v2;
$v = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$v1 = ($lookup1)($k, $m2);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Nothing":
return false;
break;
case "Just":
$v__prime__ = ($__case_0)->v0;
return ($__global_Data_Map_Internal_conj)(($eq1)($v, $v__prime__), ($__global_Data_Map_Internal_conj)(($go)($l, $m2), ($go)($r, $m2)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_isSubmap'] = __NAMESPACE__ . '\\Data_Map_Internal_isSubmap';

// Data_Map_Internal_isEmpty
function Data_Map_Internal_isEmpty($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_isEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Leaf":
return true;
break;
default:
return false;
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_isEmpty'] = __NAMESPACE__ . '\\Data_Map_Internal_isEmpty';

// Data_Map_Internal_intersectionWith
function Data_Map_Internal_intersectionWith($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_intersectionWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeIntersectionWith = ($GLOBALS['Data_Map_Internal_unsafeIntersectionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeIntersectionWith'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeIntersectionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeIntersectionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeIntersectionWith, $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_intersectionWith'] = __NAMESPACE__ . '\\Data_Map_Internal_intersectionWith';

// Data_Map_Internal_intersection
function Data_Map_Internal_intersection($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_intersection';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeIntersectionWith = ($GLOBALS['Data_Map_Internal_unsafeIntersectionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeIntersectionWith'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = ((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeIntersectionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeIntersectionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeIntersectionWith, $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($__global_Data_Function_const);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_intersection'] = __NAMESPACE__ . '\\Data_Map_Internal_intersection';

// Data_Map_Internal_insertWith
function Data_Map_Internal_insertWith($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_insertWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (function() use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode) {
  $__fn = function($app, $k = null, $v = null) use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($app, $k, &$__fn) { return $__fn($app, $k, $v); };
    if ($__num === 1) return function($k, $v = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $k, $v);
      if ($__num2 === 1) return function($v) use ($app, $k, &$__fn) { return $__fn($app, $k, $v); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$go = (function() use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $app) {
  $__fn = function($v1) use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $app, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Leaf":
return ($__global_Data_Map_Internal_singleton)($k, $v);
break;
case "Node":
$mh = ($__case_0)->v0;
$ms = ($__case_0)->v1;
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "LT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
break;
case "GT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
break;
case "EQ":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($mh, $ms, $k, ($app)($mv, $v), $ml, $mr);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_insertWith'] = __NAMESPACE__ . '\\Data_Map_Internal_insertWith';

// Data_Map_Internal_insert
function Data_Map_Internal_insert($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_insert';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (function() use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode) {
  $__fn = function($k, $v = null) use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($k, &$__fn) { return $__fn($k, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go) {
  $__fn = function($v1) use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Leaf":
return ($__global_Data_Map_Internal_singleton)($k, $v);
break;
case "Node":
$mh = ($__case_0)->v0;
$ms = ($__case_0)->v1;
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "LT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
break;
case "GT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
break;
case "EQ":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($mh, $ms, $k, $v, $ml, $mr);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_insert'] = __NAMESPACE__ . '\\Data_Map_Internal_insert';









// Data_Map_Internal_foldSubmapBy
function Data_Map_Internal_foldSubmapBy($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_foldSubmapBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Data_Map_Internal_conj = ($GLOBALS['Data_Map_Internal_conj'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_conj'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_0;
$lessThan1 = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return true;
break;
default:
return false;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictOrd;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_1;
$greaterThan1 = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "GT":
return true;
break;
default:
return false;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictOrd;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_2;
$lessThanOrEq1 = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "GT":
return false;
break;
default:
return true;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($lessThan1, $__global_Data_Function_const, $greaterThan1, $__global_Data_Map_Internal_conj, $lessThanOrEq1) {
  $__fn = function($appendFn, $memptyValue = null, $kmin = null, $kmax = null, $f = null) use ($lessThan1, $__global_Data_Function_const, $greaterThan1, $__global_Data_Map_Internal_conj, $lessThanOrEq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
$__case_0 = $kmin;
$__case_res_3 = null;
switch (($__case_0)->tag) {
case "Just":
$kmin__prime__ = ($__case_0)->v0;
$__case_res_3 = (function() use ($lessThan1, $kmin__prime__) {
  $__fn = function($k) use ($lessThan1, $kmin__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($lessThan1)($k, $kmin__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
break;
case "Nothing":
$__case_res_3 = ($__global_Data_Function_const)(false);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
$tooSmall = $__case_res_3;
$__case_0 = $kmax;
$__case_res_4 = null;
switch (($__case_0)->tag) {
case "Just":
$kmax__prime__ = ($__case_0)->v0;
$__case_res_4 = (function() use ($greaterThan1, $kmax__prime__) {
  $__fn = function($k) use ($greaterThan1, $kmax__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($greaterThan1)($k, $kmax__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
break;
case "Nothing":
$__case_res_4 = ($__global_Data_Function_const)(false);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
$tooLarge = $__case_res_4;
$__case_0 = $kmin;
$__case_1 = $kmax;
$__case_res_5 = null;
if (((($__case_0)->tag === "Just") && (($__case_1)->tag === "Just"))) {
$kmin__prime__ = ($__case_0)->v0;
$kmax__prime__ = ($__case_1)->v0;
$__case_res_5 = (function() use ($__global_Data_Map_Internal_conj, $lessThanOrEq1, $kmin__prime__, $kmax__prime__) {
  $__fn = function($k) use ($__global_Data_Map_Internal_conj, $lessThanOrEq1, $kmin__prime__, $kmax__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Map_Internal_conj)(($lessThanOrEq1)($kmin__prime__, $k), ($lessThanOrEq1)($k, $kmax__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
if (((($__case_0)->tag === "Just") && (($__case_1)->tag === "Nothing"))) {
$kmin__prime__ = ($__case_0)->v0;
$__case_res_5 = (function() use ($lessThanOrEq1, $kmin__prime__) {
  $__fn = function($k) use ($lessThanOrEq1, $kmin__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($lessThanOrEq1)($kmin__prime__, $k);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
if (((($__case_0)->tag === "Nothing") && (($__case_1)->tag === "Just"))) {
$kmax__prime__ = ($__case_1)->v0;
$__case_res_5 = (function() use ($lessThanOrEq1, $kmax__prime__) {
  $__fn = function($k) use ($lessThanOrEq1, $kmax__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($lessThanOrEq1)($k, $kmax__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
if (((($__case_0)->tag === "Nothing") && (($__case_1)->tag === "Nothing"))) {
$__case_res_5 = ($__global_Data_Function_const)(true);
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
$inBounds = $__case_res_5;
$go = (function() use ($memptyValue, $appendFn, $tooSmall, &$go, $inBounds, $f, $tooLarge) {
  $__fn = function($v) use ($memptyValue, $appendFn, $tooSmall, &$go, $inBounds, $f, $tooLarge, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return $memptyValue;
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$left = ($__case_0)->v4;
$right = ($__case_0)->v5;
$__case_0 = ($tooSmall)($k);
$__case_res_6 = null;
switch ($__case_0) {
case true:
$__case_res_6 = $memptyValue;
break;
default:
$__case_res_6 = ($go)($left);
break;
};
$__case_0 = ($inBounds)($k);
$__case_res_7 = null;
switch ($__case_0) {
case true:
$__case_res_7 = ($f)($k, $v1);
break;
default:
$__case_res_7 = $memptyValue;
break;
};
$__case_0 = ($tooLarge)($k);
$__case_res_8 = null;
switch ($__case_0) {
case true:
$__case_res_8 = $memptyValue;
break;
default:
$__case_res_8 = ($go)($right);
break;
};
return ($appendFn)(($appendFn)($__case_res_6, $__case_res_7), $__case_res_8);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 5 ? $__res(...array_slice(func_get_args(), 5)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_foldSubmapBy'] = __NAMESPACE__ . '\\Data_Map_Internal_foldSubmapBy';

// Data_Map_Internal_foldSubmap
function Data_Map_Internal_foldSubmap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_foldSubmap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Data_Map_Internal_conj = ($GLOBALS['Data_Map_Internal_conj'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_conj'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_0;
$lessThan1 = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return true;
break;
default:
return false;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictOrd;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_1;
$greaterThan1 = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "GT":
return true;
break;
default:
return false;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictOrd;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_2;
$lessThanOrEq1 = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "GT":
return false;
break;
default:
return true;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$foldSubmapBy1 = (function() use ($lessThan1, $__global_Data_Function_const, $greaterThan1, $__global_Data_Map_Internal_conj, $lessThanOrEq1) {
  $__fn = function($appendFn, $memptyValue = null, $kmin = null, $kmax = null, $f = null) use ($lessThan1, $__global_Data_Function_const, $greaterThan1, $__global_Data_Map_Internal_conj, $lessThanOrEq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
$__case_0 = $kmin;
$__case_res_3 = null;
switch (($__case_0)->tag) {
case "Just":
$kmin__prime__ = ($__case_0)->v0;
$__case_res_3 = (function() use ($lessThan1, $kmin__prime__) {
  $__fn = function($k) use ($lessThan1, $kmin__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($lessThan1)($k, $kmin__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
break;
case "Nothing":
$__case_res_3 = ($__global_Data_Function_const)(false);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
$tooSmall = $__case_res_3;
$__case_0 = $kmax;
$__case_res_4 = null;
switch (($__case_0)->tag) {
case "Just":
$kmax__prime__ = ($__case_0)->v0;
$__case_res_4 = (function() use ($greaterThan1, $kmax__prime__) {
  $__fn = function($k) use ($greaterThan1, $kmax__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($greaterThan1)($k, $kmax__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
break;
case "Nothing":
$__case_res_4 = ($__global_Data_Function_const)(false);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
$tooLarge = $__case_res_4;
$__case_0 = $kmin;
$__case_1 = $kmax;
$__case_res_5 = null;
if (((($__case_0)->tag === "Just") && (($__case_1)->tag === "Just"))) {
$kmin__prime__ = ($__case_0)->v0;
$kmax__prime__ = ($__case_1)->v0;
$__case_res_5 = (function() use ($__global_Data_Map_Internal_conj, $lessThanOrEq1, $kmin__prime__, $kmax__prime__) {
  $__fn = function($k) use ($__global_Data_Map_Internal_conj, $lessThanOrEq1, $kmin__prime__, $kmax__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Map_Internal_conj)(($lessThanOrEq1)($kmin__prime__, $k), ($lessThanOrEq1)($k, $kmax__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
if (((($__case_0)->tag === "Just") && (($__case_1)->tag === "Nothing"))) {
$kmin__prime__ = ($__case_0)->v0;
$__case_res_5 = (function() use ($lessThanOrEq1, $kmin__prime__) {
  $__fn = function($k) use ($lessThanOrEq1, $kmin__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($lessThanOrEq1)($kmin__prime__, $k);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
if (((($__case_0)->tag === "Nothing") && (($__case_1)->tag === "Just"))) {
$kmax__prime__ = ($__case_1)->v0;
$__case_res_5 = (function() use ($lessThanOrEq1, $kmax__prime__) {
  $__fn = function($k) use ($lessThanOrEq1, $kmax__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($lessThanOrEq1)($k, $kmax__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
if (((($__case_0)->tag === "Nothing") && (($__case_1)->tag === "Nothing"))) {
$__case_res_5 = ($__global_Data_Function_const)(true);
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
$inBounds = $__case_res_5;
$go = (function() use ($memptyValue, $appendFn, $tooSmall, &$go, $inBounds, $f, $tooLarge) {
  $__fn = function($v) use ($memptyValue, $appendFn, $tooSmall, &$go, $inBounds, $f, $tooLarge, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return $memptyValue;
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$left = ($__case_0)->v4;
$right = ($__case_0)->v5;
$__case_0 = ($tooSmall)($k);
$__case_res_6 = null;
switch ($__case_0) {
case true:
$__case_res_6 = $memptyValue;
break;
default:
$__case_res_6 = ($go)($left);
break;
};
$__case_0 = ($inBounds)($k);
$__case_res_7 = null;
switch ($__case_0) {
case true:
$__case_res_7 = ($f)($k, $v1);
break;
default:
$__case_res_7 = $memptyValue;
break;
};
$__case_0 = ($tooLarge)($k);
$__case_res_8 = null;
switch ($__case_0) {
case true:
$__case_res_8 = $memptyValue;
break;
default:
$__case_res_8 = ($go)($right);
break;
};
return ($appendFn)(($appendFn)($__case_res_6, $__case_res_7), $__case_res_8);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 5 ? $__res(...array_slice(func_get_args(), 5)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($foldSubmapBy1, $dict) {
  $__fn = function($dictMonoid) use ($foldSubmapBy1, $dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dictMonoid;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($foldSubmapBy1)($__case_res_9, $__case_res_10);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_foldSubmap'] = __NAMESPACE__ . '\\Data_Map_Internal_foldSubmap';

// Data_Map_Internal_findMin
function Data_Map_Internal_findMin($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_findMin';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$__case_0 = $l;
switch (($__case_0)->tag) {
case "Leaf":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())((object)["key" => $k, "value" => $v1]);
break;
default:
$__tco_tmp_0 = $l;
$v = $__tco_tmp_0;
continue 3;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_findMin'] = __NAMESPACE__ . '\\Data_Map_Internal_findMin';

// Data_Map_Internal_lookupGT
function Data_Map_Internal_lookupGT($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_lookupGT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_findMin = ($GLOBALS['Data_Map_Internal_findMin'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_findMin'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (function() use ($compare, $__global_Data_Map_Internal_findMin) {
  $__fn = function($k) use ($compare, $__global_Data_Map_Internal_findMin, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($compare, $k, &$go, $__global_Data_Map_Internal_findMin) {
  $__fn = function($v) use ($compare, $k, &$go, $__global_Data_Map_Internal_findMin, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
$v2 = ($go)($ml);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Nothing":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())((object)["key" => $mk, "value" => $mv]);
break;
default:
$other = $__case_0;
return $other;
break;
};
break;
case "GT":
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue 3;
break;
case "EQ":
return ($__global_Data_Map_Internal_findMin)($mr);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_lookupGT'] = __NAMESPACE__ . '\\Data_Map_Internal_lookupGT';

// Data_Map_Internal_findMax
function Data_Map_Internal_findMax($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_findMax';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$r = ($__case_0)->v5;
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())((object)["key" => $k, "value" => $v1]);
break;
default:
$__tco_tmp_0 = $r;
$v = $__tco_tmp_0;
continue 3;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_findMax'] = __NAMESPACE__ . '\\Data_Map_Internal_findMax';

// Data_Map_Internal_lookupLT
function Data_Map_Internal_lookupLT($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_lookupLT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_findMax = ($GLOBALS['Data_Map_Internal_findMax'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_findMax'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (function() use ($compare, $__global_Data_Map_Internal_findMax) {
  $__fn = function($k) use ($compare, $__global_Data_Map_Internal_findMax, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($compare, $k, &$go, $__global_Data_Map_Internal_findMax) {
  $__fn = function($v) use ($compare, $k, &$go, $__global_Data_Map_Internal_findMax, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue 3;
break;
case "GT":
$v2 = ($go)($mr);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Nothing":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())((object)["key" => $mk, "value" => $mv]);
break;
default:
$other = $__case_0;
return $other;
break;
};
break;
case "EQ":
return ($__global_Data_Map_Internal_findMax)($ml);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_lookupLT'] = __NAMESPACE__ . '\\Data_Map_Internal_lookupLT';

// Data_Map_Internal_filterWithKey
function Data_Map_Internal_filterWithKey($dictOrd, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_filterWithKey';
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($dictOrd, $__fn) { return $__fn($dictOrd, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
return "/* Unsupported: Guards not supported */";
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Map_Internal_filterWithKey'] = __NAMESPACE__ . '\\Data_Map_Internal_filterWithKey';

// Data_Map_Internal_filterKeys
function Data_Map_Internal_filterKeys($dictOrd, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_filterKeys';
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($dictOrd, $__fn) { return $__fn($dictOrd, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
return "/* Unsupported: Guards not supported */";
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Map_Internal_filterKeys'] = __NAMESPACE__ . '\\Data_Map_Internal_filterKeys';

// Data_Map_Internal_filter
function Data_Map_Internal_filter($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_filter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_compose = ($GLOBALS['Data_Map_Internal_compose'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_compose'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
    $__res = ($__global_Data_Map_Internal_compose)((function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
return "/* Unsupported: Guards not supported */";
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $__global_Data_Function_const);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_filter'] = __NAMESPACE__ . '\\Data_Map_Internal_filter';

// Data_Map_Internal_eqMap
function Data_Map_Internal_eqMap($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_eqMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_stepAsc = ($GLOBALS['Data_Map_Internal_stepAsc'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAsc'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_0;
$eqMapIter1 = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($dictEq1) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
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
$go = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "IterNext":
$k1 = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$v2 = ($__global_Data_Map_Internal_stepAsc)($b);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "IterNext":
$k2 = ($__case_0)->v0;
$v21 = ($__case_0)->v1;
$b__prime__ = ($__case_0)->v2;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
case "IterDone":
return true;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (object)["eq" => $go];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($dict) {
  $__fn = function($dictEq1) use ($dict, &$__fn) {
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
    $__res = (object)["eq" => (function() {
  $__body = function($xs, $ys) {
    $__case_0 = $xs;
    switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
return true;
break;
default:
return false;
break;
};
break;
case "Node":
$s1 = ($__case_0)->v1;
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Node":
$s2 = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($xs, $ys = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($xs, $ys);
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
$GLOBALS['Data_Map_Internal_eqMap'] = __NAMESPACE__ . '\\Data_Map_Internal_eqMap';

// Data_Map_Internal_ordMap
function Data_Map_Internal_ordMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_ordMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_stepAsc = ($GLOBALS['Data_Map_Internal_stepAsc'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAsc'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Map_Internal_toMapIter = ($GLOBALS['Data_Map_Internal_toMapIter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_toMapIter'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_1;
$eqMapIter1 = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($dictEq1) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
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
$go = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "IterNext":
$k1 = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$v2 = ($__global_Data_Map_Internal_stepAsc)($b);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "IterNext":
$k2 = ($__case_0)->v0;
$v21 = ($__case_0)->v1;
$b__prime__ = ($__case_0)->v2;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
case "IterDone":
return true;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (object)["eq" => $go];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$ordMapIter1 = (function() use ($eqMapIter1, $__global_Prim_undefined, $__global_Data_Map_Internal_stepAsc, $compare) {
  $__fn = function($dictOrd1) use ($eqMapIter1, $__global_Prim_undefined, $__global_Data_Map_Internal_stepAsc, $compare, &$__fn) {
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
$compare1 = $__case_res_3;
$eqMapIter2 = ($eqMapIter1)((($dictOrd1)->Eq0)($__global_Prim_undefined));
$go = (function() use ($__global_Data_Map_Internal_stepAsc, $compare, $compare1, &$go) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, $compare, $compare1, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($b);
$v1 = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v1;
$__case_1 = $v;
if (((($__case_0)->tag === "IterNext") && (($__case_1)->tag === "IterNext"))) {
$k1 = ($__case_0)->v0;
$v11 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$k2 = ($__case_1)->v0;
$v2 = ($__case_1)->v1;
$b__prime__ = ($__case_1)->v2;
$v3 = ($compare)($k1, $k2);
$__case_0 = $v3;
switch (($__case_0)->tag) {
case "EQ":
$v4 = ($compare1)($v11, $v2);
$__case_0 = $v4;
switch (($__case_0)->tag) {
case "EQ":
$__tco_tmp_0 = $a__prime__;
$__tco_tmp_1 = $b__prime__;
$a = $__tco_tmp_0;
$b = $__tco_tmp_1;
continue 3;
break;
default:
$other = $__case_0;
return $other;
break;
};
break;
default:
$other = $__case_0;
return $other;
break;
};
} else {
if ((($__case_0)->tag === "IterDone")) {
$b__prime__ = $__case_1;
$__case_0 = $b__prime__;
switch (($__case_0)->tag) {
case "IterDone":
return ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
break;
default:
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
};
} else {
switch (($__case_1)->tag) {
case "IterDone":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (object)["compare" => $go, "Eq0" => (function() use ($eqMapIter2) {
  $__fn = function($__dollar____unused) use ($eqMapIter2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqMapIter2;
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
$eqMapIter1 = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($dictEq1) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
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
$go = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "IterNext":
$k1 = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$v2 = ($__global_Data_Map_Internal_stepAsc)($b);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "IterNext":
$k2 = ($__case_0)->v0;
$v21 = ($__case_0)->v1;
$b__prime__ = ($__case_0)->v2;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
case "IterDone":
return true;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (object)["eq" => $go];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$eqMap1 = (function() use ($dict) {
  $__fn = function($dictEq1) use ($dict, &$__fn) {
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
    $__res = (object)["eq" => (function() {
  $__body = function($xs, $ys) {
    $__case_0 = $xs;
    switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
return true;
break;
default:
return false;
break;
};
break;
case "Node":
$s1 = ($__case_0)->v1;
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Node":
$s2 = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($xs, $ys = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($xs, $ys);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($dict, $eqMap1, $__global_Prim_undefined, $__global_Data_Map_Internal_toMapIter) {
  $__fn = function($dictOrd1) use ($dict, $eqMap1, $__global_Prim_undefined, $__global_Data_Map_Internal_toMapIter, &$__fn) {
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
$compare = $__case_res_7;
$eqMap2 = ($eqMap1)((($dictOrd1)->Eq0)($__global_Prim_undefined));
    $__res = (object)["compare" => (function() use ($compare, $__global_Data_Map_Internal_toMapIter) {
  $__body = function($xs, $ys) use ($compare, $__global_Data_Map_Internal_toMapIter) {
    $__case_0 = $xs;
    switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
break;
default:
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
};
break;
default:
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
return ($compare)(($__global_Data_Map_Internal_toMapIter)($xs), ($__global_Data_Map_Internal_toMapIter)($ys));
break;
};
break;
};
  };
  $__fn = function($xs, $ys = null) use ($compare, $__global_Data_Map_Internal_toMapIter, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($xs, $ys);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqMap2) {
  $__fn = function($__dollar____unused) use ($eqMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqMap2;
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
$GLOBALS['Data_Map_Internal_ordMap'] = __NAMESPACE__ . '\\Data_Map_Internal_ordMap';

// Data_Map_Internal_eq1Map
function Data_Map_Internal_eq1Map($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_eq1Map';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_stepAsc = ($GLOBALS['Data_Map_Internal_stepAsc'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAsc'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_0;
$eqMapIter1 = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($dictEq1) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
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
$go = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "IterNext":
$k1 = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$v2 = ($__global_Data_Map_Internal_stepAsc)($b);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "IterNext":
$k2 = ($__case_0)->v0;
$v21 = ($__case_0)->v1;
$b__prime__ = ($__case_0)->v2;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
case "IterDone":
return true;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (object)["eq" => $go];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$eqMap1 = (function() use ($dict) {
  $__fn = function($dictEq1) use ($dict, &$__fn) {
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
    $__res = (object)["eq" => (function() {
  $__body = function($xs, $ys) {
    $__case_0 = $xs;
    switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
return true;
break;
default:
return false;
break;
};
break;
case "Node":
$s1 = ($__case_0)->v1;
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Node":
$s2 = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($xs, $ys = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($xs, $ys);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (object)["eq1" => (function() use ($dict) {
  $__body = function($dictEq1) use ($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictEq1) use ($dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($dictEq1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_eq1Map'] = __NAMESPACE__ . '\\Data_Map_Internal_eq1Map';

// Data_Map_Internal_ord1Map
function Data_Map_Internal_ord1Map($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_ord1Map';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_stepAsc = ($GLOBALS['Data_Map_Internal_stepAsc'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAsc'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Map_Internal_toMapIter = ($GLOBALS['Data_Map_Internal_toMapIter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_toMapIter'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_1;
$eqMapIter1 = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($dictEq1) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
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
$go = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "IterNext":
$k1 = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$v2 = ($__global_Data_Map_Internal_stepAsc)($b);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "IterNext":
$k2 = ($__case_0)->v0;
$v21 = ($__case_0)->v1;
$b__prime__ = ($__case_0)->v2;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
case "IterDone":
return true;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (object)["eq" => $go];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$ordMapIter1 = (function() use ($eqMapIter1, $__global_Prim_undefined, $__global_Data_Map_Internal_stepAsc, $compare) {
  $__fn = function($dictOrd1) use ($eqMapIter1, $__global_Prim_undefined, $__global_Data_Map_Internal_stepAsc, $compare, &$__fn) {
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
$compare1 = $__case_res_3;
$eqMapIter2 = ($eqMapIter1)((($dictOrd1)->Eq0)($__global_Prim_undefined));
$go = (function() use ($__global_Data_Map_Internal_stepAsc, $compare, $compare1, &$go) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, $compare, $compare1, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($b);
$v1 = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v1;
$__case_1 = $v;
if (((($__case_0)->tag === "IterNext") && (($__case_1)->tag === "IterNext"))) {
$k1 = ($__case_0)->v0;
$v11 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$k2 = ($__case_1)->v0;
$v2 = ($__case_1)->v1;
$b__prime__ = ($__case_1)->v2;
$v3 = ($compare)($k1, $k2);
$__case_0 = $v3;
switch (($__case_0)->tag) {
case "EQ":
$v4 = ($compare1)($v11, $v2);
$__case_0 = $v4;
switch (($__case_0)->tag) {
case "EQ":
$__tco_tmp_0 = $a__prime__;
$__tco_tmp_1 = $b__prime__;
$a = $__tco_tmp_0;
$b = $__tco_tmp_1;
continue 3;
break;
default:
$other = $__case_0;
return $other;
break;
};
break;
default:
$other = $__case_0;
return $other;
break;
};
} else {
if ((($__case_0)->tag === "IterDone")) {
$b__prime__ = $__case_1;
$__case_0 = $b__prime__;
switch (($__case_0)->tag) {
case "IterDone":
return ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
break;
default:
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
};
} else {
switch (($__case_1)->tag) {
case "IterDone":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (object)["compare" => $go, "Eq0" => (function() use ($eqMapIter2) {
  $__fn = function($__dollar____unused) use ($eqMapIter2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqMapIter2;
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
$eqMapIter1 = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($dictEq1) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
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
$go = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "IterNext":
$k1 = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$v2 = ($__global_Data_Map_Internal_stepAsc)($b);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "IterNext":
$k2 = ($__case_0)->v0;
$v21 = ($__case_0)->v1;
$b__prime__ = ($__case_0)->v2;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
case "IterDone":
return true;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (object)["eq" => $go];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$eqMap1 = (function() use ($dict) {
  $__fn = function($dictEq1) use ($dict, &$__fn) {
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
    $__res = (object)["eq" => (function() {
  $__body = function($xs, $ys) {
    $__case_0 = $xs;
    switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
return true;
break;
default:
return false;
break;
};
break;
case "Node":
$s1 = ($__case_0)->v1;
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Node":
$s2 = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($xs, $ys = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($xs, $ys);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$ordMap1 = (function() use ($dict, $eqMap1, $__global_Prim_undefined, $__global_Data_Map_Internal_toMapIter) {
  $__fn = function($dictOrd1) use ($dict, $eqMap1, $__global_Prim_undefined, $__global_Data_Map_Internal_toMapIter, &$__fn) {
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
$compare = $__case_res_7;
$eqMap2 = ($eqMap1)((($dictOrd1)->Eq0)($__global_Prim_undefined));
    $__res = (object)["compare" => (function() use ($compare, $__global_Data_Map_Internal_toMapIter) {
  $__body = function($xs, $ys) use ($compare, $__global_Data_Map_Internal_toMapIter) {
    $__case_0 = $xs;
    switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
break;
default:
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
};
break;
default:
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
return ($compare)(($__global_Data_Map_Internal_toMapIter)($xs), ($__global_Data_Map_Internal_toMapIter)($ys));
break;
};
break;
};
  };
  $__fn = function($xs, $ys = null) use ($compare, $__global_Data_Map_Internal_toMapIter, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($xs, $ys);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqMap2) {
  $__fn = function($__dollar____unused) use ($eqMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqMap2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_8;
$eqMapIter1 = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($dictEq1) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictEq1;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_9;
$go = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "IterNext":
$k1 = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$v2 = ($__global_Data_Map_Internal_stepAsc)($b);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "IterNext":
$k2 = ($__case_0)->v0;
$v21 = ($__case_0)->v1;
$b__prime__ = ($__case_0)->v2;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
case "IterDone":
return true;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (object)["eq" => $go];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$eqMap1 = (function() use ($dict) {
  $__fn = function($dictEq1) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_10;
    $__res = (object)["eq" => (function() {
  $__body = function($xs, $ys) {
    $__case_0 = $xs;
    switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
return true;
break;
default:
return false;
break;
};
break;
case "Node":
$s1 = ($__case_0)->v1;
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Node":
$s2 = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($xs, $ys = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($xs, $ys);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$eq1Map1 = (object)["eq1" => (function() use ($dict) {
  $__body = function($dictEq1) use ($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictEq1) use ($dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($dictEq1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["compare1" => (function() use ($dict) {
  $__body = function($dictOrd1) use ($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictOrd1) use ($dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($dictOrd1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use ($eq1Map1) {
  $__fn = function($__dollar____unused) use ($eq1Map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eq1Map1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_ord1Map'] = __NAMESPACE__ . '\\Data_Map_Internal_ord1Map';


// Data_Map_Internal_fromFoldable
function Data_Map_Internal_fromFoldable($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_fromFoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$insert1 = (function() use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode) {
  $__fn = function($k, $v = null) use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($k, &$__fn) { return $__fn($k, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go) {
  $__fn = function($v1) use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Leaf":
return ($__global_Data_Map_Internal_singleton)($k, $v);
break;
case "Node":
$mh = ($__case_0)->v0;
$ms = ($__case_0)->v1;
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "LT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
break;
case "GT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
break;
case "EQ":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($mh, $ms, $k, $v, $ml, $mr);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($insert1) {
  $__fn = function($dictFoldable) use ($insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_1)((function() use ($insert1) {
  $__body = function($m, $v) use ($insert1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$k = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
return ($insert1)($k, $v1, $m);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($m, $v = null) use ($insert1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($m, &$__fn) { return $__fn($m, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($m, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_fromFoldable'] = __NAMESPACE__ . '\\Data_Map_Internal_fromFoldable';

// Data_Map_Internal_fromFoldableWith
function Data_Map_Internal_fromFoldableWith($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_fromFoldableWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$insertWith1 = (function() use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode) {
  $__fn = function($app, $k = null, $v = null) use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($app, $k, &$__fn) { return $__fn($app, $k, $v); };
    if ($__num === 1) return function($k, $v = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $k, $v);
      if ($__num2 === 1) return function($v) use ($app, $k, &$__fn) { return $__fn($app, $k, $v); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$go = (function() use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $app) {
  $__fn = function($v1) use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $app, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Leaf":
return ($__global_Data_Map_Internal_singleton)($k, $v);
break;
case "Node":
$mh = ($__case_0)->v0;
$ms = ($__case_0)->v1;
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "LT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
break;
case "GT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
break;
case "EQ":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($mh, $ms, $k, ($app)($mv, $v), $ml, $mr);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($insertWith1, $__global_Data_Function_flip) {
  $__fn = function($dictFoldable) use ($insertWith1, $__global_Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl = $__case_res_1;
    $__res = (function() use ($insertWith1, $__global_Data_Function_flip, $foldl) {
  $__fn = function($f) use ($insertWith1, $__global_Data_Function_flip, $foldl, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$f__prime__ = ($insertWith1)(($__global_Data_Function_flip)($f));
    $__res = ($foldl)((function() use ($f__prime__) {
  $__body = function($m, $v) use ($f__prime__) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$k = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
return ($f__prime__)($k, $v1, $m);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($m, $v = null) use ($f__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($m, &$__fn) { return $__fn($m, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($m, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_fromFoldableWith'] = __NAMESPACE__ . '\\Data_Map_Internal_fromFoldableWith';

// Data_Map_Internal_fromFoldableWithIndex
function Data_Map_Internal_fromFoldableWithIndex($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_fromFoldableWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$insert1 = (function() use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode) {
  $__fn = function($k, $v = null) use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($k, &$__fn) { return $__fn($k, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go) {
  $__fn = function($v1) use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Leaf":
return ($__global_Data_Map_Internal_singleton)($k, $v);
break;
case "Node":
$mh = ($__case_0)->v0;
$ms = ($__case_0)->v1;
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "LT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
break;
case "GT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
break;
case "EQ":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($mh, $ms, $k, $v, $ml, $mr);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($insert1) {
  $__fn = function($dictFoldableWithIndex) use ($insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldableWithIndex;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->foldlWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_1)((function() use ($insert1) {
  $__fn = function($k, $m = null, $v = null) use ($insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($k, $m, &$__fn) { return $__fn($k, $m, $v); };
    if ($__num === 1) return function($m, $v = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $m, $v);
      if ($__num2 === 1) return function($v) use ($k, $m, &$__fn) { return $__fn($k, $m, $v); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($insert1)($k, $v, $m);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_fromFoldableWithIndex'] = __NAMESPACE__ . '\\Data_Map_Internal_fromFoldableWithIndex';

// Data_Map_Internal_monoidSemigroupMap
function Data_Map_Internal_monoidSemigroupMap($__dollar____unused, $dictOrd = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_monoidSemigroupMap';
  if ($__num < 2) {
    if ($__num === 1) return function($dictOrd) use ($__dollar____unused, $__fn) { return $__fn($__dollar____unused, $dictOrd); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Map_Internal_semigroupMap1 = ($GLOBALS['Data_Map_Internal_semigroupMap1'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_semigroupMap1'));
$semigroupMap2 = ($__global_Data_Map_Internal_semigroupMap1)($dictOrd);
    $__res = (function() use ($semigroupMap2) {
  $__fn = function($dictSemigroup) use ($semigroupMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$semigroupMap3 = ($semigroupMap2)($dictSemigroup);
    $__res = (object)["mempty" => ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")), "Semigroup0" => (function() use ($semigroupMap3) {
  $__fn = function($__dollar____unused) use ($semigroupMap3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupMap3;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Map_Internal_monoidSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_Internal_monoidSemigroupMap';

// Data_Map_Internal_submap
function Data_Map_Internal_submap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_submap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Data_Map_Internal_conj = ($GLOBALS['Data_Map_Internal_conj'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_conj'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
$__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_0;
$lessThan1 = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return true;
break;
default:
return false;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictOrd;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_1;
$greaterThan1 = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "GT":
return true;
break;
default:
return false;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictOrd;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_2;
$lessThanOrEq1 = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "GT":
return false;
break;
default:
return true;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$foldSubmapBy1 = (function() use ($lessThan1, $__global_Data_Function_const, $greaterThan1, $__global_Data_Map_Internal_conj, $lessThanOrEq1) {
  $__fn = function($appendFn, $memptyValue = null, $kmin = null, $kmax = null, $f = null) use ($lessThan1, $__global_Data_Function_const, $greaterThan1, $__global_Data_Map_Internal_conj, $lessThanOrEq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
$__case_0 = $kmin;
$__case_res_3 = null;
switch (($__case_0)->tag) {
case "Just":
$kmin__prime__ = ($__case_0)->v0;
$__case_res_3 = (function() use ($lessThan1, $kmin__prime__) {
  $__fn = function($k) use ($lessThan1, $kmin__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($lessThan1)($k, $kmin__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
break;
case "Nothing":
$__case_res_3 = ($__global_Data_Function_const)(false);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
$tooSmall = $__case_res_3;
$__case_0 = $kmax;
$__case_res_4 = null;
switch (($__case_0)->tag) {
case "Just":
$kmax__prime__ = ($__case_0)->v0;
$__case_res_4 = (function() use ($greaterThan1, $kmax__prime__) {
  $__fn = function($k) use ($greaterThan1, $kmax__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($greaterThan1)($k, $kmax__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
break;
case "Nothing":
$__case_res_4 = ($__global_Data_Function_const)(false);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
$tooLarge = $__case_res_4;
$__case_0 = $kmin;
$__case_1 = $kmax;
$__case_res_5 = null;
if (((($__case_0)->tag === "Just") && (($__case_1)->tag === "Just"))) {
$kmin__prime__ = ($__case_0)->v0;
$kmax__prime__ = ($__case_1)->v0;
$__case_res_5 = (function() use ($__global_Data_Map_Internal_conj, $lessThanOrEq1, $kmin__prime__, $kmax__prime__) {
  $__fn = function($k) use ($__global_Data_Map_Internal_conj, $lessThanOrEq1, $kmin__prime__, $kmax__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Map_Internal_conj)(($lessThanOrEq1)($kmin__prime__, $k), ($lessThanOrEq1)($k, $kmax__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
if (((($__case_0)->tag === "Just") && (($__case_1)->tag === "Nothing"))) {
$kmin__prime__ = ($__case_0)->v0;
$__case_res_5 = (function() use ($lessThanOrEq1, $kmin__prime__) {
  $__fn = function($k) use ($lessThanOrEq1, $kmin__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($lessThanOrEq1)($kmin__prime__, $k);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
if (((($__case_0)->tag === "Nothing") && (($__case_1)->tag === "Just"))) {
$kmax__prime__ = ($__case_1)->v0;
$__case_res_5 = (function() use ($lessThanOrEq1, $kmax__prime__) {
  $__fn = function($k) use ($lessThanOrEq1, $kmax__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($lessThanOrEq1)($k, $kmax__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
if (((($__case_0)->tag === "Nothing") && (($__case_1)->tag === "Nothing"))) {
$__case_res_5 = ($__global_Data_Function_const)(true);
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
$inBounds = $__case_res_5;
$go = (function() use ($memptyValue, $appendFn, $tooSmall, &$go, $inBounds, $f, $tooLarge) {
  $__fn = function($v) use ($memptyValue, $appendFn, $tooSmall, &$go, $inBounds, $f, $tooLarge, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return $memptyValue;
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$left = ($__case_0)->v4;
$right = ($__case_0)->v5;
$__case_0 = ($tooSmall)($k);
$__case_res_6 = null;
switch ($__case_0) {
case true:
$__case_res_6 = $memptyValue;
break;
default:
$__case_res_6 = ($go)($left);
break;
};
$__case_0 = ($inBounds)($k);
$__case_res_7 = null;
switch ($__case_0) {
case true:
$__case_res_7 = ($f)($k, $v1);
break;
default:
$__case_res_7 = $memptyValue;
break;
};
$__case_0 = ($tooLarge)($k);
$__case_res_8 = null;
switch ($__case_0) {
case true:
$__case_res_8 = $memptyValue;
break;
default:
$__case_res_8 = ($go)($right);
break;
};
return ($appendFn)(($appendFn)($__case_res_6, $__case_res_7), $__case_res_8);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 5 ? $__res(...array_slice(func_get_args(), 5)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictOrd;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_9;
$union1 = ((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeUnionWith, $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($__global_Data_Function_const);
    $__res = (function() use ($foldSubmapBy1, $union1, $__global_Data_Map_Internal_singleton) {
  $__fn = function($kmin, $kmax = null) use ($foldSubmapBy1, $union1, $__global_Data_Map_Internal_singleton, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($kmax) use ($kmin, &$__fn) { return $__fn($kmin, $kmax); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($foldSubmapBy1)($union1, ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")), $kmin, $kmax, $__global_Data_Map_Internal_singleton);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_submap'] = __NAMESPACE__ . '\\Data_Map_Internal_submap';

// Data_Map_Internal_unions
function Data_Map_Internal_unions($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_unions';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$union1 = ((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeUnionWith, $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($__global_Data_Function_const);
    $__res = (function() use ($union1) {
  $__fn = function($dictFoldable) use ($union1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_1)($union1, ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_unions'] = __NAMESPACE__ . '\\Data_Map_Internal_unions';

// Data_Map_Internal_difference
function Data_Map_Internal_difference($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_difference';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
$__global_Data_Map_Internal_unsafeDifference = ($GLOBALS['Data_Map_Internal_unsafeDifference'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeDifference'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (function() use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeDifference, $compare) {
  $__fn = function($m1, $m2 = null) use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeDifference, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m2) use ($m1, &$__fn) { return $__fn($m1, $m2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeDifference, $compare, $m1, $m2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_difference'] = __NAMESPACE__ . '\\Data_Map_Internal_difference';

// Data_Map_Internal_delete
function Data_Map_Internal_delete($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_delete';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (function() use ($compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($k) use ($compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($compare, $k, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($v) use ($compare, $k, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
break;
case "GT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
break;
case "EQ":
return ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, $ml, $mr);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_delete'] = __NAMESPACE__ . '\\Data_Map_Internal_delete';

// Data_Map_Internal_checkValid
function Data_Map_Internal_checkValid($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_checkValid';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_conj = ($GLOBALS['Data_Map_Internal_conj'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_conj'));
$__global_Data_Map_Internal_eq = ($GLOBALS['Data_Map_Internal_eq'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_eq'));
$__global_Data_Map_Internal_greaterThan = ($GLOBALS['Data_Map_Internal_greaterThan'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_greaterThan'));
$__global_Data_Map_Internal_lessThan = ($GLOBALS['Data_Map_Internal_lessThan'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_lessThan'));
$__global_Data_Map_Internal_abs = ($GLOBALS['Data_Map_Internal_abs'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_abs'));
$__global_Data_Map_Internal_sub = ($GLOBALS['Data_Map_Internal_sub'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_sub'));
$__global_Data_Map_Internal_add = ($GLOBALS['Data_Map_Internal_add'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_add'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_0;
$greaterThan1 = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "GT":
return true;
break;
default:
return false;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictOrd;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_1;
$lessThan1 = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return true;
break;
default:
return false;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$go = (function() use ($__global_Data_Map_Internal_conj, $__global_Data_Map_Internal_eq, $__global_Data_Map_Internal_greaterThan, $greaterThan1, &$go, $lessThan1, $__global_Data_Map_Internal_lessThan, $__global_Data_Map_Internal_abs, $__global_Data_Map_Internal_sub, $__global_Data_Map_Internal_add) {
  $__fn = function($v) use ($__global_Data_Map_Internal_conj, $__global_Data_Map_Internal_eq, $__global_Data_Map_Internal_greaterThan, $greaterThan1, &$go, $lessThan1, $__global_Data_Map_Internal_lessThan, $__global_Data_Map_Internal_abs, $__global_Data_Map_Internal_sub, $__global_Data_Map_Internal_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return true;
break;
case "Node":
$h = ($__case_0)->v0;
$s = ($__case_0)->v1;
$k = ($__case_0)->v2;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__case_0 = $l;
switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
return true;
break;
case "Node":
$rh = ($__case_0)->v0;
$rs = ($__case_0)->v1;
$rk = ($__case_0)->v2;
return ($__global_Data_Map_Internal_conj)(($__global_Data_Map_Internal_eq)($h, 2), ($__global_Data_Map_Internal_conj)(($__global_Data_Map_Internal_eq)($rh, 1), ($__global_Data_Map_Internal_conj)(($__global_Data_Map_Internal_greaterThan)($s, $rs), ($__global_Data_Map_Internal_conj)(($greaterThan1)($rk, $k), ($go)($r)))));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
case "Node":
$lh = ($__case_0)->v0;
$ls = ($__case_0)->v1;
$lk = ($__case_0)->v2;
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
return ($__global_Data_Map_Internal_conj)(($__global_Data_Map_Internal_eq)($h, 2), ($__global_Data_Map_Internal_conj)(($__global_Data_Map_Internal_eq)($lh, 1), ($__global_Data_Map_Internal_conj)(($__global_Data_Map_Internal_greaterThan)($s, $ls), ($__global_Data_Map_Internal_conj)(($lessThan1)($lk, $k), ($go)($l)))));
break;
case "Node":
$rh = ($__case_0)->v0;
$rs = ($__case_0)->v1;
$rk = ($__case_0)->v2;
return ($__global_Data_Map_Internal_conj)(($__global_Data_Map_Internal_greaterThan)($h, $rh), ($__global_Data_Map_Internal_conj)(($greaterThan1)($rk, $k), ($__global_Data_Map_Internal_conj)(($__global_Data_Map_Internal_greaterThan)($h, $lh), ($__global_Data_Map_Internal_conj)(($lessThan1)($lk, $k), ($__global_Data_Map_Internal_conj)(($__global_Data_Map_Internal_lessThan)(($__global_Data_Map_Internal_abs)(($__global_Data_Map_Internal_sub)($rh, $lh)), 2), ($__global_Data_Map_Internal_conj)(($__global_Data_Map_Internal_eq)(($__global_Data_Map_Internal_add)(($__global_Data_Map_Internal_add)($rs, $ls), 1), $s), ($__global_Data_Map_Internal_conj)(($go)($l), ($go)($r))))))));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_checkValid'] = __NAMESPACE__ . '\\Data_Map_Internal_checkValid';

// Data_Map_Internal_catMaybes
function Data_Map_Internal_catMaybes($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_catMaybes';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_compose = ($GLOBALS['Data_Map_Internal_compose'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_compose'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Data_Map_Internal_identity = ($GLOBALS['Data_Map_Internal_identity'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_identity'));
    $__res = ($__global_Data_Map_Internal_compose)((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($f) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($f, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($v) use ($f, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$v2 = ($f)($k, $v1);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Just":
$v__prime__ = ($__case_0)->v0;
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $k, $v__prime__, ($go)($l), ($go)($r));
break;
case "Nothing":
return ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, ($go)($l), ($go)($r));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $__global_Data_Function_const, $__global_Data_Map_Internal_identity);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_catMaybes'] = __NAMESPACE__ . '\\Data_Map_Internal_catMaybes';

// Data_Map_Internal_applyMap
function Data_Map_Internal_applyMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_applyMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeIntersectionWith = ($GLOBALS['Data_Map_Internal_unsafeIntersectionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeIntersectionWith'));
$__global_Data_Map_Internal_identity = ($GLOBALS['Data_Map_Internal_identity'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_identity'));
$__global_Data_Map_Internal_functorMap = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorMap'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (object)["apply" => ((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeIntersectionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeIntersectionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeIntersectionWith, $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($__global_Data_Map_Internal_identity), "Functor0" => (function() use ($__global_Data_Map_Internal_functorMap) {
  $__fn = function($__dollar____unused) use ($__global_Data_Map_Internal_functorMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__global_Data_Map_Internal_functorMap;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_applyMap'] = __NAMESPACE__ . '\\Data_Map_Internal_applyMap';

// Data_Map_Internal_bindMap
function Data_Map_Internal_bindMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_bindMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
$__global_Data_Map_Internal_unsafeIntersectionWith = ($GLOBALS['Data_Map_Internal_unsafeIntersectionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeIntersectionWith'));
$__global_Data_Map_Internal_identity = ($GLOBALS['Data_Map_Internal_identity'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_identity'));
$__global_Data_Map_Internal_functorMap = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorMap'));
$__global_Data_Map_Internal_compose = ($GLOBALS['Data_Map_Internal_compose'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_compose'));
$mapMaybeWithKey1 = (function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($f) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($f, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($v) use ($f, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$v2 = ($f)($k, $v1);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Just":
$v__prime__ = ($__case_0)->v0;
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $k, $v__prime__, ($go)($l), ($go)($r));
break;
case "Nothing":
return ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, ($go)($l), ($go)($r));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$lookup1 = (function() use ($compare) {
  $__fn = function($k) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($compare, $k, &$go) {
  $__fn = function($v) use ($compare, $k, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue 3;
break;
case "GT":
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue 3;
break;
case "EQ":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($mv);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictOrd;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_1;
$applyMap1 = (object)["apply" => ((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeIntersectionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeIntersectionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeIntersectionWith, $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($__global_Data_Map_Internal_identity), "Functor0" => (function() use ($__global_Data_Map_Internal_functorMap) {
  $__fn = function($__dollar____unused) use ($__global_Data_Map_Internal_functorMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__global_Data_Map_Internal_functorMap;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["bind" => (function() use ($mapMaybeWithKey1, $__global_Data_Map_Internal_compose, $lookup1) {
  $__fn = function($m, $f = null) use ($mapMaybeWithKey1, $__global_Data_Map_Internal_compose, $lookup1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($m, &$__fn) { return $__fn($m, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($mapMaybeWithKey1)((function() use ($__global_Data_Map_Internal_compose, $lookup1, $f) {
  $__fn = function($k) use ($__global_Data_Map_Internal_compose, $lookup1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Map_Internal_compose)(($lookup1)($k), $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $m);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyMap1) {
  $__fn = function($__dollar____unused) use ($applyMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyMap1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_bindMap'] = __NAMESPACE__ . '\\Data_Map_Internal_bindMap';

// Data_Map_Internal_anyWithKey
function Data_Map_Internal_anyWithKey($predicate) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_anyWithKey';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_disj = ($GLOBALS['Data_Map_Internal_disj'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_disj'));
$go = (function() use ($__global_Data_Map_Internal_disj, $predicate, &$go) {
  $__fn = function($v) use ($__global_Data_Map_Internal_disj, $predicate, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return false;
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
return ($__global_Data_Map_Internal_disj)(($predicate)($mk, $mv), ($__global_Data_Map_Internal_disj)(($go)($ml), ($go)($mr)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_anyWithKey'] = __NAMESPACE__ . '\\Data_Map_Internal_anyWithKey';

// Data_Map_Internal_any
function Data_Map_Internal_any($predicate) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_any';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_disj = ($GLOBALS['Data_Map_Internal_disj'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_disj'));
$go = (function() use ($__global_Data_Map_Internal_disj, $predicate, &$go) {
  $__fn = function($v) use ($__global_Data_Map_Internal_disj, $predicate, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return false;
break;
case "Node":
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
return ($__global_Data_Map_Internal_disj)(($predicate)($mv), ($__global_Data_Map_Internal_disj)(($go)($ml), ($go)($mr)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_any'] = __NAMESPACE__ . '\\Data_Map_Internal_any';

// Data_Map_Internal_alter
function Data_Map_Internal_alter($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_alter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
$__global_Data_Map_Internal_unsafeSplit = ($GLOBALS['Data_Map_Internal_unsafeSplit'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeSplit'));
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (function() use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeSplit, $compare, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode) {
  $__body = function($f, $k, $m) use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeSplit, $compare, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode) {
    $v = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeSplit, $compare, $k, $m);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Split":
$v1 = ($__case_0)->v0;
$l = ($__case_0)->v1;
$r = ($__case_0)->v2;
$v2 = ($f)($v1);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Nothing":
return ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, $l, $r);
break;
case "Just":
$v__prime__ = ($__case_0)->v0;
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $k, $v__prime__, $l, $r);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $k = null, $m = null) use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeSplit, $compare, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m) use ($f, $k, &$__fn) { return $__fn($f, $k, $m); };
    if ($__num === 1) return function($k, $m = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $k, $m);
      if ($__num2 === 1) return function($m) use ($f, $k, &$__fn) { return $__fn($f, $k, $m); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $k, $m);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_alter'] = __NAMESPACE__ . '\\Data_Map_Internal_alter';

// Data_Map_Internal_altMap
function Data_Map_Internal_altMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_altMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Data_Map_Internal_functorMap = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorMap'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (object)["alt" => ((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeUnionWith, $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($__global_Data_Function_const), "Functor0" => (function() use ($__global_Data_Map_Internal_functorMap) {
  $__fn = function($__dollar____unused) use ($__global_Data_Map_Internal_functorMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__global_Data_Map_Internal_functorMap;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_altMap'] = __NAMESPACE__ . '\\Data_Map_Internal_altMap';

// Data_Map_Internal_plusMap
function Data_Map_Internal_plusMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_plusMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Data_Map_Internal_functorMap = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorMap'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$altMap1 = (object)["alt" => ((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeUnionWith, $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($__global_Data_Function_const), "Functor0" => (function() use ($__global_Data_Map_Internal_functorMap) {
  $__fn = function($__dollar____unused) use ($__global_Data_Map_Internal_functorMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__global_Data_Map_Internal_functorMap;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["empty" => ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")), "Alt0" => (function() use ($altMap1) {
  $__fn = function($__dollar____unused) use ($altMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $altMap1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_plusMap'] = __NAMESPACE__ . '\\Data_Map_Internal_plusMap';

