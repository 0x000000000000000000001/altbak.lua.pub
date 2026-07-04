<?php

namespace Control\Comonad\Traced\Trans;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Comonad.Traced.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
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
      case 'Control_Comonad_Traced_Trans_newtypeTracedT': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Comonad_Traced_Trans_TracedT
function Control_Comonad_Traced_Trans_TracedT($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Trans_TracedT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Traced_Trans_TracedT'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Trans_TracedT';

// Control_Comonad_Traced_Trans_runTracedT
function Control_Comonad_Traced_Trans_runTracedT($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Trans_runTracedT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$w = $__case_0;
return $w;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Traced_Trans_runTracedT'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Trans_runTracedT';


// Control_Comonad_Traced_Trans_functorTracedT
function Control_Comonad_Traced_Trans_functorTracedT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Trans_functorTracedT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$w = $__case_1;
return (($GLOBALS['Control_Comonad_Traced_Trans_TracedT'] ?? \Control\Comonad\Traced\Trans\phpurs_eval_thunk('Control_Comonad_Traced_Trans_TracedT')))(($map)((function() use ($f1) {
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
})(), $w));
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
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Traced_Trans_functorTracedT'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Trans_functorTracedT';

// Control_Comonad_Traced_Trans_extendTracedT
function Control_Comonad_Traced_Trans_extendTracedT($dictExtend) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Trans_extendTracedT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$extend = (($GLOBALS['Control_Extend_extend'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_extend')))($dictExtend);
$Functor0 = (($dictExtend)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($Functor0);
$functorTracedT1 = (($GLOBALS['Control_Comonad_Traced_Trans_functorTracedT'] ?? \Control\Comonad\Traced\Trans\phpurs_eval_thunk('Control_Comonad_Traced_Trans_functorTracedT')))($Functor0);
    $__res = (function() use ($extend, $map, $functorTracedT1) {
  $__fn = function($dictSemigroup) use ($extend, $map, $functorTracedT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))($dictSemigroup);
    $__res = (($GLOBALS['Control_Extend_Extend__dollar__Dict'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_Extend__dollar__Dict')))((object)["extend" => (function() use ($extend, $map, $append) {
  $__body = function($f, $v) use ($extend, $map, $append) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$w = $__case_1;
return (($GLOBALS['Control_Comonad_Traced_Trans_TracedT'] ?? \Control\Comonad\Traced\Trans\phpurs_eval_thunk('Control_Comonad_Traced_Trans_TracedT')))(($extend)((function() use ($f1, $map, $append) {
  $__fn = function($w__prime__, $t = null) use ($f1, $map, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($w__prime__, &$__fn) { return $__fn($w__prime__, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($f1)((($GLOBALS['Control_Comonad_Traced_Trans_TracedT'] ?? \Control\Comonad\Traced\Trans\phpurs_eval_thunk('Control_Comonad_Traced_Trans_TracedT')))(($map)((function() use ($append, $t) {
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
})(), $w__prime__)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $w));
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
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Traced_Trans_extendTracedT'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Trans_extendTracedT';

// Control_Comonad_Traced_Trans_comonadTransTracedT
function Control_Comonad_Traced_Trans_comonadTransTracedT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Trans_comonadTransTracedT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
    $__res = (($GLOBALS['Control_Comonad_Trans_Class_ComonadTrans__dollar__Dict'] ?? \Control\Comonad\Trans\Class\phpurs_eval_thunk('Control_Comonad_Trans_Class_ComonadTrans__dollar__Dict')))((object)["lower" => (function() use ($mempty) {
  $__fn = function($dictComonad) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictComonad)->Extend0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($map, $mempty) {
  $__body = function($v) use ($map, $mempty) {
    $__case_0 = $v;
    if (true) {
$w = $__case_0;
return ($map)((function() use ($mempty) {
  $__fn = function($f) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)($mempty);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $w);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $mempty, $__body, &$__fn) {
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
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Traced_Trans_comonadTransTracedT'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Trans_comonadTransTracedT';

// Control_Comonad_Traced_Trans_comonadTracedT
function Control_Comonad_Traced_Trans_comonadTracedT($dictComonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Trans_comonadTracedT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$extract = (($GLOBALS['Control_Comonad_extract'] ?? \Control\Comonad\phpurs_eval_thunk('Control_Comonad_extract')))($dictComonad);
$extendTracedT1 = (($GLOBALS['Control_Comonad_Traced_Trans_extendTracedT'] ?? \Control\Comonad\Traced\Trans\phpurs_eval_thunk('Control_Comonad_Traced_Trans_extendTracedT')))((($dictComonad)->Extend0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($extendTracedT1, $extract) {
  $__fn = function($dictMonoid) use ($extendTracedT1, $extract, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
$extendTracedT2 = ($extendTracedT1)((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Comonad_Comonad__dollar__Dict'] ?? \Control\Comonad\phpurs_eval_thunk('Control_Comonad_Comonad__dollar__Dict')))((object)["extract" => (function() use ($extract, $mempty) {
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
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Traced_Trans_comonadTracedT'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Trans_comonadTracedT';

