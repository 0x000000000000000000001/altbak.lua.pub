<?php

namespace Data\NonEmpty;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
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
      case 'Data_NonEmpty_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_NonEmpty_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_NonEmpty_map
function Data_NonEmpty_map($f, $m = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_map';
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($f, $__fn) { return $__fn($f, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
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
    $__res = $__body($f, $m);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_NonEmpty_map'] = __NAMESPACE__ . '\\Data_NonEmpty_map';

// Data_NonEmpty_map1
function Data_NonEmpty_map1($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_map1';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Just")) {
$fn = $__case_0;
$x = ($__case_1)->v0;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($fn)($x));
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
    $__res = $__body($v, $v1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_NonEmpty_map1'] = __NAMESPACE__ . '\\Data_NonEmpty_map1';


// Data_NonEmpty_compose
function Data_NonEmpty_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_compose';
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
$GLOBALS['Data_NonEmpty_compose'] = __NAMESPACE__ . '\\Data_NonEmpty_compose';


// Data_NonEmpty_NonEmpty
function Data_NonEmpty_NonEmpty($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_NonEmpty';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_NonEmpty_NonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_NonEmpty';

// Data_NonEmpty_unfoldable1NonEmpty
function Data_NonEmpty_unfoldable1NonEmpty($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_unfoldable1NonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$unfoldr = (($GLOBALS['Data_Unfoldable_unfoldr'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_unfoldr')))($dictUnfoldable);
    $__res = (($GLOBALS['Data_Unfoldable1_Unfoldable1__dollar__Dict'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_Unfoldable1__dollar__Dict')))((object)["unfoldr1" => (function() use ($unfoldr) {
  $__fn = function($f, $b = null) use ($unfoldr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Tuple_uncurry'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_uncurry')))(($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')), (($GLOBALS['Data_NonEmpty_map'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_map')))(($unfoldr)((($GLOBALS['Data_NonEmpty_map1'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_map1')))($f)), ($f)($b)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_unfoldable1NonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_unfoldable1NonEmpty';

// Data_NonEmpty_tail
function Data_NonEmpty_tail($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_tail';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "NonEmpty":
$xs = ($__case_0)->v1;
return $xs;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_tail'] = __NAMESPACE__ . '\\Data_NonEmpty_tail';

// Data_NonEmpty_singleton
function Data_NonEmpty_singleton($dictPlus) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_singleton';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$empty = (($GLOBALS['Control_Plus_empty'] ?? \Control\Plus\phpurs_eval_thunk('Control_Plus_empty')))($dictPlus);
    $__res = (function() use ($empty) {
  $__fn = function($a) use ($empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')))($a, $empty);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_singleton'] = __NAMESPACE__ . '\\Data_NonEmpty_singleton';

// Data_NonEmpty_showNonEmpty
function Data_NonEmpty_showNonEmpty($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_showNonEmpty';
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
case "NonEmpty":
$a = ($__case_0)->v0;
$fa = ($__case_0)->v1;
return (($GLOBALS['Data_NonEmpty_append'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_append')))("(NonEmpty ", (($GLOBALS['Data_NonEmpty_append'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_append')))(($show)($a), (($GLOBALS['Data_NonEmpty_append'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_append')))(" ", (($GLOBALS['Data_NonEmpty_append'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_append')))(($show1)($fa), ")"))));
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
$GLOBALS['Data_NonEmpty_showNonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_showNonEmpty';

// Data_NonEmpty_semigroupNonEmpty
function Data_NonEmpty_semigroupNonEmpty($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_semigroupNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))($dictApplicative);
    $__res = (function() use ($pure) {
  $__fn = function($dictSemigroup) use ($pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append1 = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))($dictSemigroup);
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() use ($append1, $pure) {
  $__body = function($v, $v1) use ($append1, $pure) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$a1 = ($__case_0)->v0;
$f1 = ($__case_0)->v1;
$a2 = ($__case_1)->v0;
$f2 = ($__case_1)->v1;
return (($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')))($a1, ($append1)($f1, ($append1)(($pure)($a2), $f2)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($append1, $pure, $__body, &$__fn) {
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
$GLOBALS['Data_NonEmpty_semigroupNonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_semigroupNonEmpty';

// Data_NonEmpty_oneOf
function Data_NonEmpty_oneOf($dictAlternative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_oneOf';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$alt = (($GLOBALS['Control_Alt_alt'] ?? \Control\Alt\phpurs_eval_thunk('Control_Alt_alt')))((((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Alt0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($alt, $pure) {
  $__body = function($v) use ($alt, $pure) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "NonEmpty":
$a = ($__case_0)->v0;
$fa = ($__case_0)->v1;
return ($alt)(($pure)($a), $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($alt, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_oneOf'] = __NAMESPACE__ . '\\Data_NonEmpty_oneOf';

// Data_NonEmpty_head
function Data_NonEmpty_head($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_head';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
return $x;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_head'] = __NAMESPACE__ . '\\Data_NonEmpty_head';

// Data_NonEmpty_functorNonEmpty
function Data_NonEmpty_functorNonEmpty($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_functorNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map2 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() use ($map2) {
  $__body = function($f, $m) use ($map2) {
    $__case_0 = $m;
    switch (($__case_0)->tag) {
case "NonEmpty":
$v = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
return (($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')))(($f)($v), ($map2)($f, $v1));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $m = null) use ($map2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($f, &$__fn) { return $__fn($f, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $m);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_functorNonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_functorNonEmpty';

// Data_NonEmpty_functorWithIndex
function Data_NonEmpty_functorWithIndex($dictFunctorWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_functorWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mapWithIndex = (($GLOBALS['Data_FunctorWithIndex_mapWithIndex'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_mapWithIndex')))($dictFunctorWithIndex);
$functorNonEmpty1 = (($GLOBALS['Data_NonEmpty_functorNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_functorNonEmpty')))((($dictFunctorWithIndex)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() use ($mapWithIndex) {
  $__body = function($f, $v) use ($mapWithIndex) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return (($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')))(($f1)(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')), $a), ($mapWithIndex)((($GLOBALS['Data_NonEmpty_compose'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_compose')))($f1, ($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just'))), $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($mapWithIndex, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorNonEmpty1) {
  $__fn = function($__dollar____unused) use ($functorNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorNonEmpty1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_functorWithIndex'] = __NAMESPACE__ . '\\Data_NonEmpty_functorWithIndex';

// Data_NonEmpty_fromNonEmpty
function Data_NonEmpty_fromNonEmpty($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_fromNonEmpty';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return ($f1)($a, $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_NonEmpty_fromNonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_fromNonEmpty';

// Data_NonEmpty_foldableNonEmpty
function Data_NonEmpty_foldableNonEmpty($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_foldableNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap = (($GLOBALS['Data_Foldable_foldMap'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldMap')))($dictFoldable);
$foldl = (($GLOBALS['Data_Foldable_foldl'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl')))($dictFoldable);
$foldr = (($GLOBALS['Data_Foldable_foldr'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldr')))($dictFoldable);
    $__res = (($GLOBALS['Data_Foldable_Foldable__dollar__Dict'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_Foldable__dollar__Dict')))((object)["foldMap" => (function() use ($foldMap) {
  $__fn = function($dictMonoid) use ($foldMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append1 = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$foldMap1 = ($foldMap)($dictMonoid);
    $__res = (function() use ($append1, $foldMap1) {
  $__body = function($f, $v) use ($append1, $foldMap1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return ($append1)(($f1)($a), ($foldMap1)($f1, $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($append1, $foldMap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($foldl) {
  $__body = function($f, $b, $v) use ($foldl) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$fa = ($__case_2)->v1;
return ($foldl)($f1, ($f1)($b1, $a), $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $b = null, $v = null) use ($foldl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
    if ($__num === 1) return function($b, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b, $v);
      if ($__num2 === 1) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $b, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldr" => (function() use ($foldr) {
  $__body = function($f, $b, $v) use ($foldr) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$fa = ($__case_2)->v1;
return ($f1)($a, ($foldr)($f1, $b1, $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $b = null, $v = null) use ($foldr, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
    if ($__num === 1) return function($b, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b, $v);
      if ($__num2 === 1) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $b, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_foldableNonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_foldableNonEmpty';

// Data_NonEmpty_foldableWithIndexNonEmpty
function Data_NonEmpty_foldableWithIndexNonEmpty($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_foldableWithIndexNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex = (($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMapWithIndex')))($dictFoldableWithIndex);
$foldlWithIndex = (($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldlWithIndex')))($dictFoldableWithIndex);
$foldrWithIndex = (($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldrWithIndex')))($dictFoldableWithIndex);
$foldableNonEmpty1 = (($GLOBALS['Data_NonEmpty_foldableNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_foldableNonEmpty')))((($dictFoldableWithIndex)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict')))((object)["foldMapWithIndex" => (function() use ($foldMapWithIndex) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append1 = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$foldMapWithIndex1 = ($foldMapWithIndex)($dictMonoid);
    $__res = (function() use ($append1, $foldMapWithIndex1) {
  $__body = function($f, $v) use ($append1, $foldMapWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return ($append1)(($f1)(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')), $a), ($foldMapWithIndex1)((($GLOBALS['Data_NonEmpty_compose'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_compose')))($f1, ($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just'))), $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($append1, $foldMapWithIndex1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use ($foldlWithIndex) {
  $__body = function($f, $b, $v) use ($foldlWithIndex) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$fa = ($__case_2)->v1;
return ($foldlWithIndex)((($GLOBALS['Data_NonEmpty_compose'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_compose')))($f1, ($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just'))), ($f1)(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')), $b1, $a), $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $b = null, $v = null) use ($foldlWithIndex, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
    if ($__num === 1) return function($b, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b, $v);
      if ($__num2 === 1) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $b, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldrWithIndex" => (function() use ($foldrWithIndex) {
  $__body = function($f, $b, $v) use ($foldrWithIndex) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$fa = ($__case_2)->v1;
return ($f1)(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')), $a, ($foldrWithIndex)((($GLOBALS['Data_NonEmpty_compose'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_compose')))($f1, ($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just'))), $b1, $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $b = null, $v = null) use ($foldrWithIndex, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
    if ($__num === 1) return function($b, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b, $v);
      if ($__num2 === 1) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $b, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() use ($foldableNonEmpty1) {
  $__fn = function($__dollar____unused) use ($foldableNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableNonEmpty1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_foldableWithIndexNonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_foldableWithIndexNonEmpty';

// Data_NonEmpty_traversableNonEmpty
function Data_NonEmpty_traversableNonEmpty($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_traversableNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sequence = (($GLOBALS['Data_Traversable_sequence'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_sequence')))($dictTraversable);
$traverse = (($GLOBALS['Data_Traversable_traverse'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traverse')))($dictTraversable);
$functorNonEmpty1 = (($GLOBALS['Data_NonEmpty_functorNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_functorNonEmpty')))((($dictTraversable)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$foldableNonEmpty1 = (($GLOBALS['Data_NonEmpty_foldableNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_foldableNonEmpty')))((($dictTraversable)->Foldable1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Traversable_Traversable__dollar__Dict'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_Traversable__dollar__Dict')))((object)["sequence" => (function() use ($sequence) {
  $__fn = function($dictApplicative) use ($sequence, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Apply0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($Apply0);
$map2 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($Apply0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$sequence1 = ($sequence)($dictApplicative);
    $__res = (function() use ($apply, $map2, $sequence1) {
  $__body = function($v) use ($apply, $map2, $sequence1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "NonEmpty":
$a = ($__case_0)->v0;
$fa = ($__case_0)->v1;
return ($apply)(($map2)(($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')), $a), ($sequence1)($fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($apply, $map2, $sequence1, $__body, &$__fn) {
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
})(), "traverse" => (function() use ($traverse) {
  $__fn = function($dictApplicative) use ($traverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Apply0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($Apply0);
$map2 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($Apply0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traverse1 = ($traverse)($dictApplicative);
    $__res = (function() use ($apply, $map2, $traverse1) {
  $__body = function($f, $v) use ($apply, $map2, $traverse1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return ($apply)(($map2)(($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')), ($f1)($a)), ($traverse1)($f1, $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($apply, $map2, $traverse1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorNonEmpty1) {
  $__fn = function($__dollar____unused) use ($functorNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorNonEmpty1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use ($foldableNonEmpty1) {
  $__fn = function($__dollar____unused) use ($foldableNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableNonEmpty1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_traversableNonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_traversableNonEmpty';

// Data_NonEmpty_traversableWithIndexNonEmpty
function Data_NonEmpty_traversableWithIndexNonEmpty($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_traversableWithIndexNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverseWithIndex = (($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverseWithIndex')))($dictTraversableWithIndex);
$functorWithIndex1 = (($GLOBALS['Data_NonEmpty_functorWithIndex'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_functorWithIndex')))((($dictTraversableWithIndex)->FunctorWithIndex0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$foldableWithIndexNonEmpty1 = (($GLOBALS['Data_NonEmpty_foldableWithIndexNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_foldableWithIndexNonEmpty')))((($dictTraversableWithIndex)->FoldableWithIndex1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traversableNonEmpty1 = (($GLOBALS['Data_NonEmpty_traversableNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_traversableNonEmpty')))((($dictTraversableWithIndex)->Traversable2)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() use ($traverseWithIndex) {
  $__fn = function($dictApplicative) use ($traverseWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Apply0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($Apply0);
$map2 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($Apply0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traverseWithIndex1 = ($traverseWithIndex)($dictApplicative);
    $__res = (function() use ($apply, $map2, $traverseWithIndex1) {
  $__body = function($f, $v) use ($apply, $map2, $traverseWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return ($apply)(($map2)(($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')), ($f1)(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')), $a)), ($traverseWithIndex1)((($GLOBALS['Data_NonEmpty_compose'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_compose')))($f1, ($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just'))), $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($apply, $map2, $traverseWithIndex1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() use ($functorWithIndex1) {
  $__fn = function($__dollar____unused) use ($functorWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorWithIndex1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use ($foldableWithIndexNonEmpty1) {
  $__fn = function($__dollar____unused) use ($foldableWithIndexNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableWithIndexNonEmpty1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use ($traversableNonEmpty1) {
  $__fn = function($__dollar____unused) use ($traversableNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $traversableNonEmpty1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_traversableWithIndexNonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_traversableWithIndexNonEmpty';

// Data_NonEmpty_foldable1NonEmpty
function Data_NonEmpty_foldable1NonEmpty($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_foldable1NonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldl = (($GLOBALS['Data_Foldable_foldl'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl')))($dictFoldable);
$foldr = (($GLOBALS['Data_Foldable_foldr'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldr')))($dictFoldable);
$foldableNonEmpty1 = (($GLOBALS['Data_NonEmpty_foldableNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_foldableNonEmpty')))($dictFoldable);
    $__res = (($GLOBALS['Data_Semigroup_Foldable_Foldable1__dollar__Dict'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_Foldable1__dollar__Dict')))((object)["foldMap1" => (function() use ($foldl) {
  $__fn = function($dictSemigroup) use ($foldl, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append1 = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))($dictSemigroup);
    $__res = (function() use ($foldl, $append1) {
  $__body = function($f, $v) use ($foldl, $append1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return ($foldl)((function() use ($append1, $f1) {
  $__fn = function($s, $a1 = null) use ($append1, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a1) use ($s, &$__fn) { return $__fn($s, $a1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($append1)($s, ($f1)($a1));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($f1)($a), $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($foldl, $append1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldr1" => (function() use ($foldr) {
  $__body = function($f, $v) use ($foldr) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))($a, ($f1)($a), ($foldr)((function() use ($f1) {
  $__fn = function($a1) use ($f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_NonEmpty_compose'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_compose')))(($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))($a1, ($f1)($a1)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')), $fa));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($foldr, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl1" => (function() use ($foldl) {
  $__body = function($f, $v) use ($foldl) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
return ($foldl)($f1, $a, $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($foldl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() use ($foldableNonEmpty1) {
  $__fn = function($__dollar____unused) use ($foldableNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableNonEmpty1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_foldable1NonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_foldable1NonEmpty';

// Data_NonEmpty_foldl1
function Data_NonEmpty_foldl1($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_foldl1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Semigroup_Foldable_foldl1'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_foldl1')))((($GLOBALS['Data_NonEmpty_foldable1NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_foldable1NonEmpty')))($dictFoldable));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_foldl1'] = __NAMESPACE__ . '\\Data_NonEmpty_foldl1';

// Data_NonEmpty_eqNonEmpty
function Data_NonEmpty_eqNonEmpty($dictEq1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_eqNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq1 = (($GLOBALS['Data_Eq_eq1'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq1')))($dictEq1);
    $__res = (function() use ($eq1) {
  $__fn = function($dictEq) use ($eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq);
$eq11 = ($eq1)($dictEq);
    $__res = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() use ($eq, $eq11) {
  $__body = function($x, $y) use ($eq, $eq11) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
return (($GLOBALS['Data_NonEmpty_conj'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_conj')))(($eq)($l, $r), ($eq11)($l1, $r1));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($eq, $eq11, $__body, &$__fn) {
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
$GLOBALS['Data_NonEmpty_eqNonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_eqNonEmpty';

// Data_NonEmpty_ordNonEmpty
function Data_NonEmpty_ordNonEmpty($dictOrd1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_ordNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare1 = (($GLOBALS['Data_Ord_compare1'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare1')))($dictOrd1);
$eqNonEmpty1 = (($GLOBALS['Data_NonEmpty_eqNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_eqNonEmpty')))((($dictOrd1)->Eq10)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($compare1, $eqNonEmpty1) {
  $__fn = function($dictOrd) use ($compare1, $eqNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))($dictOrd);
$compare11 = ($compare1)($dictOrd);
$eqNonEmpty2 = ($eqNonEmpty1)((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() use ($compare, $compare11) {
  $__body = function($x, $y) use ($compare, $compare11) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
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
return ($compare11)($l1, $r1);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($compare, $compare11, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqNonEmpty2) {
  $__fn = function($__dollar____unused) use ($eqNonEmpty2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqNonEmpty2;
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
$GLOBALS['Data_NonEmpty_ordNonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_ordNonEmpty';

// Data_NonEmpty_eq1NonEmpty
function Data_NonEmpty_eq1NonEmpty($dictEq1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_eq1NonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eqNonEmpty1 = (($GLOBALS['Data_NonEmpty_eqNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_eqNonEmpty')))($dictEq1);
    $__res = (($GLOBALS['Data_Eq_Eq1__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq1__dollar__Dict')))((object)["eq1" => (function() use ($eqNonEmpty1) {
  $__fn = function($dictEq) use ($eqNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))(($eqNonEmpty1)($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_eq1NonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_eq1NonEmpty';

// Data_NonEmpty_ord1NonEmpty
function Data_NonEmpty_ord1NonEmpty($dictOrd1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_ord1NonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$ordNonEmpty1 = (($GLOBALS['Data_NonEmpty_ordNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_ordNonEmpty')))($dictOrd1);
$eq1NonEmpty1 = (($GLOBALS['Data_NonEmpty_eq1NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_eq1NonEmpty')))((($dictOrd1)->Eq10)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ord_Ord1__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord1__dollar__Dict')))((object)["compare1" => (function() use ($ordNonEmpty1) {
  $__fn = function($dictOrd) use ($ordNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))(($ordNonEmpty1)($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use ($eq1NonEmpty1) {
  $__fn = function($__dollar____unused) use ($eq1NonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eq1NonEmpty1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_ord1NonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_ord1NonEmpty';

