<?php

namespace Data\Date\Gen;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Date/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.Date.Component.Gen/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Int/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
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
      case 'Data_Date_Gen_fromJust': $v = (($GLOBALS['Data_Maybe_fromJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromJust')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Date_Gen_bottom': $v = ($GLOBALS['Data_Date_Component_January'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_January')); break;
      case 'Data_Date_Gen_bottom1': $v = (($GLOBALS['Data_Date_Component_Day'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_Day')))(1); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Date_Gen_compose
function Data_Date_Gen_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_Gen_compose';
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
$GLOBALS['Data_Date_Gen_compose'] = __NAMESPACE__ . '\\Data_Date_Gen_compose';


// Data_Date_Gen_bind
function Data_Date_Gen_bind($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_Gen_bind';
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
$GLOBALS['Data_Date_Gen_bind'] = __NAMESPACE__ . '\\Data_Date_Gen_bind';



// Data_Date_Gen_genDate
function Data_Date_Gen_genDate($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_Gen_genDate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadGen)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$Bind1 = (($Monad0)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$bind1 = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))($Bind1);
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($Bind1)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$chooseInt = (($GLOBALS['Control_Monad_Gen_Class_chooseInt'] ?? \Control\Monad\Gen\Class\phpurs_eval_thunk('Control_Monad_Gen_Class_chooseInt')))($dictMonadGen);
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($Monad0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = ($bind1)((($GLOBALS['Data_Date_Component_Gen_genYear'] ?? \Data\Date\Component\Gen\phpurs_eval_thunk('Data_Date_Component_Gen_genYear')))($dictMonadGen), (function() use ($bind1, $map, $chooseInt, $pure) {
  $__fn = function($year) use ($bind1, $map, $chooseInt, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = (($GLOBALS['Data_Date_isLeapYear'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_isLeapYear')))($year);
$__case_res_0 = null;
if (($__case_0 === true)) {
$__case_res_0 = 365;
} else {
if (true) {
$__case_res_0 = 364;
} else {
throw new \Exception("Pattern match failure");
};
};
$maxDays = $__case_res_0;
    $__res = ($bind1)(($map)((($GLOBALS['Data_Date_Gen_compose'] ?? \Data\Date\Gen\phpurs_eval_thunk('Data_Date_Gen_compose')))(($GLOBALS['Data_Time_Duration_Days'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Days')), ($GLOBALS['Data_Int_toNumber'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_toNumber'))), ($chooseInt)(0, $maxDays)), (function() use ($pure, $year) {
  $__fn = function($days) use ($pure, $year, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)((($GLOBALS['Partial_Unsafe_unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafePartial')))((function() use ($year, $days) {
  $__fn = function($__dollar____unused) use ($year, $days, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Date_Gen_fromJust'] ?? \Data\Date\Gen\phpurs_eval_thunk('Data_Date_Gen_fromJust')))((($GLOBALS['Data_Date_Gen_bind'] ?? \Data\Date\Gen\phpurs_eval_thunk('Data_Date_Gen_bind')))((($GLOBALS['Data_Date_exactDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_exactDate')))($year, ($GLOBALS['Data_Date_Gen_bottom'] ?? \Data\Date\Gen\phpurs_eval_thunk('Data_Date_Gen_bottom')), ($GLOBALS['Data_Date_Gen_bottom1'] ?? \Data\Date\Gen\phpurs_eval_thunk('Data_Date_Gen_bottom1'))), (function() use ($days) {
  $__fn = function($janFirst) use ($days, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Date_adjust'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_adjust')))($days, $janFirst);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_Gen_genDate'] = __NAMESPACE__ . '\\Data_Date_Gen_genDate';

