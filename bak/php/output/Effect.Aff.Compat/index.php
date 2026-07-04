<?php

namespace Effect\Aff\Compat;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Aff/index.php';
require_once __DIR__ . '/../Effect.Aff.Compat/index.php';
require_once __DIR__ . '/../Effect.Exception/index.php';
require_once __DIR__ . '/../Effect.Uncurried/index.php';
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
      case 'Effect_Aff_Compat_bind': $v = ($GLOBALS['Effect_bindE'] ?? \Effect\phpurs_eval_thunk('Effect_bindE')); break;
      case 'Effect_Aff_Compat_pure': $v = ($GLOBALS['Effect_pureE'] ?? \Effect\phpurs_eval_thunk('Effect_pureE')); break;
      case 'Effect_Aff_Compat_discard': $v = ((function() {
  $__fn = function($dictBind) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))($dictBind);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($GLOBALS['Effect_bindEffect'] ?? \Effect\phpurs_eval_thunk('Effect_bindEffect'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };



// Effect_Aff_Compat_compose
function Effect_Aff_Compat_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Compat_compose';
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
$GLOBALS['Effect_Aff_Compat_compose'] = __NAMESPACE__ . '\\Effect_Aff_Compat_compose';



// Effect_Aff_Compat_EffectFnCanceler
function Effect_Aff_Compat_EffectFnCanceler($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Compat_EffectFnCanceler';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Compat_EffectFnCanceler'] = __NAMESPACE__ . '\\Effect_Aff_Compat_EffectFnCanceler';

// Effect_Aff_Compat_EffectFnAff
function Effect_Aff_Compat_EffectFnAff($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Compat_EffectFnAff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Compat_EffectFnAff'] = __NAMESPACE__ . '\\Effect_Aff_Compat_EffectFnAff';

// Effect_Aff_Compat_fromEffectFnAff
function Effect_Aff_Compat_fromEffectFnAff($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Compat_fromEffectFnAff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$eff = $__case_0;
return (($GLOBALS['Effect_Aff_makeAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeAff')))((function() use ($eff) {
  $__fn = function($k) use ($eff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Aff_Compat_bind'] ?? \Effect\Aff\Compat\phpurs_eval_thunk('Effect_Aff_Compat_bind')))((($GLOBALS['Effect_Uncurried_runEffectFn2'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn2')))($eff, (($GLOBALS['Effect_Uncurried_mkEffectFn1'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn1')))((($GLOBALS['Effect_Aff_Compat_compose'] ?? \Effect\Aff\Compat\phpurs_eval_thunk('Effect_Aff_Compat_compose')))($k, ($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')))), (($GLOBALS['Effect_Uncurried_mkEffectFn1'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn1')))((($GLOBALS['Effect_Aff_Compat_compose'] ?? \Effect\Aff\Compat\phpurs_eval_thunk('Effect_Aff_Compat_compose')))($k, ($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right'))))), (function() {
  $__body = function($v1) {
    $__case_0 = $v1;
    if (true) {
$canceler = $__case_0;
return (($GLOBALS['Effect_Aff_Compat_pure'] ?? \Effect\Aff\Compat\phpurs_eval_thunk('Effect_Aff_Compat_pure')))((($GLOBALS['Effect_Aff_Canceler'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_Canceler')))((function() use ($canceler) {
  $__fn = function($e) use ($canceler, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Aff_makeAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeAff')))((function() use ($canceler, $e) {
  $__fn = function($k2) use ($canceler, $e, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Aff_Compat_discard'] ?? \Effect\Aff\Compat\phpurs_eval_thunk('Effect_Aff_Compat_discard')))((($GLOBALS['Effect_Uncurried_runEffectFn3'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn3')))($canceler, $e, (($GLOBALS['Effect_Uncurried_mkEffectFn1'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn1')))((($GLOBALS['Effect_Aff_Compat_compose'] ?? \Effect\Aff\Compat\phpurs_eval_thunk('Effect_Aff_Compat_compose')))($k2, ($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')))), (($GLOBALS['Effect_Uncurried_mkEffectFn1'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn1')))((($GLOBALS['Effect_Aff_Compat_compose'] ?? \Effect\Aff\Compat\phpurs_eval_thunk('Effect_Aff_Compat_compose')))($k2, ($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right'))))), (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Aff_Compat_pure'] ?? \Effect\Aff\Compat\phpurs_eval_thunk('Effect_Aff_Compat_pure')))(($GLOBALS['Effect_Aff_nonCanceler'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_nonCanceler')));
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
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v1) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Compat_fromEffectFnAff'] = __NAMESPACE__ . '\\Effect_Aff_Compat_fromEffectFnAff';

