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
      case 'Data_Array_NonEmpty_Internal_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
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
      case 'Data_Array_NonEmpty_Internal_foldable1NonEmptyArray': $v = (($GLOBALS['Data_Semigroup_Foldable_Foldable1__dollar__Dict'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_Foldable1__dollar__Dict')))((object)["foldMap1" => (function() {
  $__fn = function($dictSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Semigroup_Foldable_foldMap1DefaultL'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_foldMap1DefaultL')))(($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_foldable1NonEmptyArray')), ($GLOBALS['Data_Array_NonEmpty_Internal_functorNonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_functorNonEmptyArray')), $dictSemigroup);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldr1" => (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_NonEmpty_Internal_foldr1Impl'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_foldr1Impl'))), "foldl1" => (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_NonEmpty_Internal_foldl1Impl'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_foldl1Impl'))), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Array_NonEmpty_Internal_foldableNonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_foldableNonEmptyArray'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Array_NonEmpty_Internal_traversable1NonEmptyArray': $v = (($GLOBALS['Data_Semigroup_Traversable_Traversable1__dollar__Dict'] ?? \Data\Semigroup\Traversable\phpurs_eval_thunk('Data_Semigroup_Traversable_Traversable1__dollar__Dict')))((object)["traverse1" => (function() {
  $__fn = function($dictApply) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($dictApply);
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($dictApply)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($apply, $map) {
  $__fn = function($f) use ($apply, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_NonEmpty_Internal_traverse1Impl'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_traverse1Impl')), $apply, $map, $f);
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
    $__res = (($GLOBALS['Data_Semigroup_Traversable_sequence1Default'] ?? \Data\Semigroup\Traversable\phpurs_eval_thunk('Data_Semigroup_Traversable_sequence1Default')))(($GLOBALS['Data_Array_NonEmpty_Internal_traversable1NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_traversable1NonEmptyArray')), $dictApply);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Array_NonEmpty_Internal_traversableNonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_traversableNonEmptyArray'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
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
$show = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))((($GLOBALS['Data_Show_showArray'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showArray')))($dictShow));
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if (true) {
$xs = $__case_0;
return (($GLOBALS['Data_Array_NonEmpty_Internal_append'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_append')))("(NonEmptyArray ", (($GLOBALS['Data_Array_NonEmpty_Internal_append'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_append')))(($show)($xs), ")"));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($show, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
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
    $__res = (($GLOBALS['Data_Ord_ordArray'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordArray')))($dictOrd);
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
    $__res = (($GLOBALS['Data_Eq_eqArray'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqArray')))($dictEq);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_Internal_eqNonEmptyArray'] = __NAMESPACE__ . '\\Data_Array_NonEmpty_Internal_eqNonEmptyArray';






