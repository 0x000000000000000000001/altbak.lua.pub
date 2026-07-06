<?php

namespace Control\Monad\Except\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Except.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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
      case 'Control_Monad_Except_Trans_map': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Either_functorEither'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_functorEither'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Control_Monad_Except_Trans_compose': $v = (function() {
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
      case 'Control_Monad_Except_Trans_identity': $v = (function() {
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
      case 'Control_Monad_Except_Trans_newtypeExceptT': $v = (object)["Coercible0" => (function() {
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
      case 'Control_Monad_Except_Trans_monadTransExceptT': $v = (object)["lift" => (function() use ($dict) {
  $__fn = function($dictMonad) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
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
    $__res = (function() use ($bind, $pure) {
  $__fn = function($m) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($m, (function() use ($pure) {
  $__fn = function($a) use ($pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($a));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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
})()]; break;
      case 'Control_Monad_Except_Trans_lift': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Monad_Except_Trans_monadTransExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_monadTransExceptT'));
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





// Control_Monad_Except_Trans_ExceptT
function Control_Monad_Except_Trans_ExceptT($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_ExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_ExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_ExceptT';

// Control_Monad_Except_Trans_withExceptT
function Control_Monad_Except_Trans_withExceptT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_withExceptT';
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
$map1 = $__case_res_0;
    $__res = (function() use ($map1) {
  $__body = function($f, $v) use ($map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$t = $__case_1;
$mapLeft = (function() {
  $__body = function($v1, $v2) {
    $__case_0 = $v1;
    $__case_1 = $v2;
    switch (($__case_1)->tag) {
case "Right":
$x = ($__case_1)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($x);
break;
case "Left":
$f__prime__ = $__case_0;
$x = ($__case_1)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($f__prime__)($x));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v2) use ($v1, &$__fn) { return $__fn($v1, $v2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v1, $v2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return ($map1)(($mapLeft)($f1), $t);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__body, &$__fn) {
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
$GLOBALS['Control_Monad_Except_Trans_withExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_withExceptT';

// Control_Monad_Except_Trans_runExceptT
function Control_Monad_Except_Trans_runExceptT($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_runExceptT';
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
$GLOBALS['Control_Monad_Except_Trans_runExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_runExceptT';




// Control_Monad_Except_Trans_mapExceptT
function Control_Monad_Except_Trans_mapExceptT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_mapExceptT';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return ($f1)($m);
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_mapExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_mapExceptT';

// Control_Monad_Except_Trans_functorExceptT
function Control_Monad_Except_Trans_functorExceptT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_functorExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
$__case_0 = $dictFunctor;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_0;
    $__res = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_functorExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_functorExceptT';

// Control_Monad_Except_Trans_except
function Control_Monad_Except_Trans_except($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_except';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
$__global_Control_Monad_Except_Trans_ExceptT = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT'));
$__case_0 = $dictApplicative;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, $__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_except'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_except';

// Control_Monad_Except_Trans_monadExceptT
function Control_Monad_Except_Trans_monadExceptT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
$__global_Control_Monad_Except_Trans_ExceptT = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT'));
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
$__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
while (true) {
return (object)["Applicative0" => (function() use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
    $__res = (object)["pure" => ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($__global_Control_Monad_Except_Trans_compose)($__case_res_0, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
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
$pure = $__case_res_3;
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_4;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_5;
    $__res = (object)["bind" => (function() use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
  $__body = function($v, $k) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($bind)($m, ($__global_Data_Either_either)(($__global_Control_Monad_Except_Trans_compose)($pure, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($k1) {
  $__body = function($a) use ($k1) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($k1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $k = null) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, &$__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $k);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$map1 = $__case_res_6;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
$GLOBALS['Control_Monad_Except_Trans_monadExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadExceptT';

// Control_Monad_Except_Trans_bindExceptT
function Control_Monad_Except_Trans_bindExceptT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_bindExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
$__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
while (true) {
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
return (object)["bind" => (function() use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
  $__body = function($v, $k) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($bind)($m, ($__global_Data_Either_either)(($__global_Control_Monad_Except_Trans_compose)($pure, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($k1) {
  $__body = function($a) use ($k1) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($k1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $k = null) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, &$__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $k);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$map1 = $__case_res_2;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
$GLOBALS['Control_Monad_Except_Trans_bindExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_bindExceptT';

// Control_Monad_Except_Trans_applyExceptT
function Control_Monad_Except_Trans_applyExceptT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_applyExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
while (true) {
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_0;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
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
$pure = $__case_res_2;
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_applyExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_applyExceptT';

// Control_Monad_Except_Trans_applicativeExceptT
function Control_Monad_Except_Trans_applicativeExceptT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_applicativeExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
$__global_Control_Monad_Except_Trans_ExceptT = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT'));
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
while (true) {
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
return (object)["pure" => ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($__global_Control_Monad_Except_Trans_compose)($__case_res_0, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
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
$pure = $__case_res_3;
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
$GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_applicativeExceptT';

// Control_Monad_Except_Trans_semigroupExceptT
function Control_Monad_Except_Trans_semigroupExceptT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_semigroupExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
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
    $__res = (function() use ($lift2) {
  $__fn = function($dictSemigroup) use ($lift2, &$__fn) {
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
    $__res = (object)["append" => ($lift2)($__case_res_2)];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_semigroupExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_semigroupExceptT';

// Control_Monad_Except_Trans_monadAskExceptT
function Control_Monad_Except_Trans_monadAskExceptT($dictMonadAsk) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadAskExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
$__global_Control_Monad_Except_Trans_ExceptT = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT'));
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
$__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
$__global_Control_Monad_Except_Trans_lift = ($GLOBALS['Control_Monad_Except_Trans_lift'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_lift'));
$Monad0 = (($dictMonadAsk)->Monad0)($__global_Prim_undefined);
$monadExceptT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
    $__res = (object)["pure" => ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($__global_Control_Monad_Except_Trans_compose)($__case_res_0, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
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
$pure = $__case_res_3;
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_4;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_5;
    $__res = (object)["bind" => (function() use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
  $__body = function($v, $k) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($bind)($m, ($__global_Data_Either_either)(($__global_Control_Monad_Except_Trans_compose)($pure, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($k1) {
  $__body = function($a) use ($k1) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($k1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $k = null) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, &$__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $k);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$map1 = $__case_res_6;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
$__case_0 = $dictMonadAsk;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->ask;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["ask" => ($__global_Control_Monad_Except_Trans_lift)($Monad0, $__case_res_9), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadAskExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadAskExceptT';

// Control_Monad_Except_Trans_monadReaderExceptT
function Control_Monad_Except_Trans_monadReaderExceptT($dictMonadReader) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadReaderExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
$__global_Control_Monad_Except_Trans_ExceptT = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT'));
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
$__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
$__global_Control_Monad_Except_Trans_lift = ($GLOBALS['Control_Monad_Except_Trans_lift'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_lift'));
$__case_0 = $dictMonadReader;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->local;
} else {
throw new \Exception("Pattern match failure");
};
$local = $__case_res_0;
$Monad0 = (($dictMonadAsk)->Monad0)($__global_Prim_undefined);
$monadExceptT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["pure" => ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($__global_Control_Monad_Except_Trans_compose)($__case_res_1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$map1 = $__case_res_2;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
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
    $__res = (object)["bind" => (function() use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
  $__body = function($v, $k) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($bind)($m, ($__global_Data_Either_either)(($__global_Control_Monad_Except_Trans_compose)($pure, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($k1) {
  $__body = function($a) use ($k1) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($k1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $k = null) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, &$__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $k);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_7;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_8;
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_9;
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->ask;
} else {
throw new \Exception("Pattern match failure");
};
$monadAskExceptT1 = (object)["ask" => ($__global_Control_Monad_Except_Trans_lift)($Monad0, $__case_res_10), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["local" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $local) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $local, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($local)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "MonadAsk0" => (function() use ($monadAskExceptT1) {
  $__fn = function($__dollar____unused) use ($monadAskExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadAskExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadReaderExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadReaderExceptT';

// Control_Monad_Except_Trans_monadContExceptT
function Control_Monad_Except_Trans_monadContExceptT($dictMonadCont) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadContExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
$__global_Control_Monad_Except_Trans_ExceptT = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT'));
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
$__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
$__case_0 = $dictMonadCont;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->callCC;
} else {
throw new \Exception("Pattern match failure");
};
$callCC = $__case_res_0;
$monadExceptT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["pure" => ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($__global_Control_Monad_Except_Trans_compose)($__case_res_1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$map1 = $__case_res_2;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
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
    $__res = (object)["bind" => (function() use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
  $__body = function($v, $k) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($bind)($m, ($__global_Data_Either_either)(($__global_Control_Monad_Except_Trans_compose)($pure, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($k1) {
  $__body = function($a) use ($k1) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($k1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $k = null) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, &$__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $k);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_7;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_8;
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_9;
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
    $__res = (object)["callCC" => (function() use ($callCC) {
  $__fn = function($f) use ($callCC, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($callCC)((function() use ($f) {
  $__body = function($c) use ($f) {
    $v = ($f)((function() use ($c) {
  $__fn = function($a) use ($c, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($c)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($a));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    $__case_0 = $v;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($c) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($c);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadContExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadContExceptT';

// Control_Monad_Except_Trans_monadEffectExceptT
function Control_Monad_Except_Trans_monadEffectExceptT($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadEffectExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
$__global_Control_Monad_Except_Trans_ExceptT = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT'));
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
$__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
$__global_Control_Monad_Except_Trans_lift = ($GLOBALS['Control_Monad_Except_Trans_lift'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_lift'));
$Monad0 = (($dictMonadEffect)->Monad0)($__global_Prim_undefined);
$monadExceptT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
    $__res = (object)["pure" => ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($__global_Control_Monad_Except_Trans_compose)($__case_res_0, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
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
$pure = $__case_res_3;
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_4;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_5;
    $__res = (object)["bind" => (function() use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
  $__body = function($v, $k) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($bind)($m, ($__global_Data_Either_either)(($__global_Control_Monad_Except_Trans_compose)($pure, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($k1) {
  $__body = function($a) use ($k1) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($k1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $k = null) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, &$__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $k);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$map1 = $__case_res_6;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->liftEffect;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["liftEffect" => ($__global_Control_Monad_Except_Trans_compose)(($__global_Control_Monad_Except_Trans_lift)($Monad0), $__case_res_9), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadEffectExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadEffectExceptT';

// Control_Monad_Except_Trans_monadRecExceptT
function Control_Monad_Except_Trans_monadRecExceptT($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadRecExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
$__global_Control_Monad_Except_Trans_ExceptT = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT'));
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
$__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
$__case_0 = $dictMonadRec;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->tailRecM;
} else {
throw new \Exception("Pattern match failure");
};
$tailRecM = $__case_res_0;
$Monad0 = (($dictMonadRec)->Monad0)($__global_Prim_undefined);
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
$pure = $__case_res_2;
$monadExceptT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["pure" => ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($__global_Control_Monad_Except_Trans_compose)($__case_res_3, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$map1 = $__case_res_4;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
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
    $__res = (object)["bind" => (function() use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
  $__body = function($v, $k) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($bind)($m, ($__global_Data_Either_either)(($__global_Control_Monad_Except_Trans_compose)($pure, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($k1) {
  $__body = function($a) use ($k1) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($k1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $k = null) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, &$__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $k);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_9;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_10;
$__case_0 = $dict;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_11;
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
    $__res = (object)["tailRecM" => (function() use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $tailRecM, $bind, $pure) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $tailRecM, $bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($tailRecM)((function() use ($f, $bind, $pure) {
  $__body = function($a) use ($f, $bind, $pure) {
    $v = ($f)($a);
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return ($bind)($m, (function() use ($pure) {
  $__fn = function($m__prime__) use ($pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $m__prime__;
$__case_res_12 = null;
if ((($__case_0)->tag === "Left")) {
$e = ($__case_0)->v0;
$__case_res_12 = ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Done", $value0);
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
})())($e));
} else {
if (((($__case_0)->tag === "Right") && ((($__case_0)->v0)->tag === "Loop"))) {
$a1 = (($__case_0)->v0)->v0;
$__case_res_12 = ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Loop", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($a1);
} else {
if (((($__case_0)->tag === "Right") && ((($__case_0)->v0)->tag === "Done"))) {
$b = (($__case_0)->v0)->v0;
$__case_res_12 = ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Done", $value0);
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
})())($b));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = ($pure)($__case_res_12);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($f, $bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadRecExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadRecExceptT';

// Control_Monad_Except_Trans_monadStateExceptT
function Control_Monad_Except_Trans_monadStateExceptT($dictMonadState) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadStateExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Except_Trans_lift = ($GLOBALS['Control_Monad_Except_Trans_lift'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_lift'));
$__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
$__global_Control_Monad_Except_Trans_ExceptT = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT'));
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
$__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
$Monad0 = (($dictMonadState)->Monad0)($__global_Prim_undefined);
$lift1 = ($__global_Control_Monad_Except_Trans_lift)($Monad0);
$__case_0 = $dictMonadState;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->state;
} else {
throw new \Exception("Pattern match failure");
};
$state = $__case_res_0;
$monadExceptT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["pure" => ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($__global_Control_Monad_Except_Trans_compose)($__case_res_1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$map1 = $__case_res_2;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
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
    $__res = (object)["bind" => (function() use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
  $__body = function($v, $k) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($bind)($m, ($__global_Data_Either_either)(($__global_Control_Monad_Except_Trans_compose)($pure, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($k1) {
  $__body = function($a) use ($k1) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($k1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $k = null) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, &$__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $k);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_7;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_8;
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_9;
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
    $__res = (object)["state" => (function() use ($lift1, $state) {
  $__fn = function($f) use ($lift1, $state, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($lift1)(($state)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadStateExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadStateExceptT';

// Control_Monad_Except_Trans_monadTellExceptT
function Control_Monad_Except_Trans_monadTellExceptT($dictMonadTell) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadTellExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
$__global_Control_Monad_Except_Trans_ExceptT = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT'));
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
$__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
$__global_Control_Monad_Except_Trans_lift = ($GLOBALS['Control_Monad_Except_Trans_lift'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_lift'));
$Monad1 = (($dictMonadTell)->Monad1)($__global_Prim_undefined);
$Semigroup0 = (($dictMonadTell)->Semigroup0)($__global_Prim_undefined);
$monadExceptT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
    $__res = (object)["pure" => ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($__global_Control_Monad_Except_Trans_compose)($__case_res_0, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
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
$pure = $__case_res_3;
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_4;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_5;
    $__res = (object)["bind" => (function() use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
  $__body = function($v, $k) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($bind)($m, ($__global_Data_Either_either)(($__global_Control_Monad_Except_Trans_compose)($pure, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($k1) {
  $__body = function($a) use ($k1) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($k1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $k = null) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, &$__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $k);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$map1 = $__case_res_6;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
$__case_0 = $dictMonadTell;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->tell;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["tell" => ($__global_Control_Monad_Except_Trans_compose)(($__global_Control_Monad_Except_Trans_lift)($Monad1), $__case_res_9), "Semigroup0" => (function() use (&$Semigroup0) {
  $__fn = function($__dollar____unused) use (&$Semigroup0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $Semigroup0;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad1" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadTellExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadTellExceptT';

// Control_Monad_Except_Trans_monadWriterExceptT
function Control_Monad_Except_Trans_monadWriterExceptT($dictMonadWriter) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadWriterExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
$__global_Control_Monad_Except_Trans_ExceptT = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT'));
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
$__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
$__global_Control_Monad_Except_Trans_lift = ($GLOBALS['Control_Monad_Except_Trans_lift'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_lift'));
$__global_Control_Monad_Except_Trans_identity = ($GLOBALS['Control_Monad_Except_Trans_identity'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_identity'));
$MonadTell1 = (($dictMonadWriter)->MonadTell1)($__global_Prim_undefined);
$Monad1 = (($MonadTell1)->Monad1)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_0;
$__case_0 = $dictMonadWriter;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->listen;
} else {
throw new \Exception("Pattern match failure");
};
$listen = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_2;
$__case_0 = $dictMonadWriter;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->pass;
} else {
throw new \Exception("Pattern match failure");
};
$pass = $__case_res_3;
$Monoid0 = (($dictMonadWriter)->Monoid0)($__global_Prim_undefined);
$Monad1 = (($MonadTell1)->Monad1)($__global_Prim_undefined);
$Semigroup0 = (($MonadTell1)->Semigroup0)($__global_Prim_undefined);
$monadExceptT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["pure" => ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($__global_Control_Monad_Except_Trans_compose)($__case_res_4, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$map1 = $__case_res_5;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
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
$pure = $__case_res_7;
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_8;
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_9;
    $__res = (object)["bind" => (function() use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
  $__body = function($v, $k) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($bind)($m, ($__global_Data_Either_either)(($__global_Control_Monad_Except_Trans_compose)($pure, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($k1) {
  $__body = function($a) use ($k1) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($k1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $k = null) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, &$__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $k);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$map1 = $__case_res_10;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_11;
$__case_0 = $dict;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_12;
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
$__case_0 = $MonadTell1;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->tell;
} else {
throw new \Exception("Pattern match failure");
};
$monadTellExceptT1 = (object)["tell" => ($__global_Control_Monad_Except_Trans_compose)(($__global_Control_Monad_Except_Trans_lift)($Monad1), $__case_res_13), "Semigroup0" => (function() use (&$Semigroup0) {
  $__fn = function($__dollar____unused) use (&$Semigroup0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $Semigroup0;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad1" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["listen" => ($__global_Control_Monad_Except_Trans_mapExceptT)((function() use ($bind, $listen, $pure, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($m) use ($bind, $listen, $pure, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($listen)($m), (function() use ($pure, $__global_Control_Monad_Except_Trans_map) {
  $__body = function($v) use ($pure, $__global_Control_Monad_Except_Trans_map) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$w = ($__case_0)->v1;
return ($pure)(($__global_Control_Monad_Except_Trans_map)((function() use ($w) {
  $__fn = function($r) use ($w, &$__fn) {
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
})())($r, $w);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $a));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($pure, $__global_Control_Monad_Except_Trans_map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "pass" => ($__global_Control_Monad_Except_Trans_mapExceptT)((function() use ($pass, $bind, $pure, $__global_Control_Monad_Except_Trans_identity) {
  $__fn = function($m) use ($pass, $bind, $pure, $__global_Control_Monad_Except_Trans_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pass)(($bind)($m, (function() use ($pure, $__global_Control_Monad_Except_Trans_identity) {
  $__fn = function($a) use ($pure, $__global_Control_Monad_Except_Trans_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $a;
$__case_res_14 = null;
if ((($__case_0)->tag === "Left")) {
$e = ($__case_0)->v0;
$__case_res_14 = ((function() {
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
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($e), $__global_Control_Monad_Except_Trans_identity);
} else {
if (((($__case_0)->tag === "Right") && ((($__case_0)->v0)->tag === "Tuple"))) {
$r = (($__case_0)->v0)->v0;
$f = (($__case_0)->v0)->v1;
$__case_res_14 = ((function() {
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
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($r), $f);
} else {
throw new \Exception("Pattern match failure");
};
};
    $__res = ($pure)($__case_res_14);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "Monoid0" => (function() use (&$Monoid0) {
  $__fn = function($__dollar____unused) use (&$Monoid0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $Monoid0;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "MonadTell1" => (function() use ($monadTellExceptT1) {
  $__fn = function($__dollar____unused) use ($monadTellExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadTellExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadWriterExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadWriterExceptT';

// Control_Monad_Except_Trans_monadThrowExceptT
function Control_Monad_Except_Trans_monadThrowExceptT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadThrowExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
$__global_Control_Monad_Except_Trans_ExceptT = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT'));
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
$__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
$monadExceptT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
    $__res = (object)["pure" => ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($__global_Control_Monad_Except_Trans_compose)($__case_res_0, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
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
$pure = $__case_res_3;
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_4;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_5;
    $__res = (object)["bind" => (function() use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
  $__body = function($v, $k) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($bind)($m, ($__global_Data_Either_either)(($__global_Control_Monad_Except_Trans_compose)($pure, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($k1) {
  $__body = function($a) use ($k1) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($k1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $k = null) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, &$__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $k);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$map1 = $__case_res_6;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["throwError" => ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($__global_Control_Monad_Except_Trans_compose)($__case_res_9, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadThrowExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadThrowExceptT';

// Control_Monad_Except_Trans_monadErrorExceptT
function Control_Monad_Except_Trans_monadErrorExceptT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadErrorExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
$__global_Control_Monad_Except_Trans_ExceptT = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT'));
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
$__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
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
$monadExceptT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["pure" => ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($__global_Control_Monad_Except_Trans_compose)($__case_res_2, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_3;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_4;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_5;
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
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
$pure = $__case_res_7;
    $__res = (object)["bind" => (function() use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
  $__body = function($v, $k) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($bind)($m, ($__global_Data_Either_either)(($__global_Control_Monad_Except_Trans_compose)($pure, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($k1) {
  $__body = function($a) use ($k1) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($k1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $k = null) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, &$__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $k);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_8;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_9;
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_10;
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$monadThrowExceptT1 = (object)["throwError" => ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($__global_Control_Monad_Except_Trans_compose)($__case_res_11, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["catchError" => (function() use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
  $__body = function($v, $k) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($bind)($m, ($__global_Data_Either_either)((function() use ($k1) {
  $__body = function($a) use ($k1) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($k1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Control_Monad_Except_Trans_compose)($pure, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $k = null) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, &$__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $k);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "MonadThrow0" => (function() use ($monadThrowExceptT1) {
  $__fn = function($__dollar____unused) use ($monadThrowExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadThrowExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadErrorExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadErrorExceptT';

// Control_Monad_Except_Trans_monadSTExceptT
function Control_Monad_Except_Trans_monadSTExceptT($dictMonadST) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadSTExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
$__global_Control_Monad_Except_Trans_ExceptT = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT'));
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
$__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
$__global_Control_Monad_Except_Trans_lift = ($GLOBALS['Control_Monad_Except_Trans_lift'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_lift'));
$Monad0 = (($dictMonadST)->Monad0)($__global_Prim_undefined);
$monadExceptT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
    $__res = (object)["pure" => ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($__global_Control_Monad_Except_Trans_compose)($__case_res_0, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
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
$pure = $__case_res_3;
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_4;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_5;
    $__res = (object)["bind" => (function() use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
  $__body = function($v, $k) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($bind)($m, ($__global_Data_Either_either)(($__global_Control_Monad_Except_Trans_compose)($pure, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($k1) {
  $__body = function($a) use ($k1) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($k1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $k = null) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, &$__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $k);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$map1 = $__case_res_6;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->liftST;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["liftST" => ($__global_Control_Monad_Except_Trans_compose)(($__global_Control_Monad_Except_Trans_lift)($Monad0), $__case_res_9), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadSTExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadSTExceptT';

// Control_Monad_Except_Trans_monoidExceptT
function Control_Monad_Except_Trans_monoidExceptT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monoidExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
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
$semigroupExceptT1 = (function() use ($lift2) {
  $__fn = function($dictSemigroup) use ($lift2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictSemigroup;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["append" => ($lift2)($__case_res_3)];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($semigroupExceptT1, $__global_Prim_undefined, $pure) {
  $__fn = function($dictMonoid) use ($semigroupExceptT1, $__global_Prim_undefined, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$semigroupExceptT2 = ($semigroupExceptT1)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
$__case_0 = $dictMonoid;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["mempty" => ($pure)($__case_res_4), "Semigroup0" => (function() use ($semigroupExceptT2) {
  $__fn = function($__dollar____unused) use ($semigroupExceptT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupExceptT2;
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
$GLOBALS['Control_Monad_Except_Trans_monoidExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monoidExceptT';

// Control_Monad_Except_Trans_altExceptT
function Control_Monad_Except_Trans_altExceptT($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_altExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
$__case_0 = $dictSemigroup;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_0;
    $__res = (function() use ($__global_Prim_undefined, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, $append) {
  $__fn = function($dictMonad) use ($__global_Prim_undefined, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Bind1 = (($dictMonad)->Bind1)($__global_Prim_undefined);
$__case_0 = $Bind1;
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
$pure = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_3;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["alt" => (function() use ($bind, $pure, $append) {
  $__body = function($v, $v1) use ($bind, $pure, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m = $__case_0;
$n = $__case_1;
return ($bind)($m, (function() use ($pure, $bind, $n, $append) {
  $__body = function($rm) use ($pure, $bind, $n, $append) {
    $__case_0 = $rm;
    switch (($__case_0)->tag) {
case "Right":
$x = ($__case_0)->v0;
return ($pure)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($x));
break;
case "Left":
$err = ($__case_0)->v0;
return ($bind)($n, (function() use ($pure, $append, $err) {
  $__body = function($rn) use ($pure, $append, $err) {
    $__case_0 = $rn;
    switch (($__case_0)->tag) {
case "Right":
$x = ($__case_0)->v0;
return ($pure)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($x));
break;
case "Left":
$err__prime__ = ($__case_0)->v0;
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
})())(($append)($err, $err__prime__)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($rn) use ($pure, $append, $err, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($rn);
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
  $__fn = function($rm) use ($pure, $bind, $n, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($rm);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $pure, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
$GLOBALS['Control_Monad_Except_Trans_altExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_altExceptT';

// Control_Monad_Except_Trans_plusExceptT
function Control_Monad_Except_Trans_plusExceptT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_plusExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
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
$append = $__case_res_1;
$altExceptT1 = (function() use ($__global_Prim_undefined, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, $append) {
  $__fn = function($dictMonad) use ($__global_Prim_undefined, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Bind1 = (($dictMonad)->Bind1)($__global_Prim_undefined);
$__case_0 = $Bind1;
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
$pure = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_4;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["alt" => (function() use ($bind, $pure, $append) {
  $__body = function($v, $v1) use ($bind, $pure, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m = $__case_0;
$n = $__case_1;
return ($bind)($m, (function() use ($pure, $bind, $n, $append) {
  $__body = function($rm) use ($pure, $bind, $n, $append) {
    $__case_0 = $rm;
    switch (($__case_0)->tag) {
case "Right":
$x = ($__case_0)->v0;
return ($pure)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($x));
break;
case "Left":
$err = ($__case_0)->v0;
return ($bind)($n, (function() use ($pure, $append, $err) {
  $__body = function($rn) use ($pure, $append, $err) {
    $__case_0 = $rn;
    switch (($__case_0)->tag) {
case "Right":
$x = ($__case_0)->v0;
return ($pure)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($x));
break;
case "Left":
$err__prime__ = ($__case_0)->v0;
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
})())(($append)($err, $err__prime__)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($rn) use ($pure, $append, $err, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($rn);
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
  $__fn = function($rm) use ($pure, $bind, $n, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($rm);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $pure, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($altExceptT1, $dict, $mempty) {
  $__fn = function($dictMonad) use ($altExceptT1, $dict, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$altExceptT2 = ($altExceptT1)($dictMonad);
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->throwError;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["empty" => ($__case_res_5)($mempty), "Alt0" => (function() use ($altExceptT2) {
  $__fn = function($__dollar____unused) use ($altExceptT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $altExceptT2;
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
$GLOBALS['Control_Monad_Except_Trans_plusExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_plusExceptT';

// Control_Monad_Except_Trans_alternativeExceptT
function Control_Monad_Except_Trans_alternativeExceptT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_alternativeExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
$__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
$__global_Control_Monad_Except_Trans_ExceptT = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT'));
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
$append = $__case_res_1;
$altExceptT1 = (function() use ($__global_Prim_undefined, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, $append) {
  $__fn = function($dictMonad) use ($__global_Prim_undefined, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Bind1 = (($dictMonad)->Bind1)($__global_Prim_undefined);
$__case_0 = $Bind1;
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
$pure = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_4;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["alt" => (function() use ($bind, $pure, $append) {
  $__body = function($v, $v1) use ($bind, $pure, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m = $__case_0;
$n = $__case_1;
return ($bind)($m, (function() use ($pure, $bind, $n, $append) {
  $__body = function($rm) use ($pure, $bind, $n, $append) {
    $__case_0 = $rm;
    switch (($__case_0)->tag) {
case "Right":
$x = ($__case_0)->v0;
return ($pure)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($x));
break;
case "Left":
$err = ($__case_0)->v0;
return ($bind)($n, (function() use ($pure, $append, $err) {
  $__body = function($rn) use ($pure, $append, $err) {
    $__case_0 = $rn;
    switch (($__case_0)->tag) {
case "Right":
$x = ($__case_0)->v0;
return ($pure)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($x));
break;
case "Left":
$err__prime__ = ($__case_0)->v0;
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
})())(($append)($err, $err__prime__)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($rn) use ($pure, $append, $err, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($rn);
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
  $__fn = function($rm) use ($pure, $bind, $n, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($rm);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $pure, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$plusExceptT1 = (function() use ($altExceptT1, $dict, $mempty) {
  $__fn = function($dictMonad) use ($altExceptT1, $dict, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$altExceptT2 = ($altExceptT1)($dictMonad);
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->throwError;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["empty" => ($__case_res_5)($mempty), "Alt0" => (function() use ($altExceptT2) {
  $__fn = function($__dollar____unused) use ($altExceptT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $altExceptT2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, $plusExceptT1) {
  $__fn = function($dictMonad) use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, $plusExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$applicativeExceptT1 = (object)["pure" => ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($__global_Control_Monad_Except_Trans_compose)($__case_res_6, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_7;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_8;
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_9;
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$plusExceptT2 = ($plusExceptT1)($dictMonad);
    $__res = (object)["Applicative0" => (function() use ($applicativeExceptT1) {
  $__fn = function($__dollar____unused) use ($applicativeExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusExceptT2) {
  $__fn = function($__dollar____unused) use ($plusExceptT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $plusExceptT2;
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
$GLOBALS['Control_Monad_Except_Trans_alternativeExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_alternativeExceptT';

// Control_Monad_Except_Trans_monadPlusExceptT
function Control_Monad_Except_Trans_monadPlusExceptT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadPlusExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
$__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
$__global_Control_Monad_Except_Trans_ExceptT = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT'));
$__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
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
$append = $__case_res_1;
$altExceptT1 = (function() use ($__global_Prim_undefined, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, $append) {
  $__fn = function($dictMonad) use ($__global_Prim_undefined, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Bind1 = (($dictMonad)->Bind1)($__global_Prim_undefined);
$__case_0 = $Bind1;
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
$pure = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_4;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["alt" => (function() use ($bind, $pure, $append) {
  $__body = function($v, $v1) use ($bind, $pure, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m = $__case_0;
$n = $__case_1;
return ($bind)($m, (function() use ($pure, $bind, $n, $append) {
  $__body = function($rm) use ($pure, $bind, $n, $append) {
    $__case_0 = $rm;
    switch (($__case_0)->tag) {
case "Right":
$x = ($__case_0)->v0;
return ($pure)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($x));
break;
case "Left":
$err = ($__case_0)->v0;
return ($bind)($n, (function() use ($pure, $append, $err) {
  $__body = function($rn) use ($pure, $append, $err) {
    $__case_0 = $rn;
    switch (($__case_0)->tag) {
case "Right":
$x = ($__case_0)->v0;
return ($pure)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($x));
break;
case "Left":
$err__prime__ = ($__case_0)->v0;
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
})())(($append)($err, $err__prime__)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($rn) use ($pure, $append, $err, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($rn);
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
  $__fn = function($rm) use ($pure, $bind, $n, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($rm);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $pure, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$plusExceptT1 = (function() use ($altExceptT1, $dict, $mempty) {
  $__fn = function($dictMonad) use ($altExceptT1, $dict, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$altExceptT2 = ($altExceptT1)($dictMonad);
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->throwError;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["empty" => ($__case_res_5)($mempty), "Alt0" => (function() use ($altExceptT2) {
  $__fn = function($__dollar____unused) use ($altExceptT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $altExceptT2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$alternativeExceptT1 = (function() use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, $plusExceptT1) {
  $__fn = function($dictMonad) use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, $plusExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$applicativeExceptT1 = (object)["pure" => ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($__global_Control_Monad_Except_Trans_compose)($__case_res_6, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_7;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_8;
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_9;
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$plusExceptT2 = ($plusExceptT1)($dictMonad);
    $__res = (object)["Applicative0" => (function() use ($applicativeExceptT1) {
  $__fn = function($__dollar____unused) use ($applicativeExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusExceptT2) {
  $__fn = function($__dollar____unused) use ($plusExceptT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $plusExceptT2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, $__global_Data_Either_either, $alternativeExceptT1) {
  $__fn = function($dictMonad) use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, $__global_Data_Either_either, $alternativeExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$monadExceptT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["pure" => ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($__global_Control_Monad_Except_Trans_compose)($__case_res_10, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
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
$map1 = $__case_res_11;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_12;
$__case_0 = $dict;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_13;
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
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
    $__res = (object)["bind" => (function() use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
  $__body = function($v, $k) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($bind)($m, ($__global_Data_Either_either)(($__global_Control_Monad_Except_Trans_compose)($pure, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($k1) {
  $__body = function($a) use ($k1) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($k1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $k = null) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, &$__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $k);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_16 = null;
if (true) {
$v = $__case_0;
$__case_res_16 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_16;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_17 = null;
if (true) {
$v = $__case_0;
$__case_res_17 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_17;
$__case_0 = $dict;
$__case_res_18 = null;
if (true) {
$v = $__case_0;
$__case_res_18 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_18;
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
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
$alternativeExceptT2 = ($alternativeExceptT1)($dictMonad);
    $__res = (object)["Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() use ($alternativeExceptT2) {
  $__fn = function($__dollar____unused) use ($alternativeExceptT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $alternativeExceptT2;
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
$GLOBALS['Control_Monad_Except_Trans_monadPlusExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadPlusExceptT';

