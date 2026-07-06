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
      case 'Data_Set_coerce': $v = (($GLOBALS['Safe_Coerce_coerce'] ?? \Safe\Coerce\phpurs_eval_thunk('Safe_Coerce_coerce')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Set_compose': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compose;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Set_append': $v = (function() {
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
      case 'Data_Set_foldMap': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Set_foldl': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Set_foldr': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Set_map1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Set_conj': $v = (function() {
  $__case_0 = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->conj;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Set_notEq': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  $eq3 = $__case_res_0;
  return (function() use ($eq3) {
  $__fn = function($x, $y = null) use ($eq3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Eq_eq2 = ($GLOBALS['Data_Eq_eq2'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq2'));
    $__res = ($__global_Data_Eq_eq2)(($eq3)($x, $y), false);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Set_identity': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->identity;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Set_toUnfoldable1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Unfoldable_unfoldableArray'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_unfoldableArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->unfoldr;
} else {
throw new \Exception("Pattern match failure");
};
  return (($GLOBALS['Data_Set_compose'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_compose')))(($__case_res_0)((function() {
  $__fn = function($xs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_map = ($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map'));
$__global_Data_List_uncons = ($GLOBALS['Data_List_uncons'] ?? \Data\List\phpurs_eval_thunk('Data_List_uncons'));
    $__res = ($__global_Data_List_map)((function() {
  $__fn = function($rec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($rec)->head, ($rec)->tail);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_List_uncons)($xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList')));
})(); break;
      case 'Data_Set_size': $v = (($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce')))(($GLOBALS['Data_Map_Internal_size'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_size'))); break;
      case 'Data_Set_isEmpty': $v = (($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce')))(($GLOBALS['Data_Map_Internal_isEmpty'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_isEmpty'))); break;
      case 'Data_Set_fromMap': $v = ($GLOBALS['Data_Set_Set'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_Set')); break;
      case 'Data_Set_foldableSet': $v = (object)["foldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_foldMap = ($GLOBALS['Data_Set_foldMap'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldMap'));
$__global_Data_Set_compose = ($GLOBALS['Data_Set_compose'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_compose'));
$__global_Data_Set_toList = ($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList'));
$foldMap1 = ($__global_Data_Set_foldMap)($dictMonoid);
    $__res = (function() use ($__global_Data_Set_compose, $foldMap1, $__global_Data_Set_toList) {
  $__fn = function($f) use ($__global_Data_Set_compose, $foldMap1, $__global_Data_Set_toList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Set_compose)(($foldMap1)($f), $__global_Data_Set_toList);
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
$__global_Data_Set_compose = ($GLOBALS['Data_Set_compose'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_compose'));
$__global_Data_Set_foldl = ($GLOBALS['Data_Set_foldl'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldl'));
$__global_Data_Set_toList = ($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList'));
    $__res = ($__global_Data_Set_compose)(($__global_Data_Set_foldl)($f, $x), $__global_Data_Set_toList);
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
$__global_Data_Set_compose = ($GLOBALS['Data_Set_compose'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_compose'));
$__global_Data_Set_foldr = ($GLOBALS['Data_Set_foldr'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldr'));
$__global_Data_Set_toList = ($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList'));
    $__res = ($__global_Data_Set_compose)(($__global_Data_Set_foldr)($f, $x), $__global_Data_Set_toList);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Set_foldl1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Set_foldableSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldableSet'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Set_foldr1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Set_foldableSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldableSet'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Set_eq1Set': $v = (object)["eq1" => (function() use ($dict) {
  $__body = function($dictEq) use ($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictEq) use ($dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($dictEq);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Set_ord1Set': $v = (object)["compare1" => (function() use ($dict) {
  $__body = function($dictOrd) use ($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictOrd) use ($dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($dictOrd);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Eq10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_eq1Set = ($GLOBALS['Data_Set_eq1Set'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_eq1Set'));
    $__res = $__global_Data_Set_eq1Set;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Set_empty': $v = ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };












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
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = ($__global_Data_Set_coerce)(((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeUnionWith, $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($__global_Data_Function_const));
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
$__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
$__global_Data_Map_Internal_unsafeSplit = ($GLOBALS['Data_Map_Internal_unsafeSplit'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeSplit'));
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$alter = (function() use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeSplit, $compare, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode) {
  $__body = function($f, $k, $m) use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeSplit, $compare, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode) {
    $v = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeSplit, $compare, $k, $m);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Split":
$v1 = ($__case_0)->v0;
$l = ($__case_0)->v1;
$r = ($__case_0)->v2;
$v2 = ($f)($v1);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Nothing":
return ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, $l, $r);
break;
case "Just":
$v__prime__ = ($__case_0)->v0;
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $k, $v__prime__, $l, $r);
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
  $__fn = function($f, $k = null, $m = null) use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeSplit, $compare, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m) use ($f, $k, &$__fn) { return $__fn($f, $k, $m); };
    if ($__num === 1) return function($k, $m = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $k, $m);
      if ($__num2 === 1) return function($m) use ($f, $k, &$__fn) { return $__fn($f, $k, $m); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $k, $m);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($alter, $__global_Data_Maybe_maybe, $__global_Data_Unit_unit) {
  $__body = function($a, $v) use ($alter, $__global_Data_Maybe_maybe, $__global_Data_Unit_unit) {
    $__case_0 = $a;
    $__case_1 = $v;
    if (true) {
$a1 = $__case_0;
$m = $__case_1;
return ($alter)(($__global_Data_Maybe_maybe)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Data_Unit_unit), (function() {
  $__fn = function($v1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $a1, $m);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v = null) use ($alter, $__global_Data_Maybe_maybe, $__global_Data_Unit_unit, $__body, &$__fn) {
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
    $__global_Data_Map_Internal_keys = ($GLOBALS['Data_Map_Internal_keys'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_keys'));
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return ($__global_Data_Map_Internal_keys)($m);
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
$__global_Data_Set_compose = ($GLOBALS['Data_Set_compose'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_compose'));
$__global_Data_List_map = ($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map'));
$__global_Data_List_uncons = ($GLOBALS['Data_List_uncons'] ?? \Data\List\phpurs_eval_thunk('Data_List_uncons'));
$__global_Data_Set_toList = ($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList'));
$__case_0 = $dictUnfoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->unfoldr;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Set_compose)(($__case_res_0)((function() use ($__global_Data_List_map, $__global_Data_List_uncons) {
  $__fn = function($xs) use ($__global_Data_List_map, $__global_Data_List_uncons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_map)((function() {
  $__fn = function($rec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($rec)->head, ($rec)->tail);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_List_uncons)($xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $__global_Data_Set_toList);
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
$__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_Map_Internal_singleton)($a, $__global_Data_Unit_unit);
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
$__global_Data_Set_append = ($GLOBALS['Data_Set_append'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_append'));
$__global_Data_Set_toUnfoldable1 = ($GLOBALS['Data_Set_toUnfoldable1'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toUnfoldable1'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show = $__case_res_0;
    $__res = (object)["show" => (function() use ($__global_Data_Set_append, $show, $__global_Data_Set_toUnfoldable1) {
  $__fn = function($s) use ($__global_Data_Set_append, $show, $__global_Data_Set_toUnfoldable1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Set_append)("(fromFoldable ", ($__global_Data_Set_append)(($show)(($__global_Data_Set_toUnfoldable1)($s)), ")"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
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
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (object)["append" => ($__global_Data_Set_coerce)(((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeUnionWith, $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($__global_Data_Function_const))];
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
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = ($__global_Data_Set_coerce)((function() use ($compare) {
  $__fn = function($k) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($compare, $k, &$go) {
  $__fn = function($v) use ($compare, $k, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return false;
break;
case "Node":
$mk = ($__case_0)->v2;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue 3;
break;
case "GT":
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue 3;
break;
case "EQ":
return true;
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
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
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
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeIntersectionWith = ($GLOBALS['Data_Map_Internal_unsafeIntersectionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeIntersectionWith'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = ($__global_Data_Set_coerce)(((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeIntersectionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeIntersectionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeIntersectionWith, $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($__global_Data_Function_const));
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
$__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$insert1 = (function() use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode) {
  $__fn = function($k, $v = null) use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($k, &$__fn) { return $__fn($k, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go) {
  $__fn = function($v1) use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Leaf":
return ($__global_Data_Map_Internal_singleton)($k, $v);
break;
case "Node":
$mh = ($__case_0)->v0;
$ms = ($__case_0)->v1;
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "LT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
break;
case "GT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
break;
case "EQ":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($mh, $ms, $k, $v, $ml, $mr);
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
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($insert1, $__global_Data_Unit_unit) {
  $__body = function($a, $v) use ($insert1, $__global_Data_Unit_unit) {
    $__case_0 = $a;
    $__case_1 = $v;
    if (true) {
$a1 = $__case_0;
$m = $__case_1;
return ($insert1)($a1, $__global_Data_Unit_unit, $m);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v = null) use ($insert1, $__global_Data_Unit_unit, $__body, &$__fn) {
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





// Data_Set_findMin
function Data_Set_findMin($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_findMin';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__global_Data_Set_map1 = ($GLOBALS['Data_Set_map1'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_map1'));
    $__global_Data_Map_Internal_findMin = ($GLOBALS['Data_Map_Internal_findMin'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_findMin'));
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return ($__global_Data_Set_map1)((function() {
  $__fn = function($v1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v1)->key;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_Map_Internal_findMin)($m));
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
    $__global_Data_Set_map1 = ($GLOBALS['Data_Set_map1'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_map1'));
    $__global_Data_Map_Internal_findMax = ($GLOBALS['Data_Map_Internal_findMax'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_findMax'));
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return ($__global_Data_Set_map1)((function() {
  $__fn = function($v1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v1)->key;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_Map_Internal_findMax)($m));
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
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
    $__res = ($__global_Data_Set_coerce)((function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
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
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
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
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
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
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq = $__case_res_0;
    $__res = (object)["eq" => (function() use ($eq) {
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
})()];
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
$__global_Data_Set_toList = ($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq = $__case_res_1;
$eqSet1 = (object)["eq" => (function() use ($eq) {
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
})()];
    $__res = (object)["compare" => (function() use ($compare, $__global_Data_Set_toList) {
  $__fn = function($s1, $s2 = null) use ($compare, $__global_Data_Set_toList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s2) use ($s1, &$__fn) { return $__fn($s1, $s2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($compare)(($__global_Data_Set_toList)($s1), ($__global_Data_Set_toList)($s2));
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
})()];
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
$__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl2 = $__case_res_0;
    $__res = (function() use ($__global_Data_Map_Internal_singleton, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Unit_unit, $foldl2) {
  $__fn = function($dictOrd) use ($__global_Data_Map_Internal_singleton, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Unit_unit, $foldl2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictOrd;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_1;
$insert1 = (function() use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode) {
  $__fn = function($k, $v = null) use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($k, &$__fn) { return $__fn($k, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go) {
  $__fn = function($v1) use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Leaf":
return ($__global_Data_Map_Internal_singleton)($k, $v);
break;
case "Node":
$mh = ($__case_0)->v0;
$ms = ($__case_0)->v1;
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "LT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
break;
case "GT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
break;
case "EQ":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($mh, $ms, $k, $v, $ml, $mr);
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
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$insert1 = (function() use ($insert1, $__global_Data_Unit_unit) {
  $__body = function($a, $v) use ($insert1, $__global_Data_Unit_unit) {
    $__case_0 = $a;
    $__case_1 = $v;
    if (true) {
$a1 = $__case_0;
$m = $__case_1;
return ($insert1)($a1, $__global_Data_Unit_unit, $m);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v = null) use ($insert1, $__global_Data_Unit_unit, $__body, &$__fn) {
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
})(), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
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
$__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Data_Set_foldl1 = ($GLOBALS['Data_Set_foldl1'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldl1'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$insert1 = (function() use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode) {
  $__fn = function($k, $v = null) use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($k, &$__fn) { return $__fn($k, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go) {
  $__fn = function($v1) use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Leaf":
return ($__global_Data_Map_Internal_singleton)($k, $v);
break;
case "Node":
$mh = ($__case_0)->v0;
$ms = ($__case_0)->v1;
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "LT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
break;
case "GT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
break;
case "EQ":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($mh, $ms, $k, $v, $ml, $mr);
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
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$insert1 = (function() use ($insert1, $__global_Data_Unit_unit) {
  $__body = function($a, $v) use ($insert1, $__global_Data_Unit_unit) {
    $__case_0 = $a;
    $__case_1 = $v;
    if (true) {
$a1 = $__case_0;
$m = $__case_1;
return ($insert1)($a1, $__global_Data_Unit_unit, $m);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v = null) use ($insert1, $__global_Data_Unit_unit, $__body, &$__fn) {
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
    $__res = (function() use ($__global_Data_Set_foldl1, $insert1) {
  $__fn = function($f) use ($__global_Data_Set_foldl1, $insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Set_foldl1)((function() use ($insert1, $f) {
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
})(), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
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
$__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Data_Set_foldr1 = ($GLOBALS['Data_Set_foldr1'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldr1'));
$__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$insert1 = (function() use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode) {
  $__fn = function($k, $v = null) use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($k, &$__fn) { return $__fn($k, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go) {
  $__fn = function($v1) use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Leaf":
return ($__global_Data_Map_Internal_singleton)($k, $v);
break;
case "Node":
$mh = ($__case_0)->v0;
$ms = ($__case_0)->v1;
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "LT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
break;
case "GT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
break;
case "EQ":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($mh, $ms, $k, $v, $ml, $mr);
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
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$insert1 = (function() use ($insert1, $__global_Data_Unit_unit) {
  $__body = function($a, $v) use ($insert1, $__global_Data_Unit_unit) {
    $__case_0 = $a;
    $__case_1 = $v;
    if (true) {
$a1 = $__case_0;
$m = $__case_1;
return ($insert1)($a1, $__global_Data_Unit_unit, $m);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v = null) use ($insert1, $__global_Data_Unit_unit, $__body, &$__fn) {
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
    $__res = (function() use ($__global_Data_Set_foldr1, $__global_Data_Maybe_maybe, $insert1) {
  $__fn = function($f) use ($__global_Data_Set_foldr1, $__global_Data_Maybe_maybe, $insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Set_foldr1)((function() use ($__global_Data_Maybe_maybe, $insert1, $f) {
  $__fn = function($a, $acc = null) use ($__global_Data_Maybe_maybe, $insert1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($a, &$__fn) { return $__fn($a, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Maybe_maybe)($acc, (function() use ($insert1, $acc) {
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
})(), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
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
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$semigroupSet1 = (object)["append" => ($__global_Data_Set_coerce)(((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeUnionWith, $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($__global_Data_Function_const))];
    $__res = (object)["mempty" => ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")), "Semigroup0" => (function() use ($semigroupSet1) {
  $__fn = function($__dollar____unused) use ($semigroupSet1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupSet1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
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
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl2 = $__case_res_0;
    $__res = (function() use ($foldl2, $__global_Data_Set_coerce, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $__global_Data_Function_const) {
  $__fn = function($dictOrd) use ($foldl2, $__global_Data_Set_coerce, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictOrd;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_1;
    $__res = ($foldl2)(($__global_Data_Set_coerce)(((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeUnionWith, $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($__global_Data_Function_const)), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
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
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
$__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
$__global_Data_Map_Internal_unsafeDifference = ($GLOBALS['Data_Map_Internal_unsafeDifference'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeDifference'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = ($__global_Data_Set_coerce)((function() use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeDifference, $compare) {
  $__fn = function($m1, $m2 = null) use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeDifference, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m2) use ($m1, &$__fn) { return $__fn($m1, $m2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeDifference, $compare, $m1, $m2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
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
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
$__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
$__global_Data_Map_Internal_unsafeDifference = ($GLOBALS['Data_Map_Internal_unsafeDifference'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeDifference'));
$__global_Data_Set_isEmpty = ($GLOBALS['Data_Set_isEmpty'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_isEmpty'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$difference1 = ($__global_Data_Set_coerce)((function() use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeDifference, $compare) {
  $__fn = function($m1, $m2 = null) use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeDifference, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m2) use ($m1, &$__fn) { return $__fn($m1, $m2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeDifference, $compare, $m1, $m2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    $__res = (function() use ($__global_Data_Set_isEmpty, $difference1) {
  $__fn = function($s1, $s2 = null) use ($__global_Data_Set_isEmpty, $difference1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s2) use ($s1, &$__fn) { return $__fn($s1, $s2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Set_isEmpty)(($difference1)($s1, $s2));
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
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
$__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
$__global_Data_Map_Internal_unsafeDifference = ($GLOBALS['Data_Map_Internal_unsafeDifference'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeDifference'));
$__global_Data_Set_isEmpty = ($GLOBALS['Data_Set_isEmpty'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_isEmpty'));
$__global_Data_Set_conj = ($GLOBALS['Data_Set_conj'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_conj'));
$__global_Data_Set_notEq = ($GLOBALS['Data_Set_notEq'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_notEq'));
$__global_Data_Set_size = ($GLOBALS['Data_Set_size'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_size'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$difference1 = ($__global_Data_Set_coerce)((function() use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeDifference, $compare) {
  $__fn = function($m1, $m2 = null) use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeDifference, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m2) use ($m1, &$__fn) { return $__fn($m1, $m2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeDifference, $compare, $m1, $m2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
$subset1 = (function() use ($__global_Data_Set_isEmpty, $difference1) {
  $__fn = function($s1, $s2 = null) use ($__global_Data_Set_isEmpty, $difference1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s2) use ($s1, &$__fn) { return $__fn($s1, $s2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Set_isEmpty)(($difference1)($s1, $s2));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($__global_Data_Set_conj, $__global_Data_Set_notEq, $__global_Data_Set_size, $subset1) {
  $__fn = function($s1, $s2 = null) use ($__global_Data_Set_conj, $__global_Data_Set_notEq, $__global_Data_Set_size, $subset1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s2) use ($s1, &$__fn) { return $__fn($s1, $s2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Set_conj)(($__global_Data_Set_notEq)(($__global_Data_Set_size)($s1), ($__global_Data_Set_size)($s2)), ($subset1)($s1, $s2));
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
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = ($__global_Data_Set_coerce)((function() use ($compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($k) use ($compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($compare, $k, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($v) use ($compare, $k, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
break;
case "GT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
break;
case "EQ":
return ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, $ml, $mr);
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
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
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
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
$__global_Data_Map_Internal_conj = ($GLOBALS['Data_Map_Internal_conj'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_conj'));
$__global_Data_Map_Internal_eq = ($GLOBALS['Data_Map_Internal_eq'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_eq'));
$__global_Data_Map_Internal_greaterThan = ($GLOBALS['Data_Map_Internal_greaterThan'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_greaterThan'));
$__global_Data_Map_Internal_lessThan = ($GLOBALS['Data_Map_Internal_lessThan'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_lessThan'));
$__global_Data_Map_Internal_abs = ($GLOBALS['Data_Map_Internal_abs'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_abs'));
$__global_Data_Map_Internal_sub = ($GLOBALS['Data_Map_Internal_sub'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_sub'));
$__global_Data_Map_Internal_add = ($GLOBALS['Data_Map_Internal_add'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_add'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_0;
$greaterThan1 = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "GT":
return true;
break;
default:
return false;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictOrd;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_1;
$lessThan1 = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return true;
break;
default:
return false;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$go = (function() use ($__global_Data_Map_Internal_conj, $__global_Data_Map_Internal_eq, $__global_Data_Map_Internal_greaterThan, $greaterThan1, &$go, $lessThan1, $__global_Data_Map_Internal_lessThan, $__global_Data_Map_Internal_abs, $__global_Data_Map_Internal_sub, $__global_Data_Map_Internal_add) {
  $__fn = function($v) use ($__global_Data_Map_Internal_conj, $__global_Data_Map_Internal_eq, $__global_Data_Map_Internal_greaterThan, $greaterThan1, &$go, $lessThan1, $__global_Data_Map_Internal_lessThan, $__global_Data_Map_Internal_abs, $__global_Data_Map_Internal_sub, $__global_Data_Map_Internal_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return true;
break;
case "Node":
$h = ($__case_0)->v0;
$s = ($__case_0)->v1;
$k = ($__case_0)->v2;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__case_0 = $l;
switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
return true;
break;
case "Node":
$rh = ($__case_0)->v0;
$rs = ($__case_0)->v1;
$rk = ($__case_0)->v2;
return ($__global_Data_Map_Internal_conj)(($__global_Data_Map_Internal_eq)($h, 2), ($__global_Data_Map_Internal_conj)(($__global_Data_Map_Internal_eq)($rh, 1), ($__global_Data_Map_Internal_conj)(($__global_Data_Map_Internal_greaterThan)($s, $rs), ($__global_Data_Map_Internal_conj)(($greaterThan1)($rk, $k), ($go)($r)))));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
case "Node":
$lh = ($__case_0)->v0;
$ls = ($__case_0)->v1;
$lk = ($__case_0)->v2;
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
return ($__global_Data_Map_Internal_conj)(($__global_Data_Map_Internal_eq)($h, 2), ($__global_Data_Map_Internal_conj)(($__global_Data_Map_Internal_eq)($lh, 1), ($__global_Data_Map_Internal_conj)(($__global_Data_Map_Internal_greaterThan)($s, $ls), ($__global_Data_Map_Internal_conj)(($lessThan1)($lk, $k), ($go)($l)))));
break;
case "Node":
$rh = ($__case_0)->v0;
$rs = ($__case_0)->v1;
$rk = ($__case_0)->v2;
return ($__global_Data_Map_Internal_conj)(($__global_Data_Map_Internal_greaterThan)($h, $rh), ($__global_Data_Map_Internal_conj)(($greaterThan1)($rk, $k), ($__global_Data_Map_Internal_conj)(($__global_Data_Map_Internal_greaterThan)($h, $lh), ($__global_Data_Map_Internal_conj)(($lessThan1)($lk, $k), ($__global_Data_Map_Internal_conj)(($__global_Data_Map_Internal_lessThan)(($__global_Data_Map_Internal_abs)(($__global_Data_Map_Internal_sub)($rh, $lh)), 2), ($__global_Data_Map_Internal_conj)(($__global_Data_Map_Internal_eq)(($__global_Data_Map_Internal_add)(($__global_Data_Map_Internal_add)($rs, $ls), 1), $s), ($__global_Data_Map_Internal_conj)(($go)($l), ($go)($r))))))));
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
    $__res = ($__global_Data_Set_coerce)($go);
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
$__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Data_Set_foldr1 = ($GLOBALS['Data_Set_foldr1'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldr1'));
$__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
$__global_Data_Set_identity = ($GLOBALS['Data_Set_identity'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_identity'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$insert1 = (function() use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode) {
  $__fn = function($k, $v = null) use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($k, &$__fn) { return $__fn($k, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go) {
  $__fn = function($v1) use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Leaf":
return ($__global_Data_Map_Internal_singleton)($k, $v);
break;
case "Node":
$mh = ($__case_0)->v0;
$ms = ($__case_0)->v1;
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "LT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
break;
case "GT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
break;
case "EQ":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($mh, $ms, $k, $v, $ml, $mr);
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
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$insert1 = (function() use ($insert1, $__global_Data_Unit_unit) {
  $__body = function($a, $v) use ($insert1, $__global_Data_Unit_unit) {
    $__case_0 = $a;
    $__case_1 = $v;
    if (true) {
$a1 = $__case_0;
$m = $__case_1;
return ($insert1)($a1, $__global_Data_Unit_unit, $m);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v = null) use ($insert1, $__global_Data_Unit_unit, $__body, &$__fn) {
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
    $__res = ((function() use ($__global_Data_Set_foldr1, $__global_Data_Maybe_maybe, $insert1) {
  $__fn = function($f) use ($__global_Data_Set_foldr1, $__global_Data_Maybe_maybe, $insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Set_foldr1)((function() use ($__global_Data_Maybe_maybe, $insert1, $f) {
  $__fn = function($a, $acc = null) use ($__global_Data_Maybe_maybe, $insert1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($a, &$__fn) { return $__fn($a, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Maybe_maybe)($acc, (function() use ($insert1, $acc) {
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
})(), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Data_Set_identity);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_catMaybes'] = __NAMESPACE__ . '\\Data_Set_catMaybes';

