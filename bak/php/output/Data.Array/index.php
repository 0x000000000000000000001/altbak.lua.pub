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
      case 'Data_Array_traverse_': $v = (($GLOBALS['Data_Foldable_traverse_'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_traverse_')))(($GLOBALS['Control_Monad_ST_Internal_applicativeST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_applicativeST'))); break;
      case 'Data_Array_lessThan': $v = (($GLOBALS['Data_Ord_lessThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThan')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Array_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_Array_negate': $v = (($GLOBALS['Data_Ring_negate'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_negate')))(($GLOBALS['Data_Ring_ringInt'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringInt'))); break;
      case 'Data_Array_lessThanOrEq': $v = (($GLOBALS['Data_Ord_lessThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThanOrEq')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Array_eq': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Array_bind': $v = ($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bind_')); break;
      case 'Data_Array_discard': $v = ((function() {
  $__fn = function($dictBind) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))($dictBind);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($GLOBALS['Control_Monad_ST_Internal_bindST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bindST'))); break;
      case 'Data_Array_void': $v = (($GLOBALS['Data_Functor_void'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_void')))(($GLOBALS['Control_Monad_ST_Internal_functorST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_functorST'))); break;
      case 'Data_Array_pure': $v = ($GLOBALS['Control_Monad_ST_Internal_pure_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_pure_')); break;
      case 'Data_Array_intercalate1': $v = (($GLOBALS['Data_Foldable_intercalate'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_intercalate')))(($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'))); break;
      case 'Data_Array_zero': $v = 0; break;
      case 'Data_Array_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_Array_one': $v = 1; break;
      case 'Data_Array_map1': $v = ($GLOBALS['Data_Functor_arrayMap'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_arrayMap')); break;
      case 'Data_Array_map2': $v = ($GLOBALS['Control_Monad_ST_Internal_map_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_map_')); break;
      case 'Data_Array_fromJust': $v = (($GLOBALS['Data_Maybe_fromJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromJust')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Array_when': $v = (($GLOBALS['Control_Applicative_when'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_when')))(($GLOBALS['Control_Monad_ST_Internal_applicativeST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_applicativeST'))); break;
      case 'Data_Array_notEq': $v = (($GLOBALS['Data_Eq_notEq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_notEq')))(($GLOBALS['Data_Ordering_eqOrdering'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_eqOrdering'))); break;
      case 'Data_Array_greaterThanOrEq': $v = (($GLOBALS['Data_Ord_greaterThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThanOrEq')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Array_fold1': $v = (($GLOBALS['Data_Foldable_fold'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_fold')))(($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'))); break;
      case 'Data_Array_append': $v = ($GLOBALS['Data_Semigroup_concatArray'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatArray')); break;
      case 'Data_Array_composeFlipped': $v = (($GLOBALS['Control_Semigroupoid_composeFlipped'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeFlipped')))(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Data_Array_not': $v = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot')); break;
      case 'Data_Array_zipWith': $v = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_zipWithImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_zipWithImpl'))); break;
      case 'Data_Array_zip': $v = (($GLOBALS['Data_Array_zipWith'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_zipWith')))(($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple'))); break;
      case 'Data_Array_updateAt': $v = (($GLOBALS['Data_Function_Uncurried_runFn5'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn5')))(($GLOBALS['Data_Array__updateAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array__updateAt')), ($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'))); break;
      case 'Data_Array_unsafeIndex1': $v = (($GLOBALS['Data_Array_unsafeIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_unsafeIndex')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Array_uncons': $v = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_unconsImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_unconsImpl')), (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'))), (function() {
  $__fn = function($x, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($x, &$__fn) { return $__fn($x, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((object)["head" => $x, "tail" => $xs]);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Array_tail': $v = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_unconsImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_unconsImpl')), (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'))), (function() {
  $__fn = function($v, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($v, &$__fn) { return $__fn($v, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($xs);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Array_sortWith1': $v = (($GLOBALS['Data_Array_sortWith'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sortWith')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Array_slice': $v = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_sliceImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sliceImpl'))); break;
      case 'Data_Array_scanr': $v = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_scanrImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_scanrImpl'))); break;
      case 'Data_Array_scanl': $v = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_scanlImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_scanlImpl'))); break;
      case 'Data_Array_replicate': $v = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_replicateImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_replicateImpl'))); break;
      case 'Data_Array_range': $v = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_rangeImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_rangeImpl'))); break;
      case 'Data_Array_partition': $v = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_partitionImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_partitionImpl'))); break;
      case 'Data_Array_mapWithIndex': $v = ($GLOBALS['Data_FunctorWithIndex_mapWithIndexArray'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_mapWithIndexArray')); break;
      case 'Data_Array_insertAt': $v = (($GLOBALS['Data_Function_Uncurried_runFn5'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn5')))(($GLOBALS['Data_Array__insertAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array__insertAt')), ($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'))); break;
      case 'Data_Array_index': $v = (($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Array_indexImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_indexImpl')), ($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'))); break;
      case 'Data_Array_foldr': $v = ($GLOBALS['Data_Foldable_foldrArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldrArray')); break;
      case 'Data_Array_foldl': $v = ($GLOBALS['Data_Foldable_foldlArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldlArray')); break;
      case 'Data_Array_findMap': $v = (($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Array_findMapImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findMapImpl')), ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')), ($GLOBALS['Data_Maybe_isJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isJust'))); break;
      case 'Data_Array_findLastIndex': $v = (($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Array_findLastIndexImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findLastIndexImpl')), ($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'))); break;
      case 'Data_Array_findIndex': $v = (($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Array_findIndexImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findIndexImpl')), ($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'))); break;
      case 'Data_Array_filter': $v = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_filterImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_filterImpl'))); break;
      case 'Data_Array_deleteAt': $v = (($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Array__deleteAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array__deleteAt')), ($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'))); break;
      case 'Data_Array_concatMap': $v = (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($GLOBALS['Control_Bind_arrayBind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_arrayBind'))); break;
      case 'Data_Array_catMaybes': $v = (($GLOBALS['Data_Array_mapMaybe'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_mapMaybe')))((function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Array_any': $v = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_anyImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_anyImpl'))); break;
      case 'Data_Array_all': $v = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_allImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_allImpl'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Array_sequence
function Data_Array_sequence($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_sequence';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Traversable_sequenceDefault'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_sequenceDefault')))(($GLOBALS['Data_Traversable_traversableArray'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableArray')), $dictApplicative);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_sequence'] = __NAMESPACE__ . '\\Data_Array_sequence';















// Data_Array_apply
function Data_Array_apply($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_apply';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_0)->tag) {
case "Just":
$fn = ($__case_0)->v0;
$x = $__case_1;
return (($GLOBALS['Data_Maybe_map'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_map')))($fn, $x);
break;
case "Nothing":
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v, $v1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_apply'] = __NAMESPACE__ . '\\Data_Array_apply';

// Data_Array_map
function Data_Array_map($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_map';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Just")) {
$fn = $__case_0;
$x = ($__case_1)->v0;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($fn)($x));
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
    $__res = $__body($v, $v1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_map'] = __NAMESPACE__ . '\\Data_Array_map';



// Data_Array_compose
function Data_Array_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_compose';
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
$GLOBALS['Data_Array_compose'] = __NAMESPACE__ . '\\Data_Array_compose';




// Data_Array_eq1
function Data_Array_eq1($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_eq1';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "LT") && (($__case_1)->tag === "LT"))) {
return true;
} else {
if (((($__case_0)->tag === "GT") && (($__case_1)->tag === "GT"))) {
return true;
} else {
if (((($__case_0)->tag === "EQ") && (($__case_1)->tag === "EQ"))) {
return true;
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
    $__res = $__body($v, $v1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_eq1'] = __NAMESPACE__ . '\\Data_Array_eq1';


// Data_Array_foldMap1
function Data_Array_foldMap1($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_foldMap1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Foldable_foldMapDefaultR'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldMapDefaultR')))(($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray')), $dictMonoid);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_foldMap1'] = __NAMESPACE__ . '\\Data_Array_foldMap1';




// Data_Array_traverse
function Data_Array_traverse($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_traverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Apply0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
    $__res = (($GLOBALS['Data_Traversable_traverseArrayImpl'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traverseArrayImpl')))((($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($Apply0), (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($Apply0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')))), (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))($dictApplicative));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_traverse'] = __NAMESPACE__ . '\\Data_Array_traverse';



// Data_Array_zipWithA
function Data_Array_zipWithA($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_zipWithA';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sequence1 = (($GLOBALS['Data_Array_sequence'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sequence')))($dictApplicative);
    $__res = (function() use ($sequence1) {
  $__fn = function($f, $xs = null, $ys = null) use ($sequence1, &$__fn) {
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
    $__res = ($sequence1)((($GLOBALS['Data_Array_zipWith'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_zipWith')))($f, $xs, $ys));
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
$traverse_1 = (($GLOBALS['Data_Array_traverse_'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_traverse_')))($dictFoldable);
    $__res = (function() use ($traverse_1) {
  $__fn = function($us, $xs = null) use ($traverse_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($us, &$__fn) { return $__fn($us, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Control_Monad_ST_Internal_run'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_run')))((($GLOBALS['Data_Array_ST_withArray'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_withArray')))((function() use ($traverse_1, $us) {
  $__fn = function($res) use ($traverse_1, $us, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse_1)((function() use ($res) {
  $__body = function($v) use ($res) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$i = ($__case_0)->v0;
$a = ($__case_0)->v1;
return (($GLOBALS['Data_Array_ST_poke'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_poke')))($i, $a, $res);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($res, $__body, &$__fn) {
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
    $__res = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_unsafeIndexImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_unsafeIndexImpl')));
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
$unfoldr = (($GLOBALS['Data_Unfoldable_unfoldr'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_unfoldr')))($dictUnfoldable);
    $__res = (function() use ($unfoldr) {
  $__fn = function($xs) use ($unfoldr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$len = (($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length')))($xs);
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
    $__res = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_sortByImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sortByImpl')), $comp, (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "GT":
return 1;
break;
case "EQ":
return 0;
break;
case "LT":
return (($GLOBALS['Data_Array_negate'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_negate')))(1);
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
$comparing = (($GLOBALS['Data_Ord_comparing'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_comparing')))($dictOrd);
    $__res = (function() use ($comparing) {
  $__fn = function($f) use ($comparing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_sortBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sortBy')))(($comparing)($f));
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
$compare = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($xs) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_sortBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sortBy')))($compare, $xs);
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
    $__res = (($GLOBALS['Control_Monad_ST_Internal_run'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_run')))((($GLOBALS['Data_Array_ST_withArray'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_withArray')))((($GLOBALS['Data_Array_ST_push'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_push')))($x), $xs));
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
return (object)["before" => (($GLOBALS['Data_Array_slice'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_slice')))(0, $i, $xs), "after" => (($GLOBALS['Data_Array_slice'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_slice')))($i, (($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length')))($xs), $xs)];
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
    $__case_0 = (($GLOBALS['Data_Array_lessThan'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_lessThan')))($n, 1);
    if (($__case_0 === true)) {
return [];
} else {
if (true) {
return (($GLOBALS['Data_Array_slice'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_slice')))(0, $n, $xs);
} else {
throw new \Exception("Pattern match failure");
};
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
    $__res = (($GLOBALS['Data_Array_eq'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_eq')))((($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length')))($xs), 0);
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
$traverse_1 = (($GLOBALS['Data_Array_traverse_'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_traverse_')))($dictFoldable);
    $__res = (function() use ($traverse_1) {
  $__fn = function($is, $f = null, $xs = null) use ($traverse_1, &$__fn) {
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
    $__res = (($GLOBALS['Control_Monad_ST_Internal_run'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_run')))((($GLOBALS['Data_Array_ST_withArray'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_withArray')))((function() use ($traverse_1, $f, $is) {
  $__fn = function($res) use ($traverse_1, $f, $is, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse_1)((function() use ($f, $res) {
  $__fn = function($i) use ($f, $res, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_ST_modify'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_modify')))($i, $f, $res);
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
    $v = (($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length')))($arr);
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
    $__res = (($GLOBALS['Data_Array_intercalate1'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_intercalate1')))($dictMonoid);
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
    $__res = (($GLOBALS['Data_Array_index'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_index')))($xs, (($GLOBALS['Data_Array_sub'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sub')))((($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length')))($xs), 1));
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
    $__res = (($GLOBALS['Data_Array_apply'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_apply')))((($GLOBALS['Data_Array_map'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_map')))((function() {
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
})(), (($GLOBALS['Data_Array_init'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_init')))($xs)), (($GLOBALS['Data_Array_last'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_last')))($xs));
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
$go = (function() use ($i, $f, $xs) {
  $__fn = function($x) use ($i, $f, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_updateAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_updateAt')))($i, ($f)($x), $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')), $go, (($GLOBALS['Data_Array_index'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_index')))($xs, $i));
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
    $go = (function() use ($arr, $p, &$go) {
  $__fn = function($i) use ($arr, $p, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$v = (($GLOBALS['Data_Array_index'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_index')))($arr, $i);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Just":
$x = ($__case_0)->v0;
$__case_0 = ($p)($x);
if (($__case_0 === true)) {
$__tco_tmp_0 = (($GLOBALS['Data_Array_add'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_add')))($i, 1);
$i = $__tco_tmp_0;
continue 2;
} else {
if (true) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($i);
} else {
throw new \Exception("Pattern match failure");
};
};
break;
case "Nothing":
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
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
return (object)["init" => (($GLOBALS['Data_Array_slice'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_slice')))(0, $i, $arr), "rest" => (($GLOBALS['Data_Array_slice'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_slice')))($i, (($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length')))($arr), $arr)];
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
    $__res = ((($GLOBALS['Data_Array_span'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_span')))($p, $xs))->init;
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
    $__res = (($GLOBALS['Control_Monad_ST_Internal_run'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_run')))((($GLOBALS['Data_Array_bind'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_bind')))(($GLOBALS['Data_Array_ST_new'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_new')), (function() use ($xs) {
  $__fn = function($fsts) use ($xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_bind'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_bind')))(($GLOBALS['Data_Array_ST_new'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_new')), (function() use ($xs, $fsts) {
  $__fn = function($snds) use ($xs, $fsts, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_bind'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_bind')))((($GLOBALS['Data_Array_ST_Iterator_iterator'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_iterator')))((function() use ($xs) {
  $__fn = function($v) use ($xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_index'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_index')))($xs, $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($fsts, $snds) {
  $__fn = function($iter) use ($fsts, $snds, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_discard'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_discard')))((($GLOBALS['Data_Array_ST_Iterator_iterate'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_iterate')))($iter, (function() use ($fsts, $snds) {
  $__body = function($v) use ($fsts, $snds) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$fst = ($__case_0)->v0;
$snd = ($__case_0)->v1;
return (($GLOBALS['Data_Array_discard'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_discard')))((($GLOBALS['Data_Array_void'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_void')))((($GLOBALS['Data_Array_ST_push'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_push')))($fst, $fsts)), (function() use ($snd, $snds) {
  $__fn = function($__dollar____unused) use ($snd, $snds, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_void'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_void')))((($GLOBALS['Data_Array_ST_push'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_push')))($snd, $snds));
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
  $__fn = function($v) use ($fsts, $snds, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($fsts, $snds) {
  $__fn = function($__dollar____unused) use ($fsts, $snds, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_bind'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_bind')))((($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_unsafeFreeze')))($fsts), (function() use ($snds) {
  $__fn = function($fsts__prime__) use ($snds, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_bind'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_bind')))((($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_unsafeFreeze')))($snds), (function() use ($fsts__prime__) {
  $__fn = function($snds__prime__) use ($fsts__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_pure'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_pure')))((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($fsts__prime__, $snds__prime__));
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
    $__res = (($GLOBALS['Data_Array_index'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_index')))($xs, 0);
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
    $indexedAndSorted = (($GLOBALS['Data_Array_sortBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sortBy')))((function() use ($comp) {
  $__fn = function($x, $y = null) use ($comp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($comp)((($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd')))($x), (($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd')))($y));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Array_mapWithIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_mapWithIndex')))(($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')), $xs));
    $v = (($GLOBALS['Data_Array_head'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_head')))($indexedAndSorted);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nothing":
return [];
break;
case "Just":
$x = ($__case_0)->v0;
return (($GLOBALS['Data_Array_map1'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_map1')))(($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd')), (($GLOBALS['Data_Array_sortWith1'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sortWith1')))(($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst')), (($GLOBALS['Control_Monad_ST_Internal_run'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_run')))((($GLOBALS['Data_Array_bind'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_bind')))((($GLOBALS['Data_Array_ST_unsafeThaw'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_unsafeThaw')))((($GLOBALS['Data_Array_singleton'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_singleton')))($x)), (function() use ($indexedAndSorted, $comp) {
  $__fn = function($result) use ($indexedAndSorted, $comp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_discard'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_discard')))((($GLOBALS['Control_Monad_ST_Internal_foreach'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_foreach')))($indexedAndSorted, (function() use ($result, $comp) {
  $__body = function($v1) use ($result, $comp) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Tuple":
$pair = $__case_0;
$x__prime__ = ($__case_0)->v1;
return (($GLOBALS['Data_Array_bind'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_bind')))((($GLOBALS['Data_Array_map2'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_map2')))((($GLOBALS['Data_Array_compose'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_compose')))(($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd')), (($GLOBALS['Partial_Unsafe_unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafePartial')))((function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_compose'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_compose')))(($GLOBALS['Data_Array_fromJust'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_fromJust')), ($GLOBALS['Data_Array_last'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_last')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), (($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_unsafeFreeze')))($result)), (function() use ($comp, $x__prime__, $pair, $result) {
  $__fn = function($lst) use ($comp, $x__prime__, $pair, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_when'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_when')))((($GLOBALS['Data_Array_notEq'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_notEq')))(($comp)($lst, $x__prime__), ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'))), (($GLOBALS['Data_Array_void'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_void')))((($GLOBALS['Data_Array_ST_push'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_push')))($pair, $result)));
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
  $__fn = function($v1) use ($result, $comp, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($result) {
  $__fn = function($__dollar____unused) use ($result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_unsafeFreeze')))($result);
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
    $__res = (($GLOBALS['Data_Array_nubBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_nubBy')))((($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))($dictOrd));
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
    $__res = (($GLOBALS['Control_Monad_ST_Internal_run'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_run')))((($GLOBALS['Data_Array_bind'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_bind')))(($GLOBALS['Data_Array_ST_new'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_new')), (function() use ($xs, $op) {
  $__fn = function($result) use ($xs, $op, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_bind'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_bind')))((($GLOBALS['Data_Array_ST_Iterator_iterator'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_iterator')))((function() use ($xs) {
  $__fn = function($v) use ($xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_index'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_index')))($xs, $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($op, $result) {
  $__fn = function($iter) use ($op, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_discard'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_discard')))((($GLOBALS['Data_Array_ST_Iterator_iterate'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_iterate')))($iter, (function() use ($op, $iter, $result) {
  $__fn = function($x) use ($op, $iter, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_void'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_void')))((($GLOBALS['Data_Array_bind'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_bind')))(($GLOBALS['Data_Array_ST_new'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_new')), (function() use ($x, $op, $iter, $result) {
  $__fn = function($sub1) use ($x, $op, $iter, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_bind'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_bind')))((($GLOBALS['Data_Array_ST_push'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_push')))($x, $sub1), (function() use ($op, $x, $iter, $sub1, $result) {
  $__fn = function($__dollar____unused) use ($op, $x, $iter, $sub1, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_discard'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_discard')))((($GLOBALS['Data_Array_ST_Iterator_pushWhile'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_pushWhile')))(($op)($x), $iter, $sub1), (function() use ($sub1, $result) {
  $__fn = function($__dollar____unused) use ($sub1, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_bind'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_bind')))((($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_unsafeFreeze')))($sub1), (function() use ($result) {
  $__fn = function($grp) use ($result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_ST_push'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_push')))((($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_NonEmptyArray')))($grp), $result);
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
})()), (function() use ($result) {
  $__fn = function($__dollar____unused) use ($result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_unsafeFreeze')))($result);
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
    $__res = (($GLOBALS['Data_Array_compose'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_compose')))((($GLOBALS['Data_Array_groupBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_groupBy')))((function() use ($cmp) {
  $__fn = function($x, $y = null) use ($cmp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Array_eq1'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_eq1')))(($cmp)($x, $y), ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ')));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), (($GLOBALS['Data_Array_sortBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sortBy')))($cmp));
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
    $__res = (($GLOBALS['Data_Array_groupAllBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_groupAllBy')))((($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))($dictOrd));
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
$eq2 = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq);
    $__res = (function() use ($eq2) {
  $__fn = function($xs) use ($eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_groupBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_groupBy')))($eq2, $xs);
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
    $__res = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_fromFoldableImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_fromFoldableImpl')), (($GLOBALS['Data_Foldable_foldr'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldr')))($dictFoldable));
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
$buildNext = (function() use ($xs) {
  $__fn = function($idx) use ($xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($GLOBALS['Data_Array_foldl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_foldl')), ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')), (function() use ($idx) {
  $__fn = function($acc, $nextArr = null) use ($idx, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($nextArr) use ($acc, &$__fn) { return $__fn($acc, $nextArr); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))($acc, (function() use ($acc) {
  $__fn = function($el) use ($acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))([$el], (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($GLOBALS['Data_Array_snoc'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_snoc')), $el), $acc));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Array_index'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_index')))($nextArr, $idx));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$go = (function() use ($buildNext, &$go) {
  $__fn = function($idx, $allArrays = null) use ($buildNext, &$go, &$__fn) {
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
$__tco_tmp_0 = (($GLOBALS['Data_Array_add'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_add')))($idx, 1);
$__tco_tmp_1 = (($GLOBALS['Data_Array_snoc'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_snoc')))($allArrays, $next);
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
$Monad0 = (($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$pure1 = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($Monad0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$bind1 = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((($Monad0)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$tailRecM2 = (($GLOBALS['Control_Monad_Rec_Class_tailRecM2'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRecM2')))($dictMonadRec);
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
    $__res = (($GLOBALS['Data_Array_foldMap1'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_foldMap1')))($dictMonoid);
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
while (true) {
$pure1 = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$bind1 = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
return (function() use ($pure1, $bind1, $dictMonad) {
  $__fn = function($f, $b = null) use ($pure1, $bind1, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_unconsImpl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_unconsImpl')), (function() use ($pure1, $b) {
  $__fn = function($v) use ($pure1, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure1)($b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (function() use ($bind1, $f, $b, $dictMonad) {
  $__fn = function($a, $as = null) use ($bind1, $f, $b, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($as) use ($a, &$__fn) { return $__fn($a, $as); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind1)(($f)($b, $a), (function() use ($dictMonad, $f, $as) {
  $__fn = function($b__prime__) use ($dictMonad, $f, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_foldM'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_foldM')))($dictMonad, $f, $b__prime__, $as);
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
    $__res = (($GLOBALS['Data_Array_fold1'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_fold1')))($dictMonoid);
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
$i = (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))(0, (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_add'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_add')))($v, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Array_findLastIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findLastIndex')))((function() use ($cmp, $x) {
  $__fn = function($y) use ($cmp, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_eq1'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_eq1')))(($cmp)($x, $y), ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $ys));
    $__res = (($GLOBALS['Partial_Unsafe_unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafePartial')))((function() use ($i, $x, $ys) {
  $__fn = function($__dollar____unused) use ($i, $x, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_fromJust'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_fromJust')))((($GLOBALS['Data_Array_insertAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_insertAt')))($i, $x, $ys));
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
    $__res = (($GLOBALS['Data_Array_insertBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_insertBy')))((($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))($dictOrd));
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
    $__res = (($GLOBALS['Data_Array_map'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_map')))((($GLOBALS['Partial_Unsafe_unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafePartial')))((function() use ($xs) {
  $__fn = function($__dollar____unused) use ($xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_unsafeIndex1'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_unsafeIndex1')))($xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (($GLOBALS['Data_Array_findIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findIndex')))($f, $xs));
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
    $__res = (($GLOBALS['Data_Array_filter'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_filter')))((function() use ($eq2, $ys) {
  $__fn = function($x) use ($eq2, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Maybe_isJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isJust')))((($GLOBALS['Data_Array_findIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findIndex')))(($eq2)($x), $ys));
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
    $__res = (($GLOBALS['Data_Array_intersectBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_intersectBy')))((($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq));
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
$eq2 = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq);
    $__res = (function() use ($eq2) {
  $__fn = function($x) use ($eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_findLastIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findLastIndex')))((function() use ($eq2, $x) {
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
$eq2 = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq);
    $__res = (function() use ($eq2) {
  $__fn = function($x) use ($eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_findIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findIndex')))((function() use ($eq2, $x) {
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
$elemIndex1 = (($GLOBALS['Data_Array_elemIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_elemIndex')))($dictEq);
    $__res = (function() use ($elemIndex1) {
  $__fn = function($a, $arr = null) use ($elemIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($arr) use ($a, &$__fn) { return $__fn($a, $arr); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')))(($elemIndex1)($a, $arr));
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
$elemIndex1 = (($GLOBALS['Data_Array_elemIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_elemIndex')))($dictEq);
    $__res = (function() use ($elemIndex1) {
  $__fn = function($a, $arr = null) use ($elemIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($arr) use ($a, &$__fn) { return $__fn($a, $arr); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Maybe_isJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isJust')))(($elemIndex1)($a, $arr));
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
    $__res = ((($GLOBALS['Data_Array_span'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_span')))($p, $xs))->rest;
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
    $__res = (($GLOBALS['Data_Array_take'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_take')))((($GLOBALS['Data_Array_sub'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sub')))((($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length')))($xs), $n), $xs);
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
    $__case_0 = (($GLOBALS['Data_Array_lessThan'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_lessThan')))($n, 1);
    if (($__case_0 === true)) {
return $xs;
} else {
if (true) {
return (($GLOBALS['Data_Array_slice'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_slice')))($n, (($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length')))($xs), $xs);
} else {
throw new \Exception("Pattern match failure");
};
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
    $__res = (($GLOBALS['Data_Array_drop'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_drop')))((($GLOBALS['Data_Array_sub'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sub')))((($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length')))($xs), $n), $xs);
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
return (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))($ys, (function() use ($ys) {
  $__fn = function($i) use ($ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Partial_Unsafe_unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafePartial')))((function() use ($i, $ys) {
  $__fn = function($__dollar____unused) use ($i, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_fromJust'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_fromJust')))((($GLOBALS['Data_Array_deleteAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_deleteAt')))($i, $ys));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Array_findIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findIndex')))(($eq2)($x), $ys));
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
    $__res = (($GLOBALS['Data_Array_deleteBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_deleteBy')))((($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq));
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
    $__res = (($GLOBALS['Data_Array_foldr'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_foldr')))((($GLOBALS['Data_Array_delete'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_delete')))($dictEq));
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
    $__res = (($GLOBALS['Data_Array_append'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_append')))([$x], $xs);
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
while (true) {
$apply1 = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))((((($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$map3 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Alt0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
return (function() use ($apply1, $map3, $dictAlternative) {
  $__fn = function($dictLazy) use ($apply1, $map3, $dictAlternative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$defer = (($GLOBALS['Control_Lazy_defer'] ?? \Control\Lazy\phpurs_eval_thunk('Control_Lazy_defer')))($dictLazy);
    $__res = (function() use ($apply1, $map3, $defer, $dictAlternative, $dictLazy) {
  $__fn = function($v) use ($apply1, $map3, $defer, $dictAlternative, $dictLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($apply1)(($map3)(($GLOBALS['Data_Array_cons'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_cons')), $v), ($defer)((function() use ($dictAlternative, $dictLazy, $v) {
  $__fn = function($v1) use ($dictAlternative, $dictLazy, $v, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_many'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_many')))($dictAlternative, $dictLazy, $v);
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
while (true) {
$alt = (($GLOBALS['Control_Alt_alt'] ?? \Control\Alt\phpurs_eval_thunk('Control_Alt_alt')))((((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Alt0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$pure1 = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
return (function() use ($alt, $dictAlternative, $pure1) {
  $__fn = function($dictLazy, $v = null) use ($alt, $dictAlternative, $pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($dictLazy, &$__fn) { return $__fn($dictLazy, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($alt)((($GLOBALS['Data_Array_some'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_some')))($dictAlternative, $dictLazy, $v), ($pure1)([]));
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
    $__res = (($GLOBALS['Data_Array_concatMap'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_concatMap')))((($GLOBALS['Data_Array_compose'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_compose')))((($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))([], ($GLOBALS['Data_Array_singleton'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_singleton'))), $f));
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
$traverse1 = (($GLOBALS['Data_Array_traverse'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_traverse')))($dictApplicative);
$map3 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($traverse1, $map3) {
  $__fn = function($p) use ($traverse1, $map3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_composeFlipped'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_composeFlipped')))(($traverse1)((function() use ($map3, $p) {
  $__fn = function($x) use ($map3, $p, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map3)((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($x), ($p)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($map3)((($GLOBALS['Data_Array_mapMaybe'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_mapMaybe')))((function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$x = ($__case_0)->v0;
$b = ($__case_0)->v1;
$__case_0 = $b;
if (($__case_0 === true)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($x);
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
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
    $__res = (($GLOBALS['Control_Monad_ST_Internal_run'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_run')))((($GLOBALS['Data_Array_bind'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_bind')))(($GLOBALS['Data_Array_ST_new'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_new')), (function() use ($xs, $eq2) {
  $__fn = function($arr) use ($xs, $eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_discard'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_discard')))((($GLOBALS['Control_Monad_ST_Internal_foreach'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_foreach')))($xs, (function() use ($eq2, $arr) {
  $__fn = function($x) use ($eq2, $arr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_bind'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_bind')))((($GLOBALS['Data_Array_map2'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_map2')))((($GLOBALS['Data_Array_compose'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_compose')))(($GLOBALS['Data_Array_not'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_not')), (($GLOBALS['Data_Array_any'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_any')))((function() use ($eq2, $x) {
  $__fn = function($v) use ($eq2, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($eq2)($v, $x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), (($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_unsafeFreeze')))($arr)), (function() use ($x, $arr) {
  $__fn = function($e) use ($x, $arr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_when'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_when')))($e, (($GLOBALS['Data_Array_void'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_void')))((($GLOBALS['Data_Array_ST_push'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_push')))($x, $arr)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($arr) {
  $__fn = function($__dollar____unused) use ($arr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_unsafeFreeze')))($arr);
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
    $__res = (($GLOBALS['Data_Array_nubByEq'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_nubByEq')))((($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq));
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
    $__res = (($GLOBALS['Data_Array_append'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_append')))($xs, (($GLOBALS['Data_Array_foldl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_foldl')))((($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))((($GLOBALS['Data_Array_deleteBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_deleteBy')))($eq2)), (($GLOBALS['Data_Array_nubByEq'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_nubByEq')))($eq2, $ys), $xs));
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
    $__res = (($GLOBALS['Data_Array_unionBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_unionBy')))((($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq));
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
$go = (function() use ($f, $i, $xs) {
  $__body = function($x) use ($f, $i, $xs) {
    $v = ($f)($x);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nothing":
return (($GLOBALS['Data_Array_deleteAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_deleteAt')))($i, $xs);
break;
case "Just":
$x__prime__ = ($__case_0)->v0;
return (($GLOBALS['Data_Array_updateAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_updateAt')))($i, $x__prime__, $xs);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($x) use ($f, $i, $xs, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')), $go, (($GLOBALS['Data_Array_index'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_index')))($xs, $i));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Array_alterAt'] = __NAMESPACE__ . '\\Data_Array_alterAt';


