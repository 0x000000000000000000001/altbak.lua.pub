<?php

namespace Data\Reflectable;

require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Reflectable/index.php';
require_once __DIR__ . '/../Type.Proxy/index.php';

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
      case 'Data_Reflectable_reifiableString': $v = (($GLOBALS['Data_Reflectable_Reifiable__dollar__Dict'] ?? \Data\Reflectable\phpurs_eval_thunk('Data_Reflectable_Reifiable__dollar__Dict')))((object)[]); break;
      case 'Data_Reflectable_reifiableOrdering': $v = (($GLOBALS['Data_Reflectable_Reifiable__dollar__Dict'] ?? \Data\Reflectable\phpurs_eval_thunk('Data_Reflectable_Reifiable__dollar__Dict')))((object)[]); break;
      case 'Data_Reflectable_reifiableInt': $v = (($GLOBALS['Data_Reflectable_Reifiable__dollar__Dict'] ?? \Data\Reflectable\phpurs_eval_thunk('Data_Reflectable_Reifiable__dollar__Dict')))((object)[]); break;
      case 'Data_Reflectable_reifiableBoolean': $v = (($GLOBALS['Data_Reflectable_Reifiable__dollar__Dict'] ?? \Data\Reflectable\phpurs_eval_thunk('Data_Reflectable_Reifiable__dollar__Dict')))((object)[]); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Reflectable_Reifiable$Dict
function Data_Reflectable_Reifiable__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Reflectable_Reifiable__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Reflectable_Reifiable__dollar__Dict'] = __NAMESPACE__ . '\\Data_Reflectable_Reifiable__dollar__Dict';

// Data_Reflectable_Reflectable$Dict
function Data_Reflectable_Reflectable__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Reflectable_Reflectable__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Reflectable_Reflectable__dollar__Dict'] = __NAMESPACE__ . '\\Data_Reflectable_Reflectable__dollar__Dict';





// Data_Reflectable_reifyType
function Data_Reflectable_reifyType($__dollar____unused, $s = null, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Reflectable_reifyType';
  if ($__num < 3) {
    if ($__num === 2) return function($f) use ($__dollar____unused, $s, $__fn) { return $__fn($__dollar____unused, $s, $f); };
    if ($__num === 1) return function($s, $f = null) use ($__dollar____unused, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($__dollar____unused, $s, $f);
      if ($__num2 === 1) return function($f) use ($__dollar____unused, $s, $__fn) { return $__fn($__dollar____unused, $s, $f); };
      return phpurs_curry_fallback($__fn, [$__dollar____unused], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$coerce = ($GLOBALS['Data_Reflectable_unsafeCoerce'] ?? \Data\Reflectable\phpurs_eval_thunk('Data_Reflectable_unsafeCoerce'));
    $__res = ($coerce)((function() use ($f) {
  $__fn = function($dictReflectable) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)($dictReflectable);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (object)["reflectType" => (function() use ($s) {
  $__fn = function($v) use ($s, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $s;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()], ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Reflectable_reifyType'] = __NAMESPACE__ . '\\Data_Reflectable_reifyType';

// Data_Reflectable_reflectType
function Data_Reflectable_reflectType($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Reflectable_reflectType';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->reflectType;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Reflectable_reflectType'] = __NAMESPACE__ . '\\Data_Reflectable_reflectType';

