<?php

namespace Effect\Aff;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Global/index.php';
require_once __DIR__ . '/../Control.Parallel/index.php';
require_once __DIR__ . '/../Control.Parallel.Class/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Aff/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Effect.Exception/index.php';
require_once __DIR__ . '/../Effect.Unsafe/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Unsafe.Coerce/index.php';

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
      case 'Effect_Aff_bind': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_bindEffect'] ?? \Effect\phpurs_eval_thunk('Effect_bindEffect'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Effect_Aff_discard': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Bind_discardUnit'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_discardUnit'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->discard;
} else {
throw new \Exception("Pattern match failure");
};
  return ($__case_res_0)(($GLOBALS['Effect_bindEffect'] ?? \Effect\phpurs_eval_thunk('Effect_bindEffect')));
})(); break;
      case 'Effect_Aff_pure': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_applicativeEffect'] ?? \Effect\phpurs_eval_thunk('Effect_applicativeEffect'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Effect_Aff_compose': $v = (function() {
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
      case 'Effect_Aff_void': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_functorEffect'] ?? \Effect\phpurs_eval_thunk('Effect_functorEffect'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  return ($__case_res_0)((($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
})(); break;
      case 'Effect_Aff_map': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_functorEffect'] ?? \Effect\phpurs_eval_thunk('Effect_functorEffect'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Effect_Aff_pure1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Either_applicativeEither'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_applicativeEither'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Effect_Aff_composeFlipped': $v = (function() {
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
      case 'Effect_Aff_suspendAff': $v = (($GLOBALS['Effect_Aff__fork'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__fork')))(false); break;
      case 'Effect_Aff_newtypeCanceler': $v = (object)["Coercible0" => (function() {
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
      case 'Effect_Aff_functorParAff': $v = (object)["map" => ($GLOBALS['Effect_Aff__parAffMap'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__parAffMap'))]; break;
      case 'Effect_Aff_functorAff': $v = (object)["map" => ($GLOBALS['Effect_Aff__map'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__map'))]; break;
      case 'Effect_Aff_map1': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_Aff_functorAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_functorAff'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Effect_Aff_forkAff': $v = (($GLOBALS['Effect_Aff__fork'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__fork')))(true); break;
      case 'Effect_Aff_ffiUtil': $v = (function() {
  $unsafeFromRight = (function() {
  $__body = function($v) {
    $__global_Partial_Unsafe_unsafeCrashWith = ($GLOBALS['Partial_Unsafe_unsafeCrashWith'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafeCrashWith'));
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Right":
$a = ($__case_0)->v0;
return $a;
break;
case "Left":
return ($__global_Partial_Unsafe_unsafeCrashWith)("unsafeFromRight: Left");
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
})();
  $unsafeFromLeft = (function() {
  $__body = function($v) {
    $__global_Partial_Unsafe_unsafeCrashWith = ($GLOBALS['Partial_Unsafe_unsafeCrashWith'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafeCrashWith'));
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Left":
$a = ($__case_0)->v0;
return $a;
break;
case "Right":
return ($__global_Partial_Unsafe_unsafeCrashWith)("unsafeFromLeft: Right");
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
})();
  $isLeft = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Left":
return true;
break;
case "Right":
return false;
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
})();
  return (object)["isLeft" => $isLeft, "fromLeft" => $unsafeFromLeft, "fromRight" => $unsafeFromRight, "left" => (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "right" => (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      case 'Effect_Aff_launchAff_': $v = (($GLOBALS['Effect_Aff_compose'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_compose')))(($GLOBALS['Effect_Aff_void'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_void')), ($GLOBALS['Effect_Aff_launchAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_launchAff'))); break;
      case 'Effect_Aff_launchSuspendedAff': $v = ($GLOBALS['Effect_Aff_makeFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeFiber')); break;
      case 'Effect_Aff_applyParAff': $v = (object)["apply" => ($GLOBALS['Effect_Aff__parAffApply'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__parAffApply')), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_functorParAff = ($GLOBALS['Effect_Aff_functorParAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_functorParAff'));
    $__res = $__global_Effect_Aff_functorParAff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Effect_Aff_lift2': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_Aff_applyParAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyParAff'));
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
  return (function() use ($apply1, $map) {
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
})(); break;
      case 'Effect_Aff_monadAff': $v = (object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_applicativeAff = ($GLOBALS['Effect_Aff_applicativeAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applicativeAff'));
    $__res = $__global_Effect_Aff_applicativeAff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_bindAff = ($GLOBALS['Effect_Aff_bindAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bindAff'));
    $__res = $__global_Effect_Aff_bindAff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Effect_Aff_bindAff': $v = (object)["bind" => ($GLOBALS['Effect_Aff__bind'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__bind')), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_applyAff = ($GLOBALS['Effect_Aff_applyAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyAff'));
    $__res = $__global_Effect_Aff_applyAff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Effect_Aff_applicativeAff': $v = (object)["pure" => ($GLOBALS['Effect_Aff__pure'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__pure')), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_applyAff = ($GLOBALS['Effect_Aff_applyAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyAff'));
    $__res = $__global_Effect_Aff_applyAff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Effect_Aff_applyAff': $v = (function() {
  $__case_0 = $dict;
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
  $bind = $__case_res_0;
  $__case_0 = $dict;
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
  $pure = $__case_res_1;
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
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_functorAff = ($GLOBALS['Effect_Aff_functorAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_functorAff'));
    $__res = $__global_Effect_Aff_functorAff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      case 'Effect_Aff_pure2': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_Aff_applicativeAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applicativeAff'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Effect_Aff_bind1': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_Aff_bindAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bindAff'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Effect_Aff_lift21': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_Aff_applyAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyAff'));
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
  return (function() use ($apply1, $map) {
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
})(); break;
      case 'Effect_Aff_apply': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_Aff_applyAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyAff'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Effect_Aff_bindFlipped': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_Aff_bindAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bindAff'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
  return (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))($__case_res_0);
})(); break;
      case 'Effect_Aff_lazyAff': $v = (object)["defer" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_bind1 = ($GLOBALS['Effect_Aff_bind1'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bind1'));
$__global_Effect_Aff_pure2 = ($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Effect_Aff_bind1)(($__global_Effect_Aff_pure2)($__global_Data_Unit_unit), $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Effect_Aff_parallelAff': $v = (object)["parallel" => ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce')), "sequential" => ($GLOBALS['Effect_Aff__sequential'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__sequential')), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_applyAff = ($GLOBALS['Effect_Aff_applyAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyAff'));
    $__res = $__global_Effect_Aff_applyAff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_applyParAff = ($GLOBALS['Effect_Aff_applyParAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyParAff'));
    $__res = $__global_Effect_Aff_applyParAff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Effect_Aff_parallel': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_Aff_parallelAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_parallelAff'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Effect_Aff_applicativeParAff': $v = (object)["pure" => (($GLOBALS['Effect_Aff_compose'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_compose')))(($GLOBALS['Effect_Aff_parallel'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_parallel')), ($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2'))), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_applyParAff = ($GLOBALS['Effect_Aff_applyParAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyParAff'));
    $__res = $__global_Effect_Aff_applyParAff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Effect_Aff_pure3': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_Aff_applicativeParAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applicativeParAff'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Effect_Aff_parSequence_': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_Aff_parallelAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_parallelAff'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
  $sequential = $__case_res_0;
  $__case_0 = ($GLOBALS['Effect_Aff_parallelAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_parallelAff'));
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
  $parallel = $__case_res_1;
  $parTraverse_1 = (function() use ($dict, $sequential, $parallel) {
  $__fn = function($dictApplicative) use ($dict, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Apply_identity = ($GLOBALS['Control_Apply_identity'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_identity'));
$__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Control_Parallel_compose = ($GLOBALS['Control_Parallel_compose'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_compose'));
$__case_0 = $dict;
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
$__case_0 = $dictApplicative;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_4;
$traverse_ = (function() use ($__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit) {
  $__fn = function($dictFoldable) use ($__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_5;
    $__res = (function() use ($foldr3, $__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($foldr3, $__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldr3)(($__global_Data_Foldable_compose)($applySecond, $f), ($pure)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($traverse_, $__global_Control_Parallel_compose, $sequential, $parallel) {
  $__fn = function($dictFoldable) use ($traverse_, $__global_Control_Parallel_compose, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverse_1 = ($traverse_)($dictFoldable);
    $__res = (function() use ($__global_Control_Parallel_compose, $sequential, $traverse_1, $parallel) {
  $__fn = function($f) use ($__global_Control_Parallel_compose, $sequential, $traverse_1, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Parallel_compose)($sequential, ($traverse_1)(($__global_Control_Parallel_compose)($parallel, $f)));
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
  return ((function() use ($parTraverse_1) {
  $__fn = function($dictApplicative) use ($parTraverse_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Parallel_identity = ($GLOBALS['Control_Parallel_identity'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_identity'));
$parTraverse_2 = ($parTraverse_1)($dictApplicative);
    $__res = (function() use ($parTraverse_2, $__global_Control_Parallel_identity) {
  $__fn = function($dictFoldable) use ($parTraverse_2, $__global_Control_Parallel_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($parTraverse_2)($dictFoldable, $__global_Control_Parallel_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($GLOBALS['Effect_Aff_applicativeParAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applicativeParAff')), ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray')));
})(); break;
      case 'Effect_Aff_semigroupCanceler': $v = (object)["append" => (function() {
  $__body = function($v, $v1) {
    $__global_Effect_Aff_parSequence_ = ($GLOBALS['Effect_Aff_parSequence_'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_parSequence_'));
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$c1 = $__case_0;
$c2 = $__case_1;
return (function() use ($__global_Effect_Aff_parSequence_, $c1, $c2) {
  $__fn = function($err) use ($__global_Effect_Aff_parSequence_, $c1, $c2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_Aff_parSequence_)([($c1)($err), ($c2)($err)]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
      case 'Effect_Aff_monadEffectAff': $v = (object)["liftEffect" => ($GLOBALS['Effect_Aff__liftEffect'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__liftEffect')), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_monadAff = ($GLOBALS['Effect_Aff_monadAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadAff'));
    $__res = $__global_Effect_Aff_monadAff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Effect_Aff_liftEffect': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_Aff_monadEffectAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadEffectAff'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->liftEffect;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Effect_Aff_effectCanceler': $v = (($GLOBALS['Effect_Aff_compose'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_compose')))(($GLOBALS['Effect_Aff_Canceler'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_Canceler')), (($GLOBALS['Effect_Aff_compose'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_compose')))(($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')), ($GLOBALS['Effect_Aff_liftEffect'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_liftEffect')))); break;
      case 'Effect_Aff_functorFiber': $v = (object)["map" => (function() {
  $__fn = function($f, $t = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($f, &$__fn) { return $__fn($f, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Effect_Unsafe_unsafePerformEffect = ($GLOBALS['Effect_Unsafe_unsafePerformEffect'] ?? \Effect\Unsafe\phpurs_eval_thunk('Effect_Unsafe_unsafePerformEffect'));
$__global_Effect_Aff_makeFiber = ($GLOBALS['Effect_Aff_makeFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeFiber'));
$__global_Effect_Aff_map1 = ($GLOBALS['Effect_Aff_map1'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_map1'));
$__global_Effect_Aff_joinFiber = ($GLOBALS['Effect_Aff_joinFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_joinFiber'));
    $__res = ($__global_Effect_Unsafe_unsafePerformEffect)(($__global_Effect_Aff_makeFiber)(($__global_Effect_Aff_map1)($f, ($__global_Effect_Aff_joinFiber)($t))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Effect_Aff_applyFiber': $v = (object)["apply" => (function() {
  $__fn = function($t1, $t2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t2) use ($t1, &$__fn) { return $__fn($t1, $t2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Effect_Unsafe_unsafePerformEffect = ($GLOBALS['Effect_Unsafe_unsafePerformEffect'] ?? \Effect\Unsafe\phpurs_eval_thunk('Effect_Unsafe_unsafePerformEffect'));
$__global_Effect_Aff_makeFiber = ($GLOBALS['Effect_Aff_makeFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeFiber'));
$__global_Effect_Aff_apply = ($GLOBALS['Effect_Aff_apply'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_apply'));
$__global_Effect_Aff_joinFiber = ($GLOBALS['Effect_Aff_joinFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_joinFiber'));
    $__res = ($__global_Effect_Unsafe_unsafePerformEffect)(($__global_Effect_Aff_makeFiber)(($__global_Effect_Aff_apply)(($__global_Effect_Aff_joinFiber)($t1), ($__global_Effect_Aff_joinFiber)($t2))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_functorFiber = ($GLOBALS['Effect_Aff_functorFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_functorFiber'));
    $__res = $__global_Effect_Aff_functorFiber;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Effect_Aff_applicativeFiber': $v = (object)["pure" => (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Unsafe_unsafePerformEffect = ($GLOBALS['Effect_Unsafe_unsafePerformEffect'] ?? \Effect\Unsafe\phpurs_eval_thunk('Effect_Unsafe_unsafePerformEffect'));
$__global_Effect_Aff_makeFiber = ($GLOBALS['Effect_Aff_makeFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeFiber'));
$__global_Effect_Aff_pure2 = ($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2'));
    $__res = ($__global_Effect_Unsafe_unsafePerformEffect)(($__global_Effect_Aff_makeFiber)(($__global_Effect_Aff_pure2)($a)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_applyFiber = ($GLOBALS['Effect_Aff_applyFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyFiber'));
    $__res = $__global_Effect_Aff_applyFiber;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Effect_Aff_fiberCanceler': $v = (($GLOBALS['Effect_Aff_compose'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_compose')))(($GLOBALS['Effect_Aff_Canceler'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_Canceler')), (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($GLOBALS['Effect_Aff_killFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_killFiber')))); break;
      case 'Effect_Aff_monadSTAff': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Monad_ST_Class_monadSTEffect'] ?? \Control\Monad\ST\Class\phpurs_eval_thunk('Control_Monad_ST_Class_monadSTEffect'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->liftST;
} else {
throw new \Exception("Pattern match failure");
};
  return (object)["liftST" => (($GLOBALS['Effect_Aff_composeFlipped'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_composeFlipped')))($__case_res_0, ($GLOBALS['Effect_Aff_liftEffect'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_liftEffect'))), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_monadAff = ($GLOBALS['Effect_Aff_monadAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadAff'));
    $__res = $__global_Effect_Aff_monadAff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      case 'Effect_Aff_monadThrowAff': $v = (object)["throwError" => ($GLOBALS['Effect_Aff__throwError'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__throwError')), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_monadAff = ($GLOBALS['Effect_Aff_monadAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadAff'));
    $__res = $__global_Effect_Aff_monadAff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Effect_Aff_monadErrorAff': $v = (object)["catchError" => ($GLOBALS['Effect_Aff__catchError'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__catchError')), "MonadThrow0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_monadThrowAff = ($GLOBALS['Effect_Aff_monadThrowAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadThrowAff'));
    $__res = $__global_Effect_Aff_monadThrowAff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Effect_Aff_try': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_Aff_monadErrorAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadErrorAff'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->catchError;
} else {
throw new \Exception("Pattern match failure");
};
  $catchError1 = $__case_res_0;
  $Monad0 = ((((($GLOBALS['Effect_Aff_monadErrorAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadErrorAff')))->MonadThrow0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
  $__case_0 = $dict;
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  $map = $__case_res_1;
  $__case_0 = $dict;
  $__case_res_2 = null;
  if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
  $pure = $__case_res_2;
  return (function() use ($catchError1, $map, $pure) {
  $__fn = function($a) use ($catchError1, $map, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Error_Class_compose = ($GLOBALS['Control_Monad_Error_Class_compose'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_compose'));
    $__res = ($catchError1)(($map)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $a), ($__global_Control_Monad_Error_Class_compose)($pure, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Effect_Aff_catchError': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_Aff_monadErrorAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadErrorAff'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->catchError;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Effect_Aff_attempt': $v = ($GLOBALS['Effect_Aff_try'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_try')); break;
      case 'Effect_Aff_monadRecAff': $v = (object)["tailRecM" => (function() {
  $__fn = function($k) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_bind1 = ($GLOBALS['Effect_Aff_bind1'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bind1'));
$__global_Effect_Aff_pure2 = ($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2'));
$go = (function() use ($__global_Effect_Aff_bind1, $k, $__global_Effect_Aff_pure2, &$go) {
  $__fn = function($a) use ($__global_Effect_Aff_bind1, $k, $__global_Effect_Aff_pure2, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
return ($__global_Effect_Aff_bind1)(($k)($a), (function() use ($__global_Effect_Aff_pure2, &$go) {
  $__body = function($res) use ($__global_Effect_Aff_pure2, &$go) {
    $__case_0 = $res;
    switch (($__case_0)->tag) {
case "Done":
$r = ($__case_0)->v0;
return ($__global_Effect_Aff_pure2)($r);
break;
case "Loop":
$b = ($__case_0)->v0;
return ($go)($b);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($res) use ($__global_Effect_Aff_pure2, &$go, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($res);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
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
})(), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_monadAff = ($GLOBALS['Effect_Aff_monadAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadAff'));
    $__res = $__global_Effect_Aff_monadAff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Effect_Aff_nonCanceler': $v = (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))((($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')))); break;
      case 'Effect_Aff_monoidCanceler': $v = (object)["mempty" => ($GLOBALS['Effect_Aff_nonCanceler'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_nonCanceler')), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_semigroupCanceler = ($GLOBALS['Effect_Aff_semigroupCanceler'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_semigroupCanceler'));
    $__res = $__global_Effect_Aff_semigroupCanceler;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Effect_Aff_mempty': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_Aff_monoidCanceler'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monoidCanceler'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Effect_Aff_never': $v = (($GLOBALS['Effect_Aff_makeAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeAff')))((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_pure = ($GLOBALS['Effect_Aff_pure'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure'));
$__global_Effect_Aff_mempty = ($GLOBALS['Effect_Aff_mempty'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_mempty'));
    $__res = ($__global_Effect_Aff_pure)($__global_Effect_Aff_mempty);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Effect_Aff_apathize': $v = (($GLOBALS['Effect_Aff_composeFlipped'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_composeFlipped')))(($GLOBALS['Effect_Aff_try'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_try')), (($GLOBALS['Effect_Aff_map1'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_map1')))((($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))))); break;
      case 'Effect_Aff_altParAff': $v = (object)["alt" => ($GLOBALS['Effect_Aff__parAffAlt'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__parAffAlt')), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_functorParAff = ($GLOBALS['Effect_Aff_functorParAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_functorParAff'));
    $__res = $__global_Effect_Aff_functorParAff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Effect_Aff_altAff': $v = (object)["alt" => (function() {
  $__fn = function($a1, $a2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Effect_Aff_catchError = ($GLOBALS['Effect_Aff_catchError'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_catchError'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
    $__res = ($__global_Effect_Aff_catchError)($a1, ($__global_Data_Function_const)($a2));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_functorAff = ($GLOBALS['Effect_Aff_functorAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_functorAff'));
    $__res = $__global_Effect_Aff_functorAff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Effect_Aff_plusAff': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_Aff_monadThrowAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadThrowAff'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->throwError;
} else {
throw new \Exception("Pattern match failure");
};
  return (object)["empty" => ($__case_res_0)((($GLOBALS['Effect_Exception_error'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_error')))("Always fails")), "Alt0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_altAff = ($GLOBALS['Effect_Aff_altAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_altAff'));
    $__res = $__global_Effect_Aff_altAff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      case 'Effect_Aff_plusParAff': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_Aff_plusAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_plusAff'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->empty;
} else {
throw new \Exception("Pattern match failure");
};
  return (object)["empty" => (($GLOBALS['Effect_Aff_parallel'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_parallel')))($__case_res_0), "Alt0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_altParAff = ($GLOBALS['Effect_Aff_altParAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_altParAff'));
    $__res = $__global_Effect_Aff_altParAff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      case 'Effect_Aff_alternativeParAff': $v = (object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_applicativeParAff = ($GLOBALS['Effect_Aff_applicativeParAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applicativeParAff'));
    $__res = $__global_Effect_Aff_applicativeParAff;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_plusParAff = ($GLOBALS['Effect_Aff_plusParAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_plusParAff'));
    $__res = $__global_Effect_Aff_plusParAff;
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
$Effect_Aff__pure = function($x) { return function() use(&$x) { return $x; }; };
$Effect_Aff__map = function($f, $aff = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Effect_Aff__map;
            return $Effect_Aff__map(...array_merge($__args, $more));
        };
    }
    return function() use(&$f, &$aff) { return $f($aff()); };
};
$Effect_Aff__bind = function($aff, $f = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Effect_Aff__bind;
            return $Effect_Aff__bind(...array_merge($__args, $more));
        };
    }
    return function() use(&$aff, &$f) { return $f($aff())(); };
};
$Effect_Aff__liftEffect = function($eff) { return $eff; };
$Effect_Aff__makeFiber = function($util, $aff) { return function() use(&$aff) { $fiber = new \Fiber($aff); $fiber->start(); return (object)['run' => function() {}, 'join' => function($k) { return function() { return function(){}; }; }]; }; };
$Effect_Aff__fork = function($immediate, $aff = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Effect_Aff__fork;
            return $Effect_Aff__fork(...array_merge($__args, $more));
        };
    }
    return function() use(&$aff) { $fiber = new \Fiber($aff); \Revolt\EventLoop::queue(function() use(&$fiber) { $fiber->start(); }); return (object)['run' => function() {}, 'join' => function($k){ return function(){ return function(){}; }; }]; };
};
$Effect_Aff__delay = function($right, $ms) { return function() use(&$right, &$ms) { $fiber = \Fiber::getCurrent(); \Revolt\EventLoop::delay($ms / 1000, function() use(&$fiber, &$right) { if ($fiber) $fiber->resume(); }); if ($fiber) \Fiber::suspend(); return $right(null); }; };
$Effect_Aff__makeSupervisedFiber = $Effect_Aff__makeFiber;
$Effect_Aff__killAll = function($err, $sup, $cb) { return function() { return function(){}; }; };
$Effect_Aff_makeAff = function($k) { return function() use(&$k) { return $k(function($res){ return function(){}; })(); }; };
$Effect_Aff__throwError = function($err) { return function() use(&$err) { throw $err; }; };
$Effect_Aff__catchError = function($aff, $f = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Effect_Aff__catchError;
            return $Effect_Aff__catchError(...array_merge($__args, $more));
        };
    }
    return function() use(&$aff, &$f) { try { return $aff(); } catch (\Throwable $e) { return $f($e)(); } };
};
$Effect_Aff_generalBracket = function($acq) { return function($cond) { return function($use) use(&$acq) { return function() use(&$acq, &$use) { $res = $acq(); return $use($res)(); }; }; }; };
$Effect_Aff__parAffMap = $Effect_Aff__map;
$Effect_Aff__parAffApply = function($aff1, $aff2 = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Effect_Aff__parAffApply;
            return $Effect_Aff__parAffApply(...array_merge($__args, $more));
        };
    }
    return function() use(&$aff1, &$aff2) { return $aff1()($aff2()); };
};
$Effect_Aff__sequential = function($aff) { return $aff; };
$Effect_Aff__parAffAlt = function($aff1, $aff2 = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Effect_Aff__parAffAlt;
            return $Effect_Aff__parAffAlt(...array_merge($__args, $more));
        };
    }
    return function() use(&$aff1, &$aff2) { try { return $aff1(); } catch (\Throwable $e) { return $aff2(); } };
};









// Effect_Aff_Fiber
function Effect_Aff_Fiber($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Fiber';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Fiber'] = __NAMESPACE__ . '\\Effect_Aff_Fiber';

// Effect_Aff_FFIUtil
function Effect_Aff_FFIUtil($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_FFIUtil';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_FFIUtil'] = __NAMESPACE__ . '\\Effect_Aff_FFIUtil';

// Effect_Aff_Canceler
function Effect_Aff_Canceler($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Canceler';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Canceler'] = __NAMESPACE__ . '\\Effect_Aff_Canceler';








// Effect_Aff_makeFiber
function Effect_Aff_makeFiber($aff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_makeFiber';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$__global_Effect_Aff__makeFiber = ($GLOBALS['Effect_Aff__makeFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__makeFiber'));
$__global_Effect_Aff_ffiUtil = ($GLOBALS['Effect_Aff_ffiUtil'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_ffiUtil'));
    $__res = ($__global_Data_Function_Uncurried_runFn2)($__global_Effect_Aff__makeFiber, $__global_Effect_Aff_ffiUtil, $aff);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_makeFiber'] = __NAMESPACE__ . '\\Effect_Aff_makeFiber';

// Effect_Aff_launchAff
function Effect_Aff_launchAff($aff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_launchAff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_bind = ($GLOBALS['Effect_Aff_bind'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bind'));
$__global_Effect_Aff_makeFiber = ($GLOBALS['Effect_Aff_makeFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeFiber'));
$__global_Effect_Aff_discard = ($GLOBALS['Effect_Aff_discard'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_discard'));
$__global_Effect_Aff_pure = ($GLOBALS['Effect_Aff_pure'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure'));
    $__res = ($__global_Effect_Aff_bind)(($__global_Effect_Aff_makeFiber)($aff), (function() use ($__global_Effect_Aff_discard, $__global_Effect_Aff_pure) {
  $__fn = function($fiber) use ($__global_Effect_Aff_discard, $__global_Effect_Aff_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $fiber;
$__case_res_0 = null;
if (true) {
$f = $__case_0;
$__case_res_0 = ($f)->run;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Effect_Aff_discard)($__case_res_0, (function() use ($__global_Effect_Aff_pure, $fiber) {
  $__fn = function($__dollar____unused) use ($__global_Effect_Aff_pure, $fiber, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_Aff_pure)($fiber);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_launchAff'] = __NAMESPACE__ . '\\Effect_Aff_launchAff';



// Effect_Aff_delay
function Effect_Aff_delay($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_delay';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
    $__global_Effect_Aff__delay = ($GLOBALS['Effect_Aff__delay'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__delay'));
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($__global_Data_Function_Uncurried_runFn2)($__global_Effect_Aff__delay, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $n);
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_delay'] = __NAMESPACE__ . '\\Effect_Aff_delay';

// Effect_Aff_bracket
function Effect_Aff_bracket($acquire, $completed = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_bracket';
  if ($__num < 2) {
    if ($__num === 1) return function($completed) use ($acquire, $__fn) { return $__fn($acquire, $completed); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Effect_Aff_generalBracket = ($GLOBALS['Effect_Aff_generalBracket'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_generalBracket'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
    $__res = ($__global_Effect_Aff_generalBracket)($acquire, (object)["killed" => ($__global_Data_Function_const)($completed), "failed" => ($__global_Data_Function_const)($completed), "completed" => ($__global_Data_Function_const)($completed)]);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Effect_Aff_bracket'] = __NAMESPACE__ . '\\Effect_Aff_bracket';



// Effect_Aff_semigroupParAff
function Effect_Aff_semigroupParAff($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_semigroupParAff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_lift2 = ($GLOBALS['Effect_Aff_lift2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_lift2'));
$__case_0 = $dictSemigroup;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["append" => ($__global_Effect_Aff_lift2)($__case_res_0)];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_semigroupParAff'] = __NAMESPACE__ . '\\Effect_Aff_semigroupParAff';










// Effect_Aff_cancelWith
function Effect_Aff_cancelWith($aff, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_cancelWith';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($aff, $__fn) { return $__fn($aff, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($aff, $v) {
    $__global_Effect_Aff_generalBracket = ($GLOBALS['Effect_Aff_generalBracket'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_generalBracket'));
    $__global_Effect_Aff_pure2 = ($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2'));
    $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
    $__case_0 = $aff;
    $__case_1 = $v;
    if (true) {
$aff1 = $__case_0;
$cancel = $__case_1;
return ($__global_Effect_Aff_generalBracket)(($__global_Effect_Aff_pure2)($__global_Data_Unit_unit), (object)["killed" => (function() use ($cancel) {
  $__fn = function($e, $v1 = null) use ($cancel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($e, &$__fn) { return $__fn($e, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($cancel)($e);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "failed" => ($__global_Data_Function_const)($__global_Effect_Aff_pure2), "completed" => ($__global_Data_Function_const)($__global_Effect_Aff_pure2)], ($__global_Data_Function_const)($aff1));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($aff, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Effect_Aff_cancelWith'] = __NAMESPACE__ . '\\Effect_Aff_cancelWith';

// Effect_Aff_finally
function Effect_Aff_finally($fin, $a = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_finally';
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($fin, $__fn) { return $__fn($fin, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Effect_Aff_bracket = ($GLOBALS['Effect_Aff_bracket'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bracket'));
$__global_Effect_Aff_pure2 = ($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
    $__res = ($__global_Effect_Aff_bracket)(($__global_Effect_Aff_pure2)($__global_Data_Unit_unit), ($__global_Data_Function_const)($fin), ($__global_Data_Function_const)($a));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Effect_Aff_finally'] = __NAMESPACE__ . '\\Effect_Aff_finally';

// Effect_Aff_invincible
function Effect_Aff_invincible($a) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_invincible';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_bracket = ($GLOBALS['Effect_Aff_bracket'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bracket'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Effect_Aff_pure2 = ($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Effect_Aff_bracket)($a, ($__global_Data_Function_const)(($__global_Effect_Aff_pure2)($__global_Data_Unit_unit)), $__global_Effect_Aff_pure2);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_invincible'] = __NAMESPACE__ . '\\Effect_Aff_invincible';







// Effect_Aff_monoidParAff
function Effect_Aff_monoidParAff($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_monoidParAff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_lift2 = ($GLOBALS['Effect_Aff_lift2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_lift2'));
$__global_Effect_Aff_pure3 = ($GLOBALS['Effect_Aff_pure3'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure3'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$semigroupParAff1 = (object)["append" => ($__global_Effect_Aff_lift2)($__case_res_0)];
$__case_0 = $dictMonoid;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["mempty" => ($__global_Effect_Aff_pure3)($__case_res_1), "Semigroup0" => (function() use ($semigroupParAff1) {
  $__fn = function($__dollar____unused) use ($semigroupParAff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupParAff1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_monoidParAff'] = __NAMESPACE__ . '\\Effect_Aff_monoidParAff';


// Effect_Aff_semigroupAff
function Effect_Aff_semigroupAff($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_semigroupAff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_lift21 = ($GLOBALS['Effect_Aff_lift21'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_lift21'));
$__case_0 = $dictSemigroup;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["append" => ($__global_Effect_Aff_lift21)($__case_res_0)];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_semigroupAff'] = __NAMESPACE__ . '\\Effect_Aff_semigroupAff';




// Effect_Aff_joinFiber
function Effect_Aff_joinFiber($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_joinFiber';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__global_Effect_Aff_makeAff = ($GLOBALS['Effect_Aff_makeAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeAff'));
    $__global_Effect_Aff_map = ($GLOBALS['Effect_Aff_map'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_map'));
    $__global_Effect_Aff_effectCanceler = ($GLOBALS['Effect_Aff_effectCanceler'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_effectCanceler'));
    $__case_0 = $v;
    if (true) {
$t = $__case_0;
return ($__global_Effect_Aff_makeAff)((function() use ($__global_Effect_Aff_map, $__global_Effect_Aff_effectCanceler, $t) {
  $__fn = function($k) use ($__global_Effect_Aff_map, $__global_Effect_Aff_effectCanceler, $t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_Aff_map)($__global_Effect_Aff_effectCanceler, (($t)->join)($k));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_joinFiber'] = __NAMESPACE__ . '\\Effect_Aff_joinFiber';




// Effect_Aff_killFiber
function Effect_Aff_killFiber($e, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_killFiber';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($e, $__fn) { return $__fn($e, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($e, $v) {
    $__global_Effect_Aff_bind1 = ($GLOBALS['Effect_Aff_bind1'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bind1'));
    $__global_Effect_Aff_liftEffect = ($GLOBALS['Effect_Aff_liftEffect'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_liftEffect'));
    $__global_Effect_Aff_void = ($GLOBALS['Effect_Aff_void'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_void'));
    $__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
    $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
    $__global_Effect_Aff_pure = ($GLOBALS['Effect_Aff_pure'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure'));
    $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__global_Effect_Aff_makeAff = ($GLOBALS['Effect_Aff_makeAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeAff'));
    $__global_Effect_Aff_map = ($GLOBALS['Effect_Aff_map'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_map'));
    $__global_Effect_Aff_effectCanceler = ($GLOBALS['Effect_Aff_effectCanceler'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_effectCanceler'));
    $__case_0 = $e;
    $__case_1 = $v;
    if (true) {
$e1 = $__case_0;
$t = $__case_1;
return ($__global_Effect_Aff_bind1)(($__global_Effect_Aff_liftEffect)(($t)->isSuspended), (function() use ($__global_Effect_Aff_liftEffect, $__global_Effect_Aff_void, $__global_Data_Function_Uncurried_runFn2, $t, $e1, $__global_Data_Function_const, $__global_Effect_Aff_pure, $__global_Data_Unit_unit, $__global_Effect_Aff_makeAff, $__global_Effect_Aff_map, $__global_Effect_Aff_effectCanceler) {
  $__body = function($suspended) use ($__global_Effect_Aff_liftEffect, $__global_Effect_Aff_void, $__global_Data_Function_Uncurried_runFn2, $t, $e1, $__global_Data_Function_const, $__global_Effect_Aff_pure, $__global_Data_Unit_unit, $__global_Effect_Aff_makeAff, $__global_Effect_Aff_map, $__global_Effect_Aff_effectCanceler) {
    $__case_0 = $suspended;
    switch ($__case_0) {
case true:
return ($__global_Effect_Aff_liftEffect)(($__global_Effect_Aff_void)(($__global_Data_Function_Uncurried_runFn2)(($t)->kill, $e1, ($__global_Data_Function_const)(($__global_Effect_Aff_pure)($__global_Data_Unit_unit)))));
break;
default:
return ($__global_Effect_Aff_makeAff)((function() use ($__global_Effect_Aff_map, $__global_Effect_Aff_effectCanceler, $__global_Data_Function_Uncurried_runFn2, $t, $e1) {
  $__fn = function($k) use ($__global_Effect_Aff_map, $__global_Effect_Aff_effectCanceler, $__global_Data_Function_Uncurried_runFn2, $t, $e1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_Aff_map)($__global_Effect_Aff_effectCanceler, ($__global_Data_Function_Uncurried_runFn2)(($t)->kill, $e1, $k));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
};
  };
  $__fn = function($suspended) use ($__global_Effect_Aff_liftEffect, $__global_Effect_Aff_void, $__global_Data_Function_Uncurried_runFn2, $t, $e1, $__global_Data_Function_const, $__global_Effect_Aff_pure, $__global_Data_Unit_unit, $__global_Effect_Aff_makeAff, $__global_Effect_Aff_map, $__global_Effect_Aff_effectCanceler, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($suspended);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($e, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Effect_Aff_killFiber'] = __NAMESPACE__ . '\\Effect_Aff_killFiber';


// Effect_Aff_supervise
function Effect_Aff_supervise($aff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_supervise';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Exception_error = ($GLOBALS['Effect_Exception_error'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_error'));
$__global_Effect_Aff_makeAff = ($GLOBALS['Effect_Aff_makeAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeAff'));
$__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
$__global_Effect_Aff__killAll = ($GLOBALS['Effect_Aff__killAll'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__killAll'));
$__global_Effect_Aff_pure1 = ($GLOBALS['Effect_Aff_pure1'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure1'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Effect_Aff_bind = ($GLOBALS['Effect_Aff_bind'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bind'));
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$__global_Effect_Aff__makeSupervisedFiber = ($GLOBALS['Effect_Aff__makeSupervisedFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__makeSupervisedFiber'));
$__global_Effect_Aff_ffiUtil = ($GLOBALS['Effect_Aff_ffiUtil'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_ffiUtil'));
$__global_Effect_Aff_discard = ($GLOBALS['Effect_Aff_discard'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_discard'));
$__global_Effect_Aff_pure = ($GLOBALS['Effect_Aff_pure'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure'));
$__global_Effect_Aff_generalBracket = ($GLOBALS['Effect_Aff_generalBracket'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_generalBracket'));
$__global_Effect_Aff_liftEffect = ($GLOBALS['Effect_Aff_liftEffect'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_liftEffect'));
$__global_Effect_Aff_parSequence_ = ($GLOBALS['Effect_Aff_parSequence_'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_parSequence_'));
$__global_Effect_Aff_killFiber = ($GLOBALS['Effect_Aff_killFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_killFiber'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Effect_Aff_compose = ($GLOBALS['Effect_Aff_compose'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_compose'));
$__global_Effect_Aff_joinFiber = ($GLOBALS['Effect_Aff_joinFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_joinFiber'));
$killError = ($__global_Effect_Exception_error)("[Aff] Child fiber outlived parent");
$killAll = (function() use ($__global_Effect_Aff_makeAff, $__global_Data_Function_Uncurried_runFn3, $__global_Effect_Aff__killAll, $__global_Effect_Aff_pure1, $__global_Data_Unit_unit) {
  $__fn = function($err, $sup = null) use ($__global_Effect_Aff_makeAff, $__global_Data_Function_Uncurried_runFn3, $__global_Effect_Aff__killAll, $__global_Effect_Aff_pure1, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($sup) use ($err, &$__fn) { return $__fn($err, $sup); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Effect_Aff_makeAff)((function() use ($__global_Data_Function_Uncurried_runFn3, $__global_Effect_Aff__killAll, $err, $sup, $__global_Effect_Aff_pure1, $__global_Data_Unit_unit) {
  $__fn = function($k) use ($__global_Data_Function_Uncurried_runFn3, $__global_Effect_Aff__killAll, $err, $sup, $__global_Effect_Aff_pure1, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn3)($__global_Effect_Aff__killAll, $err, ($sup)->supervisor, ($k)(($__global_Effect_Aff_pure1)($__global_Data_Unit_unit)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$acquire = ($__global_Effect_Aff_bind)(($__global_Data_Function_Uncurried_runFn2)($__global_Effect_Aff__makeSupervisedFiber, $__global_Effect_Aff_ffiUtil, $aff), (function() use ($__global_Effect_Aff_discard, $__global_Effect_Aff_pure) {
  $__fn = function($sup) use ($__global_Effect_Aff_discard, $__global_Effect_Aff_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = ($sup)->fiber;
$__case_res_0 = null;
if (true) {
$f = $__case_0;
$__case_res_0 = ($f)->run;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Effect_Aff_discard)($__case_res_0, (function() use ($__global_Effect_Aff_pure, $sup) {
  $__fn = function($__dollar____unused) use ($__global_Effect_Aff_pure, $sup, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_Aff_pure)($sup);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    $__res = ($__global_Effect_Aff_generalBracket)(($__global_Effect_Aff_liftEffect)($acquire), (object)["killed" => (function() use ($__global_Effect_Aff_parSequence_, $__global_Effect_Aff_killFiber, $killAll) {
  $__fn = function($err, $sup = null) use ($__global_Effect_Aff_parSequence_, $__global_Effect_Aff_killFiber, $killAll, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($sup) use ($err, &$__fn) { return $__fn($err, $sup); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Effect_Aff_parSequence_)([($__global_Effect_Aff_killFiber)($err, ($sup)->fiber), ($killAll)($err, $sup)]);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "failed" => ($__global_Data_Function_const)(($killAll)($killError)), "completed" => ($__global_Data_Function_const)(($killAll)($killError))], ($__global_Effect_Aff_compose)($__global_Effect_Aff_joinFiber, (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v)->fiber;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_supervise'] = __NAMESPACE__ . '\\Effect_Aff_supervise';







// Effect_Aff_runAff
function Effect_Aff_runAff($k, $aff = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_runAff';
  if ($__num < 2) {
    if ($__num === 1) return function($aff) use ($k, $__fn) { return $__fn($k, $aff); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Effect_Aff_launchAff = ($GLOBALS['Effect_Aff_launchAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_launchAff'));
$__global_Effect_Aff_bindFlipped = ($GLOBALS['Effect_Aff_bindFlipped'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bindFlipped'));
$__global_Effect_Aff_compose = ($GLOBALS['Effect_Aff_compose'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_compose'));
$__global_Effect_Aff_liftEffect = ($GLOBALS['Effect_Aff_liftEffect'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_liftEffect'));
$__global_Effect_Aff_try = ($GLOBALS['Effect_Aff_try'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_try'));
    $__res = ($__global_Effect_Aff_launchAff)(($__global_Effect_Aff_bindFlipped)(($__global_Effect_Aff_compose)($__global_Effect_Aff_liftEffect, $k), ($__global_Effect_Aff_try)($aff)));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Effect_Aff_runAff'] = __NAMESPACE__ . '\\Effect_Aff_runAff';

// Effect_Aff_runAff_
function Effect_Aff_runAff_($k, $aff = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_runAff_';
  if ($__num < 2) {
    if ($__num === 1) return function($aff) use ($k, $__fn) { return $__fn($k, $aff); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Effect_Aff_void = ($GLOBALS['Effect_Aff_void'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_void'));
$__global_Effect_Aff_runAff = ($GLOBALS['Effect_Aff_runAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_runAff'));
    $__res = ($__global_Effect_Aff_void)(($__global_Effect_Aff_runAff)($k, $aff));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Effect_Aff_runAff_'] = __NAMESPACE__ . '\\Effect_Aff_runAff_';

// Effect_Aff_runSuspendedAff
function Effect_Aff_runSuspendedAff($k, $aff = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_runSuspendedAff';
  if ($__num < 2) {
    if ($__num === 1) return function($aff) use ($k, $__fn) { return $__fn($k, $aff); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Effect_Aff_makeFiber = ($GLOBALS['Effect_Aff_makeFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeFiber'));
$__global_Effect_Aff_bindFlipped = ($GLOBALS['Effect_Aff_bindFlipped'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bindFlipped'));
$__global_Effect_Aff_compose = ($GLOBALS['Effect_Aff_compose'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_compose'));
$__global_Effect_Aff_liftEffect = ($GLOBALS['Effect_Aff_liftEffect'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_liftEffect'));
$__global_Effect_Aff_try = ($GLOBALS['Effect_Aff_try'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_try'));
    $__res = ($__global_Effect_Aff_makeFiber)(($__global_Effect_Aff_bindFlipped)(($__global_Effect_Aff_compose)($__global_Effect_Aff_liftEffect, $k), ($__global_Effect_Aff_try)($aff)));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Effect_Aff_runSuspendedAff'] = __NAMESPACE__ . '\\Effect_Aff_runSuspendedAff';


// Effect_Aff_monoidAff
function Effect_Aff_monoidAff($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_monoidAff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Effect_Aff_lift21 = ($GLOBALS['Effect_Aff_lift21'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_lift21'));
$__global_Effect_Aff_pure2 = ($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$semigroupAff1 = (object)["append" => ($__global_Effect_Aff_lift21)($__case_res_0)];
$__case_0 = $dictMonoid;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["mempty" => ($__global_Effect_Aff_pure2)($__case_res_1), "Semigroup0" => (function() use ($semigroupAff1) {
  $__fn = function($__dollar____unused) use ($semigroupAff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupAff1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_monoidAff'] = __NAMESPACE__ . '\\Effect_Aff_monoidAff';











