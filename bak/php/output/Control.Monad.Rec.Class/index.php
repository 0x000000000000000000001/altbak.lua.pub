<?php

namespace Control\Monad\Rec\Class;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Ref/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
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
      case 'Control_Monad_Rec_Class_bind': $v = ($GLOBALS['Effect_bindE'] ?? \Effect\phpurs_eval_thunk('Effect_bindE')); break;
      case 'Control_Monad_Rec_Class_bindFlipped': $v = (($GLOBALS['Control_Bind_bindFlipped'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bindFlipped')))(($GLOBALS['Effect_bindEffect'] ?? \Effect\phpurs_eval_thunk('Effect_bindEffect'))); break;
      case 'Control_Monad_Rec_Class_discard': $v = ((function() {
  $__fn = function($dictBind) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))($dictBind);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($GLOBALS['Effect_bindEffect'] ?? \Effect\phpurs_eval_thunk('Effect_bindEffect'))); break;
      case 'Control_Monad_Rec_Class_pure': $v = ($GLOBALS['Effect_pureE'] ?? \Effect\phpurs_eval_thunk('Effect_pureE')); break;
      case 'Control_Monad_Rec_Class_map': $v = (($GLOBALS['Control_Applicative_liftA1'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_liftA1')))(($GLOBALS['Effect_applicativeEffect'] ?? \Effect\phpurs_eval_thunk('Effect_applicativeEffect'))); break;
      case 'Control_Monad_Rec_Class_monadRecMaybe': $v = (($GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_MonadRec__dollar__Dict')))((object)["tailRecM" => (function() {
  $__fn = function($f, $a0 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a0) use ($f, &$__fn) { return $__fn($f, $a0); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$g = (function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return (($GLOBALS['Control_Monad_Rec_Class_Done'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Done')))(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')));
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Loop"))) {
$a = (($__case_0)->v0)->v0;
return (($GLOBALS['Control_Monad_Rec_Class_Loop'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Loop')))(($f)($a));
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Done"))) {
$b = (($__case_0)->v0)->v0;
return (($GLOBALS['Control_Monad_Rec_Class_Done'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Done')))((($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($b));
} else {
throw new \Exception("Pattern match failure");
};
};
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
})();
    $__res = (($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRec')))($g, ($f)($a0));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() {
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
      case 'Control_Monad_Rec_Class_monadRecIdentity': $v = (($GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_MonadRec__dollar__Dict')))((object)["tailRecM" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$runIdentity = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return $x;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (($GLOBALS['Control_Monad_Rec_Class_compose'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_compose')))(($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity')), (($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRec')))((($GLOBALS['Control_Monad_Rec_Class_compose'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_compose')))($runIdentity, $f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Identity_monadIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_monadIdentity'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Control_Monad_Rec_Class_monadRecFunction': $v = (($GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_MonadRec__dollar__Dict')))((object)["tailRecM" => (function() {
  $__fn = function($f, $a0 = null, $e = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($e) use ($f, $a0, &$__fn) { return $__fn($f, $a0, $e); };
    if ($__num === 1) return function($a0, $e = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a0, $e);
      if ($__num2 === 1) return function($e) use ($f, $a0, &$__fn) { return $__fn($f, $a0, $e); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = (($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRec')))((function() use ($f, $e) {
  $__fn = function($a) use ($f, $e, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)($a, $e);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $a0);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Control_Monad_monadFn'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_monadFn'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Control_Monad_Rec_Class_monadRecEither': $v = (($GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_MonadRec__dollar__Dict')))((object)["tailRecM" => (function() {
  $__fn = function($f, $a0 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a0) use ($f, &$__fn) { return $__fn($f, $a0); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$g = (function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Left")) {
$e = ($__case_0)->v0;
return (($GLOBALS['Control_Monad_Rec_Class_Done'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Done')))((($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')))($e));
} else {
if (((($__case_0)->tag === "Right") && ((($__case_0)->v0)->tag === "Loop"))) {
$a = (($__case_0)->v0)->v0;
return (($GLOBALS['Control_Monad_Rec_Class_Loop'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Loop')))(($f)($a));
} else {
if (((($__case_0)->tag === "Right") && ((($__case_0)->v0)->tag === "Done"))) {
$b = (($__case_0)->v0)->v0;
return (($GLOBALS['Control_Monad_Rec_Class_Done'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Done')))((($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')))($b));
} else {
throw new \Exception("Pattern match failure");
};
};
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
})();
    $__res = (($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRec')))($g, ($f)($a0));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() {
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
      case 'Control_Monad_Rec_Class_monadRecEffect': $v = (($GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_MonadRec__dollar__Dict')))((object)["tailRecM" => (function() {
  $__fn = function($f, $a = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$fromDone = (($GLOBALS['Partial_Unsafe_unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafePartial')))((function() {
  $__fn = function($__dollar____unused, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ((function() use ($v) {
  $__body = function($__dollar____unused) use ($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Done":
$b = ($__case_0)->v0;
return $b;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($__dollar____unused) use ($v, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($__dollar____unused);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    $__res = (($GLOBALS['Control_Monad_Rec_Class_bind'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_bind')))((($GLOBALS['Control_Monad_Rec_Class_bindFlipped'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_bindFlipped')))(($GLOBALS['Effect_Ref_new'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_new')), ($f)($a)), (function() use ($f, $fromDone) {
  $__fn = function($r) use ($f, $fromDone, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Rec_Class_discard'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_discard')))((($GLOBALS['Effect_untilE'] ?? \Effect\phpurs_eval_thunk('Effect_untilE')))((($GLOBALS['Control_Monad_Rec_Class_bind'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_bind')))((($GLOBALS['Effect_Ref_read'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_read')))($r), (function() use ($f, $r) {
  $__body = function($v) use ($f, $r) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Loop":
$a__prime__ = ($__case_0)->v0;
return (($GLOBALS['Control_Monad_Rec_Class_bind'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_bind')))(($f)($a__prime__), (function() use ($r) {
  $__fn = function($e) use ($r, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Rec_Class_bind'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_bind')))((($GLOBALS['Effect_Ref_write'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_write')))($e, $r), (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Rec_Class_pure'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_pure')))(false);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
case "Done":
return (($GLOBALS['Control_Monad_Rec_Class_pure'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_pure')))(true);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $r, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), (function() use ($fromDone, $r) {
  $__fn = function($__dollar____unused) use ($fromDone, $r, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Rec_Class_map'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_map')))($fromDone, (($GLOBALS['Effect_Ref_read'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_read')))($r));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() {
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
      case 'Control_Monad_Rec_Class_functorStep': $v = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() {
  $__body = function($f, $m) {
    $__case_0 = $m;
    switch (($__case_0)->tag) {
case "Loop":
$v = ($__case_0)->v0;
return (($GLOBALS['Control_Monad_Rec_Class_Loop'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Loop')))($v);
break;
case "Done":
$v = ($__case_0)->v0;
return (($GLOBALS['Control_Monad_Rec_Class_Done'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Done')))(($f)($v));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $m = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($f, &$__fn) { return $__fn($f, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $m);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Control_Monad_Rec_Class_bifunctorStep': $v = (($GLOBALS['Data_Bifunctor_Bifunctor__dollar__Dict'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_Bifunctor__dollar__Dict')))((object)["bimap" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "Loop":
$f = $__case_0;
$a = ($__case_2)->v0;
return (($GLOBALS['Control_Monad_Rec_Class_Loop'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Loop')))(($f)($a));
break;
case "Done":
$g = $__case_1;
$b = ($__case_2)->v0;
return (($GLOBALS['Control_Monad_Rec_Class_Done'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Done')))(($g)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($v, $v1, $v2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
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


// Control_Monad_Rec_Class_compose
function Control_Monad_Rec_Class_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_compose';
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
$GLOBALS['Control_Monad_Rec_Class_compose'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_compose';






// Control_Monad_Rec_Class_Loop
function Control_Monad_Rec_Class_Loop($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_Loop';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Loop", $value0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_Loop'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_Loop';

// Control_Monad_Rec_Class_Done
function Control_Monad_Rec_Class_Done($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_Done';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Done", $value0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_Done'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_Done';

// Control_Monad_Rec_Class_MonadRec$Dict
function Control_Monad_Rec_Class_MonadRec__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_MonadRec__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_MonadRec__dollar__Dict';

// Control_Monad_Rec_Class_tailRecM
function Control_Monad_Rec_Class_tailRecM($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_tailRecM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->tailRecM;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_tailRecM'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_tailRecM';

// Control_Monad_Rec_Class_tailRecM2
function Control_Monad_Rec_Class_tailRecM2($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_tailRecM2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$tailRecM1 = (($GLOBALS['Control_Monad_Rec_Class_tailRecM'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRecM')))($dictMonadRec);
    $__res = (function() use ($tailRecM1) {
  $__fn = function($f, $a = null, $b = null) use ($tailRecM1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
    if ($__num === 1) return function($a, $b = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $b);
      if ($__num2 === 1) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($tailRecM1)((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)(($o)->a, ($o)->b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b]);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_tailRecM2'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_tailRecM2';

// Control_Monad_Rec_Class_tailRecM3
function Control_Monad_Rec_Class_tailRecM3($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_tailRecM3';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$tailRecM1 = (($GLOBALS['Control_Monad_Rec_Class_tailRecM'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRecM')))($dictMonadRec);
    $__res = (function() use ($tailRecM1) {
  $__fn = function($f, $a = null, $b = null, $c = null) use ($tailRecM1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($c) use ($f, $a, $b, &$__fn) { return $__fn($f, $a, $b, $c); };
    if ($__num === 2) return function($b, $c = null) use ($f, $a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $b, $c);
      if ($__num2 === 1) return function($c) use ($f, $a, $b, &$__fn) { return $__fn($f, $a, $b, $c); };
      return phpurs_curry_fallback($__fn, [$f, $a], 4);
    };
    if ($__num === 1) return function($a, $b = null, $c = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $a, $b, $c);
      if ($__num2 === 2) return function($c) use ($f, $a, $b, &$__fn) { return $__fn($f, $a, $b, $c); };
      if ($__num2 === 1) return function($b, $c = null) use ($f, $a, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $a, $b, $c);
        if ($__num3 === 1) return function($c) use ($f, $a, $b, &$__fn) { return $__fn($f, $a, $b, $c); };
        return phpurs_curry_fallback($__fn, [$f, $a], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = ($tailRecM1)((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)(($o)->a, ($o)->b, ($o)->c);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b, "c" => $c]);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_tailRecM3'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_tailRecM3';

// Control_Monad_Rec_Class_untilJust
function Control_Monad_Rec_Class_untilJust($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_untilJust';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$tailRecM1 = (($GLOBALS['Control_Monad_Rec_Class_tailRecM'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRecM')))($dictMonadRec);
$mapFlipped = (($GLOBALS['Data_Functor_mapFlipped'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_mapFlipped')))((((((((($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($tailRecM1, $mapFlipped) {
  $__fn = function($m) use ($tailRecM1, $mapFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($tailRecM1)((function() use ($mapFlipped, $m) {
  $__fn = function($v) use ($mapFlipped, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($mapFlipped)($m, (function() {
  $__body = function($v1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
return (($GLOBALS['Control_Monad_Rec_Class_Loop'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Loop')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')));
break;
case "Just":
$x = ($__case_0)->v0;
return (($GLOBALS['Control_Monad_Rec_Class_Done'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Done')))($x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($__body, &$__fn) {
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
})(), ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_untilJust'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_untilJust';

// Control_Monad_Rec_Class_whileJust
function Control_Monad_Rec_Class_whileJust($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_whileJust';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
    $__res = (function() use ($append, $mempty) {
  $__fn = function($dictMonadRec) use ($append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$tailRecM1 = (($GLOBALS['Control_Monad_Rec_Class_tailRecM'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRecM')))($dictMonadRec);
$mapFlipped = (($GLOBALS['Data_Functor_mapFlipped'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_mapFlipped')))((((((((($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($tailRecM1, $mapFlipped, $append, $mempty) {
  $__fn = function($m) use ($tailRecM1, $mapFlipped, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($tailRecM1)((function() use ($mapFlipped, $m, $append) {
  $__fn = function($v) use ($mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($mapFlipped)($m, (function() use ($v, $append) {
  $__body = function($v1) use ($v, $append) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
return (($GLOBALS['Control_Monad_Rec_Class_Done'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Done')))($v);
break;
case "Just":
$x = ($__case_0)->v0;
return (($GLOBALS['Control_Monad_Rec_Class_Loop'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Loop')))(($append)($v, $x));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($v, $append, $__body, &$__fn) {
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
})(), $mempty);
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
$GLOBALS['Control_Monad_Rec_Class_whileJust'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_whileJust';

// Control_Monad_Rec_Class_tailRec
function Control_Monad_Rec_Class_tailRec($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_tailRec';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use (&$go, $f) {
  $__fn = function($v) use (&$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Loop":
$a = ($__case_0)->v0;
$__tco_tmp_0 = ($f)($a);
$v = $__tco_tmp_0;
continue 2;
break;
case "Done":
$b = ($__case_0)->v0;
return $b;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (($GLOBALS['Control_Monad_Rec_Class_compose'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_compose')))($go, $f);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_tailRec'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_tailRec';

// Control_Monad_Rec_Class_tailRec2
function Control_Monad_Rec_Class_tailRec2($f, $a = null, $b = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_tailRec2';
  if ($__num < 3) {
    if ($__num === 2) return function($b) use ($f, $a, $__fn) { return $__fn($f, $a, $b); };
    if ($__num === 1) return function($a, $b = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $b);
      if ($__num2 === 1) return function($b) use ($f, $a, $__fn) { return $__fn($f, $a, $b); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = (($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRec')))((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)(($o)->a, ($o)->b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b]);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_tailRec2'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_tailRec2';

// Control_Monad_Rec_Class_tailRec3
function Control_Monad_Rec_Class_tailRec3($f, $a = null, $b = null, $c = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_tailRec3';
  if ($__num < 4) {
    if ($__num === 3) return function($c) use ($f, $a, $b, $__fn) { return $__fn($f, $a, $b, $c); };
    if ($__num === 2) return function($b, $c = null) use ($f, $a, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $b, $c);
      if ($__num2 === 1) return function($c) use ($f, $a, $b, $__fn) { return $__fn($f, $a, $b, $c); };
      return phpurs_curry_fallback($__fn, [$f, $a], 4);
    };
    if ($__num === 1) return function($a, $b = null, $c = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $a, $b, $c);
      if ($__num2 === 2) return function($c) use ($f, $a, $b, $__fn) { return $__fn($f, $a, $b, $c); };
      if ($__num2 === 1) return function($b, $c = null) use ($f, $a, $__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $a, $b, $c);
        if ($__num3 === 1) return function($c) use ($f, $a, $b, $__fn) { return $__fn($f, $a, $b, $c); };
        return phpurs_curry_fallback($__fn, [$f, $a], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = (($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRec')))((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)(($o)->a, ($o)->b, ($o)->c);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b, "c" => $c]);
    return 4 < $__num ? $__res(...array_slice(func_get_args(), 4)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_tailRec3'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_tailRec3';






// Control_Monad_Rec_Class_loop3
function Control_Monad_Rec_Class_loop3($a, $b = null, $c = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_loop3';
  if ($__num < 3) {
    if ($__num === 2) return function($c) use ($a, $b, $__fn) { return $__fn($a, $b, $c); };
    if ($__num === 1) return function($b, $c = null) use ($a, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $b, $c);
      if ($__num2 === 1) return function($c) use ($a, $b, $__fn) { return $__fn($a, $b, $c); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = (($GLOBALS['Control_Monad_Rec_Class_Loop'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Loop')))((object)["a" => $a, "b" => $b, "c" => $c]);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_loop3'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_loop3';

// Control_Monad_Rec_Class_loop2
function Control_Monad_Rec_Class_loop2($a, $b = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_loop2';
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, $__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Control_Monad_Rec_Class_Loop'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Loop')))((object)["a" => $a, "b" => $b]);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_loop2'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_loop2';


// Control_Monad_Rec_Class_forever
function Control_Monad_Rec_Class_forever($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_forever';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$tailRecM1 = (($GLOBALS['Control_Monad_Rec_Class_tailRecM'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRecM')))($dictMonadRec);
$voidRight = (($GLOBALS['Data_Functor_voidRight'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_voidRight')))((((((((($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($tailRecM1, $voidRight) {
  $__fn = function($ma) use ($tailRecM1, $voidRight, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($tailRecM1)((function() use ($voidRight, $ma) {
  $__fn = function($u) use ($voidRight, $ma, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($voidRight)((($GLOBALS['Control_Monad_Rec_Class_Loop'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Loop')))($u), $ma);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_forever'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_forever';


