<?php

namespace Data\Enum\Gen;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
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
      case 'Data_Enum_Gen_foldable1NonEmpty': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
  $foldl = $__case_res_0;
  $__case_0 = ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'));
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
  $foldr = $__case_res_1;
  $__case_0 = ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'));
  $__case_res_2 = null;
  if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
  $foldMap = $__case_res_2;
  $__case_0 = ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'));
  $__case_res_3 = null;
  if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
  $foldl = $__case_res_3;
  $__case_0 = ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'));
  $__case_res_4 = null;
  if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
  $foldr = $__case_res_4;
  $foldableNonEmpty1 = (object)["foldMap" => (function() use ($dict, $foldMap) {
  $__fn = function($dictMonoid) use ($dict, $foldMap, &$__fn) {
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
$append1 = $__case_res_5;
$foldMap1 = ($foldMap)($dictMonoid);
    $__res = (function() use ($append1, $foldMap1) {
  $__body = function($f, $v) use ($append1, $foldMap1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return ($append1)(($f1)($a), ($foldMap1)($f1, $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($append1, $foldMap1, $__body, &$__fn) {
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
})(), "foldl" => (function() use ($foldl) {
  $__body = function($f, $b, $v) use ($foldl) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$fa = ($__case_2)->v1;
return ($foldl)($f1, ($f1)($b1, $a), $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $b = null, $v = null) use ($foldl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
    if ($__num === 1) return function($b, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b, $v);
      if ($__num2 === 1) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $b, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldr" => (function() use ($foldr) {
  $__body = function($f, $b, $v) use ($foldr) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$fa = ($__case_2)->v1;
return ($f1)($a, ($foldr)($f1, $b1, $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $b = null, $v = null) use ($foldr, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
    if ($__num === 1) return function($b, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b, $v);
      if ($__num2 === 1) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $b, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  return (object)["foldMap1" => (function() use ($foldl) {
  $__fn = function($dictSemigroup) use ($foldl, &$__fn) {
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
$append1 = $__case_res_6;
    $__res = (function() use ($foldl, $append1) {
  $__body = function($f, $v) use ($foldl, $append1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return ($foldl)((function() use ($append1, $f1) {
  $__fn = function($s, $a1 = null) use ($append1, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a1) use ($s, &$__fn) { return $__fn($s, $a1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($append1)($s, ($f1)($a1));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($f1)($a), $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($foldl, $append1, $__body, &$__fn) {
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
})(), "foldr1" => (function() use ($foldr) {
  $__body = function($f, $v) use ($foldr) {
    $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
    $__global_Data_NonEmpty_compose = ($GLOBALS['Data_NonEmpty_compose'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_compose'));
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return ($__global_Data_Maybe_maybe)($a, ($f1)($a), ($foldr)((function() use ($__global_Data_NonEmpty_compose, $__global_Data_Maybe_maybe, $f1) {
  $__fn = function($a1) use ($__global_Data_NonEmpty_compose, $__global_Data_Maybe_maybe, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_NonEmpty_compose)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_Maybe_maybe)($a1, ($f1)($a1)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($foldr, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl1" => (function() use ($foldl) {
  $__body = function($f, $v) use ($foldl) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return ($foldl)($f1, $a, $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($foldl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() use ($foldableNonEmpty1) {
  $__fn = function($__dollar____unused) use ($foldableNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableNonEmpty1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };



// Data_Enum_Gen_genBoundedEnum
function Data_Enum_Gen_genBoundedEnum($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Gen_genBoundedEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Semiring_semiringInt = ($GLOBALS['Data_Semiring_semiringInt'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringInt'));
$__global_Data_Semigroup_Last_semigroupLast = ($GLOBALS['Data_Semigroup_Last_semigroupLast'] ?? \Data\Semigroup\Last\phpurs_eval_thunk('Data_Semigroup_Last_semigroupLast'));
$__global_Control_Monad_Gen_sub = ($GLOBALS['Control_Monad_Gen_sub'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_sub'));
$__global_Control_Monad_Gen_un = ($GLOBALS['Control_Monad_Gen_un'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_un'));
$__global_Data_Semigroup_Last_Last = ($GLOBALS['Data_Semigroup_Last_Last'] ?? \Data\Semigroup\Last\phpurs_eval_thunk('Data_Semigroup_Last_Last'));
$__global_Data_Enum_Gen_foldable1NonEmpty = ($GLOBALS['Data_Enum_Gen_foldable1NonEmpty'] ?? \Data\Enum\Gen\phpurs_eval_thunk('Data_Enum_Gen_foldable1NonEmpty'));
$__global_Data_Unfoldable1_sub = ($GLOBALS['Data_Unfoldable1_sub'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_sub'));
$__global_Data_Enum_bind = ($GLOBALS['Data_Enum_bind'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_bind'));
$__global_Data_Enum_voidLeft = ($GLOBALS['Data_Enum_voidLeft'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_voidLeft'));
$__global_Data_Enum_guard = ($GLOBALS['Data_Enum_guard'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_guard'));
$__global_Data_Unfoldable1_unfoldable1Array = ($GLOBALS['Data_Unfoldable1_unfoldable1Array'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_unfoldable1Array'));
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
$elements = ((function() use ($dict, $__global_Data_Semiring_semiringInt, $__global_Data_Semigroup_Last_semigroupLast, $__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $bind, $chooseInt, $pure) {
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
})())($__global_Data_Enum_Gen_foldable1NonEmpty);
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_9;
    $__res = (function() use ($__global_Prim_undefined, $dict, $__global_Data_Unfoldable1_sub, $__global_Data_Enum_bind, $__global_Data_Enum_voidLeft, $__global_Data_Enum_guard, $__global_Data_Unfoldable1_unfoldable1Array, $elements, $pure) {
  $__body = function($dictBoundedEnum) use ($__global_Prim_undefined, $dict, $__global_Data_Unfoldable1_sub, $__global_Data_Enum_bind, $__global_Data_Enum_voidLeft, $__global_Data_Enum_guard, $__global_Data_Unfoldable1_unfoldable1Array, $elements, $pure) {
    $Enum1 = (($dictBoundedEnum)->Enum1)($__global_Prim_undefined);
    $Bounded0 = (($dictBoundedEnum)->Bounded0)($__global_Prim_undefined);
    $__case_0 = $Bounded0;
    $__case_res_10 = null;
    if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
    $bottom = $__case_res_10;
    $__case_0 = $Enum1;
    $__case_res_11 = null;
    if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
    $v = ($__case_res_11)($bottom);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Just":
$a = ($__case_0)->v0;
$Ord0 = (($Enum1)->Ord0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_12;
$__case_0 = $Ord0;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_13;
$lessThan1 = (function() use ($compare3) {
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
$__case_0 = $Enum1;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
$succ1 = $__case_res_14;
$__case_0 = $Ord0;
$__case_res_15 = null;
if (true) {
$v = $__case_0;
$__case_res_15 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_15;
$lessThanOrEq1 = (function() use ($compare3) {
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
$__case_0 = $Enum1;
$__case_res_16 = null;
if (true) {
$v = $__case_0;
$__case_res_16 = ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
$pred1 = $__case_res_16;
$__case_0 = $Ord0;
$__case_res_17 = null;
if (true) {
$v = $__case_0;
$__case_res_17 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_17;
$greaterThanOrEq1 = (function() use ($compare3) {
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
$__case_0 = $Bounded0;
$__case_res_20 = null;
if (true) {
$v = $__case_0;
$__case_res_20 = ($v)->top;
} else {
throw new \Exception("Pattern match failure");
};
$possibilities = ((function() use ($__global_Data_Unfoldable1_sub, $__global_Data_Enum_bind, $__global_Data_Enum_voidLeft, $__global_Data_Enum_guard) {
  $__fn = function($dictUnfoldable1) use ($__global_Data_Unfoldable1_sub, $__global_Data_Enum_bind, $__global_Data_Enum_voidLeft, $__global_Data_Enum_guard, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictUnfoldable1;
$__case_res_18 = null;
if (true) {
$v = $__case_0;
$__case_res_18 = ($v)->unfoldr1;
} else {
throw new \Exception("Pattern match failure");
};
$unfoldr11 = $__case_res_18;
$singleton = ((function() use ($unfoldr11, $__global_Data_Unfoldable1_sub) {
  $__fn = function($n, $v = null) use ($unfoldr11, $__global_Data_Unfoldable1_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($n, &$__fn) { return $__fn($n, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$step = (function() {
  $__body = function($i) {
    $__case_0 = $i;
    if (true) {
$i1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($i) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($i);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($unfoldr11)($step, ($__global_Data_Unfoldable1_sub)($n, 1));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(1);
$__case_0 = $dictUnfoldable1;
$__case_res_19 = null;
if (true) {
$v = $__case_0;
$__case_res_19 = ($v)->unfoldr1;
} else {
throw new \Exception("Pattern match failure");
};
$unfoldr1 = $__case_res_19;
$go = (function() use ($__global_Data_Enum_bind, $__global_Data_Enum_voidLeft, $__global_Data_Enum_guard) {
  $__fn = function($step, $op = null, $to = null, $a = null) use ($__global_Data_Enum_bind, $__global_Data_Enum_voidLeft, $__global_Data_Enum_guard, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($a) use ($step, $op, $to, &$__fn) { return $__fn($step, $op, $to, $a); };
    if ($__num === 2) return function($to, $a = null) use ($step, $op, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($step, $op, $to, $a);
      if ($__num2 === 1) return function($a) use ($step, $op, $to, &$__fn) { return $__fn($step, $op, $to, $a); };
      return phpurs_curry_fallback($__fn, [$step, $op], 4);
    };
    if ($__num === 1) return function($op, $to = null, $a = null) use ($step, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($step, $op, $to, $a);
      if ($__num2 === 2) return function($a) use ($step, $op, $to, &$__fn) { return $__fn($step, $op, $to, $a); };
      if ($__num2 === 1) return function($to, $a = null) use ($step, $op, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($step, $op, $to, $a);
        if ($__num3 === 1) return function($a) use ($step, $op, $to, &$__fn) { return $__fn($step, $op, $to, $a); };
        return phpurs_curry_fallback($__fn, [$step, $op], 4);
      };
      return phpurs_curry_fallback($__fn, [$step], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
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
})())($a, ($__global_Data_Enum_bind)(($step)($a), (function() use ($__global_Data_Enum_voidLeft, $__global_Data_Enum_guard, $op, $to) {
  $__fn = function($a__prime__) use ($__global_Data_Enum_voidLeft, $__global_Data_Enum_guard, $op, $to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Enum_voidLeft)(($__global_Data_Enum_guard)(($op)($a__prime__, $to)), $a__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$from = $__case_0;
$to = $__case_1;
return "/* Unsupported: Guards not supported */";
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
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Data_Unfoldable1_unfoldable1Array, $a, $__case_res_20);
return ($elements)(((function() {
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
})())($bottom, $possibilities));
break;
case "Nothing":
return ($pure)($bottom);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($dictBoundedEnum) use ($__global_Prim_undefined, $dict, $__global_Data_Unfoldable1_sub, $__global_Data_Enum_bind, $__global_Data_Enum_voidLeft, $__global_Data_Enum_guard, $__global_Data_Unfoldable1_unfoldable1Array, $elements, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($dictBoundedEnum);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Gen_genBoundedEnum'] = __NAMESPACE__ . '\\Data_Enum_Gen_genBoundedEnum';

