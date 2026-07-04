<?php

namespace Control\Comonad\Traced\Class;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Comonad.Env/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Store/index.php';
require_once __DIR__ . '/../Control.Comonad.Store.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Traced.Class/index.php';
require_once __DIR__ . '/../Control.Comonad.Traced.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Identity.Trans/index.php';
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
      case 'Control_Comonad_Traced_Class_composeFlipped': $v = (($GLOBALS['Control_Semigroupoid_composeFlipped'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeFlipped')))(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Control_Comonad_Traced_Class_lowerTrack1': $v = (($GLOBALS['Control_Comonad_Traced_Class_lowerTrack'] ?? \Control\Comonad\Traced\Class\phpurs_eval_thunk('Control_Comonad_Traced_Class_lowerTrack')))(($GLOBALS['Control_Comonad_Store_Trans_comonadTransStoreT'] ?? \Control\Comonad\Store\Trans\phpurs_eval_thunk('Control_Comonad_Store_Trans_comonadTransStoreT'))); break;
      case 'Control_Comonad_Traced_Class_lowerTrack2': $v = (($GLOBALS['Control_Comonad_Traced_Class_lowerTrack'] ?? \Control\Comonad\Traced\Class\phpurs_eval_thunk('Control_Comonad_Traced_Class_lowerTrack')))(($GLOBALS['Control_Comonad_Trans_Class_comonadTransIdentityT'] ?? \Control\Comonad\Trans\Class\phpurs_eval_thunk('Control_Comonad_Trans_Class_comonadTransIdentityT'))); break;
      case 'Control_Comonad_Traced_Class_lowerTrack3': $v = (($GLOBALS['Control_Comonad_Traced_Class_lowerTrack'] ?? \Control\Comonad\Traced\Class\phpurs_eval_thunk('Control_Comonad_Traced_Class_lowerTrack')))(($GLOBALS['Control_Comonad_Env_Trans_comonadTransEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_comonadTransEnvT'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Comonad_Traced_Class_compose
function Control_Comonad_Traced_Class_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_compose';
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
$GLOBALS['Control_Comonad_Traced_Class_compose'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_compose';


// Control_Comonad_Traced_Class_ComonadTraced$Dict
function Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict';

// Control_Comonad_Traced_Class_track
function Control_Comonad_Traced_Class_track($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_track';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->track;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Traced_Class_track'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_track';

// Control_Comonad_Traced_Class_tracks
function Control_Comonad_Traced_Class_tracks($dictComonadTraced) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_tracks';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$track1 = (($GLOBALS['Control_Comonad_Traced_Class_track'] ?? \Control\Comonad\Traced\Class\phpurs_eval_thunk('Control_Comonad_Traced_Class_track')))($dictComonadTraced);
$extract = (($GLOBALS['Control_Comonad_extract'] ?? \Control\Comonad\phpurs_eval_thunk('Control_Comonad_extract')))((($dictComonadTraced)->Comonad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($track1, $extract) {
  $__fn = function($f, $w = null) use ($track1, $extract, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($w) use ($f, &$__fn) { return $__fn($f, $w); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($track1)(($f)(($extract)($w)), $w);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Traced_Class_tracks'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_tracks';

// Control_Comonad_Traced_Class_lowerTrack
function Control_Comonad_Traced_Class_lowerTrack($dictComonadTrans) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_lowerTrack';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$lower = (($GLOBALS['Control_Comonad_Trans_Class_lower'] ?? \Control\Comonad\Trans\Class\phpurs_eval_thunk('Control_Comonad_Trans_Class_lower')))($dictComonadTrans);
    $__res = (function() use ($lower) {
  $__fn = function($dictComonadTraced) use ($lower, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$track1 = (($GLOBALS['Control_Comonad_Traced_Class_track'] ?? \Control\Comonad\Traced\Class\phpurs_eval_thunk('Control_Comonad_Traced_Class_track')))($dictComonadTraced);
$lower1 = ($lower)((($dictComonadTraced)->Comonad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($track1, $lower1) {
  $__fn = function($m) use ($track1, $lower1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Comonad_Traced_Class_compose'] ?? \Control\Comonad\Traced\Class\phpurs_eval_thunk('Control_Comonad_Traced_Class_compose')))(($track1)($m), $lower1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Traced_Class_lowerTrack'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_lowerTrack';




// Control_Comonad_Traced_Class_listens
function Control_Comonad_Traced_Class_listens($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_listens';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$tr = $__case_1;
return (($GLOBALS['Control_Comonad_Traced_Trans_TracedT'] ?? \Control\Comonad\Traced\Trans\phpurs_eval_thunk('Control_Comonad_Traced_Trans_TracedT')))(($map)((function() use ($f1) {
  $__fn = function($g, $t = null) use ($f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($g, &$__fn) { return $__fn($g, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($g)($t), ($f1)($t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $tr));
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
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Traced_Class_listens'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_listens';

// Control_Comonad_Traced_Class_listen
function Control_Comonad_Traced_Class_listen($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_listen';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (function() use ($map) {
  $__body = function($v) use ($map) {
    $__case_0 = $v;
    if (true) {
$tr = $__case_0;
return (($GLOBALS['Control_Comonad_Traced_Trans_TracedT'] ?? \Control\Comonad\Traced\Trans\phpurs_eval_thunk('Control_Comonad_Traced_Trans_TracedT')))(($map)((function() {
  $__fn = function($f, $t = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($f, &$__fn) { return $__fn($f, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($f)($t), $t);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $tr));
} else {
throw new \Exception("Pattern match failure");
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
$GLOBALS['Control_Comonad_Traced_Class_listen'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_listen';

// Control_Comonad_Traced_Class_comonadTracedTracedT
function Control_Comonad_Traced_Class_comonadTracedTracedT($dictComonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_comonadTracedTracedT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$extract = (($GLOBALS['Control_Comonad_extract'] ?? \Control\Comonad\phpurs_eval_thunk('Control_Comonad_extract')))($dictComonad);
$comonadTracedT = (($GLOBALS['Control_Comonad_Traced_Trans_comonadTracedT'] ?? \Control\Comonad\Traced\Trans\phpurs_eval_thunk('Control_Comonad_Traced_Trans_comonadTracedT')))($dictComonad);
    $__res = (function() use ($comonadTracedT, $extract) {
  $__fn = function($dictMonoid) use ($comonadTracedT, $extract, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$comonadTracedT1 = ($comonadTracedT)($dictMonoid);
    $__res = (($GLOBALS['Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict'] ?? \Control\Comonad\Traced\Class\phpurs_eval_thunk('Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict')))((object)["track" => (function() use ($extract) {
  $__body = function($t, $v) use ($extract) {
    $__case_0 = $t;
    $__case_1 = $v;
    if (true) {
$t1 = $__case_0;
$tr = $__case_1;
return ($extract)($tr, $t1);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($t, $v = null) use ($extract, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($t, &$__fn) { return $__fn($t, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($t, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
$GLOBALS['Control_Comonad_Traced_Class_comonadTracedTracedT'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_comonadTracedTracedT';

// Control_Comonad_Traced_Class_comonadTracedStoreT
function Control_Comonad_Traced_Class_comonadTracedStoreT($dictComonadTraced) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_comonadTracedStoreT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$comonadStoreT = (($GLOBALS['Control_Comonad_Store_Trans_comonadStoreT'] ?? \Control\Comonad\Store\Trans\phpurs_eval_thunk('Control_Comonad_Store_Trans_comonadStoreT')))((($dictComonadTraced)->Comonad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict'] ?? \Control\Comonad\Traced\Class\phpurs_eval_thunk('Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict')))((object)["track" => (($GLOBALS['Control_Comonad_Traced_Class_lowerTrack1'] ?? \Control\Comonad\Traced\Class\phpurs_eval_thunk('Control_Comonad_Traced_Class_lowerTrack1')))($dictComonadTraced), "Comonad0" => (function() use ($comonadStoreT) {
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
$GLOBALS['Control_Comonad_Traced_Class_comonadTracedStoreT'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_comonadTracedStoreT';

// Control_Comonad_Traced_Class_comonadTracedIdentityT
function Control_Comonad_Traced_Class_comonadTracedIdentityT($dictComonadTraced) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_comonadTracedIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$comonadIdentityT = (($GLOBALS['Control_Monad_Identity_Trans_comonadIdentityT'] ?? \Control\Monad\Identity\Trans\phpurs_eval_thunk('Control_Monad_Identity_Trans_comonadIdentityT')))((($dictComonadTraced)->Comonad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict'] ?? \Control\Comonad\Traced\Class\phpurs_eval_thunk('Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict')))((object)["track" => (($GLOBALS['Control_Comonad_Traced_Class_lowerTrack2'] ?? \Control\Comonad\Traced\Class\phpurs_eval_thunk('Control_Comonad_Traced_Class_lowerTrack2')))($dictComonadTraced), "Comonad0" => (function() use ($comonadIdentityT) {
  $__fn = function($__dollar____unused) use ($comonadIdentityT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $comonadIdentityT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Traced_Class_comonadTracedIdentityT'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_comonadTracedIdentityT';

// Control_Comonad_Traced_Class_comonadTracedEnvT
function Control_Comonad_Traced_Class_comonadTracedEnvT($dictComonadTraced) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_comonadTracedEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$comonadEnvT = (($GLOBALS['Control_Comonad_Env_Trans_comonadEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_comonadEnvT')))((($dictComonadTraced)->Comonad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict'] ?? \Control\Comonad\Traced\Class\phpurs_eval_thunk('Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict')))((object)["track" => (($GLOBALS['Control_Comonad_Traced_Class_lowerTrack3'] ?? \Control\Comonad\Traced\Class\phpurs_eval_thunk('Control_Comonad_Traced_Class_lowerTrack3')))($dictComonadTraced), "Comonad0" => (function() use ($comonadEnvT) {
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
$GLOBALS['Control_Comonad_Traced_Class_comonadTracedEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_comonadTracedEnvT';

// Control_Comonad_Traced_Class_censor
function Control_Comonad_Traced_Class_censor($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_censor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$tr = $__case_1;
return (($GLOBALS['Control_Comonad_Traced_Trans_TracedT'] ?? \Control\Comonad\Traced\Trans\phpurs_eval_thunk('Control_Comonad_Traced_Trans_TracedT')))(($map)((function() use ($f1) {
  $__fn = function($v1) use ($f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Comonad_Traced_Class_composeFlipped'] ?? \Control\Comonad\Traced\Class\phpurs_eval_thunk('Control_Comonad_Traced_Class_composeFlipped')))($f1, $v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $tr));
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
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Traced_Class_censor'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_censor';

