<?php

namespace Control\Comonad\Store\Class;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Store.Class/index.php';
require_once __DIR__ . '/../Control.Comonad.Store.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Traced.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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
    $missing = $expected - count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num > 1) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...array_slice($merged, 0, $expected));
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
      case 'Control_Comonad_Store_Class_compose': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compose;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Control_Comonad_Store_Class_lower': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Comonad_Env_Trans_comonadTransEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_comonadTransEnvT'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->lower;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };




// Control_Comonad_Store_Class_ComonadStore$Dict
function Control_Comonad_Store_Class_ComonadStore__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_ComonadStore__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Store_Class_ComonadStore__dollar__Dict'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_ComonadStore__dollar__Dict';

// Control_Comonad_Store_Class_pos
function Control_Comonad_Store_Class_pos($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_pos';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->pos;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Store_Class_pos'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_pos';

// Control_Comonad_Store_Class_peek
function Control_Comonad_Store_Class_peek($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_peek';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->peek;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Store_Class_peek'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_peek';

// Control_Comonad_Store_Class_peeks
function Control_Comonad_Store_Class_peeks($dictComonadStore) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_peeks';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictComonadStore;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->peek;
} else {
throw new \Exception("Pattern match failure");
};
$peek1 = $__case_res_0;
$__case_0 = $dictComonadStore;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pos;
} else {
throw new \Exception("Pattern match failure");
};
$pos1 = $__case_res_1;
    $__res = (function() use ($peek1, $pos1) {
  $__fn = function($f, $x = null) use ($peek1, $pos1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, &$__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($peek1)(($f)(($pos1)($x)), $x);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Store_Class_peeks'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_peeks';

// Control_Comonad_Store_Class_seeks
function Control_Comonad_Store_Class_seeks($dictComonadStore) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_seeks';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Extend_identity = ($GLOBALS['Control_Extend_identity'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_identity'));
$__global_Control_Comonad_Store_Class_compose = ($GLOBALS['Control_Comonad_Store_Class_compose'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_compose'));
$__case_0 = $dictComonadStore;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->peek;
} else {
throw new \Exception("Pattern match failure");
};
$peek1 = $__case_res_0;
$__case_0 = $dictComonadStore;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pos;
} else {
throw new \Exception("Pattern match failure");
};
$pos1 = $__case_res_1;
$peeks1 = (function() use ($peek1, $pos1) {
  $__fn = function($f, $x = null) use ($peek1, $pos1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, &$__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($peek1)(($f)(($pos1)($x)), $x);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->extend;
} else {
throw new \Exception("Pattern match failure");
};
$duplicate = ($__case_res_2)($__global_Control_Extend_identity);
    $__res = (function() use ($__global_Control_Comonad_Store_Class_compose, $peeks1, $duplicate) {
  $__fn = function($f) use ($__global_Control_Comonad_Store_Class_compose, $peeks1, $duplicate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Comonad_Store_Class_compose)(($peeks1)($f), $duplicate);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Store_Class_seeks'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_seeks';

// Control_Comonad_Store_Class_seek
function Control_Comonad_Store_Class_seek($dictComonadStore) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_seek';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Extend_identity = ($GLOBALS['Control_Extend_identity'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_identity'));
$__global_Control_Comonad_Store_Class_compose = ($GLOBALS['Control_Comonad_Store_Class_compose'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_compose'));
$__case_0 = $dictComonadStore;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->peek;
} else {
throw new \Exception("Pattern match failure");
};
$peek1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->extend;
} else {
throw new \Exception("Pattern match failure");
};
$duplicate = ($__case_res_1)($__global_Control_Extend_identity);
    $__res = (function() use ($__global_Control_Comonad_Store_Class_compose, $peek1, $duplicate) {
  $__fn = function($s) use ($__global_Control_Comonad_Store_Class_compose, $peek1, $duplicate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Comonad_Store_Class_compose)(($peek1)($s), $duplicate);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Store_Class_seek'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_seek';

// Control_Comonad_Store_Class_experiment
function Control_Comonad_Store_Class_experiment($dictComonadStore) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_experiment';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__case_0 = $dictComonadStore;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->peek;
} else {
throw new \Exception("Pattern match failure");
};
$peek1 = $__case_res_0;
$__case_0 = $dictComonadStore;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pos;
} else {
throw new \Exception("Pattern match failure");
};
$pos1 = $__case_res_1;
    $__res = (function() use ($__global_Data_Function_flip, $peek1, $pos1) {
  $__fn = function($dictFunctor) use ($__global_Data_Function_flip, $peek1, $pos1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctor;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
    $__res = (function() use ($map, $__global_Data_Function_flip, $peek1, $pos1) {
  $__fn = function($f, $x = null) use ($map, $__global_Data_Function_flip, $peek1, $pos1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, &$__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)(($__global_Data_Function_flip)($peek1, $x), ($f)(($pos1)($x)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Store_Class_experiment'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_experiment';

// Control_Comonad_Store_Class_comonadStoreTracedT
function Control_Comonad_Store_Class_comonadStoreTracedT($dictComonadStore) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_comonadStoreTracedT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Comonad_Store_Class_compose = ($GLOBALS['Control_Comonad_Store_Class_compose'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_compose'));
$__case_0 = $dictComonadStore;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pos;
} else {
throw new \Exception("Pattern match failure");
};
$pos1 = $__case_res_0;
$Comonad0 = (($dictComonadStore)->Comonad0)($__global_Prim_undefined);
$__case_0 = $dictComonadStore;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->peek;
} else {
throw new \Exception("Pattern match failure");
};
$peek1 = $__case_res_1;
$__case_0 = $Comonad0;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->extract;
} else {
throw new \Exception("Pattern match failure");
};
$extract = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->extend;
} else {
throw new \Exception("Pattern match failure");
};
$extend = $__case_res_3;
$Functor0 = (($dictExtend)->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_4;
$__case_0 = $Functor0;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_5;
$functorTracedT1 = (object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$w = $__case_1;
return ($map)((function() use ($f1) {
  $__fn = function($g, $t = null) use ($f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($g, &$__fn) { return $__fn($g, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($f1)(($g)($t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $w);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
$extendTracedT1 = (function() use ($extend, $map, $functorTracedT1) {
  $__fn = function($dictSemigroup) use ($extend, $map, $functorTracedT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictSemigroup;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_6;
    $__res = (object)["extend" => (function() use ($extend, $map, $append) {
  $__body = function($f, $v) use ($extend, $map, $append) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$w = $__case_1;
return ($extend)((function() use ($f1, $map, $append) {
  $__fn = function($w__prime__, $t = null) use ($f1, $map, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($w__prime__, &$__fn) { return $__fn($w__prime__, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($f1)(($map)((function() use ($append, $t) {
  $__fn = function($h, $t__prime__ = null) use ($append, $t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t__prime__) use ($h, &$__fn) { return $__fn($h, $t__prime__); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($h)(($append)($t, $t__prime__));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $w__prime__));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $w);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($extend, $map, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorTracedT1) {
  $__fn = function($__dollar____unused) use ($functorTracedT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorTracedT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$comonadTracedT = (function() use ($extendTracedT1, $__global_Prim_undefined, $extract) {
  $__fn = function($dictMonoid) use ($extendTracedT1, $__global_Prim_undefined, $extract, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty = $__case_res_7;
$extendTracedT2 = ($extendTracedT1)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
    $__res = (object)["extract" => (function() use ($extract, $mempty) {
  $__body = function($v) use ($extract, $mempty) {
    $__case_0 = $v;
    if (true) {
$w = $__case_0;
return ($extract)($w, $mempty);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($extract, $mempty, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Extend0" => (function() use ($extendTracedT2) {
  $__fn = function($__dollar____unused) use ($extendTracedT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $extendTracedT2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($dict, &$Comonad0, $comonadTracedT, $__global_Control_Comonad_Store_Class_compose, $pos1, $peek1) {
  $__fn = function($dictMonoid) use ($dict, &$Comonad0, $comonadTracedT, $__global_Control_Comonad_Store_Class_compose, $pos1, $peek1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->lower;
} else {
throw new \Exception("Pattern match failure");
};
$lower1 = ($__case_res_8)($Comonad0);
$comonadTracedT1 = ($comonadTracedT)($dictMonoid);
    $__res = (object)["pos" => ($__global_Control_Comonad_Store_Class_compose)($pos1, $lower1), "peek" => (function() use ($__global_Control_Comonad_Store_Class_compose, $peek1, $lower1) {
  $__fn = function($s) use ($__global_Control_Comonad_Store_Class_compose, $peek1, $lower1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Comonad_Store_Class_compose)(($peek1)($s), $lower1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Comonad0" => (function() use ($comonadTracedT1) {
  $__fn = function($__dollar____unused) use ($comonadTracedT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $comonadTracedT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Store_Class_comonadStoreTracedT'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_comonadStoreTracedT';

// Control_Comonad_Store_Class_comonadStoreStoreT
function Control_Comonad_Store_Class_comonadStoreStoreT($dictComonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_comonadStoreStoreT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Comonad_Store_Trans_composeFlipped = ($GLOBALS['Control_Comonad_Store_Trans_composeFlipped'] ?? \Control\Comonad\Store\Trans\phpurs_eval_thunk('Control_Comonad_Store_Trans_composeFlipped'));
$__case_0 = $dictComonad;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->extract;
} else {
throw new \Exception("Pattern match failure");
};
$extract = $__case_res_0;
$__case_0 = $dictComonad;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->extract;
} else {
throw new \Exception("Pattern match failure");
};
$extract = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->extend;
} else {
throw new \Exception("Pattern match failure");
};
$extend = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_3;
$functorStoreT1 = (object)["map" => (function() use ($map, $__global_Control_Comonad_Store_Trans_composeFlipped) {
  $__body = function($f, $v) use ($map, $__global_Control_Comonad_Store_Trans_composeFlipped) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$w = ($__case_1)->v0;
$s = ($__case_1)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($map)((function() use ($__global_Control_Comonad_Store_Trans_composeFlipped, $f1) {
  $__fn = function($h) use ($__global_Control_Comonad_Store_Trans_composeFlipped, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Comonad_Store_Trans_composeFlipped)($h, $f1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $w), $s);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($map, $__global_Control_Comonad_Store_Trans_composeFlipped, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
$extendStoreT1 = (object)["extend" => (function() use ($extend) {
  $__body = function($f, $v) use ($extend) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$w = ($__case_1)->v0;
$s = ($__case_1)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($extend)((function() use ($f1) {
  $__fn = function($w__prime__, $s__prime__ = null) use ($f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s__prime__) use ($w__prime__, &$__fn) { return $__fn($w__prime__, $s__prime__); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($f1)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($w__prime__, $s__prime__));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $w), $s);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($extend, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorStoreT1) {
  $__fn = function($__dollar____unused) use ($functorStoreT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorStoreT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$comonadStoreT = (object)["extract" => (function() use ($extract) {
  $__body = function($v) use ($extract) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$w = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ($extract)($w, $s);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($extract, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Extend0" => (function() use ($extendStoreT1) {
  $__fn = function($__dollar____unused) use ($extendStoreT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $extendStoreT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["pos" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$s = ($__case_0)->v1;
return $s;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "peek" => (function() use ($extract) {
  $__body = function($s, $v) use ($extract) {
    $__case_0 = $s;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$s1 = $__case_0;
$f = ($__case_1)->v0;
return ($extract)($f, $s1);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($s, $v = null) use ($extract, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($s, &$__fn) { return $__fn($s, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($s, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Comonad0" => (function() use ($comonadStoreT) {
  $__fn = function($__dollar____unused) use ($comonadStoreT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $comonadStoreT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Store_Class_comonadStoreStoreT'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_comonadStoreStoreT';

// Control_Comonad_Store_Class_comonadStoreEnvT
function Control_Comonad_Store_Class_comonadStoreEnvT($dictComonadStore) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_comonadStoreEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Comonad_Store_Class_lower = ($GLOBALS['Control_Comonad_Store_Class_lower'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_lower'));
$__global_Control_Comonad_Env_Trans_composeFlipped = ($GLOBALS['Control_Comonad_Env_Trans_composeFlipped'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_composeFlipped'));
$__global_Control_Comonad_Env_Trans_EnvT = ($GLOBALS['Control_Comonad_Env_Trans_EnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_EnvT'));
$__global_Control_Comonad_Store_Class_compose = ($GLOBALS['Control_Comonad_Store_Class_compose'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_compose'));
$Comonad0 = (($dictComonadStore)->Comonad0)($__global_Prim_undefined);
$lower1 = ($__global_Control_Comonad_Store_Class_lower)($Comonad0);
$__case_0 = $dictComonadStore;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->peek;
} else {
throw new \Exception("Pattern match failure");
};
$peek1 = $__case_res_0;
$__case_0 = $Comonad0;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->extract;
} else {
throw new \Exception("Pattern match failure");
};
$extract = $__case_res_1;
$Functor0 = (($dictExtend)->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->extend;
} else {
throw new \Exception("Pattern match failure");
};
$extend = $__case_res_3;
$__case_0 = $Functor0;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_4;
$functorEnvT1 = (object)["map" => (function() use ($map1) {
  $__body = function($f, $v) use ($map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$e = ($__case_1)->v0;
$x = ($__case_1)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($e, ($map1)($f1, $x));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
$extendEnvT1 = (object)["extend" => (function() use ($map1, $extend, $__global_Control_Comonad_Env_Trans_composeFlipped, $__global_Control_Comonad_Env_Trans_EnvT) {
  $__body = function($f, $v) use ($map1, $extend, $__global_Control_Comonad_Env_Trans_composeFlipped, $__global_Control_Comonad_Env_Trans_EnvT) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$e = ($__case_1)->v0;
$x = ($__case_1)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($e, ($map1)($f1, ($extend)(($__global_Control_Comonad_Env_Trans_composeFlipped)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($e), $__global_Control_Comonad_Env_Trans_EnvT), $x)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($map1, $extend, $__global_Control_Comonad_Env_Trans_composeFlipped, $__global_Control_Comonad_Env_Trans_EnvT, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorEnvT1) {
  $__fn = function($__dollar____unused) use ($functorEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorEnvT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$comonadEnvT = (object)["extract" => (function() use ($extract) {
  $__body = function($v) use ($extract) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$x = ($__case_0)->v1;
return ($extract)($x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($extract, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Extend0" => (function() use ($extendEnvT1) {
  $__fn = function($__dollar____unused) use ($extendEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $extendEnvT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dictComonadStore;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->pos;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["pos" => ($__global_Control_Comonad_Store_Class_compose)($__case_res_5, $lower1), "peek" => (function() use ($__global_Control_Comonad_Store_Class_compose, $peek1, $lower1) {
  $__fn = function($s) use ($__global_Control_Comonad_Store_Class_compose, $peek1, $lower1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Comonad_Store_Class_compose)(($peek1)($s), $lower1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Comonad0" => (function() use ($comonadEnvT) {
  $__fn = function($__dollar____unused) use ($comonadEnvT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $comonadEnvT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Store_Class_comonadStoreEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_comonadStoreEnvT';

