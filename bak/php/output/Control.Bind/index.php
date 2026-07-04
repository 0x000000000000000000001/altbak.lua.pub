<?php

namespace Control\Bind;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
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
      case 'Control_Bind_bindProxy': $v = (($GLOBALS['Control_Bind_Bind__dollar__Dict'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_Bind__dollar__Dict')))((object)["bind" => (function() {
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
      case 'Control_Bind_bindFn': $v = (($GLOBALS['Control_Bind_Bind__dollar__Dict'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_Bind__dollar__Dict')))((object)["bind" => (function() {
  $__fn = function($m, $f = null, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($x) use ($m, $f, &$__fn) { return $__fn($m, $f, $x); };
    if ($__num === 1) return function($f, $x = null) use ($m, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($m, $f, $x);
      if ($__num2 === 1) return function($x) use ($m, $f, &$__fn) { return $__fn($m, $f, $x); };
      return phpurs_curry_fallback($__fn, [$m], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($f)(($m)($x), $x);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
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
      case 'Control_Bind_bindArray': $v = (($GLOBALS['Control_Bind_Bind__dollar__Dict'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_Bind__dollar__Dict')))((object)["bind" => ($GLOBALS['Control_Bind_arrayBind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_arrayBind')), "Apply0" => (function() {
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
      case 'Control_Bind_discardProxy': $v = (($GLOBALS['Control_Bind_Discard__dollar__Dict'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_Discard__dollar__Dict')))((object)["discard" => (function() {
  $__fn = function($dictBind) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($dictBind)->bind;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Control_Bind_discardUnit': $v = (($GLOBALS['Control_Bind_Discard__dollar__Dict'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_Discard__dollar__Dict')))((object)["discard" => (function() {
  $__fn = function($dictBind) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($dictBind)->bind;
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


// Control_Bind_identity
function Control_Bind_identity($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Bind_identity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Bind_identity'] = __NAMESPACE__ . '\\Control_Bind_identity';

// Control_Bind_Bind$Dict
function Control_Bind_Bind__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Bind_Bind__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Bind_Bind__dollar__Dict'] = __NAMESPACE__ . '\\Control_Bind_Bind__dollar__Dict';

// Control_Bind_Discard$Dict
function Control_Bind_Discard__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Bind_Discard__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Bind_Discard__dollar__Dict'] = __NAMESPACE__ . '\\Control_Bind_Discard__dollar__Dict';

// Control_Bind_discard
function Control_Bind_discard($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Bind_discard';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->discard;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Bind_discard'] = __NAMESPACE__ . '\\Control_Bind_discard';




// Control_Bind_bind
function Control_Bind_bind($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Bind_bind';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Bind_bind'] = __NAMESPACE__ . '\\Control_Bind_bind';

// Control_Bind_bindFlipped
function Control_Bind_bindFlipped($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Bind_bindFlipped';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
    $__res = ($__global_Data_Function_flip)(($dictBind)->bind);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Bind_bindFlipped'] = __NAMESPACE__ . '\\Control_Bind_bindFlipped';

// Control_Bind_composeKleisliFlipped
function Control_Bind_composeKleisliFlipped($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Bind_composeKleisliFlipped';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Bind_bindFlipped = ($GLOBALS['Control_Bind_bindFlipped'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bindFlipped'));
$bindFlipped1 = ($__global_Control_Bind_bindFlipped)($dictBind);
    $__res = (function() use ($bindFlipped1) {
  $__fn = function($f, $g = null, $a = null) use ($bindFlipped1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($a) use ($f, $g, &$__fn) { return $__fn($f, $g, $a); };
    if ($__num === 1) return function($g, $a = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $a);
      if ($__num2 === 1) return function($a) use ($f, $g, &$__fn) { return $__fn($f, $g, $a); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($bindFlipped1)($f, ($g)($a));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Bind_composeKleisliFlipped'] = __NAMESPACE__ . '\\Control_Bind_composeKleisliFlipped';

// Control_Bind_composeKleisli
function Control_Bind_composeKleisli($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Bind_composeKleisli';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bind1 = ($dictBind)->bind;
    $__res = (function() use ($bind1) {
  $__fn = function($f, $g = null, $a = null) use ($bind1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($a) use ($f, $g, &$__fn) { return $__fn($f, $g, $a); };
    if ($__num === 1) return function($g, $a = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $a);
      if ($__num2 === 1) return function($a) use ($f, $g, &$__fn) { return $__fn($f, $g, $a); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($bind1)(($f)($a), $g);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Bind_composeKleisli'] = __NAMESPACE__ . '\\Control_Bind_composeKleisli';



// Control_Bind_ifM
function Control_Bind_ifM($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Bind_ifM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bind1 = ($dictBind)->bind;
    $__res = (function() use ($bind1) {
  $__fn = function($cond, $t = null, $f = null) use ($bind1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($f) use ($cond, $t, &$__fn) { return $__fn($cond, $t, $f); };
    if ($__num === 1) return function($t, $f = null) use ($cond, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($cond, $t, $f);
      if ($__num2 === 1) return function($f) use ($cond, $t, &$__fn) { return $__fn($cond, $t, $f); };
      return phpurs_curry_fallback($__fn, [$cond], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($bind1)($cond, (function() use ($t, $f) {
  $__body = function($cond__prime__) use ($t, $f) {
    $__case_0 = $cond__prime__;
    if (($__case_0 === true)) {
return $t;
} else {
if (true) {
return $f;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($cond__prime__) use ($t, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($cond__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Bind_ifM'] = __NAMESPACE__ . '\\Control_Bind_ifM';

// Control_Bind_join
function Control_Bind_join($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Bind_join';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Bind_identity = ($GLOBALS['Control_Bind_identity'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_identity'));
$bind1 = ($dictBind)->bind;
    $__res = (function() use ($bind1, $__global_Control_Bind_identity) {
  $__fn = function($m) use ($bind1, $__global_Control_Bind_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind1)($m, $__global_Control_Bind_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Bind_join'] = __NAMESPACE__ . '\\Control_Bind_join';

