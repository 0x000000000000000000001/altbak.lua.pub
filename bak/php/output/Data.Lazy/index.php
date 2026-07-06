<?php

namespace Data\Lazy;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.BooleanAlgebra/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
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
      case 'Data_Lazy_append': $v = (function() {
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
      case 'Data_Lazy_compose': $v = (function() {
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
      case 'Data_Lazy_lazyLazy': $v = (object)["defer" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_Lazy_defer)((function() use ($__global_Data_Lazy_force, $f, $__global_Data_Unit_unit) {
  $__fn = function($v) use ($__global_Data_Lazy_force, $f, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Lazy_force)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Lazy_functorLazy': $v = (object)["map" => (function() {
  $__fn = function($f, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($f, &$__fn) { return $__fn($f, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
    $__res = ($__global_Data_Lazy_defer)((function() use ($f, $__global_Data_Lazy_force, $l) {
  $__fn = function($v) use ($f, $__global_Data_Lazy_force, $l, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)(($__global_Data_Lazy_force)($l));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Lazy_map': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Lazy_functorLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorLazy'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Lazy_functorWithIndexLazy': $v = (object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_map = ($GLOBALS['Data_Lazy_map'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_map'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_Lazy_map)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_functorLazy = ($GLOBALS['Data_Lazy_functorLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorLazy'));
    $__res = $__global_Data_Lazy_functorLazy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Lazy_invariantLazy': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Lazy_functorLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorLazy'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  $map = $__case_res_0;
  return (object)["imap" => (function() use ($map) {
  $__fn = function($f, $v = null) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)($f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      case 'Data_Lazy_foldableLazy': $v = (object)["foldr" => (function() {
  $__fn = function($f, $z = null, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($l) use ($f, $z, &$__fn) { return $__fn($f, $z, $l); };
    if ($__num === 1) return function($z, $l = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $l);
      if ($__num2 === 1) return function($l) use ($f, $z, &$__fn) { return $__fn($f, $z, $l); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
    $__res = ($f)(($__global_Data_Lazy_force)($l), $z);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__fn = function($f, $z = null, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($l) use ($f, $z, &$__fn) { return $__fn($f, $z, $l); };
    if ($__num === 1) return function($z, $l = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $l);
      if ($__num2 === 1) return function($l) use ($f, $z, &$__fn) { return $__fn($f, $z, $l); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
    $__res = ($f)($z, ($__global_Data_Lazy_force)($l));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid, $f = null, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($l) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $l); };
    if ($__num === 1) return function($f, $l = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $l);
      if ($__num2 === 1) return function($l) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $l); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
    $__res = ($f)(($__global_Data_Lazy_force)($l));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Lazy_foldr': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Lazy_foldableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldableLazy'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Lazy_foldl': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Lazy_foldableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldableLazy'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Lazy_foldMap': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Lazy_foldableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldableLazy'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Lazy_foldableWithIndexLazy': $v = (object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_foldr = ($GLOBALS['Data_Lazy_foldr'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldr'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_Lazy_foldr)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_foldl = ($GLOBALS['Data_Lazy_foldl'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldl'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_Lazy_foldl)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_foldMap = ($GLOBALS['Data_Lazy_foldMap'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldMap'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$foldMap1 = ($__global_Data_Lazy_foldMap)($dictMonoid);
    $__res = (function() use ($foldMap1, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($foldMap1, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap1)(($f)($__global_Data_Unit_unit));
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
$__global_Data_Lazy_foldableLazy = ($GLOBALS['Data_Lazy_foldableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldableLazy'));
    $__res = $__global_Data_Lazy_foldableLazy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Lazy_traversableLazy': $v = (object)["traverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_compose = ($GLOBALS['Data_Lazy_compose'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_compose'));
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_0;
    $__res = (function() use ($map1, $__global_Data_Lazy_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Data_Lazy_force) {
  $__fn = function($f, $l = null) use ($map1, $__global_Data_Lazy_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($f, &$__fn) { return $__fn($f, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map1)(($__global_Data_Lazy_compose)($__global_Data_Lazy_defer, $__global_Data_Function_const), ($f)(($__global_Data_Lazy_force)($l)));
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
$__global_Data_Lazy_compose = ($GLOBALS['Data_Lazy_compose'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_compose'));
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_1;
    $__res = (function() use ($map1, $__global_Data_Lazy_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Data_Lazy_force) {
  $__fn = function($l) use ($map1, $__global_Data_Lazy_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map1)(($__global_Data_Lazy_compose)($__global_Data_Lazy_defer, $__global_Data_Function_const), ($__global_Data_Lazy_force)($l));
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
$__global_Data_Lazy_functorLazy = ($GLOBALS['Data_Lazy_functorLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorLazy'));
    $__res = $__global_Data_Lazy_functorLazy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_foldableLazy = ($GLOBALS['Data_Lazy_foldableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldableLazy'));
    $__res = $__global_Data_Lazy_foldableLazy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Lazy_traverse': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Lazy_traversableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_traversableLazy'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Lazy_traversableWithIndexLazy': $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_traverse = ($GLOBALS['Data_Lazy_traverse'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_traverse'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$traverse1 = ($__global_Data_Lazy_traverse)($dictApplicative);
    $__res = (function() use ($traverse1, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($traverse1, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse1)(($f)($__global_Data_Unit_unit));
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
$__global_Data_Lazy_functorWithIndexLazy = ($GLOBALS['Data_Lazy_functorWithIndexLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorWithIndexLazy'));
    $__res = $__global_Data_Lazy_functorWithIndexLazy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_foldableWithIndexLazy = ($GLOBALS['Data_Lazy_foldableWithIndexLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldableWithIndexLazy'));
    $__res = $__global_Data_Lazy_foldableWithIndexLazy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_traversableLazy = ($GLOBALS['Data_Lazy_traversableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_traversableLazy'));
    $__res = $__global_Data_Lazy_traversableLazy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Lazy_foldable1Lazy': $v = (object)["foldMap1" => (function() {
  $__fn = function($dictSemigroup, $f = null, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($l) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $l); };
    if ($__num === 1) return function($f, $l = null) use ($dictSemigroup, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictSemigroup, $f, $l);
      if ($__num2 === 1) return function($l) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $l); };
      return phpurs_curry_fallback($__fn, [$dictSemigroup], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
    $__res = ($f)(($__global_Data_Lazy_force)($l));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldr1" => (function() {
  $__fn = function($v, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($v, &$__fn) { return $__fn($v, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
    $__res = ($__global_Data_Lazy_force)($l);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl1" => (function() {
  $__fn = function($v, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($v, &$__fn) { return $__fn($v, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
    $__res = ($__global_Data_Lazy_force)($l);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_foldableLazy = ($GLOBALS['Data_Lazy_foldableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldableLazy'));
    $__res = $__global_Data_Lazy_foldableLazy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Lazy_traversable1Lazy': $v = (object)["traverse1" => (function() use ($dict) {
  $__fn = function($dictApply) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_compose = ($GLOBALS['Data_Lazy_compose'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_compose'));
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_0;
    $__res = (function() use ($map1, $__global_Data_Lazy_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Data_Lazy_force) {
  $__fn = function($f, $l = null) use ($map1, $__global_Data_Lazy_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($f, &$__fn) { return $__fn($f, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map1)(($__global_Data_Lazy_compose)($__global_Data_Lazy_defer, $__global_Data_Function_const), ($f)(($__global_Data_Lazy_force)($l)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequence1" => (function() use ($dict) {
  $__fn = function($dictApply) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_compose = ($GLOBALS['Data_Lazy_compose'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_compose'));
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_1;
    $__res = (function() use ($map1, $__global_Data_Lazy_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Data_Lazy_force) {
  $__fn = function($l) use ($map1, $__global_Data_Lazy_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map1)(($__global_Data_Lazy_compose)($__global_Data_Lazy_defer, $__global_Data_Function_const), ($__global_Data_Lazy_force)($l));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_foldable1Lazy = ($GLOBALS['Data_Lazy_foldable1Lazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldable1Lazy'));
    $__res = $__global_Data_Lazy_foldable1Lazy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_traversableLazy = ($GLOBALS['Data_Lazy_traversableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_traversableLazy'));
    $__res = $__global_Data_Lazy_traversableLazy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Lazy_extendLazy': $v = (object)["extend" => (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, &$__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
    $__res = ($__global_Data_Lazy_defer)((function() use ($f, $x) {
  $__fn = function($v) use ($f, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)($x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_functorLazy = ($GLOBALS['Data_Lazy_functorLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorLazy'));
    $__res = $__global_Data_Lazy_functorLazy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Lazy_eq1Lazy': $v = (object)["eq1" => (function() use ($dict) {
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
      case 'Data_Lazy_ord1Lazy': $v = (object)["compare1" => (function() use ($dict) {
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
$__global_Data_Lazy_eq1Lazy = ($GLOBALS['Data_Lazy_eq1Lazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_eq1Lazy'));
    $__res = $__global_Data_Lazy_eq1Lazy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Lazy_comonadLazy': $v = (object)["extract" => ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')), "Extend0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_extendLazy = ($GLOBALS['Data_Lazy_extendLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_extendLazy'));
    $__res = $__global_Data_Lazy_extendLazy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Lazy_applyLazy': $v = (object)["apply" => (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, &$__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
    $__res = ($__global_Data_Lazy_defer)((function() use ($__global_Data_Lazy_force, $f, $x) {
  $__fn = function($v) use ($__global_Data_Lazy_force, $f, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Lazy_force)($f, ($__global_Data_Lazy_force)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_functorLazy = ($GLOBALS['Data_Lazy_functorLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorLazy'));
    $__res = $__global_Data_Lazy_functorLazy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Lazy_apply': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Lazy_applyLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_applyLazy'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Lazy_bindLazy': $v = (object)["bind" => (function() {
  $__fn = function($l, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($l, &$__fn) { return $__fn($l, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
    $__res = ($__global_Data_Lazy_defer)((function() use ($__global_Data_Lazy_force, $f, $l) {
  $__fn = function($v) use ($__global_Data_Lazy_force, $f, $l, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Lazy_force)(($f)(($__global_Data_Lazy_force)($l)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_applyLazy = ($GLOBALS['Data_Lazy_applyLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_applyLazy'));
    $__res = $__global_Data_Lazy_applyLazy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Lazy_applicativeLazy': $v = (object)["pure" => (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
    $__res = ($__global_Data_Lazy_defer)((function() use ($a) {
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
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_applyLazy = ($GLOBALS['Data_Lazy_applyLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_applyLazy'));
    $__res = $__global_Data_Lazy_applyLazy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Lazy_monadLazy': $v = (object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_applicativeLazy = ($GLOBALS['Data_Lazy_applicativeLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_applicativeLazy'));
    $__res = $__global_Data_Lazy_applicativeLazy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_bindLazy = ($GLOBALS['Data_Lazy_bindLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_bindLazy'));
    $__res = $__global_Data_Lazy_bindLazy;
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




// Data_Lazy_showLazy
function Data_Lazy_showLazy($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_showLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_append = ($GLOBALS['Data_Lazy_append'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_append'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__case_0 = $dictShow;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show = $__case_res_0;
    $__res = (object)["show" => (function() use ($__global_Data_Lazy_append, $show, $__global_Data_Lazy_force) {
  $__fn = function($x) use ($__global_Data_Lazy_append, $show, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Lazy_append)("(defer \_ -> ", ($__global_Data_Lazy_append)(($show)(($__global_Data_Lazy_force)($x)), ")"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_showLazy'] = __NAMESPACE__ . '\\Data_Lazy_showLazy';

// Data_Lazy_semiringLazy
function Data_Lazy_semiringLazy($dictSemiring) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_semiringLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__case_0 = $dictSemiring;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
$add = $__case_res_0;
$__case_0 = $dictSemiring;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->zero;
} else {
throw new \Exception("Pattern match failure");
};
$zero = $__case_res_1;
$__case_0 = $dictSemiring;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->mul;
} else {
throw new \Exception("Pattern match failure");
};
$mul = $__case_res_2;
$__case_0 = $dictSemiring;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->one;
} else {
throw new \Exception("Pattern match failure");
};
$one = $__case_res_3;
    $__res = (object)["add" => (function() use ($__global_Data_Lazy_defer, $add, $__global_Data_Lazy_force) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $add, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_defer)((function() use ($add, $__global_Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($add, $__global_Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($add)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "zero" => ($__global_Data_Lazy_defer)((function() use ($zero) {
  $__fn = function($v) use ($zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $zero;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "mul" => (function() use ($__global_Data_Lazy_defer, $mul, $__global_Data_Lazy_force) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $mul, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_defer)((function() use ($mul, $__global_Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($mul, $__global_Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($mul)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "one" => ($__global_Data_Lazy_defer)((function() use ($one) {
  $__fn = function($v) use ($one, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $one;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_semiringLazy'] = __NAMESPACE__ . '\\Data_Lazy_semiringLazy';

// Data_Lazy_semigroupLazy
function Data_Lazy_semigroupLazy($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_semigroupLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__case_0 = $dictSemigroup;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append1 = $__case_res_0;
    $__res = (object)["append" => (function() use ($__global_Data_Lazy_defer, $append1, $__global_Data_Lazy_force) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $append1, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_defer)((function() use ($append1, $__global_Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($append1, $__global_Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($append1)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_semigroupLazy'] = __NAMESPACE__ . '\\Data_Lazy_semigroupLazy';

// Data_Lazy_ringLazy
function Data_Lazy_ringLazy($dictRing) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_ringLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__case_0 = $dictRing;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sub;
} else {
throw new \Exception("Pattern match failure");
};
$sub = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
$add = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->zero;
} else {
throw new \Exception("Pattern match failure");
};
$zero = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->mul;
} else {
throw new \Exception("Pattern match failure");
};
$mul = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->one;
} else {
throw new \Exception("Pattern match failure");
};
$one = $__case_res_4;
$semiringLazy1 = (object)["add" => (function() use ($__global_Data_Lazy_defer, $add, $__global_Data_Lazy_force) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $add, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_defer)((function() use ($add, $__global_Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($add, $__global_Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($add)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "zero" => ($__global_Data_Lazy_defer)((function() use ($zero) {
  $__fn = function($v) use ($zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $zero;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "mul" => (function() use ($__global_Data_Lazy_defer, $mul, $__global_Data_Lazy_force) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $mul, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_defer)((function() use ($mul, $__global_Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($mul, $__global_Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($mul)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "one" => ($__global_Data_Lazy_defer)((function() use ($one) {
  $__fn = function($v) use ($one, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $one;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())];
    $__res = (object)["sub" => (function() use ($__global_Data_Lazy_defer, $sub, $__global_Data_Lazy_force) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $sub, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_defer)((function() use ($sub, $__global_Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($sub, $__global_Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($sub)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Semiring0" => (function() use ($semiringLazy1) {
  $__fn = function($__dollar____unused) use ($semiringLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semiringLazy1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_ringLazy'] = __NAMESPACE__ . '\\Data_Lazy_ringLazy';

// Data_Lazy_monoidLazy
function Data_Lazy_monoidLazy($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_monoidLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__case_0 = $dictMonoid;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append1 = $__case_res_1;
$semigroupLazy1 = (object)["append" => (function() use ($__global_Data_Lazy_defer, $append1, $__global_Data_Lazy_force) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $append1, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_defer)((function() use ($append1, $__global_Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($append1, $__global_Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($append1)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["mempty" => ($__global_Data_Lazy_defer)((function() use ($mempty) {
  $__fn = function($v) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $mempty;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupLazy1) {
  $__fn = function($__dollar____unused) use ($semigroupLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupLazy1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_monoidLazy'] = __NAMESPACE__ . '\\Data_Lazy_monoidLazy';

















// Data_Lazy_eqLazy
function Data_Lazy_eqLazy($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_eqLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq = $__case_res_0;
    $__res = (object)["eq" => (function() use ($eq, $__global_Data_Lazy_force) {
  $__fn = function($x, $y = null) use ($eq, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($eq)(($__global_Data_Lazy_force)($x), ($__global_Data_Lazy_force)($y));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_eqLazy'] = __NAMESPACE__ . '\\Data_Lazy_eqLazy';

// Data_Lazy_ordLazy
function Data_Lazy_ordLazy($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_ordLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
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
$eq = $__case_res_1;
$eqLazy1 = (object)["eq" => (function() use ($eq, $__global_Data_Lazy_force) {
  $__fn = function($x, $y = null) use ($eq, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($eq)(($__global_Data_Lazy_force)($x), ($__global_Data_Lazy_force)($y));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["compare" => (function() use ($compare, $__global_Data_Lazy_force) {
  $__fn = function($x, $y = null) use ($compare, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($compare)(($__global_Data_Lazy_force)($x), ($__global_Data_Lazy_force)($y));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqLazy1) {
  $__fn = function($__dollar____unused) use ($eqLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqLazy1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_ordLazy'] = __NAMESPACE__ . '\\Data_Lazy_ordLazy';




// Data_Lazy_commutativeRingLazy
function Data_Lazy_commutativeRingLazy($dictCommutativeRing) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_commutativeRingLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sub;
} else {
throw new \Exception("Pattern match failure");
};
$sub = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
$add = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->zero;
} else {
throw new \Exception("Pattern match failure");
};
$zero = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->mul;
} else {
throw new \Exception("Pattern match failure");
};
$mul = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->one;
} else {
throw new \Exception("Pattern match failure");
};
$one = $__case_res_4;
$semiringLazy1 = (object)["add" => (function() use ($__global_Data_Lazy_defer, $add, $__global_Data_Lazy_force) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $add, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_defer)((function() use ($add, $__global_Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($add, $__global_Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($add)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "zero" => ($__global_Data_Lazy_defer)((function() use ($zero) {
  $__fn = function($v) use ($zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $zero;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "mul" => (function() use ($__global_Data_Lazy_defer, $mul, $__global_Data_Lazy_force) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $mul, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_defer)((function() use ($mul, $__global_Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($mul, $__global_Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($mul)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "one" => ($__global_Data_Lazy_defer)((function() use ($one) {
  $__fn = function($v) use ($one, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $one;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())];
$ringLazy1 = (object)["sub" => (function() use ($__global_Data_Lazy_defer, $sub, $__global_Data_Lazy_force) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $sub, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_defer)((function() use ($sub, $__global_Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($sub, $__global_Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($sub)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Semiring0" => (function() use ($semiringLazy1) {
  $__fn = function($__dollar____unused) use ($semiringLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semiringLazy1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["Ring0" => (function() use ($ringLazy1) {
  $__fn = function($__dollar____unused) use ($ringLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ringLazy1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_commutativeRingLazy'] = __NAMESPACE__ . '\\Data_Lazy_commutativeRingLazy';

// Data_Lazy_euclideanRingLazy
function Data_Lazy_euclideanRingLazy($dictEuclideanRing) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_euclideanRingLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__global_Data_Lazy_compose = ($GLOBALS['Data_Lazy_compose'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_compose'));
$__case_0 = $dictEuclideanRing;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->div;
} else {
throw new \Exception("Pattern match failure");
};
$div = $__case_res_0;
$__case_0 = $dictEuclideanRing;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->mod;
} else {
throw new \Exception("Pattern match failure");
};
$mod = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->sub;
} else {
throw new \Exception("Pattern match failure");
};
$sub = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
$add = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->zero;
} else {
throw new \Exception("Pattern match failure");
};
$zero = $__case_res_4;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->mul;
} else {
throw new \Exception("Pattern match failure");
};
$mul = $__case_res_5;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->one;
} else {
throw new \Exception("Pattern match failure");
};
$one = $__case_res_6;
$semiringLazy1 = (object)["add" => (function() use ($__global_Data_Lazy_defer, $add, $__global_Data_Lazy_force) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $add, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_defer)((function() use ($add, $__global_Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($add, $__global_Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($add)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "zero" => ($__global_Data_Lazy_defer)((function() use ($zero) {
  $__fn = function($v) use ($zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $zero;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "mul" => (function() use ($__global_Data_Lazy_defer, $mul, $__global_Data_Lazy_force) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $mul, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_defer)((function() use ($mul, $__global_Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($mul, $__global_Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($mul)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "one" => ($__global_Data_Lazy_defer)((function() use ($one) {
  $__fn = function($v) use ($one, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $one;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())];
$ringLazy1 = (object)["sub" => (function() use ($__global_Data_Lazy_defer, $sub, $__global_Data_Lazy_force) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $sub, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_defer)((function() use ($sub, $__global_Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($sub, $__global_Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($sub)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Semiring0" => (function() use ($semiringLazy1) {
  $__fn = function($__dollar____unused) use ($semiringLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semiringLazy1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$commutativeRingLazy1 = (object)["Ring0" => (function() use ($ringLazy1) {
  $__fn = function($__dollar____unused) use ($ringLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ringLazy1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dictEuclideanRing;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->degree;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["degree" => ($__global_Data_Lazy_compose)($__case_res_7, $__global_Data_Lazy_force), "div" => (function() use ($__global_Data_Lazy_defer, $div, $__global_Data_Lazy_force) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $div, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_defer)((function() use ($div, $__global_Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($div, $__global_Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($div)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "mod" => (function() use ($__global_Data_Lazy_defer, $mod, $__global_Data_Lazy_force) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $mod, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_defer)((function() use ($mod, $__global_Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($mod, $__global_Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($mod)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "CommutativeRing0" => (function() use ($commutativeRingLazy1) {
  $__fn = function($__dollar____unused) use ($commutativeRingLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $commutativeRingLazy1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_euclideanRingLazy'] = __NAMESPACE__ . '\\Data_Lazy_euclideanRingLazy';

// Data_Lazy_boundedLazy
function Data_Lazy_boundedLazy($dictBounded) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_boundedLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__case_0 = $dictBounded;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->top;
} else {
throw new \Exception("Pattern match failure");
};
$top = $__case_res_0;
$__case_0 = $dictBounded;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
$bottom = $__case_res_1;
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
$eqLazy1 = (object)["eq" => (function() use ($eq, $__global_Data_Lazy_force) {
  $__fn = function($x, $y = null) use ($eq, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($eq)(($__global_Data_Lazy_force)($x), ($__global_Data_Lazy_force)($y));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
$ordLazy1 = (object)["compare" => (function() use ($compare, $__global_Data_Lazy_force) {
  $__fn = function($x, $y = null) use ($compare, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($compare)(($__global_Data_Lazy_force)($x), ($__global_Data_Lazy_force)($y));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqLazy1) {
  $__fn = function($__dollar____unused) use ($eqLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqLazy1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["top" => ($__global_Data_Lazy_defer)((function() use ($top) {
  $__fn = function($v) use ($top, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $top;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "bottom" => ($__global_Data_Lazy_defer)((function() use ($bottom) {
  $__fn = function($v) use ($bottom, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bottom;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "Ord0" => (function() use ($ordLazy1) {
  $__fn = function($__dollar____unused) use ($ordLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ordLazy1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_boundedLazy'] = __NAMESPACE__ . '\\Data_Lazy_boundedLazy';




// Data_Lazy_heytingAlgebraLazy
function Data_Lazy_heytingAlgebraLazy($dictHeytingAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_heytingAlgebraLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Lazy_apply = ($GLOBALS['Data_Lazy_apply'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_apply'));
$__global_Data_Lazy_map = ($GLOBALS['Data_Lazy_map'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_map'));
$__case_0 = $dictHeytingAlgebra;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->ff;
} else {
throw new \Exception("Pattern match failure");
};
$ff = $__case_res_0;
$__case_0 = $dictHeytingAlgebra;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->tt;
} else {
throw new \Exception("Pattern match failure");
};
$tt = $__case_res_1;
$__case_0 = $dictHeytingAlgebra;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->implies;
} else {
throw new \Exception("Pattern match failure");
};
$implies = $__case_res_2;
$__case_0 = $dictHeytingAlgebra;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->conj;
} else {
throw new \Exception("Pattern match failure");
};
$conj = $__case_res_3;
$__case_0 = $dictHeytingAlgebra;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->disj;
} else {
throw new \Exception("Pattern match failure");
};
$disj = $__case_res_4;
$__case_0 = $dictHeytingAlgebra;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->not;
} else {
throw new \Exception("Pattern match failure");
};
$not = $__case_res_5;
    $__res = (object)["ff" => ($__global_Data_Lazy_defer)((function() use ($ff) {
  $__fn = function($v) use ($ff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "tt" => ($__global_Data_Lazy_defer)((function() use ($tt) {
  $__fn = function($v) use ($tt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $tt;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "implies" => (function() use ($__global_Data_Lazy_apply, $__global_Data_Lazy_map, $implies) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_apply, $__global_Data_Lazy_map, $implies, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_apply)(($__global_Data_Lazy_map)($implies, $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "conj" => (function() use ($__global_Data_Lazy_apply, $__global_Data_Lazy_map, $conj) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_apply, $__global_Data_Lazy_map, $conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_apply)(($__global_Data_Lazy_map)($conj, $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "disj" => (function() use ($__global_Data_Lazy_apply, $__global_Data_Lazy_map, $disj) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_apply, $__global_Data_Lazy_map, $disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_apply)(($__global_Data_Lazy_map)($disj, $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "not" => (function() use ($__global_Data_Lazy_map, $not) {
  $__fn = function($a) use ($__global_Data_Lazy_map, $not, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Lazy_map)($not, $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_heytingAlgebraLazy'] = __NAMESPACE__ . '\\Data_Lazy_heytingAlgebraLazy';

// Data_Lazy_booleanAlgebraLazy
function Data_Lazy_booleanAlgebraLazy($dictBooleanAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_booleanAlgebraLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Lazy_apply = ($GLOBALS['Data_Lazy_apply'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_apply'));
$__global_Data_Lazy_map = ($GLOBALS['Data_Lazy_map'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_map'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->ff;
} else {
throw new \Exception("Pattern match failure");
};
$ff = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->tt;
} else {
throw new \Exception("Pattern match failure");
};
$tt = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->implies;
} else {
throw new \Exception("Pattern match failure");
};
$implies = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->conj;
} else {
throw new \Exception("Pattern match failure");
};
$conj = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->disj;
} else {
throw new \Exception("Pattern match failure");
};
$disj = $__case_res_4;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->not;
} else {
throw new \Exception("Pattern match failure");
};
$not = $__case_res_5;
$heytingAlgebraLazy1 = (object)["ff" => ($__global_Data_Lazy_defer)((function() use ($ff) {
  $__fn = function($v) use ($ff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "tt" => ($__global_Data_Lazy_defer)((function() use ($tt) {
  $__fn = function($v) use ($tt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $tt;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "implies" => (function() use ($__global_Data_Lazy_apply, $__global_Data_Lazy_map, $implies) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_apply, $__global_Data_Lazy_map, $implies, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_apply)(($__global_Data_Lazy_map)($implies, $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "conj" => (function() use ($__global_Data_Lazy_apply, $__global_Data_Lazy_map, $conj) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_apply, $__global_Data_Lazy_map, $conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_apply)(($__global_Data_Lazy_map)($conj, $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "disj" => (function() use ($__global_Data_Lazy_apply, $__global_Data_Lazy_map, $disj) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_apply, $__global_Data_Lazy_map, $disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Lazy_apply)(($__global_Data_Lazy_map)($disj, $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "not" => (function() use ($__global_Data_Lazy_map, $not) {
  $__fn = function($a) use ($__global_Data_Lazy_map, $not, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Lazy_map)($not, $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["HeytingAlgebra0" => (function() use ($heytingAlgebraLazy1) {
  $__fn = function($__dollar____unused) use ($heytingAlgebraLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $heytingAlgebraLazy1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_booleanAlgebraLazy'] = __NAMESPACE__ . '\\Data_Lazy_booleanAlgebraLazy';



