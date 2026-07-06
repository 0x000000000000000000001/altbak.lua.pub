<?php

namespace Data\Array\NonEmpty\Internal;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty.Internal/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
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
      case 'Data_Array_NonEmpty_Internal_append': $v = (function() {
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
      case 'Data_Array_NonEmpty_Internal_unfoldable1NonEmptyArray': $v = ($GLOBALS['Data_Unfoldable1_unfoldable1Array'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_unfoldable1Array')); break;
      case 'Data_Array_NonEmpty_Internal_traversableWithIndexNonEmptyArray': $v = ($GLOBALS['Data_TraversableWithIndex_traversableWithIndexArray'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traversableWithIndexArray')); break;
      case 'Data_Array_NonEmpty_Internal_traversableNonEmptyArray': $v = ($GLOBALS['Data_Traversable_traversableArray'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableArray')); break;
      case 'Data_Array_NonEmpty_Internal_semigroupNonEmptyArray': $v = ($GLOBALS['Data_Semigroup_semigroupArray'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupArray')); break;
      case 'Data_Array_NonEmpty_Internal_ord1NonEmptyArray': $v = ($GLOBALS['Data_Ord_ord1Array'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ord1Array')); break;
      case 'Data_Array_NonEmpty_Internal_monadNonEmptyArray': $v = ($GLOBALS['Control_Monad_monadArray'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_monadArray')); break;
      case 'Data_Array_NonEmpty_Internal_functorWithIndexNonEmptyArray': $v = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexArray'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexArray')); break;
      case 'Data_Array_NonEmpty_Internal_functorNonEmptyArray': $v = ($GLOBALS['Data_Functor_functorArray'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_functorArray')); break;
      case 'Data_Array_NonEmpty_Internal_foldableWithIndexNonEmptyArray': $v = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexArray'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexArray')); break;
      case 'Data_Array_NonEmpty_Internal_foldableNonEmptyArray': $v = ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray')); break;
      case 'Data_Array_NonEmpty_Internal_foldable1NonEmptyArray': $v = (object)["foldMap1" => (function() {
  $__fn = function($dictSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_Internal_foldable1NonEmptyArray = ($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'));
$__global_Data_Semigroup_Foldable_composeFlipped = ($GLOBALS['Data_Semigroup_Foldable_composeFlipped'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_composeFlipped'));
$__global_Data_Functor_functorArray = ($GLOBALS['Data_Functor_functorArray'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_functorArray'));
$__case_0 = $__global_Data_Array_NonEmpty_Internal_foldable1NonEmptyArray;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl1;
} else {
throw new \Exception("Pattern match failure");
};
$foldl11 = $__case_res_0;
    $__res = ((function() use ($__global_Data_Semigroup_Foldable_composeFlipped, $foldl11) {
  $__fn = function($dictFunctor) use ($__global_Data_Semigroup_Foldable_composeFlipped, $foldl11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctor;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
    $__res = (function() use ($__global_Data_Semigroup_Foldable_composeFlipped, $map, $foldl11) {
  $__fn = function($dictSemigroup) use ($__global_Data_Semigroup_Foldable_composeFlipped, $map, $foldl11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictSemigroup;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_2;
    $__res = (function() use ($__global_Data_Semigroup_Foldable_composeFlipped, $map, $foldl11, $append) {
  $__fn = function($f) use ($__global_Data_Semigroup_Foldable_composeFlipped, $map, $foldl11, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Semigroup_Foldable_composeFlipped)(($map)($f), ($foldl11)($append));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Data_Functor_functorArray, $dictSemigroup);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldr1" => (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_NonEmpty_Internal_foldr1Impl'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_foldr1Impl'))), "foldl1" => (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_NonEmpty_Internal_foldl1Impl'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_foldl1Impl'))), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableArray = ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'));
    $__res = $__global_Data_Foldable_foldableArray;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Array_NonEmpty_Internal_traversable1NonEmptyArray': $v = (object)["traverse1" => (function() use ($dict) {
  $__fn = function($dictApply) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
$__global_Data_Array_NonEmpty_Internal_traverse1Impl = ($GLOBALS['Data_Array_NonEmpty_Internal_traverse1Impl'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_traverse1Impl'));
$__case_0 = $dictApply;
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
$map = $__case_res_1;
    $__res = (function() use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Array_NonEmpty_Internal_traverse1Impl, $apply, $map) {
  $__fn = function($f) use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Array_NonEmpty_Internal_traverse1Impl, $apply, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Array_NonEmpty_Internal_traverse1Impl, $apply, $map, $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequence1" => (function() {
  $__fn = function($dictApply) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_Internal_traversable1NonEmptyArray = ($GLOBALS['Data_Array_NonEmpty_Internal_traversable1NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_traversable1NonEmptyArray'));
$__global_Data_Semigroup_Traversable_identity = ($GLOBALS['Data_Semigroup_Traversable_identity'] ?? \Data\Semigroup\Traversable\phpurs_eval_thunk('Data_Semigroup_Traversable_identity'));
$__case_0 = $__global_Data_Array_NonEmpty_Internal_traversable1NonEmptyArray;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->traverse1;
} else {
throw new \Exception("Pattern match failure");
};
$traverse11 = $__case_res_2;
    $__res = ((function() use ($traverse11, $__global_Data_Semigroup_Traversable_identity) {
  $__fn = function($dictApply) use ($traverse11, $__global_Data_Semigroup_Traversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse11)($dictApply, $__global_Data_Semigroup_Traversable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($dictApply);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_Internal_foldable1NonEmptyArray = ($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'));
    $__res = $__global_Data_Array_NonEmpty_Internal_foldable1NonEmptyArray;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_traversableArray = ($GLOBALS['Data_Traversable_traversableArray'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableArray'));
    $__res = $__global_Data_Traversable_traversableArray;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Array_NonEmpty_Internal_eq1NonEmptyArray': $v = ($GLOBALS['Data_Eq_eq1Array'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq1Array')); break;
      case 'Data_Array_NonEmpty_Internal_bindNonEmptyArray': $v = ($GLOBALS['Control_Bind_bindArray'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bindArray')); break;
      case 'Data_Array_NonEmpty_Internal_applyNonEmptyArray': $v = ($GLOBALS['Control_Apply_applyArray'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_applyArray')); break;
      case 'Data_Array_NonEmpty_Internal_applicativeNonEmptyArray': $v = ($GLOBALS['Control_Applicative_applicativeArray'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_applicativeArray')); break;
      case 'Data_Array_NonEmpty_Internal_altNonEmptyArray': $v = ($GLOBALS['Control_Alt_altArray'] ?? \Control\Alt\phpurs_eval_thunk('Control_Alt_altArray')); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };



// Data_Array_NonEmpty_Internal_NonEmptyArray
function Data_Array_NonEmpty_Internal_NonEmptyArray($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_Internal_NonEmptyArray';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_Internal_NonEmptyArray';




// Data_Array_NonEmpty_Internal_showNonEmptyArray
function Data_Array_NonEmpty_Internal_showNonEmptyArray($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_Internal_showNonEmptyArray';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_NonEmpty_Internal_append = ($GLOBALS['Data_Array_NonEmpty_Internal_append'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_append'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show = $__case_res_0;
    $__res = (object)["show" => (function() use ($__global_Data_Array_NonEmpty_Internal_append, $show) {
  $__body = function($v) use ($__global_Data_Array_NonEmpty_Internal_append, $show) {
    $__case_0 = $v;
    if (true) {
$xs = $__case_0;
return ($__global_Data_Array_NonEmpty_Internal_append)("(NonEmptyArray ", ($__global_Data_Array_NonEmpty_Internal_append)(($show)($xs), ")"));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__global_Data_Array_NonEmpty_Internal_append, $show, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_Internal_showNonEmptyArray'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_Internal_showNonEmptyArray';


// Data_Array_NonEmpty_Internal_ordNonEmptyArray
function Data_Array_NonEmpty_Internal_ordNonEmptyArray($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_Internal_ordNonEmptyArray';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Eq_eqArrayImpl = ($GLOBALS['Data_Eq_eqArrayImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqArrayImpl'));
$__global_Data_Ord_negate = ($GLOBALS['Data_Ord_negate'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_negate'));
$__global_Data_Ord_compare2 = ($GLOBALS['Data_Ord_compare2'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare2'));
$__global_Data_Ord_ordArrayImpl = ($GLOBALS['Data_Ord_ordArrayImpl'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordArrayImpl'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eqArray = (object)["eq" => ($__global_Data_Eq_eqArrayImpl)($__case_res_1)];
$toDelta = (function() use ($compare3, $__global_Data_Ord_negate) {
  $__body = function($x, $y) use ($compare3, $__global_Data_Ord_negate) {
    $v = ($compare3)($x, $y);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "EQ":
return 0;
break;
case "LT":
return 1;
break;
case "GT":
return ($__global_Data_Ord_negate)(1);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($x, $y = null) use ($compare3, $__global_Data_Ord_negate, $__body, &$__fn) {
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
    $__res = (object)["compare" => (function() use ($__global_Data_Ord_compare2, $__global_Data_Ord_ordArrayImpl, $toDelta) {
  $__fn = function($xs, $ys = null) use ($__global_Data_Ord_compare2, $__global_Data_Ord_ordArrayImpl, $toDelta, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Ord_compare2)(0, ($__global_Data_Ord_ordArrayImpl)($toDelta, $xs, $ys));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqArray) {
  $__fn = function($__dollar____unused) use ($eqArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqArray;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_Internal_ordNonEmptyArray'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_Internal_ordNonEmptyArray';









// Data_Array_NonEmpty_Internal_eqNonEmptyArray
function Data_Array_NonEmpty_Internal_eqNonEmptyArray($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_NonEmpty_Internal_eqNonEmptyArray';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Eq_eqArrayImpl = ($GLOBALS['Data_Eq_eqArrayImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqArrayImpl'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["eq" => ($__global_Data_Eq_eqArrayImpl)($__case_res_0)];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_Internal_eqNonEmptyArray'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_Internal_eqNonEmptyArray';






