<?php

namespace Data\Interval;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifoldable/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Bitraversable/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Interval/index.php';
require_once __DIR__ . '/../Data.Interval.Duration/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
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
      case 'Data_Interval_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Interval_show': $v = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))((($GLOBALS['Data_Maybe_showMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_showMaybe')))(($GLOBALS['Data_Show_showInt'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showInt')))); break;
      case 'Data_Interval_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Interval_eq': $v = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))((($GLOBALS['Data_Maybe_eqMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_eqMaybe')))(($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt')))); break;
      case 'Data_Interval_compare': $v = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))((($GLOBALS['Data_Maybe_ordMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_ordMaybe')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt')))); break;
      case 'Data_Interval_foldableInterval': $v = (($GLOBALS['Data_Foldable_Foldable__dollar__Dict'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_Foldable__dollar__Dict')))((object)["foldl" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "StartEnd")) {
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
$y = ($__case_2)->v1;
return ($f)(($f)($z, $x), $y);
} else {
if ((($__case_2)->tag === "DurationEnd")) {
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v1;
return ($f)($z, $x);
} else {
if ((($__case_2)->tag === "StartDuration")) {
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
return ($f)($z, $x);
} else {
if (true) {
$z = $__case_1;
return $z;
} else {
throw new \Exception("Pattern match failure");
};
};
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
})(), "foldr" => (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Foldable_foldrDefault'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldrDefault')))(($GLOBALS['Data_Interval_foldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldableInterval')), $x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Foldable_foldMapDefaultL'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldMapDefaultL')))(($GLOBALS['Data_Interval_foldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldableInterval')), $dictMonoid);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Interval_foldableRecurringInterval': $v = (($GLOBALS['Data_Foldable_Foldable__dollar__Dict'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_Foldable__dollar__Dict')))((object)["foldl" => (function() {
  $__fn = function($f, $i = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($i) use ($f, &$__fn) { return $__fn($f, $i); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Interval_compose'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_compose')))((($GLOBALS['Data_Interval_foldl'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldl')))($f, $i), ($GLOBALS['Data_Interval_interval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_interval')));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldr" => (function() {
  $__fn = function($f, $i = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($i) use ($f, &$__fn) { return $__fn($f, $i); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Interval_compose'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_compose')))((($GLOBALS['Data_Interval_foldr'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldr')))($f, $i), ($GLOBALS['Data_Interval_interval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_interval')));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Foldable_foldMapDefaultL'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldMapDefaultL')))(($GLOBALS['Data_Interval_foldableRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldableRecurringInterval')), $dictMonoid);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Interval_bifunctorInterval': $v = (($GLOBALS['Data_Bifunctor_Bifunctor__dollar__Dict'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_Bifunctor__dollar__Dict')))((object)["bimap" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "StartEnd":
$f = $__case_1;
$x = ($__case_2)->v0;
$y = ($__case_2)->v1;
return (($GLOBALS['Data_Interval_StartEnd'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_StartEnd')))(($f)($x), ($f)($y));
break;
case "DurationEnd":
$g = $__case_0;
$f = $__case_1;
$d = ($__case_2)->v0;
$x = ($__case_2)->v1;
return (($GLOBALS['Data_Interval_DurationEnd'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_DurationEnd')))(($g)($d), ($f)($x));
break;
case "StartDuration":
$g = $__case_0;
$f = $__case_1;
$x = ($__case_2)->v0;
$d = ($__case_2)->v1;
return (($GLOBALS['Data_Interval_StartDuration'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_StartDuration')))(($f)($x), ($g)($d));
break;
case "DurationOnly":
$g = $__case_0;
$d = ($__case_2)->v0;
return (($GLOBALS['Data_Interval_DurationOnly'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_DurationOnly')))(($g)($d));
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
})()]); break;
      case 'Data_Interval_bifunctorRecurringInterval': $v = (($GLOBALS['Data_Bifunctor_Bifunctor__dollar__Dict'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_Bifunctor__dollar__Dict')))((object)["bimap" => (function() {
  $__body = function($f, $g, $v) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "RecurringInterval":
$f1 = $__case_0;
$g1 = $__case_1;
$n = ($__case_2)->v0;
$i = ($__case_2)->v1;
return (($GLOBALS['Data_Interval_RecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_RecurringInterval')))($n, (($GLOBALS['Data_Interval_bimap'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bimap')))($f1, $g1, $i));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $g = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $g, &$__fn) { return $__fn($f, $g, $v); };
    if ($__num === 1) return function($g, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $v);
      if ($__num2 === 1) return function($v) use ($f, $g, &$__fn) { return $__fn($f, $g, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $g, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Interval_functorInterval': $v = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (($GLOBALS['Data_Interval_bimap'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bimap')))((function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())]); break;
      case 'Data_Interval_map': $v = (($GLOBALS['Data_Interval_bimap'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bimap')))((($GLOBALS['Control_Category_identity'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_identity')))(($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))); break;
      case 'Data_Interval_extendInterval': $v = (($GLOBALS['Control_Extend_Extend__dollar__Dict'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_Extend__dollar__Dict')))((object)["extend" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "StartEnd":
$f = $__case_0;
$a = $__case_1;
return (($GLOBALS['Data_Interval_StartEnd'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_StartEnd')))(($f)($a), ($f)($a));
break;
case "DurationEnd":
$f = $__case_0;
$a = $__case_1;
$d = ($__case_1)->v0;
return (($GLOBALS['Data_Interval_DurationEnd'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_DurationEnd')))($d, ($f)($a));
break;
case "StartDuration":
$f = $__case_0;
$a = $__case_1;
$d = ($__case_1)->v1;
return (($GLOBALS['Data_Interval_StartDuration'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_StartDuration')))(($f)($a), $d);
break;
case "DurationOnly":
$d = ($__case_1)->v0;
return (($GLOBALS['Data_Interval_DurationOnly'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_DurationOnly')))($d);
break;
default:
throw new \Exception("Pattern match failure");
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
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Interval_functorInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_functorInterval'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Interval_functorRecurringInterval': $v = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "RecurringInterval":
$f1 = $__case_0;
$n = ($__case_1)->v0;
$i = ($__case_1)->v1;
return (($GLOBALS['Data_Interval_RecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_RecurringInterval')))($n, (($GLOBALS['Data_Interval_map'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_map')))($f1, $i));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Interval_extendRecurringInterval': $v = (($GLOBALS['Control_Extend_Extend__dollar__Dict'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_Extend__dollar__Dict')))((object)["extend" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "RecurringInterval":
$f1 = $__case_0;
$a = $__case_1;
$n = ($__case_1)->v0;
$i = ($__case_1)->v1;
return (($GLOBALS['Data_Interval_RecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_RecurringInterval')))($n, (($GLOBALS['Data_Interval_extend'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_extend')))((($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($f1)($a)), $i));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Interval_functorRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_functorRecurringInterval'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Interval_traversableInterval': $v = (($GLOBALS['Data_Traversable_Traversable__dollar__Dict'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_Traversable__dollar__Dict')))((object)["traverse" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Apply0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($Apply0);
$Functor0 = (($Apply0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($Functor0);
$mapFlipped = (($GLOBALS['Data_Functor_mapFlipped'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_mapFlipped')))($Functor0);
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))($dictApplicative);
    $__res = (function() use ($apply, $map1, $mapFlipped, $pure) {
  $__body = function($v, $v1) use ($apply, $map1, $mapFlipped, $pure) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "StartEnd":
$f = $__case_0;
$x = ($__case_1)->v0;
$y = ($__case_1)->v1;
return ($apply)(($map1)(($GLOBALS['Data_Interval_StartEnd'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_StartEnd')), ($f)($x)), ($f)($y));
break;
case "DurationEnd":
$f = $__case_0;
$d = ($__case_1)->v0;
$x = ($__case_1)->v1;
return ($mapFlipped)(($f)($x), (($GLOBALS['Data_Interval_DurationEnd'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_DurationEnd')))($d));
break;
case "StartDuration":
$f = $__case_0;
$x = ($__case_1)->v0;
$d = ($__case_1)->v1;
return ($mapFlipped)(($f)($x), (function() use ($d) {
  $__fn = function($v2) use ($d, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Interval_StartDuration'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_StartDuration')))($v2, $d);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
case "DurationOnly":
$d = ($__case_1)->v0;
return ($pure)((($GLOBALS['Data_Interval_DurationOnly'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_DurationOnly')))($d));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($apply, $map1, $mapFlipped, $pure, $__body, &$__fn) {
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
})(), "sequence" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Traversable_sequenceDefault'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_sequenceDefault')))(($GLOBALS['Data_Interval_traversableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_traversableInterval')), $dictApplicative);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Interval_functorInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_functorInterval'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Interval_foldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldableInterval'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Interval_traversableRecurringInterval': $v = (($GLOBALS['Data_Traversable_Traversable__dollar__Dict'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_Traversable__dollar__Dict')))((object)["traverse" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$over1 = (($GLOBALS['Data_Interval_over'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_over')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traverse1 = (($GLOBALS['Data_Interval_traverse'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_traverse')))($dictApplicative);
    $__res = (function() use ($over1, $traverse1) {
  $__fn = function($f, $i = null) use ($over1, $traverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($i) use ($f, &$__fn) { return $__fn($f, $i); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($over1)(($traverse1)($f), $i);
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
    $__res = (($GLOBALS['Data_Traversable_sequenceDefault'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_sequenceDefault')))(($GLOBALS['Data_Interval_traversableRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_traversableRecurringInterval')), $dictApplicative);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Interval_functorRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_functorRecurringInterval'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Interval_foldableRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldableRecurringInterval'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Interval_bifoldableInterval': $v = (($GLOBALS['Data_Bifoldable_Bifoldable__dollar__Dict'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_Bifoldable__dollar__Dict')))((object)["bifoldl" => (function() {
  $__body = function($v, $v1, $v2, $v3) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    $__case_3 = $v3;
    switch (($__case_3)->tag) {
case "StartEnd":
$f = $__case_1;
$z = $__case_2;
$x = ($__case_3)->v0;
$y = ($__case_3)->v1;
return ($f)(($f)($z, $x), $y);
break;
case "DurationEnd":
$g = $__case_0;
$f = $__case_1;
$z = $__case_2;
$d = ($__case_3)->v0;
$x = ($__case_3)->v1;
return ($f)(($g)($z, $d), $x);
break;
case "StartDuration":
$g = $__case_0;
$f = $__case_1;
$z = $__case_2;
$x = ($__case_3)->v0;
$d = ($__case_3)->v1;
return ($f)(($g)($z, $d), $x);
break;
case "DurationOnly":
$g = $__case_0;
$z = $__case_2;
$d = ($__case_3)->v0;
return ($g)($z, $d);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v3) use ($v, $v1, $v2, &$__fn) { return $__fn($v, $v1, $v2, $v3); };
    if ($__num === 2) return function($v2, $v3 = null) use ($v, $v1, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2, $v3);
      if ($__num2 === 1) return function($v3) use ($v, $v1, $v2, &$__fn) { return $__fn($v, $v1, $v2, $v3); };
      return phpurs_curry_fallback($__fn, [$v, $v1], 4);
    };
    if ($__num === 1) return function($v1, $v2 = null, $v3 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($v, $v1, $v2, $v3);
      if ($__num2 === 2) return function($v3) use ($v, $v1, $v2, &$__fn) { return $__fn($v, $v1, $v2, $v3); };
      if ($__num2 === 1) return function($v2, $v3 = null) use ($v, $v1, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($v, $v1, $v2, $v3);
        if ($__num3 === 1) return function($v3) use ($v, $v1, $v2, &$__fn) { return $__fn($v, $v1, $v2, $v3); };
        return phpurs_curry_fallback($__fn, [$v, $v1], 4);
      };
      return phpurs_curry_fallback($__fn, [$v], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($v, $v1, $v2, $v3);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldr" => (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Bifoldable_bifoldrDefault'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldrDefault')))(($GLOBALS['Data_Interval_bifoldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldableInterval')), $x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Bifoldable_bifoldMapDefaultL'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldMapDefaultL')))(($GLOBALS['Data_Interval_bifoldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldableInterval')), $dictMonoid);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Interval_bifoldableRecurringInterval': $v = (($GLOBALS['Data_Bifoldable_Bifoldable__dollar__Dict'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_Bifoldable__dollar__Dict')))((object)["bifoldl" => (function() {
  $__fn = function($f, $g = null, $i = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($i) use ($f, $g, &$__fn) { return $__fn($f, $g, $i); };
    if ($__num === 1) return function($g, $i = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $i);
      if ($__num2 === 1) return function($i) use ($f, $g, &$__fn) { return $__fn($f, $g, $i); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = (($GLOBALS['Data_Interval_compose'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_compose')))((($GLOBALS['Data_Interval_bifoldl'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldl')))($f, $g, $i), ($GLOBALS['Data_Interval_interval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_interval')));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "bifoldr" => (function() {
  $__fn = function($f, $g = null, $i = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($i) use ($f, $g, &$__fn) { return $__fn($f, $g, $i); };
    if ($__num === 1) return function($g, $i = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $i);
      if ($__num2 === 1) return function($i) use ($f, $g, &$__fn) { return $__fn($f, $g, $i); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = (($GLOBALS['Data_Interval_compose'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_compose')))((($GLOBALS['Data_Interval_bifoldr'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldr')))($f, $g, $i), ($GLOBALS['Data_Interval_interval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_interval')));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Bifoldable_bifoldMapDefaultL'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldMapDefaultL')))(($GLOBALS['Data_Interval_bifoldableRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldableRecurringInterval')), $dictMonoid);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Interval_bitraversableInterval': $v = (($GLOBALS['Data_Bitraversable_Bitraversable__dollar__Dict'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_Bitraversable__dollar__Dict')))((object)["bitraverse" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Apply0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($Apply0);
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($Apply0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($apply, $map1) {
  $__body = function($v, $v1, $v2) use ($apply, $map1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "StartEnd":
$r = $__case_1;
$x = ($__case_2)->v0;
$y = ($__case_2)->v1;
return ($apply)(($map1)(($GLOBALS['Data_Interval_StartEnd'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_StartEnd')), ($r)($x)), ($r)($y));
break;
case "DurationEnd":
$l = $__case_0;
$r = $__case_1;
$d = ($__case_2)->v0;
$x = ($__case_2)->v1;
return ($apply)(($map1)(($GLOBALS['Data_Interval_DurationEnd'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_DurationEnd')), ($l)($d)), ($r)($x));
break;
case "StartDuration":
$l = $__case_0;
$r = $__case_1;
$x = ($__case_2)->v0;
$d = ($__case_2)->v1;
return ($apply)(($map1)(($GLOBALS['Data_Interval_StartDuration'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_StartDuration')), ($r)($x)), ($l)($d));
break;
case "DurationOnly":
$l = $__case_0;
$d = ($__case_2)->v0;
return ($map1)(($GLOBALS['Data_Interval_DurationOnly'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_DurationOnly')), ($l)($d));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($apply, $map1, $__body, &$__fn) {
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Bitraversable_bisequenceDefault'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_bisequenceDefault')))(($GLOBALS['Data_Interval_bitraversableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bitraversableInterval')), $dictApplicative);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Interval_bifunctorInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifunctorInterval'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Interval_bifoldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldableInterval'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Interval_bitraversableRecurringInterval': $v = (($GLOBALS['Data_Bitraversable_Bitraversable__dollar__Dict'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_Bitraversable__dollar__Dict')))((object)["bitraverse" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$over1 = (($GLOBALS['Data_Interval_over'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_over')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$bitraverse1 = (($GLOBALS['Data_Interval_bitraverse'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bitraverse')))($dictApplicative);
    $__res = (function() use ($over1, $bitraverse1) {
  $__fn = function($l, $r = null, $i = null) use ($over1, $bitraverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($i) use ($l, $r, &$__fn) { return $__fn($l, $r, $i); };
    if ($__num === 1) return function($r, $i = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $r, $i);
      if ($__num2 === 1) return function($i) use ($l, $r, &$__fn) { return $__fn($l, $r, $i); };
      return phpurs_curry_fallback($__fn, [$l], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($over1)(($bitraverse1)($l, $r), $i);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Bitraversable_bisequenceDefault'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_bisequenceDefault')))(($GLOBALS['Data_Interval_bitraversableRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bitraversableRecurringInterval')), $dictApplicative);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Interval_bifunctorRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifunctorRecurringInterval'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Interval_bifoldableRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldableRecurringInterval'));
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




// Data_Interval_compose
function Data_Interval_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_compose';
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
$GLOBALS['Data_Interval_compose'] = __NAMESPACE__ . '\\Data_Interval_compose';




// Data_Interval_StartEnd
function Data_Interval_StartEnd($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_StartEnd';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("StartEnd", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Interval_StartEnd'] = __NAMESPACE__ . '\\Data_Interval_StartEnd';

// Data_Interval_DurationEnd
function Data_Interval_DurationEnd($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_DurationEnd';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("DurationEnd", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Interval_DurationEnd'] = __NAMESPACE__ . '\\Data_Interval_DurationEnd';

// Data_Interval_StartDuration
function Data_Interval_StartDuration($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_StartDuration';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("StartDuration", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Interval_StartDuration'] = __NAMESPACE__ . '\\Data_Interval_StartDuration';

// Data_Interval_DurationOnly
function Data_Interval_DurationOnly($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_DurationOnly';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("DurationOnly", $value0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_DurationOnly'] = __NAMESPACE__ . '\\Data_Interval_DurationOnly';

// Data_Interval_RecurringInterval
function Data_Interval_RecurringInterval($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_RecurringInterval';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("RecurringInterval", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Interval_RecurringInterval'] = __NAMESPACE__ . '\\Data_Interval_RecurringInterval';

// Data_Interval_showInterval
function Data_Interval_showInterval($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_showInterval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show1 = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))($dictShow);
    $__res = (function() use ($show1) {
  $__fn = function($dictShow1) use ($show1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show2 = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))($dictShow1);
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show2, $show1) {
  $__body = function($v) use ($show2, $show1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "StartEnd":
$x = ($__case_0)->v0;
$y = ($__case_0)->v1;
return (($GLOBALS['Data_Interval_append'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_append')))("(StartEnd ", (($GLOBALS['Data_Interval_append'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_append')))(($show2)($x), (($GLOBALS['Data_Interval_append'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_append')))(" ", (($GLOBALS['Data_Interval_append'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_append')))(($show2)($y), ")"))));
break;
case "DurationEnd":
$d = ($__case_0)->v0;
$x = ($__case_0)->v1;
return (($GLOBALS['Data_Interval_append'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_append')))("(DurationEnd ", (($GLOBALS['Data_Interval_append'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_append')))(($show1)($d), (($GLOBALS['Data_Interval_append'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_append')))(" ", (($GLOBALS['Data_Interval_append'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_append')))(($show2)($x), ")"))));
break;
case "StartDuration":
$x = ($__case_0)->v0;
$d = ($__case_0)->v1;
return (($GLOBALS['Data_Interval_append'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_append')))("(StartDuration ", (($GLOBALS['Data_Interval_append'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_append')))(($show2)($x), (($GLOBALS['Data_Interval_append'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_append')))(" ", (($GLOBALS['Data_Interval_append'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_append')))(($show1)($d), ")"))));
break;
case "DurationOnly":
$d = ($__case_0)->v0;
return (($GLOBALS['Data_Interval_append'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_append')))("(DurationOnly ", (($GLOBALS['Data_Interval_append'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_append')))(($show1)($d), ")"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($show2, $show1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
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
$GLOBALS['Data_Interval_showInterval'] = __NAMESPACE__ . '\\Data_Interval_showInterval';

// Data_Interval_showRecurringInterval
function Data_Interval_showRecurringInterval($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_showRecurringInterval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$showInterval1 = (($GLOBALS['Data_Interval_showInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_showInterval')))($dictShow);
    $__res = (function() use ($showInterval1) {
  $__fn = function($dictShow1) use ($showInterval1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show1 = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))(($showInterval1)($dictShow1));
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show1) {
  $__body = function($v) use ($show1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "RecurringInterval":
$x = ($__case_0)->v0;
$y = ($__case_0)->v1;
return (($GLOBALS['Data_Interval_append'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_append')))("(RecurringInterval ", (($GLOBALS['Data_Interval_append'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_append')))((($GLOBALS['Data_Interval_show'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_show')))($x), (($GLOBALS['Data_Interval_append'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_append')))(" ", (($GLOBALS['Data_Interval_append'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_append')))(($show1)($y), ")"))));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($show1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
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
$GLOBALS['Data_Interval_showRecurringInterval'] = __NAMESPACE__ . '\\Data_Interval_showRecurringInterval';

// Data_Interval_over
function Data_Interval_over($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_over';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (function() use ($map1) {
  $__body = function($f, $v) use ($map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "RecurringInterval":
$f1 = $__case_0;
$n = ($__case_1)->v0;
$i = ($__case_1)->v1;
return ($map1)((($GLOBALS['Data_Interval_RecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_RecurringInterval')))($n), ($f1)($i));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($map1, $__body, &$__fn) {
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
$GLOBALS['Data_Interval_over'] = __NAMESPACE__ . '\\Data_Interval_over';

// Data_Interval_interval
function Data_Interval_interval($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_interval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "RecurringInterval":
$i = ($__case_0)->v1;
return $i;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_interval'] = __NAMESPACE__ . '\\Data_Interval_interval';


// Data_Interval_foldl
function Data_Interval_foldl($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_foldl';
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
    if ((($__case_2)->tag === "StartEnd")) {
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
$y = ($__case_2)->v1;
return ($f)(($f)($z, $x), $y);
} else {
if ((($__case_2)->tag === "DurationEnd")) {
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v1;
return ($f)($z, $x);
} else {
if ((($__case_2)->tag === "StartDuration")) {
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
return ($f)($z, $x);
} else {
if (true) {
$z = $__case_1;
return $z;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
  };
    $__res = $__body($v, $v1, $v2);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Interval_foldl'] = __NAMESPACE__ . '\\Data_Interval_foldl';

// Data_Interval_foldr
function Data_Interval_foldr($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_foldr';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Foldable_foldrDefault'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldrDefault')))(($GLOBALS['Data_Interval_foldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldableInterval')), $x);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_foldr'] = __NAMESPACE__ . '\\Data_Interval_foldr';


// Data_Interval_eqInterval
function Data_Interval_eqInterval($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_eqInterval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq1 = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq);
    $__res = (function() use ($eq1) {
  $__fn = function($dictEq1) use ($eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq2 = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq1);
    $__res = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() use ($eq2, $eq1) {
  $__body = function($x, $y) use ($eq2, $eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "StartEnd") && (($__case_1)->tag === "StartEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return (($GLOBALS['Data_Interval_conj'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_conj')))(($eq2)($l, $r), ($eq2)($l1, $r1));
} else {
if (((($__case_0)->tag === "DurationEnd") && (($__case_1)->tag === "DurationEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return (($GLOBALS['Data_Interval_conj'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_conj')))(($eq1)($l, $r), ($eq2)($l1, $r1));
} else {
if (((($__case_0)->tag === "StartDuration") && (($__case_1)->tag === "StartDuration"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return (($GLOBALS['Data_Interval_conj'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_conj')))(($eq2)($l, $r), ($eq1)($l1, $r1));
} else {
if (((($__case_0)->tag === "DurationOnly") && (($__case_1)->tag === "DurationOnly"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return ($eq1)($l, $r);
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
  };
  $__fn = function($x, $y = null) use ($eq2, $eq1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_eqInterval'] = __NAMESPACE__ . '\\Data_Interval_eqInterval';

// Data_Interval_eqRecurringInterval
function Data_Interval_eqRecurringInterval($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_eqRecurringInterval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eqInterval1 = (($GLOBALS['Data_Interval_eqInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_eqInterval')))($dictEq);
    $__res = (function() use ($eqInterval1) {
  $__fn = function($dictEq1) use ($eqInterval1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq1 = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))(($eqInterval1)($dictEq1));
    $__res = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() use ($eq1) {
  $__body = function($x, $y) use ($eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "RecurringInterval") && (($__case_1)->tag === "RecurringInterval"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return (($GLOBALS['Data_Interval_conj'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_conj')))((($GLOBALS['Data_Interval_eq'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_eq')))($l, $r), ($eq1)($l1, $r1));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($eq1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_eqRecurringInterval'] = __NAMESPACE__ . '\\Data_Interval_eqRecurringInterval';

// Data_Interval_ordInterval
function Data_Interval_ordInterval($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_ordInterval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare1 = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))($dictOrd);
$eqInterval1 = (($GLOBALS['Data_Interval_eqInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_eqInterval')))((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($eqInterval1, $compare1) {
  $__fn = function($dictOrd1) use ($eqInterval1, $compare1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare2 = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))($dictOrd1);
$eqInterval2 = ($eqInterval1)((($dictOrd1)->Eq0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() use ($compare2, $compare1) {
  $__body = function($x, $y) use ($compare2, $compare1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "StartEnd") && (($__case_1)->tag === "StartEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = ($compare2)($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_0)->tag === "GT")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (true) {
return ($compare2)($l1, $r1);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
if ((($__case_0)->tag === "StartEnd")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "StartEnd")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "DurationEnd") && (($__case_1)->tag === "DurationEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = ($compare1)($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_0)->tag === "GT")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (true) {
return ($compare2)($l1, $r1);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
if ((($__case_0)->tag === "DurationEnd")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "DurationEnd")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "StartDuration") && (($__case_1)->tag === "StartDuration"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = ($compare2)($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_0)->tag === "GT")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (true) {
return ($compare1)($l1, $r1);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
if ((($__case_0)->tag === "StartDuration")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "StartDuration")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "DurationOnly") && (($__case_1)->tag === "DurationOnly"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return ($compare1)($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
};
};
};
};
};
  };
  $__fn = function($x, $y = null) use ($compare2, $compare1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqInterval2) {
  $__fn = function($__dollar____unused) use ($eqInterval2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqInterval2;
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
$GLOBALS['Data_Interval_ordInterval'] = __NAMESPACE__ . '\\Data_Interval_ordInterval';

// Data_Interval_ordRecurringInterval
function Data_Interval_ordRecurringInterval($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_ordRecurringInterval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$ordInterval1 = (($GLOBALS['Data_Interval_ordInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_ordInterval')))($dictOrd);
$eqRecurringInterval1 = (($GLOBALS['Data_Interval_eqRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_eqRecurringInterval')))((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($ordInterval1, $eqRecurringInterval1) {
  $__fn = function($dictOrd1) use ($ordInterval1, $eqRecurringInterval1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare1 = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))(($ordInterval1)($dictOrd1));
$eqRecurringInterval2 = ($eqRecurringInterval1)((($dictOrd1)->Eq0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() use ($compare1) {
  $__body = function($x, $y) use ($compare1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "RecurringInterval") && (($__case_1)->tag === "RecurringInterval"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = (($GLOBALS['Data_Interval_compare'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_compare')))($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_0)->tag === "GT")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (true) {
return ($compare1)($l1, $r1);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($compare1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqRecurringInterval2) {
  $__fn = function($__dollar____unused) use ($eqRecurringInterval2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqRecurringInterval2;
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
$GLOBALS['Data_Interval_ordRecurringInterval'] = __NAMESPACE__ . '\\Data_Interval_ordRecurringInterval';


// Data_Interval_bimap
function Data_Interval_bimap($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_bimap';
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
case "StartEnd":
$f = $__case_1;
$x = ($__case_2)->v0;
$y = ($__case_2)->v1;
return (($GLOBALS['Data_Interval_StartEnd'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_StartEnd')))(($f)($x), ($f)($y));
break;
case "DurationEnd":
$g = $__case_0;
$f = $__case_1;
$d = ($__case_2)->v0;
$x = ($__case_2)->v1;
return (($GLOBALS['Data_Interval_DurationEnd'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_DurationEnd')))(($g)($d), ($f)($x));
break;
case "StartDuration":
$g = $__case_0;
$f = $__case_1;
$x = ($__case_2)->v0;
$d = ($__case_2)->v1;
return (($GLOBALS['Data_Interval_StartDuration'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_StartDuration')))(($f)($x), ($g)($d));
break;
case "DurationOnly":
$g = $__case_0;
$d = ($__case_2)->v0;
return (($GLOBALS['Data_Interval_DurationOnly'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_DurationOnly')))(($g)($d));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v, $v1, $v2);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Interval_bimap'] = __NAMESPACE__ . '\\Data_Interval_bimap';





// Data_Interval_extend
function Data_Interval_extend($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_extend';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "StartEnd":
$f = $__case_0;
$a = $__case_1;
return (($GLOBALS['Data_Interval_StartEnd'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_StartEnd')))(($f)($a), ($f)($a));
break;
case "DurationEnd":
$f = $__case_0;
$a = $__case_1;
$d = ($__case_1)->v0;
return (($GLOBALS['Data_Interval_DurationEnd'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_DurationEnd')))($d, ($f)($a));
break;
case "StartDuration":
$f = $__case_0;
$a = $__case_1;
$d = ($__case_1)->v1;
return (($GLOBALS['Data_Interval_StartDuration'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_StartDuration')))(($f)($a), $d);
break;
case "DurationOnly":
$d = ($__case_1)->v0;
return (($GLOBALS['Data_Interval_DurationOnly'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_DurationOnly')))($d);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v, $v1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Interval_extend'] = __NAMESPACE__ . '\\Data_Interval_extend';




// Data_Interval_traverse
function Data_Interval_traverse($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_traverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Apply0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($Apply0);
$Functor0 = (($Apply0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($Functor0);
$mapFlipped = (($GLOBALS['Data_Functor_mapFlipped'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_mapFlipped')))($Functor0);
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))($dictApplicative);
    $__res = (function() use ($apply, $map1, $mapFlipped, $pure) {
  $__body = function($v, $v1) use ($apply, $map1, $mapFlipped, $pure) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "StartEnd":
$f = $__case_0;
$x = ($__case_1)->v0;
$y = ($__case_1)->v1;
return ($apply)(($map1)(($GLOBALS['Data_Interval_StartEnd'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_StartEnd')), ($f)($x)), ($f)($y));
break;
case "DurationEnd":
$f = $__case_0;
$d = ($__case_1)->v0;
$x = ($__case_1)->v1;
return ($mapFlipped)(($f)($x), (($GLOBALS['Data_Interval_DurationEnd'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_DurationEnd')))($d));
break;
case "StartDuration":
$f = $__case_0;
$x = ($__case_1)->v0;
$d = ($__case_1)->v1;
return ($mapFlipped)(($f)($x), (function() use ($d) {
  $__fn = function($v2) use ($d, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Interval_StartDuration'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_StartDuration')))($v2, $d);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
case "DurationOnly":
$d = ($__case_1)->v0;
return ($pure)((($GLOBALS['Data_Interval_DurationOnly'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_DurationOnly')))($d));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($apply, $map1, $mapFlipped, $pure, $__body, &$__fn) {
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
$GLOBALS['Data_Interval_traverse'] = __NAMESPACE__ . '\\Data_Interval_traverse';



// Data_Interval_bifoldl
function Data_Interval_bifoldl($v, $v1 = null, $v2 = null, $v3 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_bifoldl';
  if ($__num < 4) {
    if ($__num === 3) return function($v3) use ($v, $v1, $v2, $__fn) { return $__fn($v, $v1, $v2, $v3); };
    if ($__num === 2) return function($v2, $v3 = null) use ($v, $v1, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2, $v3);
      if ($__num2 === 1) return function($v3) use ($v, $v1, $v2, $__fn) { return $__fn($v, $v1, $v2, $v3); };
      return phpurs_curry_fallback($__fn, [$v, $v1], 4);
    };
    if ($__num === 1) return function($v1, $v2 = null, $v3 = null) use ($v, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($v, $v1, $v2, $v3);
      if ($__num2 === 2) return function($v3) use ($v, $v1, $v2, $__fn) { return $__fn($v, $v1, $v2, $v3); };
      if ($__num2 === 1) return function($v2, $v3 = null) use ($v, $v1, $__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($v, $v1, $v2, $v3);
        if ($__num3 === 1) return function($v3) use ($v, $v1, $v2, $__fn) { return $__fn($v, $v1, $v2, $v3); };
        return phpurs_curry_fallback($__fn, [$v, $v1], 4);
      };
      return phpurs_curry_fallback($__fn, [$v], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__body = function($v, $v1, $v2, $v3) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    $__case_3 = $v3;
    switch (($__case_3)->tag) {
case "StartEnd":
$f = $__case_1;
$z = $__case_2;
$x = ($__case_3)->v0;
$y = ($__case_3)->v1;
return ($f)(($f)($z, $x), $y);
break;
case "DurationEnd":
$g = $__case_0;
$f = $__case_1;
$z = $__case_2;
$d = ($__case_3)->v0;
$x = ($__case_3)->v1;
return ($f)(($g)($z, $d), $x);
break;
case "StartDuration":
$g = $__case_0;
$f = $__case_1;
$z = $__case_2;
$x = ($__case_3)->v0;
$d = ($__case_3)->v1;
return ($f)(($g)($z, $d), $x);
break;
case "DurationOnly":
$g = $__case_0;
$z = $__case_2;
$d = ($__case_3)->v0;
return ($g)($z, $d);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v, $v1, $v2, $v3);
    return 4 < $__num ? $__res(...array_slice(func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_Interval_bifoldl'] = __NAMESPACE__ . '\\Data_Interval_bifoldl';

// Data_Interval_bifoldr
function Data_Interval_bifoldr($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_bifoldr';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Bifoldable_bifoldrDefault'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldrDefault')))(($GLOBALS['Data_Interval_bifoldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldableInterval')), $x);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_bifoldr'] = __NAMESPACE__ . '\\Data_Interval_bifoldr';



// Data_Interval_bitraverse
function Data_Interval_bitraverse($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_bitraverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Apply0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($Apply0);
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($Apply0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($apply, $map1) {
  $__body = function($v, $v1, $v2) use ($apply, $map1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "StartEnd":
$r = $__case_1;
$x = ($__case_2)->v0;
$y = ($__case_2)->v1;
return ($apply)(($map1)(($GLOBALS['Data_Interval_StartEnd'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_StartEnd')), ($r)($x)), ($r)($y));
break;
case "DurationEnd":
$l = $__case_0;
$r = $__case_1;
$d = ($__case_2)->v0;
$x = ($__case_2)->v1;
return ($apply)(($map1)(($GLOBALS['Data_Interval_DurationEnd'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_DurationEnd')), ($l)($d)), ($r)($x));
break;
case "StartDuration":
$l = $__case_0;
$r = $__case_1;
$x = ($__case_2)->v0;
$d = ($__case_2)->v1;
return ($apply)(($map1)(($GLOBALS['Data_Interval_StartDuration'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_StartDuration')), ($r)($x)), ($l)($d));
break;
case "DurationOnly":
$l = $__case_0;
$d = ($__case_2)->v0;
return ($map1)(($GLOBALS['Data_Interval_DurationOnly'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_DurationOnly')), ($l)($d));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($apply, $map1, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_bitraverse'] = __NAMESPACE__ . '\\Data_Interval_bitraverse';


