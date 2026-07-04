<?php

namespace Control\Comonad\Env\Class;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Class/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Store/index.php';
require_once __DIR__ . '/../Control.Comonad.Store.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Traced.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
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
      case 'Control_Comonad_Env_Class_comonadAskTuple': $v = (($GLOBALS['Control_Comonad_Env_Class_ComonadAsk__dollar__Dict'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_ComonadAsk__dollar__Dict')))((object)["ask" => ($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst')), "Comonad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Tuple_comonadTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_comonadTuple'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Control_Comonad_Env_Class_comonadEnvTuple': $v = (($GLOBALS['Control_Comonad_Env_Class_ComonadEnv__dollar__Dict'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_ComonadEnv__dollar__Dict')))((object)["local" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$x = ($__case_1)->v0;
$y = ($__case_1)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($f1)($x), $y);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ComonadAsk0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Control_Comonad_Env_Class_comonadAskTuple'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_comonadAskTuple'));
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


// Control_Comonad_Env_Class_compose
function Control_Comonad_Env_Class_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_compose';
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
$GLOBALS['Control_Comonad_Env_Class_compose'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_compose';

// Control_Comonad_Env_Class_lower
function Control_Comonad_Env_Class_lower($dictComonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_lower';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictComonad)->Extend0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($map) {
  $__body = function($v) use ($map) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$w = ($__case_0)->v0;
$s = ($__case_0)->v1;
return ($map)((function() use ($s) {
  $__fn = function($v1) use ($s, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v1)($s);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $w);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Class_lower'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_lower';

// Control_Comonad_Env_Class_ComonadAsk$Dict
function Control_Comonad_Env_Class_ComonadAsk__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_ComonadAsk__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Class_ComonadAsk__dollar__Dict'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_ComonadAsk__dollar__Dict';

// Control_Comonad_Env_Class_ComonadEnv$Dict
function Control_Comonad_Env_Class_ComonadEnv__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_ComonadEnv__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Class_ComonadEnv__dollar__Dict'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_ComonadEnv__dollar__Dict';

// Control_Comonad_Env_Class_local
function Control_Comonad_Env_Class_local($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_local';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->local;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Class_local'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_local';



// Control_Comonad_Env_Class_comonadAskEnvT
function Control_Comonad_Env_Class_comonadAskEnvT($dictComonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_comonadAskEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$comonadEnvT = (($GLOBALS['Control_Comonad_Env_Trans_comonadEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_comonadEnvT')))($dictComonad);
    $__res = (($GLOBALS['Control_Comonad_Env_Class_ComonadAsk__dollar__Dict'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_ComonadAsk__dollar__Dict')))((object)["ask" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return (($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst')))($x);
} else {
throw new \Exception("Pattern match failure");
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
$GLOBALS['Control_Comonad_Env_Class_comonadAskEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_comonadAskEnvT';

// Control_Comonad_Env_Class_comonadEnvEnvT
function Control_Comonad_Env_Class_comonadEnvEnvT($dictComonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_comonadEnvEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$comonadAskEnvT1 = (($GLOBALS['Control_Comonad_Env_Class_comonadAskEnvT'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_comonadAskEnvT')))($dictComonad);
    $__res = (($GLOBALS['Control_Comonad_Env_Class_ComonadEnv__dollar__Dict'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_ComonadEnv__dollar__Dict')))((object)["local" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
$__case_0 = $x;
$__case_res_0 = null;
switch (($__case_0)->tag) {
case "Tuple":
$y = ($__case_0)->v0;
$z = ($__case_0)->v1;
$__case_res_0 = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($f1)($y), $z);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
return (($GLOBALS['Control_Comonad_Env_Trans_EnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_EnvT')))($__case_res_0);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ComonadAsk0" => (function() use ($comonadAskEnvT1) {
  $__fn = function($__dollar____unused) use ($comonadAskEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $comonadAskEnvT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Class_comonadEnvEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_comonadEnvEnvT';

// Control_Comonad_Env_Class_ask
function Control_Comonad_Env_Class_ask($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_ask';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->ask;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Class_ask'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_ask';

// Control_Comonad_Env_Class_asks
function Control_Comonad_Env_Class_asks($dictComonadAsk) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_asks';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$ask1 = (($GLOBALS['Control_Comonad_Env_Class_ask'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_ask')))($dictComonadAsk);
    $__res = (function() use ($ask1) {
  $__fn = function($f, $x = null) use ($ask1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, &$__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($f)(($ask1)($x));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Class_asks'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_asks';

// Control_Comonad_Env_Class_comonadAskStoreT
function Control_Comonad_Env_Class_comonadAskStoreT($dictComonadAsk) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_comonadAskStoreT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Comonad0 = (($dictComonadAsk)->Comonad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$comonadStoreT = (($GLOBALS['Control_Comonad_Store_Trans_comonadStoreT'] ?? \Control\Comonad\Store\Trans\phpurs_eval_thunk('Control_Comonad_Store_Trans_comonadStoreT')))($Comonad0);
    $__res = (($GLOBALS['Control_Comonad_Env_Class_ComonadAsk__dollar__Dict'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_ComonadAsk__dollar__Dict')))((object)["ask" => (($GLOBALS['Control_Comonad_Env_Class_compose'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_compose')))((($GLOBALS['Control_Comonad_Env_Class_ask'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_ask')))($dictComonadAsk), (($GLOBALS['Control_Comonad_Env_Class_lower'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_lower')))($Comonad0)), "Comonad0" => (function() use ($comonadStoreT) {
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
$GLOBALS['Control_Comonad_Env_Class_comonadAskStoreT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_comonadAskStoreT';

// Control_Comonad_Env_Class_comonadEnvStoreT
function Control_Comonad_Env_Class_comonadEnvStoreT($dictComonadEnv) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_comonadEnvStoreT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$local1 = (($GLOBALS['Control_Comonad_Env_Class_local'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_local')))($dictComonadEnv);
$comonadAskStoreT1 = (($GLOBALS['Control_Comonad_Env_Class_comonadAskStoreT'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_comonadAskStoreT')))((($dictComonadEnv)->ComonadAsk0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Comonad_Env_Class_ComonadEnv__dollar__Dict'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_ComonadEnv__dollar__Dict')))((object)["local" => (function() use ($local1) {
  $__body = function($f, $v) use ($local1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$w = ($__case_1)->v0;
$s = ($__case_1)->v1;
return (($GLOBALS['Control_Comonad_Store_Trans_StoreT'] ?? \Control\Comonad\Store\Trans\phpurs_eval_thunk('Control_Comonad_Store_Trans_StoreT')))((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($local1)($f1, $w), $s));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($local1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ComonadAsk0" => (function() use ($comonadAskStoreT1) {
  $__fn = function($__dollar____unused) use ($comonadAskStoreT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $comonadAskStoreT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Class_comonadEnvStoreT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_comonadEnvStoreT';

// Control_Comonad_Env_Class_comonadAskTracedT
function Control_Comonad_Env_Class_comonadAskTracedT($dictComonadAsk) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_comonadAskTracedT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$ask1 = (($GLOBALS['Control_Comonad_Env_Class_ask'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_ask')))($dictComonadAsk);
$Comonad0 = (($dictComonadAsk)->Comonad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$comonadTracedT = (($GLOBALS['Control_Comonad_Traced_Trans_comonadTracedT'] ?? \Control\Comonad\Traced\Trans\phpurs_eval_thunk('Control_Comonad_Traced_Trans_comonadTracedT')))($Comonad0);
    $__res = (function() use ($comonadTracedT, $ask1, &$Comonad0) {
  $__fn = function($dictMonoid) use ($comonadTracedT, $ask1, &$Comonad0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$comonadTracedT1 = ($comonadTracedT)($dictMonoid);
    $__res = (($GLOBALS['Control_Comonad_Env_Class_ComonadAsk__dollar__Dict'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_ComonadAsk__dollar__Dict')))((object)["ask" => (($GLOBALS['Control_Comonad_Env_Class_compose'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_compose')))($ask1, (($GLOBALS['Control_Comonad_Trans_Class_lower'] ?? \Control\Comonad\Trans\Class\phpurs_eval_thunk('Control_Comonad_Trans_Class_lower')))((($GLOBALS['Control_Comonad_Traced_Trans_comonadTransTracedT'] ?? \Control\Comonad\Traced\Trans\phpurs_eval_thunk('Control_Comonad_Traced_Trans_comonadTransTracedT')))($dictMonoid), $Comonad0)), "Comonad0" => (function() use ($comonadTracedT1) {
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
$GLOBALS['Control_Comonad_Env_Class_comonadAskTracedT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_comonadAskTracedT';

// Control_Comonad_Env_Class_comonadEnvTracedT
function Control_Comonad_Env_Class_comonadEnvTracedT($dictComonadEnv) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_comonadEnvTracedT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$local1 = (($GLOBALS['Control_Comonad_Env_Class_local'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_local')))($dictComonadEnv);
$comonadAskTracedT1 = (($GLOBALS['Control_Comonad_Env_Class_comonadAskTracedT'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_comonadAskTracedT')))((($dictComonadEnv)->ComonadAsk0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($comonadAskTracedT1, $local1) {
  $__fn = function($dictMonoid) use ($comonadAskTracedT1, $local1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$comonadAskTracedT2 = ($comonadAskTracedT1)($dictMonoid);
    $__res = (($GLOBALS['Control_Comonad_Env_Class_ComonadEnv__dollar__Dict'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_ComonadEnv__dollar__Dict')))((object)["local" => (function() use ($local1) {
  $__body = function($f, $v) use ($local1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$w = $__case_1;
return (($GLOBALS['Control_Comonad_Traced_Trans_TracedT'] ?? \Control\Comonad\Traced\Trans\phpurs_eval_thunk('Control_Comonad_Traced_Trans_TracedT')))(($local1)($f1, $w));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($local1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ComonadAsk0" => (function() use ($comonadAskTracedT2) {
  $__fn = function($__dollar____unused) use ($comonadAskTracedT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $comonadAskTracedT2;
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
$GLOBALS['Control_Comonad_Env_Class_comonadEnvTracedT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_comonadEnvTracedT';

