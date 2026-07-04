<?php

namespace Effect\Exception;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Exception/index.php';
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
      case 'Effect_Exception_pure': $v = ($GLOBALS['Effect_pureE'] ?? \Effect\phpurs_eval_thunk('Effect_pureE')); break;
      case 'Effect_Exception_map': $v = (($GLOBALS['Control_Applicative_liftA1'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_liftA1')))(($GLOBALS['Effect_applicativeEffect'] ?? \Effect\phpurs_eval_thunk('Effect_applicativeEffect'))); break;
      case 'Effect_Exception_throw': $v = (($GLOBALS['Effect_Exception_compose'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_compose')))(($GLOBALS['Effect_Exception_throwException'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_throwException')), ($GLOBALS['Effect_Exception_error'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_error'))); break;
      case 'Effect_Exception_stack': $v = (($GLOBALS['Effect_Exception_stackImpl'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_stackImpl')))(($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'))); break;
      case 'Effect_Exception_showError': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => ($GLOBALS['Effect_Exception_showErrorImpl'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_showErrorImpl'))]); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };
if (!function_exists('phpurs_uncurry2')) {
function phpurs_uncurry2($fn) {
    return function($a, $b = null) use ($fn) {
        if (func_num_args() < 2) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry2($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b);
    };
}
function phpurs_uncurry3($fn) {
    return function($a, $b = null, $c = null) use ($fn) {
        if (func_num_args() < 3) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry3($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c);
    };
}
function phpurs_uncurry4($fn) {
    return function($a, $b = null, $c = null, $d = null) use ($fn) {
        if (func_num_args() < 4) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry4($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d);
    };
}
function phpurs_uncurry5($fn) {
    return function($a, $b = null, $c = null, $d = null, $e = null) use ($fn) {
        if (func_num_args() < 5) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry5($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d)($e);
    };
}
}



$Effect_Exception_error = function($msg) { return new \Exception($msg); };
$Effect_Exception_message = function($e) { return $e->getMessage(); };
$Effect_Exception_name = function($e) { return get_class($e); };
$Effect_Exception_stackImpl = function($just) { return function($nothing) { return function($e) use(&$just, &$nothing) { return $just($e->getTraceAsString()); }; }; };
$Effect_Exception_throwException = function($e) { return function() use(&$e) { throw $e; }; };
$Effect_Exception_catchException = phpurs_uncurry2(function($c) { return function($t) use(&$c) { return function() use(&$c, &$t) { try { return $t(); } catch (\Throwable $e) { return $c($e)(); } }; }; });
$Effect_Exception_showErrorImpl = function($e) { return (string)$e; };

// Effect_Exception_compose
function Effect_Exception_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Exception_compose';
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
$GLOBALS['Effect_Exception_compose'] = __NAMESPACE__ . '\\Effect_Exception_compose';



// Effect_Exception_try
function Effect_Exception_try($action) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Exception_try';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Exception_catchException'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_catchException')))((($GLOBALS['Effect_Exception_compose'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_compose')))(($GLOBALS['Effect_Exception_pure'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_pure')), ($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left'))), (($GLOBALS['Effect_Exception_map'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_map')))(($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')), $action));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Exception_try'] = __NAMESPACE__ . '\\Effect_Exception_try';




