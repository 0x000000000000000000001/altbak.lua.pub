<?php

namespace Control\Monad\State;

require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Trans/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
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
      case 'Control_Monad_State_unwrap': $v = (($GLOBALS['Data_Newtype_unwrap'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Control_Monad_State_withState': $v = ($GLOBALS['Control_Monad_State_Trans_withStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_withStateT')); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_State_compose
function Control_Monad_State_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_compose';
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
$GLOBALS['Control_Monad_State_compose'] = __NAMESPACE__ . '\\Control_Monad_State_compose';



// Control_Monad_State_runState
function Control_Monad_State_runState($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_runState';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return (($GLOBALS['Control_Monad_State_compose'] ?? \Control\Monad\State\phpurs_eval_thunk('Control_Monad_State_compose')))(($GLOBALS['Control_Monad_State_unwrap'] ?? \Control\Monad\State\phpurs_eval_thunk('Control_Monad_State_unwrap')), $s);
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_runState'] = __NAMESPACE__ . '\\Control_Monad_State_runState';

// Control_Monad_State_mapState
function Control_Monad_State_mapState($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_mapState';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_State_Trans_mapStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_mapStateT')))((($GLOBALS['Control_Monad_State_compose'] ?? \Control\Monad\State\phpurs_eval_thunk('Control_Monad_State_compose')))(($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity')), (($GLOBALS['Control_Monad_State_compose'] ?? \Control\Monad\State\phpurs_eval_thunk('Control_Monad_State_compose')))($f, ($GLOBALS['Control_Monad_State_unwrap'] ?? \Control\Monad\State\phpurs_eval_thunk('Control_Monad_State_unwrap')))));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_mapState'] = __NAMESPACE__ . '\\Control_Monad_State_mapState';

// Control_Monad_State_execState
function Control_Monad_State_execState($v, $s = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_execState';
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($v, $__fn) { return $__fn($v, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $s) {
    $__case_0 = $v;
    $__case_1 = $s;
    if (true) {
$m = $__case_0;
$s1 = $__case_1;
$v1 = ($m)($s1);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Tuple":
$s__prime__ = ($__case_0)->v1;
return $s__prime__;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v, $s);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_State_execState'] = __NAMESPACE__ . '\\Control_Monad_State_execState';

// Control_Monad_State_evalState
function Control_Monad_State_evalState($v, $s = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_evalState';
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($v, $__fn) { return $__fn($v, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $s) {
    $__case_0 = $v;
    $__case_1 = $s;
    if (true) {
$m = $__case_0;
$s1 = $__case_1;
$v1 = ($m)($s1);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
return $a;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v, $s);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_State_evalState'] = __NAMESPACE__ . '\\Control_Monad_State_evalState';

