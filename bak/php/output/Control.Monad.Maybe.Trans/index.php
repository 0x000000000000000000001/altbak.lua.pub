<?php

namespace Control\Monad\Maybe\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Maybe.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
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
      case 'Control_Monad_Maybe_Trans_compose': $v = (function() {
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
      case 'Control_Monad_Maybe_Trans_map': $v = (function() {
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
      case 'Control_Monad_Maybe_Trans_identity': $v = (function() {
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
      case 'Control_Monad_Maybe_Trans_newtypeMaybeT': $v = (object)["Coercible0" => (function() {
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
      case 'Control_Monad_Maybe_Trans_monadTransMaybeT': $v = (object)["lift" => (function() use ($dict) {
  $__fn = function($dictMonad) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
$__global_Control_Monad_Maybe_Trans_MaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT'));
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
    $__res = ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ((function() use ($bind, $pure) {
  $__fn = function($f, $a = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)($a, (function() use ($pure, $f) {
  $__fn = function($a__prime__) use ($pure, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(($f)($a__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Control_Monad_Maybe_Trans_lift': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Monad_Maybe_Trans_monadTransMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadTransMaybeT'));
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





// Control_Monad_Maybe_Trans_MaybeT
function Control_Monad_Maybe_Trans_MaybeT($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_MaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_MaybeT';

// Control_Monad_Maybe_Trans_runMaybeT
function Control_Monad_Maybe_Trans_runMaybeT($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_runMaybeT';
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
$GLOBALS['Control_Monad_Maybe_Trans_runMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_runMaybeT';




// Control_Monad_Maybe_Trans_mapMaybeT
function Control_Monad_Maybe_Trans_mapMaybeT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_mapMaybeT';
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
$GLOBALS['Control_Monad_Maybe_Trans_mapMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_mapMaybeT';

// Control_Monad_Maybe_Trans_functorMaybeT
function Control_Monad_Maybe_Trans_functorMaybeT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_functorMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
$__case_0 = $dictFunctor;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_0;
    $__res = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_functorMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_functorMaybeT';

// Control_Monad_Maybe_Trans_monadMaybeT
function Control_Monad_Maybe_Trans_monadMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
$__global_Control_Monad_Maybe_Trans_MaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT'));
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
while (true) {
return (object)["Applicative0" => (function() use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["pure" => ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ($__global_Control_Monad_Maybe_Trans_compose)($__case_res_0, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["bind" => (function() use ($bind, $pure) {
  $__body = function($v, $f) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$x = $__case_0;
$f1 = $__case_1;
return ($bind)($x, (function() use ($pure, $f1) {
  $__body = function($v1) use ($pure, $f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
return ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
case "Just":
$y = ($__case_0)->v0;
$v2 = ($f1)($y);
$__case_0 = $v2;
if (true) {
$m = $__case_0;
return $m;
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure, $f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
$GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadMaybeT';

// Control_Monad_Maybe_Trans_bindMaybeT
function Control_Monad_Maybe_Trans_bindMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_bindMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
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
return (object)["bind" => (function() use ($bind, $pure) {
  $__body = function($v, $f) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$x = $__case_0;
$f1 = $__case_1;
return ($bind)($x, (function() use ($pure, $f1) {
  $__body = function($v1) use ($pure, $f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
return ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
case "Just":
$y = ($__case_0)->v0;
$v2 = ($f1)($y);
$__case_0 = $v2;
if (true) {
$m = $__case_0;
return $m;
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure, $f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
$GLOBALS['Control_Monad_Maybe_Trans_bindMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_bindMaybeT';

// Control_Monad_Maybe_Trans_applyMaybeT
function Control_Monad_Maybe_Trans_applyMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_applyMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_applyMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_applyMaybeT';

// Control_Monad_Maybe_Trans_applicativeMaybeT
function Control_Monad_Maybe_Trans_applicativeMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_applicativeMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
$__global_Control_Monad_Maybe_Trans_MaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT'));
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
while (true) {
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
return (object)["pure" => ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ($__global_Control_Monad_Maybe_Trans_compose)($__case_res_0, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
$GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_applicativeMaybeT';

// Control_Monad_Maybe_Trans_semigroupMaybeT
function Control_Monad_Maybe_Trans_semigroupMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_semigroupMaybeT';
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
$GLOBALS['Control_Monad_Maybe_Trans_semigroupMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_semigroupMaybeT';

// Control_Monad_Maybe_Trans_monadAskMaybeT
function Control_Monad_Maybe_Trans_monadAskMaybeT($dictMonadAsk) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadAskMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
$__global_Control_Monad_Maybe_Trans_MaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT'));
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
$__global_Control_Monad_Maybe_Trans_lift = ($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift'));
$Monad0 = (($dictMonadAsk)->Monad0)($__global_Prim_undefined);
$monadMaybeT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["pure" => ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ($__global_Control_Monad_Maybe_Trans_compose)($__case_res_0, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["bind" => (function() use ($bind, $pure) {
  $__body = function($v, $f) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$x = $__case_0;
$f1 = $__case_1;
return ($bind)($x, (function() use ($pure, $f1) {
  $__body = function($v1) use ($pure, $f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
return ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
case "Just":
$y = ($__case_0)->v0;
$v2 = ($f1)($y);
$__case_0 = $v2;
if (true) {
$m = $__case_0;
return $m;
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure, $f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
    $__res = (object)["ask" => ($__global_Control_Monad_Maybe_Trans_lift)($Monad0, $__case_res_9), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadAskMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadAskMaybeT';

// Control_Monad_Maybe_Trans_monadReaderMaybeT
function Control_Monad_Maybe_Trans_monadReaderMaybeT($dictMonadReader) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadReaderMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
$__global_Control_Monad_Maybe_Trans_MaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT'));
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
$__global_Control_Monad_Maybe_Trans_lift = ($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift'));
$__global_Control_Monad_Maybe_Trans_mapMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_mapMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_mapMaybeT'));
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
$monadMaybeT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["pure" => ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ($__global_Control_Monad_Maybe_Trans_compose)($__case_res_1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["bind" => (function() use ($bind, $pure) {
  $__body = function($v, $f) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$x = $__case_0;
$f1 = $__case_1;
return ($bind)($x, (function() use ($pure, $f1) {
  $__body = function($v1) use ($pure, $f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
return ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
case "Just":
$y = ($__case_0)->v0;
$v2 = ($f1)($y);
$__case_0 = $v2;
if (true) {
$m = $__case_0;
return $m;
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure, $f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
$monadAskMaybeT1 = (object)["ask" => ($__global_Control_Monad_Maybe_Trans_lift)($Monad0, $__case_res_10), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["local" => (function() use ($__global_Control_Monad_Maybe_Trans_mapMaybeT, $local) {
  $__fn = function($f) use ($__global_Control_Monad_Maybe_Trans_mapMaybeT, $local, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Maybe_Trans_mapMaybeT)(($local)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "MonadAsk0" => (function() use ($monadAskMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadAskMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadAskMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadReaderMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadReaderMaybeT';

// Control_Monad_Maybe_Trans_monadContMaybeT
function Control_Monad_Maybe_Trans_monadContMaybeT($dictMonadCont) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadContMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
$__global_Control_Monad_Maybe_Trans_MaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT'));
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
$__case_0 = $dictMonadCont;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->callCC;
} else {
throw new \Exception("Pattern match failure");
};
$callCC = $__case_res_0;
$monadMaybeT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["pure" => ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ($__global_Control_Monad_Maybe_Trans_compose)($__case_res_1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["bind" => (function() use ($bind, $pure) {
  $__body = function($v, $f) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$x = $__case_0;
$f1 = $__case_1;
return ($bind)($x, (function() use ($pure, $f1) {
  $__body = function($v1) use ($pure, $f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
return ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
case "Just":
$y = ($__case_0)->v0;
$v2 = ($f1)($y);
$__case_0 = $v2;
if (true) {
$m = $__case_0;
return $m;
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure, $f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
    $__res = new Phpurs_Data1("Just", $value0);
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
$m = $__case_0;
return $m;
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
})(), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadContMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadContMaybeT';

// Control_Monad_Maybe_Trans_monadEffectMaybe
function Control_Monad_Maybe_Trans_monadEffectMaybe($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadEffectMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
$__global_Control_Monad_Maybe_Trans_MaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT'));
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
$__global_Control_Monad_Maybe_Trans_lift = ($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift'));
$Monad0 = (($dictMonadEffect)->Monad0)($__global_Prim_undefined);
$monadMaybeT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["pure" => ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ($__global_Control_Monad_Maybe_Trans_compose)($__case_res_0, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["bind" => (function() use ($bind, $pure) {
  $__body = function($v, $f) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$x = $__case_0;
$f1 = $__case_1;
return ($bind)($x, (function() use ($pure, $f1) {
  $__body = function($v1) use ($pure, $f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
return ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
case "Just":
$y = ($__case_0)->v0;
$v2 = ($f1)($y);
$__case_0 = $v2;
if (true) {
$m = $__case_0;
return $m;
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure, $f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
    $__res = (object)["liftEffect" => ($__global_Control_Monad_Maybe_Trans_compose)(($__global_Control_Monad_Maybe_Trans_lift)($Monad0), $__case_res_9), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadEffectMaybe'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadEffectMaybe';

// Control_Monad_Maybe_Trans_monadRecMaybeT
function Control_Monad_Maybe_Trans_monadRecMaybeT($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadRecMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
$__global_Control_Monad_Maybe_Trans_MaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT'));
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
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
$monadMaybeT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["pure" => ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ($__global_Control_Monad_Maybe_Trans_compose)($__case_res_3, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["bind" => (function() use ($bind, $pure) {
  $__body = function($v, $f) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$x = $__case_0;
$f1 = $__case_1;
return ($bind)($x, (function() use ($pure, $f1) {
  $__body = function($v1) use ($pure, $f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
return ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
case "Just":
$y = ($__case_0)->v0;
$v2 = ($f1)($y);
$__case_0 = $v2;
if (true) {
$m = $__case_0;
return $m;
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure, $f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
    $__res = (object)["tailRecM" => (function() use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $tailRecM, $bind, $pure) {
  $__fn = function($f) use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $tailRecM, $bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ($tailRecM)((function() use ($f, $bind, $pure) {
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
if ((($__case_0)->tag === "Nothing")) {
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
})())(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Loop"))) {
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
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Done"))) {
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
    $__res = new Phpurs_Data1("Just", $value0);
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
})(), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadRecMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadRecMaybeT';

// Control_Monad_Maybe_Trans_monadStateMaybeT
function Control_Monad_Maybe_Trans_monadStateMaybeT($dictMonadState) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadStateMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Maybe_Trans_lift = ($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift'));
$__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
$__global_Control_Monad_Maybe_Trans_MaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT'));
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
$Monad0 = (($dictMonadState)->Monad0)($__global_Prim_undefined);
$lift1 = ($__global_Control_Monad_Maybe_Trans_lift)($Monad0);
$__case_0 = $dictMonadState;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->state;
} else {
throw new \Exception("Pattern match failure");
};
$state = $__case_res_0;
$monadMaybeT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["pure" => ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ($__global_Control_Monad_Maybe_Trans_compose)($__case_res_1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["bind" => (function() use ($bind, $pure) {
  $__body = function($v, $f) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$x = $__case_0;
$f1 = $__case_1;
return ($bind)($x, (function() use ($pure, $f1) {
  $__body = function($v1) use ($pure, $f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
return ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
case "Just":
$y = ($__case_0)->v0;
$v2 = ($f1)($y);
$__case_0 = $v2;
if (true) {
$m = $__case_0;
return $m;
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure, $f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
})(), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadStateMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadStateMaybeT';

// Control_Monad_Maybe_Trans_monadTellMaybeT
function Control_Monad_Maybe_Trans_monadTellMaybeT($dictMonadTell) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadTellMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
$__global_Control_Monad_Maybe_Trans_MaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT'));
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
$__global_Control_Monad_Maybe_Trans_lift = ($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift'));
$Monad1 = (($dictMonadTell)->Monad1)($__global_Prim_undefined);
$Semigroup0 = (($dictMonadTell)->Semigroup0)($__global_Prim_undefined);
$monadMaybeT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["pure" => ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ($__global_Control_Monad_Maybe_Trans_compose)($__case_res_0, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["bind" => (function() use ($bind, $pure) {
  $__body = function($v, $f) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$x = $__case_0;
$f1 = $__case_1;
return ($bind)($x, (function() use ($pure, $f1) {
  $__body = function($v1) use ($pure, $f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
return ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
case "Just":
$y = ($__case_0)->v0;
$v2 = ($f1)($y);
$__case_0 = $v2;
if (true) {
$m = $__case_0;
return $m;
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure, $f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
    $__res = (object)["tell" => ($__global_Control_Monad_Maybe_Trans_compose)(($__global_Control_Monad_Maybe_Trans_lift)($Monad1), $__case_res_9), "Semigroup0" => (function() use (&$Semigroup0) {
  $__fn = function($__dollar____unused) use (&$Semigroup0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $Semigroup0;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad1" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadTellMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadTellMaybeT';

// Control_Monad_Maybe_Trans_monadWriterMaybeT
function Control_Monad_Maybe_Trans_monadWriterMaybeT($dictMonadWriter) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadWriterMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
$__global_Control_Monad_Maybe_Trans_MaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT'));
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
$__global_Control_Monad_Maybe_Trans_lift = ($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift'));
$__global_Control_Monad_Maybe_Trans_mapMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_mapMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_mapMaybeT'));
$__global_Control_Monad_Maybe_Trans_identity = ($GLOBALS['Control_Monad_Maybe_Trans_identity'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_identity'));
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
$monadMaybeT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["pure" => ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ($__global_Control_Monad_Maybe_Trans_compose)($__case_res_4, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["bind" => (function() use ($bind, $pure) {
  $__body = function($v, $f) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$x = $__case_0;
$f1 = $__case_1;
return ($bind)($x, (function() use ($pure, $f1) {
  $__body = function($v1) use ($pure, $f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
return ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
case "Just":
$y = ($__case_0)->v0;
$v2 = ($f1)($y);
$__case_0 = $v2;
if (true) {
$m = $__case_0;
return $m;
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure, $f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
$monadTellMaybeT1 = (object)["tell" => ($__global_Control_Monad_Maybe_Trans_compose)(($__global_Control_Monad_Maybe_Trans_lift)($Monad1), $__case_res_13), "Semigroup0" => (function() use (&$Semigroup0) {
  $__fn = function($__dollar____unused) use (&$Semigroup0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $Semigroup0;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad1" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["listen" => ($__global_Control_Monad_Maybe_Trans_mapMaybeT)((function() use ($bind, $listen, $pure, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($m) use ($bind, $listen, $pure, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($listen)($m), (function() use ($pure, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($v) use ($pure, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$w = ($__case_0)->v1;
return ($pure)(($__global_Control_Monad_Maybe_Trans_map)((function() use ($w) {
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
  $__fn = function($v) use ($pure, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})()), "pass" => ($__global_Control_Monad_Maybe_Trans_mapMaybeT)((function() use ($pass, $bind, $pure, $__global_Control_Monad_Maybe_Trans_identity) {
  $__fn = function($m) use ($pass, $bind, $pure, $__global_Control_Monad_Maybe_Trans_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pass)(($bind)($m, (function() use ($pure, $__global_Control_Monad_Maybe_Trans_identity) {
  $__fn = function($a) use ($pure, $__global_Control_Monad_Maybe_Trans_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $a;
$__case_res_14 = null;
if ((($__case_0)->tag === "Nothing")) {
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
})())(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), $__global_Control_Monad_Maybe_Trans_identity);
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$v = (($__case_0)->v0)->v0;
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
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($v), $f);
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
})(), "MonadTell1" => (function() use ($monadTellMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadTellMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadTellMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadWriterMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadWriterMaybeT';

// Control_Monad_Maybe_Trans_monadThrowMaybeT
function Control_Monad_Maybe_Trans_monadThrowMaybeT($dictMonadThrow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadThrowMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Maybe_Trans_lift = ($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift'));
$__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
$__global_Control_Monad_Maybe_Trans_MaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT'));
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
$Monad0 = (($dictMonadThrow)->Monad0)($__global_Prim_undefined);
$lift1 = ($__global_Control_Monad_Maybe_Trans_lift)($Monad0);
$__case_0 = $dictMonadThrow;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->throwError;
} else {
throw new \Exception("Pattern match failure");
};
$throwError = $__case_res_0;
$monadMaybeT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["pure" => ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ($__global_Control_Monad_Maybe_Trans_compose)($__case_res_1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["bind" => (function() use ($bind, $pure) {
  $__body = function($v, $f) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$x = $__case_0;
$f1 = $__case_1;
return ($bind)($x, (function() use ($pure, $f1) {
  $__body = function($v1) use ($pure, $f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
return ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
case "Just":
$y = ($__case_0)->v0;
$v2 = ($f1)($y);
$__case_0 = $v2;
if (true) {
$m = $__case_0;
return $m;
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure, $f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
    $__res = (object)["throwError" => (function() use ($lift1, $throwError) {
  $__fn = function($e) use ($lift1, $throwError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($lift1)(($throwError)($e));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadThrowMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadThrowMaybeT';

// Control_Monad_Maybe_Trans_monadErrorMaybeT
function Control_Monad_Maybe_Trans_monadErrorMaybeT($dictMonadError) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadErrorMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Maybe_Trans_lift = ($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift'));
$__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
$__global_Control_Monad_Maybe_Trans_MaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT'));
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
$__case_0 = $dictMonadError;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->catchError;
} else {
throw new \Exception("Pattern match failure");
};
$catchError = $__case_res_0;
$Monad0 = (($dictMonadThrow)->Monad0)($__global_Prim_undefined);
$lift1 = ($__global_Control_Monad_Maybe_Trans_lift)($Monad0);
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->throwError;
} else {
throw new \Exception("Pattern match failure");
};
$throwError = $__case_res_1;
$monadMaybeT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["pure" => ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ($__global_Control_Monad_Maybe_Trans_compose)($__case_res_2, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["bind" => (function() use ($bind, $pure) {
  $__body = function($v, $f) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$x = $__case_0;
$f1 = $__case_1;
return ($bind)($x, (function() use ($pure, $f1) {
  $__body = function($v1) use ($pure, $f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
return ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
case "Just":
$y = ($__case_0)->v0;
$v2 = ($f1)($y);
$__case_0 = $v2;
if (true) {
$m = $__case_0;
return $m;
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure, $f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
$monadThrowMaybeT1 = (object)["throwError" => (function() use ($lift1, $throwError) {
  $__fn = function($e) use ($lift1, $throwError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($lift1)(($throwError)($e));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["catchError" => (function() use ($catchError) {
  $__body = function($v, $h) use ($catchError) {
    $__case_0 = $v;
    $__case_1 = $h;
    if (true) {
$m = $__case_0;
$h1 = $__case_1;
return ($catchError)($m, (function() use ($h1) {
  $__body = function($a) use ($h1) {
    $v1 = ($h1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($h1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $h = null) use ($catchError, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($h) use ($v, &$__fn) { return $__fn($v, $h); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $h);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "MonadThrow0" => (function() use ($monadThrowMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadThrowMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadThrowMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadErrorMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadErrorMaybeT';

// Control_Monad_Maybe_Trans_monadSTMaybeT
function Control_Monad_Maybe_Trans_monadSTMaybeT($dictMonadST) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadSTMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
$__global_Control_Monad_Maybe_Trans_MaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT'));
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
$__global_Control_Monad_Maybe_Trans_lift = ($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift'));
$Monad0 = (($dictMonadST)->Monad0)($__global_Prim_undefined);
$monadMaybeT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["pure" => ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ($__global_Control_Monad_Maybe_Trans_compose)($__case_res_0, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["bind" => (function() use ($bind, $pure) {
  $__body = function($v, $f) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$x = $__case_0;
$f1 = $__case_1;
return ($bind)($x, (function() use ($pure, $f1) {
  $__body = function($v1) use ($pure, $f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
return ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
case "Just":
$y = ($__case_0)->v0;
$v2 = ($f1)($y);
$__case_0 = $v2;
if (true) {
$m = $__case_0;
return $m;
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure, $f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
    $__res = (object)["liftST" => ($__global_Control_Monad_Maybe_Trans_compose)(($__global_Control_Monad_Maybe_Trans_lift)($Monad0), $__case_res_9), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadSTMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadSTMaybeT';

// Control_Monad_Maybe_Trans_monoidMaybeT
function Control_Monad_Maybe_Trans_monoidMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monoidMaybeT';
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
$semigroupMaybeT1 = (function() use ($lift2) {
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
    $__res = (function() use ($semigroupMaybeT1, $__global_Prim_undefined, $pure) {
  $__fn = function($dictMonoid) use ($semigroupMaybeT1, $__global_Prim_undefined, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$semigroupMaybeT2 = ($semigroupMaybeT1)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
$__case_0 = $dictMonoid;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["mempty" => ($pure)($__case_res_4), "Semigroup0" => (function() use ($semigroupMaybeT2) {
  $__fn = function($__dollar____unused) use ($semigroupMaybeT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupMaybeT2;
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
$GLOBALS['Control_Monad_Maybe_Trans_monoidMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monoidMaybeT';

// Control_Monad_Maybe_Trans_altMaybeT
function Control_Monad_Maybe_Trans_altMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_altMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
$Bind1 = (($dictMonad)->Bind1)($__global_Prim_undefined);
$__case_0 = $Bind1;
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
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_2;
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
    $__res = (object)["alt" => (function() use ($bind, $pure) {
  $__body = function($v, $v1) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m1 = $__case_0;
$m2 = $__case_1;
return ($bind)($m1, (function() use ($m2, $pure) {
  $__body = function($m) use ($m2, $pure) {
    $__case_0 = $m;
    switch (($__case_0)->tag) {
case "Nothing":
return $m2;
break;
default:
$ja = $__case_0;
return ($pure)($ja);
break;
};
  };
  $__fn = function($m) use ($m2, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($m);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_altMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_altMaybeT';

// Control_Monad_Maybe_Trans_plusMaybeT
function Control_Monad_Maybe_Trans_plusMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_plusMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
$Bind1 = (($dictMonad)->Bind1)($__global_Prim_undefined);
$__case_0 = $Bind1;
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
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_2;
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
$altMaybeT1 = (object)["alt" => (function() use ($bind, $pure) {
  $__body = function($v, $v1) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m1 = $__case_0;
$m2 = $__case_1;
return ($bind)($m1, (function() use ($m2, $pure) {
  $__body = function($m) use ($m2, $pure) {
    $__case_0 = $m;
    switch (($__case_0)->tag) {
case "Nothing":
return $m2;
break;
default:
$ja = $__case_0;
return ($pure)($ja);
break;
};
  };
  $__fn = function($m) use ($m2, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($m);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["empty" => ($__case_res_3)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))), "Alt0" => (function() use ($altMaybeT1) {
  $__fn = function($__dollar____unused) use ($altMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $altMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_plusMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_plusMaybeT';

// Control_Monad_Maybe_Trans_alternativeMaybeT
function Control_Monad_Maybe_Trans_alternativeMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_alternativeMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
$__global_Control_Monad_Maybe_Trans_MaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT'));
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$applicativeMaybeT1 = (object)["pure" => ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ($__global_Control_Monad_Maybe_Trans_compose)($__case_res_0, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$Bind1 = (($dictMonad)->Bind1)($__global_Prim_undefined);
$__case_0 = $Bind1;
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
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_6;
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
$altMaybeT1 = (object)["alt" => (function() use ($bind, $pure) {
  $__body = function($v, $v1) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m1 = $__case_0;
$m2 = $__case_1;
return ($bind)($m1, (function() use ($m2, $pure) {
  $__body = function($m) use ($m2, $pure) {
    $__case_0 = $m;
    switch (($__case_0)->tag) {
case "Nothing":
return $m2;
break;
default:
$ja = $__case_0;
return ($pure)($ja);
break;
};
  };
  $__fn = function($m) use ($m2, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($m);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$plusMaybeT1 = (object)["empty" => ($__case_res_7)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))), "Alt0" => (function() use ($altMaybeT1) {
  $__fn = function($__dollar____unused) use ($altMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $altMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["Applicative0" => (function() use ($applicativeMaybeT1) {
  $__fn = function($__dollar____unused) use ($applicativeMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusMaybeT1) {
  $__fn = function($__dollar____unused) use ($plusMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $plusMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_alternativeMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_alternativeMaybeT';

// Control_Monad_Maybe_Trans_monadPlusMaybeT
function Control_Monad_Maybe_Trans_monadPlusMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadPlusMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
$__global_Control_Monad_Maybe_Trans_MaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT'));
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$monadMaybeT1 = (object)["Applicative0" => (function() use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["pure" => ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ($__global_Control_Monad_Maybe_Trans_compose)($__case_res_0, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
})(), "Bind1" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
    $__res = (object)["bind" => (function() use ($bind, $pure) {
  $__body = function($v, $f) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$x = $__case_0;
$f1 = $__case_1;
return ($bind)($x, (function() use ($pure, $f1) {
  $__body = function($v1) use ($pure, $f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
return ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
case "Just":
$y = ($__case_0)->v0;
$v2 = ($f1)($y);
$__case_0 = $v2;
if (true) {
$m = $__case_0;
return $m;
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure, $f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
$applicativeMaybeT1 = (object)["pure" => ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ($__global_Control_Monad_Maybe_Trans_compose)($__case_res_9, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Apply0" => (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
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
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$Bind1 = (($dictMonad)->Bind1)($__global_Prim_undefined);
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
$pure = $__case_res_14;
$__case_0 = $dict;
$__case_res_15 = null;
if (true) {
$v = $__case_0;
$__case_res_15 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_15;
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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
$altMaybeT1 = (object)["alt" => (function() use ($bind, $pure) {
  $__body = function($v, $v1) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m1 = $__case_0;
$m2 = $__case_1;
return ($bind)($m1, (function() use ($m2, $pure) {
  $__body = function($m) use ($m2, $pure) {
    $__case_0 = $m;
    switch (($__case_0)->tag) {
case "Nothing":
return $m2;
break;
default:
$ja = $__case_0;
return ($pure)($ja);
break;
};
  };
  $__fn = function($m) use ($m2, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($m);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
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
$plusMaybeT1 = (object)["empty" => ($__case_res_16)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))), "Alt0" => (function() use ($altMaybeT1) {
  $__fn = function($__dollar____unused) use ($altMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $altMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$alternativeMaybeT1 = (object)["Applicative0" => (function() use ($applicativeMaybeT1) {
  $__fn = function($__dollar____unused) use ($applicativeMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusMaybeT1) {
  $__fn = function($__dollar____unused) use ($plusMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $plusMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() use ($alternativeMaybeT1) {
  $__fn = function($__dollar____unused) use ($alternativeMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $alternativeMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadPlusMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadPlusMaybeT';

