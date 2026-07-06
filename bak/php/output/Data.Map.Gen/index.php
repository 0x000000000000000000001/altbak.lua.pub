<?php

namespace Data\Map\Gen;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
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

      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Map_Gen_genMap
function Data_Map_Gen_genMap($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Gen_genMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Gen_compose = ($GLOBALS['Control_Monad_Gen_compose'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_compose'));
$__global_Data_List_Types_unfoldableList = ($GLOBALS['Data_List_Types_unfoldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_unfoldableList'));
$__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_List_Types_foldableList = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
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
    $__res = (function() use ($__global_Prim_undefined, $dict, $unfoldable, $__global_Data_List_Types_unfoldableList, $__global_Data_Map_Internal_singleton, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_List_Types_foldableList, $__global_Data_Function_const) {
  $__fn = function($dictMonadGen) use ($__global_Prim_undefined, $dict, $unfoldable, $__global_Data_List_Types_unfoldableList, $__global_Data_Map_Internal_singleton, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_List_Types_foldableList, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonadGen;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->sized;
} else {
throw new \Exception("Pattern match failure");
};
$sized = $__case_res_6;
$Bind1 = (((($dictMonadGen)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined);
$__case_0 = $Bind1;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_7;
$__case_0 = $dictMonadGen;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->chooseInt;
} else {
throw new \Exception("Pattern match failure");
};
$chooseInt = $__case_res_8;
$__case_0 = $dictMonadGen;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->resize;
} else {
throw new \Exception("Pattern match failure");
};
$resize = $__case_res_9;
$Apply0 = (($Bind1)->Apply0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_10;
$unfoldable1 = ($unfoldable)($dictMonadGen, $__global_Data_List_Types_unfoldableList);
$__case_0 = $Apply0;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_11;
    $__res = (function() use ($__global_Data_Map_Internal_singleton, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_List_Types_foldableList, $sized, $bind, $chooseInt, $resize, $__global_Data_Function_const, $map, $unfoldable1, $apply) {
  $__fn = function($dictOrd) use ($__global_Data_Map_Internal_singleton, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_List_Types_foldableList, $sized, $bind, $chooseInt, $resize, $__global_Data_Function_const, $map, $unfoldable1, $apply, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictOrd;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_12;
$insert1 = (function() use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode) {
  $__fn = function($k, $v = null) use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($k, &$__fn) { return $__fn($k, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go) {
  $__fn = function($v1) use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Leaf":
return ($__global_Data_Map_Internal_singleton)($k, $v);
break;
case "Node":
$mh = ($__case_0)->v0;
$ms = ($__case_0)->v1;
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "LT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
break;
case "GT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
break;
case "EQ":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($mh, $ms, $k, $v, $ml, $mr);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$fromFoldable = ((function() use ($insert1) {
  $__fn = function($dictFoldable) use ($insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_13)((function() use ($insert1) {
  $__body = function($m, $v) use ($insert1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$k = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
return ($insert1)($k, $v1, $m);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($m, $v = null) use ($insert1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($m, &$__fn) { return $__fn($m, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($m, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Data_List_Types_foldableList);
    $__res = (function() use ($sized, $bind, $chooseInt, $resize, $__global_Data_Function_const, $map, $fromFoldable, $unfoldable1, $apply) {
  $__fn = function($genKey, $genValue = null) use ($sized, $bind, $chooseInt, $resize, $__global_Data_Function_const, $map, $fromFoldable, $unfoldable1, $apply, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($genValue) use ($genKey, &$__fn) { return $__fn($genKey, $genValue); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($sized)((function() use ($bind, $chooseInt, $resize, $__global_Data_Function_const, $map, $fromFoldable, $unfoldable1, $apply, $genKey, $genValue) {
  $__fn = function($size) use ($bind, $chooseInt, $resize, $__global_Data_Function_const, $map, $fromFoldable, $unfoldable1, $apply, $genKey, $genValue, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($chooseInt)(0, $size), (function() use ($resize, $__global_Data_Function_const, $map, $fromFoldable, $unfoldable1, $apply, $genKey, $genValue) {
  $__fn = function($newSize) use ($resize, $__global_Data_Function_const, $map, $fromFoldable, $unfoldable1, $apply, $genKey, $genValue, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($resize)(($__global_Data_Function_const)($newSize), ($map)($fromFoldable, ($unfoldable1)(($apply)(($map)((function() {
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
})(), $genKey), $genValue))));
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
$GLOBALS['Data_Map_Gen_genMap'] = __NAMESPACE__ . '\\Data_Map_Gen_genMap';

