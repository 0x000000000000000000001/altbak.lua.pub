<?php

namespace Data\Semigroup\Foldable;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord.Max/index.php';
require_once __DIR__ . '/../Data.Ord.Min/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
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
      case 'Data_Semigroup_Foldable_eq': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ordering_eqOrdering'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_eqOrdering'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Semigroup_Foldable_composeFlipped': $v = (function() {
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
      case 'Data_Semigroup_Foldable_compose': $v = (function() {
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
      case 'Data_Semigroup_Foldable_alaF': $v = (($GLOBALS['Data_Newtype_alaF'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_alaF')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Semigroup_Foldable_identity': $v = (function() {
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
      case 'Data_Semigroup_Foldable_ala': $v = (($GLOBALS['Data_Newtype_ala'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_ala')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Semigroup_Foldable_mkFoldRight1': $v = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("FoldRight1", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'))); break;
      case 'Data_Semigroup_Foldable_foldableTuple': $v = (object)["foldMap1" => (function() {
  $__body = function($dictSemigroup, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$x = ($__case_1)->v1;
return ($f1)($x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($dictSemigroup, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictSemigroup, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictSemigroup, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictSemigroup], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($dictSemigroup, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldr1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "Tuple":
$x = ($__case_1)->v1;
return $x;
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
})(), "foldl1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "Tuple":
$x = ($__case_1)->v1;
return $x;
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
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableTuple = ($GLOBALS['Data_Foldable_foldableTuple'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableTuple'));
    $__res = $__global_Data_Foldable_foldableTuple;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Semigroup_Foldable_foldableMultiplicative': $v = (object)["foldr1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return $x;
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
})(), "foldl1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return $x;
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
})(), "foldMap1" => (function() {
  $__body = function($dictSemigroup, $f, $v) {
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
  $__fn = function($dictSemigroup, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictSemigroup, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictSemigroup, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictSemigroup], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($dictSemigroup, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableMultiplicative = ($GLOBALS['Data_Foldable_foldableMultiplicative'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMultiplicative'));
    $__res = $__global_Data_Foldable_foldableMultiplicative;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Semigroup_Foldable_foldableIdentity': $v = (object)["foldMap1" => (function() {
  $__body = function($dictSemigroup, $f, $v) {
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
  $__fn = function($dictSemigroup, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictSemigroup, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictSemigroup, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictSemigroup], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($dictSemigroup, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return $x;
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
})(), "foldr1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return $x;
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
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableIdentity = ($GLOBALS['Data_Foldable_foldableIdentity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableIdentity'));
    $__res = $__global_Data_Foldable_foldableIdentity;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Semigroup_Foldable_foldableDual': $v = (object)["foldr1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return $x;
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
})(), "foldl1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return $x;
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
})(), "foldMap1" => (function() {
  $__body = function($dictSemigroup, $f, $v) {
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
  $__fn = function($dictSemigroup, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictSemigroup, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictSemigroup, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictSemigroup], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($dictSemigroup, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableDual = ($GLOBALS['Data_Foldable_foldableDual'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableDual'));
    $__res = $__global_Data_Foldable_foldableDual;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Semigroup_Foldable_foldRight1Semigroup': $v = (object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "FoldRight1") && (($__case_1)->tag === "FoldRight1"))) {
$lf = ($__case_0)->v0;
$lr = ($__case_0)->v1;
$rf = ($__case_1)->v0;
$rr = ($__case_1)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("FoldRight1", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())((function() use ($lf, $lr, $rf) {
  $__fn = function($a, $f = null) use ($lf, $lr, $rf, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($a, &$__fn) { return $__fn($a, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($lf)(($f)($lr, ($rf)($a, $f)), $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $rr);
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
})()]; break;
      case 'Data_Semigroup_Foldable_semigroupDual': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semigroup_Foldable_foldRight1Semigroup'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_foldRight1Semigroup'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
  $append1 = $__case_res_0;
  return (object)["append" => (function() use ($append1) {
  $__body = function($v, $v1) use ($append1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($append1)($y, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($append1, $__body, &$__fn) {
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
})(); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };








// Data_Semigroup_Foldable_JoinWith
function Data_Semigroup_Foldable_JoinWith($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_JoinWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_JoinWith'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_JoinWith';

// Data_Semigroup_Foldable_Foldable1$Dict
function Data_Semigroup_Foldable_Foldable1__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_Foldable1__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_Foldable1__dollar__Dict'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_Foldable1__dollar__Dict';

// Data_Semigroup_Foldable_FoldRight1
function Data_Semigroup_Foldable_FoldRight1($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_FoldRight1';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("FoldRight1", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_FoldRight1'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_FoldRight1';

// Data_Semigroup_Foldable_Act
function Data_Semigroup_Foldable_Act($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_Act';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_Act'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_Act';

// Data_Semigroup_Foldable_semigroupJoinWith
function Data_Semigroup_Foldable_semigroupJoinWith($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_semigroupJoinWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictSemigroup;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_0;
    $__res = (object)["append" => (function() use ($append) {
  $__body = function($v, $v1) use ($append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return (function() use ($append, $a, $b) {
  $__fn = function($j) use ($append, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($append)(($a)($j), ($append)($j, ($b)($j)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($append, $__body, &$__fn) {
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
$GLOBALS['Data_Semigroup_Foldable_semigroupJoinWith'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_semigroupJoinWith';

// Data_Semigroup_Foldable_semigroupAct
function Data_Semigroup_Foldable_semigroupAct($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_semigroupAct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Apply_identity = ($GLOBALS['Control_Apply_identity'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_identity'));
$__case_0 = $dictApply;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
$applySecond = (function() use ($apply1, $map, $__global_Data_Function_const, $__global_Control_Apply_identity) {
  $__fn = function($a, $b = null) use ($apply1, $map, $__global_Data_Function_const, $__global_Control_Apply_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($apply1)(($map)(($__global_Data_Function_const)($__global_Control_Apply_identity), $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (object)["append" => (function() use ($applySecond) {
  $__body = function($v, $v1) use ($applySecond) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($applySecond)($a, $b);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($applySecond, $__body, &$__fn) {
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
$GLOBALS['Data_Semigroup_Foldable_semigroupAct'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_semigroupAct';

// Data_Semigroup_Foldable_runFoldRight1
function Data_Semigroup_Foldable_runFoldRight1($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_runFoldRight1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "FoldRight1":
$f = ($__case_0)->v0;
$a = ($__case_0)->v1;
return ($f)($a);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_runFoldRight1'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_runFoldRight1';


// Data_Semigroup_Foldable_joinee
function Data_Semigroup_Foldable_joinee($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_joinee';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return $x;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_joinee'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_joinee';

// Data_Semigroup_Foldable_getAct
function Data_Semigroup_Foldable_getAct($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_getAct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return $f;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_getAct'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_getAct';

// Data_Semigroup_Foldable_foldr1
function Data_Semigroup_Foldable_foldr1($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_foldr1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldr1;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_foldr1'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_foldr1';

// Data_Semigroup_Foldable_foldl1
function Data_Semigroup_Foldable_foldl1($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_foldl1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldl1;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_foldl1'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_foldl1';

// Data_Semigroup_Foldable_maximumBy
function Data_Semigroup_Foldable_maximumBy($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_maximumBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Semigroup_Foldable_eq = ($GLOBALS['Data_Semigroup_Foldable_eq'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_eq'));
$__case_0 = $dictFoldable1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl1;
} else {
throw new \Exception("Pattern match failure");
};
$foldl11 = $__case_res_0;
    $__res = (function() use ($foldl11, $__global_Data_Semigroup_Foldable_eq) {
  $__fn = function($cmp) use ($foldl11, $__global_Data_Semigroup_Foldable_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldl11)((function() use ($__global_Data_Semigroup_Foldable_eq, $cmp) {
  $__body = function($x, $y) use ($__global_Data_Semigroup_Foldable_eq, $cmp) {
    $__case_0 = ($__global_Data_Semigroup_Foldable_eq)(($cmp)($x, $y), ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT")));
    switch ($__case_0) {
case true:
return $x;
break;
default:
return $y;
break;
};
  };
  $__fn = function($x, $y = null) use ($__global_Data_Semigroup_Foldable_eq, $cmp, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_maximumBy'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_maximumBy';

// Data_Semigroup_Foldable_minimumBy
function Data_Semigroup_Foldable_minimumBy($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_minimumBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Semigroup_Foldable_eq = ($GLOBALS['Data_Semigroup_Foldable_eq'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_eq'));
$__case_0 = $dictFoldable1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl1;
} else {
throw new \Exception("Pattern match failure");
};
$foldl11 = $__case_res_0;
    $__res = (function() use ($foldl11, $__global_Data_Semigroup_Foldable_eq) {
  $__fn = function($cmp) use ($foldl11, $__global_Data_Semigroup_Foldable_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldl11)((function() use ($__global_Data_Semigroup_Foldable_eq, $cmp) {
  $__body = function($x, $y) use ($__global_Data_Semigroup_Foldable_eq, $cmp) {
    $__case_0 = ($__global_Data_Semigroup_Foldable_eq)(($cmp)($x, $y), ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT")));
    switch ($__case_0) {
case true:
return $x;
break;
default:
return $y;
break;
};
  };
  $__fn = function($x, $y = null) use ($__global_Data_Semigroup_Foldable_eq, $cmp, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_minimumBy'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_minimumBy';







// Data_Semigroup_Foldable_foldMap1DefaultR
function Data_Semigroup_Foldable_foldMap1DefaultR($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_foldMap1DefaultR';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Semigroup_Foldable_composeFlipped = ($GLOBALS['Data_Semigroup_Foldable_composeFlipped'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_composeFlipped'));
$__case_0 = $dictFoldable1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr1;
} else {
throw new \Exception("Pattern match failure");
};
$foldr11 = $__case_res_0;
    $__res = (function() use ($__global_Data_Semigroup_Foldable_composeFlipped, $foldr11) {
  $__fn = function($dictFunctor) use ($__global_Data_Semigroup_Foldable_composeFlipped, $foldr11, &$__fn) {
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
$map = $__case_res_1;
    $__res = (function() use ($__global_Data_Semigroup_Foldable_composeFlipped, $map, $foldr11) {
  $__fn = function($dictSemigroup) use ($__global_Data_Semigroup_Foldable_composeFlipped, $map, $foldr11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictSemigroup;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_2;
    $__res = (function() use ($__global_Data_Semigroup_Foldable_composeFlipped, $map, $foldr11, $append) {
  $__fn = function($f) use ($__global_Data_Semigroup_Foldable_composeFlipped, $map, $foldr11, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Semigroup_Foldable_composeFlipped)(($map)($f), ($foldr11)($append));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
$GLOBALS['Data_Semigroup_Foldable_foldMap1DefaultR'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_foldMap1DefaultR';

// Data_Semigroup_Foldable_foldMap1DefaultL
function Data_Semigroup_Foldable_foldMap1DefaultL($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_foldMap1DefaultL';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Semigroup_Foldable_composeFlipped = ($GLOBALS['Data_Semigroup_Foldable_composeFlipped'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_composeFlipped'));
$__case_0 = $dictFoldable1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl1;
} else {
throw new \Exception("Pattern match failure");
};
$foldl11 = $__case_res_0;
    $__res = (function() use ($__global_Data_Semigroup_Foldable_composeFlipped, $foldl11) {
  $__fn = function($dictFunctor) use ($__global_Data_Semigroup_Foldable_composeFlipped, $foldl11, &$__fn) {
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
$map = $__case_res_1;
    $__res = (function() use ($__global_Data_Semigroup_Foldable_composeFlipped, $map, $foldl11) {
  $__fn = function($dictSemigroup) use ($__global_Data_Semigroup_Foldable_composeFlipped, $map, $foldl11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictSemigroup;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_2;
    $__res = (function() use ($__global_Data_Semigroup_Foldable_composeFlipped, $map, $foldl11, $append) {
  $__fn = function($f) use ($__global_Data_Semigroup_Foldable_composeFlipped, $map, $foldl11, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Semigroup_Foldable_composeFlipped)(($map)($f), ($foldl11)($append));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
$GLOBALS['Data_Semigroup_Foldable_foldMap1DefaultL'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_foldMap1DefaultL';

// Data_Semigroup_Foldable_foldMap1
function Data_Semigroup_Foldable_foldMap1($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_foldMap1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_foldMap1'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_foldMap1';

// Data_Semigroup_Foldable_foldl1Default
function Data_Semigroup_Foldable_foldl1Default($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_foldl1Default';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Semigroup_Foldable_compose = ($GLOBALS['Data_Semigroup_Foldable_compose'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_compose'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__global_Data_Semigroup_Foldable_runFoldRight1 = ($GLOBALS['Data_Semigroup_Foldable_runFoldRight1'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_runFoldRight1'));
$__global_Data_Semigroup_Foldable_alaF = ($GLOBALS['Data_Semigroup_Foldable_alaF'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_alaF'));
$__global_Data_Monoid_Dual_Dual = ($GLOBALS['Data_Monoid_Dual_Dual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_Dual'));
$__global_Data_Semigroup_Foldable_semigroupDual = ($GLOBALS['Data_Semigroup_Foldable_semigroupDual'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_semigroupDual'));
$__global_Data_Semigroup_Foldable_mkFoldRight1 = ($GLOBALS['Data_Semigroup_Foldable_mkFoldRight1'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_mkFoldRight1'));
$__case_0 = $dictFoldable1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Semigroup_Foldable_compose)(($__global_Data_Function_flip)(($__global_Data_Semigroup_Foldable_compose)($__global_Data_Semigroup_Foldable_runFoldRight1, ($__global_Data_Semigroup_Foldable_alaF)($__global_Data_Monoid_Dual_Dual, ($__case_res_0)($__global_Data_Semigroup_Foldable_semigroupDual), $__global_Data_Semigroup_Foldable_mkFoldRight1))), $__global_Data_Function_flip);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_foldl1Default'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_foldl1Default';

// Data_Semigroup_Foldable_foldr1Default
function Data_Semigroup_Foldable_foldr1Default($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_foldr1Default';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__global_Data_Semigroup_Foldable_compose = ($GLOBALS['Data_Semigroup_Foldable_compose'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_compose'));
$__global_Data_Semigroup_Foldable_runFoldRight1 = ($GLOBALS['Data_Semigroup_Foldable_runFoldRight1'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_runFoldRight1'));
$__global_Data_Semigroup_Foldable_foldRight1Semigroup = ($GLOBALS['Data_Semigroup_Foldable_foldRight1Semigroup'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_foldRight1Semigroup'));
$__global_Data_Semigroup_Foldable_mkFoldRight1 = ($GLOBALS['Data_Semigroup_Foldable_mkFoldRight1'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_mkFoldRight1'));
$__case_0 = $dictFoldable1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Function_flip)(($__global_Data_Semigroup_Foldable_compose)($__global_Data_Semigroup_Foldable_runFoldRight1, ($__case_res_0)($__global_Data_Semigroup_Foldable_foldRight1Semigroup, $__global_Data_Semigroup_Foldable_mkFoldRight1)));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_foldr1Default'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_foldr1Default';

// Data_Semigroup_Foldable_intercalateMap
function Data_Semigroup_Foldable_intercalateMap($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_intercalateMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Semigroup_Foldable_joinee = ($GLOBALS['Data_Semigroup_Foldable_joinee'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_joinee'));
$__global_Data_Semigroup_Foldable_compose = ($GLOBALS['Data_Semigroup_Foldable_compose'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_compose'));
$__global_Data_Semigroup_Foldable_JoinWith = ($GLOBALS['Data_Semigroup_Foldable_JoinWith'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_JoinWith'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__case_0 = $dictFoldable1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap11 = $__case_res_0;
    $__res = (function() use ($foldMap11, $__global_Data_Semigroup_Foldable_joinee, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_JoinWith, $__global_Data_Function_const) {
  $__fn = function($dictSemigroup) use ($foldMap11, $__global_Data_Semigroup_Foldable_joinee, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_JoinWith, $__global_Data_Function_const, &$__fn) {
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
$foldMap12 = ($foldMap11)((object)["append" => (function() use ($append) {
  $__body = function($v, $v1) use ($append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return (function() use ($append, $a, $b) {
  $__fn = function($j) use ($append, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($append)(($a)($j), ($append)($j, ($b)($j)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($append, $__body, &$__fn) {
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
    $__res = (function() use ($__global_Data_Semigroup_Foldable_joinee, $foldMap12, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_JoinWith, $__global_Data_Function_const) {
  $__fn = function($j, $f = null, $foldable = null) use ($__global_Data_Semigroup_Foldable_joinee, $foldMap12, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_JoinWith, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($foldable) use ($j, $f, &$__fn) { return $__fn($j, $f, $foldable); };
    if ($__num === 1) return function($f, $foldable = null) use ($j, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($j, $f, $foldable);
      if ($__num2 === 1) return function($foldable) use ($j, $f, &$__fn) { return $__fn($j, $f, $foldable); };
      return phpurs_curry_fallback($__fn, [$j], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Semigroup_Foldable_joinee)(($foldMap12)(($__global_Data_Semigroup_Foldable_compose)($__global_Data_Semigroup_Foldable_JoinWith, ($__global_Data_Semigroup_Foldable_compose)($__global_Data_Function_const, $f)), $foldable), $j);
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
$GLOBALS['Data_Semigroup_Foldable_intercalateMap'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_intercalateMap';

// Data_Semigroup_Foldable_intercalate
function Data_Semigroup_Foldable_intercalate($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_intercalate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Semigroup_Foldable_joinee = ($GLOBALS['Data_Semigroup_Foldable_joinee'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_joinee'));
$__global_Data_Semigroup_Foldable_compose = ($GLOBALS['Data_Semigroup_Foldable_compose'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_compose'));
$__global_Data_Semigroup_Foldable_JoinWith = ($GLOBALS['Data_Semigroup_Foldable_JoinWith'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_JoinWith'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__global_Data_Semigroup_Foldable_identity = ($GLOBALS['Data_Semigroup_Foldable_identity'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_identity'));
$__case_0 = $dictFoldable1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap11 = $__case_res_0;
$intercalateMap1 = (function() use ($foldMap11, $__global_Data_Semigroup_Foldable_joinee, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_JoinWith, $__global_Data_Function_const) {
  $__fn = function($dictSemigroup) use ($foldMap11, $__global_Data_Semigroup_Foldable_joinee, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_JoinWith, $__global_Data_Function_const, &$__fn) {
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
$foldMap12 = ($foldMap11)((object)["append" => (function() use ($append) {
  $__body = function($v, $v1) use ($append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return (function() use ($append, $a, $b) {
  $__fn = function($j) use ($append, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($append)(($a)($j), ($append)($j, ($b)($j)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($append, $__body, &$__fn) {
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
    $__res = (function() use ($__global_Data_Semigroup_Foldable_joinee, $foldMap12, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_JoinWith, $__global_Data_Function_const) {
  $__fn = function($j, $f = null, $foldable = null) use ($__global_Data_Semigroup_Foldable_joinee, $foldMap12, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_JoinWith, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($foldable) use ($j, $f, &$__fn) { return $__fn($j, $f, $foldable); };
    if ($__num === 1) return function($f, $foldable = null) use ($j, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($j, $f, $foldable);
      if ($__num2 === 1) return function($foldable) use ($j, $f, &$__fn) { return $__fn($j, $f, $foldable); };
      return phpurs_curry_fallback($__fn, [$j], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Semigroup_Foldable_joinee)(($foldMap12)(($__global_Data_Semigroup_Foldable_compose)($__global_Data_Semigroup_Foldable_JoinWith, ($__global_Data_Semigroup_Foldable_compose)($__global_Data_Function_const, $f)), $foldable), $j);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($__global_Data_Function_flip, $intercalateMap1, $__global_Data_Semigroup_Foldable_identity) {
  $__fn = function($dictSemigroup) use ($__global_Data_Function_flip, $intercalateMap1, $__global_Data_Semigroup_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Function_flip)(($intercalateMap1)($dictSemigroup), $__global_Data_Semigroup_Foldable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_intercalate'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_intercalate';

// Data_Semigroup_Foldable_maximum
function Data_Semigroup_Foldable_maximum($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_maximum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Semigroup_Foldable_ala = ($GLOBALS['Data_Semigroup_Foldable_ala'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_ala'));
$__global_Data_Ord_Max_Max = ($GLOBALS['Data_Ord_Max_Max'] ?? \Data\Ord\Max\phpurs_eval_thunk('Data_Ord_Max_Max'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_0;
$max = (function() use ($compare3) {
  $__body = function($x, $y) use ($compare3) {
    $v = ($compare3)($x, $y);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return $y;
break;
case "EQ":
return $x;
break;
case "GT":
return $x;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($x, $y = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$semigroupMax = (object)["append" => (function() use ($max) {
  $__body = function($v, $v1) use ($max) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($max)($x, $y);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($max, $__body, &$__fn) {
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
    $__res = (function() use ($__global_Data_Semigroup_Foldable_ala, $__global_Data_Ord_Max_Max, $semigroupMax) {
  $__fn = function($dictFoldable1) use ($__global_Data_Semigroup_Foldable_ala, $__global_Data_Ord_Max_Max, $semigroupMax, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable1;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Semigroup_Foldable_ala)($__global_Data_Ord_Max_Max, ($__case_res_1)($semigroupMax));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_maximum'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_maximum';

// Data_Semigroup_Foldable_minimum
function Data_Semigroup_Foldable_minimum($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_minimum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Semigroup_Foldable_ala = ($GLOBALS['Data_Semigroup_Foldable_ala'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_ala'));
$__global_Data_Ord_Min_Min = ($GLOBALS['Data_Ord_Min_Min'] ?? \Data\Ord\Min\phpurs_eval_thunk('Data_Ord_Min_Min'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_0;
$min = (function() use ($compare3) {
  $__body = function($x, $y) use ($compare3) {
    $v = ($compare3)($x, $y);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return $x;
break;
case "EQ":
return $x;
break;
case "GT":
return $y;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($x, $y = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$semigroupMin = (object)["append" => (function() use ($min) {
  $__body = function($v, $v1) use ($min) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($min)($x, $y);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($min, $__body, &$__fn) {
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
    $__res = (function() use ($__global_Data_Semigroup_Foldable_ala, $__global_Data_Ord_Min_Min, $semigroupMin) {
  $__fn = function($dictFoldable1) use ($__global_Data_Semigroup_Foldable_ala, $__global_Data_Ord_Min_Min, $semigroupMin, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable1;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Semigroup_Foldable_ala)($__global_Data_Ord_Min_Min, ($__case_res_1)($semigroupMin));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_minimum'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_minimum';

// Data_Semigroup_Foldable_traverse1_
function Data_Semigroup_Foldable_traverse1_($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_traverse1_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Apply_identity = ($GLOBALS['Control_Apply_identity'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_identity'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Data_Semigroup_Foldable_getAct = ($GLOBALS['Data_Semigroup_Foldable_getAct'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_getAct'));
$__global_Data_Semigroup_Foldable_compose = ($GLOBALS['Data_Semigroup_Foldable_compose'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_compose'));
$__global_Data_Semigroup_Foldable_Act = ($GLOBALS['Data_Semigroup_Foldable_Act'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_Act'));
$__case_0 = $dictFoldable1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap11 = $__case_res_0;
    $__res = (function() use ($dict, $__global_Data_Function_const, $foldMap11, $__global_Control_Apply_identity, $__global_Data_Unit_unit, $__global_Data_Semigroup_Foldable_getAct, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_Act) {
  $__fn = function($dictApply) use ($dict, $__global_Data_Function_const, $foldMap11, $__global_Control_Apply_identity, $__global_Data_Unit_unit, $__global_Data_Semigroup_Foldable_getAct, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_Act, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_1;
$voidRight = (function() use ($map1, $__global_Data_Function_const) {
  $__fn = function($x) use ($map1, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map1)(($__global_Data_Function_const)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictApply;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_3;
$applySecond = (function() use ($apply1, $map, $__global_Data_Function_const, $__global_Control_Apply_identity) {
  $__fn = function($a, $b = null) use ($apply1, $map, $__global_Data_Function_const, $__global_Control_Apply_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($apply1)(($map)(($__global_Data_Function_const)($__global_Control_Apply_identity), $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$foldMap12 = ($foldMap11)((object)["append" => (function() use ($applySecond) {
  $__body = function($v, $v1) use ($applySecond) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($applySecond)($a, $b);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($applySecond, $__body, &$__fn) {
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
    $__res = (function() use ($voidRight, $__global_Data_Unit_unit, $__global_Data_Semigroup_Foldable_getAct, $foldMap12, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_Act) {
  $__fn = function($f, $t = null) use ($voidRight, $__global_Data_Unit_unit, $__global_Data_Semigroup_Foldable_getAct, $foldMap12, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_Act, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($f, &$__fn) { return $__fn($f, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($voidRight)($__global_Data_Unit_unit, ($__global_Data_Semigroup_Foldable_getAct)(($foldMap12)(($__global_Data_Semigroup_Foldable_compose)($__global_Data_Semigroup_Foldable_Act, $f), $t)));
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
$GLOBALS['Data_Semigroup_Foldable_traverse1_'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_traverse1_';

// Data_Semigroup_Foldable_for1_
function Data_Semigroup_Foldable_for1_($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_for1_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Apply_identity = ($GLOBALS['Control_Apply_identity'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_identity'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Data_Semigroup_Foldable_getAct = ($GLOBALS['Data_Semigroup_Foldable_getAct'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_getAct'));
$__global_Data_Semigroup_Foldable_compose = ($GLOBALS['Data_Semigroup_Foldable_compose'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_compose'));
$__global_Data_Semigroup_Foldable_Act = ($GLOBALS['Data_Semigroup_Foldable_Act'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_Act'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__case_0 = $dictFoldable1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap11 = $__case_res_0;
$traverse1_1 = (function() use ($dict, $__global_Data_Function_const, $foldMap11, $__global_Control_Apply_identity, $__global_Data_Unit_unit, $__global_Data_Semigroup_Foldable_getAct, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_Act) {
  $__fn = function($dictApply) use ($dict, $__global_Data_Function_const, $foldMap11, $__global_Control_Apply_identity, $__global_Data_Unit_unit, $__global_Data_Semigroup_Foldable_getAct, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_Act, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_1;
$voidRight = (function() use ($map1, $__global_Data_Function_const) {
  $__fn = function($x) use ($map1, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map1)(($__global_Data_Function_const)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictApply;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_3;
$applySecond = (function() use ($apply1, $map, $__global_Data_Function_const, $__global_Control_Apply_identity) {
  $__fn = function($a, $b = null) use ($apply1, $map, $__global_Data_Function_const, $__global_Control_Apply_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($apply1)(($map)(($__global_Data_Function_const)($__global_Control_Apply_identity), $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$foldMap12 = ($foldMap11)((object)["append" => (function() use ($applySecond) {
  $__body = function($v, $v1) use ($applySecond) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($applySecond)($a, $b);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($applySecond, $__body, &$__fn) {
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
    $__res = (function() use ($voidRight, $__global_Data_Unit_unit, $__global_Data_Semigroup_Foldable_getAct, $foldMap12, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_Act) {
  $__fn = function($f, $t = null) use ($voidRight, $__global_Data_Unit_unit, $__global_Data_Semigroup_Foldable_getAct, $foldMap12, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_Act, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($f, &$__fn) { return $__fn($f, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($voidRight)($__global_Data_Unit_unit, ($__global_Data_Semigroup_Foldable_getAct)(($foldMap12)(($__global_Data_Semigroup_Foldable_compose)($__global_Data_Semigroup_Foldable_Act, $f), $t)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($__global_Data_Function_flip, $traverse1_1) {
  $__fn = function($dictApply) use ($__global_Data_Function_flip, $traverse1_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Function_flip)(($traverse1_1)($dictApply));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_for1_'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_for1_';

// Data_Semigroup_Foldable_sequence1_
function Data_Semigroup_Foldable_sequence1_($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_sequence1_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Apply_identity = ($GLOBALS['Control_Apply_identity'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_identity'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Data_Semigroup_Foldable_getAct = ($GLOBALS['Data_Semigroup_Foldable_getAct'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_getAct'));
$__global_Data_Semigroup_Foldable_compose = ($GLOBALS['Data_Semigroup_Foldable_compose'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_compose'));
$__global_Data_Semigroup_Foldable_Act = ($GLOBALS['Data_Semigroup_Foldable_Act'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_Act'));
$__global_Data_Semigroup_Foldable_identity = ($GLOBALS['Data_Semigroup_Foldable_identity'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_identity'));
$__case_0 = $dictFoldable1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap11 = $__case_res_0;
$traverse1_1 = (function() use ($dict, $__global_Data_Function_const, $foldMap11, $__global_Control_Apply_identity, $__global_Data_Unit_unit, $__global_Data_Semigroup_Foldable_getAct, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_Act) {
  $__fn = function($dictApply) use ($dict, $__global_Data_Function_const, $foldMap11, $__global_Control_Apply_identity, $__global_Data_Unit_unit, $__global_Data_Semigroup_Foldable_getAct, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_Act, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_1;
$voidRight = (function() use ($map1, $__global_Data_Function_const) {
  $__fn = function($x) use ($map1, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map1)(($__global_Data_Function_const)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictApply;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_3;
$applySecond = (function() use ($apply1, $map, $__global_Data_Function_const, $__global_Control_Apply_identity) {
  $__fn = function($a, $b = null) use ($apply1, $map, $__global_Data_Function_const, $__global_Control_Apply_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($apply1)(($map)(($__global_Data_Function_const)($__global_Control_Apply_identity), $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$foldMap12 = ($foldMap11)((object)["append" => (function() use ($applySecond) {
  $__body = function($v, $v1) use ($applySecond) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($applySecond)($a, $b);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($applySecond, $__body, &$__fn) {
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
    $__res = (function() use ($voidRight, $__global_Data_Unit_unit, $__global_Data_Semigroup_Foldable_getAct, $foldMap12, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_Act) {
  $__fn = function($f, $t = null) use ($voidRight, $__global_Data_Unit_unit, $__global_Data_Semigroup_Foldable_getAct, $foldMap12, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_Act, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($f, &$__fn) { return $__fn($f, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($voidRight)($__global_Data_Unit_unit, ($__global_Data_Semigroup_Foldable_getAct)(($foldMap12)(($__global_Data_Semigroup_Foldable_compose)($__global_Data_Semigroup_Foldable_Act, $f), $t)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($traverse1_1, $__global_Data_Semigroup_Foldable_identity) {
  $__fn = function($dictApply) use ($traverse1_1, $__global_Data_Semigroup_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse1_1)($dictApply, $__global_Data_Semigroup_Foldable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_sequence1_'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_sequence1_';

// Data_Semigroup_Foldable_fold1
function Data_Semigroup_Foldable_fold1($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_fold1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Semigroup_Foldable_identity = ($GLOBALS['Data_Semigroup_Foldable_identity'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_identity'));
$__case_0 = $dictFoldable1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap11 = $__case_res_0;
    $__res = (function() use ($foldMap11, $__global_Data_Semigroup_Foldable_identity) {
  $__fn = function($dictSemigroup) use ($foldMap11, $__global_Data_Semigroup_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap11)($dictSemigroup, $__global_Data_Semigroup_Foldable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_fold1'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_fold1';

