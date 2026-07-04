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

      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Comonad_Store_Class_compose
function Control_Comonad_Store_Class_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_compose';
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
$GLOBALS['Control_Comonad_Store_Class_compose'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_compose';

// Control_Comonad_Store_Class_lower
function Control_Comonad_Store_Class_lower($dictComonad, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_lower';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($dictComonad, $__fn) { return $__fn($dictComonad, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($dictComonad, $v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$x = ($__case_0)->v1;
return $x;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($dictComonad, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Comonad_Store_Class_lower'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_lower';

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
$peek1 = (($GLOBALS['Control_Comonad_Store_Class_peek'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_peek')))($dictComonadStore);
$pos1 = (($GLOBALS['Control_Comonad_Store_Class_pos'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_pos')))($dictComonadStore);
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
$peeks1 = (($GLOBALS['Control_Comonad_Store_Class_peeks'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_peeks')))($dictComonadStore);
$duplicate = (($GLOBALS['Control_Extend_duplicate'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_duplicate')))((((($dictComonadStore)->Comonad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Extend0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($peeks1, $duplicate) {
  $__fn = function($f) use ($peeks1, $duplicate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Comonad_Store_Class_compose'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_compose')))(($peeks1)($f), $duplicate);
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
$peek1 = (($GLOBALS['Control_Comonad_Store_Class_peek'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_peek')))($dictComonadStore);
$duplicate = (($GLOBALS['Control_Extend_duplicate'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_duplicate')))((((($dictComonadStore)->Comonad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Extend0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($peek1, $duplicate) {
  $__fn = function($s) use ($peek1, $duplicate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Comonad_Store_Class_compose'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_compose')))(($peek1)($s), $duplicate);
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
$peek1 = (($GLOBALS['Control_Comonad_Store_Class_peek'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_peek')))($dictComonadStore);
$pos1 = (($GLOBALS['Control_Comonad_Store_Class_pos'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_pos')))($dictComonadStore);
    $__res = (function() use ($peek1, $pos1) {
  $__fn = function($dictFunctor) use ($peek1, $pos1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (function() use ($map, $peek1, $pos1) {
  $__fn = function($f, $x = null) use ($map, $peek1, $pos1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, &$__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))($peek1, $x), ($f)(($pos1)($x)));
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
$pos1 = (($GLOBALS['Control_Comonad_Store_Class_pos'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_pos')))($dictComonadStore);
$Comonad0 = (($dictComonadStore)->Comonad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$peek1 = (($GLOBALS['Control_Comonad_Store_Class_peek'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_peek')))($dictComonadStore);
$comonadTracedT = (($GLOBALS['Control_Comonad_Traced_Trans_comonadTracedT'] ?? \Control\Comonad\Traced\Trans\phpurs_eval_thunk('Control_Comonad_Traced_Trans_comonadTracedT')))($Comonad0);
    $__res = (function() use (&$Comonad0, $comonadTracedT, $pos1, $peek1) {
  $__fn = function($dictMonoid) use (&$Comonad0, $comonadTracedT, $pos1, $peek1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$lower1 = (($GLOBALS['Control_Comonad_Trans_Class_lower'] ?? \Control\Comonad\Trans\Class\phpurs_eval_thunk('Control_Comonad_Trans_Class_lower')))((($GLOBALS['Control_Comonad_Traced_Trans_comonadTransTracedT'] ?? \Control\Comonad\Traced\Trans\phpurs_eval_thunk('Control_Comonad_Traced_Trans_comonadTransTracedT')))($dictMonoid), $Comonad0);
$comonadTracedT1 = ($comonadTracedT)($dictMonoid);
    $__res = (($GLOBALS['Control_Comonad_Store_Class_ComonadStore__dollar__Dict'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_ComonadStore__dollar__Dict')))((object)["pos" => (($GLOBALS['Control_Comonad_Store_Class_compose'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_compose')))($pos1, $lower1), "peek" => (function() use ($peek1, $lower1) {
  $__fn = function($s) use ($peek1, $lower1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Comonad_Store_Class_compose'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_compose')))(($peek1)($s), $lower1);
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
})()]);
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
$extract = (($GLOBALS['Control_Comonad_extract'] ?? \Control\Comonad\phpurs_eval_thunk('Control_Comonad_extract')))($dictComonad);
$comonadStoreT = (($GLOBALS['Control_Comonad_Store_Trans_comonadStoreT'] ?? \Control\Comonad\Store\Trans\phpurs_eval_thunk('Control_Comonad_Store_Trans_comonadStoreT')))($dictComonad);
    $__res = (($GLOBALS['Control_Comonad_Store_Class_ComonadStore__dollar__Dict'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_ComonadStore__dollar__Dict')))((object)["pos" => (function() {
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
})()]);
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
$Comonad0 = (($dictComonadStore)->Comonad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$lower1 = (($GLOBALS['Control_Comonad_Store_Class_lower'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_lower')))($Comonad0);
$peek1 = (($GLOBALS['Control_Comonad_Store_Class_peek'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_peek')))($dictComonadStore);
$comonadEnvT = (($GLOBALS['Control_Comonad_Env_Trans_comonadEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_comonadEnvT')))($Comonad0);
    $__res = (($GLOBALS['Control_Comonad_Store_Class_ComonadStore__dollar__Dict'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_ComonadStore__dollar__Dict')))((object)["pos" => (($GLOBALS['Control_Comonad_Store_Class_compose'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_compose')))((($GLOBALS['Control_Comonad_Store_Class_pos'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_pos')))($dictComonadStore), $lower1), "peek" => (function() use ($peek1, $lower1) {
  $__fn = function($s) use ($peek1, $lower1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Comonad_Store_Class_compose'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_compose')))(($peek1)($s), $lower1);
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
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Store_Class_comonadStoreEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_comonadStoreEnvT';

