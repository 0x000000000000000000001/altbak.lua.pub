<?php

namespace Data\Interval\Duration;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Interval.Duration/index.php';
require_once __DIR__ . '/../Data.Map/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
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
      case 'Data_Interval_Duration_append': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semigroup_semigroupString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupString'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_Duration_add': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semiring_semiringNumber'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_Duration_div': $v = (function() {
  $__case_0 = ($GLOBALS['Data_EuclideanRing_euclideanRingNumber'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_euclideanRingNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->div;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_Duration_Second': $v = ($GLOBALS['__phpurs_data0_Second'] ??= new Phpurs_Data0("Second")); break;
      case 'Data_Interval_Duration_Minute': $v = ($GLOBALS['__phpurs_data0_Minute'] ??= new Phpurs_Data0("Minute")); break;
      case 'Data_Interval_Duration_Hour': $v = ($GLOBALS['__phpurs_data0_Hour'] ??= new Phpurs_Data0("Hour")); break;
      case 'Data_Interval_Duration_Day': $v = ($GLOBALS['__phpurs_data0_Day'] ??= new Phpurs_Data0("Day")); break;
      case 'Data_Interval_Duration_Week': $v = ($GLOBALS['__phpurs_data0_Week'] ??= new Phpurs_Data0("Week")); break;
      case 'Data_Interval_Duration_Month': $v = ($GLOBALS['__phpurs_data0_Month'] ??= new Phpurs_Data0("Month")); break;
      case 'Data_Interval_Duration_Year': $v = ($GLOBALS['__phpurs_data0_Year'] ??= new Phpurs_Data0("Year")); break;
      case 'Data_Interval_Duration_showDurationComponent': $v = (object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Minute":
return "Minute";
break;
case "Second":
return "Second";
break;
case "Hour":
return "Hour";
break;
case "Day":
return "Day";
break;
case "Week":
return "Week";
break;
case "Month":
return "Month";
break;
case "Year":
return "Year";
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
})()]; break;
      case 'Data_Interval_Duration_show': $v = (function() {
  $__case_0 = $dict;
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_Duration_showDuration': $v = (object)["show" => (function() {
  $__body = function($v) {
    $__global_Data_Interval_Duration_append = ($GLOBALS['Data_Interval_Duration_append'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_append'));
    $__global_Data_Interval_Duration_show = ($GLOBALS['Data_Interval_Duration_show'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_show'));
    $__case_0 = $v;
    if (true) {
$d = $__case_0;
return ($__global_Data_Interval_Duration_append)("(Duration ", ($__global_Data_Interval_Duration_append)(($__global_Data_Interval_Duration_show)($d), ")"));
} else {
throw new \Exception("Pattern match failure");
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
})()]; break;
      case 'Data_Interval_Duration_newtypeDuration': $v = (object)["Coercible0" => (function() {
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
      case 'Data_Interval_Duration_eqDurationComponent': $v = (object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Second") && (($__case_1)->tag === "Second"))) {
return true;
} else {
if (((($__case_0)->tag === "Minute") && (($__case_1)->tag === "Minute"))) {
return true;
} else {
if (((($__case_0)->tag === "Hour") && (($__case_1)->tag === "Hour"))) {
return true;
} else {
if (((($__case_0)->tag === "Day") && (($__case_1)->tag === "Day"))) {
return true;
} else {
if (((($__case_0)->tag === "Week") && (($__case_1)->tag === "Week"))) {
return true;
} else {
if (((($__case_0)->tag === "Month") && (($__case_1)->tag === "Month"))) {
return true;
} else {
if (((($__case_0)->tag === "Year") && (($__case_1)->tag === "Year"))) {
return true;
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
};
};
};
  };
  $__fn = function($x, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_Duration_eq': $v = (function() {
  $__case_0 = $dict;
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_Duration_ordDurationComponent': $v = (object)["compare" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Second") && (($__case_1)->tag === "Second"))) {
return ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
} else {
if ((($__case_0)->tag === "Second")) {
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
} else {
if ((($__case_1)->tag === "Second")) {
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
} else {
if (((($__case_0)->tag === "Minute") && (($__case_1)->tag === "Minute"))) {
return ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
} else {
if ((($__case_0)->tag === "Minute")) {
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
} else {
if ((($__case_1)->tag === "Minute")) {
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
} else {
if (((($__case_0)->tag === "Hour") && (($__case_1)->tag === "Hour"))) {
return ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
} else {
if ((($__case_0)->tag === "Hour")) {
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
} else {
if ((($__case_1)->tag === "Hour")) {
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
} else {
if (((($__case_0)->tag === "Day") && (($__case_1)->tag === "Day"))) {
return ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
} else {
if ((($__case_0)->tag === "Day")) {
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
} else {
if ((($__case_1)->tag === "Day")) {
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
} else {
if (((($__case_0)->tag === "Week") && (($__case_1)->tag === "Week"))) {
return ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
} else {
if ((($__case_0)->tag === "Week")) {
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
} else {
if ((($__case_1)->tag === "Week")) {
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
} else {
if (((($__case_0)->tag === "Month") && (($__case_1)->tag === "Month"))) {
return ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
} else {
if ((($__case_0)->tag === "Month")) {
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
} else {
if ((($__case_1)->tag === "Month")) {
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
} else {
if (((($__case_0)->tag === "Year") && (($__case_1)->tag === "Year"))) {
return ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
};
};
};
};
};
};
};
};
};
};
};
};
};
};
  };
  $__fn = function($x, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_Duration_eqDurationComponent = ($GLOBALS['Data_Interval_Duration_eqDurationComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_eqDurationComponent'));
    $__res = $__global_Data_Interval_Duration_eqDurationComponent;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_Duration_unionWith': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Interval_Duration_ordDurationComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_ordDurationComponent'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  $compare = $__case_res_0;
  return (function() use ($compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeUnionWith, $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Interval_Duration_compare': $v = (function() {
  $__case_0 = $dict;
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_Duration_semigroupDuration': $v = (object)["append" => (function() {
  $__body = function($v, $v1) {
    $__global_Data_Interval_Duration_unionWith = ($GLOBALS['Data_Interval_Duration_unionWith'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_unionWith'));
    $__global_Data_Interval_Duration_add = ($GLOBALS['Data_Interval_Duration_add'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_add'));
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($__global_Data_Interval_Duration_unionWith)($__global_Data_Interval_Duration_add, $a, $b);
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
      case 'Data_Interval_Duration_monoidDuration': $v = (object)["mempty" => ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_Duration_semigroupDuration = ($GLOBALS['Data_Interval_Duration_semigroupDuration'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_semigroupDuration'));
    $__res = $__global_Data_Interval_Duration_semigroupDuration;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_Duration_eqDuration': $v = (object)["eq" => (function() {
  $__body = function($x, $y) {
    $__global_Data_Interval_Duration_eq = ($GLOBALS['Data_Interval_Duration_eq'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_eq'));
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($__global_Data_Interval_Duration_eq)($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_Duration_ordDuration': $v = (object)["compare" => (function() {
  $__body = function($x, $y) {
    $__global_Data_Interval_Duration_compare = ($GLOBALS['Data_Interval_Duration_compare'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_compare'));
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($__global_Data_Interval_Duration_compare)($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_Duration_eqDuration = ($GLOBALS['Data_Interval_Duration_eqDuration'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_eqDuration'));
    $__res = $__global_Data_Interval_Duration_eqDuration;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_Duration_hour': $v = (($GLOBALS['Data_Interval_Duration_durationFromComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_durationFromComponent')))(($GLOBALS['__phpurs_data0_Hour'] ??= new Phpurs_Data0("Hour"))); break;
      case 'Data_Interval_Duration_millisecond': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compose;
} else {
throw new \Exception("Pattern match failure");
};
  return ($__case_res_0)((($GLOBALS['Data_Interval_Duration_durationFromComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_durationFromComponent')))(($GLOBALS['__phpurs_data0_Second'] ??= new Phpurs_Data0("Second"))), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_Duration_div = ($GLOBALS['Data_Interval_Duration_div'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_div'));
    $__res = ($__global_Data_Interval_Duration_div)($v, 1000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
})(); break;
      case 'Data_Interval_Duration_minute': $v = (($GLOBALS['Data_Interval_Duration_durationFromComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_durationFromComponent')))(($GLOBALS['__phpurs_data0_Minute'] ??= new Phpurs_Data0("Minute"))); break;
      case 'Data_Interval_Duration_month': $v = (($GLOBALS['Data_Interval_Duration_durationFromComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_durationFromComponent')))(($GLOBALS['__phpurs_data0_Month'] ??= new Phpurs_Data0("Month"))); break;
      case 'Data_Interval_Duration_second': $v = (($GLOBALS['Data_Interval_Duration_durationFromComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_durationFromComponent')))(($GLOBALS['__phpurs_data0_Second'] ??= new Phpurs_Data0("Second"))); break;
      case 'Data_Interval_Duration_week': $v = (($GLOBALS['Data_Interval_Duration_durationFromComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_durationFromComponent')))(($GLOBALS['__phpurs_data0_Week'] ??= new Phpurs_Data0("Week"))); break;
      case 'Data_Interval_Duration_year': $v = (($GLOBALS['Data_Interval_Duration_durationFromComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_durationFromComponent')))(($GLOBALS['__phpurs_data0_Year'] ??= new Phpurs_Data0("Year"))); break;
      case 'Data_Interval_Duration_day': $v = (($GLOBALS['Data_Interval_Duration_durationFromComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_durationFromComponent')))(($GLOBALS['__phpurs_data0_Day'] ??= new Phpurs_Data0("Day"))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };












// Data_Interval_Duration_Duration
function Data_Interval_Duration_Duration($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Duration';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Duration'] = __NAMESPACE__ . '\\Data_Interval_Duration_Duration';














// Data_Interval_Duration_durationFromComponent
function Data_Interval_Duration_durationFromComponent($k, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_durationFromComponent';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($k, $__fn) { return $__fn($k, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
    $__res = ($__global_Data_Map_Internal_singleton)($k, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Interval_Duration_durationFromComponent'] = __NAMESPACE__ . '\\Data_Interval_Duration_durationFromComponent';









