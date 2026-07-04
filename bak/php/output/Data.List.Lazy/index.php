<?php

namespace Data\List\Lazy;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Internal/index.php';
require_once __DIR__ . '/../Data.List.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
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
      case 'Data_List_Lazy_unwrap': $v = (($GLOBALS['Data_Newtype_unwrap'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_List_Lazy_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_List_Lazy_lessThanOrEq': $v = (($GLOBALS['Data_Ord_lessThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThanOrEq')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_List_Lazy_tailRecM2': $v = (($GLOBALS['Control_Monad_Rec_Class_tailRecM2'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRecM2')))(($GLOBALS['Control_Monad_Rec_Class_monadRecMaybe'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_monadRecMaybe'))); break;
      case 'Data_List_Lazy_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_List_Lazy_lessThan': $v = (($GLOBALS['Data_Ord_lessThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThan')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_List_Lazy_one': $v = 1; break;
      case 'Data_List_Lazy_fix': $v = (($GLOBALS['Control_Lazy_fix'] ?? \Control\Lazy\phpurs_eval_thunk('Control_Lazy_fix')))(($GLOBALS['Data_List_Lazy_Types_lazyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_lazyList'))); break;
      case 'Data_List_Lazy_greaterThan': $v = (($GLOBALS['Data_Ord_greaterThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThan')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_List_Lazy_greaterThanOrEq': $v = (($GLOBALS['Data_Ord_greaterThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThanOrEq')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_List_Lazy_unfoldr': $v = ($go = (function() use (&$go) {
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
return $go;)(); break;
      case 'Data_List_Lazy_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_List_Lazy_pure': $v = ($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')); break;
      case 'Data_List_Lazy_any': $v = (($GLOBALS['Data_Foldable_any'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_any')))(($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableList')), ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'))); break;
      case 'Data_List_Lazy_not': $v = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot')); break;
      case 'Data_List_Lazy_zip': $v = (($GLOBALS['Data_List_Lazy_zipWith'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_zipWith')))(($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple'))); break;
      case 'Data_List_Lazy_unzip': $v = (($GLOBALS['Data_List_Lazy_foldr'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_foldr')))((function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
return (function() use ($a, $b) {
  $__body = function($v1) use ($a, $b) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Tuple":
$as = ($__case_0)->v0;
$bs = ($__case_0)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))((($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($a, $as), (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($b, $bs));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($a, $b, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
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
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')), ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')))); break;
      case 'Data_List_Lazy_null': $v = (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))(($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')), ($GLOBALS['Data_List_Lazy_uncons'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_uncons'))); break;
      case 'Data_List_Lazy_newtypePattern': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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
      case 'Data_List_Lazy_length': $v = (($GLOBALS['Data_List_Lazy_foldl'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_foldl')))((function() {
  $__fn = function($l, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($l, &$__fn) { return $__fn($l, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_List_Lazy_add'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_add')))($l, 1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), 0); break;
      case 'Data_List_Lazy_last': $v = ($go = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))($go, ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')));)(); break;
      case 'Data_List_Lazy_init': $v = ($go = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))($go, ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')));)(); break;
      case 'Data_List_Lazy_fromStep': $v = (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))(($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')), (function() {
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
})()); break;
      case 'Data_List_Lazy_concatMap': $v = (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($GLOBALS['Data_List_Lazy_bind1'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_bind1'))); break;
      case 'Data_List_Lazy_catMaybes': $v = (($GLOBALS['Data_List_Lazy_mapMaybe'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_mapMaybe')))(($GLOBALS['Data_List_Lazy_identity'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_identity'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_List_Lazy_apply
function Data_List_Lazy_apply($f, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_apply';
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
$GLOBALS['Data_List_Lazy_apply'] = __NAMESPACE__ . '\\Data_List_Lazy_apply';

// Data_List_Lazy_map
function Data_List_Lazy_map($f, $l = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_map';
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
$GLOBALS['Data_List_Lazy_map'] = __NAMESPACE__ . '\\Data_List_Lazy_map';


// Data_List_Lazy_sequence
function Data_List_Lazy_sequence($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_sequence';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Traversable_traverse'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traverse')))(($GLOBALS['Data_List_Lazy_Types_traversableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traversableList')), $dictApplicative, ($GLOBALS['Data_List_Lazy_Types_identity'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_identity')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_sequence'] = __NAMESPACE__ . '\\Data_List_Lazy_sequence';


// Data_List_Lazy_foldr
function Data_List_Lazy_foldr($op, $z = null, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_foldr';
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
$GLOBALS['Data_List_Lazy_foldr'] = __NAMESPACE__ . '\\Data_List_Lazy_foldr';

// Data_List_Lazy_map1
function Data_List_Lazy_map1($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_map1';
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
$GLOBALS['Data_List_Lazy_map1'] = __NAMESPACE__ . '\\Data_List_Lazy_map1';

// Data_List_Lazy_compose
function Data_List_Lazy_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_compose';
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
$GLOBALS['Data_List_Lazy_compose'] = __NAMESPACE__ . '\\Data_List_Lazy_compose';




// Data_List_Lazy_defer
function Data_List_Lazy_defer($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_defer';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose')))(($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')), $f)));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_defer'] = __NAMESPACE__ . '\\Data_List_Lazy_defer';

// Data_List_Lazy_foldl
function Data_List_Lazy_foldl($op) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_foldl';
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
$GLOBALS['Data_List_Lazy_foldl'] = __NAMESPACE__ . '\\Data_List_Lazy_foldl';








// Data_List_Lazy_map2
function Data_List_Lazy_map2($f, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_map2';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($f, $__fn) { return $__fn($f, $xs); };
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
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_map2'] = __NAMESPACE__ . '\\Data_List_Lazy_map2';

// Data_List_Lazy_bind
function Data_List_Lazy_bind($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_bind';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_0)->tag) {
case "Just":
$x = ($__case_0)->v0;
$k = $__case_1;
return ($k)($x);
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
$GLOBALS['Data_List_Lazy_bind'] = __NAMESPACE__ . '\\Data_List_Lazy_bind';




// Data_List_Lazy_append1
function Data_List_Lazy_append1($xs, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_append1';
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
$GLOBALS['Data_List_Lazy_append1'] = __NAMESPACE__ . '\\Data_List_Lazy_append1';

// Data_List_Lazy_bind1
function Data_List_Lazy_bind1($xs, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_bind1';
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
$GLOBALS['Data_List_Lazy_bind1'] = __NAMESPACE__ . '\\Data_List_Lazy_bind1';

// Data_List_Lazy_identity
function Data_List_Lazy_identity($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_identity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_identity'] = __NAMESPACE__ . '\\Data_List_Lazy_identity';

// Data_List_Lazy_Pattern
function Data_List_Lazy_Pattern($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Pattern';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Pattern'] = __NAMESPACE__ . '\\Data_List_Lazy_Pattern';

// Data_List_Lazy_zipWith
function Data_List_Lazy_zipWith($f, $xs = null, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_zipWith';
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
while (true) {
$go = (function() use ($f) {
  $__body = function($v, $v1) use ($f) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Nil")) {
return ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
} else {
if ((($__case_1)->tag === "Nil")) {
return ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
} else {
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$a = ($__case_0)->v0;
$as = ($__case_0)->v1;
$b = ($__case_1)->v0;
$bs = ($__case_1)->v1;
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))(($f)($a, $b), (($GLOBALS['Data_List_Lazy_zipWith'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_zipWith')))($f, $as, $bs));
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v, $v1 = null) use ($f, $__body, &$__fn) {
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
return (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_List_Lazy_apply'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_apply')))((($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map')))($go, (($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap')))($xs)), (($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap')))($ys)));
};
    $__res = null;
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_zipWith'] = __NAMESPACE__ . '\\Data_List_Lazy_zipWith';

// Data_List_Lazy_zipWithA
function Data_List_Lazy_zipWithA($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_zipWithA';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sequence1 = (($GLOBALS['Data_List_Lazy_sequence'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_sequence')))($dictApplicative);
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
    $__res = ($sequence1)((($GLOBALS['Data_List_Lazy_zipWith'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_zipWith')))($f, $xs, $ys));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_zipWithA'] = __NAMESPACE__ . '\\Data_List_Lazy_zipWithA';


// Data_List_Lazy_updateAt
function Data_List_Lazy_updateAt($n, $x = null, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_updateAt';
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($n, $x, $__fn) { return $__fn($n, $x, $xs); };
    if ($__num === 1) return function($x, $xs = null) use ($n, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($n, $x, $xs);
      if ($__num2 === 1) return function($xs) use ($n, $x, $__fn) { return $__fn($n, $x, $xs); };
      return phpurs_curry_fallback($__fn, [$n], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
while (true) {
$go = (function() use ($x) {
  $__body = function($v, $v1) use ($x) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nil")) {
return ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
} else {
if ((($__case_0 === 0) && (($__case_1)->tag === "Cons"))) {
$ys = ($__case_1)->v1;
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))($x, $ys);
} else {
switch (($__case_1)->tag) {
case "Cons":
$n__prime__ = $__case_0;
$y = ($__case_1)->v0;
$ys = ($__case_1)->v1;
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))($y, (($GLOBALS['Data_List_Lazy_updateAt'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_updateAt')))((($GLOBALS['Data_List_Lazy_sub'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_sub')))($n__prime__, 1), $x, $ys));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
  };
  $__fn = function($v, $v1 = null) use ($x, $__body, &$__fn) {
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
return (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map')))(($go)($n), (($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap')))($xs)));
};
    $__res = null;
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_updateAt'] = __NAMESPACE__ . '\\Data_List_Lazy_updateAt';


// Data_List_Lazy_uncons
function Data_List_Lazy_uncons($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_uncons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($xs) {
    $v = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($xs);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
break;
case "Cons":
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((object)["head" => $x, "tail" => $xs__prime__]);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($xs);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_uncons'] = __NAMESPACE__ . '\\Data_List_Lazy_uncons';

// Data_List_Lazy_toUnfoldable
function Data_List_Lazy_toUnfoldable($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_toUnfoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Unfoldable_unfoldr'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_unfoldr')))($dictUnfoldable, (function() {
  $__fn = function($xs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_map1'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map1')))((function() {
  $__fn = function($rec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($rec)->head, ($rec)->tail);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_List_Lazy_uncons'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_uncons')))($xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_toUnfoldable'] = __NAMESPACE__ . '\\Data_List_Lazy_toUnfoldable';

// Data_List_Lazy_takeWhile
function Data_List_Lazy_takeWhile($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_takeWhile';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$go = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
} else {
throw new \Exception("Pattern match failure");
};
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
})();
return (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))(($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')), (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))((($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map')))($go), ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'))));
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_takeWhile'] = __NAMESPACE__ . '\\Data_List_Lazy_takeWhile';

// Data_List_Lazy_take
function Data_List_Lazy_take($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_take';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$go = (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "Nil":
return ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
break;
case "Cons":
$n__prime__ = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))($x, (($GLOBALS['Data_List_Lazy_take'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_take')))((($GLOBALS['Data_List_Lazy_sub'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_sub')))($n__prime__, 1), $xs));
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
})();
$__case_0 = (($GLOBALS['Data_List_Lazy_lessThanOrEq'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_lessThanOrEq')))($n, 0);
if (($__case_0 === true)) {
return (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')));
} else {
if (true) {
return (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))(($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')), (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))((($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map')))(($go)($n)), ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'))));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_take'] = __NAMESPACE__ . '\\Data_List_Lazy_take';

// Data_List_Lazy_tail
function Data_List_Lazy_tail($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_tail';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_map1'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map1')))((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v)->tail;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_List_Lazy_uncons'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_uncons')))($xs));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_tail'] = __NAMESPACE__ . '\\Data_List_Lazy_tail';

// Data_List_Lazy_stripPrefix
function Data_List_Lazy_stripPrefix($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_stripPrefix';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq);
    $__res = (function() {
  $__body = function($v, $s) {
    $__case_0 = $v;
    $__case_1 = $s;
    if (true) {
$p__prime__ = $__case_0;
$s1 = $__case_1;
$go = (function() {
  $__body = function($prefix, $input) {
    $v1 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($prefix);
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Nil":
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Control_Monad_Rec_Class_Done'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Done')))($input));
break;
case "Cons":
$p = ($__case_0)->v0;
$ps = ($__case_0)->v1;
$v2 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($input);
$__case_0 = $v2;
if ((($__case_0)->tag === "Cons")) {
$i = ($__case_0)->v0;
$is = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
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
  $__fn = function($prefix, $input = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($input) use ($prefix, &$__fn) { return $__fn($prefix, $input); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($prefix, $input);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return (($GLOBALS['Data_List_Lazy_tailRecM2'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_tailRecM2')))($go, $p__prime__, $s1);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $s = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($v, &$__fn) { return $__fn($v, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $s);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_stripPrefix'] = __NAMESPACE__ . '\\Data_List_Lazy_stripPrefix';

// Data_List_Lazy_span
function Data_List_Lazy_span($p, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_span';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($p, $__fn) { return $__fn($p, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = (($GLOBALS['Data_List_Lazy_uncons'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_uncons')))($xs);
$__case_0 = $v;
if (((($__case_0)->tag === "Just") && (is_object)(($__case_0)->v0))) {
$x = (($__case_0)->v0)->head;
$xs__prime__ = (($__case_0)->v0)->tail;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return (object)["init" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')), "rest" => $xs];
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_span'] = __NAMESPACE__ . '\\Data_List_Lazy_span';

// Data_List_Lazy_snoc
function Data_List_Lazy_snoc($xs, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_snoc';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($xs, $__fn) { return $__fn($xs, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_List_Lazy_foldr'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_foldr')))(($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')), (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($x, ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'))), $xs);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_snoc'] = __NAMESPACE__ . '\\Data_List_Lazy_snoc';

// Data_List_Lazy_singleton
function Data_List_Lazy_singleton($a) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_singleton';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($a, ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_singleton'] = __NAMESPACE__ . '\\Data_List_Lazy_singleton';

// Data_List_Lazy_showPattern
function Data_List_Lazy_showPattern($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_showPattern';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))((($GLOBALS['Data_List_Lazy_Types_showList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_showList')))($dictShow));
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return (($GLOBALS['Data_List_Lazy_append'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_append')))("(Pattern ", (($GLOBALS['Data_List_Lazy_append'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_append')))(($show)($s), ")"));
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
$GLOBALS['Data_List_Lazy_showPattern'] = __NAMESPACE__ . '\\Data_List_Lazy_showPattern';

// Data_List_Lazy_scanlLazy
function Data_List_Lazy_scanlLazy($f, $acc = null, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_scanlLazy';
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $acc, $__fn) { return $__fn($f, $acc, $xs); };
    if ($__num === 1) return function($acc, $xs = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $acc, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $acc, $__fn) { return $__fn($f, $acc, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
while (true) {
$go = (function() use ($f, $acc) {
  $__body = function($v) use ($f, $acc) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
break;
case "Cons":
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
$acc__prime__ = ($f)($acc, $x);
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))($acc__prime__, (($GLOBALS['Data_List_Lazy_scanlLazy'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_scanlLazy')))($f, $acc__prime__, $xs__prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $acc, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map')))($go, (($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap')))($xs)));
};
    $__res = null;
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_scanlLazy'] = __NAMESPACE__ . '\\Data_List_Lazy_scanlLazy';

// Data_List_Lazy_reverse
function Data_List_Lazy_reverse($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_reverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_defer'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_defer')))((function() use ($xs) {
  $__fn = function($v) use ($xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_foldl'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_foldl')))((($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'))), ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')), $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_reverse'] = __NAMESPACE__ . '\\Data_List_Lazy_reverse';

// Data_List_Lazy_replicateM
function Data_List_Lazy_replicateM($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_replicateM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$pure1 = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$bind2 = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
return (function() {
  $__body = function($n, $m) {
    $__case_0 = $n;
    $__case_1 = $m;
    if (true) {
$n1 = $__case_0;
$m1 = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($n, $m = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($n, &$__fn) { return $__fn($n, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($n, $m);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_replicateM'] = __NAMESPACE__ . '\\Data_List_Lazy_replicateM';

// Data_List_Lazy_repeat
function Data_List_Lazy_repeat($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_repeat';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_fix'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_fix')))((function() use ($x) {
  $__fn = function($xs) use ($x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($x, $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_repeat'] = __NAMESPACE__ . '\\Data_List_Lazy_repeat';

// Data_List_Lazy_replicate
function Data_List_Lazy_replicate($i, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_replicate';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($i, $__fn) { return $__fn($i, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_List_Lazy_take'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_take')))($i, (($GLOBALS['Data_List_Lazy_repeat'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_repeat')))($xs));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_replicate'] = __NAMESPACE__ . '\\Data_List_Lazy_replicate';

// Data_List_Lazy_range
function Data_List_Lazy_range($start, $end = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_range';
  if ($__num < 2) {
    if ($__num === 1) return function($end) use ($start, $__fn) { return $__fn($start, $end); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($start, $end) {
    $__case_0 = $start;
    $__case_1 = $end;
    if (true) {
$start1 = $__case_0;
$end1 = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($start, $end);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_range'] = __NAMESPACE__ . '\\Data_List_Lazy_range';

// Data_List_Lazy_partition
function Data_List_Lazy_partition($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_partition';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($f) {
  $__body = function($x, $v) use ($f) {
    $__case_0 = $x;
    $__case_1 = $v;
    if ((is_object)($__case_1)) {
$x1 = $__case_0;
$ys = ($__case_1)->yes;
$ns = ($__case_1)->no;
$__case_0 = ($f)($x1);
if (($__case_0 === true)) {
return (object)["yes" => (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($x1, $ys), "no" => $ns];
} else {
if (true) {
return (object)["yes" => $ys, "no" => (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($x1, $ns)];
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $v = null) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($x, &$__fn) { return $__fn($x, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (($GLOBALS['Data_List_Lazy_foldr'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_foldr')))($go, (object)["yes" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')), "no" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'))]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_partition'] = __NAMESPACE__ . '\\Data_List_Lazy_partition';


// Data_List_Lazy_nubBy
function Data_List_Lazy_nubBy($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_nubBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$goStep = (function() use ($p, &$go) {
  $__fn = function($v, $v1 = null) use ($p, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_1)->tag) {
case "Nil":
return ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
break;
case "Cons":
$s = $__case_0;
$a = ($__case_1)->v0;
$as = ($__case_1)->v1;
$v2 = (($GLOBALS['Data_List_Internal_insertAndLookupBy'] ?? \Data\List\Internal\phpurs_eval_thunk('Data_List_Internal_insertAndLookupBy')))($p, $a, $s);
$__case_0 = $v2;
if ((is_object)($__case_0)) {
$found = ($__case_0)->found;
$s__prime__ = ($__case_0)->result;
$__case_0 = $found;
if (($__case_0 === true)) {
return (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))(($go)($s__prime__, $as));
} else {
if (true) {
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))($a, ($go)($s__prime__, $as));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
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
$go = (function() use (&$goStep) {
  $__fn = function($s, $v = null) use (&$goStep, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($s, &$__fn) { return $__fn($s, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $s;
$__case_1 = $v;
if (true) {
$s1 = $__case_0;
$l = $__case_1;
return (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map')))(($goStep)($s1), $l));
} else {
throw new \Exception("Pattern match failure");
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)(($GLOBALS['Data_List_Internal_emptySet'] ?? \Data\List\Internal\phpurs_eval_thunk('Data_List_Internal_emptySet')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_nubBy'] = __NAMESPACE__ . '\\Data_List_Lazy_nubBy';

// Data_List_Lazy_nub
function Data_List_Lazy_nub($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_nub';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_nubBy'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_nubBy')))((($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))($dictOrd));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_nub'] = __NAMESPACE__ . '\\Data_List_Lazy_nub';


// Data_List_Lazy_mapMaybe
function Data_List_Lazy_mapMaybe($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_mapMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$go = (function() use ($f, &$go) {
  $__fn = function($v) use ($f, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$v1 = ($f)($x);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Nothing":
$__tco_tmp_0 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($xs);
$v = $__tco_tmp_0;
continue 2;
break;
case "Just":
$y = ($__case_0)->v0;
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))($y, (($GLOBALS['Data_List_Lazy_mapMaybe'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_mapMaybe')))($f, $xs));
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
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))(($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')), (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))((($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map')))($go), ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'))));
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_mapMaybe'] = __NAMESPACE__ . '\\Data_List_Lazy_mapMaybe';

// Data_List_Lazy_some
function Data_List_Lazy_some($dictAlternative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_some';
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
$defer1 = (($GLOBALS['Control_Lazy_defer'] ?? \Control\Lazy\phpurs_eval_thunk('Control_Lazy_defer')))($dictLazy);
    $__res = (function() use ($apply1, $map3, $defer1, $dictAlternative, $dictLazy) {
  $__fn = function($v) use ($apply1, $map3, $defer1, $dictAlternative, $dictLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($apply1)(($map3)(($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')), $v), ($defer1)((function() use ($dictAlternative, $dictLazy, $v) {
  $__fn = function($v1) use ($dictAlternative, $dictLazy, $v, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_many'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_many')))($dictAlternative, $dictLazy, $v);
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
$GLOBALS['Data_List_Lazy_some'] = __NAMESPACE__ . '\\Data_List_Lazy_some';

// Data_List_Lazy_many
function Data_List_Lazy_many($dictAlternative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_many';
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
    $__res = ($alt)((($GLOBALS['Data_List_Lazy_some'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_some')))($dictAlternative, $dictLazy, $v), ($pure1)(($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_many'] = __NAMESPACE__ . '\\Data_List_Lazy_many';



// Data_List_Lazy_iterate
function Data_List_Lazy_iterate($f, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_iterate';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, $__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_List_Lazy_fix'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_fix')))((function() use ($x, $f) {
  $__fn = function($xs) use ($x, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($x, (($GLOBALS['Data_List_Lazy_map2'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map2')))($f, $xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_iterate'] = __NAMESPACE__ . '\\Data_List_Lazy_iterate';

// Data_List_Lazy_insertAt
function Data_List_Lazy_insertAt($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_insertAt';
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
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if (($__case_0 === 0)) {
$x = $__case_1;
$xs = $__case_2;
return (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($x, $xs);
} else {
if (true) {
$n = $__case_0;
$x = $__case_1;
$xs = $__case_2;
$go = (function() use ($x, $n) {
  $__body = function($v3) use ($x, $n) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "Nil":
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))($x, ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')));
break;
case "Cons":
$y = ($__case_0)->v0;
$ys = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))($y, (($GLOBALS['Data_List_Lazy_insertAt'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_insertAt')))((($GLOBALS['Data_List_Lazy_sub'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_sub')))($n, 1), $x, $ys));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($x, $n, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map')))($go, (($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap')))($xs)));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_insertAt'] = __NAMESPACE__ . '\\Data_List_Lazy_insertAt';


// Data_List_Lazy_index
function Data_List_Lazy_index($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_index';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_0)->tag === "Nil")) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
if (((($__case_0)->tag === "Cons") && ($__case_1 === 0))) {
$a = ($__case_0)->v0;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($a);
} else {
switch (($__case_0)->tag) {
case "Cons":
$as = ($__case_0)->v1;
$i = $__case_1;
$__tco_tmp_0 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($as);
$__tco_tmp_1 = (($GLOBALS['Data_List_Lazy_sub'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_sub')))($i, 1);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)((($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($xs));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_index'] = __NAMESPACE__ . '\\Data_List_Lazy_index';

// Data_List_Lazy_head
function Data_List_Lazy_head($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_head';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_map1'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map1')))((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v)->head;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_List_Lazy_uncons'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_uncons')))($xs));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_head'] = __NAMESPACE__ . '\\Data_List_Lazy_head';

// Data_List_Lazy_transpose
function Data_List_Lazy_transpose($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_transpose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$v = (($GLOBALS['Data_List_Lazy_uncons'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_uncons')))($xs);
$__case_0 = $v;
if ((($__case_0)->tag === "Nothing")) {
return $xs;
} else {
if (((($__case_0)->tag === "Just") && (is_object)(($__case_0)->v0))) {
$h = (($__case_0)->v0)->head;
$xss = (($__case_0)->v0)->tail;
$v1 = (($GLOBALS['Data_List_Lazy_uncons'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_uncons')))($h);
$__case_0 = $v1;
if ((($__case_0)->tag === "Nothing")) {
$__tco_tmp_0 = $xss;
$xs = $__tco_tmp_0;
continue;
} else {
if (((($__case_0)->tag === "Just") && (is_object)(($__case_0)->v0))) {
$x = (($__case_0)->v0)->head;
$xs__prime__ = (($__case_0)->v0)->tail;
return (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))((($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($x, (($GLOBALS['Data_List_Lazy_mapMaybe'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_mapMaybe')))(($GLOBALS['Data_List_Lazy_head'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_head')), $xss)), (($GLOBALS['Data_List_Lazy_transpose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_transpose')))((($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($xs__prime__, (($GLOBALS['Data_List_Lazy_mapMaybe'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_mapMaybe')))(($GLOBALS['Data_List_Lazy_tail'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_tail')), $xss))));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_transpose'] = __NAMESPACE__ . '\\Data_List_Lazy_transpose';

// Data_List_Lazy_groupBy
function Data_List_Lazy_groupBy($eq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_groupBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$go = (function() use ($eq) {
  $__body = function($v) use ($eq) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$v1 = (($GLOBALS['Data_List_Lazy_span'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_span')))(($eq)($x), $xs);
$__case_0 = $v1;
if ((is_object)($__case_0)) {
$ys = ($__case_0)->init;
$zs = ($__case_0)->rest;
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))((($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($x, $ys) {
  $__fn = function($v2) use ($x, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')))($x, $ys);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), (($GLOBALS['Data_List_Lazy_groupBy'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_groupBy')))($eq, $zs));
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($eq, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))(($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')), (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))((($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map')))($go), ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'))));
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_groupBy'] = __NAMESPACE__ . '\\Data_List_Lazy_groupBy';

// Data_List_Lazy_group
function Data_List_Lazy_group($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_group';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_groupBy'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_groupBy')))((($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_group'] = __NAMESPACE__ . '\\Data_List_Lazy_group';


// Data_List_Lazy_insertBy
function Data_List_Lazy_insertBy($cmp, $x = null, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_insertBy';
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($cmp, $x, $__fn) { return $__fn($cmp, $x, $xs); };
    if ($__num === 1) return function($x, $xs = null) use ($cmp, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($cmp, $x, $xs);
      if ($__num2 === 1) return function($xs) use ($cmp, $x, $__fn) { return $__fn($cmp, $x, $xs); };
      return phpurs_curry_fallback($__fn, [$cmp], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
while (true) {
$go = (function() use ($x, $cmp) {
  $__body = function($v) use ($x, $cmp) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))($x, ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')));
break;
case "Cons":
$ys = $__case_0;
$y = ($__case_0)->v0;
$ys__prime__ = ($__case_0)->v1;
$v1 = ($cmp)($x, $y);
$__case_0 = $v1;
if ((($__case_0)->tag === "GT")) {
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))($y, (($GLOBALS['Data_List_Lazy_insertBy'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_insertBy')))($cmp, $x, $ys__prime__));
} else {
if (true) {
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))($x, (($GLOBALS['Data_List_Lazy_fromStep'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_fromStep')))($ys));
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
  $__fn = function($v) use ($x, $cmp, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map')))($go, (($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap')))($xs)));
};
    $__res = null;
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_insertBy'] = __NAMESPACE__ . '\\Data_List_Lazy_insertBy';

// Data_List_Lazy_insert
function Data_List_Lazy_insert($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_insert';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_insertBy'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_insertBy')))((($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))($dictOrd));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_insert'] = __NAMESPACE__ . '\\Data_List_Lazy_insert';

// Data_List_Lazy_fromFoldable
function Data_List_Lazy_fromFoldable($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_fromFoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Foldable_foldr'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldr')))($dictFoldable, ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')), ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_fromFoldable'] = __NAMESPACE__ . '\\Data_List_Lazy_fromFoldable';

// Data_List_Lazy_foldrLazy
function Data_List_Lazy_foldrLazy($dictLazy) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_foldrLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$defer1 = (($GLOBALS['Control_Lazy_defer'] ?? \Control\Lazy\phpurs_eval_thunk('Control_Lazy_defer')))($dictLazy);
    $__res = (function() use ($defer1) {
  $__fn = function($op, $z = null) use ($defer1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($op, &$__fn) { return $__fn($op, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($defer1, $op, &$go, $z) {
  $__fn = function($xs) use ($defer1, $op, &$go, $z, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$v = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($xs);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Cons":
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
return ($defer1)((function() use ($op, $x, &$go, $xs__prime__) {
  $__fn = function($v1) use ($op, $x, &$go, $xs__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($op)($x, ($go)($xs__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
case "Nil":
return $z;
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
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_foldrLazy'] = __NAMESPACE__ . '\\Data_List_Lazy_foldrLazy';

// Data_List_Lazy_foldM
function Data_List_Lazy_foldM($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_foldM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$pure1 = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$bind2 = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
return (function() use ($pure1, $bind2, $dictMonad) {
  $__body = function($f, $b, $xs) use ($pure1, $bind2, $dictMonad) {
    $v = (($GLOBALS['Data_List_Lazy_uncons'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_uncons')))($xs);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)($b);
} else {
if (((($__case_0)->tag === "Just") && (is_object)(($__case_0)->v0))) {
$a = (($__case_0)->v0)->head;
$as = (($__case_0)->v0)->tail;
return ($bind2)(($f)($b, $a), (function() use ($dictMonad, $f, $as) {
  $__fn = function($b__prime__) use ($dictMonad, $f, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_foldM'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_foldM')))($dictMonad, $f, $b__prime__, $as);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($f, $b = null, $xs = null) use ($pure1, $bind2, $dictMonad, $__body, &$__fn) {
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
})();
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_foldM'] = __NAMESPACE__ . '\\Data_List_Lazy_foldM';

// Data_List_Lazy_findIndex
function Data_List_Lazy_findIndex($fn) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_findIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($fn, &$go) {
  $__fn = function($n, $list = null) use ($fn, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($list) use ($n, &$__fn) { return $__fn($n, $list); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
return (($GLOBALS['Data_List_Lazy_bind'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_bind')))((($GLOBALS['Data_List_Lazy_uncons'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_uncons')))($list), (function() use ($fn, $n, &$go) {
  $__body = function($o) use ($fn, $n, &$go) {
    $__case_0 = ($fn)(($o)->head);
    if (($__case_0 === true)) {
return (($GLOBALS['Data_List_Lazy_pure'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_pure')))($n);
} else {
if (true) {
return ($go)((($GLOBALS['Data_List_Lazy_add'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_add')))($n, 1), ($o)->tail);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($o) use ($fn, $n, &$go, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($o);
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
    $__res = ($go)(0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_findIndex'] = __NAMESPACE__ . '\\Data_List_Lazy_findIndex';

// Data_List_Lazy_findLastIndex
function Data_List_Lazy_findLastIndex($fn, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_findLastIndex';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($fn, $__fn) { return $__fn($fn, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_List_Lazy_map1'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map1')))((function() use ($xs) {
  $__fn = function($v) use ($xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_sub'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_sub')))((($GLOBALS['Data_List_Lazy_sub'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_sub')))((($GLOBALS['Data_List_Lazy_length'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_length')))($xs), 1), $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_List_Lazy_findIndex'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_findIndex')))($fn, (($GLOBALS['Data_List_Lazy_reverse'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_reverse')))($xs)));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_findLastIndex'] = __NAMESPACE__ . '\\Data_List_Lazy_findLastIndex';

// Data_List_Lazy_filterM
function Data_List_Lazy_filterM($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_filterM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$pure1 = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$bind2 = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
return (function() use ($pure1, $bind2, $dictMonad) {
  $__body = function($p, $list) use ($pure1, $bind2, $dictMonad) {
    $v = (($GLOBALS['Data_List_Lazy_uncons'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_uncons')))($list);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)(($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')));
} else {
if (((($__case_0)->tag === "Just") && (is_object)(($__case_0)->v0))) {
$x = (($__case_0)->v0)->head;
$xs = (($__case_0)->v0)->tail;
return ($bind2)(($p)($x), (function() use ($bind2, $dictMonad, $p, $xs, $pure1, $x) {
  $__fn = function($b) use ($bind2, $dictMonad, $p, $xs, $pure1, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind2)((($GLOBALS['Data_List_Lazy_filterM'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_filterM')))($dictMonad, $p, $xs), (function() use ($pure1, $b, $x) {
  $__fn = function($xs__prime__) use ($pure1, $b, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $b;
$__case_res_0 = null;
if (($__case_0 === true)) {
$__case_res_0 = (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($x, $xs__prime__);
} else {
if (true) {
$__case_res_0 = $xs__prime__;
} else {
throw new \Exception("Pattern match failure");
};
};
    $__res = ($pure1)($__case_res_0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($p, $list = null) use ($pure1, $bind2, $dictMonad, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($list) use ($p, &$__fn) { return $__fn($p, $list); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($p, $list);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_filterM'] = __NAMESPACE__ . '\\Data_List_Lazy_filterM';

// Data_List_Lazy_filter
function Data_List_Lazy_filter($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_filter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$go = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
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
return (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))(($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')), (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))((($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map')))($go), ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'))));
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_filter'] = __NAMESPACE__ . '\\Data_List_Lazy_filter';

// Data_List_Lazy_intersectBy
function Data_List_Lazy_intersectBy($eq, $xs = null, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_intersectBy';
  if ($__num < 3) {
    if ($__num === 2) return function($ys) use ($eq, $xs, $__fn) { return $__fn($eq, $xs, $ys); };
    if ($__num === 1) return function($xs, $ys = null) use ($eq, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($eq, $xs, $ys);
      if ($__num2 === 1) return function($ys) use ($eq, $xs, $__fn) { return $__fn($eq, $xs, $ys); };
      return phpurs_curry_fallback($__fn, [$eq], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = (($GLOBALS['Data_List_Lazy_filter'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_filter')))((function() use ($eq, $ys) {
  $__fn = function($x) use ($eq, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_any'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_any')))(($eq)($x), $ys);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_intersectBy'] = __NAMESPACE__ . '\\Data_List_Lazy_intersectBy';

// Data_List_Lazy_intersect
function Data_List_Lazy_intersect($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_intersect';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_intersectBy'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_intersectBy')))((($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_intersect'] = __NAMESPACE__ . '\\Data_List_Lazy_intersect';

// Data_List_Lazy_nubByEq
function Data_List_Lazy_nubByEq($eq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_nubByEq';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$go = (function() use ($eq) {
  $__body = function($v) use ($eq) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))($x, (($GLOBALS['Data_List_Lazy_nubByEq'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_nubByEq')))($eq, (($GLOBALS['Data_List_Lazy_filter'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_filter')))((function() use ($eq, $x) {
  $__fn = function($y) use ($eq, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_not'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_not')))(($eq)($x, $y));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($eq, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))(($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')), (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))((($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map')))($go), ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'))));
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_nubByEq'] = __NAMESPACE__ . '\\Data_List_Lazy_nubByEq';

// Data_List_Lazy_nubEq
function Data_List_Lazy_nubEq($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_nubEq';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_nubByEq'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_nubByEq')))((($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_nubEq'] = __NAMESPACE__ . '\\Data_List_Lazy_nubEq';

// Data_List_Lazy_eqPattern
function Data_List_Lazy_eqPattern($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_eqPattern';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))((($GLOBALS['Data_List_Lazy_Types_eqList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eqList')))($dictEq));
    $__res = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() use ($eq) {
  $__body = function($x, $y) use ($eq) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($eq)($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($eq, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_eqPattern'] = __NAMESPACE__ . '\\Data_List_Lazy_eqPattern';

// Data_List_Lazy_ordPattern
function Data_List_Lazy_ordPattern($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_ordPattern';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))((($GLOBALS['Data_List_Lazy_Types_ordList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_ordList')))($dictOrd));
$eqPattern1 = (($GLOBALS['Data_List_Lazy_eqPattern'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_eqPattern')))((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() use ($compare) {
  $__body = function($x, $y) use ($compare) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($compare)($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($compare, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqPattern1) {
  $__fn = function($__dollar____unused) use ($eqPattern1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqPattern1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_ordPattern'] = __NAMESPACE__ . '\\Data_List_Lazy_ordPattern';

// Data_List_Lazy_elemLastIndex
function Data_List_Lazy_elemLastIndex($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_elemLastIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq);
    $__res = (function() use ($eq) {
  $__fn = function($x) use ($eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_findLastIndex'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_findLastIndex')))((function() use ($eq, $x) {
  $__fn = function($v) use ($eq, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($eq)($v, $x);
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
$GLOBALS['Data_List_Lazy_elemLastIndex'] = __NAMESPACE__ . '\\Data_List_Lazy_elemLastIndex';

// Data_List_Lazy_elemIndex
function Data_List_Lazy_elemIndex($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_elemIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq);
    $__res = (function() use ($eq) {
  $__fn = function($x) use ($eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_findIndex'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_findIndex')))((function() use ($eq, $x) {
  $__fn = function($v) use ($eq, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($eq)($v, $x);
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
$GLOBALS['Data_List_Lazy_elemIndex'] = __NAMESPACE__ . '\\Data_List_Lazy_elemIndex';

// Data_List_Lazy_dropWhile
function Data_List_Lazy_dropWhile($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_dropWhile';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
$xs = $__case_0;
return (($GLOBALS['Data_List_Lazy_fromStep'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_fromStep')))($xs);
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))($go, ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_dropWhile'] = __NAMESPACE__ . '\\Data_List_Lazy_dropWhile';

// Data_List_Lazy_drop
function Data_List_Lazy_drop($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_drop';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (($__case_0 === 0)) {
$xs = $__case_1;
return $xs;
} else {
switch (($__case_1)->tag) {
case "Nil":
return ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
break;
case "Cons":
$n__prime__ = $__case_0;
$xs = ($__case_1)->v1;
$__tco_tmp_0 = (($GLOBALS['Data_List_Lazy_sub'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_sub')))($n__prime__, 1);
$__tco_tmp_1 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($xs);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))(($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')), (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))((($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map')))(($go)($n)), ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'))));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_drop'] = __NAMESPACE__ . '\\Data_List_Lazy_drop';

// Data_List_Lazy_slice
function Data_List_Lazy_slice($start, $end = null, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_slice';
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($start, $end, $__fn) { return $__fn($start, $end, $xs); };
    if ($__num === 1) return function($end, $xs = null) use ($start, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($start, $end, $xs);
      if ($__num2 === 1) return function($xs) use ($start, $end, $__fn) { return $__fn($start, $end, $xs); };
      return phpurs_curry_fallback($__fn, [$start], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = (($GLOBALS['Data_List_Lazy_take'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_take')))((($GLOBALS['Data_List_Lazy_sub'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_sub')))($end, $start), (($GLOBALS['Data_List_Lazy_drop'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_drop')))($start, $xs));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_slice'] = __NAMESPACE__ . '\\Data_List_Lazy_slice';

// Data_List_Lazy_deleteBy
function Data_List_Lazy_deleteBy($eq, $x = null, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_deleteBy';
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($eq, $x, $__fn) { return $__fn($eq, $x, $xs); };
    if ($__num === 1) return function($x, $xs = null) use ($eq, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($eq, $x, $xs);
      if ($__num2 === 1) return function($xs) use ($eq, $x, $__fn) { return $__fn($eq, $x, $xs); };
      return phpurs_curry_fallback($__fn, [$eq], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
while (true) {
$go = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
break;
case "Cons":
$y = ($__case_0)->v0;
$ys = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
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
})();
return (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map')))($go, (($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap')))($xs)));
};
    $__res = null;
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_deleteBy'] = __NAMESPACE__ . '\\Data_List_Lazy_deleteBy';

// Data_List_Lazy_unionBy
function Data_List_Lazy_unionBy($eq, $xs = null, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_unionBy';
  if ($__num < 3) {
    if ($__num === 2) return function($ys) use ($eq, $xs, $__fn) { return $__fn($eq, $xs, $ys); };
    if ($__num === 1) return function($xs, $ys = null) use ($eq, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($eq, $xs, $ys);
      if ($__num2 === 1) return function($ys) use ($eq, $xs, $__fn) { return $__fn($eq, $xs, $ys); };
      return phpurs_curry_fallback($__fn, [$eq], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = (($GLOBALS['Data_List_Lazy_append1'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_append1')))($xs, (($GLOBALS['Data_List_Lazy_foldl'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_foldl')))((($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))((($GLOBALS['Data_List_Lazy_deleteBy'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_deleteBy')))($eq)), (($GLOBALS['Data_List_Lazy_nubByEq'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_nubByEq')))($eq, $ys), $xs));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_unionBy'] = __NAMESPACE__ . '\\Data_List_Lazy_unionBy';

// Data_List_Lazy_union
function Data_List_Lazy_union($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_union';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_unionBy'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unionBy')))((($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_union'] = __NAMESPACE__ . '\\Data_List_Lazy_union';

// Data_List_Lazy_deleteAt
function Data_List_Lazy_deleteAt($n, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_deleteAt';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($n, $__fn) { return $__fn($n, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$go = (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nil")) {
return ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
} else {
if ((($__case_0 === 0) && (($__case_1)->tag === "Cons"))) {
$ys = ($__case_1)->v1;
return (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($ys);
} else {
switch (($__case_1)->tag) {
case "Cons":
$n__prime__ = $__case_0;
$y = ($__case_1)->v0;
$ys = ($__case_1)->v1;
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))($y, (($GLOBALS['Data_List_Lazy_deleteAt'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_deleteAt')))((($GLOBALS['Data_List_Lazy_sub'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_sub')))($n__prime__, 1), $ys));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
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
})();
return (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map')))(($go)($n), (($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap')))($xs)));
};
    $__res = null;
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_deleteAt'] = __NAMESPACE__ . '\\Data_List_Lazy_deleteAt';

// Data_List_Lazy_delete
function Data_List_Lazy_delete($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_delete';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_deleteBy'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_deleteBy')))((($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_delete'] = __NAMESPACE__ . '\\Data_List_Lazy_delete';

// Data_List_Lazy_difference
function Data_List_Lazy_difference($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_difference';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_foldl'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_foldl')))((($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))((($GLOBALS['Data_List_Lazy_delete'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_delete')))($dictEq)));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_difference'] = __NAMESPACE__ . '\\Data_List_Lazy_difference';

// Data_List_Lazy_cycle
function Data_List_Lazy_cycle($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_cycle';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_fix'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_fix')))((function() use ($xs) {
  $__fn = function($ys) use ($xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_append1'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_append1')))($xs, $ys);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_cycle'] = __NAMESPACE__ . '\\Data_List_Lazy_cycle';


// Data_List_Lazy_concat
function Data_List_Lazy_concat($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_concat';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_bind1'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_bind1')))($v, ($GLOBALS['Data_List_Lazy_identity'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_identity')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_concat'] = __NAMESPACE__ . '\\Data_List_Lazy_concat';


// Data_List_Lazy_alterAt
function Data_List_Lazy_alterAt($n, $f = null, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_alterAt';
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($n, $f, $__fn) { return $__fn($n, $f, $xs); };
    if ($__num === 1) return function($f, $xs = null) use ($n, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($n, $f, $xs);
      if ($__num2 === 1) return function($xs) use ($n, $f, $__fn) { return $__fn($n, $f, $xs); };
      return phpurs_curry_fallback($__fn, [$n], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
while (true) {
$go = (function() use ($f) {
  $__body = function($v, $v1) use ($f) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nil")) {
return ($GLOBALS['Data_List_Lazy_Types_Nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Nil'));
} else {
if ((($__case_0 === 0) && (($__case_1)->tag === "Cons"))) {
$y = ($__case_1)->v0;
$ys = ($__case_1)->v1;
$v2 = ($f)($y);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Nothing":
return (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($ys);
break;
case "Just":
$y__prime__ = ($__case_0)->v0;
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))($y__prime__, $ys);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
switch (($__case_1)->tag) {
case "Cons":
$n__prime__ = $__case_0;
$y = ($__case_1)->v0;
$ys = ($__case_1)->v1;
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))($y, (($GLOBALS['Data_List_Lazy_alterAt'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_alterAt')))((($GLOBALS['Data_List_Lazy_sub'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_sub')))($n__prime__, 1), $f, $ys));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
  };
  $__fn = function($v, $v1 = null) use ($f, $__body, &$__fn) {
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
return (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map')))(($go)($n), (($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap')))($xs)));
};
    $__res = null;
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_alterAt'] = __NAMESPACE__ . '\\Data_List_Lazy_alterAt';

// Data_List_Lazy_modifyAt
function Data_List_Lazy_modifyAt($n, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_modifyAt';
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($n, $__fn) { return $__fn($n, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_List_Lazy_alterAt'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_alterAt')))($n, (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))(($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), $f));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_modifyAt'] = __NAMESPACE__ . '\\Data_List_Lazy_modifyAt';

