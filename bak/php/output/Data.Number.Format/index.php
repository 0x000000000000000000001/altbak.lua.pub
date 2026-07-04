<?php

namespace Data\Number\Format;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Number.Format/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
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
      case 'Data_Number_Format_clamp': $v = (($GLOBALS['Data_Ord_clamp'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_clamp')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Number_Format_precision': $v = (($GLOBALS['Data_Number_Format_compose'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_compose')))(($GLOBALS['Data_Number_Format_Precision'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_Precision')), (($GLOBALS['Data_Number_Format_clamp'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_clamp')))(1, 21)); break;
      case 'Data_Number_Format_fixed': $v = (($GLOBALS['Data_Number_Format_compose'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_compose')))(($GLOBALS['Data_Number_Format_Fixed'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_Fixed')), (($GLOBALS['Data_Number_Format_clamp'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_clamp')))(0, 20)); break;
      case 'Data_Number_Format_exponential': $v = (($GLOBALS['Data_Number_Format_compose'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_compose')))(($GLOBALS['Data_Number_Format_Exponential'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_Exponential')), (($GLOBALS['Data_Number_Format_clamp'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_clamp')))(0, 20)); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Number_Format_compose
function Data_Number_Format_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Number_Format_compose';
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
$GLOBALS['Data_Number_Format_compose'] = __NAMESPACE__ . '\\Data_Number_Format_compose';


// Data_Number_Format_Precision
function Data_Number_Format_Precision($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Number_Format_Precision';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Precision", $value0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Number_Format_Precision'] = __NAMESPACE__ . '\\Data_Number_Format_Precision';

// Data_Number_Format_Fixed
function Data_Number_Format_Fixed($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Number_Format_Fixed';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Fixed", $value0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Number_Format_Fixed'] = __NAMESPACE__ . '\\Data_Number_Format_Fixed';

// Data_Number_Format_Exponential
function Data_Number_Format_Exponential($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Number_Format_Exponential';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Exponential", $value0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Number_Format_Exponential'] = __NAMESPACE__ . '\\Data_Number_Format_Exponential';

// Data_Number_Format_toStringWith
function Data_Number_Format_toStringWith($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Number_Format_toStringWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Precision":
$p = ($__case_0)->v0;
return (($GLOBALS['Data_Number_Format_toPrecisionNative'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_toPrecisionNative')))($p);
break;
case "Fixed":
$p = ($__case_0)->v0;
return (($GLOBALS['Data_Number_Format_toFixedNative'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_toFixedNative')))($p);
break;
case "Exponential":
$p = ($__case_0)->v0;
return (($GLOBALS['Data_Number_Format_toExponentialNative'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_toExponentialNative')))($p);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Number_Format_toStringWith'] = __NAMESPACE__ . '\\Data_Number_Format_toStringWith';




