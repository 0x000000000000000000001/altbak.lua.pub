<?php

namespace Test\TCO;

require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.TCO/index.php';

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
      case 'Test_TCO_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Test_TCO_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Test_TCO_mod': $v = ($GLOBALS['Data_EuclideanRing_intMod'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_intMod')); break;
      case 'Test_TCO_describe': $v = (($GLOBALS['Effect_Console_log'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_log')))("Tail Call Optimization (100k calls):"); break;
      case 'Test_TCO_act': $v = (($GLOBALS['Effect_Console_logShow'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_logShow')))(($GLOBALS['Data_Show_showInt'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showInt')), (($GLOBALS['Test_TCO_deepTailRec'] ?? \Test\TCO\phpurs_eval_thunk('Test_TCO_deepTailRec')))(100000, 0)); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };






// Test_TCO_deepTailRec
function Test_TCO_deepTailRec($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_TCO_deepTailRec';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_EuclideanRing_intMod = ($GLOBALS['Data_EuclideanRing_intMod'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_intMod'));
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (($__case_0 === 0)) {
$acc = $__case_1;
return $acc;
} else {
if (true) {
$n = $__case_0;
$acc = $__case_1;
$__tco_tmp_0 = ($n - 1);
$__tco_tmp_1 = ($acc + ($__global_Data_EuclideanRing_intMod)($n, 3));
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Test_TCO_deepTailRec'] = __NAMESPACE__ . '\\Test_TCO_deepTailRec';


