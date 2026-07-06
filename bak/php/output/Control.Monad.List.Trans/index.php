<?php

namespace Control\Monad\List\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.List.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
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
      case 'Control_Monad_List_Trans_compose': $v = (function() {
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
      case 'Control_Monad_List_Trans_map': $v = (function() {
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
      case 'Control_Monad_List_Trans_map1': $v = (function() {
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
      case 'Control_Monad_List_Trans_sub': $v = (function() {
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
      case 'Control_Monad_List_Trans_identity': $v = (function() {
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
      case 'Control_Monad_List_Trans_pure': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Lazy_applicativeLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_applicativeLazy'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Control_Monad_List_Trans_Done': $v = ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")); break;
      case 'Control_Monad_List_Trans_newtypeListT': $v = (object)["Coercible0" => (function() {
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
      case 'Control_Monad_List_Trans_monadTransListT': $v = (object)["lift" => (function() use ($dict) {
  $__fn = function($dictMonad) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$nil1 = ($__case_res_1)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
    $__res = (function() use ($map2, $__global_Data_Function_flip, $__global_Data_Lazy_defer, $nil1) {
  $__fn = function($fa) use ($map2, $__global_Data_Function_flip, $__global_Data_Lazy_defer, $nil1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map2)(($__global_Data_Function_flip)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_Lazy_defer)((function() use ($nil1) {
  $__fn = function($v) use ($nil1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $nil1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), $fa);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Control_Monad_List_Trans_lift': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Monad_List_Trans_monadTransListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_monadTransListT'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->lift;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };








// Control_Monad_List_Trans_Yield
function Control_Monad_List_Trans_Yield($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_Yield';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_Yield'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_Yield';

// Control_Monad_List_Trans_Skip
function Control_Monad_List_Trans_Skip($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_Skip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_Skip'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_Skip';


// Control_Monad_List_Trans_ListT
function Control_Monad_List_Trans_ListT($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_ListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_ListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_ListT';

// Control_Monad_List_Trans_wrapLazy
function Control_Monad_List_Trans_wrapLazy($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_wrapLazy';
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
$pure1 = $__case_res_0;
    $__res = (function() use ($pure1) {
  $__fn = function($v) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($v));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_wrapLazy'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_wrapLazy';

// Control_Monad_List_Trans_wrapEffect
function Control_Monad_List_Trans_wrapEffect($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_wrapEffect';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_List_Trans_compose = ($GLOBALS['Control_Monad_List_Trans_compose'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_compose'));
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__case_0 = $dictFunctor;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
    $__res = (function() use ($map2, $__global_Control_Monad_List_Trans_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__fn = function($v) use ($map2, $__global_Control_Monad_List_Trans_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map2)(($__global_Control_Monad_List_Trans_compose)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Control_Monad_List_Trans_compose)($__global_Data_Lazy_defer, $__global_Data_Function_const)), $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_wrapEffect'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_wrapEffect';

// Control_Monad_List_Trans_unfold
function Control_Monad_List_Trans_unfold($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_unfold';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
while (true) {
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
return (function() use ($__global_Data_Lazy_defer, $dict, $dictMonad, $map2) {
  $__fn = function($f, $z = null) use ($__global_Data_Lazy_defer, $dict, $dictMonad, $map2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Control_Monad_List_Trans_unfold = ($GLOBALS['Control_Monad_List_Trans_unfold'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_unfold'));
$g = (function() use ($__global_Data_Lazy_defer, $dict, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $f) {
  $__body = function($v) use ($__global_Data_Lazy_defer, $dict, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $f) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$z__prime__ = (($__case_0)->v0)->v0;
$a = (($__case_0)->v0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($__global_Data_Lazy_defer)((function() use ($dict, $__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $f, $z__prime__) {
  $__fn = function($v1) use ($dict, $__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $f, $z__prime__, &$__fn) {
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
$map2 = $__case_res_1;
    $__res = ((function() use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $map2) {
  $__fn = function($f, $z = null) use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $map2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$g = (function() use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $f) {
  $__body = function($v) use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $f) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$z__prime__ = (($__case_0)->v0)->v0;
$a = (($__case_0)->v0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($__global_Data_Lazy_defer)((function() use ($__global_Control_Monad_List_Trans_unfold, $dictMonad, $f, $z__prime__) {
  $__fn = function($v1) use ($__global_Control_Monad_List_Trans_unfold, $dictMonad, $f, $z__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_List_Trans_unfold)($dictMonad, $f, $z__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
switch (($__case_0)->tag) {
case "Nothing":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  };
  $__fn = function($v) use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($map2)($g, ($f)($z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($f, $z__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
switch (($__case_0)->tag) {
case "Nothing":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  };
  $__fn = function($v) use ($__global_Data_Lazy_defer, $dict, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($map2)($g, ($f)($z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_unfold'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_unfold';

// Control_Monad_List_Trans_uncons
function Control_Monad_List_Trans_uncons($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_uncons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
while (true) {
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_1;
return (function() use ($pure1, $__global_Data_Lazy_force, $dict, $dictMonad, $bind) {
  $__body = function($v) use ($pure1, $__global_Data_Lazy_force, $dict, $dictMonad, $bind) {
    $__global_Control_Monad_List_Trans_uncons = ($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_uncons'));
    $__case_0 = $v;
    if (true) {
$l = $__case_0;
$g = (function() use ($pure1, $__global_Data_Lazy_force, $dict, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
  $__body = function($v1) use ($pure1, $__global_Data_Lazy_force, $dict, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ($pure1)(((function() {
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
})())($a, ($__global_Data_Lazy_force)($s))));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_3;
return ((function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind) {
  $__body = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind) {
    $__case_0 = $v;
    if (true) {
$l = $__case_0;
$g = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
  $__body = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ($pure1)(((function() {
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
})())($a, ($__global_Data_Lazy_force)($s))));
break;
case "Skip":
$s = ($__case_0)->v0;
return ($__global_Control_Monad_List_Trans_uncons)($dictMonad, ($__global_Data_Lazy_force)($s));
break;
case "Done":
return ($pure1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($bind)($l, $g);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Data_Lazy_force)($s));
break;
case "Done":
return ($pure1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure1, $__global_Data_Lazy_force, $dict, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($bind)($l, $g);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure1, $__global_Data_Lazy_force, $dict, $dictMonad, $bind, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_uncons'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_uncons';

// Control_Monad_List_Trans_tail
function Control_Monad_List_Trans_tail($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_tail';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__global_Control_Monad_List_Trans_uncons = ($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_uncons'));
$__global_Control_Monad_List_Trans_map = ($GLOBALS['Control_Monad_List_Trans_map'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map'));
$__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_2;
$uncons1 = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind) {
  $__body = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind) {
    $__case_0 = $v;
    if (true) {
$l = $__case_0;
$g = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
  $__body = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ($pure1)(((function() {
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
})())($a, ($__global_Data_Lazy_force)($s))));
break;
case "Skip":
$s = ($__case_0)->v0;
return ($__global_Control_Monad_List_Trans_uncons)($dictMonad, ($__global_Data_Lazy_force)($s));
break;
case "Done":
return ($pure1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($bind)($l, $g);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($map2, $__global_Control_Monad_List_Trans_map, $__global_Data_Tuple_snd, $uncons1) {
  $__fn = function($l) use ($map2, $__global_Control_Monad_List_Trans_map, $__global_Data_Tuple_snd, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map2)(($__global_Control_Monad_List_Trans_map)($__global_Data_Tuple_snd), ($uncons1)($l));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_tail'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_tail';

// Control_Monad_List_Trans_stepMap
function Control_Monad_List_Trans_stepMap($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_stepMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctor;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
    $__res = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_stepMap'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_stepMap';

// Control_Monad_List_Trans_takeWhile
function Control_Monad_List_Trans_takeWhile($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_takeWhile';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
while (true) {
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
return (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $dictApplicative, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dict, $dictApplicative, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_List_Trans_takeWhile = ($GLOBALS['Control_Monad_List_Trans_takeWhile'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_takeWhile'));
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__global_Control_Monad_List_Trans_takeWhile, $dictApplicative) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__global_Control_Monad_List_Trans_takeWhile, $dictApplicative) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = ($f)($a);
switch ($__case_0) {
case true:
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_2;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($__global_Control_Monad_List_Trans_map1)(((function() use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_takeWhile, $dictApplicative, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_takeWhile, $dictApplicative, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_takeWhile, $dictApplicative) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_takeWhile, $dictApplicative) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = ($f)($a);
switch ($__case_0) {
case true:
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_takeWhile)($dictApplicative, $f), $s));
break;
default:
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
};
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_takeWhile)($dictApplicative, $f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_takeWhile, $dictApplicative, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($f), $s));
break;
default:
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
};
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_1;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(((function() use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_takeWhile, $dictApplicative, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_takeWhile, $dictApplicative, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_takeWhile, $dictApplicative) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_takeWhile, $dictApplicative) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = ($f)($a);
switch ($__case_0) {
case true:
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_takeWhile)($dictApplicative, $f), $s));
break;
default:
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
};
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_takeWhile)($dictApplicative, $f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_takeWhile, $dictApplicative, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__global_Control_Monad_List_Trans_takeWhile, $dictApplicative, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_takeWhile'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_takeWhile';

// Control_Monad_List_Trans_scanl
function Control_Monad_List_Trans_scanl($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_scanl';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Control_Monad_List_Trans_unfold = ($GLOBALS['Control_Monad_List_Trans_unfold'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_unfold'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_1;
$unfold1 = (function() use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $map2) {
  $__fn = function($f, $z = null) use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $map2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$g = (function() use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $f) {
  $__body = function($v) use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $f) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$z__prime__ = (($__case_0)->v0)->v0;
$a = (($__case_0)->v0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($__global_Data_Lazy_defer)((function() use ($__global_Control_Monad_List_Trans_unfold, $dictMonad, $f, $z__prime__) {
  $__fn = function($v1) use ($__global_Control_Monad_List_Trans_unfold, $dictMonad, $f, $z__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_List_Trans_unfold)($dictMonad, $f, $z__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
switch (($__case_0)->tag) {
case "Nothing":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  };
  $__fn = function($v) use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($map2)($g, ($f)($z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($__global_Data_Lazy_force, $map2, $unfold1) {
  $__fn = function($f, $b = null, $l = null) use ($__global_Data_Lazy_force, $map2, $unfold1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($l) use ($f, $b, &$__fn) { return $__fn($f, $b, $l); };
    if ($__num === 1) return function($b, $l = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b, $l);
      if ($__num2 === 1) return function($l) use ($f, $b, &$__fn) { return $__fn($f, $b, $l); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$g = (function() use ($f, $__global_Data_Lazy_force, $map2) {
  $__body = function($v) use ($f, $__global_Data_Lazy_force, $map2) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$b__prime__ = ($__case_0)->v0;
$l__prime__ = ($__case_0)->v1;
$h = (function() use ($f, $b__prime__, $__global_Data_Lazy_force) {
  $__body = function($v1) use ($f, $b__prime__, $__global_Data_Lazy_force) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$b__prime____prime__ = ($f)($b__prime__, $a);
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
})())(((function() {
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
})())($b__prime____prime__, ($__global_Data_Lazy_force)($s)), $b__prime__));
break;
case "Skip":
$s = ($__case_0)->v0;
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
})())(((function() {
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
})())($b__prime__, ($__global_Data_Lazy_force)($s)), $b__prime__));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f, $b__prime__, $__global_Data_Lazy_force, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($map2)($h, $l__prime__);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Data_Lazy_force, $map2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($unfold1)($g, ((function() {
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
})())($b, $l));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_scanl'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_scanl';

// Control_Monad_List_Trans_prepend'
function Control_Monad_List_Trans_prepend__prime__($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_prepend__prime__';
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
$pure1 = $__case_res_0;
    $__res = (function() use ($pure1) {
  $__fn = function($h, $t = null) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($h, $t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_prepend__prime__'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_prepend__prime__';

// Control_Monad_List_Trans_prepend
function Control_Monad_List_Trans_prepend($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_prepend';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__case_0 = $dictApplicative;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$prepend__prime__1 = (function() use ($pure1) {
  $__fn = function($h, $t = null) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($h, $t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__fn = function($h, $t = null) use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($prepend__prime__1)($h, ($__global_Data_Lazy_defer)(($__global_Data_Function_const)($t)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_prepend'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_prepend';

// Control_Monad_List_Trans_nil
function Control_Monad_List_Trans_nil($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_nil';
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
    $__res = ($__case_res_0)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_nil'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_nil';

// Control_Monad_List_Trans_singleton
function Control_Monad_List_Trans_singleton($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_singleton';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__case_0 = $dictApplicative;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$prepend__prime__1 = (function() use ($pure1) {
  $__fn = function($h, $t = null) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($h, $t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$prepend1 = (function() use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__fn = function($h, $t = null) use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($prepend__prime__1)($h, ($__global_Data_Lazy_defer)(($__global_Data_Function_const)($t)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictApplicative;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$nil1 = ($__case_res_1)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
    $__res = (function() use ($prepend1, $nil1) {
  $__fn = function($a) use ($prepend1, $nil1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($prepend1)($a, $nil1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_singleton'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_singleton';

// Control_Monad_List_Trans_take
function Control_Monad_List_Trans_take($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_take';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
$__global_Control_Monad_List_Trans_sub = ($GLOBALS['Control_Monad_List_Trans_sub'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_sub'));
while (true) {
$__case_0 = $dictApplicative;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$nil1 = ($__case_res_0)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_1;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
return (function() use ($nil1, $__global_Control_Monad_List_Trans_map1, $dictApplicative, $dict, $__global_Control_Monad_List_Trans_sub, $stepMap1) {
  $__body = function($v, $v1) use ($nil1, $__global_Control_Monad_List_Trans_map1, $dictApplicative, $dict, $__global_Control_Monad_List_Trans_sub, $stepMap1) {
    $__global_Control_Monad_List_Trans_take = ($GLOBALS['Control_Monad_List_Trans_take'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_take'));
    $__case_0 = $v;
    $__case_1 = $v1;
    switch ($__case_0) {
case 0:
return $nil1;
break;
default:
$n = $__case_0;
$fa = $__case_1;
$f = (function() use ($__global_Control_Monad_List_Trans_map1, $dictApplicative, $dict, $__global_Control_Monad_List_Trans_take, $__global_Control_Monad_List_Trans_sub, $n) {
  $__body = function($v2) use ($__global_Control_Monad_List_Trans_map1, $dictApplicative, $dict, $__global_Control_Monad_List_Trans_take, $__global_Control_Monad_List_Trans_sub, $n) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dictApplicative;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$nil1 = ($__case_res_4)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_5;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($__global_Control_Monad_List_Trans_map1)(((function() use ($nil1, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_take, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $stepMap1) {
  $__body = function($v, $v1) use ($nil1, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_take, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $stepMap1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch ($__case_0) {
case 0:
return $nil1;
break;
default:
$n = $__case_0;
$fa = $__case_1;
$f = (function() use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_take, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $n) {
  $__body = function($v2) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_take, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $n) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_take)($dictApplicative, ($__global_Control_Monad_List_Trans_sub)($n, 1)), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_take)($dictApplicative, $n), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v2) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_take, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $n, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($stepMap1)($f, $fa);
break;
};
  };
  $__fn = function($v, $v1 = null) use ($nil1, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_take, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $stepMap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_sub)($n, 1)), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dictApplicative;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$nil1 = ($__case_res_2)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_3;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(((function() use ($nil1, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_take, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $stepMap1) {
  $__body = function($v, $v1) use ($nil1, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_take, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $stepMap1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch ($__case_0) {
case 0:
return $nil1;
break;
default:
$n = $__case_0;
$fa = $__case_1;
$f = (function() use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_take, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $n) {
  $__body = function($v2) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_take, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $n) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_take)($dictApplicative, ($__global_Control_Monad_List_Trans_sub)($n, 1)), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_take)($dictApplicative, $n), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v2) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_take, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $n, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($stepMap1)($f, $fa);
break;
};
  };
  $__fn = function($v, $v1 = null) use ($nil1, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_take, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $stepMap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($n), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v2) use ($__global_Control_Monad_List_Trans_map1, $dictApplicative, $dict, $__global_Control_Monad_List_Trans_take, $__global_Control_Monad_List_Trans_sub, $n, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($stepMap1)($f, $fa);
break;
};
  };
  $__fn = function($v, $v1 = null) use ($nil1, $__global_Control_Monad_List_Trans_map1, $dictApplicative, $dict, $__global_Control_Monad_List_Trans_sub, $stepMap1, $__body, &$__fn) {
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
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_take'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_take';

// Control_Monad_List_Trans_zipWith'
function Control_Monad_List_Trans_zipWith__prime__($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_zipWith__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_List_Trans_compose = ($GLOBALS['Control_Monad_List_Trans_compose'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_compose'));
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__global_Control_Monad_List_Trans_uncons = ($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_uncons'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
while (true) {
$Applicative0 = (($dictMonad)->Applicative0)($__global_Prim_undefined);
$__case_0 = $Applicative0;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$__case_0 = $Applicative0;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$nil1 = ($__case_res_1)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
$Bind1 = (($dictMonad)->Bind1)($__global_Prim_undefined);
$Functor0 = (((($Bind1)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_2;
$__case_0 = $Applicative0;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_3;
$prepend__prime__1 = (function() use ($pure1) {
  $__fn = function($h, $t = null) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($h, $t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $Functor0;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_4;
$wrapEffect1 = (function() use ($map2, $__global_Control_Monad_List_Trans_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__fn = function($v) use ($map2, $__global_Control_Monad_List_Trans_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map2)(($__global_Control_Monad_List_Trans_compose)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Control_Monad_List_Trans_compose)($__global_Data_Lazy_defer, $__global_Data_Function_const)), $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $Bind1;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_5;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_6;
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_7;
$uncons1 = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind) {
  $__body = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind) {
    $__case_0 = $v;
    if (true) {
$l = $__case_0;
$g = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
  $__body = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ($pure1)(((function() {
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
})())($a, ($__global_Data_Lazy_force)($s))));
break;
case "Skip":
$s = ($__case_0)->v0;
return ($__global_Control_Monad_List_Trans_uncons)($dictMonad, ($__global_Data_Lazy_force)($s));
break;
case "Done":
return ($pure1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($bind)($l, $g);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return (function() use ($pure1, $nil1, $map2, $__global_Data_Function_flip, $prepend__prime__1, $__global_Data_Lazy_defer, $dictMonad, $__global_Prim_undefined, $__global_Control_Monad_List_Trans_compose, $__global_Data_Function_const, $dict, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $wrapEffect1, $bind, $uncons1) {
  $__fn = function($f) use ($pure1, $nil1, $map2, $__global_Data_Function_flip, $prepend__prime__1, $__global_Data_Lazy_defer, $dictMonad, $__global_Prim_undefined, $__global_Control_Monad_List_Trans_compose, $__global_Data_Function_const, $dict, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $wrapEffect1, $bind, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_List_Trans_zipWith__prime__ = ($GLOBALS['Control_Monad_List_Trans_zipWith__prime__'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_zipWith__prime__'));
$g = (function() use ($pure1, $nil1, $map2, $__global_Data_Function_flip, $prepend__prime__1, $__global_Data_Lazy_defer, $dictMonad, $__global_Prim_undefined, $__global_Control_Monad_List_Trans_compose, $__global_Data_Function_const, $dict, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $__global_Control_Monad_List_Trans_zipWith__prime__, $f) {
  $__body = function($v, $v1) use ($pure1, $nil1, $map2, $__global_Data_Function_flip, $prepend__prime__1, $__global_Data_Lazy_defer, $dictMonad, $__global_Prim_undefined, $__global_Control_Monad_List_Trans_compose, $__global_Data_Function_const, $dict, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $__global_Control_Monad_List_Trans_zipWith__prime__, $f) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nothing")) {
return ($pure1)($nil1);
} else {
if ((($__case_0)->tag === "Nothing")) {
return ($pure1)($nil1);
} else {
if ((((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple")) && ((($__case_1)->tag === "Just") && ((($__case_1)->v0)->tag === "Tuple")))) {
$ha = (($__case_0)->v0)->v0;
$ta = (($__case_0)->v0)->v1;
$hb = (($__case_1)->v0)->v0;
$tb = (($__case_1)->v0)->v1;
return ($map2)(($__global_Data_Function_flip)($prepend__prime__1, ($__global_Data_Lazy_defer)((function() use ($dictMonad, $__global_Prim_undefined, $__global_Control_Monad_List_Trans_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const, $dict, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $__global_Data_Function_flip, $__global_Control_Monad_List_Trans_zipWith__prime__, $f, $ta, $tb) {
  $__fn = function($v2) use ($dictMonad, $__global_Prim_undefined, $__global_Control_Monad_List_Trans_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const, $dict, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $__global_Data_Function_flip, $__global_Control_Monad_List_Trans_zipWith__prime__, $f, $ta, $tb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Applicative0 = (($dictMonad)->Applicative0)($__global_Prim_undefined);
$__case_0 = $Applicative0;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_8;
$__case_0 = $Applicative0;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$nil1 = ($__case_res_9)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
$Bind1 = (($dictMonad)->Bind1)($__global_Prim_undefined);
$Functor0 = (((($Bind1)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_10;
$__case_0 = $Applicative0;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_11;
$prepend__prime__1 = (function() use ($pure1) {
  $__fn = function($h, $t = null) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($h, $t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $Functor0;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_12;
$wrapEffect1 = (function() use ($map2, $__global_Control_Monad_List_Trans_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__fn = function($v) use ($map2, $__global_Control_Monad_List_Trans_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map2)(($__global_Control_Monad_List_Trans_compose)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Control_Monad_List_Trans_compose)($__global_Data_Lazy_defer, $__global_Data_Function_const)), $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $Bind1;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_13;
$__case_0 = $dict;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_14;
$__case_0 = $dict;
$__case_res_15 = null;
if (true) {
$v = $__case_0;
$__case_res_15 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_15;
$uncons1 = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind) {
  $__body = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind) {
    $__case_0 = $v;
    if (true) {
$l = $__case_0;
$g = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
  $__body = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ($pure1)(((function() {
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
})())($a, ($__global_Data_Lazy_force)($s))));
break;
case "Skip":
$s = ($__case_0)->v0;
return ($__global_Control_Monad_List_Trans_uncons)($dictMonad, ($__global_Data_Lazy_force)($s));
break;
case "Done":
return ($pure1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($bind)($l, $g);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ((function() use ($pure1, $nil1, $map2, $__global_Data_Function_flip, $prepend__prime__1, $__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $wrapEffect1, $bind, $uncons1) {
  $__fn = function($f) use ($pure1, $nil1, $map2, $__global_Data_Function_flip, $prepend__prime__1, $__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $wrapEffect1, $bind, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($pure1, $nil1, $map2, $__global_Data_Function_flip, $prepend__prime__1, $__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $f) {
  $__body = function($v, $v1) use ($pure1, $nil1, $map2, $__global_Data_Function_flip, $prepend__prime__1, $__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $f) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nothing")) {
return ($pure1)($nil1);
} else {
if ((($__case_0)->tag === "Nothing")) {
return ($pure1)($nil1);
} else {
if ((((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple")) && ((($__case_1)->tag === "Just") && ((($__case_1)->v0)->tag === "Tuple")))) {
$ha = (($__case_0)->v0)->v0;
$ta = (($__case_0)->v0)->v1;
$hb = (($__case_1)->v0)->v0;
$tb = (($__case_1)->v0)->v1;
return ($map2)(($__global_Data_Function_flip)($prepend__prime__1, ($__global_Data_Lazy_defer)((function() use ($__global_Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $f, $ta, $tb) {
  $__fn = function($v2) use ($__global_Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $f, $ta, $tb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_List_Trans_zipWith__prime__)($dictMonad, $f, $ta, $tb);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($f)($ha, $hb));
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v, $v1 = null) use ($pure1, $nil1, $map2, $__global_Data_Function_flip, $prepend__prime__1, $__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $f, $__body, &$__fn) {
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
$loop = (function() use ($wrapEffect1, $bind, $uncons1, $g) {
  $__fn = function($fa, $fb = null) use ($wrapEffect1, $bind, $uncons1, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($fb) use ($fa, &$__fn) { return $__fn($fa, $fb); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($wrapEffect1)(($bind)(($uncons1)($fa), (function() use ($bind, $uncons1, $fb, $g) {
  $__fn = function($ua) use ($bind, $uncons1, $fb, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($uncons1)($fb), (function() use ($g, $ua) {
  $__fn = function($ub) use ($g, $ua, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($g)($ua, $ub);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = $loop;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($f, $ta, $tb);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($f)($ha, $hb));
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v, $v1 = null) use ($pure1, $nil1, $map2, $__global_Data_Function_flip, $prepend__prime__1, $__global_Data_Lazy_defer, $dictMonad, $__global_Prim_undefined, $__global_Control_Monad_List_Trans_compose, $__global_Data_Function_const, $dict, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $__global_Control_Monad_List_Trans_zipWith__prime__, $f, $__body, &$__fn) {
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
$loop = (function() use ($wrapEffect1, $bind, $uncons1, $g) {
  $__fn = function($fa, $fb = null) use ($wrapEffect1, $bind, $uncons1, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($fb) use ($fa, &$__fn) { return $__fn($fa, $fb); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($wrapEffect1)(($bind)(($uncons1)($fa), (function() use ($bind, $uncons1, $fb, $g) {
  $__fn = function($ua) use ($bind, $uncons1, $fb, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($uncons1)($fb), (function() use ($g, $ua) {
  $__fn = function($ub) use ($g, $ua, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($g)($ua, $ub);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = $loop;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_zipWith__prime__'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_zipWith__prime__';

// Control_Monad_List_Trans_zipWith
function Control_Monad_List_Trans_zipWith($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_zipWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_List_Trans_compose = ($GLOBALS['Control_Monad_List_Trans_compose'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_compose'));
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__global_Control_Monad_List_Trans_uncons = ($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_uncons'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__global_Control_Monad_List_Trans_zipWith__prime__ = ($GLOBALS['Control_Monad_List_Trans_zipWith__prime__'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_zipWith__prime__'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$Applicative0 = (($dictMonad)->Applicative0)($__global_Prim_undefined);
$__case_0 = $Applicative0;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_1;
$__case_0 = $Applicative0;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$nil1 = ($__case_res_2)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
$Bind1 = (($dictMonad)->Bind1)($__global_Prim_undefined);
$Functor0 = (((($Bind1)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_3;
$__case_0 = $Applicative0;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_4;
$prepend__prime__1 = (function() use ($pure1) {
  $__fn = function($h, $t = null) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($h, $t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $Functor0;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_5;
$wrapEffect1 = (function() use ($map2, $__global_Control_Monad_List_Trans_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__fn = function($v) use ($map2, $__global_Control_Monad_List_Trans_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map2)(($__global_Control_Monad_List_Trans_compose)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Control_Monad_List_Trans_compose)($__global_Data_Lazy_defer, $__global_Data_Function_const)), $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $Bind1;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_6;
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_7;
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_8;
$uncons1 = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind) {
  $__body = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind) {
    $__case_0 = $v;
    if (true) {
$l = $__case_0;
$g = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
  $__body = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ($pure1)(((function() {
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
})())($a, ($__global_Data_Lazy_force)($s))));
break;
case "Skip":
$s = ($__case_0)->v0;
return ($__global_Control_Monad_List_Trans_uncons)($dictMonad, ($__global_Data_Lazy_force)($s));
break;
case "Done":
return ($pure1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($bind)($l, $g);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$zipWith__prime__1 = (function() use ($pure1, $nil1, $map2, $__global_Data_Function_flip, $prepend__prime__1, $__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $wrapEffect1, $bind, $uncons1) {
  $__fn = function($f) use ($pure1, $nil1, $map2, $__global_Data_Function_flip, $prepend__prime__1, $__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $wrapEffect1, $bind, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($pure1, $nil1, $map2, $__global_Data_Function_flip, $prepend__prime__1, $__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $f) {
  $__body = function($v, $v1) use ($pure1, $nil1, $map2, $__global_Data_Function_flip, $prepend__prime__1, $__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $f) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nothing")) {
return ($pure1)($nil1);
} else {
if ((($__case_0)->tag === "Nothing")) {
return ($pure1)($nil1);
} else {
if ((((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple")) && ((($__case_1)->tag === "Just") && ((($__case_1)->v0)->tag === "Tuple")))) {
$ha = (($__case_0)->v0)->v0;
$ta = (($__case_0)->v0)->v1;
$hb = (($__case_1)->v0)->v0;
$tb = (($__case_1)->v0)->v1;
return ($map2)(($__global_Data_Function_flip)($prepend__prime__1, ($__global_Data_Lazy_defer)((function() use ($__global_Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $f, $ta, $tb) {
  $__fn = function($v2) use ($__global_Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $f, $ta, $tb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_List_Trans_zipWith__prime__)($dictMonad, $f, $ta, $tb);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($f)($ha, $hb));
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v, $v1 = null) use ($pure1, $nil1, $map2, $__global_Data_Function_flip, $prepend__prime__1, $__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $f, $__body, &$__fn) {
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
$loop = (function() use ($wrapEffect1, $bind, $uncons1, $g) {
  $__fn = function($fa, $fb = null) use ($wrapEffect1, $bind, $uncons1, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($fb) use ($fa, &$__fn) { return $__fn($fa, $fb); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($wrapEffect1)(($bind)(($uncons1)($fa), (function() use ($bind, $uncons1, $fb, $g) {
  $__fn = function($ua) use ($bind, $uncons1, $fb, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($uncons1)($fb), (function() use ($g, $ua) {
  $__fn = function($ub) use ($g, $ua, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($g)($ua, $ub);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = $loop;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($pure1, $zipWith__prime__1) {
  $__fn = function($f) use ($pure1, $zipWith__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($pure1, $f) {
  $__fn = function($a, $b = null) use ($pure1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)(($f)($a, $b));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($zipWith__prime__1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_zipWith'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_zipWith';


// Control_Monad_List_Trans_mapMaybe
function Control_Monad_List_Trans_mapMaybe($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_mapMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Maybe_fromMaybe = ($GLOBALS['Data_Maybe_fromMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromMaybe'));
$__global_Control_Monad_List_Trans_map = ($GLOBALS['Control_Monad_List_Trans_map'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map'));
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
while (true) {
$__case_0 = $dictFunctor;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
return (function() use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $__global_Control_Monad_List_Trans_map1, $dictFunctor, $stepMap1) {
  $__fn = function($f) use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $__global_Control_Monad_List_Trans_map1, $dictFunctor, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_List_Trans_mapMaybe = ($GLOBALS['Control_Monad_List_Trans_mapMaybe'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_mapMaybe'));
$g = (function() use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $f, $__global_Control_Monad_List_Trans_map1, $dictFunctor, $__global_Control_Monad_List_Trans_mapMaybe) {
  $__body = function($v) use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $f, $__global_Control_Monad_List_Trans_map1, $dictFunctor, $__global_Control_Monad_List_Trans_mapMaybe) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dictFunctor;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_2;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
return ($__global_Data_Maybe_fromMaybe)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Control_Monad_List_Trans_map)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($f)($a)), ($__global_Control_Monad_List_Trans_map1)(((function() use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_mapMaybe, $dictFunctor, $stepMap1) {
  $__fn = function($f) use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_mapMaybe, $dictFunctor, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_mapMaybe, $dictFunctor) {
  $__body = function($v) use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_mapMaybe, $dictFunctor) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ($__global_Data_Maybe_fromMaybe)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Control_Monad_List_Trans_map)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($f)($a)), ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_mapMaybe)($dictFunctor, $f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_mapMaybe)($dictFunctor, $f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_mapMaybe, $dictFunctor, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dictFunctor;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_1;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(((function() use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_mapMaybe, $dictFunctor, $stepMap1) {
  $__fn = function($f) use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_mapMaybe, $dictFunctor, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_mapMaybe, $dictFunctor) {
  $__body = function($v) use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_mapMaybe, $dictFunctor) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ($__global_Data_Maybe_fromMaybe)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Control_Monad_List_Trans_map)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($f)($a)), ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_mapMaybe)($dictFunctor, $f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_mapMaybe)($dictFunctor, $f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_mapMaybe, $dictFunctor, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $f, $__global_Control_Monad_List_Trans_map1, $dictFunctor, $__global_Control_Monad_List_Trans_mapMaybe, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_mapMaybe'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_mapMaybe';

// Control_Monad_List_Trans_iterate
function Control_Monad_List_Trans_iterate($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_iterate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Control_Monad_List_Trans_unfold = ($GLOBALS['Control_Monad_List_Trans_unfold'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_unfold'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_1;
$unfold1 = (function() use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $map2) {
  $__fn = function($f, $z = null) use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $map2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$g = (function() use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $f) {
  $__body = function($v) use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $f) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$z__prime__ = (($__case_0)->v0)->v0;
$a = (($__case_0)->v0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($__global_Data_Lazy_defer)((function() use ($__global_Control_Monad_List_Trans_unfold, $dictMonad, $f, $z__prime__) {
  $__fn = function($v1) use ($__global_Control_Monad_List_Trans_unfold, $dictMonad, $f, $z__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_List_Trans_unfold)($dictMonad, $f, $z__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
switch (($__case_0)->tag) {
case "Nothing":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  };
  $__fn = function($v) use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($map2)($g, ($f)($z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($pure1, $unfold1) {
  $__fn = function($f, $a = null) use ($pure1, $unfold1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$g = (function() use ($pure1, $f) {
  $__fn = function($x) use ($pure1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure1)(((function() {
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
})())(($f)($x), $x)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($unfold1)($g, $a);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_iterate'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_iterate';

// Control_Monad_List_Trans_repeat
function Control_Monad_List_Trans_repeat($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_repeat';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Control_Monad_List_Trans_unfold = ($GLOBALS['Control_Monad_List_Trans_unfold'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_unfold'));
$__global_Control_Monad_List_Trans_identity = ($GLOBALS['Control_Monad_List_Trans_identity'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_identity'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_1;
$unfold1 = (function() use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $map2) {
  $__fn = function($f, $z = null) use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $map2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$g = (function() use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $f) {
  $__body = function($v) use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $f) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$z__prime__ = (($__case_0)->v0)->v0;
$a = (($__case_0)->v0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($__global_Data_Lazy_defer)((function() use ($__global_Control_Monad_List_Trans_unfold, $dictMonad, $f, $z__prime__) {
  $__fn = function($v1) use ($__global_Control_Monad_List_Trans_unfold, $dictMonad, $f, $z__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_List_Trans_unfold)($dictMonad, $f, $z__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
switch (($__case_0)->tag) {
case "Nothing":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  };
  $__fn = function($v) use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($map2)($g, ($f)($z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ((function() use ($pure1, $unfold1) {
  $__fn = function($f, $a = null) use ($pure1, $unfold1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$g = (function() use ($pure1, $f) {
  $__fn = function($x) use ($pure1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure1)(((function() {
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
})())(($f)($x), $x)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($unfold1)($g, $a);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($__global_Control_Monad_List_Trans_identity);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_repeat'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_repeat';

// Control_Monad_List_Trans_head
function Control_Monad_List_Trans_head($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_head';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__global_Control_Monad_List_Trans_uncons = ($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_uncons'));
$__global_Control_Monad_List_Trans_map = ($GLOBALS['Control_Monad_List_Trans_map'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map'));
$__global_Data_Tuple_fst = ($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_2;
$uncons1 = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind) {
  $__body = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind) {
    $__case_0 = $v;
    if (true) {
$l = $__case_0;
$g = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
  $__body = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ($pure1)(((function() {
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
})())($a, ($__global_Data_Lazy_force)($s))));
break;
case "Skip":
$s = ($__case_0)->v0;
return ($__global_Control_Monad_List_Trans_uncons)($dictMonad, ($__global_Data_Lazy_force)($s));
break;
case "Done":
return ($pure1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($bind)($l, $g);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($map2, $__global_Control_Monad_List_Trans_map, $__global_Data_Tuple_fst, $uncons1) {
  $__fn = function($l) use ($map2, $__global_Control_Monad_List_Trans_map, $__global_Data_Tuple_fst, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map2)(($__global_Control_Monad_List_Trans_map)($__global_Data_Tuple_fst), ($uncons1)($l));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_head'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_head';

// Control_Monad_List_Trans_functorListT
function Control_Monad_List_Trans_functorListT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_functorListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
while (true) {
$__case_0 = $dictFunctor;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
return (object)["map" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), ($__global_Control_Monad_List_Trans_map1)(($__case_res_2)($f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__case_res_1)($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_functorListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_functorListT';

// Control_Monad_List_Trans_fromEffect
function Control_Monad_List_Trans_fromEffect($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_fromEffect';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
$__case_0 = $dictApplicative;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$nil1 = ($__case_res_1)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
    $__res = (function() use ($map2, $__global_Data_Function_flip, $__global_Data_Lazy_defer, $nil1) {
  $__fn = function($fa) use ($map2, $__global_Data_Function_flip, $__global_Data_Lazy_defer, $nil1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map2)(($__global_Data_Function_flip)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_Lazy_defer)((function() use ($nil1) {
  $__fn = function($v) use ($nil1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $nil1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), $fa);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_fromEffect'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_fromEffect';



// Control_Monad_List_Trans_foldlRec'
function Control_Monad_List_Trans_foldlRec__prime__($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_foldlRec__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__global_Control_Monad_List_Trans_uncons = ($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_uncons'));
$Monad0 = (($dictMonadRec)->Monad0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_3;
$uncons1 = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, &$Monad0, $bind) {
  $__body = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, &$Monad0, $bind) {
    $__case_0 = $v;
    if (true) {
$l = $__case_0;
$g = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, &$Monad0) {
  $__body = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, &$Monad0) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ($pure1)(((function() {
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
})())($a, ($__global_Data_Lazy_force)($s))));
break;
case "Skip":
$s = ($__case_0)->v0;
return ($__global_Control_Monad_List_Trans_uncons)($Monad0, ($__global_Data_Lazy_force)($s));
break;
case "Done":
return ($pure1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, &$Monad0, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($bind)($l, $g);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, &$Monad0, $bind, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictMonadRec;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->tailRecM;
} else {
throw new \Exception("Pattern match failure");
};
$tailRecM1 = $__case_res_4;
$tailRecM2 = (function() use ($tailRecM1) {
  $__fn = function($f, $a = null, $b = null) use ($tailRecM1, &$__fn) {
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
    $__res = ($tailRecM1)((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)(($o)->a, ($o)->b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b]);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($pure1, $bind, $uncons1, $tailRecM2) {
  $__fn = function($f) use ($pure1, $bind, $uncons1, $tailRecM2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$loop = (function() use ($pure1, $bind, $f, $uncons1) {
  $__fn = function($b, $l = null) use ($pure1, $bind, $f, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($b, &$__fn) { return $__fn($b, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$g = (function() use ($pure1, $b, $bind, $f) {
  $__body = function($v) use ($pure1, $b, $bind, $f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Done", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($b));
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$a = (($__case_0)->v0)->v0;
$as = (($__case_0)->v0)->v1;
return ($bind)(($f)($b, $a), (function() use ($pure1, $as) {
  $__fn = function($b__prime__) use ($pure1, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Loop", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())((object)["a" => $b__prime__, "b" => $as]));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($pure1, $b, $bind, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($bind)(($uncons1)($l), $g);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($tailRecM2)($loop);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_foldlRec__prime__'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_foldlRec__prime__';

// Control_Monad_List_Trans_runListTRec
function Control_Monad_List_Trans_runListTRec($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_runListTRec';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__global_Control_Monad_List_Trans_uncons = ($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_uncons'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$Monad0 = (($dictMonadRec)->Monad0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_4;
$uncons1 = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, &$Monad0, $bind) {
  $__body = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, &$Monad0, $bind) {
    $__case_0 = $v;
    if (true) {
$l = $__case_0;
$g = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, &$Monad0) {
  $__body = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, &$Monad0) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ($pure1)(((function() {
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
})())($a, ($__global_Data_Lazy_force)($s))));
break;
case "Skip":
$s = ($__case_0)->v0;
return ($__global_Control_Monad_List_Trans_uncons)($Monad0, ($__global_Data_Lazy_force)($s));
break;
case "Done":
return ($pure1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, &$Monad0, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($bind)($l, $g);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, &$Monad0, $bind, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictMonadRec;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->tailRecM;
} else {
throw new \Exception("Pattern match failure");
};
$tailRecM1 = $__case_res_5;
$tailRecM2 = (function() use ($tailRecM1) {
  $__fn = function($f, $a = null, $b = null) use ($tailRecM1, &$__fn) {
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
    $__res = ($tailRecM1)((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)(($o)->a, ($o)->b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b]);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = ((function() use ($pure1, $bind, $uncons1, $tailRecM2) {
  $__fn = function($f) use ($pure1, $bind, $uncons1, $tailRecM2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$loop = (function() use ($pure1, $bind, $f, $uncons1) {
  $__fn = function($b, $l = null) use ($pure1, $bind, $f, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($b, &$__fn) { return $__fn($b, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$g = (function() use ($pure1, $b, $bind, $f) {
  $__body = function($v) use ($pure1, $b, $bind, $f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Done", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($b));
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$a = (($__case_0)->v0)->v0;
$as = (($__case_0)->v0)->v1;
return ($bind)(($f)($b, $a), (function() use ($pure1, $as) {
  $__fn = function($b__prime__) use ($pure1, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Loop", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())((object)["a" => $b__prime__, "b" => $as]));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($pure1, $b, $bind, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($bind)(($uncons1)($l), $g);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($tailRecM2)($loop);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())((function() use ($pure1, $__global_Data_Unit_unit) {
  $__fn = function($v, $v1 = null) use ($pure1, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)($__global_Data_Unit_unit);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $__global_Data_Unit_unit);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_runListTRec'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_runListTRec';

// Control_Monad_List_Trans_foldlRec
function Control_Monad_List_Trans_foldlRec($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_foldlRec';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__global_Control_Monad_List_Trans_uncons = ($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_uncons'));
$Monad0 = (($dictMonadRec)->Monad0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_3;
$uncons1 = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, &$Monad0, $bind) {
  $__body = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, &$Monad0, $bind) {
    $__case_0 = $v;
    if (true) {
$l = $__case_0;
$g = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, &$Monad0) {
  $__body = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, &$Monad0) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ($pure1)(((function() {
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
})())($a, ($__global_Data_Lazy_force)($s))));
break;
case "Skip":
$s = ($__case_0)->v0;
return ($__global_Control_Monad_List_Trans_uncons)($Monad0, ($__global_Data_Lazy_force)($s));
break;
case "Done":
return ($pure1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, &$Monad0, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($bind)($l, $g);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, &$Monad0, $bind, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictMonadRec;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->tailRecM;
} else {
throw new \Exception("Pattern match failure");
};
$tailRecM1 = $__case_res_4;
$tailRecM2 = (function() use ($tailRecM1) {
  $__fn = function($f, $a = null, $b = null) use ($tailRecM1, &$__fn) {
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
    $__res = ($tailRecM1)((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)(($o)->a, ($o)->b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b]);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($pure1, $bind, $uncons1, $tailRecM2) {
  $__fn = function($f) use ($pure1, $bind, $uncons1, $tailRecM2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$loop = (function() use ($pure1, $f, $bind, $uncons1) {
  $__fn = function($b, $l = null) use ($pure1, $f, $bind, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($b, &$__fn) { return $__fn($b, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$g = (function() use ($pure1, $b, $f) {
  $__body = function($v) use ($pure1, $b, $f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Done", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($b));
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$a = (($__case_0)->v0)->v0;
$as = (($__case_0)->v0)->v1;
return ($pure1)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Loop", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())((object)["a" => ($f)($b, $a), "b" => $as]));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($pure1, $b, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($bind)(($uncons1)($l), $g);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($tailRecM2)($loop);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_foldlRec'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_foldlRec';

// Control_Monad_List_Trans_foldl'
function Control_Monad_List_Trans_foldl__prime__($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_foldl__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__global_Control_Monad_List_Trans_uncons = ($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_uncons'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_3;
$uncons1 = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind) {
  $__body = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind) {
    $__case_0 = $v;
    if (true) {
$l = $__case_0;
$g = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
  $__body = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ($pure1)(((function() {
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
})())($a, ($__global_Data_Lazy_force)($s))));
break;
case "Skip":
$s = ($__case_0)->v0;
return ($__global_Control_Monad_List_Trans_uncons)($dictMonad, ($__global_Data_Lazy_force)($s));
break;
case "Done":
return ($pure1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($bind)($l, $g);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($pure1, $bind, $__global_Data_Function_flip, $uncons1) {
  $__fn = function($f) use ($pure1, $bind, $__global_Data_Function_flip, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$loop = (function() use ($pure1, $bind, $f, $__global_Data_Function_flip, &$loop, $uncons1) {
  $__fn = function($b, $l = null) use ($pure1, $bind, $f, $__global_Data_Function_flip, &$loop, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($b, &$__fn) { return $__fn($b, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$g = (function() use ($pure1, $b, $bind, $f, $__global_Data_Function_flip, &$loop) {
  $__body = function($v) use ($pure1, $b, $bind, $f, $__global_Data_Function_flip, &$loop) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)($b);
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$a = (($__case_0)->v0)->v0;
$as = (($__case_0)->v0)->v1;
return ($bind)(($f)($b, $a), ($__global_Data_Function_flip)($loop, $as));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($pure1, $b, $bind, $f, $__global_Data_Function_flip, &$loop, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($bind)(($uncons1)($l), $g);
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = $loop;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_foldl__prime__'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_foldl__prime__';

// Control_Monad_List_Trans_runListT
function Control_Monad_List_Trans_runListT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_runListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__global_Control_Monad_List_Trans_uncons = ($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_uncons'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_4;
$uncons1 = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind) {
  $__body = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind) {
    $__case_0 = $v;
    if (true) {
$l = $__case_0;
$g = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
  $__body = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ($pure1)(((function() {
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
})())($a, ($__global_Data_Lazy_force)($s))));
break;
case "Skip":
$s = ($__case_0)->v0;
return ($__global_Control_Monad_List_Trans_uncons)($dictMonad, ($__global_Data_Lazy_force)($s));
break;
case "Done":
return ($pure1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($bind)($l, $g);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ((function() use ($pure1, $bind, $__global_Data_Function_flip, $uncons1) {
  $__fn = function($f) use ($pure1, $bind, $__global_Data_Function_flip, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$loop = (function() use ($pure1, $bind, $f, $__global_Data_Function_flip, &$loop, $uncons1) {
  $__fn = function($b, $l = null) use ($pure1, $bind, $f, $__global_Data_Function_flip, &$loop, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($b, &$__fn) { return $__fn($b, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$g = (function() use ($pure1, $b, $bind, $f, $__global_Data_Function_flip, &$loop) {
  $__body = function($v) use ($pure1, $b, $bind, $f, $__global_Data_Function_flip, &$loop) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)($b);
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$a = (($__case_0)->v0)->v0;
$as = (($__case_0)->v0)->v1;
return ($bind)(($f)($b, $a), ($__global_Data_Function_flip)($loop, $as));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($pure1, $b, $bind, $f, $__global_Data_Function_flip, &$loop, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($bind)(($uncons1)($l), $g);
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = $loop;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())((function() use ($pure1, $__global_Data_Unit_unit) {
  $__fn = function($v, $v1 = null) use ($pure1, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)($__global_Data_Unit_unit);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $__global_Data_Unit_unit);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_runListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_runListT';

// Control_Monad_List_Trans_foldl
function Control_Monad_List_Trans_foldl($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_foldl';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__global_Control_Monad_List_Trans_uncons = ($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_uncons'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_3;
$uncons1 = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind) {
  $__body = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind) {
    $__case_0 = $v;
    if (true) {
$l = $__case_0;
$g = (function() use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
  $__body = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ($pure1)(((function() {
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
})())($a, ($__global_Data_Lazy_force)($s))));
break;
case "Skip":
$s = ($__case_0)->v0;
return ($__global_Control_Monad_List_Trans_uncons)($dictMonad, ($__global_Data_Lazy_force)($s));
break;
case "Done":
return ($pure1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($bind)($l, $g);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad, $bind, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($pure1, $bind, $uncons1) {
  $__fn = function($f) use ($pure1, $bind, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$loop = (function() use ($pure1, &$loop, $f, $bind, $uncons1) {
  $__fn = function($b, $l = null) use ($pure1, &$loop, $f, $bind, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($b, &$__fn) { return $__fn($b, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$g = (function() use ($pure1, $b, &$loop, $f) {
  $__body = function($v) use ($pure1, $b, &$loop, $f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)($b);
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$a = (($__case_0)->v0)->v0;
$as = (($__case_0)->v0)->v1;
return ($loop)(($f)($b, $a), $as);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($pure1, $b, &$loop, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($bind)(($uncons1)($l), $g);
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = $loop;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_foldl'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_foldl';

// Control_Monad_List_Trans_filter
function Control_Monad_List_Trans_filter($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_filter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
while (true) {
$__case_0 = $dictFunctor;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
return (function() use ($__global_Control_Monad_List_Trans_map1, $dictFunctor, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dictFunctor, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_List_Trans_filter = ($GLOBALS['Control_Monad_List_Trans_filter'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_filter'));
$g = (function() use ($__global_Control_Monad_List_Trans_map1, $dictFunctor, $__global_Control_Monad_List_Trans_filter, $f) {
  $__body = function($v) use ($__global_Control_Monad_List_Trans_map1, $dictFunctor, $__global_Control_Monad_List_Trans_filter, $f) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dictFunctor;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_2;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$s__prime__ = ($__global_Control_Monad_List_Trans_map1)(((function() use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_filter, $dictFunctor, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_filter, $dictFunctor, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_filter, $dictFunctor, $f) {
  $__body = function($v) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_filter, $dictFunctor, $f) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$s__prime__ = ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_filter)($dictFunctor, $f), $s);
$__case_0 = ($f)($a);
switch ($__case_0) {
case true:
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, $s__prime__);
break;
default:
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($s__prime__);
break;
};
break;
case "Skip":
$s = ($__case_0)->v0;
$s__prime__ = ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_filter)($dictFunctor, $f), $s);
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($s__prime__);
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_filter, $dictFunctor, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($f), $s);
$__case_0 = ($f)($a);
switch ($__case_0) {
case true:
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, $s__prime__);
break;
default:
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($s__prime__);
break;
};
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dictFunctor;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_1;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$s__prime__ = ($__global_Control_Monad_List_Trans_map1)(((function() use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_filter, $dictFunctor, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_filter, $dictFunctor, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_filter, $dictFunctor, $f) {
  $__body = function($v) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_filter, $dictFunctor, $f) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$s__prime__ = ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_filter)($dictFunctor, $f), $s);
$__case_0 = ($f)($a);
switch ($__case_0) {
case true:
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, $s__prime__);
break;
default:
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($s__prime__);
break;
};
break;
case "Skip":
$s = ($__case_0)->v0;
$s__prime__ = ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_filter)($dictFunctor, $f), $s);
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($s__prime__);
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_filter, $dictFunctor, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($f), $s);
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($s__prime__);
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Control_Monad_List_Trans_map1, $dictFunctor, $__global_Control_Monad_List_Trans_filter, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_filter'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_filter';

// Control_Monad_List_Trans_dropWhile
function Control_Monad_List_Trans_dropWhile($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_dropWhile';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
while (true) {
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
return (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $dictApplicative, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dict, $dictApplicative, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_List_Trans_dropWhile = ($GLOBALS['Control_Monad_List_Trans_dropWhile'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_dropWhile'));
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__global_Control_Monad_List_Trans_dropWhile, $dictApplicative) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__global_Control_Monad_List_Trans_dropWhile, $dictApplicative) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = ($f)($a);
switch ($__case_0) {
case true:
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_2;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(((function() use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_dropWhile, $dictApplicative, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_dropWhile, $dictApplicative, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_dropWhile, $dictApplicative) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_dropWhile, $dictApplicative) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = ($f)($a);
switch ($__case_0) {
case true:
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_dropWhile)($dictApplicative, $f), $s));
break;
default:
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, $s);
break;
};
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_dropWhile)($dictApplicative, $f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_dropWhile, $dictApplicative, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($f), $s));
break;
default:
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, $s);
break;
};
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_1;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(((function() use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_dropWhile, $dictApplicative, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_dropWhile, $dictApplicative, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_dropWhile, $dictApplicative) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_dropWhile, $dictApplicative) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = ($f)($a);
switch ($__case_0) {
case true:
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_dropWhile)($dictApplicative, $f), $s));
break;
default:
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, $s);
break;
};
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_dropWhile)($dictApplicative, $f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_dropWhile, $dictApplicative, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__global_Control_Monad_List_Trans_dropWhile, $dictApplicative, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_dropWhile'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_dropWhile';

// Control_Monad_List_Trans_drop
function Control_Monad_List_Trans_drop($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_drop';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
$__global_Control_Monad_List_Trans_sub = ($GLOBALS['Control_Monad_List_Trans_sub'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_sub'));
while (true) {
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
return (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $stepMap1) {
  $__body = function($v, $v1) use ($__global_Control_Monad_List_Trans_map1, $dict, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $stepMap1) {
    $__global_Control_Monad_List_Trans_drop = ($GLOBALS['Control_Monad_List_Trans_drop'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_drop'));
    $__case_0 = $v;
    $__case_1 = $v1;
    switch ($__case_0) {
case 0:
$fa = $__case_1;
return $fa;
break;
default:
$n = $__case_0;
$fa = $__case_1;
$f = (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $__global_Control_Monad_List_Trans_drop, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $n) {
  $__body = function($v2) use ($__global_Control_Monad_List_Trans_map1, $dict, $__global_Control_Monad_List_Trans_drop, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $n) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "Yield":
$s = ($__case_0)->v1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_2;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(((function() use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_drop, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $stepMap1) {
  $__body = function($v, $v1) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_drop, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $stepMap1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch ($__case_0) {
case 0:
$fa = $__case_1;
return $fa;
break;
default:
$n = $__case_0;
$fa = $__case_1;
$f = (function() use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_drop, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $n) {
  $__body = function($v2) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_drop, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $n) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "Yield":
$s = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_drop)($dictApplicative, ($__global_Control_Monad_List_Trans_sub)($n, 1)), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_drop)($dictApplicative, $n), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v2) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_drop, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $n, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($stepMap1)($f, $fa);
break;
};
  };
  $__fn = function($v, $v1 = null) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_drop, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $stepMap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_sub)($n, 1)), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_1;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(((function() use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_drop, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $stepMap1) {
  $__body = function($v, $v1) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_drop, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $stepMap1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch ($__case_0) {
case 0:
$fa = $__case_1;
return $fa;
break;
default:
$n = $__case_0;
$fa = $__case_1;
$f = (function() use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_drop, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $n) {
  $__body = function($v2) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_drop, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $n) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "Yield":
$s = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_drop)($dictApplicative, ($__global_Control_Monad_List_Trans_sub)($n, 1)), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_drop)($dictApplicative, $n), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v2) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_drop, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $n, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($stepMap1)($f, $fa);
break;
};
  };
  $__fn = function($v, $v1 = null) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_drop, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $stepMap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($n), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v2) use ($__global_Control_Monad_List_Trans_map1, $dict, $__global_Control_Monad_List_Trans_drop, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $n, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($stepMap1)($f, $fa);
break;
};
  };
  $__fn = function($v, $v1 = null) use ($__global_Control_Monad_List_Trans_map1, $dict, $dictApplicative, $__global_Control_Monad_List_Trans_sub, $stepMap1, $__body, &$__fn) {
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
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_drop'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_drop';

// Control_Monad_List_Trans_cons
function Control_Monad_List_Trans_cons($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_cons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__case_0 = $dictApplicative;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
    $__res = (function() use ($pure1, $__global_Data_Lazy_force) {
  $__fn = function($lh, $t = null) use ($pure1, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($lh, &$__fn) { return $__fn($lh, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($__global_Data_Lazy_force)($lh), $t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_cons'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_cons';

// Control_Monad_List_Trans_unfoldable1ListT
function Control_Monad_List_Trans_unfoldable1ListT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_unfoldable1ListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__global_Control_Monad_List_Trans_pure = ($GLOBALS['Control_Monad_List_Trans_pure'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_pure'));
$Applicative0 = (($dictMonad)->Applicative0)($__global_Prim_undefined);
$__case_0 = $Applicative0;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$prepend__prime__1 = (function() use ($pure1) {
  $__fn = function($h, $t = null) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($h, $t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$prepend1 = (function() use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__fn = function($h, $t = null) use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($prepend__prime__1)($h, ($__global_Data_Lazy_defer)(($__global_Data_Function_const)($t)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $Applicative0;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$nil1 = ($__case_res_1)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
$singleton1 = (function() use ($prepend1, $nil1) {
  $__fn = function($a) use ($prepend1, $nil1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($prepend1)($a, $nil1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $Applicative0;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_2;
$cons1 = (function() use ($pure1, $__global_Data_Lazy_force) {
  $__fn = function($lh, $t = null) use ($pure1, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($lh, &$__fn) { return $__fn($lh, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($__global_Data_Lazy_force)($lh), $t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (object)["unfoldr1" => (function() use ($singleton1, $cons1, $__global_Control_Monad_List_Trans_pure, $__global_Data_Lazy_defer) {
  $__fn = function($f, $b = null) use ($singleton1, $cons1, $__global_Control_Monad_List_Trans_pure, $__global_Data_Lazy_defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($singleton1, $cons1, $__global_Control_Monad_List_Trans_pure, $__global_Data_Lazy_defer, &$go, $f) {
  $__fn = function($v) use ($singleton1, $cons1, $__global_Control_Monad_List_Trans_pure, $__global_Data_Lazy_defer, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v1)->tag === "Nothing"))) {
$x = ($__case_0)->v0;
return ($singleton1)($x);
} else {
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v1)->tag === "Just"))) {
$x = ($__case_0)->v0;
$y = (($__case_0)->v1)->v0;
return ($cons1)(($__global_Control_Monad_List_Trans_pure)($x), ($__global_Data_Lazy_defer)((function() use (&$go, $f, $y) {
  $__fn = function($v1) use (&$go, $f, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($go)(($f)($y));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
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
    $__res = ($go)(($f)($b));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_unfoldable1ListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_unfoldable1ListT';

// Control_Monad_List_Trans_unfoldableListT
function Control_Monad_List_Trans_unfoldableListT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_unfoldableListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Monad_List_Trans_pure = ($GLOBALS['Control_Monad_List_Trans_pure'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_pure'));
$Applicative0 = (($dictMonad)->Applicative0)($__global_Prim_undefined);
$__case_0 = $Applicative0;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$nil1 = ($__case_res_0)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
$__case_0 = $Applicative0;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_1;
$cons1 = (function() use ($pure1, $__global_Data_Lazy_force) {
  $__fn = function($lh, $t = null) use ($pure1, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($lh, &$__fn) { return $__fn($lh, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($__global_Data_Lazy_force)($lh), $t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$Applicative0 = (($dictMonad)->Applicative0)($__global_Prim_undefined);
$__case_0 = $Applicative0;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_2;
$prepend__prime__1 = (function() use ($pure1) {
  $__fn = function($h, $t = null) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($h, $t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$prepend1 = (function() use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__fn = function($h, $t = null) use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($prepend__prime__1)($h, ($__global_Data_Lazy_defer)(($__global_Data_Function_const)($t)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $Applicative0;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$nil1 = ($__case_res_3)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
$singleton1 = (function() use ($prepend1, $nil1) {
  $__fn = function($a) use ($prepend1, $nil1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($prepend1)($a, $nil1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $Applicative0;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_4;
$cons1 = (function() use ($pure1, $__global_Data_Lazy_force) {
  $__fn = function($lh, $t = null) use ($pure1, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($lh, &$__fn) { return $__fn($lh, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($__global_Data_Lazy_force)($lh), $t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$unfoldable1ListT1 = (object)["unfoldr1" => (function() use ($singleton1, $cons1, $__global_Control_Monad_List_Trans_pure, $__global_Data_Lazy_defer) {
  $__fn = function($f, $b = null) use ($singleton1, $cons1, $__global_Control_Monad_List_Trans_pure, $__global_Data_Lazy_defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($singleton1, $cons1, $__global_Control_Monad_List_Trans_pure, $__global_Data_Lazy_defer, &$go, $f) {
  $__fn = function($v) use ($singleton1, $cons1, $__global_Control_Monad_List_Trans_pure, $__global_Data_Lazy_defer, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v1)->tag === "Nothing"))) {
$x = ($__case_0)->v0;
return ($singleton1)($x);
} else {
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v1)->tag === "Just"))) {
$x = ($__case_0)->v0;
$y = (($__case_0)->v1)->v0;
return ($cons1)(($__global_Control_Monad_List_Trans_pure)($x), ($__global_Data_Lazy_defer)((function() use (&$go, $f, $y) {
  $__fn = function($v1) use (&$go, $f, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($go)(($f)($y));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
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
    $__res = ($go)(($f)($b));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["unfoldr" => (function() use ($nil1, $cons1, $__global_Control_Monad_List_Trans_pure, $__global_Data_Lazy_defer) {
  $__fn = function($f, $b = null) use ($nil1, $cons1, $__global_Control_Monad_List_Trans_pure, $__global_Data_Lazy_defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($nil1, $cons1, $__global_Control_Monad_List_Trans_pure, $__global_Data_Lazy_defer, &$go, $f) {
  $__fn = function($v) use ($nil1, $cons1, $__global_Control_Monad_List_Trans_pure, $__global_Data_Lazy_defer, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Nothing")) {
return $nil1;
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$x = (($__case_0)->v0)->v0;
$y = (($__case_0)->v0)->v1;
return ($cons1)(($__global_Control_Monad_List_Trans_pure)($x), ($__global_Data_Lazy_defer)((function() use (&$go, $f, $y) {
  $__fn = function($v1) use (&$go, $f, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($go)(($f)($y));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
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
    $__res = ($go)(($f)($b));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Unfoldable10" => (function() use ($unfoldable1ListT1) {
  $__fn = function($__dollar____unused) use ($unfoldable1ListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $unfoldable1ListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_unfoldableListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_unfoldableListT';

// Control_Monad_List_Trans_semigroupListT
function Control_Monad_List_Trans_semigroupListT($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_semigroupListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
while (true) {
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
return (object)["append" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $stepMap1) {
  $__fn = function($x, $y = null) use ($__global_Control_Monad_List_Trans_map1, $dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$f = (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__body = function($v) use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($__global_Control_Monad_List_Trans_map1)((function() use ($dict, $y) {
  $__fn = function($v1) use ($dict, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_2)($v1, $y);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)((function() use ($dict, $y) {
  $__fn = function($v1) use ($dict, $y, &$__fn) {
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
    $__res = ($__case_res_1)($v1, $y);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
break;
case "Done":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Data_Lazy_defer)(($__global_Data_Function_const)($y)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($f, $x);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_semigroupListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_semigroupListT';

// Control_Monad_List_Trans_concat
function Control_Monad_List_Trans_concat($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_concat';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
while (true) {
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
return (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $stepMap1) {
  $__fn = function($x, $y = null) use ($__global_Control_Monad_List_Trans_map1, $dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$f = (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__body = function($v) use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($__global_Control_Monad_List_Trans_map1)((function() use ($dict, $y) {
  $__fn = function($v1) use ($dict, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_2)($v1, $y);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)((function() use ($dict, $y) {
  $__fn = function($v1) use ($dict, $y, &$__fn) {
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
    $__res = ($__case_res_1)($v1, $y);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
break;
case "Done":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Data_Lazy_defer)(($__global_Data_Function_const)($y)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($f, $x);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_concat'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_concat';

// Control_Monad_List_Trans_monoidListT
function Control_Monad_List_Trans_monoidListT($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_monoidListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$semigroupListT1 = (object)["append" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $stepMap1) {
  $__fn = function($x, $y = null) use ($__global_Control_Monad_List_Trans_map1, $dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$f = (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__body = function($v) use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($__global_Control_Monad_List_Trans_map1)((function() use ($dict, $y) {
  $__fn = function($v1) use ($dict, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_2)($v1, $y);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)((function() use ($dict, $y) {
  $__fn = function($v1) use ($dict, $y, &$__fn) {
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
    $__res = ($__case_res_1)($v1, $y);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
break;
case "Done":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Data_Lazy_defer)(($__global_Data_Function_const)($y)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($f, $x);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dictApplicative;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["mempty" => ($__case_res_3)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"))), "Semigroup0" => (function() use ($semigroupListT1) {
  $__fn = function($__dollar____unused) use ($semigroupListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_monoidListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_monoidListT';

// Control_Monad_List_Trans_catMaybes
function Control_Monad_List_Trans_catMaybes($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_catMaybes';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Maybe_fromMaybe = ($GLOBALS['Data_Maybe_fromMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromMaybe'));
$__global_Control_Monad_List_Trans_map = ($GLOBALS['Control_Monad_List_Trans_map'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map'));
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
$__global_Control_Monad_List_Trans_mapMaybe = ($GLOBALS['Control_Monad_List_Trans_mapMaybe'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_mapMaybe'));
$__global_Control_Monad_List_Trans_identity = ($GLOBALS['Control_Monad_List_Trans_identity'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_identity'));
$__case_0 = $dictFunctor;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
    $__res = ((function() use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_mapMaybe, $dictFunctor, $stepMap1) {
  $__fn = function($f) use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_mapMaybe, $dictFunctor, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_mapMaybe, $dictFunctor) {
  $__body = function($v) use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_mapMaybe, $dictFunctor) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ($__global_Data_Maybe_fromMaybe)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Control_Monad_List_Trans_map)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($f)($a)), ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_mapMaybe)($dictFunctor, $f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_mapMaybe)($dictFunctor, $f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_mapMaybe, $dictFunctor, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Control_Monad_List_Trans_identity);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_catMaybes'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_catMaybes';

// Control_Monad_List_Trans_monadListT
function Control_Monad_List_Trans_monadListT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_monadListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
while (true) {
return (object)["Applicative0" => (function() use ($dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Control_Monad_List_Trans_map1) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Control_Monad_List_Trans_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$prepend__prime__1 = (function() use ($pure1) {
  $__fn = function($h, $t = null) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($h, $t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$prepend1 = (function() use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__fn = function($h, $t = null) use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($prepend__prime__1)($h, ($__global_Data_Lazy_defer)(($__global_Data_Function_const)($t)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$nil1 = ($__case_res_1)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
    $__res = (object)["pure" => (function() use ($prepend1, $nil1) {
  $__fn = function($a) use ($prepend1, $nil1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($prepend1)($a, $nil1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_List_Trans_map1) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_List_Trans_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_2;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$functorListT1 = (object)["map" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), ($__global_Control_Monad_List_Trans_map1)(($__case_res_4)($f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__case_res_3)($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_5;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_6;
    $__res = (object)["apply" => (function() use ($bind, $pure) {
  $__fn = function($f, $a = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)($f, (function() use ($bind, $a, $pure) {
  $__fn = function($f__prime__) use ($bind, $a, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($a, (function() use ($pure, $f__prime__) {
  $__fn = function($a__prime__) use ($pure, $f__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(($f__prime__)($a__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($dict, $__global_Control_Monad_List_Trans_map1) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_List_Trans_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_7;
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_8;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
    $__res = (object)["bind" => (function() use ($append, $dict, $__global_Control_Monad_List_Trans_map1, $stepMap1) {
  $__fn = function($fa, $f = null) use ($append, $dict, $__global_Control_Monad_List_Trans_map1, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($fa, &$__fn) { return $__fn($fa, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$g = (function() use ($append, $f, $dict, $__global_Control_Monad_List_Trans_map1) {
  $__body = function($v) use ($append, $f, $dict, $__global_Control_Monad_List_Trans_map1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$h = (function() use ($append, $f, $a, $dict) {
  $__fn = function($s__prime__) use ($append, $f, $a, $dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($append)(($f)($a), ($__case_res_10)($s__prime__, $f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)($h, $s));
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)((function() use ($dict, $f) {
  $__fn = function($v1) use ($dict, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_9)($v1, $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($append, $f, $dict, $__global_Control_Monad_List_Trans_map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g, $fa);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_List_Trans_map1) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_List_Trans_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_11;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$functorListT1 = (object)["map" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dict;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), ($__global_Control_Monad_List_Trans_map1)(($__case_res_13)($f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__case_res_12)($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_14;
$__case_0 = $dict;
$__case_res_15 = null;
if (true) {
$v = $__case_0;
$__case_res_15 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_15;
    $__res = (object)["apply" => (function() use ($bind, $pure) {
  $__fn = function($f, $a = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)($f, (function() use ($bind, $a, $pure) {
  $__fn = function($f__prime__) use ($bind, $a, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($a, (function() use ($pure, $f__prime__) {
  $__fn = function($a__prime__) use ($pure, $f__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(($f__prime__)($a__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_monadListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_monadListT';

// Control_Monad_List_Trans_bindListT
function Control_Monad_List_Trans_bindListT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_bindListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
while (true) {
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_1;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
return (object)["bind" => (function() use ($append, $dict, $__global_Control_Monad_List_Trans_map1, $stepMap1) {
  $__fn = function($fa, $f = null) use ($append, $dict, $__global_Control_Monad_List_Trans_map1, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($fa, &$__fn) { return $__fn($fa, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$g = (function() use ($append, $f, $dict, $__global_Control_Monad_List_Trans_map1) {
  $__body = function($v) use ($append, $f, $dict, $__global_Control_Monad_List_Trans_map1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$h = (function() use ($append, $f, $a, $dict) {
  $__fn = function($s__prime__) use ($append, $f, $a, $dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($append)(($f)($a), ($__case_res_3)($s__prime__, $f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)($h, $s));
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)((function() use ($dict, $f) {
  $__fn = function($v1) use ($dict, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_2)($v1, $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($append, $f, $dict, $__global_Control_Monad_List_Trans_map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g, $fa);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_List_Trans_map1) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_List_Trans_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_4;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$functorListT1 = (object)["map" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), ($__global_Control_Monad_List_Trans_map1)(($__case_res_6)($f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__case_res_5)($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_7;
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_8;
    $__res = (object)["apply" => (function() use ($bind, $pure) {
  $__fn = function($f, $a = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)($f, (function() use ($bind, $a, $pure) {
  $__fn = function($f__prime__) use ($bind, $a, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($a, (function() use ($pure, $f__prime__) {
  $__fn = function($a__prime__) use ($pure, $f__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(($f__prime__)($a__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_bindListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_bindListT';

// Control_Monad_List_Trans_applyListT
function Control_Monad_List_Trans_applyListT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_applyListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
while (true) {
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$functorListT1 = (object)["map" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), ($__global_Control_Monad_List_Trans_map1)(($__case_res_2)($f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__case_res_1)($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_4;
return (object)["apply" => (function() use ($bind, $pure) {
  $__fn = function($f, $a = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)($f, (function() use ($bind, $a, $pure) {
  $__fn = function($f__prime__) use ($bind, $a, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($a, (function() use ($pure, $f__prime__) {
  $__fn = function($a__prime__) use ($pure, $f__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(($f__prime__)($a__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_applyListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_applyListT';

// Control_Monad_List_Trans_applicativeListT
function Control_Monad_List_Trans_applicativeListT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_applicativeListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
while (true) {
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$prepend__prime__1 = (function() use ($pure1) {
  $__fn = function($h, $t = null) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($h, $t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$prepend1 = (function() use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__fn = function($h, $t = null) use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($prepend__prime__1)($h, ($__global_Data_Lazy_defer)(($__global_Data_Function_const)($t)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$nil1 = ($__case_res_1)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
return (object)["pure" => (function() use ($prepend1, $nil1) {
  $__fn = function($a) use ($prepend1, $nil1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($prepend1)($a, $nil1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_List_Trans_map1) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_List_Trans_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_2;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$functorListT1 = (object)["map" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), ($__global_Control_Monad_List_Trans_map1)(($__case_res_4)($f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__case_res_3)($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_5;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_6;
    $__res = (object)["apply" => (function() use ($bind, $pure) {
  $__fn = function($f, $a = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)($f, (function() use ($bind, $a, $pure) {
  $__fn = function($f__prime__) use ($bind, $a, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($a, (function() use ($pure, $f__prime__) {
  $__fn = function($a__prime__) use ($pure, $f__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(($f__prime__)($a__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_applicativeListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_applicativeListT';

// Control_Monad_List_Trans_monadEffectListT
function Control_Monad_List_Trans_monadEffectListT($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_monadEffectListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
$__global_Control_Monad_List_Trans_compose = ($GLOBALS['Control_Monad_List_Trans_compose'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_compose'));
$__global_Control_Monad_List_Trans_lift = ($GLOBALS['Control_Monad_List_Trans_lift'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_lift'));
$Monad0 = (($dictMonadEffect)->Monad0)($__global_Prim_undefined);
$monadListT1 = (object)["Applicative0" => (function() use ($dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Control_Monad_List_Trans_map1) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Control_Monad_List_Trans_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$prepend__prime__1 = (function() use ($pure1) {
  $__fn = function($h, $t = null) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($h, $t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$prepend1 = (function() use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__fn = function($h, $t = null) use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($prepend__prime__1)($h, ($__global_Data_Lazy_defer)(($__global_Data_Function_const)($t)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$nil1 = ($__case_res_1)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
    $__res = (object)["pure" => (function() use ($prepend1, $nil1) {
  $__fn = function($a) use ($prepend1, $nil1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($prepend1)($a, $nil1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_List_Trans_map1) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_List_Trans_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_2;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$functorListT1 = (object)["map" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), ($__global_Control_Monad_List_Trans_map1)(($__case_res_4)($f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__case_res_3)($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_5;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_6;
    $__res = (object)["apply" => (function() use ($bind, $pure) {
  $__fn = function($f, $a = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)($f, (function() use ($bind, $a, $pure) {
  $__fn = function($f__prime__) use ($bind, $a, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($a, (function() use ($pure, $f__prime__) {
  $__fn = function($a__prime__) use ($pure, $f__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(($f__prime__)($a__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($dict, $__global_Control_Monad_List_Trans_map1) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_List_Trans_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_7;
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_8;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
    $__res = (object)["bind" => (function() use ($append, $dict, $__global_Control_Monad_List_Trans_map1, $stepMap1) {
  $__fn = function($fa, $f = null) use ($append, $dict, $__global_Control_Monad_List_Trans_map1, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($fa, &$__fn) { return $__fn($fa, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$g = (function() use ($append, $f, $dict, $__global_Control_Monad_List_Trans_map1) {
  $__body = function($v) use ($append, $f, $dict, $__global_Control_Monad_List_Trans_map1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$h = (function() use ($append, $f, $a, $dict) {
  $__fn = function($s__prime__) use ($append, $f, $a, $dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($append)(($f)($a), ($__case_res_10)($s__prime__, $f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)($h, $s));
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)((function() use ($dict, $f) {
  $__fn = function($v1) use ($dict, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_9)($v1, $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($append, $f, $dict, $__global_Control_Monad_List_Trans_map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g, $fa);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_List_Trans_map1) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_List_Trans_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_11;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$functorListT1 = (object)["map" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dict;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), ($__global_Control_Monad_List_Trans_map1)(($__case_res_13)($f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__case_res_12)($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_14;
$__case_0 = $dict;
$__case_res_15 = null;
if (true) {
$v = $__case_0;
$__case_res_15 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_15;
    $__res = (object)["apply" => (function() use ($bind, $pure) {
  $__fn = function($f, $a = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)($f, (function() use ($bind, $a, $pure) {
  $__fn = function($f__prime__) use ($bind, $a, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($a, (function() use ($pure, $f__prime__) {
  $__fn = function($a__prime__) use ($pure, $f__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(($f__prime__)($a__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dictMonadEffect;
$__case_res_16 = null;
if (true) {
$v = $__case_0;
$__case_res_16 = ($v)->liftEffect;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["liftEffect" => ($__global_Control_Monad_List_Trans_compose)(($__global_Control_Monad_List_Trans_lift)($Monad0), $__case_res_16), "Monad0" => (function() use ($monadListT1) {
  $__fn = function($__dollar____unused) use ($monadListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_monadEffectListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_monadEffectListT';

// Control_Monad_List_Trans_monadSTListT
function Control_Monad_List_Trans_monadSTListT($dictMonadST) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_monadSTListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
$__global_Control_Monad_List_Trans_compose = ($GLOBALS['Control_Monad_List_Trans_compose'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_compose'));
$__global_Control_Monad_List_Trans_lift = ($GLOBALS['Control_Monad_List_Trans_lift'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_lift'));
$Monad0 = (($dictMonadST)->Monad0)($__global_Prim_undefined);
$monadListT1 = (object)["Applicative0" => (function() use ($dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Control_Monad_List_Trans_map1) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Control_Monad_List_Trans_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$prepend__prime__1 = (function() use ($pure1) {
  $__fn = function($h, $t = null) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($h, $t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$prepend1 = (function() use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__fn = function($h, $t = null) use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($prepend__prime__1)($h, ($__global_Data_Lazy_defer)(($__global_Data_Function_const)($t)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$nil1 = ($__case_res_1)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
    $__res = (object)["pure" => (function() use ($prepend1, $nil1) {
  $__fn = function($a) use ($prepend1, $nil1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($prepend1)($a, $nil1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_List_Trans_map1) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_List_Trans_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_2;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$functorListT1 = (object)["map" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), ($__global_Control_Monad_List_Trans_map1)(($__case_res_4)($f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__case_res_3)($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_5;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_6;
    $__res = (object)["apply" => (function() use ($bind, $pure) {
  $__fn = function($f, $a = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)($f, (function() use ($bind, $a, $pure) {
  $__fn = function($f__prime__) use ($bind, $a, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($a, (function() use ($pure, $f__prime__) {
  $__fn = function($a__prime__) use ($pure, $f__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(($f__prime__)($a__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($dict, $__global_Control_Monad_List_Trans_map1) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_List_Trans_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_7;
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_8;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
    $__res = (object)["bind" => (function() use ($append, $dict, $__global_Control_Monad_List_Trans_map1, $stepMap1) {
  $__fn = function($fa, $f = null) use ($append, $dict, $__global_Control_Monad_List_Trans_map1, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($fa, &$__fn) { return $__fn($fa, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$g = (function() use ($append, $f, $dict, $__global_Control_Monad_List_Trans_map1) {
  $__body = function($v) use ($append, $f, $dict, $__global_Control_Monad_List_Trans_map1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$h = (function() use ($append, $f, $a, $dict) {
  $__fn = function($s__prime__) use ($append, $f, $a, $dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($append)(($f)($a), ($__case_res_10)($s__prime__, $f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)($h, $s));
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)((function() use ($dict, $f) {
  $__fn = function($v1) use ($dict, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_9)($v1, $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($append, $f, $dict, $__global_Control_Monad_List_Trans_map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g, $fa);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_List_Trans_map1) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_List_Trans_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_11;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$functorListT1 = (object)["map" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dict;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), ($__global_Control_Monad_List_Trans_map1)(($__case_res_13)($f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__case_res_12)($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_14;
$__case_0 = $dict;
$__case_res_15 = null;
if (true) {
$v = $__case_0;
$__case_res_15 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_15;
    $__res = (object)["apply" => (function() use ($bind, $pure) {
  $__fn = function($f, $a = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)($f, (function() use ($bind, $a, $pure) {
  $__fn = function($f__prime__) use ($bind, $a, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($a, (function() use ($pure, $f__prime__) {
  $__fn = function($a__prime__) use ($pure, $f__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(($f__prime__)($a__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dictMonadST;
$__case_res_16 = null;
if (true) {
$v = $__case_0;
$__case_res_16 = ($v)->liftST;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["liftST" => ($__global_Control_Monad_List_Trans_compose)(($__global_Control_Monad_List_Trans_lift)($Monad0), $__case_res_16), "Monad0" => (function() use ($monadListT1) {
  $__fn = function($__dollar____unused) use ($monadListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_monadSTListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_monadSTListT';

// Control_Monad_List_Trans_altListT
function Control_Monad_List_Trans_altListT($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_altListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$functorListT1 = (object)["map" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), ($__global_Control_Monad_List_Trans_map1)(($__case_res_2)($f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__case_res_1)($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_3;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
    $__res = (object)["alt" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $stepMap1) {
  $__fn = function($x, $y = null) use ($__global_Control_Monad_List_Trans_map1, $dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$f = (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__body = function($v) use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($__global_Control_Monad_List_Trans_map1)((function() use ($dict, $y) {
  $__fn = function($v1) use ($dict, $y, &$__fn) {
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
    $__res = ($__case_res_5)($v1, $y);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)((function() use ($dict, $y) {
  $__fn = function($v1) use ($dict, $y, &$__fn) {
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
    $__res = ($__case_res_4)($v1, $y);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
break;
case "Done":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Data_Lazy_defer)(($__global_Data_Function_const)($y)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($f, $x);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_altListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_altListT';

// Control_Monad_List_Trans_plusListT
function Control_Monad_List_Trans_plusListT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_plusListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$Applicative0 = (($dictMonad)->Applicative0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_0;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$functorListT1 = (object)["map" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), ($__global_Control_Monad_List_Trans_map1)(($__case_res_2)($f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__case_res_1)($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_3;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$altListT1 = (object)["alt" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $stepMap1) {
  $__fn = function($x, $y = null) use ($__global_Control_Monad_List_Trans_map1, $dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$f = (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__body = function($v) use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($__global_Control_Monad_List_Trans_map1)((function() use ($dict, $y) {
  $__fn = function($v1) use ($dict, $y, &$__fn) {
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
    $__res = ($__case_res_5)($v1, $y);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)((function() use ($dict, $y) {
  $__fn = function($v1) use ($dict, $y, &$__fn) {
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
    $__res = ($__case_res_4)($v1, $y);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
break;
case "Done":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Data_Lazy_defer)(($__global_Data_Function_const)($y)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($f, $x);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $Applicative0;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["empty" => ($__case_res_6)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"))), "Alt0" => (function() use ($altListT1) {
  $__fn = function($__dollar____unused) use ($altListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $altListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_plusListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_plusListT';

// Control_Monad_List_Trans_alternativeListT
function Control_Monad_List_Trans_alternativeListT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_alternativeListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$prepend__prime__1 = (function() use ($pure1) {
  $__fn = function($h, $t = null) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($h, $t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$prepend1 = (function() use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__fn = function($h, $t = null) use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($prepend__prime__1)($h, ($__global_Data_Lazy_defer)(($__global_Data_Function_const)($t)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$nil1 = ($__case_res_1)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
$applicativeListT1 = (object)["pure" => (function() use ($prepend1, $nil1) {
  $__fn = function($a) use ($prepend1, $nil1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($prepend1)($a, $nil1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_List_Trans_map1) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_List_Trans_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_2;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$functorListT1 = (object)["map" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), ($__global_Control_Monad_List_Trans_map1)(($__case_res_4)($f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__case_res_3)($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_5;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_6;
    $__res = (object)["apply" => (function() use ($bind, $pure) {
  $__fn = function($f, $a = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)($f, (function() use ($bind, $a, $pure) {
  $__fn = function($f__prime__) use ($bind, $a, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($a, (function() use ($pure, $f__prime__) {
  $__fn = function($a__prime__) use ($pure, $f__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(($f__prime__)($a__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$Applicative0 = (($dictMonad)->Applicative0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_7;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$functorListT1 = (object)["map" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), ($__global_Control_Monad_List_Trans_map1)(($__case_res_9)($f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__case_res_8)($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_10;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$altListT1 = (object)["alt" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $stepMap1) {
  $__fn = function($x, $y = null) use ($__global_Control_Monad_List_Trans_map1, $dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$f = (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__body = function($v) use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($__global_Control_Monad_List_Trans_map1)((function() use ($dict, $y) {
  $__fn = function($v1) use ($dict, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_12)($v1, $y);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)((function() use ($dict, $y) {
  $__fn = function($v1) use ($dict, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_11)($v1, $y);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
break;
case "Done":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Data_Lazy_defer)(($__global_Data_Function_const)($y)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($f, $x);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $Applicative0;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$plusListT1 = (object)["empty" => ($__case_res_13)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"))), "Alt0" => (function() use ($altListT1) {
  $__fn = function($__dollar____unused) use ($altListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $altListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["Applicative0" => (function() use ($applicativeListT1) {
  $__fn = function($__dollar____unused) use ($applicativeListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusListT1) {
  $__fn = function($__dollar____unused) use ($plusListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $plusListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_alternativeListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_alternativeListT';

// Control_Monad_List_Trans_monadPlusListT
function Control_Monad_List_Trans_monadPlusListT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_monadPlusListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$monadListT1 = (object)["Applicative0" => (function() use ($dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Control_Monad_List_Trans_map1) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Control_Monad_List_Trans_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_0;
$prepend__prime__1 = (function() use ($pure1) {
  $__fn = function($h, $t = null) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($h, $t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$prepend1 = (function() use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__fn = function($h, $t = null) use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($prepend__prime__1)($h, ($__global_Data_Lazy_defer)(($__global_Data_Function_const)($t)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$nil1 = ($__case_res_1)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
    $__res = (object)["pure" => (function() use ($prepend1, $nil1) {
  $__fn = function($a) use ($prepend1, $nil1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($prepend1)($a, $nil1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_List_Trans_map1) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_List_Trans_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_2;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$functorListT1 = (object)["map" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), ($__global_Control_Monad_List_Trans_map1)(($__case_res_4)($f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__case_res_3)($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_5;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_6;
    $__res = (object)["apply" => (function() use ($bind, $pure) {
  $__fn = function($f, $a = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)($f, (function() use ($bind, $a, $pure) {
  $__fn = function($f__prime__) use ($bind, $a, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($a, (function() use ($pure, $f__prime__) {
  $__fn = function($a__prime__) use ($pure, $f__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(($f__prime__)($a__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($dict, $__global_Control_Monad_List_Trans_map1) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_List_Trans_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_7;
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_8;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
    $__res = (object)["bind" => (function() use ($append, $dict, $__global_Control_Monad_List_Trans_map1, $stepMap1) {
  $__fn = function($fa, $f = null) use ($append, $dict, $__global_Control_Monad_List_Trans_map1, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($fa, &$__fn) { return $__fn($fa, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$g = (function() use ($append, $f, $dict, $__global_Control_Monad_List_Trans_map1) {
  $__body = function($v) use ($append, $f, $dict, $__global_Control_Monad_List_Trans_map1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$h = (function() use ($append, $f, $a, $dict) {
  $__fn = function($s__prime__) use ($append, $f, $a, $dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($append)(($f)($a), ($__case_res_10)($s__prime__, $f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)($h, $s));
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)((function() use ($dict, $f) {
  $__fn = function($v1) use ($dict, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_9)($v1, $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($append, $f, $dict, $__global_Control_Monad_List_Trans_map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g, $fa);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_List_Trans_map1) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_List_Trans_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_11;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$functorListT1 = (object)["map" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dict;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), ($__global_Control_Monad_List_Trans_map1)(($__case_res_13)($f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__case_res_12)($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_14;
$__case_0 = $dict;
$__case_res_15 = null;
if (true) {
$v = $__case_0;
$__case_res_15 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_15;
    $__res = (object)["apply" => (function() use ($bind, $pure) {
  $__fn = function($f, $a = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)($f, (function() use ($bind, $a, $pure) {
  $__fn = function($f__prime__) use ($bind, $a, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($a, (function() use ($pure, $f__prime__) {
  $__fn = function($a__prime__) use ($pure, $f__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(($f__prime__)($a__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_16 = null;
if (true) {
$v = $__case_0;
$__case_res_16 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure1 = $__case_res_16;
$prepend__prime__1 = (function() use ($pure1) {
  $__fn = function($h, $t = null) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($h, $t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$prepend1 = (function() use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__fn = function($h, $t = null) use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($prepend__prime__1)($h, ($__global_Data_Lazy_defer)(($__global_Data_Function_const)($t)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_17 = null;
if (true) {
$v = $__case_0;
$__case_res_17 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$nil1 = ($__case_res_17)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
$applicativeListT1 = (object)["pure" => (function() use ($prepend1, $nil1) {
  $__fn = function($a) use ($prepend1, $nil1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($prepend1)($a, $nil1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_List_Trans_map1) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_List_Trans_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_18 = null;
if (true) {
$v = $__case_0;
$__case_res_18 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_18;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$functorListT1 = (object)["map" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dict;
$__case_res_20 = null;
if (true) {
$v = $__case_0;
$__case_res_20 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), ($__global_Control_Monad_List_Trans_map1)(($__case_res_20)($f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_19 = null;
if (true) {
$v = $__case_0;
$__case_res_19 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__case_res_19)($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_21 = null;
if (true) {
$v = $__case_0;
$__case_res_21 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_21;
$__case_0 = $dict;
$__case_res_22 = null;
if (true) {
$v = $__case_0;
$__case_res_22 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_22;
    $__res = (object)["apply" => (function() use ($bind, $pure) {
  $__fn = function($f, $a = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)($f, (function() use ($bind, $a, $pure) {
  $__fn = function($f__prime__) use ($bind, $a, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($a, (function() use ($pure, $f__prime__) {
  $__fn = function($a__prime__) use ($pure, $f__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(($f__prime__)($a__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$Applicative0 = (($dictMonad)->Applicative0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_23 = null;
if (true) {
$v = $__case_0;
$__case_res_23 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_23;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$functorListT1 = (object)["map" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1) {
  $__fn = function($f) use ($__global_Control_Monad_List_Trans_map1, $dict, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$g = (function() use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
  $__body = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = $dict;
$__case_res_25 = null;
if (true) {
$v = $__case_0;
$__case_res_25 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), ($__global_Control_Monad_List_Trans_map1)(($__case_res_25)($f), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
$__case_0 = $dict;
$__case_res_24 = null;
if (true) {
$v = $__case_0;
$__case_res_24 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)(($__case_res_24)($f), $s));
break;
case "Done":
return ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $dict, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_26 = null;
if (true) {
$v = $__case_0;
$__case_res_26 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map2 = $__case_res_26;
$stepMap1 = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($map2)($f1, $l);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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
$altListT1 = (object)["alt" => (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $stepMap1) {
  $__fn = function($x, $y = null) use ($__global_Control_Monad_List_Trans_map1, $dict, $__global_Data_Lazy_defer, $__global_Data_Function_const, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$f = (function() use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__body = function($v) use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Yield", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($__global_Control_Monad_List_Trans_map1)((function() use ($dict, $y) {
  $__fn = function($v1) use ($dict, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_28 = null;
if (true) {
$v = $__case_0;
$__case_res_28 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_28)($v1, $y);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
break;
case "Skip":
$s = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Control_Monad_List_Trans_map1)((function() use ($dict, $y) {
  $__fn = function($v1) use ($dict, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_27 = null;
if (true) {
$v = $__case_0;
$__case_res_27 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_27)($v1, $y);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
break;
case "Done":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Skip", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($__global_Data_Lazy_defer)(($__global_Data_Function_const)($y)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Control_Monad_List_Trans_map1, $dict, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($f, $x);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $Applicative0;
$__case_res_29 = null;
if (true) {
$v = $__case_0;
$__case_res_29 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$plusListT1 = (object)["empty" => ($__case_res_29)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"))), "Alt0" => (function() use ($altListT1) {
  $__fn = function($__dollar____unused) use ($altListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $altListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$alternativeListT1 = (object)["Applicative0" => (function() use ($applicativeListT1) {
  $__fn = function($__dollar____unused) use ($applicativeListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusListT1) {
  $__fn = function($__dollar____unused) use ($plusListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $plusListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["Monad0" => (function() use ($monadListT1) {
  $__fn = function($__dollar____unused) use ($monadListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() use ($alternativeListT1) {
  $__fn = function($__dollar____unused) use ($alternativeListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $alternativeListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_monadPlusListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_monadPlusListT';

