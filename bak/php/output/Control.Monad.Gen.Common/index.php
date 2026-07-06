<?php

namespace Control\Monad\Gen\Common;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Common/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
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
      case 'Control_Monad_Gen_Common_compose': $v = (function() {
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
      case 'Control_Monad_Gen_Common_max': $v = (function() {
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
})(); break;
      case 'Control_Monad_Gen_Common_sub': $v = (function() {
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
      case 'Control_Monad_Gen_Common_lessThan': $v = (function() {
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
return true;
break;
default:
return false;
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
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };






// Control_Monad_Gen_Common_genTuple
function Control_Monad_Gen_Common_genTuple($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
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
    $__res = ((function() use ($apply1, $map) {
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
})())((function() {
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
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_Common_genTuple'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genTuple';

// Control_Monad_Gen_Common_genNonEmpty
function Control_Monad_Gen_Common_genNonEmpty($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Gen_compose = ($GLOBALS['Control_Monad_Gen_compose'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_compose'));
$__global_Control_Monad_Gen_Common_compose = ($GLOBALS['Control_Monad_Gen_Common_compose'] ?? \Control\Monad\Gen\Common\phpurs_eval_thunk('Control_Monad_Gen_Common_compose'));
$__global_Control_Monad_Gen_Common_max = ($GLOBALS['Control_Monad_Gen_Common_max'] ?? \Control\Monad\Gen\Common\phpurs_eval_thunk('Control_Monad_Gen_Common_max'));
$__global_Control_Monad_Gen_Common_sub = ($GLOBALS['Control_Monad_Gen_Common_sub'] ?? \Control\Monad\Gen\Common\phpurs_eval_thunk('Control_Monad_Gen_Common_sub'));
$__case_0 = $dictMonadRec;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->tailRecM;
} else {
throw new \Exception("Pattern match failure");
};
$tailRecM = $__case_res_0;
$unfoldable = (function() use ($__global_Prim_undefined, $dict, $__global_Control_Monad_Gen_compose, $tailRecM) {
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
    $__res = (function() use ($__global_Prim_undefined, $dict, $unfoldable, $__global_Control_Monad_Gen_Common_compose, $__global_Control_Monad_Gen_Common_max, $__global_Control_Monad_Gen_Common_sub) {
  $__fn = function($dictMonadGen) use ($__global_Prim_undefined, $dict, $unfoldable, $__global_Control_Monad_Gen_Common_compose, $__global_Control_Monad_Gen_Common_max, $__global_Control_Monad_Gen_Common_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Apply0 = (((((($dictMonadGen)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined);
$__case_0 = $Apply0;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_6;
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_7;
$__case_0 = $dictMonadGen;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->resize;
} else {
throw new \Exception("Pattern match failure");
};
$resize = $__case_res_8;
$unfoldable1 = ($unfoldable)($dictMonadGen);
    $__res = (function() use ($unfoldable1, $apply, $map, $resize, $__global_Control_Monad_Gen_Common_compose, $__global_Control_Monad_Gen_Common_max, $__global_Control_Monad_Gen_Common_sub) {
  $__fn = function($dictUnfoldable) use ($unfoldable1, $apply, $map, $resize, $__global_Control_Monad_Gen_Common_compose, $__global_Control_Monad_Gen_Common_max, $__global_Control_Monad_Gen_Common_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$unfoldable2 = ($unfoldable1)($dictUnfoldable);
    $__res = (function() use ($apply, $map, $resize, $__global_Control_Monad_Gen_Common_compose, $__global_Control_Monad_Gen_Common_max, $__global_Control_Monad_Gen_Common_sub, $unfoldable2) {
  $__fn = function($gen) use ($apply, $map, $resize, $__global_Control_Monad_Gen_Common_compose, $__global_Control_Monad_Gen_Common_max, $__global_Control_Monad_Gen_Common_sub, $unfoldable2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($apply)(($map)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $gen), ($resize)(($__global_Control_Monad_Gen_Common_compose)(($__global_Control_Monad_Gen_Common_max)(0), (function() use ($__global_Control_Monad_Gen_Common_sub) {
  $__fn = function($v) use ($__global_Control_Monad_Gen_Common_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Gen_Common_sub)($v, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($unfoldable2)($gen)));
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
$GLOBALS['Control_Monad_Gen_Common_genNonEmpty'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genNonEmpty';

// Control_Monad_Gen_Common_genMaybe'
function Control_Monad_Gen_Common_genMaybe__prime__($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genMaybe__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Gen_Common_lessThan = ($GLOBALS['Control_Monad_Gen_Common_lessThan'] ?? \Control\Monad\Gen\Common\phpurs_eval_thunk('Control_Monad_Gen_Common_lessThan'));
$Monad0 = (($dictMonadGen)->Monad0)($__global_Prim_undefined);
$Bind1 = (($Monad0)->Bind1)($__global_Prim_undefined);
$__case_0 = $Bind1;
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
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_3;
    $__res = (function() use ($bind, $chooseFloat, $__global_Control_Monad_Gen_Common_lessThan, $map, $pure) {
  $__fn = function($bias, $gen = null) use ($bind, $chooseFloat, $__global_Control_Monad_Gen_Common_lessThan, $map, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($gen) use ($bias, &$__fn) { return $__fn($bias, $gen); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($chooseFloat)(0.0, 1.0), (function() use ($__global_Control_Monad_Gen_Common_lessThan, $bias, $map, $gen, $pure) {
  $__body = function($n) use ($__global_Control_Monad_Gen_Common_lessThan, $bias, $map, $gen, $pure) {
    $__case_0 = ($__global_Control_Monad_Gen_Common_lessThan)($n, $bias);
    switch ($__case_0) {
case true:
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
})(), $gen);
break;
default:
return ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
};
  };
  $__fn = function($n) use ($__global_Control_Monad_Gen_Common_lessThan, $bias, $map, $gen, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($n);
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
$GLOBALS['Control_Monad_Gen_Common_genMaybe__prime__'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genMaybe__prime__';

// Control_Monad_Gen_Common_genMaybe
function Control_Monad_Gen_Common_genMaybe($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Gen_Common_lessThan = ($GLOBALS['Control_Monad_Gen_Common_lessThan'] ?? \Control\Monad\Gen\Common\phpurs_eval_thunk('Control_Monad_Gen_Common_lessThan'));
$Monad0 = (($dictMonadGen)->Monad0)($__global_Prim_undefined);
$Bind1 = (($Monad0)->Bind1)($__global_Prim_undefined);
$__case_0 = $Bind1;
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
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_3;
    $__res = ((function() use ($bind, $chooseFloat, $__global_Control_Monad_Gen_Common_lessThan, $map, $pure) {
  $__fn = function($bias, $gen = null) use ($bind, $chooseFloat, $__global_Control_Monad_Gen_Common_lessThan, $map, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($gen) use ($bias, &$__fn) { return $__fn($bias, $gen); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($chooseFloat)(0.0, 1.0), (function() use ($__global_Control_Monad_Gen_Common_lessThan, $bias, $map, $gen, $pure) {
  $__body = function($n) use ($__global_Control_Monad_Gen_Common_lessThan, $bias, $map, $gen, $pure) {
    $__case_0 = ($__global_Control_Monad_Gen_Common_lessThan)($n, $bias);
    switch ($__case_0) {
case true:
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
})(), $gen);
break;
default:
return ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
break;
};
  };
  $__fn = function($n) use ($__global_Control_Monad_Gen_Common_lessThan, $bias, $map, $gen, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($n);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(0.75);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_Common_genMaybe'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genMaybe';

// Control_Monad_Gen_Common_genIdentity
function Control_Monad_Gen_Common_genIdentity($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Identity_Identity = ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity'));
$__case_0 = $dictFunctor;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_0)($__global_Data_Identity_Identity);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_Common_genIdentity'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genIdentity';

// Control_Monad_Gen_Common_genEither'
function Control_Monad_Gen_Common_genEither__prime__($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genEither__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Gen_Common_lessThan = ($GLOBALS['Control_Monad_Gen_Common_lessThan'] ?? \Control\Monad\Gen\Common\phpurs_eval_thunk('Control_Monad_Gen_Common_lessThan'));
$Bind1 = (((($dictMonadGen)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined);
$__case_0 = $Bind1;
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
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
    $__res = (function() use ($bind, $chooseFloat, $__global_Control_Monad_Gen_Common_lessThan, $map) {
  $__fn = function($bias, $genA = null, $genB = null) use ($bind, $chooseFloat, $__global_Control_Monad_Gen_Common_lessThan, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($genB) use ($bias, $genA, &$__fn) { return $__fn($bias, $genA, $genB); };
    if ($__num === 1) return function($genA, $genB = null) use ($bias, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($bias, $genA, $genB);
      if ($__num2 === 1) return function($genB) use ($bias, $genA, &$__fn) { return $__fn($bias, $genA, $genB); };
      return phpurs_curry_fallback($__fn, [$bias], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($bind)(($chooseFloat)(0.0, 1.0), (function() use ($__global_Control_Monad_Gen_Common_lessThan, $bias, $map, $genA, $genB) {
  $__body = function($n) use ($__global_Control_Monad_Gen_Common_lessThan, $bias, $map, $genA, $genB) {
    $__case_0 = ($__global_Control_Monad_Gen_Common_lessThan)($n, $bias);
    switch ($__case_0) {
case true:
return ($map)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $genA);
break;
default:
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
})(), $genB);
break;
};
  };
  $__fn = function($n) use ($__global_Control_Monad_Gen_Common_lessThan, $bias, $map, $genA, $genB, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($n);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_Common_genEither__prime__'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genEither__prime__';

// Control_Monad_Gen_Common_genEither
function Control_Monad_Gen_Common_genEither($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genEither';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Gen_Common_lessThan = ($GLOBALS['Control_Monad_Gen_Common_lessThan'] ?? \Control\Monad\Gen\Common\phpurs_eval_thunk('Control_Monad_Gen_Common_lessThan'));
$Bind1 = (((($dictMonadGen)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined);
$__case_0 = $Bind1;
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
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
    $__res = ((function() use ($bind, $chooseFloat, $__global_Control_Monad_Gen_Common_lessThan, $map) {
  $__fn = function($bias, $genA = null, $genB = null) use ($bind, $chooseFloat, $__global_Control_Monad_Gen_Common_lessThan, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($genB) use ($bias, $genA, &$__fn) { return $__fn($bias, $genA, $genB); };
    if ($__num === 1) return function($genA, $genB = null) use ($bias, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($bias, $genA, $genB);
      if ($__num2 === 1) return function($genB) use ($bias, $genA, &$__fn) { return $__fn($bias, $genA, $genB); };
      return phpurs_curry_fallback($__fn, [$bias], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($bind)(($chooseFloat)(0.0, 1.0), (function() use ($__global_Control_Monad_Gen_Common_lessThan, $bias, $map, $genA, $genB) {
  $__body = function($n) use ($__global_Control_Monad_Gen_Common_lessThan, $bias, $map, $genA, $genB) {
    $__case_0 = ($__global_Control_Monad_Gen_Common_lessThan)($n, $bias);
    switch ($__case_0) {
case true:
return ($map)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $genA);
break;
default:
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
})(), $genB);
break;
};
  };
  $__fn = function($n) use ($__global_Control_Monad_Gen_Common_lessThan, $bias, $map, $genA, $genB, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($n);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())(0.5);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_Common_genEither'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genEither';

