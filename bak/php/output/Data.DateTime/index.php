<?php

namespace Data\DateTime;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Date/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.DateTime/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Time/index.php';
require_once __DIR__ . '/../Data.Time.Component/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
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
      case 'Data_DateTime_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_DateTime_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_DateTime_join': $v = (($GLOBALS['Control_Bind_join'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_join')))(($GLOBALS['Data_Maybe_bindMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_bindMaybe'))); break;
      case 'Data_DateTime_showDateTime': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "DateTime":
$d = ($__case_0)->v0;
$t = ($__case_0)->v1;
return (($GLOBALS['Data_DateTime_append'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_append')))("(DateTime ", (($GLOBALS['Data_DateTime_append'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_append')))((($GLOBALS['Data_DateTime_show'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_show')))($d), (($GLOBALS['Data_DateTime_append'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_append')))(" ", (($GLOBALS['Data_DateTime_append'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_append')))((($GLOBALS['Data_DateTime_show1'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_show1')))($t), ")"))));
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
      case 'Data_DateTime_eqDateTime': $v = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "DateTime") && (($__case_1)->tag === "DateTime"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return (($GLOBALS['Data_DateTime_conj'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_conj')))((($GLOBALS['Data_DateTime_eq'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_eq')))($l, $r), (($GLOBALS['Data_DateTime_eq1'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_eq1')))($l1, $r1));
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
      case 'Data_DateTime_ordDateTime': $v = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "DateTime") && (($__case_1)->tag === "DateTime"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = (($GLOBALS['Data_DateTime_compare'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_compare')))($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_0)->tag === "GT")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (true) {
return (($GLOBALS['Data_DateTime_compare1'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_compare1')))($l1, $r1);
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
    $__res = ($GLOBALS['Data_DateTime_eqDateTime'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_eqDateTime'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_DateTime_boundedDateTime': $v = (($GLOBALS['Data_Bounded_Bounded__dollar__Dict'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_Bounded__dollar__Dict')))((object)["bottom" => (($GLOBALS['Data_DateTime_DateTime'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_DateTime')))((($GLOBALS['Data_Date_Date'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_Date')))((($GLOBALS['Data_Bounded_bottom'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottom')))(($GLOBALS['Data_Date_Component_boundedYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedYear'))), (($GLOBALS['Data_Bounded_bottom'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottom')))(($GLOBALS['Data_Date_Component_boundedMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedMonth'))), (($GLOBALS['Data_Bounded_bottom'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottom')))(($GLOBALS['Data_Date_Component_boundedDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedDay')))), (($GLOBALS['Data_Time_Time'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_Time')))((($GLOBALS['Data_Bounded_bottom'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottom')))(($GLOBALS['Data_Time_Component_boundedHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedHour'))), (($GLOBALS['Data_Bounded_bottom'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottom')))(($GLOBALS['Data_Time_Component_boundedMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMinute'))), (($GLOBALS['Data_Bounded_bottom'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottom')))(($GLOBALS['Data_Time_Component_boundedSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedSecond'))), (($GLOBALS['Data_Bounded_bottom'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottom')))(($GLOBALS['Data_Time_Component_boundedMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMillisecond'))))), "top" => (($GLOBALS['Data_DateTime_DateTime'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_DateTime')))((($GLOBALS['Data_Date_Date'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_Date')))((($GLOBALS['Data_Bounded_top'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_top')))(($GLOBALS['Data_Date_Component_boundedYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedYear'))), (($GLOBALS['Data_Bounded_top'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_top')))(($GLOBALS['Data_Date_Component_boundedMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedMonth'))), (($GLOBALS['Data_Bounded_top'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_top')))(($GLOBALS['Data_Date_Component_boundedDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedDay')))), (($GLOBALS['Data_Time_Time'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_Time')))((($GLOBALS['Data_Bounded_top'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_top')))(($GLOBALS['Data_Time_Component_boundedHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedHour'))), (($GLOBALS['Data_Bounded_top'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_top')))(($GLOBALS['Data_Time_Component_boundedMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMinute'))), (($GLOBALS['Data_Bounded_top'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_top')))(($GLOBALS['Data_Time_Component_boundedSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedSecond'))), (($GLOBALS['Data_Bounded_top'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_top')))(($GLOBALS['Data_Time_Component_boundedMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMillisecond'))))), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_DateTime_ordDateTime'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_ordDateTime'));
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


// Data_DateTime_fromEnum
function Data_DateTime_fromEnum($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_fromEnum';
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
$GLOBALS['Data_DateTime_fromEnum'] = __NAMESPACE__ . '\\Data_DateTime_fromEnum';

// Data_DateTime_fromEnum1
function Data_DateTime_fromEnum1($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_fromEnum1';
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
$GLOBALS['Data_DateTime_fromEnum1'] = __NAMESPACE__ . '\\Data_DateTime_fromEnum1';

// Data_DateTime_fromEnum2
function Data_DateTime_fromEnum2($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_fromEnum2';
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
$GLOBALS['Data_DateTime_fromEnum2'] = __NAMESPACE__ . '\\Data_DateTime_fromEnum2';

// Data_DateTime_fromEnum3
function Data_DateTime_fromEnum3($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_fromEnum3';
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
$GLOBALS['Data_DateTime_fromEnum3'] = __NAMESPACE__ . '\\Data_DateTime_fromEnum3';

// Data_DateTime_fromEnum4
function Data_DateTime_fromEnum4($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_fromEnum4';
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
$GLOBALS['Data_DateTime_fromEnum4'] = __NAMESPACE__ . '\\Data_DateTime_fromEnum4';

// Data_DateTime_fromEnum5
function Data_DateTime_fromEnum5($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_fromEnum5';
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
$GLOBALS['Data_DateTime_fromEnum5'] = __NAMESPACE__ . '\\Data_DateTime_fromEnum5';

// Data_DateTime_fromEnum6
function Data_DateTime_fromEnum6($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_fromEnum6';
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
$GLOBALS['Data_DateTime_fromEnum6'] = __NAMESPACE__ . '\\Data_DateTime_fromEnum6';


// Data_DateTime_show
function Data_DateTime_show($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_show';
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
return (($GLOBALS['Data_Date_append'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_append')))("(Date ", (($GLOBALS['Data_Date_append'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_append')))((($GLOBALS['Data_Date_show'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_show')))($y), (($GLOBALS['Data_Date_append'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_append')))(" ", (($GLOBALS['Data_Date_append'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_append')))((($GLOBALS['Data_Date_show1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_show1')))($m), (($GLOBALS['Data_Date_append'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_append')))(" ", (($GLOBALS['Data_Date_append'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_append')))((($GLOBALS['Data_Date_show2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_show2')))($d), ")"))))));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_show'] = __NAMESPACE__ . '\\Data_DateTime_show';

// Data_DateTime_show1
function Data_DateTime_show1($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_show1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
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
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_show1'] = __NAMESPACE__ . '\\Data_DateTime_show1';


// Data_DateTime_eq
function Data_DateTime_eq($x, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_eq';
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
$GLOBALS['Data_DateTime_eq'] = __NAMESPACE__ . '\\Data_DateTime_eq';

// Data_DateTime_eq1
function Data_DateTime_eq1($x, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_eq1';
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, $__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
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
    $__res = $__body($x, $y);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_DateTime_eq1'] = __NAMESPACE__ . '\\Data_DateTime_eq1';

// Data_DateTime_compare
function Data_DateTime_compare($x, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_compare';
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
    $__res = $__body($x, $y);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_DateTime_compare'] = __NAMESPACE__ . '\\Data_DateTime_compare';

// Data_DateTime_compare1
function Data_DateTime_compare1($x, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_compare1';
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, $__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
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
    $__res = $__body($x, $y);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_DateTime_compare1'] = __NAMESPACE__ . '\\Data_DateTime_compare1';

// Data_DateTime_bind
function Data_DateTime_bind($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_bind';
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
$GLOBALS['Data_DateTime_bind'] = __NAMESPACE__ . '\\Data_DateTime_bind';

// Data_DateTime_apply
function Data_DateTime_apply($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_apply';
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
$GLOBALS['Data_DateTime_apply'] = __NAMESPACE__ . '\\Data_DateTime_apply';

// Data_DateTime_map
function Data_DateTime_map($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_map';
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
$GLOBALS['Data_DateTime_map'] = __NAMESPACE__ . '\\Data_DateTime_map';


// Data_DateTime_toEnum
function Data_DateTime_toEnum($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_toEnum';
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
$GLOBALS['Data_DateTime_toEnum'] = __NAMESPACE__ . '\\Data_DateTime_toEnum';

// Data_DateTime_toEnum1
function Data_DateTime_toEnum1($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_toEnum1';
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
$GLOBALS['Data_DateTime_toEnum1'] = __NAMESPACE__ . '\\Data_DateTime_toEnum1';

// Data_DateTime_toEnum2
function Data_DateTime_toEnum2($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_toEnum2';
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
$GLOBALS['Data_DateTime_toEnum2'] = __NAMESPACE__ . '\\Data_DateTime_toEnum2';

// Data_DateTime_toEnum3
function Data_DateTime_toEnum3($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_toEnum3';
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
$GLOBALS['Data_DateTime_toEnum3'] = __NAMESPACE__ . '\\Data_DateTime_toEnum3';

// Data_DateTime_toEnum4
function Data_DateTime_toEnum4($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_toEnum4';
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
$GLOBALS['Data_DateTime_toEnum4'] = __NAMESPACE__ . '\\Data_DateTime_toEnum4';

// Data_DateTime_toEnum5
function Data_DateTime_toEnum5($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_toEnum5';
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
$GLOBALS['Data_DateTime_toEnum5'] = __NAMESPACE__ . '\\Data_DateTime_toEnum5';

// Data_DateTime_toEnum6
function Data_DateTime_toEnum6($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_toEnum6';
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
$GLOBALS['Data_DateTime_toEnum6'] = __NAMESPACE__ . '\\Data_DateTime_toEnum6';

// Data_DateTime_DateTime
function Data_DateTime_DateTime($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_DateTime';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("DateTime", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_DateTime_DateTime'] = __NAMESPACE__ . '\\Data_DateTime_DateTime';

// Data_DateTime_toRecord
function Data_DateTime_toRecord($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_toRecord';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "DateTime":
$d = ($__case_0)->v0;
$t = ($__case_0)->v1;
return (object)["year" => (($GLOBALS['Data_DateTime_fromEnum'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_fromEnum')))((($GLOBALS['Data_Date_year'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_year')))($d)), "month" => (($GLOBALS['Data_DateTime_fromEnum1'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_fromEnum1')))((($GLOBALS['Data_Date_month'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_month')))($d)), "day" => (($GLOBALS['Data_DateTime_fromEnum2'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_fromEnum2')))((($GLOBALS['Data_Date_day'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_day')))($d)), "hour" => (($GLOBALS['Data_DateTime_fromEnum3'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_fromEnum3')))((($GLOBALS['Data_Time_hour'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_hour')))($t)), "minute" => (($GLOBALS['Data_DateTime_fromEnum4'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_fromEnum4')))((($GLOBALS['Data_Time_minute'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_minute')))($t)), "second" => (($GLOBALS['Data_DateTime_fromEnum5'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_fromEnum5')))((($GLOBALS['Data_Time_second'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_second')))($t)), "millisecond" => (($GLOBALS['Data_DateTime_fromEnum6'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_fromEnum6')))((($GLOBALS['Data_Time_millisecond'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_millisecond')))($t))];
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_toRecord'] = __NAMESPACE__ . '\\Data_DateTime_toRecord';

// Data_DateTime_time
function Data_DateTime_time($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_time';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "DateTime":
$t = ($__case_0)->v1;
return $t;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_time'] = __NAMESPACE__ . '\\Data_DateTime_time';


// Data_DateTime_modifyTimeF
function Data_DateTime_modifyTimeF($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_modifyTimeF';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (function() use ($map1) {
  $__body = function($f, $v) use ($map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "DateTime":
$f1 = $__case_0;
$d = ($__case_1)->v0;
$t = ($__case_1)->v1;
return ($map1)((($GLOBALS['Data_DateTime_DateTime'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_DateTime')))($d), ($f1)($t));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($map1, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_modifyTimeF'] = __NAMESPACE__ . '\\Data_DateTime_modifyTimeF';

// Data_DateTime_modifyTime
function Data_DateTime_modifyTime($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_modifyTime';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "DateTime":
$f1 = $__case_0;
$d = ($__case_1)->v0;
$t = ($__case_1)->v1;
return (($GLOBALS['Data_DateTime_DateTime'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_DateTime')))($d, ($f1)($t));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_DateTime_modifyTime'] = __NAMESPACE__ . '\\Data_DateTime_modifyTime';

// Data_DateTime_modifyDateF
function Data_DateTime_modifyDateF($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_modifyDateF';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (function() use ($map1) {
  $__body = function($f, $v) use ($map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "DateTime":
$f1 = $__case_0;
$d = ($__case_1)->v0;
$t = ($__case_1)->v1;
return ($map1)((($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($GLOBALS['Data_DateTime_DateTime'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_DateTime')), $t), ($f1)($d));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($map1, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_modifyDateF'] = __NAMESPACE__ . '\\Data_DateTime_modifyDateF';

// Data_DateTime_modifyDate
function Data_DateTime_modifyDate($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_modifyDate';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "DateTime":
$f1 = $__case_0;
$d = ($__case_1)->v0;
$t = ($__case_1)->v1;
return (($GLOBALS['Data_DateTime_DateTime'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_DateTime')))(($f1)($d), $t);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_DateTime_modifyDate'] = __NAMESPACE__ . '\\Data_DateTime_modifyDate';



// Data_DateTime_diff
function Data_DateTime_diff($dictDuration) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_diff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$toDuration = (($GLOBALS['Data_Time_Duration_toDuration'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_toDuration')))($dictDuration);
    $__res = (function() use ($toDuration) {
  $__fn = function($dt1, $dt2 = null) use ($toDuration, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dt2) use ($dt1, &$__fn) { return $__fn($dt1, $dt2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($toDuration)((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_DateTime_calcDiff'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_calcDiff')), (($GLOBALS['Data_DateTime_toRecord'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_toRecord')))($dt1), (($GLOBALS['Data_DateTime_toRecord'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_toRecord')))($dt2)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_diff'] = __NAMESPACE__ . '\\Data_DateTime_diff';

// Data_DateTime_date
function Data_DateTime_date($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_date';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "DateTime":
$d = ($__case_0)->v0;
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
$GLOBALS['Data_DateTime_date'] = __NAMESPACE__ . '\\Data_DateTime_date';


// Data_DateTime_adjust
function Data_DateTime_adjust($dictDuration) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_adjust';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$fromDuration = (($GLOBALS['Data_Time_Duration_fromDuration'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_fromDuration')))($dictDuration);
    $__res = (function() use ($fromDuration) {
  $__fn = function($d, $dt = null) use ($fromDuration, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dt) use ($d, &$__fn) { return $__fn($d, $dt); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_DateTime_bind'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_bind')))((($GLOBALS['Data_DateTime_adjustImpl'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_adjustImpl')))(($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')), ($fromDuration)($d), (($GLOBALS['Data_DateTime_toRecord'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_toRecord')))($dt)), (function() {
  $__fn = function($rec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_DateTime_apply'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_apply')))((($GLOBALS['Data_DateTime_map'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_map')))(($GLOBALS['Data_DateTime_DateTime'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_DateTime')), (($GLOBALS['Data_DateTime_join'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_join')))((($GLOBALS['Data_DateTime_apply'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_apply')))((($GLOBALS['Data_DateTime_apply'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_apply')))((($GLOBALS['Data_DateTime_map'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_map')))(($GLOBALS['Data_Date_exactDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_exactDate')), (($GLOBALS['Data_DateTime_toEnum'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_toEnum')))(($rec)->year)), (($GLOBALS['Data_DateTime_toEnum1'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_toEnum1')))(($rec)->month)), (($GLOBALS['Data_DateTime_toEnum2'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_toEnum2')))(($rec)->day)))), (($GLOBALS['Data_DateTime_apply'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_apply')))((($GLOBALS['Data_DateTime_apply'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_apply')))((($GLOBALS['Data_DateTime_apply'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_apply')))((($GLOBALS['Data_DateTime_map'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_map')))(($GLOBALS['Data_Time_Time'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_Time')), (($GLOBALS['Data_DateTime_toEnum3'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_toEnum3')))(($rec)->hour)), (($GLOBALS['Data_DateTime_toEnum4'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_toEnum4')))(($rec)->minute)), (($GLOBALS['Data_DateTime_toEnum5'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_toEnum5')))(($rec)->second)), (($GLOBALS['Data_DateTime_toEnum6'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_toEnum6')))(($rec)->millisecond)));
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
$GLOBALS['Data_DateTime_adjust'] = __NAMESPACE__ . '\\Data_DateTime_adjust';

