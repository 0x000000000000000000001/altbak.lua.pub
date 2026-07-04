<?php

namespace Control\Monad\Error\Class;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Exception/index.php';
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
      case 'Control_Monad_Error_Class_monadThrowMaybe': $v = (($GLOBALS['Control_Monad_Error_Class_MonadThrow__dollar__Dict'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_MonadThrow__dollar__Dict')))((object)["throwError" => (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'))), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Maybe_monadMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_monadMaybe'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Control_Monad_Error_Class_monadThrowEither': $v = (($GLOBALS['Control_Monad_Error_Class_MonadThrow__dollar__Dict'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_MonadThrow__dollar__Dict')))((object)["throwError" => ($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Either_monadEither'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_monadEither'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Control_Monad_Error_Class_monadThrowEffect': $v = (($GLOBALS['Control_Monad_Error_Class_MonadThrow__dollar__Dict'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_MonadThrow__dollar__Dict')))((object)["throwError" => ($GLOBALS['Effect_Exception_throwException'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_throwException')), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_monadEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monadEffect'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Control_Monad_Error_Class_monadErrorMaybe': $v = (($GLOBALS['Control_Monad_Error_Class_MonadError__dollar__Dict'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_MonadError__dollar__Dict')))((object)["catchError" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
$f = $__case_1;
return ($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')));
break;
case "Just":
$a = ($__case_0)->v0;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($a);
break;
default:
throw new \Exception("Pattern match failure");
break;
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
})(), "MonadThrow0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Control_Monad_Error_Class_monadThrowMaybe'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_monadThrowMaybe'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Control_Monad_Error_Class_monadErrorEither': $v = (($GLOBALS['Control_Monad_Error_Class_MonadError__dollar__Dict'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_MonadError__dollar__Dict')))((object)["catchError" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_0)->tag) {
case "Left":
$e = ($__case_0)->v0;
$h = $__case_1;
return ($h)($e);
break;
case "Right":
$x = ($__case_0)->v0;
return (($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')))($x);
break;
default:
throw new \Exception("Pattern match failure");
break;
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
})(), "MonadThrow0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Control_Monad_Error_Class_monadThrowEither'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_monadThrowEither'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Control_Monad_Error_Class_monadErrorEffect': $v = (($GLOBALS['Control_Monad_Error_Class_MonadError__dollar__Dict'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_MonadError__dollar__Dict')))((object)["catchError" => (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($GLOBALS['Effect_Exception_catchException'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_catchException'))), "MonadThrow0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Control_Monad_Error_Class_monadThrowEffect'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_monadThrowEffect'));
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


// Control_Monad_Error_Class_compose
function Control_Monad_Error_Class_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Error_Class_compose';
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
$GLOBALS['Control_Monad_Error_Class_compose'] = __NAMESPACE__ . '\\Control_Monad_Error_Class_compose';

// Control_Monad_Error_Class_discard
function Control_Monad_Error_Class_discard($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Error_Class_discard';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))($dictBind);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_discard'] = __NAMESPACE__ . '\\Control_Monad_Error_Class_discard';

// Control_Monad_Error_Class_MonadThrow$Dict
function Control_Monad_Error_Class_MonadThrow__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Error_Class_MonadThrow__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_MonadThrow__dollar__Dict'] = __NAMESPACE__ . '\\Control_Monad_Error_Class_MonadThrow__dollar__Dict';

// Control_Monad_Error_Class_MonadError$Dict
function Control_Monad_Error_Class_MonadError__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Error_Class_MonadError__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_MonadError__dollar__Dict'] = __NAMESPACE__ . '\\Control_Monad_Error_Class_MonadError__dollar__Dict';

// Control_Monad_Error_Class_throwError
function Control_Monad_Error_Class_throwError($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Error_Class_throwError';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->throwError;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_throwError'] = __NAMESPACE__ . '\\Control_Monad_Error_Class_throwError';







// Control_Monad_Error_Class_liftMaybe
function Control_Monad_Error_Class_liftMaybe($dictMonadThrow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Error_Class_liftMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$throwError1 = (($GLOBALS['Control_Monad_Error_Class_throwError'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_throwError')))($dictMonadThrow);
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((((($dictMonadThrow)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($throwError1, $pure) {
  $__fn = function($error) use ($throwError1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))(($throwError1)($error), $pure);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_liftMaybe'] = __NAMESPACE__ . '\\Control_Monad_Error_Class_liftMaybe';

// Control_Monad_Error_Class_liftEither
function Control_Monad_Error_Class_liftEither($dictMonadThrow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Error_Class_liftEither';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either')))((($GLOBALS['Control_Monad_Error_Class_throwError'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_throwError')))($dictMonadThrow), (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((((($dictMonadThrow)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')))));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_liftEither'] = __NAMESPACE__ . '\\Control_Monad_Error_Class_liftEither';

// Control_Monad_Error_Class_catchError
function Control_Monad_Error_Class_catchError($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Error_Class_catchError';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->catchError;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_catchError'] = __NAMESPACE__ . '\\Control_Monad_Error_Class_catchError';

// Control_Monad_Error_Class_catchJust
function Control_Monad_Error_Class_catchJust($dictMonadError) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Error_Class_catchJust';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$throwError1 = (($GLOBALS['Control_Monad_Error_Class_throwError'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_throwError')))((($dictMonadError)->MonadThrow0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$catchError1 = (($GLOBALS['Control_Monad_Error_Class_catchError'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_catchError')))($dictMonadError);
    $__res = (function() use ($throwError1, $catchError1) {
  $__fn = function($p, $act = null, $handler = null) use ($throwError1, $catchError1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($handler) use ($p, $act, &$__fn) { return $__fn($p, $act, $handler); };
    if ($__num === 1) return function($act, $handler = null) use ($p, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($p, $act, $handler);
      if ($__num2 === 1) return function($handler) use ($p, $act, &$__fn) { return $__fn($p, $act, $handler); };
      return phpurs_curry_fallback($__fn, [$p], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$handle = (function() use ($p, $throwError1, $handler) {
  $__body = function($e) use ($p, $throwError1, $handler) {
    $v = ($p)($e);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nothing":
return ($throwError1)($e);
break;
case "Just":
$b = ($__case_0)->v0;
return ($handler)($b);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($e) use ($p, $throwError1, $handler, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($e);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($catchError1)($act, $handle);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_catchJust'] = __NAMESPACE__ . '\\Control_Monad_Error_Class_catchJust';

// Control_Monad_Error_Class_try
function Control_Monad_Error_Class_try($dictMonadError) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Error_Class_try';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$catchError1 = (($GLOBALS['Control_Monad_Error_Class_catchError'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_catchError')))($dictMonadError);
$Monad0 = (((($dictMonadError)->MonadThrow0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((((($Monad0)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($Monad0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($catchError1, $map, $pure) {
  $__fn = function($a) use ($catchError1, $map, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($catchError1)(($map)(($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')), $a), (($GLOBALS['Control_Monad_Error_Class_compose'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_compose')))($pure, ($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_try'] = __NAMESPACE__ . '\\Control_Monad_Error_Class_try';

// Control_Monad_Error_Class_withResource
function Control_Monad_Error_Class_withResource($dictMonadError) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Error_Class_withResource';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$MonadThrow0 = (($dictMonadError)->MonadThrow0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$Monad0 = (($MonadThrow0)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$Bind1 = (($Monad0)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))($Bind1);
$try1 = (($GLOBALS['Control_Monad_Error_Class_try'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_try')))($dictMonadError);
$discard1 = (($GLOBALS['Control_Monad_Error_Class_discard'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_discard')))($Bind1);
$throwError1 = (($GLOBALS['Control_Monad_Error_Class_throwError'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_throwError')))($MonadThrow0);
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($Monad0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($bind, $try1, $discard1, $throwError1, $pure) {
  $__fn = function($acquire, $release = null, $kleisli = null) use ($bind, $try1, $discard1, $throwError1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($kleisli) use ($acquire, $release, &$__fn) { return $__fn($acquire, $release, $kleisli); };
    if ($__num === 1) return function($release, $kleisli = null) use ($acquire, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($acquire, $release, $kleisli);
      if ($__num2 === 1) return function($kleisli) use ($acquire, $release, &$__fn) { return $__fn($acquire, $release, $kleisli); };
      return phpurs_curry_fallback($__fn, [$acquire], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($bind)($acquire, (function() use ($bind, $try1, $kleisli, $discard1, $release, $throwError1, $pure) {
  $__fn = function($resource) use ($bind, $try1, $kleisli, $discard1, $release, $throwError1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($try1)(($kleisli)($resource)), (function() use ($discard1, $release, $resource, $throwError1, $pure) {
  $__fn = function($result) use ($discard1, $release, $resource, $throwError1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($discard1)(($release)($resource), (function() use ($throwError1, $pure, $result) {
  $__fn = function($__dollar____unused) use ($throwError1, $pure, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either')))($throwError1, $pure, $result);
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
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_withResource'] = __NAMESPACE__ . '\\Control_Monad_Error_Class_withResource';

