<?php

namespace Effect\Exception\Unsafe;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Effect.Exception/index.php';
require_once __DIR__ . '/../Effect.Exception.Unsafe/index.php';
require_once __DIR__ . '/../Effect.Unsafe/index.php';

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
      case 'Effect_Exception_Unsafe_unsafeThrowException': $v = (($GLOBALS['Effect_Exception_Unsafe_compose'] ?? \Effect\Exception\Unsafe\phpurs_eval_thunk('Effect_Exception_Unsafe_compose')))(($GLOBALS['Effect_Unsafe_unsafePerformEffect'] ?? \Effect\Unsafe\phpurs_eval_thunk('Effect_Unsafe_unsafePerformEffect')), ($GLOBALS['Effect_Exception_throwException'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_throwException'))); break;
      case 'Effect_Exception_Unsafe_unsafeThrow': $v = (($GLOBALS['Effect_Exception_Unsafe_compose'] ?? \Effect\Exception\Unsafe\phpurs_eval_thunk('Effect_Exception_Unsafe_compose')))(($GLOBALS['Effect_Exception_Unsafe_unsafeThrowException'] ?? \Effect\Exception\Unsafe\phpurs_eval_thunk('Effect_Exception_Unsafe_unsafeThrowException')), ($GLOBALS['Effect_Exception_error'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_error'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Effect_Exception_Unsafe_compose
function Effect_Exception_Unsafe_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Exception_Unsafe_compose';
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
$GLOBALS['Effect_Exception_Unsafe_compose'] = __NAMESPACE__ . '\\Effect_Exception_Unsafe_compose';



