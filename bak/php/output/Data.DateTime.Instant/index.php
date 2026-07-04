<?php

namespace Data\DateTime\Instant;

require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Date/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.DateTime/index.php';
require_once __DIR__ . '/../Data.DateTime.Instant/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Time/index.php';
require_once __DIR__ . '/../Data.Time.Component/index.php';
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
      case 'Data_DateTime_Instant_fromJust': $v = (($GLOBALS['Data_Maybe_fromJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromJust')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_DateTime_Instant_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_DateTime_Instant_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_DateTime_Instant_greaterThanOrEq': $v = (($GLOBALS['Data_Ord_greaterThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThanOrEq')))(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      case 'Data_DateTime_Instant_negate': $v = (($GLOBALS['Data_Ring_negate'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_negate')))(($GLOBALS['Data_Ring_ringNumber'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringNumber'))); break;
      case 'Data_DateTime_Instant_lessThanOrEq': $v = (($GLOBALS['Data_Ord_lessThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThanOrEq')))(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      case 'Data_DateTime_Instant_bottom': $v = (($GLOBALS['Data_Time_Component_Hour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_Hour')))(0); break;
      case 'Data_DateTime_Instant_bottom1': $v = (($GLOBALS['Data_Time_Component_Minute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_Minute')))(0); break;
      case 'Data_DateTime_Instant_bottom2': $v = (($GLOBALS['Data_Time_Component_Second'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_Second')))(0); break;
      case 'Data_DateTime_Instant_bottom3': $v = (($GLOBALS['Data_Time_Component_Millisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_Millisecond')))(0); break;
      case 'Data_DateTime_Instant_negateDuration': $v = (($GLOBALS['Data_Time_Duration_negateDuration'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_negateDuration')))(($GLOBALS['Data_Time_Duration_durationMilliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_durationMilliseconds'))); break;
      case 'Data_DateTime_Instant_toDateTime': $v = ($mkDateTime = (($GLOBALS['Partial_Unsafe_unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafePartial')))((function() {
  $__fn = function($__dollar____unused, $y = null, $mo = null, $d = null, $h = null, $mi = null, $s = null, $ms = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 8) {
    return phpurs_curry_fallback($__fn, func_get_args(), 8);
  }
    $__res = (($GLOBALS['Data_DateTime_DateTime'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_DateTime')))((($GLOBALS['Data_Date_canonicalDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_canonicalDate')))($y, (($GLOBALS['Data_DateTime_Instant_fromJust'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_fromJust')))((($GLOBALS['Data_DateTime_Instant_toEnum'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_toEnum')))($mo)), $d), (($GLOBALS['Data_Time_Time'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_Time')))($h, $mi, $s, $ms));
  return $__num > 8 ? $__res(...array_slice(func_get_args(), 8)) : $__res;
  };
  return $__fn;
})());
return (($GLOBALS['Data_DateTime_Instant_toDateTimeImpl'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_toDateTimeImpl')))($mkDateTime);)(); break;
      case 'Data_DateTime_Instant_showInstant': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$ms = $__case_0;
return (($GLOBALS['Data_DateTime_Instant_append'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_append')))("(Instant ", (($GLOBALS['Data_DateTime_Instant_append'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_append')))((($GLOBALS['Data_DateTime_Instant_show'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_show')))($ms), ")"));
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
      case 'Data_DateTime_Instant_ordDateTime': $v = ($GLOBALS['Data_Time_Duration_ordMilliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_ordMilliseconds')); break;
      case 'Data_DateTime_Instant_eqDateTime': $v = ($GLOBALS['Data_Time_Duration_eqMilliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_eqMilliseconds')); break;
      case 'Data_DateTime_Instant_boundedInstant': $v = (($GLOBALS['Data_Bounded_Bounded__dollar__Dict'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_Bounded__dollar__Dict')))((object)["bottom" => (($GLOBALS['Data_DateTime_Instant_Instant'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_Instant')))((($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds')))((($GLOBALS['Data_DateTime_Instant_negate'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_negate')))(8639977881600000.0))), "top" => (($GLOBALS['Data_DateTime_Instant_Instant'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_Instant')))((($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds')))(8639977881599999.0)), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_DateTime_Instant_ordDateTime'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_ordDateTime'));
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



// Data_DateTime_Instant_toEnum
function Data_DateTime_Instant_toEnum($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_Instant_toEnum';
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
$GLOBALS['Data_DateTime_Instant_toEnum'] = __NAMESPACE__ . '\\Data_DateTime_Instant_toEnum';


// Data_DateTime_Instant_show
function Data_DateTime_Instant_show($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_Instant_show';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return (($GLOBALS['Data_Time_Duration_append'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_append')))("(Milliseconds ", (($GLOBALS['Data_Time_Duration_append'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_append')))((($GLOBALS['Data_Time_Duration_show'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_show')))($n), ")"));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_Instant_show'] = __NAMESPACE__ . '\\Data_DateTime_Instant_show';





// Data_DateTime_Instant_fromEnum
function Data_DateTime_Instant_fromEnum($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_Instant_fromEnum';
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
$GLOBALS['Data_DateTime_Instant_fromEnum'] = __NAMESPACE__ . '\\Data_DateTime_Instant_fromEnum';





// Data_DateTime_Instant_append1
function Data_DateTime_Instant_append1($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_Instant_append1';
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
$GLOBALS['Data_DateTime_Instant_append1'] = __NAMESPACE__ . '\\Data_DateTime_Instant_append1';


// Data_DateTime_Instant_Instant
function Data_DateTime_Instant_Instant($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_Instant_Instant';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_Instant_Instant'] = __NAMESPACE__ . '\\Data_DateTime_Instant_Instant';

// Data_DateTime_Instant_unInstant
function Data_DateTime_Instant_unInstant($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_Instant_unInstant';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$ms = $__case_0;
return $ms;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_Instant_unInstant'] = __NAMESPACE__ . '\\Data_DateTime_Instant_unInstant';




// Data_DateTime_Instant_instant
function Data_DateTime_Instant_instant($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_Instant_instant';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$ms = $__case_0;
$n = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_Instant_instant'] = __NAMESPACE__ . '\\Data_DateTime_Instant_instant';

// Data_DateTime_Instant_fromDateTime
function Data_DateTime_Instant_fromDateTime($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_Instant_fromDateTime';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "DateTime":
$d = ($__case_0)->v0;
$t = ($__case_0)->v1;
return (($GLOBALS['Data_Function_Uncurried_runFn7'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn7')))(($GLOBALS['Data_DateTime_Instant_fromDateTimeImpl'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_fromDateTimeImpl')), (($GLOBALS['Data_Date_year'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_year')))($d), (($GLOBALS['Data_DateTime_Instant_fromEnum'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_fromEnum')))((($GLOBALS['Data_Date_month'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_month')))($d)), (($GLOBALS['Data_Date_day'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_day')))($d), (($GLOBALS['Data_Time_hour'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_hour')))($t), (($GLOBALS['Data_Time_minute'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_minute')))($t), (($GLOBALS['Data_Time_second'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_second')))($t), (($GLOBALS['Data_Time_millisecond'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_millisecond')))($t));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_Instant_fromDateTime'] = __NAMESPACE__ . '\\Data_DateTime_Instant_fromDateTime';

// Data_DateTime_Instant_fromDate
function Data_DateTime_Instant_fromDate($d) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_Instant_fromDate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Function_Uncurried_runFn7'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn7')))(($GLOBALS['Data_DateTime_Instant_fromDateTimeImpl'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_fromDateTimeImpl')), (($GLOBALS['Data_Date_year'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_year')))($d), (($GLOBALS['Data_DateTime_Instant_fromEnum'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_fromEnum')))((($GLOBALS['Data_Date_month'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_month')))($d)), (($GLOBALS['Data_Date_day'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_day')))($d), ($GLOBALS['Data_DateTime_Instant_bottom'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_bottom')), ($GLOBALS['Data_DateTime_Instant_bottom1'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_bottom1')), ($GLOBALS['Data_DateTime_Instant_bottom2'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_bottom2')), ($GLOBALS['Data_DateTime_Instant_bottom3'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_bottom3')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_Instant_fromDate'] = __NAMESPACE__ . '\\Data_DateTime_Instant_fromDate';


// Data_DateTime_Instant_diff
function Data_DateTime_Instant_diff($dictDuration) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_Instant_diff';
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
    $__res = ($toDuration)((($GLOBALS['Data_DateTime_Instant_append1'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_append1')))((($GLOBALS['Data_DateTime_Instant_unInstant'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_unInstant')))($dt1), (($GLOBALS['Data_DateTime_Instant_negateDuration'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_negateDuration')))((($GLOBALS['Data_DateTime_Instant_unInstant'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_unInstant')))($dt2))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_Instant_diff'] = __NAMESPACE__ . '\\Data_DateTime_Instant_diff';


