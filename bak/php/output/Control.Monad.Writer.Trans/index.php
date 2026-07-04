<?php

namespace Control\Monad\Writer\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Trans/index.php';
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
      case 'Control_Monad_Writer_Trans_newtypeWriterT': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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


// Control_Monad_Writer_Trans_compose
function Control_Monad_Writer_Trans_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_compose';
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
$GLOBALS['Control_Monad_Writer_Trans_compose'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_compose';

// Control_Monad_Writer_Trans_WriterT
function Control_Monad_Writer_Trans_WriterT($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_WriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Writer_Trans_WriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_WriterT';

// Control_Monad_Writer_Trans_runWriterT
function Control_Monad_Writer_Trans_runWriterT($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_runWriterT';
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
$GLOBALS['Control_Monad_Writer_Trans_runWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_runWriterT';


// Control_Monad_Writer_Trans_monadTransWriterT
function Control_Monad_Writer_Trans_monadTransWriterT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_monadTransWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
    $__res = (($GLOBALS['Control_Monad_Trans_Class_MonadTrans__dollar__Dict'] ?? \Control\Monad\Trans\Class\phpurs_eval_thunk('Control_Monad_Trans_Class_MonadTrans__dollar__Dict')))((object)["lift" => (function() use ($mempty) {
  $__fn = function($dictMonad) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($bind, $pure, $mempty) {
  $__fn = function($m) use ($bind, $pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Writer_Trans_WriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_WriterT')))(($bind)($m, (function() use ($pure, $mempty) {
  $__fn = function($a) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a, $mempty));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
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
$GLOBALS['Control_Monad_Writer_Trans_monadTransWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_monadTransWriterT';

// Control_Monad_Writer_Trans_mapWriterT
function Control_Monad_Writer_Trans_mapWriterT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_mapWriterT';
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
return (($GLOBALS['Control_Monad_Writer_Trans_WriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_WriterT')))(($f1)($m));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Writer_Trans_mapWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_mapWriterT';

// Control_Monad_Writer_Trans_functorWriterT
function Control_Monad_Writer_Trans_functorWriterT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_functorWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() use ($map) {
  $__fn = function($f) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Writer_Trans_mapWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_mapWriterT')))(($map)((function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$w = ($__case_0)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($f)($a), $w);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Writer_Trans_functorWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_functorWriterT';

// Control_Monad_Writer_Trans_execWriterT
function Control_Monad_Writer_Trans_execWriterT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_execWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (function() use ($map) {
  $__body = function($v) use ($map) {
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return ($map)(($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd')), $m);
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
$GLOBALS['Control_Monad_Writer_Trans_execWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_execWriterT';

// Control_Monad_Writer_Trans_applyWriterT
function Control_Monad_Writer_Trans_applyWriterT($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_applyWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))($dictSemigroup);
    $__res = (function() use ($append) {
  $__fn = function($dictApply) use ($append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($dictApply);
$Functor0 = (($dictApply)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($Functor0);
$functorWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_functorWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_functorWriterT')))($Functor0);
    $__res = (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => (function() use ($append, $apply, $map) {
  $__body = function($v, $v1) use ($append, $apply, $map) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$v2 = $__case_1;
$k = (function() use ($append) {
  $__body = function($v3, $v4) use ($append) {
    $__case_0 = $v3;
    $__case_1 = $v4;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$a = ($__case_0)->v0;
$w = ($__case_0)->v1;
$b = ($__case_1)->v0;
$w__prime__ = ($__case_1)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($a)($b), ($append)($w, $w__prime__));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v3, $v4 = null) use ($append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v4) use ($v3, &$__fn) { return $__fn($v3, $v4); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v3, $v4);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return (($GLOBALS['Control_Monad_Writer_Trans_WriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_WriterT')))(($apply)(($map)($k, $f), $v2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($append, $apply, $map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorWriterT1) {
  $__fn = function($__dollar____unused) use ($functorWriterT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorWriterT1;
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
$GLOBALS['Control_Monad_Writer_Trans_applyWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_applyWriterT';

// Control_Monad_Writer_Trans_bindWriterT
function Control_Monad_Writer_Trans_bindWriterT($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_bindWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))($dictSemigroup);
$applyWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_applyWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_applyWriterT')))($dictSemigroup);
    $__res = (function() use ($applyWriterT1, $append) {
  $__fn = function($dictBind) use ($applyWriterT1, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))($dictBind);
$Apply0 = (($dictBind)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($Apply0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$applyWriterT2 = ($applyWriterT1)($Apply0);
    $__res = (($GLOBALS['Control_Bind_Bind__dollar__Dict'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_Bind__dollar__Dict')))((object)["bind" => (function() use ($bind, $map, $append) {
  $__body = function($v, $k) use ($bind, $map, $append) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return (($GLOBALS['Control_Monad_Writer_Trans_WriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_WriterT')))(($bind)($m, (function() use ($k1, $map, $append) {
  $__body = function($v1) use ($k1, $map, $append) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$w = ($__case_0)->v1;
$v2 = ($k1)($a);
$__case_0 = $v2;
if (true) {
$wt = $__case_0;
return ($map)((function() use ($append, $w) {
  $__body = function($v3) use ($append, $w) {
    $__case_0 = $v3;
    switch (($__case_0)->tag) {
case "Tuple":
$b = ($__case_0)->v0;
$w__prime__ = ($__case_0)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($b, ($append)($w, $w__prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v3) use ($append, $w, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $wt);
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($k1, $map, $append, $__body, &$__fn) {
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
  $__fn = function($v, $k = null) use ($bind, $map, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, &$__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $k);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyWriterT2) {
  $__fn = function($__dollar____unused) use ($applyWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyWriterT2;
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
$GLOBALS['Control_Monad_Writer_Trans_bindWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_bindWriterT';

// Control_Monad_Writer_Trans_semigroupWriterT
function Control_Monad_Writer_Trans_semigroupWriterT($dictApply, $dictSemigroup = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_semigroupWriterT';
  if ($__num < 2) {
    if ($__num === 1) return function($dictSemigroup) use ($dictApply, $__fn) { return $__fn($dictApply, $dictSemigroup); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$lift2 = (($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2')))((($GLOBALS['Control_Monad_Writer_Trans_applyWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_applyWriterT')))($dictSemigroup, $dictApply));
    $__res = (function() use ($lift2) {
  $__fn = function($dictSemigroup1) use ($lift2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => ($lift2)((($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))($dictSemigroup1))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Writer_Trans_semigroupWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_semigroupWriterT';

// Control_Monad_Writer_Trans_applicativeWriterT
function Control_Monad_Writer_Trans_applicativeWriterT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_applicativeWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
$applyWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_applyWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_applyWriterT')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($applyWriterT1, $mempty) {
  $__fn = function($dictApplicative) use ($applyWriterT1, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))($dictApplicative);
$applyWriterT2 = ($applyWriterT1)((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => (function() use ($pure, $mempty) {
  $__fn = function($a) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Writer_Trans_WriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_WriterT')))(($pure)((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a, $mempty)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyWriterT2) {
  $__fn = function($__dollar____unused) use ($applyWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyWriterT2;
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
$GLOBALS['Control_Monad_Writer_Trans_applicativeWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_applicativeWriterT';

// Control_Monad_Writer_Trans_monadWriterT
function Control_Monad_Writer_Trans_monadWriterT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_monadWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_applicativeWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_applicativeWriterT')))($dictMonoid);
$bindWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_bindWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_bindWriterT')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($applicativeWriterT1, $bindWriterT1) {
  $__fn = function($dictMonad) use ($applicativeWriterT1, $bindWriterT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeWriterT2 = ($applicativeWriterT1)((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$bindWriterT2 = ($bindWriterT1)((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Monad_Monad__dollar__Dict'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_Monad__dollar__Dict')))((object)["Applicative0" => (function() use ($applicativeWriterT2) {
  $__fn = function($__dollar____unused) use ($applicativeWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeWriterT2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindWriterT2) {
  $__fn = function($__dollar____unused) use ($bindWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bindWriterT2;
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
$GLOBALS['Control_Monad_Writer_Trans_monadWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_monadWriterT';

// Control_Monad_Writer_Trans_monadAskWriterT
function Control_Monad_Writer_Trans_monadAskWriterT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_monadAskWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$lift = (($GLOBALS['Control_Monad_Trans_Class_lift'] ?? \Control\Monad\Trans\Class\phpurs_eval_thunk('Control_Monad_Trans_Class_lift')))((($GLOBALS['Control_Monad_Writer_Trans_monadTransWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadTransWriterT')))($dictMonoid));
$monadWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_monadWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadWriterT')))($dictMonoid);
    $__res = (function() use ($monadWriterT1, $lift) {
  $__fn = function($dictMonadAsk) use ($monadWriterT1, $lift, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadAsk)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadWriterT2 = ($monadWriterT1)($Monad0);
    $__res = (($GLOBALS['Control_Monad_Reader_Class_MonadAsk__dollar__Dict'] ?? \Control\Monad\Reader\Class\phpurs_eval_thunk('Control_Monad_Reader_Class_MonadAsk__dollar__Dict')))((object)["ask" => ($lift)($Monad0, (($GLOBALS['Control_Monad_Reader_Class_ask'] ?? \Control\Monad\Reader\Class\phpurs_eval_thunk('Control_Monad_Reader_Class_ask')))($dictMonadAsk)), "Monad0" => (function() use ($monadWriterT2) {
  $__fn = function($__dollar____unused) use ($monadWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadWriterT2;
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
$GLOBALS['Control_Monad_Writer_Trans_monadAskWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_monadAskWriterT';

// Control_Monad_Writer_Trans_monadReaderWriterT
function Control_Monad_Writer_Trans_monadReaderWriterT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_monadReaderWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$monadAskWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_monadAskWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadAskWriterT')))($dictMonoid);
    $__res = (function() use ($monadAskWriterT1) {
  $__fn = function($dictMonadReader) use ($monadAskWriterT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$local = (($GLOBALS['Control_Monad_Reader_Class_local'] ?? \Control\Monad\Reader\Class\phpurs_eval_thunk('Control_Monad_Reader_Class_local')))($dictMonadReader);
$monadAskWriterT2 = ($monadAskWriterT1)((($dictMonadReader)->MonadAsk0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Monad_Reader_Class_MonadReader__dollar__Dict'] ?? \Control\Monad\Reader\Class\phpurs_eval_thunk('Control_Monad_Reader_Class_MonadReader__dollar__Dict')))((object)["local" => (function() use ($local) {
  $__fn = function($f) use ($local, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Writer_Trans_mapWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_mapWriterT')))(($local)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "MonadAsk0" => (function() use ($monadAskWriterT2) {
  $__fn = function($__dollar____unused) use ($monadAskWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadAskWriterT2;
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
$GLOBALS['Control_Monad_Writer_Trans_monadReaderWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_monadReaderWriterT';

// Control_Monad_Writer_Trans_monadContWriterT
function Control_Monad_Writer_Trans_monadContWriterT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_monadContWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
$monadWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_monadWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadWriterT')))($dictMonoid);
    $__res = (function() use ($monadWriterT1, $mempty) {
  $__fn = function($dictMonadCont) use ($monadWriterT1, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$callCC = (($GLOBALS['Control_Monad_Cont_Class_callCC'] ?? \Control\Monad\Cont\Class\phpurs_eval_thunk('Control_Monad_Cont_Class_callCC')))($dictMonadCont);
$monadWriterT2 = ($monadWriterT1)((($dictMonadCont)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Monad_Cont_Class_MonadCont__dollar__Dict'] ?? \Control\Monad\Cont\Class\phpurs_eval_thunk('Control_Monad_Cont_Class_MonadCont__dollar__Dict')))((object)["callCC" => (function() use ($callCC, $mempty) {
  $__fn = function($f) use ($callCC, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Writer_Trans_WriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_WriterT')))(($callCC)((function() use ($f, $mempty) {
  $__body = function($c) use ($f, $mempty) {
    $v = ($f)((function() use ($c, $mempty) {
  $__fn = function($a) use ($c, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Writer_Trans_WriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_WriterT')))(($c)((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a, $mempty)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    $__case_0 = $v;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($c) use ($f, $mempty, $__body, &$__fn) {
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
})(), "Monad0" => (function() use ($monadWriterT2) {
  $__fn = function($__dollar____unused) use ($monadWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadWriterT2;
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
$GLOBALS['Control_Monad_Writer_Trans_monadContWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_monadContWriterT';

// Control_Monad_Writer_Trans_monadEffectWriter
function Control_Monad_Writer_Trans_monadEffectWriter($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_monadEffectWriter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$lift = (($GLOBALS['Control_Monad_Trans_Class_lift'] ?? \Control\Monad\Trans\Class\phpurs_eval_thunk('Control_Monad_Trans_Class_lift')))((($GLOBALS['Control_Monad_Writer_Trans_monadTransWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadTransWriterT')))($dictMonoid));
$monadWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_monadWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadWriterT')))($dictMonoid);
    $__res = (function() use ($monadWriterT1, $lift) {
  $__fn = function($dictMonadEffect) use ($monadWriterT1, $lift, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadEffect)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadWriterT2 = ($monadWriterT1)($Monad0);
    $__res = (($GLOBALS['Effect_Class_MonadEffect__dollar__Dict'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_MonadEffect__dollar__Dict')))((object)["liftEffect" => (($GLOBALS['Control_Monad_Writer_Trans_compose'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_compose')))(($lift)($Monad0), (($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect)), "Monad0" => (function() use ($monadWriterT2) {
  $__fn = function($__dollar____unused) use ($monadWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadWriterT2;
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
$GLOBALS['Control_Monad_Writer_Trans_monadEffectWriter'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_monadEffectWriter';

// Control_Monad_Writer_Trans_monadRecWriterT
function Control_Monad_Writer_Trans_monadRecWriterT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_monadRecWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
$monadWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_monadWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadWriterT')))($dictMonoid);
    $__res = (function() use ($monadWriterT1, $append, $mempty) {
  $__fn = function($dictMonadRec) use ($monadWriterT1, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((($Monad0)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($Monad0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$tailRecM = (($GLOBALS['Control_Monad_Rec_Class_tailRecM'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRecM')))($dictMonadRec);
$monadWriterT2 = ($monadWriterT1)($Monad0);
    $__res = (($GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_MonadRec__dollar__Dict')))((object)["tailRecM" => (function() use ($bind, $pure, $append, $tailRecM, $mempty) {
  $__fn = function($f, $a = null) use ($bind, $pure, $append, $tailRecM, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$f__prime__ = (function() use ($f, $bind, $pure, $append) {
  $__body = function($v) use ($f, $bind, $pure, $append) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a__prime__ = ($__case_0)->v0;
$w = ($__case_0)->v1;
$v1 = ($f)($a__prime__);
$__case_0 = $v1;
if (true) {
$wt = $__case_0;
return ($bind)($wt, (function() use ($pure, $append, $w) {
  $__body = function($v2) use ($pure, $append, $w) {
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "Tuple":
$m = ($__case_0)->v0;
$w1 = ($__case_0)->v1;
$__case_0 = $m;
$__case_res_0 = null;
switch (($__case_0)->tag) {
case "Loop":
$x = ($__case_0)->v0;
$__case_res_0 = (($GLOBALS['Control_Monad_Rec_Class_Loop'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Loop')))((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($x, ($append)($w, $w1)));
break;
case "Done":
$y = ($__case_0)->v0;
$__case_res_0 = (($GLOBALS['Control_Monad_Rec_Class_Done'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Done')))((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($y, ($append)($w, $w1)));
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
  $__fn = function($v2) use ($pure, $append, $w, $__body, &$__fn) {
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
  $__fn = function($v) use ($f, $bind, $pure, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (($GLOBALS['Control_Monad_Writer_Trans_WriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_WriterT')))(($tailRecM)($f__prime__, (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a, $mempty)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadWriterT2) {
  $__fn = function($__dollar____unused) use ($monadWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadWriterT2;
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
$GLOBALS['Control_Monad_Writer_Trans_monadRecWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_monadRecWriterT';

// Control_Monad_Writer_Trans_monadStateWriterT
function Control_Monad_Writer_Trans_monadStateWriterT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_monadStateWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$lift = (($GLOBALS['Control_Monad_Trans_Class_lift'] ?? \Control\Monad\Trans\Class\phpurs_eval_thunk('Control_Monad_Trans_Class_lift')))((($GLOBALS['Control_Monad_Writer_Trans_monadTransWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadTransWriterT')))($dictMonoid));
$monadWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_monadWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadWriterT')))($dictMonoid);
    $__res = (function() use ($lift, $monadWriterT1) {
  $__fn = function($dictMonadState) use ($lift, $monadWriterT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadState)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$lift1 = ($lift)($Monad0);
$state = (($GLOBALS['Control_Monad_State_Class_state'] ?? \Control\Monad\State\Class\phpurs_eval_thunk('Control_Monad_State_Class_state')))($dictMonadState);
$monadWriterT2 = ($monadWriterT1)($Monad0);
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
})(), "Monad0" => (function() use ($monadWriterT2) {
  $__fn = function($__dollar____unused) use ($monadWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadWriterT2;
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
$GLOBALS['Control_Monad_Writer_Trans_monadStateWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_monadStateWriterT';

// Control_Monad_Writer_Trans_monadTellWriterT
function Control_Monad_Writer_Trans_monadTellWriterT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_monadTellWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Semigroup0 = (($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_monadWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadWriterT')))($dictMonoid);
    $__res = (function() use ($monadWriterT1, &$Semigroup0) {
  $__fn = function($dictMonad) use ($monadWriterT1, &$Semigroup0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$monadWriterT2 = ($monadWriterT1)($dictMonad);
    $__res = (($GLOBALS['Control_Monad_Writer_Class_MonadTell__dollar__Dict'] ?? \Control\Monad\Writer\Class\phpurs_eval_thunk('Control_Monad_Writer_Class_MonadTell__dollar__Dict')))((object)["tell" => (($GLOBALS['Control_Monad_Writer_Trans_compose'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_compose')))(($GLOBALS['Control_Monad_Writer_Trans_WriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_WriterT')), (($GLOBALS['Control_Monad_Writer_Trans_compose'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_compose')))((($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')))), (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))))), "Semigroup0" => (function() use (&$Semigroup0) {
  $__fn = function($__dollar____unused) use (&$Semigroup0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $Semigroup0;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad1" => (function() use ($monadWriterT2) {
  $__fn = function($__dollar____unused) use ($monadWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadWriterT2;
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
$GLOBALS['Control_Monad_Writer_Trans_monadTellWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_monadTellWriterT';

// Control_Monad_Writer_Trans_monadWriterWriterT
function Control_Monad_Writer_Trans_monadWriterWriterT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_monadWriterWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$monadTellWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_monadTellWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadTellWriterT')))($dictMonoid);
    $__res = (function() use ($monadTellWriterT1, $dictMonoid) {
  $__fn = function($dictMonad) use ($monadTellWriterT1, $dictMonoid, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$monadTellWriterT2 = ($monadTellWriterT1)($dictMonad);
    $__res = (($GLOBALS['Control_Monad_Writer_Class_MonadWriter__dollar__Dict'] ?? \Control\Monad\Writer\Class\phpurs_eval_thunk('Control_Monad_Writer_Class_MonadWriter__dollar__Dict')))((object)["listen" => (function() use ($bind, $pure) {
  $__body = function($v) use ($bind, $pure) {
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return (($GLOBALS['Control_Monad_Writer_Trans_WriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_WriterT')))(($bind)($m, (function() use ($pure) {
  $__body = function($v1) use ($pure) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$w = ($__case_0)->v1;
return ($pure)((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a, $w), $w));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($pure, $__body, &$__fn) {
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
  $__fn = function($v) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "pass" => (function() use ($bind, $pure) {
  $__body = function($v) use ($bind, $pure) {
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return (($GLOBALS['Control_Monad_Writer_Trans_WriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_WriterT')))(($bind)($m, (function() use ($pure) {
  $__body = function($v1) use ($pure) {
    $__case_0 = $v1;
    if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v0)->tag === "Tuple"))) {
$a = (($__case_0)->v0)->v0;
$f = (($__case_0)->v0)->v1;
$w = ($__case_0)->v1;
return ($pure)((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a, ($f)($w)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v1) use ($pure, $__body, &$__fn) {
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
  $__fn = function($v) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monoid0" => (function() use ($dictMonoid) {
  $__fn = function($__dollar____unused) use ($dictMonoid, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictMonoid;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "MonadTell1" => (function() use ($monadTellWriterT2) {
  $__fn = function($__dollar____unused) use ($monadTellWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadTellWriterT2;
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
$GLOBALS['Control_Monad_Writer_Trans_monadWriterWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_monadWriterWriterT';

// Control_Monad_Writer_Trans_monadThrowWriterT
function Control_Monad_Writer_Trans_monadThrowWriterT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_monadThrowWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$lift = (($GLOBALS['Control_Monad_Trans_Class_lift'] ?? \Control\Monad\Trans\Class\phpurs_eval_thunk('Control_Monad_Trans_Class_lift')))((($GLOBALS['Control_Monad_Writer_Trans_monadTransWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadTransWriterT')))($dictMonoid));
$monadWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_monadWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadWriterT')))($dictMonoid);
    $__res = (function() use ($lift, $monadWriterT1) {
  $__fn = function($dictMonadThrow) use ($lift, $monadWriterT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadThrow)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$lift1 = ($lift)($Monad0);
$throwError = (($GLOBALS['Control_Monad_Error_Class_throwError'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_throwError')))($dictMonadThrow);
$monadWriterT2 = ($monadWriterT1)($Monad0);
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
})(), "Monad0" => (function() use ($monadWriterT2) {
  $__fn = function($__dollar____unused) use ($monadWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadWriterT2;
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
$GLOBALS['Control_Monad_Writer_Trans_monadThrowWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_monadThrowWriterT';

// Control_Monad_Writer_Trans_monadErrorWriterT
function Control_Monad_Writer_Trans_monadErrorWriterT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_monadErrorWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$monadThrowWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_monadThrowWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadThrowWriterT')))($dictMonoid);
    $__res = (function() use ($monadThrowWriterT1) {
  $__fn = function($dictMonadError) use ($monadThrowWriterT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$catchError = (($GLOBALS['Control_Monad_Error_Class_catchError'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_catchError')))($dictMonadError);
$monadThrowWriterT2 = ($monadThrowWriterT1)((($dictMonadError)->MonadThrow0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Monad_Error_Class_MonadError__dollar__Dict'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_MonadError__dollar__Dict')))((object)["catchError" => (function() use ($catchError) {
  $__body = function($v, $h) use ($catchError) {
    $__case_0 = $v;
    $__case_1 = $h;
    if (true) {
$m = $__case_0;
$h1 = $__case_1;
return (($GLOBALS['Control_Monad_Writer_Trans_WriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_WriterT')))(($catchError)($m, (function() use ($h1) {
  $__body = function($e) use ($h1) {
    $v1 = ($h1)($e);
    $__case_0 = $v1;
    if (true) {
$a = $__case_0;
return $a;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($e) use ($h1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($e);
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
})(), "MonadThrow0" => (function() use ($monadThrowWriterT2) {
  $__fn = function($__dollar____unused) use ($monadThrowWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadThrowWriterT2;
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
$GLOBALS['Control_Monad_Writer_Trans_monadErrorWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_monadErrorWriterT';

// Control_Monad_Writer_Trans_monadSTWriterT
function Control_Monad_Writer_Trans_monadSTWriterT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_monadSTWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$lift = (($GLOBALS['Control_Monad_Trans_Class_lift'] ?? \Control\Monad\Trans\Class\phpurs_eval_thunk('Control_Monad_Trans_Class_lift')))((($GLOBALS['Control_Monad_Writer_Trans_monadTransWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadTransWriterT')))($dictMonoid));
$monadWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_monadWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadWriterT')))($dictMonoid);
    $__res = (function() use ($monadWriterT1, $lift) {
  $__fn = function($dictMonadST) use ($monadWriterT1, $lift, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadST)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadWriterT2 = ($monadWriterT1)($Monad0);
    $__res = (($GLOBALS['Control_Monad_ST_Class_MonadST__dollar__Dict'] ?? \Control\Monad\ST\Class\phpurs_eval_thunk('Control_Monad_ST_Class_MonadST__dollar__Dict')))((object)["liftST" => (($GLOBALS['Control_Monad_Writer_Trans_compose'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_compose')))(($lift)($Monad0), (($GLOBALS['Control_Monad_ST_Class_liftST'] ?? \Control\Monad\ST\Class\phpurs_eval_thunk('Control_Monad_ST_Class_liftST')))($dictMonadST)), "Monad0" => (function() use ($monadWriterT2) {
  $__fn = function($__dollar____unused) use ($monadWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadWriterT2;
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
$GLOBALS['Control_Monad_Writer_Trans_monadSTWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_monadSTWriterT';

// Control_Monad_Writer_Trans_monoidWriterT
function Control_Monad_Writer_Trans_monoidWriterT($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_monoidWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$semigroupWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_semigroupWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_semigroupWriterT')))((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($dictApplicative, $semigroupWriterT1) {
  $__fn = function($dictMonoid) use ($dictApplicative, $semigroupWriterT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($GLOBALS['Control_Monad_Writer_Trans_applicativeWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_applicativeWriterT')))($dictMonoid, $dictApplicative));
$semigroupWriterT2 = ($semigroupWriterT1)((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($semigroupWriterT2, $pure) {
  $__fn = function($dictMonoid1) use ($semigroupWriterT2, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$semigroupWriterT3 = ($semigroupWriterT2)((($dictMonoid1)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => ($pure)((($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid1)), "Semigroup0" => (function() use ($semigroupWriterT3) {
  $__fn = function($__dollar____unused) use ($semigroupWriterT3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupWriterT3;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
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
$GLOBALS['Control_Monad_Writer_Trans_monoidWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_monoidWriterT';

// Control_Monad_Writer_Trans_altWriterT
function Control_Monad_Writer_Trans_altWriterT($dictAlt) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_altWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$alt = (($GLOBALS['Control_Alt_alt'] ?? \Control\Alt\phpurs_eval_thunk('Control_Alt_alt')))($dictAlt);
$functorWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_functorWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_functorWriterT')))((($dictAlt)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Alt_Alt__dollar__Dict'] ?? \Control\Alt\phpurs_eval_thunk('Control_Alt_Alt__dollar__Dict')))((object)["alt" => (function() use ($alt) {
  $__body = function($v, $v1) use ($alt) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m = $__case_0;
$n = $__case_1;
return (($GLOBALS['Control_Monad_Writer_Trans_WriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_WriterT')))(($alt)($m, $n));
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
})(), "Functor0" => (function() use ($functorWriterT1) {
  $__fn = function($__dollar____unused) use ($functorWriterT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorWriterT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Writer_Trans_altWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_altWriterT';

// Control_Monad_Writer_Trans_plusWriterT
function Control_Monad_Writer_Trans_plusWriterT($dictPlus) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_plusWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$altWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_altWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_altWriterT')))((($dictPlus)->Alt0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Plus_Plus__dollar__Dict'] ?? \Control\Plus\phpurs_eval_thunk('Control_Plus_Plus__dollar__Dict')))((object)["empty" => (($GLOBALS['Control_Monad_Writer_Trans_WriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_WriterT')))((($GLOBALS['Control_Plus_empty'] ?? \Control\Plus\phpurs_eval_thunk('Control_Plus_empty')))($dictPlus)), "Alt0" => (function() use ($altWriterT1) {
  $__fn = function($__dollar____unused) use ($altWriterT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $altWriterT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Writer_Trans_plusWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_plusWriterT';

// Control_Monad_Writer_Trans_alternativeWriterT
function Control_Monad_Writer_Trans_alternativeWriterT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_alternativeWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_applicativeWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_applicativeWriterT')))($dictMonoid);
    $__res = (function() use ($applicativeWriterT1) {
  $__fn = function($dictAlternative) use ($applicativeWriterT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeWriterT2 = ($applicativeWriterT1)((($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$plusWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_plusWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_plusWriterT')))((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Alternative_Alternative__dollar__Dict'] ?? \Control\Alternative\phpurs_eval_thunk('Control_Alternative_Alternative__dollar__Dict')))((object)["Applicative0" => (function() use ($applicativeWriterT2) {
  $__fn = function($__dollar____unused) use ($applicativeWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeWriterT2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusWriterT1) {
  $__fn = function($__dollar____unused) use ($plusWriterT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $plusWriterT1;
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
$GLOBALS['Control_Monad_Writer_Trans_alternativeWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_alternativeWriterT';

// Control_Monad_Writer_Trans_monadPlusWriterT
function Control_Monad_Writer_Trans_monadPlusWriterT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Writer_Trans_monadPlusWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$monadWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_monadWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadWriterT')))($dictMonoid);
$alternativeWriterT1 = (($GLOBALS['Control_Monad_Writer_Trans_alternativeWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_alternativeWriterT')))($dictMonoid);
    $__res = (function() use ($monadWriterT1, $alternativeWriterT1) {
  $__fn = function($dictMonadPlus) use ($monadWriterT1, $alternativeWriterT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$monadWriterT2 = ($monadWriterT1)((($dictMonadPlus)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$alternativeWriterT2 = ($alternativeWriterT1)((($dictMonadPlus)->Alternative1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_MonadPlus_MonadPlus__dollar__Dict'] ?? \Control\MonadPlus\phpurs_eval_thunk('Control_MonadPlus_MonadPlus__dollar__Dict')))((object)["Monad0" => (function() use ($monadWriterT2) {
  $__fn = function($__dollar____unused) use ($monadWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadWriterT2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() use ($alternativeWriterT2) {
  $__fn = function($__dollar____unused) use ($alternativeWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $alternativeWriterT2;
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
$GLOBALS['Control_Monad_Writer_Trans_monadPlusWriterT'] = __NAMESPACE__ . '\\Control_Monad_Writer_Trans_monadPlusWriterT';

