<?php

namespace Control\Monad\Gen;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Last/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
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
      case 'Control_Monad_Gen_lessThanOrEq': $v = (function() {
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
      case 'Control_Monad_Gen_sub': $v = (function() {
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
      case 'Control_Monad_Gen_compose': $v = (function() {
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
      case 'Control_Monad_Gen_un': $v = (($GLOBALS['Data_Newtype_un'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_un')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Control_Monad_Gen_greaterThanOrEq': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'));
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
      case 'Control_Monad_Gen_sub1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ring_ringNumber'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sub;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Control_Monad_Gen_alaF': $v = (($GLOBALS['Data_Newtype_alaF'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_alaF')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Control_Monad_Gen_monoidAdditive': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semiring_semiringNumber'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
  $add = $__case_res_0;
  $semigroupAdditive1 = (object)["append" => (function() use ($add) {
  $__body = function($v, $v1) use ($add) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($add)($a, $b);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($add, $__body, &$__fn) {
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
  $__case_0 = ($GLOBALS['Data_Semiring_semiringNumber'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringNumber'));
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->zero;
} else {
throw new \Exception("Pattern match failure");
};
  return (object)["mempty" => $__case_res_1, "Semigroup0" => (function() use ($semigroupAdditive1) {
  $__fn = function($__dollar____unused) use ($semigroupAdditive1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupAdditive1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      case 'Control_Monad_Gen_Nil': $v = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")); break;
      case 'Control_Monad_Gen_semigroupFreqSemigroup': $v = (object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$g = $__case_1;
return (function() use ($f, $g) {
  $__body = function($pos) use ($f, $g) {
    $v2 = ($f)($pos);
    $__case_0 = $v2;
    if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v0)->tag === "Just"))) {
$pos__prime__ = (($__case_0)->v0)->v0;
return ($g)($pos__prime__);
} else {
if (true) {
$result = $__case_0;
return $result;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($pos) use ($f, $g, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($pos);
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
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };










// Control_Monad_Gen_Cons
function Control_Monad_Gen_Cons($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Cons';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Gen_Cons'] = __NAMESPACE__ . '\\Control_Monad_Gen_Cons';


// Control_Monad_Gen_FreqSemigroup
function Control_Monad_Gen_FreqSemigroup($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_FreqSemigroup';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_FreqSemigroup'] = __NAMESPACE__ . '\\Control_Monad_Gen_FreqSemigroup';

// Control_Monad_Gen_unfoldable
function Control_Monad_Gen_unfoldable($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_unfoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Gen_compose = ($GLOBALS['Control_Monad_Gen_compose'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_compose'));
$__case_0 = $dictMonadRec;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->tailRecM;
} else {
throw new \Exception("Pattern match failure");
};
$tailRecM = $__case_res_0;
    $__res = (function() use ($__global_Prim_undefined, $dict, $__global_Control_Monad_Gen_compose, $tailRecM) {
  $__fn = function($dictMonadGen) use ($__global_Prim_undefined, $dict, $__global_Control_Monad_Gen_compose, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadGen)->Monad0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_1;
$Bind1 = (($Monad0)->Bind1)($__global_Prim_undefined);
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
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_3;
$__case_0 = $dictMonadGen;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->sized;
} else {
throw new \Exception("Pattern match failure");
};
$sized = $__case_res_4;
    $__res = (function() use ($map, $sized, $__global_Control_Monad_Gen_compose, $tailRecM) {
  $__fn = function($dictUnfoldable) use ($map, $sized, $__global_Control_Monad_Gen_compose, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictUnfoldable;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->unfoldr;
} else {
throw new \Exception("Pattern match failure");
};
$unfoldr = $__case_res_5;
    $__res = (function() use ($map, $unfoldr, $sized, $__global_Control_Monad_Gen_compose, $tailRecM) {
  $__fn = function($gen) use ($map, $unfoldr, $sized, $__global_Control_Monad_Gen_compose, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$unfold = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
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
})())($x, $xs));
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
$loopGen = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$acc = ($__case_0)->v0;
$n = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
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
    $__res = ($map)(($unfoldr)($unfold), ($sized)(($__global_Control_Monad_Gen_compose)(($tailRecM)($loopGen), ((function() {
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
})())(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))))));
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
$GLOBALS['Control_Monad_Gen_unfoldable'] = __NAMESPACE__ . '\\Control_Monad_Gen_unfoldable';


// Control_Monad_Gen_getFreqVal
function Control_Monad_Gen_getFreqVal($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_getFreqVal';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__global_Control_Monad_Gen_compose = ($GLOBALS['Control_Monad_Gen_compose'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_compose'));
    $__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($__global_Control_Monad_Gen_compose)($__global_Data_Tuple_snd, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_getFreqVal'] = __NAMESPACE__ . '\\Control_Monad_Gen_getFreqVal';

// Control_Monad_Gen_fromIndex
function Control_Monad_Gen_fromIndex($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_fromIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Semigroup_Last_semigroupLast = ($GLOBALS['Data_Semigroup_Last_semigroupLast'] ?? \Data\Semigroup\Last\phpurs_eval_thunk('Data_Semigroup_Last_semigroupLast'));
$__global_Control_Monad_Gen_sub = ($GLOBALS['Control_Monad_Gen_sub'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_sub'));
$__global_Control_Monad_Gen_un = ($GLOBALS['Control_Monad_Gen_un'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_un'));
$__global_Data_Semigroup_Last_Last = ($GLOBALS['Data_Semigroup_Last_Last'] ?? \Data\Semigroup\Last\phpurs_eval_thunk('Data_Semigroup_Last_Last'));
$__case_0 = $dictFoldable1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap1 = ($__case_res_0)($__global_Data_Semigroup_Last_semigroupLast);
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr = $__case_res_1;
    $__res = (function() use ($__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $foldMap1, $foldr) {
  $__fn = function($i, $xs = null) use ($__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $foldMap1, $foldr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($i, &$__fn) { return $__fn($i, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use (&$go, $__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $foldMap1, $xs) {
  $__fn = function($v, $v1 = null) use (&$go, $__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $foldMap1, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_1)->tag === "Cons") && ((($__case_1)->v1)->tag === "Nil"))) {
$a = ($__case_1)->v0;
return $a;
} else {
switch (($__case_1)->tag) {
case "Cons":
$j = $__case_0;
$a = ($__case_1)->v0;
return "/* Unsupported: Guards not supported */";
break;
case "Cons":
$j = $__case_0;
$as = ($__case_1)->v1;
$__tco_tmp_0 = ($__global_Control_Monad_Gen_sub)($j, 1);
$__tco_tmp_1 = $as;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
break;
case "Nil":
return ($__global_Control_Monad_Gen_un)($__global_Data_Semigroup_Last_Last, ($foldMap1)($__global_Data_Semigroup_Last_Last, $xs));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)($i, ($foldr)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), $xs));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_fromIndex'] = __NAMESPACE__ . '\\Control_Monad_Gen_fromIndex';

// Control_Monad_Gen_oneOf
function Control_Monad_Gen_oneOf($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_oneOf';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Semiring_semiringInt = ($GLOBALS['Data_Semiring_semiringInt'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringInt'));
$__global_Data_Semigroup_Last_semigroupLast = ($GLOBALS['Data_Semigroup_Last_semigroupLast'] ?? \Data\Semigroup\Last\phpurs_eval_thunk('Data_Semigroup_Last_semigroupLast'));
$__global_Control_Monad_Gen_sub = ($GLOBALS['Control_Monad_Gen_sub'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_sub'));
$__global_Control_Monad_Gen_un = ($GLOBALS['Control_Monad_Gen_un'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_un'));
$__global_Data_Semigroup_Last_Last = ($GLOBALS['Data_Semigroup_Last_Last'] ?? \Data\Semigroup\Last\phpurs_eval_thunk('Data_Semigroup_Last_Last'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_0;
$__case_0 = $dictMonadGen;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->chooseInt;
} else {
throw new \Exception("Pattern match failure");
};
$chooseInt = $__case_res_1;
    $__res = (function() use ($dict, $__global_Data_Semiring_semiringInt, $__global_Data_Semigroup_Last_semigroupLast, $__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $bind, $chooseInt) {
  $__fn = function($dictFoldable1) use ($dict, $__global_Data_Semiring_semiringInt, $__global_Data_Semigroup_Last_semigroupLast, $__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $bind, $chooseInt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_2;
$length = ((function() use ($foldl3) {
  $__fn = function($dictSemiring) use ($foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictSemiring;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
$add1 = $__case_res_3;
$__case_0 = $dictSemiring;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->one;
} else {
throw new \Exception("Pattern match failure");
};
$one = $__case_res_4;
$__case_0 = $dictSemiring;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->zero;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($foldl3)((function() use ($add1, $one) {
  $__fn = function($c, $v = null) use ($add1, $one, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($c, &$__fn) { return $__fn($c, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($add1)($one, $c);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $__case_res_5);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Data_Semiring_semiringInt);
$__case_0 = $dictFoldable1;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap1 = ($__case_res_6)($__global_Data_Semigroup_Last_semigroupLast);
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr = $__case_res_7;
$fromIndex1 = (function() use ($__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $foldMap1, $foldr) {
  $__fn = function($i, $xs = null) use ($__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $foldMap1, $foldr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($i, &$__fn) { return $__fn($i, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use (&$go, $__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $foldMap1, $xs) {
  $__fn = function($v, $v1 = null) use (&$go, $__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $foldMap1, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_1)->tag === "Cons") && ((($__case_1)->v1)->tag === "Nil"))) {
$a = ($__case_1)->v0;
return $a;
} else {
switch (($__case_1)->tag) {
case "Cons":
$j = $__case_0;
$a = ($__case_1)->v0;
return "/* Unsupported: Guards not supported */";
break;
case "Cons":
$j = $__case_0;
$as = ($__case_1)->v1;
$__tco_tmp_0 = ($__global_Control_Monad_Gen_sub)($j, 1);
$__tco_tmp_1 = $as;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
break;
case "Nil":
return ($__global_Control_Monad_Gen_un)($__global_Data_Semigroup_Last_Last, ($foldMap1)($__global_Data_Semigroup_Last_Last, $xs));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)($i, ($foldr)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), $xs));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($bind, $chooseInt, $__global_Control_Monad_Gen_sub, $length, $fromIndex1) {
  $__fn = function($xs) use ($bind, $chooseInt, $__global_Control_Monad_Gen_sub, $length, $fromIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($chooseInt)(0, ($__global_Control_Monad_Gen_sub)(($length)($xs), 1)), (function() use ($fromIndex1, $xs) {
  $__fn = function($n) use ($fromIndex1, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($fromIndex1)($n, $xs);
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
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_oneOf'] = __NAMESPACE__ . '\\Control_Monad_Gen_oneOf';

// Control_Monad_Gen_freqSemigroup
function Control_Monad_Gen_freqSemigroup($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_freqSemigroup';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__global_Control_Monad_Gen_greaterThanOrEq = ($GLOBALS['Control_Monad_Gen_greaterThanOrEq'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_greaterThanOrEq'));
    $__global_Control_Monad_Gen_sub1 = ($GLOBALS['Control_Monad_Gen_sub1'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_sub1'));
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$weight = ($__case_0)->v0;
$x = ($__case_0)->v1;
return (function() use ($__global_Control_Monad_Gen_greaterThanOrEq, $weight, $__global_Control_Monad_Gen_sub1, $x) {
  $__body = function($pos) use ($__global_Control_Monad_Gen_greaterThanOrEq, $weight, $__global_Control_Monad_Gen_sub1, $x) {
    $__case_0 = ($__global_Control_Monad_Gen_greaterThanOrEq)($pos, $weight);
    switch ($__case_0) {
case true:
return ((function() {
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
})())(($__global_Control_Monad_Gen_sub1)($pos, $weight)), $x);
break;
default:
return ((function() {
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
})())(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), $x);
break;
};
  };
  $__fn = function($pos) use ($__global_Control_Monad_Gen_greaterThanOrEq, $weight, $__global_Control_Monad_Gen_sub1, $x, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($pos);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_freqSemigroup'] = __NAMESPACE__ . '\\Control_Monad_Gen_freqSemigroup';

// Control_Monad_Gen_frequency
function Control_Monad_Gen_frequency($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_frequency';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Gen_monoidAdditive = ($GLOBALS['Control_Monad_Gen_monoidAdditive'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_monoidAdditive'));
$__global_Control_Monad_Gen_semigroupFreqSemigroup = ($GLOBALS['Control_Monad_Gen_semigroupFreqSemigroup'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_semigroupFreqSemigroup'));
$__global_Control_Monad_Gen_alaF = ($GLOBALS['Control_Monad_Gen_alaF'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_alaF'));
$__global_Data_Monoid_Additive_Additive = ($GLOBALS['Data_Monoid_Additive_Additive'] ?? \Data\Monoid\Additive\phpurs_eval_thunk('Data_Monoid_Additive_Additive'));
$__global_Data_Tuple_fst = ($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst'));
$__global_Control_Monad_Gen_getFreqVal = ($GLOBALS['Control_Monad_Gen_getFreqVal'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_getFreqVal'));
$__global_Control_Monad_Gen_freqSemigroup = ($GLOBALS['Control_Monad_Gen_freqSemigroup'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_freqSemigroup'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_0;
$__case_0 = $dictMonadGen;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->chooseFloat;
} else {
throw new \Exception("Pattern match failure");
};
$chooseFloat = $__case_res_1;
    $__res = (function() use ($dict, $__global_Control_Monad_Gen_monoidAdditive, $__global_Control_Monad_Gen_semigroupFreqSemigroup, $__global_Control_Monad_Gen_alaF, $__global_Data_Monoid_Additive_Additive, $__global_Data_Tuple_fst, $bind, $chooseFloat, $__global_Control_Monad_Gen_getFreqVal, $__global_Control_Monad_Gen_freqSemigroup) {
  $__fn = function($dictFoldable1) use ($dict, $__global_Control_Monad_Gen_monoidAdditive, $__global_Control_Monad_Gen_semigroupFreqSemigroup, $__global_Control_Monad_Gen_alaF, $__global_Data_Monoid_Additive_Additive, $__global_Data_Tuple_fst, $bind, $chooseFloat, $__global_Control_Monad_Gen_getFreqVal, $__global_Control_Monad_Gen_freqSemigroup, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap = ($__case_res_2)($__global_Control_Monad_Gen_monoidAdditive);
$__case_0 = $dictFoldable1;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap1 = ($__case_res_3)($__global_Control_Monad_Gen_semigroupFreqSemigroup);
    $__res = (function() use ($__global_Control_Monad_Gen_alaF, $__global_Data_Monoid_Additive_Additive, $foldMap, $__global_Data_Tuple_fst, $bind, $chooseFloat, $__global_Control_Monad_Gen_getFreqVal, $foldMap1, $__global_Control_Monad_Gen_freqSemigroup) {
  $__fn = function($xs) use ($__global_Control_Monad_Gen_alaF, $__global_Data_Monoid_Additive_Additive, $foldMap, $__global_Data_Tuple_fst, $bind, $chooseFloat, $__global_Control_Monad_Gen_getFreqVal, $foldMap1, $__global_Control_Monad_Gen_freqSemigroup, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$total = ($__global_Control_Monad_Gen_alaF)($__global_Data_Monoid_Additive_Additive, $foldMap, $__global_Data_Tuple_fst, $xs);
    $__res = ($bind)(($chooseFloat)(0.0, $total), ($__global_Control_Monad_Gen_getFreqVal)(($foldMap1)($__global_Control_Monad_Gen_freqSemigroup, $xs)));
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
$GLOBALS['Control_Monad_Gen_frequency'] = __NAMESPACE__ . '\\Control_Monad_Gen_frequency';

// Control_Monad_Gen_filtered
function Control_Monad_Gen_filtered($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_filtered';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__case_0 = $dictMonadRec;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->tailRecM;
} else {
throw new \Exception("Pattern match failure");
};
$tailRecM = $__case_res_0;
    $__res = (function() use ($dict, $__global_Data_Unit_unit, $tailRecM) {
  $__fn = function($dictMonadGen) use ($dict, $__global_Data_Unit_unit, $tailRecM, &$__fn) {
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
    $__res = (function() use ($mapFlipped, $__global_Data_Unit_unit, $tailRecM) {
  $__fn = function($gen) use ($mapFlipped, $__global_Data_Unit_unit, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($mapFlipped, $gen, $__global_Data_Unit_unit) {
  $__fn = function($v) use ($mapFlipped, $gen, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($mapFlipped)($gen, (function() use ($__global_Data_Unit_unit) {
  $__body = function($a) use ($__global_Data_Unit_unit) {
    $__case_0 = $a;
    switch (($__case_0)->tag) {
case "Nothing":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Loop", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Data_Unit_unit);
break;
case "Just":
$a__prime__ = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Done", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($a__prime__);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($a) use ($__global_Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($tailRecM)($go, $__global_Data_Unit_unit);
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
$GLOBALS['Control_Monad_Gen_filtered'] = __NAMESPACE__ . '\\Control_Monad_Gen_filtered';

// Control_Monad_Gen_suchThat
function Control_Monad_Gen_suchThat($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_suchThat';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__case_0 = $dictMonadRec;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->tailRecM;
} else {
throw new \Exception("Pattern match failure");
};
$tailRecM = $__case_res_0;
$filtered1 = (function() use ($dict, $__global_Data_Unit_unit, $tailRecM) {
  $__fn = function($dictMonadGen) use ($dict, $__global_Data_Unit_unit, $tailRecM, &$__fn) {
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
    $__res = (function() use ($mapFlipped, $__global_Data_Unit_unit, $tailRecM) {
  $__fn = function($gen) use ($mapFlipped, $__global_Data_Unit_unit, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($mapFlipped, $gen, $__global_Data_Unit_unit) {
  $__fn = function($v) use ($mapFlipped, $gen, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($mapFlipped)($gen, (function() use ($__global_Data_Unit_unit) {
  $__body = function($a) use ($__global_Data_Unit_unit) {
    $__case_0 = $a;
    switch (($__case_0)->tag) {
case "Nothing":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Loop", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Data_Unit_unit);
break;
case "Just":
$a__prime__ = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Done", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($a__prime__);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($a) use ($__global_Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($tailRecM)($go, $__global_Data_Unit_unit);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($filtered1, $dict) {
  $__fn = function($dictMonadGen) use ($filtered1, $dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$filtered2 = ($filtered1)($dictMonadGen);
$__case_0 = $dict;
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
    $__res = (function() use ($filtered2, $mapFlipped) {
  $__fn = function($gen, $pred = null) use ($filtered2, $mapFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($pred) use ($gen, &$__fn) { return $__fn($gen, $pred); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($filtered2)(($mapFlipped)($gen, (function() use ($pred) {
  $__body = function($a) use ($pred) {
    $__case_0 = ($pred)($a);
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
})())($a);
break;
default:
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
};
  };
  $__fn = function($a) use ($pred, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
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
$GLOBALS['Control_Monad_Gen_suchThat'] = __NAMESPACE__ . '\\Control_Monad_Gen_suchThat';

// Control_Monad_Gen_elements
function Control_Monad_Gen_elements($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_elements';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Semiring_semiringInt = ($GLOBALS['Data_Semiring_semiringInt'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringInt'));
$__global_Data_Semigroup_Last_semigroupLast = ($GLOBALS['Data_Semigroup_Last_semigroupLast'] ?? \Data\Semigroup\Last\phpurs_eval_thunk('Data_Semigroup_Last_semigroupLast'));
$__global_Control_Monad_Gen_sub = ($GLOBALS['Control_Monad_Gen_sub'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_sub'));
$__global_Control_Monad_Gen_un = ($GLOBALS['Control_Monad_Gen_un'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_un'));
$__global_Data_Semigroup_Last_Last = ($GLOBALS['Data_Semigroup_Last_Last'] ?? \Data\Semigroup\Last\phpurs_eval_thunk('Data_Semigroup_Last_Last'));
$Monad0 = (($dictMonadGen)->Monad0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_0;
$__case_0 = $dictMonadGen;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->chooseInt;
} else {
throw new \Exception("Pattern match failure");
};
$chooseInt = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_2;
    $__res = (function() use ($dict, $__global_Data_Semiring_semiringInt, $__global_Data_Semigroup_Last_semigroupLast, $__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $bind, $chooseInt, $pure) {
  $__fn = function($dictFoldable1) use ($dict, $__global_Data_Semiring_semiringInt, $__global_Data_Semigroup_Last_semigroupLast, $__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $bind, $chooseInt, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_3;
$length = ((function() use ($foldl3) {
  $__fn = function($dictSemiring) use ($foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictSemiring;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
$add1 = $__case_res_4;
$__case_0 = $dictSemiring;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->one;
} else {
throw new \Exception("Pattern match failure");
};
$one = $__case_res_5;
$__case_0 = $dictSemiring;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->zero;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($foldl3)((function() use ($add1, $one) {
  $__fn = function($c, $v = null) use ($add1, $one, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($c, &$__fn) { return $__fn($c, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($add1)($one, $c);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $__case_res_6);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Data_Semiring_semiringInt);
$__case_0 = $dictFoldable1;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap1 = ($__case_res_7)($__global_Data_Semigroup_Last_semigroupLast);
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr = $__case_res_8;
$fromIndex1 = (function() use ($__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $foldMap1, $foldr) {
  $__fn = function($i, $xs = null) use ($__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $foldMap1, $foldr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($i, &$__fn) { return $__fn($i, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use (&$go, $__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $foldMap1, $xs) {
  $__fn = function($v, $v1 = null) use (&$go, $__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $foldMap1, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_1)->tag === "Cons") && ((($__case_1)->v1)->tag === "Nil"))) {
$a = ($__case_1)->v0;
return $a;
} else {
switch (($__case_1)->tag) {
case "Cons":
$j = $__case_0;
$a = ($__case_1)->v0;
return "/* Unsupported: Guards not supported */";
break;
case "Cons":
$j = $__case_0;
$as = ($__case_1)->v1;
$__tco_tmp_0 = ($__global_Control_Monad_Gen_sub)($j, 1);
$__tco_tmp_1 = $as;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
break;
case "Nil":
return ($__global_Control_Monad_Gen_un)($__global_Data_Semigroup_Last_Last, ($foldMap1)($__global_Data_Semigroup_Last_Last, $xs));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)($i, ($foldr)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), $xs));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($bind, $chooseInt, $__global_Control_Monad_Gen_sub, $length, $pure, $fromIndex1) {
  $__fn = function($xs) use ($bind, $chooseInt, $__global_Control_Monad_Gen_sub, $length, $pure, $fromIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($chooseInt)(0, ($__global_Control_Monad_Gen_sub)(($length)($xs), 1)), (function() use ($pure, $fromIndex1, $xs) {
  $__fn = function($n) use ($pure, $fromIndex1, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(($fromIndex1)($n, $xs));
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
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_elements'] = __NAMESPACE__ . '\\Control_Monad_Gen_elements';

// Control_Monad_Gen_choose
function Control_Monad_Gen_choose($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_choose';
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
$__case_0 = $dictMonadGen;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->chooseBool;
} else {
throw new \Exception("Pattern match failure");
};
$chooseBool = $__case_res_1;
    $__res = (function() use ($bind, $chooseBool) {
  $__fn = function($genA, $genB = null) use ($bind, $chooseBool, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($genB) use ($genA, &$__fn) { return $__fn($genA, $genB); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)($chooseBool, (function() use ($genA, $genB) {
  $__body = function($v) use ($genA, $genB) {
    $__case_0 = $v;
    switch ($__case_0) {
case true:
return $genA;
break;
default:
return $genB;
break;
};
  };
  $__fn = function($v) use ($genA, $genB, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_choose'] = __NAMESPACE__ . '\\Control_Monad_Gen_choose';

