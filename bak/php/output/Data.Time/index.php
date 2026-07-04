<?php

namespace Data\Time;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Int/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Number/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Time/index.php';
require_once __DIR__ . '/../Data.Time.Component/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
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
      case 'Data_Time_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Time_div': $v = ($GLOBALS['Data_EuclideanRing_numDiv'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_numDiv')); break;
      case 'Data_Time_sub': $v = ($GLOBALS['Data_Ring_numSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_numSub')); break;
      case 'Data_Time_mul': $v = ($GLOBALS['Data_Semiring_numMul'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_numMul')); break;
      case 'Data_Time_add': $v = ($GLOBALS['Data_Semiring_numAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_numAdd')); break;
      case 'Data_Time_fromJust': $v = (($GLOBALS['Data_Maybe_fromJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromJust')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Time_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Time_eq': $v = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))(($GLOBALS['Data_Time_Component_eqHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_eqHour'))); break;
      case 'Data_Time_eq1': $v = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))(($GLOBALS['Data_Time_Component_eqMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_eqMinute'))); break;
      case 'Data_Time_eq2': $v = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))(($GLOBALS['Data_Time_Component_eqSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_eqSecond'))); break;
      case 'Data_Time_eq3': $v = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))(($GLOBALS['Data_Time_Component_eqMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_eqMillisecond'))); break;
      case 'Data_Time_compare': $v = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))(($GLOBALS['Data_Time_Component_ordHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_ordHour'))); break;
      case 'Data_Time_compare1': $v = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))(($GLOBALS['Data_Time_Component_ordMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_ordMinute'))); break;
      case 'Data_Time_compare2': $v = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))(($GLOBALS['Data_Time_Component_ordSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_ordSecond'))); break;
      case 'Data_Time_compare3': $v = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))(($GLOBALS['Data_Time_Component_ordMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_ordMillisecond'))); break;
      case 'Data_Time_negateDuration': $v = (($GLOBALS['Data_Time_Duration_negateDuration'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_negateDuration')))(($GLOBALS['Data_Time_Duration_durationMilliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_durationMilliseconds'))); break;
      case 'Data_Time_unwrap': $v = (($GLOBALS['Data_Newtype_unwrap'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Time_fromDuration': $v = (($GLOBALS['Data_Time_Duration_over'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_over')))(($GLOBALS['Data_Time_Duration_Days'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Days')), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Time_Duration_mul'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_mul')))($v, 86400000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Time_greaterThan': $v = (($GLOBALS['Data_Ord_greaterThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThan')))(($GLOBALS['Data_Time_Duration_ordMilliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_ordMilliseconds'))); break;
      case 'Data_Time_lessThan': $v = (($GLOBALS['Data_Ord_lessThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThan')))(($GLOBALS['Data_Time_Duration_ordMilliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_ordMilliseconds'))); break;
      case 'Data_Time_negate': $v = (($GLOBALS['Data_Ring_negate'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_negate')))(($GLOBALS['Data_Ring_ringNumber'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringNumber'))); break;
      case 'Data_Time_showTime': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Time":
$h = ($__case_0)->v0;
$m = ($__case_0)->v1;
$s = ($__case_0)->v2;
$ms = ($__case_0)->v3;
return (($GLOBALS['Data_Time_append'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_append')))("(Time ", (($GLOBALS['Data_Time_append'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_append')))((($GLOBALS['Data_Time_show'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_show')))($h), (($GLOBALS['Data_Time_append'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_append')))(" ", (($GLOBALS['Data_Time_append'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_append')))((($GLOBALS['Data_Time_show1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_show1')))($m), (($GLOBALS['Data_Time_append'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_append')))(" ", (($GLOBALS['Data_Time_append'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_append')))((($GLOBALS['Data_Time_show2'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_show2')))($s), (($GLOBALS['Data_Time_append'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_append')))(" ", (($GLOBALS['Data_Time_append'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_append')))((($GLOBALS['Data_Time_show3'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_show3')))($ms), ")"))))))));
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
      case 'Data_Time_eqTime': $v = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Time") && (($__case_1)->tag === "Time"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$l2 = ($__case_0)->v2;
$l3 = ($__case_0)->v3;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$r2 = ($__case_1)->v2;
$r3 = ($__case_1)->v3;
return (($GLOBALS['Data_Time_conj'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_conj')))((($GLOBALS['Data_Time_conj'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_conj')))((($GLOBALS['Data_Time_conj'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_conj')))((($GLOBALS['Data_Time_eq'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_eq')))($l, $r), (($GLOBALS['Data_Time_eq1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_eq1')))($l1, $r1)), (($GLOBALS['Data_Time_eq2'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_eq2')))($l2, $r2)), (($GLOBALS['Data_Time_eq3'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_eq3')))($l3, $r3));
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
      case 'Data_Time_ordTime': $v = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Time") && (($__case_1)->tag === "Time"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$l2 = ($__case_0)->v2;
$l3 = ($__case_0)->v3;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$r2 = ($__case_1)->v2;
$r3 = ($__case_1)->v3;
$v = (($GLOBALS['Data_Time_compare'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_compare')))($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_0)->tag === "GT")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (true) {
$v1 = (($GLOBALS['Data_Time_compare1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_compare1')))($l1, $r1);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_0)->tag === "GT")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (true) {
$v2 = (($GLOBALS['Data_Time_compare2'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_compare2')))($l2, $r2);
$__case_0 = $v2;
if ((($__case_0)->tag === "LT")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_0)->tag === "GT")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (true) {
return (($GLOBALS['Data_Time_compare3'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_compare3')))($l3, $r3);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
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
    $__res = ($GLOBALS['Data_Time_eqTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_eqTime'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Time_boundedTime': $v = (($GLOBALS['Data_Bounded_Bounded__dollar__Dict'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_Bounded__dollar__Dict')))((object)["bottom" => (($GLOBALS['Data_Time_Time'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_Time')))((($GLOBALS['Data_Time_Component_Hour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_Hour')))(0), (($GLOBALS['Data_Time_Component_Minute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_Minute')))(0), (($GLOBALS['Data_Time_Component_Second'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_Second')))(0), (($GLOBALS['Data_Time_Component_Millisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_Millisecond')))(0)), "top" => (($GLOBALS['Data_Time_Time'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_Time')))((($GLOBALS['Data_Time_Component_Hour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_Hour')))(23), (($GLOBALS['Data_Time_Component_Minute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_Minute')))(59), (($GLOBALS['Data_Time_Component_Second'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_Second')))(59), (($GLOBALS['Data_Time_Component_Millisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_Millisecond')))(999)), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Time_ordTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_ordTime'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Time_maxTime': $v = (($GLOBALS['Data_Time_timeToMillis'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_timeToMillis')))((($GLOBALS['Data_Time_Time'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_Time')))((($GLOBALS['Data_Bounded_top'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_top')))(($GLOBALS['Data_Time_Component_boundedHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedHour'))), (($GLOBALS['Data_Bounded_top'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_top')))(($GLOBALS['Data_Time_Component_boundedMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMinute'))), (($GLOBALS['Data_Bounded_top'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_top')))(($GLOBALS['Data_Time_Component_boundedSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedSecond'))), (($GLOBALS['Data_Bounded_top'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_top')))(($GLOBALS['Data_Time_Component_boundedMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMillisecond'))))); break;
      case 'Data_Time_minTime': $v = (($GLOBALS['Data_Time_timeToMillis'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_timeToMillis')))((($GLOBALS['Data_Time_Time'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_Time')))((($GLOBALS['Data_Bounded_bottom'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottom')))(($GLOBALS['Data_Time_Component_boundedHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedHour'))), (($GLOBALS['Data_Bounded_bottom'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottom')))(($GLOBALS['Data_Time_Component_boundedMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMinute'))), (($GLOBALS['Data_Bounded_bottom'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottom')))(($GLOBALS['Data_Time_Component_boundedSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedSecond'))), (($GLOBALS['Data_Bounded_bottom'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottom')))(($GLOBALS['Data_Time_Component_boundedMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMillisecond'))))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };



// Data_Time_show
function Data_Time_show($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_show';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$h = $__case_0;
return (($GLOBALS['Data_Time_Component_append'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_append')))("(Hour ", (($GLOBALS['Data_Time_Component_append'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_append')))((($GLOBALS['Data_Time_Component_show'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_show')))($h), ")"));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_show'] = __NAMESPACE__ . '\\Data_Time_show';

// Data_Time_show1
function Data_Time_show1($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_show1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return (($GLOBALS['Data_Time_Component_append'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_append')))("(Minute ", (($GLOBALS['Data_Time_Component_append'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_append')))((($GLOBALS['Data_Time_Component_show'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_show')))($m), ")"));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_show1'] = __NAMESPACE__ . '\\Data_Time_show1';

// Data_Time_show2
function Data_Time_show2($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_show2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return (($GLOBALS['Data_Time_Component_append'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_append')))("(Second ", (($GLOBALS['Data_Time_Component_append'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_append')))((($GLOBALS['Data_Time_Component_show'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_show')))($m), ")"));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_show2'] = __NAMESPACE__ . '\\Data_Time_show2';

// Data_Time_show3
function Data_Time_show3($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_show3';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return (($GLOBALS['Data_Time_Component_append'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_append')))("(Millisecond ", (($GLOBALS['Data_Time_Component_append'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_append')))((($GLOBALS['Data_Time_Component_show'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_show')))($m), ")"));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_show3'] = __NAMESPACE__ . '\\Data_Time_show3';






// Data_Time_apply
function Data_Time_apply($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_apply';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_0)->tag) {
case "Just":
$fn = ($__case_0)->v0;
$x = $__case_1;
return (($GLOBALS['Data_Maybe_map'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_map')))($fn, $x);
break;
case "Nothing":
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v, $v1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Time_apply'] = __NAMESPACE__ . '\\Data_Time_apply';

// Data_Time_map
function Data_Time_map($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_map';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Just")) {
$fn = $__case_0;
$x = ($__case_1)->v0;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($fn)($x));
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
    $__res = $__body($v, $v1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Time_map'] = __NAMESPACE__ . '\\Data_Time_map';

// Data_Time_toEnum
function Data_Time_toEnum($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_toEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($n) {
    $__case_0 = $n;
    if (true) {
$n1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($n);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_toEnum'] = __NAMESPACE__ . '\\Data_Time_toEnum';

// Data_Time_toEnum1
function Data_Time_toEnum1($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_toEnum1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($n) {
    $__case_0 = $n;
    if (true) {
$n1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($n);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_toEnum1'] = __NAMESPACE__ . '\\Data_Time_toEnum1';

// Data_Time_toEnum2
function Data_Time_toEnum2($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_toEnum2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($n) {
    $__case_0 = $n;
    if (true) {
$n1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($n);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_toEnum2'] = __NAMESPACE__ . '\\Data_Time_toEnum2';

// Data_Time_toEnum3
function Data_Time_toEnum3($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_toEnum3';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($n) {
    $__case_0 = $n;
    if (true) {
$n1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($n);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_toEnum3'] = __NAMESPACE__ . '\\Data_Time_toEnum3';

// Data_Time_fromEnum
function Data_Time_fromEnum($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_fromEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return $n;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_fromEnum'] = __NAMESPACE__ . '\\Data_Time_fromEnum';

// Data_Time_fromEnum1
function Data_Time_fromEnum1($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_fromEnum1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return $n;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_fromEnum1'] = __NAMESPACE__ . '\\Data_Time_fromEnum1';

// Data_Time_fromEnum2
function Data_Time_fromEnum2($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_fromEnum2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return $n;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_fromEnum2'] = __NAMESPACE__ . '\\Data_Time_fromEnum2';

// Data_Time_fromEnum3
function Data_Time_fromEnum3($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_fromEnum3';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return $n;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_fromEnum3'] = __NAMESPACE__ . '\\Data_Time_fromEnum3';










// Data_Time_append1
function Data_Time_append1($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_append1';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return (($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds')))((($GLOBALS['Data_Time_Duration_add'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_add')))($x, $y));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v, $v1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Time_append1'] = __NAMESPACE__ . '\\Data_Time_append1';







// Data_Time_append2
function Data_Time_append2($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_append2';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return (($GLOBALS['Data_Time_Duration_Days'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Days')))((($GLOBALS['Data_Time_Duration_add'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_add')))($x, $y));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v, $v1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Time_append2'] = __NAMESPACE__ . '\\Data_Time_append2';

// Data_Time_Time
function Data_Time_Time($value0, $value1 = null, $value2 = null, $value3 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Time';
  if ($__num < 4) {
    if ($__num === 3) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
    if ($__num === 2) return function($value2, $value3 = null) use ($value0, $value1, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2, $value3);
      if ($__num2 === 1) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
      return phpurs_curry_fallback($__fn, [$value0, $value1], 4);
    };
    if ($__num === 1) return function($value1, $value2 = null, $value3 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($value0, $value1, $value2, $value3);
      if ($__num2 === 2) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
      if ($__num2 === 1) return function($value2, $value3 = null) use ($value0, $value1, $__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($value0, $value1, $value2, $value3);
        if ($__num3 === 1) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
        return phpurs_curry_fallback($__fn, [$value0, $value1], 4);
      };
      return phpurs_curry_fallback($__fn, [$value0], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = new Phpurs_Data4("Time", $value0, $value1, $value2, $value3);
    return 4 < $__num ? $__res(...array_slice(func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_Time_Time'] = __NAMESPACE__ . '\\Data_Time_Time';


// Data_Time_setSecond
function Data_Time_setSecond($s, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_setSecond';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($s, $__fn) { return $__fn($s, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($s, $v) {
    $__case_0 = $s;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Time":
$s1 = $__case_0;
$h = ($__case_1)->v0;
$m = ($__case_1)->v1;
$ms = ($__case_1)->v3;
return (($GLOBALS['Data_Time_Time'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_Time')))($h, $m, $s1, $ms);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($s, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Time_setSecond'] = __NAMESPACE__ . '\\Data_Time_setSecond';

// Data_Time_setMinute
function Data_Time_setMinute($m, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_setMinute';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($m, $__fn) { return $__fn($m, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($m, $v) {
    $__case_0 = $m;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Time":
$m1 = $__case_0;
$h = ($__case_1)->v0;
$s = ($__case_1)->v2;
$ms = ($__case_1)->v3;
return (($GLOBALS['Data_Time_Time'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_Time')))($h, $m1, $s, $ms);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($m, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Time_setMinute'] = __NAMESPACE__ . '\\Data_Time_setMinute';

// Data_Time_setMillisecond
function Data_Time_setMillisecond($ms, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_setMillisecond';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($ms, $__fn) { return $__fn($ms, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($ms, $v) {
    $__case_0 = $ms;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Time":
$ms1 = $__case_0;
$h = ($__case_1)->v0;
$m = ($__case_1)->v1;
$s = ($__case_1)->v2;
return (($GLOBALS['Data_Time_Time'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_Time')))($h, $m, $s, $ms1);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($ms, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Time_setMillisecond'] = __NAMESPACE__ . '\\Data_Time_setMillisecond';

// Data_Time_setHour
function Data_Time_setHour($h, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_setHour';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($h, $__fn) { return $__fn($h, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($h, $v) {
    $__case_0 = $h;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Time":
$h1 = $__case_0;
$m = ($__case_1)->v1;
$s = ($__case_1)->v2;
$ms = ($__case_1)->v3;
return (($GLOBALS['Data_Time_Time'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_Time')))($h1, $m, $s, $ms);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($h, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Time_setHour'] = __NAMESPACE__ . '\\Data_Time_setHour';

// Data_Time_second
function Data_Time_second($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_second';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Time":
$s = ($__case_0)->v2;
return $s;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_second'] = __NAMESPACE__ . '\\Data_Time_second';

// Data_Time_minute
function Data_Time_minute($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_minute';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Time":
$m = ($__case_0)->v1;
return $m;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_minute'] = __NAMESPACE__ . '\\Data_Time_minute';

// Data_Time_millisecond
function Data_Time_millisecond($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_millisecond';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Time":
$ms = ($__case_0)->v3;
return $ms;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_millisecond'] = __NAMESPACE__ . '\\Data_Time_millisecond';

// Data_Time_millisToTime
function Data_Time_millisToTime($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_millisToTime';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$ms__prime__ = $__case_0;
$secondLength = 1000.0;
$minuteLength = 60000.0;
$hourLength = 3600000.0;
$hours = (($GLOBALS['Data_Number_floor'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_floor')))((($GLOBALS['Data_Time_div'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_div')))($ms__prime__, $hourLength));
$minutes = (($GLOBALS['Data_Number_floor'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_floor')))((($GLOBALS['Data_Time_div'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_div')))((($GLOBALS['Data_Time_sub'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_sub')))($ms__prime__, (($GLOBALS['Data_Time_mul'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_mul')))($hours, $hourLength)), $minuteLength));
$seconds = (($GLOBALS['Data_Number_floor'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_floor')))((($GLOBALS['Data_Time_div'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_div')))((($GLOBALS['Data_Time_sub'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_sub')))($ms__prime__, (($GLOBALS['Data_Time_add'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_add')))((($GLOBALS['Data_Time_mul'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_mul')))($hours, $hourLength), (($GLOBALS['Data_Time_mul'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_mul')))($minutes, $minuteLength))), $secondLength));
$milliseconds = (($GLOBALS['Data_Time_sub'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_sub')))($ms__prime__, (($GLOBALS['Data_Time_add'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_add')))((($GLOBALS['Data_Time_add'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_add')))((($GLOBALS['Data_Time_mul'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_mul')))($hours, $hourLength), (($GLOBALS['Data_Time_mul'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_mul')))($minutes, $minuteLength)), (($GLOBALS['Data_Time_mul'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_mul')))($seconds, $secondLength)));
return (($GLOBALS['Partial_Unsafe_unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafePartial')))((function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Time_fromJust'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_fromJust'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Time_apply'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_apply')))((($GLOBALS['Data_Time_apply'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_apply')))((($GLOBALS['Data_Time_apply'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_apply')))((($GLOBALS['Data_Time_map'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_map')))(($GLOBALS['Data_Time_Time'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_Time')), (($GLOBALS['Data_Time_toEnum'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_toEnum')))((($GLOBALS['Data_Int_floor'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_floor')))($hours))), (($GLOBALS['Data_Time_toEnum1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_toEnum1')))((($GLOBALS['Data_Int_floor'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_floor')))($minutes))), (($GLOBALS['Data_Time_toEnum2'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_toEnum2')))((($GLOBALS['Data_Int_floor'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_floor')))($seconds))), (($GLOBALS['Data_Time_toEnum3'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_toEnum3')))((($GLOBALS['Data_Int_floor'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_floor')))($milliseconds))));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_millisToTime'] = __NAMESPACE__ . '\\Data_Time_millisToTime';

// Data_Time_hour
function Data_Time_hour($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_hour';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Time":
$h = ($__case_0)->v0;
return $h;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_hour'] = __NAMESPACE__ . '\\Data_Time_hour';

// Data_Time_timeToMillis
function Data_Time_timeToMillis($t) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_timeToMillis';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds')))((($GLOBALS['Data_Time_add'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_add')))((($GLOBALS['Data_Time_add'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_add')))((($GLOBALS['Data_Time_add'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_add')))((($GLOBALS['Data_Time_mul'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_mul')))(3600000.0, (($GLOBALS['Data_Int_toNumber'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_toNumber')))((($GLOBALS['Data_Time_fromEnum'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_fromEnum')))((($GLOBALS['Data_Time_hour'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_hour')))($t)))), (($GLOBALS['Data_Time_mul'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_mul')))(60000.0, (($GLOBALS['Data_Int_toNumber'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_toNumber')))((($GLOBALS['Data_Time_fromEnum1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_fromEnum1')))((($GLOBALS['Data_Time_minute'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_minute')))($t))))), (($GLOBALS['Data_Time_mul'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_mul')))(1000.0, (($GLOBALS['Data_Int_toNumber'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_toNumber')))((($GLOBALS['Data_Time_fromEnum2'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_fromEnum2')))((($GLOBALS['Data_Time_second'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_second')))($t))))), (($GLOBALS['Data_Int_toNumber'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_toNumber')))((($GLOBALS['Data_Time_fromEnum3'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_fromEnum3')))((($GLOBALS['Data_Time_millisecond'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_millisecond')))($t)))));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_timeToMillis'] = __NAMESPACE__ . '\\Data_Time_timeToMillis';



// Data_Time_diff
function Data_Time_diff($dictDuration) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_diff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$toDuration = (($GLOBALS['Data_Time_Duration_toDuration'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_toDuration')))($dictDuration);
    $__res = (function() use ($toDuration) {
  $__fn = function($t1, $t2 = null) use ($toDuration, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t2) use ($t1, &$__fn) { return $__fn($t1, $t2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($toDuration)((($GLOBALS['Data_Time_append1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_append1')))((($GLOBALS['Data_Time_timeToMillis'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_timeToMillis')))($t1), (($GLOBALS['Data_Time_negateDuration'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_negateDuration')))((($GLOBALS['Data_Time_timeToMillis'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_timeToMillis')))($t2))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_diff'] = __NAMESPACE__ . '\\Data_Time_diff';




// Data_Time_adjust
function Data_Time_adjust($dictDuration) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_adjust';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$fromDuration1 = (($GLOBALS['Data_Time_Duration_fromDuration'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_fromDuration')))($dictDuration);
    $__res = (function() use ($fromDuration1) {
  $__fn = function($d, $t = null) use ($fromDuration1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($d, &$__fn) { return $__fn($d, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$tLength = (($GLOBALS['Data_Time_timeToMillis'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_timeToMillis')))($t);
$dayLength = 86400000.0;
$d__prime__ = ($fromDuration1)($d);
$wholeDays = (($GLOBALS['Data_Time_Duration_Days'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Days')))((($GLOBALS['Data_Number_floor'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_floor')))((($GLOBALS['Data_Time_div'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_div')))((($GLOBALS['Data_Time_unwrap'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_unwrap')))($d__prime__), $dayLength)));
$msAdjust = (($GLOBALS['Data_Time_append1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_append1')))($d__prime__, (($GLOBALS['Data_Time_negateDuration'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_negateDuration')))((($GLOBALS['Data_Time_fromDuration'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_fromDuration')))($wholeDays)));
$msAdjusted = (($GLOBALS['Data_Time_append1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_append1')))($tLength, $msAdjust);
$__case_0 = (($GLOBALS['Data_Time_greaterThan'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_greaterThan')))($msAdjusted, ($GLOBALS['Data_Time_maxTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_maxTime')));
$__case_res_0 = null;
if (($__case_0 === true)) {
$__case_res_0 = 1.0;
} else {
if (true) {
$__case_0 = (($GLOBALS['Data_Time_lessThan'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_lessThan')))($msAdjusted, ($GLOBALS['Data_Time_minTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_minTime')));
$__case_res_1 = null;
if (($__case_0 === true)) {
$__case_res_1 = (($GLOBALS['Data_Time_negate'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_negate')))(1.0);
} else {
if (true) {
$__case_res_1 = 0.0;
} else {
throw new \Exception("Pattern match failure");
};
};
$__case_res_0 = $__case_res_1;
} else {
throw new \Exception("Pattern match failure");
};
};
$wrap = $__case_res_0;
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))((($GLOBALS['Data_Time_append2'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_append2')))($wholeDays, (($GLOBALS['Data_Time_Duration_Days'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Days')))($wrap)), (($GLOBALS['Data_Time_millisToTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_millisToTime')))((($GLOBALS['Data_Time_append1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_append1')))($msAdjusted, (($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds')))((($GLOBALS['Data_Time_mul'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_mul')))($dayLength, (($GLOBALS['Data_Time_negate'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_negate')))($wrap))))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_adjust'] = __NAMESPACE__ . '\\Data_Time_adjust';

