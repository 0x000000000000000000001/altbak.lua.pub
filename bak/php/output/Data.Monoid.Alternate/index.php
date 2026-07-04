<?php

namespace Data\Monoid\Alternate;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Alternate/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
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
      case 'Data_Monoid_Alternate_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Monoid_Alternate_newtypeAlternate': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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



// Data_Monoid_Alternate_Alternate
function Data_Monoid_Alternate_Alternate($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Alternate_Alternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_Alternate'] = __NAMESPACE__ . '\\Data_Monoid_Alternate_Alternate';

// Data_Monoid_Alternate_showAlternate
function Data_Monoid_Alternate_showAlternate($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Alternate_showAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))($dictShow);
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return (($GLOBALS['Data_Monoid_Alternate_append'] ?? \Data\Monoid\Alternate\phpurs_eval_thunk('Data_Monoid_Alternate_append')))("(Alternate ", (($GLOBALS['Data_Monoid_Alternate_append'] ?? \Data\Monoid\Alternate\phpurs_eval_thunk('Data_Monoid_Alternate_append')))(($show)($a), ")"));
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
$GLOBALS['Data_Monoid_Alternate_showAlternate'] = __NAMESPACE__ . '\\Data_Monoid_Alternate_showAlternate';

// Data_Monoid_Alternate_semigroupAlternate
function Data_Monoid_Alternate_semigroupAlternate($dictAlt) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Alternate_semigroupAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$alt = (($GLOBALS['Control_Alt_alt'] ?? \Control\Alt\phpurs_eval_thunk('Control_Alt_alt')))($dictAlt);
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() use ($alt) {
  $__body = function($v, $v1) use ($alt) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return (($GLOBALS['Data_Monoid_Alternate_Alternate'] ?? \Data\Monoid\Alternate\phpurs_eval_thunk('Data_Monoid_Alternate_Alternate')))(($alt)($a, $b));
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
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_semigroupAlternate'] = __NAMESPACE__ . '\\Data_Monoid_Alternate_semigroupAlternate';

// Data_Monoid_Alternate_plusAlternate
function Data_Monoid_Alternate_plusAlternate($dictPlus) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Alternate_plusAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictPlus;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_plusAlternate'] = __NAMESPACE__ . '\\Data_Monoid_Alternate_plusAlternate';

// Data_Monoid_Alternate_ordAlternate
function Data_Monoid_Alternate_ordAlternate($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Alternate_ordAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictOrd;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_ordAlternate'] = __NAMESPACE__ . '\\Data_Monoid_Alternate_ordAlternate';

// Data_Monoid_Alternate_ord1Alternate
function Data_Monoid_Alternate_ord1Alternate($dictOrd1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Alternate_ord1Alternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictOrd1;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_ord1Alternate'] = __NAMESPACE__ . '\\Data_Monoid_Alternate_ord1Alternate';


// Data_Monoid_Alternate_monoidAlternate
function Data_Monoid_Alternate_monoidAlternate($dictPlus) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Alternate_monoidAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$semigroupAlternate1 = (($GLOBALS['Data_Monoid_Alternate_semigroupAlternate'] ?? \Data\Monoid\Alternate\phpurs_eval_thunk('Data_Monoid_Alternate_semigroupAlternate')))((($dictPlus)->Alt0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Data_Monoid_Alternate_Alternate'] ?? \Data\Monoid\Alternate\phpurs_eval_thunk('Data_Monoid_Alternate_Alternate')))((($GLOBALS['Control_Plus_empty'] ?? \Control\Plus\phpurs_eval_thunk('Control_Plus_empty')))($dictPlus)), "Semigroup0" => (function() use ($semigroupAlternate1) {
  $__fn = function($__dollar____unused) use ($semigroupAlternate1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupAlternate1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_monoidAlternate'] = __NAMESPACE__ . '\\Data_Monoid_Alternate_monoidAlternate';

// Data_Monoid_Alternate_monadAlternate
function Data_Monoid_Alternate_monadAlternate($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Alternate_monadAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictMonad;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_monadAlternate'] = __NAMESPACE__ . '\\Data_Monoid_Alternate_monadAlternate';

// Data_Monoid_Alternate_functorAlternate
function Data_Monoid_Alternate_functorAlternate($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Alternate_functorAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictFunctor;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_functorAlternate'] = __NAMESPACE__ . '\\Data_Monoid_Alternate_functorAlternate';

// Data_Monoid_Alternate_extendAlternate
function Data_Monoid_Alternate_extendAlternate($dictExtend) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Alternate_extendAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictExtend;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_extendAlternate'] = __NAMESPACE__ . '\\Data_Monoid_Alternate_extendAlternate';

// Data_Monoid_Alternate_eqAlternate
function Data_Monoid_Alternate_eqAlternate($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Alternate_eqAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictEq;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_eqAlternate'] = __NAMESPACE__ . '\\Data_Monoid_Alternate_eqAlternate';

// Data_Monoid_Alternate_eq1Alternate
function Data_Monoid_Alternate_eq1Alternate($dictEq1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Alternate_eq1Alternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictEq1;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_eq1Alternate'] = __NAMESPACE__ . '\\Data_Monoid_Alternate_eq1Alternate';

// Data_Monoid_Alternate_comonadAlternate
function Data_Monoid_Alternate_comonadAlternate($dictComonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Alternate_comonadAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictComonad;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_comonadAlternate'] = __NAMESPACE__ . '\\Data_Monoid_Alternate_comonadAlternate';

// Data_Monoid_Alternate_boundedAlternate
function Data_Monoid_Alternate_boundedAlternate($dictBounded) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Alternate_boundedAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictBounded;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_boundedAlternate'] = __NAMESPACE__ . '\\Data_Monoid_Alternate_boundedAlternate';

// Data_Monoid_Alternate_bindAlternate
function Data_Monoid_Alternate_bindAlternate($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Alternate_bindAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictBind;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_bindAlternate'] = __NAMESPACE__ . '\\Data_Monoid_Alternate_bindAlternate';

// Data_Monoid_Alternate_applyAlternate
function Data_Monoid_Alternate_applyAlternate($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Alternate_applyAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictApply;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_applyAlternate'] = __NAMESPACE__ . '\\Data_Monoid_Alternate_applyAlternate';

// Data_Monoid_Alternate_applicativeAlternate
function Data_Monoid_Alternate_applicativeAlternate($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Alternate_applicativeAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictApplicative;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_applicativeAlternate'] = __NAMESPACE__ . '\\Data_Monoid_Alternate_applicativeAlternate';

// Data_Monoid_Alternate_alternativeAlternate
function Data_Monoid_Alternate_alternativeAlternate($dictAlternative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Alternate_alternativeAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictAlternative;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_alternativeAlternate'] = __NAMESPACE__ . '\\Data_Monoid_Alternate_alternativeAlternate';

// Data_Monoid_Alternate_altAlternate
function Data_Monoid_Alternate_altAlternate($dictAlt) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Alternate_altAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictAlt;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_altAlternate'] = __NAMESPACE__ . '\\Data_Monoid_Alternate_altAlternate';

