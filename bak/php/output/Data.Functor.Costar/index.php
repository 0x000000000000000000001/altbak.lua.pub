<?php

namespace Data\Functor\Costar;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Distributive/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Contravariant/index.php';
require_once __DIR__ . '/../Data.Functor.Costar/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Profunctor.Closed/index.php';
require_once __DIR__ . '/../Data.Profunctor.Strong/index.php';
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
      case 'Data_Functor_Costar_composeFlipped': $v = (($GLOBALS['Control_Semigroupoid_composeFlipped'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeFlipped')))(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Data_Functor_Costar_lcmap': $v = (($GLOBALS['Data_Profunctor_lcmap'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_lcmap')))(($GLOBALS['Data_Profunctor_profunctorFn'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_profunctorFn'))); break;
      case 'Data_Functor_Costar_newtypeCostar': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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
      case 'Data_Functor_Costar_functorCostar': $v = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
return (($GLOBALS['Data_Functor_Costar_Costar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_Costar')))((($GLOBALS['Data_Functor_Costar_compose'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_compose')))($f1, $g));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Functor_Costar_invariantCostar': $v = (($GLOBALS['Data_Functor_Invariant_Invariant__dollar__Dict'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_Invariant__dollar__Dict')))((object)["imap" => (($GLOBALS['Data_Functor_Invariant_imapF'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_imapF')))(($GLOBALS['Data_Functor_Costar_functorCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_functorCostar')))]); break;
      case 'Data_Functor_Costar_distributiveCostar': $v = (($GLOBALS['Data_Distributive_Distributive__dollar__Dict'] ?? \Data\Distributive\phpurs_eval_thunk('Data_Distributive_Distributive__dollar__Dict')))((object)["distribute" => (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (function() use ($map) {
  $__fn = function($f) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Functor_Costar_Costar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_Costar')))((function() use ($map, $f) {
  $__fn = function($a) use ($map, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map)((function() use ($a) {
  $__body = function($v) use ($a) {
    $__case_0 = $v;
    if (true) {
$g = $__case_0;
return ($g)($a);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($a, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "collect" => (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (function() use ($dictFunctor, $map) {
  $__fn = function($f) use ($dictFunctor, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Functor_Costar_compose'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_compose')))(((function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (function() use ($map) {
  $__fn = function($f) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Functor_Costar_Costar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_Costar')))((function() use ($map, $f) {
  $__fn = function($a) use ($map, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($map)((function() use ($a) {
  $__body = function($v) use ($a) {
    $__case_0 = $v;
    if (true) {
$g = $__case_0;
return ($g)($a);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($a, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($dictFunctor), ($map)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Functor_Costar_functorCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_functorCostar'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Functor_Costar_applyCostar': $v = (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$g = $__case_1;
return (($GLOBALS['Data_Functor_Costar_Costar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_Costar')))((function() use ($f, $g) {
  $__fn = function($a) use ($f, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)($a, ($g)($a));
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
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Functor_Costar_functorCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_functorCostar'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Functor_Costar_bindCostar': $v = (($GLOBALS['Control_Bind_Bind__dollar__Dict'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_Bind__dollar__Dict')))((object)["bind" => (function() {
  $__body = function($v, $f) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$m = $__case_0;
$f1 = $__case_1;
return (($GLOBALS['Data_Functor_Costar_Costar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_Costar')))((function() use ($f1, $m) {
  $__body = function($x) use ($f1, $m) {
    $v1 = ($f1)(($m)($x));
    $__case_0 = $v1;
    if (true) {
$g = $__case_0;
return ($g)($x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x) use ($f1, $m, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
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
    $__res = ($GLOBALS['Data_Functor_Costar_applyCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_applyCostar'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Functor_Costar_applicativeCostar': $v = (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Functor_Costar_Costar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_Costar')))((function() use ($a) {
  $__fn = function($v) use ($a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $a;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Functor_Costar_applyCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_applyCostar'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Functor_Costar_monadCostar': $v = (($GLOBALS['Control_Monad_Monad__dollar__Dict'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_Monad__dollar__Dict')))((object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Functor_Costar_applicativeCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_applicativeCostar'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Functor_Costar_bindCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_bindCostar'));
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




// Data_Functor_Costar_compose
function Data_Functor_Costar_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Costar_compose';
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
$GLOBALS['Data_Functor_Costar_compose'] = __NAMESPACE__ . '\\Data_Functor_Costar_compose';

// Data_Functor_Costar_Costar
function Data_Functor_Costar_Costar($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Costar_Costar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Costar_Costar'] = __NAMESPACE__ . '\\Data_Functor_Costar_Costar';

// Data_Functor_Costar_semigroupoidCostar
function Data_Functor_Costar_semigroupoidCostar($dictExtend) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Costar_semigroupoidCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$composeCoKleisliFlipped = (($GLOBALS['Control_Extend_composeCoKleisliFlipped'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_composeCoKleisliFlipped')))($dictExtend);
    $__res = (($GLOBALS['Control_Semigroupoid_Semigroupoid__dollar__Dict'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_Semigroupoid__dollar__Dict')))((object)["compose" => (function() use ($composeCoKleisliFlipped) {
  $__body = function($v, $v1) use ($composeCoKleisliFlipped) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$g = $__case_1;
return (($GLOBALS['Data_Functor_Costar_Costar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_Costar')))(($composeCoKleisliFlipped)($f, $g));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($composeCoKleisliFlipped, $__body, &$__fn) {
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
$GLOBALS['Data_Functor_Costar_semigroupoidCostar'] = __NAMESPACE__ . '\\Data_Functor_Costar_semigroupoidCostar';

// Data_Functor_Costar_profunctorCostar
function Data_Functor_Costar_profunctorCostar($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Costar_profunctorCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (($GLOBALS['Data_Profunctor_Profunctor__dollar__Dict'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_Profunctor__dollar__Dict')))((object)["dimap" => (function() use ($map) {
  $__body = function($f, $g, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$g1 = $__case_1;
$h = $__case_2;
return (($GLOBALS['Data_Functor_Costar_Costar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_Costar')))((($GLOBALS['Data_Functor_Costar_composeFlipped'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_composeFlipped')))(($map)($f1), (($GLOBALS['Data_Functor_Costar_composeFlipped'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_composeFlipped')))($h, $g1)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $g = null, $v = null) use ($map, $__body, &$__fn) {
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
$GLOBALS['Data_Functor_Costar_profunctorCostar'] = __NAMESPACE__ . '\\Data_Functor_Costar_profunctorCostar';

// Data_Functor_Costar_strongCostar
function Data_Functor_Costar_strongCostar($dictComonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Costar_strongCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Functor0 = (((($dictComonad)->Extend0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($Functor0);
$extract = (($GLOBALS['Control_Comonad_extract'] ?? \Control\Comonad\phpurs_eval_thunk('Control_Comonad_extract')))($dictComonad);
$profunctorCostar1 = (($GLOBALS['Data_Functor_Costar_profunctorCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_profunctorCostar')))($Functor0);
    $__res = (($GLOBALS['Data_Profunctor_Strong_Strong__dollar__Dict'] ?? \Data\Profunctor\Strong\phpurs_eval_thunk('Data_Profunctor_Strong_Strong__dollar__Dict')))((object)["first" => (function() use ($map, $extract) {
  $__body = function($v) use ($map, $extract) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return (($GLOBALS['Data_Functor_Costar_Costar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_Costar')))((function() use ($f, $map, $extract) {
  $__fn = function($x) use ($f, $map, $extract, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($f)(($map)(($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst')), $x)), (($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd')))(($extract)($x)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $extract, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "second" => (function() use ($extract, $map) {
  $__body = function($v) use ($extract, $map) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return (($GLOBALS['Data_Functor_Costar_Costar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_Costar')))((function() use ($extract, $f, $map) {
  $__fn = function($x) use ($extract, $f, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))((($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst')))(($extract)($x)), ($f)(($map)(($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd')), $x)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($extract, $map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Profunctor0" => (function() use ($profunctorCostar1) {
  $__fn = function($__dollar____unused) use ($profunctorCostar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $profunctorCostar1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Costar_strongCostar'] = __NAMESPACE__ . '\\Data_Functor_Costar_strongCostar';


// Data_Functor_Costar_hoistCostar
function Data_Functor_Costar_hoistCostar($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Costar_hoistCostar';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
return (($GLOBALS['Data_Functor_Costar_Costar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_Costar')))((($GLOBALS['Data_Functor_Costar_lcmap'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_lcmap')))($f1, $g));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Costar_hoistCostar'] = __NAMESPACE__ . '\\Data_Functor_Costar_hoistCostar';




// Data_Functor_Costar_closedCostar
function Data_Functor_Costar_closedCostar($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Costar_closedCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
$profunctorCostar1 = (($GLOBALS['Data_Functor_Costar_profunctorCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_profunctorCostar')))($dictFunctor);
    $__res = (($GLOBALS['Data_Profunctor_Closed_Closed__dollar__Dict'] ?? \Data\Profunctor\Closed\phpurs_eval_thunk('Data_Profunctor_Closed_Closed__dollar__Dict')))((object)["closed" => (function() use ($map) {
  $__body = function($v) use ($map) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return (($GLOBALS['Data_Functor_Costar_Costar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_Costar')))((function() use ($f, $map) {
  $__fn = function($g, $x = null) use ($f, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($g, &$__fn) { return $__fn($g, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($f)(($map)((function() use ($x) {
  $__fn = function($v1) use ($x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v1)($x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $g));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
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
})(), "Profunctor0" => (function() use ($profunctorCostar1) {
  $__fn = function($__dollar____unused) use ($profunctorCostar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $profunctorCostar1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Costar_closedCostar'] = __NAMESPACE__ . '\\Data_Functor_Costar_closedCostar';

// Data_Functor_Costar_categoryCostar
function Data_Functor_Costar_categoryCostar($dictComonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Costar_categoryCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$semigroupoidCostar1 = (($GLOBALS['Data_Functor_Costar_semigroupoidCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_semigroupoidCostar')))((($dictComonad)->Extend0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Category_Category__dollar__Dict'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_Category__dollar__Dict')))((object)["identity" => (($GLOBALS['Data_Functor_Costar_Costar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_Costar')))((($GLOBALS['Control_Comonad_extract'] ?? \Control\Comonad\phpurs_eval_thunk('Control_Comonad_extract')))($dictComonad)), "Semigroupoid0" => (function() use ($semigroupoidCostar1) {
  $__fn = function($__dollar____unused) use ($semigroupoidCostar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupoidCostar1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Costar_categoryCostar'] = __NAMESPACE__ . '\\Data_Functor_Costar_categoryCostar';

// Data_Functor_Costar_bifunctorCostar
function Data_Functor_Costar_bifunctorCostar($dictContravariant) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Costar_bifunctorCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$cmap = (($GLOBALS['Data_Functor_Contravariant_cmap'] ?? \Data\Functor\Contravariant\phpurs_eval_thunk('Data_Functor_Contravariant_cmap')))($dictContravariant);
    $__res = (($GLOBALS['Data_Bifunctor_Bifunctor__dollar__Dict'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_Bifunctor__dollar__Dict')))((object)["bimap" => (function() use ($cmap) {
  $__body = function($f, $g, $v) use ($cmap) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$g1 = $__case_1;
$h = $__case_2;
return (($GLOBALS['Data_Functor_Costar_Costar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_Costar')))((($GLOBALS['Data_Functor_Costar_composeFlipped'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_composeFlipped')))(($cmap)($f1), (($GLOBALS['Data_Functor_Costar_composeFlipped'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_composeFlipped')))($h, $g1)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $g = null, $v = null) use ($cmap, $__body, &$__fn) {
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
$GLOBALS['Data_Functor_Costar_bifunctorCostar'] = __NAMESPACE__ . '\\Data_Functor_Costar_bifunctorCostar';





