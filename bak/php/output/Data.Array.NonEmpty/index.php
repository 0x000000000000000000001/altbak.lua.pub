<?php

namespace Data\Array\NonEmpty;

require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty.Internal/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Safe.Coerce/index.php';
require_once __DIR__ . '/../Unsafe.Coerce/index.php';

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
      case 'Data_Array_NonEmpty_compose': $v = (function() {
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
      case 'Data_Array_NonEmpty_coerce': $v = (($GLOBALS['Safe_Coerce_coerce'] ?? \Safe\Coerce\phpurs_eval_thunk('Safe_Coerce_coerce')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Array_NonEmpty_max': $v = (function() {
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
  $__body = function($x, $y) use ($compare3) {
    $v = ($compare3)($x, $y);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return $y;
break;
case "EQ":
return $x;
break;
case "GT":
return $x;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($x, $y = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Array_NonEmpty_append': $v = (function() {
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
      case 'Data_Array_NonEmpty_intercalate1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
  $foldMap11 = $__case_res_0;
  $intercalateMap1 = (function() use ($foldMap11) {
  $__fn = function($dictSemigroup) use ($foldMap11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Semigroup_Foldable_joinee = ($GLOBALS['Data_Semigroup_Foldable_joinee'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_joinee'));
$__global_Data_Semigroup_Foldable_compose = ($GLOBALS['Data_Semigroup_Foldable_compose'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_compose'));
$__global_Data_Semigroup_Foldable_JoinWith = ($GLOBALS['Data_Semigroup_Foldable_JoinWith'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_JoinWith'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__case_0 = $dictSemigroup;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_1;
$foldMap12 = ($foldMap11)((object)["append" => (function() use ($append) {
  $__body = function($v, $v1) use ($append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return (function() use ($append, $a, $b) {
  $__fn = function($j) use ($append, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($append)(($a)($j), ($append)($j, ($b)($j)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
    $__res = (function() use ($__global_Data_Semigroup_Foldable_joinee, $foldMap12, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_JoinWith, $__global_Data_Function_const) {
  $__fn = function($j, $f = null, $foldable = null) use ($__global_Data_Semigroup_Foldable_joinee, $foldMap12, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_JoinWith, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($foldable) use ($j, $f, &$__fn) { return $__fn($j, $f, $foldable); };
    if ($__num === 1) return function($f, $foldable = null) use ($j, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($j, $f, $foldable);
      if ($__num2 === 1) return function($foldable) use ($j, $f, &$__fn) { return $__fn($j, $f, $foldable); };
      return phpurs_curry_fallback($__fn, [$j], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Semigroup_Foldable_joinee)(($foldMap12)(($__global_Data_Semigroup_Foldable_compose)($__global_Data_Semigroup_Foldable_JoinWith, ($__global_Data_Semigroup_Foldable_compose)($__global_Data_Function_const, $f)), $foldable), $j);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return (function() use ($intercalateMap1) {
  $__fn = function($dictSemigroup) use ($intercalateMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__global_Data_Semigroup_Foldable_identity = ($GLOBALS['Data_Semigroup_Foldable_identity'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_identity'));
    $__res = ($__global_Data_Function_flip)(($intercalateMap1)($dictSemigroup), $__global_Data_Semigroup_Foldable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Array_NonEmpty_greaterThan': $v = (function() {
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
      case 'Data_Array_NonEmpty_foldMap11': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Array_NonEmpty_fold11': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
  $foldMap11 = $__case_res_0;
  return (function() use ($foldMap11) {
  $__fn = function($dictSemigroup) use ($foldMap11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Semigroup_Foldable_identity = ($GLOBALS['Data_Semigroup_Foldable_identity'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_identity'));
    $__res = ($foldMap11)($dictSemigroup, $__global_Data_Semigroup_Foldable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Array_NonEmpty_fromJust': $v = (($GLOBALS['Data_Maybe_fromJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromJust')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Array_NonEmpty_unsafeIndex1': $v = (($GLOBALS['Data_Array_unsafeIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_unsafeIndex')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Array_NonEmpty_lessThan': $v = (function() {
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
      case 'Data_Array_NonEmpty_sub': $v = (function() {
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
      case 'Data_Array_NonEmpty_add': $v = (function() {
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
      case 'Data_Array_NonEmpty_unsafeFromArrayF': $v = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce')); break;
      case 'Data_Array_NonEmpty_unsafeFromArray': $v = ($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_NonEmptyArray')); break;
      case 'Data_Array_NonEmpty_transpose': $v = (($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose')))(($GLOBALS['Data_Array_NonEmpty_coerce'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_coerce')), (($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose')))(($GLOBALS['Data_Array_transpose'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_transpose')), ($GLOBALS['Data_Array_NonEmpty_coerce'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_coerce')))); break;
      case 'Data_Array_NonEmpty_unzip': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Bifunctor_bifunctorTuple'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bifunctorTuple'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bimap;
} else {
throw new \Exception("Pattern match failure");
};
  return (($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose')))(($__case_res_0)(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_NonEmptyArray')), ($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_NonEmptyArray'))), (($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose')))(($GLOBALS['Data_Array_unzip'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_unzip')), ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'))));
})(); break;
      case 'Data_Array_NonEmpty_singleton': $v = (($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_NonEmptyArray')), ($GLOBALS['Data_Array_singleton'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_singleton'))); break;
      case 'Data_Array_NonEmpty_transpose__prime__': $v = (($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose')))(($GLOBALS['Data_Array_NonEmpty_fromArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_fromArray')), (($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose')))(($GLOBALS['Data_Array_transpose'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_transpose')), ($GLOBALS['Data_Array_NonEmpty_coerce'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_coerce')))); break;
      case 'Data_Array_NonEmpty_foldr1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr1;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Array_NonEmpty_foldl1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl1;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Array_NonEmpty_concatMap': $v = (function() {
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
      case 'Data_Array_NonEmpty_concat': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Functor_functorArray'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_functorArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  return (($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_NonEmptyArray')), (($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose')))(($GLOBALS['Data_Array_concat'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_concat')), (($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose')))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray')), ($__case_res_0)(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'))))));
})(); break;
      case 'Data_Array_NonEmpty_head': $v = (($GLOBALS['Data_Array_NonEmpty_adaptMaybe'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptMaybe')))(($GLOBALS['Data_Array_head'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_head'))); break;
      case 'Data_Array_NonEmpty_init': $v = (($GLOBALS['Data_Array_NonEmpty_adaptMaybe'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptMaybe')))(($GLOBALS['Data_Array_init'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_init'))); break;
      case 'Data_Array_NonEmpty_last': $v = (($GLOBALS['Data_Array_NonEmpty_adaptMaybe'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptMaybe')))(($GLOBALS['Data_Array_last'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_last'))); break;
      case 'Data_Array_NonEmpty_tail': $v = (($GLOBALS['Data_Array_NonEmpty_adaptMaybe'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptMaybe')))(($GLOBALS['Data_Array_tail'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_tail'))); break;
      case 'Data_Array_NonEmpty_uncons': $v = (($GLOBALS['Data_Array_NonEmpty_adaptMaybe'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptMaybe')))(($GLOBALS['Data_Array_uncons'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_uncons'))); break;
      case 'Data_Array_NonEmpty_toNonEmpty': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compose;
} else {
throw new \Exception("Pattern match failure");
};
  $compose1 = $__case_res_0;
  return ((function() use ($compose1) {
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
})())(($GLOBALS['Data_Array_NonEmpty_uncons'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_uncons')), (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$x = ($__case_0)->head;
$xs = ($__case_0)->tail;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($x, $xs);
} else {
throw new \Exception("Pattern match failure");
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
})());
})(); break;
      case 'Data_Array_NonEmpty_unsnoc': $v = (($GLOBALS['Data_Array_NonEmpty_adaptMaybe'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptMaybe')))(($GLOBALS['Data_Array_unsnoc'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_unsnoc'))); break;
      case 'Data_Array_NonEmpty_catMaybes': $v = (($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny')))(($GLOBALS['Data_Array_catMaybes'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_catMaybes'))); break;
      case 'Data_Array_NonEmpty_index': $v = (($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny')))(($GLOBALS['Data_Array_index'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_index'))); break;
      case 'Data_Array_NonEmpty_length': $v = (($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny')))(($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length'))); break;
      case 'Data_Array_NonEmpty_reverse': $v = (($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt')))(($GLOBALS['Data_Array_reverse'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_reverse'))); break;
      case 'Data_Array_NonEmpty_unsafeIndex2': $v = (($GLOBALS['Data_Array_NonEmpty_unsafeIndex'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeIndex')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


















// Data_Array_NonEmpty_toArray
function Data_Array_NonEmpty_toArray($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_toArray';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$xs = $__case_0;
return $xs;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_toArray'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_toArray';

// Data_Array_NonEmpty_unionBy'
function Data_Array_NonEmpty_unionBy__prime__($eq, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_unionBy__prime__';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($eq, $__fn) { return $__fn($eq, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_NonEmpty_compose = ($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose'));
$__global_Data_Array_NonEmpty_Internal_NonEmptyArray = ($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_NonEmptyArray'));
$__global_Data_Array_unionBy = ($GLOBALS['Data_Array_unionBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_unionBy'));
$__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
    $__res = ($__global_Data_Array_NonEmpty_compose)($__global_Data_Array_NonEmpty_Internal_NonEmptyArray, ($__global_Data_Array_unionBy)($eq, ($__global_Data_Array_NonEmpty_toArray)($xs)));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_unionBy__prime__'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_unionBy__prime__';

// Data_Array_NonEmpty_union'
function Data_Array_NonEmpty_union__prime__($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_union__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_unionBy__prime__ = ($GLOBALS['Data_Array_NonEmpty_unionBy__prime__'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unionBy__prime__'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Array_NonEmpty_unionBy__prime__)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_union__prime__'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_union__prime__';

// Data_Array_NonEmpty_unionBy
function Data_Array_NonEmpty_unionBy($eq, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_unionBy';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($eq, $__fn) { return $__fn($eq, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_NonEmpty_compose = ($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose'));
$__global_Data_Array_NonEmpty_unionBy__prime__ = ($GLOBALS['Data_Array_NonEmpty_unionBy__prime__'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unionBy__prime__'));
$__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
    $__res = ($__global_Data_Array_NonEmpty_compose)(($__global_Data_Array_NonEmpty_unionBy__prime__)($eq, $xs), $__global_Data_Array_NonEmpty_toArray);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_unionBy'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_unionBy';

// Data_Array_NonEmpty_union
function Data_Array_NonEmpty_union($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_union';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_unionBy = ($GLOBALS['Data_Array_NonEmpty_unionBy'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unionBy'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Array_NonEmpty_unionBy)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_union'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_union';


// Data_Array_NonEmpty_updateAt
function Data_Array_NonEmpty_updateAt($i, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_updateAt';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($i, $__fn) { return $__fn($i, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_NonEmpty_compose = ($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose'));
$__global_Unsafe_Coerce_unsafeCoerce = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce'));
$__global_Data_Array_updateAt = ($GLOBALS['Data_Array_updateAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_updateAt'));
$__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
    $__res = ($__global_Data_Array_NonEmpty_compose)($__global_Unsafe_Coerce_unsafeCoerce, ($__global_Data_Array_NonEmpty_compose)(($__global_Data_Array_updateAt)($i, $x), $__global_Data_Array_NonEmpty_toArray));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_updateAt'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_updateAt';

// Data_Array_NonEmpty_zip
function Data_Array_NonEmpty_zip($xs, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_zip';
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, $__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_zip = ($GLOBALS['Data_Array_zip'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_zip'));
$__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
    $__res = ($__global_Data_Array_zip)(($__global_Data_Array_NonEmpty_toArray)($xs), ($__global_Data_Array_NonEmpty_toArray)($ys));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_zip'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_zip';

// Data_Array_NonEmpty_zipWith
function Data_Array_NonEmpty_zipWith($f, $xs = null, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_zipWith';
  if ($__num < 3) {
    if ($__num === 2) return function($ys) use ($f, $xs, $__fn) { return $__fn($f, $xs, $ys); };
    if ($__num === 1) return function($xs, $ys = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $xs, $ys);
      if ($__num2 === 1) return function($ys) use ($f, $xs, $__fn) { return $__fn($f, $xs, $ys); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_Array_zipWith = ($GLOBALS['Data_Array_zipWith'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_zipWith'));
$__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
    $__res = ($__global_Data_Array_zipWith)($f, ($__global_Data_Array_NonEmpty_toArray)($xs), ($__global_Data_Array_NonEmpty_toArray)($ys));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_zipWith'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_zipWith';

// Data_Array_NonEmpty_zipWithA
function Data_Array_NonEmpty_zipWithA($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_zipWithA';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_sequence = ($GLOBALS['Data_Array_sequence'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sequence'));
$__global_Data_Array_zipWith = ($GLOBALS['Data_Array_zipWith'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_zipWith'));
$__global_Unsafe_Coerce_unsafeCoerce = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce'));
$__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
$sequence1 = ($__global_Data_Array_sequence)($dictApplicative);
$zipWithA1 = (function() use ($sequence1, $__global_Data_Array_zipWith) {
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
    $__res = (function() use ($__global_Unsafe_Coerce_unsafeCoerce, $zipWithA1, $__global_Data_Array_NonEmpty_toArray) {
  $__fn = function($f, $xs = null, $ys = null) use ($__global_Unsafe_Coerce_unsafeCoerce, $zipWithA1, $__global_Data_Array_NonEmpty_toArray, &$__fn) {
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
    $__res = ($__global_Unsafe_Coerce_unsafeCoerce)(($zipWithA1)($f, ($__global_Data_Array_NonEmpty_toArray)($xs), ($__global_Data_Array_NonEmpty_toArray)($ys)));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_zipWithA'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_zipWithA';

// Data_Array_NonEmpty_splitAt
function Data_Array_NonEmpty_splitAt($i, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_splitAt';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($i, $__fn) { return $__fn($i, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_splitAt = ($GLOBALS['Data_Array_splitAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_splitAt'));
$__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
    $__res = ($__global_Data_Array_splitAt)($i, ($__global_Data_Array_NonEmpty_toArray)($xs));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_splitAt'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_splitAt';

// Data_Array_NonEmpty_some
function Data_Array_NonEmpty_some($dictAlternative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_some';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_cons = ($GLOBALS['Data_Array_cons'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_cons'));
$__global_Data_Array_some = ($GLOBALS['Data_Array_some'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_some'));
$__global_Data_Array_NonEmpty_compose = ($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose'));
$__global_Unsafe_Coerce_unsafeCoerce = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce'));
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
$some1 = (function() use ($apply1, $map3, $__global_Data_Array_cons, $dict, $__global_Data_Array_some, $dictAlternative) {
  $__fn = function($dictLazy) use ($apply1, $map3, $__global_Data_Array_cons, $dict, $__global_Data_Array_some, $dictAlternative, &$__fn) {
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
})();
    $__res = (function() use ($__global_Data_Array_NonEmpty_compose, $__global_Unsafe_Coerce_unsafeCoerce, $some1) {
  $__fn = function($dictLazy) use ($__global_Data_Array_NonEmpty_compose, $__global_Unsafe_Coerce_unsafeCoerce, $some1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_NonEmpty_compose)($__global_Unsafe_Coerce_unsafeCoerce, ($some1)($dictLazy));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_some'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_some';

// Data_Array_NonEmpty_snoc'
function Data_Array_NonEmpty_snoc__prime__($xs, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_snoc__prime__';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($xs, $__fn) { return $__fn($xs, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_snoc = ($GLOBALS['Data_Array_snoc'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_snoc'));
    $__res = ($__global_Data_Array_snoc)($xs, $x);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_snoc__prime__'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_snoc__prime__';

// Data_Array_NonEmpty_snoc
function Data_Array_NonEmpty_snoc($xs, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_snoc';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($xs, $__fn) { return $__fn($xs, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_snoc = ($GLOBALS['Data_Array_snoc'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_snoc'));
$__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
    $__res = ($__global_Data_Array_snoc)(($__global_Data_Array_NonEmpty_toArray)($xs), $x);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_snoc'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_snoc';


// Data_Array_NonEmpty_replicate
function Data_Array_NonEmpty_replicate($i, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_replicate';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($i, $__fn) { return $__fn($i, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_replicate = ($GLOBALS['Data_Array_replicate'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_replicate'));
$__global_Data_Array_NonEmpty_max = ($GLOBALS['Data_Array_NonEmpty_max'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_max'));
    $__res = ($__global_Data_Array_replicate)(($__global_Data_Array_NonEmpty_max)(1, $i), $x);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_replicate'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_replicate';

// Data_Array_NonEmpty_range
function Data_Array_NonEmpty_range($x, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_range';
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, $__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_range = ($GLOBALS['Data_Array_range'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_range'));
    $__res = ($__global_Data_Array_range)($x, $y);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_range'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_range';

// Data_Array_NonEmpty_prependArray
function Data_Array_NonEmpty_prependArray($xs, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_prependArray';
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, $__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_NonEmpty_append = ($GLOBALS['Data_Array_NonEmpty_append'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_append'));
$__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
    $__res = ($__global_Data_Array_NonEmpty_append)($xs, ($__global_Data_Array_NonEmpty_toArray)($ys));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_prependArray'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_prependArray';

// Data_Array_NonEmpty_modifyAt
function Data_Array_NonEmpty_modifyAt($i, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_modifyAt';
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($i, $__fn) { return $__fn($i, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_NonEmpty_compose = ($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose'));
$__global_Unsafe_Coerce_unsafeCoerce = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce'));
$__global_Data_Array_modifyAt = ($GLOBALS['Data_Array_modifyAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_modifyAt'));
$__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
    $__res = ($__global_Data_Array_NonEmpty_compose)($__global_Unsafe_Coerce_unsafeCoerce, ($__global_Data_Array_NonEmpty_compose)(($__global_Data_Array_modifyAt)($i, $f), $__global_Data_Array_NonEmpty_toArray));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_modifyAt'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_modifyAt';

// Data_Array_NonEmpty_intersectBy'
function Data_Array_NonEmpty_intersectBy__prime__($eq, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_intersectBy__prime__';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($eq, $__fn) { return $__fn($eq, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_intersectBy = ($GLOBALS['Data_Array_intersectBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_intersectBy'));
$__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
    $__res = ($__global_Data_Array_intersectBy)($eq, ($__global_Data_Array_NonEmpty_toArray)($xs));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_intersectBy__prime__'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_intersectBy__prime__';

// Data_Array_NonEmpty_intersectBy
function Data_Array_NonEmpty_intersectBy($eq, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_intersectBy';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($eq, $__fn) { return $__fn($eq, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_NonEmpty_compose = ($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose'));
$__global_Data_Array_NonEmpty_intersectBy__prime__ = ($GLOBALS['Data_Array_NonEmpty_intersectBy__prime__'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_intersectBy__prime__'));
$__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
    $__res = ($__global_Data_Array_NonEmpty_compose)(($__global_Data_Array_NonEmpty_intersectBy__prime__)($eq, $xs), $__global_Data_Array_NonEmpty_toArray);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_intersectBy'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_intersectBy';

// Data_Array_NonEmpty_intersect'
function Data_Array_NonEmpty_intersect__prime__($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_intersect__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_intersectBy__prime__ = ($GLOBALS['Data_Array_NonEmpty_intersectBy__prime__'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_intersectBy__prime__'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Array_NonEmpty_intersectBy__prime__)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_intersect__prime__'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_intersect__prime__';

// Data_Array_NonEmpty_intersect
function Data_Array_NonEmpty_intersect($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_intersect';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_intersectBy = ($GLOBALS['Data_Array_NonEmpty_intersectBy'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_intersectBy'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Array_NonEmpty_intersectBy)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_intersect'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_intersect';

// Data_Array_NonEmpty_intercalate
function Data_Array_NonEmpty_intercalate($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_intercalate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_intercalate1 = ($GLOBALS['Data_Array_NonEmpty_intercalate1'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_intercalate1'));
    $__res = ($__global_Data_Array_NonEmpty_intercalate1)($dictSemigroup);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_intercalate'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_intercalate';

// Data_Array_NonEmpty_insertAt
function Data_Array_NonEmpty_insertAt($i, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_insertAt';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($i, $__fn) { return $__fn($i, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_NonEmpty_compose = ($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose'));
$__global_Unsafe_Coerce_unsafeCoerce = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce'));
$__global_Data_Array_insertAt = ($GLOBALS['Data_Array_insertAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_insertAt'));
$__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
    $__res = ($__global_Data_Array_NonEmpty_compose)($__global_Unsafe_Coerce_unsafeCoerce, ($__global_Data_Array_NonEmpty_compose)(($__global_Data_Array_insertAt)($i, $x), $__global_Data_Array_NonEmpty_toArray));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_insertAt'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_insertAt';

// Data_Array_NonEmpty_fromFoldable1
function Data_Array_NonEmpty_fromFoldable1($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_fromFoldable1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_compose = ($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose'));
$__global_Data_Array_NonEmpty_Internal_NonEmptyArray = ($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_NonEmptyArray'));
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$__global_Data_Array_fromFoldableImpl = ($GLOBALS['Data_Array_fromFoldableImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_fromFoldableImpl'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Array_NonEmpty_compose)($__global_Data_Array_NonEmpty_Internal_NonEmptyArray, ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Array_fromFoldableImpl, $__case_res_0));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_fromFoldable1'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_fromFoldable1';

// Data_Array_NonEmpty_fromArray
function Data_Array_NonEmpty_fromArray($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_fromArray';
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
$GLOBALS['Data_Array_NonEmpty_fromArray'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_fromArray';

// Data_Array_NonEmpty_fromFoldable
function Data_Array_NonEmpty_fromFoldable($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_fromFoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_compose = ($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose'));
$__global_Data_Array_NonEmpty_fromArray = ($GLOBALS['Data_Array_NonEmpty_fromArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_fromArray'));
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
    $__res = ($__global_Data_Array_NonEmpty_compose)($__global_Data_Array_NonEmpty_fromArray, ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Array_fromFoldableImpl, $__case_res_0));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_fromFoldable'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_fromFoldable';




// Data_Array_NonEmpty_foldMap1
function Data_Array_NonEmpty_foldMap1($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_foldMap1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_foldMap11 = ($GLOBALS['Data_Array_NonEmpty_foldMap11'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_foldMap11'));
    $__res = ($__global_Data_Array_NonEmpty_foldMap11)($dictSemigroup);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_foldMap1'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_foldMap1';

// Data_Array_NonEmpty_fold1
function Data_Array_NonEmpty_fold1($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_fold1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_fold11 = ($GLOBALS['Data_Array_NonEmpty_fold11'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_fold11'));
    $__res = ($__global_Data_Array_NonEmpty_fold11)($dictSemigroup);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_fold1'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_fold1';

// Data_Array_NonEmpty_difference'
function Data_Array_NonEmpty_difference__prime__($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_difference__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_foldr = ($GLOBALS['Data_Array_foldr'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_foldr'));
$__global_Data_Array_deleteBy = ($GLOBALS['Data_Array_deleteBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_deleteBy'));
$__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$difference1 = ($__global_Data_Array_foldr)(($__global_Data_Array_deleteBy)($__case_res_0));
    $__res = (function() use ($difference1, $__global_Data_Array_NonEmpty_toArray) {
  $__fn = function($xs) use ($difference1, $__global_Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($difference1)(($__global_Data_Array_NonEmpty_toArray)($xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_difference__prime__'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_difference__prime__';

// Data_Array_NonEmpty_cons'
function Data_Array_NonEmpty_cons__prime__($x, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_cons__prime__';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($x, $__fn) { return $__fn($x, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_cons = ($GLOBALS['Data_Array_cons'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_cons'));
    $__res = ($__global_Data_Array_cons)($x, $xs);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_cons__prime__'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_cons__prime__';

// Data_Array_NonEmpty_fromNonEmpty
function Data_Array_NonEmpty_fromNonEmpty($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_fromNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__global_Data_Array_NonEmpty_cons__prime__ = ($GLOBALS['Data_Array_NonEmpty_cons__prime__'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_cons__prime__'));
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return ($__global_Data_Array_NonEmpty_cons__prime__)($x, $xs);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_fromNonEmpty'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_fromNonEmpty';



// Data_Array_NonEmpty_appendArray
function Data_Array_NonEmpty_appendArray($xs, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_appendArray';
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, $__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_NonEmpty_append = ($GLOBALS['Data_Array_NonEmpty_append'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_append'));
$__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
    $__res = ($__global_Data_Array_NonEmpty_append)(($__global_Data_Array_NonEmpty_toArray)($xs), $ys);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_appendArray'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_appendArray';

// Data_Array_NonEmpty_alterAt
function Data_Array_NonEmpty_alterAt($i, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_alterAt';
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($i, $__fn) { return $__fn($i, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_NonEmpty_compose = ($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose'));
$__global_Data_Array_alterAt = ($GLOBALS['Data_Array_alterAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_alterAt'));
$__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
    $__res = ($__global_Data_Array_NonEmpty_compose)(($__global_Data_Array_alterAt)($i, $f), $__global_Data_Array_NonEmpty_toArray);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_alterAt'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_alterAt';

// Data_Array_NonEmpty_adaptMaybe
function Data_Array_NonEmpty_adaptMaybe($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_adaptMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
$__global_Data_Array_NonEmpty_compose = ($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose'));
$__global_Data_Array_NonEmpty_fromJust = ($GLOBALS['Data_Array_NonEmpty_fromJust'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_fromJust'));
$__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
    $__res = ($__global_Partial_Unsafe__unsafePartial)((function() use ($__global_Data_Array_NonEmpty_compose, $__global_Data_Array_NonEmpty_fromJust, $f, $__global_Data_Array_NonEmpty_toArray) {
  $__fn = function($__dollar____unused) use ($__global_Data_Array_NonEmpty_compose, $__global_Data_Array_NonEmpty_fromJust, $f, $__global_Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_NonEmpty_compose)($__global_Data_Array_NonEmpty_fromJust, ($__global_Data_Array_NonEmpty_compose)($f, $__global_Data_Array_NonEmpty_toArray));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_adaptMaybe'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_adaptMaybe';








// Data_Array_NonEmpty_adaptAny
function Data_Array_NonEmpty_adaptAny($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_adaptAny';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_compose = ($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose'));
$__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
    $__res = ($__global_Data_Array_NonEmpty_compose)($f, $__global_Data_Array_NonEmpty_toArray);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_adaptAny'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_adaptAny';

// Data_Array_NonEmpty_all
function Data_Array_NonEmpty_all($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_all';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__global_Data_Array_all = ($GLOBALS['Data_Array_all'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_all'));
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_all)($p));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_all'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_all';

// Data_Array_NonEmpty_any
function Data_Array_NonEmpty_any($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_any';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__global_Data_Array_any = ($GLOBALS['Data_Array_any'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_any'));
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_any)($p));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_any'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_any';


// Data_Array_NonEmpty_delete
function Data_Array_NonEmpty_delete($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_delete';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_deleteBy = ($GLOBALS['Data_Array_deleteBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_deleteBy'));
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$delete1 = ($__global_Data_Array_deleteBy)($__case_res_0);
    $__res = (function() use ($__global_Data_Array_NonEmpty_adaptAny, $delete1) {
  $__fn = function($x) use ($__global_Data_Array_NonEmpty_adaptAny, $delete1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($delete1)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_delete'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_delete';

// Data_Array_NonEmpty_deleteAt
function Data_Array_NonEmpty_deleteAt($i) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_deleteAt';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__global_Data_Array_deleteAt = ($GLOBALS['Data_Array_deleteAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_deleteAt'));
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_deleteAt)($i));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_deleteAt'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_deleteAt';

// Data_Array_NonEmpty_deleteBy
function Data_Array_NonEmpty_deleteBy($f, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_deleteBy';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, $__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__global_Data_Array_deleteBy = ($GLOBALS['Data_Array_deleteBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_deleteBy'));
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_deleteBy)($f, $x));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_deleteBy'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_deleteBy';

// Data_Array_NonEmpty_difference
function Data_Array_NonEmpty_difference($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_difference';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_foldr = ($GLOBALS['Data_Array_foldr'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_foldr'));
$__global_Data_Array_deleteBy = ($GLOBALS['Data_Array_deleteBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_deleteBy'));
$__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$difference1 = ($__global_Data_Array_foldr)(($__global_Data_Array_deleteBy)($__case_res_0));
$difference__prime__1 = (function() use ($difference1, $__global_Data_Array_NonEmpty_toArray) {
  $__fn = function($xs) use ($difference1, $__global_Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($difference1)(($__global_Data_Array_NonEmpty_toArray)($xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($__global_Data_Array_NonEmpty_adaptAny, $difference__prime__1) {
  $__fn = function($xs) use ($__global_Data_Array_NonEmpty_adaptAny, $difference__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($difference__prime__1)($xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_difference'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_difference';

// Data_Array_NonEmpty_drop
function Data_Array_NonEmpty_drop($i) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_drop';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__global_Data_Array_drop = ($GLOBALS['Data_Array_drop'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_drop'));
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_drop)($i));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_drop'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_drop';

// Data_Array_NonEmpty_dropEnd
function Data_Array_NonEmpty_dropEnd($i) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_dropEnd';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__global_Data_Array_dropEnd = ($GLOBALS['Data_Array_dropEnd'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_dropEnd'));
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_dropEnd)($i));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_dropEnd'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_dropEnd';

// Data_Array_NonEmpty_dropWhile
function Data_Array_NonEmpty_dropWhile($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_dropWhile';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__global_Data_Array_dropWhile = ($GLOBALS['Data_Array_dropWhile'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_dropWhile'));
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_dropWhile)($f));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_dropWhile'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_dropWhile';

// Data_Array_NonEmpty_elem
function Data_Array_NonEmpty_elem($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_elem';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_findIndex = ($GLOBALS['Data_Array_findIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findIndex'));
$__global_Data_Maybe_isJust = ($GLOBALS['Data_Maybe_isJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isJust'));
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
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
$elem1 = (function() use ($__global_Data_Maybe_isJust, $elemIndex1) {
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
    $__res = (function() use ($__global_Data_Array_NonEmpty_adaptAny, $elem1) {
  $__fn = function($x) use ($__global_Data_Array_NonEmpty_adaptAny, $elem1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($elem1)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_elem'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_elem';

// Data_Array_NonEmpty_elemIndex
function Data_Array_NonEmpty_elemIndex($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_elemIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_findIndex = ($GLOBALS['Data_Array_findIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findIndex'));
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
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
    $__res = (function() use ($__global_Data_Array_NonEmpty_adaptAny, $elemIndex1) {
  $__fn = function($x) use ($__global_Data_Array_NonEmpty_adaptAny, $elemIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($elemIndex1)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_elemIndex'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_elemIndex';

// Data_Array_NonEmpty_elemLastIndex
function Data_Array_NonEmpty_elemLastIndex($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_elemLastIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_findLastIndex = ($GLOBALS['Data_Array_findLastIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findLastIndex'));
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_0;
$elemLastIndex1 = (function() use ($__global_Data_Array_findLastIndex, $eq2) {
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
    $__res = (function() use ($__global_Data_Array_NonEmpty_adaptAny, $elemLastIndex1) {
  $__fn = function($x) use ($__global_Data_Array_NonEmpty_adaptAny, $elemLastIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($elemLastIndex1)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_elemLastIndex'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_elemLastIndex';

// Data_Array_NonEmpty_filter
function Data_Array_NonEmpty_filter($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_filter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__global_Data_Array_filter = ($GLOBALS['Data_Array_filter'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_filter'));
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_filter)($f));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_filter'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_filter';

// Data_Array_NonEmpty_filterA
function Data_Array_NonEmpty_filterA($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_filterA';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_traverse = ($GLOBALS['Data_Array_traverse'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_traverse'));
$__global_Data_Array_composeFlipped = ($GLOBALS['Data_Array_composeFlipped'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_composeFlipped'));
$__global_Data_Array_mapMaybe = ($GLOBALS['Data_Array_mapMaybe'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_mapMaybe'));
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
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
$filterA1 = (function() use ($__global_Data_Array_composeFlipped, $traverse1, $map3, $__global_Data_Array_mapMaybe) {
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
    $__res = (function() use ($__global_Data_Array_NonEmpty_adaptAny, $filterA1) {
  $__fn = function($f) use ($__global_Data_Array_NonEmpty_adaptAny, $filterA1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($filterA1)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_filterA'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_filterA';

// Data_Array_NonEmpty_find
function Data_Array_NonEmpty_find($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_find';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__global_Data_Array_find = ($GLOBALS['Data_Array_find'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_find'));
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_find)($p));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_find'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_find';

// Data_Array_NonEmpty_findIndex
function Data_Array_NonEmpty_findIndex($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_findIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__global_Data_Array_findIndex = ($GLOBALS['Data_Array_findIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findIndex'));
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_findIndex)($p));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_findIndex'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_findIndex';

// Data_Array_NonEmpty_findLastIndex
function Data_Array_NonEmpty_findLastIndex($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_findLastIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__global_Data_Array_findLastIndex = ($GLOBALS['Data_Array_findLastIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findLastIndex'));
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_findLastIndex)($x));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_findLastIndex'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_findLastIndex';

// Data_Array_NonEmpty_findMap
function Data_Array_NonEmpty_findMap($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_findMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__global_Data_Array_findMap = ($GLOBALS['Data_Array_findMap'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findMap'));
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_findMap)($p));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_findMap'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_findMap';

// Data_Array_NonEmpty_foldM
function Data_Array_NonEmpty_foldM($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_foldM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
$__global_Data_Array_unconsImpl = ($GLOBALS['Data_Array_unconsImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_unconsImpl'));
$__global_Data_Array_foldM = ($GLOBALS['Data_Array_foldM'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_foldM'));
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
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
$foldM1 = (function() use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Array_unconsImpl, $pure1, $bind1, $__global_Data_Array_foldM, $dictMonad) {
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
})();
    $__res = (function() use ($__global_Data_Array_NonEmpty_adaptAny, $foldM1) {
  $__fn = function($f, $acc = null) use ($__global_Data_Array_NonEmpty_adaptAny, $foldM1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($f, &$__fn) { return $__fn($f, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($foldM1)($f, $acc));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_foldM'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_foldM';

// Data_Array_NonEmpty_foldRecM
function Data_Array_NonEmpty_foldRecM($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_foldRecM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
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
$foldRecM1 = (function() use ($tailRecM2) {
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
    $__res = (function() use ($__global_Data_Array_NonEmpty_adaptAny, $foldRecM1) {
  $__fn = function($f, $acc = null) use ($__global_Data_Array_NonEmpty_adaptAny, $foldRecM1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($f, &$__fn) { return $__fn($f, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($foldRecM1)($f, $acc));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_foldRecM'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_foldRecM';



// Data_Array_NonEmpty_mapMaybe
function Data_Array_NonEmpty_mapMaybe($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_mapMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__global_Data_Array_mapMaybe = ($GLOBALS['Data_Array_mapMaybe'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_mapMaybe'));
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_mapMaybe)($f));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_mapMaybe'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_mapMaybe';

// Data_Array_NonEmpty_notElem
function Data_Array_NonEmpty_notElem($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_notElem';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_findIndex = ($GLOBALS['Data_Array_findIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findIndex'));
$__global_Data_Maybe_isNothing = ($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing'));
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
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
$notElem1 = (function() use ($__global_Data_Maybe_isNothing, $elemIndex1) {
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
    $__res = (function() use ($__global_Data_Array_NonEmpty_adaptAny, $notElem1) {
  $__fn = function($x) use ($__global_Data_Array_NonEmpty_adaptAny, $notElem1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($notElem1)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_notElem'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_notElem';

// Data_Array_NonEmpty_partition
function Data_Array_NonEmpty_partition($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_partition';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__global_Data_Array_partition = ($GLOBALS['Data_Array_partition'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_partition'));
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_partition)($f));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_partition'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_partition';

// Data_Array_NonEmpty_slice
function Data_Array_NonEmpty_slice($start, $end = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_slice';
  if ($__num < 2) {
    if ($__num === 1) return function($end) use ($start, $__fn) { return $__fn($start, $end); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__global_Data_Array_slice = ($GLOBALS['Data_Array_slice'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_slice'));
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_slice)($start, $end));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_slice'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_slice';

// Data_Array_NonEmpty_span
function Data_Array_NonEmpty_span($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_span';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__global_Data_Array_span = ($GLOBALS['Data_Array_span'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_span'));
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_span)($f));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_span'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_span';

// Data_Array_NonEmpty_take
function Data_Array_NonEmpty_take($i) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_take';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__global_Data_Array_take = ($GLOBALS['Data_Array_take'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_take'));
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_take)($i));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_take'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_take';

// Data_Array_NonEmpty_takeEnd
function Data_Array_NonEmpty_takeEnd($i) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_takeEnd';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__global_Data_Array_takeEnd = ($GLOBALS['Data_Array_takeEnd'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_takeEnd'));
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_takeEnd)($i));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_takeEnd'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_takeEnd';

// Data_Array_NonEmpty_takeWhile
function Data_Array_NonEmpty_takeWhile($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_takeWhile';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__global_Data_Array_takeWhile = ($GLOBALS['Data_Array_takeWhile'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_takeWhile'));
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_takeWhile)($f));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_takeWhile'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_takeWhile';

// Data_Array_NonEmpty_toUnfoldable
function Data_Array_NonEmpty_toUnfoldable($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_toUnfoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
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
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)((function() use ($__global_Data_Array_length, $unfoldr) {
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
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_toUnfoldable'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_toUnfoldable';

// Data_Array_NonEmpty_unsafeAdapt
function Data_Array_NonEmpty_unsafeAdapt($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_unsafeAdapt';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_compose = ($GLOBALS['Data_Array_NonEmpty_compose'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_compose'));
$__global_Data_Array_NonEmpty_Internal_NonEmptyArray = ($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_NonEmptyArray'));
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
    $__res = ($__global_Data_Array_NonEmpty_compose)($__global_Data_Array_NonEmpty_Internal_NonEmptyArray, ($__global_Data_Array_NonEmpty_adaptAny)($f));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_unsafeAdapt';

// Data_Array_NonEmpty_cons
function Data_Array_NonEmpty_cons($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_cons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
$__global_Data_Array_cons = ($GLOBALS['Data_Array_cons'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_cons'));
    $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_cons)($x));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_cons'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_cons';

// Data_Array_NonEmpty_group
function Data_Array_NonEmpty_group($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_group';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
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
    $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)((function() use ($__global_Data_Array_groupBy, $eq2) {
  $__fn = function($xs) use ($__global_Data_Array_groupBy, $eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_groupBy)($eq2, $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_group'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_group';

// Data_Array_NonEmpty_groupAllBy
function Data_Array_NonEmpty_groupAllBy($op) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_groupAllBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
$__global_Data_Array_groupAllBy = ($GLOBALS['Data_Array_groupAllBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_groupAllBy'));
    $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_groupAllBy)($op));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_groupAllBy'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_groupAllBy';

// Data_Array_NonEmpty_groupAll
function Data_Array_NonEmpty_groupAll($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_groupAll';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_groupAllBy = ($GLOBALS['Data_Array_NonEmpty_groupAllBy'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_groupAllBy'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Array_NonEmpty_groupAllBy)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_groupAll'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_groupAll';

// Data_Array_NonEmpty_groupBy
function Data_Array_NonEmpty_groupBy($op) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_groupBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
$__global_Data_Array_groupBy = ($GLOBALS['Data_Array_groupBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_groupBy'));
    $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_groupBy)($op));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_groupBy'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_groupBy';

// Data_Array_NonEmpty_insert
function Data_Array_NonEmpty_insert($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_insert';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_insertBy = ($GLOBALS['Data_Array_insertBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_insertBy'));
$__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$insert1 = ($__global_Data_Array_insertBy)($__case_res_0);
    $__res = (function() use ($__global_Data_Array_NonEmpty_unsafeAdapt, $insert1) {
  $__fn = function($x) use ($__global_Data_Array_NonEmpty_unsafeAdapt, $insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($insert1)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_insert'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_insert';

// Data_Array_NonEmpty_insertBy
function Data_Array_NonEmpty_insertBy($f, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_insertBy';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, $__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
$__global_Data_Array_insertBy = ($GLOBALS['Data_Array_insertBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_insertBy'));
    $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_insertBy)($f, $x));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_insertBy'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_insertBy';

// Data_Array_NonEmpty_intersperse
function Data_Array_NonEmpty_intersperse($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_intersperse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
$__global_Data_Array_intersperse = ($GLOBALS['Data_Array_intersperse'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_intersperse'));
    $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_intersperse)($x));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_intersperse'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_intersperse';

// Data_Array_NonEmpty_mapWithIndex
function Data_Array_NonEmpty_mapWithIndex($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_mapWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
$__global_Data_Array_mapWithIndex = ($GLOBALS['Data_Array_mapWithIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_mapWithIndex'));
    $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_mapWithIndex)($f));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_mapWithIndex'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_mapWithIndex';

// Data_Array_NonEmpty_modifyAtIndices
function Data_Array_NonEmpty_modifyAtIndices($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_modifyAtIndices';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_traverse_ = ($GLOBALS['Data_Array_traverse_'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_traverse_'));
$__global_Control_Monad_ST_Internal_run = ($GLOBALS['Control_Monad_ST_Internal_run'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_run'));
$__global_Data_Array_ST_withArray = ($GLOBALS['Data_Array_ST_withArray'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_withArray'));
$__global_Data_Array_ST_modify = ($GLOBALS['Data_Array_ST_modify'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_modify'));
$__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
$traverse_1 = ($__global_Data_Array_traverse_)($dictFoldable);
$modifyAtIndices1 = (function() use ($__global_Control_Monad_ST_Internal_run, $__global_Data_Array_ST_withArray, $traverse_1, $__global_Data_Array_ST_modify) {
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
    $__res = (function() use ($__global_Data_Array_NonEmpty_unsafeAdapt, $modifyAtIndices1) {
  $__fn = function($is, $f = null) use ($__global_Data_Array_NonEmpty_unsafeAdapt, $modifyAtIndices1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($is, &$__fn) { return $__fn($is, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($modifyAtIndices1)($is, $f));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_modifyAtIndices'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_modifyAtIndices';

// Data_Array_NonEmpty_nub
function Data_Array_NonEmpty_nub($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_nub';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
$__global_Data_Array_nubBy = ($GLOBALS['Data_Array_nubBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_nubBy'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_nubBy)($__case_res_0));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_nub'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_nub';

// Data_Array_NonEmpty_nubBy
function Data_Array_NonEmpty_nubBy($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_nubBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
$__global_Data_Array_nubBy = ($GLOBALS['Data_Array_nubBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_nubBy'));
    $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_nubBy)($f));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_nubBy'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_nubBy';

// Data_Array_NonEmpty_nubByEq
function Data_Array_NonEmpty_nubByEq($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_nubByEq';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
$__global_Data_Array_nubByEq = ($GLOBALS['Data_Array_nubByEq'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_nubByEq'));
    $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_nubByEq)($f));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_nubByEq'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_nubByEq';

// Data_Array_NonEmpty_nubEq
function Data_Array_NonEmpty_nubEq($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_nubEq';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
$__global_Data_Array_nubByEq = ($GLOBALS['Data_Array_nubByEq'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_nubByEq'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_nubByEq)($__case_res_0));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_nubEq'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_nubEq';


// Data_Array_NonEmpty_scanl
function Data_Array_NonEmpty_scanl($f, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_scanl';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, $__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
$__global_Data_Array_scanl = ($GLOBALS['Data_Array_scanl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_scanl'));
    $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_scanl)($f, $x));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_scanl'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_scanl';

// Data_Array_NonEmpty_scanr
function Data_Array_NonEmpty_scanr($f, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_scanr';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, $__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
$__global_Data_Array_scanr = ($GLOBALS['Data_Array_scanr'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_scanr'));
    $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_scanr)($f, $x));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_scanr'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_scanr';

// Data_Array_NonEmpty_sort
function Data_Array_NonEmpty_sort($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_sort';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
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
    $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)((function() use ($__global_Data_Array_sortBy, $compare) {
  $__fn = function($xs) use ($__global_Data_Array_sortBy, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_sortBy)($compare, $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_sort'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_sort';

// Data_Array_NonEmpty_sortBy
function Data_Array_NonEmpty_sortBy($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_sortBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
$__global_Data_Array_sortBy = ($GLOBALS['Data_Array_sortBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sortBy'));
    $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_sortBy)($f));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_sortBy'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_sortBy';

// Data_Array_NonEmpty_sortWith
function Data_Array_NonEmpty_sortWith($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_sortWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_sortBy = ($GLOBALS['Data_Array_sortBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sortBy'));
$__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
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
$sortWith1 = (function() use ($__global_Data_Array_sortBy, $comparing) {
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
    $__res = (function() use ($__global_Data_Array_NonEmpty_unsafeAdapt, $sortWith1) {
  $__fn = function($f) use ($__global_Data_Array_NonEmpty_unsafeAdapt, $sortWith1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($sortWith1)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_sortWith'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_sortWith';

// Data_Array_NonEmpty_updateAtIndices
function Data_Array_NonEmpty_updateAtIndices($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_updateAtIndices';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_traverse_ = ($GLOBALS['Data_Array_traverse_'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_traverse_'));
$__global_Control_Monad_ST_Internal_run = ($GLOBALS['Control_Monad_ST_Internal_run'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_run'));
$__global_Data_Array_ST_withArray = ($GLOBALS['Data_Array_ST_withArray'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_withArray'));
$__global_Data_Array_ST_poke = ($GLOBALS['Data_Array_ST_poke'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_poke'));
$__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
$traverse_1 = ($__global_Data_Array_traverse_)($dictFoldable);
$updateAtIndices1 = (function() use ($__global_Control_Monad_ST_Internal_run, $__global_Data_Array_ST_withArray, $traverse_1, $__global_Data_Array_ST_poke) {
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
    $__res = (function() use ($__global_Data_Array_NonEmpty_unsafeAdapt, $updateAtIndices1) {
  $__fn = function($pairs) use ($__global_Data_Array_NonEmpty_unsafeAdapt, $updateAtIndices1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($updateAtIndices1)($pairs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_updateAtIndices'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_updateAtIndices';

// Data_Array_NonEmpty_unsafeIndex
function Data_Array_NonEmpty_unsafeIndex($__dollar____unused) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_unsafeIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
$__global_Data_Array_NonEmpty_unsafeIndex1 = ($GLOBALS['Data_Array_NonEmpty_unsafeIndex1'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeIndex1'));
    $__res = ($__global_Data_Array_NonEmpty_adaptAny)($__global_Data_Array_NonEmpty_unsafeIndex1);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_unsafeIndex'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_unsafeIndex';


// Data_Array_NonEmpty_toUnfoldable1
function Data_Array_NonEmpty_toUnfoldable1($dictUnfoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_toUnfoldable1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_length = ($GLOBALS['Data_Array_NonEmpty_length'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_length'));
$__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
$__global_Data_Array_NonEmpty_unsafeIndex2 = ($GLOBALS['Data_Array_NonEmpty_unsafeIndex2'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeIndex2'));
$__global_Data_Array_NonEmpty_lessThan = ($GLOBALS['Data_Array_NonEmpty_lessThan'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_lessThan'));
$__global_Data_Array_NonEmpty_sub = ($GLOBALS['Data_Array_NonEmpty_sub'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_sub'));
$__global_Data_Array_NonEmpty_add = ($GLOBALS['Data_Array_NonEmpty_add'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_add'));
$__case_0 = $dictUnfoldable1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->unfoldr1;
} else {
throw new \Exception("Pattern match failure");
};
$unfoldr1 = $__case_res_0;
    $__res = (function() use ($__global_Data_Array_NonEmpty_length, $__global_Partial_Unsafe__unsafePartial, $__global_Data_Array_NonEmpty_unsafeIndex2, $__global_Data_Array_NonEmpty_lessThan, $__global_Data_Array_NonEmpty_sub, $__global_Data_Array_NonEmpty_add, $unfoldr1) {
  $__fn = function($xs) use ($__global_Data_Array_NonEmpty_length, $__global_Partial_Unsafe__unsafePartial, $__global_Data_Array_NonEmpty_unsafeIndex2, $__global_Data_Array_NonEmpty_lessThan, $__global_Data_Array_NonEmpty_sub, $__global_Data_Array_NonEmpty_add, $unfoldr1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$len = ($__global_Data_Array_NonEmpty_length)($xs);
$f = (function() use ($__global_Partial_Unsafe__unsafePartial, $__global_Data_Array_NonEmpty_unsafeIndex2, $xs, $__global_Data_Array_NonEmpty_lessThan, $__global_Data_Array_NonEmpty_sub, $len, $__global_Data_Array_NonEmpty_add) {
  $__fn = function($i) use ($__global_Partial_Unsafe__unsafePartial, $__global_Data_Array_NonEmpty_unsafeIndex2, $xs, $__global_Data_Array_NonEmpty_lessThan, $__global_Data_Array_NonEmpty_sub, $len, $__global_Data_Array_NonEmpty_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = ($__global_Data_Array_NonEmpty_lessThan)($i, ($__global_Data_Array_NonEmpty_sub)($len, 1));
$__case_res_1 = null;
switch ($__case_0) {
case true:
$__case_res_1 = ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Data_Array_NonEmpty_add)($i, 1));
break;
default:
$__case_res_1 = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
};
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
})())(($__global_Partial_Unsafe__unsafePartial)((function() use ($__global_Data_Array_NonEmpty_unsafeIndex2) {
  $__fn = function($__dollar____unused) use ($__global_Data_Array_NonEmpty_unsafeIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__global_Data_Array_NonEmpty_unsafeIndex2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs, $i), $__case_res_1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($unfoldr1)($f, 0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_toUnfoldable1'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_toUnfoldable1';

