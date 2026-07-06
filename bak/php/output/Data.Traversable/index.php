<?php

namespace Data\Traversable;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Maybe.First/index.php';
require_once __DIR__ . '/../Data.Maybe.Last/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Traversable.Accum/index.php';
require_once __DIR__ . '/../Data.Traversable.Accum.Internal/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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
      case 'Data_Traversable_identity': $v = (function() {
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
      case 'Data_Traversable_compose': $v = (function() {
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
      case 'Data_Traversable_traversableTuple': $v = (object)["traverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_0;
    $__res = (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$x = ($__case_1)->v0;
$y = ($__case_1)->v1;
return ($map)(((function() {
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
})())($x), ($f1)($y));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($map, $__body, &$__fn) {
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
})(), "sequence" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
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
$map = $__case_res_1;
    $__res = (function() use ($map) {
  $__body = function($v) use ($map) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$x = ($__case_0)->v0;
$y = ($__case_0)->v1;
return ($map)(((function() {
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
})())($x), $y);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($map, $__body, &$__fn) {
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
$__global_Data_Tuple_functorTuple = ($GLOBALS['Data_Tuple_functorTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_functorTuple'));
    $__res = $__global_Data_Tuple_functorTuple;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
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
      case 'Data_Traversable_traversableMultiplicative': $v = (object)["traverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Monoid_Multiplicative_Multiplicative = ($GLOBALS['Data_Monoid_Multiplicative_Multiplicative'] ?? \Data\Monoid\Multiplicative\phpurs_eval_thunk('Data_Monoid_Multiplicative_Multiplicative'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_0;
    $__res = (function() use ($map, $__global_Data_Monoid_Multiplicative_Multiplicative) {
  $__body = function($f, $v) use ($map, $__global_Data_Monoid_Multiplicative_Multiplicative) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($__global_Data_Monoid_Multiplicative_Multiplicative, ($f1)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__global_Data_Monoid_Multiplicative_Multiplicative, $__body, &$__fn) {
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
})(), "sequence" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Monoid_Multiplicative_Multiplicative = ($GLOBALS['Data_Monoid_Multiplicative_Multiplicative'] ?? \Data\Monoid\Multiplicative\phpurs_eval_thunk('Data_Monoid_Multiplicative_Multiplicative'));
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
    $__res = (function() use ($map, $__global_Data_Monoid_Multiplicative_Multiplicative) {
  $__body = function($v) use ($map, $__global_Data_Monoid_Multiplicative_Multiplicative) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($map)($__global_Data_Monoid_Multiplicative_Multiplicative, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $__global_Data_Monoid_Multiplicative_Multiplicative, $__body, &$__fn) {
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
$__global_Data_Monoid_Multiplicative_functorMultiplicative = ($GLOBALS['Data_Monoid_Multiplicative_functorMultiplicative'] ?? \Data\Monoid\Multiplicative\phpurs_eval_thunk('Data_Monoid_Multiplicative_functorMultiplicative'));
    $__res = $__global_Data_Monoid_Multiplicative_functorMultiplicative;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
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
      case 'Data_Traversable_traversableMaybe': $v = (object)["traverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictApplicative;
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
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
    $__res = (function() use ($pure, $map) {
  $__body = function($v, $v1) use ($pure, $map) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "Nothing":
return ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
case "Just":
$f = $__case_0;
$x = ($__case_1)->v0;
return ($map)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($f)($x));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($pure, $map, $__body, &$__fn) {
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
})(), "sequence" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictApplicative;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_3;
    $__res = (function() use ($pure, $map) {
  $__body = function($v) use ($pure, $map) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nothing":
return ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
case "Just":
$x = ($__case_0)->v0;
return ($map)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($pure, $map, $__body, &$__fn) {
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
$__global_Data_Maybe_functorMaybe = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe'));
    $__res = $__global_Data_Maybe_functorMaybe;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableMaybe = ($GLOBALS['Data_Foldable_foldableMaybe'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMaybe'));
    $__res = $__global_Data_Foldable_foldableMaybe;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Traversable_traverse1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Traversable_traversableMaybe'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableMaybe'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Traversable_traversableIdentity': $v = (object)["traverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Identity_Identity = ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_0;
    $__res = (function() use ($map, $__global_Data_Identity_Identity) {
  $__body = function($f, $v) use ($map, $__global_Data_Identity_Identity) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($__global_Data_Identity_Identity, ($f1)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__global_Data_Identity_Identity, $__body, &$__fn) {
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
})(), "sequence" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Identity_Identity = ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity'));
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
    $__res = (function() use ($map, $__global_Data_Identity_Identity) {
  $__body = function($v) use ($map, $__global_Data_Identity_Identity) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($map)($__global_Data_Identity_Identity, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $__global_Data_Identity_Identity, $__body, &$__fn) {
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
$__global_Data_Identity_functorIdentity = ($GLOBALS['Data_Identity_functorIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_functorIdentity'));
    $__res = $__global_Data_Identity_functorIdentity;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
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
      case 'Data_Traversable_traversableEither': $v = (object)["traverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictApplicative;
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
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
    $__res = (function() use ($pure, $map) {
  $__body = function($v, $v1) use ($pure, $map) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "Left":
$x = ($__case_1)->v0;
return ($pure)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($x));
break;
case "Right":
$f = $__case_0;
$x = ($__case_1)->v0;
return ($map)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($f)($x));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($pure, $map, $__body, &$__fn) {
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
})(), "sequence" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictApplicative;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_3;
    $__res = (function() use ($pure, $map) {
  $__body = function($v) use ($pure, $map) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Left":
$x = ($__case_0)->v0;
return ($pure)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($x));
break;
case "Right":
$x = ($__case_0)->v0;
return ($map)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($pure, $map, $__body, &$__fn) {
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
$__global_Data_Either_functorEither = ($GLOBALS['Data_Either_functorEither'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_functorEither'));
    $__res = $__global_Data_Either_functorEither;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableEither = ($GLOBALS['Data_Foldable_foldableEither'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableEither'));
    $__res = $__global_Data_Foldable_foldableEither;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Traversable_traversableDual': $v = (object)["traverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Monoid_Dual_Dual = ($GLOBALS['Data_Monoid_Dual_Dual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_Dual'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_0;
    $__res = (function() use ($map, $__global_Data_Monoid_Dual_Dual) {
  $__body = function($f, $v) use ($map, $__global_Data_Monoid_Dual_Dual) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($__global_Data_Monoid_Dual_Dual, ($f1)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__global_Data_Monoid_Dual_Dual, $__body, &$__fn) {
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
})(), "sequence" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Monoid_Dual_Dual = ($GLOBALS['Data_Monoid_Dual_Dual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_Dual'));
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
    $__res = (function() use ($map, $__global_Data_Monoid_Dual_Dual) {
  $__body = function($v) use ($map, $__global_Data_Monoid_Dual_Dual) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($map)($__global_Data_Monoid_Dual_Dual, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $__global_Data_Monoid_Dual_Dual, $__body, &$__fn) {
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
$__global_Data_Monoid_Dual_functorDual = ($GLOBALS['Data_Monoid_Dual_functorDual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_functorDual'));
    $__res = $__global_Data_Monoid_Dual_functorDual;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
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
      case 'Data_Traversable_traversableDisj': $v = (object)["traverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Monoid_Disj_Disj = ($GLOBALS['Data_Monoid_Disj_Disj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_Disj'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_0;
    $__res = (function() use ($map, $__global_Data_Monoid_Disj_Disj) {
  $__body = function($f, $v) use ($map, $__global_Data_Monoid_Disj_Disj) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($__global_Data_Monoid_Disj_Disj, ($f1)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__global_Data_Monoid_Disj_Disj, $__body, &$__fn) {
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
})(), "sequence" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Monoid_Disj_Disj = ($GLOBALS['Data_Monoid_Disj_Disj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_Disj'));
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
    $__res = (function() use ($map, $__global_Data_Monoid_Disj_Disj) {
  $__body = function($v) use ($map, $__global_Data_Monoid_Disj_Disj) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($map)($__global_Data_Monoid_Disj_Disj, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $__global_Data_Monoid_Disj_Disj, $__body, &$__fn) {
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
$__global_Data_Monoid_Disj_functorDisj = ($GLOBALS['Data_Monoid_Disj_functorDisj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_functorDisj'));
    $__res = $__global_Data_Monoid_Disj_functorDisj;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableDisj = ($GLOBALS['Data_Foldable_foldableDisj'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableDisj'));
    $__res = $__global_Data_Foldable_foldableDisj;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Traversable_traversableConst': $v = (object)["traverse" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictApplicative;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_0;
    $__res = (function() use ($pure) {
  $__body = function($v, $v1) use ($pure) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return ($pure)($x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($pure, $__body, &$__fn) {
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
$__case_0 = $dictApplicative;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_1;
    $__res = (function() use ($pure) {
  $__body = function($v) use ($pure) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($pure)($x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure, $__body, &$__fn) {
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
$__global_Data_Const_functorConst = ($GLOBALS['Data_Const_functorConst'] ?? \Data\Const\phpurs_eval_thunk('Data_Const_functorConst'));
    $__res = $__global_Data_Const_functorConst;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableConst = ($GLOBALS['Data_Foldable_foldableConst'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableConst'));
    $__res = $__global_Data_Foldable_foldableConst;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Traversable_traversableConj': $v = (object)["traverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Monoid_Conj_Conj = ($GLOBALS['Data_Monoid_Conj_Conj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_Conj'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_0;
    $__res = (function() use ($map, $__global_Data_Monoid_Conj_Conj) {
  $__body = function($f, $v) use ($map, $__global_Data_Monoid_Conj_Conj) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($__global_Data_Monoid_Conj_Conj, ($f1)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__global_Data_Monoid_Conj_Conj, $__body, &$__fn) {
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
})(), "sequence" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Monoid_Conj_Conj = ($GLOBALS['Data_Monoid_Conj_Conj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_Conj'));
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
    $__res = (function() use ($map, $__global_Data_Monoid_Conj_Conj) {
  $__body = function($v) use ($map, $__global_Data_Monoid_Conj_Conj) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($map)($__global_Data_Monoid_Conj_Conj, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $__global_Data_Monoid_Conj_Conj, $__body, &$__fn) {
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
$__global_Data_Monoid_Conj_functorConj = ($GLOBALS['Data_Monoid_Conj_functorConj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_functorConj'));
    $__res = $__global_Data_Monoid_Conj_functorConj;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableConj = ($GLOBALS['Data_Foldable_foldableConj'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableConj'));
    $__res = $__global_Data_Foldable_foldableConj;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Traversable_traversableAdditive': $v = (object)["traverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Monoid_Additive_Additive = ($GLOBALS['Data_Monoid_Additive_Additive'] ?? \Data\Monoid\Additive\phpurs_eval_thunk('Data_Monoid_Additive_Additive'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_0;
    $__res = (function() use ($map, $__global_Data_Monoid_Additive_Additive) {
  $__body = function($f, $v) use ($map, $__global_Data_Monoid_Additive_Additive) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($__global_Data_Monoid_Additive_Additive, ($f1)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__global_Data_Monoid_Additive_Additive, $__body, &$__fn) {
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
})(), "sequence" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Monoid_Additive_Additive = ($GLOBALS['Data_Monoid_Additive_Additive'] ?? \Data\Monoid\Additive\phpurs_eval_thunk('Data_Monoid_Additive_Additive'));
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
    $__res = (function() use ($map, $__global_Data_Monoid_Additive_Additive) {
  $__body = function($v) use ($map, $__global_Data_Monoid_Additive_Additive) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($map)($__global_Data_Monoid_Additive_Additive, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $__global_Data_Monoid_Additive_Additive, $__body, &$__fn) {
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
$__global_Data_Monoid_Additive_functorAdditive = ($GLOBALS['Data_Monoid_Additive_functorAdditive'] ?? \Data\Monoid\Additive\phpurs_eval_thunk('Data_Monoid_Additive_functorAdditive'));
    $__res = $__global_Data_Monoid_Additive_functorAdditive;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableAdditive = ($GLOBALS['Data_Foldable_foldableAdditive'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableAdditive'));
    $__res = $__global_Data_Foldable_foldableAdditive;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Traversable_traversableArray': $v = (object)["traverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Traversable_traverseArrayImpl = ($GLOBALS['Data_Traversable_traverseArrayImpl'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traverseArrayImpl'));
$Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
$__case_0 = $Apply0;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dictApplicative;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Traversable_traverseArrayImpl)($__case_res_0, $__case_res_1, $__case_res_2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequence" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_traversableArray = ($GLOBALS['Data_Traversable_traversableArray'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableArray'));
$__global_Data_Traversable_identity = ($GLOBALS['Data_Traversable_identity'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_identity'));
$__case_0 = $__global_Data_Traversable_traversableArray;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse2 = $__case_res_3;
    $__res = ((function() use ($traverse2, $__global_Data_Traversable_identity) {
  $__fn = function($dictApplicative) use ($traverse2, $__global_Data_Traversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse2)($dictApplicative, $__global_Data_Traversable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($dictApplicative);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_functorArray = ($GLOBALS['Data_Functor_functorArray'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_functorArray'));
    $__res = $__global_Data_Functor_functorArray;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableArray = ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'));
    $__res = $__global_Data_Foldable_foldableArray;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Traversable_sequence1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Traversable_traversableMaybe'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableMaybe'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sequence;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Traversable_traversableFirst': $v = (object)["traverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_traverse1 = ($GLOBALS['Data_Traversable_traverse1'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traverse1'));
$__global_Data_Maybe_First_First = ($GLOBALS['Data_Maybe_First_First'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_First'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_0;
$traverse2 = ($__global_Data_Traversable_traverse1)($dictApplicative);
    $__res = (function() use ($map, $__global_Data_Maybe_First_First, $traverse2) {
  $__body = function($f, $v) use ($map, $__global_Data_Maybe_First_First, $traverse2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($__global_Data_Maybe_First_First, ($traverse2)($f1, $x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__global_Data_Maybe_First_First, $traverse2, $__body, &$__fn) {
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
})(), "sequence" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_sequence1 = ($GLOBALS['Data_Traversable_sequence1'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_sequence1'));
$__global_Data_Maybe_First_First = ($GLOBALS['Data_Maybe_First_First'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_First'));
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
$sequence2 = ($__global_Data_Traversable_sequence1)($dictApplicative);
    $__res = (function() use ($map, $__global_Data_Maybe_First_First, $sequence2) {
  $__body = function($v) use ($map, $__global_Data_Maybe_First_First, $sequence2) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($map)($__global_Data_Maybe_First_First, ($sequence2)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $__global_Data_Maybe_First_First, $sequence2, $__body, &$__fn) {
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
$__global_Data_Maybe_functorMaybe = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe'));
    $__res = $__global_Data_Maybe_functorMaybe;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableFirst = ($GLOBALS['Data_Foldable_foldableFirst'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableFirst'));
    $__res = $__global_Data_Foldable_foldableFirst;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Traversable_traversableLast': $v = (object)["traverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_traverse1 = ($GLOBALS['Data_Traversable_traverse1'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traverse1'));
$__global_Data_Maybe_Last_Last = ($GLOBALS['Data_Maybe_Last_Last'] ?? \Data\Maybe\Last\phpurs_eval_thunk('Data_Maybe_Last_Last'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_0;
$traverse2 = ($__global_Data_Traversable_traverse1)($dictApplicative);
    $__res = (function() use ($map, $__global_Data_Maybe_Last_Last, $traverse2) {
  $__body = function($f, $v) use ($map, $__global_Data_Maybe_Last_Last, $traverse2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($__global_Data_Maybe_Last_Last, ($traverse2)($f1, $x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__global_Data_Maybe_Last_Last, $traverse2, $__body, &$__fn) {
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
})(), "sequence" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_sequence1 = ($GLOBALS['Data_Traversable_sequence1'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_sequence1'));
$__global_Data_Maybe_Last_Last = ($GLOBALS['Data_Maybe_Last_Last'] ?? \Data\Maybe\Last\phpurs_eval_thunk('Data_Maybe_Last_Last'));
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
$sequence2 = ($__global_Data_Traversable_sequence1)($dictApplicative);
    $__res = (function() use ($map, $__global_Data_Maybe_Last_Last, $sequence2) {
  $__body = function($v) use ($map, $__global_Data_Maybe_Last_Last, $sequence2) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($map)($__global_Data_Maybe_Last_Last, ($sequence2)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $__global_Data_Maybe_Last_Last, $sequence2, $__body, &$__fn) {
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
$__global_Data_Maybe_functorMaybe = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe'));
    $__res = $__global_Data_Maybe_functorMaybe;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableLast = ($GLOBALS['Data_Foldable_foldableLast'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableLast'));
    $__res = $__global_Data_Foldable_foldableLast;
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




// Data_Traversable_Traversable$Dict
function Data_Traversable_Traversable__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_Traversable__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Traversable_Traversable__dollar__Dict'] = __NAMESPACE__ . '\\Data_Traversable_Traversable__dollar__Dict';

// Data_Traversable_traverse
function Data_Traversable_traverse($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_traverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Traversable_traverse'] = __NAMESPACE__ . '\\Data_Traversable_traverse';











// Data_Traversable_traversableCompose
function Data_Traversable_traversableCompose($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_traversableCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Functor_Compose_Compose = ($GLOBALS['Data_Functor_Compose_Compose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_Compose'));
$__global_Data_Traversable_identity = ($GLOBALS['Data_Traversable_identity'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_identity'));
while (true) {
$__case_0 = $dictTraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse2 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
$functorCompose = (function() use ($map) {
  $__fn = function($dictFunctor1) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctor1;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_2;
    $__res = (object)["map" => (function() use ($map, $map1) {
  $__body = function($f, $v) use ($map, $map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($map)(($map1)($f1), $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_4;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_5;
$foldableCompose = (function() use ($foldr3, $__global_Data_Function_flip, $foldl3, $foldMap2) {
  $__fn = function($dictFoldable1) use ($foldr3, $__global_Data_Function_flip, $foldl3, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable1;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr4 = $__case_res_6;
$__case_0 = $dictFoldable1;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl4 = $__case_res_7;
$__case_0 = $dictFoldable1;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap3 = $__case_res_8;
    $__res = (object)["foldr" => (function() use ($foldr3, $__global_Data_Function_flip, $foldr4) {
  $__body = function($f, $i, $v) use ($foldr3, $__global_Data_Function_flip, $foldr4) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
return ($foldr3)(($__global_Data_Function_flip)(($foldr4)($f1)), $i1, $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldr3, $__global_Data_Function_flip, $foldr4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($foldl3, $foldl4) {
  $__body = function($f, $i, $v) use ($foldl3, $foldl4) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
return ($foldl3)(($foldl4)($f1), $i1, $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldl3, $foldl4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap2, $foldMap3) {
  $__fn = function($dictMonoid) use ($foldMap2, $foldMap3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap4 = ($foldMap2)($dictMonoid);
$foldMap5 = ($foldMap3)($dictMonoid);
    $__res = (function() use ($foldMap4, $foldMap5) {
  $__body = function($f, $v) use ($foldMap4, $foldMap5) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($foldMap4)(($foldMap5)($f1), $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMap4, $foldMap5, $__body, &$__fn) {
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
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return (function() use ($functorCompose, $__global_Prim_undefined, $foldableCompose, $dict, $traverse2, $__global_Data_Functor_Compose_Compose, $__global_Data_Traversable_identity) {
  $__fn = function($dictTraversable1) use ($functorCompose, $__global_Prim_undefined, $foldableCompose, $dict, $traverse2, $__global_Data_Functor_Compose_Compose, $__global_Data_Traversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictTraversable1;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse3 = $__case_res_9;
$functorCompose1 = ($functorCompose)((($dictTraversable1)->Functor0)($__global_Prim_undefined));
$foldableCompose1 = ($foldableCompose)((($dictTraversable1)->Foldable1)($__global_Prim_undefined));
    $__res = (object)["traverse" => (function() use ($dict, $traverse2, $traverse3, $__global_Data_Functor_Compose_Compose) {
  $__fn = function($dictApplicative) use ($dict, $traverse2, $traverse3, $__global_Data_Functor_Compose_Compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_10;
$traverse4 = ($traverse2)($dictApplicative);
$traverse5 = ($traverse3)($dictApplicative);
    $__res = (function() use ($map, $__global_Data_Functor_Compose_Compose, $traverse4, $traverse5) {
  $__body = function($f, $v) use ($map, $__global_Data_Functor_Compose_Compose, $traverse4, $traverse5) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($map)($__global_Data_Functor_Compose_Compose, ($traverse4)(($traverse5)($f1), $fga));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__global_Data_Functor_Compose_Compose, $traverse4, $traverse5, $__body, &$__fn) {
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
})(), "sequence" => (function() use ($dict, $__global_Data_Traversable_identity) {
  $__fn = function($dictApplicative) use ($dict, $__global_Data_Traversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_11)($dictApplicative, $__global_Data_Traversable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorCompose1) {
  $__fn = function($__dollar____unused) use ($functorCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorCompose1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use ($foldableCompose1) {
  $__fn = function($__dollar____unused) use ($foldableCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableCompose1;
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
$GLOBALS['Data_Traversable_traversableCompose'] = __NAMESPACE__ . '\\Data_Traversable_traversableCompose';


// Data_Traversable_sequenceDefault
function Data_Traversable_sequenceDefault($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_sequenceDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_identity = ($GLOBALS['Data_Traversable_identity'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_identity'));
$__case_0 = $dictTraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse2 = $__case_res_0;
    $__res = (function() use ($traverse2, $__global_Data_Traversable_identity) {
  $__fn = function($dictApplicative) use ($traverse2, $__global_Data_Traversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse2)($dictApplicative, $__global_Data_Traversable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Traversable_sequenceDefault'] = __NAMESPACE__ . '\\Data_Traversable_sequenceDefault';


// Data_Traversable_sequence
function Data_Traversable_sequence($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_sequence';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->sequence;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Traversable_sequence'] = __NAMESPACE__ . '\\Data_Traversable_sequence';


// Data_Traversable_traversableApp
function Data_Traversable_traversableApp($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_traversableApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_App_App = ($GLOBALS['Data_Functor_App_App'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_App'));
$__case_0 = $dictTraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse2 = $__case_res_0;
$__case_0 = $dictTraversable;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->sequence;
} else {
throw new \Exception("Pattern match failure");
};
$sequence2 = $__case_res_1;
$functorApp = $dictFunctor;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_4;
$foldableApp = (object)["foldr" => (function() use ($foldr3) {
  $__body = function($f, $i, $v) use ($foldr3) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$x = $__case_2;
return ($foldr3)($f1, $i1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldr3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($foldl3) {
  $__body = function($f, $i, $v) use ($foldl3) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$x = $__case_2;
return ($foldl3)($f1, $i1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldl3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap2) {
  $__fn = function($dictMonoid) use ($foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap3 = ($foldMap2)($dictMonoid);
    $__res = (function() use ($foldMap3) {
  $__body = function($f, $v) use ($foldMap3) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($foldMap3)($f1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMap3, $__body, &$__fn) {
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
})()];
    $__res = (object)["traverse" => (function() use ($dict, $traverse2, $__global_Data_Functor_App_App) {
  $__fn = function($dictApplicative) use ($dict, $traverse2, $__global_Data_Functor_App_App, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_5;
$traverse3 = ($traverse2)($dictApplicative);
    $__res = (function() use ($map, $__global_Data_Functor_App_App, $traverse3) {
  $__body = function($f, $v) use ($map, $__global_Data_Functor_App_App, $traverse3) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($__global_Data_Functor_App_App, ($traverse3)($f1, $x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__global_Data_Functor_App_App, $traverse3, $__body, &$__fn) {
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
})(), "sequence" => (function() use ($dict, $sequence2, $__global_Data_Functor_App_App) {
  $__fn = function($dictApplicative) use ($dict, $sequence2, $__global_Data_Functor_App_App, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_6;
$sequence3 = ($sequence2)($dictApplicative);
    $__res = (function() use ($map, $__global_Data_Functor_App_App, $sequence3) {
  $__body = function($v) use ($map, $__global_Data_Functor_App_App, $sequence3) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($map)($__global_Data_Functor_App_App, ($sequence3)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $__global_Data_Functor_App_App, $sequence3, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($dictFunctor) {
  $__fn = function($__dollar____unused) use ($dictFunctor, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictFunctor;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use ($foldableApp) {
  $__fn = function($__dollar____unused) use ($foldableApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableApp;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Traversable_traversableApp'] = __NAMESPACE__ . '\\Data_Traversable_traversableApp';

// Data_Traversable_traversableCoproduct
function Data_Traversable_traversableCoproduct($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_traversableCoproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_Coproduct_bimap = ($GLOBALS['Data_Functor_Coproduct_bimap'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_bimap'));
$__global_Data_Functor_Coproduct_coproduct = ($GLOBALS['Data_Functor_Coproduct_coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_coproduct'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Traversable_compose = ($GLOBALS['Data_Traversable_compose'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_compose'));
$__global_Data_Functor_Coproduct_Coproduct = ($GLOBALS['Data_Functor_Coproduct_Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_Coproduct'));
$__case_0 = $dictTraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse2 = $__case_res_0;
$__case_0 = $dictTraversable;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->sequence;
} else {
throw new \Exception("Pattern match failure");
};
$sequence2 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
$functorCoproduct = (function() use ($__global_Data_Functor_Coproduct_bimap, $map) {
  $__fn = function($dictFunctor1) use ($__global_Data_Functor_Coproduct_bimap, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctor1;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_3;
    $__res = (object)["map" => (function() use ($__global_Data_Functor_Coproduct_bimap, $map, $map1) {
  $__body = function($f, $v) use ($__global_Data_Functor_Coproduct_bimap, $map, $map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$e = $__case_1;
return ($__global_Data_Functor_Coproduct_bimap)(($map)($f1), ($map1)($f1), $e);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__global_Data_Functor_Coproduct_bimap, $map, $map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
$__case_res_4 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_4;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_5;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_6;
$foldableCoproduct = (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldl3, $foldMap2) {
  $__fn = function($dictFoldable1) use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldl3, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable1;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr4 = $__case_res_7;
$__case_0 = $dictFoldable1;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl4 = $__case_res_8;
$__case_0 = $dictFoldable1;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap3 = $__case_res_9;
    $__res = (object)["foldr" => (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldr4) {
  $__fn = function($f, $z = null) use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldr4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldr3)($f, $z), ($foldr4)($f, $z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldl3, $foldl4) {
  $__fn = function($f, $z = null) use ($__global_Data_Functor_Coproduct_coproduct, $foldl3, $foldl4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldl3)($f, $z), ($foldl4)($f, $z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap2, $foldMap3, $__global_Data_Functor_Coproduct_coproduct) {
  $__fn = function($dictMonoid) use ($foldMap2, $foldMap3, $__global_Data_Functor_Coproduct_coproduct, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap4 = ($foldMap2)($dictMonoid);
$foldMap5 = ($foldMap3)($dictMonoid);
    $__res = (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldMap4, $foldMap5) {
  $__fn = function($f) use ($__global_Data_Functor_Coproduct_coproduct, $foldMap4, $foldMap5, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldMap4)($f), ($foldMap5)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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
    $__res = (function() use ($functorCoproduct, $__global_Prim_undefined, $foldableCoproduct, $dict, $traverse2, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_Traversable_compose, $__global_Data_Functor_Coproduct_Coproduct, $sequence2) {
  $__fn = function($dictTraversable1) use ($functorCoproduct, $__global_Prim_undefined, $foldableCoproduct, $dict, $traverse2, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_Traversable_compose, $__global_Data_Functor_Coproduct_Coproduct, $sequence2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictTraversable1;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse3 = $__case_res_10;
$__case_0 = $dictTraversable1;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->sequence;
} else {
throw new \Exception("Pattern match failure");
};
$sequence3 = $__case_res_11;
$functorCoproduct1 = ($functorCoproduct)((($dictTraversable1)->Functor0)($__global_Prim_undefined));
$foldableCoproduct1 = ($foldableCoproduct)((($dictTraversable1)->Foldable1)($__global_Prim_undefined));
    $__res = (object)["traverse" => (function() use ($dict, $traverse2, $traverse3, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_Traversable_compose, $__global_Data_Functor_Coproduct_Coproduct) {
  $__fn = function($dictApplicative) use ($dict, $traverse2, $traverse3, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_Traversable_compose, $__global_Data_Functor_Coproduct_Coproduct, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_12;
$traverse4 = ($traverse2)($dictApplicative);
$traverse5 = ($traverse3)($dictApplicative);
    $__res = (function() use ($__global_Data_Functor_Coproduct_coproduct, $__global_Data_Traversable_compose, $map, $__global_Data_Functor_Coproduct_Coproduct, $traverse4, $traverse5) {
  $__fn = function($f) use ($__global_Data_Functor_Coproduct_coproduct, $__global_Data_Traversable_compose, $map, $__global_Data_Functor_Coproduct_Coproduct, $traverse4, $traverse5, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($__global_Data_Traversable_compose)(($map)(($__global_Data_Traversable_compose)($__global_Data_Functor_Coproduct_Coproduct, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($traverse4)($f)), ($__global_Data_Traversable_compose)(($map)(($__global_Data_Traversable_compose)($__global_Data_Functor_Coproduct_Coproduct, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($traverse5)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequence" => (function() use ($dict, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_Traversable_compose, $__global_Data_Functor_Coproduct_Coproduct, $sequence2, $sequence3) {
  $__fn = function($dictApplicative) use ($dict, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_Traversable_compose, $__global_Data_Functor_Coproduct_Coproduct, $sequence2, $sequence3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_13;
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($__global_Data_Traversable_compose)(($map)(($__global_Data_Traversable_compose)($__global_Data_Functor_Coproduct_Coproduct, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($sequence2)($dictApplicative)), ($__global_Data_Traversable_compose)(($map)(($__global_Data_Traversable_compose)($__global_Data_Functor_Coproduct_Coproduct, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($sequence3)($dictApplicative)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorCoproduct1) {
  $__fn = function($__dollar____unused) use ($functorCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorCoproduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use ($foldableCoproduct1) {
  $__fn = function($__dollar____unused) use ($foldableCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableCoproduct1;
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
$GLOBALS['Data_Traversable_traversableCoproduct'] = __NAMESPACE__ . '\\Data_Traversable_traversableCoproduct';



// Data_Traversable_traversableProduct
function Data_Traversable_traversableProduct($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_traversableProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_Product_bimap = ($GLOBALS['Data_Functor_Product_bimap'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_bimap'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Functor_Product_product = ($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product'));
$__case_0 = $dictTraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse2 = $__case_res_0;
$__case_0 = $dictTraversable;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->sequence;
} else {
throw new \Exception("Pattern match failure");
};
$sequence2 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
$functorProduct = (function() use ($__global_Data_Functor_Product_bimap, $map) {
  $__fn = function($dictFunctor1) use ($__global_Data_Functor_Product_bimap, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctor1;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_3;
    $__res = (object)["map" => (function() use ($__global_Data_Functor_Product_bimap, $map, $map1) {
  $__body = function($f, $v) use ($__global_Data_Functor_Product_bimap, $map, $map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($__global_Data_Functor_Product_bimap)(($map)($f1), ($map1)($f1), $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__global_Data_Functor_Product_bimap, $map, $map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
$__case_res_4 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_4;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_5;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_6;
$foldableProduct = (function() use ($foldr3, $foldl3, $dict, $foldMap2) {
  $__fn = function($dictFoldable1) use ($foldr3, $foldl3, $dict, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable1;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr4 = $__case_res_7;
$__case_0 = $dictFoldable1;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl4 = $__case_res_8;
$__case_0 = $dictFoldable1;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap3 = $__case_res_9;
    $__res = (object)["foldr" => (function() use ($foldr3, $foldr4) {
  $__body = function($f, $z, $v) use ($foldr3, $foldr4) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->v0;
$ga = ($__case_2)->v1;
return ($foldr3)($f1, ($foldr4)($f1, $z1, $ga), $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldr3, $foldr4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($foldl4, $foldl3) {
  $__body = function($f, $z, $v) use ($foldl4, $foldl3) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->v0;
$ga = ($__case_2)->v1;
return ($foldl4)($f1, ($foldl3)($f1, $z1, $fa), $ga);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldl4, $foldl3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($dict, $foldMap2, $foldMap3) {
  $__fn = function($dictMonoid) use ($dict, $foldMap2, $foldMap3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_10;
$foldMap4 = ($foldMap2)($dictMonoid);
$foldMap5 = ($foldMap3)($dictMonoid);
    $__res = (function() use ($append, $foldMap4, $foldMap5) {
  $__body = function($f, $v) use ($append, $foldMap4, $foldMap5) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$fa = ($__case_1)->v0;
$ga = ($__case_1)->v1;
return ($append)(($foldMap4)($f1, $fa), ($foldMap5)($f1, $ga));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($append, $foldMap4, $foldMap5, $__body, &$__fn) {
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
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($functorProduct, $__global_Prim_undefined, $foldableProduct, $dict, $traverse2, $__global_Data_Functor_Product_product, $sequence2) {
  $__fn = function($dictTraversable1) use ($functorProduct, $__global_Prim_undefined, $foldableProduct, $dict, $traverse2, $__global_Data_Functor_Product_product, $sequence2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictTraversable1;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse3 = $__case_res_11;
$__case_0 = $dictTraversable1;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->sequence;
} else {
throw new \Exception("Pattern match failure");
};
$sequence3 = $__case_res_12;
$functorProduct1 = ($functorProduct)((($dictTraversable1)->Functor0)($__global_Prim_undefined));
$foldableProduct1 = ($foldableProduct)((($dictTraversable1)->Foldable1)($__global_Prim_undefined));
    $__res = (object)["traverse" => (function() use ($dict, $traverse2, $traverse3, $__global_Data_Functor_Product_product) {
  $__fn = function($dictApplicative) use ($dict, $traverse2, $traverse3, $__global_Data_Functor_Product_product, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_13;
$__case_0 = $dict;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_14;
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
$traverse4 = ($traverse2)($dictApplicative);
$traverse5 = ($traverse3)($dictApplicative);
    $__res = (function() use ($lift2, $__global_Data_Functor_Product_product, $traverse4, $traverse5) {
  $__body = function($f, $v) use ($lift2, $__global_Data_Functor_Product_product, $traverse4, $traverse5) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$fa = ($__case_1)->v0;
$ga = ($__case_1)->v1;
return ($lift2)($__global_Data_Functor_Product_product, ($traverse4)($f1, $fa), ($traverse5)($f1, $ga));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($lift2, $__global_Data_Functor_Product_product, $traverse4, $traverse5, $__body, &$__fn) {
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
})(), "sequence" => (function() use ($dict, $sequence2, $sequence3, $__global_Data_Functor_Product_product) {
  $__fn = function($dictApplicative) use ($dict, $sequence2, $sequence3, $__global_Data_Functor_Product_product, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_15 = null;
if (true) {
$v = $__case_0;
$__case_res_15 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_15;
$__case_0 = $dict;
$__case_res_16 = null;
if (true) {
$v = $__case_0;
$__case_res_16 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_16;
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
$sequence4 = ($sequence2)($dictApplicative);
$sequence5 = ($sequence3)($dictApplicative);
    $__res = (function() use ($lift2, $__global_Data_Functor_Product_product, $sequence4, $sequence5) {
  $__body = function($v) use ($lift2, $__global_Data_Functor_Product_product, $sequence4, $sequence5) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$fa = ($__case_0)->v0;
$ga = ($__case_0)->v1;
return ($lift2)($__global_Data_Functor_Product_product, ($sequence4)($fa), ($sequence5)($ga));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($lift2, $__global_Data_Functor_Product_product, $sequence4, $sequence5, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorProduct1) {
  $__fn = function($__dollar____unused) use ($functorProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorProduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use ($foldableProduct1) {
  $__fn = function($__dollar____unused) use ($foldableProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableProduct1;
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
$GLOBALS['Data_Traversable_traversableProduct'] = __NAMESPACE__ . '\\Data_Traversable_traversableProduct';

// Data_Traversable_traverseDefault
function Data_Traversable_traverseDefault($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_traverseDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictTraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sequence;
} else {
throw new \Exception("Pattern match failure");
};
$sequence2 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
    $__res = (function() use ($sequence2, $map) {
  $__fn = function($dictApplicative) use ($sequence2, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sequence3 = ($sequence2)($dictApplicative);
    $__res = (function() use ($sequence3, $map) {
  $__fn = function($f, $ta = null) use ($sequence3, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ta) use ($f, &$__fn) { return $__fn($f, $ta); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($sequence3)(($map)($f, $ta));
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
$GLOBALS['Data_Traversable_traverseDefault'] = __NAMESPACE__ . '\\Data_Traversable_traverseDefault';

// Data_Traversable_mapAccumR
function Data_Traversable_mapAccumR($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_mapAccumR';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_Accum_Internal_applicativeStateR = ($GLOBALS['Data_Traversable_Accum_Internal_applicativeStateR'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_applicativeStateR'));
$__global_Data_Traversable_Accum_Internal_stateR = ($GLOBALS['Data_Traversable_Accum_Internal_stateR'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_stateR'));
$__case_0 = $dictTraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse2 = ($__case_res_0)($__global_Data_Traversable_Accum_Internal_applicativeStateR);
    $__res = (function() use ($__global_Data_Traversable_Accum_Internal_stateR, $traverse2) {
  $__fn = function($f, $s0 = null, $xs = null) use ($__global_Data_Traversable_Accum_Internal_stateR, $traverse2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $s0, &$__fn) { return $__fn($f, $s0, $xs); };
    if ($__num === 1) return function($s0, $xs = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $s0, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $s0, &$__fn) { return $__fn($f, $s0, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Traversable_Accum_Internal_stateR)(($traverse2)((function() use ($f) {
  $__fn = function($a, $s = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($a, &$__fn) { return $__fn($a, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($f)($s, $a);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $xs), $s0);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Traversable_mapAccumR'] = __NAMESPACE__ . '\\Data_Traversable_mapAccumR';

// Data_Traversable_scanr
function Data_Traversable_scanr($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_scanr';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_Accum_Internal_applicativeStateR = ($GLOBALS['Data_Traversable_Accum_Internal_applicativeStateR'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_applicativeStateR'));
$__global_Data_Traversable_Accum_Internal_stateR = ($GLOBALS['Data_Traversable_Accum_Internal_stateR'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_stateR'));
$__case_0 = $dictTraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse2 = ($__case_res_0)($__global_Data_Traversable_Accum_Internal_applicativeStateR);
$mapAccumR1 = (function() use ($__global_Data_Traversable_Accum_Internal_stateR, $traverse2) {
  $__fn = function($f, $s0 = null, $xs = null) use ($__global_Data_Traversable_Accum_Internal_stateR, $traverse2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $s0, &$__fn) { return $__fn($f, $s0, $xs); };
    if ($__num === 1) return function($s0, $xs = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $s0, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $s0, &$__fn) { return $__fn($f, $s0, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Traversable_Accum_Internal_stateR)(($traverse2)((function() use ($f) {
  $__fn = function($a, $s = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($a, &$__fn) { return $__fn($a, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($f)($s, $a);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $xs), $s0);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($mapAccumR1) {
  $__fn = function($f, $b0 = null, $xs = null) use ($mapAccumR1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $b0, &$__fn) { return $__fn($f, $b0, $xs); };
    if ($__num === 1) return function($b0, $xs = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b0, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $b0, &$__fn) { return $__fn($f, $b0, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = (($mapAccumR1)((function() use ($f) {
  $__fn = function($b, $a = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($b, &$__fn) { return $__fn($b, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$b__prime__ = ($f)($a, $b);
    $__res = (object)["accum" => $b__prime__, "value" => $b__prime__];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $b0, $xs))->value;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Traversable_scanr'] = __NAMESPACE__ . '\\Data_Traversable_scanr';

// Data_Traversable_mapAccumL
function Data_Traversable_mapAccumL($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_mapAccumL';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_Accum_Internal_applicativeStateL = ($GLOBALS['Data_Traversable_Accum_Internal_applicativeStateL'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_applicativeStateL'));
$__global_Data_Traversable_Accum_Internal_stateL = ($GLOBALS['Data_Traversable_Accum_Internal_stateL'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_stateL'));
$__case_0 = $dictTraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse2 = ($__case_res_0)($__global_Data_Traversable_Accum_Internal_applicativeStateL);
    $__res = (function() use ($__global_Data_Traversable_Accum_Internal_stateL, $traverse2) {
  $__fn = function($f, $s0 = null, $xs = null) use ($__global_Data_Traversable_Accum_Internal_stateL, $traverse2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $s0, &$__fn) { return $__fn($f, $s0, $xs); };
    if ($__num === 1) return function($s0, $xs = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $s0, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $s0, &$__fn) { return $__fn($f, $s0, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Traversable_Accum_Internal_stateL)(($traverse2)((function() use ($f) {
  $__fn = function($a, $s = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($a, &$__fn) { return $__fn($a, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($f)($s, $a);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $xs), $s0);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Traversable_mapAccumL'] = __NAMESPACE__ . '\\Data_Traversable_mapAccumL';

// Data_Traversable_scanl
function Data_Traversable_scanl($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_scanl';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_Accum_Internal_applicativeStateL = ($GLOBALS['Data_Traversable_Accum_Internal_applicativeStateL'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_applicativeStateL'));
$__global_Data_Traversable_Accum_Internal_stateL = ($GLOBALS['Data_Traversable_Accum_Internal_stateL'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_stateL'));
$__case_0 = $dictTraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse2 = ($__case_res_0)($__global_Data_Traversable_Accum_Internal_applicativeStateL);
$mapAccumL1 = (function() use ($__global_Data_Traversable_Accum_Internal_stateL, $traverse2) {
  $__fn = function($f, $s0 = null, $xs = null) use ($__global_Data_Traversable_Accum_Internal_stateL, $traverse2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $s0, &$__fn) { return $__fn($f, $s0, $xs); };
    if ($__num === 1) return function($s0, $xs = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $s0, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $s0, &$__fn) { return $__fn($f, $s0, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Traversable_Accum_Internal_stateL)(($traverse2)((function() use ($f) {
  $__fn = function($a, $s = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($a, &$__fn) { return $__fn($a, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($f)($s, $a);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $xs), $s0);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($mapAccumL1) {
  $__fn = function($f, $b0 = null, $xs = null) use ($mapAccumL1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $b0, &$__fn) { return $__fn($f, $b0, $xs); };
    if ($__num === 1) return function($b0, $xs = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b0, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $b0, &$__fn) { return $__fn($f, $b0, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = (($mapAccumL1)((function() use ($f) {
  $__fn = function($b, $a = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($b, &$__fn) { return $__fn($b, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$b__prime__ = ($f)($b, $a);
    $__res = (object)["accum" => $b__prime__, "value" => $b__prime__];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $b0, $xs))->value;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Traversable_scanl'] = __NAMESPACE__ . '\\Data_Traversable_scanl';

// Data_Traversable_for
function Data_Traversable_for($dictApplicative, $dictTraversable = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_for';
  if ($__num < 2) {
    if ($__num === 1) return function($dictTraversable) use ($dictApplicative, $__fn) { return $__fn($dictApplicative, $dictTraversable); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__case_0 = $dictTraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse2 = ($__case_res_0)($dictApplicative);
    $__res = (function() use ($traverse2) {
  $__fn = function($x, $f = null) use ($traverse2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($x, &$__fn) { return $__fn($x, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($traverse2)($f, $x);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Traversable_for'] = __NAMESPACE__ . '\\Data_Traversable_for';

