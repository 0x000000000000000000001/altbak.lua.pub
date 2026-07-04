<?php

namespace Data\Functor;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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
      case 'Data_Functor_functorProxy': $v = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Type_Proxy_Proxy = ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'));
    $__res = $__global_Type_Proxy_Proxy;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Functor_functorFn': $v = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() {
  $__fn = function($f, $g = null, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($x) use ($f, $g, &$__fn) { return $__fn($f, $g, $x); };
    if ($__num === 1) return function($g, $x = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $x);
      if ($__num2 === 1) return function($x) use ($f, $g, &$__fn) { return $__fn($f, $g, $x); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($f)(($g)($x));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Functor_functorArray': $v = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => ($GLOBALS['Data_Functor_arrayMap'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_arrayMap'))]); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Functor_Functor$Dict
function Data_Functor_Functor__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Functor__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Functor__dollar__Dict'] = __NAMESPACE__ . '\\Data_Functor_Functor__dollar__Dict';

// Data_Functor_map
function Data_Functor_map($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_map';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_map'] = __NAMESPACE__ . '\\Data_Functor_map';

// Data_Functor_mapFlipped
function Data_Functor_mapFlipped($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_mapFlipped';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map1 = ($dictFunctor)->map;
    $__res = (function() use ($map1) {
  $__fn = function($fa, $f = null) use ($map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($fa, &$__fn) { return $__fn($fa, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map1)($f, $fa);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_mapFlipped'] = __NAMESPACE__ . '\\Data_Functor_mapFlipped';

// Data_Functor_void
function Data_Functor_void($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_void';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = (($dictFunctor)->map)(($__global_Data_Function_const)($__global_Data_Unit_unit));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_void'] = __NAMESPACE__ . '\\Data_Functor_void';

// Data_Functor_voidLeft
function Data_Functor_voidLeft($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_voidLeft';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$map1 = ($dictFunctor)->map;
    $__res = (function() use ($map1, $__global_Data_Function_const) {
  $__fn = function($f, $x = null) use ($map1, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, &$__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map1)(($__global_Data_Function_const)($x), $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_voidLeft'] = __NAMESPACE__ . '\\Data_Functor_voidLeft';

// Data_Functor_voidRight
function Data_Functor_voidRight($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_voidRight';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$map1 = ($dictFunctor)->map;
    $__res = (function() use ($map1, $__global_Data_Function_const) {
  $__fn = function($x) use ($map1, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map1)(($__global_Data_Function_const)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_voidRight'] = __NAMESPACE__ . '\\Data_Functor_voidRight';




// Data_Functor_flap
function Data_Functor_flap($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_flap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map1 = ($dictFunctor)->map;
    $__res = (function() use ($map1) {
  $__fn = function($ff, $x = null) use ($map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($ff, &$__fn) { return $__fn($ff, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map1)((function() use ($x) {
  $__fn = function($f) use ($x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)($x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $ff);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_flap'] = __NAMESPACE__ . '\\Data_Functor_flap';

