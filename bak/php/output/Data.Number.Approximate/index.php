<?php

namespace Data\Number\Approximate;

require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Number/index.php';
require_once __DIR__ . '/../Data.Number.Approximate/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
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
      case 'Data_Number_Approximate_lessThanOrEq': $v = (function() {
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
      case 'Data_Number_Approximate_sub': $v = (function() {
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
      case 'Data_Number_Approximate_div': $v = (function() {
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
      case 'Data_Number_Approximate_mul': $v = (function() {
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
      case 'Data_Number_Approximate_add': $v = (function() {
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
      case 'Data_Number_Approximate_not': $v = (function() {
  $__case_0 = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->not;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Number_Approximate_eqApproximate': $v = (function() {
  $onePPM = 0.000001;
  return (($GLOBALS['Data_Number_Approximate_eqRelative'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_eqRelative')))(0.000001);
})(); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };








// Data_Number_Approximate_Tolerance
function Data_Number_Approximate_Tolerance($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Number_Approximate_Tolerance';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Number_Approximate_Tolerance'] = __NAMESPACE__ . '\\Data_Number_Approximate_Tolerance';

// Data_Number_Approximate_Fraction
function Data_Number_Approximate_Fraction($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Number_Approximate_Fraction';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Number_Approximate_Fraction'] = __NAMESPACE__ . '\\Data_Number_Approximate_Fraction';

// Data_Number_Approximate_eqRelative
function Data_Number_Approximate_eqRelative($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Number_Approximate_eqRelative';
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($v, $v1, $v2) {
    $__global_Data_Number_Approximate_lessThanOrEq = ($GLOBALS['Data_Number_Approximate_lessThanOrEq'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_lessThanOrEq'));
    $__global_Data_Number_abs = ($GLOBALS['Data_Number_abs'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_abs'));
    $__global_Data_Number_Approximate_sub = ($GLOBALS['Data_Number_Approximate_sub'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_sub'));
    $__global_Data_Number_Approximate_div = ($GLOBALS['Data_Number_Approximate_div'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_div'));
    $__global_Data_Number_Approximate_mul = ($GLOBALS['Data_Number_Approximate_mul'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_mul'));
    $__global_Data_Number_Approximate_add = ($GLOBALS['Data_Number_Approximate_add'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_add'));
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if (($__case_1 === 0.0)) {
$frac = $__case_0;
$y = $__case_2;
return ($__global_Data_Number_Approximate_lessThanOrEq)(($__global_Data_Number_abs)($y), $frac);
} else {
switch ($__case_2) {
case 0.0:
$frac = $__case_0;
$x = $__case_1;
return ($__global_Data_Number_Approximate_lessThanOrEq)(($__global_Data_Number_abs)($x), $frac);
break;
default:
$frac = $__case_0;
$x = $__case_1;
$y = $__case_2;
return ($__global_Data_Number_Approximate_lessThanOrEq)(($__global_Data_Number_abs)(($__global_Data_Number_Approximate_sub)($x, $y)), ($__global_Data_Number_Approximate_div)(($__global_Data_Number_Approximate_mul)($frac, ($__global_Data_Number_abs)(($__global_Data_Number_Approximate_add)($x, $y))), 2.0));
break;
};
};
  };
    $__res = $__body($v, $v1, $v2);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Number_Approximate_eqRelative'] = __NAMESPACE__ . '\\Data_Number_Approximate_eqRelative';


// Data_Number_Approximate_neqApproximate
function Data_Number_Approximate_neqApproximate($x, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Number_Approximate_neqApproximate';
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, $__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Number_Approximate_not = ($GLOBALS['Data_Number_Approximate_not'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_not'));
$__global_Data_Number_Approximate_eqApproximate = ($GLOBALS['Data_Number_Approximate_eqApproximate'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_eqApproximate'));
    $__res = ($__global_Data_Number_Approximate_not)(($__global_Data_Number_Approximate_eqApproximate)($x, $y));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Number_Approximate_neqApproximate'] = __NAMESPACE__ . '\\Data_Number_Approximate_neqApproximate';

// Data_Number_Approximate_eqAbsolute
function Data_Number_Approximate_eqAbsolute($v, $x = null, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Number_Approximate_eqAbsolute';
  if ($__num < 3) {
    if ($__num === 2) return function($y) use ($v, $x, $__fn) { return $__fn($v, $x, $y); };
    if ($__num === 1) return function($x, $y = null) use ($v, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $x, $y);
      if ($__num2 === 1) return function($y) use ($v, $x, $__fn) { return $__fn($v, $x, $y); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($v, $x, $y) {
    $__global_Data_Number_Approximate_lessThanOrEq = ($GLOBALS['Data_Number_Approximate_lessThanOrEq'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_lessThanOrEq'));
    $__global_Data_Number_abs = ($GLOBALS['Data_Number_abs'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_abs'));
    $__global_Data_Number_Approximate_sub = ($GLOBALS['Data_Number_Approximate_sub'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_sub'));
    $__case_0 = $v;
    $__case_1 = $x;
    $__case_2 = $y;
    if (true) {
$tolerance = $__case_0;
$x1 = $__case_1;
$y1 = $__case_2;
return ($__global_Data_Number_Approximate_lessThanOrEq)(($__global_Data_Number_abs)(($__global_Data_Number_Approximate_sub)($x1, $y1)), $tolerance);
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v, $x, $y);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Number_Approximate_eqAbsolute'] = __NAMESPACE__ . '\\Data_Number_Approximate_eqAbsolute';

