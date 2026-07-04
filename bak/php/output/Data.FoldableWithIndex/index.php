<?php

namespace Data\FoldableWithIndex;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
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
require_once __DIR__ . '/../Data.Semigroup/index.php';
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
      case 'Data_FoldableWithIndex_foldr8': $v = ($GLOBALS['Data_Foldable_foldrArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldrArray')); break;
      case 'Data_FoldableWithIndex_mapWithIndex': $v = ($GLOBALS['Data_FunctorWithIndex_mapWithIndexArray'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_mapWithIndexArray')); break;
      case 'Data_FoldableWithIndex_foldl8': $v = ($GLOBALS['Data_Foldable_foldlArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldlArray')); break;
      case 'Data_FoldableWithIndex_unwrap': $v = (($GLOBALS['Data_Newtype_unwrap'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_FoldableWithIndex_monoidEndo': $v = (($GLOBALS['Data_Monoid_Endo_monoidEndo'] ?? \Data\Monoid\Endo\phpurs_eval_thunk('Data_Monoid_Endo_monoidEndo')))(($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn'))); break;
      case 'Data_FoldableWithIndex_monoidDual': $v = (($GLOBALS['Data_Monoid_Dual_monoidDual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_monoidDual')))(($GLOBALS['Data_FoldableWithIndex_monoidEndo'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_monoidEndo'))); break;
      case 'Data_FoldableWithIndex_foldableWithIndexTuple': $v = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldrWithIndex" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$x = ($__case_2)->v1;
return ($f1)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), $x, $z1);
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
})(), "foldlWithIndex" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$x = ($__case_2)->v1;
return ($f1)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), $z1, $x);
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
})(), "foldMapWithIndex" => (function() {
  $__body = function($dictMonoid, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$x = ($__case_1)->v1;
return ($f1)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), $x);
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
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Foldable_foldableTuple'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableTuple'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FoldableWithIndex_foldableWithIndexMultiplicative': $v = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_foldr'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldr')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_foldl'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldl')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap8 = (($GLOBALS['Data_FoldableWithIndex_foldMap'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMap')))($dictMonoid);
    $__res = (function() use ($foldMap8) {
  $__fn = function($f) use ($foldMap8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap8)(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
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
    $__res = ($GLOBALS['Data_Foldable_foldableMultiplicative'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMultiplicative'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FoldableWithIndex_foldableWithIndexMaybe': $v = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_foldr1'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldr1')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_foldl1'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldl1')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap8 = (($GLOBALS['Data_FoldableWithIndex_foldMap1'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMap1')))($dictMonoid);
    $__res = (function() use ($foldMap8) {
  $__fn = function($f) use ($foldMap8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap8)(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
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
    $__res = ($GLOBALS['Data_Foldable_foldableMaybe'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMaybe'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FoldableWithIndex_foldableWithIndexLast': $v = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_foldr2'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldr2')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_foldl2'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldl2')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap8 = (($GLOBALS['Data_FoldableWithIndex_foldMap2'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMap2')))($dictMonoid);
    $__res = (function() use ($foldMap8) {
  $__fn = function($f) use ($foldMap8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap8)(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
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
    $__res = ($GLOBALS['Data_Foldable_foldableLast'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableLast'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FoldableWithIndex_foldableWithIndexIdentity': $v = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldrWithIndex" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), $x, $z1);
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
})(), "foldlWithIndex" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), $z1, $x);
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
})(), "foldMapWithIndex" => (function() {
  $__body = function($dictMonoid, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), $x);
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
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Foldable_foldableIdentity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableIdentity'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FoldableWithIndex_foldableWithIndexFirst': $v = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_foldr3'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldr3')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_foldl3'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldl3')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap8 = (($GLOBALS['Data_FoldableWithIndex_foldMap3'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMap3')))($dictMonoid);
    $__res = (function() use ($foldMap8) {
  $__fn = function($f) use ($foldMap8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap8)(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
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
    $__res = ($GLOBALS['Data_Foldable_foldableFirst'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableFirst'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FoldableWithIndex_foldableWithIndexEither': $v = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldrWithIndex" => (function() {
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
return ($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), $x, $z);
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
})(), "foldlWithIndex" => (function() {
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
return ($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), $z, $x);
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
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
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
return ($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), $x);
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
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Foldable_foldableEither'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableEither'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FoldableWithIndex_foldableWithIndexDual': $v = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_foldr4'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldr4')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_foldl4'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldl4')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap8 = (($GLOBALS['Data_FoldableWithIndex_foldMap4'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMap4')))($dictMonoid);
    $__res = (function() use ($foldMap8) {
  $__fn = function($f) use ($foldMap8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap8)(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
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
    $__res = ($GLOBALS['Data_Foldable_foldableDual'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableDual'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FoldableWithIndex_foldableWithIndexDisj': $v = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_foldr5'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldr5')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_foldl5'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldl5')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap8 = (($GLOBALS['Data_FoldableWithIndex_foldMap5'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMap5')))($dictMonoid);
    $__res = (function() use ($foldMap8) {
  $__fn = function($f) use ($foldMap8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap8)(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
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
    $__res = ($GLOBALS['Data_Foldable_foldableDisj'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableDisj'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FoldableWithIndex_foldableWithIndexConst': $v = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldrWithIndex" => (function() {
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
})(), "foldlWithIndex" => (function() {
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
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
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
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Foldable_foldableConst'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableConst'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FoldableWithIndex_foldableWithIndexConj': $v = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_foldr6'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldr6')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_foldl6'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldl6')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap8 = (($GLOBALS['Data_FoldableWithIndex_foldMap6'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMap6')))($dictMonoid);
    $__res = (function() use ($foldMap8) {
  $__fn = function($f) use ($foldMap8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap8)(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
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
    $__res = ($GLOBALS['Data_Foldable_foldableConj'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableConj'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FoldableWithIndex_foldableWithIndexAdditive': $v = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_foldr7'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldr7')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_foldl7'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldl7')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap8 = (($GLOBALS['Data_FoldableWithIndex_foldMap7'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMap7')))($dictMonoid);
    $__res = (function() use ($foldMap8) {
  $__fn = function($f) use ($foldMap8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap8)(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
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
    $__res = ($GLOBALS['Data_Foldable_foldableAdditive'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableAdditive'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FoldableWithIndex_foldableWithIndexArray': $v = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldrWithIndex" => (function() {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))((($GLOBALS['Data_FoldableWithIndex_foldr8'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldr8')))((function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$i = ($__case_0)->v0;
$x = ($__case_0)->v1;
return (function() use ($f, $i, $x) {
  $__fn = function($y) use ($f, $i, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)($i, $x, $y);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $z), (($GLOBALS['Data_FoldableWithIndex_mapWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_mapWithIndex')))(($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple'))));
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
    $__res = (($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))((($GLOBALS['Data_FoldableWithIndex_foldl8'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldl8')))((function() use ($f) {
  $__body = function($y, $v) use ($f) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$i = ($__case_0)->v0;
$x = ($__case_0)->v1;
return ($f)($i, $y, $x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($y, $v = null) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($y, &$__fn) { return $__fn($y, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($y, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $z), (($GLOBALS['Data_FoldableWithIndex_mapWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_mapWithIndex')))(($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple'))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_foldMapWithIndexDefaultR'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMapWithIndexDefaultR')))(($GLOBALS['Data_FoldableWithIndex_foldableWithIndexArray'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexArray')), $dictMonoid);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'));
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


// Data_FoldableWithIndex_compose
function Data_FoldableWithIndex_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_compose';
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
$GLOBALS['Data_FoldableWithIndex_compose'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_compose';

// Data_FoldableWithIndex_foldr
function Data_FoldableWithIndex_foldr($f, $z = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldr';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
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
    $__res = $__body($f, $z, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldr'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldr';

// Data_FoldableWithIndex_foldl
function Data_FoldableWithIndex_foldl($f, $z = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldl';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
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
    $__res = $__body($f, $z, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldl'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldl';

// Data_FoldableWithIndex_foldMap
function Data_FoldableWithIndex_foldMap($dictMonoid, $f = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldMap';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, $__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, $__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
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
    $__res = $__body($dictMonoid, $f, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldMap'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldMap';

// Data_FoldableWithIndex_foldr1
function Data_FoldableWithIndex_foldr1($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldr1';
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
    $__res = $__body($v, $v1, $v2);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldr1'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldr1';

// Data_FoldableWithIndex_foldl1
function Data_FoldableWithIndex_foldl1($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldl1';
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
    $__res = $__body($v, $v1, $v2);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldl1'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldl1';

// Data_FoldableWithIndex_foldMap1
function Data_FoldableWithIndex_foldMap1($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldMap1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldMap1'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldMap1';

// Data_FoldableWithIndex_foldr2
function Data_FoldableWithIndex_foldr2($f, $z = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldr2';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return (($GLOBALS['Data_Foldable_foldr1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldr1')))($f1, $z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $z, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldr2'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldr2';

// Data_FoldableWithIndex_foldl2
function Data_FoldableWithIndex_foldl2($f, $z = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldl2';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return (($GLOBALS['Data_Foldable_foldl1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl1')))($f1, $z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $z, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldl2'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldl2';

// Data_FoldableWithIndex_foldMap2
function Data_FoldableWithIndex_foldMap2($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldMap2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap2 = (($GLOBALS['Data_Foldable_foldMap1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldMap1')))($dictMonoid);
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldMap2'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldMap2';

// Data_FoldableWithIndex_foldr3
function Data_FoldableWithIndex_foldr3($f, $z = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldr3';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return (($GLOBALS['Data_Foldable_foldr1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldr1')))($f1, $z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $z, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldr3'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldr3';

// Data_FoldableWithIndex_foldl3
function Data_FoldableWithIndex_foldl3($f, $z = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldl3';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return (($GLOBALS['Data_Foldable_foldl1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl1')))($f1, $z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $z, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldl3'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldl3';

// Data_FoldableWithIndex_foldMap3
function Data_FoldableWithIndex_foldMap3($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldMap3';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap2 = (($GLOBALS['Data_Foldable_foldMap1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldMap1')))($dictMonoid);
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldMap3'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldMap3';

// Data_FoldableWithIndex_foldr4
function Data_FoldableWithIndex_foldr4($f, $z = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldr4';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
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
    $__res = $__body($f, $z, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldr4'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldr4';

// Data_FoldableWithIndex_foldl4
function Data_FoldableWithIndex_foldl4($f, $z = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldl4';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
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
    $__res = $__body($f, $z, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldl4'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldl4';

// Data_FoldableWithIndex_foldMap4
function Data_FoldableWithIndex_foldMap4($dictMonoid, $f = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldMap4';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, $__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, $__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
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
    $__res = $__body($dictMonoid, $f, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldMap4'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldMap4';

// Data_FoldableWithIndex_foldr5
function Data_FoldableWithIndex_foldr5($f, $z = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldr5';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
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
    $__res = $__body($f, $z, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldr5'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldr5';

// Data_FoldableWithIndex_foldl5
function Data_FoldableWithIndex_foldl5($f, $z = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldl5';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
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
    $__res = $__body($f, $z, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldl5'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldl5';

// Data_FoldableWithIndex_foldMap5
function Data_FoldableWithIndex_foldMap5($dictMonoid, $f = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldMap5';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, $__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, $__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
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
    $__res = $__body($dictMonoid, $f, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldMap5'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldMap5';

// Data_FoldableWithIndex_foldr6
function Data_FoldableWithIndex_foldr6($f, $z = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldr6';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
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
    $__res = $__body($f, $z, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldr6'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldr6';

// Data_FoldableWithIndex_foldl6
function Data_FoldableWithIndex_foldl6($f, $z = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldl6';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
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
    $__res = $__body($f, $z, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldl6'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldl6';

// Data_FoldableWithIndex_foldMap6
function Data_FoldableWithIndex_foldMap6($dictMonoid, $f = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldMap6';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, $__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, $__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
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
    $__res = $__body($dictMonoid, $f, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldMap6'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldMap6';

// Data_FoldableWithIndex_foldr7
function Data_FoldableWithIndex_foldr7($f, $z = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldr7';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
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
    $__res = $__body($f, $z, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldr7'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldr7';

// Data_FoldableWithIndex_foldl7
function Data_FoldableWithIndex_foldl7($f, $z = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldl7';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, $__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
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
    $__res = $__body($f, $z, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldl7'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldl7';

// Data_FoldableWithIndex_foldMap7
function Data_FoldableWithIndex_foldMap7($dictMonoid, $f = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldMap7';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, $__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, $__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
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
    $__res = $__body($dictMonoid, $f, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldMap7'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldMap7';







// Data_FoldableWithIndex_FoldableWithIndex$Dict
function Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict';

// Data_FoldableWithIndex_foldrWithIndex
function Data_FoldableWithIndex_foldrWithIndex($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldrWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldrWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldrWithIndex'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldrWithIndex';

// Data_FoldableWithIndex_traverseWithIndex_
function Data_FoldableWithIndex_traverseWithIndex_($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_traverseWithIndex_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applySecond = (($GLOBALS['Control_Apply_applySecond'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_applySecond')))((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))($dictApplicative);
    $__res = (function() use ($applySecond, $pure) {
  $__fn = function($dictFoldableWithIndex) use ($applySecond, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldrWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldrWithIndex')))($dictFoldableWithIndex);
    $__res = (function() use ($foldrWithIndex1, $applySecond, $pure) {
  $__fn = function($f) use ($foldrWithIndex1, $applySecond, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldrWithIndex1)((function() use ($applySecond, $f) {
  $__fn = function($i) use ($applySecond, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))($applySecond, ($f)($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($pure)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
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
$GLOBALS['Data_FoldableWithIndex_traverseWithIndex_'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_traverseWithIndex_';

// Data_FoldableWithIndex_forWithIndex_
function Data_FoldableWithIndex_forWithIndex_($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_forWithIndex_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverseWithIndex_1 = (($GLOBALS['Data_FoldableWithIndex_traverseWithIndex_'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_traverseWithIndex_')))($dictApplicative);
    $__res = (function() use ($traverseWithIndex_1) {
  $__fn = function($dictFoldableWithIndex) use ($traverseWithIndex_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($traverseWithIndex_1)($dictFoldableWithIndex));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_forWithIndex_'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_forWithIndex_';

// Data_FoldableWithIndex_foldrDefault
function Data_FoldableWithIndex_foldrDefault($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldrDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldrWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldrWithIndex')))($dictFoldableWithIndex);
    $__res = (function() use ($foldrWithIndex1) {
  $__fn = function($f) use ($foldrWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldrWithIndex1)((($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldrDefault'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldrDefault';

// Data_FoldableWithIndex_foldlWithIndex
function Data_FoldableWithIndex_foldlWithIndex($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldlWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldlWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldlWithIndex'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldlWithIndex';

// Data_FoldableWithIndex_foldlDefault
function Data_FoldableWithIndex_foldlDefault($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldlDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldlWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldlWithIndex')))($dictFoldableWithIndex);
    $__res = (function() use ($foldlWithIndex1) {
  $__fn = function($f) use ($foldlWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldlWithIndex1)((($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldlDefault'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldlDefault';













// Data_FoldableWithIndex_foldWithIndexM
function Data_FoldableWithIndex_foldWithIndexM($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldWithIndexM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldlWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldlWithIndex')))($dictFoldableWithIndex);
    $__res = (function() use ($foldlWithIndex1) {
  $__fn = function($dictMonad) use ($foldlWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($foldlWithIndex1, $bind, $pure) {
  $__fn = function($f, $a0 = null) use ($foldlWithIndex1, $bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a0) use ($f, &$__fn) { return $__fn($f, $a0); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($foldlWithIndex1)((function() use ($bind, $f) {
  $__fn = function($i, $ma = null, $b = null) use ($bind, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($b) use ($i, $ma, &$__fn) { return $__fn($i, $ma, $b); };
    if ($__num === 1) return function($ma, $b = null) use ($i, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $ma, $b);
      if ($__num2 === 1) return function($b) use ($i, $ma, &$__fn) { return $__fn($i, $ma, $b); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($bind)($ma, (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($f)($i), $b));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), ($pure)($a0));
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
$GLOBALS['Data_FoldableWithIndex_foldWithIndexM'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldWithIndexM';

// Data_FoldableWithIndex_foldMapWithIndexDefaultR
function Data_FoldableWithIndex_foldMapWithIndexDefaultR($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldMapWithIndexDefaultR';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldrWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldrWithIndex')))($dictFoldableWithIndex);
    $__res = (function() use ($foldrWithIndex1) {
  $__fn = function($dictMonoid) use ($foldrWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
    $__res = (function() use ($foldrWithIndex1, $append, $mempty) {
  $__fn = function($f) use ($foldrWithIndex1, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldrWithIndex1)((function() use ($append, $f) {
  $__fn = function($i, $x = null, $acc = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($acc) use ($i, $x, &$__fn) { return $__fn($i, $x, $acc); };
    if ($__num === 1) return function($x, $acc = null) use ($i, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $x, $acc);
      if ($__num2 === 1) return function($acc) use ($i, $x, &$__fn) { return $__fn($i, $x, $acc); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($append)(($f)($i, $x), $acc);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
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
$GLOBALS['Data_FoldableWithIndex_foldMapWithIndexDefaultR'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldMapWithIndexDefaultR';


// Data_FoldableWithIndex_foldMapWithIndexDefaultL
function Data_FoldableWithIndex_foldMapWithIndexDefaultL($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldMapWithIndexDefaultL';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldlWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldlWithIndex')))($dictFoldableWithIndex);
    $__res = (function() use ($foldlWithIndex1) {
  $__fn = function($dictMonoid) use ($foldlWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
    $__res = (function() use ($foldlWithIndex1, $append, $mempty) {
  $__fn = function($f) use ($foldlWithIndex1, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldlWithIndex1)((function() use ($append, $f) {
  $__fn = function($i, $acc = null, $x = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($x) use ($i, $acc, &$__fn) { return $__fn($i, $acc, $x); };
    if ($__num === 1) return function($acc, $x = null) use ($i, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $acc, $x);
      if ($__num2 === 1) return function($x) use ($i, $acc, &$__fn) { return $__fn($i, $acc, $x); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($append)($acc, ($f)($i, $x));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
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
$GLOBALS['Data_FoldableWithIndex_foldMapWithIndexDefaultL'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldMapWithIndexDefaultL';

// Data_FoldableWithIndex_foldMapWithIndex
function Data_FoldableWithIndex_foldMapWithIndex($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldMapWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldMapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldMapWithIndex';

// Data_FoldableWithIndex_foldableWithIndexApp
function Data_FoldableWithIndex_foldableWithIndexApp($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldableWithIndexApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldrWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldrWithIndex')))($dictFoldableWithIndex);
$foldlWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldlWithIndex')))($dictFoldableWithIndex);
$foldMapWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMapWithIndex')))($dictFoldableWithIndex);
$foldableApp = (($GLOBALS['Data_Foldable_foldableApp'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableApp')))((($dictFoldableWithIndex)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldrWithIndex" => (function() use ($foldrWithIndex1) {
  $__body = function($f, $z, $v) use ($foldrWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($foldrWithIndex1)($f1, $z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldrWithIndex1, $__body, &$__fn) {
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
})(), "foldlWithIndex" => (function() use ($foldlWithIndex1) {
  $__body = function($f, $z, $v) use ($foldlWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($foldlWithIndex1)($f1, $z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldlWithIndex1, $__body, &$__fn) {
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
})(), "foldMapWithIndex" => (function() use ($foldMapWithIndex1) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex2 = ($foldMapWithIndex1)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex2) {
  $__body = function($f, $v) use ($foldMapWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($foldMapWithIndex2)($f1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMapWithIndex2, $__body, &$__fn) {
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
})(), "Foldable0" => (function() use ($foldableApp) {
  $__fn = function($__dollar____unused) use ($foldableApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableApp;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldableWithIndexApp'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldableWithIndexApp';

// Data_FoldableWithIndex_foldableWithIndexCompose
function Data_FoldableWithIndex_foldableWithIndexCompose($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldableWithIndexCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldrWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldrWithIndex')))($dictFoldableWithIndex);
$foldlWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldlWithIndex')))($dictFoldableWithIndex);
$foldMapWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMapWithIndex')))($dictFoldableWithIndex);
$foldableCompose = (($GLOBALS['Data_Foldable_foldableCompose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableCompose')))((($dictFoldableWithIndex)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($foldableCompose, $foldrWithIndex1, $foldlWithIndex1, $foldMapWithIndex1) {
  $__fn = function($dictFoldableWithIndex1) use ($foldableCompose, $foldrWithIndex1, $foldlWithIndex1, $foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldrWithIndex2 = (($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldrWithIndex')))($dictFoldableWithIndex1);
$foldlWithIndex2 = (($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldlWithIndex')))($dictFoldableWithIndex1);
$foldMapWithIndex2 = (($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMapWithIndex')))($dictFoldableWithIndex1);
$foldableCompose1 = ($foldableCompose)((($dictFoldableWithIndex1)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldrWithIndex" => (function() use ($foldrWithIndex1, $foldrWithIndex2) {
  $__body = function($f, $i, $v) use ($foldrWithIndex1, $foldrWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
return ($foldrWithIndex1)((function() use ($foldrWithIndex2, $f1) {
  $__fn = function($a) use ($foldrWithIndex2, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($foldrWithIndex2)((($GLOBALS['Data_Tuple_curry'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_curry')))($f1, $a)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $i1, $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldrWithIndex1, $foldrWithIndex2, $__body, &$__fn) {
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
})(), "foldlWithIndex" => (function() use ($foldlWithIndex1, $foldlWithIndex2) {
  $__body = function($f, $i, $v) use ($foldlWithIndex1, $foldlWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
return ($foldlWithIndex1)((($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))($foldlWithIndex2, (($GLOBALS['Data_Tuple_curry'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_curry')))($f1)), $i1, $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldlWithIndex1, $foldlWithIndex2, $__body, &$__fn) {
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
})(), "foldMapWithIndex" => (function() use ($foldMapWithIndex1, $foldMapWithIndex2) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, $foldMapWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex3 = ($foldMapWithIndex1)($dictMonoid);
$foldMapWithIndex4 = ($foldMapWithIndex2)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex3, $foldMapWithIndex4) {
  $__body = function($f, $v) use ($foldMapWithIndex3, $foldMapWithIndex4) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($foldMapWithIndex3)((($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))($foldMapWithIndex4, (($GLOBALS['Data_Tuple_curry'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_curry')))($f1)), $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMapWithIndex3, $foldMapWithIndex4, $__body, &$__fn) {
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
})(), "Foldable0" => (function() use ($foldableCompose1) {
  $__fn = function($__dollar____unused) use ($foldableCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableCompose1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldableWithIndexCompose'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldableWithIndexCompose';

// Data_FoldableWithIndex_foldableWithIndexCoproduct
function Data_FoldableWithIndex_foldableWithIndexCoproduct($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldableWithIndexCoproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldrWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldrWithIndex')))($dictFoldableWithIndex);
$foldlWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldlWithIndex')))($dictFoldableWithIndex);
$foldMapWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMapWithIndex')))($dictFoldableWithIndex);
$foldableCoproduct = (($GLOBALS['Data_Foldable_foldableCoproduct'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableCoproduct')))((($dictFoldableWithIndex)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($foldableCoproduct, $foldrWithIndex1, $foldlWithIndex1, $foldMapWithIndex1) {
  $__fn = function($dictFoldableWithIndex1) use ($foldableCoproduct, $foldrWithIndex1, $foldlWithIndex1, $foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldrWithIndex2 = (($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldrWithIndex')))($dictFoldableWithIndex1);
$foldlWithIndex2 = (($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldlWithIndex')))($dictFoldableWithIndex1);
$foldMapWithIndex2 = (($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMapWithIndex')))($dictFoldableWithIndex1);
$foldableCoproduct1 = ($foldableCoproduct)((($dictFoldableWithIndex1)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldrWithIndex" => (function() use ($foldrWithIndex1, $foldrWithIndex2) {
  $__fn = function($f, $z = null) use ($foldrWithIndex1, $foldrWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Functor_Coproduct_coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_coproduct')))(($foldrWithIndex1)((($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))($f, ($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left'))), $z), ($foldrWithIndex2)((($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))($f, ($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right'))), $z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use ($foldlWithIndex1, $foldlWithIndex2) {
  $__fn = function($f, $z = null) use ($foldlWithIndex1, $foldlWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Functor_Coproduct_coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_coproduct')))(($foldlWithIndex1)((($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))($f, ($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left'))), $z), ($foldlWithIndex2)((($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))($f, ($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right'))), $z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($foldMapWithIndex1, $foldMapWithIndex2) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, $foldMapWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex3 = ($foldMapWithIndex1)($dictMonoid);
$foldMapWithIndex4 = ($foldMapWithIndex2)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex3, $foldMapWithIndex4) {
  $__fn = function($f) use ($foldMapWithIndex3, $foldMapWithIndex4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Functor_Coproduct_coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_coproduct')))(($foldMapWithIndex3)((($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))($f, ($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')))), ($foldMapWithIndex4)((($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))($f, ($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() use ($foldableCoproduct1) {
  $__fn = function($__dollar____unused) use ($foldableCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableCoproduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldableWithIndexCoproduct'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldableWithIndexCoproduct';

// Data_FoldableWithIndex_foldableWithIndexProduct
function Data_FoldableWithIndex_foldableWithIndexProduct($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldableWithIndexProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldrWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldrWithIndex')))($dictFoldableWithIndex);
$foldlWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldlWithIndex')))($dictFoldableWithIndex);
$foldMapWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMapWithIndex')))($dictFoldableWithIndex);
$foldableProduct = (($GLOBALS['Data_Foldable_foldableProduct'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableProduct')))((($dictFoldableWithIndex)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($foldableProduct, $foldrWithIndex1, $foldlWithIndex1, $foldMapWithIndex1) {
  $__fn = function($dictFoldableWithIndex1) use ($foldableProduct, $foldrWithIndex1, $foldlWithIndex1, $foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldrWithIndex2 = (($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldrWithIndex')))($dictFoldableWithIndex1);
$foldlWithIndex2 = (($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldlWithIndex')))($dictFoldableWithIndex1);
$foldMapWithIndex2 = (($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMapWithIndex')))($dictFoldableWithIndex1);
$foldableProduct1 = ($foldableProduct)((($dictFoldableWithIndex1)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldrWithIndex" => (function() use ($foldrWithIndex1, $foldrWithIndex2) {
  $__body = function($f, $z, $v) use ($foldrWithIndex1, $foldrWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->v0;
$ga = ($__case_2)->v1;
return ($foldrWithIndex1)((($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))($f1, ($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left'))), ($foldrWithIndex2)((($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))($f1, ($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right'))), $z1, $ga), $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldrWithIndex1, $foldrWithIndex2, $__body, &$__fn) {
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
})(), "foldlWithIndex" => (function() use ($foldlWithIndex2, $foldlWithIndex1) {
  $__body = function($f, $z, $v) use ($foldlWithIndex2, $foldlWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->v0;
$ga = ($__case_2)->v1;
return ($foldlWithIndex2)((($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))($f1, ($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right'))), ($foldlWithIndex1)((($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))($f1, ($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left'))), $z1, $fa), $ga);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldlWithIndex2, $foldlWithIndex1, $__body, &$__fn) {
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
})(), "foldMapWithIndex" => (function() use ($foldMapWithIndex1, $foldMapWithIndex2) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, $foldMapWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$foldMapWithIndex3 = ($foldMapWithIndex1)($dictMonoid);
$foldMapWithIndex4 = ($foldMapWithIndex2)($dictMonoid);
    $__res = (function() use ($append, $foldMapWithIndex3, $foldMapWithIndex4) {
  $__body = function($f, $v) use ($append, $foldMapWithIndex3, $foldMapWithIndex4) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$fa = ($__case_1)->v0;
$ga = ($__case_1)->v1;
return ($append)(($foldMapWithIndex3)((($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))($f1, ($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left'))), $fa), ($foldMapWithIndex4)((($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))($f1, ($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right'))), $ga));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($append, $foldMapWithIndex3, $foldMapWithIndex4, $__body, &$__fn) {
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
})(), "Foldable0" => (function() use ($foldableProduct1) {
  $__fn = function($__dollar____unused) use ($foldableProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableProduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldableWithIndexProduct'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldableWithIndexProduct';

// Data_FoldableWithIndex_foldlWithIndexDefault
function Data_FoldableWithIndex_foldlWithIndexDefault($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldlWithIndexDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMapWithIndex')))($dictFoldableWithIndex, ($GLOBALS['Data_FoldableWithIndex_monoidDual'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_monoidDual')));
    $__res = (function() use ($foldMapWithIndex1) {
  $__fn = function($c, $u = null, $xs = null) use ($foldMapWithIndex1, &$__fn) {
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
    $__res = (($GLOBALS['Data_FoldableWithIndex_unwrap'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_unwrap')))((($GLOBALS['Data_FoldableWithIndex_unwrap'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_unwrap')))(($foldMapWithIndex1)((function() use ($c) {
  $__fn = function($i) use ($c, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))(($GLOBALS['Data_Monoid_Dual_Dual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_Dual')), (($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))(($GLOBALS['Data_Monoid_Endo_Endo'] ?? \Data\Monoid\Endo\phpurs_eval_thunk('Data_Monoid_Endo_Endo')), (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($c)($i))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs)), $u);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldlWithIndexDefault'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldlWithIndexDefault';

// Data_FoldableWithIndex_foldrWithIndexDefault
function Data_FoldableWithIndex_foldrWithIndexDefault($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldrWithIndexDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMapWithIndex')))($dictFoldableWithIndex, ($GLOBALS['Data_FoldableWithIndex_monoidEndo'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_monoidEndo')));
    $__res = (function() use ($foldMapWithIndex1) {
  $__fn = function($c, $u = null, $xs = null) use ($foldMapWithIndex1, &$__fn) {
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
    $__res = (($GLOBALS['Data_FoldableWithIndex_unwrap'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_unwrap')))(($foldMapWithIndex1)((function() use ($c) {
  $__fn = function($i) use ($c, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))(($GLOBALS['Data_Monoid_Endo_Endo'] ?? \Data\Monoid\Endo\phpurs_eval_thunk('Data_Monoid_Endo_Endo')), ($c)($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs), $u);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldrWithIndexDefault'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldrWithIndexDefault';

// Data_FoldableWithIndex_surroundMapWithIndex
function Data_FoldableWithIndex_surroundMapWithIndex($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_surroundMapWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMapWithIndex')))($dictFoldableWithIndex, ($GLOBALS['Data_FoldableWithIndex_monoidEndo'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_monoidEndo')));
    $__res = (function() use ($foldMapWithIndex1) {
  $__fn = function($dictSemigroup) use ($foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))($dictSemigroup);
    $__res = (function() use ($append, $foldMapWithIndex1) {
  $__fn = function($d, $t = null, $f = null) use ($append, $foldMapWithIndex1, &$__fn) {
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
  $__fn = function($i, $a = null) use ($append, $d, $t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($i, &$__fn) { return $__fn($i, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Monoid_Endo_Endo'] ?? \Data\Monoid\Endo\phpurs_eval_thunk('Data_Monoid_Endo_Endo')))((function() use ($append, $d, $t, $i, $a) {
  $__fn = function($m) use ($append, $d, $t, $i, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($append)($d, ($append)(($t)($i, $a), $m));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (($GLOBALS['Data_FoldableWithIndex_unwrap'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_unwrap')))(($foldMapWithIndex1)($joined, $f), $d);
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
$GLOBALS['Data_FoldableWithIndex_surroundMapWithIndex'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_surroundMapWithIndex';

// Data_FoldableWithIndex_foldMapDefault
function Data_FoldableWithIndex_foldMapDefault($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldMapDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMapWithIndex')))($dictFoldableWithIndex);
    $__res = (function() use ($foldMapWithIndex1) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex2 = ($foldMapWithIndex1)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex2) {
  $__fn = function($f) use ($foldMapWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMapWithIndex2)((($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))($f));
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
$GLOBALS['Data_FoldableWithIndex_foldMapDefault'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldMapDefault';

// Data_FoldableWithIndex_findWithIndex
function Data_FoldableWithIndex_findWithIndex($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_findWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldlWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldlWithIndex')))($dictFoldableWithIndex);
    $__res = (function() use ($foldlWithIndex1) {
  $__fn = function($p) use ($foldlWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_1)->tag === "Nothing")) {
$i = $__case_0;
$x = $__case_2;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
$r = $__case_1;
return $r;
} else {
throw new \Exception("Pattern match failure");
};
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
})();
    $__res = ($foldlWithIndex1)($go, ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_findWithIndex'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_findWithIndex';

// Data_FoldableWithIndex_findMapWithIndex
function Data_FoldableWithIndex_findMapWithIndex($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_findMapWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldlWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldlWithIndex')))($dictFoldableWithIndex);
    $__res = (function() use ($foldlWithIndex1) {
  $__fn = function($f) use ($foldlWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($f) {
  $__body = function($v, $v1, $v2) use ($f) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_1)->tag === "Nothing")) {
$i = $__case_0;
$x = $__case_2;
return ($f)($i, $x);
} else {
if (true) {
$r = $__case_1;
return $r;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($f, $__body, &$__fn) {
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
})();
    $__res = ($foldlWithIndex1)($go, ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_findMapWithIndex'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_findMapWithIndex';

// Data_FoldableWithIndex_anyWithIndex
function Data_FoldableWithIndex_anyWithIndex($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_anyWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMapWithIndex')))($dictFoldableWithIndex);
    $__res = (function() use ($foldMapWithIndex1) {
  $__fn = function($dictHeytingAlgebra) use ($foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex2 = ($foldMapWithIndex1)((($GLOBALS['Data_Monoid_Disj_monoidDisj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_monoidDisj')))($dictHeytingAlgebra));
    $__res = (function() use ($foldMapWithIndex2) {
  $__fn = function($t) use ($foldMapWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))(($GLOBALS['Data_FoldableWithIndex_unwrap'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_unwrap')), ($foldMapWithIndex2)((function() use ($t) {
  $__fn = function($i) use ($t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))(($GLOBALS['Data_Monoid_Disj_Disj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_Disj')), ($t)($i));
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
$GLOBALS['Data_FoldableWithIndex_anyWithIndex'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_anyWithIndex';

// Data_FoldableWithIndex_allWithIndex
function Data_FoldableWithIndex_allWithIndex($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_allWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex1 = (($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMapWithIndex')))($dictFoldableWithIndex);
    $__res = (function() use ($foldMapWithIndex1) {
  $__fn = function($dictHeytingAlgebra) use ($foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex2 = ($foldMapWithIndex1)((($GLOBALS['Data_Monoid_Conj_monoidConj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_monoidConj')))($dictHeytingAlgebra));
    $__res = (function() use ($foldMapWithIndex2) {
  $__fn = function($t) use ($foldMapWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))(($GLOBALS['Data_FoldableWithIndex_unwrap'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_unwrap')), ($foldMapWithIndex2)((function() use ($t) {
  $__fn = function($i) use ($t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose')))(($GLOBALS['Data_Monoid_Conj_Conj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_Conj')), ($t)($i));
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
$GLOBALS['Data_FoldableWithIndex_allWithIndex'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_allWithIndex';

