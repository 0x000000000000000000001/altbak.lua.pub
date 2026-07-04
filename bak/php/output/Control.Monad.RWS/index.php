<?php

namespace Control\Monad\RWS;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Monad.RWS.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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
      case 'Control_Monad_RWS_pure': $v = ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity')); break;
      case 'Control_Monad_RWS_composeFlipped': $v = (($GLOBALS['Control_Semigroupoid_composeFlipped'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeFlipped')))(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Control_Monad_RWS_unwrap': $v = (($GLOBALS['Data_Newtype_unwrap'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Control_Monad_RWS_execRWST': $v = (($GLOBALS['Control_Monad_RWS_Trans_execRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_execRWST')))(($GLOBALS['Data_Identity_monadIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_monadIdentity'))); break;
      case 'Control_Monad_RWS_evalRWST': $v = (($GLOBALS['Control_Monad_RWS_Trans_evalRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_evalRWST')))(($GLOBALS['Data_Identity_monadIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_monadIdentity'))); break;
      case 'Control_Monad_RWS_withRWS': $v = ($GLOBALS['Control_Monad_RWS_Trans_withRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_withRWST')); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };








// Control_Monad_RWS_rws
function Control_Monad_RWS_rws($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_rws';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_RWS_Trans_RWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_RWST')))((function() use ($f) {
  $__fn = function($r, $s = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Control_Monad_RWS_pure'] ?? \Control\Monad\RWS\phpurs_eval_thunk('Control_Monad_RWS_pure')))(($f)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_RWS_rws'] = __NAMESPACE__ . '\\Control_Monad_RWS_rws';

// Control_Monad_RWS_runRWS
function Control_Monad_RWS_runRWS($m, $r = null, $s = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_runRWS';
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($m, $r, $__fn) { return $__fn($m, $r, $s); };
    if ($__num === 1) return function($r, $s = null) use ($m, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($m, $r, $s);
      if ($__num2 === 1) return function($s) use ($m, $r, $__fn) { return $__fn($m, $r, $s); };
      return phpurs_curry_fallback($__fn, [$m], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($m, $r, $s) {
    $__case_0 = $m;
    if (true) {
$f = $__case_0;
$v = ($f)($r, $s);
$__case_0 = $v;
if (true) {
$x = $__case_0;
return $x;
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($m, $r, $s);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Control_Monad_RWS_runRWS'] = __NAMESPACE__ . '\\Control_Monad_RWS_runRWS';

// Control_Monad_RWS_mapRWS
function Control_Monad_RWS_mapRWS($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_mapRWS';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_RWS_Trans_mapRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_mapRWST')))((($GLOBALS['Control_Monad_RWS_composeFlipped'] ?? \Control\Monad\RWS\phpurs_eval_thunk('Control_Monad_RWS_composeFlipped')))(($GLOBALS['Control_Monad_RWS_unwrap'] ?? \Control\Monad\RWS\phpurs_eval_thunk('Control_Monad_RWS_unwrap')), (($GLOBALS['Control_Monad_RWS_composeFlipped'] ?? \Control\Monad\RWS\phpurs_eval_thunk('Control_Monad_RWS_composeFlipped')))($f, ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity')))));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_RWS_mapRWS'] = __NAMESPACE__ . '\\Control_Monad_RWS_mapRWS';

// Control_Monad_RWS_execRWS
function Control_Monad_RWS_execRWS($m, $r = null, $s = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_execRWS';
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($m, $r, $__fn) { return $__fn($m, $r, $s); };
    if ($__num === 1) return function($r, $s = null) use ($m, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($m, $r, $s);
      if ($__num2 === 1) return function($s) use ($m, $r, $__fn) { return $__fn($m, $r, $s); };
      return phpurs_curry_fallback($__fn, [$m], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = (($GLOBALS['Control_Monad_RWS_unwrap'] ?? \Control\Monad\RWS\phpurs_eval_thunk('Control_Monad_RWS_unwrap')))((($GLOBALS['Control_Monad_RWS_execRWST'] ?? \Control\Monad\RWS\phpurs_eval_thunk('Control_Monad_RWS_execRWST')))($m, $r, $s));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Control_Monad_RWS_execRWS'] = __NAMESPACE__ . '\\Control_Monad_RWS_execRWS';

// Control_Monad_RWS_evalRWS
function Control_Monad_RWS_evalRWS($m, $r = null, $s = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_evalRWS';
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($m, $r, $__fn) { return $__fn($m, $r, $s); };
    if ($__num === 1) return function($r, $s = null) use ($m, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($m, $r, $s);
      if ($__num2 === 1) return function($s) use ($m, $r, $__fn) { return $__fn($m, $r, $s); };
      return phpurs_curry_fallback($__fn, [$m], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = (($GLOBALS['Control_Monad_RWS_unwrap'] ?? \Control\Monad\RWS\phpurs_eval_thunk('Control_Monad_RWS_unwrap')))((($GLOBALS['Control_Monad_RWS_evalRWST'] ?? \Control\Monad\RWS\phpurs_eval_thunk('Control_Monad_RWS_evalRWST')))($m, $r, $s));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Control_Monad_RWS_evalRWS'] = __NAMESPACE__ . '\\Control_Monad_RWS_evalRWS';

