<?php

namespace Control\Apply;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
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
      case 'Control_Apply_applyProxy': $v = (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => (function() {
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
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_functorProxy = ($GLOBALS['Data_Functor_functorProxy'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_functorProxy'));
    $__res = $__global_Data_Functor_functorProxy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Control_Apply_applyFn': $v = (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => (function() {
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
    $__res = ($f)($x, ($g)($x));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_functorFn = ($GLOBALS['Data_Functor_functorFn'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_functorFn'));
    $__res = $__global_Data_Functor_functorFn;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Control_Apply_applyArray': $v = (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => ($GLOBALS['Control_Apply_arrayApply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_arrayApply')), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_functorArray = ($GLOBALS['Data_Functor_functorArray'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_functorArray'));
    $__res = $__global_Data_Functor_functorArray;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Apply_identity
function Control_Apply_identity($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Apply_identity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Apply_identity'] = __NAMESPACE__ . '\\Control_Apply_identity';

// Control_Apply_Apply$Dict
function Control_Apply_Apply__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Apply_Apply__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Apply_Apply__dollar__Dict'] = __NAMESPACE__ . '\\Control_Apply_Apply__dollar__Dict';




// Control_Apply_apply
function Control_Apply_apply($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Apply_apply';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Apply_apply'] = __NAMESPACE__ . '\\Control_Apply_apply';

// Control_Apply_applyFirst
function Control_Apply_applyFirst($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Apply_applyFirst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$apply1 = ($dictApply)->apply;
$map = ((($dictApply)->Functor0)($__global_Prim_undefined))->map;
    $__res = (function() use ($apply1, $map, $__global_Data_Function_const) {
  $__fn = function($a, $b = null) use ($apply1, $map, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($apply1)(($map)($__global_Data_Function_const, $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Apply_applyFirst'] = __NAMESPACE__ . '\\Control_Apply_applyFirst';

// Control_Apply_applySecond
function Control_Apply_applySecond($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Apply_applySecond';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Apply_identity = ($GLOBALS['Control_Apply_identity'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_identity'));
$apply1 = ($dictApply)->apply;
$map = ((($dictApply)->Functor0)($__global_Prim_undefined))->map;
    $__res = (function() use ($apply1, $map, $__global_Data_Function_const, $__global_Control_Apply_identity) {
  $__fn = function($a, $b = null) use ($apply1, $map, $__global_Data_Function_const, $__global_Control_Apply_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($apply1)(($map)(($__global_Data_Function_const)($__global_Control_Apply_identity), $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Apply_applySecond'] = __NAMESPACE__ . '\\Control_Apply_applySecond';

// Control_Apply_lift2
function Control_Apply_lift2($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Apply_lift2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$apply1 = ($dictApply)->apply;
$map = ((($dictApply)->Functor0)($__global_Prim_undefined))->map;
    $__res = (function() use ($apply1, $map) {
  $__fn = function($f, $a = null, $b = null) use ($apply1, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
    if ($__num === 1) return function($a, $b = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $b);
      if ($__num2 === 1) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($apply1)(($map)($f, $a), $b);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Apply_lift2'] = __NAMESPACE__ . '\\Control_Apply_lift2';

// Control_Apply_lift3
function Control_Apply_lift3($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Apply_lift3';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$apply1 = ($dictApply)->apply;
$map = ((($dictApply)->Functor0)($__global_Prim_undefined))->map;
    $__res = (function() use ($apply1, $map) {
  $__fn = function($f, $a = null, $b = null, $c = null) use ($apply1, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($c) use ($f, $a, $b, &$__fn) { return $__fn($f, $a, $b, $c); };
    if ($__num === 2) return function($b, $c = null) use ($f, $a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $b, $c);
      if ($__num2 === 1) return function($c) use ($f, $a, $b, &$__fn) { return $__fn($f, $a, $b, $c); };
      return phpurs_curry_fallback($__fn, [$f, $a], 4);
    };
    if ($__num === 1) return function($a, $b = null, $c = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $a, $b, $c);
      if ($__num2 === 2) return function($c) use ($f, $a, $b, &$__fn) { return $__fn($f, $a, $b, $c); };
      if ($__num2 === 1) return function($b, $c = null) use ($f, $a, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $a, $b, $c);
        if ($__num3 === 1) return function($c) use ($f, $a, $b, &$__fn) { return $__fn($f, $a, $b, $c); };
        return phpurs_curry_fallback($__fn, [$f, $a], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = ($apply1)(($apply1)(($map)($f, $a), $b), $c);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Apply_lift3'] = __NAMESPACE__ . '\\Control_Apply_lift3';

// Control_Apply_lift4
function Control_Apply_lift4($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Apply_lift4';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$apply1 = ($dictApply)->apply;
$map = ((($dictApply)->Functor0)($__global_Prim_undefined))->map;
    $__res = (function() use ($apply1, $map) {
  $__fn = function($f, $a = null, $b = null, $c = null, $d = null) use ($apply1, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
    $__res = ($apply1)(($apply1)(($apply1)(($map)($f, $a), $b), $c), $d);
  return $__num > 5 ? $__res(...array_slice(func_get_args(), 5)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Apply_lift4'] = __NAMESPACE__ . '\\Control_Apply_lift4';

// Control_Apply_lift5
function Control_Apply_lift5($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Apply_lift5';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$apply1 = ($dictApply)->apply;
$map = ((($dictApply)->Functor0)($__global_Prim_undefined))->map;
    $__res = (function() use ($apply1, $map) {
  $__fn = function($f, $a = null, $b = null, $c = null, $d = null, $e = null) use ($apply1, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = ($apply1)(($apply1)(($apply1)(($apply1)(($map)($f, $a), $b), $c), $d), $e);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Apply_lift5'] = __NAMESPACE__ . '\\Control_Apply_lift5';

