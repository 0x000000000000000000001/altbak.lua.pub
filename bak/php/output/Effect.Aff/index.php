<?php

namespace Effect\Aff;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Global/index.php';
require_once __DIR__ . '/../Control.Parallel/index.php';
require_once __DIR__ . '/../Control.Parallel.Class/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Aff/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Effect.Exception/index.php';
require_once __DIR__ . '/../Effect.Unsafe/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Unsafe.Coerce/index.php';

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
      case 'Effect_Aff_bind': $v = ($GLOBALS['Effect_bindE'] ?? \Effect\phpurs_eval_thunk('Effect_bindE')); break;
      case 'Effect_Aff_discard': $v = ((function() {
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
      case 'Effect_Aff_pure': $v = ($GLOBALS['Effect_pureE'] ?? \Effect\phpurs_eval_thunk('Effect_pureE')); break;
      case 'Effect_Aff_void': $v = (($GLOBALS['Data_Functor_void'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_void')))(($GLOBALS['Effect_functorEffect'] ?? \Effect\phpurs_eval_thunk('Effect_functorEffect'))); break;
      case 'Effect_Aff_map': $v = (($GLOBALS['Control_Applicative_liftA1'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_liftA1')))(($GLOBALS['Effect_applicativeEffect'] ?? \Effect\phpurs_eval_thunk('Effect_applicativeEffect'))); break;
      case 'Effect_Aff_pure1': $v = ($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')); break;
      case 'Effect_Aff_composeFlipped': $v = (($GLOBALS['Control_Semigroupoid_composeFlipped'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeFlipped')))(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Effect_Aff_suspendAff': $v = (($GLOBALS['Effect_Aff__fork'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__fork')))(false); break;
      case 'Effect_Aff_newtypeCanceler': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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
      case 'Effect_Aff_functorParAff': $v = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => ($GLOBALS['Effect_Aff__parAffMap'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__parAffMap'))]); break;
      case 'Effect_Aff_functorAff': $v = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => ($GLOBALS['Effect_Aff__map'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__map'))]); break;
      case 'Effect_Aff_map1': $v = ($GLOBALS['Effect_Aff__map'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__map')); break;
      case 'Effect_Aff_forkAff': $v = (($GLOBALS['Effect_Aff__fork'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__fork')))(true); break;
      case 'Effect_Aff_ffiUtil': $v = ($unsafeFromRight = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Right":
$a = ($__case_0)->v0;
return $a;
break;
case "Left":
return (($GLOBALS['Partial_Unsafe_unsafeCrashWith'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafeCrashWith')))("unsafeFromRight: Left");
break;
default:
throw new \Exception("Pattern match failure");
break;
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
$unsafeFromLeft = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Left":
$a = ($__case_0)->v0;
return $a;
break;
case "Right":
return (($GLOBALS['Partial_Unsafe_unsafeCrashWith'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafeCrashWith')))("unsafeFromLeft: Right");
break;
default:
throw new \Exception("Pattern match failure");
break;
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
$isLeft = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Left":
return true;
break;
case "Right":
return false;
break;
default:
throw new \Exception("Pattern match failure");
break;
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
return (($GLOBALS['Effect_Aff_FFIUtil'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_FFIUtil')))((object)["isLeft" => $isLeft, "fromLeft" => $unsafeFromLeft, "fromRight" => $unsafeFromRight, "left" => ($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')), "right" => ($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right'))]);)(); break;
      case 'Effect_Aff_launchAff_': $v = (($GLOBALS['Effect_Aff_compose'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_compose')))(($GLOBALS['Effect_Aff_void'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_void')), ($GLOBALS['Effect_Aff_launchAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_launchAff'))); break;
      case 'Effect_Aff_launchSuspendedAff': $v = ($GLOBALS['Effect_Aff_makeFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeFiber')); break;
      case 'Effect_Aff_applyParAff': $v = (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => ($GLOBALS['Effect_Aff__parAffApply'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__parAffApply')), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_functorParAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_functorParAff'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_lift2': $v = (($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2')))(($GLOBALS['Effect_Aff_applyParAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyParAff'))); break;
      case 'Effect_Aff_monadAff': $v = (($GLOBALS['Control_Monad_Monad__dollar__Dict'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_Monad__dollar__Dict')))((object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_applicativeAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applicativeAff'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_bindAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bindAff'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_bindAff': $v = (($GLOBALS['Control_Bind_Bind__dollar__Dict'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_Bind__dollar__Dict')))((object)["bind" => ($GLOBALS['Effect_Aff__bind'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__bind')), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_applyAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyAff'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_applicativeAff': $v = (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => ($GLOBALS['Effect_Aff__pure'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__pure')), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_applyAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyAff'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_applyAff': $v = (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => (($GLOBALS['Control_Monad_ap'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_ap')))(($GLOBALS['Effect_Aff_monadAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadAff'))), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_functorAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_functorAff'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_pure2': $v = ($GLOBALS['Effect_Aff__pure'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__pure')); break;
      case 'Effect_Aff_bind1': $v = ($GLOBALS['Effect_Aff__bind'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__bind')); break;
      case 'Effect_Aff_lift21': $v = (($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2')))(($GLOBALS['Effect_Aff_applyAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyAff'))); break;
      case 'Effect_Aff_apply': $v = (($GLOBALS['Control_Monad_ap'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_ap')))(($GLOBALS['Effect_Aff_monadAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadAff'))); break;
      case 'Effect_Aff_bindFlipped': $v = (($GLOBALS['Control_Bind_bindFlipped'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bindFlipped')))(($GLOBALS['Effect_Aff_bindAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bindAff'))); break;
      case 'Effect_Aff_lazyAff': $v = (($GLOBALS['Control_Lazy_Lazy__dollar__Dict'] ?? \Control\Lazy\phpurs_eval_thunk('Control_Lazy_Lazy__dollar__Dict')))((object)["defer" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Aff_bind1'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bind1')))((($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))), $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_parallelAff': $v = (($GLOBALS['Control_Parallel_Class_Parallel__dollar__Dict'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_Parallel__dollar__Dict')))((object)["parallel" => ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce')), "sequential" => ($GLOBALS['Effect_Aff__sequential'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__sequential')), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_applyAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyAff'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_applyParAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyParAff'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_parallel': $v = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce')); break;
      case 'Effect_Aff_applicativeParAff': $v = (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => (($GLOBALS['Effect_Aff_compose'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_compose')))(($GLOBALS['Effect_Aff_parallel'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_parallel')), ($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2'))), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_applyParAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyParAff'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_pure3': $v = (($GLOBALS['Effect_Aff_compose'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_compose')))(($GLOBALS['Effect_Aff_parallel'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_parallel')), ($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2'))); break;
      case 'Effect_Aff_parSequence_': $v = (($GLOBALS['Control_Parallel_parSequence_'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_parSequence_')))(($GLOBALS['Effect_Aff_parallelAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_parallelAff')), ($GLOBALS['Effect_Aff_applicativeParAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applicativeParAff')), ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'))); break;
      case 'Effect_Aff_semigroupCanceler': $v = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$c1 = $__case_0;
$c2 = $__case_1;
return (($GLOBALS['Effect_Aff_Canceler'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_Canceler')))((function() use ($c1, $c2) {
  $__fn = function($err) use ($c1, $c2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Aff_parSequence_'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_parSequence_')))([($c1)($err), ($c2)($err)]);
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
})()]); break;
      case 'Effect_Aff_monadEffectAff': $v = (($GLOBALS['Effect_Class_MonadEffect__dollar__Dict'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_MonadEffect__dollar__Dict')))((object)["liftEffect" => ($GLOBALS['Effect_Aff__liftEffect'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__liftEffect')), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_monadAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadAff'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_liftEffect': $v = ($GLOBALS['Effect_Aff__liftEffect'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__liftEffect')); break;
      case 'Effect_Aff_effectCanceler': $v = (($GLOBALS['Effect_Aff_compose'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_compose')))(($GLOBALS['Effect_Aff_Canceler'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_Canceler')), (($GLOBALS['Effect_Aff_compose'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_compose')))(($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')), ($GLOBALS['Effect_Aff_liftEffect'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_liftEffect')))); break;
      case 'Effect_Aff_functorFiber': $v = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() {
  $__fn = function($f, $t = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($f, &$__fn) { return $__fn($f, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Effect_Unsafe_unsafePerformEffect'] ?? \Effect\Unsafe\phpurs_eval_thunk('Effect_Unsafe_unsafePerformEffect')))((($GLOBALS['Effect_Aff_makeFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeFiber')))((($GLOBALS['Effect_Aff_map1'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_map1')))($f, (($GLOBALS['Effect_Aff_joinFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_joinFiber')))($t))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_applyFiber': $v = (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => (function() {
  $__fn = function($t1, $t2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t2) use ($t1, &$__fn) { return $__fn($t1, $t2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Effect_Unsafe_unsafePerformEffect'] ?? \Effect\Unsafe\phpurs_eval_thunk('Effect_Unsafe_unsafePerformEffect')))((($GLOBALS['Effect_Aff_makeFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeFiber')))((($GLOBALS['Effect_Aff_apply'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_apply')))((($GLOBALS['Effect_Aff_joinFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_joinFiber')))($t1), (($GLOBALS['Effect_Aff_joinFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_joinFiber')))($t2))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_functorFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_functorFiber'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_applicativeFiber': $v = (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Unsafe_unsafePerformEffect'] ?? \Effect\Unsafe\phpurs_eval_thunk('Effect_Unsafe_unsafePerformEffect')))((($GLOBALS['Effect_Aff_makeFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeFiber')))((($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2')))($a)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_applyFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyFiber'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_fiberCanceler': $v = (($GLOBALS['Effect_Aff_compose'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_compose')))(($GLOBALS['Effect_Aff_Canceler'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_Canceler')), (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($GLOBALS['Effect_Aff_killFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_killFiber')))); break;
      case 'Effect_Aff_monadSTAff': $v = (($GLOBALS['Control_Monad_ST_Class_MonadST__dollar__Dict'] ?? \Control\Monad\ST\Class\phpurs_eval_thunk('Control_Monad_ST_Class_MonadST__dollar__Dict')))((object)["liftST" => (($GLOBALS['Effect_Aff_composeFlipped'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_composeFlipped')))(($GLOBALS['Control_Monad_ST_Global_toEffect'] ?? \Control\Monad\ST\Global\phpurs_eval_thunk('Control_Monad_ST_Global_toEffect')), ($GLOBALS['Effect_Aff_liftEffect'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_liftEffect'))), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_monadAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadAff'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_monadThrowAff': $v = (($GLOBALS['Control_Monad_Error_Class_MonadThrow__dollar__Dict'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_MonadThrow__dollar__Dict')))((object)["throwError" => ($GLOBALS['Effect_Aff__throwError'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__throwError')), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_monadAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadAff'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_monadErrorAff': $v = (($GLOBALS['Control_Monad_Error_Class_MonadError__dollar__Dict'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_MonadError__dollar__Dict')))((object)["catchError" => ($GLOBALS['Effect_Aff__catchError'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__catchError')), "MonadThrow0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_monadThrowAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadThrowAff'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_try': $v = (($GLOBALS['Control_Monad_Error_Class_try'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_try')))(($GLOBALS['Effect_Aff_monadErrorAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadErrorAff'))); break;
      case 'Effect_Aff_catchError': $v = ($GLOBALS['Effect_Aff__catchError'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__catchError')); break;
      case 'Effect_Aff_attempt': $v = ($GLOBALS['Effect_Aff_try'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_try')); break;
      case 'Effect_Aff_monadRecAff': $v = (($GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_MonadRec__dollar__Dict')))((object)["tailRecM" => (function() {
  $__fn = function($k) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($k, &$go) {
  $__fn = function($a) use ($k, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
return (($GLOBALS['Effect_Aff_bind1'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bind1')))(($k)($a), (function() use (&$go) {
  $__body = function($res) use (&$go) {
    $__case_0 = $res;
    switch (($__case_0)->tag) {
case "Done":
$r = ($__case_0)->v0;
return (($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2')))($r);
break;
case "Loop":
$b = ($__case_0)->v0;
return ($go)($b);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($res) use (&$go, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($res);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_monadAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadAff'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_nonCanceler': $v = (($GLOBALS['Effect_Aff_Canceler'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_Canceler')))((($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))((($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))))); break;
      case 'Effect_Aff_monoidCanceler': $v = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => ($GLOBALS['Effect_Aff_nonCanceler'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_nonCanceler')), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_semigroupCanceler'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_semigroupCanceler'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_mempty': $v = ($GLOBALS['Effect_Aff_nonCanceler'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_nonCanceler')); break;
      case 'Effect_Aff_never': $v = (($GLOBALS['Effect_Aff_makeAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeAff')))((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Aff_pure'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure')))(($GLOBALS['Effect_Aff_mempty'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_mempty')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Effect_Aff_apathize': $v = (($GLOBALS['Effect_Aff_composeFlipped'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_composeFlipped')))(($GLOBALS['Effect_Aff_attempt'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_attempt')), (($GLOBALS['Effect_Aff_map1'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_map1')))((($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))))); break;
      case 'Effect_Aff_altParAff': $v = (($GLOBALS['Control_Alt_Alt__dollar__Dict'] ?? \Control\Alt\phpurs_eval_thunk('Control_Alt_Alt__dollar__Dict')))((object)["alt" => ($GLOBALS['Effect_Aff__parAffAlt'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__parAffAlt')), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_functorParAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_functorParAff'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_altAff': $v = (($GLOBALS['Control_Alt_Alt__dollar__Dict'] ?? \Control\Alt\phpurs_eval_thunk('Control_Alt_Alt__dollar__Dict')))((object)["alt" => (function() {
  $__fn = function($a1, $a2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Effect_Aff_catchError'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_catchError')))($a1, (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))($a2));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_functorAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_functorAff'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_plusAff': $v = (($GLOBALS['Control_Plus_Plus__dollar__Dict'] ?? \Control\Plus\phpurs_eval_thunk('Control_Plus_Plus__dollar__Dict')))((object)["empty" => (($GLOBALS['Effect_Aff__throwError'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__throwError')))((($GLOBALS['Effect_Exception_error'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_error')))("Always fails")), "Alt0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_altAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_altAff'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_plusParAff': $v = (($GLOBALS['Control_Plus_Plus__dollar__Dict'] ?? \Control\Plus\phpurs_eval_thunk('Control_Plus_Plus__dollar__Dict')))((object)["empty" => (($GLOBALS['Effect_Aff_parallel'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_parallel')))((($GLOBALS['Control_Monad_Error_Class_throwError'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_throwError')))(($GLOBALS['Effect_Aff_monadThrowAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadThrowAff')), (($GLOBALS['Effect_Exception_error'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_error')))("Always fails"))), "Alt0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_altParAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_altParAff'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Effect_Aff_alternativeParAff': $v = (($GLOBALS['Control_Alternative_Alternative__dollar__Dict'] ?? \Control\Alternative\phpurs_eval_thunk('Control_Alternative_Alternative__dollar__Dict')))((object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_applicativeParAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applicativeParAff'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Effect_Aff_plusParAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_plusParAff'));
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
if (!function_exists('phpurs_uncurry2')) {
function phpurs_uncurry2($fn) {
    return function($a, $b = null) use ($fn) {
        if (func_num_args() < 2) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry2($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b);
    };
}
function phpurs_uncurry3($fn) {
    return function($a, $b = null, $c = null) use ($fn) {
        if (func_num_args() < 3) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry3($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c);
    };
}
function phpurs_uncurry4($fn) {
    return function($a, $b = null, $c = null, $d = null) use ($fn) {
        if (func_num_args() < 4) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry4($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d);
    };
}
function phpurs_uncurry5($fn) {
    return function($a, $b = null, $c = null, $d = null, $e = null) use ($fn) {
        if (func_num_args() < 5) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry5($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d)($e);
    };
}
}





$Effect_Aff__pure = function($x) { return function() use(&$x) { return $x; }; };
$Effect_Aff__map = phpurs_uncurry2(function($f) { return function($aff) use(&$f) { return function() use(&$f, &$aff) { return $f($aff()); }; }; });
$Effect_Aff__bind = phpurs_uncurry2(function($aff) { return function($f) use(&$aff) { return function() use(&$aff, &$f) { return $f($aff())(); }; }; });
$Effect_Aff__liftEffect = function($eff) { return $eff; };
$Effect_Aff__makeFiber = function($util, $aff) { return function() use(&$aff) { $fiber = new \Fiber($aff); $fiber->start(); return (object)['run' => function() {}, 'join' => function($k) { return function() { return function(){}; }; }]; }; };
$Effect_Aff__fork = phpurs_uncurry2(function($immediate) { return function($aff) use(&$immediate) { return function() use(&$aff) { $fiber = new \Fiber($aff); \Revolt\EventLoop::queue(function() use(&$fiber) { $fiber->start(); }); return (object)['run' => function() {}, 'join' => function($k){ return function(){ return function(){}; }; }]; }; }; });
$Effect_Aff__delay = function($right, $ms) { return function() use(&$right, &$ms) { $fiber = \Fiber::getCurrent(); \Revolt\EventLoop::delay($ms / 1000, function() use(&$fiber, &$right) { if ($fiber) $fiber->resume(); }); if ($fiber) \Fiber::suspend(); return $right(null); }; };
$Effect_Aff__makeSupervisedFiber = $Effect_Aff__makeFiber;
$Effect_Aff__killAll = function($err, $sup, $cb) { return function() { return function(){}; }; };
$Effect_Aff_makeAff = function($k) { return function() use(&$k) { return $k(function($res){ return function(){}; })(); }; };
$Effect_Aff__throwError = function($err) { return function() use(&$err) { throw $err; }; };
$Effect_Aff__catchError = phpurs_uncurry2(function($aff) { return function($f) use(&$aff) { return function() use(&$aff, &$f) { try { return $aff(); } catch (\Throwable $e) { return $f($e)(); } }; }; });
$Effect_Aff_generalBracket = function($acq) { return function($cond) { return function($use) use(&$acq) { return function() use(&$acq, &$use) { $res = $acq(); return $use($res)(); }; }; }; };
$Effect_Aff__parAffMap = $Effect_Aff__map;
$Effect_Aff__parAffApply = phpurs_uncurry2(function($aff1) { return function($aff2) use(&$aff1) { return function() use(&$aff1, &$aff2) { return $aff1()($aff2()); }; }; });
$Effect_Aff__sequential = function($aff) { return $aff; };
$Effect_Aff__parAffAlt = phpurs_uncurry2(function($aff1) { return function($aff2) use(&$aff1) { return function() use(&$aff1, &$aff2) { try { return $aff1(); } catch (\Throwable $e) { return $aff2(); } }; }; });




// Effect_Aff_compose
function Effect_Aff_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_compose';
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
$GLOBALS['Effect_Aff_compose'] = __NAMESPACE__ . '\\Effect_Aff_compose';





// Effect_Aff_Fiber
function Effect_Aff_Fiber($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Fiber';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Fiber'] = __NAMESPACE__ . '\\Effect_Aff_Fiber';

// Effect_Aff_FFIUtil
function Effect_Aff_FFIUtil($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_FFIUtil';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_FFIUtil'] = __NAMESPACE__ . '\\Effect_Aff_FFIUtil';

// Effect_Aff_Canceler
function Effect_Aff_Canceler($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Canceler';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Canceler'] = __NAMESPACE__ . '\\Effect_Aff_Canceler';








// Effect_Aff_makeFiber
function Effect_Aff_makeFiber($aff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_makeFiber';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Effect_Aff__makeFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__makeFiber')), ($GLOBALS['Effect_Aff_ffiUtil'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_ffiUtil')), $aff);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_makeFiber'] = __NAMESPACE__ . '\\Effect_Aff_makeFiber';

// Effect_Aff_launchAff
function Effect_Aff_launchAff($aff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_launchAff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Aff_bind'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bind')))((($GLOBALS['Effect_Aff_makeFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeFiber')))($aff), (function() {
  $__fn = function($fiber) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $fiber;
$__case_res_0 = null;
if (true) {
$f = $__case_0;
$__case_res_0 = ($f)->run;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (($GLOBALS['Effect_Aff_discard'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_discard')))($__case_res_0, (function() use ($fiber) {
  $__fn = function($__dollar____unused) use ($fiber, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Aff_pure'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure')))($fiber);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_launchAff'] = __NAMESPACE__ . '\\Effect_Aff_launchAff';



// Effect_Aff_delay
function Effect_Aff_delay($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_delay';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Effect_Aff__delay'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__delay')), ($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')), $n);
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_delay'] = __NAMESPACE__ . '\\Effect_Aff_delay';

// Effect_Aff_bracket
function Effect_Aff_bracket($acquire, $completed = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_bracket';
  if ($__num < 2) {
    if ($__num === 1) return function($completed) use ($acquire, $__fn) { return $__fn($acquire, $completed); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Effect_Aff_generalBracket'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_generalBracket')))($acquire, (object)["killed" => (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))($completed), "failed" => (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))($completed), "completed" => (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))($completed)]);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Effect_Aff_bracket'] = __NAMESPACE__ . '\\Effect_Aff_bracket';



// Effect_Aff_semigroupParAff
function Effect_Aff_semigroupParAff($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_semigroupParAff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (($GLOBALS['Effect_Aff_lift2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_lift2')))((($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))($dictSemigroup))]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_semigroupParAff'] = __NAMESPACE__ . '\\Effect_Aff_semigroupParAff';










// Effect_Aff_cancelWith
function Effect_Aff_cancelWith($aff, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_cancelWith';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($aff, $__fn) { return $__fn($aff, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($aff, $v) {
    $__case_0 = $aff;
    $__case_1 = $v;
    if (true) {
$aff1 = $__case_0;
$cancel = $__case_1;
return (($GLOBALS['Effect_Aff_generalBracket'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_generalBracket')))((($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))), (object)["killed" => (function() use ($cancel) {
  $__fn = function($e, $v1 = null) use ($cancel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($e, &$__fn) { return $__fn($e, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($cancel)($e);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "failed" => (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2'))), "completed" => (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2')))], (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))($aff1));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($aff, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Effect_Aff_cancelWith'] = __NAMESPACE__ . '\\Effect_Aff_cancelWith';

// Effect_Aff_finally
function Effect_Aff_finally($fin, $a = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_finally';
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($fin, $__fn) { return $__fn($fin, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Effect_Aff_bracket'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bracket')))((($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))), (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))($fin), (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))($a));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Effect_Aff_finally'] = __NAMESPACE__ . '\\Effect_Aff_finally';

// Effect_Aff_invincible
function Effect_Aff_invincible($a) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_invincible';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Aff_bracket'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bracket')))($a, (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))((($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')))), ($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_invincible'] = __NAMESPACE__ . '\\Effect_Aff_invincible';







// Effect_Aff_monoidParAff
function Effect_Aff_monoidParAff($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_monoidParAff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$semigroupParAff1 = (($GLOBALS['Effect_Aff_semigroupParAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_semigroupParAff')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Effect_Aff_pure3'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure3')))((($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid)), "Semigroup0" => (function() use ($semigroupParAff1) {
  $__fn = function($__dollar____unused) use ($semigroupParAff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupParAff1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_monoidParAff'] = __NAMESPACE__ . '\\Effect_Aff_monoidParAff';


// Effect_Aff_semigroupAff
function Effect_Aff_semigroupAff($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_semigroupAff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (($GLOBALS['Effect_Aff_lift21'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_lift21')))((($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))($dictSemigroup))]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_semigroupAff'] = __NAMESPACE__ . '\\Effect_Aff_semigroupAff';




// Effect_Aff_joinFiber
function Effect_Aff_joinFiber($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_joinFiber';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$t = $__case_0;
return (($GLOBALS['Effect_Aff_makeAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeAff')))((function() use ($t) {
  $__fn = function($k) use ($t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Aff_map'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_map')))(($GLOBALS['Effect_Aff_effectCanceler'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_effectCanceler')), (($t)->join)($k));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_joinFiber'] = __NAMESPACE__ . '\\Effect_Aff_joinFiber';




// Effect_Aff_killFiber
function Effect_Aff_killFiber($e, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_killFiber';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($e, $__fn) { return $__fn($e, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($e, $v) {
    $__case_0 = $e;
    $__case_1 = $v;
    if (true) {
$e1 = $__case_0;
$t = $__case_1;
return (($GLOBALS['Effect_Aff_bind1'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bind1')))((($GLOBALS['Effect_Aff_liftEffect'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_liftEffect')))(($t)->isSuspended), (function() use ($t, $e1) {
  $__body = function($suspended) use ($t, $e1) {
    $__case_0 = $suspended;
    if (($__case_0 === true)) {
return (($GLOBALS['Effect_Aff_liftEffect'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_liftEffect')))((($GLOBALS['Effect_Aff_void'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_void')))((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($t)->kill, $e1, (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))((($GLOBALS['Effect_Aff_pure'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')))))));
} else {
if (true) {
return (($GLOBALS['Effect_Aff_makeAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeAff')))((function() use ($t, $e1) {
  $__fn = function($k) use ($t, $e1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Aff_map'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_map')))(($GLOBALS['Effect_Aff_effectCanceler'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_effectCanceler')), (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($t)->kill, $e1, $k));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($suspended) use ($t, $e1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($suspended);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($e, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Effect_Aff_killFiber'] = __NAMESPACE__ . '\\Effect_Aff_killFiber';


// Effect_Aff_supervise
function Effect_Aff_supervise($aff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_supervise';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$killError = (($GLOBALS['Effect_Exception_error'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_error')))("[Aff] Child fiber outlived parent");
$killAll = (function() {
  $__fn = function($err, $sup = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($sup) use ($err, &$__fn) { return $__fn($err, $sup); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Effect_Aff_makeAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeAff')))((function() use ($err, $sup) {
  $__fn = function($k) use ($err, $sup, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3')))(($GLOBALS['Effect_Aff__killAll'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__killAll')), $err, ($sup)->supervisor, ($k)((($GLOBALS['Effect_Aff_pure1'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure1')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$acquire = (($GLOBALS['Effect_Aff_bind'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bind')))((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2')))(($GLOBALS['Effect_Aff__makeSupervisedFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__makeSupervisedFiber')), ($GLOBALS['Effect_Aff_ffiUtil'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_ffiUtil')), $aff), (function() {
  $__fn = function($sup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = ($sup)->fiber;
$__case_res_0 = null;
if (true) {
$f = $__case_0;
$__case_res_0 = ($f)->run;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (($GLOBALS['Effect_Aff_discard'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_discard')))($__case_res_0, (function() use ($sup) {
  $__fn = function($__dollar____unused) use ($sup, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Aff_pure'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure')))($sup);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    $__res = (($GLOBALS['Effect_Aff_generalBracket'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_generalBracket')))((($GLOBALS['Effect_Aff_liftEffect'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_liftEffect')))($acquire), (object)["killed" => (function() use ($killAll) {
  $__fn = function($err, $sup = null) use ($killAll, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($sup) use ($err, &$__fn) { return $__fn($err, $sup); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Effect_Aff_parSequence_'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_parSequence_')))([(($GLOBALS['Effect_Aff_killFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_killFiber')))($err, ($sup)->fiber), ($killAll)($err, $sup)]);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "failed" => (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($killAll)($killError)), "completed" => (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($killAll)($killError))], (($GLOBALS['Effect_Aff_compose'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_compose')))(($GLOBALS['Effect_Aff_joinFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_joinFiber')), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v)->fiber;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_supervise'] = __NAMESPACE__ . '\\Effect_Aff_supervise';







// Effect_Aff_runAff
function Effect_Aff_runAff($k, $aff = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_runAff';
  if ($__num < 2) {
    if ($__num === 1) return function($aff) use ($k, $__fn) { return $__fn($k, $aff); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Effect_Aff_launchAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_launchAff')))((($GLOBALS['Effect_Aff_bindFlipped'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bindFlipped')))((($GLOBALS['Effect_Aff_compose'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_compose')))(($GLOBALS['Effect_Aff_liftEffect'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_liftEffect')), $k), (($GLOBALS['Effect_Aff_try'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_try')))($aff)));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Effect_Aff_runAff'] = __NAMESPACE__ . '\\Effect_Aff_runAff';

// Effect_Aff_runAff_
function Effect_Aff_runAff_($k, $aff = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_runAff_';
  if ($__num < 2) {
    if ($__num === 1) return function($aff) use ($k, $__fn) { return $__fn($k, $aff); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Effect_Aff_void'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_void')))((($GLOBALS['Effect_Aff_runAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_runAff')))($k, $aff));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Effect_Aff_runAff_'] = __NAMESPACE__ . '\\Effect_Aff_runAff_';

// Effect_Aff_runSuspendedAff
function Effect_Aff_runSuspendedAff($k, $aff = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_runSuspendedAff';
  if ($__num < 2) {
    if ($__num === 1) return function($aff) use ($k, $__fn) { return $__fn($k, $aff); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Effect_Aff_launchSuspendedAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_launchSuspendedAff')))((($GLOBALS['Effect_Aff_bindFlipped'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bindFlipped')))((($GLOBALS['Effect_Aff_compose'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_compose')))(($GLOBALS['Effect_Aff_liftEffect'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_liftEffect')), $k), (($GLOBALS['Effect_Aff_try'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_try')))($aff)));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Effect_Aff_runSuspendedAff'] = __NAMESPACE__ . '\\Effect_Aff_runSuspendedAff';


// Effect_Aff_monoidAff
function Effect_Aff_monoidAff($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_monoidAff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$semigroupAff1 = (($GLOBALS['Effect_Aff_semigroupAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_semigroupAff')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Effect_Aff_pure2'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure2')))((($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid)), "Semigroup0" => (function() use ($semigroupAff1) {
  $__fn = function($__dollar____unused) use ($semigroupAff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupAff1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_monoidAff'] = __NAMESPACE__ . '\\Effect_Aff_monoidAff';











