<?php

namespace Data\Identity;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Data.BooleanAlgebra/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
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
      case 'Data_Identity_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Identity_newtypeIdentity': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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
      case 'Data_Identity_functorIdentity': $v = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() {
  $__body = function($f, $m) {
    $__case_0 = $m;
    if (true) {
$v = $__case_0;
return (($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity')))(($f)($v));
} else {
throw new \Exception("Pattern match failure");
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
      case 'Data_Identity_invariantIdentity': $v = (($GLOBALS['Data_Functor_Invariant_Invariant__dollar__Dict'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_Invariant__dollar__Dict')))((object)["imap" => (($GLOBALS['Data_Functor_Invariant_imapF'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_imapF')))(($GLOBALS['Data_Identity_functorIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_functorIdentity')))]); break;
      case 'Data_Identity_extendIdentity': $v = (($GLOBALS['Control_Extend_Extend__dollar__Dict'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_Extend__dollar__Dict')))((object)["extend" => (function() {
  $__fn = function($f, $m = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($f, &$__fn) { return $__fn($f, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity')))(($f)($m));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Identity_functorIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_functorIdentity'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Identity_eq1Identity': $v = (($GLOBALS['Data_Eq_Eq1__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq1__dollar__Dict')))((object)["eq1" => (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))((($GLOBALS['Data_Identity_eqIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_eqIdentity')))($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Identity_ord1Identity': $v = (($GLOBALS['Data_Ord_Ord1__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord1__dollar__Dict')))((object)["compare1" => (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))((($GLOBALS['Data_Identity_ordIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_ordIdentity')))($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Eq10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Identity_eq1Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_eq1Identity'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Identity_comonadIdentity': $v = (($GLOBALS['Control_Comonad_Comonad__dollar__Dict'] ?? \Control\Comonad\phpurs_eval_thunk('Control_Comonad_Comonad__dollar__Dict')))((object)["extract" => (function() {
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
})(), "Extend0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Identity_extendIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_extendIdentity'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Identity_applyIdentity': $v = (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$x = $__case_1;
return (($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity')))(($f)($x));
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
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Identity_functorIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_functorIdentity'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Identity_bindIdentity': $v = (($GLOBALS['Control_Bind_Bind__dollar__Dict'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_Bind__dollar__Dict')))((object)["bind" => (function() {
  $__body = function($v, $f) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$m = $__case_0;
$f1 = $__case_1;
return ($f1)($m);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Identity_applyIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_applyIdentity'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Identity_applicativeIdentity': $v = (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity')), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Identity_applyIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_applyIdentity'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Identity_monadIdentity': $v = (($GLOBALS['Control_Monad_Monad__dollar__Dict'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_Monad__dollar__Dict')))((object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Identity_applicativeIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_applicativeIdentity'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Identity_bindIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_bindIdentity'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Identity_altIdentity': $v = (($GLOBALS['Control_Alt_Alt__dollar__Dict'] ?? \Control\Alt\phpurs_eval_thunk('Control_Alt_Alt__dollar__Dict')))((object)["alt" => (function() {
  $__fn = function($x, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($x, &$__fn) { return $__fn($x, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $x;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Identity_functorIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_functorIdentity'));
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



// Data_Identity_Identity
function Data_Identity_Identity($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Identity_Identity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_Identity'] = __NAMESPACE__ . '\\Data_Identity_Identity';

// Data_Identity_showIdentity
function Data_Identity_showIdentity($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Identity_showIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))($dictShow);
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return (($GLOBALS['Data_Identity_append'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_append')))("(Identity ", (($GLOBALS['Data_Identity_append'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_append')))(($show)($x), ")"));
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
$GLOBALS['Data_Identity_showIdentity'] = __NAMESPACE__ . '\\Data_Identity_showIdentity';

// Data_Identity_semiringIdentity
function Data_Identity_semiringIdentity($dictSemiring) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Identity_semiringIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictSemiring;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_semiringIdentity'] = __NAMESPACE__ . '\\Data_Identity_semiringIdentity';

// Data_Identity_semigroupIdentity
function Data_Identity_semigroupIdentity($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Identity_semigroupIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictSemigroup;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_semigroupIdentity'] = __NAMESPACE__ . '\\Data_Identity_semigroupIdentity';

// Data_Identity_ringIdentity
function Data_Identity_ringIdentity($dictRing) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Identity_ringIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictRing;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_ringIdentity'] = __NAMESPACE__ . '\\Data_Identity_ringIdentity';

// Data_Identity_ordIdentity
function Data_Identity_ordIdentity($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Identity_ordIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictOrd;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_ordIdentity'] = __NAMESPACE__ . '\\Data_Identity_ordIdentity';


// Data_Identity_monoidIdentity
function Data_Identity_monoidIdentity($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Identity_monoidIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictMonoid;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_monoidIdentity'] = __NAMESPACE__ . '\\Data_Identity_monoidIdentity';

// Data_Identity_lazyIdentity
function Data_Identity_lazyIdentity($dictLazy) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Identity_lazyIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictLazy;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_lazyIdentity'] = __NAMESPACE__ . '\\Data_Identity_lazyIdentity';

// Data_Identity_heytingAlgebraIdentity
function Data_Identity_heytingAlgebraIdentity($dictHeytingAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Identity_heytingAlgebraIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictHeytingAlgebra;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_heytingAlgebraIdentity'] = __NAMESPACE__ . '\\Data_Identity_heytingAlgebraIdentity';




// Data_Identity_euclideanRingIdentity
function Data_Identity_euclideanRingIdentity($dictEuclideanRing) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Identity_euclideanRingIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictEuclideanRing;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_euclideanRingIdentity'] = __NAMESPACE__ . '\\Data_Identity_euclideanRingIdentity';

// Data_Identity_eqIdentity
function Data_Identity_eqIdentity($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Identity_eqIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictEq;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_eqIdentity'] = __NAMESPACE__ . '\\Data_Identity_eqIdentity';




// Data_Identity_commutativeRingIdentity
function Data_Identity_commutativeRingIdentity($dictCommutativeRing) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Identity_commutativeRingIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictCommutativeRing;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_commutativeRingIdentity'] = __NAMESPACE__ . '\\Data_Identity_commutativeRingIdentity';

// Data_Identity_boundedIdentity
function Data_Identity_boundedIdentity($dictBounded) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Identity_boundedIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictBounded;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_boundedIdentity'] = __NAMESPACE__ . '\\Data_Identity_boundedIdentity';

// Data_Identity_booleanAlgebraIdentity
function Data_Identity_booleanAlgebraIdentity($dictBooleanAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Identity_booleanAlgebraIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictBooleanAlgebra;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_booleanAlgebraIdentity'] = __NAMESPACE__ . '\\Data_Identity_booleanAlgebraIdentity';






