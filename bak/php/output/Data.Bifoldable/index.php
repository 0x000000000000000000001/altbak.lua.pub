<?php

namespace Data\Bifoldable;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifoldable/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor.Clown/index.php';
require_once __DIR__ . '/../Data.Functor.Flip/index.php';
require_once __DIR__ . '/../Data.Functor.Joker/index.php';
require_once __DIR__ . '/../Data.Functor.Product2/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Endo/index.php';
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
      case 'Data_Bifoldable_compose': $v = (function() {
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
      case 'Data_Bifoldable_identity': $v = (function() {
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
      case 'Data_Bifoldable_unwrap': $v = (($GLOBALS['Data_Newtype_unwrap'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Bifoldable_monoidEndo': $v = (function() {
  $__case_0 = $dict;
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compose;
} else {
throw new \Exception("Pattern match failure");
};
  $compose = $__case_res_0;
  $semigroupEndo1 = (object)["append" => (function() use ($compose) {
  $__body = function($v, $v1) use ($compose) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($compose)($a, $b);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($compose, $__body, &$__fn) {
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
  $__case_0 = ($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn'));
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->identity;
} else {
throw new \Exception("Pattern match failure");
};
  return (object)["mempty" => $__case_res_1, "Semigroup0" => (function() use ($semigroupEndo1) {
  $__fn = function($__dollar____unused) use ($semigroupEndo1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupEndo1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      case 'Data_Bifoldable_monoidDual': $v = (function() {
  $__case_0 = $dict;
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
  $append1 = $__case_res_0;
  $semigroupDual1 = (object)["append" => (function() use ($append1) {
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
  $__case_0 = ($GLOBALS['Data_Bifoldable_monoidEndo'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_monoidEndo'));
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
  return (object)["mempty" => $__case_res_1, "Semigroup0" => (function() use ($semigroupDual1) {
  $__fn = function($__dollar____unused) use ($semigroupDual1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupDual1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      case 'Data_Bifoldable_bifoldableTuple': $v = (object)["bifoldMap" => (function() use ($dict) {
  $__fn = function($dictMonoid) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_0;
    $__res = (function() use ($append) {
  $__body = function($f, $g, $v) use ($append) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$g1 = $__case_1;
$a = ($__case_2)->v0;
$b = ($__case_2)->v1;
return ($append)(($f1)($a), ($g1)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $g = null, $v = null) use ($append, $__body, &$__fn) {
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
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bifoldr" => (function() {
  $__body = function($f, $g, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $z;
    $__case_3 = $v;
    switch (($__case_3)->tag) {
case "Tuple":
$f1 = $__case_0;
$g1 = $__case_1;
$z1 = $__case_2;
$a = ($__case_3)->v0;
$b = ($__case_3)->v1;
return ($f1)($a, ($g1)($b, $z1));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $g = null, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $v); };
    if ($__num === 2) return function($z, $v = null) use ($f, $g, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f, $g], 4);
    };
    if ($__num === 1) return function($g, $z = null, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $g, $z, $v);
      if ($__num2 === 2) return function($v) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $v); };
      if ($__num2 === 1) return function($z, $v = null) use ($f, $g, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $g, $z, $v);
        if ($__num3 === 1) return function($v) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $v); };
        return phpurs_curry_fallback($__fn, [$f, $g], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($f, $g, $z, $v);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() {
  $__body = function($f, $g, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $z;
    $__case_3 = $v;
    switch (($__case_3)->tag) {
case "Tuple":
$f1 = $__case_0;
$g1 = $__case_1;
$z1 = $__case_2;
$a = ($__case_3)->v0;
$b = ($__case_3)->v1;
return ($g1)(($f1)($z1, $a), $b);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $g = null, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $v); };
    if ($__num === 2) return function($z, $v = null) use ($f, $g, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f, $g], 4);
    };
    if ($__num === 1) return function($g, $z = null, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $g, $z, $v);
      if ($__num2 === 2) return function($v) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $v); };
      if ($__num2 === 1) return function($z, $v = null) use ($f, $g, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $g, $z, $v);
        if ($__num3 === 1) return function($v) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $v); };
        return phpurs_curry_fallback($__fn, [$f, $g], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($f, $g, $z, $v);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Bifoldable_bifoldableEither': $v = (object)["bifoldr" => (function() {
  $__body = function($v, $v1, $v2, $v3) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    $__case_3 = $v3;
    switch (($__case_3)->tag) {
case "Left":
$f = $__case_0;
$z = $__case_2;
$a = ($__case_3)->v0;
return ($f)($a, $z);
break;
case "Right":
$g = $__case_1;
$z = $__case_2;
$b = ($__case_3)->v0;
return ($g)($b, $z);
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
})(), "bifoldl" => (function() {
  $__body = function($v, $v1, $v2, $v3) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    $__case_3 = $v3;
    switch (($__case_3)->tag) {
case "Left":
$f = $__case_0;
$z = $__case_2;
$a = ($__case_3)->v0;
return ($f)($z, $a);
break;
case "Right":
$g = $__case_1;
$z = $__case_2;
$b = ($__case_3)->v0;
return ($g)($z, $b);
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
})(), "bifoldMap" => (function() {
  $__body = function($dictMonoid, $v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "Left":
$f = $__case_0;
$a = ($__case_2)->v0;
return ($f)($a);
break;
case "Right":
$g = $__case_1;
$b = ($__case_2)->v0;
return ($g)($b);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($dictMonoid, $v = null, $v1 = null, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v2) use ($dictMonoid, $v, $v1, &$__fn) { return $__fn($dictMonoid, $v, $v1, $v2); };
    if ($__num === 2) return function($v1, $v2 = null) use ($dictMonoid, $v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($dictMonoid, $v, $v1, &$__fn) { return $__fn($dictMonoid, $v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$dictMonoid, $v], 4);
    };
    if ($__num === 1) return function($v, $v1 = null, $v2 = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($dictMonoid, $v, $v1, $v2);
      if ($__num2 === 2) return function($v2) use ($dictMonoid, $v, $v1, &$__fn) { return $__fn($dictMonoid, $v, $v1, $v2); };
      if ($__num2 === 1) return function($v1, $v2 = null) use ($dictMonoid, $v, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($dictMonoid, $v, $v1, $v2);
        if ($__num3 === 1) return function($v2) use ($dictMonoid, $v, $v1, &$__fn) { return $__fn($dictMonoid, $v, $v1, $v2); };
        return phpurs_curry_fallback($__fn, [$dictMonoid, $v], 4);
      };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($dictMonoid, $v, $v1, $v2);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Bifoldable_bifoldableConst': $v = (object)["bifoldr" => (function() {
  $__body = function($f, $v, $z, $v1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $z;
    $__case_3 = $v1;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_2;
$a = $__case_3;
return ($f1)($a, $z1);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null, $z = null, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v1) use ($f, $v, $z, &$__fn) { return $__fn($f, $v, $z, $v1); };
    if ($__num === 2) return function($z, $v1 = null) use ($f, $v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $v, $z, $v1);
      if ($__num2 === 1) return function($v1) use ($f, $v, $z, &$__fn) { return $__fn($f, $v, $z, $v1); };
      return phpurs_curry_fallback($__fn, [$f, $v], 4);
    };
    if ($__num === 1) return function($v, $z = null, $v1 = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $v, $z, $v1);
      if ($__num2 === 2) return function($v1) use ($f, $v, $z, &$__fn) { return $__fn($f, $v, $z, $v1); };
      if ($__num2 === 1) return function($z, $v1 = null) use ($f, $v, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $v, $z, $v1);
        if ($__num3 === 1) return function($v1) use ($f, $v, $z, &$__fn) { return $__fn($f, $v, $z, $v1); };
        return phpurs_curry_fallback($__fn, [$f, $v], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($f, $v, $z, $v1);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() {
  $__body = function($f, $v, $z, $v1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $z;
    $__case_3 = $v1;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_2;
$a = $__case_3;
return ($f1)($z1, $a);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null, $z = null, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v1) use ($f, $v, $z, &$__fn) { return $__fn($f, $v, $z, $v1); };
    if ($__num === 2) return function($z, $v1 = null) use ($f, $v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $v, $z, $v1);
      if ($__num2 === 1) return function($v1) use ($f, $v, $z, &$__fn) { return $__fn($f, $v, $z, $v1); };
      return phpurs_curry_fallback($__fn, [$f, $v], 4);
    };
    if ($__num === 1) return function($v, $z = null, $v1 = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $v, $z, $v1);
      if ($__num2 === 2) return function($v1) use ($f, $v, $z, &$__fn) { return $__fn($f, $v, $z, $v1); };
      if ($__num2 === 1) return function($z, $v1 = null) use ($f, $v, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $v, $z, $v1);
        if ($__num3 === 1) return function($v1) use ($f, $v, $z, &$__fn) { return $__fn($f, $v, $z, $v1); };
        return phpurs_curry_fallback($__fn, [$f, $v], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($f, $v, $z, $v1);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() {
  $__body = function($dictMonoid, $f, $v, $v1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$a = $__case_2;
return ($f1)($a);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictMonoid, $f = null, $v = null, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v1) use ($dictMonoid, $f, $v, &$__fn) { return $__fn($dictMonoid, $f, $v, $v1); };
    if ($__num === 2) return function($v, $v1 = null) use ($dictMonoid, $f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($dictMonoid, $f, $v, &$__fn) { return $__fn($dictMonoid, $f, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$dictMonoid, $f], 4);
    };
    if ($__num === 1) return function($f, $v = null, $v1 = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($dictMonoid, $f, $v, $v1);
      if ($__num2 === 2) return function($v1) use ($dictMonoid, $f, $v, &$__fn) { return $__fn($dictMonoid, $f, $v, $v1); };
      if ($__num2 === 1) return function($v, $v1 = null) use ($dictMonoid, $f, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($dictMonoid, $f, $v, $v1);
        if ($__num3 === 1) return function($v1) use ($dictMonoid, $f, $v, &$__fn) { return $__fn($dictMonoid, $f, $v, $v1); };
        return phpurs_curry_fallback($__fn, [$dictMonoid, $f], 4);
      };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($dictMonoid, $f, $v, $v1);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
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







// Data_Bifoldable_Bifoldable$Dict
function Data_Bifoldable_Bifoldable__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_Bifoldable__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_Bifoldable__dollar__Dict'] = __NAMESPACE__ . '\\Data_Bifoldable_Bifoldable__dollar__Dict';

// Data_Bifoldable_bifoldr
function Data_Bifoldable_bifoldr($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldr';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bifoldr;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_bifoldr'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldr';

// Data_Bifoldable_bitraverse_
function Data_Bifoldable_bitraverse_($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bitraverse_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Apply_identity = ($GLOBALS['Control_Apply_identity'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_identity'));
$__global_Data_Bifoldable_compose = ($GLOBALS['Data_Bifoldable_compose'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_compose'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__case_0 = $dictBifoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bifoldr;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldr1 = $__case_res_0;
    $__res = (function() use ($dict, $__global_Data_Function_const, $__global_Control_Apply_identity, $bifoldr1, $__global_Data_Bifoldable_compose, $__global_Data_Unit_unit) {
  $__fn = function($dictApplicative) use ($dict, $__global_Data_Function_const, $__global_Control_Apply_identity, $bifoldr1, $__global_Data_Bifoldable_compose, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
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
$__case_0 = $dictApplicative;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_3;
    $__res = (function() use ($bifoldr1, $__global_Data_Bifoldable_compose, $applySecond, $pure, $__global_Data_Unit_unit) {
  $__fn = function($f, $g = null) use ($bifoldr1, $__global_Data_Bifoldable_compose, $applySecond, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($g) use ($f, &$__fn) { return $__fn($f, $g); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bifoldr1)(($__global_Data_Bifoldable_compose)($applySecond, $f), ($__global_Data_Bifoldable_compose)($applySecond, $g), ($pure)($__global_Data_Unit_unit));
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
$GLOBALS['Data_Bifoldable_bitraverse_'] = __NAMESPACE__ . '\\Data_Bifoldable_bitraverse_';

// Data_Bifoldable_bifor_
function Data_Bifoldable_bifor_($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifor_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Apply_identity = ($GLOBALS['Control_Apply_identity'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_identity'));
$__global_Data_Bifoldable_compose = ($GLOBALS['Data_Bifoldable_compose'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_compose'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__case_0 = $dictBifoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bifoldr;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldr1 = $__case_res_0;
$bitraverse_1 = (function() use ($dict, $__global_Data_Function_const, $__global_Control_Apply_identity, $bifoldr1, $__global_Data_Bifoldable_compose, $__global_Data_Unit_unit) {
  $__fn = function($dictApplicative) use ($dict, $__global_Data_Function_const, $__global_Control_Apply_identity, $bifoldr1, $__global_Data_Bifoldable_compose, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
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
$__case_0 = $dictApplicative;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_3;
    $__res = (function() use ($bifoldr1, $__global_Data_Bifoldable_compose, $applySecond, $pure, $__global_Data_Unit_unit) {
  $__fn = function($f, $g = null) use ($bifoldr1, $__global_Data_Bifoldable_compose, $applySecond, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($g) use ($f, &$__fn) { return $__fn($f, $g); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bifoldr1)(($__global_Data_Bifoldable_compose)($applySecond, $f), ($__global_Data_Bifoldable_compose)($applySecond, $g), ($pure)($__global_Data_Unit_unit));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($bitraverse_1) {
  $__fn = function($dictApplicative) use ($bitraverse_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bitraverse_2 = ($bitraverse_1)($dictApplicative);
    $__res = (function() use ($bitraverse_2) {
  $__fn = function($t, $f = null, $g = null) use ($bitraverse_2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($g) use ($t, $f, &$__fn) { return $__fn($t, $f, $g); };
    if ($__num === 1) return function($f, $g = null) use ($t, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($t, $f, $g);
      if ($__num2 === 1) return function($g) use ($t, $f, &$__fn) { return $__fn($t, $f, $g); };
      return phpurs_curry_fallback($__fn, [$t], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($bitraverse_2)($f, $g, $t);
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
$GLOBALS['Data_Bifoldable_bifor_'] = __NAMESPACE__ . '\\Data_Bifoldable_bifor_';

// Data_Bifoldable_bisequence_
function Data_Bifoldable_bisequence_($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bisequence_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Apply_identity = ($GLOBALS['Control_Apply_identity'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_identity'));
$__global_Data_Bifoldable_compose = ($GLOBALS['Data_Bifoldable_compose'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_compose'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Data_Bifoldable_identity = ($GLOBALS['Data_Bifoldable_identity'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_identity'));
$__case_0 = $dictBifoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bifoldr;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldr1 = $__case_res_0;
$bitraverse_1 = (function() use ($dict, $__global_Data_Function_const, $__global_Control_Apply_identity, $bifoldr1, $__global_Data_Bifoldable_compose, $__global_Data_Unit_unit) {
  $__fn = function($dictApplicative) use ($dict, $__global_Data_Function_const, $__global_Control_Apply_identity, $bifoldr1, $__global_Data_Bifoldable_compose, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
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
$__case_0 = $dictApplicative;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_3;
    $__res = (function() use ($bifoldr1, $__global_Data_Bifoldable_compose, $applySecond, $pure, $__global_Data_Unit_unit) {
  $__fn = function($f, $g = null) use ($bifoldr1, $__global_Data_Bifoldable_compose, $applySecond, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($g) use ($f, &$__fn) { return $__fn($f, $g); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bifoldr1)(($__global_Data_Bifoldable_compose)($applySecond, $f), ($__global_Data_Bifoldable_compose)($applySecond, $g), ($pure)($__global_Data_Unit_unit));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($bitraverse_1, $__global_Data_Bifoldable_identity) {
  $__fn = function($dictApplicative) use ($bitraverse_1, $__global_Data_Bifoldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bitraverse_1)($dictApplicative, $__global_Data_Bifoldable_identity, $__global_Data_Bifoldable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_bisequence_'] = __NAMESPACE__ . '\\Data_Bifoldable_bisequence_';

// Data_Bifoldable_bifoldl
function Data_Bifoldable_bifoldl($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldl';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bifoldl;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_bifoldl'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldl';


// Data_Bifoldable_bifoldableJoker
function Data_Bifoldable_bifoldableJoker($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldableJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr = $__case_res_0;
$__case_0 = $dictFoldable;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl = $__case_res_1;
$__case_0 = $dictFoldable;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap = $__case_res_2;
    $__res = (object)["bifoldr" => (function() use ($foldr) {
  $__body = function($v, $r, $u, $v1) use ($foldr) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $u;
    $__case_3 = $v1;
    if (true) {
$r1 = $__case_1;
$u1 = $__case_2;
$f = $__case_3;
return ($foldr)($r1, $u1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $r = null, $u = null, $v1 = null) use ($foldr, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
    if ($__num === 2) return function($u, $v1 = null) use ($v, $r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $r, $u, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
      return phpurs_curry_fallback($__fn, [$v, $r], 4);
    };
    if ($__num === 1) return function($r, $u = null, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($v, $r, $u, $v1);
      if ($__num2 === 2) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
      if ($__num2 === 1) return function($u, $v1 = null) use ($v, $r, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($v, $r, $u, $v1);
        if ($__num3 === 1) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
        return phpurs_curry_fallback($__fn, [$v, $r], 4);
      };
      return phpurs_curry_fallback($__fn, [$v], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($v, $r, $u, $v1);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use ($foldl) {
  $__body = function($v, $r, $u, $v1) use ($foldl) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $u;
    $__case_3 = $v1;
    if (true) {
$r1 = $__case_1;
$u1 = $__case_2;
$f = $__case_3;
return ($foldl)($r1, $u1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $r = null, $u = null, $v1 = null) use ($foldl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
    if ($__num === 2) return function($u, $v1 = null) use ($v, $r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $r, $u, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
      return phpurs_curry_fallback($__fn, [$v, $r], 4);
    };
    if ($__num === 1) return function($r, $u = null, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($v, $r, $u, $v1);
      if ($__num2 === 2) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
      if ($__num2 === 1) return function($u, $v1 = null) use ($v, $r, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($v, $r, $u, $v1);
        if ($__num3 === 1) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
        return phpurs_curry_fallback($__fn, [$v, $r], 4);
      };
      return phpurs_curry_fallback($__fn, [$v], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($v, $r, $u, $v1);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() use ($foldMap) {
  $__fn = function($dictMonoid) use ($foldMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap1 = ($foldMap)($dictMonoid);
    $__res = (function() use ($foldMap1) {
  $__body = function($v, $r, $v1) use ($foldMap1) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $v1;
    if (true) {
$r1 = $__case_1;
$f = $__case_2;
return ($foldMap1)($r1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $r = null, $v1 = null) use ($foldMap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($v, $r, &$__fn) { return $__fn($v, $r, $v1); };
    if ($__num === 1) return function($r, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $r, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $r, &$__fn) { return $__fn($v, $r, $v1); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($v, $r, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_bifoldableJoker'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldableJoker';



// Data_Bifoldable_bifoldableClown
function Data_Bifoldable_bifoldableClown($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldableClown';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr = $__case_res_0;
$__case_0 = $dictFoldable;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl = $__case_res_1;
$__case_0 = $dictFoldable;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap = $__case_res_2;
    $__res = (object)["bifoldr" => (function() use ($foldr) {
  $__body = function($l, $v, $u, $v1) use ($foldr) {
    $__case_0 = $l;
    $__case_1 = $v;
    $__case_2 = $u;
    $__case_3 = $v1;
    if (true) {
$l1 = $__case_0;
$u1 = $__case_2;
$f = $__case_3;
return ($foldr)($l1, $u1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($l, $v = null, $u = null, $v1 = null) use ($foldr, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
    if ($__num === 2) return function($u, $v1 = null) use ($l, $v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $v, $u, $v1);
      if ($__num2 === 1) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
      return phpurs_curry_fallback($__fn, [$l, $v], 4);
    };
    if ($__num === 1) return function($v, $u = null, $v1 = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($l, $v, $u, $v1);
      if ($__num2 === 2) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
      if ($__num2 === 1) return function($u, $v1 = null) use ($l, $v, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($l, $v, $u, $v1);
        if ($__num3 === 1) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
        return phpurs_curry_fallback($__fn, [$l, $v], 4);
      };
      return phpurs_curry_fallback($__fn, [$l], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($l, $v, $u, $v1);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use ($foldl) {
  $__body = function($l, $v, $u, $v1) use ($foldl) {
    $__case_0 = $l;
    $__case_1 = $v;
    $__case_2 = $u;
    $__case_3 = $v1;
    if (true) {
$l1 = $__case_0;
$u1 = $__case_2;
$f = $__case_3;
return ($foldl)($l1, $u1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($l, $v = null, $u = null, $v1 = null) use ($foldl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
    if ($__num === 2) return function($u, $v1 = null) use ($l, $v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $v, $u, $v1);
      if ($__num2 === 1) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
      return phpurs_curry_fallback($__fn, [$l, $v], 4);
    };
    if ($__num === 1) return function($v, $u = null, $v1 = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($l, $v, $u, $v1);
      if ($__num2 === 2) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
      if ($__num2 === 1) return function($u, $v1 = null) use ($l, $v, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($l, $v, $u, $v1);
        if ($__num3 === 1) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
        return phpurs_curry_fallback($__fn, [$l, $v], 4);
      };
      return phpurs_curry_fallback($__fn, [$l], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($l, $v, $u, $v1);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() use ($foldMap) {
  $__fn = function($dictMonoid) use ($foldMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap1 = ($foldMap)($dictMonoid);
    $__res = (function() use ($foldMap1) {
  $__body = function($l, $v, $v1) use ($foldMap1) {
    $__case_0 = $l;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$l1 = $__case_0;
$f = $__case_2;
return ($foldMap1)($l1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($l, $v = null, $v1 = null) use ($foldMap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($l, $v, &$__fn) { return $__fn($l, $v, $v1); };
    if ($__num === 1) return function($v, $v1 = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($l, $v, &$__fn) { return $__fn($l, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$l], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($l, $v, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_bifoldableClown'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldableClown';

// Data_Bifoldable_bifoldMapDefaultR
function Data_Bifoldable_bifoldMapDefaultR($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldMapDefaultR';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Bifoldable_compose = ($GLOBALS['Data_Bifoldable_compose'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_compose'));
$__case_0 = $dictBifoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bifoldr;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldr1 = $__case_res_0;
    $__res = (function() use ($dict, $bifoldr1, $__global_Data_Bifoldable_compose) {
  $__fn = function($dictMonoid) use ($dict, $bifoldr1, $__global_Data_Bifoldable_compose, &$__fn) {
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
    $__res = (function() use ($bifoldr1, $__global_Data_Bifoldable_compose, $append, $mempty) {
  $__fn = function($f, $g = null) use ($bifoldr1, $__global_Data_Bifoldable_compose, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($g) use ($f, &$__fn) { return $__fn($f, $g); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bifoldr1)(($__global_Data_Bifoldable_compose)($append, $f), ($__global_Data_Bifoldable_compose)($append, $g), $mempty);
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
$GLOBALS['Data_Bifoldable_bifoldMapDefaultR'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldMapDefaultR';

// Data_Bifoldable_bifoldMapDefaultL
function Data_Bifoldable_bifoldMapDefaultL($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldMapDefaultL';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictBifoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bifoldl;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldl1 = $__case_res_0;
    $__res = (function() use ($dict, $bifoldl1) {
  $__fn = function($dictMonoid) use ($dict, $bifoldl1, &$__fn) {
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
    $__res = (function() use ($bifoldl1, $append, $mempty) {
  $__fn = function($f, $g = null) use ($bifoldl1, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($g) use ($f, &$__fn) { return $__fn($f, $g); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bifoldl1)((function() use ($append, $f) {
  $__fn = function($m, $a = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($m, &$__fn) { return $__fn($m, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($append)($m, ($f)($a));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), (function() use ($append, $g) {
  $__fn = function($m, $b = null) use ($append, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($m, &$__fn) { return $__fn($m, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($append)($m, ($g)($b));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $mempty);
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
$GLOBALS['Data_Bifoldable_bifoldMapDefaultL'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldMapDefaultL';

// Data_Bifoldable_bifoldMap
function Data_Bifoldable_bifoldMap($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bifoldMap;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_bifoldMap'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldMap';

// Data_Bifoldable_bifoldableFlip
function Data_Bifoldable_bifoldableFlip($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldableFlip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictBifoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bifoldr;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldr1 = $__case_res_0;
$__case_0 = $dictBifoldable;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bifoldl;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldl1 = $__case_res_1;
$__case_0 = $dictBifoldable;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bifoldMap;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldMap1 = $__case_res_2;
    $__res = (object)["bifoldr" => (function() use ($bifoldr1) {
  $__body = function($r, $l, $u, $v) use ($bifoldr1) {
    $__case_0 = $r;
    $__case_1 = $l;
    $__case_2 = $u;
    $__case_3 = $v;
    if (true) {
$r1 = $__case_0;
$l1 = $__case_1;
$u1 = $__case_2;
$p = $__case_3;
return ($bifoldr1)($l1, $r1, $u1, $p);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($r, $l = null, $u = null, $v = null) use ($bifoldr1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
    if ($__num === 2) return function($u, $v = null) use ($r, $l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($r, $l, $u, $v);
      if ($__num2 === 1) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
      return phpurs_curry_fallback($__fn, [$r, $l], 4);
    };
    if ($__num === 1) return function($l, $u = null, $v = null) use ($r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($r, $l, $u, $v);
      if ($__num2 === 2) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
      if ($__num2 === 1) return function($u, $v = null) use ($r, $l, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($r, $l, $u, $v);
        if ($__num3 === 1) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
        return phpurs_curry_fallback($__fn, [$r, $l], 4);
      };
      return phpurs_curry_fallback($__fn, [$r], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($r, $l, $u, $v);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use ($bifoldl1) {
  $__body = function($r, $l, $u, $v) use ($bifoldl1) {
    $__case_0 = $r;
    $__case_1 = $l;
    $__case_2 = $u;
    $__case_3 = $v;
    if (true) {
$r1 = $__case_0;
$l1 = $__case_1;
$u1 = $__case_2;
$p = $__case_3;
return ($bifoldl1)($l1, $r1, $u1, $p);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($r, $l = null, $u = null, $v = null) use ($bifoldl1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
    if ($__num === 2) return function($u, $v = null) use ($r, $l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($r, $l, $u, $v);
      if ($__num2 === 1) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
      return phpurs_curry_fallback($__fn, [$r, $l], 4);
    };
    if ($__num === 1) return function($l, $u = null, $v = null) use ($r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($r, $l, $u, $v);
      if ($__num2 === 2) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
      if ($__num2 === 1) return function($u, $v = null) use ($r, $l, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($r, $l, $u, $v);
        if ($__num3 === 1) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
        return phpurs_curry_fallback($__fn, [$r, $l], 4);
      };
      return phpurs_curry_fallback($__fn, [$r], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($r, $l, $u, $v);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() use ($bifoldMap1) {
  $__fn = function($dictMonoid) use ($bifoldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bifoldMap2 = ($bifoldMap1)($dictMonoid);
    $__res = (function() use ($bifoldMap2) {
  $__body = function($r, $l, $v) use ($bifoldMap2) {
    $__case_0 = $r;
    $__case_1 = $l;
    $__case_2 = $v;
    if (true) {
$r1 = $__case_0;
$l1 = $__case_1;
$p = $__case_2;
return ($bifoldMap2)($l1, $r1, $p);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($r, $l = null, $v = null) use ($bifoldMap2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($r, $l, &$__fn) { return $__fn($r, $l, $v); };
    if ($__num === 1) return function($l, $v = null) use ($r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($r, $l, $v);
      if ($__num2 === 1) return function($v) use ($r, $l, &$__fn) { return $__fn($r, $l, $v); };
      return phpurs_curry_fallback($__fn, [$r], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($r, $l, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_bifoldableFlip'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldableFlip';

// Data_Bifoldable_bifoldlDefault
function Data_Bifoldable_bifoldlDefault($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldlDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Bifoldable_monoidDual = ($GLOBALS['Data_Bifoldable_monoidDual'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_monoidDual'));
$__global_Data_Bifoldable_unwrap = ($GLOBALS['Data_Bifoldable_unwrap'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_unwrap'));
$__global_Data_Bifoldable_compose = ($GLOBALS['Data_Bifoldable_compose'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_compose'));
$__global_Data_Monoid_Dual_Dual = ($GLOBALS['Data_Monoid_Dual_Dual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_Dual'));
$__global_Data_Monoid_Endo_Endo = ($GLOBALS['Data_Monoid_Endo_Endo'] ?? \Data\Monoid\Endo\phpurs_eval_thunk('Data_Monoid_Endo_Endo'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__case_0 = $dictBifoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bifoldMap;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldMap1 = ($__case_res_0)($__global_Data_Bifoldable_monoidDual);
    $__res = (function() use ($__global_Data_Bifoldable_unwrap, $bifoldMap1, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Dual_Dual, $__global_Data_Monoid_Endo_Endo, $__global_Data_Function_flip) {
  $__fn = function($f, $g = null, $z = null, $p = null) use ($__global_Data_Bifoldable_unwrap, $bifoldMap1, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Dual_Dual, $__global_Data_Monoid_Endo_Endo, $__global_Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
    if ($__num === 2) return function($z, $p = null) use ($f, $g, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $z, $p);
      if ($__num2 === 1) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
      return phpurs_curry_fallback($__fn, [$f, $g], 4);
    };
    if ($__num === 1) return function($g, $z = null, $p = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $g, $z, $p);
      if ($__num2 === 2) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
      if ($__num2 === 1) return function($z, $p = null) use ($f, $g, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $g, $z, $p);
        if ($__num3 === 1) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
        return phpurs_curry_fallback($__fn, [$f, $g], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = ($__global_Data_Bifoldable_unwrap)(($__global_Data_Bifoldable_unwrap)(($bifoldMap1)(($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Dual_Dual, ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Endo_Endo, ($__global_Data_Function_flip)($f))), ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Dual_Dual, ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Endo_Endo, ($__global_Data_Function_flip)($g))), $p)), $z);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_bifoldlDefault'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldlDefault';

// Data_Bifoldable_bifoldrDefault
function Data_Bifoldable_bifoldrDefault($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldrDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Bifoldable_monoidEndo = ($GLOBALS['Data_Bifoldable_monoidEndo'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_monoidEndo'));
$__global_Data_Bifoldable_unwrap = ($GLOBALS['Data_Bifoldable_unwrap'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_unwrap'));
$__global_Data_Bifoldable_compose = ($GLOBALS['Data_Bifoldable_compose'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_compose'));
$__global_Data_Monoid_Endo_Endo = ($GLOBALS['Data_Monoid_Endo_Endo'] ?? \Data\Monoid\Endo\phpurs_eval_thunk('Data_Monoid_Endo_Endo'));
$__case_0 = $dictBifoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bifoldMap;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldMap1 = ($__case_res_0)($__global_Data_Bifoldable_monoidEndo);
    $__res = (function() use ($__global_Data_Bifoldable_unwrap, $bifoldMap1, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Endo_Endo) {
  $__fn = function($f, $g = null, $z = null, $p = null) use ($__global_Data_Bifoldable_unwrap, $bifoldMap1, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Endo_Endo, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
    if ($__num === 2) return function($z, $p = null) use ($f, $g, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $z, $p);
      if ($__num2 === 1) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
      return phpurs_curry_fallback($__fn, [$f, $g], 4);
    };
    if ($__num === 1) return function($g, $z = null, $p = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $g, $z, $p);
      if ($__num2 === 2) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
      if ($__num2 === 1) return function($z, $p = null) use ($f, $g, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $g, $z, $p);
        if ($__num3 === 1) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
        return phpurs_curry_fallback($__fn, [$f, $g], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = ($__global_Data_Bifoldable_unwrap)(($bifoldMap1)(($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Endo_Endo, $f), ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Endo_Endo, $g), $p), $z);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_bifoldrDefault'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldrDefault';

// Data_Bifoldable_bifoldableProduct2
function Data_Bifoldable_bifoldableProduct2($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldableProduct2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Bifoldable_monoidEndo = ($GLOBALS['Data_Bifoldable_monoidEndo'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_monoidEndo'));
$__global_Data_Bifoldable_unwrap = ($GLOBALS['Data_Bifoldable_unwrap'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_unwrap'));
$__global_Data_Bifoldable_compose = ($GLOBALS['Data_Bifoldable_compose'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_compose'));
$__global_Data_Monoid_Endo_Endo = ($GLOBALS['Data_Monoid_Endo_Endo'] ?? \Data\Monoid\Endo\phpurs_eval_thunk('Data_Monoid_Endo_Endo'));
$__global_Data_Bifoldable_monoidDual = ($GLOBALS['Data_Bifoldable_monoidDual'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_monoidDual'));
$__global_Data_Monoid_Dual_Dual = ($GLOBALS['Data_Monoid_Dual_Dual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_Dual'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
while (true) {
$__case_0 = $dictBifoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bifoldMap;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldMap1 = $__case_res_0;
return (function() use ($dict, $__global_Data_Bifoldable_monoidEndo, $__global_Data_Bifoldable_unwrap, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Endo_Endo, $__global_Data_Bifoldable_monoidDual, $__global_Data_Monoid_Dual_Dual, $__global_Data_Function_flip, $bifoldMap1) {
  $__fn = function($dictBifoldable1) use ($dict, $__global_Data_Bifoldable_monoidEndo, $__global_Data_Bifoldable_unwrap, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Endo_Endo, $__global_Data_Bifoldable_monoidDual, $__global_Data_Monoid_Dual_Dual, $__global_Data_Function_flip, $bifoldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictBifoldable1;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bifoldMap;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldMap2 = $__case_res_1;
    $__res = (object)["bifoldr" => (function() use ($dict, $__global_Data_Bifoldable_monoidEndo, $__global_Data_Bifoldable_unwrap, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Endo_Endo) {
  $__fn = function($l, $r = null, $u = null, $m = null) use ($dict, $__global_Data_Bifoldable_monoidEndo, $__global_Data_Bifoldable_unwrap, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Endo_Endo, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
    if ($__num === 2) return function($u, $m = null) use ($l, $r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $r, $u, $m);
      if ($__num2 === 1) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
      return phpurs_curry_fallback($__fn, [$l, $r], 4);
    };
    if ($__num === 1) return function($r, $u = null, $m = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($l, $r, $u, $m);
      if ($__num2 === 2) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
      if ($__num2 === 1) return function($u, $m = null) use ($l, $r, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($l, $r, $u, $m);
        if ($__num3 === 1) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
        return phpurs_curry_fallback($__fn, [$l, $r], 4);
      };
      return phpurs_curry_fallback($__fn, [$l], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bifoldMap;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldMap1 = ($__case_res_2)($__global_Data_Bifoldable_monoidEndo);
    $__res = ((function() use ($__global_Data_Bifoldable_unwrap, $bifoldMap1, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Endo_Endo) {
  $__fn = function($f, $g = null, $z = null, $p = null) use ($__global_Data_Bifoldable_unwrap, $bifoldMap1, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Endo_Endo, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
    if ($__num === 2) return function($z, $p = null) use ($f, $g, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $z, $p);
      if ($__num2 === 1) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
      return phpurs_curry_fallback($__fn, [$f, $g], 4);
    };
    if ($__num === 1) return function($g, $z = null, $p = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $g, $z, $p);
      if ($__num2 === 2) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
      if ($__num2 === 1) return function($z, $p = null) use ($f, $g, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $g, $z, $p);
        if ($__num3 === 1) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
        return phpurs_curry_fallback($__fn, [$f, $g], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = ($__global_Data_Bifoldable_unwrap)(($bifoldMap1)(($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Endo_Endo, $f), ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Endo_Endo, $g), $p), $z);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})())($l, $r, $u, $m);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use ($dict, $__global_Data_Bifoldable_monoidDual, $__global_Data_Bifoldable_unwrap, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Dual_Dual, $__global_Data_Monoid_Endo_Endo, $__global_Data_Function_flip) {
  $__fn = function($l, $r = null, $u = null, $m = null) use ($dict, $__global_Data_Bifoldable_monoidDual, $__global_Data_Bifoldable_unwrap, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Dual_Dual, $__global_Data_Monoid_Endo_Endo, $__global_Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
    if ($__num === 2) return function($u, $m = null) use ($l, $r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $r, $u, $m);
      if ($__num2 === 1) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
      return phpurs_curry_fallback($__fn, [$l, $r], 4);
    };
    if ($__num === 1) return function($r, $u = null, $m = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($l, $r, $u, $m);
      if ($__num2 === 2) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
      if ($__num2 === 1) return function($u, $m = null) use ($l, $r, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($l, $r, $u, $m);
        if ($__num3 === 1) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
        return phpurs_curry_fallback($__fn, [$l, $r], 4);
      };
      return phpurs_curry_fallback($__fn, [$l], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->bifoldMap;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldMap1 = ($__case_res_3)($__global_Data_Bifoldable_monoidDual);
    $__res = ((function() use ($__global_Data_Bifoldable_unwrap, $bifoldMap1, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Dual_Dual, $__global_Data_Monoid_Endo_Endo, $__global_Data_Function_flip) {
  $__fn = function($f, $g = null, $z = null, $p = null) use ($__global_Data_Bifoldable_unwrap, $bifoldMap1, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Dual_Dual, $__global_Data_Monoid_Endo_Endo, $__global_Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
    if ($__num === 2) return function($z, $p = null) use ($f, $g, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $z, $p);
      if ($__num2 === 1) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
      return phpurs_curry_fallback($__fn, [$f, $g], 4);
    };
    if ($__num === 1) return function($g, $z = null, $p = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $g, $z, $p);
      if ($__num2 === 2) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
      if ($__num2 === 1) return function($z, $p = null) use ($f, $g, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $g, $z, $p);
        if ($__num3 === 1) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
        return phpurs_curry_fallback($__fn, [$f, $g], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = ($__global_Data_Bifoldable_unwrap)(($__global_Data_Bifoldable_unwrap)(($bifoldMap1)(($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Dual_Dual, ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Endo_Endo, ($__global_Data_Function_flip)($f))), ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Dual_Dual, ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Endo_Endo, ($__global_Data_Function_flip)($g))), $p)), $z);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})())($l, $r, $u, $m);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() use ($dict, $bifoldMap1, $bifoldMap2) {
  $__fn = function($dictMonoid) use ($dict, $bifoldMap1, $bifoldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_4;
$bifoldMap3 = ($bifoldMap1)($dictMonoid);
$bifoldMap4 = ($bifoldMap2)($dictMonoid);
    $__res = (function() use ($append, $bifoldMap3, $bifoldMap4) {
  $__body = function($l, $r, $v) use ($append, $bifoldMap3, $bifoldMap4) {
    $__case_0 = $l;
    $__case_1 = $r;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Product2":
$l1 = $__case_0;
$r1 = $__case_1;
$f = ($__case_2)->v0;
$g = ($__case_2)->v1;
return ($append)(($bifoldMap3)($l1, $r1, $f), ($bifoldMap4)($l1, $r1, $g));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($l, $r = null, $v = null) use ($append, $bifoldMap3, $bifoldMap4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($l, $r, &$__fn) { return $__fn($l, $r, $v); };
    if ($__num === 1) return function($r, $v = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $r, $v);
      if ($__num2 === 1) return function($v) use ($l, $r, &$__fn) { return $__fn($l, $r, $v); };
      return phpurs_curry_fallback($__fn, [$l], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($l, $r, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_bifoldableProduct2'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldableProduct2';

// Data_Bifoldable_bifold
function Data_Bifoldable_bifold($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifold';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Bifoldable_identity = ($GLOBALS['Data_Bifoldable_identity'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_identity'));
$__case_0 = $dictBifoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bifoldMap;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldMap1 = $__case_res_0;
    $__res = (function() use ($bifoldMap1, $__global_Data_Bifoldable_identity) {
  $__fn = function($dictMonoid) use ($bifoldMap1, $__global_Data_Bifoldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bifoldMap1)($dictMonoid, $__global_Data_Bifoldable_identity, $__global_Data_Bifoldable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_bifold'] = __NAMESPACE__ . '\\Data_Bifoldable_bifold';

// Data_Bifoldable_biany
function Data_Bifoldable_biany($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_biany';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Bifoldable_compose = ($GLOBALS['Data_Bifoldable_compose'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_compose'));
$__global_Data_Bifoldable_unwrap = ($GLOBALS['Data_Bifoldable_unwrap'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_unwrap'));
$__global_Data_Monoid_Disj_Disj = ($GLOBALS['Data_Monoid_Disj_Disj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_Disj'));
$__case_0 = $dictBifoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bifoldMap;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldMap1 = $__case_res_0;
    $__res = (function() use ($bifoldMap1, $dict, $__global_Data_Bifoldable_compose, $__global_Data_Bifoldable_unwrap, $__global_Data_Monoid_Disj_Disj) {
  $__fn = function($dictBooleanAlgebra) use ($bifoldMap1, $dict, $__global_Data_Bifoldable_compose, $__global_Data_Bifoldable_unwrap, $__global_Data_Monoid_Disj_Disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->disj;
} else {
throw new \Exception("Pattern match failure");
};
$disj = $__case_res_1;
$semigroupDisj1 = (object)["append" => (function() use ($disj) {
  $__body = function($v, $v1) use ($disj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($disj)($a, $b);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($disj, $__body, &$__fn) {
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
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->ff;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldMap2 = ($bifoldMap1)((object)["mempty" => $__case_res_2, "Semigroup0" => (function() use ($semigroupDisj1) {
  $__fn = function($__dollar____unused) use ($semigroupDisj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupDisj1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    $__res = (function() use ($__global_Data_Bifoldable_compose, $__global_Data_Bifoldable_unwrap, $bifoldMap2, $__global_Data_Monoid_Disj_Disj) {
  $__fn = function($p, $q = null) use ($__global_Data_Bifoldable_compose, $__global_Data_Bifoldable_unwrap, $bifoldMap2, $__global_Data_Monoid_Disj_Disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($q) use ($p, &$__fn) { return $__fn($p, $q); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Bifoldable_compose)($__global_Data_Bifoldable_unwrap, ($bifoldMap2)(($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Disj_Disj, $p), ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Disj_Disj, $q)));
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
$GLOBALS['Data_Bifoldable_biany'] = __NAMESPACE__ . '\\Data_Bifoldable_biany';

// Data_Bifoldable_biall
function Data_Bifoldable_biall($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_biall';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Bifoldable_compose = ($GLOBALS['Data_Bifoldable_compose'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_compose'));
$__global_Data_Bifoldable_unwrap = ($GLOBALS['Data_Bifoldable_unwrap'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_unwrap'));
$__global_Data_Monoid_Conj_Conj = ($GLOBALS['Data_Monoid_Conj_Conj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_Conj'));
$__case_0 = $dictBifoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bifoldMap;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldMap1 = $__case_res_0;
    $__res = (function() use ($bifoldMap1, $dict, $__global_Data_Bifoldable_compose, $__global_Data_Bifoldable_unwrap, $__global_Data_Monoid_Conj_Conj) {
  $__fn = function($dictBooleanAlgebra) use ($bifoldMap1, $dict, $__global_Data_Bifoldable_compose, $__global_Data_Bifoldable_unwrap, $__global_Data_Monoid_Conj_Conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->conj;
} else {
throw new \Exception("Pattern match failure");
};
$conj = $__case_res_1;
$semigroupConj1 = (object)["append" => (function() use ($conj) {
  $__body = function($v, $v1) use ($conj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($conj)($a, $b);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($conj, $__body, &$__fn) {
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
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->tt;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldMap2 = ($bifoldMap1)((object)["mempty" => $__case_res_2, "Semigroup0" => (function() use ($semigroupConj1) {
  $__fn = function($__dollar____unused) use ($semigroupConj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupConj1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    $__res = (function() use ($__global_Data_Bifoldable_compose, $__global_Data_Bifoldable_unwrap, $bifoldMap2, $__global_Data_Monoid_Conj_Conj) {
  $__fn = function($p, $q = null) use ($__global_Data_Bifoldable_compose, $__global_Data_Bifoldable_unwrap, $bifoldMap2, $__global_Data_Monoid_Conj_Conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($q) use ($p, &$__fn) { return $__fn($p, $q); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Bifoldable_compose)($__global_Data_Bifoldable_unwrap, ($bifoldMap2)(($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Conj_Conj, $p), ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Conj_Conj, $q)));
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
$GLOBALS['Data_Bifoldable_biall'] = __NAMESPACE__ . '\\Data_Bifoldable_biall';

