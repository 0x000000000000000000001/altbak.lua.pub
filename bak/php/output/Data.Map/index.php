<?php

namespace Data\Map;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Map/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Set/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
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
      case 'Data_Map_traversableWithIndexSemigroupMap': $v = ($GLOBALS['Data_Map_Internal_traversableWithIndexMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_traversableWithIndexMap')); break;
      case 'Data_Map_traversableSemigroupMap': $v = ($GLOBALS['Data_Map_Internal_traversableMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_traversableMap')); break;
      case 'Data_Map_newtypeSemigroupMap': $v = (object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
    $__res = $__global_Prim_undefined;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Map_keys': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compose;
} else {
throw new \Exception("Pattern match failure");
};
  $__case_0 = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorMap'));
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  return ($__case_res_0)(($GLOBALS['Data_Set_Set'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_Set')), ($__case_res_1)((($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')))));
})(); break;
      case 'Data_Map_functorWithIndexSemigroupMap': $v = ($GLOBALS['Data_Map_Internal_functorWithIndexMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorWithIndexMap')); break;
      case 'Data_Map_functorSemigroupMap': $v = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorMap')); break;
      case 'Data_Map_foldableWithIndexSemigroupMap': $v = ($GLOBALS['Data_Map_Internal_foldableWithIndexMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_foldableWithIndexMap')); break;
      case 'Data_Map_foldableSemigroupMap': $v = ($GLOBALS['Data_Map_Internal_foldableMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_foldableMap')); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Map_SemigroupMap
function Data_Map_SemigroupMap($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_SemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_SemigroupMap'] = __NAMESPACE__ . '\\Data_Map_SemigroupMap';



// Data_Map_showSemigroupMap
function Data_Map_showSemigroupMap($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_showSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Tuple_append = ($GLOBALS['Data_Tuple_append'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_append'));
$__global_Data_Map_Internal_append = ($GLOBALS['Data_Map_Internal_append'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_append'));
$__global_Data_Map_Internal_toUnfoldable1 = ($GLOBALS['Data_Map_Internal_toUnfoldable1'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_toUnfoldable1'));
$__case_0 = $dictShow;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show = $__case_res_0;
$showTuple = (function() use ($__global_Data_Tuple_append, $show) {
  $__fn = function($dictShow1) use ($__global_Data_Tuple_append, $show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictShow1;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show1 = $__case_res_1;
    $__res = (object)["show" => (function() use ($__global_Data_Tuple_append, $show, $show1) {
  $__body = function($v) use ($__global_Data_Tuple_append, $show, $show1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
return ($__global_Data_Tuple_append)("(Tuple ", ($__global_Data_Tuple_append)(($show)($a), ($__global_Data_Tuple_append)(" ", ($__global_Data_Tuple_append)(($show1)($b), ")"))));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Data_Tuple_append, $show, $show1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$showMap = (function() use ($dict, $__global_Data_Map_Internal_append, $__global_Data_Map_Internal_toUnfoldable1) {
  $__fn = function($dictShow1) use ($dict, $__global_Data_Map_Internal_append, $__global_Data_Map_Internal_toUnfoldable1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show1 = $__case_res_2;
    $__res = (object)["show" => (function() use ($__global_Data_Map_Internal_append, $show1, $__global_Data_Map_Internal_toUnfoldable1) {
  $__fn = function($as) use ($__global_Data_Map_Internal_append, $show1, $__global_Data_Map_Internal_toUnfoldable1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Map_Internal_append)("(fromFoldable ", ($__global_Data_Map_Internal_append)(($show1)(($__global_Data_Map_Internal_toUnfoldable1)($as)), ")"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($showMap) {
  $__fn = function($dictShow1) use ($showMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($showMap)($dictShow1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_showSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_showSemigroupMap';

// Data_Map_semigroupSemigroupMap
function Data_Map_semigroupSemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_semigroupSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$unionWith = (function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare) {
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
})();
    $__res = (function() use ($unionWith) {
  $__fn = function($dictSemigroup) use ($unionWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictSemigroup;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_1;
    $__res = (object)["append" => (function() use ($unionWith, $append) {
  $__body = function($v, $v1) use ($unionWith, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($unionWith)($append, $l, $r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($unionWith, $append, $__body, &$__fn) {
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_semigroupSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_semigroupSemigroupMap';

// Data_Map_plusSemigroupMap
function Data_Map_plusSemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_plusSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Data_Map_Internal_functorMap = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorMap'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$altMap1 = (object)["alt" => ((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare) {
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
})())($__global_Data_Function_const), "Functor0" => (function() use ($__global_Data_Map_Internal_functorMap) {
  $__fn = function($__dollar____unused) use ($__global_Data_Map_Internal_functorMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__global_Data_Map_Internal_functorMap;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["empty" => ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")), "Alt0" => (function() use ($altMap1) {
  $__fn = function($__dollar____unused) use ($altMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $altMap1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_plusSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_plusSemigroupMap';

// Data_Map_ordSemigroupMap
function Data_Map_ordSemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_ordSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_stepAsc = ($GLOBALS['Data_Map_Internal_stepAsc'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAsc'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Map_Internal_toMapIter = ($GLOBALS['Data_Map_Internal_toMapIter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_toMapIter'));
$__case_0 = $dictOrd;
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
$eq1 = $__case_res_1;
$eqMapIter1 = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($dictEq1) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictEq1;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_2;
$go = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "IterNext":
$k1 = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$v2 = ($__global_Data_Map_Internal_stepAsc)($b);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "IterNext":
$k2 = ($__case_0)->v0;
$v21 = ($__case_0)->v1;
$b__prime__ = ($__case_0)->v2;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
case "IterDone":
return true;
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
    $__res = (object)["eq" => $go];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$ordMapIter1 = (function() use ($eqMapIter1, $__global_Prim_undefined, $__global_Data_Map_Internal_stepAsc, $compare) {
  $__fn = function($dictOrd1) use ($eqMapIter1, $__global_Prim_undefined, $__global_Data_Map_Internal_stepAsc, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictOrd1;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare1 = $__case_res_3;
$eqMapIter2 = ($eqMapIter1)((($dictOrd1)->Eq0)($__global_Prim_undefined));
$go = (function() use ($__global_Data_Map_Internal_stepAsc, $compare, $compare1, &$go) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, $compare, $compare1, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($b);
$v1 = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v1;
$__case_1 = $v;
if (((($__case_0)->tag === "IterNext") && (($__case_1)->tag === "IterNext"))) {
$k1 = ($__case_0)->v0;
$v11 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$k2 = ($__case_1)->v0;
$v2 = ($__case_1)->v1;
$b__prime__ = ($__case_1)->v2;
$v3 = ($compare)($k1, $k2);
$__case_0 = $v3;
switch (($__case_0)->tag) {
case "EQ":
$v4 = ($compare1)($v11, $v2);
$__case_0 = $v4;
switch (($__case_0)->tag) {
case "EQ":
$__tco_tmp_0 = $a__prime__;
$__tco_tmp_1 = $b__prime__;
$a = $__tco_tmp_0;
$b = $__tco_tmp_1;
continue 3;
break;
default:
$other = $__case_0;
return $other;
break;
};
break;
default:
$other = $__case_0;
return $other;
break;
};
} else {
if ((($__case_0)->tag === "IterDone")) {
$b__prime__ = $__case_1;
$__case_0 = $b__prime__;
switch (($__case_0)->tag) {
case "IterDone":
return ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
break;
default:
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
};
} else {
switch (($__case_1)->tag) {
case "IterDone":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
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
    $__res = (object)["compare" => $go, "Eq0" => (function() use ($eqMapIter2) {
  $__fn = function($__dollar____unused) use ($eqMapIter2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqMapIter2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_4;
$eqMapIter1 = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($dictEq1) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictEq1;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_5;
$go = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "IterNext":
$k1 = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$v2 = ($__global_Data_Map_Internal_stepAsc)($b);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "IterNext":
$k2 = ($__case_0)->v0;
$v21 = ($__case_0)->v1;
$b__prime__ = ($__case_0)->v2;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
case "IterDone":
return true;
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
    $__res = (object)["eq" => $go];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$eqMap1 = (function() use ($dict) {
  $__fn = function($dictEq1) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_6;
    $__res = (object)["eq" => (function() {
  $__body = function($xs, $ys) {
    $__case_0 = $xs;
    switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
return true;
break;
default:
return false;
break;
};
break;
case "Node":
$s1 = ($__case_0)->v1;
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Node":
$s2 = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($xs, $ys = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($xs, $ys);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$ordMap = (function() use ($dict, $eqMap1, $__global_Prim_undefined, $__global_Data_Map_Internal_toMapIter) {
  $__fn = function($dictOrd1) use ($dict, $eqMap1, $__global_Prim_undefined, $__global_Data_Map_Internal_toMapIter, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_7;
$eqMap2 = ($eqMap1)((($dictOrd1)->Eq0)($__global_Prim_undefined));
    $__res = (object)["compare" => (function() use ($compare, $__global_Data_Map_Internal_toMapIter) {
  $__body = function($xs, $ys) use ($compare, $__global_Data_Map_Internal_toMapIter) {
    $__case_0 = $xs;
    switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
break;
default:
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
};
break;
default:
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
return ($compare)(($__global_Data_Map_Internal_toMapIter)($xs), ($__global_Data_Map_Internal_toMapIter)($ys));
break;
};
break;
};
  };
  $__fn = function($xs, $ys = null) use ($compare, $__global_Data_Map_Internal_toMapIter, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($xs, $ys);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqMap2) {
  $__fn = function($__dollar____unused) use ($eqMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqMap2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($ordMap) {
  $__fn = function($dictOrd1) use ($ordMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($ordMap)($dictOrd1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_ordSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_ordSemigroupMap';

// Data_Map_ord1SemigroupMap
function Data_Map_ord1SemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_ord1SemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_stepAsc = ($GLOBALS['Data_Map_Internal_stepAsc'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAsc'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Map_Internal_toMapIter = ($GLOBALS['Data_Map_Internal_toMapIter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_toMapIter'));
$__case_0 = $dictOrd;
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
$eq1 = $__case_res_1;
$eqMapIter1 = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($dictEq1) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictEq1;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_2;
$go = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "IterNext":
$k1 = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$v2 = ($__global_Data_Map_Internal_stepAsc)($b);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "IterNext":
$k2 = ($__case_0)->v0;
$v21 = ($__case_0)->v1;
$b__prime__ = ($__case_0)->v2;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
case "IterDone":
return true;
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
    $__res = (object)["eq" => $go];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$ordMapIter1 = (function() use ($eqMapIter1, $__global_Prim_undefined, $__global_Data_Map_Internal_stepAsc, $compare) {
  $__fn = function($dictOrd1) use ($eqMapIter1, $__global_Prim_undefined, $__global_Data_Map_Internal_stepAsc, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictOrd1;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare1 = $__case_res_3;
$eqMapIter2 = ($eqMapIter1)((($dictOrd1)->Eq0)($__global_Prim_undefined));
$go = (function() use ($__global_Data_Map_Internal_stepAsc, $compare, $compare1, &$go) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, $compare, $compare1, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($b);
$v1 = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v1;
$__case_1 = $v;
if (((($__case_0)->tag === "IterNext") && (($__case_1)->tag === "IterNext"))) {
$k1 = ($__case_0)->v0;
$v11 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$k2 = ($__case_1)->v0;
$v2 = ($__case_1)->v1;
$b__prime__ = ($__case_1)->v2;
$v3 = ($compare)($k1, $k2);
$__case_0 = $v3;
switch (($__case_0)->tag) {
case "EQ":
$v4 = ($compare1)($v11, $v2);
$__case_0 = $v4;
switch (($__case_0)->tag) {
case "EQ":
$__tco_tmp_0 = $a__prime__;
$__tco_tmp_1 = $b__prime__;
$a = $__tco_tmp_0;
$b = $__tco_tmp_1;
continue 3;
break;
default:
$other = $__case_0;
return $other;
break;
};
break;
default:
$other = $__case_0;
return $other;
break;
};
} else {
if ((($__case_0)->tag === "IterDone")) {
$b__prime__ = $__case_1;
$__case_0 = $b__prime__;
switch (($__case_0)->tag) {
case "IterDone":
return ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
break;
default:
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
};
} else {
switch (($__case_1)->tag) {
case "IterDone":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
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
    $__res = (object)["compare" => $go, "Eq0" => (function() use ($eqMapIter2) {
  $__fn = function($__dollar____unused) use ($eqMapIter2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqMapIter2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_4;
$eqMapIter1 = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($dictEq1) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictEq1;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_5;
$go = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "IterNext":
$k1 = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$v2 = ($__global_Data_Map_Internal_stepAsc)($b);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "IterNext":
$k2 = ($__case_0)->v0;
$v21 = ($__case_0)->v1;
$b__prime__ = ($__case_0)->v2;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
case "IterDone":
return true;
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
    $__res = (object)["eq" => $go];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$eqMap1 = (function() use ($dict) {
  $__fn = function($dictEq1) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_6;
    $__res = (object)["eq" => (function() {
  $__body = function($xs, $ys) {
    $__case_0 = $xs;
    switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
return true;
break;
default:
return false;
break;
};
break;
case "Node":
$s1 = ($__case_0)->v1;
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Node":
$s2 = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($xs, $ys = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($xs, $ys);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$ordMap1 = (function() use ($dict, $eqMap1, $__global_Prim_undefined, $__global_Data_Map_Internal_toMapIter) {
  $__fn = function($dictOrd1) use ($dict, $eqMap1, $__global_Prim_undefined, $__global_Data_Map_Internal_toMapIter, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_7;
$eqMap2 = ($eqMap1)((($dictOrd1)->Eq0)($__global_Prim_undefined));
    $__res = (object)["compare" => (function() use ($compare, $__global_Data_Map_Internal_toMapIter) {
  $__body = function($xs, $ys) use ($compare, $__global_Data_Map_Internal_toMapIter) {
    $__case_0 = $xs;
    switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
break;
default:
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
};
break;
default:
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
return ($compare)(($__global_Data_Map_Internal_toMapIter)($xs), ($__global_Data_Map_Internal_toMapIter)($ys));
break;
};
break;
};
  };
  $__fn = function($xs, $ys = null) use ($compare, $__global_Data_Map_Internal_toMapIter, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($xs, $ys);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqMap2) {
  $__fn = function($__dollar____unused) use ($eqMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqMap2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_8;
$eqMapIter1 = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($dictEq1) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictEq1;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_9;
$go = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "IterNext":
$k1 = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$v2 = ($__global_Data_Map_Internal_stepAsc)($b);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "IterNext":
$k2 = ($__case_0)->v0;
$v21 = ($__case_0)->v1;
$b__prime__ = ($__case_0)->v2;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
case "IterDone":
return true;
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
    $__res = (object)["eq" => $go];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$eqMap1 = (function() use ($dict) {
  $__fn = function($dictEq1) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_10;
    $__res = (object)["eq" => (function() {
  $__body = function($xs, $ys) {
    $__case_0 = $xs;
    switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
return true;
break;
default:
return false;
break;
};
break;
case "Node":
$s1 = ($__case_0)->v1;
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Node":
$s2 = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($xs, $ys = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($xs, $ys);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$eq1Map1 = (object)["eq1" => (function() use ($dict) {
  $__body = function($dictEq1) use ($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictEq1) use ($dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($dictEq1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["compare1" => (function() use ($dict) {
  $__body = function($dictOrd1) use ($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictOrd1) use ($dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($dictOrd1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use ($eq1Map1) {
  $__fn = function($__dollar____unused) use ($eq1Map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eq1Map1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_ord1SemigroupMap'] = __NAMESPACE__ . '\\Data_Map_ord1SemigroupMap';


// Data_Map_monoidSemigroupMap
function Data_Map_monoidSemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_monoidSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$unionWith = (function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare) {
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
})();
$semigroupSemigroupMap1 = (function() use ($unionWith) {
  $__fn = function($dictSemigroup) use ($unionWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictSemigroup;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_1;
    $__res = (object)["append" => (function() use ($unionWith, $append) {
  $__body = function($v, $v1) use ($unionWith, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($unionWith)($append, $l, $r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($unionWith, $append, $__body, &$__fn) {
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($semigroupSemigroupMap1) {
  $__fn = function($dictSemigroup) use ($semigroupSemigroupMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$semigroupSemigroupMap2 = ($semigroupSemigroupMap1)($dictSemigroup);
    $__res = (object)["mempty" => ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")), "Semigroup0" => (function() use ($semigroupSemigroupMap2) {
  $__fn = function($__dollar____unused) use ($semigroupSemigroupMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupSemigroupMap2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_monoidSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_monoidSemigroupMap';






// Data_Map_eqSemigroupMap
function Data_Map_eqSemigroupMap($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_eqSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_stepAsc = ($GLOBALS['Data_Map_Internal_stepAsc'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAsc'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_0;
$eqMapIter1 = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($dictEq1) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictEq1;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_1;
$go = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "IterNext":
$k1 = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$v2 = ($__global_Data_Map_Internal_stepAsc)($b);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "IterNext":
$k2 = ($__case_0)->v0;
$v21 = ($__case_0)->v1;
$b__prime__ = ($__case_0)->v2;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
case "IterDone":
return true;
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
    $__res = (object)["eq" => $go];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$eqMap = (function() use ($dict) {
  $__fn = function($dictEq1) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_2;
    $__res = (object)["eq" => (function() {
  $__body = function($xs, $ys) {
    $__case_0 = $xs;
    switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
return true;
break;
default:
return false;
break;
};
break;
case "Node":
$s1 = ($__case_0)->v1;
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Node":
$s2 = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($xs, $ys = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($xs, $ys);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($eqMap) {
  $__fn = function($dictEq1) use ($eqMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($eqMap)($dictEq1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_eqSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_eqSemigroupMap';

// Data_Map_eq1SemigroupMap
function Data_Map_eq1SemigroupMap($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_eq1SemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_stepAsc = ($GLOBALS['Data_Map_Internal_stepAsc'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAsc'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_0;
$eqMapIter1 = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($dictEq1) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictEq1;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_1;
$go = (function() use ($__global_Data_Map_Internal_stepAsc) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "IterNext":
$k1 = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$v2 = ($__global_Data_Map_Internal_stepAsc)($b);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "IterNext":
$k2 = ($__case_0)->v0;
$v21 = ($__case_0)->v1;
$b__prime__ = ($__case_0)->v2;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
case "IterDone":
return true;
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
    $__res = (object)["eq" => $go];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$eqMap1 = (function() use ($dict) {
  $__fn = function($dictEq1) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_2;
    $__res = (object)["eq" => (function() {
  $__body = function($xs, $ys) {
    $__case_0 = $xs;
    switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
return true;
break;
default:
return false;
break;
};
break;
case "Node":
$s1 = ($__case_0)->v1;
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Node":
$s2 = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
break;
default:
return false;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($xs, $ys = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($xs, $ys);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (object)["eq1" => (function() use ($dict) {
  $__body = function($dictEq1) use ($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictEq1) use ($dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($dictEq1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_eq1SemigroupMap'] = __NAMESPACE__ . '\\Data_Map_eq1SemigroupMap';

// Data_Map_bindSemigroupMap
function Data_Map_bindSemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_bindSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
$__global_Data_Map_Internal_unsafeIntersectionWith = ($GLOBALS['Data_Map_Internal_unsafeIntersectionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeIntersectionWith'));
$__global_Data_Map_Internal_identity = ($GLOBALS['Data_Map_Internal_identity'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_identity'));
$__global_Data_Map_Internal_functorMap = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorMap'));
$__global_Data_Map_Internal_compose = ($GLOBALS['Data_Map_Internal_compose'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_compose'));
$mapMaybeWithKey1 = (function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($f) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($f, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($v) use ($f, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
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
$v2 = ($f)($k, $v1);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Just":
$v__prime__ = ($__case_0)->v0;
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $k, $v__prime__, ($go)($l), ($go)($r));
break;
case "Nothing":
return ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, ($go)($l), ($go)($r));
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
})();
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$lookup1 = (function() use ($compare) {
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
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
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
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($mv);
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
})();
$__case_0 = $dictOrd;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_1;
$applyMap1 = (object)["apply" => ((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeIntersectionWith, $compare) {
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
})())($__global_Data_Map_Internal_identity), "Functor0" => (function() use ($__global_Data_Map_Internal_functorMap) {
  $__fn = function($__dollar____unused) use ($__global_Data_Map_Internal_functorMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__global_Data_Map_Internal_functorMap;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["bind" => (function() use ($mapMaybeWithKey1, $__global_Data_Map_Internal_compose, $lookup1) {
  $__fn = function($m, $f = null) use ($mapMaybeWithKey1, $__global_Data_Map_Internal_compose, $lookup1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($m, &$__fn) { return $__fn($m, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($mapMaybeWithKey1)((function() use ($__global_Data_Map_Internal_compose, $lookup1, $f) {
  $__fn = function($k) use ($__global_Data_Map_Internal_compose, $lookup1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Map_Internal_compose)(($lookup1)($k), $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $m);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyMap1) {
  $__fn = function($__dollar____unused) use ($applyMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyMap1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_bindSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_bindSemigroupMap';

// Data_Map_applySemigroupMap
function Data_Map_applySemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_applySemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeIntersectionWith = ($GLOBALS['Data_Map_Internal_unsafeIntersectionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeIntersectionWith'));
$__global_Data_Map_Internal_identity = ($GLOBALS['Data_Map_Internal_identity'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_identity'));
$__global_Data_Map_Internal_functorMap = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorMap'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (object)["apply" => ((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeIntersectionWith, $compare) {
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
})())($__global_Data_Map_Internal_identity), "Functor0" => (function() use ($__global_Data_Map_Internal_functorMap) {
  $__fn = function($__dollar____unused) use ($__global_Data_Map_Internal_functorMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__global_Data_Map_Internal_functorMap;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_applySemigroupMap'] = __NAMESPACE__ . '\\Data_Map_applySemigroupMap';

// Data_Map_altSemigroupMap
function Data_Map_altSemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_altSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Data_Map_Internal_functorMap = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorMap'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (object)["alt" => ((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare) {
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
})())($__global_Data_Function_const), "Functor0" => (function() use ($__global_Data_Map_Internal_functorMap) {
  $__fn = function($__dollar____unused) use ($__global_Data_Map_Internal_functorMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__global_Data_Map_Internal_functorMap;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_altSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_altSemigroupMap';

