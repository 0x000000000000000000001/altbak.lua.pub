<?php

namespace Test\FileOps;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.FileOps/index.php';

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
      case 'Test_FileOps_discard': $v = ((function() {
  $__fn = function($dictBind) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Bind_bind = ($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind'));
    $__res = ($__global_Control_Bind_bind)($dictBind);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($GLOBALS['Effect_bindEffect'] ?? \Effect\phpurs_eval_thunk('Effect_bindEffect'))); break;
      case 'Test_FileOps_bind': $v = ($GLOBALS['Effect_bindE'] ?? \Effect\phpurs_eval_thunk('Effect_bindE')); break;
      case 'Test_FileOps_pure': $v = ($GLOBALS['Effect_pureE'] ?? \Effect\phpurs_eval_thunk('Effect_pureE')); break;
      case 'Test_FileOps_describe': $v = (($GLOBALS['Effect_Console_log'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_log')))("File I/O (10k writes/reads):"); break;
      case 'Test_FileOps_act': $v = (($GLOBALS['Test_FileOps_loopIO'] ?? \Test\FileOps\phpurs_eval_thunk('Test_FileOps_loopIO')))(10000); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };





// Test_FileOps_loopIO
function Test_FileOps_loopIO($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_FileOps_loopIO';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Test_FileOps_loopE = ($GLOBALS['Test_FileOps_loopE'] ?? \Test\FileOps\phpurs_eval_thunk('Test_FileOps_loopE'));
$__global_Test_FileOps_discard = ($GLOBALS['Test_FileOps_discard'] ?? \Test\FileOps\phpurs_eval_thunk('Test_FileOps_discard'));
$__global_Test_FileOps_writeFileSync = ($GLOBALS['Test_FileOps_writeFileSync'] ?? \Test\FileOps\phpurs_eval_thunk('Test_FileOps_writeFileSync'));
$__global_Effect_bindE = ($GLOBALS['Effect_bindE'] ?? \Effect\phpurs_eval_thunk('Effect_bindE'));
$__global_Test_FileOps_readFileSync = ($GLOBALS['Test_FileOps_readFileSync'] ?? \Test\FileOps\phpurs_eval_thunk('Test_FileOps_readFileSync'));
$__global_Effect_pureE = ($GLOBALS['Effect_pureE'] ?? \Effect\phpurs_eval_thunk('Effect_pureE'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Test_FileOps_loopE)($n, ($__global_Test_FileOps_discard)(($__global_Test_FileOps_writeFileSync)("var/iotest.txt", "Hello IO Benchmarks!"), (function() use ($__global_Effect_bindE, $__global_Test_FileOps_readFileSync, $__global_Effect_pureE, $__global_Data_Unit_unit) {
  $__fn = function($__dollar____unused) use ($__global_Effect_bindE, $__global_Test_FileOps_readFileSync, $__global_Effect_pureE, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_bindE)(($__global_Test_FileOps_readFileSync)("var/iotest.txt"), (function() use ($__global_Effect_pureE, $__global_Data_Unit_unit) {
  $__fn = function($__dollar____unused) use ($__global_Effect_pureE, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_pureE)($__global_Data_Unit_unit);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Test_FileOps_loopIO'] = __NAMESPACE__ . '\\Test_FileOps_loopIO';



