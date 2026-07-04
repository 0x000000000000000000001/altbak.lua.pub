<?php

namespace Data\Set;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Set/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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
      case 'Data_Set_coerce': $v = (($GLOBALS['Safe_Coerce_coerce'] ?? \Safe\Coerce\phpurs_eval_thunk('Safe_Coerce_coerce')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Set_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Set_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Set_notEq': $v = (($GLOBALS['Data_Eq_notEq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_notEq')))(($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt'))); break;
      case 'Data_Set_toUnfoldable1': $v = (($GLOBALS['Data_Set_toUnfoldable'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toUnfoldable')))(($GLOBALS['Data_Unfoldable_unfoldableArray'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_unfoldableArray'))); break;
      case 'Data_Set_size': $v = (($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce')))(($GLOBALS['Data_Map_Internal_size'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_size'))); break;
      case 'Data_Set_isEmpty': $v = (($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce')))(($GLOBALS['Data_Map_Internal_isEmpty'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_isEmpty'))); break;
      case 'Data_Set_fromMap': $v = ($GLOBALS['Data_Set_Set'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_Set')); break;
      case 'Data_Set_foldableSet': $v = (($GLOBALS['Data_Foldable_Foldable__dollar__Dict'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_Foldable__dollar__Dict')))((object)["foldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap1 = (($GLOBALS['Data_Set_foldMap'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldMap')))($dictMonoid);
    $__res = (function() use ($foldMap1) {
  $__fn = function($f) use ($foldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_compose'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_compose')))(($foldMap1)($f), ($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, &$__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Set_compose'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_compose')))((($GLOBALS['Data_Set_foldl'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldl')))($f, $x), ($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList')));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldr" => (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, &$__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Set_compose'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_compose')))((($GLOBALS['Data_Set_foldr'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldr')))($f, $x), ($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList')));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Set_eq1Set': $v = (($GLOBALS['Data_Eq_Eq1__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq1__dollar__Dict')))((object)["eq1" => (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))((($GLOBALS['Data_Set_eqSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_eqSet')))($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Set_ord1Set': $v = (($GLOBALS['Data_Ord_Ord1__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord1__dollar__Dict')))((object)["compare1" => (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))((($GLOBALS['Data_Set_ordSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_ordSet')))($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Eq10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Set_eq1Set'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_eq1Set'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Set_empty': $v = (($GLOBALS['Data_Set_Set'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_Set')))(($GLOBALS['Data_Map_Internal_empty'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_empty'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };



// Data_Set_compose
function Data_Set_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_compose';
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
$GLOBALS['Data_Set_compose'] = __NAMESPACE__ . '\\Data_Set_compose';


// Data_Set_foldMap
function Data_Set_foldMap($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_foldMap';
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
    $__res = (($GLOBALS['Data_Foldable_foldl'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl')))(($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList')), (function() use ($append2, $f) {
  $__fn = function($acc) use ($append2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose')))(($append2)($acc), $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $mempty);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_foldMap'] = __NAMESPACE__ . '\\Data_Set_foldMap';

// Data_Set_foldl
function Data_Set_foldl($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_foldl';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use (&$go, $f) {
  $__fn = function($b, $v = null) use (&$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($b, &$__fn) { return $__fn($b, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Nil":
return $b;
break;
case "Cons":
$a = ($__case_0)->v0;
$as = ($__case_0)->v1;
$__tco_tmp_0 = ($f)($b, $a);
$__tco_tmp_1 = $as;
$b = $__tco_tmp_0;
$v = $__tco_tmp_1;
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
$GLOBALS['Data_Set_foldl'] = __NAMESPACE__ . '\\Data_Set_foldl';

// Data_Set_foldr
function Data_Set_foldr($f, $b = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_foldr';
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, $__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
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
switch (($__case_1)->tag) {
case "Nil":
$acc = $__case_0;
return $acc;
break;
case "Cons":
$acc = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
$__tco_tmp_0 = (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($x, $acc);
$__tco_tmp_1 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
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
$rev = ($go)(($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil')));
    $__res = (($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose')))((($GLOBALS['Data_Foldable_foldl'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl')))(($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList')), (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))($f), $b), $rev);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Set_foldr'] = __NAMESPACE__ . '\\Data_Set_foldr';

// Data_Set_map1
function Data_Set_map1($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_map1';
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
$GLOBALS['Data_Set_map1'] = __NAMESPACE__ . '\\Data_Set_map1';



// Data_Set_identity
function Data_Set_identity($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_identity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_identity'] = __NAMESPACE__ . '\\Data_Set_identity';

// Data_Set_Set
function Data_Set_Set($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_Set';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_Set'] = __NAMESPACE__ . '\\Data_Set_Set';

// Data_Set_union
function Data_Set_union($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_union';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce')))((($GLOBALS['Data_Map_Internal_union'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_union')))($dictOrd));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_union'] = __NAMESPACE__ . '\\Data_Set_union';

// Data_Set_toggle
function Data_Set_toggle($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_toggle';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$alter = (($GLOBALS['Data_Map_Internal_alter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_alter')))($dictOrd);
    $__res = (function() use ($alter) {
  $__body = function($a, $v) use ($alter) {
    $__case_0 = $a;
    $__case_1 = $v;
    if (true) {
$a1 = $__case_0;
$m = $__case_1;
return (($GLOBALS['Data_Set_Set'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_Set')))(($alter)((($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))((($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))), (function() {
  $__fn = function($v1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $a1, $m));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v = null) use ($alter, $__body, &$__fn) {
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
$GLOBALS['Data_Set_toggle'] = __NAMESPACE__ . '\\Data_Set_toggle';

// Data_Set_toMap
function Data_Set_toMap($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_toMap';
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
$GLOBALS['Data_Set_toMap'] = __NAMESPACE__ . '\\Data_Set_toMap';

// Data_Set_toList
function Data_Set_toList($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_toList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return (($GLOBALS['Data_Map_Internal_keys'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_keys')))($m);
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_toList'] = __NAMESPACE__ . '\\Data_Set_toList';

// Data_Set_toUnfoldable
function Data_Set_toUnfoldable($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_toUnfoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_compose'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_compose')))((($GLOBALS['Data_List_toUnfoldable'] ?? \Data\List\phpurs_eval_thunk('Data_List_toUnfoldable')))($dictUnfoldable), ($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_toUnfoldable'] = __NAMESPACE__ . '\\Data_Set_toUnfoldable';



// Data_Set_singleton
function Data_Set_singleton($a) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_singleton';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_Set'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_Set')))((($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton')))($a, ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_singleton'] = __NAMESPACE__ . '\\Data_Set_singleton';

// Data_Set_showSet
function Data_Set_showSet($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_showSet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))((($GLOBALS['Data_Show_showArray'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showArray')))($dictShow));
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show) {
  $__fn = function($s) use ($show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_append'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_append')))("(fromFoldable ", (($GLOBALS['Data_Set_append'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_append')))(($show)((($GLOBALS['Data_Set_toUnfoldable1'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toUnfoldable1')))($s)), ")"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_showSet'] = __NAMESPACE__ . '\\Data_Set_showSet';

// Data_Set_semigroupSet
function Data_Set_semigroupSet($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_semigroupSet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (($GLOBALS['Data_Set_union'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_union')))($dictOrd)]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_semigroupSet'] = __NAMESPACE__ . '\\Data_Set_semigroupSet';

// Data_Set_member
function Data_Set_member($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_member';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce')))((($GLOBALS['Data_Map_Internal_member'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_member')))($dictOrd));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_member'] = __NAMESPACE__ . '\\Data_Set_member';


// Data_Set_intersection
function Data_Set_intersection($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_intersection';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce')))((($GLOBALS['Data_Map_Internal_intersection'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_intersection')))($dictOrd));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_intersection'] = __NAMESPACE__ . '\\Data_Set_intersection';

// Data_Set_insert
function Data_Set_insert($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_insert';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$insert1 = (($GLOBALS['Data_Map_Internal_insert'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_insert')))($dictOrd);
    $__res = (function() use ($insert1) {
  $__body = function($a, $v) use ($insert1) {
    $__case_0 = $a;
    $__case_1 = $v;
    if (true) {
$a1 = $__case_0;
$m = $__case_1;
return (($GLOBALS['Data_Set_Set'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_Set')))(($insert1)($a1, ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), $m));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v = null) use ($insert1, $__body, &$__fn) {
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
$GLOBALS['Data_Set_insert'] = __NAMESPACE__ . '\\Data_Set_insert';



// Data_Set_foldl1
function Data_Set_foldl1($f, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_foldl1';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, $__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Set_compose'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_compose')))((($GLOBALS['Data_Set_foldl'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldl')))($f, $x), ($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList')));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Set_foldl1'] = __NAMESPACE__ . '\\Data_Set_foldl1';

// Data_Set_foldr1
function Data_Set_foldr1($f, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_foldr1';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, $__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Set_compose'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_compose')))((($GLOBALS['Data_Set_foldr'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldr')))($f, $x), ($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList')));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Set_foldr1'] = __NAMESPACE__ . '\\Data_Set_foldr1';

// Data_Set_findMin
function Data_Set_findMin($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_findMin';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return (($GLOBALS['Data_Set_map1'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_map1')))((function() {
  $__fn = function($v1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v1)->key;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Map_Internal_findMin'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_findMin')))($m));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_findMin'] = __NAMESPACE__ . '\\Data_Set_findMin';

// Data_Set_findMax
function Data_Set_findMax($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_findMax';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return (($GLOBALS['Data_Set_map1'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_map1')))((function() {
  $__fn = function($v1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v1)->key;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Map_Internal_findMax'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_findMax')))($m));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_findMax'] = __NAMESPACE__ . '\\Data_Set_findMax';

// Data_Set_filter
function Data_Set_filter($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_filter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce')))((($GLOBALS['Data_Map_Internal_filterKeys'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_filterKeys')))($dictOrd));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_filter'] = __NAMESPACE__ . '\\Data_Set_filter';

// Data_Set_eqSet
function Data_Set_eqSet($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_eqSet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))((($GLOBALS['Data_Map_Internal_eqMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_eqMap')))($dictEq, ($GLOBALS['Data_Eq_eqUnit'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqUnit'))));
    $__res = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() use ($eq) {
  $__body = function($v, $v1) use ($eq) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m1 = $__case_0;
$m2 = $__case_1;
return ($eq)($m1, $m2);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($eq, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_eqSet'] = __NAMESPACE__ . '\\Data_Set_eqSet';

// Data_Set_ordSet
function Data_Set_ordSet($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_ordSet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))((($GLOBALS['Data_List_Types_ordList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_ordList')))($dictOrd));
$eqSet1 = (($GLOBALS['Data_Set_eqSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_eqSet')))((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() use ($compare) {
  $__fn = function($s1, $s2 = null) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s2) use ($s1, &$__fn) { return $__fn($s1, $s2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($compare)((($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList')))($s1), (($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList')))($s2));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqSet1) {
  $__fn = function($__dollar____unused) use ($eqSet1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqSet1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_ordSet'] = __NAMESPACE__ . '\\Data_Set_ordSet';




// Data_Set_fromFoldable
function Data_Set_fromFoldable($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_fromFoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldl2 = (($GLOBALS['Data_Foldable_foldl'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl')))($dictFoldable);
    $__res = (function() use ($foldl2) {
  $__fn = function($dictOrd) use ($foldl2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$insert1 = (($GLOBALS['Data_Set_insert'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_insert')))($dictOrd);
    $__res = ($foldl2)((function() use ($insert1) {
  $__fn = function($m, $a = null) use ($insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($m, &$__fn) { return $__fn($m, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($insert1)($a, $m);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_Set_empty'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_empty')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_fromFoldable'] = __NAMESPACE__ . '\\Data_Set_fromFoldable';

// Data_Set_map
function Data_Set_map($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_map';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$insert1 = (($GLOBALS['Data_Set_insert'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_insert')))($dictOrd);
    $__res = (function() use ($insert1) {
  $__fn = function($f) use ($insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_foldl1'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldl1')))((function() use ($insert1, $f) {
  $__fn = function($m, $a = null) use ($insert1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($m, &$__fn) { return $__fn($m, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($insert1)(($f)($a), $m);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_Set_empty'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_empty')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_map'] = __NAMESPACE__ . '\\Data_Set_map';

// Data_Set_mapMaybe
function Data_Set_mapMaybe($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_mapMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$insert1 = (($GLOBALS['Data_Set_insert'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_insert')))($dictOrd);
    $__res = (function() use ($insert1) {
  $__fn = function($f) use ($insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_foldr1'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldr1')))((function() use ($insert1, $f) {
  $__fn = function($a, $acc = null) use ($insert1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($a, &$__fn) { return $__fn($a, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))($acc, (function() use ($insert1, $acc) {
  $__fn = function($b) use ($insert1, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($insert1)($b, $acc);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($f)($a));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_Set_empty'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_empty')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_mapMaybe'] = __NAMESPACE__ . '\\Data_Set_mapMaybe';

// Data_Set_monoidSet
function Data_Set_monoidSet($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_monoidSet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$semigroupSet1 = (($GLOBALS['Data_Set_semigroupSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_semigroupSet')))($dictOrd);
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => ($GLOBALS['Data_Set_empty'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_empty')), "Semigroup0" => (function() use ($semigroupSet1) {
  $__fn = function($__dollar____unused) use ($semigroupSet1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupSet1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_monoidSet'] = __NAMESPACE__ . '\\Data_Set_monoidSet';

// Data_Set_unions
function Data_Set_unions($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_unions';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldl2 = (($GLOBALS['Data_Foldable_foldl'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl')))($dictFoldable);
    $__res = (function() use ($foldl2) {
  $__fn = function($dictOrd) use ($foldl2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldl2)((($GLOBALS['Data_Set_union'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_union')))($dictOrd), ($GLOBALS['Data_Set_empty'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_empty')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_unions'] = __NAMESPACE__ . '\\Data_Set_unions';

// Data_Set_difference
function Data_Set_difference($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_difference';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce')))((($GLOBALS['Data_Map_Internal_difference'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_difference')))($dictOrd));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_difference'] = __NAMESPACE__ . '\\Data_Set_difference';

// Data_Set_subset
function Data_Set_subset($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_subset';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$difference1 = (($GLOBALS['Data_Set_difference'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_difference')))($dictOrd);
    $__res = (function() use ($difference1) {
  $__fn = function($s1, $s2 = null) use ($difference1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s2) use ($s1, &$__fn) { return $__fn($s1, $s2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Set_isEmpty'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_isEmpty')))(($difference1)($s1, $s2));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_subset'] = __NAMESPACE__ . '\\Data_Set_subset';

// Data_Set_properSubset
function Data_Set_properSubset($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_properSubset';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$subset1 = (($GLOBALS['Data_Set_subset'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_subset')))($dictOrd);
    $__res = (function() use ($subset1) {
  $__fn = function($s1, $s2 = null) use ($subset1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s2) use ($s1, &$__fn) { return $__fn($s1, $s2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Set_conj'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_conj')))((($GLOBALS['Data_Set_notEq'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_notEq')))((($GLOBALS['Data_Set_size'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_size')))($s1), (($GLOBALS['Data_Set_size'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_size')))($s2)), ($subset1)($s1, $s2));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_properSubset'] = __NAMESPACE__ . '\\Data_Set_properSubset';

// Data_Set_delete
function Data_Set_delete($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_delete';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce')))((($GLOBALS['Data_Map_Internal_delete'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_delete')))($dictOrd));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_delete'] = __NAMESPACE__ . '\\Data_Set_delete';

// Data_Set_checkValid
function Data_Set_checkValid($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_checkValid';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce')))((($GLOBALS['Data_Map_Internal_checkValid'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_checkValid')))($dictOrd));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_checkValid'] = __NAMESPACE__ . '\\Data_Set_checkValid';

// Data_Set_catMaybes
function Data_Set_catMaybes($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_catMaybes';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Set_mapMaybe'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_mapMaybe')))($dictOrd, ($GLOBALS['Data_Set_identity'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_identity')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_catMaybes'] = __NAMESPACE__ . '\\Data_Set_catMaybes';

