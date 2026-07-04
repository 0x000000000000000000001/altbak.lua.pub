<?php

namespace Data\Bitraversable;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Data.Bifoldable/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Bitraversable/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Clown/index.php';
require_once __DIR__ . '/../Data.Functor.Flip/index.php';
require_once __DIR__ . '/../Data.Functor.Joker/index.php';
require_once __DIR__ . '/../Data.Functor.Product2/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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
      case 'Data_Bitraversable_bitraversableTuple': $v = (($GLOBALS['Data_Bitraversable_Bitraversable__dollar__Dict'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_Bitraversable__dollar__Dict')))((object)["bitraverse" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Apply0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($Apply0);
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($Apply0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($apply, $map) {
  $__body = function($f, $g, $v) use ($apply, $map) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$g1 = $__case_1;
$a = ($__case_2)->v0;
$b = ($__case_2)->v1;
return ($apply)(($map)(($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')), ($f1)($a)), ($g1)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $g = null, $v = null) use ($apply, $map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $g, &$__fn) { return $__fn($f, $g, $v); };
    if ($__num === 1) return function($g, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $v);
      if ($__num2 === 1) return function($v) use ($f, $g, &$__fn) { return $__fn($f, $g, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $g, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Apply0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($Apply0);
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($Apply0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($apply, $map) {
  $__body = function($v) use ($apply, $map) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
return ($apply)(($map)(($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')), $a), $b);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($apply, $map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Bifunctor_bifunctorTuple'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bifunctorTuple'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Bifoldable_bifoldableTuple'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldableTuple'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Bitraversable_bitraversableEither': $v = (($GLOBALS['Data_Bitraversable_Bitraversable__dollar__Dict'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_Bitraversable__dollar__Dict')))((object)["bitraverse" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($map) {
  $__body = function($v, $v1, $v2) use ($map) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "Left":
$f = $__case_0;
$a = ($__case_2)->v0;
return ($map)(($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')), ($f)($a));
break;
case "Right":
$g = $__case_1;
$b = ($__case_2)->v0;
return ($map)(($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')), ($g)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($map, $__body, &$__fn) {
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
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($map) {
  $__body = function($v) use ($map) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Left":
$a = ($__case_0)->v0;
return ($map)(($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')), $a);
break;
case "Right":
$b = ($__case_0)->v0;
return ($map)(($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')), $b);
break;
default:
throw new \Exception("Pattern match failure");
break;
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Bifunctor_bifunctorEither'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bifunctorEither'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Bifoldable_bifoldableEither'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldableEither'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Bitraversable_bitraversableConst': $v = (($GLOBALS['Data_Bitraversable_Bitraversable__dollar__Dict'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_Bitraversable__dollar__Dict')))((object)["bitraverse" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($map) {
  $__body = function($f, $v, $v1) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$a = $__case_2;
return ($map)(($GLOBALS['Data_Const_Const'] ?? \Data\Const\phpurs_eval_thunk('Data_Const_Const')), ($f1)($a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null, $v1 = null) use ($map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
    if ($__num === 1) return function($v, $v1 = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $v, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($map) {
  $__body = function($v) use ($map) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($map)(($GLOBALS['Data_Const_Const'] ?? \Data\Const\phpurs_eval_thunk('Data_Const_Const')), $a);
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Bifunctor_bifunctorConst'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bifunctorConst'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Bifoldable_bifoldableConst'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldableConst'));
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


// Data_Bitraversable_identity
function Data_Bitraversable_identity($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_identity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_identity'] = __NAMESPACE__ . '\\Data_Bitraversable_identity';

// Data_Bitraversable_Bitraversable$Dict
function Data_Bitraversable_Bitraversable__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_Bitraversable__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_Bitraversable__dollar__Dict'] = __NAMESPACE__ . '\\Data_Bitraversable_Bitraversable__dollar__Dict';

// Data_Bitraversable_bitraverse
function Data_Bitraversable_bitraverse($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bitraverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bitraverse;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bitraverse'] = __NAMESPACE__ . '\\Data_Bitraversable_bitraverse';

// Data_Bitraversable_lfor
function Data_Bitraversable_lfor($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_lfor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bitraverse1 = (($GLOBALS['Data_Bitraversable_bitraverse'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_bitraverse')))($dictBitraversable);
    $__res = (function() use ($bitraverse1) {
  $__fn = function($dictApplicative) use ($bitraverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bitraverse2 = ($bitraverse1)($dictApplicative);
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))($dictApplicative);
    $__res = (function() use ($bitraverse2, $pure) {
  $__fn = function($t, $f = null) use ($bitraverse2, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($t, &$__fn) { return $__fn($t, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bitraverse2)($f, $pure, $t);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_lfor'] = __NAMESPACE__ . '\\Data_Bitraversable_lfor';

// Data_Bitraversable_ltraverse
function Data_Bitraversable_ltraverse($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_ltraverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bitraverse1 = (($GLOBALS['Data_Bitraversable_bitraverse'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_bitraverse')))($dictBitraversable);
    $__res = (function() use ($bitraverse1) {
  $__fn = function($dictApplicative) use ($bitraverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bitraverse2 = ($bitraverse1)($dictApplicative);
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))($dictApplicative);
    $__res = (function() use ($bitraverse2, $pure) {
  $__fn = function($f) use ($bitraverse2, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bitraverse2)($f, $pure);
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
$GLOBALS['Data_Bitraversable_ltraverse'] = __NAMESPACE__ . '\\Data_Bitraversable_ltraverse';

// Data_Bitraversable_rfor
function Data_Bitraversable_rfor($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_rfor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bitraverse1 = (($GLOBALS['Data_Bitraversable_bitraverse'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_bitraverse')))($dictBitraversable);
    $__res = (function() use ($bitraverse1) {
  $__fn = function($dictApplicative) use ($bitraverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bitraverse2 = ($bitraverse1)($dictApplicative);
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))($dictApplicative);
    $__res = (function() use ($bitraverse2, $pure) {
  $__fn = function($t, $f = null) use ($bitraverse2, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($t, &$__fn) { return $__fn($t, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bitraverse2)($pure, $f, $t);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_rfor'] = __NAMESPACE__ . '\\Data_Bitraversable_rfor';

// Data_Bitraversable_rtraverse
function Data_Bitraversable_rtraverse($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_rtraverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bitraverse1 = (($GLOBALS['Data_Bitraversable_bitraverse'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_bitraverse')))($dictBitraversable);
    $__res = (function() use ($bitraverse1) {
  $__fn = function($dictApplicative) use ($bitraverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bitraverse1)($dictApplicative, (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))($dictApplicative));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_rtraverse'] = __NAMESPACE__ . '\\Data_Bitraversable_rtraverse';


// Data_Bitraversable_bitraversableJoker
function Data_Bitraversable_bitraversableJoker($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bitraversableJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverse = (($GLOBALS['Data_Traversable_traverse'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traverse')))($dictTraversable);
$sequence = (($GLOBALS['Data_Traversable_sequence'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_sequence')))($dictTraversable);
$bifunctorJoker = (($GLOBALS['Data_Functor_Joker_bifunctorJoker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_bifunctorJoker')))((($dictTraversable)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$bifoldableJoker = (($GLOBALS['Data_Bifoldable_bifoldableJoker'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldableJoker')))((($dictTraversable)->Foldable1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Bitraversable_Bitraversable__dollar__Dict'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_Bitraversable__dollar__Dict')))((object)["bitraverse" => (function() use ($traverse) {
  $__fn = function($dictApplicative) use ($traverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traverse1 = ($traverse)($dictApplicative);
    $__res = (function() use ($map, $traverse1) {
  $__body = function($v, $r, $v1) use ($map, $traverse1) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $v1;
    if (true) {
$r1 = $__case_1;
$f = $__case_2;
return ($map)(($GLOBALS['Data_Functor_Joker_Joker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_Joker')), ($traverse1)($r1, $f));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $r = null, $v1 = null) use ($map, $traverse1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($v, $r, &$__fn) { return $__fn($v, $r, $v1); };
    if ($__num === 1) return function($r, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $r, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $r, &$__fn) { return $__fn($v, $r, $v1); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($v, $r, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() use ($sequence) {
  $__fn = function($dictApplicative) use ($sequence, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$sequence1 = ($sequence)($dictApplicative);
    $__res = (function() use ($map, $sequence1) {
  $__body = function($v) use ($map, $sequence1) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($map)(($GLOBALS['Data_Functor_Joker_Joker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_Joker')), ($sequence1)($f));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $sequence1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() use ($bifunctorJoker) {
  $__fn = function($__dollar____unused) use ($bifunctorJoker, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bifunctorJoker;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() use ($bifoldableJoker) {
  $__fn = function($__dollar____unused) use ($bifoldableJoker, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bifoldableJoker;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bitraversableJoker'] = __NAMESPACE__ . '\\Data_Bitraversable_bitraversableJoker';



// Data_Bitraversable_bitraversableClown
function Data_Bitraversable_bitraversableClown($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bitraversableClown';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverse = (($GLOBALS['Data_Traversable_traverse'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traverse')))($dictTraversable);
$sequence = (($GLOBALS['Data_Traversable_sequence'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_sequence')))($dictTraversable);
$bifunctorClown = (($GLOBALS['Data_Functor_Clown_bifunctorClown'] ?? \Data\Functor\Clown\phpurs_eval_thunk('Data_Functor_Clown_bifunctorClown')))((($dictTraversable)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$bifoldableClown = (($GLOBALS['Data_Bifoldable_bifoldableClown'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldableClown')))((($dictTraversable)->Foldable1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Bitraversable_Bitraversable__dollar__Dict'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_Bitraversable__dollar__Dict')))((object)["bitraverse" => (function() use ($traverse) {
  $__fn = function($dictApplicative) use ($traverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traverse1 = ($traverse)($dictApplicative);
    $__res = (function() use ($map, $traverse1) {
  $__body = function($l, $v, $v1) use ($map, $traverse1) {
    $__case_0 = $l;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$l1 = $__case_0;
$f = $__case_2;
return ($map)(($GLOBALS['Data_Functor_Clown_Clown'] ?? \Data\Functor\Clown\phpurs_eval_thunk('Data_Functor_Clown_Clown')), ($traverse1)($l1, $f));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($l, $v = null, $v1 = null) use ($map, $traverse1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($l, $v, &$__fn) { return $__fn($l, $v, $v1); };
    if ($__num === 1) return function($v, $v1 = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($l, $v, &$__fn) { return $__fn($l, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$l], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($l, $v, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() use ($sequence) {
  $__fn = function($dictApplicative) use ($sequence, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$sequence1 = ($sequence)($dictApplicative);
    $__res = (function() use ($map, $sequence1) {
  $__body = function($v) use ($map, $sequence1) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($map)(($GLOBALS['Data_Functor_Clown_Clown'] ?? \Data\Functor\Clown\phpurs_eval_thunk('Data_Functor_Clown_Clown')), ($sequence1)($f));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $sequence1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() use ($bifunctorClown) {
  $__fn = function($__dollar____unused) use ($bifunctorClown, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bifunctorClown;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() use ($bifoldableClown) {
  $__fn = function($__dollar____unused) use ($bifoldableClown, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bifoldableClown;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bitraversableClown'] = __NAMESPACE__ . '\\Data_Bitraversable_bitraversableClown';

// Data_Bitraversable_bisequenceDefault
function Data_Bitraversable_bisequenceDefault($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bisequenceDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bitraverse1 = (($GLOBALS['Data_Bitraversable_bitraverse'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_bitraverse')))($dictBitraversable);
    $__res = (function() use ($bitraverse1) {
  $__fn = function($dictApplicative) use ($bitraverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bitraverse1)($dictApplicative, ($GLOBALS['Data_Bitraversable_identity'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_identity')), ($GLOBALS['Data_Bitraversable_identity'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_identity')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bisequenceDefault'] = __NAMESPACE__ . '\\Data_Bitraversable_bisequenceDefault';

// Data_Bitraversable_bisequence
function Data_Bitraversable_bisequence($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bisequence';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bisequence;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bisequence'] = __NAMESPACE__ . '\\Data_Bitraversable_bisequence';

// Data_Bitraversable_bitraversableFlip
function Data_Bitraversable_bitraversableFlip($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bitraversableFlip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bitraverse1 = (($GLOBALS['Data_Bitraversable_bitraverse'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_bitraverse')))($dictBitraversable);
$bisequence1 = (($GLOBALS['Data_Bitraversable_bisequence'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_bisequence')))($dictBitraversable);
$bifunctorFlip = (($GLOBALS['Data_Functor_Flip_bifunctorFlip'] ?? \Data\Functor\Flip\phpurs_eval_thunk('Data_Functor_Flip_bifunctorFlip')))((($dictBitraversable)->Bifunctor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$bifoldableFlip = (($GLOBALS['Data_Bifoldable_bifoldableFlip'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldableFlip')))((($dictBitraversable)->Bifoldable1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Bitraversable_Bitraversable__dollar__Dict'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_Bitraversable__dollar__Dict')))((object)["bitraverse" => (function() use ($bitraverse1) {
  $__fn = function($dictApplicative) use ($bitraverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$bitraverse2 = ($bitraverse1)($dictApplicative);
    $__res = (function() use ($map, $bitraverse2) {
  $__body = function($r, $l, $v) use ($map, $bitraverse2) {
    $__case_0 = $r;
    $__case_1 = $l;
    $__case_2 = $v;
    if (true) {
$r1 = $__case_0;
$l1 = $__case_1;
$p = $__case_2;
return ($map)(($GLOBALS['Data_Functor_Flip_Flip'] ?? \Data\Functor\Flip\phpurs_eval_thunk('Data_Functor_Flip_Flip')), ($bitraverse2)($l1, $r1, $p));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($r, $l = null, $v = null) use ($map, $bitraverse2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($r, $l, &$__fn) { return $__fn($r, $l, $v); };
    if ($__num === 1) return function($l, $v = null) use ($r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($r, $l, $v);
      if ($__num2 === 1) return function($v) use ($r, $l, &$__fn) { return $__fn($r, $l, $v); };
      return phpurs_curry_fallback($__fn, [$r], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($r, $l, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() use ($bisequence1) {
  $__fn = function($dictApplicative) use ($bisequence1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$bisequence2 = ($bisequence1)($dictApplicative);
    $__res = (function() use ($map, $bisequence2) {
  $__body = function($v) use ($map, $bisequence2) {
    $__case_0 = $v;
    if (true) {
$p = $__case_0;
return ($map)(($GLOBALS['Data_Functor_Flip_Flip'] ?? \Data\Functor\Flip\phpurs_eval_thunk('Data_Functor_Flip_Flip')), ($bisequence2)($p));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $bisequence2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() use ($bifunctorFlip) {
  $__fn = function($__dollar____unused) use ($bifunctorFlip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bifunctorFlip;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() use ($bifoldableFlip) {
  $__fn = function($__dollar____unused) use ($bifoldableFlip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bifoldableFlip;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bitraversableFlip'] = __NAMESPACE__ . '\\Data_Bitraversable_bitraversableFlip';

// Data_Bitraversable_bitraversableProduct2
function Data_Bitraversable_bitraversableProduct2($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bitraversableProduct2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bitraverse1 = (($GLOBALS['Data_Bitraversable_bitraverse'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_bitraverse')))($dictBitraversable);
$bisequence1 = (($GLOBALS['Data_Bitraversable_bisequence'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_bisequence')))($dictBitraversable);
$bifunctorProduct2 = (($GLOBALS['Data_Functor_Product2_bifunctorProduct2'] ?? \Data\Functor\Product2\phpurs_eval_thunk('Data_Functor_Product2_bifunctorProduct2')))((($dictBitraversable)->Bifunctor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$bifoldableProduct2 = (($GLOBALS['Data_Bifoldable_bifoldableProduct2'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldableProduct2')))((($dictBitraversable)->Bifoldable1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($bifunctorProduct2, $bifoldableProduct2, $bitraverse1, $bisequence1) {
  $__fn = function($dictBitraversable1) use ($bifunctorProduct2, $bifoldableProduct2, $bitraverse1, $bisequence1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bitraverse2 = (($GLOBALS['Data_Bitraversable_bitraverse'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_bitraverse')))($dictBitraversable1);
$bisequence2 = (($GLOBALS['Data_Bitraversable_bisequence'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_bisequence')))($dictBitraversable1);
$bifunctorProduct21 = ($bifunctorProduct2)((($dictBitraversable1)->Bifunctor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$bifoldableProduct21 = ($bifoldableProduct2)((($dictBitraversable1)->Bifoldable1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Bitraversable_Bitraversable__dollar__Dict'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_Bitraversable__dollar__Dict')))((object)["bitraverse" => (function() use ($bitraverse1, $bitraverse2) {
  $__fn = function($dictApplicative) use ($bitraverse1, $bitraverse2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Apply0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($Apply0);
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($Apply0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$bitraverse3 = ($bitraverse1)($dictApplicative);
$bitraverse4 = ($bitraverse2)($dictApplicative);
    $__res = (function() use ($apply, $map, $bitraverse3, $bitraverse4) {
  $__body = function($l, $r, $v) use ($apply, $map, $bitraverse3, $bitraverse4) {
    $__case_0 = $l;
    $__case_1 = $r;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Product2":
$l1 = $__case_0;
$r1 = $__case_1;
$f = ($__case_2)->v0;
$g = ($__case_2)->v1;
return ($apply)(($map)(($GLOBALS['Data_Functor_Product2_Product2'] ?? \Data\Functor\Product2\phpurs_eval_thunk('Data_Functor_Product2_Product2')), ($bitraverse3)($l1, $r1, $f)), ($bitraverse4)($l1, $r1, $g));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($l, $r = null, $v = null) use ($apply, $map, $bitraverse3, $bitraverse4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($l, $r, &$__fn) { return $__fn($l, $r, $v); };
    if ($__num === 1) return function($r, $v = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $r, $v);
      if ($__num2 === 1) return function($v) use ($l, $r, &$__fn) { return $__fn($l, $r, $v); };
      return phpurs_curry_fallback($__fn, [$l], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($l, $r, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() use ($bisequence1, $bisequence2) {
  $__fn = function($dictApplicative) use ($bisequence1, $bisequence2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Apply0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($Apply0);
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($Apply0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$bisequence3 = ($bisequence1)($dictApplicative);
$bisequence4 = ($bisequence2)($dictApplicative);
    $__res = (function() use ($apply, $map, $bisequence3, $bisequence4) {
  $__body = function($v) use ($apply, $map, $bisequence3, $bisequence4) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Product2":
$f = ($__case_0)->v0;
$g = ($__case_0)->v1;
return ($apply)(($map)(($GLOBALS['Data_Functor_Product2_Product2'] ?? \Data\Functor\Product2\phpurs_eval_thunk('Data_Functor_Product2_Product2')), ($bisequence3)($f)), ($bisequence4)($g));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($apply, $map, $bisequence3, $bisequence4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() use ($bifunctorProduct21) {
  $__fn = function($__dollar____unused) use ($bifunctorProduct21, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bifunctorProduct21;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() use ($bifoldableProduct21) {
  $__fn = function($__dollar____unused) use ($bifoldableProduct21, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bifoldableProduct21;
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
$GLOBALS['Data_Bitraversable_bitraversableProduct2'] = __NAMESPACE__ . '\\Data_Bitraversable_bitraversableProduct2';

// Data_Bitraversable_bitraverseDefault
function Data_Bitraversable_bitraverseDefault($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bitraverseDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bisequence1 = (($GLOBALS['Data_Bitraversable_bisequence'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_bisequence')))($dictBitraversable);
$bimap = (($GLOBALS['Data_Bifunctor_bimap'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bimap')))((($dictBitraversable)->Bifunctor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($bisequence1, $bimap) {
  $__fn = function($dictApplicative) use ($bisequence1, $bimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bisequence2 = ($bisequence1)($dictApplicative);
    $__res = (function() use ($bisequence2, $bimap) {
  $__fn = function($f, $g = null, $t = null) use ($bisequence2, $bimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($t) use ($f, $g, &$__fn) { return $__fn($f, $g, $t); };
    if ($__num === 1) return function($g, $t = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $t);
      if ($__num2 === 1) return function($t) use ($f, $g, &$__fn) { return $__fn($f, $g, $t); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($bisequence2)(($bimap)($f, $g, $t));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bitraverseDefault'] = __NAMESPACE__ . '\\Data_Bitraversable_bitraverseDefault';

// Data_Bitraversable_bifor
function Data_Bitraversable_bifor($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bifor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bitraverse1 = (($GLOBALS['Data_Bitraversable_bitraverse'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_bitraverse')))($dictBitraversable);
    $__res = (function() use ($bitraverse1) {
  $__fn = function($dictApplicative) use ($bitraverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bitraverse2 = ($bitraverse1)($dictApplicative);
    $__res = (function() use ($bitraverse2) {
  $__fn = function($t, $f = null, $g = null) use ($bitraverse2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($g) use ($t, $f, &$__fn) { return $__fn($t, $f, $g); };
    if ($__num === 1) return function($f, $g = null) use ($t, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($t, $f, $g);
      if ($__num2 === 1) return function($g) use ($t, $f, &$__fn) { return $__fn($t, $f, $g); };
      return phpurs_curry_fallback($__fn, [$t], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($bitraverse2)($f, $g, $t);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bifor'] = __NAMESPACE__ . '\\Data_Bitraversable_bifor';

