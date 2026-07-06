<?php

namespace Data\Foldable;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Maybe.First/index.php';
require_once __DIR__ . '/../Data.Maybe.Last/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Endo/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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
      case 'Data_Foldable_eq': $v = (function() {
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
      case 'Data_Foldable_add': $v = (function() {
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
      case 'Data_Foldable_compose': $v = (function() {
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
      case 'Data_Foldable_identity': $v = (function() {
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
      case 'Data_Foldable_eq1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ordering_eqOrdering'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_eqOrdering'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Foldable_unwrap': $v = (($GLOBALS['Data_Newtype_unwrap'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Foldable_monoidEndo': $v = (function() {
  $__case_0 = $dict;
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compose;
} else {
throw new \Exception("Pattern match failure");
};
  $compose = $__case_res_0;
  $semigroupEndo1 = (object)["append" => (function() use ($compose) {
  $__body = function($v, $v1) use ($compose) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($compose)($a, $b);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($compose, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  $__case_0 = ($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn'));
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->identity;
} else {
throw new \Exception("Pattern match failure");
};
  return (object)["mempty" => $__case_res_1, "Semigroup0" => (function() use ($semigroupEndo1) {
  $__fn = function($__dollar____unused) use ($semigroupEndo1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupEndo1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      case 'Data_Foldable_alaF': $v = (($GLOBALS['Data_Newtype_alaF'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_alaF')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Foldable_not': $v = (function() {
  $__case_0 = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->not;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Foldable_Empty': $v = ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty")); break;
      case 'Data_Foldable_semigroupFreeMonoidTree': $v = (object)["append" => (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Append", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_monoidFreeMonoidTree': $v = (object)["mempty" => ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty")), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_semigroupFreeMonoidTree = ($GLOBALS['Data_Foldable_semigroupFreeMonoidTree'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_semigroupFreeMonoidTree'));
    $__res = $__global_Data_Foldable_semigroupFreeMonoidTree;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableTuple': $v = (object)["foldr" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$x = ($__case_2)->v1;
return ($f1)($x, $z1);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$x = ($__case_2)->v1;
return ($f1)($z1, $x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__body = function($dictMonoid, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$x = ($__case_1)->v1;
return ($f1)($x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($dictMonoid, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($dictMonoid, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableMultiplicative': $v = (object)["foldr" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($x, $z1);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__body = function($dictMonoid, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictMonoid, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($dictMonoid, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableMaybe': $v = (object)["foldr" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "Nothing":
$z = $__case_1;
return $z;
break;
case "Just":
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
return ($f)($x, $z);
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
})(), "foldl" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "Nothing":
$z = $__case_1;
return $z;
break;
case "Just":
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
return ($f)($z, $x);
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
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
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
    $__res = (function() use ($mempty) {
  $__body = function($v, $v1) use ($mempty) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "Nothing":
return $mempty;
break;
case "Just":
$f = $__case_0;
$x = ($__case_1)->v0;
return ($f)($x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($mempty, $__body, &$__fn) {
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
})()]; break;
      case 'Data_Foldable_foldr1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Foldable_foldableMaybe'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMaybe'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Foldable_foldl1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Foldable_foldableMaybe'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMaybe'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Foldable_foldableIdentity': $v = (object)["foldr" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($x, $z1);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__body = function($dictMonoid, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictMonoid, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($dictMonoid, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableEither': $v = (object)["foldr" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "Left":
$z = $__case_1;
return $z;
break;
case "Right":
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
return ($f)($x, $z);
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
})(), "foldl" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "Left":
$z = $__case_1;
return $z;
break;
case "Right":
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
return ($f)($z, $x);
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
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
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
    $__res = (function() use ($mempty) {
  $__body = function($v, $v1) use ($mempty) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "Left":
return $mempty;
break;
case "Right":
$f = $__case_0;
$x = ($__case_1)->v0;
return ($f)($x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($mempty, $__body, &$__fn) {
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
})()]; break;
      case 'Data_Foldable_foldableDual': $v = (object)["foldr" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($x, $z1);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__body = function($dictMonoid, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictMonoid, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($dictMonoid, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableDisj': $v = (object)["foldr" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($x, $z1);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__body = function($dictMonoid, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictMonoid, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($dictMonoid, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableConst': $v = (object)["foldr" => (function() {
  $__fn = function($v, $z = null, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($v, $z, &$__fn) { return $__fn($v, $z, $v1); };
    if ($__num === 1) return function($z, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $z, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $z, &$__fn) { return $__fn($v, $z, $v1); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $z;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__fn = function($v, $z = null, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($v, $z, &$__fn) { return $__fn($v, $z, $v1); };
    if ($__num === 1) return function($z, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $z, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $z, &$__fn) { return $__fn($v, $z, $v1); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $z;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
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
    $__res = (function() use ($mempty) {
  $__fn = function($v, $v1 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $mempty;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableConj': $v = (object)["foldr" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($x, $z1);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__body = function($dictMonoid, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictMonoid, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($dictMonoid, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableAdditive': $v = (object)["foldr" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($x, $z1);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__body = function($dictMonoid, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictMonoid, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($dictMonoid, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableArray': $v = (object)["foldr" => ($GLOBALS['Data_Foldable_foldrArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldrArray')), "foldl" => ($GLOBALS['Data_Foldable_foldlArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldlArray')), "foldMap" => (function() use ($dict) {
  $__fn = function($dictMonoid) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableArray = ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'));
$__case_0 = $__global_Data_Foldable_foldableArray;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_0;
    $__res = ((function() use ($dict, $foldr3) {
  $__fn = function($dictMonoid) use ($dict, $foldr3, &$__fn) {
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
    $__res = (function() use ($foldr3, $append, $mempty) {
  $__fn = function($f) use ($foldr3, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldr3)((function() use ($append, $f) {
  $__fn = function($x, $acc = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($x, &$__fn) { return $__fn($x, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($append)(($f)($x), $acc);
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
      case 'Data_Foldable_foldableFreeMonoidTree': $v = (object)["foldl" => (function() {
  $__fn = function($fn) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use (&$go, $fn) {
  $__fn = function($acc, $lhs = null, $rhs = null) use (&$go, $fn, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($rhs) use ($acc, $lhs, &$__fn) { return $__fn($acc, $lhs, $rhs); };
    if ($__num === 1) return function($lhs, $rhs = null) use ($acc, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($acc, $lhs, $rhs);
      if ($__num2 === 1) return function($rhs) use ($acc, $lhs, &$__fn) { return $__fn($acc, $lhs, $rhs); };
      return phpurs_curry_fallback($__fn, [$acc], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
while (true) {
$__case_0 = $lhs;
switch (($__case_0)->tag) {
case "Node":
$a = ($__case_0)->v0;
$__tco_tmp_0 = ($fn)($acc, $a);
$__tco_tmp_1 = $rhs;
$__tco_tmp_2 = ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty"));
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue 2;
break;
case "Append":
$xs = ($__case_0)->v0;
$ys = ($__case_0)->v1;
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Empty":
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $xs;
$__tco_tmp_2 = $rhs;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue 3;
break;
default:
$__case_0 = $rhs;
switch (($__case_0)->tag) {
case "Empty":
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $xs;
$__tco_tmp_2 = $ys;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue 4;
break;
default:
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $xs;
$__tco_tmp_2 = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Append", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($ys, $rhs);
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue 4;
break;
};
break;
};
break;
case "Empty":
$__case_0 = $rhs;
switch (($__case_0)->tag) {
case "Empty":
return $acc;
break;
default:
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $rhs;
$__tco_tmp_2 = ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty"));
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
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
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use (&$go) {
  $__fn = function($a, $b = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($go)($a, $b, ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty")));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldr" => (function() {
  $__fn = function($fn) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use (&$go, $fn) {
  $__fn = function($acc, $lhs = null, $rhs = null) use (&$go, $fn, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($rhs) use ($acc, $lhs, &$__fn) { return $__fn($acc, $lhs, $rhs); };
    if ($__num === 1) return function($lhs, $rhs = null) use ($acc, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($acc, $lhs, $rhs);
      if ($__num2 === 1) return function($rhs) use ($acc, $lhs, &$__fn) { return $__fn($acc, $lhs, $rhs); };
      return phpurs_curry_fallback($__fn, [$acc], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
while (true) {
$__case_0 = $rhs;
switch (($__case_0)->tag) {
case "Node":
$a = ($__case_0)->v0;
$__tco_tmp_0 = ($fn)($a, $acc);
$__tco_tmp_1 = ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty"));
$__tco_tmp_2 = $lhs;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue 2;
break;
case "Append":
$xs = ($__case_0)->v0;
$ys = ($__case_0)->v1;
$__case_0 = $xs;
switch (($__case_0)->tag) {
case "Empty":
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $lhs;
$__tco_tmp_2 = $ys;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue 3;
break;
default:
$__case_0 = $lhs;
switch (($__case_0)->tag) {
case "Empty":
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $xs;
$__tco_tmp_2 = $ys;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue 4;
break;
default:
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Append", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($lhs, $xs);
$__tco_tmp_2 = $ys;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue 4;
break;
};
break;
};
break;
case "Empty":
$__case_0 = $lhs;
switch (($__case_0)->tag) {
case "Empty":
return $acc;
break;
default:
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty"));
$__tco_tmp_2 = $lhs;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
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
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use (&$go) {
  $__fn = function($a, $b = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($go)($a, ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty")), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($dict) {
  $__fn = function($dictMonoid) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableFreeMonoidTree = ($GLOBALS['Data_Foldable_foldableFreeMonoidTree'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableFreeMonoidTree'));
$__case_0 = $__global_Data_Foldable_foldableFreeMonoidTree;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_0;
    $__res = ((function() use ($dict, $foldr3) {
  $__fn = function($dictMonoid) use ($dict, $foldr3, &$__fn) {
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
    $__res = (function() use ($foldr3, $append, $mempty) {
  $__fn = function($f) use ($foldr3, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldr3)((function() use ($append, $f) {
  $__fn = function($x, $acc = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($x, &$__fn) { return $__fn($x, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($append)(($f)($x), $acc);
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
      case 'Data_Foldable_foldl2': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Foldable_foldableFreeMonoidTree'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableFreeMonoidTree'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Foldable_foldr2': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Foldable_foldableFreeMonoidTree'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableFreeMonoidTree'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Foldable_foldMap1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Foldable_foldableMaybe'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMaybe'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Foldable_foldableFirst': $v = (object)["foldr" => (function() {
  $__body = function($f, $z, $v) {
    $__global_Data_Foldable_foldr1 = ($GLOBALS['Data_Foldable_foldr1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldr1'));
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($__global_Data_Foldable_foldr1)($f1, $z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__body = function($f, $z, $v) {
    $__global_Data_Foldable_foldl1 = ($GLOBALS['Data_Foldable_foldl1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl1'));
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($__global_Data_Foldable_foldl1)($f1, $z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldMap1 = ($GLOBALS['Data_Foldable_foldMap1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldMap1'));
$foldMap2 = ($__global_Data_Foldable_foldMap1)($dictMonoid);
    $__res = (function() use ($foldMap2) {
  $__body = function($f, $v) use ($foldMap2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($foldMap2)($f1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMap2, $__body, &$__fn) {
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableLast': $v = (object)["foldr" => (function() {
  $__body = function($f, $z, $v) {
    $__global_Data_Foldable_foldr1 = ($GLOBALS['Data_Foldable_foldr1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldr1'));
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($__global_Data_Foldable_foldr1)($f1, $z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__body = function($f, $z, $v) {
    $__global_Data_Foldable_foldl1 = ($GLOBALS['Data_Foldable_foldl1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl1'));
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($__global_Data_Foldable_foldl1)($f1, $z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldMap1 = ($GLOBALS['Data_Foldable_foldMap1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldMap1'));
$foldMap2 = ($__global_Data_Foldable_foldMap1)($dictMonoid);
    $__res = (function() use ($foldMap2) {
  $__body = function($f, $v) use ($foldMap2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($foldMap2)($f1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMap2, $__body, &$__fn) {
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
$Data_Foldable_foldrArray = function($f, $init = null, $xs = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Foldable_foldrArray;
            return $Data_Foldable_foldrArray(...array_merge($__args, $more));
        };
    }
    $acc = $init; for($i=count($xs)-1; $i>=0; $i--) { $acc = $f($xs[$i])($acc); } return $acc;
};
$Data_Foldable_foldlArray = function($f, $init = null, $xs = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Foldable_foldlArray;
            return $Data_Foldable_foldlArray(...array_merge($__args, $more));
        };
    }
    $acc = $init; foreach($xs as $x) { $acc = $f($acc)($x); } return $acc;
};











// Data_Foldable_Node
function Data_Foldable_Node($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_Node';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Node", $value0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_Node'] = __NAMESPACE__ . '\\Data_Foldable_Node';

// Data_Foldable_Append
function Data_Foldable_Append($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_Append';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Append", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_Append'] = __NAMESPACE__ . '\\Data_Foldable_Append';

// Data_Foldable_Foldable$Dict
function Data_Foldable_Foldable__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_Foldable__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_Foldable__dollar__Dict'] = __NAMESPACE__ . '\\Data_Foldable_Foldable__dollar__Dict';



// Data_Foldable_foldr
function Data_Foldable_foldr($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldr';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_foldr'] = __NAMESPACE__ . '\\Data_Foldable_foldr';

// Data_Foldable_indexr
function Data_Foldable_indexr($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_indexr';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_eq = ($GLOBALS['Data_Foldable_eq'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_eq'));
$__global_Data_Foldable_add = ($GLOBALS['Data_Foldable_add'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_add'));
$__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_0;
    $__res = (function() use ($__global_Data_Foldable_eq, $__global_Data_Foldable_add, $__global_Data_Foldable_compose, $foldr3) {
  $__fn = function($idx) use ($__global_Data_Foldable_eq, $__global_Data_Foldable_add, $__global_Data_Foldable_compose, $foldr3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($__global_Data_Foldable_eq, $idx, $__global_Data_Foldable_add) {
  $__body = function($a, $cursor) use ($__global_Data_Foldable_eq, $idx, $__global_Data_Foldable_add) {
    $__case_0 = ($cursor)->elem;
    switch (($__case_0)->tag) {
case "Just":
return $cursor;
break;
default:
$__case_0 = ($__global_Data_Foldable_eq)(($cursor)->pos, $idx);
switch ($__case_0) {
case true:
return (object)["elem" => ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($a), "pos" => ($cursor)->pos];
break;
default:
return (object)["pos" => ($__global_Data_Foldable_add)(($cursor)->pos, 1), "elem" => ($cursor)->elem];
break;
};
break;
};
  };
  $__fn = function($a, $cursor = null) use ($__global_Data_Foldable_eq, $idx, $__global_Data_Foldable_add, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($cursor) use ($a, &$__fn) { return $__fn($a, $cursor); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a, $cursor);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Data_Foldable_compose)((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v)->elem;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($foldr3)($go, (object)["elem" => ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), "pos" => 0]));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_indexr'] = __NAMESPACE__ . '\\Data_Foldable_indexr';

// Data_Foldable_null
function Data_Foldable_null($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_null';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_0)((function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = false;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), true);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_null'] = __NAMESPACE__ . '\\Data_Foldable_null';

// Data_Foldable_oneOf
function Data_Foldable_oneOf($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_oneOf';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_0;
    $__res = (function() use ($foldr3, $dict) {
  $__fn = function($dictPlus) use ($foldr3, $dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->alt;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dictPlus;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->empty;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($foldr3)($__case_res_1, $__case_res_2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_oneOf'] = __NAMESPACE__ . '\\Data_Foldable_oneOf';

// Data_Foldable_oneOfMap
function Data_Foldable_oneOfMap($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_oneOfMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_0;
    $__res = (function() use ($dict, $foldr3, $__global_Data_Foldable_compose) {
  $__fn = function($dictPlus) use ($dict, $foldr3, $__global_Data_Foldable_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->alt;
} else {
throw new \Exception("Pattern match failure");
};
$alt = $__case_res_1;
$__case_0 = $dictPlus;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->empty;
} else {
throw new \Exception("Pattern match failure");
};
$empty = $__case_res_2;
    $__res = (function() use ($foldr3, $__global_Data_Foldable_compose, $alt, $empty) {
  $__fn = function($f) use ($foldr3, $__global_Data_Foldable_compose, $alt, $empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldr3)(($__global_Data_Foldable_compose)($alt, $f), $empty);
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
$GLOBALS['Data_Foldable_oneOfMap'] = __NAMESPACE__ . '\\Data_Foldable_oneOfMap';

// Data_Foldable_traverse_
function Data_Foldable_traverse_($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_traverse_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Apply_identity = ($GLOBALS['Control_Apply_identity'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_identity'));
$__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
$applySecond = (function() use ($apply1, $map, $__global_Data_Function_const, $__global_Control_Apply_identity) {
  $__fn = function($a, $b = null) use ($apply1, $map, $__global_Data_Function_const, $__global_Control_Apply_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($apply1)(($map)(($__global_Data_Function_const)($__global_Control_Apply_identity), $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictApplicative;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_2;
    $__res = (function() use ($__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit) {
  $__fn = function($dictFoldable) use ($__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_3;
    $__res = (function() use ($foldr3, $__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($foldr3, $__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldr3)(($__global_Data_Foldable_compose)($applySecond, $f), ($pure)($__global_Data_Unit_unit));
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
$GLOBALS['Data_Foldable_traverse_'] = __NAMESPACE__ . '\\Data_Foldable_traverse_';

// Data_Foldable_for_
function Data_Foldable_for_($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_for_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Apply_identity = ($GLOBALS['Control_Apply_identity'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_identity'));
$__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
$applySecond = (function() use ($apply1, $map, $__global_Data_Function_const, $__global_Control_Apply_identity) {
  $__fn = function($a, $b = null) use ($apply1, $map, $__global_Data_Function_const, $__global_Control_Apply_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($apply1)(($map)(($__global_Data_Function_const)($__global_Control_Apply_identity), $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictApplicative;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_2;
$traverse_1 = (function() use ($__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit) {
  $__fn = function($dictFoldable) use ($__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_3;
    $__res = (function() use ($foldr3, $__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($foldr3, $__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldr3)(($__global_Data_Foldable_compose)($applySecond, $f), ($pure)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($__global_Data_Function_flip, $traverse_1) {
  $__fn = function($dictFoldable) use ($__global_Data_Function_flip, $traverse_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Function_flip)(($traverse_1)($dictFoldable));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_for_'] = __NAMESPACE__ . '\\Data_Foldable_for_';

// Data_Foldable_sequence_
function Data_Foldable_sequence_($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_sequence_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Apply_identity = ($GLOBALS['Control_Apply_identity'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_identity'));
$__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Data_Foldable_identity = ($GLOBALS['Data_Foldable_identity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_identity'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
$applySecond = (function() use ($apply1, $map, $__global_Data_Function_const, $__global_Control_Apply_identity) {
  $__fn = function($a, $b = null) use ($apply1, $map, $__global_Data_Function_const, $__global_Control_Apply_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($apply1)(($map)(($__global_Data_Function_const)($__global_Control_Apply_identity), $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictApplicative;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_2;
$traverse_1 = (function() use ($__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit) {
  $__fn = function($dictFoldable) use ($__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_3;
    $__res = (function() use ($foldr3, $__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($foldr3, $__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldr3)(($__global_Data_Foldable_compose)($applySecond, $f), ($pure)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($traverse_1, $__global_Data_Foldable_identity) {
  $__fn = function($dictFoldable) use ($traverse_1, $__global_Data_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse_1)($dictFoldable, $__global_Data_Foldable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_sequence_'] = __NAMESPACE__ . '\\Data_Foldable_sequence_';

// Data_Foldable_foldl
function Data_Foldable_foldl($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldl';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_foldl'] = __NAMESPACE__ . '\\Data_Foldable_foldl';

// Data_Foldable_indexl
function Data_Foldable_indexl($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_indexl';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_eq = ($GLOBALS['Data_Foldable_eq'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_eq'));
$__global_Data_Foldable_add = ($GLOBALS['Data_Foldable_add'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_add'));
$__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_0;
    $__res = (function() use ($__global_Data_Foldable_eq, $__global_Data_Foldable_add, $__global_Data_Foldable_compose, $foldl3) {
  $__fn = function($idx) use ($__global_Data_Foldable_eq, $__global_Data_Foldable_add, $__global_Data_Foldable_compose, $foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($__global_Data_Foldable_eq, $idx, $__global_Data_Foldable_add) {
  $__body = function($cursor, $a) use ($__global_Data_Foldable_eq, $idx, $__global_Data_Foldable_add) {
    $__case_0 = ($cursor)->elem;
    switch (($__case_0)->tag) {
case "Just":
return $cursor;
break;
default:
$__case_0 = ($__global_Data_Foldable_eq)(($cursor)->pos, $idx);
switch ($__case_0) {
case true:
return (object)["elem" => ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($a), "pos" => ($cursor)->pos];
break;
default:
return (object)["pos" => ($__global_Data_Foldable_add)(($cursor)->pos, 1), "elem" => ($cursor)->elem];
break;
};
break;
};
  };
  $__fn = function($cursor, $a = null) use ($__global_Data_Foldable_eq, $idx, $__global_Data_Foldable_add, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($cursor, &$__fn) { return $__fn($cursor, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($cursor, $a);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Data_Foldable_compose)((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v)->elem;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($foldl3)($go, (object)["elem" => ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), "pos" => 0]));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_indexl'] = __NAMESPACE__ . '\\Data_Foldable_indexl';

// Data_Foldable_intercalate
function Data_Foldable_intercalate($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_intercalate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_0;
    $__res = (function() use ($dict, $foldl3) {
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
    $__res = (function() use ($append, $foldl3, $mempty) {
  $__fn = function($sep, $xs = null) use ($append, $foldl3, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($sep, &$__fn) { return $__fn($sep, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($append, $sep) {
  $__body = function($v, $v1) use ($append, $sep) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((is_object)($__case_0) && (($__case_0)->init === true))) {
$x = $__case_1;
return (object)["init" => false, "acc" => $x];
} else {
if ((is_object)($__case_0)) {
$acc = ($__case_0)->acc;
$x = $__case_1;
return (object)["init" => false, "acc" => ($append)($acc, ($append)($sep, $x))];
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($append, $sep, $__body, &$__fn) {
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
    $__res = (($foldl3)($go, (object)["init" => true, "acc" => $mempty], $xs))->acc;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_intercalate'] = __NAMESPACE__ . '\\Data_Foldable_intercalate';

// Data_Foldable_length
function Data_Foldable_length($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_length';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_0;
    $__res = (function() use ($foldl3) {
  $__fn = function($dictSemiring) use ($foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictSemiring;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
$add1 = $__case_res_1;
$__case_0 = $dictSemiring;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->one;
} else {
throw new \Exception("Pattern match failure");
};
$one = $__case_res_2;
$__case_0 = $dictSemiring;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->zero;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($foldl3)((function() use ($add1, $one) {
  $__fn = function($c, $v = null) use ($add1, $one, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($c, &$__fn) { return $__fn($c, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($add1)($one, $c);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $__case_res_3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_length'] = __NAMESPACE__ . '\\Data_Foldable_length';

// Data_Foldable_maximumBy
function Data_Foldable_maximumBy($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_maximumBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_eq1 = ($GLOBALS['Data_Foldable_eq1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_eq1'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_0;
    $__res = (function() use ($__global_Data_Foldable_eq1, $foldl3) {
  $__fn = function($cmp) use ($__global_Data_Foldable_eq1, $foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$max__prime__ = (function() use ($__global_Data_Foldable_eq1, $cmp) {
  $__body = function($v, $v1) use ($__global_Data_Foldable_eq1, $cmp) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
$x = $__case_1;
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
})())($x);
break;
case "Just":
$x = ($__case_0)->v0;
$y = $__case_1;
$__case_0 = ($__global_Data_Foldable_eq1)(($cmp)($x, $y), ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT")));
$__case_res_1 = null;
switch ($__case_0) {
case true:
$__case_res_1 = $x;
break;
default:
$__case_res_1 = $y;
break;
};
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
})())($__case_res_1);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($__global_Data_Foldable_eq1, $cmp, $__body, &$__fn) {
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
    $__res = ($foldl3)($max__prime__, ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_maximumBy'] = __NAMESPACE__ . '\\Data_Foldable_maximumBy';

// Data_Foldable_maximum
function Data_Foldable_maximum($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_maximum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_eq1 = ($GLOBALS['Data_Foldable_eq1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_eq1'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (function() use ($__global_Data_Foldable_eq1, $compare) {
  $__fn = function($dictFoldable) use ($__global_Data_Foldable_eq1, $compare, &$__fn) {
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
$foldl3 = $__case_res_1;
    $__res = ((function() use ($__global_Data_Foldable_eq1, $foldl3) {
  $__fn = function($cmp) use ($__global_Data_Foldable_eq1, $foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$max__prime__ = (function() use ($__global_Data_Foldable_eq1, $cmp) {
  $__body = function($v, $v1) use ($__global_Data_Foldable_eq1, $cmp) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
$x = $__case_1;
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
})())($x);
break;
case "Just":
$x = ($__case_0)->v0;
$y = $__case_1;
$__case_0 = ($__global_Data_Foldable_eq1)(($cmp)($x, $y), ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT")));
$__case_res_2 = null;
switch ($__case_0) {
case true:
$__case_res_2 = $x;
break;
default:
$__case_res_2 = $y;
break;
};
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
})())($__case_res_2);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($__global_Data_Foldable_eq1, $cmp, $__body, &$__fn) {
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
    $__res = ($foldl3)($max__prime__, ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($compare);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_maximum'] = __NAMESPACE__ . '\\Data_Foldable_maximum';

// Data_Foldable_minimumBy
function Data_Foldable_minimumBy($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_minimumBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_eq1 = ($GLOBALS['Data_Foldable_eq1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_eq1'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_0;
    $__res = (function() use ($__global_Data_Foldable_eq1, $foldl3) {
  $__fn = function($cmp) use ($__global_Data_Foldable_eq1, $foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$min__prime__ = (function() use ($__global_Data_Foldable_eq1, $cmp) {
  $__body = function($v, $v1) use ($__global_Data_Foldable_eq1, $cmp) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
$x = $__case_1;
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
})())($x);
break;
case "Just":
$x = ($__case_0)->v0;
$y = $__case_1;
$__case_0 = ($__global_Data_Foldable_eq1)(($cmp)($x, $y), ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT")));
$__case_res_1 = null;
switch ($__case_0) {
case true:
$__case_res_1 = $x;
break;
default:
$__case_res_1 = $y;
break;
};
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
})())($__case_res_1);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($__global_Data_Foldable_eq1, $cmp, $__body, &$__fn) {
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
    $__res = ($foldl3)($min__prime__, ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_minimumBy'] = __NAMESPACE__ . '\\Data_Foldable_minimumBy';

// Data_Foldable_minimum
function Data_Foldable_minimum($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_minimum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_eq1 = ($GLOBALS['Data_Foldable_eq1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_eq1'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (function() use ($__global_Data_Foldable_eq1, $compare) {
  $__fn = function($dictFoldable) use ($__global_Data_Foldable_eq1, $compare, &$__fn) {
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
$foldl3 = $__case_res_1;
    $__res = ((function() use ($__global_Data_Foldable_eq1, $foldl3) {
  $__fn = function($cmp) use ($__global_Data_Foldable_eq1, $foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$min__prime__ = (function() use ($__global_Data_Foldable_eq1, $cmp) {
  $__body = function($v, $v1) use ($__global_Data_Foldable_eq1, $cmp) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
$x = $__case_1;
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
})())($x);
break;
case "Just":
$x = ($__case_0)->v0;
$y = $__case_1;
$__case_0 = ($__global_Data_Foldable_eq1)(($cmp)($x, $y), ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT")));
$__case_res_2 = null;
switch ($__case_0) {
case true:
$__case_res_2 = $x;
break;
default:
$__case_res_2 = $y;
break;
};
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
})())($__case_res_2);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($__global_Data_Foldable_eq1, $cmp, $__body, &$__fn) {
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
    $__res = ($foldl3)($min__prime__, ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($compare);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_minimum'] = __NAMESPACE__ . '\\Data_Foldable_minimum';

// Data_Foldable_product
function Data_Foldable_product($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_product';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_0;
    $__res = (function() use ($foldl3) {
  $__fn = function($dictSemiring) use ($foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictSemiring;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->mul;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dictSemiring;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->one;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($foldl3)($__case_res_1, $__case_res_2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_product'] = __NAMESPACE__ . '\\Data_Foldable_product';

// Data_Foldable_sum
function Data_Foldable_sum($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_sum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_0;
    $__res = (function() use ($foldl3) {
  $__fn = function($dictSemiring) use ($foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictSemiring;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dictSemiring;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->zero;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($foldl3)($__case_res_1, $__case_res_2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_sum'] = __NAMESPACE__ . '\\Data_Foldable_sum';













// Data_Foldable_foldMapDefaultR
function Data_Foldable_foldMapDefaultR($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldMapDefaultR';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_0;
    $__res = (function() use ($dict, $foldr3) {
  $__fn = function($dictMonoid) use ($dict, $foldr3, &$__fn) {
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
    $__res = (function() use ($foldr3, $append, $mempty) {
  $__fn = function($f) use ($foldr3, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldr3)((function() use ($append, $f) {
  $__fn = function($x, $acc = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($x, &$__fn) { return $__fn($x, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($append)(($f)($x), $acc);
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
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_foldMapDefaultR'] = __NAMESPACE__ . '\\Data_Foldable_foldMapDefaultR';





// Data_Foldable_foldMapDefaultL
function Data_Foldable_foldMapDefaultL($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldMapDefaultL';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_0;
    $__res = (function() use ($dict, $foldl3) {
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
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_foldMapDefaultL'] = __NAMESPACE__ . '\\Data_Foldable_foldMapDefaultL';

// Data_Foldable_foldMap
function Data_Foldable_foldMap($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_foldMap'] = __NAMESPACE__ . '\\Data_Foldable_foldMap';


// Data_Foldable_foldableApp
function Data_Foldable_foldableApp($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldableApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_0;
$__case_0 = $dictFoldable;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_1;
$__case_0 = $dictFoldable;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_2;
    $__res = (object)["foldr" => (function() use ($foldr3) {
  $__body = function($f, $i, $v) use ($foldr3) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$x = $__case_2;
return ($foldr3)($f1, $i1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldr3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($foldl3) {
  $__body = function($f, $i, $v) use ($foldl3) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$x = $__case_2;
return ($foldl3)($f1, $i1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldl3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap2) {
  $__fn = function($dictMonoid) use ($foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap3 = ($foldMap2)($dictMonoid);
    $__res = (function() use ($foldMap3) {
  $__body = function($f, $v) use ($foldMap3) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($foldMap3)($f1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMap3, $__body, &$__fn) {
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_foldableApp'] = __NAMESPACE__ . '\\Data_Foldable_foldableApp';

// Data_Foldable_foldableCompose
function Data_Foldable_foldableCompose($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldableCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_0;
$__case_0 = $dictFoldable;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_1;
$__case_0 = $dictFoldable;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_2;
    $__res = (function() use ($foldr3, $__global_Data_Function_flip, $foldl3, $foldMap2) {
  $__fn = function($dictFoldable1) use ($foldr3, $__global_Data_Function_flip, $foldl3, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable1;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr4 = $__case_res_3;
$__case_0 = $dictFoldable1;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl4 = $__case_res_4;
$__case_0 = $dictFoldable1;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap3 = $__case_res_5;
    $__res = (object)["foldr" => (function() use ($foldr3, $__global_Data_Function_flip, $foldr4) {
  $__body = function($f, $i, $v) use ($foldr3, $__global_Data_Function_flip, $foldr4) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
return ($foldr3)(($__global_Data_Function_flip)(($foldr4)($f1)), $i1, $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldr3, $__global_Data_Function_flip, $foldr4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($foldl3, $foldl4) {
  $__body = function($f, $i, $v) use ($foldl3, $foldl4) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
return ($foldl3)(($foldl4)($f1), $i1, $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldl3, $foldl4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap2, $foldMap3) {
  $__fn = function($dictMonoid) use ($foldMap2, $foldMap3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap4 = ($foldMap2)($dictMonoid);
$foldMap5 = ($foldMap3)($dictMonoid);
    $__res = (function() use ($foldMap4, $foldMap5) {
  $__body = function($f, $v) use ($foldMap4, $foldMap5) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($foldMap4)(($foldMap5)($f1), $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMap4, $foldMap5, $__body, &$__fn) {
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
$GLOBALS['Data_Foldable_foldableCompose'] = __NAMESPACE__ . '\\Data_Foldable_foldableCompose';

// Data_Foldable_foldableCoproduct
function Data_Foldable_foldableCoproduct($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldableCoproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_Coproduct_coproduct = ($GLOBALS['Data_Functor_Coproduct_coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_coproduct'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_0;
$__case_0 = $dictFoldable;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_1;
$__case_0 = $dictFoldable;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_2;
    $__res = (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldl3, $foldMap2) {
  $__fn = function($dictFoldable1) use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldl3, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable1;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr4 = $__case_res_3;
$__case_0 = $dictFoldable1;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl4 = $__case_res_4;
$__case_0 = $dictFoldable1;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap3 = $__case_res_5;
    $__res = (object)["foldr" => (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldr4) {
  $__fn = function($f, $z = null) use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldr4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldr3)($f, $z), ($foldr4)($f, $z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldl3, $foldl4) {
  $__fn = function($f, $z = null) use ($__global_Data_Functor_Coproduct_coproduct, $foldl3, $foldl4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldl3)($f, $z), ($foldl4)($f, $z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap2, $foldMap3, $__global_Data_Functor_Coproduct_coproduct) {
  $__fn = function($dictMonoid) use ($foldMap2, $foldMap3, $__global_Data_Functor_Coproduct_coproduct, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap4 = ($foldMap2)($dictMonoid);
$foldMap5 = ($foldMap3)($dictMonoid);
    $__res = (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldMap4, $foldMap5) {
  $__fn = function($f) use ($__global_Data_Functor_Coproduct_coproduct, $foldMap4, $foldMap5, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldMap4)($f), ($foldMap5)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
$GLOBALS['Data_Foldable_foldableCoproduct'] = __NAMESPACE__ . '\\Data_Foldable_foldableCoproduct';



// Data_Foldable_foldableProduct
function Data_Foldable_foldableProduct($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldableProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_0;
$__case_0 = $dictFoldable;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_1;
$__case_0 = $dictFoldable;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_2;
    $__res = (function() use ($foldr3, $foldl3, $dict, $foldMap2) {
  $__fn = function($dictFoldable1) use ($foldr3, $foldl3, $dict, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable1;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr4 = $__case_res_3;
$__case_0 = $dictFoldable1;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl4 = $__case_res_4;
$__case_0 = $dictFoldable1;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap3 = $__case_res_5;
    $__res = (object)["foldr" => (function() use ($foldr3, $foldr4) {
  $__body = function($f, $z, $v) use ($foldr3, $foldr4) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->v0;
$ga = ($__case_2)->v1;
return ($foldr3)($f1, ($foldr4)($f1, $z1, $ga), $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldr3, $foldr4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($foldl4, $foldl3) {
  $__body = function($f, $z, $v) use ($foldl4, $foldl3) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->v0;
$ga = ($__case_2)->v1;
return ($foldl4)($f1, ($foldl3)($f1, $z1, $fa), $ga);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldl4, $foldl3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($dict, $foldMap2, $foldMap3) {
  $__fn = function($dictMonoid) use ($dict, $foldMap2, $foldMap3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_6;
$foldMap4 = ($foldMap2)($dictMonoid);
$foldMap5 = ($foldMap3)($dictMonoid);
    $__res = (function() use ($append, $foldMap4, $foldMap5) {
  $__body = function($f, $v) use ($append, $foldMap4, $foldMap5) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$fa = ($__case_1)->v0;
$ga = ($__case_1)->v1;
return ($append)(($foldMap4)($f1, $fa), ($foldMap5)($f1, $ga));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($append, $foldMap4, $foldMap5, $__body, &$__fn) {
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
$GLOBALS['Data_Foldable_foldableProduct'] = __NAMESPACE__ . '\\Data_Foldable_foldableProduct';

// Data_Foldable_foldlDefault
function Data_Foldable_foldlDefault($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldlDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_monoidFreeMonoidTree = ($GLOBALS['Data_Foldable_monoidFreeMonoidTree'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_monoidFreeMonoidTree'));
$__global_Data_Foldable_foldl2 = ($GLOBALS['Data_Foldable_foldl2'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl2'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = ($__case_res_0)($__global_Data_Foldable_monoidFreeMonoidTree);
    $__res = (function() use ($__global_Data_Foldable_foldl2, $foldMap2) {
  $__fn = function($c, $u = null, $xs = null) use ($__global_Data_Foldable_foldl2, $foldMap2, &$__fn) {
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
    $__res = ($__global_Data_Foldable_foldl2)($c, $u, ($foldMap2)((function() {
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
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_foldlDefault'] = __NAMESPACE__ . '\\Data_Foldable_foldlDefault';

// Data_Foldable_foldrDefault
function Data_Foldable_foldrDefault($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldrDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_monoidFreeMonoidTree = ($GLOBALS['Data_Foldable_monoidFreeMonoidTree'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_monoidFreeMonoidTree'));
$__global_Data_Foldable_foldr2 = ($GLOBALS['Data_Foldable_foldr2'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldr2'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = ($__case_res_0)($__global_Data_Foldable_monoidFreeMonoidTree);
    $__res = (function() use ($__global_Data_Foldable_foldr2, $foldMap2) {
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
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_foldrDefault'] = __NAMESPACE__ . '\\Data_Foldable_foldrDefault';

// Data_Foldable_lookup
function Data_Foldable_lookup($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_lookup';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Maybe_First_monoidFirst = ($GLOBALS['Data_Maybe_First_monoidFirst'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_monoidFirst'));
$__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
$__global_Data_Foldable_unwrap = ($GLOBALS['Data_Foldable_unwrap'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_unwrap'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = ($__case_res_0)($__global_Data_Maybe_First_monoidFirst);
    $__res = (function() use ($__global_Data_Foldable_compose, $__global_Data_Foldable_unwrap, $foldMap2) {
  $__fn = function($dictEq) use ($__global_Data_Foldable_compose, $__global_Data_Foldable_unwrap, $foldMap2, &$__fn) {
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
$eq2 = $__case_res_1;
    $__res = (function() use ($__global_Data_Foldable_compose, $__global_Data_Foldable_unwrap, $foldMap2, $eq2) {
  $__fn = function($a) use ($__global_Data_Foldable_compose, $__global_Data_Foldable_unwrap, $foldMap2, $eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Foldable_compose)($__global_Data_Foldable_unwrap, ($foldMap2)((function() use ($eq2, $a) {
  $__body = function($v) use ($eq2, $a) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a__prime__ = ($__case_0)->v0;
$b = ($__case_0)->v1;
$__case_0 = ($eq2)($a, $a__prime__);
switch ($__case_0) {
case true:
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
})())($b);
break;
default:
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($eq2, $a, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
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
$GLOBALS['Data_Foldable_lookup'] = __NAMESPACE__ . '\\Data_Foldable_lookup';

// Data_Foldable_surroundMap
function Data_Foldable_surroundMap($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_surroundMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_monoidEndo = ($GLOBALS['Data_Foldable_monoidEndo'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_monoidEndo'));
$__global_Data_Foldable_unwrap = ($GLOBALS['Data_Foldable_unwrap'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_unwrap'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = ($__case_res_0)($__global_Data_Foldable_monoidEndo);
    $__res = (function() use ($__global_Data_Foldable_unwrap, $foldMap2) {
  $__fn = function($dictSemigroup) use ($__global_Data_Foldable_unwrap, $foldMap2, &$__fn) {
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
$append = $__case_res_1;
    $__res = (function() use ($append, $__global_Data_Foldable_unwrap, $foldMap2) {
  $__fn = function($d, $t = null, $f = null) use ($append, $__global_Data_Foldable_unwrap, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($f) use ($d, $t, &$__fn) { return $__fn($d, $t, $f); };
    if ($__num === 1) return function($t, $f = null) use ($d, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($d, $t, $f);
      if ($__num2 === 1) return function($f) use ($d, $t, &$__fn) { return $__fn($d, $t, $f); };
      return phpurs_curry_fallback($__fn, [$d], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$joined = (function() use ($append, $d, $t) {
  $__fn = function($a, $m = null) use ($append, $d, $t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($a, &$__fn) { return $__fn($a, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($append)($d, ($append)(($t)($a), $m));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Data_Foldable_unwrap)(($foldMap2)($joined, $f), $d);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_surroundMap'] = __NAMESPACE__ . '\\Data_Foldable_surroundMap';

// Data_Foldable_surround
function Data_Foldable_surround($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_surround';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_monoidEndo = ($GLOBALS['Data_Foldable_monoidEndo'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_monoidEndo'));
$__global_Data_Foldable_unwrap = ($GLOBALS['Data_Foldable_unwrap'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_unwrap'));
$__global_Data_Foldable_identity = ($GLOBALS['Data_Foldable_identity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_identity'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = ($__case_res_0)($__global_Data_Foldable_monoidEndo);
$surroundMap1 = (function() use ($__global_Data_Foldable_unwrap, $foldMap2) {
  $__fn = function($dictSemigroup) use ($__global_Data_Foldable_unwrap, $foldMap2, &$__fn) {
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
$append = $__case_res_1;
    $__res = (function() use ($append, $__global_Data_Foldable_unwrap, $foldMap2) {
  $__fn = function($d, $t = null, $f = null) use ($append, $__global_Data_Foldable_unwrap, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($f) use ($d, $t, &$__fn) { return $__fn($d, $t, $f); };
    if ($__num === 1) return function($t, $f = null) use ($d, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($d, $t, $f);
      if ($__num2 === 1) return function($f) use ($d, $t, &$__fn) { return $__fn($d, $t, $f); };
      return phpurs_curry_fallback($__fn, [$d], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$joined = (function() use ($append, $d, $t) {
  $__fn = function($a, $m = null) use ($append, $d, $t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($a, &$__fn) { return $__fn($a, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($append)($d, ($append)(($t)($a), $m));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Data_Foldable_unwrap)(($foldMap2)($joined, $f), $d);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($surroundMap1, $__global_Data_Foldable_identity) {
  $__fn = function($dictSemigroup) use ($surroundMap1, $__global_Data_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$surroundMap2 = ($surroundMap1)($dictSemigroup);
    $__res = (function() use ($surroundMap2, $__global_Data_Foldable_identity) {
  $__fn = function($d) use ($surroundMap2, $__global_Data_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($surroundMap2)($d, $__global_Data_Foldable_identity);
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
$GLOBALS['Data_Foldable_surround'] = __NAMESPACE__ . '\\Data_Foldable_surround';

// Data_Foldable_foldM
function Data_Foldable_foldM($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_0;
    $__res = (function() use ($dict, $foldl3, $__global_Data_Function_flip) {
  $__fn = function($dictMonad) use ($dict, $foldl3, $__global_Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_2;
    $__res = (function() use ($foldl3, $bind, $__global_Data_Function_flip, $pure) {
  $__fn = function($f, $b0 = null) use ($foldl3, $bind, $__global_Data_Function_flip, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b0) use ($f, &$__fn) { return $__fn($f, $b0); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($foldl3)((function() use ($bind, $__global_Data_Function_flip, $f) {
  $__fn = function($b, $a = null) use ($bind, $__global_Data_Function_flip, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($b, &$__fn) { return $__fn($b, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)($b, ($__global_Data_Function_flip)($f, $a));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($pure)($b0));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_foldM'] = __NAMESPACE__ . '\\Data_Foldable_foldM';

// Data_Foldable_fold
function Data_Foldable_fold($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_fold';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_identity = ($GLOBALS['Data_Foldable_identity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_identity'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_0;
    $__res = (function() use ($foldMap2, $__global_Data_Foldable_identity) {
  $__fn = function($dictMonoid) use ($foldMap2, $__global_Data_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap2)($dictMonoid, $__global_Data_Foldable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_fold'] = __NAMESPACE__ . '\\Data_Foldable_fold';

// Data_Foldable_findMap
function Data_Foldable_findMap($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_findMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_0;
    $__res = (function() use ($foldl3) {
  $__fn = function($p) use ($foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($p) {
  $__body = function($v, $v1) use ($p) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
$x = $__case_1;
return ($p)($x);
break;
default:
$r = $__case_0;
return $r;
break;
};
  };
  $__fn = function($v, $v1 = null) use ($p, $__body, &$__fn) {
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
    $__res = ($foldl3)($go, ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_findMap'] = __NAMESPACE__ . '\\Data_Foldable_findMap';

// Data_Foldable_find
function Data_Foldable_find($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_find';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_0;
    $__res = (function() use ($foldl3) {
  $__fn = function($p) use ($foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
$x = $__case_1;
return "/* Unsupported: Guards not supported */";
break;
default:
$r = $__case_0;
return $r;
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
})();
    $__res = ($foldl3)($go, ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_find'] = __NAMESPACE__ . '\\Data_Foldable_find';

// Data_Foldable_any
function Data_Foldable_any($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_any';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_alaF = ($GLOBALS['Data_Foldable_alaF'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_alaF'));
$__global_Data_Monoid_Disj_Disj = ($GLOBALS['Data_Monoid_Disj_Disj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_Disj'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_0;
    $__res = (function() use ($__global_Data_Foldable_alaF, $__global_Data_Monoid_Disj_Disj, $foldMap2) {
  $__fn = function($dictHeytingAlgebra) use ($__global_Data_Foldable_alaF, $__global_Data_Monoid_Disj_Disj, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictHeytingAlgebra;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->disj;
} else {
throw new \Exception("Pattern match failure");
};
$disj = $__case_res_1;
$semigroupDisj1 = (object)["append" => (function() use ($disj) {
  $__body = function($v, $v1) use ($disj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($disj)($a, $b);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($disj, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dictHeytingAlgebra;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->ff;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Foldable_alaF)($__global_Data_Monoid_Disj_Disj, ($foldMap2)((object)["mempty" => $__case_res_2, "Semigroup0" => (function() use ($semigroupDisj1) {
  $__fn = function($__dollar____unused) use ($semigroupDisj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupDisj1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_any'] = __NAMESPACE__ . '\\Data_Foldable_any';

// Data_Foldable_elem
function Data_Foldable_elem($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_elem';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_alaF = ($GLOBALS['Data_Foldable_alaF'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_alaF'));
$__global_Data_Monoid_Disj_Disj = ($GLOBALS['Data_Monoid_Disj_Disj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_Disj'));
$__global_Data_HeytingAlgebra_heytingAlgebraBoolean = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'));
$__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_0;
$any1 = ((function() use ($__global_Data_Foldable_alaF, $__global_Data_Monoid_Disj_Disj, $foldMap2) {
  $__fn = function($dictHeytingAlgebra) use ($__global_Data_Foldable_alaF, $__global_Data_Monoid_Disj_Disj, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictHeytingAlgebra;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->disj;
} else {
throw new \Exception("Pattern match failure");
};
$disj = $__case_res_1;
$semigroupDisj1 = (object)["append" => (function() use ($disj) {
  $__body = function($v, $v1) use ($disj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($disj)($a, $b);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($disj, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dictHeytingAlgebra;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->ff;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Foldable_alaF)($__global_Data_Monoid_Disj_Disj, ($foldMap2)((object)["mempty" => $__case_res_2, "Semigroup0" => (function() use ($semigroupDisj1) {
  $__fn = function($__dollar____unused) use ($semigroupDisj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupDisj1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Data_HeytingAlgebra_heytingAlgebraBoolean);
    $__res = (function() use ($__global_Data_Foldable_compose, $any1) {
  $__fn = function($dictEq) use ($__global_Data_Foldable_compose, $any1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictEq;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Foldable_compose)($any1, $__case_res_3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_elem'] = __NAMESPACE__ . '\\Data_Foldable_elem';

// Data_Foldable_notElem
function Data_Foldable_notElem($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_notElem';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_alaF = ($GLOBALS['Data_Foldable_alaF'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_alaF'));
$__global_Data_Monoid_Disj_Disj = ($GLOBALS['Data_Monoid_Disj_Disj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_Disj'));
$__global_Data_HeytingAlgebra_heytingAlgebraBoolean = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'));
$__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
$__global_Data_Foldable_not = ($GLOBALS['Data_Foldable_not'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_not'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_0;
$any1 = ((function() use ($__global_Data_Foldable_alaF, $__global_Data_Monoid_Disj_Disj, $foldMap2) {
  $__fn = function($dictHeytingAlgebra) use ($__global_Data_Foldable_alaF, $__global_Data_Monoid_Disj_Disj, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictHeytingAlgebra;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->disj;
} else {
throw new \Exception("Pattern match failure");
};
$disj = $__case_res_1;
$semigroupDisj1 = (object)["append" => (function() use ($disj) {
  $__body = function($v, $v1) use ($disj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($disj)($a, $b);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($disj, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dictHeytingAlgebra;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->ff;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Foldable_alaF)($__global_Data_Monoid_Disj_Disj, ($foldMap2)((object)["mempty" => $__case_res_2, "Semigroup0" => (function() use ($semigroupDisj1) {
  $__fn = function($__dollar____unused) use ($semigroupDisj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupDisj1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Data_HeytingAlgebra_heytingAlgebraBoolean);
$elem1 = (function() use ($__global_Data_Foldable_compose, $any1) {
  $__fn = function($dictEq) use ($__global_Data_Foldable_compose, $any1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictEq;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Foldable_compose)($any1, $__case_res_3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($elem1, $__global_Data_Foldable_compose, $__global_Data_Foldable_not) {
  $__fn = function($dictEq) use ($elem1, $__global_Data_Foldable_compose, $__global_Data_Foldable_not, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$elem2 = ($elem1)($dictEq);
    $__res = (function() use ($__global_Data_Foldable_compose, $__global_Data_Foldable_not, $elem2) {
  $__fn = function($x) use ($__global_Data_Foldable_compose, $__global_Data_Foldable_not, $elem2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Foldable_compose)($__global_Data_Foldable_not, ($elem2)($x));
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
$GLOBALS['Data_Foldable_notElem'] = __NAMESPACE__ . '\\Data_Foldable_notElem';

// Data_Foldable_or
function Data_Foldable_or($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_or';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_alaF = ($GLOBALS['Data_Foldable_alaF'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_alaF'));
$__global_Data_Monoid_Disj_Disj = ($GLOBALS['Data_Monoid_Disj_Disj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_Disj'));
$__global_Data_Foldable_identity = ($GLOBALS['Data_Foldable_identity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_identity'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_0;
$any1 = (function() use ($__global_Data_Foldable_alaF, $__global_Data_Monoid_Disj_Disj, $foldMap2) {
  $__fn = function($dictHeytingAlgebra) use ($__global_Data_Foldable_alaF, $__global_Data_Monoid_Disj_Disj, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictHeytingAlgebra;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->disj;
} else {
throw new \Exception("Pattern match failure");
};
$disj = $__case_res_1;
$semigroupDisj1 = (object)["append" => (function() use ($disj) {
  $__body = function($v, $v1) use ($disj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($disj)($a, $b);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($disj, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dictHeytingAlgebra;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->ff;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Foldable_alaF)($__global_Data_Monoid_Disj_Disj, ($foldMap2)((object)["mempty" => $__case_res_2, "Semigroup0" => (function() use ($semigroupDisj1) {
  $__fn = function($__dollar____unused) use ($semigroupDisj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupDisj1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($any1, $__global_Data_Foldable_identity) {
  $__fn = function($dictHeytingAlgebra) use ($any1, $__global_Data_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($any1)($dictHeytingAlgebra, $__global_Data_Foldable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_or'] = __NAMESPACE__ . '\\Data_Foldable_or';

// Data_Foldable_all
function Data_Foldable_all($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_all';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_alaF = ($GLOBALS['Data_Foldable_alaF'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_alaF'));
$__global_Data_Monoid_Conj_Conj = ($GLOBALS['Data_Monoid_Conj_Conj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_Conj'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_0;
    $__res = (function() use ($__global_Data_Foldable_alaF, $__global_Data_Monoid_Conj_Conj, $foldMap2) {
  $__fn = function($dictHeytingAlgebra) use ($__global_Data_Foldable_alaF, $__global_Data_Monoid_Conj_Conj, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictHeytingAlgebra;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->conj;
} else {
throw new \Exception("Pattern match failure");
};
$conj = $__case_res_1;
$semigroupConj1 = (object)["append" => (function() use ($conj) {
  $__body = function($v, $v1) use ($conj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($conj)($a, $b);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($conj, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dictHeytingAlgebra;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->tt;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Foldable_alaF)($__global_Data_Monoid_Conj_Conj, ($foldMap2)((object)["mempty" => $__case_res_2, "Semigroup0" => (function() use ($semigroupConj1) {
  $__fn = function($__dollar____unused) use ($semigroupConj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupConj1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_all'] = __NAMESPACE__ . '\\Data_Foldable_all';

// Data_Foldable_and
function Data_Foldable_and($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_and';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_alaF = ($GLOBALS['Data_Foldable_alaF'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_alaF'));
$__global_Data_Monoid_Conj_Conj = ($GLOBALS['Data_Monoid_Conj_Conj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_Conj'));
$__global_Data_Foldable_identity = ($GLOBALS['Data_Foldable_identity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_identity'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_0;
$all1 = (function() use ($__global_Data_Foldable_alaF, $__global_Data_Monoid_Conj_Conj, $foldMap2) {
  $__fn = function($dictHeytingAlgebra) use ($__global_Data_Foldable_alaF, $__global_Data_Monoid_Conj_Conj, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictHeytingAlgebra;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->conj;
} else {
throw new \Exception("Pattern match failure");
};
$conj = $__case_res_1;
$semigroupConj1 = (object)["append" => (function() use ($conj) {
  $__body = function($v, $v1) use ($conj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($conj)($a, $b);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($conj, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dictHeytingAlgebra;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->tt;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Foldable_alaF)($__global_Data_Monoid_Conj_Conj, ($foldMap2)((object)["mempty" => $__case_res_2, "Semigroup0" => (function() use ($semigroupConj1) {
  $__fn = function($__dollar____unused) use ($semigroupConj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupConj1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($all1, $__global_Data_Foldable_identity) {
  $__fn = function($dictHeytingAlgebra) use ($all1, $__global_Data_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($all1)($dictHeytingAlgebra, $__global_Data_Foldable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_and'] = __NAMESPACE__ . '\\Data_Foldable_and';

