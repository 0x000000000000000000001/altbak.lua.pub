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
      case 'Data_Time_append': $v = (function() {
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
      case 'Data_Time_show': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Component_showHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_showHour'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_show1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Component_showMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_showMinute'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_show2': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Component_showSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_showSecond'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_show3': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Component_showMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_showMillisecond'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_div': $v = (function() {
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
      case 'Data_Time_sub': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ring_ringNumber'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sub;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_mul': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semiring_semiringNumber'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->mul;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_add': $v = (function() {
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
      case 'Data_Time_fromJust': $v = (($GLOBALS['Data_Maybe_fromJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromJust')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Time_apply': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Maybe_applyMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_applyMaybe'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_map': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_toEnum': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Component_boundedEnumHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumHour'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->toEnum;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_toEnum1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Component_boundedEnumMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMinute'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->toEnum;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_toEnum2': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Component_boundedEnumSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumSecond'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->toEnum;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_toEnum3': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Component_boundedEnumMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMillisecond'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->toEnum;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_fromEnum': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Component_boundedEnumHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumHour'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->fromEnum;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_fromEnum1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Component_boundedEnumMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMinute'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->fromEnum;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_fromEnum2': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Component_boundedEnumSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumSecond'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->fromEnum;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_fromEnum3': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Component_boundedEnumMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMillisecond'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->fromEnum;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_conj': $v = (function() {
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
      case 'Data_Time_eq': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_eq1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_eq2': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_eq3': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_compare': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_compare1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_compare2': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_compare3': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_append1': $v = (function() {
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
      case 'Data_Time_negateDuration': $v = (function() {
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
      case 'Data_Time_unwrap': $v = (($GLOBALS['Data_Newtype_unwrap'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Time_fromDuration': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Duration_durationDays'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_durationDays'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->fromDuration;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_greaterThan': $v = (function() {
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
})(); break;
      case 'Data_Time_lessThan': $v = (function() {
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
})(); break;
      case 'Data_Time_negate': $v = (function() {
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
      case 'Data_Time_append2': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Duration_semigroupDays'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_semigroupDays'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_showTime': $v = (object)["show" => (function() {
  $__body = function($v) {
    $__global_Data_Time_append = ($GLOBALS['Data_Time_append'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_append'));
    $__global_Data_Time_show = ($GLOBALS['Data_Time_show'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_show'));
    $__global_Data_Time_show1 = ($GLOBALS['Data_Time_show1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_show1'));
    $__global_Data_Time_show2 = ($GLOBALS['Data_Time_show2'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_show2'));
    $__global_Data_Time_show3 = ($GLOBALS['Data_Time_show3'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_show3'));
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Time":
$h = ($__case_0)->v0;
$m = ($__case_0)->v1;
$s = ($__case_0)->v2;
$ms = ($__case_0)->v3;
return ($__global_Data_Time_append)("(Time ", ($__global_Data_Time_append)(($__global_Data_Time_show)($h), ($__global_Data_Time_append)(" ", ($__global_Data_Time_append)(($__global_Data_Time_show1)($m), ($__global_Data_Time_append)(" ", ($__global_Data_Time_append)(($__global_Data_Time_show2)($s), ($__global_Data_Time_append)(" ", ($__global_Data_Time_append)(($__global_Data_Time_show3)($ms), ")"))))))));
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
      case 'Data_Time_eqTime': $v = (object)["eq" => (function() {
  $__body = function($x, $y) {
    $__global_Data_Time_conj = ($GLOBALS['Data_Time_conj'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_conj'));
    $__global_Data_Time_eq = ($GLOBALS['Data_Time_eq'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_eq'));
    $__global_Data_Time_eq1 = ($GLOBALS['Data_Time_eq1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_eq1'));
    $__global_Data_Time_eq2 = ($GLOBALS['Data_Time_eq2'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_eq2'));
    $__global_Data_Time_eq3 = ($GLOBALS['Data_Time_eq3'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_eq3'));
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
return ($__global_Data_Time_conj)(($__global_Data_Time_conj)(($__global_Data_Time_conj)(($__global_Data_Time_eq)($l, $r), ($__global_Data_Time_eq1)($l1, $r1)), ($__global_Data_Time_eq2)($l2, $r2)), ($__global_Data_Time_eq3)($l3, $r3));
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
      case 'Data_Time_ordTime': $v = (object)["compare" => (function() {
  $__body = function($x, $y) {
    $__global_Data_Time_compare = ($GLOBALS['Data_Time_compare'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_compare'));
    $__global_Data_Time_compare1 = ($GLOBALS['Data_Time_compare1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_compare1'));
    $__global_Data_Time_compare2 = ($GLOBALS['Data_Time_compare2'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_compare2'));
    $__global_Data_Time_compare3 = ($GLOBALS['Data_Time_compare3'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_compare3'));
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
$v = ($__global_Data_Time_compare)($l, $r);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "LT":
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
case "GT":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
$v1 = ($__global_Data_Time_compare1)($l1, $r1);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
case "GT":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
$v2 = ($__global_Data_Time_compare2)($l2, $r2);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "LT":
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
case "GT":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
return ($__global_Data_Time_compare3)($l3, $r3);
break;
};
break;
};
break;
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
$__global_Data_Time_eqTime = ($GLOBALS['Data_Time_eqTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_eqTime'));
    $__res = $__global_Data_Time_eqTime;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Time_boundedTime': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_Component_boundedHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedHour'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
  $__case_0 = ($GLOBALS['Data_Time_Component_boundedMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMinute'));
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
  $__case_0 = ($GLOBALS['Data_Time_Component_boundedSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedSecond'));
  $__case_res_2 = null;
  if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
  $__case_0 = ($GLOBALS['Data_Time_Component_boundedMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMillisecond'));
  $__case_res_3 = null;
  if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
  $__case_0 = ($GLOBALS['Data_Time_Component_boundedHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedHour'));
  $__case_res_4 = null;
  if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->top;
} else {
throw new \Exception("Pattern match failure");
};
  $__case_0 = ($GLOBALS['Data_Time_Component_boundedMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMinute'));
  $__case_res_5 = null;
  if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->top;
} else {
throw new \Exception("Pattern match failure");
};
  $__case_0 = ($GLOBALS['Data_Time_Component_boundedSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedSecond'));
  $__case_res_6 = null;
  if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->top;
} else {
throw new \Exception("Pattern match failure");
};
  $__case_0 = ($GLOBALS['Data_Time_Component_boundedMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMillisecond'));
  $__case_res_7 = null;
  if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->top;
} else {
throw new \Exception("Pattern match failure");
};
  return (object)["bottom" => ((function() {
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
})())($__case_res_0, $__case_res_1, $__case_res_2, $__case_res_3), "top" => ((function() {
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
})())($__case_res_4, $__case_res_5, $__case_res_6, $__case_res_7), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Time_ordTime = ($GLOBALS['Data_Time_ordTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_ordTime'));
    $__res = $__global_Data_Time_ordTime;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      case 'Data_Time_maxTime': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_boundedTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_boundedTime'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->top;
} else {
throw new \Exception("Pattern match failure");
};
  return (($GLOBALS['Data_Time_timeToMillis'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_timeToMillis')))($__case_res_0);
})(); break;
      case 'Data_Time_minTime': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Time_boundedTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_boundedTime'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
  return (($GLOBALS['Data_Time_timeToMillis'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_timeToMillis')))($__case_res_0);
})(); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };







































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
return ((function() {
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
})())($h, $m, $s1, $ms);
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
return ((function() {
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
})())($h, $m1, $s, $ms);
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
return ((function() {
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
})())($h, $m, $s, $ms1);
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
return ((function() {
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
})())($h1, $m, $s, $ms);
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
    $__global_Data_Number_floor = ($GLOBALS['Data_Number_floor'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_floor'));
    $__global_Data_Time_div = ($GLOBALS['Data_Time_div'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_div'));
    $__global_Data_Time_sub = ($GLOBALS['Data_Time_sub'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_sub'));
    $__global_Data_Time_mul = ($GLOBALS['Data_Time_mul'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_mul'));
    $__global_Data_Time_add = ($GLOBALS['Data_Time_add'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_add'));
    $__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
    $__global_Data_Time_fromJust = ($GLOBALS['Data_Time_fromJust'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_fromJust'));
    $__global_Data_Time_apply = ($GLOBALS['Data_Time_apply'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_apply'));
    $__global_Data_Time_map = ($GLOBALS['Data_Time_map'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_map'));
    $__global_Data_Time_toEnum = ($GLOBALS['Data_Time_toEnum'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_toEnum'));
    $__global_Data_Int_floor = ($GLOBALS['Data_Int_floor'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_floor'));
    $__global_Data_Time_toEnum1 = ($GLOBALS['Data_Time_toEnum1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_toEnum1'));
    $__global_Data_Time_toEnum2 = ($GLOBALS['Data_Time_toEnum2'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_toEnum2'));
    $__global_Data_Time_toEnum3 = ($GLOBALS['Data_Time_toEnum3'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_toEnum3'));
    $__case_0 = $v;
    if (true) {
$ms__prime__ = $__case_0;
$secondLength = 1000.0;
$minuteLength = 60000.0;
$hourLength = 3600000.0;
$hours = ($__global_Data_Number_floor)(($__global_Data_Time_div)($ms__prime__, 3600000.0));
$minutes = ($__global_Data_Number_floor)(($__global_Data_Time_div)(($__global_Data_Time_sub)($ms__prime__, ($__global_Data_Time_mul)($hours, 3600000.0)), 60000.0));
$seconds = ($__global_Data_Number_floor)(($__global_Data_Time_div)(($__global_Data_Time_sub)($ms__prime__, ($__global_Data_Time_add)(($__global_Data_Time_mul)($hours, 3600000.0), ($__global_Data_Time_mul)($minutes, 60000.0))), 1000.0));
$milliseconds = ($__global_Data_Time_sub)($ms__prime__, ($__global_Data_Time_add)(($__global_Data_Time_add)(($__global_Data_Time_mul)($hours, 3600000.0), ($__global_Data_Time_mul)($minutes, 60000.0)), ($__global_Data_Time_mul)($seconds, 1000.0)));
return ($__global_Partial_Unsafe__unsafePartial)((function() use ($__global_Data_Time_fromJust) {
  $__fn = function($__dollar____unused) use ($__global_Data_Time_fromJust, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__global_Data_Time_fromJust;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_Time_apply)(($__global_Data_Time_apply)(($__global_Data_Time_apply)(($__global_Data_Time_map)((function() {
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
})(), ($__global_Data_Time_toEnum)(($__global_Data_Int_floor)($hours))), ($__global_Data_Time_toEnum1)(($__global_Data_Int_floor)($minutes))), ($__global_Data_Time_toEnum2)(($__global_Data_Int_floor)($seconds))), ($__global_Data_Time_toEnum3)(($__global_Data_Int_floor)($milliseconds))));
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
$__global_Data_Time_add = ($GLOBALS['Data_Time_add'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_add'));
$__global_Data_Time_mul = ($GLOBALS['Data_Time_mul'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_mul'));
$__global_Data_Int_toNumber = ($GLOBALS['Data_Int_toNumber'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_toNumber'));
$__global_Data_Time_fromEnum = ($GLOBALS['Data_Time_fromEnum'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_fromEnum'));
$__global_Data_Time_hour = ($GLOBALS['Data_Time_hour'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_hour'));
$__global_Data_Time_fromEnum1 = ($GLOBALS['Data_Time_fromEnum1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_fromEnum1'));
$__global_Data_Time_minute = ($GLOBALS['Data_Time_minute'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_minute'));
$__global_Data_Time_fromEnum2 = ($GLOBALS['Data_Time_fromEnum2'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_fromEnum2'));
$__global_Data_Time_second = ($GLOBALS['Data_Time_second'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_second'));
$__global_Data_Time_fromEnum3 = ($GLOBALS['Data_Time_fromEnum3'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_fromEnum3'));
$__global_Data_Time_millisecond = ($GLOBALS['Data_Time_millisecond'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_millisecond'));
    $__res = ($__global_Data_Time_add)(($__global_Data_Time_add)(($__global_Data_Time_add)(($__global_Data_Time_mul)(3600000.0, ($__global_Data_Int_toNumber)(($__global_Data_Time_fromEnum)(($__global_Data_Time_hour)($t)))), ($__global_Data_Time_mul)(60000.0, ($__global_Data_Int_toNumber)(($__global_Data_Time_fromEnum1)(($__global_Data_Time_minute)($t))))), ($__global_Data_Time_mul)(1000.0, ($__global_Data_Int_toNumber)(($__global_Data_Time_fromEnum2)(($__global_Data_Time_second)($t))))), ($__global_Data_Int_toNumber)(($__global_Data_Time_fromEnum3)(($__global_Data_Time_millisecond)($t))));
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
$__global_Data_Time_append1 = ($GLOBALS['Data_Time_append1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_append1'));
$__global_Data_Time_timeToMillis = ($GLOBALS['Data_Time_timeToMillis'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_timeToMillis'));
$__global_Data_Time_negateDuration = ($GLOBALS['Data_Time_negateDuration'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_negateDuration'));
$__case_0 = $dictDuration;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->toDuration;
} else {
throw new \Exception("Pattern match failure");
};
$toDuration = $__case_res_0;
    $__res = (function() use ($toDuration, $__global_Data_Time_append1, $__global_Data_Time_timeToMillis, $__global_Data_Time_negateDuration) {
  $__fn = function($t1, $t2 = null) use ($toDuration, $__global_Data_Time_append1, $__global_Data_Time_timeToMillis, $__global_Data_Time_negateDuration, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t2) use ($t1, &$__fn) { return $__fn($t1, $t2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($toDuration)(($__global_Data_Time_append1)(($__global_Data_Time_timeToMillis)($t1), ($__global_Data_Time_negateDuration)(($__global_Data_Time_timeToMillis)($t2))));
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
$__global_Data_Time_timeToMillis = ($GLOBALS['Data_Time_timeToMillis'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_timeToMillis'));
$__global_Data_Number_floor = ($GLOBALS['Data_Number_floor'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_floor'));
$__global_Data_Time_div = ($GLOBALS['Data_Time_div'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_div'));
$__global_Data_Time_unwrap = ($GLOBALS['Data_Time_unwrap'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_unwrap'));
$__global_Data_Time_append1 = ($GLOBALS['Data_Time_append1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_append1'));
$__global_Data_Time_negateDuration = ($GLOBALS['Data_Time_negateDuration'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_negateDuration'));
$__global_Data_Time_fromDuration = ($GLOBALS['Data_Time_fromDuration'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_fromDuration'));
$__global_Data_Time_greaterThan = ($GLOBALS['Data_Time_greaterThan'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_greaterThan'));
$__global_Data_Time_maxTime = ($GLOBALS['Data_Time_maxTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_maxTime'));
$__global_Data_Time_lessThan = ($GLOBALS['Data_Time_lessThan'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_lessThan'));
$__global_Data_Time_minTime = ($GLOBALS['Data_Time_minTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_minTime'));
$__global_Data_Time_negate = ($GLOBALS['Data_Time_negate'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_negate'));
$__global_Data_Time_append2 = ($GLOBALS['Data_Time_append2'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_append2'));
$__global_Data_Time_millisToTime = ($GLOBALS['Data_Time_millisToTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_millisToTime'));
$__global_Data_Time_mul = ($GLOBALS['Data_Time_mul'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_mul'));
$__case_0 = $dictDuration;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->fromDuration;
} else {
throw new \Exception("Pattern match failure");
};
$fromDuration1 = $__case_res_0;
    $__res = (function() use ($__global_Data_Time_timeToMillis, $fromDuration1, $__global_Data_Number_floor, $__global_Data_Time_div, $__global_Data_Time_unwrap, $__global_Data_Time_append1, $__global_Data_Time_negateDuration, $__global_Data_Time_fromDuration, $__global_Data_Time_greaterThan, $__global_Data_Time_maxTime, $__global_Data_Time_lessThan, $__global_Data_Time_minTime, $__global_Data_Time_negate, $__global_Data_Time_append2, $__global_Data_Time_millisToTime, $__global_Data_Time_mul) {
  $__fn = function($d, $t = null) use ($__global_Data_Time_timeToMillis, $fromDuration1, $__global_Data_Number_floor, $__global_Data_Time_div, $__global_Data_Time_unwrap, $__global_Data_Time_append1, $__global_Data_Time_negateDuration, $__global_Data_Time_fromDuration, $__global_Data_Time_greaterThan, $__global_Data_Time_maxTime, $__global_Data_Time_lessThan, $__global_Data_Time_minTime, $__global_Data_Time_negate, $__global_Data_Time_append2, $__global_Data_Time_millisToTime, $__global_Data_Time_mul, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($d, &$__fn) { return $__fn($d, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$tLength = ($__global_Data_Time_timeToMillis)($t);
$dayLength = 86400000.0;
$d__prime__ = ($fromDuration1)($d);
$wholeDays = ($__global_Data_Number_floor)(($__global_Data_Time_div)(($__global_Data_Time_unwrap)($d__prime__), 86400000.0));
$msAdjust = ($__global_Data_Time_append1)($d__prime__, ($__global_Data_Time_negateDuration)(($__global_Data_Time_fromDuration)($wholeDays)));
$msAdjusted = ($__global_Data_Time_append1)($tLength, $msAdjust);
$__case_0 = ($__global_Data_Time_greaterThan)($msAdjusted, $__global_Data_Time_maxTime);
$__case_res_1 = null;
switch ($__case_0) {
case true:
$__case_res_1 = 1.0;
break;
default:
$__case_0 = ($__global_Data_Time_lessThan)($msAdjusted, $__global_Data_Time_minTime);
$__case_res_2 = null;
switch ($__case_0) {
case true:
$__case_res_2 = ($__global_Data_Time_negate)(1.0);
break;
default:
$__case_res_2 = 0.0;
break;
};
$__case_res_1 = $__case_res_2;
break;
};
$wrap = $__case_res_1;
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
})())(($__global_Data_Time_append2)($wholeDays, $wrap), ($__global_Data_Time_millisToTime)(($__global_Data_Time_append1)($msAdjusted, ($__global_Data_Time_mul)(86400000.0, ($__global_Data_Time_negate)($wrap)))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_adjust'] = __NAMESPACE__ . '\\Data_Time_adjust';

