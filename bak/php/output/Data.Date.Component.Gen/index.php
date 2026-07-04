<?php

namespace Data\Date\Component\Gen;

require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Enum.Gen/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
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
      case 'Data_Date_Component_Gen_fromJust': $v = (($GLOBALS['Data_Maybe_fromJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromJust')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Date_Component_Gen_compose
function Data_Date_Component_Gen_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_Component_Gen_compose';
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
$GLOBALS['Data_Date_Component_Gen_compose'] = __NAMESPACE__ . '\\Data_Date_Component_Gen_compose';


// Data_Date_Component_Gen_toEnum
function Data_Date_Component_Gen_toEnum($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_Component_Gen_toEnum';
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
$GLOBALS['Data_Date_Component_Gen_toEnum'] = __NAMESPACE__ . '\\Data_Date_Component_Gen_toEnum';

// Data_Date_Component_Gen_genYear
function Data_Date_Component_Gen_genYear($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_Component_Gen_genYear';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((((((($dictMonadGen)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))), (($GLOBALS['Data_Date_Component_Gen_compose'] ?? \Data\Date\Component\Gen\phpurs_eval_thunk('Data_Date_Component_Gen_compose')))((($GLOBALS['Partial_Unsafe_unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafePartial')))((function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Date_Component_Gen_fromJust'] ?? \Data\Date\Component\Gen\phpurs_eval_thunk('Data_Date_Component_Gen_fromJust'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($GLOBALS['Data_Date_Component_Gen_toEnum'] ?? \Data\Date\Component\Gen\phpurs_eval_thunk('Data_Date_Component_Gen_toEnum'))), (($GLOBALS['Control_Monad_Gen_Class_chooseInt'] ?? \Control\Monad\Gen\Class\phpurs_eval_thunk('Control_Monad_Gen_Class_chooseInt')))($dictMonadGen, 1900, 2100));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_Component_Gen_genYear'] = __NAMESPACE__ . '\\Data_Date_Component_Gen_genYear';

// Data_Date_Component_Gen_genWeekday
function Data_Date_Component_Gen_genWeekday($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_Component_Gen_genWeekday';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Enum_Gen_genBoundedEnum'] ?? \Data\Enum\Gen\phpurs_eval_thunk('Data_Enum_Gen_genBoundedEnum')))($dictMonadGen, ($GLOBALS['Data_Date_Component_boundedEnumWeekday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumWeekday')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_Component_Gen_genWeekday'] = __NAMESPACE__ . '\\Data_Date_Component_Gen_genWeekday';

// Data_Date_Component_Gen_genMonth
function Data_Date_Component_Gen_genMonth($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_Component_Gen_genMonth';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Enum_Gen_genBoundedEnum'] ?? \Data\Enum\Gen\phpurs_eval_thunk('Data_Enum_Gen_genBoundedEnum')))($dictMonadGen, ($GLOBALS['Data_Date_Component_boundedEnumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumMonth')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_Component_Gen_genMonth'] = __NAMESPACE__ . '\\Data_Date_Component_Gen_genMonth';

// Data_Date_Component_Gen_genDay
function Data_Date_Component_Gen_genDay($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_Component_Gen_genDay';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Enum_Gen_genBoundedEnum'] ?? \Data\Enum\Gen\phpurs_eval_thunk('Data_Enum_Gen_genBoundedEnum')))($dictMonadGen, ($GLOBALS['Data_Date_Component_boundedEnumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumDay')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_Component_Gen_genDay'] = __NAMESPACE__ . '\\Data_Date_Component_Gen_genDay';

