<?php

namespace Data\Array;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Internal/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty.Internal/index.php';
require_once __DIR__ . '/../Data.Array.ST/index.php';
require_once __DIR__ . '/../Data.Array.ST.Iterator/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
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
      case 'Data_Array_sequence': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Traversable_traversableArray'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sequence;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Array_traverse_': $v = (function() {
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
  $applySecond = (function() use ($apply1, $map) {
  $__fn = function($a, $b = null) use ($apply1, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Apply_identity = ($GLOBALS['Control_Apply_identity'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_identity'));
    $__res = ($apply1)(($map)(($__global_Data_Function_const)($__global_Control_Apply_identity), $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__case_0 = ($GLOBALS['Control_Monad_ST_Internal_applicativeST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_applicativeST'));
  $__case_res_2 = null;
  if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
  $pure = $__case_res_2;
  return (function() use ($applySecond, $pure) {
  $__fn = function($dictFoldable) use ($applySecond, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
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
})(); break;
      case 'Data_Array_lessThan': $v = (function() {
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
      case 'Data_Array_add': $v = (function() {
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
      case 'Data_Array_negate': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ring_ringInt'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sub;
} else {
throw new \Exception("Pattern match failure");
};
  $sub1 = $__case_res_0;
  $__case_0 = $dict;
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->zero;
} else {
throw new \Exception("Pattern match failure");
};
  $zero = $__case_res_1;
  return (function() use ($sub1, $zero) {
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
})(); break;
      case 'Data_Array_lessThanOrEq': $v = (function() {
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
      case 'Data_Array_eq': $v = (function() {
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
      case 'Data_Array_bind': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Monad_ST_Internal_bindST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bindST'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Array_discard': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Bind_discardUnit'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_discardUnit'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->discard;
} else {
throw new \Exception("Pattern match failure");
};
  return ($__case_res_0)(($GLOBALS['Control_Monad_ST_Internal_bindST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bindST')));
})(); break;
      case 'Data_Array_void': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Monad_ST_Internal_functorST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_functorST'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  return ($__case_res_0)((($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
})(); break;
      case 'Data_Array_pure': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Monad_ST_Internal_applicativeST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_applicativeST'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Array_intercalate1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
  $foldl3 = $__case_res_0;
  return (function() use ($dict, $foldl3) {
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
})(); break;
      case 'Data_Array_zero': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semiring_semiringInt'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->zero;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Array_sub': $v = (function() {
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
      case 'Data_Array_one': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semiring_semiringInt'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->one;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Array_apply': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Maybe_applyMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_applyMaybe'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Array_map': $v = (function() {
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
      case 'Data_Array_map1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Functor_functorArray'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_functorArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Array_map2': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Monad_ST_Internal_functorST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_functorST'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Array_compose': $v = (function() {
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
      case 'Data_Array_fromJust': $v = (($GLOBALS['Data_Maybe_fromJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromJust')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Array_when': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Monad_ST_Internal_applicativeST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_applicativeST'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
  $pure1 = $__case_res_0;
  return (function() use ($pure1) {
  $__body = function($v, $v1) use ($pure1) {
    $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__case_0 = $v;
    $__case_1 = $v1;
    switch ($__case_0) {
case true:
$m = $__case_1;
return $m;
break;
case false:
return ($pure1)($__global_Data_Unit_unit);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($pure1, $__body, &$__fn) {
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
})(); break;
      case 'Data_Array_notEq': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ordering_eqOrdering'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_eqOrdering'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  $eq3 = $__case_res_0;
  return (function() use ($eq3) {
  $__fn = function($x, $y = null) use ($eq3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Eq_eq2 = ($GLOBALS['Data_Eq_eq2'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq2'));
    $__res = ($__global_Data_Eq_eq2)(($eq3)($x, $y), false);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Array_eq1': $v = (function() {
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
      case 'Data_Array_greaterThanOrEq': $v = (function() {
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
      case 'Data_Array_foldMap1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Array_fold1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
  $foldMap2 = $__case_res_0;
  return (function() use ($foldMap2) {
  $__fn = function($dictMonoid) use ($foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_identity = ($GLOBALS['Data_Foldable_identity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_identity'));
    $__res = ($foldMap2)($dictMonoid, $__global_Data_Foldable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Array_append': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semigroup_semigroupArray'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Array_composeFlipped': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compose;
} else {
throw new \Exception("Pattern match failure");
};
  $compose1 = $__case_res_0;
  return (function() use ($compose1) {
  $__fn = function($f, $g = null) use ($compose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($g) use ($f, &$__fn) { return $__fn($f, $g); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($compose1)($g, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Array_traverse': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Traversable_traversableArray'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Array_not': $v = (function() {
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
      case 'Data_Array_zipWith': $v = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_zipWithImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_zipWithImpl'))); break;
      case 'Data_Array_zip': $v = (($GLOBALS['Data_Array_zipWith'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_zipWith')))((function() {
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
})()); break;
      case 'Data_Array_updateAt': $v = (($GLOBALS['Data_Function_Uncurried_runFn5'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn5')))(($GLOBALS['Data_Array__updateAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array__updateAt')), (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))); break;
      case 'Data_Array_unsafeIndex1': $v = (($GLOBALS['Data_Array_unsafeIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_unsafeIndex')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Array_uncons': $v = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_unconsImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_unconsImpl')), (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))), (function() {
  $__fn = function($x, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($x, &$__fn) { return $__fn($x, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
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
})())((object)["head" => $x, "tail" => $xs]);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Array_tail': $v = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_unconsImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_unconsImpl')), (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))), (function() {
  $__fn = function($v, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($v, &$__fn) { return $__fn($v, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
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
})())($xs);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Array_sortWith1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  $compare3 = $__case_res_0;
  $comparing = (function() use ($compare3) {
  $__fn = function($f, $x = null, $y = null) use ($compare3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($y) use ($f, $x, &$__fn) { return $__fn($f, $x, $y); };
    if ($__num === 1) return function($x, $y = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $x, $y);
      if ($__num2 === 1) return function($y) use ($f, $x, &$__fn) { return $__fn($f, $x, $y); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($compare3)(($f)($x), ($f)($y));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return (function() use ($comparing) {
  $__fn = function($f) use ($comparing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_sortBy = ($GLOBALS['Data_Array_sortBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sortBy'));
    $__res = ($__global_Data_Array_sortBy)(($comparing)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Array_slice': $v = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_sliceImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sliceImpl'))); break;
      case 'Data_Array_scanr': $v = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_scanrImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_scanrImpl'))); break;
      case 'Data_Array_scanl': $v = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_scanlImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_scanlImpl'))); break;
      case 'Data_Array_replicate': $v = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_replicateImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_replicateImpl'))); break;
      case 'Data_Array_range': $v = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_rangeImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_rangeImpl'))); break;
      case 'Data_Array_partition': $v = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_partitionImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_partitionImpl'))); break;
      case 'Data_Array_mapWithIndex': $v = (function() {
  $__case_0 = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexArray'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->mapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Array_insertAt': $v = (($GLOBALS['Data_Function_Uncurried_runFn5'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn5')))(($GLOBALS['Data_Array__insertAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array__insertAt')), (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))); break;
      case 'Data_Array_index': $v = (($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Array_indexImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_indexImpl')), (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))); break;
      case 'Data_Array_foldr': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Array_foldl': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Array_findMap': $v = (($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Array_findMapImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findMapImpl')), ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), ($GLOBALS['Data_Maybe_isJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isJust'))); break;
      case 'Data_Array_findLastIndex': $v = (($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Array_findLastIndexImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findLastIndexImpl')), (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))); break;
      case 'Data_Array_findIndex': $v = (($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Array_findIndexImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findIndexImpl')), (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))); break;
      case 'Data_Array_filter': $v = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_filterImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_filterImpl'))); break;
      case 'Data_Array_deleteAt': $v = (($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Array__deleteAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array__deleteAt')), (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))); break;
      case 'Data_Array_concatMap': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Bind_bindArray'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bindArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
  return (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))($__case_res_0);
})(); break;
      case 'Data_Array_catMaybes': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->identity;
} else {
throw new \Exception("Pattern match failure");
};
  return (($GLOBALS['Data_Array_mapMaybe'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_mapMaybe')))($__case_res_0);
})(); break;
      case 'Data_Array_any': $v = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_anyImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_anyImpl'))); break;
      case 'Data_Array_all': $v = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_allImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_allImpl'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


































// Data_Array_zipWithA
function Data_Array_zipWithA($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_zipWithA';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_sequence = ($GLOBALS['Data_Array_sequence'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sequence'));
$__global_Data_Array_zipWith = ($GLOBALS['Data_Array_zipWith'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_zipWith'));
$sequence1 = ($__global_Data_Array_sequence)($dictApplicative);
    $__res = (function() use ($sequence1, $__global_Data_Array_zipWith) {
  $__fn = function($f, $xs = null, $ys = null) use ($sequence1, $__global_Data_Array_zipWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($ys) use ($f, $xs, &$__fn) { return $__fn($f, $xs, $ys); };
    if ($__num === 1) return function($xs, $ys = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $xs, $ys);
      if ($__num2 === 1) return function($ys) use ($f, $xs, &$__fn) { return $__fn($f, $xs, $ys); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($sequence1)(($__global_Data_Array_zipWith)($f, $xs, $ys));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_zipWithA'] = __NAMESPACE__ . '\\Data_Array_zipWithA';


// Data_Array_updateAtIndices
function Data_Array_updateAtIndices($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_updateAtIndices';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_traverse_ = ($GLOBALS['Data_Array_traverse_'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_traverse_'));
$__global_Control_Monad_ST_Internal_run = ($GLOBALS['Control_Monad_ST_Internal_run'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_run'));
$__global_Data_Array_ST_withArray = ($GLOBALS['Data_Array_ST_withArray'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_withArray'));
$__global_Data_Array_ST_poke = ($GLOBALS['Data_Array_ST_poke'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_poke'));
$traverse_1 = ($__global_Data_Array_traverse_)($dictFoldable);
    $__res = (function() use ($__global_Control_Monad_ST_Internal_run, $__global_Data_Array_ST_withArray, $traverse_1, $__global_Data_Array_ST_poke) {
  $__fn = function($us, $xs = null) use ($__global_Control_Monad_ST_Internal_run, $__global_Data_Array_ST_withArray, $traverse_1, $__global_Data_Array_ST_poke, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($us, &$__fn) { return $__fn($us, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Control_Monad_ST_Internal_run)(($__global_Data_Array_ST_withArray)((function() use ($traverse_1, $__global_Data_Array_ST_poke, $us) {
  $__fn = function($res) use ($traverse_1, $__global_Data_Array_ST_poke, $us, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse_1)((function() use ($__global_Data_Array_ST_poke, $res) {
  $__body = function($v) use ($__global_Data_Array_ST_poke, $res) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$i = ($__case_0)->v0;
$a = ($__case_0)->v1;
return ($__global_Data_Array_ST_poke)($i, $a, $res);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Data_Array_ST_poke, $res, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $us);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_updateAtIndices'] = __NAMESPACE__ . '\\Data_Array_updateAtIndices';


// Data_Array_unsafeIndex
function Data_Array_unsafeIndex($__dollar____unused) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_unsafeIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$__global_Data_Array_unsafeIndexImpl = ($GLOBALS['Data_Array_unsafeIndexImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_unsafeIndexImpl'));
    $__res = ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Array_unsafeIndexImpl);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_unsafeIndex'] = __NAMESPACE__ . '\\Data_Array_unsafeIndex';



// Data_Array_toUnfoldable
function Data_Array_toUnfoldable($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_toUnfoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_length = ($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length'));
$__case_0 = $dictUnfoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->unfoldr;
} else {
throw new \Exception("Pattern match failure");
};
$unfoldr = $__case_res_0;
    $__res = (function() use ($__global_Data_Array_length, $unfoldr) {
  $__fn = function($xs) use ($__global_Data_Array_length, $unfoldr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$len = ($__global_Data_Array_length)($xs);
$f = (function() {
  $__body = function($i) {
    $__case_0 = $i;
    if (true) {
$i1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($i) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($i);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($unfoldr)($f, 0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_toUnfoldable'] = __NAMESPACE__ . '\\Data_Array_toUnfoldable';


// Data_Array_sortBy
function Data_Array_sortBy($comp) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_sortBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
$__global_Data_Array_sortByImpl = ($GLOBALS['Data_Array_sortByImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sortByImpl'));
$__global_Data_Array_negate = ($GLOBALS['Data_Array_negate'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_negate'));
    $__res = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Array_sortByImpl, $comp, (function() use ($__global_Data_Array_negate) {
  $__body = function($v) use ($__global_Data_Array_negate) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "GT":
return 1;
break;
case "EQ":
return 0;
break;
case "LT":
return ($__global_Data_Array_negate)(1);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Data_Array_negate, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_sortBy'] = __NAMESPACE__ . '\\Data_Array_sortBy';

// Data_Array_sortWith
function Data_Array_sortWith($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_sortWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_sortBy = ($GLOBALS['Data_Array_sortBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sortBy'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_0;
$comparing = (function() use ($compare3) {
  $__fn = function($f, $x = null, $y = null) use ($compare3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($y) use ($f, $x, &$__fn) { return $__fn($f, $x, $y); };
    if ($__num === 1) return function($x, $y = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $x, $y);
      if ($__num2 === 1) return function($y) use ($f, $x, &$__fn) { return $__fn($f, $x, $y); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($compare3)(($f)($x), ($f)($y));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($__global_Data_Array_sortBy, $comparing) {
  $__fn = function($f) use ($__global_Data_Array_sortBy, $comparing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_sortBy)(($comparing)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_sortWith'] = __NAMESPACE__ . '\\Data_Array_sortWith';


// Data_Array_sort
function Data_Array_sort($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_sort';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_sortBy = ($GLOBALS['Data_Array_sortBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sortBy'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (function() use ($__global_Data_Array_sortBy, $compare) {
  $__fn = function($xs) use ($__global_Data_Array_sortBy, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_sortBy)($compare, $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_sort'] = __NAMESPACE__ . '\\Data_Array_sort';

// Data_Array_snoc
function Data_Array_snoc($xs, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_snoc';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($xs, $__fn) { return $__fn($xs, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Control_Monad_ST_Internal_run = ($GLOBALS['Control_Monad_ST_Internal_run'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_run'));
$__global_Data_Array_ST_withArray = ($GLOBALS['Data_Array_ST_withArray'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_withArray'));
$__global_Data_Array_ST_push = ($GLOBALS['Data_Array_ST_push'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_push'));
    $__res = ($__global_Control_Monad_ST_Internal_run)(($__global_Data_Array_ST_withArray)(($__global_Data_Array_ST_push)($x), $xs));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_snoc'] = __NAMESPACE__ . '\\Data_Array_snoc';


// Data_Array_splitAt
function Data_Array_splitAt($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_splitAt';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__global_Data_Array_slice = ($GLOBALS['Data_Array_slice'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_slice'));
    $__global_Data_Array_length = ($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length'));
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$i = $__case_0;
$xs = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
$i = $__case_0;
$xs = $__case_1;
return (object)["before" => ($__global_Data_Array_slice)(0, $i, $xs), "after" => ($__global_Data_Array_slice)($i, ($__global_Data_Array_length)($xs), $xs)];
} else {
throw new \Exception("Pattern match failure");
};
};
  };
    $__res = $__body($v, $v1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_splitAt'] = __NAMESPACE__ . '\\Data_Array_splitAt';

// Data_Array_take
function Data_Array_take($n, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_take';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($n, $__fn) { return $__fn($n, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($n, $xs) {
    $__global_Data_Array_lessThan = ($GLOBALS['Data_Array_lessThan'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_lessThan'));
    $__global_Data_Array_slice = ($GLOBALS['Data_Array_slice'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_slice'));
    $__case_0 = ($__global_Data_Array_lessThan)($n, 1);
    switch ($__case_0) {
case true:
return [];
break;
default:
return ($__global_Data_Array_slice)(0, $n, $xs);
break;
};
  };
    $__res = $__body($n, $xs);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_take'] = __NAMESPACE__ . '\\Data_Array_take';

// Data_Array_singleton
function Data_Array_singleton($a) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_singleton';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = [$a];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_singleton'] = __NAMESPACE__ . '\\Data_Array_singleton';






// Data_Array_null
function Data_Array_null($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_null';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_eq = ($GLOBALS['Data_Array_eq'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_eq'));
$__global_Data_Array_length = ($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length'));
    $__res = ($__global_Data_Array_eq)(($__global_Data_Array_length)($xs), 0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_null'] = __NAMESPACE__ . '\\Data_Array_null';

// Data_Array_modifyAtIndices
function Data_Array_modifyAtIndices($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_modifyAtIndices';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_traverse_ = ($GLOBALS['Data_Array_traverse_'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_traverse_'));
$__global_Control_Monad_ST_Internal_run = ($GLOBALS['Control_Monad_ST_Internal_run'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_run'));
$__global_Data_Array_ST_withArray = ($GLOBALS['Data_Array_ST_withArray'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_withArray'));
$__global_Data_Array_ST_modify = ($GLOBALS['Data_Array_ST_modify'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_modify'));
$traverse_1 = ($__global_Data_Array_traverse_)($dictFoldable);
    $__res = (function() use ($__global_Control_Monad_ST_Internal_run, $__global_Data_Array_ST_withArray, $traverse_1, $__global_Data_Array_ST_modify) {
  $__fn = function($is, $f = null, $xs = null) use ($__global_Control_Monad_ST_Internal_run, $__global_Data_Array_ST_withArray, $traverse_1, $__global_Data_Array_ST_modify, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($is, $f, &$__fn) { return $__fn($is, $f, $xs); };
    if ($__num === 1) return function($f, $xs = null) use ($is, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($is, $f, $xs);
      if ($__num2 === 1) return function($xs) use ($is, $f, &$__fn) { return $__fn($is, $f, $xs); };
      return phpurs_curry_fallback($__fn, [$is], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Control_Monad_ST_Internal_run)(($__global_Data_Array_ST_withArray)((function() use ($traverse_1, $__global_Data_Array_ST_modify, $f, $is) {
  $__fn = function($res) use ($traverse_1, $__global_Data_Array_ST_modify, $f, $is, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse_1)((function() use ($__global_Data_Array_ST_modify, $f, $res) {
  $__fn = function($i) use ($__global_Data_Array_ST_modify, $f, $res, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_ST_modify)($i, $f, $res);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $is);
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
$GLOBALS['Data_Array_modifyAtIndices'] = __NAMESPACE__ . '\\Data_Array_modifyAtIndices';


// Data_Array_intersperse
function Data_Array_intersperse($a, $arr = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_intersperse';
  if ($__num < 2) {
    if ($__num === 1) return function($arr) use ($a, $__fn) { return $__fn($a, $arr); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($a, $arr) {
    $__global_Data_Array_length = ($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length'));
    $v = ($__global_Data_Array_length)($arr);
    $__case_0 = $v;
    if (true) {
$len = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($a, $arr);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_intersperse'] = __NAMESPACE__ . '\\Data_Array_intersperse';

// Data_Array_intercalate
function Data_Array_intercalate($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_intercalate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_intercalate1 = ($GLOBALS['Data_Array_intercalate1'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_intercalate1'));
    $__res = ($__global_Data_Array_intercalate1)($dictMonoid);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_intercalate'] = __NAMESPACE__ . '\\Data_Array_intercalate';


// Data_Array_init
function Data_Array_init($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_init';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($xs) {
    $__case_0 = $xs;
    if (true) {
$xs1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($xs);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_init'] = __NAMESPACE__ . '\\Data_Array_init';


// Data_Array_last
function Data_Array_last($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_last';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_index = ($GLOBALS['Data_Array_index'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_index'));
$__global_Data_Array_sub = ($GLOBALS['Data_Array_sub'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sub'));
$__global_Data_Array_length = ($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length'));
    $__res = ($__global_Data_Array_index)($xs, ($__global_Data_Array_sub)(($__global_Data_Array_length)($xs), 1));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_last'] = __NAMESPACE__ . '\\Data_Array_last';

// Data_Array_unsnoc
function Data_Array_unsnoc($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_unsnoc';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_apply = ($GLOBALS['Data_Array_apply'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_apply'));
$__global_Data_Array_map = ($GLOBALS['Data_Array_map'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_map'));
$__global_Data_Array_init = ($GLOBALS['Data_Array_init'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_init'));
$__global_Data_Array_last = ($GLOBALS['Data_Array_last'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_last'));
    $__res = ($__global_Data_Array_apply)(($__global_Data_Array_map)((function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (object)["init" => $v, "last" => $v1];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_Array_init)($xs)), ($__global_Data_Array_last)($xs));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_unsnoc'] = __NAMESPACE__ . '\\Data_Array_unsnoc';

// Data_Array_modifyAt
function Data_Array_modifyAt($i, $f = null, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_modifyAt';
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($i, $f, $__fn) { return $__fn($i, $f, $xs); };
    if ($__num === 1) return function($f, $xs = null) use ($i, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $f, $xs);
      if ($__num2 === 1) return function($xs) use ($i, $f, $__fn) { return $__fn($i, $f, $xs); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_Array_updateAt = ($GLOBALS['Data_Array_updateAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_updateAt'));
$__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
$__global_Data_Array_index = ($GLOBALS['Data_Array_index'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_index'));
$go = (function() use ($__global_Data_Array_updateAt, $i, $f, $xs) {
  $__fn = function($x) use ($__global_Data_Array_updateAt, $i, $f, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_updateAt)($i, ($f)($x), $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Data_Maybe_maybe)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), $go, ($__global_Data_Array_index)($xs, $i));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Array_modifyAt'] = __NAMESPACE__ . '\\Data_Array_modifyAt';

// Data_Array_span
function Data_Array_span($p, $arr = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_span';
  if ($__num < 2) {
    if ($__num === 1) return function($arr) use ($p, $__fn) { return $__fn($p, $arr); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($p, $arr) {
    $__global_Data_Array_index = ($GLOBALS['Data_Array_index'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_index'));
    $__global_Data_Array_add = ($GLOBALS['Data_Array_add'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_add'));
    $__global_Data_Array_slice = ($GLOBALS['Data_Array_slice'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_slice'));
    $__global_Data_Array_length = ($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length'));
    $go = (function() use ($__global_Data_Array_index, $arr, $p, &$go, $__global_Data_Array_add) {
  $__fn = function($i) use ($__global_Data_Array_index, $arr, $p, &$go, $__global_Data_Array_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$v = ($__global_Data_Array_index)($arr, $i);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Just":
$x = ($__case_0)->v0;
$__case_0 = ($p)($x);
switch ($__case_0) {
case true:
$__tco_tmp_0 = ($__global_Data_Array_add)($i, 1);
$i = $__tco_tmp_0;
continue 3;
break;
default:
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
})())($i);
break;
};
break;
case "Nothing":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
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
    $breakIndex = ($go)(0);
    $__case_0 = $breakIndex;
    if (((($__case_0)->tag === "Just") && (($__case_0)->v0 === 0))) {
return (object)["init" => [], "rest" => $arr];
} else {
switch (($__case_0)->tag) {
case "Just":
$i = ($__case_0)->v0;
return (object)["init" => ($__global_Data_Array_slice)(0, $i, $arr), "rest" => ($__global_Data_Array_slice)($i, ($__global_Data_Array_length)($arr), $arr)];
break;
case "Nothing":
return (object)["init" => $arr, "rest" => []];
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  };
    $__res = $__body($p, $arr);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_span'] = __NAMESPACE__ . '\\Data_Array_span';

// Data_Array_takeWhile
function Data_Array_takeWhile($p, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_takeWhile';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($p, $__fn) { return $__fn($p, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_span = ($GLOBALS['Data_Array_span'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_span'));
    $__res = (($__global_Data_Array_span)($p, $xs))->init;
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_takeWhile'] = __NAMESPACE__ . '\\Data_Array_takeWhile';

// Data_Array_unzip
function Data_Array_unzip($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_unzip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_ST_Internal_run = ($GLOBALS['Control_Monad_ST_Internal_run'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_run'));
$__global_Data_Array_bind = ($GLOBALS['Data_Array_bind'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_bind'));
$__global_Data_Array_ST_new = ($GLOBALS['Data_Array_ST_new'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_new'));
$__global_Data_Array_ST_Iterator_iterator = ($GLOBALS['Data_Array_ST_Iterator_iterator'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_iterator'));
$__global_Data_Array_index = ($GLOBALS['Data_Array_index'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_index'));
$__global_Data_Array_discard = ($GLOBALS['Data_Array_discard'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_discard'));
$__global_Data_Array_ST_Iterator_iterate = ($GLOBALS['Data_Array_ST_Iterator_iterate'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_iterate'));
$__global_Data_Array_void = ($GLOBALS['Data_Array_void'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_void'));
$__global_Data_Array_ST_push = ($GLOBALS['Data_Array_ST_push'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_push'));
$__global_Data_Array_ST_unsafeFreeze = ($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_unsafeFreeze'));
$__global_Data_Array_pure = ($GLOBALS['Data_Array_pure'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_pure'));
    $__res = ($__global_Control_Monad_ST_Internal_run)(($__global_Data_Array_bind)($__global_Data_Array_ST_new, (function() use ($__global_Data_Array_bind, $__global_Data_Array_ST_new, $__global_Data_Array_ST_Iterator_iterator, $__global_Data_Array_index, $xs, $__global_Data_Array_discard, $__global_Data_Array_ST_Iterator_iterate, $__global_Data_Array_void, $__global_Data_Array_ST_push, $__global_Data_Array_ST_unsafeFreeze, $__global_Data_Array_pure) {
  $__fn = function($fsts) use ($__global_Data_Array_bind, $__global_Data_Array_ST_new, $__global_Data_Array_ST_Iterator_iterator, $__global_Data_Array_index, $xs, $__global_Data_Array_discard, $__global_Data_Array_ST_Iterator_iterate, $__global_Data_Array_void, $__global_Data_Array_ST_push, $__global_Data_Array_ST_unsafeFreeze, $__global_Data_Array_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_bind)($__global_Data_Array_ST_new, (function() use ($__global_Data_Array_bind, $__global_Data_Array_ST_Iterator_iterator, $__global_Data_Array_index, $xs, $__global_Data_Array_discard, $__global_Data_Array_ST_Iterator_iterate, $__global_Data_Array_void, $__global_Data_Array_ST_push, $fsts, $__global_Data_Array_ST_unsafeFreeze, $__global_Data_Array_pure) {
  $__fn = function($snds) use ($__global_Data_Array_bind, $__global_Data_Array_ST_Iterator_iterator, $__global_Data_Array_index, $xs, $__global_Data_Array_discard, $__global_Data_Array_ST_Iterator_iterate, $__global_Data_Array_void, $__global_Data_Array_ST_push, $fsts, $__global_Data_Array_ST_unsafeFreeze, $__global_Data_Array_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_bind)(($__global_Data_Array_ST_Iterator_iterator)((function() use ($__global_Data_Array_index, $xs) {
  $__fn = function($v) use ($__global_Data_Array_index, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_index)($xs, $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($__global_Data_Array_discard, $__global_Data_Array_ST_Iterator_iterate, $__global_Data_Array_void, $__global_Data_Array_ST_push, $fsts, $snds, $__global_Data_Array_bind, $__global_Data_Array_ST_unsafeFreeze, $__global_Data_Array_pure) {
  $__fn = function($iter) use ($__global_Data_Array_discard, $__global_Data_Array_ST_Iterator_iterate, $__global_Data_Array_void, $__global_Data_Array_ST_push, $fsts, $snds, $__global_Data_Array_bind, $__global_Data_Array_ST_unsafeFreeze, $__global_Data_Array_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_discard)(($__global_Data_Array_ST_Iterator_iterate)($iter, (function() use ($__global_Data_Array_discard, $__global_Data_Array_void, $__global_Data_Array_ST_push, $fsts, $snds) {
  $__body = function($v) use ($__global_Data_Array_discard, $__global_Data_Array_void, $__global_Data_Array_ST_push, $fsts, $snds) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$fst = ($__case_0)->v0;
$snd = ($__case_0)->v1;
return ($__global_Data_Array_discard)(($__global_Data_Array_void)(($__global_Data_Array_ST_push)($fst, $fsts)), (function() use ($__global_Data_Array_void, $__global_Data_Array_ST_push, $snd, $snds) {
  $__fn = function($__dollar____unused) use ($__global_Data_Array_void, $__global_Data_Array_ST_push, $snd, $snds, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_void)(($__global_Data_Array_ST_push)($snd, $snds));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Data_Array_discard, $__global_Data_Array_void, $__global_Data_Array_ST_push, $fsts, $snds, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($__global_Data_Array_bind, $__global_Data_Array_ST_unsafeFreeze, $fsts, $snds, $__global_Data_Array_pure) {
  $__fn = function($__dollar____unused) use ($__global_Data_Array_bind, $__global_Data_Array_ST_unsafeFreeze, $fsts, $snds, $__global_Data_Array_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_bind)(($__global_Data_Array_ST_unsafeFreeze)($fsts), (function() use ($__global_Data_Array_bind, $__global_Data_Array_ST_unsafeFreeze, $snds, $__global_Data_Array_pure) {
  $__fn = function($fsts__prime__) use ($__global_Data_Array_bind, $__global_Data_Array_ST_unsafeFreeze, $snds, $__global_Data_Array_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_bind)(($__global_Data_Array_ST_unsafeFreeze)($snds), (function() use ($__global_Data_Array_pure, $fsts__prime__) {
  $__fn = function($snds__prime__) use ($__global_Data_Array_pure, $fsts__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_pure)(((function() {
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
})())($fsts__prime__, $snds__prime__));
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
})()));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_unzip'] = __NAMESPACE__ . '\\Data_Array_unzip';

// Data_Array_head
function Data_Array_head($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_head';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_index = ($GLOBALS['Data_Array_index'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_index'));
    $__res = ($__global_Data_Array_index)($xs, 0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_head'] = __NAMESPACE__ . '\\Data_Array_head';

// Data_Array_nubBy
function Data_Array_nubBy($comp, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_nubBy';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($comp, $__fn) { return $__fn($comp, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($comp, $xs) {
    $__global_Data_Array_sortBy = ($GLOBALS['Data_Array_sortBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sortBy'));
    $__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
    $__global_Data_Array_mapWithIndex = ($GLOBALS['Data_Array_mapWithIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_mapWithIndex'));
    $__global_Data_Array_head = ($GLOBALS['Data_Array_head'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_head'));
    $__global_Data_Array_map1 = ($GLOBALS['Data_Array_map1'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_map1'));
    $__global_Data_Array_sortWith1 = ($GLOBALS['Data_Array_sortWith1'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sortWith1'));
    $__global_Data_Tuple_fst = ($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst'));
    $__global_Control_Monad_ST_Internal_run = ($GLOBALS['Control_Monad_ST_Internal_run'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_run'));
    $__global_Data_Array_bind = ($GLOBALS['Data_Array_bind'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_bind'));
    $__global_Data_Array_ST_unsafeThaw = ($GLOBALS['Data_Array_ST_unsafeThaw'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_unsafeThaw'));
    $__global_Data_Array_singleton = ($GLOBALS['Data_Array_singleton'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_singleton'));
    $__global_Data_Array_discard = ($GLOBALS['Data_Array_discard'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_discard'));
    $__global_Control_Monad_ST_Internal_foreach = ($GLOBALS['Control_Monad_ST_Internal_foreach'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_foreach'));
    $__global_Data_Array_map2 = ($GLOBALS['Data_Array_map2'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_map2'));
    $__global_Data_Array_compose = ($GLOBALS['Data_Array_compose'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_compose'));
    $__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
    $__global_Data_Array_fromJust = ($GLOBALS['Data_Array_fromJust'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_fromJust'));
    $__global_Data_Array_last = ($GLOBALS['Data_Array_last'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_last'));
    $__global_Data_Array_ST_unsafeFreeze = ($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_unsafeFreeze'));
    $__global_Data_Array_when = ($GLOBALS['Data_Array_when'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_when'));
    $__global_Data_Array_notEq = ($GLOBALS['Data_Array_notEq'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_notEq'));
    $__global_Data_Array_void = ($GLOBALS['Data_Array_void'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_void'));
    $__global_Data_Array_ST_push = ($GLOBALS['Data_Array_ST_push'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_push'));
    $indexedAndSorted = ($__global_Data_Array_sortBy)((function() use ($comp, $__global_Data_Tuple_snd) {
  $__fn = function($x, $y = null) use ($comp, $__global_Data_Tuple_snd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($comp)(($__global_Data_Tuple_snd)($x), ($__global_Data_Tuple_snd)($y));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_Array_mapWithIndex)((function() {
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
})(), $xs));
    $v = ($__global_Data_Array_head)($indexedAndSorted);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nothing":
return [];
break;
case "Just":
$x = ($__case_0)->v0;
return ($__global_Data_Array_map1)($__global_Data_Tuple_snd, ($__global_Data_Array_sortWith1)($__global_Data_Tuple_fst, ($__global_Control_Monad_ST_Internal_run)(($__global_Data_Array_bind)(($__global_Data_Array_ST_unsafeThaw)(($__global_Data_Array_singleton)($x)), (function() use ($__global_Data_Array_discard, $__global_Control_Monad_ST_Internal_foreach, $indexedAndSorted, $__global_Data_Array_bind, $__global_Data_Array_map2, $__global_Data_Array_compose, $__global_Data_Tuple_snd, $__global_Partial_Unsafe__unsafePartial, $__global_Data_Array_fromJust, $__global_Data_Array_last, $__global_Data_Array_ST_unsafeFreeze, $__global_Data_Array_when, $__global_Data_Array_notEq, $comp, $__global_Data_Array_void, $__global_Data_Array_ST_push) {
  $__fn = function($result) use ($__global_Data_Array_discard, $__global_Control_Monad_ST_Internal_foreach, $indexedAndSorted, $__global_Data_Array_bind, $__global_Data_Array_map2, $__global_Data_Array_compose, $__global_Data_Tuple_snd, $__global_Partial_Unsafe__unsafePartial, $__global_Data_Array_fromJust, $__global_Data_Array_last, $__global_Data_Array_ST_unsafeFreeze, $__global_Data_Array_when, $__global_Data_Array_notEq, $comp, $__global_Data_Array_void, $__global_Data_Array_ST_push, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_discard)(($__global_Control_Monad_ST_Internal_foreach)($indexedAndSorted, (function() use ($__global_Data_Array_bind, $__global_Data_Array_map2, $__global_Data_Array_compose, $__global_Data_Tuple_snd, $__global_Partial_Unsafe__unsafePartial, $__global_Data_Array_fromJust, $__global_Data_Array_last, $__global_Data_Array_ST_unsafeFreeze, $result, $__global_Data_Array_when, $__global_Data_Array_notEq, $comp, $__global_Data_Array_void, $__global_Data_Array_ST_push) {
  $__body = function($v1) use ($__global_Data_Array_bind, $__global_Data_Array_map2, $__global_Data_Array_compose, $__global_Data_Tuple_snd, $__global_Partial_Unsafe__unsafePartial, $__global_Data_Array_fromJust, $__global_Data_Array_last, $__global_Data_Array_ST_unsafeFreeze, $result, $__global_Data_Array_when, $__global_Data_Array_notEq, $comp, $__global_Data_Array_void, $__global_Data_Array_ST_push) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Tuple":
$pair = $__case_0;
$x__prime__ = ($__case_0)->v1;
return ($__global_Data_Array_bind)(($__global_Data_Array_map2)(($__global_Data_Array_compose)($__global_Data_Tuple_snd, ($__global_Partial_Unsafe__unsafePartial)((function() use ($__global_Data_Array_compose, $__global_Data_Array_fromJust, $__global_Data_Array_last) {
  $__fn = function($__dollar____unused) use ($__global_Data_Array_compose, $__global_Data_Array_fromJust, $__global_Data_Array_last, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_compose)($__global_Data_Array_fromJust, $__global_Data_Array_last);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($__global_Data_Array_ST_unsafeFreeze)($result)), (function() use ($__global_Data_Array_when, $__global_Data_Array_notEq, $comp, $x__prime__, $__global_Data_Array_void, $__global_Data_Array_ST_push, $pair, $result) {
  $__fn = function($lst) use ($__global_Data_Array_when, $__global_Data_Array_notEq, $comp, $x__prime__, $__global_Data_Array_void, $__global_Data_Array_ST_push, $pair, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_when)(($__global_Data_Array_notEq)(($comp)($lst, $x__prime__), ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"))), ($__global_Data_Array_void)(($__global_Data_Array_ST_push)($pair, $result)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($__global_Data_Array_bind, $__global_Data_Array_map2, $__global_Data_Array_compose, $__global_Data_Tuple_snd, $__global_Partial_Unsafe__unsafePartial, $__global_Data_Array_fromJust, $__global_Data_Array_last, $__global_Data_Array_ST_unsafeFreeze, $result, $__global_Data_Array_when, $__global_Data_Array_notEq, $comp, $__global_Data_Array_void, $__global_Data_Array_ST_push, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($__global_Data_Array_ST_unsafeFreeze, $result) {
  $__fn = function($__dollar____unused) use ($__global_Data_Array_ST_unsafeFreeze, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_ST_unsafeFreeze)($result);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()))));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($comp, $xs);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_nubBy'] = __NAMESPACE__ . '\\Data_Array_nubBy';

// Data_Array_nub
function Data_Array_nub($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_nub';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_nubBy = ($GLOBALS['Data_Array_nubBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_nubBy'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Array_nubBy)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_nub'] = __NAMESPACE__ . '\\Data_Array_nub';

// Data_Array_groupBy
function Data_Array_groupBy($op, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_groupBy';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($op, $__fn) { return $__fn($op, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Control_Monad_ST_Internal_run = ($GLOBALS['Control_Monad_ST_Internal_run'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_run'));
$__global_Data_Array_bind = ($GLOBALS['Data_Array_bind'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_bind'));
$__global_Data_Array_ST_new = ($GLOBALS['Data_Array_ST_new'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_new'));
$__global_Data_Array_ST_Iterator_iterator = ($GLOBALS['Data_Array_ST_Iterator_iterator'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_iterator'));
$__global_Data_Array_index = ($GLOBALS['Data_Array_index'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_index'));
$__global_Data_Array_discard = ($GLOBALS['Data_Array_discard'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_discard'));
$__global_Data_Array_ST_Iterator_iterate = ($GLOBALS['Data_Array_ST_Iterator_iterate'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_iterate'));
$__global_Data_Array_void = ($GLOBALS['Data_Array_void'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_void'));
$__global_Data_Array_ST_push = ($GLOBALS['Data_Array_ST_push'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_push'));
$__global_Data_Array_ST_Iterator_pushWhile = ($GLOBALS['Data_Array_ST_Iterator_pushWhile'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_pushWhile'));
$__global_Data_Array_ST_unsafeFreeze = ($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_unsafeFreeze'));
    $__res = ($__global_Control_Monad_ST_Internal_run)(($__global_Data_Array_bind)($__global_Data_Array_ST_new, (function() use ($__global_Data_Array_bind, $__global_Data_Array_ST_Iterator_iterator, $__global_Data_Array_index, $xs, $__global_Data_Array_discard, $__global_Data_Array_ST_Iterator_iterate, $__global_Data_Array_void, $__global_Data_Array_ST_new, $__global_Data_Array_ST_push, $__global_Data_Array_ST_Iterator_pushWhile, $op, $__global_Data_Array_ST_unsafeFreeze) {
  $__fn = function($result) use ($__global_Data_Array_bind, $__global_Data_Array_ST_Iterator_iterator, $__global_Data_Array_index, $xs, $__global_Data_Array_discard, $__global_Data_Array_ST_Iterator_iterate, $__global_Data_Array_void, $__global_Data_Array_ST_new, $__global_Data_Array_ST_push, $__global_Data_Array_ST_Iterator_pushWhile, $op, $__global_Data_Array_ST_unsafeFreeze, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_bind)(($__global_Data_Array_ST_Iterator_iterator)((function() use ($__global_Data_Array_index, $xs) {
  $__fn = function($v) use ($__global_Data_Array_index, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_index)($xs, $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($__global_Data_Array_discard, $__global_Data_Array_ST_Iterator_iterate, $__global_Data_Array_void, $__global_Data_Array_bind, $__global_Data_Array_ST_new, $__global_Data_Array_ST_push, $__global_Data_Array_ST_Iterator_pushWhile, $op, $__global_Data_Array_ST_unsafeFreeze, $result) {
  $__fn = function($iter) use ($__global_Data_Array_discard, $__global_Data_Array_ST_Iterator_iterate, $__global_Data_Array_void, $__global_Data_Array_bind, $__global_Data_Array_ST_new, $__global_Data_Array_ST_push, $__global_Data_Array_ST_Iterator_pushWhile, $op, $__global_Data_Array_ST_unsafeFreeze, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_discard)(($__global_Data_Array_ST_Iterator_iterate)($iter, (function() use ($__global_Data_Array_void, $__global_Data_Array_bind, $__global_Data_Array_ST_new, $__global_Data_Array_ST_push, $__global_Data_Array_discard, $__global_Data_Array_ST_Iterator_pushWhile, $op, $iter, $__global_Data_Array_ST_unsafeFreeze, $result) {
  $__fn = function($x) use ($__global_Data_Array_void, $__global_Data_Array_bind, $__global_Data_Array_ST_new, $__global_Data_Array_ST_push, $__global_Data_Array_discard, $__global_Data_Array_ST_Iterator_pushWhile, $op, $iter, $__global_Data_Array_ST_unsafeFreeze, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_void)(($__global_Data_Array_bind)($__global_Data_Array_ST_new, (function() use ($__global_Data_Array_bind, $__global_Data_Array_ST_push, $x, $__global_Data_Array_discard, $__global_Data_Array_ST_Iterator_pushWhile, $op, $iter, $__global_Data_Array_ST_unsafeFreeze, $result) {
  $__fn = function($sub1) use ($__global_Data_Array_bind, $__global_Data_Array_ST_push, $x, $__global_Data_Array_discard, $__global_Data_Array_ST_Iterator_pushWhile, $op, $iter, $__global_Data_Array_ST_unsafeFreeze, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_bind)(($__global_Data_Array_ST_push)($x, $sub1), (function() use ($__global_Data_Array_discard, $__global_Data_Array_ST_Iterator_pushWhile, $op, $x, $iter, $sub1, $__global_Data_Array_bind, $__global_Data_Array_ST_unsafeFreeze, $__global_Data_Array_ST_push, $result) {
  $__fn = function($__dollar____unused) use ($__global_Data_Array_discard, $__global_Data_Array_ST_Iterator_pushWhile, $op, $x, $iter, $sub1, $__global_Data_Array_bind, $__global_Data_Array_ST_unsafeFreeze, $__global_Data_Array_ST_push, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_discard)(($__global_Data_Array_ST_Iterator_pushWhile)(($op)($x), $iter, $sub1), (function() use ($__global_Data_Array_bind, $__global_Data_Array_ST_unsafeFreeze, $sub1, $__global_Data_Array_ST_push, $result) {
  $__fn = function($__dollar____unused) use ($__global_Data_Array_bind, $__global_Data_Array_ST_unsafeFreeze, $sub1, $__global_Data_Array_ST_push, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_bind)(($__global_Data_Array_ST_unsafeFreeze)($sub1), (function() use ($__global_Data_Array_ST_push, $result) {
  $__fn = function($grp) use ($__global_Data_Array_ST_push, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_ST_push)($grp, $result);
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
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($__global_Data_Array_ST_unsafeFreeze, $result) {
  $__fn = function($__dollar____unused) use ($__global_Data_Array_ST_unsafeFreeze, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_ST_unsafeFreeze)($result);
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
})()));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_groupBy'] = __NAMESPACE__ . '\\Data_Array_groupBy';

// Data_Array_groupAllBy
function Data_Array_groupAllBy($cmp) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_groupAllBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_compose = ($GLOBALS['Data_Array_compose'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_compose'));
$__global_Data_Array_groupBy = ($GLOBALS['Data_Array_groupBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_groupBy'));
$__global_Data_Array_eq1 = ($GLOBALS['Data_Array_eq1'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_eq1'));
$__global_Data_Array_sortBy = ($GLOBALS['Data_Array_sortBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sortBy'));
    $__res = ($__global_Data_Array_compose)(($__global_Data_Array_groupBy)((function() use ($__global_Data_Array_eq1, $cmp) {
  $__fn = function($x, $y = null) use ($__global_Data_Array_eq1, $cmp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Array_eq1)(($cmp)($x, $y), ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ")));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), ($__global_Data_Array_sortBy)($cmp));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_groupAllBy'] = __NAMESPACE__ . '\\Data_Array_groupAllBy';

// Data_Array_groupAll
function Data_Array_groupAll($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_groupAll';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_groupAllBy = ($GLOBALS['Data_Array_groupAllBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_groupAllBy'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Array_groupAllBy)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_groupAll'] = __NAMESPACE__ . '\\Data_Array_groupAll';

// Data_Array_group
function Data_Array_group($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_group';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_groupBy = ($GLOBALS['Data_Array_groupBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_groupBy'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_0;
    $__res = (function() use ($__global_Data_Array_groupBy, $eq2) {
  $__fn = function($xs) use ($__global_Data_Array_groupBy, $eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_groupBy)($eq2, $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_group'] = __NAMESPACE__ . '\\Data_Array_group';

// Data_Array_fromFoldable
function Data_Array_fromFoldable($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_fromFoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$__global_Data_Array_fromFoldableImpl = ($GLOBALS['Data_Array_fromFoldableImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_fromFoldableImpl'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Array_fromFoldableImpl, $__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_fromFoldable'] = __NAMESPACE__ . '\\Data_Array_fromFoldable';



// Data_Array_transpose
function Data_Array_transpose($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_transpose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__global_Data_Array_foldl = ($GLOBALS['Data_Array_foldl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_foldl'));
$__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
$__global_Data_Array_snoc = ($GLOBALS['Data_Array_snoc'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_snoc'));
$__global_Data_Array_index = ($GLOBALS['Data_Array_index'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_index'));
$__global_Data_Array_add = ($GLOBALS['Data_Array_add'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_add'));
$buildNext = (function() use ($__global_Data_Function_flip, $__global_Data_Array_foldl, $__global_Data_Maybe_maybe, $__global_Data_Array_snoc, $__global_Data_Array_index, $xs) {
  $__fn = function($idx) use ($__global_Data_Function_flip, $__global_Data_Array_foldl, $__global_Data_Maybe_maybe, $__global_Data_Array_snoc, $__global_Data_Array_index, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Function_flip)($__global_Data_Array_foldl, ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), (function() use ($__global_Data_Maybe_maybe, $__global_Data_Function_flip, $__global_Data_Array_snoc, $__global_Data_Array_index, $idx) {
  $__fn = function($acc, $nextArr = null) use ($__global_Data_Maybe_maybe, $__global_Data_Function_flip, $__global_Data_Array_snoc, $__global_Data_Array_index, $idx, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($nextArr) use ($acc, &$__fn) { return $__fn($acc, $nextArr); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Maybe_maybe)($acc, (function() use ($__global_Data_Maybe_maybe, $__global_Data_Function_flip, $__global_Data_Array_snoc, $acc) {
  $__fn = function($el) use ($__global_Data_Maybe_maybe, $__global_Data_Function_flip, $__global_Data_Array_snoc, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
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
})())(($__global_Data_Maybe_maybe)([$el], ($__global_Data_Function_flip)($__global_Data_Array_snoc, $el), $acc));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_Array_index)($nextArr, $idx));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$go = (function() use ($buildNext, &$go, $__global_Data_Array_add, $__global_Data_Array_snoc) {
  $__fn = function($idx, $allArrays = null) use ($buildNext, &$go, $__global_Data_Array_add, $__global_Data_Array_snoc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($allArrays) use ($idx, &$__fn) { return $__fn($idx, $allArrays); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($buildNext)($idx);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Nothing":
return $allArrays;
break;
case "Just":
$next = ($__case_0)->v0;
$__tco_tmp_0 = ($__global_Data_Array_add)($idx, 1);
$__tco_tmp_1 = ($__global_Data_Array_snoc)($allArrays, $next);
$idx = $__tco_tmp_0;
$allArrays = $__tco_tmp_1;
continue 2;
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
    $__res = ($go)(0, []);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_transpose'] = __NAMESPACE__ . '\\Data_Array_transpose';

// Data_Array_foldRecM
function Data_Array_foldRecM($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_foldRecM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$Monad0 = (($dictMonadRec)->Monad0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind1 = $__case_res_1;
$__case_0 = $dictMonadRec;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->tailRecM;
} else {
throw new \Exception("Pattern match failure");
};
$tailRecM1 = $__case_res_2;
$tailRecM2 = (function() use ($tailRecM1) {
  $__fn = function($f, $a = null, $b = null) use ($tailRecM1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
    if ($__num === 1) return function($a, $b = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $b);
      if ($__num2 === 1) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($tailRecM1)((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)(($o)->a, ($o)->b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b]);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($tailRecM2) {
  $__fn = function($f, $b = null, $array = null) use ($tailRecM2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($array) use ($f, $b, &$__fn) { return $__fn($f, $b, $array); };
    if ($__num === 1) return function($b, $array = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b, $array);
      if ($__num2 === 1) return function($array) use ($f, $b, &$__fn) { return $__fn($f, $b, $array); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$go = (function() {
  $__body = function($res, $i) {
    $__case_0 = $res;
    $__case_1 = $i;
    if (true) {
$res1 = $__case_0;
$i1 = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($res, $i = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($i) use ($res, &$__fn) { return $__fn($res, $i); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($res, $i);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($tailRecM2)($go, $b, 0);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_foldRecM'] = __NAMESPACE__ . '\\Data_Array_foldRecM';

// Data_Array_foldMap
function Data_Array_foldMap($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_foldMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_foldMap1 = ($GLOBALS['Data_Array_foldMap1'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_foldMap1'));
    $__res = ($__global_Data_Array_foldMap1)($dictMonoid);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_foldMap'] = __NAMESPACE__ . '\\Data_Array_foldMap';

// Data_Array_foldM
function Data_Array_foldM($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_foldM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
$__global_Data_Array_unconsImpl = ($GLOBALS['Data_Array_unconsImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_unconsImpl'));
while (true) {
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind1 = $__case_res_1;
return (function() use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Array_unconsImpl, $pure1, $bind1, $dict, $dictMonad) {
  $__fn = function($f, $b = null) use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Array_unconsImpl, $pure1, $bind1, $dict, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_foldM = ($GLOBALS['Data_Array_foldM'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_foldM'));
    $__res = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Array_unconsImpl, (function() use ($pure1, $b) {
  $__fn = function($v) use ($pure1, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure1)($b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (function() use ($bind1, $f, $b, $dict, $__global_Data_Function_Uncurried_runFn3, $__global_Data_Array_unconsImpl, $__global_Data_Array_foldM, $dictMonad) {
  $__fn = function($a, $as = null) use ($bind1, $f, $b, $dict, $__global_Data_Function_Uncurried_runFn3, $__global_Data_Array_unconsImpl, $__global_Data_Array_foldM, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($as) use ($a, &$__fn) { return $__fn($a, $as); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind1)(($f)($b, $a), (function() use ($dict, $__global_Data_Function_Uncurried_runFn3, $__global_Data_Array_unconsImpl, $__global_Data_Array_foldM, $dictMonad, $f, $as) {
  $__fn = function($b__prime__) use ($dict, $__global_Data_Function_Uncurried_runFn3, $__global_Data_Array_unconsImpl, $__global_Data_Array_foldM, $dictMonad, $f, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind1 = $__case_res_3;
    $__res = ((function() use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Array_unconsImpl, $pure1, $bind1, $__global_Data_Array_foldM, $dictMonad) {
  $__fn = function($f, $b = null) use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Array_unconsImpl, $pure1, $bind1, $__global_Data_Array_foldM, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Array_unconsImpl, (function() use ($pure1, $b) {
  $__fn = function($v) use ($pure1, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure1)($b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (function() use ($bind1, $f, $b, $__global_Data_Array_foldM, $dictMonad) {
  $__fn = function($a, $as = null) use ($bind1, $f, $b, $__global_Data_Array_foldM, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($as) use ($a, &$__fn) { return $__fn($a, $as); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind1)(($f)($b, $a), (function() use ($__global_Data_Array_foldM, $dictMonad, $f, $as) {
  $__fn = function($b__prime__) use ($__global_Data_Array_foldM, $dictMonad, $f, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_foldM)($dictMonad, $f, $b__prime__, $as);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($f, $b__prime__, $as);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_foldM'] = __NAMESPACE__ . '\\Data_Array_foldM';

// Data_Array_fold
function Data_Array_fold($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_fold';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_fold1 = ($GLOBALS['Data_Array_fold1'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_fold1'));
    $__res = ($__global_Data_Array_fold1)($dictMonoid);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_fold'] = __NAMESPACE__ . '\\Data_Array_fold';



// Data_Array_insertBy
function Data_Array_insertBy($cmp, $x = null, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_insertBy';
  if ($__num < 3) {
    if ($__num === 2) return function($ys) use ($cmp, $x, $__fn) { return $__fn($cmp, $x, $ys); };
    if ($__num === 1) return function($x, $ys = null) use ($cmp, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($cmp, $x, $ys);
      if ($__num2 === 1) return function($ys) use ($cmp, $x, $__fn) { return $__fn($cmp, $x, $ys); };
      return phpurs_curry_fallback($__fn, [$cmp], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
$__global_Data_Array_add = ($GLOBALS['Data_Array_add'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_add'));
$__global_Data_Array_findLastIndex = ($GLOBALS['Data_Array_findLastIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findLastIndex'));
$__global_Data_Array_eq1 = ($GLOBALS['Data_Array_eq1'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_eq1'));
$__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
$__global_Data_Array_fromJust = ($GLOBALS['Data_Array_fromJust'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_fromJust'));
$__global_Data_Array_insertAt = ($GLOBALS['Data_Array_insertAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_insertAt'));
$i = ($__global_Data_Maybe_maybe)(0, (function() use ($__global_Data_Array_add) {
  $__fn = function($v) use ($__global_Data_Array_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_add)($v, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_Array_findLastIndex)((function() use ($__global_Data_Array_eq1, $cmp, $x) {
  $__fn = function($y) use ($__global_Data_Array_eq1, $cmp, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_eq1)(($cmp)($x, $y), ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $ys));
    $__res = ($__global_Partial_Unsafe__unsafePartial)((function() use ($__global_Data_Array_fromJust, $__global_Data_Array_insertAt, $i, $x, $ys) {
  $__fn = function($__dollar____unused) use ($__global_Data_Array_fromJust, $__global_Data_Array_insertAt, $i, $x, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_fromJust)(($__global_Data_Array_insertAt)($i, $x, $ys));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Array_insertBy'] = __NAMESPACE__ . '\\Data_Array_insertBy';

// Data_Array_insert
function Data_Array_insert($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_insert';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_insertBy = ($GLOBALS['Data_Array_insertBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_insertBy'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Array_insertBy)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_insert'] = __NAMESPACE__ . '\\Data_Array_insert';


// Data_Array_find
function Data_Array_find($f, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_find';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($f, $__fn) { return $__fn($f, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_map = ($GLOBALS['Data_Array_map'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_map'));
$__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
$__global_Data_Array_unsafeIndex1 = ($GLOBALS['Data_Array_unsafeIndex1'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_unsafeIndex1'));
$__global_Data_Array_findIndex = ($GLOBALS['Data_Array_findIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findIndex'));
    $__res = ($__global_Data_Array_map)(($__global_Partial_Unsafe__unsafePartial)((function() use ($__global_Data_Array_unsafeIndex1, $xs) {
  $__fn = function($__dollar____unused) use ($__global_Data_Array_unsafeIndex1, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_unsafeIndex1)($xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($__global_Data_Array_findIndex)($f, $xs));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_find'] = __NAMESPACE__ . '\\Data_Array_find';


// Data_Array_intersectBy
function Data_Array_intersectBy($eq2, $xs = null, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_intersectBy';
  if ($__num < 3) {
    if ($__num === 2) return function($ys) use ($eq2, $xs, $__fn) { return $__fn($eq2, $xs, $ys); };
    if ($__num === 1) return function($xs, $ys = null) use ($eq2, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($eq2, $xs, $ys);
      if ($__num2 === 1) return function($ys) use ($eq2, $xs, $__fn) { return $__fn($eq2, $xs, $ys); };
      return phpurs_curry_fallback($__fn, [$eq2], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_Array_filter = ($GLOBALS['Data_Array_filter'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_filter'));
$__global_Data_Maybe_isJust = ($GLOBALS['Data_Maybe_isJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isJust'));
$__global_Data_Array_findIndex = ($GLOBALS['Data_Array_findIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findIndex'));
    $__res = ($__global_Data_Array_filter)((function() use ($__global_Data_Maybe_isJust, $__global_Data_Array_findIndex, $eq2, $ys) {
  $__fn = function($x) use ($__global_Data_Maybe_isJust, $__global_Data_Array_findIndex, $eq2, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Maybe_isJust)(($__global_Data_Array_findIndex)(($eq2)($x), $ys));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Array_intersectBy'] = __NAMESPACE__ . '\\Data_Array_intersectBy';

// Data_Array_intersect
function Data_Array_intersect($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_intersect';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_intersectBy = ($GLOBALS['Data_Array_intersectBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_intersectBy'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Array_intersectBy)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_intersect'] = __NAMESPACE__ . '\\Data_Array_intersect';

// Data_Array_elemLastIndex
function Data_Array_elemLastIndex($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_elemLastIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_findLastIndex = ($GLOBALS['Data_Array_findLastIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findLastIndex'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_0;
    $__res = (function() use ($__global_Data_Array_findLastIndex, $eq2) {
  $__fn = function($x) use ($__global_Data_Array_findLastIndex, $eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_findLastIndex)((function() use ($eq2, $x) {
  $__fn = function($v) use ($eq2, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($eq2)($v, $x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_elemLastIndex'] = __NAMESPACE__ . '\\Data_Array_elemLastIndex';

// Data_Array_elemIndex
function Data_Array_elemIndex($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_elemIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_findIndex = ($GLOBALS['Data_Array_findIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findIndex'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_0;
    $__res = (function() use ($__global_Data_Array_findIndex, $eq2) {
  $__fn = function($x) use ($__global_Data_Array_findIndex, $eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_findIndex)((function() use ($eq2, $x) {
  $__fn = function($v) use ($eq2, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($eq2)($v, $x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_elemIndex'] = __NAMESPACE__ . '\\Data_Array_elemIndex';

// Data_Array_notElem
function Data_Array_notElem($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_notElem';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_findIndex = ($GLOBALS['Data_Array_findIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findIndex'));
$__global_Data_Maybe_isNothing = ($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_0;
$elemIndex1 = (function() use ($__global_Data_Array_findIndex, $eq2) {
  $__fn = function($x) use ($__global_Data_Array_findIndex, $eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_findIndex)((function() use ($eq2, $x) {
  $__fn = function($v) use ($eq2, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($eq2)($v, $x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($__global_Data_Maybe_isNothing, $elemIndex1) {
  $__fn = function($a, $arr = null) use ($__global_Data_Maybe_isNothing, $elemIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($arr) use ($a, &$__fn) { return $__fn($a, $arr); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Maybe_isNothing)(($elemIndex1)($a, $arr));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_notElem'] = __NAMESPACE__ . '\\Data_Array_notElem';

// Data_Array_elem
function Data_Array_elem($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_elem';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_findIndex = ($GLOBALS['Data_Array_findIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findIndex'));
$__global_Data_Maybe_isJust = ($GLOBALS['Data_Maybe_isJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isJust'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_0;
$elemIndex1 = (function() use ($__global_Data_Array_findIndex, $eq2) {
  $__fn = function($x) use ($__global_Data_Array_findIndex, $eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_findIndex)((function() use ($eq2, $x) {
  $__fn = function($v) use ($eq2, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($eq2)($v, $x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($__global_Data_Maybe_isJust, $elemIndex1) {
  $__fn = function($a, $arr = null) use ($__global_Data_Maybe_isJust, $elemIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($arr) use ($a, &$__fn) { return $__fn($a, $arr); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Maybe_isJust)(($elemIndex1)($a, $arr));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_elem'] = __NAMESPACE__ . '\\Data_Array_elem';

// Data_Array_dropWhile
function Data_Array_dropWhile($p, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_dropWhile';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($p, $__fn) { return $__fn($p, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_span = ($GLOBALS['Data_Array_span'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_span'));
    $__res = (($__global_Data_Array_span)($p, $xs))->rest;
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_dropWhile'] = __NAMESPACE__ . '\\Data_Array_dropWhile';

// Data_Array_dropEnd
function Data_Array_dropEnd($n, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_dropEnd';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($n, $__fn) { return $__fn($n, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_take = ($GLOBALS['Data_Array_take'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_take'));
$__global_Data_Array_sub = ($GLOBALS['Data_Array_sub'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sub'));
$__global_Data_Array_length = ($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length'));
    $__res = ($__global_Data_Array_take)(($__global_Data_Array_sub)(($__global_Data_Array_length)($xs), $n), $xs);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_dropEnd'] = __NAMESPACE__ . '\\Data_Array_dropEnd';

// Data_Array_drop
function Data_Array_drop($n, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_drop';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($n, $__fn) { return $__fn($n, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($n, $xs) {
    $__global_Data_Array_lessThan = ($GLOBALS['Data_Array_lessThan'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_lessThan'));
    $__global_Data_Array_slice = ($GLOBALS['Data_Array_slice'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_slice'));
    $__global_Data_Array_length = ($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length'));
    $__case_0 = ($__global_Data_Array_lessThan)($n, 1);
    switch ($__case_0) {
case true:
return $xs;
break;
default:
return ($__global_Data_Array_slice)($n, ($__global_Data_Array_length)($xs), $xs);
break;
};
  };
    $__res = $__body($n, $xs);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_drop'] = __NAMESPACE__ . '\\Data_Array_drop';

// Data_Array_takeEnd
function Data_Array_takeEnd($n, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_takeEnd';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($n, $__fn) { return $__fn($n, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_drop = ($GLOBALS['Data_Array_drop'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_drop'));
$__global_Data_Array_sub = ($GLOBALS['Data_Array_sub'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sub'));
$__global_Data_Array_length = ($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length'));
    $__res = ($__global_Data_Array_drop)(($__global_Data_Array_sub)(($__global_Data_Array_length)($xs), $n), $xs);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_takeEnd'] = __NAMESPACE__ . '\\Data_Array_takeEnd';


// Data_Array_deleteBy
function Data_Array_deleteBy($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_deleteBy';
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($v, $v1, $v2) {
    $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
    $__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
    $__global_Data_Array_fromJust = ($GLOBALS['Data_Array_fromJust'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_fromJust'));
    $__global_Data_Array_deleteAt = ($GLOBALS['Data_Array_deleteAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_deleteAt'));
    $__global_Data_Array_findIndex = ($GLOBALS['Data_Array_findIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findIndex'));
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if (($__case_2 === /* ArrayLiteral */)) {
return [];
} else {
if (true) {
$eq2 = $__case_0;
$x = $__case_1;
$ys = $__case_2;
return ($__global_Data_Maybe_maybe)($ys, (function() use ($__global_Partial_Unsafe__unsafePartial, $__global_Data_Array_fromJust, $__global_Data_Array_deleteAt, $ys) {
  $__fn = function($i) use ($__global_Partial_Unsafe__unsafePartial, $__global_Data_Array_fromJust, $__global_Data_Array_deleteAt, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Partial_Unsafe__unsafePartial)((function() use ($__global_Data_Array_fromJust, $__global_Data_Array_deleteAt, $i, $ys) {
  $__fn = function($__dollar____unused) use ($__global_Data_Array_fromJust, $__global_Data_Array_deleteAt, $i, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_fromJust)(($__global_Data_Array_deleteAt)($i, $ys));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_Array_findIndex)(($eq2)($x), $ys));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
    $__res = $__body($v, $v1, $v2);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Array_deleteBy'] = __NAMESPACE__ . '\\Data_Array_deleteBy';

// Data_Array_delete
function Data_Array_delete($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_delete';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_deleteBy = ($GLOBALS['Data_Array_deleteBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_deleteBy'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Array_deleteBy)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_delete'] = __NAMESPACE__ . '\\Data_Array_delete';

// Data_Array_difference
function Data_Array_difference($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_difference';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_foldr = ($GLOBALS['Data_Array_foldr'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_foldr'));
$__global_Data_Array_deleteBy = ($GLOBALS['Data_Array_deleteBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_deleteBy'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Array_foldr)(($__global_Data_Array_deleteBy)($__case_res_0));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_difference'] = __NAMESPACE__ . '\\Data_Array_difference';

// Data_Array_cons
function Data_Array_cons($x, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_cons';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($x, $__fn) { return $__fn($x, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_append = ($GLOBALS['Data_Array_append'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_append'));
    $__res = ($__global_Data_Array_append)([$x], $xs);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_cons'] = __NAMESPACE__ . '\\Data_Array_cons';

// Data_Array_some
function Data_Array_some($dictAlternative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_some';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_cons = ($GLOBALS['Data_Array_cons'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_cons'));
$__global_Data_Array_many = ($GLOBALS['Data_Array_many'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_many'));
while (true) {
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
$map3 = $__case_res_1;
return (function() use ($apply1, $map3, $__global_Data_Array_cons, $dict, $__global_Data_Array_many, $dictAlternative) {
  $__fn = function($dictLazy) use ($apply1, $map3, $__global_Data_Array_cons, $dict, $__global_Data_Array_many, $dictAlternative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictLazy;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->defer;
} else {
throw new \Exception("Pattern match failure");
};
$defer = $__case_res_2;
    $__res = (function() use ($apply1, $map3, $__global_Data_Array_cons, $defer, $dict, $__global_Data_Array_many, $dictAlternative, $dictLazy) {
  $__fn = function($v) use ($apply1, $map3, $__global_Data_Array_cons, $defer, $dict, $__global_Data_Array_many, $dictAlternative, $dictLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($apply1)(($map3)($__global_Data_Array_cons, $v), ($defer)((function() use ($dict, $__global_Data_Array_cons, $__global_Data_Array_many, $dictAlternative, $dictLazy, $v) {
  $__fn = function($v1) use ($dict, $__global_Data_Array_cons, $__global_Data_Array_many, $dictAlternative, $dictLazy, $v, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->alt;
} else {
throw new \Exception("Pattern match failure");
};
$alt = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_4;
    $__res = ((function() use ($alt, $dict, $__global_Data_Array_cons, $__global_Data_Array_many, $dictAlternative, $pure1) {
  $__fn = function($dictLazy, $v = null) use ($alt, $dict, $__global_Data_Array_cons, $__global_Data_Array_many, $dictAlternative, $pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($dictLazy, &$__fn) { return $__fn($dictLazy, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_5;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map3 = $__case_res_6;
    $__res = ($alt)(((function() use ($apply1, $map3, $__global_Data_Array_cons, $__global_Data_Array_many, $dictAlternative) {
  $__fn = function($dictLazy) use ($apply1, $map3, $__global_Data_Array_cons, $__global_Data_Array_many, $dictAlternative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictLazy;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->defer;
} else {
throw new \Exception("Pattern match failure");
};
$defer = $__case_res_7;
    $__res = (function() use ($apply1, $map3, $__global_Data_Array_cons, $defer, $__global_Data_Array_many, $dictAlternative, $dictLazy) {
  $__fn = function($v) use ($apply1, $map3, $__global_Data_Array_cons, $defer, $__global_Data_Array_many, $dictAlternative, $dictLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($apply1)(($map3)($__global_Data_Array_cons, $v), ($defer)((function() use ($__global_Data_Array_many, $dictAlternative, $dictLazy, $v) {
  $__fn = function($v1) use ($__global_Data_Array_many, $dictAlternative, $dictLazy, $v, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_many)($dictAlternative, $dictLazy, $v);
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
})())($dictLazy, $v), ($pure1)([]));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($dictLazy, $v);
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
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_some'] = __NAMESPACE__ . '\\Data_Array_some';

// Data_Array_many
function Data_Array_many($dictAlternative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_many';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_cons = ($GLOBALS['Data_Array_cons'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_cons'));
$__global_Data_Array_some = ($GLOBALS['Data_Array_some'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_some'));
while (true) {
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->alt;
} else {
throw new \Exception("Pattern match failure");
};
$alt = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_1;
return (function() use ($alt, $dict, $__global_Data_Array_cons, $__global_Data_Array_some, $dictAlternative, $pure1) {
  $__fn = function($dictLazy, $v = null) use ($alt, $dict, $__global_Data_Array_cons, $__global_Data_Array_some, $dictAlternative, $pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($dictLazy, &$__fn) { return $__fn($dictLazy, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map3 = $__case_res_3;
    $__res = ($alt)(((function() use ($apply1, $map3, $__global_Data_Array_cons, $dict, $__global_Data_Array_some, $dictAlternative) {
  $__fn = function($dictLazy) use ($apply1, $map3, $__global_Data_Array_cons, $dict, $__global_Data_Array_some, $dictAlternative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictLazy;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->defer;
} else {
throw new \Exception("Pattern match failure");
};
$defer = $__case_res_4;
    $__res = (function() use ($apply1, $map3, $__global_Data_Array_cons, $defer, $dict, $__global_Data_Array_some, $dictAlternative, $dictLazy) {
  $__fn = function($v) use ($apply1, $map3, $__global_Data_Array_cons, $defer, $dict, $__global_Data_Array_some, $dictAlternative, $dictLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($apply1)(($map3)($__global_Data_Array_cons, $v), ($defer)((function() use ($dict, $__global_Data_Array_some, $dictAlternative, $dictLazy, $v) {
  $__fn = function($v1) use ($dict, $__global_Data_Array_some, $dictAlternative, $dictLazy, $v, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->alt;
} else {
throw new \Exception("Pattern match failure");
};
$alt = $__case_res_5;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_6;
    $__res = ((function() use ($alt, $__global_Data_Array_some, $dictAlternative, $pure1) {
  $__fn = function($dictLazy, $v = null) use ($alt, $__global_Data_Array_some, $dictAlternative, $pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($dictLazy, &$__fn) { return $__fn($dictLazy, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($alt)(($__global_Data_Array_some)($dictAlternative, $dictLazy, $v), ($pure1)([]));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($dictLazy, $v);
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
})())($dictLazy, $v), ($pure1)([]));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_many'] = __NAMESPACE__ . '\\Data_Array_many';


// Data_Array_mapMaybe
function Data_Array_mapMaybe($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_mapMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_concatMap = ($GLOBALS['Data_Array_concatMap'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_concatMap'));
$__global_Data_Array_compose = ($GLOBALS['Data_Array_compose'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_compose'));
$__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
$__global_Data_Array_singleton = ($GLOBALS['Data_Array_singleton'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_singleton'));
    $__res = ($__global_Data_Array_concatMap)(($__global_Data_Array_compose)(($__global_Data_Maybe_maybe)([], $__global_Data_Array_singleton), $f));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_mapMaybe'] = __NAMESPACE__ . '\\Data_Array_mapMaybe';

// Data_Array_filterA
function Data_Array_filterA($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_filterA';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_traverse = ($GLOBALS['Data_Array_traverse'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_traverse'));
$__global_Data_Array_composeFlipped = ($GLOBALS['Data_Array_composeFlipped'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_composeFlipped'));
$__global_Data_Array_mapMaybe = ($GLOBALS['Data_Array_mapMaybe'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_mapMaybe'));
$traverse1 = ($__global_Data_Array_traverse)($dictApplicative);
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map3 = $__case_res_0;
    $__res = (function() use ($__global_Data_Array_composeFlipped, $traverse1, $map3, $__global_Data_Array_mapMaybe) {
  $__fn = function($p) use ($__global_Data_Array_composeFlipped, $traverse1, $map3, $__global_Data_Array_mapMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_composeFlipped)(($traverse1)((function() use ($map3, $p) {
  $__fn = function($x) use ($map3, $p, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map3)(((function() {
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
})())($x), ($p)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($map3)(($__global_Data_Array_mapMaybe)((function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$x = ($__case_0)->v0;
$b = ($__case_0)->v1;
$__case_0 = $b;
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
})())($x);
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
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_filterA'] = __NAMESPACE__ . '\\Data_Array_filterA';



// Data_Array_nubByEq
function Data_Array_nubByEq($eq2, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_nubByEq';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($eq2, $__fn) { return $__fn($eq2, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Control_Monad_ST_Internal_run = ($GLOBALS['Control_Monad_ST_Internal_run'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_run'));
$__global_Data_Array_bind = ($GLOBALS['Data_Array_bind'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_bind'));
$__global_Data_Array_ST_new = ($GLOBALS['Data_Array_ST_new'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_new'));
$__global_Data_Array_discard = ($GLOBALS['Data_Array_discard'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_discard'));
$__global_Control_Monad_ST_Internal_foreach = ($GLOBALS['Control_Monad_ST_Internal_foreach'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_foreach'));
$__global_Data_Array_map2 = ($GLOBALS['Data_Array_map2'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_map2'));
$__global_Data_Array_compose = ($GLOBALS['Data_Array_compose'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_compose'));
$__global_Data_Array_not = ($GLOBALS['Data_Array_not'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_not'));
$__global_Data_Array_any = ($GLOBALS['Data_Array_any'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_any'));
$__global_Data_Array_ST_unsafeFreeze = ($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_unsafeFreeze'));
$__global_Data_Array_when = ($GLOBALS['Data_Array_when'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_when'));
$__global_Data_Array_void = ($GLOBALS['Data_Array_void'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_void'));
$__global_Data_Array_ST_push = ($GLOBALS['Data_Array_ST_push'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_push'));
    $__res = ($__global_Control_Monad_ST_Internal_run)(($__global_Data_Array_bind)($__global_Data_Array_ST_new, (function() use ($__global_Data_Array_discard, $__global_Control_Monad_ST_Internal_foreach, $xs, $__global_Data_Array_bind, $__global_Data_Array_map2, $__global_Data_Array_compose, $__global_Data_Array_not, $__global_Data_Array_any, $eq2, $__global_Data_Array_ST_unsafeFreeze, $__global_Data_Array_when, $__global_Data_Array_void, $__global_Data_Array_ST_push) {
  $__fn = function($arr) use ($__global_Data_Array_discard, $__global_Control_Monad_ST_Internal_foreach, $xs, $__global_Data_Array_bind, $__global_Data_Array_map2, $__global_Data_Array_compose, $__global_Data_Array_not, $__global_Data_Array_any, $eq2, $__global_Data_Array_ST_unsafeFreeze, $__global_Data_Array_when, $__global_Data_Array_void, $__global_Data_Array_ST_push, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_discard)(($__global_Control_Monad_ST_Internal_foreach)($xs, (function() use ($__global_Data_Array_bind, $__global_Data_Array_map2, $__global_Data_Array_compose, $__global_Data_Array_not, $__global_Data_Array_any, $eq2, $__global_Data_Array_ST_unsafeFreeze, $arr, $__global_Data_Array_when, $__global_Data_Array_void, $__global_Data_Array_ST_push) {
  $__fn = function($x) use ($__global_Data_Array_bind, $__global_Data_Array_map2, $__global_Data_Array_compose, $__global_Data_Array_not, $__global_Data_Array_any, $eq2, $__global_Data_Array_ST_unsafeFreeze, $arr, $__global_Data_Array_when, $__global_Data_Array_void, $__global_Data_Array_ST_push, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_bind)(($__global_Data_Array_map2)(($__global_Data_Array_compose)($__global_Data_Array_not, ($__global_Data_Array_any)((function() use ($eq2, $x) {
  $__fn = function($v) use ($eq2, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($eq2)($v, $x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($__global_Data_Array_ST_unsafeFreeze)($arr)), (function() use ($__global_Data_Array_when, $__global_Data_Array_void, $__global_Data_Array_ST_push, $x, $arr) {
  $__fn = function($e) use ($__global_Data_Array_when, $__global_Data_Array_void, $__global_Data_Array_ST_push, $x, $arr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_when)($e, ($__global_Data_Array_void)(($__global_Data_Array_ST_push)($x, $arr)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($__global_Data_Array_ST_unsafeFreeze, $arr) {
  $__fn = function($__dollar____unused) use ($__global_Data_Array_ST_unsafeFreeze, $arr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_ST_unsafeFreeze)($arr);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_nubByEq'] = __NAMESPACE__ . '\\Data_Array_nubByEq';

// Data_Array_nubEq
function Data_Array_nubEq($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_nubEq';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_nubByEq = ($GLOBALS['Data_Array_nubByEq'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_nubByEq'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Array_nubByEq)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_nubEq'] = __NAMESPACE__ . '\\Data_Array_nubEq';

// Data_Array_unionBy
function Data_Array_unionBy($eq2, $xs = null, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_unionBy';
  if ($__num < 3) {
    if ($__num === 2) return function($ys) use ($eq2, $xs, $__fn) { return $__fn($eq2, $xs, $ys); };
    if ($__num === 1) return function($xs, $ys = null) use ($eq2, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($eq2, $xs, $ys);
      if ($__num2 === 1) return function($ys) use ($eq2, $xs, $__fn) { return $__fn($eq2, $xs, $ys); };
      return phpurs_curry_fallback($__fn, [$eq2], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_Array_append = ($GLOBALS['Data_Array_append'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_append'));
$__global_Data_Array_foldl = ($GLOBALS['Data_Array_foldl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_foldl'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__global_Data_Array_deleteBy = ($GLOBALS['Data_Array_deleteBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_deleteBy'));
$__global_Data_Array_nubByEq = ($GLOBALS['Data_Array_nubByEq'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_nubByEq'));
    $__res = ($__global_Data_Array_append)($xs, ($__global_Data_Array_foldl)(($__global_Data_Function_flip)(($__global_Data_Array_deleteBy)($eq2)), ($__global_Data_Array_nubByEq)($eq2, $ys), $xs));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Array_unionBy'] = __NAMESPACE__ . '\\Data_Array_unionBy';

// Data_Array_union
function Data_Array_union($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_union';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_unionBy = ($GLOBALS['Data_Array_unionBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_unionBy'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Array_unionBy)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_union'] = __NAMESPACE__ . '\\Data_Array_union';

// Data_Array_alterAt
function Data_Array_alterAt($i, $f = null, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_alterAt';
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($i, $f, $__fn) { return $__fn($i, $f, $xs); };
    if ($__num === 1) return function($f, $xs = null) use ($i, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $f, $xs);
      if ($__num2 === 1) return function($xs) use ($i, $f, $__fn) { return $__fn($i, $f, $xs); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_Array_deleteAt = ($GLOBALS['Data_Array_deleteAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_deleteAt'));
$__global_Data_Array_updateAt = ($GLOBALS['Data_Array_updateAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_updateAt'));
$__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
$__global_Data_Array_index = ($GLOBALS['Data_Array_index'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_index'));
$go = (function() use ($f, $__global_Data_Array_deleteAt, $i, $xs, $__global_Data_Array_updateAt) {
  $__body = function($x) use ($f, $__global_Data_Array_deleteAt, $i, $xs, $__global_Data_Array_updateAt) {
    $v = ($f)($x);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nothing":
return ($__global_Data_Array_deleteAt)($i, $xs);
break;
case "Just":
$x__prime__ = ($__case_0)->v0;
return ($__global_Data_Array_updateAt)($i, $x__prime__, $xs);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($x) use ($f, $__global_Data_Array_deleteAt, $i, $xs, $__global_Data_Array_updateAt, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Data_Maybe_maybe)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), $go, ($__global_Data_Array_index)($xs, $i));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Array_alterAt'] = __NAMESPACE__ . '\\Data_Array_alterAt';


