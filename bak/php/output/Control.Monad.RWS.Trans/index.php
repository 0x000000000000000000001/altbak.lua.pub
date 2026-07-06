<?php

namespace Control\Monad\RWS\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.RWS.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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
      case 'Control_Monad_RWS_Trans_compose': $v = (function() {
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
      case 'Control_Monad_RWS_Trans_newtypeRWST': $v = (object)["Coercible0" => (function() {
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
      case 'Control_Monad_RWS_Trans_lazyRWST': $v = (object)["defer" => (function() {
  $__body = function($f, $r, $s) {
    $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $v = ($f)($__global_Data_Unit_unit);
    $__case_0 = $v;
    if (true) {
$f__prime__ = $__case_0;
return ($f__prime__)($r, $s);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $r = null, $s = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($f, $r, &$__fn) { return $__fn($f, $r, $s); };
    if ($__num === 1) return function($r, $s = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $r, $s);
      if ($__num2 === 1) return function($s) use ($f, $r, &$__fn) { return $__fn($f, $r, $s); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $r, $s);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
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



// Control_Monad_RWS_Trans_RWSResult
function Control_Monad_RWS_Trans_RWSResult($value0, $value1 = null, $value2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_RWSResult';
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Control_Monad_RWS_Trans_RWSResult'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_RWSResult';

// Control_Monad_RWS_Trans_RWST
function Control_Monad_RWS_Trans_RWST($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_RWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_RWS_Trans_RWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_RWST';

// Control_Monad_RWS_Trans_withRWST
function Control_Monad_RWS_Trans_withRWST($f, $m = null, $r = null, $s = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_withRWST';
  if ($__num < 4) {
    if ($__num === 3) return function($s) use ($f, $m, $r, $__fn) { return $__fn($f, $m, $r, $s); };
    if ($__num === 2) return function($r, $s = null) use ($f, $m, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $m, $r, $s);
      if ($__num2 === 1) return function($s) use ($f, $m, $r, $__fn) { return $__fn($f, $m, $r, $s); };
      return phpurs_curry_fallback($__fn, [$f, $m], 4);
    };
    if ($__num === 1) return function($m, $r = null, $s = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $m, $r, $s);
      if ($__num2 === 2) return function($s) use ($f, $m, $r, $__fn) { return $__fn($f, $m, $r, $s); };
      if ($__num2 === 1) return function($r, $s = null) use ($f, $m, $__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $m, $r, $s);
        if ($__num3 === 1) return function($s) use ($f, $m, $r, $__fn) { return $__fn($f, $m, $r, $s); };
        return phpurs_curry_fallback($__fn, [$f, $m], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
$__global_Data_Tuple_uncurry = ($GLOBALS['Data_Tuple_uncurry'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_uncurry'));
$__case_0 = $m;
$__case_res_0 = null;
if (true) {
$m__prime__ = $__case_0;
$__case_res_0 = $m__prime__;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Tuple_uncurry)($__case_res_0, ($f)($r, $s));
    return 4 < $__num ? $__res(...array_slice(func_get_args(), 4)) : $__res;
}
$GLOBALS['Control_Monad_RWS_Trans_withRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_withRWST';

// Control_Monad_RWS_Trans_runRWST
function Control_Monad_RWS_Trans_runRWST($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_runRWST';
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
$GLOBALS['Control_Monad_RWS_Trans_runRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_runRWST';


// Control_Monad_RWS_Trans_monadTransRWST
function Control_Monad_RWS_Trans_monadTransRWST($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadTransRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_0;
    $__res = (object)["lift" => (function() use ($dict, $mempty) {
  $__fn = function($dictMonad) use ($dict, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
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
    $__res = (function() use ($bind, $pure, $mempty) {
  $__fn = function($m, $v = null, $s = null) use ($bind, $pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($m, $v, &$__fn) { return $__fn($m, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($m, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($m, $v, $s);
      if ($__num2 === 1) return function($s) use ($m, $v, &$__fn) { return $__fn($m, $v, $s); };
      return phpurs_curry_fallback($__fn, [$m], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($bind)($m, (function() use ($pure, $s, $mempty) {
  $__fn = function($a) use ($pure, $s, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s, $a, $mempty));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
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
$GLOBALS['Control_Monad_RWS_Trans_monadTransRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadTransRWST';

// Control_Monad_RWS_Trans_mapRWST
function Control_Monad_RWS_Trans_mapRWST($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_mapRWST';
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
return (function() use ($f1, $m) {
  $__fn = function($r, $s = null) use ($f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($f1)(($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_RWS_Trans_mapRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_mapRWST';


// Control_Monad_RWS_Trans_functorRWST
function Control_Monad_RWS_Trans_functorRWST($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_functorRWST';
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
$map = $__case_res_0;
    $__res = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_RWS_Trans_functorRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_functorRWST';

// Control_Monad_RWS_Trans_execRWST
function Control_Monad_RWS_Trans_execRWST($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_execRWST';
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
  $__body = function($v, $r, $s) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $s;
    if (true) {
$m = $__case_0;
$r1 = $__case_1;
$s1 = $__case_2;
return ($bind)(($m)($r1, $s1), (function() use ($pure) {
  $__body = function($v1) use ($pure) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$writer = ($__case_0)->v2;
return ($pure)(((function() {
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
})())($state, $writer));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure, $__body, &$__fn) {
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
  $__fn = function($v, $r = null, $s = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($v, $r, &$__fn) { return $__fn($v, $r, $s); };
    if ($__num === 1) return function($r, $s = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $r, $s);
      if ($__num2 === 1) return function($s) use ($v, $r, &$__fn) { return $__fn($v, $r, $s); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($v, $r, $s);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_RWS_Trans_execRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_execRWST';

// Control_Monad_RWS_Trans_evalRWST
function Control_Monad_RWS_Trans_evalRWST($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_evalRWST';
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
  $__body = function($v, $r, $s) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $s;
    if (true) {
$m = $__case_0;
$r1 = $__case_1;
$s1 = $__case_2;
return ($bind)(($m)($r1, $s1), (function() use ($pure) {
  $__body = function($v1) use ($pure) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ($pure)(((function() {
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
})())($result, $writer));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure, $__body, &$__fn) {
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
  $__fn = function($v, $r = null, $s = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($v, $r, &$__fn) { return $__fn($v, $r, $s); };
    if ($__num === 1) return function($r, $s = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $r, $s);
      if ($__num2 === 1) return function($s) use ($v, $r, &$__fn) { return $__fn($v, $r, $s); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($v, $r, $s);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_RWS_Trans_evalRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_evalRWST';

// Control_Monad_RWS_Trans_applyRWST
function Control_Monad_RWS_Trans_applyRWST($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_applyRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__case_0 = $dictBind;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_0;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_1;
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
$__case_0 = $Functor0;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
    $__res = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
$append = $__case_res_3;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
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
$GLOBALS['Control_Monad_RWS_Trans_applyRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_applyRWST';

// Control_Monad_RWS_Trans_bindRWST
function Control_Monad_RWS_Trans_bindRWST($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_bindRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__case_0 = $dictBind;
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
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_1;
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
$__case_0 = $dictBind;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_2;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_3;
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
$__case_0 = $Functor0;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_4;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
$append = $__case_res_5;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($dict, $applyRWST1, $bind, $mapFlipped) {
  $__fn = function($dictMonoid) use ($dict, $applyRWST1, $bind, $mapFlipped, &$__fn) {
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
$append = $__case_res_6;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["bind" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $f) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$m = $__case_0;
$f1 = $__case_1;
return (function() use ($bind, $m, $f1, $mapFlipped, $append) {
  $__fn = function($r, $s = null) use ($bind, $m, $f1, $mapFlipped, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($m)($r, $s), (function() use ($f1, $mapFlipped, $r, $append) {
  $__body = function($v1) use ($f1, $mapFlipped, $r, $append) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$a = ($__case_0)->v1;
$w = ($__case_0)->v2;
$v2 = ($f1)($a);
$__case_0 = $v2;
if (true) {
$f__prime__ = $__case_0;
return ($mapFlipped)(($f__prime__)($r, $s__prime__), (function() use ($append, $w) {
  $__body = function($v3) use ($append, $w) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, $result, ($append)($w, $writer));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($append, $w, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $mapFlipped, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_bindRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_bindRWST';

// Control_Monad_RWS_Trans_semigroupRWST
function Control_Monad_RWS_Trans_semigroupRWST($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_semigroupRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__case_0 = $dictBind;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_0;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_1;
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
$__case_0 = $Functor0;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
$append = $__case_res_3;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($dict) {
  $__fn = function($dictMonoid) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_4;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_5;
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
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["append" => ($lift2)($__case_res_6)];
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
$GLOBALS['Control_Monad_RWS_Trans_semigroupRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_semigroupRWST';

// Control_Monad_RWS_Trans_applicativeRWST
function Control_Monad_RWS_Trans_applicativeRWST($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_applicativeRWST';
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
$__case_res_1 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_1;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_2;
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
$__case_0 = $Functor0;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_3;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($applyRWST1, $pure) {
  $__fn = function($dictMonoid) use ($applyRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_5;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["pure" => (function() use ($pure, $mempty) {
  $__fn = function($a, $v = null, $s = null) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $v, $s);
      if ($__num2 === 1) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s, $a, $mempty));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_applicativeRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_applicativeRWST';

// Control_Monad_RWS_Trans_monadRWST
function Control_Monad_RWS_Trans_monadRWST($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadRWST';
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
$__case_res_1 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_1;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_2;
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
$__case_0 = $Functor0;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_3;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$applicativeRWST1 = (function() use ($applyRWST1, $pure) {
  $__fn = function($dictMonoid) use ($applyRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_5;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["pure" => (function() use ($pure, $mempty) {
  $__fn = function($a, $v = null, $s = null) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $v, $s);
      if ($__num2 === 1) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s, $a, $mempty));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
$__case_res_7 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_7;
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
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_8;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_9;
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
$__case_0 = $Functor0;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_10;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
$append = $__case_res_11;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$bindRWST1 = (function() use ($dict, $applyRWST1, $bind, $mapFlipped) {
  $__fn = function($dictMonoid) use ($dict, $applyRWST1, $bind, $mapFlipped, &$__fn) {
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
$append = $__case_res_12;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["bind" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $f) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$m = $__case_0;
$f1 = $__case_1;
return (function() use ($bind, $m, $f1, $mapFlipped, $append) {
  $__fn = function($r, $s = null) use ($bind, $m, $f1, $mapFlipped, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($m)($r, $s), (function() use ($f1, $mapFlipped, $r, $append) {
  $__body = function($v1) use ($f1, $mapFlipped, $r, $append) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$a = ($__case_0)->v1;
$w = ($__case_0)->v2;
$v2 = ($f1)($a);
$__case_0 = $v2;
if (true) {
$f__prime__ = $__case_0;
return ($mapFlipped)(($f__prime__)($r, $s__prime__), (function() use ($append, $w) {
  $__body = function($v3) use ($append, $w) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, $result, ($append)($w, $writer));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($append, $w, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $mapFlipped, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($applicativeRWST1, $bindRWST1) {
  $__fn = function($dictMonoid) use ($applicativeRWST1, $bindRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeRWST2 = ($applicativeRWST1)($dictMonoid);
$bindRWST2 = ($bindRWST1)($dictMonoid);
    $__res = (object)["Applicative0" => (function() use ($applicativeRWST2) {
  $__fn = function($__dollar____unused) use ($applicativeRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindRWST2) {
  $__fn = function($__dollar____unused) use ($bindRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bindRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_monadRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadRWST';

// Control_Monad_RWS_Trans_monadAskRWST
function Control_Monad_RWS_Trans_monadAskRWST($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadAskRWST';
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
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_2;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_3;
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
$__case_0 = $Functor0;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_4;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
$append = $__case_res_5;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$applicativeRWST1 = (function() use ($applyRWST1, $pure) {
  $__fn = function($dictMonoid) use ($applyRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_6;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["pure" => (function() use ($pure, $mempty) {
  $__fn = function($a, $v = null, $s = null) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $v, $s);
      if ($__num2 === 1) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s, $a, $mempty));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
$__case_res_8 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_8;
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
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_9;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_10;
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
$__case_0 = $Functor0;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_11;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
$append = $__case_res_12;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$bindRWST1 = (function() use ($dict, $applyRWST1, $bind, $mapFlipped) {
  $__fn = function($dictMonoid) use ($dict, $applyRWST1, $bind, $mapFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_13;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["bind" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $f) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$m = $__case_0;
$f1 = $__case_1;
return (function() use ($bind, $m, $f1, $mapFlipped, $append) {
  $__fn = function($r, $s = null) use ($bind, $m, $f1, $mapFlipped, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($m)($r, $s), (function() use ($f1, $mapFlipped, $r, $append) {
  $__body = function($v1) use ($f1, $mapFlipped, $r, $append) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$a = ($__case_0)->v1;
$w = ($__case_0)->v2;
$v2 = ($f1)($a);
$__case_0 = $v2;
if (true) {
$f__prime__ = $__case_0;
return ($mapFlipped)(($f__prime__)($r, $s__prime__), (function() use ($append, $w) {
  $__body = function($v3) use ($append, $w) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, $result, ($append)($w, $writer));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($append, $w, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $mapFlipped, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$monadRWST1 = (function() use ($applicativeRWST1, $bindRWST1) {
  $__fn = function($dictMonoid) use ($applicativeRWST1, $bindRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeRWST2 = ($applicativeRWST1)($dictMonoid);
$bindRWST2 = ($bindRWST1)($dictMonoid);
    $__res = (object)["Applicative0" => (function() use ($applicativeRWST2) {
  $__fn = function($__dollar____unused) use ($applicativeRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindRWST2) {
  $__fn = function($__dollar____unused) use ($bindRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bindRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($monadRWST1, $pure) {
  $__fn = function($dictMonoid) use ($monadRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_14;
$monadRWST2 = ($monadRWST1)($dictMonoid);
    $__res = (object)["ask" => (function() use ($pure, $mempty) {
  $__fn = function($r, $s = null) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s, $r, $mempty));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadRWST2) {
  $__fn = function($__dollar____unused) use ($monadRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_monadAskRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadAskRWST';

// Control_Monad_RWS_Trans_monadReaderRWST
function Control_Monad_RWS_Trans_monadReaderRWST($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadReaderRWST';
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
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_2;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_3;
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
$__case_0 = $Functor0;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_4;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
$append = $__case_res_5;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$applicativeRWST1 = (function() use ($applyRWST1, $pure) {
  $__fn = function($dictMonoid) use ($applyRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_6;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["pure" => (function() use ($pure, $mempty) {
  $__fn = function($a, $v = null, $s = null) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $v, $s);
      if ($__num2 === 1) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s, $a, $mempty));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
$__case_res_8 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_8;
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
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_9;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_10;
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
$__case_0 = $Functor0;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_11;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
$append = $__case_res_12;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$bindRWST1 = (function() use ($dict, $applyRWST1, $bind, $mapFlipped) {
  $__fn = function($dictMonoid) use ($dict, $applyRWST1, $bind, $mapFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_13;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["bind" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $f) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$m = $__case_0;
$f1 = $__case_1;
return (function() use ($bind, $m, $f1, $mapFlipped, $append) {
  $__fn = function($r, $s = null) use ($bind, $m, $f1, $mapFlipped, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($m)($r, $s), (function() use ($f1, $mapFlipped, $r, $append) {
  $__body = function($v1) use ($f1, $mapFlipped, $r, $append) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$a = ($__case_0)->v1;
$w = ($__case_0)->v2;
$v2 = ($f1)($a);
$__case_0 = $v2;
if (true) {
$f__prime__ = $__case_0;
return ($mapFlipped)(($f__prime__)($r, $s__prime__), (function() use ($append, $w) {
  $__body = function($v3) use ($append, $w) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, $result, ($append)($w, $writer));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($append, $w, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $mapFlipped, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$monadRWST1 = (function() use ($applicativeRWST1, $bindRWST1) {
  $__fn = function($dictMonoid) use ($applicativeRWST1, $bindRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeRWST2 = ($applicativeRWST1)($dictMonoid);
$bindRWST2 = ($bindRWST1)($dictMonoid);
    $__res = (object)["Applicative0" => (function() use ($applicativeRWST2) {
  $__fn = function($__dollar____unused) use ($applicativeRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindRWST2) {
  $__fn = function($__dollar____unused) use ($bindRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bindRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$monadAskRWST1 = (function() use ($monadRWST1, $pure) {
  $__fn = function($dictMonoid) use ($monadRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_14;
$monadRWST2 = ($monadRWST1)($dictMonoid);
    $__res = (object)["ask" => (function() use ($pure, $mempty) {
  $__fn = function($r, $s = null) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s, $r, $mempty));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadRWST2) {
  $__fn = function($__dollar____unused) use ($monadRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($monadAskRWST1) {
  $__fn = function($dictMonoid) use ($monadAskRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$monadAskRWST2 = ($monadAskRWST1)($dictMonoid);
    $__res = (object)["local" => (function() {
  $__body = function($f, $m, $r, $s) {
    $__case_0 = $m;
    if (true) {
$m__prime__ = $__case_0;
return ($m__prime__)(($f)($r), $s);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $m = null, $r = null, $s = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($s) use ($f, $m, $r, &$__fn) { return $__fn($f, $m, $r, $s); };
    if ($__num === 2) return function($r, $s = null) use ($f, $m, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $m, $r, $s);
      if ($__num2 === 1) return function($s) use ($f, $m, $r, &$__fn) { return $__fn($f, $m, $r, $s); };
      return phpurs_curry_fallback($__fn, [$f, $m], 4);
    };
    if ($__num === 1) return function($m, $r = null, $s = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $m, $r, $s);
      if ($__num2 === 2) return function($s) use ($f, $m, $r, &$__fn) { return $__fn($f, $m, $r, $s); };
      if ($__num2 === 1) return function($r, $s = null) use ($f, $m, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $m, $r, $s);
        if ($__num3 === 1) return function($s) use ($f, $m, $r, &$__fn) { return $__fn($f, $m, $r, $s); };
        return phpurs_curry_fallback($__fn, [$f, $m], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($f, $m, $r, $s);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "MonadAsk0" => (function() use ($monadAskRWST2) {
  $__fn = function($__dollar____unused) use ($monadAskRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadAskRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_monadReaderRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadReaderRWST';

// Control_Monad_RWS_Trans_monadEffectRWS
function Control_Monad_RWS_Trans_monadEffectRWS($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadEffectRWS';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_RWS_Trans_compose = ($GLOBALS['Control_Monad_RWS_Trans_compose'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_compose'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->lift;
} else {
throw new \Exception("Pattern match failure");
};
$lift = $__case_res_0;
    $__res = (function() use ($__global_Prim_undefined, $dict, $dictBind, $dictMonoid, $__global_Control_Monad_RWS_Trans_compose, $lift) {
  $__fn = function($dictMonadEffect) use ($__global_Prim_undefined, $dict, $dictBind, $dictMonoid, $__global_Control_Monad_RWS_Trans_compose, $lift, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadEffect)->Monad0)($__global_Prim_undefined);
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
$__case_res_2 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_2;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_3;
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
$__case_0 = $Functor0;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_4;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
$append = $__case_res_5;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$applicativeRWST1 = (function() use ($applyRWST1, $pure) {
  $__fn = function($dictMonoid) use ($applyRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_6;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["pure" => (function() use ($pure, $mempty) {
  $__fn = function($a, $v = null, $s = null) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $v, $s);
      if ($__num2 === 1) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s, $a, $mempty));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
$__case_res_8 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_8;
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
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_9;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_10;
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
$__case_0 = $Functor0;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_11;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
$append = $__case_res_12;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$bindRWST1 = (function() use ($dict, $applyRWST1, $bind, $mapFlipped) {
  $__fn = function($dictMonoid) use ($dict, $applyRWST1, $bind, $mapFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_13;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["bind" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $f) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$m = $__case_0;
$f1 = $__case_1;
return (function() use ($bind, $m, $f1, $mapFlipped, $append) {
  $__fn = function($r, $s = null) use ($bind, $m, $f1, $mapFlipped, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($m)($r, $s), (function() use ($f1, $mapFlipped, $r, $append) {
  $__body = function($v1) use ($f1, $mapFlipped, $r, $append) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$a = ($__case_0)->v1;
$w = ($__case_0)->v2;
$v2 = ($f1)($a);
$__case_0 = $v2;
if (true) {
$f__prime__ = $__case_0;
return ($mapFlipped)(($f__prime__)($r, $s__prime__), (function() use ($append, $w) {
  $__body = function($v3) use ($append, $w) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, $result, ($append)($w, $writer));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($append, $w, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $mapFlipped, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$monadRWST1 = ((function() use ($applicativeRWST1, $bindRWST1) {
  $__fn = function($dictMonoid) use ($applicativeRWST1, $bindRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeRWST2 = ($applicativeRWST1)($dictMonoid);
$bindRWST2 = ($bindRWST1)($dictMonoid);
    $__res = (object)["Applicative0" => (function() use ($applicativeRWST2) {
  $__fn = function($__dollar____unused) use ($applicativeRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindRWST2) {
  $__fn = function($__dollar____unused) use ($bindRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bindRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($dictMonoid);
$__case_0 = $dictMonadEffect;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->liftEffect;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["liftEffect" => ($__global_Control_Monad_RWS_Trans_compose)(($lift)($Monad0), $__case_res_14), "Monad0" => (function() use ($monadRWST1) {
  $__fn = function($__dollar____unused) use ($monadRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadRWST1;
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
$GLOBALS['Control_Monad_RWS_Trans_monadEffectRWS'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadEffectRWS';

// Control_Monad_RWS_Trans_monadRecRWST
function Control_Monad_RWS_Trans_monadRecRWST($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadRecRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$Monad0 = (($dictMonadRec)->Monad0)($__global_Prim_undefined);
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
$__case_0 = $dictMonadRec;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->tailRecM;
} else {
throw new \Exception("Pattern match failure");
};
$tailRecM = $__case_res_2;
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
$__case_res_4 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_4;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_5;
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
$__case_0 = $Functor0;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_6;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$applicativeRWST1 = (function() use ($applyRWST1, $pure) {
  $__fn = function($dictMonoid) use ($applyRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_8;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["pure" => (function() use ($pure, $mempty) {
  $__fn = function($a, $v = null, $s = null) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $v, $s);
      if ($__num2 === 1) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s, $a, $mempty));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
$__case_res_10 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_10;
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
$__case_0 = $dict;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_11;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_12;
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
$__case_0 = $Functor0;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_13;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_14;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$bindRWST1 = (function() use ($dict, $applyRWST1, $bind, $mapFlipped) {
  $__fn = function($dictMonoid) use ($dict, $applyRWST1, $bind, $mapFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_15 = null;
if (true) {
$v = $__case_0;
$__case_res_15 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_15;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["bind" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $f) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$m = $__case_0;
$f1 = $__case_1;
return (function() use ($bind, $m, $f1, $mapFlipped, $append) {
  $__fn = function($r, $s = null) use ($bind, $m, $f1, $mapFlipped, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($m)($r, $s), (function() use ($f1, $mapFlipped, $r, $append) {
  $__body = function($v1) use ($f1, $mapFlipped, $r, $append) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$a = ($__case_0)->v1;
$w = ($__case_0)->v2;
$v2 = ($f1)($a);
$__case_0 = $v2;
if (true) {
$f__prime__ = $__case_0;
return ($mapFlipped)(($f__prime__)($r, $s__prime__), (function() use ($append, $w) {
  $__body = function($v3) use ($append, $w) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, $result, ($append)($w, $writer));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($append, $w, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $mapFlipped, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$monadRWST1 = (function() use ($applicativeRWST1, $bindRWST1) {
  $__fn = function($dictMonoid) use ($applicativeRWST1, $bindRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeRWST2 = ($applicativeRWST1)($dictMonoid);
$bindRWST2 = ($bindRWST1)($dictMonoid);
    $__res = (object)["Applicative0" => (function() use ($applicativeRWST2) {
  $__fn = function($__dollar____unused) use ($applicativeRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindRWST2) {
  $__fn = function($__dollar____unused) use ($bindRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bindRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($dict, $monadRWST1, $bind, $pure, $tailRecM) {
  $__fn = function($dictMonoid) use ($dict, $monadRWST1, $bind, $pure, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_16 = null;
if (true) {
$v = $__case_0;
$__case_res_16 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_16;
$__case_0 = $dictMonoid;
$__case_res_17 = null;
if (true) {
$v = $__case_0;
$__case_res_17 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_17;
$monadRWST2 = ($monadRWST1)($dictMonoid);
    $__res = (object)["tailRecM" => (function() use ($bind, $pure, $append, $tailRecM, $mempty) {
  $__fn = function($k, $a = null) use ($bind, $pure, $append, $tailRecM, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($k, &$__fn) { return $__fn($k, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$k__prime__ = (function() use ($k, $bind, $pure, $append) {
  $__body = function($r, $v) use ($k, $bind, $pure, $append) {
    $__case_0 = $r;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "RWSResult":
$r1 = $__case_0;
$state = ($__case_1)->v0;
$result = ($__case_1)->v1;
$writer = ($__case_1)->v2;
$v1 = ($k)($result);
$__case_0 = $v1;
if (true) {
$m = $__case_0;
return ($bind)(($m)($r1, $state), (function() use ($pure, $append, $writer) {
  $__body = function($v2) use ($pure, $append, $writer) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$state__prime__ = ($__case_0)->v0;
$result__prime__ = ($__case_0)->v1;
$writer__prime__ = ($__case_0)->v2;
$__case_0 = $result__prime__;
$__case_res_18 = null;
switch (($__case_0)->tag) {
case "Loop":
$x = ($__case_0)->v0;
$__case_res_18 = ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Loop", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state__prime__, $x, ($append)($writer, $writer__prime__)));
break;
case "Done":
$y = ($__case_0)->v0;
$__case_res_18 = ((function() {
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
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state__prime__, $y, ($append)($writer, $writer__prime__)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
return ($pure)($__case_res_18);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v2) use ($pure, $append, $writer, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($r, $v = null) use ($k, $bind, $pure, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($r, &$__fn) { return $__fn($r, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($r, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($tailRecM, $k__prime__, $a, $mempty) {
  $__fn = function($r, $s = null) use ($tailRecM, $k__prime__, $a, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($tailRecM)(($k__prime__)($r), ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s, $a, $mempty));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadRWST2) {
  $__fn = function($__dollar____unused) use ($monadRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_monadRecRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadRecRWST';

// Control_Monad_RWS_Trans_monadStateRWST
function Control_Monad_RWS_Trans_monadStateRWST($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadStateRWST';
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
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_2;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_3;
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
$__case_0 = $Functor0;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_4;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
$append = $__case_res_5;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$applicativeRWST1 = (function() use ($applyRWST1, $pure) {
  $__fn = function($dictMonoid) use ($applyRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_6;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["pure" => (function() use ($pure, $mempty) {
  $__fn = function($a, $v = null, $s = null) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $v, $s);
      if ($__num2 === 1) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s, $a, $mempty));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
$__case_res_8 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_8;
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
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_9;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_10;
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
$__case_0 = $Functor0;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_11;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
$append = $__case_res_12;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$bindRWST1 = (function() use ($dict, $applyRWST1, $bind, $mapFlipped) {
  $__fn = function($dictMonoid) use ($dict, $applyRWST1, $bind, $mapFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_13;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["bind" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $f) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$m = $__case_0;
$f1 = $__case_1;
return (function() use ($bind, $m, $f1, $mapFlipped, $append) {
  $__fn = function($r, $s = null) use ($bind, $m, $f1, $mapFlipped, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($m)($r, $s), (function() use ($f1, $mapFlipped, $r, $append) {
  $__body = function($v1) use ($f1, $mapFlipped, $r, $append) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$a = ($__case_0)->v1;
$w = ($__case_0)->v2;
$v2 = ($f1)($a);
$__case_0 = $v2;
if (true) {
$f__prime__ = $__case_0;
return ($mapFlipped)(($f__prime__)($r, $s__prime__), (function() use ($append, $w) {
  $__body = function($v3) use ($append, $w) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, $result, ($append)($w, $writer));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($append, $w, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $mapFlipped, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$monadRWST1 = (function() use ($applicativeRWST1, $bindRWST1) {
  $__fn = function($dictMonoid) use ($applicativeRWST1, $bindRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeRWST2 = ($applicativeRWST1)($dictMonoid);
$bindRWST2 = ($bindRWST1)($dictMonoid);
    $__res = (object)["Applicative0" => (function() use ($applicativeRWST2) {
  $__fn = function($__dollar____unused) use ($applicativeRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindRWST2) {
  $__fn = function($__dollar____unused) use ($bindRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bindRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($monadRWST1, $pure) {
  $__fn = function($dictMonoid) use ($monadRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_14;
$monadRWST2 = ($monadRWST1)($dictMonoid);
    $__res = (object)["state" => (function() use ($pure, $mempty) {
  $__body = function($f, $v, $s) use ($pure, $mempty) {
    $v1 = ($f)($s);
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$s__prime__ = ($__case_0)->v1;
return ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime__, $a, $mempty));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null, $s = null) use ($pure, $mempty, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($f, $v, &$__fn) { return $__fn($f, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $v, $s);
      if ($__num2 === 1) return function($s) use ($f, $v, &$__fn) { return $__fn($f, $v, $s); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $v, $s);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadRWST2) {
  $__fn = function($__dollar____unused) use ($monadRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_monadStateRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadStateRWST';

// Control_Monad_RWS_Trans_monadTellRWST
function Control_Monad_RWS_Trans_monadTellRWST($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadTellRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
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
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_2;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_3;
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
$__case_0 = $Functor0;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_4;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
$append = $__case_res_5;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$applicativeRWST1 = (function() use ($applyRWST1, $pure) {
  $__fn = function($dictMonoid) use ($applyRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_6;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["pure" => (function() use ($pure, $mempty) {
  $__fn = function($a, $v = null, $s = null) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $v, $s);
      if ($__num2 === 1) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s, $a, $mempty));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
$__case_res_8 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_8;
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
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_9;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_10;
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
$__case_0 = $Functor0;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_11;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
$append = $__case_res_12;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$bindRWST1 = (function() use ($dict, $applyRWST1, $bind, $mapFlipped) {
  $__fn = function($dictMonoid) use ($dict, $applyRWST1, $bind, $mapFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_13;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["bind" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $f) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$m = $__case_0;
$f1 = $__case_1;
return (function() use ($bind, $m, $f1, $mapFlipped, $append) {
  $__fn = function($r, $s = null) use ($bind, $m, $f1, $mapFlipped, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($m)($r, $s), (function() use ($f1, $mapFlipped, $r, $append) {
  $__body = function($v1) use ($f1, $mapFlipped, $r, $append) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$a = ($__case_0)->v1;
$w = ($__case_0)->v2;
$v2 = ($f1)($a);
$__case_0 = $v2;
if (true) {
$f__prime__ = $__case_0;
return ($mapFlipped)(($f__prime__)($r, $s__prime__), (function() use ($append, $w) {
  $__body = function($v3) use ($append, $w) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, $result, ($append)($w, $writer));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($append, $w, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $mapFlipped, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$monadRWST1 = (function() use ($applicativeRWST1, $bindRWST1) {
  $__fn = function($dictMonoid) use ($applicativeRWST1, $bindRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeRWST2 = ($applicativeRWST1)($dictMonoid);
$bindRWST2 = ($bindRWST1)($dictMonoid);
    $__res = (object)["Applicative0" => (function() use ($applicativeRWST2) {
  $__fn = function($__dollar____unused) use ($applicativeRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindRWST2) {
  $__fn = function($__dollar____unused) use ($bindRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bindRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($__global_Prim_undefined, $monadRWST1, $pure, $__global_Data_Unit_unit) {
  $__fn = function($dictMonoid) use ($__global_Prim_undefined, $monadRWST1, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Semigroup0 = (($dictMonoid)->Semigroup0)($__global_Prim_undefined);
$monadRWST2 = ($monadRWST1)($dictMonoid);
    $__res = (object)["tell" => (function() use ($pure, $__global_Data_Unit_unit) {
  $__fn = function($w, $v = null, $s = null) use ($pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($w, $v, &$__fn) { return $__fn($w, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($w, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($w, $v, $s);
      if ($__num2 === 1) return function($s) use ($w, $v, &$__fn) { return $__fn($w, $v, $s); };
      return phpurs_curry_fallback($__fn, [$w], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s, $__global_Data_Unit_unit, $w));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Semigroup0" => (function() use (&$Semigroup0) {
  $__fn = function($__dollar____unused) use (&$Semigroup0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $Semigroup0;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad1" => (function() use ($monadRWST2) {
  $__fn = function($__dollar____unused) use ($monadRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_monadTellRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadTellRWST';

// Control_Monad_RWS_Trans_monadWriterRWST
function Control_Monad_RWS_Trans_monadWriterRWST($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadWriterRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
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
$__case_res_3 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_4;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_5;
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
$__case_0 = $Functor0;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_6;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$applicativeRWST1 = (function() use ($applyRWST1, $pure) {
  $__fn = function($dictMonoid) use ($applyRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_8;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["pure" => (function() use ($pure, $mempty) {
  $__fn = function($a, $v = null, $s = null) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $v, $s);
      if ($__num2 === 1) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s, $a, $mempty));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
$__case_res_10 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_10;
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
$__case_0 = $dict;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_11;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_12;
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
$__case_0 = $Functor0;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_13;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_14;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$bindRWST1 = (function() use ($dict, $applyRWST1, $bind, $mapFlipped) {
  $__fn = function($dictMonoid) use ($dict, $applyRWST1, $bind, $mapFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_15 = null;
if (true) {
$v = $__case_0;
$__case_res_15 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_15;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["bind" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $f) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$m = $__case_0;
$f1 = $__case_1;
return (function() use ($bind, $m, $f1, $mapFlipped, $append) {
  $__fn = function($r, $s = null) use ($bind, $m, $f1, $mapFlipped, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($m)($r, $s), (function() use ($f1, $mapFlipped, $r, $append) {
  $__body = function($v1) use ($f1, $mapFlipped, $r, $append) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$a = ($__case_0)->v1;
$w = ($__case_0)->v2;
$v2 = ($f1)($a);
$__case_0 = $v2;
if (true) {
$f__prime__ = $__case_0;
return ($mapFlipped)(($f__prime__)($r, $s__prime__), (function() use ($append, $w) {
  $__body = function($v3) use ($append, $w) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, $result, ($append)($w, $writer));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($append, $w, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $mapFlipped, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$monadRWST1 = (function() use ($applicativeRWST1, $bindRWST1) {
  $__fn = function($dictMonoid) use ($applicativeRWST1, $bindRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeRWST2 = ($applicativeRWST1)($dictMonoid);
$bindRWST2 = ($bindRWST1)($dictMonoid);
    $__res = (object)["Applicative0" => (function() use ($applicativeRWST2) {
  $__fn = function($__dollar____unused) use ($applicativeRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindRWST2) {
  $__fn = function($__dollar____unused) use ($bindRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bindRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$monadTellRWST1 = (function() use ($__global_Prim_undefined, $monadRWST1, $pure, $__global_Data_Unit_unit) {
  $__fn = function($dictMonoid) use ($__global_Prim_undefined, $monadRWST1, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Semigroup0 = (($dictMonoid)->Semigroup0)($__global_Prim_undefined);
$monadRWST2 = ($monadRWST1)($dictMonoid);
    $__res = (object)["tell" => (function() use ($pure, $__global_Data_Unit_unit) {
  $__fn = function($w, $v = null, $s = null) use ($pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($w, $v, &$__fn) { return $__fn($w, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($w, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($w, $v, $s);
      if ($__num2 === 1) return function($s) use ($w, $v, &$__fn) { return $__fn($w, $v, $s); };
      return phpurs_curry_fallback($__fn, [$w], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s, $__global_Data_Unit_unit, $w));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Semigroup0" => (function() use (&$Semigroup0) {
  $__fn = function($__dollar____unused) use (&$Semigroup0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $Semigroup0;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad1" => (function() use ($monadRWST2) {
  $__fn = function($__dollar____unused) use ($monadRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($monadTellRWST1, $bind, $pure) {
  $__fn = function($dictMonoid) use ($monadTellRWST1, $bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$monadTellRWST2 = ($monadTellRWST1)($dictMonoid);
    $__res = (object)["listen" => (function() use ($bind, $pure) {
  $__body = function($m, $r, $s) use ($bind, $pure) {
    $__case_0 = $m;
    if (true) {
$m__prime__ = $__case_0;
return ($bind)(($m__prime__)($r, $s), (function() use ($pure) {
  $__body = function($v) use ($pure) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$a = ($__case_0)->v1;
$w = ($__case_0)->v2;
return ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime__, ((function() {
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
})())($a, $w), $w));
break;
default:
throw new \Exception("Pattern match failure");
break;
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
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($m, $r = null, $s = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($m, $r, &$__fn) { return $__fn($m, $r, $s); };
    if ($__num === 1) return function($r, $s = null) use ($m, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($m, $r, $s);
      if ($__num2 === 1) return function($s) use ($m, $r, &$__fn) { return $__fn($m, $r, $s); };
      return phpurs_curry_fallback($__fn, [$m], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($m, $r, $s);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "pass" => (function() use ($bind, $pure) {
  $__body = function($m, $r, $s) use ($bind, $pure) {
    $__case_0 = $m;
    if (true) {
$m__prime__ = $__case_0;
return ($bind)(($m__prime__)($r, $s), (function() use ($pure) {
  $__body = function($v) use ($pure) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "RWSResult") && ((($__case_0)->v1)->tag === "Tuple"))) {
$s__prime__ = ($__case_0)->v0;
$a = (($__case_0)->v1)->v0;
$f = (($__case_0)->v1)->v1;
$w = ($__case_0)->v2;
return ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime__, $a, ($f)($w)));
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
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($m, $r = null, $s = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($m, $r, &$__fn) { return $__fn($m, $r, $s); };
    if ($__num === 1) return function($r, $s = null) use ($m, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($m, $r, $s);
      if ($__num2 === 1) return function($s) use ($m, $r, &$__fn) { return $__fn($m, $r, $s); };
      return phpurs_curry_fallback($__fn, [$m], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($m, $r, $s);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Monoid0" => (function() use ($dictMonoid) {
  $__fn = function($__dollar____unused) use ($dictMonoid, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictMonoid;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "MonadTell1" => (function() use ($monadTellRWST2) {
  $__fn = function($__dollar____unused) use ($monadTellRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadTellRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_monadWriterRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadWriterRWST';

// Control_Monad_RWS_Trans_monadThrowRWST
function Control_Monad_RWS_Trans_monadThrowRWST($dictMonadThrow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadThrowRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$Monad0 = (($dictMonadThrow)->Monad0)($__global_Prim_undefined);
$__case_0 = $dictMonadThrow;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->throwError;
} else {
throw new \Exception("Pattern match failure");
};
$throwError = $__case_res_0;
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
$__case_res_2 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_2;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_3;
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
$__case_0 = $Functor0;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_4;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
$append = $__case_res_5;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$applicativeRWST1 = (function() use ($applyRWST1, $pure) {
  $__fn = function($dictMonoid) use ($applyRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_6;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["pure" => (function() use ($pure, $mempty) {
  $__fn = function($a, $v = null, $s = null) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $v, $s);
      if ($__num2 === 1) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s, $a, $mempty));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
$__case_res_8 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_8;
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
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_9;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_10;
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
$__case_0 = $Functor0;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_11;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
$append = $__case_res_12;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$bindRWST1 = (function() use ($dict, $applyRWST1, $bind, $mapFlipped) {
  $__fn = function($dictMonoid) use ($dict, $applyRWST1, $bind, $mapFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_13;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["bind" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $f) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$m = $__case_0;
$f1 = $__case_1;
return (function() use ($bind, $m, $f1, $mapFlipped, $append) {
  $__fn = function($r, $s = null) use ($bind, $m, $f1, $mapFlipped, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($m)($r, $s), (function() use ($f1, $mapFlipped, $r, $append) {
  $__body = function($v1) use ($f1, $mapFlipped, $r, $append) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$a = ($__case_0)->v1;
$w = ($__case_0)->v2;
$v2 = ($f1)($a);
$__case_0 = $v2;
if (true) {
$f__prime__ = $__case_0;
return ($mapFlipped)(($f__prime__)($r, $s__prime__), (function() use ($append, $w) {
  $__body = function($v3) use ($append, $w) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, $result, ($append)($w, $writer));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($append, $w, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $mapFlipped, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$monadRWST1 = (function() use ($applicativeRWST1, $bindRWST1) {
  $__fn = function($dictMonoid) use ($applicativeRWST1, $bindRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeRWST2 = ($applicativeRWST1)($dictMonoid);
$bindRWST2 = ($bindRWST1)($dictMonoid);
    $__res = (object)["Applicative0" => (function() use ($applicativeRWST2) {
  $__fn = function($__dollar____unused) use ($applicativeRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindRWST2) {
  $__fn = function($__dollar____unused) use ($bindRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bindRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($dict, &$Monad0, $monadRWST1, $throwError) {
  $__fn = function($dictMonoid) use ($dict, &$Monad0, $monadRWST1, $throwError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->lift;
} else {
throw new \Exception("Pattern match failure");
};
$lift = ($__case_res_14)($Monad0);
$monadRWST2 = ($monadRWST1)($dictMonoid);
    $__res = (object)["throwError" => (function() use ($lift, $throwError) {
  $__fn = function($e) use ($lift, $throwError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($lift)(($throwError)($e));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadRWST2) {
  $__fn = function($__dollar____unused) use ($monadRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_monadThrowRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadThrowRWST';

// Control_Monad_RWS_Trans_monadErrorRWST
function Control_Monad_RWS_Trans_monadErrorRWST($dictMonadError) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadErrorRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
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
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->throwError;
} else {
throw new \Exception("Pattern match failure");
};
$throwError = $__case_res_1;
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
$__case_res_3 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_3;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_4;
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
$__case_0 = $Functor0;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_5;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
$append = $__case_res_6;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$applicativeRWST1 = (function() use ($applyRWST1, $pure) {
  $__fn = function($dictMonoid) use ($applyRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_7;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["pure" => (function() use ($pure, $mempty) {
  $__fn = function($a, $v = null, $s = null) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $v, $s);
      if ($__num2 === 1) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s, $a, $mempty));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
$__case_res_9 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_9;
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
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_10;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_11;
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
$__case_0 = $Functor0;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_12;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_13;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$bindRWST1 = (function() use ($dict, $applyRWST1, $bind, $mapFlipped) {
  $__fn = function($dictMonoid) use ($dict, $applyRWST1, $bind, $mapFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_14;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["bind" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $f) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$m = $__case_0;
$f1 = $__case_1;
return (function() use ($bind, $m, $f1, $mapFlipped, $append) {
  $__fn = function($r, $s = null) use ($bind, $m, $f1, $mapFlipped, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($m)($r, $s), (function() use ($f1, $mapFlipped, $r, $append) {
  $__body = function($v1) use ($f1, $mapFlipped, $r, $append) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$a = ($__case_0)->v1;
$w = ($__case_0)->v2;
$v2 = ($f1)($a);
$__case_0 = $v2;
if (true) {
$f__prime__ = $__case_0;
return ($mapFlipped)(($f__prime__)($r, $s__prime__), (function() use ($append, $w) {
  $__body = function($v3) use ($append, $w) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, $result, ($append)($w, $writer));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($append, $w, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $mapFlipped, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$monadRWST1 = (function() use ($applicativeRWST1, $bindRWST1) {
  $__fn = function($dictMonoid) use ($applicativeRWST1, $bindRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeRWST2 = ($applicativeRWST1)($dictMonoid);
$bindRWST2 = ($bindRWST1)($dictMonoid);
    $__res = (object)["Applicative0" => (function() use ($applicativeRWST2) {
  $__fn = function($__dollar____unused) use ($applicativeRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindRWST2) {
  $__fn = function($__dollar____unused) use ($bindRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bindRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$monadThrowRWST1 = (function() use ($dict, &$Monad0, $monadRWST1, $throwError) {
  $__fn = function($dictMonoid) use ($dict, &$Monad0, $monadRWST1, $throwError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_15 = null;
if (true) {
$v = $__case_0;
$__case_res_15 = ($v)->lift;
} else {
throw new \Exception("Pattern match failure");
};
$lift = ($__case_res_15)($Monad0);
$monadRWST2 = ($monadRWST1)($dictMonoid);
    $__res = (object)["throwError" => (function() use ($lift, $throwError) {
  $__fn = function($e) use ($lift, $throwError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($lift)(($throwError)($e));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadRWST2) {
  $__fn = function($__dollar____unused) use ($monadRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($monadThrowRWST1, $catchError) {
  $__fn = function($dictMonoid) use ($monadThrowRWST1, $catchError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$monadThrowRWST2 = ($monadThrowRWST1)($dictMonoid);
    $__res = (object)["catchError" => (function() use ($catchError) {
  $__fn = function($m, $h = null, $r = null, $s = null) use ($catchError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($s) use ($m, $h, $r, &$__fn) { return $__fn($m, $h, $r, $s); };
    if ($__num === 2) return function($r, $s = null) use ($m, $h, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($m, $h, $r, $s);
      if ($__num2 === 1) return function($s) use ($m, $h, $r, &$__fn) { return $__fn($m, $h, $r, $s); };
      return phpurs_curry_fallback($__fn, [$m, $h], 4);
    };
    if ($__num === 1) return function($h, $r = null, $s = null) use ($m, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($m, $h, $r, $s);
      if ($__num2 === 2) return function($s) use ($m, $h, $r, &$__fn) { return $__fn($m, $h, $r, $s); };
      if ($__num2 === 1) return function($r, $s = null) use ($m, $h, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($m, $h, $r, $s);
        if ($__num3 === 1) return function($s) use ($m, $h, $r, &$__fn) { return $__fn($m, $h, $r, $s); };
        return phpurs_curry_fallback($__fn, [$m, $h], 4);
      };
      return phpurs_curry_fallback($__fn, [$m], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
$__case_0 = $m;
$__case_res_16 = null;
if (true) {
$m__prime__ = $__case_0;
$__case_res_16 = ($m__prime__)($r, $s);
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($catchError)($__case_res_16, (function() use ($h, $r, $s) {
  $__body = function($e) use ($h, $r, $s) {
    $v = ($h)($e);
    $__case_0 = $v;
    if (true) {
$m__prime__ = $__case_0;
return ($m__prime__)($r, $s);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($e) use ($h, $r, $s, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($e);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "MonadThrow0" => (function() use ($monadThrowRWST2) {
  $__fn = function($__dollar____unused) use ($monadThrowRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadThrowRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_monadErrorRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadErrorRWST';

// Control_Monad_RWS_Trans_monadSTRWST
function Control_Monad_RWS_Trans_monadSTRWST($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadSTRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_RWS_Trans_compose = ($GLOBALS['Control_Monad_RWS_Trans_compose'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_compose'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->lift;
} else {
throw new \Exception("Pattern match failure");
};
$lift = $__case_res_0;
    $__res = (function() use ($__global_Prim_undefined, $dict, $dictBind, $dictMonoid, $__global_Control_Monad_RWS_Trans_compose, $lift) {
  $__fn = function($dictMonadST) use ($__global_Prim_undefined, $dict, $dictBind, $dictMonoid, $__global_Control_Monad_RWS_Trans_compose, $lift, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadST)->Monad0)($__global_Prim_undefined);
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
$__case_res_2 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_2;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_3;
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
$__case_0 = $Functor0;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_4;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
$append = $__case_res_5;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$applicativeRWST1 = (function() use ($applyRWST1, $pure) {
  $__fn = function($dictMonoid) use ($applyRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_6;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["pure" => (function() use ($pure, $mempty) {
  $__fn = function($a, $v = null, $s = null) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $v, $s);
      if ($__num2 === 1) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s, $a, $mempty));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
$__case_res_8 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_8;
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
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_9;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_10;
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
$__case_0 = $Functor0;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_11;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
$append = $__case_res_12;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$bindRWST1 = (function() use ($dict, $applyRWST1, $bind, $mapFlipped) {
  $__fn = function($dictMonoid) use ($dict, $applyRWST1, $bind, $mapFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_13;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["bind" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $f) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$m = $__case_0;
$f1 = $__case_1;
return (function() use ($bind, $m, $f1, $mapFlipped, $append) {
  $__fn = function($r, $s = null) use ($bind, $m, $f1, $mapFlipped, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($m)($r, $s), (function() use ($f1, $mapFlipped, $r, $append) {
  $__body = function($v1) use ($f1, $mapFlipped, $r, $append) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$a = ($__case_0)->v1;
$w = ($__case_0)->v2;
$v2 = ($f1)($a);
$__case_0 = $v2;
if (true) {
$f__prime__ = $__case_0;
return ($mapFlipped)(($f__prime__)($r, $s__prime__), (function() use ($append, $w) {
  $__body = function($v3) use ($append, $w) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, $result, ($append)($w, $writer));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($append, $w, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $mapFlipped, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$monadRWST1 = ((function() use ($applicativeRWST1, $bindRWST1) {
  $__fn = function($dictMonoid) use ($applicativeRWST1, $bindRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeRWST2 = ($applicativeRWST1)($dictMonoid);
$bindRWST2 = ($bindRWST1)($dictMonoid);
    $__res = (object)["Applicative0" => (function() use ($applicativeRWST2) {
  $__fn = function($__dollar____unused) use ($applicativeRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindRWST2) {
  $__fn = function($__dollar____unused) use ($bindRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bindRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($dictMonoid);
$__case_0 = $dictMonadST;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->liftST;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["liftST" => ($__global_Control_Monad_RWS_Trans_compose)(($lift)($Monad0), $__case_res_14), "Monad0" => (function() use ($monadRWST1) {
  $__fn = function($__dollar____unused) use ($monadRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadRWST1;
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
$GLOBALS['Control_Monad_RWS_Trans_monadSTRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadSTRWST';

// Control_Monad_RWS_Trans_monoidRWST
function Control_Monad_RWS_Trans_monoidRWST($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monoidRWST';
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
$__case_res_1 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_1;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_2;
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
$__case_0 = $Functor0;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_3;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$applicativeRWST1 = (function() use ($applyRWST1, $pure) {
  $__fn = function($dictMonoid) use ($applyRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_5;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["pure" => (function() use ($pure, $mempty) {
  $__fn = function($a, $v = null, $s = null) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $v, $s);
      if ($__num2 === 1) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s, $a, $mempty));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_6;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_7;
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
$__case_0 = $Functor0;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_8;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_9;
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$semigroupRWST1 = (function() use ($dict) {
  $__fn = function($dictMonoid) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_10;
$__case_0 = $dict;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_11;
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
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["append" => ($lift2)($__case_res_12)];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($dict, $semigroupRWST1, $__global_Prim_undefined) {
  $__fn = function($dictMonoid) use ($dict, $semigroupRWST1, $__global_Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_13;
$semigroupRWST2 = ($semigroupRWST1)($dictMonoid);
    $__res = (function() use ($semigroupRWST2, $__global_Prim_undefined, $pure) {
  $__fn = function($dictMonoid1) use ($semigroupRWST2, $__global_Prim_undefined, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$semigroupRWST3 = ($semigroupRWST2)((($dictMonoid1)->Semigroup0)($__global_Prim_undefined));
$__case_0 = $dictMonoid1;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["mempty" => ($pure)($__case_res_14), "Semigroup0" => (function() use ($semigroupRWST3) {
  $__fn = function($__dollar____unused) use ($semigroupRWST3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupRWST3;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
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
$GLOBALS['Control_Monad_RWS_Trans_monoidRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monoidRWST';

// Control_Monad_RWS_Trans_altRWST
function Control_Monad_RWS_Trans_altRWST($dictAlt) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_altRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictAlt;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->alt;
} else {
throw new \Exception("Pattern match failure");
};
$alt = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
    $__res = (object)["alt" => (function() use ($alt) {
  $__body = function($v, $v1) use ($alt) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m = $__case_0;
$n = $__case_1;
return (function() use ($alt, $m, $n) {
  $__fn = function($r, $s = null) use ($alt, $m, $n, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($alt)(($m)($r, $s), ($n)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($alt, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_RWS_Trans_altRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_altRWST';

// Control_Monad_RWS_Trans_plusRWST
function Control_Monad_RWS_Trans_plusRWST($dictPlus) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_plusRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictPlus;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->empty;
} else {
throw new \Exception("Pattern match failure");
};
$empty = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->alt;
} else {
throw new \Exception("Pattern match failure");
};
$alt = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$altRWST1 = (object)["alt" => (function() use ($alt) {
  $__body = function($v, $v1) use ($alt) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m = $__case_0;
$n = $__case_1;
return (function() use ($alt, $m, $n) {
  $__fn = function($r, $s = null) use ($alt, $m, $n, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($alt)(($m)($r, $s), ($n)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($alt, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["empty" => (function() use ($empty) {
  $__fn = function($v, $v1 = null) use ($empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $empty;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Alt0" => (function() use ($altRWST1) {
  $__fn = function($__dollar____unused) use ($altRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $altRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_RWS_Trans_plusRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_plusRWST';

// Control_Monad_RWS_Trans_alternativeRWST
function Control_Monad_RWS_Trans_alternativeRWST($dictMonoid, $dictAlternative = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_alternativeRWST';
  if ($__num < 2) {
    if ($__num === 1) return function($dictAlternative) use ($dictMonoid, $__fn) { return $__fn($dictMonoid, $dictAlternative); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->empty;
} else {
throw new \Exception("Pattern match failure");
};
$empty = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->alt;
} else {
throw new \Exception("Pattern match failure");
};
$alt = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$altRWST1 = (object)["alt" => (function() use ($alt) {
  $__body = function($v, $v1) use ($alt) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m = $__case_0;
$n = $__case_1;
return (function() use ($alt, $m, $n) {
  $__fn = function($r, $s = null) use ($alt, $m, $n, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($alt)(($m)($r, $s), ($n)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($alt, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$plusRWST1 = (object)["empty" => (function() use ($empty) {
  $__fn = function($v, $v1 = null) use ($empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $empty;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Alt0" => (function() use ($altRWST1) {
  $__fn = function($__dollar____unused) use ($altRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $altRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (function() use ($dict, $dictBind, $__global_Prim_undefined, $dictMonoid, $plusRWST1) {
  $__fn = function($dictMonad) use ($dict, $dictBind, $__global_Prim_undefined, $dictMonoid, $plusRWST1, &$__fn) {
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
$pure = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_4;
$Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_5;
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
$__case_0 = $Functor0;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_6;
$functorRWST1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($state, ($f1)($result), $writer);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
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
})()];
$applyRWST1 = (function() use ($dict, $bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($dict, $bind, $mapFlipped, $functorRWST1, &$__fn) {
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
    $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return (function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
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
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$applicativeRWST1 = ((function() use ($applyRWST1, $pure) {
  $__fn = function($dictMonoid) use ($applyRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_8;
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = (object)["pure" => (function() use ($pure, $mempty) {
  $__fn = function($a, $v = null, $s = null) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $v, $s);
      if ($__num2 === 1) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($pure)(((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($s, $a, $mempty));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($dictMonoid);
    $__res = (object)["Applicative0" => (function() use ($applicativeRWST1) {
  $__fn = function($__dollar____unused) use ($applicativeRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusRWST1) {
  $__fn = function($__dollar____unused) use ($plusRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $plusRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_RWS_Trans_alternativeRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_alternativeRWST';

