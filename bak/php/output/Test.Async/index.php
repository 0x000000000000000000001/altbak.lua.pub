<?php

namespace Test\Async;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Aff/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
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
      case 'Test_Async_bind': $v = ($GLOBALS['Effect_Aff__bind'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__bind')); break;
      case 'Test_Async_discard': $v = ((function() {
  $__fn = function($dictBind) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))($dictBind);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($GLOBALS['Effect_Aff_bindAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bindAff'))); break;
      case 'Test_Async_liftEffect': $v = ($GLOBALS['Effect_Aff__liftEffect'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__liftEffect')); break;
      case 'Test_Async_pure': $v = ($GLOBALS['Effect_Aff__pure'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__pure')); break;
      case 'Test_Async_describe': $v = (($GLOBALS['Effect_Console_log'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_log')))("Asynchronous Concurrency (Aff):"); break;
      case 'Test_Async_act': $v = (($GLOBALS['Effect_Aff_launchAff_'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_launchAff_')))((($GLOBALS['Test_Async_bind'] ?? \Test\Async\phpurs_eval_thunk('Test_Async_bind')))((($GLOBALS['Effect_Aff_forkAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_forkAff')))((($GLOBALS['Test_Async_discard'] ?? \Test\Async\phpurs_eval_thunk('Test_Async_discard')))((($GLOBALS['Effect_Aff_delay'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_delay')))((($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds')))(10.0)), (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Test_Async_bind'] ?? \Test\Async\phpurs_eval_thunk('Test_Async_bind')))((($GLOBALS['Test_Async_liftEffect'] ?? \Test\Async\phpurs_eval_thunk('Test_Async_liftEffect')))((($GLOBALS['Effect_Console_log'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_log')))("Fiber 1 finished")), (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Test_Async_pure'] ?? \Test\Async\phpurs_eval_thunk('Test_Async_pure')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Test_Async_bind'] ?? \Test\Async\phpurs_eval_thunk('Test_Async_bind')))((($GLOBALS['Effect_Aff_forkAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_forkAff')))((($GLOBALS['Test_Async_discard'] ?? \Test\Async\phpurs_eval_thunk('Test_Async_discard')))((($GLOBALS['Effect_Aff_delay'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_delay')))((($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds')))(20.0)), (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Test_Async_bind'] ?? \Test\Async\phpurs_eval_thunk('Test_Async_bind')))((($GLOBALS['Test_Async_liftEffect'] ?? \Test\Async\phpurs_eval_thunk('Test_Async_liftEffect')))((($GLOBALS['Effect_Console_log'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_log')))("Fiber 2 finished")), (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Test_Async_pure'] ?? \Test\Async\phpurs_eval_thunk('Test_Async_pure')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Test_Async_discard'] ?? \Test\Async\phpurs_eval_thunk('Test_Async_discard')))((($GLOBALS['Effect_Aff_delay'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_delay')))((($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds')))(30.0)), (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Test_Async_bind'] ?? \Test\Async\phpurs_eval_thunk('Test_Async_bind')))((($GLOBALS['Test_Async_liftEffect'] ?? \Test\Async\phpurs_eval_thunk('Test_Async_liftEffect')))((($GLOBALS['Effect_Console_log'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_log')))("Main fiber finished")), (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Test_Async_pure'] ?? \Test\Async\phpurs_eval_thunk('Test_Async_pure')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };








