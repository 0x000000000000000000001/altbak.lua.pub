<?php

namespace Data\Interval\Duration\Iso;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Interval.Duration/index.php';
require_once __DIR__ . '/../Data.Interval.Duration.Iso/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.NonEmpty/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Number/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
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
      case 'Data_Interval_Duration_Iso_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Interval_Duration_Iso_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Interval_Duration_Iso_lookup': $v = (($GLOBALS['Data_Map_Internal_lookup'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_lookup')))(($GLOBALS['Data_Interval_Duration_ordDurationComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_ordDurationComponent'))); break;
      case 'Data_Interval_Duration_Iso_greaterThan': $v = (($GLOBALS['Data_Ord_greaterThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThan')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Interval_Duration_Iso_empty': $v = ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil')); break;
      case 'Data_Interval_Duration_Iso_foldMap1': $v = (($GLOBALS['Data_Interval_Duration_Iso_foldMap'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_foldMap')))(($GLOBALS['Data_List_Types_monoidList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_monoidList'))); break;
      case 'Data_Interval_Duration_Iso_greaterThanOrEq': $v = (($GLOBALS['Data_Ord_greaterThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThanOrEq')))(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      case 'Data_Interval_Duration_Iso_notEq': $v = (($GLOBALS['Data_Eq_notEq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_notEq')))(($GLOBALS['Data_Eq_eqNumber'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqNumber'))); break;
      case 'Data_Interval_Duration_Iso_greaterThan1': $v = (($GLOBALS['Data_Ord_greaterThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThan')))(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      case 'Data_Interval_Duration_Iso_unwrap': $v = (($GLOBALS['Data_Newtype_unwrap'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Interval_Duration_Iso_foldMap2': $v = (($GLOBALS['Data_Interval_Duration_Iso_foldMap'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_foldMap')))((($GLOBALS['Data_Monoid_Additive_monoidAdditive'] ?? \Data\Monoid\Additive\phpurs_eval_thunk('Data_Monoid_Additive_monoidAdditive')))(($GLOBALS['Data_Semiring_semiringNumber'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringNumber')))); break;
      case 'Data_Interval_Duration_Iso_composeFlipped': $v = (($GLOBALS['Control_Semigroupoid_composeFlipped'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeFlipped')))(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Data_Interval_Duration_Iso_not': $v = (($GLOBALS['Data_HeytingAlgebra_not'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_not')))((($GLOBALS['Data_HeytingAlgebra_heytingAlgebraFunction'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraFunction')))(($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean')))); break;
      case 'Data_Interval_Duration_Iso_fold': $v = (($GLOBALS['Data_Foldable_fold'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_fold')))(($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray')), (($GLOBALS['Data_Monoid_monoidFn'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_monoidFn')))(($GLOBALS['Data_List_Types_monoidList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_monoidList')))); break;
      case 'Data_Interval_Duration_Iso_toUnfoldable': $v = (($GLOBALS['Data_Map_Internal_toUnfoldable'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_toUnfoldable')))(($GLOBALS['Data_List_Types_unfoldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_unfoldableList'))); break;
      case 'Data_Interval_Duration_Iso_IsEmpty': $v = ($GLOBALS['__phpurs_data0_IsEmpty'] ??= new Phpurs_Data0("IsEmpty")); break;
      case 'Data_Interval_Duration_Iso_InvalidWeekComponentUsage': $v = ($GLOBALS['__phpurs_data0_InvalidWeekComponentUsage'] ??= new Phpurs_Data0("InvalidWeekComponentUsage")); break;
      case 'Data_Interval_Duration_Iso_showIsoDuration': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$d = $__case_0;
return (($GLOBALS['Data_Interval_Duration_Iso_append'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_append')))("(IsoDuration ", (($GLOBALS['Data_Interval_Duration_Iso_append'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_append')))((($GLOBALS['Data_Interval_Duration_Iso_show'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_show')))($d), ")"));
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
      case 'Data_Interval_Duration_Iso_showError': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "IsEmpty":
return "(IsEmpty)";
break;
case "InvalidWeekComponentUsage":
return "(InvalidWeekComponentUsage)";
break;
case "ContainsNegativeValue":
$c = ($__case_0)->v0;
return (($GLOBALS['Data_Interval_Duration_Iso_append'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_append')))("(ContainsNegativeValue ", (($GLOBALS['Data_Interval_Duration_Iso_append'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_append')))((($GLOBALS['Data_Interval_Duration_Iso_show1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_show1')))($c), ")"));
break;
case "InvalidFractionalUse":
$c = ($__case_0)->v0;
return (($GLOBALS['Data_Interval_Duration_Iso_append'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_append')))("(InvalidFractionalUse ", (($GLOBALS['Data_Interval_Duration_Iso_append'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_append')))((($GLOBALS['Data_Interval_Duration_Iso_show1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_show1')))($c), ")"));
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
      case 'Data_Interval_Duration_Iso_eqIsoDuration': $v = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return (($GLOBALS['Data_Interval_Duration_Iso_eq'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_eq')))($l, $r);
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
      case 'Data_Interval_Duration_Iso_ordIsoDuration': $v = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return (($GLOBALS['Data_Interval_Duration_Iso_compare'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_compare')))($l, $r);
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
    $__res = ($GLOBALS['Data_Interval_Duration_Iso_eqIsoDuration'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_eqIsoDuration'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Interval_Duration_Iso_eqError': $v = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "IsEmpty") && (($__case_1)->tag === "IsEmpty"))) {
return true;
} else {
if (((($__case_0)->tag === "InvalidWeekComponentUsage") && (($__case_1)->tag === "InvalidWeekComponentUsage"))) {
return true;
} else {
if (((($__case_0)->tag === "ContainsNegativeValue") && (($__case_1)->tag === "ContainsNegativeValue"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return (($GLOBALS['Data_Interval_Duration_Iso_eq1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_eq1')))($l, $r);
} else {
if (((($__case_0)->tag === "InvalidFractionalUse") && (($__case_1)->tag === "InvalidFractionalUse"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return (($GLOBALS['Data_Interval_Duration_Iso_eq1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_eq1')))($l, $r);
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
      case 'Data_Interval_Duration_Iso_ordError': $v = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "IsEmpty") && (($__case_1)->tag === "IsEmpty"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "IsEmpty")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "IsEmpty")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "InvalidWeekComponentUsage") && (($__case_1)->tag === "InvalidWeekComponentUsage"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "InvalidWeekComponentUsage")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "InvalidWeekComponentUsage")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "ContainsNegativeValue") && (($__case_1)->tag === "ContainsNegativeValue"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return (($GLOBALS['Data_Interval_Duration_Iso_compare1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_compare1')))($l, $r);
} else {
if ((($__case_0)->tag === "ContainsNegativeValue")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "ContainsNegativeValue")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "InvalidFractionalUse") && (($__case_1)->tag === "InvalidFractionalUse"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return (($GLOBALS['Data_Interval_Duration_Iso_compare1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_compare1')))($l, $r);
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
    $__res = ($GLOBALS['Data_Interval_Duration_Iso_eqError'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_eqError'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };



// Data_Interval_Duration_Iso_show
function Data_Interval_Duration_Iso_show($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_show';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$d = $__case_0;
return (($GLOBALS['Data_Interval_Duration_append'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_append')))("(Duration ", (($GLOBALS['Data_Interval_Duration_append'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_append')))((($GLOBALS['Data_Interval_Duration_show'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_show')))($d), ")"));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_show'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_show';

// Data_Interval_Duration_Iso_show1
function Data_Interval_Duration_Iso_show1($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_show1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
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
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_show1'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_show1';

// Data_Interval_Duration_Iso_eq
function Data_Interval_Duration_Iso_eq($x, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_eq';
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, $__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
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
    $__res = $__body($x, $y);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_eq'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_eq';

// Data_Interval_Duration_Iso_compare
function Data_Interval_Duration_Iso_compare($x, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_compare';
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, $__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
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
    $__res = $__body($x, $y);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_compare'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_compare';

// Data_Interval_Duration_Iso_eq1
function Data_Interval_Duration_Iso_eq1($x, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_eq1';
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, $__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
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
    $__res = $__body($x, $y);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_eq1'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_eq1';

// Data_Interval_Duration_Iso_compare1
function Data_Interval_Duration_Iso_compare1($x, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_compare1';
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, $__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
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
    $__res = $__body($x, $y);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_compare1'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_compare1';




// Data_Interval_Duration_Iso_pure
function Data_Interval_Duration_Iso_pure($a) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_pure';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($a, ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_pure'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_pure';


// Data_Interval_Duration_Iso_foldMap
function Data_Interval_Duration_Iso_foldMap($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_foldMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append2 = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
    $__res = (function() use ($append2, $mempty) {
  $__fn = function($f) use ($append2, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Foldable_foldl'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl')))(($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList')), (function() use ($append2, $f) {
  $__fn = function($acc) use ($append2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose')))(($append2)($acc), $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $mempty);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_foldMap'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_foldMap';











// Data_Interval_Duration_Iso_IsoDuration
function Data_Interval_Duration_Iso_IsoDuration($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_IsoDuration';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_IsoDuration'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_IsoDuration';



// Data_Interval_Duration_Iso_ContainsNegativeValue
function Data_Interval_Duration_Iso_ContainsNegativeValue($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_ContainsNegativeValue';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("ContainsNegativeValue", $value0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_ContainsNegativeValue'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_ContainsNegativeValue';

// Data_Interval_Duration_Iso_InvalidFractionalUse
function Data_Interval_Duration_Iso_InvalidFractionalUse($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_InvalidFractionalUse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("InvalidFractionalUse", $value0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_InvalidFractionalUse'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_InvalidFractionalUse';

// Data_Interval_Duration_Iso_unIsoDuration
function Data_Interval_Duration_Iso_unIsoDuration($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_unIsoDuration';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return $a;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_unIsoDuration'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_unIsoDuration';



// Data_Interval_Duration_Iso_prettyError
function Data_Interval_Duration_Iso_prettyError($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_prettyError';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "IsEmpty":
return "Duration is empty (has no components)";
break;
case "InvalidWeekComponentUsage":
return "Week component of Duration is used with other components";
break;
case "ContainsNegativeValue":
$c = ($__case_0)->v0;
return (($GLOBALS['Data_Interval_Duration_Iso_append'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_append')))("Component `", (($GLOBALS['Data_Interval_Duration_Iso_append'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_append')))((($GLOBALS['Data_Interval_Duration_Iso_show1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_show1')))($c), "` contains negative value"));
break;
case "InvalidFractionalUse":
$c = ($__case_0)->v0;
return (($GLOBALS['Data_Interval_Duration_Iso_append'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_append')))("Invalid usage of Fractional value at component `", (($GLOBALS['Data_Interval_Duration_Iso_append'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_append')))((($GLOBALS['Data_Interval_Duration_Iso_show1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_show1')))($c), "`"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_prettyError'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_prettyError';





// Data_Interval_Duration_Iso_checkWeekUsage
function Data_Interval_Duration_Iso_checkWeekUsage($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_checkWeekUsage';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$asMap = ($__case_0)->asMap;
$__case_0 = (($GLOBALS['Data_Interval_Duration_Iso_conj'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_conj')))((($GLOBALS['Data_Maybe_isJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isJust')))((($GLOBALS['Data_Interval_Duration_Iso_lookup'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_lookup')))(($GLOBALS['Data_Interval_Duration_Week'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_Week')), $asMap)), (($GLOBALS['Data_Interval_Duration_Iso_greaterThan'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_greaterThan')))((($GLOBALS['Data_Map_Internal_size'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_size')))($asMap), 1));
if (($__case_0 === true)) {
return (($GLOBALS['Data_Interval_Duration_Iso_pure'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_pure')))(($GLOBALS['Data_Interval_Duration_Iso_InvalidWeekComponentUsage'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_InvalidWeekComponentUsage')));
} else {
if (true) {
return ($GLOBALS['Data_Interval_Duration_Iso_empty'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_empty'));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_checkWeekUsage'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_checkWeekUsage';

// Data_Interval_Duration_Iso_checkNegativeValues
function Data_Interval_Duration_Iso_checkNegativeValues($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_checkNegativeValues';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$asList = ($__case_0)->asList;
return (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($GLOBALS['Data_Interval_Duration_Iso_foldMap1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_foldMap1')), $asList, (function() {
  $__body = function($v1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Tuple":
$c = ($__case_0)->v0;
$num = ($__case_0)->v1;
$__case_0 = (($GLOBALS['Data_Interval_Duration_Iso_greaterThanOrEq'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_greaterThanOrEq')))($num, 0.0);
if (($__case_0 === true)) {
return ($GLOBALS['Data_Interval_Duration_Iso_empty'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_empty'));
} else {
if (true) {
return (($GLOBALS['Data_Interval_Duration_Iso_pure'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_pure')))((($GLOBALS['Data_Interval_Duration_Iso_ContainsNegativeValue'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_ContainsNegativeValue')))($c));
} else {
throw new \Exception("Pattern match failure");
};
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($__body, &$__fn) {
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
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_checkNegativeValues'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_checkNegativeValues';

// Data_Interval_Duration_Iso_checkFractionalUse
function Data_Interval_Duration_Iso_checkFractionalUse($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_checkFractionalUse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$asList = ($__case_0)->asList;
$isFractional = (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Interval_Duration_Iso_notEq'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_notEq')))((($GLOBALS['Data_Number_floor'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_floor')))($a), $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$checkRest = (function() {
  $__fn = function($rest) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Interval_Duration_Iso_greaterThan1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_greaterThan1')))((($GLOBALS['Data_Interval_Duration_Iso_unwrap'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_unwrap')))((($GLOBALS['Data_Interval_Duration_Iso_foldMap2'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_foldMap2')))((($GLOBALS['Data_Interval_Duration_Iso_composeFlipped'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_composeFlipped')))(($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd')), (($GLOBALS['Data_Interval_Duration_Iso_composeFlipped'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_composeFlipped')))(($GLOBALS['Data_Number_abs'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_abs')), ($GLOBALS['Data_Monoid_Additive_Additive'] ?? \Data\Monoid\Additive\phpurs_eval_thunk('Data_Monoid_Additive_Additive')))), $rest)), 0.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$v1 = ((function() {
  $__fn = function($v2) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v2)->rest;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())((($GLOBALS['Data_List_span'] ?? \Data\List\phpurs_eval_thunk('Data_List_span')))((($GLOBALS['Data_Interval_Duration_Iso_composeFlipped'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_composeFlipped')))(($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd')), (($GLOBALS['Data_Interval_Duration_Iso_not'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_not')))($isFractional)), $asList));
$__case_0 = $v1;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v0)->tag === "Tuple"))) {
$c = (($__case_0)->v0)->v0;
$rest = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return ($GLOBALS['Data_Interval_Duration_Iso_empty'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_empty'));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_checkFractionalUse'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_checkFractionalUse';

// Data_Interval_Duration_Iso_checkEmptiness
function Data_Interval_Duration_Iso_checkEmptiness($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_checkEmptiness';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$asList = ($__case_0)->asList;
$__case_0 = (($GLOBALS['Data_List_null'] ?? \Data\List\phpurs_eval_thunk('Data_List_null')))($asList);
if (($__case_0 === true)) {
return (($GLOBALS['Data_Interval_Duration_Iso_pure'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_pure')))(($GLOBALS['Data_Interval_Duration_Iso_IsEmpty'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_IsEmpty')));
} else {
if (true) {
return ($GLOBALS['Data_Interval_Duration_Iso_empty'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_empty'));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_checkEmptiness'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_checkEmptiness';

// Data_Interval_Duration_Iso_checkValidIsoDuration
function Data_Interval_Duration_Iso_checkValidIsoDuration($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_checkValidIsoDuration';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$asMap = $__case_0;
$check = (($GLOBALS['Data_Interval_Duration_Iso_fold'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_fold')))([($GLOBALS['Data_Interval_Duration_Iso_checkWeekUsage'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_checkWeekUsage')), ($GLOBALS['Data_Interval_Duration_Iso_checkEmptiness'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_checkEmptiness')), ($GLOBALS['Data_Interval_Duration_Iso_checkFractionalUse'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_checkFractionalUse')), ($GLOBALS['Data_Interval_Duration_Iso_checkNegativeValues'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_checkNegativeValues'))]);
$asList = (($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse')))((($GLOBALS['Data_Interval_Duration_Iso_toUnfoldable'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_toUnfoldable')))($asMap));
return ($check)((object)["asList" => $asList, "asMap" => $asMap]);
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_checkValidIsoDuration'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_checkValidIsoDuration';

// Data_Interval_Duration_Iso_mkIsoDuration
function Data_Interval_Duration_Iso_mkIsoDuration($d) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_mkIsoDuration';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($d) {
    $v = (($GLOBALS['Data_List_NonEmpty_fromList'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_fromList')))((($GLOBALS['Data_Interval_Duration_Iso_checkValidIsoDuration'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_checkValidIsoDuration')))($d));
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Just":
$errs = ($__case_0)->v0;
return (($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')))($errs);
break;
case "Nothing":
return (($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')))((($GLOBALS['Data_Interval_Duration_Iso_IsoDuration'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_IsoDuration')))($d));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($d);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_mkIsoDuration'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_mkIsoDuration';

