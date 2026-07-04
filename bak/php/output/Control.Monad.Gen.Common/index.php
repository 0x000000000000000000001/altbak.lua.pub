<?php

namespace Control\Monad\Gen\Common;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Common/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
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
      case 'Control_Monad_Gen_Common_max': $v = (($GLOBALS['Data_Ord_max'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_max')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Control_Monad_Gen_Common_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Control_Monad_Gen_Common_lessThan': $v = (($GLOBALS['Data_Ord_lessThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThan')))(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_Gen_Common_compose
function Control_Monad_Gen_Common_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_compose';
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
$GLOBALS['Control_Monad_Gen_Common_compose'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_compose';




// Control_Monad_Gen_Common_genTuple
function Control_Monad_Gen_Common_genTuple($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2')))($dictApply, ($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_Common_genTuple'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genTuple';

// Control_Monad_Gen_Common_genNonEmpty
function Control_Monad_Gen_Common_genNonEmpty($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$unfoldable = (($GLOBALS['Control_Monad_Gen_unfoldable'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_unfoldable')))($dictMonadRec);
    $__res = (function() use ($unfoldable) {
  $__fn = function($dictMonadGen) use ($unfoldable, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Apply0 = (((((($dictMonadGen)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($Apply0);
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($Apply0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$resize = (($GLOBALS['Control_Monad_Gen_Class_resize'] ?? \Control\Monad\Gen\Class\phpurs_eval_thunk('Control_Monad_Gen_Class_resize')))($dictMonadGen);
$unfoldable1 = ($unfoldable)($dictMonadGen);
    $__res = (function() use ($unfoldable1, $apply, $map, $resize) {
  $__fn = function($dictUnfoldable) use ($unfoldable1, $apply, $map, $resize, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$unfoldable2 = ($unfoldable1)($dictUnfoldable);
    $__res = (function() use ($apply, $map, $resize, $unfoldable2) {
  $__fn = function($gen) use ($apply, $map, $resize, $unfoldable2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($apply)(($map)(($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')), $gen), ($resize)((($GLOBALS['Control_Monad_Gen_Common_compose'] ?? \Control\Monad\Gen\Common\phpurs_eval_thunk('Control_Monad_Gen_Common_compose')))((($GLOBALS['Control_Monad_Gen_Common_max'] ?? \Control\Monad\Gen\Common\phpurs_eval_thunk('Control_Monad_Gen_Common_max')))(0), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Gen_Common_sub'] ?? \Control\Monad\Gen\Common\phpurs_eval_thunk('Control_Monad_Gen_Common_sub')))($v, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($unfoldable2)($gen)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
$GLOBALS['Control_Monad_Gen_Common_genNonEmpty'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genNonEmpty';

// Control_Monad_Gen_Common_genMaybe'
function Control_Monad_Gen_Common_genMaybe__prime__($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genMaybe__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadGen)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$Bind1 = (($Monad0)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))($Bind1);
$chooseFloat = (($GLOBALS['Control_Monad_Gen_Class_chooseFloat'] ?? \Control\Monad\Gen\Class\phpurs_eval_thunk('Control_Monad_Gen_Class_chooseFloat')))($dictMonadGen);
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($Bind1)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($Monad0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($bind, $chooseFloat, $map, $pure) {
  $__fn = function($bias, $gen = null) use ($bind, $chooseFloat, $map, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($gen) use ($bias, &$__fn) { return $__fn($bias, $gen); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)(($chooseFloat)(0.0, 1.0), (function() use ($bias, $map, $gen, $pure) {
  $__body = function($n) use ($bias, $map, $gen, $pure) {
    $__case_0 = (($GLOBALS['Control_Monad_Gen_Common_lessThan'] ?? \Control\Monad\Gen\Common\phpurs_eval_thunk('Control_Monad_Gen_Common_lessThan')))($n, $bias);
    if (($__case_0 === true)) {
return ($map)(($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), $gen);
} else {
if (true) {
return ($pure)(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($n) use ($bias, $map, $gen, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($n);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_Common_genMaybe__prime__'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genMaybe__prime__';

// Control_Monad_Gen_Common_genMaybe
function Control_Monad_Gen_Common_genMaybe($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Gen_Common_genMaybe__prime__'] ?? \Control\Monad\Gen\Common\phpurs_eval_thunk('Control_Monad_Gen_Common_genMaybe__prime__')))($dictMonadGen, 0.75);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_Common_genMaybe'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genMaybe';

// Control_Monad_Gen_Common_genIdentity
function Control_Monad_Gen_Common_genIdentity($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor, ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_Common_genIdentity'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genIdentity';

// Control_Monad_Gen_Common_genEither'
function Control_Monad_Gen_Common_genEither__prime__($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genEither__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Bind1 = (((($dictMonadGen)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))($Bind1);
$chooseFloat = (($GLOBALS['Control_Monad_Gen_Class_chooseFloat'] ?? \Control\Monad\Gen\Class\phpurs_eval_thunk('Control_Monad_Gen_Class_chooseFloat')))($dictMonadGen);
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($Bind1)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($bind, $chooseFloat, $map) {
  $__fn = function($bias, $genA = null, $genB = null) use ($bind, $chooseFloat, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($genB) use ($bias, $genA, &$__fn) { return $__fn($bias, $genA, $genB); };
    if ($__num === 1) return function($genA, $genB = null) use ($bias, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($bias, $genA, $genB);
      if ($__num2 === 1) return function($genB) use ($bias, $genA, &$__fn) { return $__fn($bias, $genA, $genB); };
      return phpurs_curry_fallback($__fn, [$bias], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($bind)(($chooseFloat)(0.0, 1.0), (function() use ($bias, $map, $genA, $genB) {
  $__body = function($n) use ($bias, $map, $genA, $genB) {
    $__case_0 = (($GLOBALS['Control_Monad_Gen_Common_lessThan'] ?? \Control\Monad\Gen\Common\phpurs_eval_thunk('Control_Monad_Gen_Common_lessThan')))($n, $bias);
    if (($__case_0 === true)) {
return ($map)(($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')), $genA);
} else {
if (true) {
return ($map)(($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')), $genB);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($n) use ($bias, $map, $genA, $genB, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($n);
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
$GLOBALS['Control_Monad_Gen_Common_genEither__prime__'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genEither__prime__';

// Control_Monad_Gen_Common_genEither
function Control_Monad_Gen_Common_genEither($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genEither';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_Gen_Common_genEither__prime__'] ?? \Control\Monad\Gen\Common\phpurs_eval_thunk('Control_Monad_Gen_Common_genEither__prime__')))($dictMonadGen, 0.5);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_Common_genEither'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genEither';

