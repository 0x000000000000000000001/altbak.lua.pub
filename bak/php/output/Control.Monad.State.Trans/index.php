<?php

namespace Control\Monad\State\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
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
      case 'Control_Monad_State_Trans_newtypeStateT': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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
      case 'Control_Monad_State_Trans_monadTransStateT': $v = (($GLOBALS['Control_Monad_Trans_Class_MonadTrans__dollar__Dict'] ?? \Control\Monad\Trans\Class\phpurs_eval_thunk('Control_Monad_Trans_Class_MonadTrans__dollar__Dict')))((object)["lift" => (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($bind, $pure) {
  $__fn = function($m) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_State_Trans_StateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_StateT')))((function() use ($bind, $m, $pure) {
  $__fn = function($s) use ($bind, $m, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($m, (function() use ($pure, $s) {
  $__fn = function($x) use ($pure, $s, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($x, $s));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Control_Monad_State_Trans_lazyStateT': $v = (($GLOBALS['Control_Lazy_Lazy__dollar__Dict'] ?? \Control\Lazy\phpurs_eval_thunk('Control_Lazy_Lazy__dollar__Dict')))((object)["defer" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_State_Trans_StateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_StateT')))((function() use ($f) {
  $__body = function($s) use ($f) {
    $v = ($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')));
    $__case_0 = $v;
    if (true) {
$f__prime__ = $__case_0;
return ($f__prime__)($s);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($s) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($s);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
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


// Control_Monad_State_Trans_compose
function Control_Monad_State_Trans_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_compose';
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
$GLOBALS['Control_Monad_State_Trans_compose'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_compose';

// Control_Monad_State_Trans_StateT
function Control_Monad_State_Trans_StateT($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_StateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_StateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_StateT';

// Control_Monad_State_Trans_withStateT
function Control_Monad_State_Trans_withStateT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_withStateT';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$s = $__case_1;
return (($GLOBALS['Control_Monad_State_Trans_StateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_StateT')))((($GLOBALS['Control_Monad_State_Trans_compose'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_compose')))($s, $f1));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_withStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_withStateT';

// Control_Monad_State_Trans_runStateT
function Control_Monad_State_Trans_runStateT($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_runStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return $s;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_runStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_runStateT';



// Control_Monad_State_Trans_lift
function Control_Monad_State_Trans_lift($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_lift';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($bind, $pure) {
  $__fn = function($m) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_State_Trans_StateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_StateT')))((function() use ($bind, $m, $pure) {
  $__fn = function($s) use ($bind, $m, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($m, (function() use ($pure, $s) {
  $__fn = function($x) use ($pure, $s, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($x, $s));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_lift'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_lift';

// Control_Monad_State_Trans_mapStateT
function Control_Monad_State_Trans_mapStateT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_mapStateT';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (($GLOBALS['Control_Monad_State_Trans_StateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_StateT')))((($GLOBALS['Control_Monad_State_Trans_compose'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_compose')))($f1, $m));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_mapStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_mapStateT';


// Control_Monad_State_Trans_functorStateT
function Control_Monad_State_Trans_functorStateT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_functorStateT';
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
$a = $__case_1;
return (($GLOBALS['Control_Monad_State_Trans_StateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_StateT')))((function() use ($map, $f1, $a) {
  $__fn = function($s) use ($map, $f1, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Tuple":
$b = ($__case_0)->v0;
$s__prime__ = ($__case_0)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($f1)($b), $s__prime__);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($a)($s));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
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
$GLOBALS['Control_Monad_State_Trans_functorStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_functorStateT';

// Control_Monad_State_Trans_execStateT
function Control_Monad_State_Trans_execStateT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_execStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (function() use ($map) {
  $__body = function($v, $s) use ($map) {
    $__case_0 = $v;
    $__case_1 = $s;
    if (true) {
$m = $__case_0;
$s1 = $__case_1;
return ($map)(($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd')), ($m)($s1));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $s = null) use ($map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($v, &$__fn) { return $__fn($v, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $s);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_execStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_execStateT';

// Control_Monad_State_Trans_evalStateT
function Control_Monad_State_Trans_evalStateT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_evalStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (function() use ($map) {
  $__body = function($v, $s) use ($map) {
    $__case_0 = $v;
    $__case_1 = $s;
    if (true) {
$m = $__case_0;
$s1 = $__case_1;
return ($map)(($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst')), ($m)($s1));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $s = null) use ($map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($v, &$__fn) { return $__fn($v, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $s);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_evalStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_evalStateT';

// Control_Monad_State_Trans_monadStateT
function Control_Monad_State_Trans_monadStateT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
return (($GLOBALS['Control_Monad_Monad__dollar__Dict'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_Monad__dollar__Dict')))((object)["Applicative0" => (function() use ($dictMonad) {
  $__fn = function($__dollar____unused) use ($dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_State_Trans_applicativeStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_applicativeStateT')))($dictMonad);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($dictMonad) {
  $__fn = function($__dollar____unused) use ($dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_State_Trans_bindStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_bindStateT')))($dictMonad);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadStateT';

// Control_Monad_State_Trans_bindStateT
function Control_Monad_State_Trans_bindStateT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_bindStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
return (($GLOBALS['Control_Bind_Bind__dollar__Dict'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_Bind__dollar__Dict')))((object)["bind" => (function() use ($bind) {
  $__body = function($v, $f) use ($bind) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$x = $__case_0;
$f1 = $__case_1;
return (($GLOBALS['Control_Monad_State_Trans_StateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_StateT')))((function() use ($bind, $x, $f1) {
  $__fn = function($s) use ($bind, $x, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($x)($s), (function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Tuple":
$v2 = ($__case_0)->v0;
$s__prime__ = ($__case_0)->v1;
$v3 = ($f1)($v2);
$__case_0 = $v3;
if (true) {
$st = $__case_0;
return ($st)($s__prime__);
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dictMonad) {
  $__fn = function($__dollar____unused) use ($dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_State_Trans_applyStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_applyStateT')))($dictMonad);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_bindStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_bindStateT';

// Control_Monad_State_Trans_applyStateT
function Control_Monad_State_Trans_applyStateT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_applyStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$functorStateT1 = (($GLOBALS['Control_Monad_State_Trans_functorStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_functorStateT')))((((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
return (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => (($GLOBALS['Control_Monad_ap'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_ap')))((($GLOBALS['Control_Monad_State_Trans_monadStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadStateT')))($dictMonad)), "Functor0" => (function() use ($functorStateT1) {
  $__fn = function($__dollar____unused) use ($functorStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorStateT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_applyStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_applyStateT';

// Control_Monad_State_Trans_applicativeStateT
function Control_Monad_State_Trans_applicativeStateT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_applicativeStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
return (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => (function() use ($pure) {
  $__fn = function($a) use ($pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_State_Trans_StateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_StateT')))((function() use ($pure, $a) {
  $__fn = function($s) use ($pure, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a, $s));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dictMonad) {
  $__fn = function($__dollar____unused) use ($dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_State_Trans_applyStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_applyStateT')))($dictMonad);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_applicativeStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_applicativeStateT';

// Control_Monad_State_Trans_semigroupStateT
function Control_Monad_State_Trans_semigroupStateT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_semigroupStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$lift2 = (($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2')))((($GLOBALS['Control_Monad_State_Trans_applyStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_applyStateT')))($dictMonad));
    $__res = (function() use ($lift2) {
  $__fn = function($dictSemigroup) use ($lift2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => ($lift2)((($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))($dictSemigroup))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_semigroupStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_semigroupStateT';

// Control_Monad_State_Trans_monadAskStateT
function Control_Monad_State_Trans_monadAskStateT($dictMonadAsk) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadAskStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadAsk)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadStateT1 = (($GLOBALS['Control_Monad_State_Trans_monadStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadStateT')))($Monad0);
    $__res = (($GLOBALS['Control_Monad_Reader_Class_MonadAsk__dollar__Dict'] ?? \Control\Monad\Reader\Class\phpurs_eval_thunk('Control_Monad_Reader_Class_MonadAsk__dollar__Dict')))((object)["ask" => (($GLOBALS['Control_Monad_State_Trans_lift'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_lift')))($Monad0, (($GLOBALS['Control_Monad_Reader_Class_ask'] ?? \Control\Monad\Reader\Class\phpurs_eval_thunk('Control_Monad_Reader_Class_ask')))($dictMonadAsk)), "Monad0" => (function() use ($monadStateT1) {
  $__fn = function($__dollar____unused) use ($monadStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadStateT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadAskStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadAskStateT';

// Control_Monad_State_Trans_monadReaderStateT
function Control_Monad_State_Trans_monadReaderStateT($dictMonadReader) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadReaderStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$monadAskStateT1 = (($GLOBALS['Control_Monad_State_Trans_monadAskStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadAskStateT')))((($dictMonadReader)->MonadAsk0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Monad_Reader_Class_MonadReader__dollar__Dict'] ?? \Control\Monad\Reader\Class\phpurs_eval_thunk('Control_Monad_Reader_Class_MonadReader__dollar__Dict')))((object)["local" => (($GLOBALS['Control_Monad_State_Trans_compose'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_compose')))(($GLOBALS['Control_Monad_State_Trans_mapStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_mapStateT')), (($GLOBALS['Control_Monad_Reader_Class_local'] ?? \Control\Monad\Reader\Class\phpurs_eval_thunk('Control_Monad_Reader_Class_local')))($dictMonadReader)), "MonadAsk0" => (function() use ($monadAskStateT1) {
  $__fn = function($__dollar____unused) use ($monadAskStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadAskStateT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadReaderStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadReaderStateT';

// Control_Monad_State_Trans_monadContStateT
function Control_Monad_State_Trans_monadContStateT($dictMonadCont) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadContStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$callCC = (($GLOBALS['Control_Monad_Cont_Class_callCC'] ?? \Control\Monad\Cont\Class\phpurs_eval_thunk('Control_Monad_Cont_Class_callCC')))($dictMonadCont);
$monadStateT1 = (($GLOBALS['Control_Monad_State_Trans_monadStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadStateT')))((($dictMonadCont)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Monad_Cont_Class_MonadCont__dollar__Dict'] ?? \Control\Monad\Cont\Class\phpurs_eval_thunk('Control_Monad_Cont_Class_MonadCont__dollar__Dict')))((object)["callCC" => (function() use ($callCC) {
  $__fn = function($f) use ($callCC, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_State_Trans_StateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_StateT')))((function() use ($callCC, $f) {
  $__fn = function($s) use ($callCC, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($callCC)((function() use ($f, $s) {
  $__body = function($c) use ($f, $s) {
    $v = ($f)((function() use ($c) {
  $__fn = function($a) use ($c, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_State_Trans_StateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_StateT')))((function() use ($c, $a) {
  $__fn = function($s__prime__) use ($c, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($c)((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a, $s__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    $__case_0 = $v;
    if (true) {
$f__prime__ = $__case_0;
return ($f__prime__)($s);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($c) use ($f, $s, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($c);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadStateT1) {
  $__fn = function($__dollar____unused) use ($monadStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadStateT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadContStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadContStateT';

// Control_Monad_State_Trans_monadEffectState
function Control_Monad_State_Trans_monadEffectState($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadEffectState';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadEffect)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadStateT1 = (($GLOBALS['Control_Monad_State_Trans_monadStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadStateT')))($Monad0);
    $__res = (($GLOBALS['Effect_Class_MonadEffect__dollar__Dict'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_MonadEffect__dollar__Dict')))((object)["liftEffect" => (($GLOBALS['Control_Monad_State_Trans_compose'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_compose')))((($GLOBALS['Control_Monad_State_Trans_lift'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_lift')))($Monad0), (($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect)), "Monad0" => (function() use ($monadStateT1) {
  $__fn = function($__dollar____unused) use ($monadStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadStateT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadEffectState'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadEffectState';

// Control_Monad_State_Trans_monadRecStateT
function Control_Monad_State_Trans_monadRecStateT($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadRecStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((($Monad0)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($Monad0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$tailRecM = (($GLOBALS['Control_Monad_Rec_Class_tailRecM'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRecM')))($dictMonadRec);
$monadStateT1 = (($GLOBALS['Control_Monad_State_Trans_monadStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadStateT')))($Monad0);
    $__res = (($GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_MonadRec__dollar__Dict')))((object)["tailRecM" => (function() use ($bind, $pure, $tailRecM) {
  $__fn = function($f, $a = null) use ($bind, $pure, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$f__prime__ = (function() use ($f, $bind, $pure) {
  $__body = function($v) use ($f, $bind, $pure) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a__prime__ = ($__case_0)->v0;
$s = ($__case_0)->v1;
$v1 = ($f)($a__prime__);
$__case_0 = $v1;
if (true) {
$st = $__case_0;
return ($bind)(($st)($s), (function() use ($pure) {
  $__body = function($v2) use ($pure) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "Tuple":
$m = ($__case_0)->v0;
$s1 = ($__case_0)->v1;
$__case_0 = $m;
$__case_res_0 = null;
switch (($__case_0)->tag) {
case "Loop":
$x = ($__case_0)->v0;
$__case_res_0 = (($GLOBALS['Control_Monad_Rec_Class_Loop'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Loop')))((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($x, $s1));
break;
case "Done":
$y = ($__case_0)->v0;
$__case_res_0 = (($GLOBALS['Control_Monad_Rec_Class_Done'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Done')))((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($y, $s1));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
return ($pure)($__case_res_0);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v2) use ($pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (($GLOBALS['Control_Monad_State_Trans_StateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_StateT')))((function() use ($tailRecM, $f__prime__, $a) {
  $__fn = function($s) use ($tailRecM, $f__prime__, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($tailRecM)($f__prime__, (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a, $s));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadStateT1) {
  $__fn = function($__dollar____unused) use ($monadStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadStateT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadRecStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadRecStateT';

// Control_Monad_State_Trans_monadStateStateT
function Control_Monad_State_Trans_monadStateStateT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadStateStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$monadStateT1 = (($GLOBALS['Control_Monad_State_Trans_monadStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadStateT')))($dictMonad);
    $__res = (($GLOBALS['Control_Monad_State_Class_MonadState__dollar__Dict'] ?? \Control\Monad\State\Class\phpurs_eval_thunk('Control_Monad_State_Class_MonadState__dollar__Dict')))((object)["state" => (function() use ($pure) {
  $__fn = function($f) use ($pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_State_Trans_StateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_StateT')))((($GLOBALS['Control_Monad_State_Trans_compose'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_compose')))($pure, $f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadStateT1) {
  $__fn = function($__dollar____unused) use ($monadStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadStateT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadStateStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadStateStateT';

// Control_Monad_State_Trans_monadTellStateT
function Control_Monad_State_Trans_monadTellStateT($dictMonadTell) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadTellStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad1 = (($dictMonadTell)->Monad1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$Semigroup0 = (($dictMonadTell)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadStateT1 = (($GLOBALS['Control_Monad_State_Trans_monadStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadStateT')))($Monad1);
    $__res = (($GLOBALS['Control_Monad_Writer_Class_MonadTell__dollar__Dict'] ?? \Control\Monad\Writer\Class\phpurs_eval_thunk('Control_Monad_Writer_Class_MonadTell__dollar__Dict')))((object)["tell" => (($GLOBALS['Control_Monad_State_Trans_compose'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_compose')))((($GLOBALS['Control_Monad_State_Trans_lift'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_lift')))($Monad1), (($GLOBALS['Control_Monad_Writer_Class_tell'] ?? \Control\Monad\Writer\Class\phpurs_eval_thunk('Control_Monad_Writer_Class_tell')))($dictMonadTell)), "Semigroup0" => (function() use (&$Semigroup0) {
  $__fn = function($__dollar____unused) use (&$Semigroup0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $Semigroup0;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad1" => (function() use ($monadStateT1) {
  $__fn = function($__dollar____unused) use ($monadStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadStateT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadTellStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadTellStateT';

// Control_Monad_State_Trans_monadWriterStateT
function Control_Monad_State_Trans_monadWriterStateT($dictMonadWriter) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadWriterStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$MonadTell1 = (($dictMonadWriter)->MonadTell1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$Monad1 = (($MonadTell1)->Monad1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((($Monad1)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$listen = (($GLOBALS['Control_Monad_Writer_Class_listen'] ?? \Control\Monad\Writer\Class\phpurs_eval_thunk('Control_Monad_Writer_Class_listen')))($dictMonadWriter);
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($Monad1)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$pass = (($GLOBALS['Control_Monad_Writer_Class_pass'] ?? \Control\Monad\Writer\Class\phpurs_eval_thunk('Control_Monad_Writer_Class_pass')))($dictMonadWriter);
$Monoid0 = (($dictMonadWriter)->Monoid0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadTellStateT1 = (($GLOBALS['Control_Monad_State_Trans_monadTellStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadTellStateT')))($MonadTell1);
    $__res = (($GLOBALS['Control_Monad_Writer_Class_MonadWriter__dollar__Dict'] ?? \Control\Monad\Writer\Class\phpurs_eval_thunk('Control_Monad_Writer_Class_MonadWriter__dollar__Dict')))((object)["listen" => (function() use ($bind, $listen, $pure) {
  $__fn = function($m) use ($bind, $listen, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_State_Trans_StateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_StateT')))((function() use ($m, $bind, $listen, $pure) {
  $__body = function($s) use ($m, $bind, $listen, $pure) {
    $__case_0 = $m;
    if (true) {
$m__prime__ = $__case_0;
return ($bind)(($listen)(($m__prime__)($s)), (function() use ($pure) {
  $__body = function($v) use ($pure) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v0)->tag === "Tuple"))) {
$a = (($__case_0)->v0)->v0;
$s__prime__ = (($__case_0)->v0)->v1;
$w = ($__case_0)->v1;
return ($pure)((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a, $w), $s__prime__));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($s) use ($m, $bind, $listen, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($s);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "pass" => (function() use ($pass, $bind, $pure) {
  $__fn = function($m) use ($pass, $bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_State_Trans_StateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_StateT')))((function() use ($pass, $m, $bind, $pure) {
  $__fn = function($s) use ($pass, $m, $bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $m;
$__case_res_0 = null;
if (true) {
$m__prime__ = $__case_0;
$__case_res_0 = ($bind)(($m__prime__)($s), (function() use ($pure) {
  $__body = function($v) use ($pure) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v0)->tag === "Tuple"))) {
$a = (($__case_0)->v0)->v0;
$f = (($__case_0)->v0)->v1;
$s__prime__ = ($__case_0)->v1;
return ($pure)((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a, $s__prime__), $f));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($pass)($__case_res_0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monoid0" => (function() use (&$Monoid0) {
  $__fn = function($__dollar____unused) use (&$Monoid0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $Monoid0;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "MonadTell1" => (function() use ($monadTellStateT1) {
  $__fn = function($__dollar____unused) use ($monadTellStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadTellStateT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadWriterStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadWriterStateT';

// Control_Monad_State_Trans_monadThrowStateT
function Control_Monad_State_Trans_monadThrowStateT($dictMonadThrow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadThrowStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadThrow)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$lift1 = (($GLOBALS['Control_Monad_State_Trans_lift'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_lift')))($Monad0);
$throwError = (($GLOBALS['Control_Monad_Error_Class_throwError'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_throwError')))($dictMonadThrow);
$monadStateT1 = (($GLOBALS['Control_Monad_State_Trans_monadStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadStateT')))($Monad0);
    $__res = (($GLOBALS['Control_Monad_Error_Class_MonadThrow__dollar__Dict'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_MonadThrow__dollar__Dict')))((object)["throwError" => (function() use ($lift1, $throwError) {
  $__fn = function($e) use ($lift1, $throwError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($lift1)(($throwError)($e));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadStateT1) {
  $__fn = function($__dollar____unused) use ($monadStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadStateT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadThrowStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadThrowStateT';

// Control_Monad_State_Trans_monadErrorStateT
function Control_Monad_State_Trans_monadErrorStateT($dictMonadError) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadErrorStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$catchError = (($GLOBALS['Control_Monad_Error_Class_catchError'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_catchError')))($dictMonadError);
$monadThrowStateT1 = (($GLOBALS['Control_Monad_State_Trans_monadThrowStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadThrowStateT')))((($dictMonadError)->MonadThrow0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Monad_Error_Class_MonadError__dollar__Dict'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_MonadError__dollar__Dict')))((object)["catchError" => (function() use ($catchError) {
  $__body = function($v, $h) use ($catchError) {
    $__case_0 = $v;
    $__case_1 = $h;
    if (true) {
$m = $__case_0;
$h1 = $__case_1;
return (($GLOBALS['Control_Monad_State_Trans_StateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_StateT')))((function() use ($catchError, $m, $h1) {
  $__fn = function($s) use ($catchError, $m, $h1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($catchError)(($m)($s), (function() use ($h1, $s) {
  $__body = function($e) use ($h1, $s) {
    $v1 = ($h1)($e);
    $__case_0 = $v1;
    if (true) {
$f = $__case_0;
return ($f)($s);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($e) use ($h1, $s, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($e);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $h = null) use ($catchError, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($h) use ($v, &$__fn) { return $__fn($v, $h); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $h);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "MonadThrow0" => (function() use ($monadThrowStateT1) {
  $__fn = function($__dollar____unused) use ($monadThrowStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadThrowStateT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadErrorStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadErrorStateT';

// Control_Monad_State_Trans_monadSTStateT
function Control_Monad_State_Trans_monadSTStateT($dictMonadST) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadSTStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadST)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadStateT1 = (($GLOBALS['Control_Monad_State_Trans_monadStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadStateT')))($Monad0);
    $__res = (($GLOBALS['Control_Monad_ST_Class_MonadST__dollar__Dict'] ?? \Control\Monad\ST\Class\phpurs_eval_thunk('Control_Monad_ST_Class_MonadST__dollar__Dict')))((object)["liftST" => (($GLOBALS['Control_Monad_State_Trans_compose'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_compose')))((($GLOBALS['Control_Monad_State_Trans_lift'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_lift')))($Monad0), (($GLOBALS['Control_Monad_ST_Class_liftST'] ?? \Control\Monad\ST\Class\phpurs_eval_thunk('Control_Monad_ST_Class_liftST')))($dictMonadST)), "Monad0" => (function() use ($monadStateT1) {
  $__fn = function($__dollar____unused) use ($monadStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadStateT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadSTStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadSTStateT';

// Control_Monad_State_Trans_monoidStateT
function Control_Monad_State_Trans_monoidStateT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monoidStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($GLOBALS['Control_Monad_State_Trans_applicativeStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_applicativeStateT')))($dictMonad));
$semigroupStateT1 = (($GLOBALS['Control_Monad_State_Trans_semigroupStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_semigroupStateT')))($dictMonad);
    $__res = (function() use ($semigroupStateT1, $pure) {
  $__fn = function($dictMonoid) use ($semigroupStateT1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$semigroupStateT2 = ($semigroupStateT1)((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => ($pure)((($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid)), "Semigroup0" => (function() use ($semigroupStateT2) {
  $__fn = function($__dollar____unused) use ($semigroupStateT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupStateT2;
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
$GLOBALS['Control_Monad_State_Trans_monoidStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monoidStateT';

// Control_Monad_State_Trans_altStateT
function Control_Monad_State_Trans_altStateT($dictMonad, $dictAlt = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_altStateT';
  if ($__num < 2) {
    if ($__num === 1) return function($dictAlt) use ($dictMonad, $__fn) { return $__fn($dictMonad, $dictAlt); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$alt = (($GLOBALS['Control_Alt_alt'] ?? \Control\Alt\phpurs_eval_thunk('Control_Alt_alt')))($dictAlt);
$functorStateT1 = (($GLOBALS['Control_Monad_State_Trans_functorStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_functorStateT')))((($dictAlt)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Alt_Alt__dollar__Dict'] ?? \Control\Alt\phpurs_eval_thunk('Control_Alt_Alt__dollar__Dict')))((object)["alt" => (function() use ($alt) {
  $__body = function($v, $v1) use ($alt) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return (($GLOBALS['Control_Monad_State_Trans_StateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_StateT')))((function() use ($alt, $x, $y) {
  $__fn = function($s) use ($alt, $x, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($alt)(($x)($s), ($y)($s));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($alt, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorStateT1) {
  $__fn = function($__dollar____unused) use ($functorStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorStateT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_altStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_altStateT';

// Control_Monad_State_Trans_plusStateT
function Control_Monad_State_Trans_plusStateT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_plusStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$altStateT1 = (($GLOBALS['Control_Monad_State_Trans_altStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_altStateT')))($dictMonad);
    $__res = (function() use ($altStateT1) {
  $__fn = function($dictPlus) use ($altStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$empty = (($GLOBALS['Control_Plus_empty'] ?? \Control\Plus\phpurs_eval_thunk('Control_Plus_empty')))($dictPlus);
$altStateT2 = ($altStateT1)((($dictPlus)->Alt0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Plus_Plus__dollar__Dict'] ?? \Control\Plus\phpurs_eval_thunk('Control_Plus_Plus__dollar__Dict')))((object)["empty" => (($GLOBALS['Control_Monad_State_Trans_StateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_StateT')))((function() use ($empty) {
  $__fn = function($v) use ($empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $empty;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "Alt0" => (function() use ($altStateT2) {
  $__fn = function($__dollar____unused) use ($altStateT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $altStateT2;
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
$GLOBALS['Control_Monad_State_Trans_plusStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_plusStateT';

// Control_Monad_State_Trans_alternativeStateT
function Control_Monad_State_Trans_alternativeStateT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_alternativeStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeStateT1 = (($GLOBALS['Control_Monad_State_Trans_applicativeStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_applicativeStateT')))($dictMonad);
$plusStateT1 = (($GLOBALS['Control_Monad_State_Trans_plusStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_plusStateT')))($dictMonad);
    $__res = (function() use ($plusStateT1, $applicativeStateT1) {
  $__fn = function($dictAlternative) use ($plusStateT1, $applicativeStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$plusStateT2 = ($plusStateT1)((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Alternative_Alternative__dollar__Dict'] ?? \Control\Alternative\phpurs_eval_thunk('Control_Alternative_Alternative__dollar__Dict')))((object)["Applicative0" => (function() use ($applicativeStateT1) {
  $__fn = function($__dollar____unused) use ($applicativeStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeStateT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusStateT2) {
  $__fn = function($__dollar____unused) use ($plusStateT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $plusStateT2;
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
$GLOBALS['Control_Monad_State_Trans_alternativeStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_alternativeStateT';

// Control_Monad_State_Trans_monadPlusStateT
function Control_Monad_State_Trans_monadPlusStateT($dictMonadPlus) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadPlusStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadPlus)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadStateT1 = (($GLOBALS['Control_Monad_State_Trans_monadStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadStateT')))($Monad0);
$alternativeStateT1 = (($GLOBALS['Control_Monad_State_Trans_alternativeStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_alternativeStateT')))($Monad0, (($dictMonadPlus)->Alternative1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_MonadPlus_MonadPlus__dollar__Dict'] ?? \Control\MonadPlus\phpurs_eval_thunk('Control_MonadPlus_MonadPlus__dollar__Dict')))((object)["Monad0" => (function() use ($monadStateT1) {
  $__fn = function($__dollar____unused) use ($monadStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadStateT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() use ($alternativeStateT1) {
  $__fn = function($__dollar____unused) use ($alternativeStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $alternativeStateT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadPlusStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadPlusStateT';

