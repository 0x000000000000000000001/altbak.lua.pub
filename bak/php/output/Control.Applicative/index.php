<?php

namespace Control\Applicative;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
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
      case 'Control_Applicative_applicativeProxy': $v = (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Type_Proxy_Proxy = ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'));
    $__res = $__global_Type_Proxy_Proxy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Apply_applyProxy = ($GLOBALS['Control_Apply_applyProxy'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_applyProxy'));
    $__res = $__global_Control_Apply_applyProxy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Control_Applicative_applicativeFn': $v = (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => (function() {
  $__fn = function($x, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($x, &$__fn) { return $__fn($x, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $x;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Apply_applyFn = ($GLOBALS['Control_Apply_applyFn'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_applyFn'));
    $__res = $__global_Control_Apply_applyFn;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Control_Applicative_applicativeArray': $v = (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = [$x];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Apply_applyArray = ($GLOBALS['Control_Apply_applyArray'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_applyArray'));
    $__res = $__global_Control_Apply_applyArray;
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


// Control_Applicative_Applicative$Dict
function Control_Applicative_Applicative__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Applicative_Applicative__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Applicative_Applicative__dollar__Dict'] = __NAMESPACE__ . '\\Control_Applicative_Applicative__dollar__Dict';

// Control_Applicative_pure
function Control_Applicative_pure($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Applicative_pure';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Applicative_pure'] = __NAMESPACE__ . '\\Control_Applicative_pure';

// Control_Applicative_unless
function Control_Applicative_unless($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Applicative_unless';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$pure1 = ($dictApplicative)->pure;
    $__res = (function() use ($pure1, $__global_Data_Unit_unit) {
  $__body = function($v, $v1) use ($pure1, $__global_Data_Unit_unit) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (($__case_0 === false)) {
$m = $__case_1;
return $m;
} else {
if (($__case_0 === true)) {
return ($pure1)($__global_Data_Unit_unit);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($pure1, $__global_Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Applicative_unless'] = __NAMESPACE__ . '\\Control_Applicative_unless';

// Control_Applicative_when
function Control_Applicative_when($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Applicative_when';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$pure1 = ($dictApplicative)->pure;
    $__res = (function() use ($pure1, $__global_Data_Unit_unit) {
  $__body = function($v, $v1) use ($pure1, $__global_Data_Unit_unit) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (($__case_0 === true)) {
$m = $__case_1;
return $m;
} else {
if (($__case_0 === false)) {
return ($pure1)($__global_Data_Unit_unit);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($pure1, $__global_Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Applicative_when'] = __NAMESPACE__ . '\\Control_Applicative_when';

// Control_Applicative_liftA1
function Control_Applicative_liftA1($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Applicative_liftA1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$apply = ((($dictApplicative)->Apply0)($__global_Prim_undefined))->apply;
$pure1 = ($dictApplicative)->pure;
    $__res = (function() use ($apply, $pure1) {
  $__fn = function($f, $a = null) use ($apply, $pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($apply)(($pure1)($f), $a);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Applicative_liftA1'] = __NAMESPACE__ . '\\Control_Applicative_liftA1';




