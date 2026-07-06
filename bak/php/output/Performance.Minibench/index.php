<?php

namespace Performance\Minibench;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Int/index.php';
require_once __DIR__ . '/../Data.Number/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Effect.Ref/index.php';
require_once __DIR__ . '/../Effect.Uncurried/index.php';
require_once __DIR__ . '/../Performance.Minibench/index.php';
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
      case 'Performance_Minibench_lessThan': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'));
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
      case 'Performance_Minibench_append': $v = (function() {
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
      case 'Performance_Minibench_div': $v = (function() {
  $__case_0 = ($GLOBALS['Data_EuclideanRing_euclideanRingNumber'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_euclideanRingNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->div;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Performance_Minibench_bind': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_bindEffect'] ?? \Effect\phpurs_eval_thunk('Effect_bindEffect'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Performance_Minibench_discard': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Bind_discardUnit'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_discardUnit'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->discard;
} else {
throw new \Exception("Pattern match failure");
};
  return ($__case_res_0)(($GLOBALS['Effect_bindEffect'] ?? \Effect\phpurs_eval_thunk('Effect_bindEffect')));
})(); break;
      case 'Performance_Minibench_mul': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semiring_semiringNumber'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->mul;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Performance_Minibench_add': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semiring_semiringNumber'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Performance_Minibench_pure': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_applicativeEffect'] ?? \Effect\phpurs_eval_thunk('Effect_applicativeEffect'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Performance_Minibench_sub': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ring_ringNumber'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sub;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Performance_Minibench_bench': $v = (($GLOBALS['Performance_Minibench_benchWith'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_benchWith')))(1000); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };











// Performance_Minibench_withUnits
function Performance_Minibench_withUnits($t) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Performance_Minibench_withUnits';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($t) {
    $__case_0 = $t;
    if (true) {
$t1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($t);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Performance_Minibench_withUnits'] = __NAMESPACE__ . '\\Performance_Minibench_withUnits';

// Performance_Minibench_benchWith'
function Performance_Minibench_benchWith__prime__($n, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Performance_Minibench_benchWith__prime__';
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($n, $__fn) { return $__fn($n, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Performance_Minibench_bind = ($GLOBALS['Performance_Minibench_bind'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_bind'));
$__global_Effect_Ref__new = ($GLOBALS['Effect_Ref__new'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref__new'));
$__global_Data_Number_infinity = ($GLOBALS['Data_Number_infinity'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_infinity'));
$__global_Performance_Minibench_discard = ($GLOBALS['Performance_Minibench_discard'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_discard'));
$__global_Performance_Minibench_gc = ($GLOBALS['Performance_Minibench_gc'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_gc'));
$__global_Effect_forE = ($GLOBALS['Effect_forE'] ?? \Effect\phpurs_eval_thunk('Effect_forE'));
$__global_Effect_Uncurried_runEffectFn1 = ($GLOBALS['Effect_Uncurried_runEffectFn1'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn1'));
$__global_Performance_Minibench_timeNs = ($GLOBALS['Performance_Minibench_timeNs'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_timeNs'));
$__global_Performance_Minibench_mul = ($GLOBALS['Performance_Minibench_mul'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_mul'));
$__global_Effect_Ref_modify = ($GLOBALS['Effect_Ref_modify'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_modify'));
$__global_Performance_Minibench_add = ($GLOBALS['Performance_Minibench_add'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_add'));
$__global_Data_Number_min = ($GLOBALS['Data_Number_min'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_min'));
$__global_Data_Number_max = ($GLOBALS['Data_Number_max'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_max'));
$__global_Performance_Minibench_pure = ($GLOBALS['Performance_Minibench_pure'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_pure'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Effect_Ref_read = ($GLOBALS['Effect_Ref_read'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_read'));
$__global_Data_Int_toNumber = ($GLOBALS['Data_Int_toNumber'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_toNumber'));
$__global_Performance_Minibench_div = ($GLOBALS['Performance_Minibench_div'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_div'));
$__global_Data_Number_sqrt = ($GLOBALS['Data_Number_sqrt'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_sqrt'));
$__global_Performance_Minibench_sub = ($GLOBALS['Performance_Minibench_sub'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_sub'));
    $__res = ($__global_Performance_Minibench_bind)(($__global_Effect_Ref__new)(0.0), (function() use ($__global_Performance_Minibench_bind, $__global_Effect_Ref__new, $__global_Data_Number_infinity, $__global_Performance_Minibench_discard, $__global_Performance_Minibench_gc, $__global_Effect_forE, $n, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Performance_Minibench_mul, $__global_Effect_Ref_modify, $__global_Performance_Minibench_add, $__global_Data_Number_min, $__global_Data_Number_max, $__global_Performance_Minibench_pure, $__global_Data_Unit_unit, $__global_Effect_Ref_read, $__global_Data_Int_toNumber, $__global_Performance_Minibench_div, $__global_Data_Number_sqrt, $__global_Performance_Minibench_sub) {
  $__fn = function($sumRef) use ($__global_Performance_Minibench_bind, $__global_Effect_Ref__new, $__global_Data_Number_infinity, $__global_Performance_Minibench_discard, $__global_Performance_Minibench_gc, $__global_Effect_forE, $n, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Performance_Minibench_mul, $__global_Effect_Ref_modify, $__global_Performance_Minibench_add, $__global_Data_Number_min, $__global_Data_Number_max, $__global_Performance_Minibench_pure, $__global_Data_Unit_unit, $__global_Effect_Ref_read, $__global_Data_Int_toNumber, $__global_Performance_Minibench_div, $__global_Data_Number_sqrt, $__global_Performance_Minibench_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_bind)(($__global_Effect_Ref__new)(0.0), (function() use ($__global_Performance_Minibench_bind, $__global_Effect_Ref__new, $__global_Data_Number_infinity, $__global_Performance_Minibench_discard, $__global_Performance_Minibench_gc, $__global_Effect_forE, $n, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Performance_Minibench_mul, $__global_Effect_Ref_modify, $__global_Performance_Minibench_add, $sumRef, $__global_Data_Number_min, $__global_Data_Number_max, $__global_Performance_Minibench_pure, $__global_Data_Unit_unit, $__global_Effect_Ref_read, $__global_Data_Int_toNumber, $__global_Performance_Minibench_div, $__global_Data_Number_sqrt, $__global_Performance_Minibench_sub) {
  $__fn = function($sum2Ref) use ($__global_Performance_Minibench_bind, $__global_Effect_Ref__new, $__global_Data_Number_infinity, $__global_Performance_Minibench_discard, $__global_Performance_Minibench_gc, $__global_Effect_forE, $n, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Performance_Minibench_mul, $__global_Effect_Ref_modify, $__global_Performance_Minibench_add, $sumRef, $__global_Data_Number_min, $__global_Data_Number_max, $__global_Performance_Minibench_pure, $__global_Data_Unit_unit, $__global_Effect_Ref_read, $__global_Data_Int_toNumber, $__global_Performance_Minibench_div, $__global_Data_Number_sqrt, $__global_Performance_Minibench_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_bind)(($__global_Effect_Ref__new)($__global_Data_Number_infinity), (function() use ($__global_Performance_Minibench_bind, $__global_Effect_Ref__new, $__global_Performance_Minibench_discard, $__global_Performance_Minibench_gc, $__global_Effect_forE, $n, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Performance_Minibench_mul, $__global_Effect_Ref_modify, $__global_Performance_Minibench_add, $sumRef, $sum2Ref, $__global_Data_Number_min, $__global_Data_Number_max, $__global_Performance_Minibench_pure, $__global_Data_Unit_unit, $__global_Effect_Ref_read, $__global_Data_Int_toNumber, $__global_Performance_Minibench_div, $__global_Data_Number_sqrt, $__global_Performance_Minibench_sub) {
  $__fn = function($minRef) use ($__global_Performance_Minibench_bind, $__global_Effect_Ref__new, $__global_Performance_Minibench_discard, $__global_Performance_Minibench_gc, $__global_Effect_forE, $n, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Performance_Minibench_mul, $__global_Effect_Ref_modify, $__global_Performance_Minibench_add, $sumRef, $sum2Ref, $__global_Data_Number_min, $__global_Data_Number_max, $__global_Performance_Minibench_pure, $__global_Data_Unit_unit, $__global_Effect_Ref_read, $__global_Data_Int_toNumber, $__global_Performance_Minibench_div, $__global_Data_Number_sqrt, $__global_Performance_Minibench_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_bind)(($__global_Effect_Ref__new)(0.0), (function() use ($__global_Performance_Minibench_discard, $__global_Performance_Minibench_gc, $__global_Effect_forE, $n, $__global_Performance_Minibench_bind, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Performance_Minibench_mul, $__global_Effect_Ref_modify, $__global_Performance_Minibench_add, $sumRef, $sum2Ref, $__global_Data_Number_min, $minRef, $__global_Data_Number_max, $__global_Performance_Minibench_pure, $__global_Data_Unit_unit, $__global_Effect_Ref_read, $__global_Data_Int_toNumber, $__global_Performance_Minibench_div, $__global_Data_Number_sqrt, $__global_Performance_Minibench_sub) {
  $__fn = function($maxRef) use ($__global_Performance_Minibench_discard, $__global_Performance_Minibench_gc, $__global_Effect_forE, $n, $__global_Performance_Minibench_bind, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Performance_Minibench_mul, $__global_Effect_Ref_modify, $__global_Performance_Minibench_add, $sumRef, $sum2Ref, $__global_Data_Number_min, $minRef, $__global_Data_Number_max, $__global_Performance_Minibench_pure, $__global_Data_Unit_unit, $__global_Effect_Ref_read, $__global_Data_Int_toNumber, $__global_Performance_Minibench_div, $__global_Data_Number_sqrt, $__global_Performance_Minibench_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_discard)($__global_Performance_Minibench_gc, (function() use ($__global_Performance_Minibench_discard, $__global_Effect_forE, $n, $__global_Performance_Minibench_bind, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Performance_Minibench_mul, $__global_Effect_Ref_modify, $__global_Performance_Minibench_add, $sumRef, $sum2Ref, $__global_Data_Number_min, $minRef, $__global_Data_Number_max, $maxRef, $__global_Performance_Minibench_pure, $__global_Data_Unit_unit, $__global_Effect_Ref_read, $__global_Data_Int_toNumber, $__global_Performance_Minibench_div, $__global_Data_Number_sqrt, $__global_Performance_Minibench_sub) {
  $__fn = function($__dollar____unused) use ($__global_Performance_Minibench_discard, $__global_Effect_forE, $n, $__global_Performance_Minibench_bind, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Performance_Minibench_mul, $__global_Effect_Ref_modify, $__global_Performance_Minibench_add, $sumRef, $sum2Ref, $__global_Data_Number_min, $minRef, $__global_Data_Number_max, $maxRef, $__global_Performance_Minibench_pure, $__global_Data_Unit_unit, $__global_Effect_Ref_read, $__global_Data_Int_toNumber, $__global_Performance_Minibench_div, $__global_Data_Number_sqrt, $__global_Performance_Minibench_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_discard)(($__global_Effect_forE)(0, $n, (function() use ($__global_Performance_Minibench_bind, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Performance_Minibench_mul, $__global_Effect_Ref_modify, $__global_Performance_Minibench_add, $sumRef, $sum2Ref, $__global_Data_Number_min, $minRef, $__global_Data_Number_max, $maxRef, $__global_Performance_Minibench_pure, $__global_Data_Unit_unit) {
  $__fn = function($v) use ($__global_Performance_Minibench_bind, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Performance_Minibench_mul, $__global_Effect_Ref_modify, $__global_Performance_Minibench_add, $sumRef, $sum2Ref, $__global_Data_Number_min, $minRef, $__global_Data_Number_max, $maxRef, $__global_Performance_Minibench_pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_bind)(($__global_Effect_Uncurried_runEffectFn1)($__global_Performance_Minibench_timeNs, $f), (function() use ($__global_Performance_Minibench_mul, $__global_Performance_Minibench_bind, $__global_Effect_Ref_modify, $__global_Performance_Minibench_add, $sumRef, $sum2Ref, $__global_Data_Number_min, $minRef, $__global_Data_Number_max, $maxRef, $__global_Performance_Minibench_pure, $__global_Data_Unit_unit) {
  $__fn = function($ns) use ($__global_Performance_Minibench_mul, $__global_Performance_Minibench_bind, $__global_Effect_Ref_modify, $__global_Performance_Minibench_add, $sumRef, $sum2Ref, $__global_Data_Number_min, $minRef, $__global_Data_Number_max, $maxRef, $__global_Performance_Minibench_pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$square = ($__global_Performance_Minibench_mul)($ns, $ns);
    $__res = ($__global_Performance_Minibench_bind)(($__global_Effect_Ref_modify)((function() use ($__global_Performance_Minibench_add, $ns) {
  $__fn = function($v1) use ($__global_Performance_Minibench_add, $ns, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_add)($v1, $ns);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $sumRef), (function() use ($__global_Performance_Minibench_bind, $__global_Effect_Ref_modify, $__global_Performance_Minibench_add, $square, $sum2Ref, $__global_Data_Number_min, $ns, $minRef, $__global_Data_Number_max, $maxRef, $__global_Performance_Minibench_pure, $__global_Data_Unit_unit) {
  $__fn = function($__dollar____unused) use ($__global_Performance_Minibench_bind, $__global_Effect_Ref_modify, $__global_Performance_Minibench_add, $square, $sum2Ref, $__global_Data_Number_min, $ns, $minRef, $__global_Data_Number_max, $maxRef, $__global_Performance_Minibench_pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_bind)(($__global_Effect_Ref_modify)((function() use ($__global_Performance_Minibench_add, $square) {
  $__fn = function($v1) use ($__global_Performance_Minibench_add, $square, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_add)($v1, $square);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $sum2Ref), (function() use ($__global_Performance_Minibench_bind, $__global_Effect_Ref_modify, $__global_Data_Number_min, $ns, $minRef, $__global_Data_Number_max, $maxRef, $__global_Performance_Minibench_pure, $__global_Data_Unit_unit) {
  $__fn = function($__dollar____unused) use ($__global_Performance_Minibench_bind, $__global_Effect_Ref_modify, $__global_Data_Number_min, $ns, $minRef, $__global_Data_Number_max, $maxRef, $__global_Performance_Minibench_pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_bind)(($__global_Effect_Ref_modify)((function() use ($__global_Data_Number_min, $ns) {
  $__fn = function($v1) use ($__global_Data_Number_min, $ns, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Number_min)($v1, $ns);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $minRef), (function() use ($__global_Performance_Minibench_bind, $__global_Effect_Ref_modify, $__global_Data_Number_max, $ns, $maxRef, $__global_Performance_Minibench_pure, $__global_Data_Unit_unit) {
  $__fn = function($__dollar____unused) use ($__global_Performance_Minibench_bind, $__global_Effect_Ref_modify, $__global_Data_Number_max, $ns, $maxRef, $__global_Performance_Minibench_pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_bind)(($__global_Effect_Ref_modify)((function() use ($__global_Data_Number_max, $ns) {
  $__fn = function($v1) use ($__global_Data_Number_max, $ns, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Number_max)($v1, $ns);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $maxRef), (function() use ($__global_Performance_Minibench_pure, $__global_Data_Unit_unit) {
  $__fn = function($__dollar____unused) use ($__global_Performance_Minibench_pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_pure)($__global_Data_Unit_unit);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($__global_Performance_Minibench_bind, $__global_Effect_Ref_read, $sumRef, $sum2Ref, $minRef, $maxRef, $__global_Data_Int_toNumber, $n, $__global_Performance_Minibench_div, $__global_Data_Number_sqrt, $__global_Performance_Minibench_sub, $__global_Performance_Minibench_mul, $__global_Performance_Minibench_pure) {
  $__fn = function($__dollar____unused) use ($__global_Performance_Minibench_bind, $__global_Effect_Ref_read, $sumRef, $sum2Ref, $minRef, $maxRef, $__global_Data_Int_toNumber, $n, $__global_Performance_Minibench_div, $__global_Data_Number_sqrt, $__global_Performance_Minibench_sub, $__global_Performance_Minibench_mul, $__global_Performance_Minibench_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_bind)(($__global_Effect_Ref_read)($sumRef), (function() use ($__global_Performance_Minibench_bind, $__global_Effect_Ref_read, $sum2Ref, $minRef, $maxRef, $__global_Data_Int_toNumber, $n, $__global_Performance_Minibench_div, $__global_Data_Number_sqrt, $__global_Performance_Minibench_sub, $__global_Performance_Minibench_mul, $__global_Performance_Minibench_pure) {
  $__fn = function($sum) use ($__global_Performance_Minibench_bind, $__global_Effect_Ref_read, $sum2Ref, $minRef, $maxRef, $__global_Data_Int_toNumber, $n, $__global_Performance_Minibench_div, $__global_Data_Number_sqrt, $__global_Performance_Minibench_sub, $__global_Performance_Minibench_mul, $__global_Performance_Minibench_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_bind)(($__global_Effect_Ref_read)($sum2Ref), (function() use ($__global_Performance_Minibench_bind, $__global_Effect_Ref_read, $minRef, $maxRef, $__global_Data_Int_toNumber, $n, $__global_Performance_Minibench_div, $sum, $__global_Data_Number_sqrt, $__global_Performance_Minibench_sub, $__global_Performance_Minibench_mul, $__global_Performance_Minibench_pure) {
  $__fn = function($sum2) use ($__global_Performance_Minibench_bind, $__global_Effect_Ref_read, $minRef, $maxRef, $__global_Data_Int_toNumber, $n, $__global_Performance_Minibench_div, $sum, $__global_Data_Number_sqrt, $__global_Performance_Minibench_sub, $__global_Performance_Minibench_mul, $__global_Performance_Minibench_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_bind)(($__global_Effect_Ref_read)($minRef), (function() use ($__global_Performance_Minibench_bind, $__global_Effect_Ref_read, $maxRef, $__global_Data_Int_toNumber, $n, $__global_Performance_Minibench_div, $sum, $__global_Data_Number_sqrt, $__global_Performance_Minibench_sub, $sum2, $__global_Performance_Minibench_mul, $__global_Performance_Minibench_pure) {
  $__fn = function($min__prime__) use ($__global_Performance_Minibench_bind, $__global_Effect_Ref_read, $maxRef, $__global_Data_Int_toNumber, $n, $__global_Performance_Minibench_div, $sum, $__global_Data_Number_sqrt, $__global_Performance_Minibench_sub, $sum2, $__global_Performance_Minibench_mul, $__global_Performance_Minibench_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_bind)(($__global_Effect_Ref_read)($maxRef), (function() use ($__global_Data_Int_toNumber, $n, $__global_Performance_Minibench_div, $sum, $__global_Data_Number_sqrt, $__global_Performance_Minibench_sub, $sum2, $__global_Performance_Minibench_mul, $__global_Performance_Minibench_pure, $min__prime__) {
  $__fn = function($max__prime__) use ($__global_Data_Int_toNumber, $n, $__global_Performance_Minibench_div, $sum, $__global_Data_Number_sqrt, $__global_Performance_Minibench_sub, $sum2, $__global_Performance_Minibench_mul, $__global_Performance_Minibench_pure, $min__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$n__prime__ = ($__global_Data_Int_toNumber)($n);
$mean = ($__global_Performance_Minibench_div)($sum, $n__prime__);
$stdDev = ($__global_Data_Number_sqrt)(($__global_Performance_Minibench_div)(($__global_Performance_Minibench_sub)($sum2, ($__global_Performance_Minibench_mul)(($__global_Performance_Minibench_mul)($n__prime__, $mean), $mean)), ($__global_Performance_Minibench_sub)($n__prime__, 1.0)));
    $__res = ($__global_Performance_Minibench_pure)((object)["mean" => $mean, "stdDev" => $stdDev, "min" => $min__prime__, "max" => $max__prime__]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Performance_Minibench_benchWith__prime__'] = __NAMESPACE__ . '\\Performance_Minibench_benchWith__prime__';

// Performance_Minibench_benchWith
function Performance_Minibench_benchWith($n, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Performance_Minibench_benchWith';
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($n, $__fn) { return $__fn($n, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Performance_Minibench_bind = ($GLOBALS['Performance_Minibench_bind'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_bind'));
$__global_Performance_Minibench_benchWith__prime__ = ($GLOBALS['Performance_Minibench_benchWith__prime__'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_benchWith__prime__'));
$__global_Performance_Minibench_discard = ($GLOBALS['Performance_Minibench_discard'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_discard'));
$__global_Effect_Console_log = ($GLOBALS['Effect_Console_log'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_log'));
$__global_Performance_Minibench_append = ($GLOBALS['Performance_Minibench_append'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_append'));
$__global_Performance_Minibench_withUnits = ($GLOBALS['Performance_Minibench_withUnits'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_withUnits'));
    $__res = ($__global_Performance_Minibench_bind)(($__global_Performance_Minibench_benchWith__prime__)($n, $f), (function() use ($__global_Performance_Minibench_discard, $__global_Effect_Console_log, $__global_Performance_Minibench_append, $__global_Performance_Minibench_withUnits) {
  $__fn = function($res) use ($__global_Performance_Minibench_discard, $__global_Effect_Console_log, $__global_Performance_Minibench_append, $__global_Performance_Minibench_withUnits, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_discard)(($__global_Effect_Console_log)(($__global_Performance_Minibench_append)("mean   = ", ($__global_Performance_Minibench_withUnits)(($res)->mean))), (function() use ($__global_Performance_Minibench_discard, $__global_Effect_Console_log, $__global_Performance_Minibench_append, $__global_Performance_Minibench_withUnits, $res) {
  $__fn = function($__dollar____unused) use ($__global_Performance_Minibench_discard, $__global_Effect_Console_log, $__global_Performance_Minibench_append, $__global_Performance_Minibench_withUnits, $res, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_discard)(($__global_Effect_Console_log)(($__global_Performance_Minibench_append)("stddev = ", ($__global_Performance_Minibench_withUnits)(($res)->stdDev))), (function() use ($__global_Performance_Minibench_discard, $__global_Effect_Console_log, $__global_Performance_Minibench_append, $__global_Performance_Minibench_withUnits, $res) {
  $__fn = function($__dollar____unused) use ($__global_Performance_Minibench_discard, $__global_Effect_Console_log, $__global_Performance_Minibench_append, $__global_Performance_Minibench_withUnits, $res, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_discard)(($__global_Effect_Console_log)(($__global_Performance_Minibench_append)("min    = ", ($__global_Performance_Minibench_withUnits)(($res)->min))), (function() use ($__global_Effect_Console_log, $__global_Performance_Minibench_append, $__global_Performance_Minibench_withUnits, $res) {
  $__fn = function($__dollar____unused) use ($__global_Effect_Console_log, $__global_Performance_Minibench_append, $__global_Performance_Minibench_withUnits, $res, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_Console_log)(($__global_Performance_Minibench_append)("max    = ", ($__global_Performance_Minibench_withUnits)(($res)->max)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Performance_Minibench_benchWith'] = __NAMESPACE__ . '\\Performance_Minibench_benchWith';


