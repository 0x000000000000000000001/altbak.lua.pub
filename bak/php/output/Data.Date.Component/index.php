<?php

namespace Data\Date\Component;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
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
      case 'Data_Date_Component_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Date_Component_show': $v = ($GLOBALS['Data_Show_showIntImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showIntImpl')); break;
      case 'Data_Date_Component_negate': $v = (($GLOBALS['Data_Ring_negate'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_negate')))(($GLOBALS['Data_Ring_ringInt'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringInt'))); break;
      case 'Data_Date_Component_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Date_Component_greaterThanOrEq': $v = (($GLOBALS['Data_Ord_greaterThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThanOrEq')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Date_Component_lessThanOrEq': $v = (($GLOBALS['Data_Ord_lessThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThanOrEq')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Date_Component_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_Date_Component_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_Date_Component_Monday': $v = ($GLOBALS['__phpurs_data0_Monday'] ??= new Phpurs_Data0("Monday")); break;
      case 'Data_Date_Component_Tuesday': $v = ($GLOBALS['__phpurs_data0_Tuesday'] ??= new Phpurs_Data0("Tuesday")); break;
      case 'Data_Date_Component_Wednesday': $v = ($GLOBALS['__phpurs_data0_Wednesday'] ??= new Phpurs_Data0("Wednesday")); break;
      case 'Data_Date_Component_Thursday': $v = ($GLOBALS['__phpurs_data0_Thursday'] ??= new Phpurs_Data0("Thursday")); break;
      case 'Data_Date_Component_Friday': $v = ($GLOBALS['__phpurs_data0_Friday'] ??= new Phpurs_Data0("Friday")); break;
      case 'Data_Date_Component_Saturday': $v = ($GLOBALS['__phpurs_data0_Saturday'] ??= new Phpurs_Data0("Saturday")); break;
      case 'Data_Date_Component_Sunday': $v = ($GLOBALS['__phpurs_data0_Sunday'] ??= new Phpurs_Data0("Sunday")); break;
      case 'Data_Date_Component_January': $v = ($GLOBALS['__phpurs_data0_January'] ??= new Phpurs_Data0("January")); break;
      case 'Data_Date_Component_February': $v = ($GLOBALS['__phpurs_data0_February'] ??= new Phpurs_Data0("February")); break;
      case 'Data_Date_Component_March': $v = ($GLOBALS['__phpurs_data0_March'] ??= new Phpurs_Data0("March")); break;
      case 'Data_Date_Component_April': $v = ($GLOBALS['__phpurs_data0_April'] ??= new Phpurs_Data0("April")); break;
      case 'Data_Date_Component_May': $v = ($GLOBALS['__phpurs_data0_May'] ??= new Phpurs_Data0("May")); break;
      case 'Data_Date_Component_June': $v = ($GLOBALS['__phpurs_data0_June'] ??= new Phpurs_Data0("June")); break;
      case 'Data_Date_Component_July': $v = ($GLOBALS['__phpurs_data0_July'] ??= new Phpurs_Data0("July")); break;
      case 'Data_Date_Component_August': $v = ($GLOBALS['__phpurs_data0_August'] ??= new Phpurs_Data0("August")); break;
      case 'Data_Date_Component_September': $v = ($GLOBALS['__phpurs_data0_September'] ??= new Phpurs_Data0("September")); break;
      case 'Data_Date_Component_October': $v = ($GLOBALS['__phpurs_data0_October'] ??= new Phpurs_Data0("October")); break;
      case 'Data_Date_Component_November': $v = ($GLOBALS['__phpurs_data0_November'] ??= new Phpurs_Data0("November")); break;
      case 'Data_Date_Component_December': $v = ($GLOBALS['__phpurs_data0_December'] ??= new Phpurs_Data0("December")); break;
      case 'Data_Date_Component_showYear': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$y = $__case_0;
return (($GLOBALS['Data_Date_Component_append'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_append')))("(Year ", (($GLOBALS['Data_Date_Component_append'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_append')))((($GLOBALS['Data_Date_Component_show'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_show')))($y), ")"));
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
      case 'Data_Date_Component_showWeekday': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Monday":
return "Monday";
break;
case "Tuesday":
return "Tuesday";
break;
case "Wednesday":
return "Wednesday";
break;
case "Thursday":
return "Thursday";
break;
case "Friday":
return "Friday";
break;
case "Saturday":
return "Saturday";
break;
case "Sunday":
return "Sunday";
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
      case 'Data_Date_Component_showMonth': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
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
      case 'Data_Date_Component_showDay': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$d = $__case_0;
return (($GLOBALS['Data_Date_Component_append'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_append')))("(Day ", (($GLOBALS['Data_Date_Component_append'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_append')))((($GLOBALS['Data_Date_Component_show'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_show')))($d), ")"));
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
      case 'Data_Date_Component_ordYear': $v = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt')); break;
      case 'Data_Date_Component_ordDay': $v = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt')); break;
      case 'Data_Date_Component_eqYear': $v = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt')); break;
      case 'Data_Date_Component_eqWeekday': $v = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Monday") && (($__case_1)->tag === "Monday"))) {
return true;
} else {
if (((($__case_0)->tag === "Tuesday") && (($__case_1)->tag === "Tuesday"))) {
return true;
} else {
if (((($__case_0)->tag === "Wednesday") && (($__case_1)->tag === "Wednesday"))) {
return true;
} else {
if (((($__case_0)->tag === "Thursday") && (($__case_1)->tag === "Thursday"))) {
return true;
} else {
if (((($__case_0)->tag === "Friday") && (($__case_1)->tag === "Friday"))) {
return true;
} else {
if (((($__case_0)->tag === "Saturday") && (($__case_1)->tag === "Saturday"))) {
return true;
} else {
if (((($__case_0)->tag === "Sunday") && (($__case_1)->tag === "Sunday"))) {
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
      case 'Data_Date_Component_ordWeekday': $v = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Monday") && (($__case_1)->tag === "Monday"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "Monday")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "Monday")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "Tuesday") && (($__case_1)->tag === "Tuesday"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "Tuesday")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "Tuesday")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "Wednesday") && (($__case_1)->tag === "Wednesday"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "Wednesday")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "Wednesday")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "Thursday") && (($__case_1)->tag === "Thursday"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "Thursday")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "Thursday")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "Friday") && (($__case_1)->tag === "Friday"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "Friday")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "Friday")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "Saturday") && (($__case_1)->tag === "Saturday"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "Saturday")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "Saturday")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "Sunday") && (($__case_1)->tag === "Sunday"))) {
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
    $__res = ($GLOBALS['Data_Date_Component_eqWeekday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_eqWeekday'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Date_Component_eqMonth': $v = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() {
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
      case 'Data_Date_Component_ordMonth': $v = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() {
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
    $__res = ($GLOBALS['Data_Date_Component_eqMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_eqMonth'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Date_Component_eqDay': $v = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt')); break;
      case 'Data_Date_Component_boundedYear': $v = (($GLOBALS['Data_Bounded_Bounded__dollar__Dict'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_Bounded__dollar__Dict')))((object)["bottom" => (($GLOBALS['Data_Date_Component_Year'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_Year')))((($GLOBALS['Data_Date_Component_negate'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_negate')))(271820)), "top" => (($GLOBALS['Data_Date_Component_Year'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_Year')))(275759), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Date_Component_ordYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_ordYear'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Date_Component_boundedWeekday': $v = (($GLOBALS['Data_Bounded_Bounded__dollar__Dict'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_Bounded__dollar__Dict')))((object)["bottom" => ($GLOBALS['Data_Date_Component_Monday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_Monday')), "top" => ($GLOBALS['Data_Date_Component_Sunday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_Sunday')), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Date_Component_ordWeekday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_ordWeekday'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Date_Component_boundedMonth': $v = (($GLOBALS['Data_Bounded_Bounded__dollar__Dict'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_Bounded__dollar__Dict')))((object)["bottom" => ($GLOBALS['Data_Date_Component_January'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_January')), "top" => ($GLOBALS['Data_Date_Component_December'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_December')), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Date_Component_ordMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_ordMonth'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Date_Component_boundedEnumYear': $v = (($GLOBALS['Data_Enum_BoundedEnum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_BoundedEnum__dollar__Dict')))((object)["cardinality" => (($GLOBALS['Data_Enum_Cardinality'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Cardinality')))(547580), "toEnum" => (function() {
  $__body = function($n) {
    $__case_0 = $n;
    if (true) {
$n1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($n) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($n);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "fromEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return $n;
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
})(), "Bounded0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Date_Component_boundedYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedYear'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Enum1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Date_Component_enumYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_enumYear'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Date_Component_enumYear': $v = (($GLOBALS['Data_Enum_Enum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Enum__dollar__Dict')))((object)["succ" => (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
  $__body = function($n) {
    $__case_0 = $n;
    if (true) {
$n1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($n) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($n);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Date_Component_add'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_add')))($v, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return $n;
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
})())), "pred" => (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
  $__body = function($n) {
    $__case_0 = $n;
    if (true) {
$n1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($n) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($n);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Date_Component_sub'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_sub')))($v, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return $n;
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
})())), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Date_Component_ordYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_ordYear'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Date_Component_boundedEnumWeekday': $v = (($GLOBALS['Data_Enum_BoundedEnum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_BoundedEnum__dollar__Dict')))((object)["cardinality" => (($GLOBALS['Data_Enum_Cardinality'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Cardinality')))(7), "toEnum" => (function() {
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
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "fromEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Monday":
return 1;
break;
case "Tuesday":
return 2;
break;
case "Wednesday":
return 3;
break;
case "Thursday":
return 4;
break;
case "Friday":
return 5;
break;
case "Saturday":
return 6;
break;
case "Sunday":
return 7;
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
})(), "Bounded0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Date_Component_boundedWeekday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedWeekday'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Enum1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Date_Component_enumWeekday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_enumWeekday'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Date_Component_enumWeekday': $v = (($GLOBALS['Data_Enum_Enum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Enum__dollar__Dict')))((object)["succ" => (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
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
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Date_Component_add'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_add')))($v, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Monday":
return 1;
break;
case "Tuesday":
return 2;
break;
case "Wednesday":
return 3;
break;
case "Thursday":
return 4;
break;
case "Friday":
return 5;
break;
case "Saturday":
return 6;
break;
case "Sunday":
return 7;
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
})())), "pred" => (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
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
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Date_Component_sub'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_sub')))($v, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Monday":
return 1;
break;
case "Tuesday":
return 2;
break;
case "Wednesday":
return 3;
break;
case "Thursday":
return 4;
break;
case "Friday":
return 5;
break;
case "Saturday":
return 6;
break;
case "Sunday":
return 7;
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
})())), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Date_Component_ordWeekday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_ordWeekday'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Date_Component_boundedEnumMonth': $v = (($GLOBALS['Data_Enum_BoundedEnum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_BoundedEnum__dollar__Dict')))((object)["cardinality" => (($GLOBALS['Data_Enum_Cardinality'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Cardinality')))(12), "toEnum" => (function() {
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
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "fromEnum" => (function() {
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
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bounded0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Date_Component_boundedMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedMonth'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Enum1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Date_Component_enumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_enumMonth'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Date_Component_enumMonth': $v = (($GLOBALS['Data_Enum_Enum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Enum__dollar__Dict')))((object)["succ" => (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
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
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Date_Component_add'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_add')))($v, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (function() {
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
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "pred" => (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
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
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Date_Component_sub'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_sub')))($v, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (function() {
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
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Date_Component_ordMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_ordMonth'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Date_Component_boundedDay': $v = (($GLOBALS['Data_Bounded_Bounded__dollar__Dict'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_Bounded__dollar__Dict')))((object)["bottom" => (($GLOBALS['Data_Date_Component_Day'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_Day')))(1), "top" => (($GLOBALS['Data_Date_Component_Day'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_Day')))(31), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Date_Component_ordDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_ordDay'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Date_Component_boundedEnumDay': $v = (($GLOBALS['Data_Enum_BoundedEnum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_BoundedEnum__dollar__Dict')))((object)["cardinality" => (($GLOBALS['Data_Enum_Cardinality'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Cardinality')))(31), "toEnum" => (function() {
  $__body = function($n) {
    $__case_0 = $n;
    if (true) {
$n1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($n) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($n);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "fromEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return $n;
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
})(), "Bounded0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Date_Component_boundedDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedDay'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Enum1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Date_Component_enumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_enumDay'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Date_Component_enumDay': $v = (($GLOBALS['Data_Enum_Enum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Enum__dollar__Dict')))((object)["succ" => (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
  $__body = function($n) {
    $__case_0 = $n;
    if (true) {
$n1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($n) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($n);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Date_Component_add'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_add')))($v, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return $n;
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
})())), "pred" => (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
  $__body = function($n) {
    $__case_0 = $n;
    if (true) {
$n1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($n) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($n);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Date_Component_sub'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_sub')))($v, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return $n;
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
})())), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Date_Component_ordDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_ordDay'));
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








// Data_Date_Component_compose
function Data_Date_Component_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_Component_compose';
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
$GLOBALS['Data_Date_Component_compose'] = __NAMESPACE__ . '\\Data_Date_Component_compose';



// Data_Date_Component_Year
function Data_Date_Component_Year($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_Component_Year';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_Component_Year'] = __NAMESPACE__ . '\\Data_Date_Component_Year';




















// Data_Date_Component_Day
function Data_Date_Component_Day($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_Component_Day';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_Component_Day'] = __NAMESPACE__ . '\\Data_Date_Component_Day';

























