<?php

namespace Data\Tuple;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.BooleanAlgebra/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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
      case 'Data_Tuple_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Tuple_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Tuple_semigroupoidTuple': $v = (($GLOBALS['Control_Semigroupoid_Semigroupoid__dollar__Dict'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_Semigroupoid__dollar__Dict')))((object)["compose" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$c = ($__case_0)->v1;
$a = ($__case_1)->v0;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a, $c);
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
      case 'Data_Tuple_genericTuple': $v = (($GLOBALS['Data_Generic_Rep_Generic__dollar__Dict'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Generic__dollar__Dict')))((object)["to" => (function() {
  $__body = function($x) {
    $__case_0 = $x;
    switch (($__case_0)->tag) {
case "Product":
$arg = ($__case_0)->v0;
$arg1 = ($__case_0)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($arg, $arg1);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($x) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "from" => (function() {
  $__body = function($x) {
    $__case_0 = $x;
    switch (($__case_0)->tag) {
case "Tuple":
$arg = ($__case_0)->v0;
$arg1 = ($__case_0)->v1;
return (($GLOBALS['Data_Generic_Rep_Constructor'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Constructor')))((($GLOBALS['Data_Generic_Rep_Product'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Product')))((($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument')))($arg), (($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument')))($arg1)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($x) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Tuple_functorTuple': $v = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() {
  $__body = function($f, $m) {
    $__case_0 = $m;
    switch (($__case_0)->tag) {
case "Tuple":
$v = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($v, ($f)($v1));
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
      case 'Data_Tuple_invariantTuple': $v = (($GLOBALS['Data_Functor_Invariant_Invariant__dollar__Dict'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_Invariant__dollar__Dict')))((object)["imap" => (($GLOBALS['Data_Functor_Invariant_imapF'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_imapF')))(($GLOBALS['Data_Tuple_functorTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_functorTuple')))]); break;
      case 'Data_Tuple_extendTuple': $v = (($GLOBALS['Control_Extend_Extend__dollar__Dict'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_Extend__dollar__Dict')))((object)["extend" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$t = $__case_1;
$a = ($__case_1)->v0;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a, ($f1)($t));
break;
default:
throw new \Exception("Pattern match failure");
break;
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
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Tuple_functorTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_functorTuple'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Tuple_comonadTuple': $v = (($GLOBALS['Control_Comonad_Comonad__dollar__Dict'] ?? \Control\Comonad\phpurs_eval_thunk('Control_Comonad_Comonad__dollar__Dict')))((object)["extract" => ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd')), "Extend0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Tuple_extendTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_extendTuple'));
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




// Data_Tuple_Tuple
function Data_Tuple_Tuple($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Tuple';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Tuple'] = __NAMESPACE__ . '\\Data_Tuple_Tuple';

// Data_Tuple_uncurry
function Data_Tuple_uncurry($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_uncurry';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$b = ($__case_1)->v1;
return ($f1)($a, $b);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_uncurry'] = __NAMESPACE__ . '\\Data_Tuple_uncurry';

// Data_Tuple_swap
function Data_Tuple_swap($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_swap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($b, $a);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_swap'] = __NAMESPACE__ . '\\Data_Tuple_swap';

// Data_Tuple_snd
function Data_Tuple_snd($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_snd';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$b = ($__case_0)->v1;
return $b;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_snd'] = __NAMESPACE__ . '\\Data_Tuple_snd';

// Data_Tuple_showTuple
function Data_Tuple_showTuple($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_showTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))($dictShow);
    $__res = (function() use ($show) {
  $__fn = function($dictShow1) use ($show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show1 = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))($dictShow1);
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show, $show1) {
  $__body = function($v) use ($show, $show1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
return (($GLOBALS['Data_Tuple_append'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_append')))("(Tuple ", (($GLOBALS['Data_Tuple_append'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_append')))(($show)($a), (($GLOBALS['Data_Tuple_append'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_append')))(" ", (($GLOBALS['Data_Tuple_append'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_append')))(($show1)($b), ")"))));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($show, $show1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
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
$GLOBALS['Data_Tuple_showTuple'] = __NAMESPACE__ . '\\Data_Tuple_showTuple';

// Data_Tuple_semiringTuple
function Data_Tuple_semiringTuple($dictSemiring) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_semiringTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$add = (($GLOBALS['Data_Semiring_add'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_add')))($dictSemiring);
$one = (($GLOBALS['Data_Semiring_one'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_one')))($dictSemiring);
$mul = (($GLOBALS['Data_Semiring_mul'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_mul')))($dictSemiring);
$zero = (($GLOBALS['Data_Semiring_zero'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_zero')))($dictSemiring);
    $__res = (function() use ($add, $one, $mul, $zero) {
  $__fn = function($dictSemiring1) use ($add, $one, $mul, $zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$add1 = (($GLOBALS['Data_Semiring_add'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_add')))($dictSemiring1);
$mul1 = (($GLOBALS['Data_Semiring_mul'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_mul')))($dictSemiring1);
    $__res = (($GLOBALS['Data_Semiring_Semiring__dollar__Dict'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_Semiring__dollar__Dict')))((object)["add" => (function() use ($add, $add1) {
  $__body = function($v, $v1) use ($add, $add1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->v0;
$y1 = ($__case_0)->v1;
$x2 = ($__case_1)->v0;
$y2 = ($__case_1)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($add)($x1, $x2), ($add1)($y1, $y2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($add, $add1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "one" => (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($one, (($GLOBALS['Data_Semiring_one'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_one')))($dictSemiring1)), "mul" => (function() use ($mul, $mul1) {
  $__body = function($v, $v1) use ($mul, $mul1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->v0;
$y1 = ($__case_0)->v1;
$x2 = ($__case_1)->v0;
$y2 = ($__case_1)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($mul)($x1, $x2), ($mul1)($y1, $y2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($mul, $mul1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "zero" => (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($zero, (($GLOBALS['Data_Semiring_zero'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_zero')))($dictSemiring1))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_semiringTuple'] = __NAMESPACE__ . '\\Data_Tuple_semiringTuple';


// Data_Tuple_semigroupTuple
function Data_Tuple_semigroupTuple($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_semigroupTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append1 = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))($dictSemigroup);
    $__res = (function() use ($append1) {
  $__fn = function($dictSemigroup1) use ($append1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append2 = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))($dictSemigroup1);
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() use ($append1, $append2) {
  $__body = function($v, $v1) use ($append1, $append2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$a1 = ($__case_0)->v0;
$b1 = ($__case_0)->v1;
$a2 = ($__case_1)->v0;
$b2 = ($__case_1)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($append1)($a1, $a2), ($append2)($b1, $b2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($append1, $append2, $__body, &$__fn) {
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_semigroupTuple'] = __NAMESPACE__ . '\\Data_Tuple_semigroupTuple';

// Data_Tuple_ringTuple
function Data_Tuple_ringTuple($dictRing) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_ringTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sub = (($GLOBALS['Data_Ring_sub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_sub')))($dictRing);
$semiringTuple1 = (($GLOBALS['Data_Tuple_semiringTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_semiringTuple')))((($dictRing)->Semiring0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($semiringTuple1, $sub) {
  $__fn = function($dictRing1) use ($semiringTuple1, $sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sub1 = (($GLOBALS['Data_Ring_sub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_sub')))($dictRing1);
$semiringTuple2 = ($semiringTuple1)((($dictRing1)->Semiring0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ring_Ring__dollar__Dict'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_Ring__dollar__Dict')))((object)["sub" => (function() use ($sub, $sub1) {
  $__body = function($v, $v1) use ($sub, $sub1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->v0;
$y1 = ($__case_0)->v1;
$x2 = ($__case_1)->v0;
$y2 = ($__case_1)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($sub)($x1, $x2), ($sub1)($y1, $y2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($sub, $sub1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Semiring0" => (function() use ($semiringTuple2) {
  $__fn = function($__dollar____unused) use ($semiringTuple2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semiringTuple2;
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
$GLOBALS['Data_Tuple_ringTuple'] = __NAMESPACE__ . '\\Data_Tuple_ringTuple';

// Data_Tuple_monoidTuple
function Data_Tuple_monoidTuple($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_monoidTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
$semigroupTuple1 = (($GLOBALS['Data_Tuple_semigroupTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_semigroupTuple')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($semigroupTuple1, $mempty) {
  $__fn = function($dictMonoid1) use ($semigroupTuple1, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$semigroupTuple2 = ($semigroupTuple1)((($dictMonoid1)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($mempty, (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid1)), "Semigroup0" => (function() use ($semigroupTuple2) {
  $__fn = function($__dollar____unused) use ($semigroupTuple2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupTuple2;
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
$GLOBALS['Data_Tuple_monoidTuple'] = __NAMESPACE__ . '\\Data_Tuple_monoidTuple';

// Data_Tuple_heytingAlgebraTuple
function Data_Tuple_heytingAlgebraTuple($dictHeytingAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_heytingAlgebraTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$tt = (($GLOBALS['Data_HeytingAlgebra_tt'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_tt')))($dictHeytingAlgebra);
$ff = (($GLOBALS['Data_HeytingAlgebra_ff'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_ff')))($dictHeytingAlgebra);
$implies = (($GLOBALS['Data_HeytingAlgebra_implies'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_implies')))($dictHeytingAlgebra);
$conj1 = (($GLOBALS['Data_HeytingAlgebra_conj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_conj')))($dictHeytingAlgebra);
$disj = (($GLOBALS['Data_HeytingAlgebra_disj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_disj')))($dictHeytingAlgebra);
$not = (($GLOBALS['Data_HeytingAlgebra_not'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_not')))($dictHeytingAlgebra);
    $__res = (function() use ($tt, $ff, $implies, $conj1, $disj, $not) {
  $__fn = function($dictHeytingAlgebra1) use ($tt, $ff, $implies, $conj1, $disj, $not, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$implies1 = (($GLOBALS['Data_HeytingAlgebra_implies'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_implies')))($dictHeytingAlgebra1);
$conj2 = (($GLOBALS['Data_HeytingAlgebra_conj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_conj')))($dictHeytingAlgebra1);
$disj1 = (($GLOBALS['Data_HeytingAlgebra_disj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_disj')))($dictHeytingAlgebra1);
$not1 = (($GLOBALS['Data_HeytingAlgebra_not'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_not')))($dictHeytingAlgebra1);
    $__res = (($GLOBALS['Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict')))((object)["tt" => (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($tt, (($GLOBALS['Data_HeytingAlgebra_tt'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_tt')))($dictHeytingAlgebra1)), "ff" => (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($ff, (($GLOBALS['Data_HeytingAlgebra_ff'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_ff')))($dictHeytingAlgebra1)), "implies" => (function() use ($implies, $implies1) {
  $__body = function($v, $v1) use ($implies, $implies1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->v0;
$y1 = ($__case_0)->v1;
$x2 = ($__case_1)->v0;
$y2 = ($__case_1)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($implies)($x1, $x2), ($implies1)($y1, $y2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($implies, $implies1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "conj" => (function() use ($conj1, $conj2) {
  $__body = function($v, $v1) use ($conj1, $conj2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->v0;
$y1 = ($__case_0)->v1;
$x2 = ($__case_1)->v0;
$y2 = ($__case_1)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($conj1)($x1, $x2), ($conj2)($y1, $y2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($conj1, $conj2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "disj" => (function() use ($disj, $disj1) {
  $__body = function($v, $v1) use ($disj, $disj1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->v0;
$y1 = ($__case_0)->v1;
$x2 = ($__case_1)->v0;
$y2 = ($__case_1)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($disj)($x1, $x2), ($disj1)($y1, $y2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($disj, $disj1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "not" => (function() use ($not, $not1) {
  $__body = function($v) use ($not, $not1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$x = ($__case_0)->v0;
$y = ($__case_0)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($not)($x), ($not1)($y));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($not, $not1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
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
$GLOBALS['Data_Tuple_heytingAlgebraTuple'] = __NAMESPACE__ . '\\Data_Tuple_heytingAlgebraTuple';




// Data_Tuple_fst
function Data_Tuple_fst($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_fst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
return $a;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_fst'] = __NAMESPACE__ . '\\Data_Tuple_fst';

// Data_Tuple_lazyTuple
function Data_Tuple_lazyTuple($dictLazy) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_lazyTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$defer = (($GLOBALS['Control_Lazy_defer'] ?? \Control\Lazy\phpurs_eval_thunk('Control_Lazy_defer')))($dictLazy);
    $__res = (function() use ($defer) {
  $__fn = function($dictLazy1) use ($defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$defer1 = (($GLOBALS['Control_Lazy_defer'] ?? \Control\Lazy\phpurs_eval_thunk('Control_Lazy_defer')))($dictLazy1);
    $__res = (($GLOBALS['Control_Lazy_Lazy__dollar__Dict'] ?? \Control\Lazy\phpurs_eval_thunk('Control_Lazy_Lazy__dollar__Dict')))((object)["defer" => (function() use ($defer, $defer1) {
  $__fn = function($f) use ($defer, $defer1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($defer)((function() use ($f) {
  $__fn = function($v) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($defer1)((function() use ($f) {
  $__fn = function($v) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
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
$GLOBALS['Data_Tuple_lazyTuple'] = __NAMESPACE__ . '\\Data_Tuple_lazyTuple';


// Data_Tuple_eqTuple
function Data_Tuple_eqTuple($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_eqTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq);
    $__res = (function() use ($eq) {
  $__fn = function($dictEq1) use ($eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq1 = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq1);
    $__res = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() use ($eq, $eq1) {
  $__body = function($x, $y) use ($eq, $eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return (($GLOBALS['Data_Tuple_conj'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_conj')))(($eq)($l, $r), ($eq1)($l1, $r1));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($eq, $eq1, $__body, &$__fn) {
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
$GLOBALS['Data_Tuple_eqTuple'] = __NAMESPACE__ . '\\Data_Tuple_eqTuple';

// Data_Tuple_ordTuple
function Data_Tuple_ordTuple($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_ordTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))($dictOrd);
$eqTuple1 = (($GLOBALS['Data_Tuple_eqTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_eqTuple')))((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($eqTuple1, $compare) {
  $__fn = function($dictOrd1) use ($eqTuple1, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare1 = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))($dictOrd1);
$eqTuple2 = ($eqTuple1)((($dictOrd1)->Eq0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() use ($compare, $compare1) {
  $__body = function($x, $y) use ($compare, $compare1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = ($compare)($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_0)->tag === "GT")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (true) {
return ($compare1)($l1, $r1);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($compare, $compare1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqTuple2) {
  $__fn = function($__dollar____unused) use ($eqTuple2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqTuple2;
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
$GLOBALS['Data_Tuple_ordTuple'] = __NAMESPACE__ . '\\Data_Tuple_ordTuple';

// Data_Tuple_eq1Tuple
function Data_Tuple_eq1Tuple($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_eq1Tuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eqTuple1 = (($GLOBALS['Data_Tuple_eqTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_eqTuple')))($dictEq);
    $__res = (($GLOBALS['Data_Eq_Eq1__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq1__dollar__Dict')))((object)["eq1" => (function() use ($eqTuple1) {
  $__fn = function($dictEq1) use ($eqTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))(($eqTuple1)($dictEq1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_eq1Tuple'] = __NAMESPACE__ . '\\Data_Tuple_eq1Tuple';

// Data_Tuple_ord1Tuple
function Data_Tuple_ord1Tuple($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_ord1Tuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$ordTuple1 = (($GLOBALS['Data_Tuple_ordTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_ordTuple')))($dictOrd);
$eq1Tuple1 = (($GLOBALS['Data_Tuple_eq1Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_eq1Tuple')))((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ord_Ord1__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord1__dollar__Dict')))((object)["compare1" => (function() use ($ordTuple1) {
  $__fn = function($dictOrd1) use ($ordTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))(($ordTuple1)($dictOrd1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use ($eq1Tuple1) {
  $__fn = function($__dollar____unused) use ($eq1Tuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eq1Tuple1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_ord1Tuple'] = __NAMESPACE__ . '\\Data_Tuple_ord1Tuple';

// Data_Tuple_curry
function Data_Tuple_curry($f, $a = null, $b = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_curry';
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
    $__res = ($f)((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a, $b));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Tuple_curry'] = __NAMESPACE__ . '\\Data_Tuple_curry';


// Data_Tuple_commutativeRingTuple
function Data_Tuple_commutativeRingTuple($dictCommutativeRing) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_commutativeRingTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$ringTuple1 = (($GLOBALS['Data_Tuple_ringTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_ringTuple')))((($dictCommutativeRing)->Ring0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($ringTuple1) {
  $__fn = function($dictCommutativeRing1) use ($ringTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$ringTuple2 = ($ringTuple1)((($dictCommutativeRing1)->Ring0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_CommutativeRing_CommutativeRing__dollar__Dict'] ?? \Data\CommutativeRing\phpurs_eval_thunk('Data_CommutativeRing_CommutativeRing__dollar__Dict')))((object)["Ring0" => (function() use ($ringTuple2) {
  $__fn = function($__dollar____unused) use ($ringTuple2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ringTuple2;
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
$GLOBALS['Data_Tuple_commutativeRingTuple'] = __NAMESPACE__ . '\\Data_Tuple_commutativeRingTuple';

// Data_Tuple_boundedTuple
function Data_Tuple_boundedTuple($dictBounded) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_boundedTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$top = (($GLOBALS['Data_Bounded_top'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_top')))($dictBounded);
$bottom = (($GLOBALS['Data_Bounded_bottom'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottom')))($dictBounded);
$ordTuple1 = (($GLOBALS['Data_Tuple_ordTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_ordTuple')))((($dictBounded)->Ord0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($ordTuple1, $top, $bottom) {
  $__fn = function($dictBounded1) use ($ordTuple1, $top, $bottom, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$ordTuple2 = ($ordTuple1)((($dictBounded1)->Ord0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Bounded_Bounded__dollar__Dict'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_Bounded__dollar__Dict')))((object)["top" => (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($top, (($GLOBALS['Data_Bounded_top'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_top')))($dictBounded1)), "bottom" => (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($bottom, (($GLOBALS['Data_Bounded_bottom'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottom')))($dictBounded1)), "Ord0" => (function() use ($ordTuple2) {
  $__fn = function($__dollar____unused) use ($ordTuple2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ordTuple2;
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
$GLOBALS['Data_Tuple_boundedTuple'] = __NAMESPACE__ . '\\Data_Tuple_boundedTuple';

// Data_Tuple_booleanAlgebraTuple
function Data_Tuple_booleanAlgebraTuple($dictBooleanAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_booleanAlgebraTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$heytingAlgebraTuple1 = (($GLOBALS['Data_Tuple_heytingAlgebraTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_heytingAlgebraTuple')))((($dictBooleanAlgebra)->HeytingAlgebra0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($heytingAlgebraTuple1) {
  $__fn = function($dictBooleanAlgebra1) use ($heytingAlgebraTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$heytingAlgebraTuple2 = ($heytingAlgebraTuple1)((($dictBooleanAlgebra1)->HeytingAlgebra0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict'] ?? \Data\BooleanAlgebra\phpurs_eval_thunk('Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict')))((object)["HeytingAlgebra0" => (function() use ($heytingAlgebraTuple2) {
  $__fn = function($__dollar____unused) use ($heytingAlgebraTuple2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $heytingAlgebraTuple2;
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
$GLOBALS['Data_Tuple_booleanAlgebraTuple'] = __NAMESPACE__ . '\\Data_Tuple_booleanAlgebraTuple';

// Data_Tuple_applyTuple
function Data_Tuple_applyTuple($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_applyTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append1 = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))($dictSemigroup);
    $__res = (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => (function() use ($append1) {
  $__body = function($v, $v1) use ($append1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$a1 = ($__case_0)->v0;
$f = ($__case_0)->v1;
$a2 = ($__case_1)->v0;
$x = ($__case_1)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($append1)($a1, $a2), ($f)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($append1, $__body, &$__fn) {
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
    $__res = ($GLOBALS['Data_Tuple_functorTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_functorTuple'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_applyTuple'] = __NAMESPACE__ . '\\Data_Tuple_applyTuple';

// Data_Tuple_bindTuple
function Data_Tuple_bindTuple($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_bindTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append1 = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))($dictSemigroup);
$applyTuple1 = (($GLOBALS['Data_Tuple_applyTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_applyTuple')))($dictSemigroup);
    $__res = (($GLOBALS['Control_Bind_Bind__dollar__Dict'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_Bind__dollar__Dict')))((object)["bind" => (function() use ($append1) {
  $__body = function($v, $f) use ($append1) {
    $__case_0 = $v;
    $__case_1 = $f;
    switch (($__case_0)->tag) {
case "Tuple":
$a1 = ($__case_0)->v0;
$b = ($__case_0)->v1;
$f1 = $__case_1;
$v1 = ($f1)($b);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Tuple":
$a2 = ($__case_0)->v0;
$c = ($__case_0)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($append1)($a1, $a2), $c);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $f = null) use ($append1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyTuple1) {
  $__fn = function($__dollar____unused) use ($applyTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyTuple1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_bindTuple'] = __NAMESPACE__ . '\\Data_Tuple_bindTuple';

// Data_Tuple_applicativeTuple
function Data_Tuple_applicativeTuple($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_applicativeTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applyTuple1 = (($GLOBALS['Data_Tuple_applyTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_applyTuple')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))((($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid)), "Apply0" => (function() use ($applyTuple1) {
  $__fn = function($__dollar____unused) use ($applyTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyTuple1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_applicativeTuple'] = __NAMESPACE__ . '\\Data_Tuple_applicativeTuple';

// Data_Tuple_monadTuple
function Data_Tuple_monadTuple($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_monadTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeTuple1 = (($GLOBALS['Data_Tuple_applicativeTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_applicativeTuple')))($dictMonoid);
$bindTuple1 = (($GLOBALS['Data_Tuple_bindTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_bindTuple')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Monad_Monad__dollar__Dict'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_Monad__dollar__Dict')))((object)["Applicative0" => (function() use ($applicativeTuple1) {
  $__fn = function($__dollar____unused) use ($applicativeTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeTuple1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindTuple1) {
  $__fn = function($__dollar____unused) use ($bindTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bindTuple1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_monadTuple'] = __NAMESPACE__ . '\\Data_Tuple_monadTuple';

