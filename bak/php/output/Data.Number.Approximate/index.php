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
      case 'Data_Number_Approximate_lessThanOrEq': $v = (($GLOBALS['Data_Ord_lessThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThanOrEq')))(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      case 'Data_Number_Approximate_sub': $v = ($GLOBALS['Data_Ring_numSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_numSub')); break;
      case 'Data_Number_Approximate_div': $v = ($GLOBALS['Data_EuclideanRing_numDiv'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_numDiv')); break;
      case 'Data_Number_Approximate_mul': $v = ($GLOBALS['Data_Semiring_numMul'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_numMul')); break;
      case 'Data_Number_Approximate_add': $v = ($GLOBALS['Data_Semiring_numAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_numAdd')); break;
      case 'Data_Number_Approximate_not': $v = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot')); break;
      case 'Data_Number_Approximate_eqApproximate': $v = ($onePPM = (($GLOBALS['Data_Number_Approximate_Fraction'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_Fraction')))(0.000001);
return (($GLOBALS['Data_Number_Approximate_eqRelative'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_eqRelative')))($onePPM);)(); break;
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
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if (($__case_1 === 0.0)) {
$frac = $__case_0;
$y = $__case_2;
return (($GLOBALS['Data_Number_Approximate_lessThanOrEq'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_lessThanOrEq')))((($GLOBALS['Data_Number_abs'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_abs')))($y), $frac);
} else {
if (($__case_2 === 0.0)) {
$frac = $__case_0;
$x = $__case_1;
return (($GLOBALS['Data_Number_Approximate_lessThanOrEq'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_lessThanOrEq')))((($GLOBALS['Data_Number_abs'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_abs')))($x), $frac);
} else {
if (true) {
$frac = $__case_0;
$x = $__case_1;
$y = $__case_2;
return (($GLOBALS['Data_Number_Approximate_lessThanOrEq'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_lessThanOrEq')))((($GLOBALS['Data_Number_abs'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_abs')))((($GLOBALS['Data_Number_Approximate_sub'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_sub')))($x, $y)), (($GLOBALS['Data_Number_Approximate_div'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_div')))((($GLOBALS['Data_Number_Approximate_mul'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_mul')))($frac, (($GLOBALS['Data_Number_abs'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_abs')))((($GLOBALS['Data_Number_Approximate_add'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_add')))($x, $y))), 2.0));
} else {
throw new \Exception("Pattern match failure");
};
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
    $__res = (($GLOBALS['Data_Number_Approximate_not'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_not')))((($GLOBALS['Data_Number_Approximate_eqApproximate'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_eqApproximate')))($x, $y));
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
    $__case_0 = $v;
    $__case_1 = $x;
    $__case_2 = $y;
    if (true) {
$tolerance = $__case_0;
$x1 = $__case_1;
$y1 = $__case_2;
return (($GLOBALS['Data_Number_Approximate_lessThanOrEq'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_lessThanOrEq')))((($GLOBALS['Data_Number_abs'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_abs')))((($GLOBALS['Data_Number_Approximate_sub'] ?? \Data\Number\Approximate\phpurs_eval_thunk('Data_Number_Approximate_sub')))($x1, $y1)), $tolerance);
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v, $x, $y);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Number_Approximate_eqAbsolute'] = __NAMESPACE__ . '\\Data_Number_Approximate_eqAbsolute';

