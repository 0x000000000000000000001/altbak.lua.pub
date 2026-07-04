<?php

namespace Data\Date;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Date/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Int/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
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
      case 'Data_Date_eq': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Date_fromJust': $v = (($GLOBALS['Data_Maybe_fromJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromJust')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Date_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Date_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Date_mod': $v = ($GLOBALS['Data_EuclideanRing_intMod'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_intMod')); break;
      case 'Data_Date_disj': $v = ($GLOBALS['Data_HeytingAlgebra_boolDisj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolDisj')); break;
      case 'Data_Date_not': $v = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot')); break;
      case 'Data_Date_eq1': $v = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))(($GLOBALS['Data_Date_Component_eqYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_eqYear'))); break;
      case 'Data_Date_eq3': $v = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))(($GLOBALS['Data_Date_Component_eqDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_eqDay'))); break;
      case 'Data_Date_compare': $v = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))(($GLOBALS['Data_Date_Component_ordYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_ordYear'))); break;
      case 'Data_Date_compare2': $v = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))(($GLOBALS['Data_Date_Component_ordDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_ordDay'))); break;
      case 'Data_Date_succ': $v = (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((($GLOBALS['Data_Enum_toEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toEnum')))(($GLOBALS['Data_Date_Component_boundedEnumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumMonth'))), (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Date_Component_add'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_add')))($v, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Enum_fromEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_fromEnum')))(($GLOBALS['Data_Date_Component_boundedEnumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumMonth'))))); break;
      case 'Data_Date_succ1': $v = (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((($GLOBALS['Data_Enum_toEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toEnum')))(($GLOBALS['Data_Date_Component_boundedEnumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumDay'))), (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Date_Component_add'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_add')))($v, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Enum_fromEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_fromEnum')))(($GLOBALS['Data_Date_Component_boundedEnumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumDay'))))); break;
      case 'Data_Date_greaterThan': $v = (($GLOBALS['Data_Ord_greaterThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThan')))((($GLOBALS['Data_Maybe_ordMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_ordMaybe')))(($GLOBALS['Data_Date_Component_ordDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_ordDay')))); break;
      case 'Data_Date_succ2': $v = (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((($GLOBALS['Data_Enum_toEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toEnum')))(($GLOBALS['Data_Date_Component_boundedEnumYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumYear'))), (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Date_Component_add'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_add')))($v, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Enum_fromEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_fromEnum')))(($GLOBALS['Data_Date_Component_boundedEnumYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumYear'))))); break;
      case 'Data_Date_pure': $v = ($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')); break;
      case 'Data_Date_pred': $v = (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((($GLOBALS['Data_Enum_toEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toEnum')))(($GLOBALS['Data_Date_Component_boundedEnumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumMonth'))), (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Date_Component_sub'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_sub')))($v, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Enum_fromEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_fromEnum')))(($GLOBALS['Data_Date_Component_boundedEnumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumMonth'))))); break;
      case 'Data_Date_pred1': $v = (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((($GLOBALS['Data_Enum_toEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toEnum')))(($GLOBALS['Data_Date_Component_boundedEnumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumDay'))), (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Date_Component_sub'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_sub')))($v, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Enum_fromEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_fromEnum')))(($GLOBALS['Data_Date_Component_boundedEnumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumDay'))))); break;
      case 'Data_Date_pred2': $v = (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((($GLOBALS['Data_Enum_toEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toEnum')))(($GLOBALS['Data_Date_Component_boundedEnumYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumYear'))), (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Date_Component_sub'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_sub')))($v, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Enum_fromEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_fromEnum')))(($GLOBALS['Data_Date_Component_boundedEnumYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumYear'))))); break;
      case 'Data_Date_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_Date_lessThan': $v = (($GLOBALS['Data_Ord_lessThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThan')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Date_greaterThan1': $v = (($GLOBALS['Data_Ord_greaterThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThan')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Date_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_Date_bindFlipped': $v = (($GLOBALS['Control_Bind_bindFlipped'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bindFlipped')))(($GLOBALS['Data_Maybe_bindMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_bindMaybe'))); break;
      case 'Data_Date_weekday': $v = (($GLOBALS['Partial_Unsafe_unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafePartial')))((function() {
  $__body = function($__dollar____unused, $v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Date":
$y = ($__case_0)->v0;
$m = ($__case_0)->v1;
$d = ($__case_0)->v2;
$n = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Date_calcWeekday'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_calcWeekday')), $y, (($GLOBALS['Data_Date_fromEnum'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromEnum')))($m), $d);
$__case_0 = (($GLOBALS['Data_Date_eq'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eq')))($n, 0);
if (($__case_0 === true)) {
return (($GLOBALS['Data_Date_fromJust'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromJust')))((($GLOBALS['Data_Date_toEnum'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_toEnum')))(7));
} else {
if (true) {
return (($GLOBALS['Data_Date_fromJust'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromJust')))((($GLOBALS['Data_Date_toEnum'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_toEnum')))($n));
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
  $__fn = function($__dollar____unused, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($__dollar____unused, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Date_showDate': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Date":
$y = ($__case_0)->v0;
$m = ($__case_0)->v1;
$d = ($__case_0)->v2;
return (($GLOBALS['Data_Date_append'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_append')))("(Date ", (($GLOBALS['Data_Date_append'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_append')))((($GLOBALS['Data_Date_show'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_show')))($y), (($GLOBALS['Data_Date_append'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_append')))(" ", (($GLOBALS['Data_Date_append'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_append')))((($GLOBALS['Data_Date_show1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_show1')))($m), (($GLOBALS['Data_Date_append'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_append')))(" ", (($GLOBALS['Data_Date_append'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_append')))((($GLOBALS['Data_Date_show2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_show2')))($d), ")"))))));
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
      case 'Data_Date_eqDate': $v = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Date") && (($__case_1)->tag === "Date"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$l2 = ($__case_0)->v2;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$r2 = ($__case_1)->v2;
return (($GLOBALS['Data_Date_conj'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_conj')))((($GLOBALS['Data_Date_conj'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_conj')))((($GLOBALS['Data_Date_eq1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eq1')))($l, $r), (($GLOBALS['Data_Date_eq2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eq2')))($l1, $r1)), (($GLOBALS['Data_Date_eq3'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eq3')))($l2, $r2));
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
      case 'Data_Date_ordDate': $v = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Date") && (($__case_1)->tag === "Date"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$l2 = ($__case_0)->v2;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$r2 = ($__case_1)->v2;
$v = (($GLOBALS['Data_Date_compare'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_compare')))($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_0)->tag === "GT")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (true) {
$v1 = (($GLOBALS['Data_Date_compare1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_compare1')))($l1, $r1);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_0)->tag === "GT")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (true) {
return (($GLOBALS['Data_Date_compare2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_compare2')))($l2, $r2);
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
    $__res = ($GLOBALS['Data_Date_eqDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eqDate'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Date_enumDate': $v = (($GLOBALS['Data_Enum_Enum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Enum__dollar__Dict')))((object)["succ" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Date":
$y = ($__case_0)->v0;
$m = ($__case_0)->v1;
$d = ($__case_0)->v2;
$sm = (($GLOBALS['Data_Date_succ'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_succ')))($m);
$l = (($GLOBALS['Data_Date_lastDayOfMonth'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_lastDayOfMonth')))($y, $m);
$v1 = (($GLOBALS['Data_Date_succ1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_succ1')))($d);
$__case_0 = (($GLOBALS['Data_Date_greaterThan'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_greaterThan')))($v1, (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($l));
$__case_res_0 = null;
if (($__case_0 === true)) {
$__case_res_0 = ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
if (true) {
$__case_res_0 = $v1;
} else {
throw new \Exception("Pattern match failure");
};
};
$sd = $__case_res_0;
$__case_0 = (($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')))($sd);
$__case_res_1 = null;
if (($__case_0 === true)) {
$__case_res_1 = (($GLOBALS['Data_Maybe_fromMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromMaybe')))(($GLOBALS['Data_Date_Component_January'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_January')), $sm);
} else {
if (true) {
$__case_res_1 = $m;
} else {
throw new \Exception("Pattern match failure");
};
};
$m__prime__ = $__case_res_1;
$__case_0 = (($GLOBALS['Data_Date_conj'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_conj')))((($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')))($sd), (($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')))($sm));
$__case_res_2 = null;
if (($__case_0 === true)) {
$__case_res_2 = (($GLOBALS['Data_Date_succ2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_succ2')))($y);
} else {
if (true) {
$__case_res_2 = (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($y);
} else {
throw new \Exception("Pattern match failure");
};
};
$y__prime__ = $__case_res_2;
$__case_0 = (($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')))($sd);
$__case_res_3 = null;
if (($__case_0 === true)) {
$__case_res_3 = (($GLOBALS['Data_Date_toEnum1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_toEnum1')))(1);
} else {
if (true) {
$__case_res_3 = $sd;
} else {
throw new \Exception("Pattern match failure");
};
};
$d__prime__ = $__case_res_3;
return (($GLOBALS['Data_Date_apply'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_apply')))((($GLOBALS['Data_Date_apply'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_apply')))((($GLOBALS['Data_Date_map'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_map')))(($GLOBALS['Data_Date_Date'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_Date')), $y__prime__), (($GLOBALS['Data_Date_pure'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pure')))($m__prime__)), $d__prime__);
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
})(), "pred" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Date":
$y = ($__case_0)->v0;
$m = ($__case_0)->v1;
$d = ($__case_0)->v2;
$pm = (($GLOBALS['Data_Date_pred'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pred')))($m);
$pd = (($GLOBALS['Data_Date_pred1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pred1')))($d);
$__case_0 = (($GLOBALS['Data_Date_conj'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_conj')))((($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')))($pd), (($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')))($pm));
$__case_res_4 = null;
if (($__case_0 === true)) {
$__case_res_4 = (($GLOBALS['Data_Date_pred2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pred2')))($y);
} else {
if (true) {
$__case_res_4 = (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($y);
} else {
throw new \Exception("Pattern match failure");
};
};
$y__prime__ = $__case_res_4;
$__case_0 = (($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')))($pd);
$__case_res_5 = null;
if (($__case_0 === true)) {
$__case_res_5 = (($GLOBALS['Data_Maybe_fromMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromMaybe')))(($GLOBALS['Data_Date_Component_December'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_December')), $pm);
} else {
if (true) {
$__case_res_5 = $m;
} else {
throw new \Exception("Pattern match failure");
};
};
$m__prime__ = $__case_res_5;
$l = (($GLOBALS['Data_Date_lastDayOfMonth'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_lastDayOfMonth')))($y, $m__prime__);
$__case_0 = (($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')))($pd);
$__case_res_6 = null;
if (($__case_0 === true)) {
$__case_res_6 = (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($l);
} else {
if (true) {
$__case_res_6 = $pd;
} else {
throw new \Exception("Pattern match failure");
};
};
$d__prime__ = $__case_res_6;
return (($GLOBALS['Data_Date_apply'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_apply')))((($GLOBALS['Data_Date_apply'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_apply')))((($GLOBALS['Data_Date_map'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_map')))(($GLOBALS['Data_Date_Date'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_Date')), $y__prime__), (($GLOBALS['Data_Date_pure'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pure')))($m__prime__)), $d__prime__);
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
})(), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Date_ordDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_ordDate'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Date_boundedDate': $v = (($GLOBALS['Data_Bounded_Bounded__dollar__Dict'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_Bounded__dollar__Dict')))((object)["bottom" => (($GLOBALS['Data_Date_Date'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_Date')))((($GLOBALS['Data_Date_Component_Year'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_Year')))((($GLOBALS['Data_Date_Component_negate'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_negate')))(271820)), ($GLOBALS['Data_Date_Component_January'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_January')), (($GLOBALS['Data_Date_Component_Day'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_Day')))(1)), "top" => (($GLOBALS['Data_Date_Date'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_Date')))((($GLOBALS['Data_Date_Component_Year'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_Year')))(275759), ($GLOBALS['Data_Date_Component_December'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_December')), (($GLOBALS['Data_Date_Component_Day'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_Day')))(31)), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Date_ordDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_ordDate'));
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


// Data_Date_fromEnum
function Data_Date_fromEnum($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_fromEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "January":
return 1;
break;
case "February":
return 2;
break;
case "March":
return 3;
break;
case "April":
return 4;
break;
case "May":
return 5;
break;
case "June":
return 6;
break;
case "July":
return 7;
break;
case "August":
return 8;
break;
case "September":
return 9;
break;
case "October":
return 10;
break;
case "November":
return 11;
break;
case "December":
return 12;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_fromEnum'] = __NAMESPACE__ . '\\Data_Date_fromEnum';



// Data_Date_toEnum
function Data_Date_toEnum($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_toEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (($__case_0 === 1)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Date_Component_Monday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_Monday')));
} else {
if (($__case_0 === 2)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Date_Component_Tuesday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_Tuesday')));
} else {
if (($__case_0 === 3)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Date_Component_Wednesday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_Wednesday')));
} else {
if (($__case_0 === 4)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Date_Component_Thursday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_Thursday')));
} else {
if (($__case_0 === 5)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Date_Component_Friday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_Friday')));
} else {
if (($__case_0 === 6)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Date_Component_Saturday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_Saturday')));
} else {
if (($__case_0 === 7)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Date_Component_Sunday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_Sunday')));
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
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
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_toEnum'] = __NAMESPACE__ . '\\Data_Date_toEnum';


// Data_Date_show
function Data_Date_show($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_show';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$y = $__case_0;
return (($GLOBALS['Data_Date_Component_append'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_append')))("(Year ", (($GLOBALS['Data_Date_Component_append'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_append')))((($GLOBALS['Data_Date_Component_show'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_show')))($y), ")"));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_show'] = __NAMESPACE__ . '\\Data_Date_show';

// Data_Date_show1
function Data_Date_show1($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_show1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "January":
return "January";
break;
case "February":
return "February";
break;
case "March":
return "March";
break;
case "April":
return "April";
break;
case "May":
return "May";
break;
case "June":
return "June";
break;
case "July":
return "July";
break;
case "August":
return "August";
break;
case "September":
return "September";
break;
case "October":
return "October";
break;
case "November":
return "November";
break;
case "December":
return "December";
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_show1'] = __NAMESPACE__ . '\\Data_Date_show1';

// Data_Date_show2
function Data_Date_show2($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_show2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$d = $__case_0;
return (($GLOBALS['Data_Date_Component_append'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_append')))("(Day ", (($GLOBALS['Data_Date_Component_append'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_append')))((($GLOBALS['Data_Date_Component_show'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_show')))($d), ")"));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_show2'] = __NAMESPACE__ . '\\Data_Date_show2';

// Data_Date_fromEnum1
function Data_Date_fromEnum1($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_fromEnum1';
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
$GLOBALS['Data_Date_fromEnum1'] = __NAMESPACE__ . '\\Data_Date_fromEnum1';





// Data_Date_compose
function Data_Date_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_compose';
  if ($__num < 3) {
    if ($__num === 2) return function($x) use ($f, $g, $__fn) { return $__fn($f, $g, $x); };
    if ($__num === 1) return function($g, $x = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $x);
      if ($__num2 === 1) return function($x) use ($f, $g, $__fn) { return $__fn($f, $g, $x); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($f)(($g)($x));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Date_compose'] = __NAMESPACE__ . '\\Data_Date_compose';

// Data_Date_toEnum1
function Data_Date_toEnum1($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_toEnum1';
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
$GLOBALS['Data_Date_toEnum1'] = __NAMESPACE__ . '\\Data_Date_toEnum1';


// Data_Date_eq2
function Data_Date_eq2($x, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_eq2';
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, $__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "January") && (($__case_1)->tag === "January"))) {
return true;
} else {
if (((($__case_0)->tag === "February") && (($__case_1)->tag === "February"))) {
return true;
} else {
if (((($__case_0)->tag === "March") && (($__case_1)->tag === "March"))) {
return true;
} else {
if (((($__case_0)->tag === "April") && (($__case_1)->tag === "April"))) {
return true;
} else {
if (((($__case_0)->tag === "May") && (($__case_1)->tag === "May"))) {
return true;
} else {
if (((($__case_0)->tag === "June") && (($__case_1)->tag === "June"))) {
return true;
} else {
if (((($__case_0)->tag === "July") && (($__case_1)->tag === "July"))) {
return true;
} else {
if (((($__case_0)->tag === "August") && (($__case_1)->tag === "August"))) {
return true;
} else {
if (((($__case_0)->tag === "September") && (($__case_1)->tag === "September"))) {
return true;
} else {
if (((($__case_0)->tag === "October") && (($__case_1)->tag === "October"))) {
return true;
} else {
if (((($__case_0)->tag === "November") && (($__case_1)->tag === "November"))) {
return true;
} else {
if (((($__case_0)->tag === "December") && (($__case_1)->tag === "December"))) {
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
};
};
};
};
  };
    $__res = $__body($x, $y);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Date_eq2'] = __NAMESPACE__ . '\\Data_Date_eq2';



// Data_Date_compare1
function Data_Date_compare1($x, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_compare1';
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, $__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "January") && (($__case_1)->tag === "January"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "January")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "January")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "February") && (($__case_1)->tag === "February"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "February")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "February")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "March") && (($__case_1)->tag === "March"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "March")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "March")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "April") && (($__case_1)->tag === "April"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "April")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "April")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "May") && (($__case_1)->tag === "May"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "May")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "May")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "June") && (($__case_1)->tag === "June"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "June")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "June")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "July") && (($__case_1)->tag === "July"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "July")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "July")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "August") && (($__case_1)->tag === "August"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "August")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "August")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "September") && (($__case_1)->tag === "September"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "September")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "September")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "October") && (($__case_1)->tag === "October"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "October")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "October")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "November") && (($__case_1)->tag === "November"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "November")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "November")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "December") && (($__case_1)->tag === "December"))) {
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
$GLOBALS['Data_Date_compare1'] = __NAMESPACE__ . '\\Data_Date_compare1';






// Data_Date_apply
function Data_Date_apply($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_apply';
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
$GLOBALS['Data_Date_apply'] = __NAMESPACE__ . '\\Data_Date_apply';

// Data_Date_map
function Data_Date_map($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_map';
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
$GLOBALS['Data_Date_map'] = __NAMESPACE__ . '\\Data_Date_map';





// Data_Date_toEnum2
function Data_Date_toEnum2($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_toEnum2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (($__case_0 === 1)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Date_Component_January'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_January')));
} else {
if (($__case_0 === 2)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Date_Component_February'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_February')));
} else {
if (($__case_0 === 3)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Date_Component_March'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_March')));
} else {
if (($__case_0 === 4)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Date_Component_April'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_April')));
} else {
if (($__case_0 === 5)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Date_Component_May'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_May')));
} else {
if (($__case_0 === 6)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Date_Component_June'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_June')));
} else {
if (($__case_0 === 7)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Date_Component_July'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_July')));
} else {
if (($__case_0 === 8)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Date_Component_August'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_August')));
} else {
if (($__case_0 === 9)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Date_Component_September'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_September')));
} else {
if (($__case_0 === 10)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Date_Component_October'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_October')));
} else {
if (($__case_0 === 11)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Date_Component_November'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_November')));
} else {
if (($__case_0 === 12)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Date_Component_December'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_December')));
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
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
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_toEnum2'] = __NAMESPACE__ . '\\Data_Date_toEnum2';


// Data_Date_fromEnum2
function Data_Date_fromEnum2($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_fromEnum2';
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
$GLOBALS['Data_Date_fromEnum2'] = __NAMESPACE__ . '\\Data_Date_fromEnum2';





// Data_Date_bind
function Data_Date_bind($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_bind';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_0)->tag) {
case "Just":
$x = ($__case_0)->v0;
$k = $__case_1;
return ($k)($x);
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
$GLOBALS['Data_Date_bind'] = __NAMESPACE__ . '\\Data_Date_bind';

// Data_Date_Date
function Data_Date_Date($value0, $value1 = null, $value2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_Date';
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
    $__res = new Phpurs_Data3("Date", $value0, $value1, $value2);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Date_Date'] = __NAMESPACE__ . '\\Data_Date_Date';

// Data_Date_year
function Data_Date_year($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_year';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Date":
$y = ($__case_0)->v0;
return $y;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_year'] = __NAMESPACE__ . '\\Data_Date_year';



// Data_Date_month
function Data_Date_month($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_month';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Date":
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
$GLOBALS['Data_Date_month'] = __NAMESPACE__ . '\\Data_Date_month';

// Data_Date_isLeapYear
function Data_Date_isLeapYear($y) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_isLeapYear';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$y__prime__ = (($GLOBALS['Data_Date_fromEnum1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromEnum1')))($y);
    $__res = (($GLOBALS['Data_Date_conj'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_conj')))((($GLOBALS['Data_Date_eq'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eq')))((($GLOBALS['Data_Date_mod'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_mod')))($y__prime__, 4), 0), (($GLOBALS['Data_Date_disj'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_disj')))((($GLOBALS['Data_Date_eq'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eq')))((($GLOBALS['Data_Date_mod'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_mod')))($y__prime__, 400), 0), (($GLOBALS['Data_Date_not'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_not')))((($GLOBALS['Data_Date_eq'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eq')))((($GLOBALS['Data_Date_mod'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_mod')))($y__prime__, 100), 0))));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_isLeapYear'] = __NAMESPACE__ . '\\Data_Date_isLeapYear';

// Data_Date_lastDayOfMonth
function Data_Date_lastDayOfMonth($y, $m = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_lastDayOfMonth';
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($y, $__fn) { return $__fn($y, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($y, $m) {
    $unsafeDay = (($GLOBALS['Data_Date_compose'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_compose')))((($GLOBALS['Partial_Unsafe_unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafePartial')))((function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Date_fromJust'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromJust'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($GLOBALS['Data_Date_toEnum1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_toEnum1')));
    $__case_0 = $m;
    switch (($__case_0)->tag) {
case "January":
return ($unsafeDay)(31);
break;
case "February":
return "/* Unsupported: Guards not supported */";
break;
case "March":
return ($unsafeDay)(31);
break;
case "April":
return ($unsafeDay)(30);
break;
case "May":
return ($unsafeDay)(31);
break;
case "June":
return ($unsafeDay)(30);
break;
case "July":
return ($unsafeDay)(31);
break;
case "August":
return ($unsafeDay)(31);
break;
case "September":
return ($unsafeDay)(30);
break;
case "October":
return ($unsafeDay)(31);
break;
case "November":
return ($unsafeDay)(30);
break;
case "December":
return ($unsafeDay)(31);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($y, $m);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Date_lastDayOfMonth'] = __NAMESPACE__ . '\\Data_Date_lastDayOfMonth';


// Data_Date_eq4
function Data_Date_eq4($x, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_eq4';
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, $__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Date") && (($__case_1)->tag === "Date"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$l2 = ($__case_0)->v2;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$r2 = ($__case_1)->v2;
return (($GLOBALS['Data_Date_conj'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_conj')))((($GLOBALS['Data_Date_conj'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_conj')))((($GLOBALS['Data_Date_eq1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eq1')))($l, $r), (($GLOBALS['Data_Date_eq2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eq2')))($l1, $r1)), (($GLOBALS['Data_Date_eq3'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eq3')))($l2, $r2));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($x, $y);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Date_eq4'] = __NAMESPACE__ . '\\Data_Date_eq4';



// Data_Date_pred3
function Data_Date_pred3($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_pred3';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Date":
$y = ($__case_0)->v0;
$m = ($__case_0)->v1;
$d = ($__case_0)->v2;
$pm = (($GLOBALS['Data_Date_pred'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pred')))($m);
$pd = (($GLOBALS['Data_Date_pred1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pred1')))($d);
$__case_0 = (($GLOBALS['Data_Date_conj'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_conj')))((($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')))($pd), (($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')))($pm));
$__case_res_0 = null;
if (($__case_0 === true)) {
$__case_res_0 = (($GLOBALS['Data_Date_pred2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pred2')))($y);
} else {
if (true) {
$__case_res_0 = (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($y);
} else {
throw new \Exception("Pattern match failure");
};
};
$y__prime__ = $__case_res_0;
$__case_0 = (($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')))($pd);
$__case_res_1 = null;
if (($__case_0 === true)) {
$__case_res_1 = (($GLOBALS['Data_Maybe_fromMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromMaybe')))(($GLOBALS['Data_Date_Component_December'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_December')), $pm);
} else {
if (true) {
$__case_res_1 = $m;
} else {
throw new \Exception("Pattern match failure");
};
};
$m__prime__ = $__case_res_1;
$l = (($GLOBALS['Data_Date_lastDayOfMonth'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_lastDayOfMonth')))($y, $m__prime__);
$__case_0 = (($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')))($pd);
$__case_res_2 = null;
if (($__case_0 === true)) {
$__case_res_2 = (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($l);
} else {
if (true) {
$__case_res_2 = $pd;
} else {
throw new \Exception("Pattern match failure");
};
};
$d__prime__ = $__case_res_2;
return (($GLOBALS['Data_Date_apply'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_apply')))((($GLOBALS['Data_Date_apply'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_apply')))((($GLOBALS['Data_Date_map'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_map')))(($GLOBALS['Data_Date_Date'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_Date')), $y__prime__), (($GLOBALS['Data_Date_pure'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pure')))($m__prime__)), $d__prime__);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_pred3'] = __NAMESPACE__ . '\\Data_Date_pred3';

// Data_Date_succ3
function Data_Date_succ3($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_succ3';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Date":
$y = ($__case_0)->v0;
$m = ($__case_0)->v1;
$d = ($__case_0)->v2;
$sm = (($GLOBALS['Data_Date_succ'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_succ')))($m);
$l = (($GLOBALS['Data_Date_lastDayOfMonth'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_lastDayOfMonth')))($y, $m);
$v1 = (($GLOBALS['Data_Date_succ1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_succ1')))($d);
$__case_0 = (($GLOBALS['Data_Date_greaterThan'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_greaterThan')))($v1, (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($l));
$__case_res_0 = null;
if (($__case_0 === true)) {
$__case_res_0 = ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
if (true) {
$__case_res_0 = $v1;
} else {
throw new \Exception("Pattern match failure");
};
};
$sd = $__case_res_0;
$__case_0 = (($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')))($sd);
$__case_res_1 = null;
if (($__case_0 === true)) {
$__case_res_1 = (($GLOBALS['Data_Maybe_fromMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromMaybe')))(($GLOBALS['Data_Date_Component_January'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_January')), $sm);
} else {
if (true) {
$__case_res_1 = $m;
} else {
throw new \Exception("Pattern match failure");
};
};
$m__prime__ = $__case_res_1;
$__case_0 = (($GLOBALS['Data_Date_conj'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_conj')))((($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')))($sd), (($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')))($sm));
$__case_res_2 = null;
if (($__case_0 === true)) {
$__case_res_2 = (($GLOBALS['Data_Date_succ2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_succ2')))($y);
} else {
if (true) {
$__case_res_2 = (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($y);
} else {
throw new \Exception("Pattern match failure");
};
};
$y__prime__ = $__case_res_2;
$__case_0 = (($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')))($sd);
$__case_res_3 = null;
if (($__case_0 === true)) {
$__case_res_3 = (($GLOBALS['Data_Date_toEnum1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_toEnum1')))(1);
} else {
if (true) {
$__case_res_3 = $sd;
} else {
throw new \Exception("Pattern match failure");
};
};
$d__prime__ = $__case_res_3;
return (($GLOBALS['Data_Date_apply'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_apply')))((($GLOBALS['Data_Date_apply'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_apply')))((($GLOBALS['Data_Date_map'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_map')))(($GLOBALS['Data_Date_Date'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_Date')), $y__prime__), (($GLOBALS['Data_Date_pure'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pure')))($m__prime__)), $d__prime__);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_succ3'] = __NAMESPACE__ . '\\Data_Date_succ3';

// Data_Date_diff
function Data_Date_diff($dictDuration) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_diff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$toDuration = (($GLOBALS['Data_Time_Duration_toDuration'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_toDuration')))($dictDuration);
    $__res = (function() use ($toDuration) {
  $__body = function($v, $v1) use ($toDuration) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Date") && (($__case_1)->tag === "Date"))) {
$y1 = ($__case_0)->v0;
$m1 = ($__case_0)->v1;
$d1 = ($__case_0)->v2;
$y2 = ($__case_1)->v0;
$m2 = ($__case_1)->v1;
$d2 = ($__case_1)->v2;
return ($toDuration)((($GLOBALS['Data_Function_Uncurried_runFn6'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn6')))(($GLOBALS['Data_Date_calcDiff'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_calcDiff')), $y1, (($GLOBALS['Data_Date_fromEnum'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromEnum')))($m1), $d1, $y2, (($GLOBALS['Data_Date_fromEnum'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromEnum')))($m2), $d2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($toDuration, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_diff'] = __NAMESPACE__ . '\\Data_Date_diff';

// Data_Date_day
function Data_Date_day($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_day';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Date":
$d = ($__case_0)->v2;
return $d;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_day'] = __NAMESPACE__ . '\\Data_Date_day';

// Data_Date_canonicalDate
function Data_Date_canonicalDate($y, $m = null, $d = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_canonicalDate';
  if ($__num < 3) {
    if ($__num === 2) return function($d) use ($y, $m, $__fn) { return $__fn($y, $m, $d); };
    if ($__num === 1) return function($m, $d = null) use ($y, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($y, $m, $d);
      if ($__num2 === 1) return function($d) use ($y, $m, $__fn) { return $__fn($y, $m, $d); };
      return phpurs_curry_fallback($__fn, [$y], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$mkDate = (($GLOBALS['Partial_Unsafe_unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafePartial')))((function() {
  $__fn = function($__dollar____unused, $y__prime__ = null, $m__prime__ = null, $d__prime__ = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($d__prime__) use ($__dollar____unused, $y__prime__, $m__prime__, &$__fn) { return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__); };
    if ($__num === 2) return function($m__prime__, $d__prime__ = null) use ($__dollar____unused, $y__prime__, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__);
      if ($__num2 === 1) return function($d__prime__) use ($__dollar____unused, $y__prime__, $m__prime__, &$__fn) { return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__); };
      return phpurs_curry_fallback($__fn, [$__dollar____unused, $y__prime__], 4);
    };
    if ($__num === 1) return function($y__prime__, $m__prime__ = null, $d__prime__ = null) use ($__dollar____unused, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__);
      if ($__num2 === 2) return function($d__prime__) use ($__dollar____unused, $y__prime__, $m__prime__, &$__fn) { return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__); };
      if ($__num2 === 1) return function($m__prime__, $d__prime__ = null) use ($__dollar____unused, $y__prime__, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__);
        if ($__num3 === 1) return function($d__prime__) use ($__dollar____unused, $y__prime__, $m__prime__, &$__fn) { return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__); };
        return phpurs_curry_fallback($__fn, [$__dollar____unused, $y__prime__], 4);
      };
      return phpurs_curry_fallback($__fn, [$__dollar____unused], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = (($GLOBALS['Data_Date_Date'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_Date')))($y__prime__, (($GLOBALS['Data_Date_fromJust'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromJust')))((($GLOBALS['Data_Date_toEnum2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_toEnum2')))($m__prime__)), $d__prime__);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})());
    $__res = (($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Date_canonicalDateImpl'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_canonicalDateImpl')), $mkDate, $y, (($GLOBALS['Data_Date_fromEnum'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromEnum')))($m), $d);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Date_canonicalDate'] = __NAMESPACE__ . '\\Data_Date_canonicalDate';

// Data_Date_exactDate
function Data_Date_exactDate($y, $m = null, $d = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_exactDate';
  if ($__num < 3) {
    if ($__num === 2) return function($d) use ($y, $m, $__fn) { return $__fn($y, $m, $d); };
    if ($__num === 1) return function($m, $d = null) use ($y, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($y, $m, $d);
      if ($__num2 === 1) return function($d) use ($y, $m, $__fn) { return $__fn($y, $m, $d); };
      return phpurs_curry_fallback($__fn, [$y], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($y, $m, $d) {
    $dt = (($GLOBALS['Data_Date_Date'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_Date')))($y, $m, $d);
    $__case_0 = (($GLOBALS['Data_Date_eq4'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eq4')))((($GLOBALS['Data_Date_canonicalDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_canonicalDate')))($y, $m, $d), $dt);
    if (($__case_0 === true)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($dt);
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
    $__res = $__body($y, $m, $d);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Date_exactDate'] = __NAMESPACE__ . '\\Data_Date_exactDate';


// Data_Date_adjust
function Data_Date_adjust($v, $date = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_adjust';
  if ($__num < 2) {
    if ($__num === 1) return function($date) use ($v, $__fn) { return $__fn($v, $date); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $date) {
    $__case_0 = $v;
    $__case_1 = $date;
    if (true) {
$n = $__case_0;
$date1 = $__case_1;
$adj = (function() use (&$adj) {
  $__fn = function($v1, $v2 = null) use (&$adj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v2) use ($v1, &$__fn) { return $__fn($v1, $v2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v1;
$__case_1 = $v2;
if (($__case_0 === 0)) {
$dt = $__case_1;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($dt);
} else {
switch (($__case_1)->tag) {
case "Date":
$i = $__case_0;
$y = ($__case_1)->v0;
$m = ($__case_1)->v1;
$d = ($__case_1)->v2;
$j = (($GLOBALS['Data_Date_add'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_add')))($i, (($GLOBALS['Data_Date_fromEnum2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromEnum2')))($d));
$low = (($GLOBALS['Data_Date_lessThan'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_lessThan')))($j, 1);
$__case_0 = $low;
$__case_res_0 = null;
if (($__case_0 === true)) {
$__case_res_0 = (($GLOBALS['Data_Maybe_fromMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromMaybe')))(($GLOBALS['Data_Date_Component_December'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_December')), (($GLOBALS['Data_Date_pred'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pred')))($m));
} else {
if (true) {
$__case_res_0 = $m;
} else {
throw new \Exception("Pattern match failure");
};
};
$l = (($GLOBALS['Data_Date_lastDayOfMonth'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_lastDayOfMonth')))($y, $__case_res_0);
$hi = (($GLOBALS['Data_Date_greaterThan1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_greaterThan1')))($j, (($GLOBALS['Data_Date_fromEnum2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromEnum2')))($l));
$__case_res_1 = null;
if (true) {
$__case_res_1 = "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
$i__prime__ = $__case_res_1;
$__case_res_2 = null;
if (true) {
$__case_res_2 = "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
$dt__prime__ = $__case_res_2;
return (($GLOBALS['Data_Date_bindFlipped'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_bindFlipped')))(($adj)($i__prime__), $dt__prime__);
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
return (($GLOBALS['Data_Date_bind'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_bind')))((($GLOBALS['Data_Int_fromNumber'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_fromNumber')))($n), (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))($adj, $date1));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v, $date);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Date_adjust'] = __NAMESPACE__ . '\\Data_Date_adjust';

