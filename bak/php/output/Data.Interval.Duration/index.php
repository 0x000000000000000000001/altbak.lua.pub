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
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...$merged);
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
      case 'Data_Interval_Duration_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Interval_Duration_add': $v = ($GLOBALS['Data_Semiring_numAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_numAdd')); break;
      case 'Data_Interval_Duration_div': $v = ($GLOBALS['Data_EuclideanRing_numDiv'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_numDiv')); break;
      case 'Data_Interval_Duration_Second': $v = ($GLOBALS['__phpurs_data0_Second'] ??= new Phpurs_Data0("Second")); break;
      case 'Data_Interval_Duration_Minute': $v = ($GLOBALS['__phpurs_data0_Minute'] ??= new Phpurs_Data0("Minute")); break;
      case 'Data_Interval_Duration_Hour': $v = ($GLOBALS['__phpurs_data0_Hour'] ??= new Phpurs_Data0("Hour")); break;
      case 'Data_Interval_Duration_Day': $v = ($GLOBALS['__phpurs_data0_Day'] ??= new Phpurs_Data0("Day")); break;
      case 'Data_Interval_Duration_Week': $v = ($GLOBALS['__phpurs_data0_Week'] ??= new Phpurs_Data0("Week")); break;
      case 'Data_Interval_Duration_Month': $v = ($GLOBALS['__phpurs_data0_Month'] ??= new Phpurs_Data0("Month")); break;
      case 'Data_Interval_Duration_Year': $v = ($GLOBALS['__phpurs_data0_Year'] ??= new Phpurs_Data0("Year")); break;
      case 'Data_Interval_Duration_showDurationComponent': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
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
})()]); break;
      case 'Data_Interval_Duration_show': $v = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))((($GLOBALS['Data_Map_Internal_showMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_showMap')))(($GLOBALS['Data_Interval_Duration_showDurationComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_showDurationComponent')), ($GLOBALS['Data_Show_showNumber'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showNumber')))); break;
      case 'Data_Interval_Duration_showDuration': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$d = $__case_0;
return (($GLOBALS['Data_Interval_Duration_append'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_append')))("(Duration ", (($GLOBALS['Data_Interval_Duration_append'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_append')))((($GLOBALS['Data_Interval_Duration_show'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_show')))($d), ")"));
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
})()]); break;
      case 'Data_Interval_Duration_newtypeDuration': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Interval_Duration_eqDurationComponent': $v = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() {
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
})()]); break;
      case 'Data_Interval_Duration_eq': $v = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))((($GLOBALS['Data_Map_Internal_eqMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_eqMap')))(($GLOBALS['Data_Interval_Duration_eqDurationComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_eqDurationComponent')), ($GLOBALS['Data_Eq_eqNumber'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqNumber')))); break;
      case 'Data_Interval_Duration_ordDurationComponent': $v = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Second") && (($__case_1)->tag === "Second"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "Second")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "Second")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "Minute") && (($__case_1)->tag === "Minute"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "Minute")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "Minute")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "Hour") && (($__case_1)->tag === "Hour"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "Hour")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "Hour")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "Day") && (($__case_1)->tag === "Day"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "Day")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "Day")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "Week") && (($__case_1)->tag === "Week"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "Week")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "Week")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "Month") && (($__case_1)->tag === "Month"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "Month")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "Month")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "Year") && (($__case_1)->tag === "Year"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
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
    $__res = ($GLOBALS['Data_Interval_Duration_eqDurationComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_eqDurationComponent'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Interval_Duration_unionWith': $v = (($GLOBALS['Data_Map_Internal_unionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unionWith')))(($GLOBALS['Data_Interval_Duration_ordDurationComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_ordDurationComponent'))); break;
      case 'Data_Interval_Duration_compare': $v = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))((($GLOBALS['Data_Map_Internal_ordMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_ordMap')))(($GLOBALS['Data_Interval_Duration_ordDurationComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_ordDurationComponent')), ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber')))); break;
      case 'Data_Interval_Duration_semigroupDuration': $v = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return (($GLOBALS['Data_Interval_Duration_Duration'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_Duration')))((($GLOBALS['Data_Interval_Duration_unionWith'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_unionWith')))(($GLOBALS['Data_Interval_Duration_add'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_add')), $a, $b));
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
})()]); break;
      case 'Data_Interval_Duration_monoidDuration': $v = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Data_Interval_Duration_Duration'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_Duration')))(($GLOBALS['Data_Map_Internal_empty'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_empty'))), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Interval_Duration_semigroupDuration'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_semigroupDuration'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Interval_Duration_eqDuration': $v = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return (($GLOBALS['Data_Interval_Duration_eq'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_eq')))($l, $r);
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
})()]); break;
      case 'Data_Interval_Duration_ordDuration': $v = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return (($GLOBALS['Data_Interval_Duration_compare'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_compare')))($l, $r);
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
    $__res = ($GLOBALS['Data_Interval_Duration_eqDuration'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_eqDuration'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Interval_Duration_hour': $v = (($GLOBALS['Data_Interval_Duration_durationFromComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_durationFromComponent')))(($GLOBALS['Data_Interval_Duration_Hour'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_Hour'))); break;
      case 'Data_Interval_Duration_millisecond': $v = ((function() {
  $__fn = function($f, $g = null, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($x) use ($f, $g, &$__fn) { return $__fn($f, $g, $x); };
    if ($__num === 1) return function($g, $x = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $x);
      if ($__num2 === 1) return function($x) use ($f, $g, &$__fn) { return $__fn($f, $g, $x); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($f)(($g)($x));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())((($GLOBALS['Data_Interval_Duration_durationFromComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_durationFromComponent')))(($GLOBALS['Data_Interval_Duration_Second'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_Second'))), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Interval_Duration_div'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_div')))($v, 1000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Interval_Duration_minute': $v = (($GLOBALS['Data_Interval_Duration_durationFromComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_durationFromComponent')))(($GLOBALS['Data_Interval_Duration_Minute'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_Minute'))); break;
      case 'Data_Interval_Duration_month': $v = (($GLOBALS['Data_Interval_Duration_durationFromComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_durationFromComponent')))(($GLOBALS['Data_Interval_Duration_Month'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_Month'))); break;
      case 'Data_Interval_Duration_second': $v = (($GLOBALS['Data_Interval_Duration_durationFromComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_durationFromComponent')))(($GLOBALS['Data_Interval_Duration_Second'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_Second'))); break;
      case 'Data_Interval_Duration_week': $v = (($GLOBALS['Data_Interval_Duration_durationFromComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_durationFromComponent')))(($GLOBALS['Data_Interval_Duration_Week'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_Week'))); break;
      case 'Data_Interval_Duration_year': $v = (($GLOBALS['Data_Interval_Duration_durationFromComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_durationFromComponent')))(($GLOBALS['Data_Interval_Duration_Year'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_Year'))); break;
      case 'Data_Interval_Duration_day': $v = (($GLOBALS['Data_Interval_Duration_durationFromComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_durationFromComponent')))(($GLOBALS['Data_Interval_Duration_Day'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_Day'))); break;
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
    $__res = (($GLOBALS['Data_Interval_Duration_Duration'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_Duration')))((($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton')))($k, $v));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Interval_Duration_durationFromComponent'] = __NAMESPACE__ . '\\Data_Interval_Duration_durationFromComponent';









