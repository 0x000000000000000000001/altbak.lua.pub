<?php

namespace Data\DateTime\Gen;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Data.Date.Gen/index.php';
require_once __DIR__ . '/../Data.DateTime/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Time.Gen/index.php';
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


// Data_DateTime_Gen_genDateTime
function Data_DateTime_Gen_genDateTime($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_Gen_genDateTime';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Date_Component_Gen_compose = ($GLOBALS['Data_Date_Component_Gen_compose'] ?? \Data\Date\Component\Gen\phpurs_eval_thunk('Data_Date_Component_Gen_compose'));
$__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
$__global_Data_Date_Component_Gen_fromJust = ($GLOBALS['Data_Date_Component_Gen_fromJust'] ?? \Data\Date\Component\Gen\phpurs_eval_thunk('Data_Date_Component_Gen_fromJust'));
$__global_Data_Date_Component_Gen_toEnum = ($GLOBALS['Data_Date_Component_Gen_toEnum'] ?? \Data\Date\Component\Gen\phpurs_eval_thunk('Data_Date_Component_Gen_toEnum'));
$__global_Data_Date_isLeapYear = ($GLOBALS['Data_Date_isLeapYear'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_isLeapYear'));
$__global_Data_Date_Gen_compose = ($GLOBALS['Data_Date_Gen_compose'] ?? \Data\Date\Gen\phpurs_eval_thunk('Data_Date_Gen_compose'));
$__global_Data_Time_Duration_Days = ($GLOBALS['Data_Time_Duration_Days'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Days'));
$__global_Data_Int_toNumber = ($GLOBALS['Data_Int_toNumber'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_toNumber'));
$__global_Data_Date_Gen_fromJust = ($GLOBALS['Data_Date_Gen_fromJust'] ?? \Data\Date\Gen\phpurs_eval_thunk('Data_Date_Gen_fromJust'));
$__global_Data_Date_Gen_bind = ($GLOBALS['Data_Date_Gen_bind'] ?? \Data\Date\Gen\phpurs_eval_thunk('Data_Date_Gen_bind'));
$__global_Data_Date_exactDate = ($GLOBALS['Data_Date_exactDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_exactDate'));
$__global_Data_Date_Gen_bottom = ($GLOBALS['Data_Date_Gen_bottom'] ?? \Data\Date\Gen\phpurs_eval_thunk('Data_Date_Gen_bottom'));
$__global_Data_Date_Gen_bottom1 = ($GLOBALS['Data_Date_Gen_bottom1'] ?? \Data\Date\Gen\phpurs_eval_thunk('Data_Date_Gen_bottom1'));
$__global_Data_Date_adjust = ($GLOBALS['Data_Date_adjust'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_adjust'));
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
$__global_Data_Time_Component_boundedEnumHour = ($GLOBALS['Data_Time_Component_boundedEnumHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumHour'));
$__global_Data_Time_Component_boundedEnumMinute = ($GLOBALS['Data_Time_Component_boundedEnumMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMinute'));
$__global_Data_Time_Component_boundedEnumSecond = ($GLOBALS['Data_Time_Component_boundedEnumSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumSecond'));
$__global_Data_Time_Component_boundedEnumMillisecond = ($GLOBALS['Data_Time_Component_boundedEnumMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMillisecond'));
$Apply0 = (((((($dictMonadGen)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined);
$__case_0 = $Apply0;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$Monad0 = (($dictMonadGen)->Monad0)($__global_Prim_undefined);
$Bind1 = (($Monad0)->Bind1)($__global_Prim_undefined);
$__case_0 = $Bind1;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind1 = $__case_res_2;
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
$__case_res_4 = ($v)->chooseInt;
} else {
throw new \Exception("Pattern match failure");
};
$chooseInt = $__case_res_4;
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
$__case_0 = $dictMonadGen;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->chooseInt;
} else {
throw new \Exception("Pattern match failure");
};
$Apply0 = (((((($dictMonadGen)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined);
$__case_0 = $Apply0;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_9;
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$Monad0 = (($dictMonadGen)->Monad0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_11;
$__case_0 = $dictMonadGen;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->chooseInt;
} else {
throw new \Exception("Pattern match failure");
};
$chooseInt = $__case_res_12;
$__case_0 = $dict;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_13;
$elements = ((function() use ($dict, $__global_Data_Semiring_semiringInt, $__global_Data_Semigroup_Last_semigroupLast, $__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $bind, $chooseInt, $pure) {
  $__fn = function($dictFoldable1) use ($dict, $__global_Data_Semiring_semiringInt, $__global_Data_Semigroup_Last_semigroupLast, $__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $bind, $chooseInt, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_14;
$length = ((function() use ($foldl3) {
  $__fn = function($dictSemiring) use ($foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictSemiring;
$__case_res_15 = null;
if (true) {
$v = $__case_0;
$__case_res_15 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
$add1 = $__case_res_15;
$__case_0 = $dictSemiring;
$__case_res_16 = null;
if (true) {
$v = $__case_0;
$__case_res_16 = ($v)->one;
} else {
throw new \Exception("Pattern match failure");
};
$one = $__case_res_16;
$__case_0 = $dictSemiring;
$__case_res_17 = null;
if (true) {
$v = $__case_0;
$__case_res_17 = ($v)->zero;
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
})(), $__case_res_17);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Data_Semiring_semiringInt);
$__case_0 = $dictFoldable1;
$__case_res_18 = null;
if (true) {
$v = $__case_0;
$__case_res_18 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap1 = ($__case_res_18)($__global_Data_Semigroup_Last_semigroupLast);
$__case_0 = $dict;
$__case_res_19 = null;
if (true) {
$v = $__case_0;
$__case_res_19 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr = $__case_res_19;
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
$__case_res_20 = null;
if (true) {
$v = $__case_0;
$__case_res_20 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_20;
$Monad0 = (($dictMonadGen)->Monad0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_32 = null;
if (true) {
$v = $__case_0;
$__case_res_32 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_32;
$__case_0 = $dictMonadGen;
$__case_res_33 = null;
if (true) {
$v = $__case_0;
$__case_res_33 = ($v)->chooseInt;
} else {
throw new \Exception("Pattern match failure");
};
$chooseInt = $__case_res_33;
$__case_0 = $dict;
$__case_res_34 = null;
if (true) {
$v = $__case_0;
$__case_res_34 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_34;
$elements = ((function() use ($dict, $__global_Data_Semiring_semiringInt, $__global_Data_Semigroup_Last_semigroupLast, $__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $bind, $chooseInt, $pure) {
  $__fn = function($dictFoldable1) use ($dict, $__global_Data_Semiring_semiringInt, $__global_Data_Semigroup_Last_semigroupLast, $__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $bind, $chooseInt, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_35 = null;
if (true) {
$v = $__case_0;
$__case_res_35 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_35;
$length = ((function() use ($foldl3) {
  $__fn = function($dictSemiring) use ($foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictSemiring;
$__case_res_36 = null;
if (true) {
$v = $__case_0;
$__case_res_36 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
$add1 = $__case_res_36;
$__case_0 = $dictSemiring;
$__case_res_37 = null;
if (true) {
$v = $__case_0;
$__case_res_37 = ($v)->one;
} else {
throw new \Exception("Pattern match failure");
};
$one = $__case_res_37;
$__case_0 = $dictSemiring;
$__case_res_38 = null;
if (true) {
$v = $__case_0;
$__case_res_38 = ($v)->zero;
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
})(), $__case_res_38);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Data_Semiring_semiringInt);
$__case_0 = $dictFoldable1;
$__case_res_39 = null;
if (true) {
$v = $__case_0;
$__case_res_39 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap1 = ($__case_res_39)($__global_Data_Semigroup_Last_semigroupLast);
$__case_0 = $dict;
$__case_res_40 = null;
if (true) {
$v = $__case_0;
$__case_res_40 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr = $__case_res_40;
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
$__case_res_41 = null;
if (true) {
$v = $__case_0;
$__case_res_41 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_41;
$Monad0 = (($dictMonadGen)->Monad0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_53 = null;
if (true) {
$v = $__case_0;
$__case_res_53 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_53;
$__case_0 = $dictMonadGen;
$__case_res_54 = null;
if (true) {
$v = $__case_0;
$__case_res_54 = ($v)->chooseInt;
} else {
throw new \Exception("Pattern match failure");
};
$chooseInt = $__case_res_54;
$__case_0 = $dict;
$__case_res_55 = null;
if (true) {
$v = $__case_0;
$__case_res_55 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_55;
$elements = ((function() use ($dict, $__global_Data_Semiring_semiringInt, $__global_Data_Semigroup_Last_semigroupLast, $__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $bind, $chooseInt, $pure) {
  $__fn = function($dictFoldable1) use ($dict, $__global_Data_Semiring_semiringInt, $__global_Data_Semigroup_Last_semigroupLast, $__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $bind, $chooseInt, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_56 = null;
if (true) {
$v = $__case_0;
$__case_res_56 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_56;
$length = ((function() use ($foldl3) {
  $__fn = function($dictSemiring) use ($foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictSemiring;
$__case_res_57 = null;
if (true) {
$v = $__case_0;
$__case_res_57 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
$add1 = $__case_res_57;
$__case_0 = $dictSemiring;
$__case_res_58 = null;
if (true) {
$v = $__case_0;
$__case_res_58 = ($v)->one;
} else {
throw new \Exception("Pattern match failure");
};
$one = $__case_res_58;
$__case_0 = $dictSemiring;
$__case_res_59 = null;
if (true) {
$v = $__case_0;
$__case_res_59 = ($v)->zero;
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
})(), $__case_res_59);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Data_Semiring_semiringInt);
$__case_0 = $dictFoldable1;
$__case_res_60 = null;
if (true) {
$v = $__case_0;
$__case_res_60 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap1 = ($__case_res_60)($__global_Data_Semigroup_Last_semigroupLast);
$__case_0 = $dict;
$__case_res_61 = null;
if (true) {
$v = $__case_0;
$__case_res_61 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr = $__case_res_61;
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
$__case_res_62 = null;
if (true) {
$v = $__case_0;
$__case_res_62 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_62;
$Monad0 = (($dictMonadGen)->Monad0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_74 = null;
if (true) {
$v = $__case_0;
$__case_res_74 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_74;
$__case_0 = $dictMonadGen;
$__case_res_75 = null;
if (true) {
$v = $__case_0;
$__case_res_75 = ($v)->chooseInt;
} else {
throw new \Exception("Pattern match failure");
};
$chooseInt = $__case_res_75;
$__case_0 = $dict;
$__case_res_76 = null;
if (true) {
$v = $__case_0;
$__case_res_76 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_76;
$elements = ((function() use ($dict, $__global_Data_Semiring_semiringInt, $__global_Data_Semigroup_Last_semigroupLast, $__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $bind, $chooseInt, $pure) {
  $__fn = function($dictFoldable1) use ($dict, $__global_Data_Semiring_semiringInt, $__global_Data_Semigroup_Last_semigroupLast, $__global_Control_Monad_Gen_sub, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $bind, $chooseInt, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_77 = null;
if (true) {
$v = $__case_0;
$__case_res_77 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_77;
$length = ((function() use ($foldl3) {
  $__fn = function($dictSemiring) use ($foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictSemiring;
$__case_res_78 = null;
if (true) {
$v = $__case_0;
$__case_res_78 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
$add1 = $__case_res_78;
$__case_0 = $dictSemiring;
$__case_res_79 = null;
if (true) {
$v = $__case_0;
$__case_res_79 = ($v)->one;
} else {
throw new \Exception("Pattern match failure");
};
$one = $__case_res_79;
$__case_0 = $dictSemiring;
$__case_res_80 = null;
if (true) {
$v = $__case_0;
$__case_res_80 = ($v)->zero;
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
})(), $__case_res_80);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Data_Semiring_semiringInt);
$__case_0 = $dictFoldable1;
$__case_res_81 = null;
if (true) {
$v = $__case_0;
$__case_res_81 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap1 = ($__case_res_81)($__global_Data_Semigroup_Last_semigroupLast);
$__case_0 = $dict;
$__case_res_82 = null;
if (true) {
$v = $__case_0;
$__case_res_82 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr = $__case_res_82;
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
$__case_res_83 = null;
if (true) {
$v = $__case_0;
$__case_res_83 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_83;
    $__res = ($__case_res_0)(($__case_res_1)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("DateTime", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($bind1)(($__case_res_6)(($__global_Data_Date_Component_Gen_compose)(($__global_Partial_Unsafe__unsafePartial)((function() use ($__global_Data_Date_Component_Gen_fromJust) {
  $__fn = function($__dollar____unused) use ($__global_Data_Date_Component_Gen_fromJust, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__global_Data_Date_Component_Gen_fromJust;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $__global_Data_Date_Component_Gen_toEnum), ($__case_res_7)(1900, 2100)), (function() use ($__global_Data_Date_isLeapYear, $bind1, $map, $__global_Data_Date_Gen_compose, $__global_Data_Time_Duration_Days, $__global_Data_Int_toNumber, $chooseInt, $pure, $__global_Partial_Unsafe__unsafePartial, $__global_Data_Date_Gen_fromJust, $__global_Data_Date_Gen_bind, $__global_Data_Date_exactDate, $__global_Data_Date_Gen_bottom, $__global_Data_Date_Gen_bottom1, $__global_Data_Date_adjust) {
  $__fn = function($year) use ($__global_Data_Date_isLeapYear, $bind1, $map, $__global_Data_Date_Gen_compose, $__global_Data_Time_Duration_Days, $__global_Data_Int_toNumber, $chooseInt, $pure, $__global_Partial_Unsafe__unsafePartial, $__global_Data_Date_Gen_fromJust, $__global_Data_Date_Gen_bind, $__global_Data_Date_exactDate, $__global_Data_Date_Gen_bottom, $__global_Data_Date_Gen_bottom1, $__global_Data_Date_adjust, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = ($__global_Data_Date_isLeapYear)($year);
$__case_res_8 = null;
switch ($__case_0) {
case true:
$__case_res_8 = 365;
break;
default:
$__case_res_8 = 364;
break;
};
$maxDays = $__case_res_8;
    $__res = ($bind1)(($map)(($__global_Data_Date_Gen_compose)($__global_Data_Time_Duration_Days, $__global_Data_Int_toNumber), ($chooseInt)(0, $maxDays)), (function() use ($pure, $__global_Partial_Unsafe__unsafePartial, $__global_Data_Date_Gen_fromJust, $__global_Data_Date_Gen_bind, $__global_Data_Date_exactDate, $year, $__global_Data_Date_Gen_bottom, $__global_Data_Date_Gen_bottom1, $__global_Data_Date_adjust) {
  $__fn = function($days) use ($pure, $__global_Partial_Unsafe__unsafePartial, $__global_Data_Date_Gen_fromJust, $__global_Data_Date_Gen_bind, $__global_Data_Date_exactDate, $year, $__global_Data_Date_Gen_bottom, $__global_Data_Date_Gen_bottom1, $__global_Data_Date_adjust, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(($__global_Partial_Unsafe__unsafePartial)((function() use ($__global_Data_Date_Gen_fromJust, $__global_Data_Date_Gen_bind, $__global_Data_Date_exactDate, $year, $__global_Data_Date_Gen_bottom, $__global_Data_Date_Gen_bottom1, $__global_Data_Date_adjust, $days) {
  $__fn = function($__dollar____unused) use ($__global_Data_Date_Gen_fromJust, $__global_Data_Date_Gen_bind, $__global_Data_Date_exactDate, $year, $__global_Data_Date_Gen_bottom, $__global_Data_Date_Gen_bottom1, $__global_Data_Date_adjust, $days, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Date_Gen_fromJust)(($__global_Data_Date_Gen_bind)(($__global_Data_Date_exactDate)($year, $__global_Data_Date_Gen_bottom, $__global_Data_Date_Gen_bottom1), (function() use ($__global_Data_Date_adjust, $days) {
  $__fn = function($janFirst) use ($__global_Data_Date_adjust, $days, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Date_adjust)($days, $janFirst);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($apply)(($apply)(($apply)(($__case_res_10)((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($value3) use ($value0, $value1, $value2, &$__fn) { return $__fn($value0, $value1, $value2, $value3); };
    if ($__num === 2) return function($value2, $value3 = null) use ($value0, $value1, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2, $value3);
      if ($__num2 === 1) return function($value3) use ($value0, $value1, $value2, &$__fn) { return $__fn($value0, $value1, $value2, $value3); };
      return phpurs_curry_fallback($__fn, [$value0, $value1], 4);
    };
    if ($__num === 1) return function($value1, $value2 = null, $value3 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($value0, $value1, $value2, $value3);
      if ($__num2 === 2) return function($value3) use ($value0, $value1, $value2, &$__fn) { return $__fn($value0, $value1, $value2, $value3); };
      if ($__num2 === 1) return function($value2, $value3 = null) use ($value0, $value1, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($value0, $value1, $value2, $value3);
        if ($__num3 === 1) return function($value3) use ($value0, $value1, $value2, &$__fn) { return $__fn($value0, $value1, $value2, $value3); };
        return phpurs_curry_fallback($__fn, [$value0, $value1], 4);
      };
      return phpurs_curry_fallback($__fn, [$value0], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = new Phpurs_Data4("Time", $value0, $value1, $value2, $value3);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), ((function() use ($__global_Prim_undefined, $dict, $__global_Data_Unfoldable1_sub, $__global_Data_Enum_bind, $__global_Data_Enum_voidLeft, $__global_Data_Enum_guard, $__global_Data_Unfoldable1_unfoldable1Array, $elements, $pure) {
  $__body = function($dictBoundedEnum) use ($__global_Prim_undefined, $dict, $__global_Data_Unfoldable1_sub, $__global_Data_Enum_bind, $__global_Data_Enum_voidLeft, $__global_Data_Enum_guard, $__global_Data_Unfoldable1_unfoldable1Array, $elements, $pure) {
    $Enum1 = (($dictBoundedEnum)->Enum1)($__global_Prim_undefined);
    $Bounded0 = (($dictBoundedEnum)->Bounded0)($__global_Prim_undefined);
    $__case_0 = $Bounded0;
    $__case_res_21 = null;
    if (true) {
$v = $__case_0;
$__case_res_21 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
    $bottom = $__case_res_21;
    $__case_0 = $Enum1;
    $__case_res_22 = null;
    if (true) {
$v = $__case_0;
$__case_res_22 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
    $v = ($__case_res_22)($bottom);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Just":
$a = ($__case_0)->v0;
$Ord0 = (($Enum1)->Ord0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_23 = null;
if (true) {
$v = $__case_0;
$__case_res_23 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_23;
$__case_0 = $Ord0;
$__case_res_24 = null;
if (true) {
$v = $__case_0;
$__case_res_24 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_24;
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
$__case_res_25 = null;
if (true) {
$v = $__case_0;
$__case_res_25 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
$succ1 = $__case_res_25;
$__case_0 = $Ord0;
$__case_res_26 = null;
if (true) {
$v = $__case_0;
$__case_res_26 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_26;
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
$__case_res_27 = null;
if (true) {
$v = $__case_0;
$__case_res_27 = ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
$pred1 = $__case_res_27;
$__case_0 = $Ord0;
$__case_res_28 = null;
if (true) {
$v = $__case_0;
$__case_res_28 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_28;
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
$__case_res_31 = null;
if (true) {
$v = $__case_0;
$__case_res_31 = ($v)->top;
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
$__case_res_29 = null;
if (true) {
$v = $__case_0;
$__case_res_29 = ($v)->unfoldr1;
} else {
throw new \Exception("Pattern match failure");
};
$unfoldr11 = $__case_res_29;
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
$__case_res_30 = null;
if (true) {
$v = $__case_0;
$__case_res_30 = ($v)->unfoldr1;
} else {
throw new \Exception("Pattern match failure");
};
$unfoldr1 = $__case_res_30;
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
})())($__global_Data_Unfoldable1_unfoldable1Array, $a, $__case_res_31);
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
})())($__global_Data_Time_Component_boundedEnumHour)), ((function() use ($__global_Prim_undefined, $dict, $__global_Data_Unfoldable1_sub, $__global_Data_Enum_bind, $__global_Data_Enum_voidLeft, $__global_Data_Enum_guard, $__global_Data_Unfoldable1_unfoldable1Array, $elements, $pure) {
  $__body = function($dictBoundedEnum) use ($__global_Prim_undefined, $dict, $__global_Data_Unfoldable1_sub, $__global_Data_Enum_bind, $__global_Data_Enum_voidLeft, $__global_Data_Enum_guard, $__global_Data_Unfoldable1_unfoldable1Array, $elements, $pure) {
    $Enum1 = (($dictBoundedEnum)->Enum1)($__global_Prim_undefined);
    $Bounded0 = (($dictBoundedEnum)->Bounded0)($__global_Prim_undefined);
    $__case_0 = $Bounded0;
    $__case_res_42 = null;
    if (true) {
$v = $__case_0;
$__case_res_42 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
    $bottom = $__case_res_42;
    $__case_0 = $Enum1;
    $__case_res_43 = null;
    if (true) {
$v = $__case_0;
$__case_res_43 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
    $v = ($__case_res_43)($bottom);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Just":
$a = ($__case_0)->v0;
$Ord0 = (($Enum1)->Ord0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_44 = null;
if (true) {
$v = $__case_0;
$__case_res_44 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_44;
$__case_0 = $Ord0;
$__case_res_45 = null;
if (true) {
$v = $__case_0;
$__case_res_45 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_45;
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
$__case_res_46 = null;
if (true) {
$v = $__case_0;
$__case_res_46 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
$succ1 = $__case_res_46;
$__case_0 = $Ord0;
$__case_res_47 = null;
if (true) {
$v = $__case_0;
$__case_res_47 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_47;
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
$__case_res_48 = null;
if (true) {
$v = $__case_0;
$__case_res_48 = ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
$pred1 = $__case_res_48;
$__case_0 = $Ord0;
$__case_res_49 = null;
if (true) {
$v = $__case_0;
$__case_res_49 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_49;
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
$__case_res_52 = null;
if (true) {
$v = $__case_0;
$__case_res_52 = ($v)->top;
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
$__case_res_50 = null;
if (true) {
$v = $__case_0;
$__case_res_50 = ($v)->unfoldr1;
} else {
throw new \Exception("Pattern match failure");
};
$unfoldr11 = $__case_res_50;
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
$__case_res_51 = null;
if (true) {
$v = $__case_0;
$__case_res_51 = ($v)->unfoldr1;
} else {
throw new \Exception("Pattern match failure");
};
$unfoldr1 = $__case_res_51;
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
})())($__global_Data_Unfoldable1_unfoldable1Array, $a, $__case_res_52);
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
})())($__global_Data_Time_Component_boundedEnumMinute)), ((function() use ($__global_Prim_undefined, $dict, $__global_Data_Unfoldable1_sub, $__global_Data_Enum_bind, $__global_Data_Enum_voidLeft, $__global_Data_Enum_guard, $__global_Data_Unfoldable1_unfoldable1Array, $elements, $pure) {
  $__body = function($dictBoundedEnum) use ($__global_Prim_undefined, $dict, $__global_Data_Unfoldable1_sub, $__global_Data_Enum_bind, $__global_Data_Enum_voidLeft, $__global_Data_Enum_guard, $__global_Data_Unfoldable1_unfoldable1Array, $elements, $pure) {
    $Enum1 = (($dictBoundedEnum)->Enum1)($__global_Prim_undefined);
    $Bounded0 = (($dictBoundedEnum)->Bounded0)($__global_Prim_undefined);
    $__case_0 = $Bounded0;
    $__case_res_63 = null;
    if (true) {
$v = $__case_0;
$__case_res_63 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
    $bottom = $__case_res_63;
    $__case_0 = $Enum1;
    $__case_res_64 = null;
    if (true) {
$v = $__case_0;
$__case_res_64 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
    $v = ($__case_res_64)($bottom);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Just":
$a = ($__case_0)->v0;
$Ord0 = (($Enum1)->Ord0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_65 = null;
if (true) {
$v = $__case_0;
$__case_res_65 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_65;
$__case_0 = $Ord0;
$__case_res_66 = null;
if (true) {
$v = $__case_0;
$__case_res_66 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_66;
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
$__case_res_67 = null;
if (true) {
$v = $__case_0;
$__case_res_67 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
$succ1 = $__case_res_67;
$__case_0 = $Ord0;
$__case_res_68 = null;
if (true) {
$v = $__case_0;
$__case_res_68 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_68;
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
$__case_res_69 = null;
if (true) {
$v = $__case_0;
$__case_res_69 = ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
$pred1 = $__case_res_69;
$__case_0 = $Ord0;
$__case_res_70 = null;
if (true) {
$v = $__case_0;
$__case_res_70 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_70;
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
$__case_res_73 = null;
if (true) {
$v = $__case_0;
$__case_res_73 = ($v)->top;
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
$__case_res_71 = null;
if (true) {
$v = $__case_0;
$__case_res_71 = ($v)->unfoldr1;
} else {
throw new \Exception("Pattern match failure");
};
$unfoldr11 = $__case_res_71;
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
$__case_res_72 = null;
if (true) {
$v = $__case_0;
$__case_res_72 = ($v)->unfoldr1;
} else {
throw new \Exception("Pattern match failure");
};
$unfoldr1 = $__case_res_72;
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
})())($__global_Data_Unfoldable1_unfoldable1Array, $a, $__case_res_73);
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
})())($__global_Data_Time_Component_boundedEnumSecond)), ((function() use ($__global_Prim_undefined, $dict, $__global_Data_Unfoldable1_sub, $__global_Data_Enum_bind, $__global_Data_Enum_voidLeft, $__global_Data_Enum_guard, $__global_Data_Unfoldable1_unfoldable1Array, $elements, $pure) {
  $__body = function($dictBoundedEnum) use ($__global_Prim_undefined, $dict, $__global_Data_Unfoldable1_sub, $__global_Data_Enum_bind, $__global_Data_Enum_voidLeft, $__global_Data_Enum_guard, $__global_Data_Unfoldable1_unfoldable1Array, $elements, $pure) {
    $Enum1 = (($dictBoundedEnum)->Enum1)($__global_Prim_undefined);
    $Bounded0 = (($dictBoundedEnum)->Bounded0)($__global_Prim_undefined);
    $__case_0 = $Bounded0;
    $__case_res_84 = null;
    if (true) {
$v = $__case_0;
$__case_res_84 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
    $bottom = $__case_res_84;
    $__case_0 = $Enum1;
    $__case_res_85 = null;
    if (true) {
$v = $__case_0;
$__case_res_85 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
    $v = ($__case_res_85)($bottom);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Just":
$a = ($__case_0)->v0;
$Ord0 = (($Enum1)->Ord0)($__global_Prim_undefined);
$__case_0 = $dict;
$__case_res_86 = null;
if (true) {
$v = $__case_0;
$__case_res_86 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_86;
$__case_0 = $Ord0;
$__case_res_87 = null;
if (true) {
$v = $__case_0;
$__case_res_87 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_87;
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
$__case_res_88 = null;
if (true) {
$v = $__case_0;
$__case_res_88 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
$succ1 = $__case_res_88;
$__case_0 = $Ord0;
$__case_res_89 = null;
if (true) {
$v = $__case_0;
$__case_res_89 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_89;
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
$__case_res_90 = null;
if (true) {
$v = $__case_0;
$__case_res_90 = ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
$pred1 = $__case_res_90;
$__case_0 = $Ord0;
$__case_res_91 = null;
if (true) {
$v = $__case_0;
$__case_res_91 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_91;
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
$__case_res_94 = null;
if (true) {
$v = $__case_0;
$__case_res_94 = ($v)->top;
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
$__case_res_92 = null;
if (true) {
$v = $__case_0;
$__case_res_92 = ($v)->unfoldr1;
} else {
throw new \Exception("Pattern match failure");
};
$unfoldr11 = $__case_res_92;
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
$__case_res_93 = null;
if (true) {
$v = $__case_0;
$__case_res_93 = ($v)->unfoldr1;
} else {
throw new \Exception("Pattern match failure");
};
$unfoldr1 = $__case_res_93;
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
})())($__global_Data_Unfoldable1_unfoldable1Array, $a, $__case_res_94);
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
})())($__global_Data_Time_Component_boundedEnumMillisecond)));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_Gen_genDateTime'] = __NAMESPACE__ . '\\Data_DateTime_Gen_genDateTime';

