<?php

namespace Data\Time\Component\Gen;

require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Data.Enum.Gen/index.php';
require_once __DIR__ . '/../Data.Time.Component/index.php';

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

      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Time_Component_Gen_genSecond
function Data_Time_Component_Gen_genSecond($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Component_Gen_genSecond';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Enum_Gen_genBoundedEnum'] ?? \Data\Enum\Gen\phpurs_eval_thunk('Data_Enum_Gen_genBoundedEnum')))($dictMonadGen, ($GLOBALS['Data_Time_Component_boundedEnumSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumSecond')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_Component_Gen_genSecond'] = __NAMESPACE__ . '\\Data_Time_Component_Gen_genSecond';

// Data_Time_Component_Gen_genMinute
function Data_Time_Component_Gen_genMinute($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Component_Gen_genMinute';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Enum_Gen_genBoundedEnum'] ?? \Data\Enum\Gen\phpurs_eval_thunk('Data_Enum_Gen_genBoundedEnum')))($dictMonadGen, ($GLOBALS['Data_Time_Component_boundedEnumMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMinute')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_Component_Gen_genMinute'] = __NAMESPACE__ . '\\Data_Time_Component_Gen_genMinute';

// Data_Time_Component_Gen_genMillisecond
function Data_Time_Component_Gen_genMillisecond($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Component_Gen_genMillisecond';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Enum_Gen_genBoundedEnum'] ?? \Data\Enum\Gen\phpurs_eval_thunk('Data_Enum_Gen_genBoundedEnum')))($dictMonadGen, ($GLOBALS['Data_Time_Component_boundedEnumMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMillisecond')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_Component_Gen_genMillisecond'] = __NAMESPACE__ . '\\Data_Time_Component_Gen_genMillisecond';

// Data_Time_Component_Gen_genHour
function Data_Time_Component_Gen_genHour($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Component_Gen_genHour';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Enum_Gen_genBoundedEnum'] ?? \Data\Enum\Gen\phpurs_eval_thunk('Data_Enum_Gen_genBoundedEnum')))($dictMonadGen, ($GLOBALS['Data_Time_Component_boundedEnumHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumHour')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_Component_Gen_genHour'] = __NAMESPACE__ . '\\Data_Time_Component_Gen_genHour';

