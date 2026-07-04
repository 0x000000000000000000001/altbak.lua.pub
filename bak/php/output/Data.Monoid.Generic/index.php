<?php

namespace Data\Monoid\Generic;

require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Generic/index.php';

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
      case 'Data_Monoid_Generic_genericMonoidNoArguments': $v = (($GLOBALS['Data_Monoid_Generic_GenericMonoid__dollar__Dict'] ?? \Data\Monoid\Generic\phpurs_eval_thunk('Data_Monoid_Generic_GenericMonoid__dollar__Dict')))((object)["genericMempty'" => ($GLOBALS['Data_Generic_Rep_NoArguments'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_NoArguments'))]); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Monoid_Generic_GenericMonoid$Dict
function Data_Monoid_Generic_GenericMonoid__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Generic_GenericMonoid__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Generic_GenericMonoid__dollar__Dict'] = __NAMESPACE__ . '\\Data_Monoid_Generic_GenericMonoid__dollar__Dict';


// Data_Monoid_Generic_genericMonoidArgument
function Data_Monoid_Generic_genericMonoidArgument($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Generic_genericMonoidArgument';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Monoid_Generic_GenericMonoid__dollar__Dict'] ?? \Data\Monoid\Generic\phpurs_eval_thunk('Data_Monoid_Generic_GenericMonoid__dollar__Dict')))((object)["genericMempty'" => (($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument')))((($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid))]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Generic_genericMonoidArgument'] = __NAMESPACE__ . '\\Data_Monoid_Generic_genericMonoidArgument';

// Data_Monoid_Generic_genericMempty'
function Data_Monoid_Generic_genericMempty__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Generic_genericMempty__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericMempty__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Generic_genericMempty__prime__'] = __NAMESPACE__ . '\\Data_Monoid_Generic_genericMempty__prime__';

// Data_Monoid_Generic_genericMonoidConstructor
function Data_Monoid_Generic_genericMonoidConstructor($dictGenericMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Generic_genericMonoidConstructor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Monoid_Generic_GenericMonoid__dollar__Dict'] ?? \Data\Monoid\Generic\phpurs_eval_thunk('Data_Monoid_Generic_GenericMonoid__dollar__Dict')))((object)["genericMempty'" => (($GLOBALS['Data_Generic_Rep_Constructor'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Constructor')))((($GLOBALS['Data_Monoid_Generic_genericMempty__prime__'] ?? \Data\Monoid\Generic\phpurs_eval_thunk('Data_Monoid_Generic_genericMempty__prime__')))($dictGenericMonoid))]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Generic_genericMonoidConstructor'] = __NAMESPACE__ . '\\Data_Monoid_Generic_genericMonoidConstructor';

// Data_Monoid_Generic_genericMonoidProduct
function Data_Monoid_Generic_genericMonoidProduct($dictGenericMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Generic_genericMonoidProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericMempty__prime__1 = (($GLOBALS['Data_Monoid_Generic_genericMempty__prime__'] ?? \Data\Monoid\Generic\phpurs_eval_thunk('Data_Monoid_Generic_genericMempty__prime__')))($dictGenericMonoid);
    $__res = (function() use ($genericMempty__prime__1) {
  $__fn = function($dictGenericMonoid1) use ($genericMempty__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Monoid_Generic_GenericMonoid__dollar__Dict'] ?? \Data\Monoid\Generic\phpurs_eval_thunk('Data_Monoid_Generic_GenericMonoid__dollar__Dict')))((object)["genericMempty'" => (($GLOBALS['Data_Generic_Rep_Product'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Product')))($genericMempty__prime__1, (($GLOBALS['Data_Monoid_Generic_genericMempty__prime__'] ?? \Data\Monoid\Generic\phpurs_eval_thunk('Data_Monoid_Generic_genericMempty__prime__')))($dictGenericMonoid1))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Generic_genericMonoidProduct'] = __NAMESPACE__ . '\\Data_Monoid_Generic_genericMonoidProduct';

// Data_Monoid_Generic_genericMempty
function Data_Monoid_Generic_genericMempty($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Generic_genericMempty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$to = (($GLOBALS['Data_Generic_Rep_to'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_to')))($dictGeneric);
    $__res = (function() use ($to) {
  $__fn = function($dictGenericMonoid) use ($to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($to)((($GLOBALS['Data_Monoid_Generic_genericMempty__prime__'] ?? \Data\Monoid\Generic\phpurs_eval_thunk('Data_Monoid_Generic_genericMempty__prime__')))($dictGenericMonoid));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Generic_genericMempty'] = __NAMESPACE__ . '\\Data_Monoid_Generic_genericMempty';

