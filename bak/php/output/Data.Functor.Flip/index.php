<?php

namespace Data\Functor\Flip;

require_once __DIR__ . '/../Control.Biapplicative/index.php';
require_once __DIR__ . '/../Control.Biapply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Contravariant/index.php';
require_once __DIR__ . '/../Data.Functor.Flip/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
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
      case 'Data_Functor_Flip_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Functor_Flip_newtypeFlip': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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



// Data_Functor_Flip_Flip
function Data_Functor_Flip_Flip($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Flip_Flip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Flip_Flip'] = __NAMESPACE__ . '\\Data_Functor_Flip_Flip';

// Data_Functor_Flip_showFlip
function Data_Functor_Flip_showFlip($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Flip_showFlip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))($dictShow);
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return (($GLOBALS['Data_Functor_Flip_append'] ?? \Data\Functor\Flip\phpurs_eval_thunk('Data_Functor_Flip_append')))("(Flip ", (($GLOBALS['Data_Functor_Flip_append'] ?? \Data\Functor\Flip\phpurs_eval_thunk('Data_Functor_Flip_append')))(($show)($x), ")"));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($show, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Flip_showFlip'] = __NAMESPACE__ . '\\Data_Functor_Flip_showFlip';

// Data_Functor_Flip_semigroupoidFlip
function Data_Functor_Flip_semigroupoidFlip($dictSemigroupoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Flip_semigroupoidFlip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compose = (($GLOBALS['Control_Semigroupoid_compose'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_compose')))($dictSemigroupoid);
    $__res = (($GLOBALS['Control_Semigroupoid_Semigroupoid__dollar__Dict'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_Semigroupoid__dollar__Dict')))((object)["compose" => (function() use ($compose) {
  $__body = function($v, $v1) use ($compose) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return (($GLOBALS['Data_Functor_Flip_Flip'] ?? \Data\Functor\Flip\phpurs_eval_thunk('Data_Functor_Flip_Flip')))(($compose)($b, $a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($compose, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Flip_semigroupoidFlip'] = __NAMESPACE__ . '\\Data_Functor_Flip_semigroupoidFlip';

// Data_Functor_Flip_ordFlip
function Data_Functor_Flip_ordFlip($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Flip_ordFlip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictOrd;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Flip_ordFlip'] = __NAMESPACE__ . '\\Data_Functor_Flip_ordFlip';


// Data_Functor_Flip_functorFlip
function Data_Functor_Flip_functorFlip($dictBifunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Flip_functorFlip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$lmap = (($GLOBALS['Data_Bifunctor_lmap'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_lmap')))($dictBifunctor);
    $__res = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() use ($lmap) {
  $__body = function($f, $v) use ($lmap) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$a = $__case_1;
return (($GLOBALS['Data_Functor_Flip_Flip'] ?? \Data\Functor\Flip\phpurs_eval_thunk('Data_Functor_Flip_Flip')))(($lmap)($f1, $a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($lmap, $__body, &$__fn) {
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
$GLOBALS['Data_Functor_Flip_functorFlip'] = __NAMESPACE__ . '\\Data_Functor_Flip_functorFlip';

// Data_Functor_Flip_eqFlip
function Data_Functor_Flip_eqFlip($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Flip_eqFlip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictEq;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Flip_eqFlip'] = __NAMESPACE__ . '\\Data_Functor_Flip_eqFlip';

// Data_Functor_Flip_contravariantFlip
function Data_Functor_Flip_contravariantFlip($dictProfunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Flip_contravariantFlip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$lcmap = (($GLOBALS['Data_Profunctor_lcmap'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_lcmap')))($dictProfunctor);
    $__res = (($GLOBALS['Data_Functor_Contravariant_Contravariant__dollar__Dict'] ?? \Data\Functor\Contravariant\phpurs_eval_thunk('Data_Functor_Contravariant_Contravariant__dollar__Dict')))((object)["cmap" => (function() use ($lcmap) {
  $__body = function($f, $v) use ($lcmap) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$a = $__case_1;
return (($GLOBALS['Data_Functor_Flip_Flip'] ?? \Data\Functor\Flip\phpurs_eval_thunk('Data_Functor_Flip_Flip')))(($lcmap)($f1, $a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($lcmap, $__body, &$__fn) {
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
$GLOBALS['Data_Functor_Flip_contravariantFlip'] = __NAMESPACE__ . '\\Data_Functor_Flip_contravariantFlip';

// Data_Functor_Flip_categoryFlip
function Data_Functor_Flip_categoryFlip($dictCategory) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Flip_categoryFlip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$semigroupoidFlip1 = (($GLOBALS['Data_Functor_Flip_semigroupoidFlip'] ?? \Data\Functor\Flip\phpurs_eval_thunk('Data_Functor_Flip_semigroupoidFlip')))((($dictCategory)->Semigroupoid0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Category_Category__dollar__Dict'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_Category__dollar__Dict')))((object)["identity" => (($GLOBALS['Data_Functor_Flip_Flip'] ?? \Data\Functor\Flip\phpurs_eval_thunk('Data_Functor_Flip_Flip')))((($GLOBALS['Control_Category_identity'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_identity')))($dictCategory)), "Semigroupoid0" => (function() use ($semigroupoidFlip1) {
  $__fn = function($__dollar____unused) use ($semigroupoidFlip1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupoidFlip1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Flip_categoryFlip'] = __NAMESPACE__ . '\\Data_Functor_Flip_categoryFlip';

// Data_Functor_Flip_bifunctorFlip
function Data_Functor_Flip_bifunctorFlip($dictBifunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Flip_bifunctorFlip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bimap = (($GLOBALS['Data_Bifunctor_bimap'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bimap')))($dictBifunctor);
    $__res = (($GLOBALS['Data_Bifunctor_Bifunctor__dollar__Dict'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_Bifunctor__dollar__Dict')))((object)["bimap" => (function() use ($bimap) {
  $__body = function($f, $g, $v) use ($bimap) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$g1 = $__case_1;
$a = $__case_2;
return (($GLOBALS['Data_Functor_Flip_Flip'] ?? \Data\Functor\Flip\phpurs_eval_thunk('Data_Functor_Flip_Flip')))(($bimap)($g1, $f1, $a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $g = null, $v = null) use ($bimap, $__body, &$__fn) {
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
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Flip_bifunctorFlip'] = __NAMESPACE__ . '\\Data_Functor_Flip_bifunctorFlip';

// Data_Functor_Flip_biapplyFlip
function Data_Functor_Flip_biapplyFlip($dictBiapply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Flip_biapplyFlip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$biapply = (($GLOBALS['Control_Biapply_biapply'] ?? \Control\Biapply\phpurs_eval_thunk('Control_Biapply_biapply')))($dictBiapply);
$bifunctorFlip1 = (($GLOBALS['Data_Functor_Flip_bifunctorFlip'] ?? \Data\Functor\Flip\phpurs_eval_thunk('Data_Functor_Flip_bifunctorFlip')))((($dictBiapply)->Bifunctor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Biapply_Biapply__dollar__Dict'] ?? \Control\Biapply\phpurs_eval_thunk('Control_Biapply_Biapply__dollar__Dict')))((object)["biapply" => (function() use ($biapply) {
  $__body = function($v, $v1) use ($biapply) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$fg = $__case_0;
$xy = $__case_1;
return (($GLOBALS['Data_Functor_Flip_Flip'] ?? \Data\Functor\Flip\phpurs_eval_thunk('Data_Functor_Flip_Flip')))(($biapply)($fg, $xy));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($biapply, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() use ($bifunctorFlip1) {
  $__fn = function($__dollar____unused) use ($bifunctorFlip1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bifunctorFlip1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Flip_biapplyFlip'] = __NAMESPACE__ . '\\Data_Functor_Flip_biapplyFlip';

// Data_Functor_Flip_biapplicativeFlip
function Data_Functor_Flip_biapplicativeFlip($dictBiapplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Flip_biapplicativeFlip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bipure = (($GLOBALS['Control_Biapplicative_bipure'] ?? \Control\Biapplicative\phpurs_eval_thunk('Control_Biapplicative_bipure')))($dictBiapplicative);
$biapplyFlip1 = (($GLOBALS['Data_Functor_Flip_biapplyFlip'] ?? \Data\Functor\Flip\phpurs_eval_thunk('Data_Functor_Flip_biapplyFlip')))((($dictBiapplicative)->Biapply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Biapplicative_Biapplicative__dollar__Dict'] ?? \Control\Biapplicative\phpurs_eval_thunk('Control_Biapplicative_Biapplicative__dollar__Dict')))((object)["bipure" => (function() use ($bipure) {
  $__fn = function($a, $b = null) use ($bipure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Functor_Flip_Flip'] ?? \Data\Functor\Flip\phpurs_eval_thunk('Data_Functor_Flip_Flip')))(($bipure)($b, $a));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Biapply0" => (function() use ($biapplyFlip1) {
  $__fn = function($__dollar____unused) use ($biapplyFlip1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $biapplyFlip1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Flip_biapplicativeFlip'] = __NAMESPACE__ . '\\Data_Functor_Flip_biapplicativeFlip';

