<?php

namespace Data\List\Lazy\Types;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
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
      case 'Data_List_Lazy_Types_unwrap': $v = (($GLOBALS['Data_Newtype_unwrap'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_List_Lazy_Types_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_List_Lazy_Types_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_List_Lazy_Types_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_List_Lazy_Types_Nil': $v = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")); break;
      case 'Data_List_Lazy_Types_nil': $v = (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())); break;
      case 'Data_List_Lazy_Types_newtypeNonEmptyList': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_newtypeList': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_step': $v = (($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose')))(($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')), ($GLOBALS['Data_List_Lazy_Types_unwrap'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unwrap'))); break;
      case 'Data_List_Lazy_Types_semigroupList': $v = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() {
  $__fn = function($xs, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($ys) {
  $__body = function($v) use ($ys) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($ys);
break;
case "Cons":
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))($x, ((function() {
  $__fn = function($xs, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($ys) {
  $__body = function($v) use ($ys) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($ys);
break;
case "Cons":
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))($x, (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))(($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_semigroupList')), $xs__prime__, $ys));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($ys, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_List_Lazy_Types_map'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_map')))($go, (($GLOBALS['Data_List_Lazy_Types_unwrap'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unwrap')))($xs)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($xs__prime__, $ys));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($ys, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_List_Lazy_Types_map'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_map')))($go, (($GLOBALS['Data_List_Lazy_Types_unwrap'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unwrap')))($xs)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_monoidList': $v = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_semigroupList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_lazyList': $v = (($GLOBALS['Control_Lazy_Lazy__dollar__Dict'] ?? \Control\Lazy\phpurs_eval_thunk('Control_Lazy_Lazy__dollar__Dict')))((object)["defer" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose')))(($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')), $f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_functorList': $v = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() {
  $__fn = function($f, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($f, &$__fn) { return $__fn($f, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
break;
case "Cons":
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))(($f)($x), ((function() {
  $__fn = function($f, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($f, &$__fn) { return $__fn($f, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
break;
case "Cons":
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))(($f)($x), (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))(($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorList')), $f, $xs__prime__));
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
})();
    $__res = (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_List_Lazy_Types_map'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_map')))($go, (($GLOBALS['Data_List_Lazy_Types_unwrap'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unwrap')))($xs)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($f, $xs__prime__));
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
})();
    $__res = (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_List_Lazy_Types_map'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_map')))($go, (($GLOBALS['Data_List_Lazy_Types_unwrap'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unwrap')))($xs)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_map1': $v = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($GLOBALS['Data_NonEmpty_functorNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_functorNonEmpty')))(($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorList')))); break;
      case 'Data_List_Lazy_Types_functorNonEmptyList': $v = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$nel = $__case_1;
return (($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_List_Lazy_Types_map'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_map')))((($GLOBALS['Data_List_Lazy_Types_map1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_map1')))($f1), $nel));
} else {
throw new \Exception("Pattern match failure");
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
      case 'Data_List_Lazy_Types_eq1List': $v = (($GLOBALS['Data_Eq_Eq1__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq1__dollar__Dict')))((object)["eq1" => (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq);
    $__res = (function() {
  $__fn = function($xs, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_0)->tag === "Nil") && (($__case_1)->tag === "Nil"))) {
return true;
} else {
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
$y = ($__case_1)->v0;
$ys__prime__ = ($__case_1)->v1;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)((($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($xs), (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($ys));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_eqNonEmpty': $v = (($GLOBALS['Data_NonEmpty_eqNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_eqNonEmpty')))(($GLOBALS['Data_List_Lazy_Types_eq1List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eq1List'))); break;
      case 'Data_List_Lazy_Types_eq1NonEmptyList': $v = (($GLOBALS['Data_Eq_Eq1__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq1__dollar__Dict')))((object)["eq1" => (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq12 = (($GLOBALS['Data_List_Lazy_Types_eq1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eq1')))((($GLOBALS['Data_List_Lazy_Types_eqNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eqNonEmpty')))($dictEq));
    $__res = (function() use ($eq12) {
  $__body = function($v, $v1) use ($eq12) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$lhs = $__case_0;
$rhs = $__case_1;
return ($eq12)($lhs, $rhs);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($eq12, $__body, &$__fn) {
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
})()]); break;
      case 'Data_List_Lazy_Types_ord1List': $v = (($GLOBALS['Data_Ord_Ord1__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord1__dollar__Dict')))((object)["compare1" => (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($xs, $ys = null) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($compare, &$go) {
  $__fn = function($v, $v1 = null) use ($compare, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_0)->tag === "Nil") && (($__case_1)->tag === "Nil"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "Nil")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "Nil")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
$y = ($__case_1)->v0;
$ys__prime__ = ($__case_1)->v1;
$v2 = ($compare)($x, $y);
$__case_0 = $v2;
if ((($__case_0)->tag === "EQ")) {
$__tco_tmp_0 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($xs__prime__);
$__tco_tmp_1 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($ys__prime__);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
if (true) {
$other = $__case_0;
return $other;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)((($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($xs), (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($ys));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Eq10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_eq1List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eq1List'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_ordNonEmpty': $v = (($GLOBALS['Data_NonEmpty_ordNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_ordNonEmpty')))(($GLOBALS['Data_List_Lazy_Types_ord1List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_ord1List'))); break;
      case 'Data_List_Lazy_Types_ord1NonEmptyList': $v = (($GLOBALS['Data_Ord_Ord1__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord1__dollar__Dict')))((object)["compare1" => (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare12 = (($GLOBALS['Data_List_Lazy_Types_compare1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compare1')))((($GLOBALS['Data_List_Lazy_Types_ordNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_ordNonEmpty')))($dictOrd));
    $__res = (function() use ($compare12) {
  $__body = function($v, $v1) use ($compare12) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$lhs = $__case_0;
$rhs = $__case_1;
return ($compare12)($lhs, $rhs);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($compare12, $__body, &$__fn) {
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
})(), "Eq10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_eq1NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eq1NonEmptyList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_foldableList': $v = (($GLOBALS['Data_Foldable_Foldable__dollar__Dict'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_Foldable__dollar__Dict')))((object)["foldr" => (function() {
  $__fn = function($op, $z = null, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($op, $z, &$__fn) { return $__fn($op, $z, $xs); };
    if ($__num === 1) return function($z, $xs = null) use ($op, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($op, $z, $xs);
      if ($__num2 === 1) return function($xs) use ($op, $z, &$__fn) { return $__fn($op, $z, $xs); };
      return phpurs_curry_fallback($__fn, [$op], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$rev = ((function() {
  $__fn = function($op) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use (&$go, $op) {
  $__fn = function($b, $xs = null) use (&$go, $op, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($b, &$__fn) { return $__fn($b, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($xs);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Nil":
return $b;
break;
case "Cons":
$hd = ($__case_0)->v0;
$tl = ($__case_0)->v1;
$__tco_tmp_0 = ($op)($b, $hd);
$__tco_tmp_1 = $tl;
$b = $__tco_tmp_0;
$xs = $__tco_tmp_1;
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
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())((($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'))), ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')));
    $__res = ((function() {
  $__fn = function($op) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use (&$go, $op) {
  $__fn = function($b, $xs = null) use (&$go, $op, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($b, &$__fn) { return $__fn($b, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($xs);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Nil":
return $b;
break;
case "Cons":
$hd = ($__case_0)->v0;
$tl = ($__case_0)->v1;
$__tco_tmp_0 = ($op)($b, $hd);
$__tco_tmp_1 = $tl;
$b = $__tco_tmp_0;
$xs = $__tco_tmp_1;
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
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())((($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))($op), $z, ($rev)($xs));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__fn = function($op) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use (&$go, $op) {
  $__fn = function($b, $xs = null) use (&$go, $op, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($b, &$__fn) { return $__fn($b, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($xs);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Nil":
return $b;
break;
case "Cons":
$hd = ($__case_0)->v0;
$tl = ($__case_0)->v1;
$__tco_tmp_0 = ($op)($b, $hd);
$__tco_tmp_1 = $tl;
$b = $__tco_tmp_0;
$xs = $__tco_tmp_1;
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
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append2 = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
    $__res = (function() use ($append2, $mempty) {
  $__fn = function($f) use ($append2, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ((function() {
  $__fn = function($op) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use (&$go, $op) {
  $__fn = function($b, $xs = null) use (&$go, $op, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($b, &$__fn) { return $__fn($b, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($xs);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Nil":
return $b;
break;
case "Cons":
$hd = ($__case_0)->v0;
$tl = ($__case_0)->v1;
$__tco_tmp_0 = ($op)($b, $hd);
$__tco_tmp_1 = $tl;
$b = $__tco_tmp_0;
$xs = $__tco_tmp_1;
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
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())((function() use ($append2, $f) {
  $__fn = function($b, $a = null) use ($append2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($b, &$__fn) { return $__fn($b, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($append2)($b, ($f)($a));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
})()]); break;
      case 'Data_List_Lazy_Types_foldableNonEmpty': $v = (($GLOBALS['Data_NonEmpty_foldableNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_foldableNonEmpty')))(($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableList'))); break;
      case 'Data_List_Lazy_Types_foldr1': $v = (($GLOBALS['Data_Foldable_foldr'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldr')))(($GLOBALS['Data_List_Lazy_Types_foldableNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableNonEmpty'))); break;
      case 'Data_List_Lazy_Types_foldl': $v = (($GLOBALS['Data_Foldable_foldl'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl')))(($GLOBALS['Data_List_Lazy_Types_foldableNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableNonEmpty'))); break;
      case 'Data_List_Lazy_Types_foldMap': $v = (($GLOBALS['Data_Foldable_foldMap'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldMap')))(($GLOBALS['Data_List_Lazy_Types_foldableNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableNonEmpty'))); break;
      case 'Data_List_Lazy_Types_extendList': $v = (($GLOBALS['Control_Extend_Extend__dollar__Dict'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_Extend__dollar__Dict')))((object)["extend" => (function() {
  $__body = function($f, $l) {
    $go = (function() use ($f) {
  $__body = function($a, $v) use ($f) {
    $__case_0 = $a;
    $__case_1 = $v;
    if ((is_object)($__case_1)) {
$a1 = $__case_0;
$val = ($__case_1)->val;
$acc = ($__case_1)->acc;
$acc__prime__ = (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($a1, $acc);
return (object)["val" => (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))(($f)($acc__prime__), $val), "acc" => $acc__prime__];
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v = null) use ($f, $__body, &$__fn) {
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
    $v = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($l);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
break;
case "Cons":
$as = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))(($f)($l), ((($GLOBALS['Data_List_Lazy_Types_foldr'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldr')))($go, (object)["val" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')), "acc" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'))], $as))->val);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $l = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($f, &$__fn) { return $__fn($f, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $l);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_extendNonEmptyList': $v = (($GLOBALS['Control_Extend_Extend__dollar__Dict'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_Extend__dollar__Dict')))((object)["extend" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$w = $__case_1;
$nel = $__case_1;
$go = (function() use ($f1) {
  $__body = function($a, $v1) use ($f1) {
    $__case_0 = $a;
    $__case_1 = $v1;
    if ((is_object)($__case_1)) {
$a1 = $__case_0;
$val = ($__case_1)->val;
$acc = ($__case_1)->acc;
return (object)["val" => (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))(($f1)((($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($a1, $acc) {
  $__fn = function($v2) use ($a1, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')))($a1, $acc);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()))), $val), "acc" => (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($a1, $acc)];
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v1 = null) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($a, &$__fn) { return $__fn($a, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$v1 = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($nel);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$as = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($f1, $w, $go, $as) {
  $__fn = function($v2) use ($f1, $w, $go, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')))(($f1)($w), ((($GLOBALS['Data_List_Lazy_Types_foldr'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldr')))($go, (object)["val" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')), "acc" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'))], $as))->val);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
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
    $__res = ($GLOBALS['Data_List_Lazy_Types_functorNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorNonEmptyList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_foldableNonEmptyList': $v = (($GLOBALS['Data_Foldable_Foldable__dollar__Dict'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_Foldable__dollar__Dict')))((object)["foldr" => (function() {
  $__body = function($f, $b, $v) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$nel = $__case_2;
return (($GLOBALS['Data_List_Lazy_Types_foldr1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldr1')))($f1, $b1, (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($nel));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $b = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
    if ($__num === 1) return function($b, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b, $v);
      if ($__num2 === 1) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $b, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__body = function($f, $b, $v) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$nel = $__case_2;
return (($GLOBALS['Data_List_Lazy_Types_foldl'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldl')))($f1, $b1, (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($nel));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $b = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
    if ($__num === 1) return function($b, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b, $v);
      if ($__num2 === 1) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $b, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap1 = (($GLOBALS['Data_List_Lazy_Types_foldMap'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldMap')))($dictMonoid);
    $__res = (function() use ($foldMap1) {
  $__body = function($f, $v) use ($foldMap1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$nel = $__case_1;
return ($foldMap1)($f1, (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($nel));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMap1, $__body, &$__fn) {
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
})()]); break;
      case 'Data_List_Lazy_Types_foldableWithIndexList': $v = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldrWithIndex" => (function() {
  $__body = function($f, $b, $xs) {
    $rev = (($GLOBALS['Data_List_Lazy_Types_foldl1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldl1')))((function() {
  $__body = function($v1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Tuple":
$i = ($__case_0)->v0;
$acc = ($__case_0)->v1;
return (function() use ($i, $acc) {
  $__fn = function($a) use ($i, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))((($GLOBALS['Data_List_Lazy_Types_add'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_add')))($i, 1), (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($a, $acc));
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
  $__fn = function($v1) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    $v = ($rev)((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(0, ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'))), $xs);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$len = ($__case_0)->v0;
$revList = ($__case_0)->v1;
return (($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd')))((($GLOBALS['Data_List_Lazy_Types_foldl1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldl1')))((function() use ($f) {
  $__body = function($v1) use ($f) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Tuple":
$i = ($__case_0)->v0;
$b__prime__ = ($__case_0)->v1;
return (function() use ($i, $f, $b__prime__) {
  $__fn = function($a) use ($i, $f, $b__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))((($GLOBALS['Data_List_Lazy_Types_sub'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_sub')))($i, 1), ($f)((($GLOBALS['Data_List_Lazy_Types_sub'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_sub')))($i, 1), $a, $b__prime__));
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
  $__fn = function($v1) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($len, $b), $revList));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $b = null, $xs = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $b, &$__fn) { return $__fn($f, $b, $xs); };
    if ($__num === 1) return function($b, $xs = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $b, &$__fn) { return $__fn($f, $b, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $b, $xs);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f, $acc = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($f, &$__fn) { return $__fn($f, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose')))(($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd')), (($GLOBALS['Data_List_Lazy_Types_foldl1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldl1')))((function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$i = ($__case_0)->v0;
$b = ($__case_0)->v1;
return (function() use ($i, $f, $b) {
  $__fn = function($a) use ($i, $f, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))((($GLOBALS['Data_List_Lazy_Types_add'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_add')))($i, 1), ($f)($i, $b, $a));
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
})(), (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(0, $acc)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append2 = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
    $__res = (function() use ($append2, $mempty) {
  $__fn = function($f) use ($append2, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ((function() {
  $__fn = function($f, $acc = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($f, &$__fn) { return $__fn($f, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose')))(($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd')), (($GLOBALS['Data_List_Lazy_Types_foldl1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldl1')))((function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$i = ($__case_0)->v0;
$b = ($__case_0)->v1;
return (function() use ($i, $f, $b) {
  $__fn = function($a) use ($i, $f, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))((($GLOBALS['Data_List_Lazy_Types_add'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_add')))($i, 1), ($f)($i, $b, $a));
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
})(), (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(0, $acc)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())((function() use ($append2, $f) {
  $__fn = function($i, $acc = null) use ($append2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($i, &$__fn) { return $__fn($i, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose')))(($append2)($acc), ($f)($i));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_foldableWithIndexNonEmpty': $v = (($GLOBALS['Data_NonEmpty_foldableWithIndexNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_foldableWithIndexNonEmpty')))(($GLOBALS['Data_List_Lazy_Types_foldableWithIndexList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableWithIndexList'))); break;
      case 'Data_List_Lazy_Types_foldMapWithIndex': $v = (($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMapWithIndex')))(($GLOBALS['Data_List_Lazy_Types_foldableWithIndexNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableWithIndexNonEmpty'))); break;
      case 'Data_List_Lazy_Types_foldlWithIndex': $v = (($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldlWithIndex')))(($GLOBALS['Data_List_Lazy_Types_foldableWithIndexNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableWithIndexNonEmpty'))); break;
      case 'Data_List_Lazy_Types_foldrWithIndex': $v = (($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldrWithIndex')))(($GLOBALS['Data_List_Lazy_Types_foldableWithIndexNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableWithIndexNonEmpty'))); break;
      case 'Data_List_Lazy_Types_foldableWithIndexNonEmptyList': $v = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex1 = (($GLOBALS['Data_List_Lazy_Types_foldMapWithIndex'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldMapWithIndex')))($dictMonoid);
    $__res = (function() use ($foldMapWithIndex1) {
  $__body = function($f, $v) use ($foldMapWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ne = $__case_1;
return ($foldMapWithIndex1)((($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose')))($f1, (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))(0, (($GLOBALS['Data_List_Lazy_Types_add'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_add')))(1))), (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($ne));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMapWithIndex1, $__body, &$__fn) {
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
})(), "foldlWithIndex" => (function() {
  $__body = function($f, $b, $v) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$ne = $__case_2;
return (($GLOBALS['Data_List_Lazy_Types_foldlWithIndex'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldlWithIndex')))((($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose')))($f1, (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))(0, (($GLOBALS['Data_List_Lazy_Types_add'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_add')))(1))), $b1, (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($ne));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $b = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
    if ($__num === 1) return function($b, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b, $v);
      if ($__num2 === 1) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $b, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldrWithIndex" => (function() {
  $__body = function($f, $b, $v) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$ne = $__case_2;
return (($GLOBALS['Data_List_Lazy_Types_foldrWithIndex'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldrWithIndex')))((($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose')))($f1, (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))(0, (($GLOBALS['Data_List_Lazy_Types_add'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_add')))(1))), $b1, (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($ne));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $b = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
    if ($__num === 1) return function($b, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b, $v);
      if ($__num2 === 1) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $b, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_foldableNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableNonEmptyList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_functorWithIndexList': $v = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_foldrWithIndex1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldrWithIndex1')))((function() use ($f) {
  $__fn = function($i, $x = null, $acc = null) use ($f, &$__fn) {
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
    $__res = (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))(($f)($i, $x), $acc);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_mapWithIndex': $v = (($GLOBALS['Data_FunctorWithIndex_mapWithIndex'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_mapWithIndex')))((($GLOBALS['Data_NonEmpty_functorWithIndex'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_functorWithIndex')))(($GLOBALS['Data_List_Lazy_Types_functorWithIndexList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorWithIndexList')))); break;
      case 'Data_List_Lazy_Types_functorWithIndexNonEmptyList': $v = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ne = $__case_1;
return (($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($f1, $ne) {
  $__fn = function($v1) use ($f1, $ne, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_mapWithIndex'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_mapWithIndex')))((($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose')))($f1, (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))(0, (($GLOBALS['Data_List_Lazy_Types_add'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_add')))(1))), (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($ne));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
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
    $__res = ($GLOBALS['Data_List_Lazy_Types_functorNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorNonEmptyList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_semigroupNonEmptyList': $v = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() {
  $__body = function($v, $as__prime__) {
    $__case_0 = $v;
    $__case_1 = $as__prime__;
    if (true) {
$neas = $__case_0;
$as__prime__1 = $__case_1;
$v1 = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($neas);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$a = ($__case_0)->v0;
$as = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($a, $as, $as__prime__1) {
  $__fn = function($v2) use ($a, $as, $as__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')))($a, (($GLOBALS['Data_List_Lazy_Types_append1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append1')))($as, (($GLOBALS['Data_List_Lazy_Types_toList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_toList')))($as__prime__1)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $as__prime__ = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($as__prime__) use ($v, &$__fn) { return $__fn($v, $as__prime__); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $as__prime__);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_traversableList': $v = (($GLOBALS['Data_Traversable_Traversable__dollar__Dict'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_Traversable__dollar__Dict')))((object)["traverse" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Apply0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$apply1 = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($Apply0);
$map2 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($Apply0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))($dictApplicative);
    $__res = (function() use ($apply1, $map2, $pure) {
  $__fn = function($f) use ($apply1, $map2, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_foldr'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldr')))((function() use ($apply1, $map2, $f) {
  $__fn = function($a, $b = null) use ($apply1, $map2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($apply1)(($map2)(($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')), ($f)($a)), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($pure)(($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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
    $__res = ((function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Apply0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$apply1 = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($Apply0);
$map2 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($Apply0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))($dictApplicative);
    $__res = (function() use ($apply1, $map2, $pure) {
  $__fn = function($f) use ($apply1, $map2, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_foldr'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldr')))((function() use ($apply1, $map2, $f) {
  $__fn = function($a, $b = null) use ($apply1, $map2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($apply1)(($map2)(($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')), ($f)($a)), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($pure)(($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($dictApplicative, ($GLOBALS['Data_List_Lazy_Types_identity'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_identity')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_traversableNonEmpty': $v = (($GLOBALS['Data_NonEmpty_traversableNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_traversableNonEmpty')))(($GLOBALS['Data_List_Lazy_Types_traversableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traversableList'))); break;
      case 'Data_List_Lazy_Types_traverse': $v = (($GLOBALS['Data_Traversable_traverse'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traverse')))(($GLOBALS['Data_List_Lazy_Types_traversableNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traversableNonEmpty'))); break;
      case 'Data_List_Lazy_Types_sequence': $v = (($GLOBALS['Data_Traversable_sequence'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_sequence')))(($GLOBALS['Data_List_Lazy_Types_traversableNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traversableNonEmpty'))); break;
      case 'Data_List_Lazy_Types_traversableNonEmptyList': $v = (($GLOBALS['Data_Traversable_Traversable__dollar__Dict'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_Traversable__dollar__Dict')))((object)["traverse" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map2 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traverse1 = (($GLOBALS['Data_List_Lazy_Types_traverse'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traverse')))($dictApplicative);
    $__res = (function() use ($map2, $traverse1) {
  $__body = function($f, $v) use ($map2, $traverse1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$nel = $__case_1;
return ($map2)((function() {
  $__fn = function($xxs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($xxs) {
  $__fn = function($v1) use ($xxs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $xxs;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($traverse1)($f1, (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($nel)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $traverse1, $__body, &$__fn) {
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
})(), "sequence" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map2 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$sequence1 = (($GLOBALS['Data_List_Lazy_Types_sequence'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_sequence')))($dictApplicative);
    $__res = (function() use ($map2, $sequence1) {
  $__body = function($v) use ($map2, $sequence1) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
return ($map2)((function() {
  $__fn = function($xxs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($xxs) {
  $__fn = function($v1) use ($xxs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $xxs;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($sequence1)((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($nel)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map2, $sequence1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
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
    $__res = ($GLOBALS['Data_List_Lazy_Types_functorNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorNonEmptyList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_foldableNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableNonEmptyList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_traversableWithIndexList': $v = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Apply0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$apply1 = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($Apply0);
$map2 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($Apply0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))($dictApplicative);
    $__res = (function() use ($apply1, $map2, $pure) {
  $__fn = function($f) use ($apply1, $map2, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_foldrWithIndex1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldrWithIndex1')))((function() use ($apply1, $map2, $f) {
  $__fn = function($i, $a = null, $b = null) use ($apply1, $map2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($b) use ($i, $a, &$__fn) { return $__fn($i, $a, $b); };
    if ($__num === 1) return function($a, $b = null) use ($i, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $a, $b);
      if ($__num2 === 1) return function($b) use ($i, $a, &$__fn) { return $__fn($i, $a, $b); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($apply1)(($map2)(($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')), ($f)($i, $a)), $b);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), ($pure)(($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'))));
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
    $__res = ($GLOBALS['Data_List_Lazy_Types_functorWithIndexList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorWithIndexList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_foldableWithIndexList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableWithIndexList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_traversableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traversableList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_traverseWithIndex': $v = (($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverseWithIndex')))((($GLOBALS['Data_NonEmpty_traversableWithIndexNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_traversableWithIndexNonEmpty')))(($GLOBALS['Data_List_Lazy_Types_traversableWithIndexList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traversableWithIndexList')))); break;
      case 'Data_List_Lazy_Types_traversableWithIndexNonEmptyList': $v = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map2 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traverseWithIndex1 = (($GLOBALS['Data_List_Lazy_Types_traverseWithIndex'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traverseWithIndex')))($dictApplicative);
    $__res = (function() use ($map2, $traverseWithIndex1) {
  $__body = function($f, $v) use ($map2, $traverseWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ne = $__case_1;
return ($map2)((function() {
  $__fn = function($xxs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($xxs) {
  $__fn = function($v1) use ($xxs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $xxs;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($traverseWithIndex1)((($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose')))($f1, (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))(0, (($GLOBALS['Data_List_Lazy_Types_add'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_add')))(1))), (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($ne)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $traverseWithIndex1, $__body, &$__fn) {
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
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_functorWithIndexNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorWithIndexNonEmptyList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_foldableWithIndexNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableWithIndexNonEmptyList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_traversableNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traversableNonEmptyList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_unfoldable1List': $v = ($go = (function() use (&$go) {
  $__fn = function($f, $b = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
return (($GLOBALS['Data_List_Lazy_Types_defer'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_defer')))((function() use ($f, $b, &$go) {
  $__body = function($v) use ($f, $b, &$go) {
    $v1 = ($f)($b);
    $__case_0 = $v1;
    if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v1)->tag === "Just"))) {
$a = ($__case_0)->v0;
$b__prime__ = (($__case_0)->v1)->v0;
return (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($a, ($go)($f, $b__prime__));
} else {
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v1)->tag === "Nothing"))) {
$a = ($__case_0)->v0;
return (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($a, ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($f, $b, &$go, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return (($GLOBALS['Data_Unfoldable1_Unfoldable1__dollar__Dict'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_Unfoldable1__dollar__Dict')))((object)["unfoldr1" => $go]);)(); break;
      case 'Data_List_Lazy_Types_unfoldableList': $v = ($go = (function() use (&$go) {
  $__fn = function($f, $b = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
return (($GLOBALS['Data_List_Lazy_Types_defer'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_defer')))((function() use ($f, $b, &$go) {
  $__body = function($v) use ($f, $b, &$go) {
    $v1 = ($f)($b);
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$a = (($__case_0)->v0)->v0;
$b__prime__ = (($__case_0)->v0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($a, ($go)($f, $b__prime__));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($f, $b, &$go, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return (($GLOBALS['Data_Unfoldable_Unfoldable__dollar__Dict'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_Unfoldable__dollar__Dict')))((object)["unfoldr" => $go, "Unfoldable10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_unfoldable1List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unfoldable1List'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);)(); break;
      case 'Data_List_Lazy_Types_unfoldr1': $v = (($GLOBALS['Data_Unfoldable1_unfoldr1'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_unfoldr1')))((($GLOBALS['Data_NonEmpty_unfoldable1NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_unfoldable1NonEmpty')))(($GLOBALS['Data_List_Lazy_Types_unfoldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unfoldableList')))); break;
      case 'Data_List_Lazy_Types_unfoldable1NonEmptyList': $v = (($GLOBALS['Data_Unfoldable1_Unfoldable1__dollar__Dict'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_Unfoldable1__dollar__Dict')))((object)["unfoldr1" => (function() {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($f, $b) {
  $__fn = function($v) use ($f, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_unfoldr1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unfoldr1')))($f, $b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_comonadNonEmptyList': $v = (($GLOBALS['Control_Comonad_Comonad__dollar__Dict'] ?? \Control\Comonad\phpurs_eval_thunk('Control_Comonad_Comonad__dollar__Dict')))((object)["extract" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
return (($GLOBALS['Data_NonEmpty_head'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_head')))((($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($nel));
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
})(), "Extend0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_extendNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_extendNonEmptyList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_monadList': $v = (($GLOBALS['Control_Monad_Monad__dollar__Dict'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_Monad__dollar__Dict')))((object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_applicativeList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_applicativeList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_bindList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_bindList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_bindList': $v = (($GLOBALS['Control_Bind_Bind__dollar__Dict'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_Bind__dollar__Dict')))((object)["bind" => (function() {
  $__fn = function($xs, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($xs, &$__fn) { return $__fn($xs, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
break;
case "Cons":
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))((($GLOBALS['Data_List_Lazy_Types_append1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append1')))(($f)($x), ((function() {
  $__fn = function($xs, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($xs, &$__fn) { return $__fn($xs, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
break;
case "Cons":
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))((($GLOBALS['Data_List_Lazy_Types_append1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append1')))(($f)($x), (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))(($GLOBALS['Data_List_Lazy_Types_bindList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_bindList')), $xs__prime__, $f)));
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
})();
    $__res = (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_List_Lazy_Types_map'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_map')))($go, (($GLOBALS['Data_List_Lazy_Types_unwrap'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unwrap')))($xs)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($xs__prime__, $f)));
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
})();
    $__res = (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_List_Lazy_Types_map'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_map')))($go, (($GLOBALS['Data_List_Lazy_Types_unwrap'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unwrap')))($xs)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_applyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_applyList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_applicativeList': $v = (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($a, ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_applyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_applyList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_applyList': $v = (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => (($GLOBALS['Control_Monad_ap'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_ap')))(($GLOBALS['Data_List_Lazy_Types_monadList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_monadList'))), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_apply': $v = (($GLOBALS['Control_Monad_ap'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_ap')))(($GLOBALS['Data_List_Lazy_Types_monadList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_monadList'))); break;
      case 'Data_List_Lazy_Types_applyNonEmptyList': $v = (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$nefs = $__case_0;
$neas = $__case_1;
$v2 = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($neas);
$v3 = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($nefs);
$__case_0 = $v3;
$__case_1 = $v2;
if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$f = ($__case_0)->v0;
$fs = ($__case_0)->v1;
$a = ($__case_1)->v0;
$as = ($__case_1)->v1;
return (($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($f, $a, $fs, $as) {
  $__fn = function($v4) use ($f, $a, $fs, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')))(($f)($a), (($GLOBALS['Data_List_Lazy_Types_append1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append1')))((($GLOBALS['Data_List_Lazy_Types_apply'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_apply')))($fs, (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($a, ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')))), (($GLOBALS['Data_List_Lazy_Types_apply'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_apply')))((($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($f, $fs), $as)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
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
    $__res = ($GLOBALS['Data_List_Lazy_Types_functorNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorNonEmptyList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_bindNonEmptyList': $v = (($GLOBALS['Control_Bind_Bind__dollar__Dict'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_Bind__dollar__Dict')))((object)["bind" => (function() {
  $__body = function($v, $f) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$nel = $__case_0;
$f1 = $__case_1;
$v1 = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($nel);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$a = ($__case_0)->v0;
$as = ($__case_0)->v1;
$v2 = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))((($GLOBALS['Data_List_Lazy_Types_unwrap'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unwrap')))(($f1)($a)));
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "NonEmpty":
$b = ($__case_0)->v0;
$bs = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($b, $bs, $as, $f1) {
  $__fn = function($v3) use ($b, $bs, $as, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')))($b, (($GLOBALS['Data_List_Lazy_Types_append1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append1')))($bs, (($GLOBALS['Data_List_Lazy_Types_bind'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_bind')))($as, (($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose')))(($GLOBALS['Data_List_Lazy_Types_toList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_toList')), $f1))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_applyNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_applyNonEmptyList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_altNonEmptyList': $v = (($GLOBALS['Control_Alt_Alt__dollar__Dict'] ?? \Control\Alt\phpurs_eval_thunk('Control_Alt_Alt__dollar__Dict')))((object)["alt" => (function() {
  $__body = function($v, $as__prime__) {
    $__case_0 = $v;
    $__case_1 = $as__prime__;
    if (true) {
$neas = $__case_0;
$as__prime__1 = $__case_1;
$v1 = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($neas);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$a = ($__case_0)->v0;
$as = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($a, $as, $as__prime__1) {
  $__fn = function($v2) use ($a, $as, $as__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')))($a, (($GLOBALS['Data_List_Lazy_Types_append1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append1')))($as, (($GLOBALS['Data_List_Lazy_Types_toList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_toList')))($as__prime__1)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $as__prime__ = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($as__prime__) use ($v, &$__fn) { return $__fn($v, $as__prime__); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $as__prime__);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_functorNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorNonEmptyList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_altList': $v = (($GLOBALS['Control_Alt_Alt__dollar__Dict'] ?? \Control\Alt\phpurs_eval_thunk('Control_Alt_Alt__dollar__Dict')))((object)["alt" => ($GLOBALS['Data_List_Lazy_Types_append1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append1')), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_plusList': $v = (($GLOBALS['Control_Plus_Plus__dollar__Dict'] ?? \Control\Plus\phpurs_eval_thunk('Control_Plus_Plus__dollar__Dict')))((object)["empty" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')), "Alt0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_altList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_altList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_singleton': $v = (($GLOBALS['Data_NonEmpty_singleton'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_singleton')))(($GLOBALS['Data_List_Lazy_Types_plusList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_plusList'))); break;
      case 'Data_List_Lazy_Types_alternativeList': $v = (($GLOBALS['Control_Alternative_Alternative__dollar__Dict'] ?? \Control\Alternative\phpurs_eval_thunk('Control_Alternative_Alternative__dollar__Dict')))((object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_applicativeList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_applicativeList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_plusList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_plusList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_monadPlusList': $v = (($GLOBALS['Control_MonadPlus_MonadPlus__dollar__Dict'] ?? \Control\MonadPlus\phpurs_eval_thunk('Control_MonadPlus_MonadPlus__dollar__Dict')))((object)["Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_monadList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_monadList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_alternativeList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_alternativeList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_applicativeNonEmptyList': $v = (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($a) {
  $__fn = function($v) use ($a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_singleton'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_singleton')))($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_applyNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_applyNonEmptyList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_Lazy_Types_monadNonEmptyList': $v = (($GLOBALS['Control_Monad_Monad__dollar__Dict'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_Monad__dollar__Dict')))((object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_applicativeNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_applicativeNonEmptyList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_Lazy_Types_bindNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_bindNonEmptyList'));
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


// Data_List_Lazy_Types_compose
function Data_List_Lazy_Types_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_compose';
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
$GLOBALS['Data_List_Lazy_Types_compose'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_compose';


// Data_List_Lazy_Types_map
function Data_List_Lazy_Types_map($f, $l = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_map';
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
$GLOBALS['Data_List_Lazy_Types_map'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_map';

// Data_List_Lazy_Types_eq1
function Data_List_Lazy_Types_eq1($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_eq1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))((($GLOBALS['Data_Lazy_eqLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_eqLazy')))($dictEq));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_eq1'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_eq1';

// Data_List_Lazy_Types_compare1
function Data_List_Lazy_Types_compare1($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_compare1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))((($GLOBALS['Data_Lazy_ordLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_ordLazy')))($dictOrd));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_compare1'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_compare1';




// Data_List_Lazy_Types_identity
function Data_List_Lazy_Types_identity($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_identity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_identity'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_identity';

// Data_List_Lazy_Types_List
function Data_List_Lazy_Types_List($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_List';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_List'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_List';


// Data_List_Lazy_Types_Cons
function Data_List_Lazy_Types_Cons($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_Cons';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_Cons'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_Cons';

// Data_List_Lazy_Types_NonEmptyList
function Data_List_Lazy_Types_NonEmptyList($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_NonEmptyList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_NonEmptyList'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_NonEmptyList';






// Data_List_Lazy_Types_append1
function Data_List_Lazy_Types_append1($xs, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_append1';
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, $__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($ys) {
  $__body = function($v) use ($ys) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($ys);
break;
case "Cons":
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))($x, (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))(($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_semigroupList')), $xs__prime__, $ys));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($ys, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_List_Lazy_Types_map'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_map')))($go, (($GLOBALS['Data_List_Lazy_Types_unwrap'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unwrap')))($xs)));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_append1'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_append1';



// Data_List_Lazy_Types_defer
function Data_List_Lazy_Types_defer($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_defer';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose')))(($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')), $f)));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_defer'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_defer';






// Data_List_Lazy_Types_eq11
function Data_List_Lazy_Types_eq11($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_eq11';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq);
    $__res = (function() {
  $__fn = function($xs, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_0)->tag === "Nil") && (($__case_1)->tag === "Nil"))) {
return true;
} else {
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
$y = ($__case_1)->v0;
$ys__prime__ = ($__case_1)->v1;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)((($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($xs), (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($ys));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_eq11'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_eq11';


// Data_List_Lazy_Types_eqList
function Data_List_Lazy_Types_eqList($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_eqList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (($GLOBALS['Data_List_Lazy_Types_eq11'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eq11')))($dictEq)]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_eqList'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_eqList';

// Data_List_Lazy_Types_eqNonEmptyList
function Data_List_Lazy_Types_eqNonEmptyList($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_eqNonEmptyList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Lazy_eqLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_eqLazy')))((($GLOBALS['Data_List_Lazy_Types_eqNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eqNonEmpty')))($dictEq));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_eqNonEmptyList'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_eqNonEmptyList';



// Data_List_Lazy_Types_compare11
function Data_List_Lazy_Types_compare11($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_compare11';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($xs, $ys = null) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($compare, &$go) {
  $__fn = function($v, $v1 = null) use ($compare, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_0)->tag === "Nil") && (($__case_1)->tag === "Nil"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "Nil")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "Nil")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
$y = ($__case_1)->v0;
$ys__prime__ = ($__case_1)->v1;
$v2 = ($compare)($x, $y);
$__case_0 = $v2;
if ((($__case_0)->tag === "EQ")) {
$__tco_tmp_0 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($xs__prime__);
$__tco_tmp_1 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($ys__prime__);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
if (true) {
$other = $__case_0;
return $other;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)((($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($xs), (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($ys));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_compare11'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_compare11';


// Data_List_Lazy_Types_ordList
function Data_List_Lazy_Types_ordList($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_ordList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eqList1 = (($GLOBALS['Data_List_Lazy_Types_eqList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eqList')))((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (($GLOBALS['Data_List_Lazy_Types_compare11'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compare11')))($dictOrd), "Eq0" => (function() use ($eqList1) {
  $__fn = function($__dollar____unused) use ($eqList1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqList1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_ordList'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_ordList';

// Data_List_Lazy_Types_ordNonEmptyList
function Data_List_Lazy_Types_ordNonEmptyList($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_ordNonEmptyList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Lazy_ordLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_ordLazy')))((($GLOBALS['Data_List_Lazy_Types_ordNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_ordNonEmpty')))($dictOrd));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_ordNonEmptyList'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_ordNonEmptyList';

// Data_List_Lazy_Types_cons
function Data_List_Lazy_Types_cons($x, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_cons';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($x, $__fn) { return $__fn($x, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($x, $xs) {
  $__fn = function($v) use ($x, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))($x, $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_cons'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_cons';


// Data_List_Lazy_Types_foldr
function Data_List_Lazy_Types_foldr($op, $z = null, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_foldr';
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($op, $z, $__fn) { return $__fn($op, $z, $xs); };
    if ($__num === 1) return function($z, $xs = null) use ($op, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($op, $z, $xs);
      if ($__num2 === 1) return function($xs) use ($op, $z, $__fn) { return $__fn($op, $z, $xs); };
      return phpurs_curry_fallback($__fn, [$op], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$rev = (($GLOBALS['Data_Foldable_foldl'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl')))(($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableList')), (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'))), ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')));
    $__res = (($GLOBALS['Data_Foldable_foldl'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl')))(($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableList')), (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))($op), $z, ($rev)($xs));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_foldr'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_foldr';





// Data_List_Lazy_Types_foldl1
function Data_List_Lazy_Types_foldl1($op) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_foldl1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use (&$go, $op) {
  $__fn = function($b, $xs = null) use (&$go, $op, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($b, &$__fn) { return $__fn($b, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($xs);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Nil":
return $b;
break;
case "Cons":
$hd = ($__case_0)->v0;
$tl = ($__case_0)->v1;
$__tco_tmp_0 = ($op)($b, $hd);
$__tco_tmp_1 = $tl;
$b = $__tco_tmp_0;
$xs = $__tco_tmp_1;
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
    $__res = $go;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_foldl1'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_foldl1';




// Data_List_Lazy_Types_showList
function Data_List_Lazy_Types_showList($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_showList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))($dictShow);
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show) {
  $__fn = function($xs) use ($show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$v = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($xs);
$__case_0 = $v;
$__case_res_0 = null;
switch (($__case_0)->tag) {
case "Nil":
$__case_res_0 = "";
break;
case "Cons":
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
$__case_res_0 = (($GLOBALS['Data_List_Lazy_Types_append'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append')))(($show)($x), (($GLOBALS['Data_List_Lazy_Types_foldl1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldl1')))((function() use ($show) {
  $__fn = function($shown, $x__prime__ = null) use ($show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x__prime__) use ($shown, &$__fn) { return $__fn($shown, $x__prime__); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_append'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append')))($shown, (($GLOBALS['Data_List_Lazy_Types_append'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append')))(",", ($show)($x__prime__)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "", $xs__prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
    $__res = (($GLOBALS['Data_List_Lazy_Types_append'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append')))("(fromFoldable [", (($GLOBALS['Data_List_Lazy_Types_append'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append')))($__case_res_0, "])"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_showList'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_showList';

// Data_List_Lazy_Types_showNonEmptyList
function Data_List_Lazy_Types_showNonEmptyList($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_showNonEmptyList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))((($GLOBALS['Data_Lazy_showLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_showLazy')))((($GLOBALS['Data_NonEmpty_showNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_showNonEmpty')))($dictShow, (($GLOBALS['Data_List_Lazy_Types_showList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_showList')))($dictShow))));
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
return (($GLOBALS['Data_List_Lazy_Types_append'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append')))("(NonEmptyList ", (($GLOBALS['Data_List_Lazy_Types_append'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append')))(($show)($nel), ")"));
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
$GLOBALS['Data_List_Lazy_Types_showNonEmptyList'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_showNonEmptyList';

// Data_List_Lazy_Types_showStep
function Data_List_Lazy_Types_showStep($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_showStep';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))($dictShow);
$show1 = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))((($GLOBALS['Data_List_Lazy_Types_showList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_showList')))($dictShow));
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show, $show1) {
  $__body = function($v) use ($show, $show1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return "Nil";
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_append'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append')))("(", (($GLOBALS['Data_List_Lazy_Types_append'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append')))(($show)($x), (($GLOBALS['Data_List_Lazy_Types_append'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append')))(" : ", (($GLOBALS['Data_List_Lazy_Types_append'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append')))(($show1)($xs), ")"))));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($show, $show1, $__body, &$__fn) {
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
$GLOBALS['Data_List_Lazy_Types_showStep'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_showStep';






// Data_List_Lazy_Types_foldrWithIndex1
function Data_List_Lazy_Types_foldrWithIndex1($f, $b = null, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_foldrWithIndex1';
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $b, $__fn) { return $__fn($f, $b, $xs); };
    if ($__num === 1) return function($b, $xs = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $b, $__fn) { return $__fn($f, $b, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($f, $b, $xs) {
    $rev = (($GLOBALS['Data_List_Lazy_Types_foldl1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldl1')))((function() {
  $__body = function($v1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Tuple":
$i = ($__case_0)->v0;
$acc = ($__case_0)->v1;
return (function() use ($i, $acc) {
  $__fn = function($a) use ($i, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))((($GLOBALS['Data_List_Lazy_Types_add'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_add')))($i, 1), (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($a, $acc));
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
  $__fn = function($v1) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    $v = ($rev)((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(0, ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'))), $xs);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$len = ($__case_0)->v0;
$revList = ($__case_0)->v1;
return (($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd')))((($GLOBALS['Data_List_Lazy_Types_foldl1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldl1')))((function() use ($f) {
  $__body = function($v1) use ($f) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Tuple":
$i = ($__case_0)->v0;
$b__prime__ = ($__case_0)->v1;
return (function() use ($i, $f, $b__prime__) {
  $__fn = function($a) use ($i, $f, $b__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))((($GLOBALS['Data_List_Lazy_Types_sub'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_sub')))($i, 1), ($f)((($GLOBALS['Data_List_Lazy_Types_sub'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_sub')))($i, 1), $a, $b__prime__));
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
  $__fn = function($v1) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($len, $b), $revList));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($f, $b, $xs);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_foldrWithIndex1'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_foldrWithIndex1';





// Data_List_Lazy_Types_toList
function Data_List_Lazy_Types_toList($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_toList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
return (($GLOBALS['Data_List_Lazy_Types_defer'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_defer')))((function() use ($nel) {
  $__body = function($v1) use ($nel) {
    $v2 = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($nel);
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($x, $xs);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($nel, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
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
$GLOBALS['Data_List_Lazy_Types_toList'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_toList';




















// Data_List_Lazy_Types_bind
function Data_List_Lazy_Types_bind($xs, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_bind';
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($xs, $__fn) { return $__fn($xs, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
break;
case "Cons":
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))((($GLOBALS['Data_List_Lazy_Types_append1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append1')))(($f)($x), (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))(($GLOBALS['Data_List_Lazy_Types_bindList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_bindList')), $xs__prime__, $f)));
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
})();
    $__res = (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_List_Lazy_Types_map'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_map')))($go, (($GLOBALS['Data_List_Lazy_Types_unwrap'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unwrap')))($xs)));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_bind'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_bind';











