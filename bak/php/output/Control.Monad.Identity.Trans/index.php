<?php

namespace Control\Monad\Identity\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Identity.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
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
      case 'Control_Monad_Identity_Trans_newtypeIdentityT': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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
      case 'Control_Monad_Identity_Trans_monadTransIdentityT': $v = (($GLOBALS['Control_Monad_Trans_Class_MonadTrans__dollar__Dict'] ?? \Control\Monad\Trans\Class\phpurs_eval_thunk('Control_Monad_Trans_Class_MonadTrans__dollar__Dict')))((object)["lift" => (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Control_Monad_Identity_Trans_IdentityT'] ?? \Control\Monad\Identity\Trans\phpurs_eval_thunk('Control_Monad_Identity_Trans_IdentityT'));
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


// Control_Monad_Identity_Trans_compose
function Control_Monad_Identity_Trans_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_compose';
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
$GLOBALS['Control_Monad_Identity_Trans_compose'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_compose';

// Control_Monad_Identity_Trans_IdentityT
function Control_Monad_Identity_Trans_IdentityT($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_IdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_IdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_IdentityT';

// Control_Monad_Identity_Trans_monadSTIdentityT
function Control_Monad_Identity_Trans_monadSTIdentityT($dictMonadST) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_monadSTIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictMonadST;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_monadSTIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_monadSTIdentityT';

// Control_Monad_Identity_Trans_traversableIdentityT
function Control_Monad_Identity_Trans_traversableIdentityT($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_traversableIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictTraversable;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_traversableIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_traversableIdentityT';

// Control_Monad_Identity_Trans_runIdentityT
function Control_Monad_Identity_Trans_runIdentityT($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_runIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$ma = $__case_0;
return $ma;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_runIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_runIdentityT';

// Control_Monad_Identity_Trans_plusIdentityT
function Control_Monad_Identity_Trans_plusIdentityT($dictPlus) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_plusIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictPlus;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_plusIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_plusIdentityT';


// Control_Monad_Identity_Trans_monadWriterIdentityT
function Control_Monad_Identity_Trans_monadWriterIdentityT($dictMonadWriter) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_monadWriterIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictMonadWriter;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_monadWriterIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_monadWriterIdentityT';


// Control_Monad_Identity_Trans_monadThrowIdentityT
function Control_Monad_Identity_Trans_monadThrowIdentityT($dictMonadThrow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_monadThrowIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictMonadThrow;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_monadThrowIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_monadThrowIdentityT';

// Control_Monad_Identity_Trans_monadTellIdentityT
function Control_Monad_Identity_Trans_monadTellIdentityT($dictMonadTell) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_monadTellIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictMonadTell;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_monadTellIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_monadTellIdentityT';

// Control_Monad_Identity_Trans_monadStateIdentityT
function Control_Monad_Identity_Trans_monadStateIdentityT($dictMonadState) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_monadStateIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictMonadState;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_monadStateIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_monadStateIdentityT';

// Control_Monad_Identity_Trans_monadRecIdentityT
function Control_Monad_Identity_Trans_monadRecIdentityT($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_monadRecIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictMonadRec;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_monadRecIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_monadRecIdentityT';

// Control_Monad_Identity_Trans_monadReaderIdentityT
function Control_Monad_Identity_Trans_monadReaderIdentityT($dictMonadReader) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_monadReaderIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictMonadReader;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_monadReaderIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_monadReaderIdentityT';

// Control_Monad_Identity_Trans_monadPlusIdentityT
function Control_Monad_Identity_Trans_monadPlusIdentityT($dictMonadPlus) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_monadPlusIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictMonadPlus;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_monadPlusIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_monadPlusIdentityT';

// Control_Monad_Identity_Trans_monadIdentityT
function Control_Monad_Identity_Trans_monadIdentityT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_monadIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictMonad;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_monadIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_monadIdentityT';

// Control_Monad_Identity_Trans_monadErrorIdentityT
function Control_Monad_Identity_Trans_monadErrorIdentityT($dictMonadError) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_monadErrorIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictMonadError;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_monadErrorIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_monadErrorIdentityT';

// Control_Monad_Identity_Trans_monadEffectIdentityT
function Control_Monad_Identity_Trans_monadEffectIdentityT($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_monadEffectIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictMonadEffect;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_monadEffectIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_monadEffectIdentityT';

// Control_Monad_Identity_Trans_monadContIdentityT
function Control_Monad_Identity_Trans_monadContIdentityT($dictMonadCont) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_monadContIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictMonadCont;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_monadContIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_monadContIdentityT';

// Control_Monad_Identity_Trans_monadAskIdentityT
function Control_Monad_Identity_Trans_monadAskIdentityT($dictMonadAsk) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_monadAskIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictMonadAsk;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_monadAskIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_monadAskIdentityT';

// Control_Monad_Identity_Trans_mapIdentityT
function Control_Monad_Identity_Trans_mapIdentityT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_mapIdentityT';
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
return (($GLOBALS['Control_Monad_Identity_Trans_IdentityT'] ?? \Control\Monad\Identity\Trans\phpurs_eval_thunk('Control_Monad_Identity_Trans_IdentityT')))(($f1)($m));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_mapIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_mapIdentityT';

// Control_Monad_Identity_Trans_functorIdentityT
function Control_Monad_Identity_Trans_functorIdentityT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_functorIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictFunctor;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_functorIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_functorIdentityT';

// Control_Monad_Identity_Trans_foldableIdentityT
function Control_Monad_Identity_Trans_foldableIdentityT($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_foldableIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictFoldable;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_foldableIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_foldableIdentityT';

// Control_Monad_Identity_Trans_extendIdentityI
function Control_Monad_Identity_Trans_extendIdentityI($dictExtend) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_extendIdentityI';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$extend = (($GLOBALS['Control_Extend_extend'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_extend')))($dictExtend);
$functorIdentityT1 = (($GLOBALS['Control_Monad_Identity_Trans_functorIdentityT'] ?? \Control\Monad\Identity\Trans\phpurs_eval_thunk('Control_Monad_Identity_Trans_functorIdentityT')))((($dictExtend)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Extend_Extend__dollar__Dict'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_Extend__dollar__Dict')))((object)["extend" => (function() use ($extend) {
  $__body = function($f, $v) use ($extend) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (($GLOBALS['Control_Monad_Identity_Trans_IdentityT'] ?? \Control\Monad\Identity\Trans\phpurs_eval_thunk('Control_Monad_Identity_Trans_IdentityT')))(($extend)((($GLOBALS['Control_Monad_Identity_Trans_compose'] ?? \Control\Monad\Identity\Trans\phpurs_eval_thunk('Control_Monad_Identity_Trans_compose')))($f1, ($GLOBALS['Control_Monad_Identity_Trans_IdentityT'] ?? \Control\Monad\Identity\Trans\phpurs_eval_thunk('Control_Monad_Identity_Trans_IdentityT'))), $m));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($extend, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorIdentityT1) {
  $__fn = function($__dollar____unused) use ($functorIdentityT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorIdentityT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_extendIdentityI'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_extendIdentityI';

// Control_Monad_Identity_Trans_eqIdentityT
function Control_Monad_Identity_Trans_eqIdentityT($dictEq1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_eqIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq1 = (($GLOBALS['Data_Eq_eq1'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq1')))($dictEq1);
    $__res = (function() use ($eq1) {
  $__fn = function($dictEq) use ($eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq11 = ($eq1)($dictEq);
    $__res = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() use ($eq11) {
  $__body = function($x, $y) use ($eq11) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($eq11)($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($eq11, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_eqIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_eqIdentityT';

// Control_Monad_Identity_Trans_ordIdentityT
function Control_Monad_Identity_Trans_ordIdentityT($dictOrd1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_ordIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare1 = (($GLOBALS['Data_Ord_compare1'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare1')))($dictOrd1);
$eqIdentityT1 = (($GLOBALS['Control_Monad_Identity_Trans_eqIdentityT'] ?? \Control\Monad\Identity\Trans\phpurs_eval_thunk('Control_Monad_Identity_Trans_eqIdentityT')))((($dictOrd1)->Eq10)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($compare1, $eqIdentityT1) {
  $__fn = function($dictOrd) use ($compare1, $eqIdentityT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare11 = ($compare1)($dictOrd);
$eqIdentityT2 = ($eqIdentityT1)((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() use ($compare11) {
  $__body = function($x, $y) use ($compare11) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($compare11)($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($compare11, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqIdentityT2) {
  $__fn = function($__dollar____unused) use ($eqIdentityT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqIdentityT2;
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
$GLOBALS['Control_Monad_Identity_Trans_ordIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_ordIdentityT';

// Control_Monad_Identity_Trans_eq1IdentityT
function Control_Monad_Identity_Trans_eq1IdentityT($dictEq1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_eq1IdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eqIdentityT1 = (($GLOBALS['Control_Monad_Identity_Trans_eqIdentityT'] ?? \Control\Monad\Identity\Trans\phpurs_eval_thunk('Control_Monad_Identity_Trans_eqIdentityT')))($dictEq1);
    $__res = (($GLOBALS['Data_Eq_Eq1__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq1__dollar__Dict')))((object)["eq1" => (function() use ($eqIdentityT1) {
  $__fn = function($dictEq) use ($eqIdentityT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))(($eqIdentityT1)($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_eq1IdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_eq1IdentityT';

// Control_Monad_Identity_Trans_ord1IdentityT
function Control_Monad_Identity_Trans_ord1IdentityT($dictOrd1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_ord1IdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$ordIdentityT1 = (($GLOBALS['Control_Monad_Identity_Trans_ordIdentityT'] ?? \Control\Monad\Identity\Trans\phpurs_eval_thunk('Control_Monad_Identity_Trans_ordIdentityT')))($dictOrd1);
$eq1IdentityT1 = (($GLOBALS['Control_Monad_Identity_Trans_eq1IdentityT'] ?? \Control\Monad\Identity\Trans\phpurs_eval_thunk('Control_Monad_Identity_Trans_eq1IdentityT')))((($dictOrd1)->Eq10)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ord_Ord1__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord1__dollar__Dict')))((object)["compare1" => (function() use ($ordIdentityT1) {
  $__fn = function($dictOrd) use ($ordIdentityT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))(($ordIdentityT1)($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use ($eq1IdentityT1) {
  $__fn = function($__dollar____unused) use ($eq1IdentityT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eq1IdentityT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_ord1IdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_ord1IdentityT';

// Control_Monad_Identity_Trans_comonadIdentityT
function Control_Monad_Identity_Trans_comonadIdentityT($dictComonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_comonadIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$extendIdentityI1 = (($GLOBALS['Control_Monad_Identity_Trans_extendIdentityI'] ?? \Control\Monad\Identity\Trans\phpurs_eval_thunk('Control_Monad_Identity_Trans_extendIdentityI')))((($dictComonad)->Extend0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Comonad_Comonad__dollar__Dict'] ?? \Control\Comonad\phpurs_eval_thunk('Control_Comonad_Comonad__dollar__Dict')))((object)["extract" => (($GLOBALS['Control_Monad_Identity_Trans_compose'] ?? \Control\Monad\Identity\Trans\phpurs_eval_thunk('Control_Monad_Identity_Trans_compose')))((($GLOBALS['Control_Comonad_extract'] ?? \Control\Comonad\phpurs_eval_thunk('Control_Comonad_extract')))($dictComonad), ($GLOBALS['Control_Monad_Identity_Trans_runIdentityT'] ?? \Control\Monad\Identity\Trans\phpurs_eval_thunk('Control_Monad_Identity_Trans_runIdentityT'))), "Extend0" => (function() use ($extendIdentityI1) {
  $__fn = function($__dollar____unused) use ($extendIdentityI1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $extendIdentityI1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_comonadIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_comonadIdentityT';

// Control_Monad_Identity_Trans_bindIdentityT
function Control_Monad_Identity_Trans_bindIdentityT($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_bindIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictBind;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_bindIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_bindIdentityT';

// Control_Monad_Identity_Trans_applyIdentityT
function Control_Monad_Identity_Trans_applyIdentityT($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_applyIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictApply;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_applyIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_applyIdentityT';

// Control_Monad_Identity_Trans_applicativeIdentityT
function Control_Monad_Identity_Trans_applicativeIdentityT($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_applicativeIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictApplicative;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_applicativeIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_applicativeIdentityT';

// Control_Monad_Identity_Trans_alternativeIdentityT
function Control_Monad_Identity_Trans_alternativeIdentityT($dictAlternative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_alternativeIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictAlternative;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_alternativeIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_alternativeIdentityT';

// Control_Monad_Identity_Trans_altIdentityT
function Control_Monad_Identity_Trans_altIdentityT($dictAlt) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Identity_Trans_altIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictAlt;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Identity_Trans_altIdentityT'] = __NAMESPACE__ . '\\Control_Monad_Identity_Trans_altIdentityT';

