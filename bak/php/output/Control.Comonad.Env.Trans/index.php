<?php

namespace Control\Comonad\Env\Trans;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
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
      case 'Control_Comonad_Env_Trans_map': $v = (($GLOBALS['Control_Semigroupoid_compose'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_compose')))(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Control_Comonad_Env_Trans_composeFlipped': $v = (($GLOBALS['Control_Semigroupoid_composeFlipped'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeFlipped')))(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Control_Comonad_Env_Trans_newtypeEnvT': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Control_Comonad_Env_Trans_comonadTransEnvT': $v = (($GLOBALS['Control_Comonad_Trans_Class_ComonadTrans__dollar__Dict'] ?? \Control\Comonad\Trans\Class\phpurs_eval_thunk('Control_Comonad_Trans_Class_ComonadTrans__dollar__Dict')))((object)["lower" => (function() {
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
  $__fn = function($dictComonad, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($dictComonad, &$__fn) { return $__fn($dictComonad, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($dictComonad, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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




// Control_Comonad_Env_Trans_EnvT
function Control_Comonad_Env_Trans_EnvT($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_EnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_EnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_EnvT';

// Control_Comonad_Env_Trans_withEnvT
function Control_Comonad_Env_Trans_withEnvT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_withEnvT';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$e = ($__case_1)->v0;
$x = ($__case_1)->v1;
return (($GLOBALS['Control_Comonad_Env_Trans_EnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_EnvT')))((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($f1)($e), $x));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_withEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_withEnvT';

// Control_Comonad_Env_Trans_runEnvT
function Control_Comonad_Env_Trans_runEnvT($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_runEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return $x;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_runEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_runEnvT';


// Control_Comonad_Env_Trans_mapEnvT
function Control_Comonad_Env_Trans_mapEnvT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_mapEnvT';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$e = ($__case_1)->v0;
$x = ($__case_1)->v1;
return (($GLOBALS['Control_Comonad_Env_Trans_EnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_EnvT')))((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($e, ($f1)($x)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_mapEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_mapEnvT';

// Control_Comonad_Env_Trans_functorEnvT
function Control_Comonad_Env_Trans_functorEnvT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_functorEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() use ($map1) {
  $__body = function($f, $v) use ($map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$e = ($__case_1)->v0;
$x = ($__case_1)->v1;
return (($GLOBALS['Control_Comonad_Env_Trans_EnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_EnvT')))((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($e, ($map1)($f1, $x)));
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
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_functorEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_functorEnvT';

// Control_Comonad_Env_Trans_functorWithIndexEnvT
function Control_Comonad_Env_Trans_functorWithIndexEnvT($dictFunctorWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_functorWithIndexEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mapWithIndex = (($GLOBALS['Data_FunctorWithIndex_mapWithIndex'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_mapWithIndex')))($dictFunctorWithIndex);
$functorEnvT1 = (($GLOBALS['Control_Comonad_Env_Trans_functorEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_functorEnvT')))((($dictFunctorWithIndex)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() use ($mapWithIndex) {
  $__body = function($f, $v) use ($mapWithIndex) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$e = ($__case_1)->v0;
$x = ($__case_1)->v1;
return (($GLOBALS['Control_Comonad_Env_Trans_EnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_EnvT')))((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($e, ($mapWithIndex)($f1, $x)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($mapWithIndex, $__body, &$__fn) {
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
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_functorWithIndexEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_functorWithIndexEnvT';

// Control_Comonad_Env_Trans_foldableEnvT
function Control_Comonad_Env_Trans_foldableEnvT($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_foldableEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldl = (($GLOBALS['Data_Foldable_foldl'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl')))($dictFoldable);
$foldr = (($GLOBALS['Data_Foldable_foldr'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldr')))($dictFoldable);
$foldMap = (($GLOBALS['Data_Foldable_foldMap'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldMap')))($dictFoldable);
    $__res = (($GLOBALS['Data_Foldable_Foldable__dollar__Dict'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_Foldable__dollar__Dict')))((object)["foldl" => (function() use ($foldl) {
  $__body = function($fn, $a, $v) use ($foldl) {
    $__case_0 = $fn;
    $__case_1 = $a;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$fn1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->v1;
return ($foldl)($fn1, $a1, $x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($fn, $a = null, $v = null) use ($foldl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($fn, $a, &$__fn) { return $__fn($fn, $a, $v); };
    if ($__num === 1) return function($a, $v = null) use ($fn, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($fn, $a, $v);
      if ($__num2 === 1) return function($v) use ($fn, $a, &$__fn) { return $__fn($fn, $a, $v); };
      return phpurs_curry_fallback($__fn, [$fn], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($fn, $a, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldr" => (function() use ($foldr) {
  $__body = function($fn, $a, $v) use ($foldr) {
    $__case_0 = $fn;
    $__case_1 = $a;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$fn1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->v1;
return ($foldr)($fn1, $a1, $x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($fn, $a = null, $v = null) use ($foldr, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($fn, $a, &$__fn) { return $__fn($fn, $a, $v); };
    if ($__num === 1) return function($a, $v = null) use ($fn, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($fn, $a, $v);
      if ($__num2 === 1) return function($v) use ($fn, $a, &$__fn) { return $__fn($fn, $a, $v); };
      return phpurs_curry_fallback($__fn, [$fn], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($fn, $a, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap) {
  $__fn = function($dictMonoid) use ($foldMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap1 = ($foldMap)($dictMonoid);
    $__res = (function() use ($foldMap1) {
  $__body = function($fn, $v) use ($foldMap1) {
    $__case_0 = $fn;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$fn1 = $__case_0;
$x = ($__case_1)->v1;
return ($foldMap1)($fn1, $x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($fn, $v = null) use ($foldMap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($fn, &$__fn) { return $__fn($fn, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($fn, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_foldableEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_foldableEnvT';

// Control_Comonad_Env_Trans_foldableWithIndexEnvT
function Control_Comonad_Env_Trans_foldableWithIndexEnvT($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_foldableWithIndexEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldlWithIndex = (($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldlWithIndex')))($dictFoldableWithIndex);
$foldrWithIndex = (($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldrWithIndex')))($dictFoldableWithIndex);
$foldMapWithIndex = (($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMapWithIndex')))($dictFoldableWithIndex);
$foldableEnvT1 = (($GLOBALS['Control_Comonad_Env_Trans_foldableEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_foldableEnvT')))((($dictFoldableWithIndex)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldlWithIndex" => (function() use ($foldlWithIndex) {
  $__body = function($f, $a, $v) use ($foldlWithIndex) {
    $__case_0 = $f;
    $__case_1 = $a;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->v1;
return ($foldlWithIndex)($f1, $a1, $x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $a = null, $v = null) use ($foldlWithIndex, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $a, &$__fn) { return $__fn($f, $a, $v); };
    if ($__num === 1) return function($a, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $v);
      if ($__num2 === 1) return function($v) use ($f, $a, &$__fn) { return $__fn($f, $a, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $a, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldrWithIndex" => (function() use ($foldrWithIndex) {
  $__body = function($f, $a, $v) use ($foldrWithIndex) {
    $__case_0 = $f;
    $__case_1 = $a;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->v1;
return ($foldrWithIndex)($f1, $a1, $x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $a = null, $v = null) use ($foldrWithIndex, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $a, &$__fn) { return $__fn($f, $a, $v); };
    if ($__num === 1) return function($a, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $v);
      if ($__num2 === 1) return function($v) use ($f, $a, &$__fn) { return $__fn($f, $a, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $a, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($foldMapWithIndex) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex1 = ($foldMapWithIndex)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex1) {
  $__body = function($f, $v) use ($foldMapWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$x = ($__case_1)->v1;
return ($foldMapWithIndex1)($f1, $x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($foldMapWithIndex1, $__body, &$__fn) {
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() use ($foldableEnvT1) {
  $__fn = function($__dollar____unused) use ($foldableEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableEnvT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_foldableWithIndexEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_foldableWithIndexEnvT';

// Control_Comonad_Env_Trans_traversableEnvT
function Control_Comonad_Env_Trans_traversableEnvT($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_traversableEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sequence = (($GLOBALS['Data_Traversable_sequence'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_sequence')))($dictTraversable);
$traverse = (($GLOBALS['Data_Traversable_traverse'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traverse')))($dictTraversable);
$functorEnvT1 = (($GLOBALS['Control_Comonad_Env_Trans_functorEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_functorEnvT')))((($dictTraversable)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$foldableEnvT1 = (($GLOBALS['Control_Comonad_Env_Trans_foldableEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_foldableEnvT')))((($dictTraversable)->Foldable1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Traversable_Traversable__dollar__Dict'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_Traversable__dollar__Dict')))((object)["sequence" => (function() use ($sequence) {
  $__fn = function($dictApplicative) use ($sequence, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$sequence1 = ($sequence)($dictApplicative);
    $__res = (function() use ($map1, $sequence1) {
  $__body = function($v) use ($map1, $sequence1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$x = ($__case_0)->v1;
return ($map1)((($GLOBALS['Control_Comonad_Env_Trans_map'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_map')))(($GLOBALS['Control_Comonad_Env_Trans_EnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_EnvT')), (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a)), ($sequence1)($x));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($map1, $sequence1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "traverse" => (function() use ($traverse) {
  $__fn = function($dictApplicative) use ($traverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traverse1 = ($traverse)($dictApplicative);
    $__res = (function() use ($map1, $traverse1) {
  $__body = function($f, $v) use ($map1, $traverse1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$x = ($__case_1)->v1;
return ($map1)((($GLOBALS['Control_Comonad_Env_Trans_map'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_map')))(($GLOBALS['Control_Comonad_Env_Trans_EnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_EnvT')), (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a)), ($traverse1)($f1, $x));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($map1, $traverse1, $__body, &$__fn) {
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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
})(), "Foldable1" => (function() use ($foldableEnvT1) {
  $__fn = function($__dollar____unused) use ($foldableEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableEnvT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_traversableEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_traversableEnvT';

// Control_Comonad_Env_Trans_traversableWithIndexEnvT
function Control_Comonad_Env_Trans_traversableWithIndexEnvT($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_traversableWithIndexEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverseWithIndex = (($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverseWithIndex')))($dictTraversableWithIndex);
$functorWithIndexEnvT1 = (($GLOBALS['Control_Comonad_Env_Trans_functorWithIndexEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_functorWithIndexEnvT')))((($dictTraversableWithIndex)->FunctorWithIndex0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$foldableWithIndexEnvT1 = (($GLOBALS['Control_Comonad_Env_Trans_foldableWithIndexEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_foldableWithIndexEnvT')))((($dictTraversableWithIndex)->FoldableWithIndex1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traversableEnvT1 = (($GLOBALS['Control_Comonad_Env_Trans_traversableEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_traversableEnvT')))((($dictTraversableWithIndex)->Traversable2)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() use ($traverseWithIndex) {
  $__fn = function($dictApplicative) use ($traverseWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traverseWithIndex1 = ($traverseWithIndex)($dictApplicative);
    $__res = (function() use ($map1, $traverseWithIndex1) {
  $__body = function($f, $v) use ($map1, $traverseWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$e = ($__case_1)->v0;
$x = ($__case_1)->v1;
return ($map1)((($GLOBALS['Control_Comonad_Env_Trans_map'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_map')))(($GLOBALS['Control_Comonad_Env_Trans_EnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_EnvT')), (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($e)), ($traverseWithIndex1)($f1, $x));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($map1, $traverseWithIndex1, $__body, &$__fn) {
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() use ($functorWithIndexEnvT1) {
  $__fn = function($__dollar____unused) use ($functorWithIndexEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorWithIndexEnvT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use ($foldableWithIndexEnvT1) {
  $__fn = function($__dollar____unused) use ($foldableWithIndexEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableWithIndexEnvT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use ($traversableEnvT1) {
  $__fn = function($__dollar____unused) use ($traversableEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $traversableEnvT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_traversableWithIndexEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_traversableWithIndexEnvT';

// Control_Comonad_Env_Trans_extendEnvT
function Control_Comonad_Env_Trans_extendEnvT($dictExtend) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_extendEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Functor0 = (($dictExtend)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($Functor0);
$extend = (($GLOBALS['Control_Extend_extend'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_extend')))($dictExtend);
$functorEnvT1 = (($GLOBALS['Control_Comonad_Env_Trans_functorEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_functorEnvT')))($Functor0);
    $__res = (($GLOBALS['Control_Extend_Extend__dollar__Dict'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_Extend__dollar__Dict')))((object)["extend" => (function() use ($map1, $extend) {
  $__body = function($f, $v) use ($map1, $extend) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$e = ($__case_1)->v0;
$x = ($__case_1)->v1;
return (($GLOBALS['Control_Comonad_Env_Trans_EnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_EnvT')))((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($e, ($map1)($f1, ($extend)((($GLOBALS['Control_Comonad_Env_Trans_composeFlipped'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_composeFlipped')))((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($e), ($GLOBALS['Control_Comonad_Env_Trans_EnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_EnvT'))), $x))));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($map1, $extend, $__body, &$__fn) {
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
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_extendEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_extendEnvT';


// Control_Comonad_Env_Trans_comonadEnvT
function Control_Comonad_Env_Trans_comonadEnvT($dictComonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_comonadEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$extract = (($GLOBALS['Control_Comonad_extract'] ?? \Control\Comonad\phpurs_eval_thunk('Control_Comonad_extract')))($dictComonad);
$extendEnvT1 = (($GLOBALS['Control_Comonad_Env_Trans_extendEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_extendEnvT')))((($dictComonad)->Extend0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Comonad_Comonad__dollar__Dict'] ?? \Control\Comonad\phpurs_eval_thunk('Control_Comonad_Comonad__dollar__Dict')))((object)["extract" => (function() use ($extract) {
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
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_comonadEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_comonadEnvT';

