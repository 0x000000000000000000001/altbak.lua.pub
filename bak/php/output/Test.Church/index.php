<?php

namespace Test\Church;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.Church/index.php';

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
      case 'Test_Church_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Test_Church_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Test_Church_describe': $v = (($GLOBALS['Effect_Console_log'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_log')))("Church Numerals (100k Closure Applications):"); break;
      case 'Test_Church_c10': $v = (($GLOBALS['Test_Church_fromInt'] ?? \Test\Church\phpurs_eval_thunk('Test_Church_fromInt')))(10); break;
      case 'Test_Church_c100': $v = (($GLOBALS['Test_Church_mulC'] ?? \Test\Church\phpurs_eval_thunk('Test_Church_mulC')))(($GLOBALS['Test_Church_c10'] ?? \Test\Church\phpurs_eval_thunk('Test_Church_c10')), ($GLOBALS['Test_Church_c10'] ?? \Test\Church\phpurs_eval_thunk('Test_Church_c10'))); break;
      case 'Test_Church_c10k': $v = (($GLOBALS['Test_Church_mulC'] ?? \Test\Church\phpurs_eval_thunk('Test_Church_mulC')))(($GLOBALS['Test_Church_c100'] ?? \Test\Church\phpurs_eval_thunk('Test_Church_c100')), ($GLOBALS['Test_Church_c100'] ?? \Test\Church\phpurs_eval_thunk('Test_Church_c100'))); break;
      case 'Test_Church_c100k': $v = (($GLOBALS['Test_Church_mulC'] ?? \Test\Church\phpurs_eval_thunk('Test_Church_mulC')))(($GLOBALS['Test_Church_c10k'] ?? \Test\Church\phpurs_eval_thunk('Test_Church_c10k')), ($GLOBALS['Test_Church_c10'] ?? \Test\Church\phpurs_eval_thunk('Test_Church_c10'))); break;
      case 'Test_Church_act': $v = (($GLOBALS['Effect_Console_logShow'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_logShow')))(($GLOBALS['Data_Show_showInt'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showInt')), (($GLOBALS['Test_Church_toInt'] ?? \Test\Church\phpurs_eval_thunk('Test_Church_toInt')))(($GLOBALS['Test_Church_c100k'] ?? \Test\Church\phpurs_eval_thunk('Test_Church_c100k')))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };




// Test_Church_zeroC
function Test_Church_zeroC($v, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_Church_zeroC';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($v, $__fn) { return $__fn($v, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $x;
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Test_Church_zeroC'] = __NAMESPACE__ . '\\Test_Church_zeroC';

// Test_Church_toInt
function Test_Church_toInt($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_Church_toInt';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($n)((function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Test_Church_add'] ?? \Test\Church\phpurs_eval_thunk('Test_Church_add')))($x, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), 0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Test_Church_toInt'] = __NAMESPACE__ . '\\Test_Church_toInt';

// Test_Church_succC
function Test_Church_succC($n, $f = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_Church_succC';
  if ($__num < 3) {
    if ($__num === 2) return function($x) use ($n, $f, $__fn) { return $__fn($n, $f, $x); };
    if ($__num === 1) return function($f, $x = null) use ($n, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($n, $f, $x);
      if ($__num2 === 1) return function($x) use ($n, $f, $__fn) { return $__fn($n, $f, $x); };
      return phpurs_curry_fallback($__fn, [$n], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($f)(($n)($f, $x));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Test_Church_succC'] = __NAMESPACE__ . '\\Test_Church_succC';

// Test_Church_mulC
function Test_Church_mulC($m, $n = null, $f = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_Church_mulC';
  if ($__num < 4) {
    if ($__num === 3) return function($x) use ($m, $n, $f, $__fn) { return $__fn($m, $n, $f, $x); };
    if ($__num === 2) return function($f, $x = null) use ($m, $n, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($m, $n, $f, $x);
      if ($__num2 === 1) return function($x) use ($m, $n, $f, $__fn) { return $__fn($m, $n, $f, $x); };
      return phpurs_curry_fallback($__fn, [$m, $n], 4);
    };
    if ($__num === 1) return function($n, $f = null, $x = null) use ($m, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($m, $n, $f, $x);
      if ($__num2 === 2) return function($x) use ($m, $n, $f, $__fn) { return $__fn($m, $n, $f, $x); };
      if ($__num2 === 1) return function($f, $x = null) use ($m, $n, $__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($m, $n, $f, $x);
        if ($__num3 === 1) return function($x) use ($m, $n, $f, $__fn) { return $__fn($m, $n, $f, $x); };
        return phpurs_curry_fallback($__fn, [$m, $n], 4);
      };
      return phpurs_curry_fallback($__fn, [$m], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = ($m)(($n)($f), $x);
    return 4 < $__num ? $__res(...array_slice(func_get_args(), 4)) : $__res;
}
$GLOBALS['Test_Church_mulC'] = __NAMESPACE__ . '\\Test_Church_mulC';

// Test_Church_fromInt
function Test_Church_fromInt($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_Church_fromInt';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
if (($__case_0 === 0)) {
return ($GLOBALS['Test_Church_zeroC'] ?? \Test\Church\phpurs_eval_thunk('Test_Church_zeroC'));
} else {
if (true) {
$n = $__case_0;
return (($GLOBALS['Test_Church_succC'] ?? \Test\Church\phpurs_eval_thunk('Test_Church_succC')))((($GLOBALS['Test_Church_fromInt'] ?? \Test\Church\phpurs_eval_thunk('Test_Church_fromInt')))((($GLOBALS['Test_Church_sub'] ?? \Test\Church\phpurs_eval_thunk('Test_Church_sub')))($n, 1)));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Test_Church_fromInt'] = __NAMESPACE__ . '\\Test_Church_fromInt';






// Test_Church_addC
function Test_Church_addC($m, $n = null, $f = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_Church_addC';
  if ($__num < 4) {
    if ($__num === 3) return function($x) use ($m, $n, $f, $__fn) { return $__fn($m, $n, $f, $x); };
    if ($__num === 2) return function($f, $x = null) use ($m, $n, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($m, $n, $f, $x);
      if ($__num2 === 1) return function($x) use ($m, $n, $f, $__fn) { return $__fn($m, $n, $f, $x); };
      return phpurs_curry_fallback($__fn, [$m, $n], 4);
    };
    if ($__num === 1) return function($n, $f = null, $x = null) use ($m, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($m, $n, $f, $x);
      if ($__num2 === 2) return function($x) use ($m, $n, $f, $__fn) { return $__fn($m, $n, $f, $x); };
      if ($__num2 === 1) return function($f, $x = null) use ($m, $n, $__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($m, $n, $f, $x);
        if ($__num3 === 1) return function($x) use ($m, $n, $f, $__fn) { return $__fn($m, $n, $f, $x); };
        return phpurs_curry_fallback($__fn, [$m, $n], 4);
      };
      return phpurs_curry_fallback($__fn, [$m], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = ($m)($f, ($n)($f, $x));
    return 4 < $__num ? $__res(...array_slice(func_get_args(), 4)) : $__res;
}
$GLOBALS['Test_Church_addC'] = __NAMESPACE__ . '\\Test_Church_addC';


