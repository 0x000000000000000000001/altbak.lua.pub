<?php

namespace Data\Set\NonEmpty;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty.Internal/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.List.NonEmpty/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Set/index.php';
require_once __DIR__ . '/../Data.Set.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Safe.Coerce/index.php';

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
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...$merged);
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
      case 'Data_Set_NonEmpty_coerce': $v = (($GLOBALS['Safe_Coerce_coerce'] ?? \Safe\Coerce\phpurs_eval_thunk('Safe_Coerce_coerce')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Set_NonEmpty_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Set_NonEmpty_fromJust': $v = (($GLOBALS['Data_Maybe_fromJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromJust')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Set_NonEmpty_foldMap1': $v = (($GLOBALS['Data_Semigroup_Foldable_foldMap1'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_foldMap1')))(($GLOBALS['Data_List_Types_foldable1NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldable1NonEmptyList'))); break;
      case 'Data_Set_NonEmpty_foldr1': $v = (($GLOBALS['Data_Semigroup_Foldable_foldr1'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_foldr1')))(($GLOBALS['Data_List_Types_foldable1NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldable1NonEmptyList'))); break;
      case 'Data_Set_NonEmpty_foldl1': $v = (($GLOBALS['Data_Semigroup_Foldable_foldl1'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_foldl1')))(($GLOBALS['Data_List_Types_foldable1NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldable1NonEmptyList'))); break;
      case 'Data_Set_NonEmpty_toUnfoldable11': $v = (($GLOBALS['Data_Set_NonEmpty_toUnfoldable1'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_toUnfoldable1')))(($GLOBALS['Data_Array_NonEmpty_Internal_unfoldable1NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_unfoldable1NonEmptyArray'))); break;
      case 'Data_Set_NonEmpty_toUnfoldable12': $v = (($GLOBALS['Data_Set_NonEmpty_toUnfoldable1'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_toUnfoldable1')))(($GLOBALS['Data_List_Types_unfoldable1NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_unfoldable1NonEmptyList'))); break;
      case 'Data_Set_NonEmpty_size': $v = (($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce')))(($GLOBALS['Data_Set_size'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_size'))); break;
      case 'Data_Set_NonEmpty_singleton': $v = (($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce')))(($GLOBALS['Data_Set_singleton'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_singleton'))); break;
      case 'Data_Set_NonEmpty_ord1NonEmptySet': $v = ($GLOBALS['Data_Set_ord1Set'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_ord1Set')); break;
      case 'Data_Set_NonEmpty_foldableNonEmptySet': $v = ($GLOBALS['Data_Set_foldableSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldableSet')); break;
      case 'Data_Set_NonEmpty_foldable1NonEmptySet': $v = (($GLOBALS['Data_Semigroup_Foldable_Foldable1__dollar__Dict'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_Foldable1__dollar__Dict')))((object)["foldMap1" => (function() {
  $__fn = function($dictSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap11 = (($GLOBALS['Data_Set_NonEmpty_foldMap1'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_foldMap1')))($dictSemigroup);
    $__res = (function() use ($foldMap11) {
  $__fn = function($f) use ($foldMap11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose')))(($foldMap11)($f), ($GLOBALS['Data_Set_NonEmpty_toUnfoldable12'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_toUnfoldable12')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldr1" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose')))((($GLOBALS['Data_Set_NonEmpty_foldr1'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_foldr1')))($f), ($GLOBALS['Data_Set_NonEmpty_toUnfoldable12'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_toUnfoldable12')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldl1" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose')))((($GLOBALS['Data_Set_NonEmpty_foldl1'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_foldl1')))($f), ($GLOBALS['Data_Set_NonEmpty_toUnfoldable12'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_toUnfoldable12')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Set_NonEmpty_foldableNonEmptySet'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_foldableNonEmptySet'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Set_NonEmpty_eq1NonEmptySet': $v = ($GLOBALS['Data_Set_eq1Set'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_eq1Set')); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };



// Data_Set_NonEmpty_compose
function Data_Set_NonEmpty_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_compose';
  if ($__num < 3) {
    if ($__num === 2) return function($x) use ($f, $g, $__fn) { return $__fn($f, $g, $x); };
    if ($__num === 1) return function($g, $x = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $x);
      if ($__num2 === 1) return function($x) use ($f, $g, $__fn) { return $__fn($f, $g, $x); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($f)(($g)($x));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_compose'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_compose';

// Data_Set_NonEmpty_map1
function Data_Set_NonEmpty_map1($f, $m = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_map1';
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($f, $__fn) { return $__fn($f, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $m) {
    $__case_0 = $m;
    switch (($__case_0)->tag) {
case "Tuple":
$v = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($v, ($f)($v1));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($f, $m);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_map1'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_map1';






// Data_Set_NonEmpty_NonEmptySet
function Data_Set_NonEmpty_NonEmptySet($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_NonEmptySet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_NonEmptySet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_NonEmptySet';

// Data_Set_NonEmpty_unionSet
function Data_Set_NonEmpty_unionSet($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_unionSet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce')))((($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($GLOBALS['Data_Set_semigroupSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_semigroupSet')))($dictOrd)));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_unionSet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_unionSet';

// Data_Set_NonEmpty_toUnfoldable1
function Data_Set_NonEmpty_toUnfoldable1($dictUnfoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_toUnfoldable1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$stepNext = (($GLOBALS['Data_Map_Internal_stepAscCps'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAscCps')))((($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3')))((function() {
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
    $__res = (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($k, $next));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
$stepHead = (($GLOBALS['Data_Map_Internal_stepAscCps'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAscCps')))((($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3')))((function() {
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
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($k, $next);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Partial_Unsafe_unsafeCrashWith'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafeCrashWith')))("toUnfoldable1: impossible");
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    $__res = (($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose')))((($GLOBALS['Data_Unfoldable1_unfoldr1'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_unfoldr1')))($dictUnfoldable1, (function() use ($stepNext) {
  $__fn = function($v) use ($stepNext, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_NonEmpty_map1'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_map1')))($stepNext, $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose')))($stepHead, (($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose')))(($GLOBALS['Data_Map_Internal_toMapIter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_toMapIter')), (($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose')))(($GLOBALS['Data_Set_toMap'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toMap')), ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'))))));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_toUnfoldable1'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_toUnfoldable1';



// Data_Set_NonEmpty_toUnfoldable
function Data_Set_NonEmpty_toUnfoldable($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_toUnfoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce')))((($GLOBALS['Data_Set_toUnfoldable'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toUnfoldable')))($dictUnfoldable));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_toUnfoldable'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_toUnfoldable';

// Data_Set_NonEmpty_toSet
function Data_Set_NonEmpty_toSet($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_toSet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return $s;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_toSet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_toSet';

// Data_Set_NonEmpty_subset
function Data_Set_NonEmpty_subset($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_subset';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce')))((($GLOBALS['Data_Set_subset'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_subset')))($dictOrd));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_subset'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_subset';



// Data_Set_NonEmpty_showNonEmptySet
function Data_Set_NonEmpty_showNonEmptySet($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_showNonEmptySet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))((($GLOBALS['Data_Array_NonEmpty_Internal_showNonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_showNonEmptyArray')))($dictShow));
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show) {
  $__fn = function($s) use ($show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_NonEmpty_append'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_append')))("(fromFoldable1 ", (($GLOBALS['Data_Set_NonEmpty_append'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_append')))(($show)((($GLOBALS['Data_Set_NonEmpty_toUnfoldable11'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_toUnfoldable11')))($s)), ")"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_showNonEmptySet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_showNonEmptySet';

// Data_Set_NonEmpty_semigroupNonEmptySet
function Data_Set_NonEmpty_semigroupNonEmptySet($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_semigroupNonEmptySet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_semigroupSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_semigroupSet')))($dictOrd);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_semigroupNonEmptySet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_semigroupNonEmptySet';

// Data_Set_NonEmpty_properSubset
function Data_Set_NonEmpty_properSubset($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_properSubset';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce')))((($GLOBALS['Data_Set_properSubset'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_properSubset')))($dictOrd));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_properSubset'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_properSubset';

// Data_Set_NonEmpty_ordNonEmptySet
function Data_Set_NonEmpty_ordNonEmptySet($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_ordNonEmptySet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_ordSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_ordSet')))($dictOrd);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_ordNonEmptySet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_ordNonEmptySet';


// Data_Set_NonEmpty_min
function Data_Set_NonEmpty_min($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_min';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return (($GLOBALS['Partial_Unsafe_unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafePartial')))((function() use ($s) {
  $__fn = function($__dollar____unused) use ($s, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_NonEmpty_fromJust'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_fromJust')))((($GLOBALS['Data_Set_findMin'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_findMin')))($s));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_min'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_min';

// Data_Set_NonEmpty_member
function Data_Set_NonEmpty_member($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_member';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce')))((($GLOBALS['Data_Set_member'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_member')))($dictOrd));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_member'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_member';

// Data_Set_NonEmpty_max
function Data_Set_NonEmpty_max($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_max';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return (($GLOBALS['Partial_Unsafe_unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafePartial')))((function() use ($s) {
  $__fn = function($__dollar____unused) use ($s, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_NonEmpty_fromJust'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_fromJust')))((($GLOBALS['Data_Set_findMax'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_findMax')))($s));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_max'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_max';

// Data_Set_NonEmpty_mapMaybe
function Data_Set_NonEmpty_mapMaybe($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_mapMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce')))((($GLOBALS['Data_Set_mapMaybe'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_mapMaybe')))($dictOrd));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_mapMaybe'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_mapMaybe';

// Data_Set_NonEmpty_map
function Data_Set_NonEmpty_map($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_map';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce')))((($GLOBALS['Data_Set_map'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_map')))($dictOrd));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_map'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_map';

// Data_Set_NonEmpty_insert
function Data_Set_NonEmpty_insert($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_insert';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce')))((($GLOBALS['Data_Set_insert'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_insert')))($dictOrd));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_insert'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_insert';

// Data_Set_NonEmpty_fromSet
function Data_Set_NonEmpty_fromSet($s) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_fromSet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($s) {
    $__case_0 = (($GLOBALS['Data_Set_isEmpty'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_isEmpty')))($s);
    if (($__case_0 === true)) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
if (true) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Data_Set_NonEmpty_NonEmptySet'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_NonEmptySet')))($s));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
    $__res = $__body($s);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_fromSet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_fromSet';

// Data_Set_NonEmpty_intersection
function Data_Set_NonEmpty_intersection($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_intersection';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$intersection1 = (($GLOBALS['Data_Set_intersection'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_intersection')))($dictOrd);
    $__res = (function() use ($intersection1) {
  $__body = function($v, $v1) use ($intersection1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$s1 = $__case_0;
$s2 = $__case_1;
return (($GLOBALS['Data_Set_NonEmpty_fromSet'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_fromSet')))(($intersection1)($s1, $s2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($intersection1, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_intersection'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_intersection';

// Data_Set_NonEmpty_fromFoldable1
function Data_Set_NonEmpty_fromFoldable1($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_fromFoldable1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap11 = (($GLOBALS['Data_Semigroup_Foldable_foldMap1'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_foldMap1')))($dictFoldable1);
    $__res = (function() use ($foldMap11) {
  $__fn = function($dictOrd) use ($foldMap11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap11)((($GLOBALS['Data_Set_NonEmpty_semigroupNonEmptySet'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_semigroupNonEmptySet')))($dictOrd), ($GLOBALS['Data_Set_NonEmpty_singleton'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_singleton')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_fromFoldable1'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_fromFoldable1';

// Data_Set_NonEmpty_fromFoldable
function Data_Set_NonEmpty_fromFoldable($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_fromFoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$fromFoldable2 = (($GLOBALS['Data_Set_fromFoldable'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_fromFoldable')))($dictFoldable);
    $__res = (function() use ($fromFoldable2) {
  $__fn = function($dictOrd) use ($fromFoldable2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose')))(($GLOBALS['Data_Set_NonEmpty_fromSet'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_fromSet')), ($fromFoldable2)($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_fromFoldable'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_fromFoldable';



// Data_Set_NonEmpty_filter
function Data_Set_NonEmpty_filter($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_filter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce')))((($GLOBALS['Data_Set_filter'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_filter')))($dictOrd));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_filter'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_filter';

// Data_Set_NonEmpty_eqNonEmptySet
function Data_Set_NonEmpty_eqNonEmptySet($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_eqNonEmptySet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_eqSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_eqSet')))($dictEq);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_eqNonEmptySet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_eqNonEmptySet';


// Data_Set_NonEmpty_difference
function Data_Set_NonEmpty_difference($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_difference';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$difference1 = (($GLOBALS['Data_Set_difference'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_difference')))($dictOrd);
    $__res = (function() use ($difference1) {
  $__body = function($v, $v1) use ($difference1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$s1 = $__case_0;
$s2 = $__case_1;
return (($GLOBALS['Data_Set_NonEmpty_fromSet'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_fromSet')))(($difference1)($s1, $s2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($difference1, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_difference'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_difference';

// Data_Set_NonEmpty_delete
function Data_Set_NonEmpty_delete($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_delete';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$delete1 = (($GLOBALS['Data_Set_delete'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_delete')))($dictOrd);
    $__res = (function() use ($delete1) {
  $__body = function($a, $v) use ($delete1) {
    $__case_0 = $a;
    $__case_1 = $v;
    if (true) {
$a1 = $__case_0;
$s = $__case_1;
return (($GLOBALS['Data_Set_NonEmpty_fromSet'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_fromSet')))(($delete1)($a1, $s));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v = null) use ($delete1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($a, &$__fn) { return $__fn($a, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_delete'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_delete';

// Data_Set_NonEmpty_cons
function Data_Set_NonEmpty_cons($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_cons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce')))((($GLOBALS['Data_Set_insert'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_insert')))($dictOrd));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_cons'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_cons';

