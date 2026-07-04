<?php

namespace Effect\Aff\Class;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Except.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.List.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Maybe.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.RWS.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.State.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Trans/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Effect.Aff/index.php';
require_once __DIR__ . '/../Effect.Aff.Class/index.php';
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
      case 'Effect_Aff_Class_monadAffAff': $v = (($GLOBALS['Effect_Aff_Class_MonadAff__dollar__Dict'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_MonadAff__dollar__Dict')))((object)["liftAff" => (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "MonadEffect0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_monadEffectAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadEffectAff'));
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


// Effect_Aff_Class_compose
function Effect_Aff_Class_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_compose';
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
$GLOBALS['Effect_Aff_Class_compose'] = __NAMESPACE__ . '\\Effect_Aff_Class_compose';

// Effect_Aff_Class_lift
function Effect_Aff_Class_lift($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_lift';
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
$GLOBALS['Effect_Aff_Class_lift'] = __NAMESPACE__ . '\\Effect_Aff_Class_lift';

// Effect_Aff_Class_lift1
function Effect_Aff_Class_lift1($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_lift1';
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
    $__res = (($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT')))(($bind)($m, (function() use ($pure) {
  $__fn = function($a) use ($pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)((($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')))($a));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_lift1'] = __NAMESPACE__ . '\\Effect_Aff_Class_lift1';

// Effect_Aff_Class_lift2
function Effect_Aff_Class_lift2($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_lift2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_List_Trans_fromEffect'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_fromEffect')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_lift2'] = __NAMESPACE__ . '\\Effect_Aff_Class_lift2';

// Effect_Aff_Class_lift3
function Effect_Aff_Class_lift3($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_lift3';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose')))(($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT')), (($GLOBALS['Control_Monad_liftM1'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_liftM1')))($dictMonad, ($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just'))));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_lift3'] = __NAMESPACE__ . '\\Effect_Aff_Class_lift3';

// Effect_Aff_Class_lift4
function Effect_Aff_Class_lift4($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_lift4';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Reader_Trans_compose'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_compose')))(($GLOBALS['Control_Monad_Reader_Trans_ReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_ReaderT')), ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_lift4'] = __NAMESPACE__ . '\\Effect_Aff_Class_lift4';

// Effect_Aff_Class_lift5
function Effect_Aff_Class_lift5($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_lift5';
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
$GLOBALS['Effect_Aff_Class_lift5'] = __NAMESPACE__ . '\\Effect_Aff_Class_lift5';

// Effect_Aff_Class_MonadAff$Dict
function Effect_Aff_Class_MonadAff__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_MonadAff__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_MonadAff__dollar__Dict'] = __NAMESPACE__ . '\\Effect_Aff_Class_MonadAff__dollar__Dict';


// Effect_Aff_Class_liftAff
function Effect_Aff_Class_liftAff($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_liftAff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->liftAff;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_liftAff'] = __NAMESPACE__ . '\\Effect_Aff_Class_liftAff';

// Effect_Aff_Class_monadAffContT
function Effect_Aff_Class_monadAffContT($dictMonadAff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_monadAffContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadEffectContT = (($GLOBALS['Control_Monad_Cont_Trans_monadEffectContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_monadEffectContT')))($MonadEffect0);
    $__res = (($GLOBALS['Effect_Aff_Class_MonadAff__dollar__Dict'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_MonadAff__dollar__Dict')))((object)["liftAff" => (($GLOBALS['Effect_Aff_Class_compose'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_compose')))((($GLOBALS['Effect_Aff_Class_lift'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_lift')))((($MonadEffect0)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')))), (($GLOBALS['Effect_Aff_Class_liftAff'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_liftAff')))($dictMonadAff)), "MonadEffect0" => (function() use ($monadEffectContT) {
  $__fn = function($__dollar____unused) use ($monadEffectContT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadEffectContT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_monadAffContT'] = __NAMESPACE__ . '\\Effect_Aff_Class_monadAffContT';

// Effect_Aff_Class_monadAffExceptT
function Effect_Aff_Class_monadAffExceptT($dictMonadAff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_monadAffExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadEffectExceptT = (($GLOBALS['Control_Monad_Except_Trans_monadEffectExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_monadEffectExceptT')))($MonadEffect0);
    $__res = (($GLOBALS['Effect_Aff_Class_MonadAff__dollar__Dict'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_MonadAff__dollar__Dict')))((object)["liftAff" => (($GLOBALS['Effect_Aff_Class_compose'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_compose')))((($GLOBALS['Effect_Aff_Class_lift1'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_lift1')))((($MonadEffect0)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')))), (($GLOBALS['Effect_Aff_Class_liftAff'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_liftAff')))($dictMonadAff)), "MonadEffect0" => (function() use ($monadEffectExceptT) {
  $__fn = function($__dollar____unused) use ($monadEffectExceptT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadEffectExceptT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_monadAffExceptT'] = __NAMESPACE__ . '\\Effect_Aff_Class_monadAffExceptT';

// Effect_Aff_Class_monadAffListT
function Effect_Aff_Class_monadAffListT($dictMonadAff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_monadAffListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadEffectListT = (($GLOBALS['Control_Monad_List_Trans_monadEffectListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_monadEffectListT')))($MonadEffect0);
    $__res = (($GLOBALS['Effect_Aff_Class_MonadAff__dollar__Dict'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_MonadAff__dollar__Dict')))((object)["liftAff" => (($GLOBALS['Effect_Aff_Class_compose'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_compose')))((($GLOBALS['Effect_Aff_Class_lift2'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_lift2')))((($MonadEffect0)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')))), (($GLOBALS['Effect_Aff_Class_liftAff'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_liftAff')))($dictMonadAff)), "MonadEffect0" => (function() use ($monadEffectListT) {
  $__fn = function($__dollar____unused) use ($monadEffectListT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadEffectListT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_monadAffListT'] = __NAMESPACE__ . '\\Effect_Aff_Class_monadAffListT';

// Effect_Aff_Class_monadAffMaybe
function Effect_Aff_Class_monadAffMaybe($dictMonadAff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_monadAffMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadEffectMaybe = (($GLOBALS['Control_Monad_Maybe_Trans_monadEffectMaybe'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadEffectMaybe')))($MonadEffect0);
    $__res = (($GLOBALS['Effect_Aff_Class_MonadAff__dollar__Dict'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_MonadAff__dollar__Dict')))((object)["liftAff" => (($GLOBALS['Effect_Aff_Class_compose'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_compose')))((($GLOBALS['Effect_Aff_Class_lift3'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_lift3')))((($MonadEffect0)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')))), (($GLOBALS['Effect_Aff_Class_liftAff'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_liftAff')))($dictMonadAff)), "MonadEffect0" => (function() use ($monadEffectMaybe) {
  $__fn = function($__dollar____unused) use ($monadEffectMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadEffectMaybe;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_monadAffMaybe'] = __NAMESPACE__ . '\\Effect_Aff_Class_monadAffMaybe';

// Effect_Aff_Class_monadAffRWS
function Effect_Aff_Class_monadAffRWS($dictMonadAff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_monadAffRWS';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$Monad0 = (($MonadEffect0)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$liftAff1 = (($GLOBALS['Effect_Aff_Class_liftAff'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_liftAff')))($dictMonadAff);
    $__res = (function() use (&$MonadEffect0, &$Monad0, $liftAff1) {
  $__fn = function($dictMonoid) use (&$MonadEffect0, &$Monad0, $liftAff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$monadEffectRWS = (($GLOBALS['Control_Monad_RWS_Trans_monadEffectRWS'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_monadEffectRWS')))($dictMonoid, $MonadEffect0);
    $__res = (($GLOBALS['Effect_Aff_Class_MonadAff__dollar__Dict'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_MonadAff__dollar__Dict')))((object)["liftAff" => (($GLOBALS['Effect_Aff_Class_compose'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_compose')))((($GLOBALS['Control_Monad_Trans_Class_lift'] ?? \Control\Monad\Trans\Class\phpurs_eval_thunk('Control_Monad_Trans_Class_lift')))((($GLOBALS['Control_Monad_RWS_Trans_monadTransRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_monadTransRWST')))($dictMonoid), $Monad0), $liftAff1), "MonadEffect0" => (function() use ($monadEffectRWS) {
  $__fn = function($__dollar____unused) use ($monadEffectRWS, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadEffectRWS;
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
$GLOBALS['Effect_Aff_Class_monadAffRWS'] = __NAMESPACE__ . '\\Effect_Aff_Class_monadAffRWS';

// Effect_Aff_Class_monadAffReader
function Effect_Aff_Class_monadAffReader($dictMonadAff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_monadAffReader';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadEffectReader = (($GLOBALS['Control_Monad_Reader_Trans_monadEffectReader'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_monadEffectReader')))($MonadEffect0);
    $__res = (($GLOBALS['Effect_Aff_Class_MonadAff__dollar__Dict'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_MonadAff__dollar__Dict')))((object)["liftAff" => (($GLOBALS['Effect_Aff_Class_compose'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_compose')))((($GLOBALS['Effect_Aff_Class_lift4'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_lift4')))((($MonadEffect0)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')))), (($GLOBALS['Effect_Aff_Class_liftAff'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_liftAff')))($dictMonadAff)), "MonadEffect0" => (function() use ($monadEffectReader) {
  $__fn = function($__dollar____unused) use ($monadEffectReader, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadEffectReader;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_monadAffReader'] = __NAMESPACE__ . '\\Effect_Aff_Class_monadAffReader';

// Effect_Aff_Class_monadAffState
function Effect_Aff_Class_monadAffState($dictMonadAff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_monadAffState';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$monadEffectState = (($GLOBALS['Control_Monad_State_Trans_monadEffectState'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadEffectState')))($MonadEffect0);
    $__res = (($GLOBALS['Effect_Aff_Class_MonadAff__dollar__Dict'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_MonadAff__dollar__Dict')))((object)["liftAff" => (($GLOBALS['Effect_Aff_Class_compose'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_compose')))((($GLOBALS['Effect_Aff_Class_lift5'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_lift5')))((($MonadEffect0)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')))), (($GLOBALS['Effect_Aff_Class_liftAff'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_liftAff')))($dictMonadAff)), "MonadEffect0" => (function() use ($monadEffectState) {
  $__fn = function($__dollar____unused) use ($monadEffectState, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadEffectState;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_monadAffState'] = __NAMESPACE__ . '\\Effect_Aff_Class_monadAffState';

// Effect_Aff_Class_monadAffWriter
function Effect_Aff_Class_monadAffWriter($dictMonadAff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_monadAffWriter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$Monad0 = (($MonadEffect0)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$liftAff1 = (($GLOBALS['Effect_Aff_Class_liftAff'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_liftAff')))($dictMonadAff);
    $__res = (function() use (&$MonadEffect0, &$Monad0, $liftAff1) {
  $__fn = function($dictMonoid) use (&$MonadEffect0, &$Monad0, $liftAff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$monadEffectWriter = (($GLOBALS['Control_Monad_Writer_Trans_monadEffectWriter'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadEffectWriter')))($dictMonoid, $MonadEffect0);
    $__res = (($GLOBALS['Effect_Aff_Class_MonadAff__dollar__Dict'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_MonadAff__dollar__Dict')))((object)["liftAff" => (($GLOBALS['Effect_Aff_Class_compose'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_compose')))((($GLOBALS['Control_Monad_Trans_Class_lift'] ?? \Control\Monad\Trans\Class\phpurs_eval_thunk('Control_Monad_Trans_Class_lift')))((($GLOBALS['Control_Monad_Writer_Trans_monadTransWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadTransWriterT')))($dictMonoid), $Monad0), $liftAff1), "MonadEffect0" => (function() use ($monadEffectWriter) {
  $__fn = function($__dollar____unused) use ($monadEffectWriter, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $monadEffectWriter;
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
$GLOBALS['Effect_Aff_Class_monadAffWriter'] = __NAMESPACE__ . '\\Effect_Aff_Class_monadAffWriter';

