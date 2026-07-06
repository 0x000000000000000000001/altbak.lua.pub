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
      case 'Data_DateTime_Instant_fromJust': $v = (($GLOBALS['Data_Maybe_fromJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromJust')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_DateTime_Instant_toEnum': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_Component_boundedEnumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumMonth'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->toEnum;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_DateTime_Instant_append': $v = (function() {
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
      case 'Data_DateTime_Instant_show': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Duration_showMilliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_showMilliseconds'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_DateTime_Instant_conj': $v = (function() {
  $__case_0 = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->conj;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_DateTime_Instant_greaterThanOrEq': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  $compare3 = $__case_res_0;
  return (function() use ($compare3) {
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
})(); break;
      case 'Data_DateTime_Instant_negate': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ring_ringNumber'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sub;
} else {
throw new \Exception("Pattern match failure");
};
  $sub1 = $__case_res_0;
  $__case_0 = $dict;
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->zero;
} else {
throw new \Exception("Pattern match failure");
};
  $zero = $__case_res_1;
  return (function() use ($sub1, $zero) {
  $__fn = function($a) use ($sub1, $zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($sub1)($zero, $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_DateTime_Instant_lessThanOrEq': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  $compare3 = $__case_res_0;
  return (function() use ($compare3) {
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
})(); break;
      case 'Data_DateTime_Instant_fromEnum': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_Component_boundedEnumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumMonth'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->fromEnum;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_DateTime_Instant_bottom': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Component_boundedHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedHour'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_DateTime_Instant_bottom1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Component_boundedMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMinute'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_DateTime_Instant_bottom2': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Component_boundedSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedSecond'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_DateTime_Instant_bottom3': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Component_boundedMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMillisecond'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_DateTime_Instant_append1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Duration_semigroupMilliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_semigroupMilliseconds'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_DateTime_Instant_negateDuration': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Duration_durationMilliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_durationMilliseconds'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->toDuration;
} else {
throw new \Exception("Pattern match failure");
};
  $__case_0 = ($GLOBALS['Data_Time_Duration_durationMilliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_durationMilliseconds'));
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->fromDuration;
} else {
throw new \Exception("Pattern match failure");
};
  return (($GLOBALS['Data_Time_Duration_compose'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_compose')))($__case_res_0, (($GLOBALS['Data_Time_Duration_compose'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_compose')))((($GLOBALS['Data_Time_Duration_over'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_over')))(($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds')), ($GLOBALS['Data_Time_Duration_negate'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_negate'))), $__case_res_1));
})(); break;
      case 'Data_DateTime_Instant_toDateTime': $v = (function() {
  $mkDateTime = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial')))((function() {
  $__fn = function($__dollar____unused, $y = null, $mo = null, $d = null, $h = null, $mi = null, $s = null, $ms = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 8) {
    return phpurs_curry_fallback($__fn, func_get_args(), 8);
  }
$__global_Data_Date_canonicalDate = ($GLOBALS['Data_Date_canonicalDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_canonicalDate'));
$__global_Data_DateTime_Instant_fromJust = ($GLOBALS['Data_DateTime_Instant_fromJust'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_fromJust'));
$__global_Data_DateTime_Instant_toEnum = ($GLOBALS['Data_DateTime_Instant_toEnum'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_toEnum'));
    $__res = ((function() {
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
})())(($__global_Data_Date_canonicalDate)($y, ($__global_Data_DateTime_Instant_fromJust)(($__global_Data_DateTime_Instant_toEnum)($mo)), $d), ((function() {
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
})())($h, $mi, $s, $ms));
  return $__num > 8 ? $__res(...array_slice(func_get_args(), 8)) : $__res;
  };
  return $__fn;
})());
  return (($GLOBALS['Data_DateTime_Instant_toDateTimeImpl'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_toDateTimeImpl')))($mkDateTime);
})(); break;
      case 'Data_DateTime_Instant_showInstant': $v = (object)["show" => (function() {
  $__body = function($v) {
    $__global_Data_DateTime_Instant_append = ($GLOBALS['Data_DateTime_Instant_append'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_append'));
    $__global_Data_DateTime_Instant_show = ($GLOBALS['Data_DateTime_Instant_show'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_show'));
    $__case_0 = $v;
    if (true) {
$ms = $__case_0;
return ($__global_Data_DateTime_Instant_append)("(Instant ", ($__global_Data_DateTime_Instant_append)(($__global_Data_DateTime_Instant_show)($ms), ")"));
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
      case 'Data_DateTime_Instant_ordDateTime': $v = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber')); break;
      case 'Data_DateTime_Instant_eqDateTime': $v = ($GLOBALS['Data_Eq_eqNumber'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqNumber')); break;
      case 'Data_DateTime_Instant_boundedInstant': $v = (object)["bottom" => (($GLOBALS['Data_DateTime_Instant_negate'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_negate')))(8639977881600000.0), "top" => 8639977881599999.0, "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ord_ordNumber = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'));
    $__res = $__global_Data_Ord_ordNumber;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };

















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
    $__global_Data_Function_Uncurried_runFn7 = ($GLOBALS['Data_Function_Uncurried_runFn7'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn7'));
    $__global_Data_DateTime_Instant_fromDateTimeImpl = ($GLOBALS['Data_DateTime_Instant_fromDateTimeImpl'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_fromDateTimeImpl'));
    $__global_Data_Date_year = ($GLOBALS['Data_Date_year'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_year'));
    $__global_Data_DateTime_Instant_fromEnum = ($GLOBALS['Data_DateTime_Instant_fromEnum'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_fromEnum'));
    $__global_Data_Date_month = ($GLOBALS['Data_Date_month'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_month'));
    $__global_Data_Date_day = ($GLOBALS['Data_Date_day'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_day'));
    $__global_Data_Time_hour = ($GLOBALS['Data_Time_hour'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_hour'));
    $__global_Data_Time_minute = ($GLOBALS['Data_Time_minute'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_minute'));
    $__global_Data_Time_second = ($GLOBALS['Data_Time_second'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_second'));
    $__global_Data_Time_millisecond = ($GLOBALS['Data_Time_millisecond'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_millisecond'));
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "DateTime":
$d = ($__case_0)->v0;
$t = ($__case_0)->v1;
return ($__global_Data_Function_Uncurried_runFn7)($__global_Data_DateTime_Instant_fromDateTimeImpl, ($__global_Data_Date_year)($d), ($__global_Data_DateTime_Instant_fromEnum)(($__global_Data_Date_month)($d)), ($__global_Data_Date_day)($d), ($__global_Data_Time_hour)($t), ($__global_Data_Time_minute)($t), ($__global_Data_Time_second)($t), ($__global_Data_Time_millisecond)($t));
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
$__global_Data_Function_Uncurried_runFn7 = ($GLOBALS['Data_Function_Uncurried_runFn7'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn7'));
$__global_Data_DateTime_Instant_fromDateTimeImpl = ($GLOBALS['Data_DateTime_Instant_fromDateTimeImpl'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_fromDateTimeImpl'));
$__global_Data_Date_year = ($GLOBALS['Data_Date_year'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_year'));
$__global_Data_DateTime_Instant_fromEnum = ($GLOBALS['Data_DateTime_Instant_fromEnum'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_fromEnum'));
$__global_Data_Date_month = ($GLOBALS['Data_Date_month'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_month'));
$__global_Data_Date_day = ($GLOBALS['Data_Date_day'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_day'));
$__global_Data_DateTime_Instant_bottom = ($GLOBALS['Data_DateTime_Instant_bottom'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_bottom'));
$__global_Data_DateTime_Instant_bottom1 = ($GLOBALS['Data_DateTime_Instant_bottom1'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_bottom1'));
$__global_Data_DateTime_Instant_bottom2 = ($GLOBALS['Data_DateTime_Instant_bottom2'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_bottom2'));
$__global_Data_DateTime_Instant_bottom3 = ($GLOBALS['Data_DateTime_Instant_bottom3'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_bottom3'));
    $__res = ($__global_Data_Function_Uncurried_runFn7)($__global_Data_DateTime_Instant_fromDateTimeImpl, ($__global_Data_Date_year)($d), ($__global_Data_DateTime_Instant_fromEnum)(($__global_Data_Date_month)($d)), ($__global_Data_Date_day)($d), $__global_Data_DateTime_Instant_bottom, $__global_Data_DateTime_Instant_bottom1, $__global_Data_DateTime_Instant_bottom2, $__global_Data_DateTime_Instant_bottom3);
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
$__global_Data_DateTime_Instant_append1 = ($GLOBALS['Data_DateTime_Instant_append1'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_append1'));
$__global_Data_DateTime_Instant_unInstant = ($GLOBALS['Data_DateTime_Instant_unInstant'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_unInstant'));
$__global_Data_DateTime_Instant_negateDuration = ($GLOBALS['Data_DateTime_Instant_negateDuration'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_negateDuration'));
$__case_0 = $dictDuration;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->toDuration;
} else {
throw new \Exception("Pattern match failure");
};
$toDuration = $__case_res_0;
    $__res = (function() use ($toDuration, $__global_Data_DateTime_Instant_append1, $__global_Data_DateTime_Instant_unInstant, $__global_Data_DateTime_Instant_negateDuration) {
  $__fn = function($dt1, $dt2 = null) use ($toDuration, $__global_Data_DateTime_Instant_append1, $__global_Data_DateTime_Instant_unInstant, $__global_Data_DateTime_Instant_negateDuration, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dt2) use ($dt1, &$__fn) { return $__fn($dt1, $dt2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($toDuration)(($__global_Data_DateTime_Instant_append1)(($__global_Data_DateTime_Instant_unInstant)($dt1), ($__global_Data_DateTime_Instant_negateDuration)(($__global_Data_DateTime_Instant_unInstant)($dt2))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_Instant_diff'] = __NAMESPACE__ . '\\Data_DateTime_Instant_diff';


