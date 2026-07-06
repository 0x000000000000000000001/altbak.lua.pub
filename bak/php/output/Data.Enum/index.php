<?php

namespace Data\Enum;

require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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
      case 'Data_Enum_apply': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Apply_applyFn'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_applyFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Enum_append': $v = (function() {
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
      case 'Data_Enum_show': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Show_showInt'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Enum_lessThan': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  $compare3 = $__case_res_0;
  return (function() use ($compare3) {
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
})(); break;
      case 'Data_Enum_map': $v = (function() {
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
      case 'Data_Enum_compose': $v = (function() {
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
      case 'Data_Enum_top': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Bounded_boundedInt'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_boundedInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->top;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Enum_add': $v = (function() {
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
      case 'Data_Enum_greaterThan': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  $compare3 = $__case_res_0;
  return (function() use ($compare3) {
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
})(); break;
      case 'Data_Enum_bottom': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Bounded_boundedInt'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_boundedInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Enum_sub': $v = (function() {
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
      case 'Data_Enum_bind': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Maybe_bindMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_bindMaybe'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Enum_voidLeft': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  $map1 = $__case_res_0;
  return (function() use ($map1) {
  $__fn = function($f, $x = null) use ($map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, &$__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
    $__res = ($map1)(($__global_Data_Function_const)($x), $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Enum_guard': $v = (function() {
  $__case_0 = $dict;
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
  $pure = $__case_res_0;
  $__case_0 = $dict;
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->empty;
} else {
throw new \Exception("Pattern match failure");
};
  $empty = $__case_res_1;
  return (function() use ($pure, $empty) {
  $__body = function($v) use ($pure, $empty) {
    $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__case_0 = $v;
    switch ($__case_0) {
case true:
return ($pure)($__global_Data_Unit_unit);
break;
case false:
return $empty;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($pure, $empty, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Enum_lessThanOrEq': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  $compare3 = $__case_res_0;
  return (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "GT":
return false;
break;
default:
return true;
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
})(); break;
      case 'Data_Enum_composeFlipped': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compose;
} else {
throw new \Exception("Pattern match failure");
};
  $compose1 = $__case_res_0;
  return (function() use ($compose1) {
  $__fn = function($f, $g = null) use ($compose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($g) use ($f, &$__fn) { return $__fn($f, $g); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($compose1)($g, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Enum_fromJust': $v = (($GLOBALS['Data_Maybe_fromJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromJust')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Enum_eq': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Enum_conj': $v = (function() {
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
      case 'Data_Enum_greaterThanOrEq': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  $compare3 = $__case_res_0;
  return (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return false;
break;
default:
return true;
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
})(); break;
      case 'Data_Enum_bottom1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Bounded_boundedChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_boundedChar'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Enum_top1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Bounded_boundedChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_boundedChar'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->top;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Enum_showCardinality': $v = (object)["show" => (function() {
  $__body = function($v) {
    $__global_Data_Enum_append = ($GLOBALS['Data_Enum_append'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_append'));
    $__global_Data_Enum_show = ($GLOBALS['Data_Enum_show'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_show'));
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($__global_Data_Enum_append)("(Cardinality ", ($__global_Data_Enum_append)(($__global_Data_Enum_show)($n), ")"));
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
})()]; break;
      case 'Data_Enum_ordCardinality': $v = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt')); break;
      case 'Data_Enum_newtypeCardinality': $v = (object)["Coercible0" => (function() {
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
      case 'Data_Enum_eqCardinality': $v = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt')); break;
      case 'Data_Enum_enumUnit': $v = (object)["succ" => (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))), "pred" => (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ord_ordUnit = ($GLOBALS['Data_Ord_ordUnit'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordUnit'));
    $__res = $__global_Data_Ord_ordUnit;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Enum_enumOrdering': $v = (object)["succ" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
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
})())(($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ")));
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
})())(($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT")));
break;
case "GT":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
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
})(), "pred" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
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
})())(($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT")));
break;
case "GT":
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
})())(($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ")));
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
})(), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ord_ordOrdering = ($GLOBALS['Data_Ord_ordOrdering'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordOrdering'));
    $__res = $__global_Data_Ord_ordOrdering;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Enum_enumInt': $v = (object)["succ" => (function() {
  $__body = function($n) {
    $__global_Data_Enum_lessThan = ($GLOBALS['Data_Enum_lessThan'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_lessThan'));
    $__global_Data_Enum_top = ($GLOBALS['Data_Enum_top'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_top'));
    $__global_Data_Enum_add = ($GLOBALS['Data_Enum_add'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_add'));
    $__case_0 = ($__global_Data_Enum_lessThan)($n, $__global_Data_Enum_top);
    switch ($__case_0) {
case true:
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
})())(($__global_Data_Enum_add)($n, 1));
break;
default:
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
};
  };
  $__fn = function($n) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($n);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "pred" => (function() {
  $__body = function($n) {
    $__global_Data_Enum_greaterThan = ($GLOBALS['Data_Enum_greaterThan'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_greaterThan'));
    $__global_Data_Enum_bottom = ($GLOBALS['Data_Enum_bottom'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_bottom'));
    $__global_Data_Enum_sub = ($GLOBALS['Data_Enum_sub'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_sub'));
    $__case_0 = ($__global_Data_Enum_greaterThan)($n, $__global_Data_Enum_bottom);
    switch ($__case_0) {
case true:
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
})())(($__global_Data_Enum_sub)($n, 1));
break;
default:
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
};
  };
  $__fn = function($n) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($n);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ord_ordInt = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
    $__res = $__global_Data_Ord_ordInt;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Enum_enumBoolean': $v = (object)["succ" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch ($__case_0) {
case false:
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
})())(true);
break;
default:
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
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
})(), "pred" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch ($__case_0) {
case true:
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
})())(false);
break;
default:
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
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
})(), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ord_ordBoolean = ($GLOBALS['Data_Ord_ordBoolean'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordBoolean'));
    $__res = $__global_Data_Ord_ordBoolean;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Enum_enumChar': $v = (object)["succ" => (($GLOBALS['Data_Enum_defaultSucc'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_defaultSucc')))(($GLOBALS['Data_Enum_charToEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_charToEnum')), ($GLOBALS['Data_Enum_toCharCode'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toCharCode'))), "pred" => (($GLOBALS['Data_Enum_defaultPred'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_defaultPred')))(($GLOBALS['Data_Enum_charToEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_charToEnum')), ($GLOBALS['Data_Enum_toCharCode'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toCharCode'))), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ord_ordChar = ($GLOBALS['Data_Ord_ordChar'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordChar'));
    $__res = $__global_Data_Ord_ordChar;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Enum_boundedEnumUnit': $v = (object)["cardinality" => 1, "toEnum" => (function() {
  $__body = function($v) {
    $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__case_0 = $v;
    switch ($__case_0) {
case 0:
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
})())($__global_Data_Unit_unit);
break;
default:
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
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
})(), "fromEnum" => (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(0), "Bounded0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Bounded_boundedUnit = ($GLOBALS['Data_Bounded_boundedUnit'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_boundedUnit'));
    $__res = $__global_Data_Bounded_boundedUnit;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Enum1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_enumUnit = ($GLOBALS['Data_Enum_enumUnit'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_enumUnit'));
    $__res = $__global_Data_Enum_enumUnit;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Enum_boundedEnumOrdering': $v = (object)["cardinality" => 3, "toEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch ($__case_0) {
case 0:
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
})())(($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT")));
break;
case 1:
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
})())(($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ")));
break;
case 2:
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
})())(($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT")));
break;
default:
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
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
})(), "fromEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return 0;
break;
case "EQ":
return 1;
break;
case "GT":
return 2;
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
})(), "Bounded0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Bounded_boundedOrdering = ($GLOBALS['Data_Bounded_boundedOrdering'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_boundedOrdering'));
    $__res = $__global_Data_Bounded_boundedOrdering;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Enum1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_enumOrdering = ($GLOBALS['Data_Enum_enumOrdering'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_enumOrdering'));
    $__res = $__global_Data_Enum_enumOrdering;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Enum_boundedEnumChar': $v = (object)["cardinality" => (($GLOBALS['Data_Enum_sub'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_sub')))((($GLOBALS['Data_Enum_toCharCode'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toCharCode')))(($GLOBALS['Data_Enum_top1'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_top1'))), (($GLOBALS['Data_Enum_toCharCode'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toCharCode')))(($GLOBALS['Data_Enum_bottom1'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_bottom1')))), "toEnum" => ($GLOBALS['Data_Enum_charToEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_charToEnum')), "fromEnum" => ($GLOBALS['Data_Enum_toCharCode'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toCharCode')), "Bounded0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Bounded_boundedChar = ($GLOBALS['Data_Bounded_boundedChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_boundedChar'));
    $__res = $__global_Data_Bounded_boundedChar;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Enum1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_enumChar = ($GLOBALS['Data_Enum_enumChar'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_enumChar'));
    $__res = $__global_Data_Enum_enumChar;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Enum_boundedEnumBoolean': $v = (object)["cardinality" => 2, "toEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch ($__case_0) {
case 0:
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
})())(false);
break;
case 1:
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
})())(true);
break;
default:
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
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
})(), "fromEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch ($__case_0) {
case false:
return 0;
break;
case true:
return 1;
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
})(), "Bounded0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Bounded_boundedBoolean = ($GLOBALS['Data_Bounded_boundedBoolean'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_boundedBoolean'));
    $__res = $__global_Data_Bounded_boundedBoolean;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Enum1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_enumBoolean = ($GLOBALS['Data_Enum_enumBoolean'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_enumBoolean'));
    $__res = $__global_Data_Enum_enumBoolean;
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
























// Data_Enum_Enum$Dict
function Data_Enum_Enum__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Enum__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Enum__dollar__Dict'] = __NAMESPACE__ . '\\Data_Enum_Enum__dollar__Dict';

// Data_Enum_Cardinality
function Data_Enum_Cardinality($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Cardinality';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Cardinality'] = __NAMESPACE__ . '\\Data_Enum_Cardinality';

// Data_Enum_BoundedEnum$Dict
function Data_Enum_BoundedEnum__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_BoundedEnum__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_BoundedEnum__dollar__Dict'] = __NAMESPACE__ . '\\Data_Enum_BoundedEnum__dollar__Dict';

// Data_Enum_toEnum
function Data_Enum_toEnum($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_toEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->toEnum;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_toEnum'] = __NAMESPACE__ . '\\Data_Enum_toEnum';

// Data_Enum_succ
function Data_Enum_succ($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_succ';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_succ'] = __NAMESPACE__ . '\\Data_Enum_succ';

// Data_Enum_upFromIncluding
function Data_Enum_upFromIncluding($dictEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_upFromIncluding';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_apply = ($GLOBALS['Data_Enum_apply'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_apply'));
$__case_0 = $dictEnum;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
$succ1 = $__case_res_0;
    $__res = (function() use ($__global_Data_Enum_apply, $succ1) {
  $__fn = function($dictUnfoldable1) use ($__global_Data_Enum_apply, $succ1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictUnfoldable1;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->unfoldr1;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_1)(($__global_Data_Enum_apply)((function() {
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
})(), $succ1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_upFromIncluding'] = __NAMESPACE__ . '\\Data_Enum_upFromIncluding';


// Data_Enum_pred
function Data_Enum_pred($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_pred';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_pred'] = __NAMESPACE__ . '\\Data_Enum_pred';



// Data_Enum_fromEnum
function Data_Enum_fromEnum($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_fromEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->fromEnum;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_fromEnum'] = __NAMESPACE__ . '\\Data_Enum_fromEnum';

// Data_Enum_toEnumWithDefaults
function Data_Enum_toEnumWithDefaults($dictBoundedEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_toEnumWithDefaults';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_lessThan = ($GLOBALS['Data_Enum_lessThan'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_lessThan'));
$__case_0 = $dictBoundedEnum;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->toEnum;
} else {
throw new \Exception("Pattern match failure");
};
$toEnum1 = $__case_res_0;
$__case_0 = $dictBoundedEnum;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->fromEnum;
} else {
throw new \Exception("Pattern match failure");
};
$fromEnum1 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
$bottom2 = $__case_res_2;
    $__res = (function() use ($toEnum1, $__global_Data_Enum_lessThan, $fromEnum1, $bottom2) {
  $__body = function($low, $high, $x) use ($toEnum1, $__global_Data_Enum_lessThan, $fromEnum1, $bottom2) {
    $v = ($toEnum1)($x);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Just":
$enum = ($__case_0)->v0;
return $enum;
break;
case "Nothing":
$__case_0 = ($__global_Data_Enum_lessThan)($x, ($fromEnum1)($bottom2));
switch ($__case_0) {
case true:
return $low;
break;
default:
return $high;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($low, $high = null, $x = null) use ($toEnum1, $__global_Data_Enum_lessThan, $fromEnum1, $bottom2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($x) use ($low, $high, &$__fn) { return $__fn($low, $high, $x); };
    if ($__num === 1) return function($high, $x = null) use ($low, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($low, $high, $x);
      if ($__num2 === 1) return function($x) use ($low, $high, &$__fn) { return $__fn($low, $high, $x); };
      return phpurs_curry_fallback($__fn, [$low], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($low, $high, $x);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_toEnumWithDefaults'] = __NAMESPACE__ . '\\Data_Enum_toEnumWithDefaults';



// Data_Enum_enumTuple
function Data_Enum_enumTuple($dictEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_enumTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Tuple_conj = ($GLOBALS['Data_Tuple_conj'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_conj'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
$__global_Data_Enum_map = ($GLOBALS['Data_Enum_map'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_map'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__global_Data_Enum_compose = ($GLOBALS['Data_Enum_compose'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_compose'));
$__case_0 = $dictEnum;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
$succ1 = $__case_res_0;
$__case_0 = $dictEnum;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
$pred1 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq = $__case_res_3;
$eqTuple1 = (function() use ($__global_Data_Tuple_conj, $eq) {
  $__fn = function($dictEq1) use ($__global_Data_Tuple_conj, $eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictEq1;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_4;
    $__res = (object)["eq" => (function() use ($__global_Data_Tuple_conj, $eq, $eq1) {
  $__body = function($x, $y) use ($__global_Data_Tuple_conj, $eq, $eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return ($__global_Data_Tuple_conj)(($eq)($l, $r), ($eq1)($l1, $r1));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($__global_Data_Tuple_conj, $eq, $eq1, $__body, &$__fn) {
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
$ordTuple = (function() use ($eqTuple1, $__global_Prim_undefined, $compare) {
  $__fn = function($dictOrd1) use ($eqTuple1, $__global_Prim_undefined, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictOrd1;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare1 = $__case_res_5;
$eqTuple2 = ($eqTuple1)((($dictOrd1)->Eq0)($__global_Prim_undefined));
    $__res = (object)["compare" => (function() use ($compare, $compare1) {
  $__body = function($x, $y) use ($compare, $compare1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
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
return ($compare1)($l1, $r1);
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($compare, $compare1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqTuple2) {
  $__fn = function($__dollar____unused) use ($eqTuple2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqTuple2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($__global_Prim_undefined, $ordTuple, $__global_Data_Maybe_maybe, $__global_Data_Enum_map, $__global_Data_Function_flip, $succ1, $__global_Data_Enum_compose, $pred1) {
  $__fn = function($dictBoundedEnum) use ($__global_Prim_undefined, $ordTuple, $__global_Data_Maybe_maybe, $__global_Data_Enum_map, $__global_Data_Function_flip, $succ1, $__global_Data_Enum_compose, $pred1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Bounded0 = (($dictBoundedEnum)->Bounded0)($__global_Prim_undefined);
$__case_0 = $Bounded0;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
$bottom2 = $__case_res_6;
$Enum1 = (($dictBoundedEnum)->Enum1)($__global_Prim_undefined);
$__case_0 = $Enum1;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
$succ2 = $__case_res_7;
$__case_0 = $Bounded0;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->top;
} else {
throw new \Exception("Pattern match failure");
};
$top2 = $__case_res_8;
$__case_0 = $Enum1;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
$pred2 = $__case_res_9;
$ordTuple1 = ($ordTuple)((($Enum1)->Ord0)($__global_Prim_undefined));
    $__res = (object)["succ" => (function() use ($__global_Data_Maybe_maybe, $__global_Data_Enum_map, $__global_Data_Function_flip, $bottom2, $succ1, $__global_Data_Enum_compose, $succ2) {
  $__body = function($v) use ($__global_Data_Maybe_maybe, $__global_Data_Enum_map, $__global_Data_Function_flip, $bottom2, $succ1, $__global_Data_Enum_compose, $succ2) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
return ($__global_Data_Maybe_maybe)(($__global_Data_Enum_map)(($__global_Data_Function_flip)((function() {
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
})(), $bottom2), ($succ1)($a)), ($__global_Data_Enum_compose)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
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
})())($a)), ($succ2)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Data_Maybe_maybe, $__global_Data_Enum_map, $__global_Data_Function_flip, $bottom2, $succ1, $__global_Data_Enum_compose, $succ2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "pred" => (function() use ($__global_Data_Maybe_maybe, $__global_Data_Enum_map, $__global_Data_Function_flip, $top2, $pred1, $__global_Data_Enum_compose, $pred2) {
  $__body = function($v) use ($__global_Data_Maybe_maybe, $__global_Data_Enum_map, $__global_Data_Function_flip, $top2, $pred1, $__global_Data_Enum_compose, $pred2) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
return ($__global_Data_Maybe_maybe)(($__global_Data_Enum_map)(($__global_Data_Function_flip)((function() {
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
})(), $top2), ($pred1)($a)), ($__global_Data_Enum_compose)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
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
})())($a)), ($pred2)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Data_Maybe_maybe, $__global_Data_Enum_map, $__global_Data_Function_flip, $top2, $pred1, $__global_Data_Enum_compose, $pred2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Ord0" => (function() use ($ordTuple1) {
  $__fn = function($__dollar____unused) use ($ordTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ordTuple1;
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
$GLOBALS['Data_Enum_enumTuple'] = __NAMESPACE__ . '\\Data_Enum_enumTuple';


// Data_Enum_enumMaybe
function Data_Enum_enumMaybe($dictBoundedEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_enumMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Enum_map = ($GLOBALS['Data_Enum_map'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_map'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
$bottom2 = $__case_res_0;
$Enum1 = (($dictBoundedEnum)->Enum1)($__global_Prim_undefined);
$__case_0 = $Enum1;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
$succ1 = $__case_res_1;
$__case_0 = $Enum1;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
$pred1 = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq = $__case_res_4;
$eqMaybe1 = (object)["eq" => (function() use ($eq) {
  $__body = function($x, $y) use ($eq) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Nothing") && (($__case_1)->tag === "Nothing"))) {
return true;
} else {
if (((($__case_0)->tag === "Just") && (($__case_1)->tag === "Just"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return ($eq)($l, $r);
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
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
})()];
$ordMaybe = (object)["compare" => (function() use ($compare) {
  $__body = function($x, $y) use ($compare) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Nothing") && (($__case_1)->tag === "Nothing"))) {
return ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
} else {
if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
} else {
if ((($__case_1)->tag === "Nothing")) {
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
} else {
if (((($__case_0)->tag === "Just") && (($__case_1)->tag === "Just"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return ($compare)($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
};
};
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
})(), "Eq0" => (function() use ($eqMaybe1) {
  $__fn = function($__dollar____unused) use ($eqMaybe1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqMaybe1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["succ" => (function() use ($bottom2, $__global_Data_Enum_map, $succ1) {
  $__body = function($v) use ($bottom2, $__global_Data_Enum_map, $succ1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nothing":
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
})())(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($bottom2));
break;
case "Just":
$a = ($__case_0)->v0;
return ($__global_Data_Enum_map)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($succ1)($a));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($bottom2, $__global_Data_Enum_map, $succ1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "pred" => (function() use ($pred1) {
  $__body = function($v) use ($pred1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nothing":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
case "Just":
$a = ($__case_0)->v0;
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
})())(($pred1)($a));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($pred1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Ord0" => (function() use ($ordMaybe) {
  $__fn = function($__dollar____unused) use ($ordMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ordMaybe;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_enumMaybe'] = __NAMESPACE__ . '\\Data_Enum_enumMaybe';


// Data_Enum_enumFromTo
function Data_Enum_enumFromTo($dictEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_enumFromTo';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Unfoldable1_sub = ($GLOBALS['Data_Unfoldable1_sub'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_sub'));
$__global_Data_Enum_bind = ($GLOBALS['Data_Enum_bind'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_bind'));
$__global_Data_Enum_voidLeft = ($GLOBALS['Data_Enum_voidLeft'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_voidLeft'));
$__global_Data_Enum_guard = ($GLOBALS['Data_Enum_guard'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_guard'));
$Ord0 = (($dictEnum)->Ord0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_0;
$__case_0 = $Ord0;
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
$__case_0 = $dictEnum;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
$succ1 = $__case_res_2;
$__case_0 = $Ord0;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_3;
$lessThanOrEq1 = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "GT":
return false;
break;
default:
return true;
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
$__case_0 = $dictEnum;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
$pred1 = $__case_res_4;
$__case_0 = $Ord0;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_5;
$greaterThanOrEq1 = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return false;
break;
default:
return true;
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
    $__res = (function() use ($__global_Data_Unfoldable1_sub, $__global_Data_Enum_bind, $__global_Data_Enum_voidLeft, $__global_Data_Enum_guard) {
  $__fn = function($dictUnfoldable1) use ($__global_Data_Unfoldable1_sub, $__global_Data_Enum_bind, $__global_Data_Enum_voidLeft, $__global_Data_Enum_guard, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictUnfoldable1;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->unfoldr1;
} else {
throw new \Exception("Pattern match failure");
};
$unfoldr11 = $__case_res_6;
$singleton = ((function() use ($unfoldr11, $__global_Data_Unfoldable1_sub) {
  $__fn = function($n, $v = null) use ($unfoldr11, $__global_Data_Unfoldable1_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($n, &$__fn) { return $__fn($n, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$step = (function() {
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
    $__res = ($unfoldr11)($step, ($__global_Data_Unfoldable1_sub)($n, 1));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(1);
$__case_0 = $dictUnfoldable1;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->unfoldr1;
} else {
throw new \Exception("Pattern match failure");
};
$unfoldr1 = $__case_res_7;
$go = (function() use ($__global_Data_Enum_bind, $__global_Data_Enum_voidLeft, $__global_Data_Enum_guard) {
  $__fn = function($step, $op = null, $to = null, $a = null) use ($__global_Data_Enum_bind, $__global_Data_Enum_voidLeft, $__global_Data_Enum_guard, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($a) use ($step, $op, $to, &$__fn) { return $__fn($step, $op, $to, $a); };
    if ($__num === 2) return function($to, $a = null) use ($step, $op, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($step, $op, $to, $a);
      if ($__num2 === 1) return function($a) use ($step, $op, $to, &$__fn) { return $__fn($step, $op, $to, $a); };
      return phpurs_curry_fallback($__fn, [$step, $op], 4);
    };
    if ($__num === 1) return function($op, $to = null, $a = null) use ($step, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($step, $op, $to, $a);
      if ($__num2 === 2) return function($a) use ($step, $op, $to, &$__fn) { return $__fn($step, $op, $to, $a); };
      if ($__num2 === 1) return function($to, $a = null) use ($step, $op, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($step, $op, $to, $a);
        if ($__num3 === 1) return function($a) use ($step, $op, $to, &$__fn) { return $__fn($step, $op, $to, $a); };
        return phpurs_curry_fallback($__fn, [$step, $op], 4);
      };
      return phpurs_curry_fallback($__fn, [$step], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
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
})())($a, ($__global_Data_Enum_bind)(($step)($a), (function() use ($__global_Data_Enum_voidLeft, $__global_Data_Enum_guard, $op, $to) {
  $__fn = function($a__prime__) use ($__global_Data_Enum_voidLeft, $__global_Data_Enum_guard, $op, $to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Enum_voidLeft)(($__global_Data_Enum_guard)(($op)($a__prime__, $to)), $a__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$from = $__case_0;
$to = $__case_1;
return "/* Unsupported: Guards not supported */";
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
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_enumFromTo'] = __NAMESPACE__ . '\\Data_Enum_enumFromTo';

// Data_Enum_enumFromThenTo
function Data_Enum_enumFromThenTo($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_enumFromThenTo';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
$__global_Data_Enum_composeFlipped = ($GLOBALS['Data_Enum_composeFlipped'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_composeFlipped'));
$__global_Data_Enum_fromJust = ($GLOBALS['Data_Enum_fromJust'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_fromJust'));
$__global_Data_Enum_sub = ($GLOBALS['Data_Enum_sub'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_sub'));
$__case_0 = $dictUnfoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->unfoldr;
} else {
throw new \Exception("Pattern match failure");
};
$unfoldr = $__case_res_0;
    $__res = (function() use ($__global_Partial_Unsafe__unsafePartial, $__global_Data_Enum_composeFlipped, $__global_Data_Enum_fromJust, $unfoldr, $__global_Data_Enum_sub) {
  $__fn = function($dictFunctor) use ($__global_Partial_Unsafe__unsafePartial, $__global_Data_Enum_composeFlipped, $__global_Data_Enum_fromJust, $unfoldr, $__global_Data_Enum_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctor;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_1;
    $__res = (function() use ($__global_Partial_Unsafe__unsafePartial, $map1, $__global_Data_Enum_composeFlipped, $__global_Data_Enum_fromJust, $unfoldr, $__global_Data_Enum_sub) {
  $__fn = function($dictBoundedEnum) use ($__global_Partial_Unsafe__unsafePartial, $map1, $__global_Data_Enum_composeFlipped, $__global_Data_Enum_fromJust, $unfoldr, $__global_Data_Enum_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictBoundedEnum;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->fromEnum;
} else {
throw new \Exception("Pattern match failure");
};
$fromEnum1 = $__case_res_2;
$__case_0 = $dictBoundedEnum;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->toEnum;
} else {
throw new \Exception("Pattern match failure");
};
$toEnum1 = $__case_res_3;
$go = (function() {
  $__body = function($step, $to, $e) {
    $__case_0 = $step;
    $__case_1 = $to;
    $__case_2 = $e;
    if (true) {
$step1 = $__case_0;
$to1 = $__case_1;
$e1 = $__case_2;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($step, $to = null, $e = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($e) use ($step, $to, &$__fn) { return $__fn($step, $to, $e); };
    if ($__num === 1) return function($to, $e = null) use ($step, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($step, $to, $e);
      if ($__num2 === 1) return function($e) use ($step, $to, &$__fn) { return $__fn($step, $to, $e); };
      return phpurs_curry_fallback($__fn, [$step], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($step, $to, $e);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Partial_Unsafe__unsafePartial)((function() use ($fromEnum1, $map1, $__global_Data_Enum_composeFlipped, $toEnum1, $__global_Data_Enum_fromJust, $unfoldr, $go, $__global_Data_Enum_sub) {
  $__fn = function($__dollar____unused, $a = null, $b = null, $c = null) use ($fromEnum1, $map1, $__global_Data_Enum_composeFlipped, $toEnum1, $__global_Data_Enum_fromJust, $unfoldr, $go, $__global_Data_Enum_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($c) use ($__dollar____unused, $a, $b, &$__fn) { return $__fn($__dollar____unused, $a, $b, $c); };
    if ($__num === 2) return function($b, $c = null) use ($__dollar____unused, $a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($__dollar____unused, $a, $b, $c);
      if ($__num2 === 1) return function($c) use ($__dollar____unused, $a, $b, &$__fn) { return $__fn($__dollar____unused, $a, $b, $c); };
      return phpurs_curry_fallback($__fn, [$__dollar____unused, $a], 4);
    };
    if ($__num === 1) return function($a, $b = null, $c = null) use ($__dollar____unused, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($__dollar____unused, $a, $b, $c);
      if ($__num2 === 2) return function($c) use ($__dollar____unused, $a, $b, &$__fn) { return $__fn($__dollar____unused, $a, $b, $c); };
      if ($__num2 === 1) return function($b, $c = null) use ($__dollar____unused, $a, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($__dollar____unused, $a, $b, $c);
        if ($__num3 === 1) return function($c) use ($__dollar____unused, $a, $b, &$__fn) { return $__fn($__dollar____unused, $a, $b, $c); };
        return phpurs_curry_fallback($__fn, [$__dollar____unused, $a], 4);
      };
      return phpurs_curry_fallback($__fn, [$__dollar____unused], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
$c__prime__ = ($fromEnum1)($c);
$b__prime__ = ($fromEnum1)($b);
$a__prime__ = ($fromEnum1)($a);
    $__res = ($map1)(($__global_Data_Enum_composeFlipped)($toEnum1, $__global_Data_Enum_fromJust), ($unfoldr)(($go)(($__global_Data_Enum_sub)($b__prime__, $a__prime__), $c__prime__), $a__prime__));
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})());
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
$GLOBALS['Data_Enum_enumFromThenTo'] = __NAMESPACE__ . '\\Data_Enum_enumFromThenTo';

// Data_Enum_enumEither
function Data_Enum_enumEither($dictBoundedEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_enumEither';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
$__global_Data_Enum_compose = ($GLOBALS['Data_Enum_compose'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_compose'));
$Enum1 = (($dictBoundedEnum)->Enum1)($__global_Prim_undefined);
$__case_0 = $Enum1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
$succ1 = $__case_res_0;
$__case_0 = $Enum1;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
$pred1 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->top;
} else {
throw new \Exception("Pattern match failure");
};
$top2 = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq = $__case_res_4;
$eqEither1 = (function() use ($eq) {
  $__fn = function($dictEq1) use ($eq, &$__fn) {
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
$eq1 = $__case_res_5;
    $__res = (object)["eq" => (function() use ($eq, $eq1) {
  $__body = function($x, $y) use ($eq, $eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Left") && (($__case_1)->tag === "Left"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return ($eq)($l, $r);
} else {
if (((($__case_0)->tag === "Right") && (($__case_1)->tag === "Right"))) {
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
  $__fn = function($x, $y = null) use ($eq, $eq1, $__body, &$__fn) {
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
$ordEither = (function() use ($eqEither1, $__global_Prim_undefined, $compare) {
  $__fn = function($dictOrd1) use ($eqEither1, $__global_Prim_undefined, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictOrd1;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare1 = $__case_res_6;
$eqEither2 = ($eqEither1)((($dictOrd1)->Eq0)($__global_Prim_undefined));
    $__res = (object)["compare" => (function() use ($compare, $compare1) {
  $__body = function($x, $y) use ($compare, $compare1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Left") && (($__case_1)->tag === "Left"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return ($compare)($l, $r);
} else {
if ((($__case_0)->tag === "Left")) {
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
} else {
if ((($__case_1)->tag === "Left")) {
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
} else {
if (((($__case_0)->tag === "Right") && (($__case_1)->tag === "Right"))) {
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
  $__fn = function($x, $y = null) use ($compare, $compare1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqEither2) {
  $__fn = function($__dollar____unused) use ($eqEither2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqEither2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($dict, $__global_Prim_undefined, $ordEither, $__global_Data_Maybe_maybe, $__global_Data_Enum_compose, $succ1, $pred1, $top2) {
  $__fn = function($dictBoundedEnum1) use ($dict, $__global_Prim_undefined, $ordEither, $__global_Data_Maybe_maybe, $__global_Data_Enum_compose, $succ1, $pred1, $top2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
$bottom2 = $__case_res_7;
$Enum11 = (($dictBoundedEnum1)->Enum1)($__global_Prim_undefined);
$__case_0 = $Enum11;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
$succ2 = $__case_res_8;
$__case_0 = $Enum11;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
$pred2 = $__case_res_9;
$ordEither1 = ($ordEither)((($Enum11)->Ord0)($__global_Prim_undefined));
    $__res = (object)["succ" => (function() use ($__global_Data_Maybe_maybe, $bottom2, $__global_Data_Enum_compose, $succ1, $succ2) {
  $__body = function($v) use ($__global_Data_Maybe_maybe, $bottom2, $__global_Data_Enum_compose, $succ1, $succ2) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Left":
$a = ($__case_0)->v0;
return ($__global_Data_Maybe_maybe)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($bottom2)), ($__global_Data_Enum_compose)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($succ1)($a));
break;
case "Right":
$b = ($__case_0)->v0;
return ($__global_Data_Maybe_maybe)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), ($__global_Data_Enum_compose)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($succ2)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Data_Maybe_maybe, $bottom2, $__global_Data_Enum_compose, $succ1, $succ2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "pred" => (function() use ($__global_Data_Maybe_maybe, $__global_Data_Enum_compose, $pred1, $top2, $pred2) {
  $__body = function($v) use ($__global_Data_Maybe_maybe, $__global_Data_Enum_compose, $pred1, $top2, $pred2) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Left":
$a = ($__case_0)->v0;
return ($__global_Data_Maybe_maybe)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), ($__global_Data_Enum_compose)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($pred1)($a));
break;
case "Right":
$b = ($__case_0)->v0;
return ($__global_Data_Maybe_maybe)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($top2)), ($__global_Data_Enum_compose)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($pred2)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Data_Maybe_maybe, $__global_Data_Enum_compose, $pred1, $top2, $pred2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Ord0" => (function() use ($ordEither1) {
  $__fn = function($__dollar____unused) use ($ordEither1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ordEither1;
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
$GLOBALS['Data_Enum_enumEither'] = __NAMESPACE__ . '\\Data_Enum_enumEither';


// Data_Enum_downFromIncluding
function Data_Enum_downFromIncluding($dictEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_downFromIncluding';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_apply = ($GLOBALS['Data_Enum_apply'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_apply'));
$__case_0 = $dictEnum;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
$pred1 = $__case_res_0;
    $__res = (function() use ($__global_Data_Enum_apply, $pred1) {
  $__fn = function($dictUnfoldable1) use ($__global_Data_Enum_apply, $pred1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictUnfoldable1;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->unfoldr1;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_1)(($__global_Data_Enum_apply)((function() {
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
})(), $pred1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_downFromIncluding'] = __NAMESPACE__ . '\\Data_Enum_downFromIncluding';

// Data_Enum_diag
function Data_Enum_diag($a) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_diag';
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
})())($a, $a);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_diag'] = __NAMESPACE__ . '\\Data_Enum_diag';

// Data_Enum_downFrom
function Data_Enum_downFrom($dictEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_downFrom';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_compose = ($GLOBALS['Data_Enum_compose'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_compose'));
$__global_Data_Enum_map = ($GLOBALS['Data_Enum_map'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_map'));
$__global_Data_Enum_diag = ($GLOBALS['Data_Enum_diag'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_diag'));
$__case_0 = $dictEnum;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
$pred1 = $__case_res_0;
    $__res = (function() use ($__global_Data_Enum_compose, $__global_Data_Enum_map, $__global_Data_Enum_diag, $pred1) {
  $__fn = function($dictUnfoldable) use ($__global_Data_Enum_compose, $__global_Data_Enum_map, $__global_Data_Enum_diag, $pred1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictUnfoldable;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->unfoldr;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_1)(($__global_Data_Enum_compose)(($__global_Data_Enum_map)($__global_Data_Enum_diag), $pred1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_downFrom'] = __NAMESPACE__ . '\\Data_Enum_downFrom';

// Data_Enum_upFrom
function Data_Enum_upFrom($dictEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_upFrom';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_compose = ($GLOBALS['Data_Enum_compose'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_compose'));
$__global_Data_Enum_map = ($GLOBALS['Data_Enum_map'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_map'));
$__global_Data_Enum_diag = ($GLOBALS['Data_Enum_diag'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_diag'));
$__case_0 = $dictEnum;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
$succ1 = $__case_res_0;
    $__res = (function() use ($__global_Data_Enum_compose, $__global_Data_Enum_map, $__global_Data_Enum_diag, $succ1) {
  $__fn = function($dictUnfoldable) use ($__global_Data_Enum_compose, $__global_Data_Enum_map, $__global_Data_Enum_diag, $succ1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictUnfoldable;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->unfoldr;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_1)(($__global_Data_Enum_compose)(($__global_Data_Enum_map)($__global_Data_Enum_diag), $succ1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_upFrom'] = __NAMESPACE__ . '\\Data_Enum_upFrom';

// Data_Enum_defaultToEnum
function Data_Enum_defaultToEnum($dictBounded) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_defaultToEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_eq = ($GLOBALS['Data_Enum_eq'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_eq'));
$__global_Data_Enum_sub = ($GLOBALS['Data_Enum_sub'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_sub'));
$__global_Data_Enum_lessThan = ($GLOBALS['Data_Enum_lessThan'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_lessThan'));
$__case_0 = $dictBounded;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
$bottom2 = $__case_res_0;
    $__res = (function() use ($__global_Data_Enum_eq, $__global_Data_Enum_sub, $__global_Data_Enum_lessThan, $bottom2) {
  $__fn = function($dictEnum) use ($__global_Data_Enum_eq, $__global_Data_Enum_sub, $__global_Data_Enum_lessThan, $bottom2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictEnum;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
$succ1 = $__case_res_1;
    $__res = (function() use ($__global_Data_Enum_eq, $succ1, $__global_Data_Enum_sub, $__global_Data_Enum_lessThan, $bottom2) {
  $__body = function($i__prime__) use ($__global_Data_Enum_eq, $succ1, $__global_Data_Enum_sub, $__global_Data_Enum_lessThan, $bottom2) {
    $go = (function() use ($__global_Data_Enum_eq, $succ1, &$go, $__global_Data_Enum_sub) {
  $__fn = function($i, $x = null) use ($__global_Data_Enum_eq, $succ1, &$go, $__global_Data_Enum_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($i, &$__fn) { return $__fn($i, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = ($__global_Data_Enum_eq)($i, 0);
switch ($__case_0) {
case true:
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
})())($x);
break;
default:
$v = ($succ1)($x);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Just":
$x__prime__ = ($__case_0)->v0;
$__tco_tmp_0 = ($__global_Data_Enum_sub)($i, 1);
$__tco_tmp_1 = $x__prime__;
$i = $__tco_tmp_0;
$x = $__tco_tmp_1;
continue 3;
break;
case "Nothing":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__case_0 = ($__global_Data_Enum_lessThan)($i__prime__, 0);
    switch ($__case_0) {
case true:
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
default:
return ($go)($i__prime__, $bottom2);
break;
};
  };
  $__fn = function($i__prime__) use ($__global_Data_Enum_eq, $succ1, $__global_Data_Enum_sub, $__global_Data_Enum_lessThan, $bottom2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($i__prime__);
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
$GLOBALS['Data_Enum_defaultToEnum'] = __NAMESPACE__ . '\\Data_Enum_defaultToEnum';

// Data_Enum_defaultSucc
function Data_Enum_defaultSucc($toEnum__prime__, $fromEnum__prime__ = null, $a = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_defaultSucc';
  if ($__num < 3) {
    if ($__num === 2) return function($a) use ($toEnum__prime__, $fromEnum__prime__, $__fn) { return $__fn($toEnum__prime__, $fromEnum__prime__, $a); };
    if ($__num === 1) return function($fromEnum__prime__, $a = null) use ($toEnum__prime__, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($toEnum__prime__, $fromEnum__prime__, $a);
      if ($__num2 === 1) return function($a) use ($toEnum__prime__, $fromEnum__prime__, $__fn) { return $__fn($toEnum__prime__, $fromEnum__prime__, $a); };
      return phpurs_curry_fallback($__fn, [$toEnum__prime__], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_Enum_add = ($GLOBALS['Data_Enum_add'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_add'));
    $__res = ($toEnum__prime__)(($__global_Data_Enum_add)(($fromEnum__prime__)($a), 1));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Enum_defaultSucc'] = __NAMESPACE__ . '\\Data_Enum_defaultSucc';

// Data_Enum_defaultPred
function Data_Enum_defaultPred($toEnum__prime__, $fromEnum__prime__ = null, $a = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_defaultPred';
  if ($__num < 3) {
    if ($__num === 2) return function($a) use ($toEnum__prime__, $fromEnum__prime__, $__fn) { return $__fn($toEnum__prime__, $fromEnum__prime__, $a); };
    if ($__num === 1) return function($fromEnum__prime__, $a = null) use ($toEnum__prime__, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($toEnum__prime__, $fromEnum__prime__, $a);
      if ($__num2 === 1) return function($a) use ($toEnum__prime__, $fromEnum__prime__, $__fn) { return $__fn($toEnum__prime__, $fromEnum__prime__, $a); };
      return phpurs_curry_fallback($__fn, [$toEnum__prime__], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_Enum_sub = ($GLOBALS['Data_Enum_sub'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_sub'));
    $__res = ($toEnum__prime__)(($__global_Data_Enum_sub)(($fromEnum__prime__)($a), 1));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Enum_defaultPred'] = __NAMESPACE__ . '\\Data_Enum_defaultPred';

// Data_Enum_defaultFromEnum
function Data_Enum_defaultFromEnum($dictEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_defaultFromEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_add = ($GLOBALS['Data_Enum_add'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_add'));
$__case_0 = $dictEnum;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
$pred1 = $__case_res_0;
$go = (function() use ($pred1, &$go, $__global_Data_Enum_add) {
  $__fn = function($i, $x = null) use ($pred1, &$go, $__global_Data_Enum_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($i, &$__fn) { return $__fn($i, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($pred1)($x);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Just":
$x__prime__ = ($__case_0)->v0;
$__tco_tmp_0 = ($__global_Data_Enum_add)($i, 1);
$__tco_tmp_1 = $x__prime__;
$i = $__tco_tmp_0;
$x = $__tco_tmp_1;
continue 2;
break;
case "Nothing":
return $i;
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
    $__res = ($go)(0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_defaultFromEnum'] = __NAMESPACE__ . '\\Data_Enum_defaultFromEnum';

// Data_Enum_defaultCardinality
function Data_Enum_defaultCardinality($dictBounded) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_defaultCardinality';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_add = ($GLOBALS['Data_Enum_add'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_add'));
$__case_0 = $dictBounded;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
$bottom2 = $__case_res_0;
    $__res = (function() use ($__global_Data_Enum_add, $bottom2) {
  $__fn = function($dictEnum) use ($__global_Data_Enum_add, $bottom2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictEnum;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
$succ1 = $__case_res_1;
$go = (function() use ($succ1, &$go, $__global_Data_Enum_add) {
  $__fn = function($i, $x = null) use ($succ1, &$go, $__global_Data_Enum_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($i, &$__fn) { return $__fn($i, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($succ1)($x);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Just":
$x__prime__ = ($__case_0)->v0;
$__tco_tmp_0 = ($__global_Data_Enum_add)($i, 1);
$__tco_tmp_1 = $x__prime__;
$i = $__tco_tmp_0;
$x = $__tco_tmp_1;
continue 2;
break;
case "Nothing":
return $i;
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
    $__res = ($go)(1, $bottom2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_defaultCardinality'] = __NAMESPACE__ . '\\Data_Enum_defaultCardinality';

// Data_Enum_charToEnum
function Data_Enum_charToEnum($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_charToEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_charToEnum'] = __NAMESPACE__ . '\\Data_Enum_charToEnum';


// Data_Enum_cardinality
function Data_Enum_cardinality($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_cardinality';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->cardinality;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_cardinality'] = __NAMESPACE__ . '\\Data_Enum_cardinality';





