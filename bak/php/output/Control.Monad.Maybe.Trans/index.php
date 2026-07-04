<?php

namespace Control\Monad\Maybe\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Maybe.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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
      case 'Control_Monad_Maybe_Trans_newtypeMaybeT': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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
      case 'Control_Monad_Maybe_Trans_monadTransMaybeT': $v = (($GLOBALS['Control_Monad_Trans_Class_MonadTrans__dollar__Dict'] ?? \Control\Monad\Trans\Class\phpurs_eval_thunk('Control_Monad_Trans_Class_MonadTrans__dollar__Dict')))((object)["lift" => (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose')))(($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT')), (($GLOBALS['Control_Monad_liftM1'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_liftM1')))($dictMonad, ($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just'))));
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


// Control_Monad_Maybe_Trans_compose
function Control_Monad_Maybe_Trans_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_compose';
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
$GLOBALS['Control_Monad_Maybe_Trans_compose'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_compose';

// Control_Monad_Maybe_Trans_map
function Control_Monad_Maybe_Trans_map($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_map';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Just")) {
$fn = $__case_0;
$x = ($__case_1)->v0;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($fn)($x));
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
    $__res = $__body($v, $v1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_map'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_map';

// Control_Monad_Maybe_Trans_identity
function Control_Monad_Maybe_Trans_identity($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_identity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_identity'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_identity';

// Control_Monad_Maybe_Trans_MaybeT
function Control_Monad_Maybe_Trans_MaybeT($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_MaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_MaybeT';

// Control_Monad_Maybe_Trans_runMaybeT
function Control_Monad_Maybe_Trans_runMaybeT($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_runMaybeT';
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
$GLOBALS['Control_Monad_Maybe_Trans_runMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_runMaybeT';



// Control_Monad_Maybe_Trans_lift
function Control_Monad_Maybe_Trans_lift($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_lift';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose')))(($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT')), (($GLOBALS['Control_Monad_liftM1'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_liftM1')))($dictMonad, ($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just'))));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_lift'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_lift';

// Control_Monad_Maybe_Trans_mapMaybeT
function Control_Monad_Maybe_Trans_mapMaybeT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_mapMaybeT';
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
return (($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT')))(($f1)($m));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_mapMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_mapMaybeT';

// Control_Monad_Maybe_Trans_functorMaybeT
function Control_Monad_Maybe_Trans_functorMaybeT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_functorMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() use ($map1) {
  $__body = function($f, $v) use ($map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return (($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT')))(($map1)((($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map')))($f1), $ma));
} else {
throw new \Exception("Pattern match failure");
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
$GLOBALS['Control_Monad_Maybe_Trans_functorMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_functorMaybeT';

// Control_Monad_Maybe_Trans_monadMaybeT
function Control_Monad_Maybe_Trans_monadMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadMaybeT';
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
    $__res = (($GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_applicativeMaybeT')))($dictMonad);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($dictMonad) {
  $__fn = function($__dollar____unused) use ($dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Maybe_Trans_bindMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_bindMaybeT')))($dictMonad);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadMaybeT';

// Control_Monad_Maybe_Trans_bindMaybeT
function Control_Monad_Maybe_Trans_bindMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_bindMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
return (($GLOBALS['Control_Bind_Bind__dollar__Dict'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_Bind__dollar__Dict')))((object)["bind" => (function() use ($bind, $pure) {
  $__body = function($v, $f) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$x = $__case_0;
$f1 = $__case_1;
return (($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT')))(($bind)($x, (function() use ($pure, $f1) {
  $__body = function($v1) use ($pure, $f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
return ($pure)(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')));
break;
case "Just":
$y = ($__case_0)->v0;
$v2 = ($f1)($y);
$__case_0 = $v2;
if (true) {
$m = $__case_0;
return $m;
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure, $f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $pure, $__body, &$__fn) {
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
    $__res = (($GLOBALS['Control_Monad_Maybe_Trans_applyMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_applyMaybeT')))($dictMonad);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_bindMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_bindMaybeT';

// Control_Monad_Maybe_Trans_applyMaybeT
function Control_Monad_Maybe_Trans_applyMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_applyMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$functorMaybeT1 = (($GLOBALS['Control_Monad_Maybe_Trans_functorMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_functorMaybeT')))((((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
return (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => (($GLOBALS['Control_Monad_ap'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_ap')))((($GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadMaybeT')))($dictMonad)), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_applyMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_applyMaybeT';

// Control_Monad_Maybe_Trans_applicativeMaybeT
function Control_Monad_Maybe_Trans_applicativeMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_applicativeMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
return (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => (($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose')))(($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT')), (($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose')))((($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')))), ($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))), "Apply0" => (function() use ($dictMonad) {
  $__fn = function($__dollar____unused) use ($dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Maybe_Trans_applyMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_applyMaybeT')))($dictMonad);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_applicativeMaybeT';

// Control_Monad_Maybe_Trans_semigroupMaybeT
function Control_Monad_Maybe_Trans_semigroupMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_semigroupMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$lift2 = (($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2')))((($GLOBALS['Control_Monad_Maybe_Trans_applyMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_applyMaybeT')))($dictMonad));
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
$GLOBALS['Control_Monad_Maybe_Trans_semigroupMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_semigroupMaybeT';

// Control_Monad_Maybe_Trans_monadAskMaybeT
function Control_Monad_Maybe_Trans_monadAskMaybeT($dictMonadAsk) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadAskMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadAsk)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadMaybeT1 = (($GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadMaybeT')))($Monad0);
    $__res = (($GLOBALS['Control_Monad_Reader_Class_MonadAsk__dollar__Dict'] ?? \Control\Monad\Reader\Class\phpurs_eval_thunk('Control_Monad_Reader_Class_MonadAsk__dollar__Dict')))((object)["ask" => (($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift')))($Monad0, (($GLOBALS['Control_Monad_Reader_Class_ask'] ?? \Control\Monad\Reader\Class\phpurs_eval_thunk('Control_Monad_Reader_Class_ask')))($dictMonadAsk)), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadAskMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadAskMaybeT';

// Control_Monad_Maybe_Trans_monadReaderMaybeT
function Control_Monad_Maybe_Trans_monadReaderMaybeT($dictMonadReader) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadReaderMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$local = (($GLOBALS['Control_Monad_Reader_Class_local'] ?? \Control\Monad\Reader\Class\phpurs_eval_thunk('Control_Monad_Reader_Class_local')))($dictMonadReader);
$monadAskMaybeT1 = (($GLOBALS['Control_Monad_Maybe_Trans_monadAskMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadAskMaybeT')))((($dictMonadReader)->MonadAsk0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Monad_Reader_Class_MonadReader__dollar__Dict'] ?? \Control\Monad\Reader\Class\phpurs_eval_thunk('Control_Monad_Reader_Class_MonadReader__dollar__Dict')))((object)["local" => (function() use ($local) {
  $__fn = function($f) use ($local, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Maybe_Trans_mapMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_mapMaybeT')))(($local)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "MonadAsk0" => (function() use ($monadAskMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadAskMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadAskMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadReaderMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadReaderMaybeT';

// Control_Monad_Maybe_Trans_monadContMaybeT
function Control_Monad_Maybe_Trans_monadContMaybeT($dictMonadCont) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadContMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$callCC = (($GLOBALS['Control_Monad_Cont_Class_callCC'] ?? \Control\Monad\Cont\Class\phpurs_eval_thunk('Control_Monad_Cont_Class_callCC')))($dictMonadCont);
$monadMaybeT1 = (($GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadMaybeT')))((($dictMonadCont)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Monad_Cont_Class_MonadCont__dollar__Dict'] ?? \Control\Monad\Cont\Class\phpurs_eval_thunk('Control_Monad_Cont_Class_MonadCont__dollar__Dict')))((object)["callCC" => (function() use ($callCC) {
  $__fn = function($f) use ($callCC, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT')))(($callCC)((function() use ($f) {
  $__body = function($c) use ($f) {
    $v = ($f)((function() use ($c) {
  $__fn = function($a) use ($c, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT')))(($c)((($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($a)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return $m;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($c) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($c);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadContMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadContMaybeT';

// Control_Monad_Maybe_Trans_monadEffectMaybe
function Control_Monad_Maybe_Trans_monadEffectMaybe($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadEffectMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadEffect)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadMaybeT1 = (($GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadMaybeT')))($Monad0);
    $__res = (($GLOBALS['Effect_Class_MonadEffect__dollar__Dict'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_MonadEffect__dollar__Dict')))((object)["liftEffect" => (($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose')))((($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift')))($Monad0), (($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect)), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadEffectMaybe'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadEffectMaybe';

// Control_Monad_Maybe_Trans_monadRecMaybeT
function Control_Monad_Maybe_Trans_monadRecMaybeT($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadRecMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$tailRecM = (($GLOBALS['Control_Monad_Rec_Class_tailRecM'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRecM')))($dictMonadRec);
$Monad0 = (($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((($Monad0)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($Monad0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$monadMaybeT1 = (($GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadMaybeT')))($Monad0);
    $__res = (($GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_MonadRec__dollar__Dict')))((object)["tailRecM" => (function() use ($tailRecM, $bind, $pure) {
  $__fn = function($f) use ($tailRecM, $bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose')))(($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT')), ($tailRecM)((function() use ($f, $bind, $pure) {
  $__body = function($a) use ($f, $bind, $pure) {
    $v = ($f)($a);
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return ($bind)($m, (function() use ($pure) {
  $__fn = function($m__prime__) use ($pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $m__prime__;
$__case_res_0 = null;
if ((($__case_0)->tag === "Nothing")) {
$__case_res_0 = (($GLOBALS['Control_Monad_Rec_Class_Done'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Done')))(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')));
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Loop"))) {
$a1 = (($__case_0)->v0)->v0;
$__case_res_0 = (($GLOBALS['Control_Monad_Rec_Class_Loop'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Loop')))($a1);
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Done"))) {
$b = (($__case_0)->v0)->v0;
$__case_res_0 = (($GLOBALS['Control_Monad_Rec_Class_Done'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Done')))((($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($b));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = ($pure)($__case_res_0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($f, $bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadRecMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadRecMaybeT';

// Control_Monad_Maybe_Trans_monadStateMaybeT
function Control_Monad_Maybe_Trans_monadStateMaybeT($dictMonadState) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadStateMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadState)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$lift1 = (($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift')))($Monad0);
$state = (($GLOBALS['Control_Monad_State_Class_state'] ?? \Control\Monad\State\Class\phpurs_eval_thunk('Control_Monad_State_Class_state')))($dictMonadState);
$monadMaybeT1 = (($GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadMaybeT')))($Monad0);
    $__res = (($GLOBALS['Control_Monad_State_Class_MonadState__dollar__Dict'] ?? \Control\Monad\State\Class\phpurs_eval_thunk('Control_Monad_State_Class_MonadState__dollar__Dict')))((object)["state" => (function() use ($lift1, $state) {
  $__fn = function($f) use ($lift1, $state, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($lift1)(($state)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadStateMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadStateMaybeT';

// Control_Monad_Maybe_Trans_monadTellMaybeT
function Control_Monad_Maybe_Trans_monadTellMaybeT($dictMonadTell) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadTellMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad1 = (($dictMonadTell)->Monad1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$Semigroup0 = (($dictMonadTell)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadMaybeT1 = (($GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadMaybeT')))($Monad1);
    $__res = (($GLOBALS['Control_Monad_Writer_Class_MonadTell__dollar__Dict'] ?? \Control\Monad\Writer\Class\phpurs_eval_thunk('Control_Monad_Writer_Class_MonadTell__dollar__Dict')))((object)["tell" => (($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose')))((($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift')))($Monad1), (($GLOBALS['Control_Monad_Writer_Class_tell'] ?? \Control\Monad\Writer\Class\phpurs_eval_thunk('Control_Monad_Writer_Class_tell')))($dictMonadTell)), "Semigroup0" => (function() use (&$Semigroup0) {
  $__fn = function($__dollar____unused) use (&$Semigroup0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $Semigroup0;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad1" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadTellMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadTellMaybeT';

// Control_Monad_Maybe_Trans_monadWriterMaybeT
function Control_Monad_Maybe_Trans_monadWriterMaybeT($dictMonadWriter) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadWriterMaybeT';
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
$monadTellMaybeT1 = (($GLOBALS['Control_Monad_Maybe_Trans_monadTellMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadTellMaybeT')))($MonadTell1);
    $__res = (($GLOBALS['Control_Monad_Writer_Class_MonadWriter__dollar__Dict'] ?? \Control\Monad\Writer\Class\phpurs_eval_thunk('Control_Monad_Writer_Class_MonadWriter__dollar__Dict')))((object)["listen" => (($GLOBALS['Control_Monad_Maybe_Trans_mapMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_mapMaybeT')))((function() use ($bind, $listen, $pure) {
  $__fn = function($m) use ($bind, $listen, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($listen)($m), (function() use ($pure) {
  $__body = function($v) use ($pure) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$w = ($__case_0)->v1;
return ($pure)((($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map')))((function() use ($w) {
  $__fn = function($r) use ($w, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($r, $w);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $a));
break;
default:
throw new \Exception("Pattern match failure");
break;
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "pass" => (($GLOBALS['Control_Monad_Maybe_Trans_mapMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_mapMaybeT')))((function() use ($pass, $bind, $pure) {
  $__fn = function($m) use ($pass, $bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pass)(($bind)($m, (function() use ($pure) {
  $__fn = function($a) use ($pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $a;
$__case_res_0 = null;
if ((($__case_0)->tag === "Nothing")) {
$__case_res_0 = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')), ($GLOBALS['Control_Monad_Maybe_Trans_identity'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_identity')));
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$v = (($__case_0)->v0)->v0;
$f = (($__case_0)->v0)->v1;
$__case_res_0 = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))((($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($v), $f);
} else {
throw new \Exception("Pattern match failure");
};
};
    $__res = ($pure)($__case_res_0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "Monoid0" => (function() use (&$Monoid0) {
  $__fn = function($__dollar____unused) use (&$Monoid0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $Monoid0;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "MonadTell1" => (function() use ($monadTellMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadTellMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadTellMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadWriterMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadWriterMaybeT';

// Control_Monad_Maybe_Trans_monadThrowMaybeT
function Control_Monad_Maybe_Trans_monadThrowMaybeT($dictMonadThrow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadThrowMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadThrow)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$lift1 = (($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift')))($Monad0);
$throwError = (($GLOBALS['Control_Monad_Error_Class_throwError'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_throwError')))($dictMonadThrow);
$monadMaybeT1 = (($GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadMaybeT')))($Monad0);
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
})(), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadThrowMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadThrowMaybeT';

// Control_Monad_Maybe_Trans_monadErrorMaybeT
function Control_Monad_Maybe_Trans_monadErrorMaybeT($dictMonadError) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadErrorMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$catchError = (($GLOBALS['Control_Monad_Error_Class_catchError'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_catchError')))($dictMonadError);
$monadThrowMaybeT1 = (($GLOBALS['Control_Monad_Maybe_Trans_monadThrowMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadThrowMaybeT')))((($dictMonadError)->MonadThrow0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Monad_Error_Class_MonadError__dollar__Dict'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_MonadError__dollar__Dict')))((object)["catchError" => (function() use ($catchError) {
  $__body = function($v, $h) use ($catchError) {
    $__case_0 = $v;
    $__case_1 = $h;
    if (true) {
$m = $__case_0;
$h1 = $__case_1;
return (($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT')))(($catchError)($m, (function() use ($h1) {
  $__body = function($a) use ($h1) {
    $v1 = ($h1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($h1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
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
})(), "MonadThrow0" => (function() use ($monadThrowMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadThrowMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadThrowMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadErrorMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadErrorMaybeT';

// Control_Monad_Maybe_Trans_monadSTMaybeT
function Control_Monad_Maybe_Trans_monadSTMaybeT($dictMonadST) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadSTMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadST)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadMaybeT1 = (($GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadMaybeT')))($Monad0);
    $__res = (($GLOBALS['Control_Monad_ST_Class_MonadST__dollar__Dict'] ?? \Control\Monad\ST\Class\phpurs_eval_thunk('Control_Monad_ST_Class_MonadST__dollar__Dict')))((object)["liftST" => (($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose')))((($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift')))($Monad0), (($GLOBALS['Control_Monad_ST_Class_liftST'] ?? \Control\Monad\ST\Class\phpurs_eval_thunk('Control_Monad_ST_Class_liftST')))($dictMonadST)), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadSTMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadSTMaybeT';

// Control_Monad_Maybe_Trans_monoidMaybeT
function Control_Monad_Maybe_Trans_monoidMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monoidMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_applicativeMaybeT')))($dictMonad));
$semigroupMaybeT1 = (($GLOBALS['Control_Monad_Maybe_Trans_semigroupMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_semigroupMaybeT')))($dictMonad);
    $__res = (function() use ($semigroupMaybeT1, $pure) {
  $__fn = function($dictMonoid) use ($semigroupMaybeT1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$semigroupMaybeT2 = ($semigroupMaybeT1)((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => ($pure)((($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid)), "Semigroup0" => (function() use ($semigroupMaybeT2) {
  $__fn = function($__dollar____unused) use ($semigroupMaybeT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupMaybeT2;
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
$GLOBALS['Control_Monad_Maybe_Trans_monoidMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monoidMaybeT';

// Control_Monad_Maybe_Trans_altMaybeT
function Control_Monad_Maybe_Trans_altMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_altMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Bind1 = (($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))($Bind1);
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$functorMaybeT1 = (($GLOBALS['Control_Monad_Maybe_Trans_functorMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_functorMaybeT')))((((($Bind1)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Alt_Alt__dollar__Dict'] ?? \Control\Alt\phpurs_eval_thunk('Control_Alt_Alt__dollar__Dict')))((object)["alt" => (function() use ($bind, $pure) {
  $__body = function($v, $v1) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m1 = $__case_0;
$m2 = $__case_1;
return (($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT')))(($bind)($m1, (function() use ($m2, $pure) {
  $__body = function($m) use ($m2, $pure) {
    $__case_0 = $m;
    if ((($__case_0)->tag === "Nothing")) {
return $m2;
} else {
if (true) {
$ja = $__case_0;
return ($pure)($ja);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($m) use ($m2, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($m);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_altMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_altMaybeT';

// Control_Monad_Maybe_Trans_plusMaybeT
function Control_Monad_Maybe_Trans_plusMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_plusMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$altMaybeT1 = (($GLOBALS['Control_Monad_Maybe_Trans_altMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_altMaybeT')))($dictMonad);
    $__res = (($GLOBALS['Control_Plus_Plus__dollar__Dict'] ?? \Control\Plus\phpurs_eval_thunk('Control_Plus_Plus__dollar__Dict')))((object)["empty" => (($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT')))((($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))), ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')))), "Alt0" => (function() use ($altMaybeT1) {
  $__fn = function($__dollar____unused) use ($altMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $altMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_plusMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_plusMaybeT';

// Control_Monad_Maybe_Trans_alternativeMaybeT
function Control_Monad_Maybe_Trans_alternativeMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_alternativeMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeMaybeT1 = (($GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_applicativeMaybeT')))($dictMonad);
$plusMaybeT1 = (($GLOBALS['Control_Monad_Maybe_Trans_plusMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_plusMaybeT')))($dictMonad);
    $__res = (($GLOBALS['Control_Alternative_Alternative__dollar__Dict'] ?? \Control\Alternative\phpurs_eval_thunk('Control_Alternative_Alternative__dollar__Dict')))((object)["Applicative0" => (function() use ($applicativeMaybeT1) {
  $__fn = function($__dollar____unused) use ($applicativeMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusMaybeT1) {
  $__fn = function($__dollar____unused) use ($plusMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $plusMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_alternativeMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_alternativeMaybeT';

// Control_Monad_Maybe_Trans_monadPlusMaybeT
function Control_Monad_Maybe_Trans_monadPlusMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadPlusMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$monadMaybeT1 = (($GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadMaybeT')))($dictMonad);
$alternativeMaybeT1 = (($GLOBALS['Control_Monad_Maybe_Trans_alternativeMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_alternativeMaybeT')))($dictMonad);
    $__res = (($GLOBALS['Control_MonadPlus_MonadPlus__dollar__Dict'] ?? \Control\MonadPlus\phpurs_eval_thunk('Control_MonadPlus_MonadPlus__dollar__Dict')))((object)["Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() use ($alternativeMaybeT1) {
  $__fn = function($__dollar____unused) use ($alternativeMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $alternativeMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadPlusMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadPlusMaybeT';

