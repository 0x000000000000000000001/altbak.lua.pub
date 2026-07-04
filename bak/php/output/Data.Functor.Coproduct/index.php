<?php

namespace Data\Functor\Coproduct;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
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
      case 'Data_Functor_Coproduct_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Functor_Coproduct_newtypeCoproduct': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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



// Data_Functor_Coproduct_bimap
function Data_Functor_Coproduct_bimap($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_bimap';
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "Left":
$f = $__case_0;
$l = ($__case_2)->v0;
return (($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')))(($f)($l));
break;
case "Right":
$g = $__case_1;
$r = ($__case_2)->v0;
return (($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')))(($g)($r));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v, $v1, $v2);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_bimap'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_bimap';

// Data_Functor_Coproduct_compose
function Data_Functor_Coproduct_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_compose';
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
$GLOBALS['Data_Functor_Coproduct_compose'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_compose';

// Data_Functor_Coproduct_Coproduct
function Data_Functor_Coproduct_Coproduct($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Coproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Coproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Coproduct';

// Data_Functor_Coproduct_showCoproduct
function Data_Functor_Coproduct_showCoproduct($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_showCoproduct';
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
case "Left":
$fa = ($__case_0)->v0;
return (($GLOBALS['Data_Functor_Coproduct_append'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_append')))("(left ", (($GLOBALS['Data_Functor_Coproduct_append'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_append')))(($show)($fa), ")"));
break;
case "Right":
$ga = ($__case_0)->v0;
return (($GLOBALS['Data_Functor_Coproduct_append'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_append')))("(right ", (($GLOBALS['Data_Functor_Coproduct_append'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_append')))(($show1)($ga), ")"));
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
$GLOBALS['Data_Functor_Coproduct_showCoproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_showCoproduct';

// Data_Functor_Coproduct_right
function Data_Functor_Coproduct_right($ga) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_right';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Functor_Coproduct_Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_Coproduct')))((($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')))($ga));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_right'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_right';


// Data_Functor_Coproduct_left
function Data_Functor_Coproduct_left($fa) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_left';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Functor_Coproduct_Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_Coproduct')))((($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')))($fa));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_left'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_left';

// Data_Functor_Coproduct_functorCoproduct
function Data_Functor_Coproduct_functorCoproduct($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_functorCoproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (function() use ($map) {
  $__fn = function($dictFunctor1) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor1);
    $__res = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() use ($map, $map1) {
  $__body = function($f, $v) use ($map, $map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$e = $__case_1;
return (($GLOBALS['Data_Functor_Coproduct_Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_Coproduct')))((($GLOBALS['Data_Functor_Coproduct_bimap'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_bimap')))(($map)($f1), ($map1)($f1), $e));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $map1, $__body, &$__fn) {
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_functorCoproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_functorCoproduct';

// Data_Functor_Coproduct_eq1Coproduct
function Data_Functor_Coproduct_eq1Coproduct($dictEq1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_eq1Coproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq1 = (($GLOBALS['Data_Eq_eq1'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq1')))($dictEq1);
    $__res = (function() use ($eq1) {
  $__fn = function($dictEq11) use ($eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq11 = (($GLOBALS['Data_Eq_eq1'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq1')))($dictEq11);
    $__res = (($GLOBALS['Data_Eq_Eq1__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq1__dollar__Dict')))((object)["eq1" => (function() use ($eq1, $eq11) {
  $__fn = function($dictEq) use ($eq1, $eq11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq12 = ($eq1)($dictEq);
$eq13 = ($eq11)($dictEq);
    $__res = (function() use ($eq12, $eq13) {
  $__body = function($v, $v1) use ($eq12, $eq13) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
$__case_0 = $x;
$__case_1 = $y;
if (((($__case_0)->tag === "Left") && (($__case_1)->tag === "Left"))) {
$fa = ($__case_0)->v0;
$ga = ($__case_1)->v0;
return ($eq12)($fa, $ga);
} else {
if (((($__case_0)->tag === "Right") && (($__case_1)->tag === "Right"))) {
$fa = ($__case_0)->v0;
$ga = ($__case_1)->v0;
return ($eq13)($fa, $ga);
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($eq12, $eq13, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
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
$GLOBALS['Data_Functor_Coproduct_eq1Coproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_eq1Coproduct';

// Data_Functor_Coproduct_eqCoproduct
function Data_Functor_Coproduct_eqCoproduct($dictEq1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_eqCoproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq1Coproduct1 = (($GLOBALS['Data_Functor_Coproduct_eq1Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_eq1Coproduct')))($dictEq1);
    $__res = (function() use ($eq1Coproduct1) {
  $__fn = function($dictEq11) use ($eq1Coproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq1 = (($GLOBALS['Data_Eq_eq1'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq1')))(($eq1Coproduct1)($dictEq11));
    $__res = (function() use ($eq1) {
  $__fn = function($dictEq) use ($eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => ($eq1)($dictEq)]);
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
$GLOBALS['Data_Functor_Coproduct_eqCoproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_eqCoproduct';

// Data_Functor_Coproduct_ord1Coproduct
function Data_Functor_Coproduct_ord1Coproduct($dictOrd1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_ord1Coproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare1 = (($GLOBALS['Data_Ord_compare1'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare1')))($dictOrd1);
$eq1Coproduct1 = (($GLOBALS['Data_Functor_Coproduct_eq1Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_eq1Coproduct')))((($dictOrd1)->Eq10)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($eq1Coproduct1, $compare1) {
  $__fn = function($dictOrd11) use ($eq1Coproduct1, $compare1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare11 = (($GLOBALS['Data_Ord_compare1'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare1')))($dictOrd11);
$eq1Coproduct2 = ($eq1Coproduct1)((($dictOrd11)->Eq10)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ord_Ord1__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord1__dollar__Dict')))((object)["compare1" => (function() use ($compare1, $compare11) {
  $__fn = function($dictOrd) use ($compare1, $compare11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare12 = ($compare1)($dictOrd);
$compare13 = ($compare11)($dictOrd);
    $__res = (function() use ($compare12, $compare13) {
  $__body = function($v, $v1) use ($compare12, $compare13) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
$__case_0 = $x;
$__case_1 = $y;
if (((($__case_0)->tag === "Left") && (($__case_1)->tag === "Left"))) {
$fa = ($__case_0)->v0;
$ga = ($__case_1)->v0;
return ($compare12)($fa, $ga);
} else {
if ((($__case_0)->tag === "Left")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "Left")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "Right") && (($__case_1)->tag === "Right"))) {
$fa = ($__case_0)->v0;
$ga = ($__case_1)->v0;
return ($compare13)($fa, $ga);
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($compare12, $compare13, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use ($eq1Coproduct2) {
  $__fn = function($__dollar____unused) use ($eq1Coproduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eq1Coproduct2;
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
$GLOBALS['Data_Functor_Coproduct_ord1Coproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_ord1Coproduct';

// Data_Functor_Coproduct_ordCoproduct
function Data_Functor_Coproduct_ordCoproduct($dictOrd1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_ordCoproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$ord1Coproduct1 = (($GLOBALS['Data_Functor_Coproduct_ord1Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_ord1Coproduct')))($dictOrd1);
$eqCoproduct1 = (($GLOBALS['Data_Functor_Coproduct_eqCoproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_eqCoproduct')))((($dictOrd1)->Eq10)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($ord1Coproduct1, $eqCoproduct1) {
  $__fn = function($dictOrd11) use ($ord1Coproduct1, $eqCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare1 = (($GLOBALS['Data_Ord_compare1'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare1')))(($ord1Coproduct1)($dictOrd11));
$eqCoproduct2 = ($eqCoproduct1)((($dictOrd11)->Eq10)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($eqCoproduct2, $compare1) {
  $__fn = function($dictOrd) use ($eqCoproduct2, $compare1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eqCoproduct3 = ($eqCoproduct2)((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => ($compare1)($dictOrd), "Eq0" => (function() use ($eqCoproduct3) {
  $__fn = function($__dollar____unused) use ($eqCoproduct3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqCoproduct3;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
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
$GLOBALS['Data_Functor_Coproduct_ordCoproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_ordCoproduct';

// Data_Functor_Coproduct_coproduct
function Data_Functor_Coproduct_coproduct($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_coproduct';
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "Left":
$f = $__case_0;
$a = ($__case_2)->v0;
return ($f)($a);
break;
case "Right":
$g = $__case_1;
$b = ($__case_2)->v0;
return ($g)($b);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v, $v1, $v2);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_coproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_coproduct';

// Data_Functor_Coproduct_extendCoproduct
function Data_Functor_Coproduct_extendCoproduct($dictExtend) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_extendCoproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$extend = (($GLOBALS['Control_Extend_extend'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_extend')))($dictExtend);
$functorCoproduct1 = (($GLOBALS['Data_Functor_Coproduct_functorCoproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_functorCoproduct')))((($dictExtend)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($functorCoproduct1, $extend) {
  $__fn = function($dictExtend1) use ($functorCoproduct1, $extend, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$extend1 = (($GLOBALS['Control_Extend_extend'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_extend')))($dictExtend1);
$functorCoproduct2 = ($functorCoproduct1)((($dictExtend1)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Extend_Extend__dollar__Dict'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_Extend__dollar__Dict')))((object)["extend" => (function() use ($extend, $extend1) {
  $__fn = function($f) use ($extend, $extend1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Functor_Coproduct_compose'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_compose')))(($GLOBALS['Data_Functor_Coproduct_Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_Coproduct')), (($GLOBALS['Data_Functor_Coproduct_coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_coproduct')))((($GLOBALS['Data_Functor_Coproduct_compose'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_compose')))(($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')), ($extend)((($GLOBALS['Data_Functor_Coproduct_compose'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_compose')))($f, (($GLOBALS['Data_Functor_Coproduct_compose'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_compose')))(($GLOBALS['Data_Functor_Coproduct_Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_Coproduct')), ($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')))))), (($GLOBALS['Data_Functor_Coproduct_compose'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_compose')))(($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')), ($extend1)((($GLOBALS['Data_Functor_Coproduct_compose'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_compose')))($f, (($GLOBALS['Data_Functor_Coproduct_compose'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_compose')))(($GLOBALS['Data_Functor_Coproduct_Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_Coproduct')), ($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right'))))))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorCoproduct2) {
  $__fn = function($__dollar____unused) use ($functorCoproduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorCoproduct2;
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
$GLOBALS['Data_Functor_Coproduct_extendCoproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_extendCoproduct';

// Data_Functor_Coproduct_comonadCoproduct
function Data_Functor_Coproduct_comonadCoproduct($dictComonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_comonadCoproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$extract = (($GLOBALS['Control_Comonad_extract'] ?? \Control\Comonad\phpurs_eval_thunk('Control_Comonad_extract')))($dictComonad);
$extendCoproduct1 = (($GLOBALS['Data_Functor_Coproduct_extendCoproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_extendCoproduct')))((($dictComonad)->Extend0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($extendCoproduct1, $extract) {
  $__fn = function($dictComonad1) use ($extendCoproduct1, $extract, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$extendCoproduct2 = ($extendCoproduct1)((($dictComonad1)->Extend0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Comonad_Comonad__dollar__Dict'] ?? \Control\Comonad\phpurs_eval_thunk('Control_Comonad_Comonad__dollar__Dict')))((object)["extract" => (($GLOBALS['Data_Functor_Coproduct_coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_coproduct')))($extract, (($GLOBALS['Control_Comonad_extract'] ?? \Control\Comonad\phpurs_eval_thunk('Control_Comonad_extract')))($dictComonad1)), "Extend0" => (function() use ($extendCoproduct2) {
  $__fn = function($__dollar____unused) use ($extendCoproduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $extendCoproduct2;
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
$GLOBALS['Data_Functor_Coproduct_comonadCoproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_comonadCoproduct';

// Data_Functor_Coproduct_bihoistCoproduct
function Data_Functor_Coproduct_bihoistCoproduct($natF, $natG = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_bihoistCoproduct';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($natF, $natG, $__fn) { return $__fn($natF, $natG, $v); };
    if ($__num === 1) return function($natG, $v = null) use ($natF, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($natF, $natG, $v);
      if ($__num2 === 1) return function($v) use ($natF, $natG, $__fn) { return $__fn($natF, $natG, $v); };
      return phpurs_curry_fallback($__fn, [$natF], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($natF, $natG, $v) {
    $__case_0 = $natF;
    $__case_1 = $natG;
    $__case_2 = $v;
    if (true) {
$natF1 = $__case_0;
$natG1 = $__case_1;
$e = $__case_2;
return (($GLOBALS['Data_Functor_Coproduct_Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_Coproduct')))((($GLOBALS['Data_Functor_Coproduct_bimap'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_bimap')))($natF1, $natG1, $e));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($natF, $natG, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_bihoistCoproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_bihoistCoproduct';

