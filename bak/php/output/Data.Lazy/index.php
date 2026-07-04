<?php

namespace Data\Lazy;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.BooleanAlgebra/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
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
      case 'Data_Lazy_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Lazy_lazyLazy': $v = (($GLOBALS['Control_Lazy_Lazy__dollar__Dict'] ?? \Control\Lazy\phpurs_eval_thunk('Control_Lazy_Lazy__dollar__Dict')))((object)["defer" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($f) {
  $__fn = function($v) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Lazy_functorLazy': $v = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() {
  $__fn = function($f, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($f, &$__fn) { return $__fn($f, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($f, $l) {
  $__fn = function($v) use ($f, $l, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($l));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Lazy_functorWithIndexLazy': $v = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Lazy_map'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_map')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Lazy_functorLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorLazy'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Lazy_invariantLazy': $v = (($GLOBALS['Data_Functor_Invariant_Invariant__dollar__Dict'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_Invariant__dollar__Dict')))((object)["imap" => (($GLOBALS['Data_Functor_Invariant_imapF'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_imapF')))(($GLOBALS['Data_Lazy_functorLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorLazy')))]); break;
      case 'Data_Lazy_foldableLazy': $v = (($GLOBALS['Data_Foldable_Foldable__dollar__Dict'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_Foldable__dollar__Dict')))((object)["foldr" => (function() {
  $__fn = function($f, $z = null, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($l) use ($f, $z, &$__fn) { return $__fn($f, $z, $l); };
    if ($__num === 1) return function($z, $l = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $l);
      if ($__num2 === 1) return function($l) use ($f, $z, &$__fn) { return $__fn($f, $z, $l); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($f)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($l), $z);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__fn = function($f, $z = null, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($l) use ($f, $z, &$__fn) { return $__fn($f, $z, $l); };
    if ($__num === 1) return function($z, $l = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $l);
      if ($__num2 === 1) return function($l) use ($f, $z, &$__fn) { return $__fn($f, $z, $l); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($f)($z, (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($l));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid, $f = null, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($l) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $l); };
    if ($__num === 1) return function($f, $l = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $l);
      if ($__num2 === 1) return function($l) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $l); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($f)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($l));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Lazy_foldableWithIndexLazy': $v = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Lazy_foldr'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldr')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Lazy_foldl'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldl')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap1 = (($GLOBALS['Data_Lazy_foldMap'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldMap')))($dictMonoid);
    $__res = (function() use ($foldMap1) {
  $__fn = function($f) use ($foldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap1)(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
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
    $__res = ($GLOBALS['Data_Lazy_foldableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldableLazy'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Lazy_traversableLazy': $v = (($GLOBALS['Data_Traversable_Traversable__dollar__Dict'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_Traversable__dollar__Dict')))((object)["traverse" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($map1) {
  $__fn = function($f, $l = null) use ($map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($f, &$__fn) { return $__fn($f, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map1)((($GLOBALS['Data_Lazy_compose'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_compose')))(($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')), ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'))), ($f)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($l)));
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
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($map1) {
  $__fn = function($l) use ($map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map1)((($GLOBALS['Data_Lazy_compose'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_compose')))(($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')), ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'))), (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($l));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Lazy_functorLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorLazy'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Lazy_foldableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldableLazy'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Lazy_traversableWithIndexLazy': $v = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverse1 = (($GLOBALS['Data_Lazy_traverse'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_traverse')))($dictApplicative);
    $__res = (function() use ($traverse1) {
  $__fn = function($f) use ($traverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse1)(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
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
    $__res = ($GLOBALS['Data_Lazy_functorWithIndexLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorWithIndexLazy'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Lazy_foldableWithIndexLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldableWithIndexLazy'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Lazy_traversableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_traversableLazy'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Lazy_foldable1Lazy': $v = (($GLOBALS['Data_Semigroup_Foldable_Foldable1__dollar__Dict'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_Foldable1__dollar__Dict')))((object)["foldMap1" => (function() {
  $__fn = function($dictSemigroup, $f = null, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($l) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $l); };
    if ($__num === 1) return function($f, $l = null) use ($dictSemigroup, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictSemigroup, $f, $l);
      if ($__num2 === 1) return function($l) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $l); };
      return phpurs_curry_fallback($__fn, [$dictSemigroup], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($f)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($l));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldr1" => (function() {
  $__fn = function($v, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($v, &$__fn) { return $__fn($v, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($l);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl1" => (function() {
  $__fn = function($v, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($v, &$__fn) { return $__fn($v, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($l);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Lazy_foldableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldableLazy'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Lazy_traversable1Lazy': $v = (($GLOBALS['Data_Semigroup_Traversable_Traversable1__dollar__Dict'] ?? \Data\Semigroup\Traversable\phpurs_eval_thunk('Data_Semigroup_Traversable_Traversable1__dollar__Dict')))((object)["traverse1" => (function() {
  $__fn = function($dictApply) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($dictApply)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($map1) {
  $__fn = function($f, $l = null) use ($map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($f, &$__fn) { return $__fn($f, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map1)((($GLOBALS['Data_Lazy_compose'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_compose')))(($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')), ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'))), ($f)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($l)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($dictApply)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($map1) {
  $__fn = function($l) use ($map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map1)((($GLOBALS['Data_Lazy_compose'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_compose')))(($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')), ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'))), (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($l));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Lazy_foldable1Lazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldable1Lazy'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Lazy_traversableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_traversableLazy'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Lazy_extendLazy': $v = (($GLOBALS['Control_Extend_Extend__dollar__Dict'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_Extend__dollar__Dict')))((object)["extend" => (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, &$__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($f, $x) {
  $__fn = function($v) use ($f, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)($x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Lazy_functorLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorLazy'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Lazy_eq1Lazy': $v = (($GLOBALS['Data_Eq_Eq1__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq1__dollar__Dict')))((object)["eq1" => (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))((($GLOBALS['Data_Lazy_eqLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_eqLazy')))($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Lazy_ord1Lazy': $v = (($GLOBALS['Data_Ord_Ord1__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord1__dollar__Dict')))((object)["compare1" => (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))((($GLOBALS['Data_Lazy_ordLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_ordLazy')))($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Eq10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Lazy_eq1Lazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_eq1Lazy'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Lazy_comonadLazy': $v = (($GLOBALS['Control_Comonad_Comonad__dollar__Dict'] ?? \Control\Comonad\phpurs_eval_thunk('Control_Comonad_Comonad__dollar__Dict')))((object)["extract" => ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')), "Extend0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Lazy_extendLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_extendLazy'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Lazy_applyLazy': $v = (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, &$__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($f, $x) {
  $__fn = function($v) use ($f, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($f, (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Lazy_functorLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorLazy'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Lazy_bindLazy': $v = (($GLOBALS['Control_Bind_Bind__dollar__Dict'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_Bind__dollar__Dict')))((object)["bind" => (function() {
  $__fn = function($l, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($l, &$__fn) { return $__fn($l, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($f, $l) {
  $__fn = function($v) use ($f, $l, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))(($f)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($l)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Lazy_applyLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_applyLazy'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Lazy_applicativeLazy': $v = (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($a) {
  $__fn = function($v) use ($a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $a;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Lazy_applyLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_applyLazy'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Lazy_monadLazy': $v = (($GLOBALS['Control_Monad_Monad__dollar__Dict'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_Monad__dollar__Dict')))((object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Lazy_applicativeLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_applicativeLazy'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Lazy_bindLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_bindLazy'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };



// Data_Lazy_compose
function Data_Lazy_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_compose';
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
$GLOBALS['Data_Lazy_compose'] = __NAMESPACE__ . '\\Data_Lazy_compose';

// Data_Lazy_showLazy
function Data_Lazy_showLazy($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_showLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))($dictShow);
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show) {
  $__fn = function($x) use ($show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Lazy_append'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_append')))("(defer \_ -> ", (($GLOBALS['Data_Lazy_append'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_append')))(($show)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($x)), ")"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_showLazy'] = __NAMESPACE__ . '\\Data_Lazy_showLazy';

// Data_Lazy_semiringLazy
function Data_Lazy_semiringLazy($dictSemiring) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_semiringLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$add = (($GLOBALS['Data_Semiring_add'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_add')))($dictSemiring);
$zero = (($GLOBALS['Data_Semiring_zero'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_zero')))($dictSemiring);
$mul = (($GLOBALS['Data_Semiring_mul'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_mul')))($dictSemiring);
$one = (($GLOBALS['Data_Semiring_one'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_one')))($dictSemiring);
    $__res = (($GLOBALS['Data_Semiring_Semiring__dollar__Dict'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_Semiring__dollar__Dict')))((object)["add" => (function() use ($add) {
  $__fn = function($a, $b = null) use ($add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($add, $a, $b) {
  $__fn = function($v) use ($add, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($add)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($a), (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "zero" => (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($zero) {
  $__fn = function($v) use ($zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $zero;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "mul" => (function() use ($mul) {
  $__fn = function($a, $b = null) use ($mul, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($mul, $a, $b) {
  $__fn = function($v) use ($mul, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($mul)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($a), (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "one" => (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($one) {
  $__fn = function($v) use ($one, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $one;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_semiringLazy'] = __NAMESPACE__ . '\\Data_Lazy_semiringLazy';

// Data_Lazy_semigroupLazy
function Data_Lazy_semigroupLazy($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_semigroupLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append1 = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))($dictSemigroup);
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() use ($append1) {
  $__fn = function($a, $b = null) use ($append1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($append1, $a, $b) {
  $__fn = function($v) use ($append1, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($append1)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($a), (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_semigroupLazy'] = __NAMESPACE__ . '\\Data_Lazy_semigroupLazy';

// Data_Lazy_ringLazy
function Data_Lazy_ringLazy($dictRing) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_ringLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sub = (($GLOBALS['Data_Ring_sub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_sub')))($dictRing);
$semiringLazy1 = (($GLOBALS['Data_Lazy_semiringLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_semiringLazy')))((($dictRing)->Semiring0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ring_Ring__dollar__Dict'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_Ring__dollar__Dict')))((object)["sub" => (function() use ($sub) {
  $__fn = function($a, $b = null) use ($sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($sub, $a, $b) {
  $__fn = function($v) use ($sub, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($sub)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($a), (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Semiring0" => (function() use ($semiringLazy1) {
  $__fn = function($__dollar____unused) use ($semiringLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semiringLazy1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_ringLazy'] = __NAMESPACE__ . '\\Data_Lazy_ringLazy';

// Data_Lazy_monoidLazy
function Data_Lazy_monoidLazy($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_monoidLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
$semigroupLazy1 = (($GLOBALS['Data_Lazy_semigroupLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_semigroupLazy')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($mempty) {
  $__fn = function($v) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $mempty;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupLazy1) {
  $__fn = function($__dollar____unused) use ($semigroupLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupLazy1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_monoidLazy'] = __NAMESPACE__ . '\\Data_Lazy_monoidLazy';



// Data_Lazy_map
function Data_Lazy_map($f, $l = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_map';
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($f, $__fn) { return $__fn($f, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($f, $l) {
  $__fn = function($v) use ($f, $l, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($l));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Lazy_map'] = __NAMESPACE__ . '\\Data_Lazy_map';




// Data_Lazy_foldr
function Data_Lazy_foldr($f, $z = null, $l = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_foldr';
  if ($__num < 3) {
    if ($__num === 2) return function($l) use ($f, $z, $__fn) { return $__fn($f, $z, $l); };
    if ($__num === 1) return function($z, $l = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $l);
      if ($__num2 === 1) return function($l) use ($f, $z, $__fn) { return $__fn($f, $z, $l); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($f)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($l), $z);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Lazy_foldr'] = __NAMESPACE__ . '\\Data_Lazy_foldr';

// Data_Lazy_foldl
function Data_Lazy_foldl($f, $z = null, $l = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_foldl';
  if ($__num < 3) {
    if ($__num === 2) return function($l) use ($f, $z, $__fn) { return $__fn($f, $z, $l); };
    if ($__num === 1) return function($z, $l = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $l);
      if ($__num2 === 1) return function($l) use ($f, $z, $__fn) { return $__fn($f, $z, $l); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($f)($z, (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($l));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Lazy_foldl'] = __NAMESPACE__ . '\\Data_Lazy_foldl';

// Data_Lazy_foldMap
function Data_Lazy_foldMap($dictMonoid, $f = null, $l = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_foldMap';
  if ($__num < 3) {
    if ($__num === 2) return function($l) use ($dictMonoid, $f, $__fn) { return $__fn($dictMonoid, $f, $l); };
    if ($__num === 1) return function($f, $l = null) use ($dictMonoid, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $l);
      if ($__num2 === 1) return function($l) use ($dictMonoid, $f, $__fn) { return $__fn($dictMonoid, $f, $l); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($f)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($l));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Lazy_foldMap'] = __NAMESPACE__ . '\\Data_Lazy_foldMap';



// Data_Lazy_traverse
function Data_Lazy_traverse($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_traverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($map1) {
  $__fn = function($f, $l = null) use ($map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($f, &$__fn) { return $__fn($f, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map1)((($GLOBALS['Data_Lazy_compose'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_compose')))(($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')), ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'))), ($f)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($l)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_traverse'] = __NAMESPACE__ . '\\Data_Lazy_traverse';





// Data_Lazy_eqLazy
function Data_Lazy_eqLazy($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_eqLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq);
    $__res = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() use ($eq) {
  $__fn = function($x, $y = null) use ($eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($eq)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($x), (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($y));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_eqLazy'] = __NAMESPACE__ . '\\Data_Lazy_eqLazy';

// Data_Lazy_ordLazy
function Data_Lazy_ordLazy($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_ordLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))($dictOrd);
$eqLazy1 = (($GLOBALS['Data_Lazy_eqLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_eqLazy')))((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() use ($compare) {
  $__fn = function($x, $y = null) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($compare)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($x), (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($y));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqLazy1) {
  $__fn = function($__dollar____unused) use ($eqLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqLazy1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_ordLazy'] = __NAMESPACE__ . '\\Data_Lazy_ordLazy';




// Data_Lazy_commutativeRingLazy
function Data_Lazy_commutativeRingLazy($dictCommutativeRing) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_commutativeRingLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$ringLazy1 = (($GLOBALS['Data_Lazy_ringLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_ringLazy')))((($dictCommutativeRing)->Ring0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_CommutativeRing_CommutativeRing__dollar__Dict'] ?? \Data\CommutativeRing\phpurs_eval_thunk('Data_CommutativeRing_CommutativeRing__dollar__Dict')))((object)["Ring0" => (function() use ($ringLazy1) {
  $__fn = function($__dollar____unused) use ($ringLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ringLazy1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_commutativeRingLazy'] = __NAMESPACE__ . '\\Data_Lazy_commutativeRingLazy';

// Data_Lazy_euclideanRingLazy
function Data_Lazy_euclideanRingLazy($dictEuclideanRing) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_euclideanRingLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$div = (($GLOBALS['Data_EuclideanRing_div'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_div')))($dictEuclideanRing);
$mod = (($GLOBALS['Data_EuclideanRing_mod'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_mod')))($dictEuclideanRing);
$commutativeRingLazy1 = (($GLOBALS['Data_Lazy_commutativeRingLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_commutativeRingLazy')))((($dictEuclideanRing)->CommutativeRing0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_EuclideanRing_EuclideanRing__dollar__Dict'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_EuclideanRing__dollar__Dict')))((object)["degree" => (($GLOBALS['Data_Lazy_compose'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_compose')))((($GLOBALS['Data_EuclideanRing_degree'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_degree')))($dictEuclideanRing), ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'))), "div" => (function() use ($div) {
  $__fn = function($a, $b = null) use ($div, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($div, $a, $b) {
  $__fn = function($v) use ($div, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($div)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($a), (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "mod" => (function() use ($mod) {
  $__fn = function($a, $b = null) use ($mod, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($mod, $a, $b) {
  $__fn = function($v) use ($mod, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($mod)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($a), (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "CommutativeRing0" => (function() use ($commutativeRingLazy1) {
  $__fn = function($__dollar____unused) use ($commutativeRingLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $commutativeRingLazy1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_euclideanRingLazy'] = __NAMESPACE__ . '\\Data_Lazy_euclideanRingLazy';

// Data_Lazy_boundedLazy
function Data_Lazy_boundedLazy($dictBounded) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_boundedLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$top = (($GLOBALS['Data_Bounded_top'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_top')))($dictBounded);
$bottom = (($GLOBALS['Data_Bounded_bottom'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottom')))($dictBounded);
$ordLazy1 = (($GLOBALS['Data_Lazy_ordLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_ordLazy')))((($dictBounded)->Ord0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Bounded_Bounded__dollar__Dict'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_Bounded__dollar__Dict')))((object)["top" => (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($top) {
  $__fn = function($v) use ($top, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $top;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "bottom" => (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($bottom) {
  $__fn = function($v) use ($bottom, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bottom;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "Ord0" => (function() use ($ordLazy1) {
  $__fn = function($__dollar____unused) use ($ordLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ordLazy1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_boundedLazy'] = __NAMESPACE__ . '\\Data_Lazy_boundedLazy';


// Data_Lazy_apply
function Data_Lazy_apply($f, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_apply';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, $__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($f, $x) {
  $__fn = function($v) use ($f, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($f, (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Lazy_apply'] = __NAMESPACE__ . '\\Data_Lazy_apply';


// Data_Lazy_heytingAlgebraLazy
function Data_Lazy_heytingAlgebraLazy($dictHeytingAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_heytingAlgebraLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$ff = (($GLOBALS['Data_HeytingAlgebra_ff'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_ff')))($dictHeytingAlgebra);
$tt = (($GLOBALS['Data_HeytingAlgebra_tt'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_tt')))($dictHeytingAlgebra);
$implies = (($GLOBALS['Data_HeytingAlgebra_implies'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_implies')))($dictHeytingAlgebra);
$conj = (($GLOBALS['Data_HeytingAlgebra_conj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_conj')))($dictHeytingAlgebra);
$disj = (($GLOBALS['Data_HeytingAlgebra_disj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_disj')))($dictHeytingAlgebra);
$not = (($GLOBALS['Data_HeytingAlgebra_not'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_not')))($dictHeytingAlgebra);
    $__res = (($GLOBALS['Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict')))((object)["ff" => (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($ff) {
  $__fn = function($v) use ($ff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "tt" => (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($tt) {
  $__fn = function($v) use ($tt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $tt;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "implies" => (function() use ($implies) {
  $__fn = function($a, $b = null) use ($implies, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Lazy_apply'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_apply')))((($GLOBALS['Data_Lazy_map'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_map')))($implies, $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "conj" => (function() use ($conj) {
  $__fn = function($a, $b = null) use ($conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Lazy_apply'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_apply')))((($GLOBALS['Data_Lazy_map'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_map')))($conj, $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "disj" => (function() use ($disj) {
  $__fn = function($a, $b = null) use ($disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Lazy_apply'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_apply')))((($GLOBALS['Data_Lazy_map'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_map')))($disj, $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "not" => (function() use ($not) {
  $__fn = function($a) use ($not, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Lazy_map'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_map')))($not, $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_heytingAlgebraLazy'] = __NAMESPACE__ . '\\Data_Lazy_heytingAlgebraLazy';

// Data_Lazy_booleanAlgebraLazy
function Data_Lazy_booleanAlgebraLazy($dictBooleanAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_booleanAlgebraLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$heytingAlgebraLazy1 = (($GLOBALS['Data_Lazy_heytingAlgebraLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_heytingAlgebraLazy')))((($dictBooleanAlgebra)->HeytingAlgebra0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict'] ?? \Data\BooleanAlgebra\phpurs_eval_thunk('Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict')))((object)["HeytingAlgebra0" => (function() use ($heytingAlgebraLazy1) {
  $__fn = function($__dollar____unused) use ($heytingAlgebraLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $heytingAlgebraLazy1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_booleanAlgebraLazy'] = __NAMESPACE__ . '\\Data_Lazy_booleanAlgebraLazy';



