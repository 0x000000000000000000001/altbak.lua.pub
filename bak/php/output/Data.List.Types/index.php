<?php

namespace Data\List\Types;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
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
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
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
      case 'Data_List_Types_compose': $v = (function() {
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
      case 'Data_List_Types_add': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semiring_semiringInt'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_Types_sub': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ring_ringInt'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sub;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_Types_append': $v = (function() {
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
      case 'Data_List_Types_identity': $v = (function() {
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
      case 'Data_List_Types_conj': $v = (function() {
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
      case 'Data_List_Types_Nil': $v = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")); break;
      case 'Data_List_Types_newtypeNonEmptyList': $v = (object)["Coercible0" => (function() {
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
      case 'Data_List_Types_functorList': $v = (object)["map" => ($GLOBALS['Data_List_Types_listMap'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_listMap'))]; break;
      case 'Data_List_Types_map': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_functorList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_Types_functorNonEmptyList': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_functorList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  $map2 = $__case_res_0;
  return (object)["map" => (function() use ($map2) {
  $__body = function($f, $m) use ($map2) {
    $__case_0 = $m;
    switch (($__case_0)->tag) {
case "NonEmpty":
$v = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($v), ($map2)($f, $v1));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $m = null) use ($map2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($f, &$__fn) { return $__fn($f, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $m);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      case 'Data_List_Types_foldableList': $v = (object)["foldr" => (function() {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
$__global_Data_List_Types_foldableList = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
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
$__tco_tmp_0 = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($x, $acc);
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
$rev = ($go)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
$__case_0 = $__global_Data_List_Types_foldableList;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_List_Types_compose)(($__case_res_0)(($__global_Data_Function_flip)($f), $b), $rev);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($dict) {
  $__fn = function($dictMonoid) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_foldableList = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
$__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append2 = $__case_res_1;
$__case_0 = $dictMonoid;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_2;
    $__res = (function() use ($__global_Data_List_Types_foldableList, $__global_Data_List_Types_compose, $append2, $mempty) {
  $__fn = function($f) use ($__global_Data_List_Types_foldableList, $__global_Data_List_Types_compose, $append2, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $__global_Data_List_Types_foldableList;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_3)((function() use ($__global_Data_List_Types_compose, $append2, $f) {
  $__fn = function($acc) use ($__global_Data_List_Types_compose, $append2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_Types_compose)(($append2)($acc), $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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
})()]; break;
      case 'Data_List_Types_foldl': $v = (function() {
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
      case 'Data_List_Types_foldr': $v = (function() {
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
      case 'Data_List_Types_intercalate': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
  $foldl3 = $__case_res_0;
  return ((function() use ($dict, $foldl3) {
  $__fn = function($dictMonoid) use ($dict, $foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_1;
$__case_0 = $dictMonoid;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_2;
    $__res = (function() use ($append, $foldl3, $mempty) {
  $__fn = function($sep, $xs = null) use ($append, $foldl3, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($sep, &$__fn) { return $__fn($sep, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($append, $sep) {
  $__body = function($v, $v1) use ($append, $sep) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((is_object)($__case_0) && (($__case_0)->init === true))) {
$x = $__case_1;
return (object)["init" => false, "acc" => $x];
} else {
if ((is_object)($__case_0)) {
$acc = ($__case_0)->acc;
$x = $__case_1;
return (object)["init" => false, "acc" => ($append)($acc, ($append)($sep, $x))];
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($append, $sep, $__body, &$__fn) {
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
    $__res = (($foldl3)($go, (object)["init" => true, "acc" => $mempty], $xs))->acc;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($GLOBALS['Data_Monoid_monoidString'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_monoidString')));
})(); break;
      case 'Data_List_Types_foldableNonEmptyList': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
  $foldMap = $__case_res_0;
  $__case_0 = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
  $foldl = $__case_res_1;
  $__case_0 = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
  $__case_res_2 = null;
  if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
  $foldr = $__case_res_2;
  return (object)["foldMap" => (function() use ($dict, $foldMap) {
  $__fn = function($dictMonoid) use ($dict, $foldMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append1 = $__case_res_3;
$foldMap1 = ($foldMap)($dictMonoid);
    $__res = (function() use ($append1, $foldMap1) {
  $__body = function($f, $v) use ($append1, $foldMap1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return ($append1)(($f1)($a), ($foldMap1)($f1, $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($append1, $foldMap1, $__body, &$__fn) {
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
})(), "foldl" => (function() use ($foldl) {
  $__body = function($f, $b, $v) use ($foldl) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$fa = ($__case_2)->v1;
return ($foldl)($f1, ($f1)($b1, $a), $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $b = null, $v = null) use ($foldl, $__body, &$__fn) {
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
})(), "foldr" => (function() use ($foldr) {
  $__body = function($f, $b, $v) use ($foldr) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$fa = ($__case_2)->v1;
return ($f1)($a, ($foldr)($f1, $b1, $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $b = null, $v = null) use ($foldr, $__body, &$__fn) {
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
})()];
})(); break;
      case 'Data_List_Types_foldableWithIndexList': $v = (object)["foldrWithIndex" => (function() {
  $__body = function($f, $b, $xs) {
    $__global_Data_List_Types_foldl = ($GLOBALS['Data_List_Types_foldl'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldl'));
    $__global_Data_List_Types_add = ($GLOBALS['Data_List_Types_add'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_add'));
    $__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
    $__global_Data_List_Types_sub = ($GLOBALS['Data_List_Types_sub'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_sub'));
    $rev = ($__global_Data_List_Types_foldl)((function() use ($__global_Data_List_Types_add) {
  $__body = function($v1) use ($__global_Data_List_Types_add) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Tuple":
$i = ($__case_0)->v0;
$acc = ($__case_0)->v1;
return (function() use ($__global_Data_List_Types_add, $i, $acc) {
  $__fn = function($a) use ($__global_Data_List_Types_add, $i, $acc, &$__fn) {
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
})())(($__global_Data_List_Types_add)($i, 1), ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, $acc));
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
  $__fn = function($v1) use ($__global_Data_List_Types_add, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    $v = ($rev)(((function() {
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
})())(0, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))), $xs);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$len = ($__case_0)->v0;
$revList = ($__case_0)->v1;
return ($__global_Data_Tuple_snd)(($__global_Data_List_Types_foldl)((function() use ($__global_Data_List_Types_sub, $f) {
  $__body = function($v1) use ($__global_Data_List_Types_sub, $f) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Tuple":
$i = ($__case_0)->v0;
$b__prime__ = ($__case_0)->v1;
return (function() use ($__global_Data_List_Types_sub, $i, $f, $b__prime__) {
  $__fn = function($a) use ($__global_Data_List_Types_sub, $i, $f, $b__prime__, &$__fn) {
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
})())(($__global_Data_List_Types_sub)($i, 1), ($f)(($__global_Data_List_Types_sub)($i, 1), $a, $b__prime__));
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
  $__fn = function($v1) use ($__global_Data_List_Types_sub, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ((function() {
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
})())($len, $b), $revList));
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
$__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
$__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
$__global_Data_List_Types_foldl = ($GLOBALS['Data_List_Types_foldl'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldl'));
$__global_Data_List_Types_add = ($GLOBALS['Data_List_Types_add'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_add'));
    $__res = ($__global_Data_List_Types_compose)($__global_Data_Tuple_snd, ($__global_Data_List_Types_foldl)((function() use ($__global_Data_List_Types_add, $f) {
  $__body = function($v) use ($__global_Data_List_Types_add, $f) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$i = ($__case_0)->v0;
$b = ($__case_0)->v1;
return (function() use ($__global_Data_List_Types_add, $i, $f, $b) {
  $__fn = function($a) use ($__global_Data_List_Types_add, $i, $f, $b, &$__fn) {
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
})())(($__global_Data_List_Types_add)($i, 1), ($f)($i, $b, $a));
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
  $__fn = function($v) use ($__global_Data_List_Types_add, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ((function() {
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
})())(0, $acc)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($dict) {
  $__fn = function($dictMonoid) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_foldableWithIndexList = ($GLOBALS['Data_List_Types_foldableWithIndexList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableWithIndexList'));
$__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append2 = $__case_res_0;
$__case_0 = $dictMonoid;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_1;
    $__res = (function() use ($__global_Data_List_Types_foldableWithIndexList, $__global_Data_List_Types_compose, $append2, $mempty) {
  $__fn = function($f) use ($__global_Data_List_Types_foldableWithIndexList, $__global_Data_List_Types_compose, $append2, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $__global_Data_List_Types_foldableWithIndexList;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->foldlWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_2)((function() use ($__global_Data_List_Types_compose, $append2, $f) {
  $__fn = function($i, $acc = null) use ($__global_Data_List_Types_compose, $append2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($i, &$__fn) { return $__fn($i, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_List_Types_compose)(($append2)($acc), ($f)($i));
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
$__global_Data_List_Types_foldableList = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
    $__res = $__global_Data_List_Types_foldableList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_foldableWithIndexNonEmpty': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_foldableWithIndexList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableWithIndexList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
  $foldMapWithIndex = $__case_res_0;
  $__case_0 = ($GLOBALS['Data_List_Types_foldableWithIndexList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableWithIndexList'));
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->foldlWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
  $foldlWithIndex = $__case_res_1;
  $__case_0 = ($GLOBALS['Data_List_Types_foldableWithIndexList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableWithIndexList'));
  $__case_res_2 = null;
  if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->foldrWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
  $foldrWithIndex = $__case_res_2;
  $__case_0 = $dict;
  $__case_res_3 = null;
  if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
  $foldMap = $__case_res_3;
  $__case_0 = $dict;
  $__case_res_4 = null;
  if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
  $foldl = $__case_res_4;
  $__case_0 = $dict;
  $__case_res_5 = null;
  if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
  $foldr = $__case_res_5;
  $foldableNonEmpty1 = (object)["foldMap" => (function() use ($dict, $foldMap) {
  $__fn = function($dictMonoid) use ($dict, $foldMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append1 = $__case_res_6;
$foldMap1 = ($foldMap)($dictMonoid);
    $__res = (function() use ($append1, $foldMap1) {
  $__body = function($f, $v) use ($append1, $foldMap1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return ($append1)(($f1)($a), ($foldMap1)($f1, $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($append1, $foldMap1, $__body, &$__fn) {
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
})(), "foldl" => (function() use ($foldl) {
  $__body = function($f, $b, $v) use ($foldl) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$fa = ($__case_2)->v1;
return ($foldl)($f1, ($f1)($b1, $a), $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $b = null, $v = null) use ($foldl, $__body, &$__fn) {
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
})(), "foldr" => (function() use ($foldr) {
  $__body = function($f, $b, $v) use ($foldr) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$fa = ($__case_2)->v1;
return ($f1)($a, ($foldr)($f1, $b1, $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $b = null, $v = null) use ($foldr, $__body, &$__fn) {
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
})()];
  return (object)["foldMapWithIndex" => (function() use ($dict, $foldMapWithIndex) {
  $__fn = function($dictMonoid) use ($dict, $foldMapWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_NonEmpty_compose = ($GLOBALS['Data_NonEmpty_compose'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_compose'));
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append1 = $__case_res_7;
$foldMapWithIndex1 = ($foldMapWithIndex)($dictMonoid);
    $__res = (function() use ($append1, $foldMapWithIndex1, $__global_Data_NonEmpty_compose) {
  $__body = function($f, $v) use ($append1, $foldMapWithIndex1, $__global_Data_NonEmpty_compose) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return ($append1)(($f1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), $a), ($foldMapWithIndex1)(($__global_Data_NonEmpty_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($append1, $foldMapWithIndex1, $__global_Data_NonEmpty_compose, $__body, &$__fn) {
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
})(), "foldlWithIndex" => (function() use ($foldlWithIndex) {
  $__body = function($f, $b, $v) use ($foldlWithIndex) {
    $__global_Data_NonEmpty_compose = ($GLOBALS['Data_NonEmpty_compose'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_compose'));
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$fa = ($__case_2)->v1;
return ($foldlWithIndex)(($__global_Data_NonEmpty_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($f1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), $b1, $a), $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $b = null, $v = null) use ($foldlWithIndex, $__body, &$__fn) {
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
})(), "foldrWithIndex" => (function() use ($foldrWithIndex) {
  $__body = function($f, $b, $v) use ($foldrWithIndex) {
    $__global_Data_NonEmpty_compose = ($GLOBALS['Data_NonEmpty_compose'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_compose'));
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$fa = ($__case_2)->v1;
return ($f1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), $a, ($foldrWithIndex)(($__global_Data_NonEmpty_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $b1, $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $b = null, $v = null) use ($foldrWithIndex, $__body, &$__fn) {
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
})(), "Foldable0" => (function() use ($foldableNonEmpty1) {
  $__fn = function($__dollar____unused) use ($foldableNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableNonEmpty1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      case 'Data_List_Types_foldMapWithIndex': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_foldableWithIndexNonEmpty'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableWithIndexNonEmpty'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_Types_foldlWithIndex': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_foldableWithIndexNonEmpty'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableWithIndexNonEmpty'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldlWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_Types_foldrWithIndex': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_foldableWithIndexNonEmpty'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableWithIndexNonEmpty'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldrWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_Types_foldrWithIndex1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_foldableWithIndexList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableWithIndexList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldrWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_Types_foldlWithIndex1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_foldableWithIndexList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableWithIndexList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldlWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_Types_foldableWithIndexNonEmptyList': $v = (object)["foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_foldMapWithIndex = ($GLOBALS['Data_List_Types_foldMapWithIndex'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldMapWithIndex'));
$__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
$__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
$__global_Data_List_Types_add = ($GLOBALS['Data_List_Types_add'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_add'));
$foldMapWithIndex1 = ($__global_Data_List_Types_foldMapWithIndex)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex1, $__global_Data_List_Types_compose, $__global_Data_Maybe_maybe, $__global_Data_List_Types_add) {
  $__body = function($f, $v) use ($foldMapWithIndex1, $__global_Data_List_Types_compose, $__global_Data_Maybe_maybe, $__global_Data_List_Types_add) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ne = $__case_1;
return ($foldMapWithIndex1)(($__global_Data_List_Types_compose)($f1, ($__global_Data_Maybe_maybe)(0, ($__global_Data_List_Types_add)(1))), $ne);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMapWithIndex1, $__global_Data_List_Types_compose, $__global_Data_Maybe_maybe, $__global_Data_List_Types_add, $__body, &$__fn) {
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
    $__global_Data_List_Types_foldlWithIndex = ($GLOBALS['Data_List_Types_foldlWithIndex'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldlWithIndex'));
    $__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
    $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
    $__global_Data_List_Types_add = ($GLOBALS['Data_List_Types_add'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_add'));
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$ne = $__case_2;
return ($__global_Data_List_Types_foldlWithIndex)(($__global_Data_List_Types_compose)($f1, ($__global_Data_Maybe_maybe)(0, ($__global_Data_List_Types_add)(1))), $b1, $ne);
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
    $__global_Data_List_Types_foldrWithIndex = ($GLOBALS['Data_List_Types_foldrWithIndex'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldrWithIndex'));
    $__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
    $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
    $__global_Data_List_Types_add = ($GLOBALS['Data_List_Types_add'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_add'));
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$ne = $__case_2;
return ($__global_Data_List_Types_foldrWithIndex)(($__global_Data_List_Types_compose)($f1, ($__global_Data_Maybe_maybe)(0, ($__global_Data_List_Types_add)(1))), $b1, $ne);
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
$__global_Data_List_Types_foldableNonEmptyList = ($GLOBALS['Data_List_Types_foldableNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableNonEmptyList'));
    $__res = $__global_Data_List_Types_foldableNonEmptyList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_functorWithIndexList': $v = (object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_foldrWithIndex1 = ($GLOBALS['Data_List_Types_foldrWithIndex1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldrWithIndex1'));
    $__res = ($__global_Data_List_Types_foldrWithIndex1)((function() use ($f) {
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
    $__res = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($i, $x), $acc);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_functorList = ($GLOBALS['Data_List_Types_functorList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorList'));
    $__res = $__global_Data_List_Types_functorList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_mapWithIndex': $v = (function() {
  $__case_0 = $dict;
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->mapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_Types_functorWithIndexNonEmptyList': $v = (object)["mapWithIndex" => (function() {
  $__body = function($fn, $v) {
    $__global_Data_List_Types_mapWithIndex = ($GLOBALS['Data_List_Types_mapWithIndex'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_mapWithIndex'));
    $__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
    $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
    $__global_Data_List_Types_add = ($GLOBALS['Data_List_Types_add'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_add'));
    $__case_0 = $fn;
    $__case_1 = $v;
    if (true) {
$fn1 = $__case_0;
$ne = $__case_1;
return ($__global_Data_List_Types_mapWithIndex)(($__global_Data_List_Types_compose)($fn1, ($__global_Data_Maybe_maybe)(0, ($__global_Data_List_Types_add)(1))), $ne);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($fn, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($fn, &$__fn) { return $__fn($fn, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($fn, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_functorNonEmptyList = ($GLOBALS['Data_List_Types_functorNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorNonEmptyList'));
    $__res = $__global_Data_List_Types_functorNonEmptyList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_semigroupList': $v = (object)["append" => (function() {
  $__fn = function($xs, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_List_Types_foldr = ($GLOBALS['Data_List_Types_foldr'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldr'));
    $__res = ($__global_Data_List_Types_foldr)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $ys, $xs);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_append1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_semigroupList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_semigroupList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_Types_monoidList': $v = (object)["mempty" => ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_semigroupList = ($GLOBALS['Data_List_Types_semigroupList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_semigroupList'));
    $__res = $__global_Data_List_Types_semigroupList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_semigroupNonEmptyList': $v = (object)["append" => (function() {
  $__body = function($v, $as__prime__) {
    $__global_Data_List_Types_append1 = ($GLOBALS['Data_List_Types_append1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_append1'));
    $__global_Data_List_Types_toList = ($GLOBALS['Data_List_Types_toList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_toList'));
    $__case_0 = $v;
    $__case_1 = $as__prime__;
    switch (($__case_0)->tag) {
case "NonEmpty":
$a = ($__case_0)->v0;
$as = ($__case_0)->v1;
$as__prime__1 = $__case_1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($__global_Data_List_Types_append1)($as, ($__global_Data_List_Types_toList)($as__prime__1)));
break;
default:
throw new \Exception("Pattern match failure");
break;
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
})()]; break;
      case 'Data_List_Types_traversableList': $v = (object)["traverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
$__global_Data_List_Types_foldl = ($GLOBALS['Data_List_Types_foldl'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldl'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_0;
$__case_0 = $Apply0;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
$lift2 = (function() use ($apply1, $map) {
  $__fn = function($f, $a = null, $b = null) use ($apply1, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
    if ($__num === 1) return function($a, $b = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $b);
      if ($__num2 === 1) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($apply1)(($map)($f, $a), $b);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictApplicative;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_3;
    $__res = (function() use ($__global_Data_List_Types_compose, $map1, $__global_Data_List_Types_foldl, $__global_Data_Function_flip, $lift2, $pure1) {
  $__fn = function($f) use ($__global_Data_List_Types_compose, $map1, $__global_Data_List_Types_foldl, $__global_Data_Function_flip, $lift2, $pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_Types_compose)(($map1)(($__global_Data_List_Types_foldl)(($__global_Data_Function_flip)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")))), ($__global_Data_List_Types_foldl)((function() use ($__global_Data_List_Types_compose, $lift2, $__global_Data_Function_flip, $f) {
  $__fn = function($acc) use ($__global_Data_List_Types_compose, $lift2, $__global_Data_Function_flip, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_Types_compose)(($lift2)(($__global_Data_Function_flip)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), $acc), $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($pure1)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")))));
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
$__global_Data_List_Types_traversableList = ($GLOBALS['Data_List_Types_traversableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_traversableList'));
$__global_Data_List_Types_identity = ($GLOBALS['Data_List_Types_identity'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_identity'));
$__case_0 = $__global_Data_List_Types_traversableList;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_4)($dictApplicative, $__global_Data_List_Types_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_functorList = ($GLOBALS['Data_List_Types_functorList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorList'));
    $__res = $__global_Data_List_Types_functorList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_foldableList = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
    $__res = $__global_Data_List_Types_foldableList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_traversableNonEmptyList': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_traversableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_traversableList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sequence;
} else {
throw new \Exception("Pattern match failure");
};
  $sequence = $__case_res_0;
  $__case_0 = ($GLOBALS['Data_List_Types_traversableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_traversableList'));
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
  $traverse = $__case_res_1;
  $__case_0 = $dict;
  $__case_res_2 = null;
  if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  $map2 = $__case_res_2;
  $functorNonEmpty1 = (object)["map" => (function() use ($map2) {
  $__body = function($f, $m) use ($map2) {
    $__case_0 = $m;
    switch (($__case_0)->tag) {
case "NonEmpty":
$v = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($v), ($map2)($f, $v1));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $m = null) use ($map2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($f, &$__fn) { return $__fn($f, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $m);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  $__case_0 = $dict;
  $__case_res_3 = null;
  if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
  $foldMap = $__case_res_3;
  $__case_0 = $dict;
  $__case_res_4 = null;
  if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
  $foldl = $__case_res_4;
  $__case_0 = $dict;
  $__case_res_5 = null;
  if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
  $foldr = $__case_res_5;
  $foldableNonEmpty1 = (object)["foldMap" => (function() use ($dict, $foldMap) {
  $__fn = function($dictMonoid) use ($dict, $foldMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append1 = $__case_res_6;
$foldMap1 = ($foldMap)($dictMonoid);
    $__res = (function() use ($append1, $foldMap1) {
  $__body = function($f, $v) use ($append1, $foldMap1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return ($append1)(($f1)($a), ($foldMap1)($f1, $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($append1, $foldMap1, $__body, &$__fn) {
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
})(), "foldl" => (function() use ($foldl) {
  $__body = function($f, $b, $v) use ($foldl) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$fa = ($__case_2)->v1;
return ($foldl)($f1, ($f1)($b1, $a), $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $b = null, $v = null) use ($foldl, $__body, &$__fn) {
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
})(), "foldr" => (function() use ($foldr) {
  $__body = function($f, $b, $v) use ($foldr) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$fa = ($__case_2)->v1;
return ($f1)($a, ($foldr)($f1, $b1, $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $b = null, $v = null) use ($foldr, $__body, &$__fn) {
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
})()];
  return (object)["sequence" => (function() use ($dict, $sequence) {
  $__fn = function($dictApplicative) use ($dict, $sequence, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
$__case_0 = $Apply0;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_7;
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_8;
$sequence1 = ($sequence)($dictApplicative);
    $__res = (function() use ($apply, $map2, $sequence1) {
  $__body = function($v) use ($apply, $map2, $sequence1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "NonEmpty":
$a = ($__case_0)->v0;
$fa = ($__case_0)->v1;
return ($apply)(($map2)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $a), ($sequence1)($fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($apply, $map2, $sequence1, $__body, &$__fn) {
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
})(), "traverse" => (function() use ($dict, $traverse) {
  $__fn = function($dictApplicative) use ($dict, $traverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
$__case_0 = $Apply0;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_9;
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_10;
$traverse1 = ($traverse)($dictApplicative);
    $__res = (function() use ($apply, $map2, $traverse1) {
  $__body = function($f, $v) use ($apply, $map2, $traverse1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return ($apply)(($map2)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($f1)($a)), ($traverse1)($f1, $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($apply, $map2, $traverse1, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorNonEmpty1) {
  $__fn = function($__dollar____unused) use ($functorNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorNonEmpty1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use ($foldableNonEmpty1) {
  $__fn = function($__dollar____unused) use ($foldableNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableNonEmpty1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      case 'Data_List_Types_traversableWithIndexList': $v = (object)["traverseWithIndex" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_List_Types_foldl = ($GLOBALS['Data_List_Types_foldl'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldl'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
$__global_Data_List_Types_foldlWithIndex1 = ($GLOBALS['Data_List_Types_foldlWithIndex1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldlWithIndex1'));
$Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_0;
$__case_0 = $Apply0;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
$lift2 = (function() use ($apply1, $map) {
  $__fn = function($f, $a = null, $b = null) use ($apply1, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
    if ($__num === 1) return function($a, $b = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $b);
      if ($__num2 === 1) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($apply1)(($map)($f, $a), $b);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictApplicative;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_3;
    $__res = (function() use ($__global_Data_List_Types_foldl, $__global_Data_Function_flip, $__global_Data_List_Types_compose, $map1, $__global_Data_List_Types_foldlWithIndex1, $lift2, $pure1) {
  $__fn = function($f) use ($__global_Data_List_Types_foldl, $__global_Data_Function_flip, $__global_Data_List_Types_compose, $map1, $__global_Data_List_Types_foldlWithIndex1, $lift2, $pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$rev = ($__global_Data_List_Types_foldl)(($__global_Data_Function_flip)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
    $__res = ($__global_Data_List_Types_compose)(($map1)($rev), ($__global_Data_List_Types_foldlWithIndex1)((function() use ($__global_Data_List_Types_compose, $lift2, $__global_Data_Function_flip, $f) {
  $__fn = function($i, $acc = null) use ($__global_Data_List_Types_compose, $lift2, $__global_Data_Function_flip, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($i, &$__fn) { return $__fn($i, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_List_Types_compose)(($lift2)(($__global_Data_Function_flip)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), $acc), ($f)($i));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($pure1)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")))));
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
$__global_Data_List_Types_functorWithIndexList = ($GLOBALS['Data_List_Types_functorWithIndexList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorWithIndexList'));
    $__res = $__global_Data_List_Types_functorWithIndexList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_foldableWithIndexList = ($GLOBALS['Data_List_Types_foldableWithIndexList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableWithIndexList'));
    $__res = $__global_Data_List_Types_foldableWithIndexList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_traversableList = ($GLOBALS['Data_List_Types_traversableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_traversableList'));
    $__res = $__global_Data_List_Types_traversableList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_traverseWithIndex': $v = (function() {
  $__case_0 = $dict;
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverseWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_Types_traversableWithIndexNonEmptyList': $v = (object)["traverseWithIndex" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_traverseWithIndex = ($GLOBALS['Data_List_Types_traverseWithIndex'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_traverseWithIndex'));
$__global_Data_List_Types_NonEmptyList = ($GLOBALS['Data_List_Types_NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_NonEmptyList'));
$__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
$__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
$__global_Data_List_Types_add = ($GLOBALS['Data_List_Types_add'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_add'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_0;
$traverseWithIndex1 = ($__global_Data_List_Types_traverseWithIndex)($dictApplicative);
    $__res = (function() use ($map1, $__global_Data_List_Types_NonEmptyList, $traverseWithIndex1, $__global_Data_List_Types_compose, $__global_Data_Maybe_maybe, $__global_Data_List_Types_add) {
  $__body = function($f, $v) use ($map1, $__global_Data_List_Types_NonEmptyList, $traverseWithIndex1, $__global_Data_List_Types_compose, $__global_Data_Maybe_maybe, $__global_Data_List_Types_add) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ne = $__case_1;
return ($map1)($__global_Data_List_Types_NonEmptyList, ($traverseWithIndex1)(($__global_Data_List_Types_compose)($f1, ($__global_Data_Maybe_maybe)(0, ($__global_Data_List_Types_add)(1))), $ne));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Data_List_Types_NonEmptyList, $traverseWithIndex1, $__global_Data_List_Types_compose, $__global_Data_Maybe_maybe, $__global_Data_List_Types_add, $__body, &$__fn) {
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
$__global_Data_List_Types_functorWithIndexNonEmptyList = ($GLOBALS['Data_List_Types_functorWithIndexNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorWithIndexNonEmptyList'));
    $__res = $__global_Data_List_Types_functorWithIndexNonEmptyList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_foldableWithIndexNonEmptyList = ($GLOBALS['Data_List_Types_foldableWithIndexNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableWithIndexNonEmptyList'));
    $__res = $__global_Data_List_Types_foldableWithIndexNonEmptyList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_traversableNonEmptyList = ($GLOBALS['Data_List_Types_traversableNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_traversableNonEmptyList'));
    $__res = $__global_Data_List_Types_traversableNonEmptyList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_unfoldable1List': $v = (object)["unfoldr1" => (function() {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_List_Types_foldl = ($GLOBALS['Data_List_Types_foldl'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldl'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$go = (function() use ($f, &$go, $__global_Data_List_Types_foldl, $__global_Data_Function_flip) {
  $__fn = function($source, $memo = null) use ($f, &$go, $__global_Data_List_Types_foldl, $__global_Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($memo) use ($source, &$__fn) { return $__fn($source, $memo); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($f)($source);
$__case_0 = $v;
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v1)->tag === "Just"))) {
$one = ($__case_0)->v0;
$rest = (($__case_0)->v1)->v0;
$__tco_tmp_0 = $rest;
$__tco_tmp_1 = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($one, $memo);
$source = $__tco_tmp_0;
$memo = $__tco_tmp_1;
continue ;
} else {
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v1)->tag === "Nothing"))) {
$one = ($__case_0)->v0;
return ($__global_Data_List_Types_foldl)(($__global_Data_Function_flip)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($one, $memo));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)($b, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_unfoldableList': $v = (object)["unfoldr" => (function() {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_List_Types_foldl = ($GLOBALS['Data_List_Types_foldl'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldl'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$go = (function() use ($f, $__global_Data_List_Types_foldl, $__global_Data_Function_flip, &$go) {
  $__fn = function($source, $memo = null) use ($f, $__global_Data_List_Types_foldl, $__global_Data_Function_flip, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($memo) use ($source, &$__fn) { return $__fn($source, $memo); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($f)($source);
$__case_0 = $v;
if ((($__case_0)->tag === "Nothing")) {
return ($__global_Data_List_Types_foldl)(($__global_Data_Function_flip)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), $memo);
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$one = (($__case_0)->v0)->v0;
$rest = (($__case_0)->v0)->v1;
$__tco_tmp_0 = $rest;
$__tco_tmp_1 = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($one, $memo);
$source = $__tco_tmp_0;
$memo = $__tco_tmp_1;
continue ;
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)($b, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Unfoldable10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_unfoldable1List = ($GLOBALS['Data_List_Types_unfoldable1List'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_unfoldable1List'));
    $__res = $__global_Data_List_Types_unfoldable1List;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_unfoldable1NonEmptyList': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_unfoldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_unfoldableList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->unfoldr;
} else {
throw new \Exception("Pattern match failure");
};
  $unfoldr = $__case_res_0;
  return (object)["unfoldr1" => (function() use ($unfoldr) {
  $__fn = function($f, $b = null) use ($unfoldr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Tuple_uncurry = ($GLOBALS['Data_Tuple_uncurry'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_uncurry'));
$__global_Data_NonEmpty_map = ($GLOBALS['Data_NonEmpty_map'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_map'));
$__global_Data_NonEmpty_map1 = ($GLOBALS['Data_NonEmpty_map1'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_map1'));
    $__res = ($__global_Data_Tuple_uncurry)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_NonEmpty_map)(($unfoldr)(($__global_Data_NonEmpty_map1)($f)), ($f)($b)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      case 'Data_List_Types_foldable1NonEmptyList': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
  $foldl = $__case_res_0;
  $__case_0 = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
  $foldr = $__case_res_1;
  $__case_0 = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
  $__case_res_2 = null;
  if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
  $foldMap = $__case_res_2;
  $__case_0 = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
  $__case_res_3 = null;
  if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
  $foldl = $__case_res_3;
  $__case_0 = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
  $__case_res_4 = null;
  if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
  $foldr = $__case_res_4;
  $foldableNonEmpty1 = (object)["foldMap" => (function() use ($dict, $foldMap) {
  $__fn = function($dictMonoid) use ($dict, $foldMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append1 = $__case_res_5;
$foldMap1 = ($foldMap)($dictMonoid);
    $__res = (function() use ($append1, $foldMap1) {
  $__body = function($f, $v) use ($append1, $foldMap1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return ($append1)(($f1)($a), ($foldMap1)($f1, $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($append1, $foldMap1, $__body, &$__fn) {
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
})(), "foldl" => (function() use ($foldl) {
  $__body = function($f, $b, $v) use ($foldl) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$fa = ($__case_2)->v1;
return ($foldl)($f1, ($f1)($b1, $a), $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $b = null, $v = null) use ($foldl, $__body, &$__fn) {
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
})(), "foldr" => (function() use ($foldr) {
  $__body = function($f, $b, $v) use ($foldr) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$fa = ($__case_2)->v1;
return ($f1)($a, ($foldr)($f1, $b1, $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $b = null, $v = null) use ($foldr, $__body, &$__fn) {
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
})()];
  return (object)["foldMap1" => (function() use ($foldl) {
  $__fn = function($dictSemigroup) use ($foldl, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictSemigroup;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append1 = $__case_res_6;
    $__res = (function() use ($foldl, $append1) {
  $__body = function($f, $v) use ($foldl, $append1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return ($foldl)((function() use ($append1, $f1) {
  $__fn = function($s, $a1 = null) use ($append1, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a1) use ($s, &$__fn) { return $__fn($s, $a1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($append1)($s, ($f1)($a1));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($f1)($a), $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($foldl, $append1, $__body, &$__fn) {
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
})(), "foldr1" => (function() use ($foldr) {
  $__body = function($f, $v) use ($foldr) {
    $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
    $__global_Data_NonEmpty_compose = ($GLOBALS['Data_NonEmpty_compose'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_compose'));
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return ($__global_Data_Maybe_maybe)($a, ($f1)($a), ($foldr)((function() use ($__global_Data_NonEmpty_compose, $__global_Data_Maybe_maybe, $f1) {
  $__fn = function($a1) use ($__global_Data_NonEmpty_compose, $__global_Data_Maybe_maybe, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_NonEmpty_compose)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_Maybe_maybe)($a1, ($f1)($a1)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($foldr, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl1" => (function() use ($foldl) {
  $__body = function($f, $v) use ($foldl) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return ($foldl)($f1, $a, $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($foldl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() use ($foldableNonEmpty1) {
  $__fn = function($__dollar____unused) use ($foldableNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableNonEmpty1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      case 'Data_List_Types_extendNonEmptyList': $v = (object)["extend" => (function() {
  $__body = function($f, $v) {
    $__global_Data_List_Types_foldr = ($GLOBALS['Data_List_Types_foldr'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldr'));
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$w = $__case_1;
$as = ($__case_1)->v1;
$go = (function() use ($f1) {
  $__body = function($a, $v1) use ($f1) {
    $__case_0 = $a;
    $__case_1 = $v1;
    if ((is_object)($__case_1)) {
$a1 = $__case_0;
$val = ($__case_1)->val;
$acc = ($__case_1)->acc;
return (object)["val" => ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a1, $acc)), $val), "acc" => ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a1, $acc)];
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
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f1)($w), (($__global_Data_List_Types_foldr)($go, (object)["val" => ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), "acc" => ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))], $as))->val);
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
$__global_Data_List_Types_functorNonEmptyList = ($GLOBALS['Data_List_Types_functorNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorNonEmptyList'));
    $__res = $__global_Data_List_Types_functorNonEmptyList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_extendList': $v = (object)["extend" => (function() {
  $__body = function($v, $v1) {
    $__global_Data_List_Types_foldr = ($GLOBALS['Data_List_Types_foldr'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldr'));
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "Nil":
return ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
break;
case "Cons":
$f = $__case_0;
$l = $__case_1;
$as = ($__case_1)->v1;
$go = (function() use ($f) {
  $__body = function($a__prime__, $v2) use ($f) {
    $__case_0 = $a__prime__;
    $__case_1 = $v2;
    if ((is_object)($__case_1)) {
$a__prime__1 = $__case_0;
$val = ($__case_1)->val;
$acc = ($__case_1)->acc;
$acc__prime__ = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a__prime__1, $acc);
return (object)["val" => ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($acc__prime__), $val), "acc" => $acc__prime__];
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a__prime__, $v2 = null) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v2) use ($a__prime__, &$__fn) { return $__fn($a__prime__, $v2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a__prime__, $v2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($l), (($__global_Data_List_Types_foldr)($go, (object)["val" => ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), "acc" => ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))], $as))->val);
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
$__global_Data_List_Types_functorList = ($GLOBALS['Data_List_Types_functorList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorList'));
    $__res = $__global_Data_List_Types_functorList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_eq1List': $v = (object)["eq1" => (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_conj = ($GLOBALS['Data_List_Types_conj'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_conj'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq = $__case_res_0;
    $__res = (function() use ($__global_Data_List_Types_conj, $eq) {
  $__fn = function($xs, $ys = null) use ($__global_Data_List_Types_conj, $eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use (&$go, $__global_Data_List_Types_conj, $eq) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$go, $__global_Data_List_Types_conj, $eq, &$__fn) {
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
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if (($__case_2 === false)) {
return false;
} else {
if (((($__case_0)->tag === "Nil") && (($__case_1)->tag === "Nil"))) {
$acc = $__case_2;
return $acc;
} else {
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
$y = ($__case_1)->v0;
$ys__prime__ = ($__case_1)->v1;
$acc = $__case_2;
$__tco_tmp_0 = $xs__prime__;
$__tco_tmp_1 = $ys__prime__;
$__tco_tmp_2 = ($__global_Data_List_Types_conj)($acc, ($eq)($y, $x));
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue ;
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
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)($xs, $ys, true);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_eq1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_eq1List'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_eq1List'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq1;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_Types_eqNonEmpty': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_eq1List'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_eq1List'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq1;
} else {
throw new \Exception("Pattern match failure");
};
  $eq1 = $__case_res_0;
  return (function() use ($eq1) {
  $__fn = function($dictEq) use ($eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_NonEmpty_conj = ($GLOBALS['Data_NonEmpty_conj'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_conj'));
$__case_0 = $dictEq;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq = $__case_res_1;
$eq11 = ($eq1)($dictEq);
    $__res = (object)["eq" => (function() use ($__global_Data_NonEmpty_conj, $eq, $eq11) {
  $__body = function($x, $y) use ($__global_Data_NonEmpty_conj, $eq, $eq11) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_NonEmpty_conj)(($eq)($l, $r), ($eq11)($l1, $r1));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($__global_Data_NonEmpty_conj, $eq, $eq11, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_List_Types_eq1NonEmptyList': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_eq1List'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_eq1List'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq1;
} else {
throw new \Exception("Pattern match failure");
};
  $eq1 = $__case_res_0;
  $eqNonEmpty1 = (function() use ($eq1) {
  $__fn = function($dictEq) use ($eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_NonEmpty_conj = ($GLOBALS['Data_NonEmpty_conj'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_conj'));
$__case_0 = $dictEq;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq = $__case_res_1;
$eq11 = ($eq1)($dictEq);
    $__res = (object)["eq" => (function() use ($__global_Data_NonEmpty_conj, $eq, $eq11) {
  $__body = function($x, $y) use ($__global_Data_NonEmpty_conj, $eq, $eq11) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_NonEmpty_conj)(($eq)($l, $r), ($eq11)($l1, $r1));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($__global_Data_NonEmpty_conj, $eq, $eq11, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return (object)["eq1" => (function() use ($dict) {
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
})()];
})(); break;
      case 'Data_List_Types_ord1List': $v = (object)["compare1" => (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
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
return ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
} else {
if ((($__case_0)->tag === "Nil")) {
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
} else {
if ((($__case_1)->tag === "Nil")) {
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
} else {
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
$y = ($__case_1)->v0;
$ys__prime__ = ($__case_1)->v1;
$v2 = ($compare)($x, $y);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "EQ":
$__tco_tmp_0 = $xs__prime__;
$__tco_tmp_1 = $ys__prime__;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
break;
default:
$other = $__case_0;
return $other;
break;
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
    $__res = ($go)($xs, $ys);
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
$__global_Data_List_Types_eq1List = ($GLOBALS['Data_List_Types_eq1List'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_eq1List'));
    $__res = $__global_Data_List_Types_eq1List;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_compare1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_ord1List'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_ord1List'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare1;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_Types_ordNonEmpty': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_ord1List'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_ord1List'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare1;
} else {
throw new \Exception("Pattern match failure");
};
  $compare1 = $__case_res_0;
  $__case_0 = $dict;
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->eq1;
} else {
throw new \Exception("Pattern match failure");
};
  $eq1 = $__case_res_1;
  $eqNonEmpty1 = (function() use ($eq1) {
  $__fn = function($dictEq) use ($eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_NonEmpty_conj = ($GLOBALS['Data_NonEmpty_conj'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_conj'));
$__case_0 = $dictEq;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq = $__case_res_2;
$eq11 = ($eq1)($dictEq);
    $__res = (object)["eq" => (function() use ($__global_Data_NonEmpty_conj, $eq, $eq11) {
  $__body = function($x, $y) use ($__global_Data_NonEmpty_conj, $eq, $eq11) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_NonEmpty_conj)(($eq)($l, $r), ($eq11)($l1, $r1));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($__global_Data_NonEmpty_conj, $eq, $eq11, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return (function() use ($compare1, $eqNonEmpty1) {
  $__fn = function($dictOrd) use ($compare1, $eqNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__case_0 = $dictOrd;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_3;
$compare11 = ($compare1)($dictOrd);
$eqNonEmpty2 = ($eqNonEmpty1)((($dictOrd)->Eq0)($__global_Prim_undefined));
    $__res = (object)["compare" => (function() use ($compare, $compare11) {
  $__body = function($x, $y) use ($compare, $compare11) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = ($compare)($l, $r);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "LT":
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
case "GT":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
return ($compare11)($l1, $r1);
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($compare, $compare11, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqNonEmpty2) {
  $__fn = function($__dollar____unused) use ($eqNonEmpty2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqNonEmpty2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_List_Types_ord1NonEmptyList': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_ord1List'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_ord1List'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare1;
} else {
throw new \Exception("Pattern match failure");
};
  $compare1 = $__case_res_0;
  $__case_0 = $dict;
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->eq1;
} else {
throw new \Exception("Pattern match failure");
};
  $eq1 = $__case_res_1;
  $eqNonEmpty1 = (function() use ($eq1) {
  $__fn = function($dictEq) use ($eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_NonEmpty_conj = ($GLOBALS['Data_NonEmpty_conj'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_conj'));
$__case_0 = $dictEq;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq = $__case_res_2;
$eq11 = ($eq1)($dictEq);
    $__res = (object)["eq" => (function() use ($__global_Data_NonEmpty_conj, $eq, $eq11) {
  $__body = function($x, $y) use ($__global_Data_NonEmpty_conj, $eq, $eq11) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_NonEmpty_conj)(($eq)($l, $r), ($eq11)($l1, $r1));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($__global_Data_NonEmpty_conj, $eq, $eq11, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  $ordNonEmpty1 = (function() use ($compare1, $eqNonEmpty1) {
  $__fn = function($dictOrd) use ($compare1, $eqNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__case_0 = $dictOrd;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_3;
$compare11 = ($compare1)($dictOrd);
$eqNonEmpty2 = ($eqNonEmpty1)((($dictOrd)->Eq0)($__global_Prim_undefined));
    $__res = (object)["compare" => (function() use ($compare, $compare11) {
  $__body = function($x, $y) use ($compare, $compare11) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = ($compare)($l, $r);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "LT":
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
case "GT":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
return ($compare11)($l1, $r1);
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($compare, $compare11, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqNonEmpty2) {
  $__fn = function($__dollar____unused) use ($eqNonEmpty2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqNonEmpty2;
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
$__case_res_4 = ($v)->eq1;
} else {
throw new \Exception("Pattern match failure");
};
  $eq1 = $__case_res_4;
  $eqNonEmpty1 = (function() use ($eq1) {
  $__fn = function($dictEq) use ($eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_NonEmpty_conj = ($GLOBALS['Data_NonEmpty_conj'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_conj'));
$__case_0 = $dictEq;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq = $__case_res_5;
$eq11 = ($eq1)($dictEq);
    $__res = (object)["eq" => (function() use ($__global_Data_NonEmpty_conj, $eq, $eq11) {
  $__body = function($x, $y) use ($__global_Data_NonEmpty_conj, $eq, $eq11) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_NonEmpty_conj)(($eq)($l, $r), ($eq11)($l1, $r1));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($__global_Data_NonEmpty_conj, $eq, $eq11, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  $eq1NonEmpty1 = (object)["eq1" => (function() use ($dict) {
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
})()];
  return (object)["compare1" => (function() use ($dict) {
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
})(), "Eq10" => (function() use ($eq1NonEmpty1) {
  $__fn = function($__dollar____unused) use ($eq1NonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eq1NonEmpty1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      case 'Data_List_Types_comonadNonEmptyList': $v = (object)["extract" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "NonEmpty":
$a = ($__case_0)->v0;
return $a;
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
})(), "Extend0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_extendNonEmptyList = ($GLOBALS['Data_List_Types_extendNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_extendNonEmptyList'));
    $__res = $__global_Data_List_Types_extendNonEmptyList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_applyList': $v = (object)["apply" => (function() {
  $__body = function($v, $v1) {
    $__global_Data_List_Types_append1 = ($GLOBALS['Data_List_Types_append1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_append1'));
    $__global_Data_List_Types_map = ($GLOBALS['Data_List_Types_map'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_map'));
    $__global_Data_List_Types_applyList = ($GLOBALS['Data_List_Types_applyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applyList'));
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
break;
case "Cons":
$f = ($__case_0)->v0;
$fs = ($__case_0)->v1;
$xs = $__case_1;
$__case_0 = $__global_Data_List_Types_applyList;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
return ($__global_Data_List_Types_append1)(($__global_Data_List_Types_map)($f, $xs), ($__case_res_0)($fs, $xs));
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
$__global_Data_List_Types_functorList = ($GLOBALS['Data_List_Types_functorList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorList'));
    $__res = $__global_Data_List_Types_functorList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_apply': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_applyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applyList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_Types_applyNonEmptyList': $v = (object)["apply" => (function() {
  $__body = function($v, $v1) {
    $__global_Data_List_Types_append1 = ($GLOBALS['Data_List_Types_append1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_append1'));
    $__global_Data_List_Types_apply = ($GLOBALS['Data_List_Types_apply'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_apply'));
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$f = ($__case_0)->v0;
$fs = ($__case_0)->v1;
$a = ($__case_1)->v0;
$as = ($__case_1)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), ($__global_Data_List_Types_append1)(($__global_Data_List_Types_apply)($fs, ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")))), ($__global_Data_List_Types_apply)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($f, $fs), $as)));
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
$__global_Data_List_Types_functorNonEmptyList = ($GLOBALS['Data_List_Types_functorNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorNonEmptyList'));
    $__res = $__global_Data_List_Types_functorNonEmptyList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_bindList': $v = (object)["bind" => (function() {
  $__body = function($v, $v1) {
    $__global_Data_List_Types_append1 = ($GLOBALS['Data_List_Types_append1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_append1'));
    $__global_Data_List_Types_bindList = ($GLOBALS['Data_List_Types_bindList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_bindList'));
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$f = $__case_1;
$__case_0 = $__global_Data_List_Types_bindList;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
return ($__global_Data_List_Types_append1)(($f)($x), ($__case_res_0)($xs, $f));
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
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_applyList = ($GLOBALS['Data_List_Types_applyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applyList'));
    $__res = $__global_Data_List_Types_applyList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_bind': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_bindList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_bindList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_Types_bindNonEmptyList': $v = (object)["bind" => (function() {
  $__body = function($v, $f) {
    $__global_Data_List_Types_append1 = ($GLOBALS['Data_List_Types_append1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_append1'));
    $__global_Data_List_Types_bind = ($GLOBALS['Data_List_Types_bind'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_bind'));
    $__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
    $__global_Data_List_Types_toList = ($GLOBALS['Data_List_Types_toList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_toList'));
    $__case_0 = $v;
    $__case_1 = $f;
    switch (($__case_0)->tag) {
case "NonEmpty":
$a = ($__case_0)->v0;
$as = ($__case_0)->v1;
$f1 = $__case_1;
$v1 = ($f1)($a);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$b = ($__case_0)->v0;
$bs = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($b, ($__global_Data_List_Types_append1)($bs, ($__global_Data_List_Types_bind)($as, ($__global_Data_List_Types_compose)($__global_Data_List_Types_toList, $f1))));
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
$__global_Data_List_Types_applyNonEmptyList = ($GLOBALS['Data_List_Types_applyNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applyNonEmptyList'));
    $__res = $__global_Data_List_Types_applyNonEmptyList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_applicativeList': $v = (object)["pure" => (function() {
  $__fn = function($a) use (&$__fn) {
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
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_applyList = ($GLOBALS['Data_List_Types_applyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applyList'));
    $__res = $__global_Data_List_Types_applyList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_monadList': $v = (object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_applicativeList = ($GLOBALS['Data_List_Types_applicativeList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applicativeList'));
    $__res = $__global_Data_List_Types_applicativeList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_bindList = ($GLOBALS['Data_List_Types_bindList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_bindList'));
    $__res = $__global_Data_List_Types_bindList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_altNonEmptyList': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_semigroupNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_semigroupNonEmptyList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
  return (object)["alt" => $__case_res_0, "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_functorNonEmptyList = ($GLOBALS['Data_List_Types_functorNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorNonEmptyList'));
    $__res = $__global_Data_List_Types_functorNonEmptyList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      case 'Data_List_Types_altList': $v = (object)["alt" => ($GLOBALS['Data_List_Types_append1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_append1')), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_functorList = ($GLOBALS['Data_List_Types_functorList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorList'));
    $__res = $__global_Data_List_Types_functorList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_plusList': $v = (object)["empty" => ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), "Alt0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_altList = ($GLOBALS['Data_List_Types_altList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_altList'));
    $__res = $__global_Data_List_Types_altList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_alternativeList': $v = (object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_applicativeList = ($GLOBALS['Data_List_Types_applicativeList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applicativeList'));
    $__res = $__global_Data_List_Types_applicativeList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_plusList = ($GLOBALS['Data_List_Types_plusList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_plusList'));
    $__res = $__global_Data_List_Types_plusList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_monadPlusList': $v = (object)["Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_monadList = ($GLOBALS['Data_List_Types_monadList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_monadList'));
    $__res = $__global_Data_List_Types_monadList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_alternativeList = ($GLOBALS['Data_List_Types_alternativeList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_alternativeList'));
    $__res = $__global_Data_List_Types_alternativeList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_applicativeNonEmptyList': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_plusList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_plusList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->empty;
} else {
throw new \Exception("Pattern match failure");
};
  $empty = $__case_res_0;
  return (object)["pure" => (($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose')))(($GLOBALS['Data_List_Types_NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_NonEmptyList')), (function() use ($empty) {
  $__fn = function($a) use ($empty, &$__fn) {
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
    $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, $empty);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_applyNonEmptyList = ($GLOBALS['Data_List_Types_applyNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applyNonEmptyList'));
    $__res = $__global_Data_List_Types_applyNonEmptyList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      case 'Data_List_Types_pure': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_applicativeNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applicativeNonEmptyList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_Types_monadNonEmptyList': $v = (object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_applicativeNonEmptyList = ($GLOBALS['Data_List_Types_applicativeNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applicativeNonEmptyList'));
    $__res = $__global_Data_List_Types_applicativeNonEmptyList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_bindNonEmptyList = ($GLOBALS['Data_List_Types_bindNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_bindNonEmptyList'));
    $__res = $__global_Data_List_Types_bindNonEmptyList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_traversable1NonEmptyList': $v = (object)["traverse1" => (function() use ($dict) {
  $__fn = function($dictApply) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_List_Types_foldl = ($GLOBALS['Data_List_Types_foldl'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldl'));
$__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__global_Data_List_Types_nelCons = ($GLOBALS['Data_List_Types_nelCons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_nelCons'));
$__global_Data_List_Types_pure = ($GLOBALS['Data_List_Types_pure'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_pure'));
$Functor0 = (($dictApply)->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_0;
$mapFlipped = (function() use ($map1) {
  $__fn = function($fa, $f = null) use ($map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($fa, &$__fn) { return $__fn($fa, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map1)($f, $fa);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictApply;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
$lift2 = (function() use ($apply1, $map) {
  $__fn = function($f, $a = null, $b = null) use ($apply1, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
    if ($__num === 1) return function($a, $b = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $b);
      if ($__num2 === 1) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($apply1)(($map)($f, $a), $b);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $Functor0;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_3;
    $__res = (function() use ($mapFlipped, $__global_Data_List_Types_foldl, $__global_Data_List_Types_compose, $lift2, $__global_Data_Function_flip, $__global_Data_List_Types_nelCons, $map1, $__global_Data_List_Types_pure) {
  $__body = function($f, $v) use ($mapFlipped, $__global_Data_List_Types_foldl, $__global_Data_List_Types_compose, $lift2, $__global_Data_Function_flip, $__global_Data_List_Types_nelCons, $map1, $__global_Data_List_Types_pure) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$as = ($__case_1)->v1;
return ($mapFlipped)(($__global_Data_List_Types_foldl)((function() use ($__global_Data_List_Types_compose, $lift2, $__global_Data_Function_flip, $__global_Data_List_Types_nelCons, $f1) {
  $__fn = function($acc) use ($__global_Data_List_Types_compose, $lift2, $__global_Data_Function_flip, $__global_Data_List_Types_nelCons, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_Types_compose)(($lift2)(($__global_Data_Function_flip)($__global_Data_List_Types_nelCons), $acc), $f1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($map1)($__global_Data_List_Types_pure, ($f1)($a)), $as), (function() use ($__global_Data_List_Types_foldl, $__global_Data_Function_flip, $__global_Data_List_Types_nelCons, $__global_Data_List_Types_pure) {
  $__body = function($v1) use ($__global_Data_List_Types_foldl, $__global_Data_Function_flip, $__global_Data_List_Types_nelCons, $__global_Data_List_Types_pure) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return ($__global_Data_List_Types_foldl)(($__global_Data_Function_flip)($__global_Data_List_Types_nelCons), ($__global_Data_List_Types_pure)($x), $xs);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($__global_Data_List_Types_foldl, $__global_Data_Function_flip, $__global_Data_List_Types_nelCons, $__global_Data_List_Types_pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
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
  $__fn = function($f, $v = null) use ($mapFlipped, $__global_Data_List_Types_foldl, $__global_Data_List_Types_compose, $lift2, $__global_Data_Function_flip, $__global_Data_List_Types_nelCons, $map1, $__global_Data_List_Types_pure, $__body, &$__fn) {
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
})(), "sequence1" => (function() {
  $__fn = function($dictApply) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_traversable1NonEmptyList = ($GLOBALS['Data_List_Types_traversable1NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_traversable1NonEmptyList'));
$__global_Data_List_Types_identity = ($GLOBALS['Data_List_Types_identity'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_identity'));
$__case_0 = $__global_Data_List_Types_traversable1NonEmptyList;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->traverse1;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_4)($dictApply, $__global_Data_List_Types_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_foldable1NonEmptyList = ($GLOBALS['Data_List_Types_foldable1NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldable1NonEmptyList'));
    $__res = $__global_Data_List_Types_foldable1NonEmptyList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_traversableNonEmptyList = ($GLOBALS['Data_List_Types_traversableNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_traversableNonEmptyList'));
    $__res = $__global_Data_List_Types_traversableNonEmptyList;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };









// Data_List_Types_Cons
function Data_List_Types_Cons($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_Cons';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Types_Cons'] = __NAMESPACE__ . '\\Data_List_Types_Cons';

// Data_List_Types_NonEmptyList
function Data_List_Types_NonEmptyList($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_NonEmptyList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Types_NonEmptyList'] = __NAMESPACE__ . '\\Data_List_Types_NonEmptyList';

// Data_List_Types_toList
function Data_List_Types_toList($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_toList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($x, $xs);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Types_toList'] = __NAMESPACE__ . '\\Data_List_Types_toList';


// Data_List_Types_nelCons
function Data_List_Types_nelCons($a, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_nelCons';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($a, $__fn) { return $__fn($a, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($a, $v) {
    $__case_0 = $a;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$a1 = $__case_0;
$b = ($__case_1)->v0;
$bs = ($__case_1)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a1, ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($b, $bs));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($a, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Types_nelCons'] = __NAMESPACE__ . '\\Data_List_Types_nelCons';

// Data_List_Types_listMap
function Data_List_Types_listMap($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_listMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$chunkedRevMap = (function() use (&$chunkedRevMap, $f) {
  $__fn = function($v, $v1 = null) use (&$chunkedRevMap, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_1)->tag === "Cons") && (((($__case_1)->v1)->tag === "Cons") && (((($__case_1)->v1)->v1)->tag === "Cons")))) {
$chunksAcc = $__case_0;
$chunk = $__case_1;
$xs = ((($__case_1)->v1)->v1)->v1;
$__tco_tmp_0 = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($chunk, $chunksAcc);
$__tco_tmp_1 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue ;
} else {
if (true) {
$chunksAcc = $__case_0;
$xs = $__case_1;
$unrolledMap = (function() use ($f) {
  $__body = function($v2) use ($f) {
    $__case_0 = $v2;
    if (((($__case_0)->tag === "Cons") && (((($__case_0)->v1)->tag === "Cons") && (((($__case_0)->v1)->v1)->tag === "Nil")))) {
$x1 = ($__case_0)->v0;
$x2 = (($__case_0)->v1)->v0;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($x1), ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($x2), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))));
} else {
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v1)->tag === "Nil"))) {
$x1 = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($x1), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
} else {
if (true) {
return ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v2) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$reverseUnrolledMap = (function() use (&$reverseUnrolledMap, $f) {
  $__fn = function($v2, $v3 = null) use (&$reverseUnrolledMap, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v3) use ($v2, &$__fn) { return $__fn($v2, $v3); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v2;
$__case_1 = $v3;
if (((($__case_0)->tag === "Cons") && (((($__case_0)->v0)->tag === "Cons") && ((((($__case_0)->v0)->v1)->tag === "Cons") && ((((($__case_0)->v0)->v1)->v1)->tag === "Cons"))))) {
$x1 = (($__case_0)->v0)->v0;
$x2 = ((($__case_0)->v0)->v1)->v0;
$x3 = (((($__case_0)->v0)->v1)->v1)->v0;
$cs = ($__case_0)->v1;
$acc = $__case_1;
$__tco_tmp_0 = $cs;
$__tco_tmp_1 = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($x1), ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($x2), ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($x3), $acc)));
$v2 = $__tco_tmp_0;
$v3 = $__tco_tmp_1;
continue ;
} else {
if (true) {
$acc = $__case_1;
return $acc;
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return ($reverseUnrolledMap)($chunksAcc, ($unrolledMap)($xs));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($chunkedRevMap)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Types_listMap'] = __NAMESPACE__ . '\\Data_List_Types_listMap';
























// Data_List_Types_showList
function Data_List_Types_showList($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_showList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_append = ($GLOBALS['Data_List_Types_append'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_append'));
$__global_Data_List_Types_intercalate = ($GLOBALS['Data_List_Types_intercalate'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_intercalate'));
$__global_Data_List_Types_map = ($GLOBALS['Data_List_Types_map'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_map'));
$__case_0 = $dictShow;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show = $__case_res_0;
    $__res = (object)["show" => (function() use ($__global_Data_List_Types_append, $__global_Data_List_Types_intercalate, $__global_Data_List_Types_map, $show) {
  $__body = function($v) use ($__global_Data_List_Types_append, $__global_Data_List_Types_intercalate, $__global_Data_List_Types_map, $show) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return "Nil";
break;
default:
$xs = $__case_0;
return ($__global_Data_List_Types_append)("(", ($__global_Data_List_Types_append)(($__global_Data_List_Types_intercalate)(" : ", ($__global_Data_List_Types_map)($show, $xs)), " : Nil)"));
break;
};
  };
  $__fn = function($v) use ($__global_Data_List_Types_append, $__global_Data_List_Types_intercalate, $__global_Data_List_Types_map, $show, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Types_showList'] = __NAMESPACE__ . '\\Data_List_Types_showList';

// Data_List_Types_showNonEmptyList
function Data_List_Types_showNonEmptyList($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_showNonEmptyList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_append = ($GLOBALS['Data_List_Types_append'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_append'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show = $__case_res_0;
    $__res = (object)["show" => (function() use ($__global_Data_List_Types_append, $show) {
  $__body = function($v) use ($__global_Data_List_Types_append, $show) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
return ($__global_Data_List_Types_append)("(NonEmptyList ", ($__global_Data_List_Types_append)(($show)($nel), ")"));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__global_Data_List_Types_append, $show, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Types_showNonEmptyList'] = __NAMESPACE__ . '\\Data_List_Types_showNonEmptyList';
















// Data_List_Types_eqList
function Data_List_Types_eqList($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_eqList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_eq1 = ($GLOBALS['Data_List_Types_eq1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_eq1'));
    $__res = (object)["eq" => ($__global_Data_List_Types_eq1)($dictEq)];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Types_eqList'] = __NAMESPACE__ . '\\Data_List_Types_eqList';

// Data_List_Types_eqNonEmptyList
function Data_List_Types_eqNonEmptyList($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_eqNonEmptyList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_eqNonEmpty = ($GLOBALS['Data_List_Types_eqNonEmpty'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_eqNonEmpty'));
    $__res = ($__global_Data_List_Types_eqNonEmpty)($dictEq);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Types_eqNonEmptyList'] = __NAMESPACE__ . '\\Data_List_Types_eqNonEmptyList';





// Data_List_Types_ordList
function Data_List_Types_ordList($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_ordList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_eq1 = ($GLOBALS['Data_List_Types_eq1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_eq1'));
$__global_Data_List_Types_compare1 = ($GLOBALS['Data_List_Types_compare1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compare1'));
$eqList1 = (object)["eq" => ($__global_Data_List_Types_eq1)($dictEq)];
    $__res = (object)["compare" => ($__global_Data_List_Types_compare1)($dictOrd), "Eq0" => (function() use ($eqList1) {
  $__fn = function($__dollar____unused) use ($eqList1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqList1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Types_ordList'] = __NAMESPACE__ . '\\Data_List_Types_ordList';

// Data_List_Types_ordNonEmptyList
function Data_List_Types_ordNonEmptyList($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_ordNonEmptyList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Types_ordNonEmpty = ($GLOBALS['Data_List_Types_ordNonEmpty'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_ordNonEmpty'));
    $__res = ($__global_Data_List_Types_ordNonEmpty)($dictOrd);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Types_ordNonEmptyList'] = __NAMESPACE__ . '\\Data_List_Types_ordNonEmptyList';



















