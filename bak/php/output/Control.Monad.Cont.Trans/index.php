<?php

namespace Control\Monad\Cont\Trans;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
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
      case 'Control_Monad_Cont_Trans_newtypeContT': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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
      case 'Control_Monad_Cont_Trans_monadTransContT': $v = (($GLOBALS['Control_Monad_Trans_Class_MonadTrans__dollar__Dict'] ?? \Control\Monad\Trans\Class\phpurs_eval_thunk('Control_Monad_Trans_Class_MonadTrans__dollar__Dict')))((object)["lift" => (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($bind) {
  $__fn = function($m) use ($bind, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Cont_Trans_ContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_ContT')))((function() use ($bind, $m) {
  $__fn = function($k) use ($bind, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($m, $k);
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
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_Cont_Trans_compose
function Control_Monad_Cont_Trans_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_compose';
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
$GLOBALS['Control_Monad_Cont_Trans_compose'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_compose';

// Control_Monad_Cont_Trans_ContT
function Control_Monad_Cont_Trans_ContT($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_ContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_ContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_ContT';

// Control_Monad_Cont_Trans_withContT
function Control_Monad_Cont_Trans_withContT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_withContT';
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
return (($GLOBALS['Control_Monad_Cont_Trans_ContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_ContT')))((function() use ($m, $f1) {
  $__fn = function($k) use ($m, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($m)(($f1)($k));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_withContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_withContT';

// Control_Monad_Cont_Trans_runContT
function Control_Monad_Cont_Trans_runContT($v, $k = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_runContT';
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, $__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $k) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$f = $__case_0;
$k1 = $__case_1;
return ($f)($k1);
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v, $k);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_runContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_runContT';



// Control_Monad_Cont_Trans_lift
function Control_Monad_Cont_Trans_lift($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_lift';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($bind) {
  $__fn = function($m) use ($bind, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Cont_Trans_ContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_ContT')))((function() use ($bind, $m) {
  $__fn = function($k) use ($bind, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($m, $k);
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
$GLOBALS['Control_Monad_Cont_Trans_lift'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_lift';

// Control_Monad_Cont_Trans_mapContT
function Control_Monad_Cont_Trans_mapContT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_mapContT';
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
return (($GLOBALS['Control_Monad_Cont_Trans_ContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_ContT')))((function() use ($f1, $m) {
  $__fn = function($k) use ($f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f1)(($m)($k));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_mapContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_mapContT';

// Control_Monad_Cont_Trans_functorContT
function Control_Monad_Cont_Trans_functorContT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_functorContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (($GLOBALS['Control_Monad_Cont_Trans_ContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_ContT')))((function() use ($m, $f1) {
  $__fn = function($k) use ($m, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($m)((function() use ($k, $f1) {
  $__fn = function($a) use ($k, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($k)(($f1)($a));
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
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_functorContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_functorContT';

// Control_Monad_Cont_Trans_applyContT
function Control_Monad_Cont_Trans_applyContT($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_applyContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$functorContT1 = (($GLOBALS['Control_Monad_Cont_Trans_functorContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_functorContT')))((($dictApply)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$v2 = $__case_1;
return (($GLOBALS['Control_Monad_Cont_Trans_ContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_ContT')))((function() use ($f, $v2) {
  $__fn = function($k) use ($f, $v2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)((function() use ($v2, $k) {
  $__fn = function($g) use ($v2, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v2)((function() use ($k, $g) {
  $__fn = function($a) use ($k, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($k)(($g)($a));
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
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorContT1) {
  $__fn = function($__dollar____unused) use ($functorContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorContT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_applyContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_applyContT';

// Control_Monad_Cont_Trans_bindContT
function Control_Monad_Cont_Trans_bindContT($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_bindContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applyContT1 = (($GLOBALS['Control_Monad_Cont_Trans_applyContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_applyContT')))((($dictBind)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Bind_Bind__dollar__Dict'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_Bind__dollar__Dict')))((object)["bind" => (function() {
  $__body = function($v, $k) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return (($GLOBALS['Control_Monad_Cont_Trans_ContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_ContT')))((function() use ($m, $k1) {
  $__fn = function($k__prime__) use ($m, $k1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($m)((function() use ($k1, $k__prime__) {
  $__body = function($a) use ($k1, $k__prime__) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$m__prime__ = $__case_0;
return ($m__prime__)($k__prime__);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($k1, $k__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
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
  $__fn = function($v, $k = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, &$__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $k);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyContT1) {
  $__fn = function($__dollar____unused) use ($applyContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyContT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_bindContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_bindContT';

// Control_Monad_Cont_Trans_semigroupContT
function Control_Monad_Cont_Trans_semigroupContT($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_semigroupContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$lift2 = (($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2')))((($GLOBALS['Control_Monad_Cont_Trans_applyContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_applyContT')))($dictApply));
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
$GLOBALS['Control_Monad_Cont_Trans_semigroupContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_semigroupContT';

// Control_Monad_Cont_Trans_applicativeContT
function Control_Monad_Cont_Trans_applicativeContT($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_applicativeContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applyContT1 = (($GLOBALS['Control_Monad_Cont_Trans_applyContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_applyContT')))((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Cont_Trans_ContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_ContT')))((function() use ($a) {
  $__fn = function($k) use ($a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($k)($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyContT1) {
  $__fn = function($__dollar____unused) use ($applyContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyContT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_applicativeContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_applicativeContT';

// Control_Monad_Cont_Trans_monadContT
function Control_Monad_Cont_Trans_monadContT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_monadContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeContT1 = (($GLOBALS['Control_Monad_Cont_Trans_applicativeContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_applicativeContT')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$bindContT1 = (($GLOBALS['Control_Monad_Cont_Trans_bindContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_bindContT')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Monad_Monad__dollar__Dict'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_Monad__dollar__Dict')))((object)["Applicative0" => (function() use ($applicativeContT1) {
  $__fn = function($__dollar____unused) use ($applicativeContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeContT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindContT1) {
  $__fn = function($__dollar____unused) use ($bindContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bindContT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_monadContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_monadContT';

// Control_Monad_Cont_Trans_monadAskContT
function Control_Monad_Cont_Trans_monadAskContT($dictMonadAsk) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_monadAskContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadAsk)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadContT1 = (($GLOBALS['Control_Monad_Cont_Trans_monadContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_monadContT')))($Monad0);
    $__res = (($GLOBALS['Control_Monad_Reader_Class_MonadAsk__dollar__Dict'] ?? \Control\Monad\Reader\Class\phpurs_eval_thunk('Control_Monad_Reader_Class_MonadAsk__dollar__Dict')))((object)["ask" => (($GLOBALS['Control_Monad_Cont_Trans_lift'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_lift')))($Monad0, (($GLOBALS['Control_Monad_Reader_Class_ask'] ?? \Control\Monad\Reader\Class\phpurs_eval_thunk('Control_Monad_Reader_Class_ask')))($dictMonadAsk)), "Monad0" => (function() use ($monadContT1) {
  $__fn = function($__dollar____unused) use ($monadContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadContT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_monadAskContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_monadAskContT';

// Control_Monad_Cont_Trans_monadReaderContT
function Control_Monad_Cont_Trans_monadReaderContT($dictMonadReader) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_monadReaderContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$MonadAsk0 = (($dictMonadReader)->MonadAsk0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((((($MonadAsk0)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$ask = (($GLOBALS['Control_Monad_Reader_Class_ask'] ?? \Control\Monad\Reader\Class\phpurs_eval_thunk('Control_Monad_Reader_Class_ask')))($MonadAsk0);
$local = (($GLOBALS['Control_Monad_Reader_Class_local'] ?? \Control\Monad\Reader\Class\phpurs_eval_thunk('Control_Monad_Reader_Class_local')))($dictMonadReader);
$monadAskContT1 = (($GLOBALS['Control_Monad_Cont_Trans_monadAskContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_monadAskContT')))($MonadAsk0);
    $__res = (($GLOBALS['Control_Monad_Reader_Class_MonadReader__dollar__Dict'] ?? \Control\Monad\Reader\Class\phpurs_eval_thunk('Control_Monad_Reader_Class_MonadReader__dollar__Dict')))((object)["local" => (function() use ($bind, $ask, $local) {
  $__body = function($f, $v) use ($bind, $ask, $local) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$c = $__case_1;
return (($GLOBALS['Control_Monad_Cont_Trans_ContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_ContT')))((function() use ($bind, $ask, $local, $f1, $c) {
  $__fn = function($k) use ($bind, $ask, $local, $f1, $c, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($ask, (function() use ($local, $f1, $c, $k) {
  $__fn = function($r) use ($local, $f1, $c, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($local)($f1, ($c)((($GLOBALS['Control_Monad_Cont_Trans_compose'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_compose')))(($local)((($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))($r)), $k)));
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
  $__fn = function($f, $v = null) use ($bind, $ask, $local, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "MonadAsk0" => (function() use ($monadAskContT1) {
  $__fn = function($__dollar____unused) use ($monadAskContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadAskContT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_monadReaderContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_monadReaderContT';

// Control_Monad_Cont_Trans_monadContContT
function Control_Monad_Cont_Trans_monadContContT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_monadContContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$monadContT1 = (($GLOBALS['Control_Monad_Cont_Trans_monadContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_monadContT')))($dictMonad);
    $__res = (($GLOBALS['Control_Monad_Cont_Class_MonadCont__dollar__Dict'] ?? \Control\Monad\Cont\Class\phpurs_eval_thunk('Control_Monad_Cont_Class_MonadCont__dollar__Dict')))((object)["callCC" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Cont_Trans_ContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_ContT')))((function() use ($f) {
  $__body = function($k) use ($f) {
    $v = ($f)((function() use ($k) {
  $__fn = function($a) use ($k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Cont_Trans_ContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_ContT')))((function() use ($k, $a) {
  $__fn = function($v1) use ($k, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($k)($a);
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
return ($f__prime__)($k);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($k) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($k);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadContT1) {
  $__fn = function($__dollar____unused) use ($monadContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadContT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_monadContContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_monadContContT';

// Control_Monad_Cont_Trans_monadEffectContT
function Control_Monad_Cont_Trans_monadEffectContT($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_monadEffectContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadEffect)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadContT1 = (($GLOBALS['Control_Monad_Cont_Trans_monadContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_monadContT')))($Monad0);
    $__res = (($GLOBALS['Effect_Class_MonadEffect__dollar__Dict'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_MonadEffect__dollar__Dict')))((object)["liftEffect" => (($GLOBALS['Control_Monad_Cont_Trans_compose'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_compose')))((($GLOBALS['Control_Monad_Cont_Trans_lift'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_lift')))($Monad0), (($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect)), "Monad0" => (function() use ($monadContT1) {
  $__fn = function($__dollar____unused) use ($monadContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadContT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_monadEffectContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_monadEffectContT';

// Control_Monad_Cont_Trans_monadStateContT
function Control_Monad_Cont_Trans_monadStateContT($dictMonadState) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_monadStateContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadState)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadContT1 = (($GLOBALS['Control_Monad_Cont_Trans_monadContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_monadContT')))($Monad0);
    $__res = (($GLOBALS['Control_Monad_State_Class_MonadState__dollar__Dict'] ?? \Control\Monad\State\Class\phpurs_eval_thunk('Control_Monad_State_Class_MonadState__dollar__Dict')))((object)["state" => (($GLOBALS['Control_Monad_Cont_Trans_compose'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_compose')))((($GLOBALS['Control_Monad_Cont_Trans_lift'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_lift')))($Monad0), (($GLOBALS['Control_Monad_State_Class_state'] ?? \Control\Monad\State\Class\phpurs_eval_thunk('Control_Monad_State_Class_state')))($dictMonadState)), "Monad0" => (function() use ($monadContT1) {
  $__fn = function($__dollar____unused) use ($monadContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadContT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_monadStateContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_monadStateContT';

// Control_Monad_Cont_Trans_monadSTContT
function Control_Monad_Cont_Trans_monadSTContT($dictMonadST) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_monadSTContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadST)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadContT1 = (($GLOBALS['Control_Monad_Cont_Trans_monadContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_monadContT')))($Monad0);
    $__res = (($GLOBALS['Control_Monad_ST_Class_MonadST__dollar__Dict'] ?? \Control\Monad\ST\Class\phpurs_eval_thunk('Control_Monad_ST_Class_MonadST__dollar__Dict')))((object)["liftST" => (($GLOBALS['Control_Monad_Cont_Trans_compose'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_compose')))((($GLOBALS['Control_Monad_Cont_Trans_lift'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_lift')))($Monad0), (($GLOBALS['Control_Monad_ST_Class_liftST'] ?? \Control\Monad\ST\Class\phpurs_eval_thunk('Control_Monad_ST_Class_liftST')))($dictMonadST)), "Monad0" => (function() use ($monadContT1) {
  $__fn = function($__dollar____unused) use ($monadContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadContT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_monadSTContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_monadSTContT';

// Control_Monad_Cont_Trans_monoidContT
function Control_Monad_Cont_Trans_monoidContT($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_monoidContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($GLOBALS['Control_Monad_Cont_Trans_applicativeContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_applicativeContT')))($dictApplicative));
$semigroupContT1 = (($GLOBALS['Control_Monad_Cont_Trans_semigroupContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_semigroupContT')))((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($semigroupContT1, $pure) {
  $__fn = function($dictMonoid) use ($semigroupContT1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$semigroupContT2 = ($semigroupContT1)((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => ($pure)((($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid)), "Semigroup0" => (function() use ($semigroupContT2) {
  $__fn = function($__dollar____unused) use ($semigroupContT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupContT2;
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
$GLOBALS['Control_Monad_Cont_Trans_monoidContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_monoidContT';

