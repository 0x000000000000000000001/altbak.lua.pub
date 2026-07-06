<?php

namespace Data\Interval\Duration\Iso;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Interval.Duration/index.php';
require_once __DIR__ . '/../Data.Interval.Duration.Iso/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.NonEmpty/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Number/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
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
    $missing = $expected - count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num > 1) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...array_slice($merged, 0, $expected));
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
      case 'Data_Interval_Duration_Iso_append': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semigroup_semigroupString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupString'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_Duration_Iso_show': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Interval_Duration_showDuration'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_showDuration'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_Duration_Iso_show1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Interval_Duration_showDurationComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_showDurationComponent'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_Duration_Iso_eq': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Interval_Duration_eqDuration'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_eqDuration'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_Duration_Iso_compare': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Interval_Duration_ordDuration'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_ordDuration'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_Duration_Iso_eq1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Interval_Duration_eqDurationComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_eqDurationComponent'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_Duration_Iso_compare1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Interval_Duration_ordDurationComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_ordDurationComponent'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_Duration_Iso_conj': $v = (function() {
  $__case_0 = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->conj;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_Duration_Iso_lookup': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Interval_Duration_ordDurationComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_ordDurationComponent'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  $compare = $__case_res_0;
  return (function() use ($compare) {
  $__fn = function($k) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($compare, $k, &$go) {
  $__fn = function($v) use ($compare, $k, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue 3;
break;
case "GT":
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue 3;
break;
case "EQ":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($mv);
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
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Interval_Duration_Iso_greaterThan': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  $compare3 = $__case_res_0;
  return (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "GT":
return true;
break;
default:
return false;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Interval_Duration_Iso_pure': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_applicativeList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applicativeList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_Duration_Iso_empty': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_plusList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_plusList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->empty;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_Duration_Iso_foldMap': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_Duration_Iso_foldMap1': $v = (($GLOBALS['Data_Interval_Duration_Iso_foldMap'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_foldMap')))(($GLOBALS['Data_List_Types_monoidList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_monoidList'))); break;
      case 'Data_Interval_Duration_Iso_greaterThanOrEq': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  $compare3 = $__case_res_0;
  return (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return false;
break;
default:
return true;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Interval_Duration_Iso_notEq': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Eq_eqNumber'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  $eq3 = $__case_res_0;
  return (function() use ($eq3) {
  $__fn = function($x, $y = null) use ($eq3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Eq_eq2 = ($GLOBALS['Data_Eq_eq2'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq2'));
    $__res = ($__global_Data_Eq_eq2)(($eq3)($x, $y), false);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Interval_Duration_Iso_greaterThan1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  $compare3 = $__case_res_0;
  return (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "GT":
return true;
break;
default:
return false;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Interval_Duration_Iso_unwrap': $v = (($GLOBALS['Data_Newtype_unwrap'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Interval_Duration_Iso_foldMap2': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semiring_semiringNumber'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
  $add = $__case_res_0;
  $semigroupAdditive1 = (object)["append" => (function() use ($add) {
  $__body = function($v, $v1) use ($add) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($add)($a, $b);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($add, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  $__case_0 = ($GLOBALS['Data_Semiring_semiringNumber'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringNumber'));
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->zero;
} else {
throw new \Exception("Pattern match failure");
};
  return (($GLOBALS['Data_Interval_Duration_Iso_foldMap'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_foldMap')))((object)["mempty" => $__case_res_1, "Semigroup0" => (function() use ($semigroupAdditive1) {
  $__fn = function($__dollar____unused) use ($semigroupAdditive1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupAdditive1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
})(); break;
      case 'Data_Interval_Duration_Iso_composeFlipped': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compose;
} else {
throw new \Exception("Pattern match failure");
};
  $compose1 = $__case_res_0;
  return (function() use ($compose1) {
  $__fn = function($f, $g = null) use ($compose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($g) use ($f, &$__fn) { return $__fn($f, $g); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($compose1)($g, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Interval_Duration_Iso_not': $v = (function() {
  $__case_0 = $dict;
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->not;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Interval_Duration_Iso_fold': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
  $foldMap2 = $__case_res_0;
  $__case_0 = ($GLOBALS['Data_List_Types_monoidList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_monoidList'));
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
  $mempty1 = $__case_res_1;
  $__case_0 = $dict;
  $__case_res_2 = null;
  if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
  $append1 = $__case_res_2;
  $semigroupFn = (object)["append" => (function() use ($append1) {
  $__fn = function($f, $g = null, $x = null) use ($append1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($x) use ($f, $g, &$__fn) { return $__fn($f, $g, $x); };
    if ($__num === 1) return function($g, $x = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $x);
      if ($__num2 === 1) return function($x) use ($f, $g, &$__fn) { return $__fn($f, $g, $x); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($append1)(($f)($x), ($g)($x));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  return ((function() use ($foldMap2) {
  $__fn = function($dictMonoid) use ($foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_identity = ($GLOBALS['Data_Foldable_identity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_identity'));
    $__res = ($foldMap2)($dictMonoid, $__global_Data_Foldable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())((object)["mempty" => (function() use ($mempty1) {
  $__fn = function($v) use ($mempty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $mempty1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Semigroup0" => (function() use ($semigroupFn) {
  $__fn = function($__dollar____unused) use ($semigroupFn, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupFn;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
})(); break;
      case 'Data_Interval_Duration_Iso_toUnfoldable': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_unfoldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_unfoldableList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->unfoldr;
} else {
throw new \Exception("Pattern match failure");
};
  return (($GLOBALS['Data_Map_Internal_compose'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_compose')))(($__case_res_0)(($GLOBALS['Data_Map_Internal_stepUnfoldr'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepUnfoldr'))), ($GLOBALS['Data_Map_Internal_toMapIter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_toMapIter')));
})(); break;
      case 'Data_Interval_Duration_Iso_IsEmpty': $v = ($GLOBALS['__phpurs_data0_IsEmpty'] ??= new Phpurs_Data0("IsEmpty")); break;
      case 'Data_Interval_Duration_Iso_InvalidWeekComponentUsage': $v = ($GLOBALS['__phpurs_data0_InvalidWeekComponentUsage'] ??= new Phpurs_Data0("InvalidWeekComponentUsage")); break;
      case 'Data_Interval_Duration_Iso_showIsoDuration': $v = (object)["show" => (function() {
  $__body = function($v) {
    $__global_Data_Interval_Duration_Iso_append = ($GLOBALS['Data_Interval_Duration_Iso_append'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_append'));
    $__global_Data_Interval_Duration_Iso_show = ($GLOBALS['Data_Interval_Duration_Iso_show'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_show'));
    $__case_0 = $v;
    if (true) {
$d = $__case_0;
return ($__global_Data_Interval_Duration_Iso_append)("(IsoDuration ", ($__global_Data_Interval_Duration_Iso_append)(($__global_Data_Interval_Duration_Iso_show)($d), ")"));
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
})()]; break;
      case 'Data_Interval_Duration_Iso_showError': $v = (object)["show" => (function() {
  $__body = function($v) {
    $__global_Data_Interval_Duration_Iso_append = ($GLOBALS['Data_Interval_Duration_Iso_append'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_append'));
    $__global_Data_Interval_Duration_Iso_show1 = ($GLOBALS['Data_Interval_Duration_Iso_show1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_show1'));
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "IsEmpty":
return "(IsEmpty)";
break;
case "InvalidWeekComponentUsage":
return "(InvalidWeekComponentUsage)";
break;
case "ContainsNegativeValue":
$c = ($__case_0)->v0;
return ($__global_Data_Interval_Duration_Iso_append)("(ContainsNegativeValue ", ($__global_Data_Interval_Duration_Iso_append)(($__global_Data_Interval_Duration_Iso_show1)($c), ")"));
break;
case "InvalidFractionalUse":
$c = ($__case_0)->v0;
return ($__global_Data_Interval_Duration_Iso_append)("(InvalidFractionalUse ", ($__global_Data_Interval_Duration_Iso_append)(($__global_Data_Interval_Duration_Iso_show1)($c), ")"));
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
})()]; break;
      case 'Data_Interval_Duration_Iso_eqIsoDuration': $v = (object)["eq" => (function() {
  $__body = function($x, $y) {
    $__global_Data_Interval_Duration_Iso_eq = ($GLOBALS['Data_Interval_Duration_Iso_eq'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_eq'));
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($__global_Data_Interval_Duration_Iso_eq)($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_Duration_Iso_ordIsoDuration': $v = (object)["compare" => (function() {
  $__body = function($x, $y) {
    $__global_Data_Interval_Duration_Iso_compare = ($GLOBALS['Data_Interval_Duration_Iso_compare'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_compare'));
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($__global_Data_Interval_Duration_Iso_compare)($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_Duration_Iso_eqIsoDuration = ($GLOBALS['Data_Interval_Duration_Iso_eqIsoDuration'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_eqIsoDuration'));
    $__res = $__global_Data_Interval_Duration_Iso_eqIsoDuration;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_Duration_Iso_eqError': $v = (object)["eq" => (function() {
  $__body = function($x, $y) {
    $__global_Data_Interval_Duration_Iso_eq1 = ($GLOBALS['Data_Interval_Duration_Iso_eq1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_eq1'));
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "IsEmpty") && (($__case_1)->tag === "IsEmpty"))) {
return true;
} else {
if (((($__case_0)->tag === "InvalidWeekComponentUsage") && (($__case_1)->tag === "InvalidWeekComponentUsage"))) {
return true;
} else {
if (((($__case_0)->tag === "ContainsNegativeValue") && (($__case_1)->tag === "ContainsNegativeValue"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return ($__global_Data_Interval_Duration_Iso_eq1)($l, $r);
} else {
if (((($__case_0)->tag === "InvalidFractionalUse") && (($__case_1)->tag === "InvalidFractionalUse"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return ($__global_Data_Interval_Duration_Iso_eq1)($l, $r);
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
  };
  $__fn = function($x, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_Duration_Iso_ordError': $v = (object)["compare" => (function() {
  $__body = function($x, $y) {
    $__global_Data_Interval_Duration_Iso_compare1 = ($GLOBALS['Data_Interval_Duration_Iso_compare1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_compare1'));
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "IsEmpty") && (($__case_1)->tag === "IsEmpty"))) {
return ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
} else {
if ((($__case_0)->tag === "IsEmpty")) {
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
} else {
if ((($__case_1)->tag === "IsEmpty")) {
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
} else {
if (((($__case_0)->tag === "InvalidWeekComponentUsage") && (($__case_1)->tag === "InvalidWeekComponentUsage"))) {
return ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
} else {
if ((($__case_0)->tag === "InvalidWeekComponentUsage")) {
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
} else {
if ((($__case_1)->tag === "InvalidWeekComponentUsage")) {
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
} else {
if (((($__case_0)->tag === "ContainsNegativeValue") && (($__case_1)->tag === "ContainsNegativeValue"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return ($__global_Data_Interval_Duration_Iso_compare1)($l, $r);
} else {
if ((($__case_0)->tag === "ContainsNegativeValue")) {
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
} else {
if ((($__case_1)->tag === "ContainsNegativeValue")) {
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
} else {
if (((($__case_0)->tag === "InvalidFractionalUse") && (($__case_1)->tag === "InvalidFractionalUse"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
return ($__global_Data_Interval_Duration_Iso_compare1)($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
};
};
};
};
};
  };
  $__fn = function($x, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Interval_Duration_Iso_eqError = ($GLOBALS['Data_Interval_Duration_Iso_eqError'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_eqError'));
    $__res = $__global_Data_Interval_Duration_Iso_eqError;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };

























// Data_Interval_Duration_Iso_IsoDuration
function Data_Interval_Duration_Iso_IsoDuration($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_IsoDuration';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_IsoDuration'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_IsoDuration';



// Data_Interval_Duration_Iso_ContainsNegativeValue
function Data_Interval_Duration_Iso_ContainsNegativeValue($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_ContainsNegativeValue';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("ContainsNegativeValue", $value0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_ContainsNegativeValue'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_ContainsNegativeValue';

// Data_Interval_Duration_Iso_InvalidFractionalUse
function Data_Interval_Duration_Iso_InvalidFractionalUse($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_InvalidFractionalUse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("InvalidFractionalUse", $value0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_InvalidFractionalUse'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_InvalidFractionalUse';

// Data_Interval_Duration_Iso_unIsoDuration
function Data_Interval_Duration_Iso_unIsoDuration($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_unIsoDuration';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return $a;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_unIsoDuration'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_unIsoDuration';



// Data_Interval_Duration_Iso_prettyError
function Data_Interval_Duration_Iso_prettyError($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_prettyError';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__global_Data_Interval_Duration_Iso_append = ($GLOBALS['Data_Interval_Duration_Iso_append'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_append'));
    $__global_Data_Interval_Duration_Iso_show1 = ($GLOBALS['Data_Interval_Duration_Iso_show1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_show1'));
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "IsEmpty":
return "Duration is empty (has no components)";
break;
case "InvalidWeekComponentUsage":
return "Week component of Duration is used with other components";
break;
case "ContainsNegativeValue":
$c = ($__case_0)->v0;
return ($__global_Data_Interval_Duration_Iso_append)("Component `", ($__global_Data_Interval_Duration_Iso_append)(($__global_Data_Interval_Duration_Iso_show1)($c), "` contains negative value"));
break;
case "InvalidFractionalUse":
$c = ($__case_0)->v0;
return ($__global_Data_Interval_Duration_Iso_append)("Invalid usage of Fractional value at component `", ($__global_Data_Interval_Duration_Iso_append)(($__global_Data_Interval_Duration_Iso_show1)($c), "`"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_prettyError'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_prettyError';





// Data_Interval_Duration_Iso_checkWeekUsage
function Data_Interval_Duration_Iso_checkWeekUsage($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_checkWeekUsage';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__global_Data_Interval_Duration_Iso_conj = ($GLOBALS['Data_Interval_Duration_Iso_conj'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_conj'));
    $__global_Data_Maybe_isJust = ($GLOBALS['Data_Maybe_isJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isJust'));
    $__global_Data_Interval_Duration_Iso_lookup = ($GLOBALS['Data_Interval_Duration_Iso_lookup'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_lookup'));
    $__global_Data_Interval_Duration_Iso_greaterThan = ($GLOBALS['Data_Interval_Duration_Iso_greaterThan'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_greaterThan'));
    $__global_Data_Map_Internal_size = ($GLOBALS['Data_Map_Internal_size'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_size'));
    $__global_Data_Interval_Duration_Iso_pure = ($GLOBALS['Data_Interval_Duration_Iso_pure'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_pure'));
    $__global_Data_Interval_Duration_Iso_empty = ($GLOBALS['Data_Interval_Duration_Iso_empty'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_empty'));
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$asMap = ($__case_0)->asMap;
$__case_0 = ($__global_Data_Interval_Duration_Iso_conj)(($__global_Data_Maybe_isJust)(($__global_Data_Interval_Duration_Iso_lookup)(($GLOBALS['__phpurs_data0_Week'] ??= new Phpurs_Data0("Week")), $asMap)), ($__global_Data_Interval_Duration_Iso_greaterThan)(($__global_Data_Map_Internal_size)($asMap), 1));
switch ($__case_0) {
case true:
return ($__global_Data_Interval_Duration_Iso_pure)(($GLOBALS['__phpurs_data0_InvalidWeekComponentUsage'] ??= new Phpurs_Data0("InvalidWeekComponentUsage")));
break;
default:
return $__global_Data_Interval_Duration_Iso_empty;
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_checkWeekUsage'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_checkWeekUsage';

// Data_Interval_Duration_Iso_checkNegativeValues
function Data_Interval_Duration_Iso_checkNegativeValues($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_checkNegativeValues';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
    $__global_Data_Interval_Duration_Iso_foldMap1 = ($GLOBALS['Data_Interval_Duration_Iso_foldMap1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_foldMap1'));
    $__global_Data_Interval_Duration_Iso_greaterThanOrEq = ($GLOBALS['Data_Interval_Duration_Iso_greaterThanOrEq'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_greaterThanOrEq'));
    $__global_Data_Interval_Duration_Iso_empty = ($GLOBALS['Data_Interval_Duration_Iso_empty'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_empty'));
    $__global_Data_Interval_Duration_Iso_pure = ($GLOBALS['Data_Interval_Duration_Iso_pure'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_pure'));
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$asList = ($__case_0)->asList;
return ($__global_Data_Function_flip)($__global_Data_Interval_Duration_Iso_foldMap1, $asList, (function() use ($__global_Data_Interval_Duration_Iso_greaterThanOrEq, $__global_Data_Interval_Duration_Iso_empty, $__global_Data_Interval_Duration_Iso_pure) {
  $__body = function($v1) use ($__global_Data_Interval_Duration_Iso_greaterThanOrEq, $__global_Data_Interval_Duration_Iso_empty, $__global_Data_Interval_Duration_Iso_pure) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Tuple":
$c = ($__case_0)->v0;
$num = ($__case_0)->v1;
$__case_0 = ($__global_Data_Interval_Duration_Iso_greaterThanOrEq)($num, 0.0);
switch ($__case_0) {
case true:
return $__global_Data_Interval_Duration_Iso_empty;
break;
default:
return ($__global_Data_Interval_Duration_Iso_pure)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("ContainsNegativeValue", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($c));
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($__global_Data_Interval_Duration_Iso_greaterThanOrEq, $__global_Data_Interval_Duration_Iso_empty, $__global_Data_Interval_Duration_Iso_pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
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
$GLOBALS['Data_Interval_Duration_Iso_checkNegativeValues'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_checkNegativeValues';

// Data_Interval_Duration_Iso_checkFractionalUse
function Data_Interval_Duration_Iso_checkFractionalUse($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_checkFractionalUse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__global_Data_Interval_Duration_Iso_notEq = ($GLOBALS['Data_Interval_Duration_Iso_notEq'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_notEq'));
    $__global_Data_Number_floor = ($GLOBALS['Data_Number_floor'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_floor'));
    $__global_Data_Interval_Duration_Iso_greaterThan1 = ($GLOBALS['Data_Interval_Duration_Iso_greaterThan1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_greaterThan1'));
    $__global_Data_Interval_Duration_Iso_unwrap = ($GLOBALS['Data_Interval_Duration_Iso_unwrap'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_unwrap'));
    $__global_Data_Interval_Duration_Iso_foldMap2 = ($GLOBALS['Data_Interval_Duration_Iso_foldMap2'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_foldMap2'));
    $__global_Data_Interval_Duration_Iso_composeFlipped = ($GLOBALS['Data_Interval_Duration_Iso_composeFlipped'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_composeFlipped'));
    $__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
    $__global_Data_Number_abs = ($GLOBALS['Data_Number_abs'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_abs'));
    $__global_Data_Monoid_Additive_Additive = ($GLOBALS['Data_Monoid_Additive_Additive'] ?? \Data\Monoid\Additive\phpurs_eval_thunk('Data_Monoid_Additive_Additive'));
    $__global_Data_Interval_Duration_Iso_empty = ($GLOBALS['Data_Interval_Duration_Iso_empty'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_empty'));
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$asList = ($__case_0)->asList;
$isFractional = (function() use ($__global_Data_Interval_Duration_Iso_notEq, $__global_Data_Number_floor) {
  $__fn = function($a) use ($__global_Data_Interval_Duration_Iso_notEq, $__global_Data_Number_floor, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Interval_Duration_Iso_notEq)(($__global_Data_Number_floor)($a), $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$checkRest = (function() use ($__global_Data_Interval_Duration_Iso_greaterThan1, $__global_Data_Interval_Duration_Iso_unwrap, $__global_Data_Interval_Duration_Iso_foldMap2, $__global_Data_Interval_Duration_Iso_composeFlipped, $__global_Data_Tuple_snd, $__global_Data_Number_abs, $__global_Data_Monoid_Additive_Additive) {
  $__fn = function($rest) use ($__global_Data_Interval_Duration_Iso_greaterThan1, $__global_Data_Interval_Duration_Iso_unwrap, $__global_Data_Interval_Duration_Iso_foldMap2, $__global_Data_Interval_Duration_Iso_composeFlipped, $__global_Data_Tuple_snd, $__global_Data_Number_abs, $__global_Data_Monoid_Additive_Additive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Interval_Duration_Iso_greaterThan1)(($__global_Data_Interval_Duration_Iso_unwrap)(($__global_Data_Interval_Duration_Iso_foldMap2)(($__global_Data_Interval_Duration_Iso_composeFlipped)($__global_Data_Tuple_snd, ($__global_Data_Interval_Duration_Iso_composeFlipped)($__global_Data_Number_abs, $__global_Data_Monoid_Additive_Additive)), $rest)), 0.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$v1 = ($v2)->rest;
$__case_0 = ($v2)->rest;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v0)->tag === "Tuple"))) {
$c = (($__case_0)->v0)->v0;
$rest = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return $__global_Data_Interval_Duration_Iso_empty;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_checkFractionalUse'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_checkFractionalUse';

// Data_Interval_Duration_Iso_checkEmptiness
function Data_Interval_Duration_Iso_checkEmptiness($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_checkEmptiness';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__global_Data_List_null = ($GLOBALS['Data_List_null'] ?? \Data\List\phpurs_eval_thunk('Data_List_null'));
    $__global_Data_Interval_Duration_Iso_pure = ($GLOBALS['Data_Interval_Duration_Iso_pure'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_pure'));
    $__global_Data_Interval_Duration_Iso_empty = ($GLOBALS['Data_Interval_Duration_Iso_empty'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_empty'));
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$asList = ($__case_0)->asList;
$__case_0 = ($__global_Data_List_null)($asList);
switch ($__case_0) {
case true:
return ($__global_Data_Interval_Duration_Iso_pure)(($GLOBALS['__phpurs_data0_IsEmpty'] ??= new Phpurs_Data0("IsEmpty")));
break;
default:
return $__global_Data_Interval_Duration_Iso_empty;
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_checkEmptiness'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_checkEmptiness';

// Data_Interval_Duration_Iso_checkValidIsoDuration
function Data_Interval_Duration_Iso_checkValidIsoDuration($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_checkValidIsoDuration';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__global_Data_Interval_Duration_Iso_fold = ($GLOBALS['Data_Interval_Duration_Iso_fold'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_fold'));
    $__global_Data_Interval_Duration_Iso_checkWeekUsage = ($GLOBALS['Data_Interval_Duration_Iso_checkWeekUsage'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_checkWeekUsage'));
    $__global_Data_Interval_Duration_Iso_checkEmptiness = ($GLOBALS['Data_Interval_Duration_Iso_checkEmptiness'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_checkEmptiness'));
    $__global_Data_Interval_Duration_Iso_checkFractionalUse = ($GLOBALS['Data_Interval_Duration_Iso_checkFractionalUse'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_checkFractionalUse'));
    $__global_Data_Interval_Duration_Iso_checkNegativeValues = ($GLOBALS['Data_Interval_Duration_Iso_checkNegativeValues'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_checkNegativeValues'));
    $__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
    $__global_Data_Interval_Duration_Iso_toUnfoldable = ($GLOBALS['Data_Interval_Duration_Iso_toUnfoldable'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_toUnfoldable'));
    $__case_0 = $v;
    if (true) {
$asMap = $__case_0;
$check = ($__global_Data_Interval_Duration_Iso_fold)([$__global_Data_Interval_Duration_Iso_checkWeekUsage, $__global_Data_Interval_Duration_Iso_checkEmptiness, $__global_Data_Interval_Duration_Iso_checkFractionalUse, $__global_Data_Interval_Duration_Iso_checkNegativeValues]);
$asList = ($__global_Data_List_reverse)(($__global_Data_Interval_Duration_Iso_toUnfoldable)($asMap));
return ($check)((object)["asList" => $asList, "asMap" => $asMap]);
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_checkValidIsoDuration'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_checkValidIsoDuration';

// Data_Interval_Duration_Iso_mkIsoDuration
function Data_Interval_Duration_Iso_mkIsoDuration($d) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_mkIsoDuration';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($d) {
    $__global_Data_List_NonEmpty_fromList = ($GLOBALS['Data_List_NonEmpty_fromList'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_fromList'));
    $__global_Data_Interval_Duration_Iso_checkValidIsoDuration = ($GLOBALS['Data_Interval_Duration_Iso_checkValidIsoDuration'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_checkValidIsoDuration'));
    $v = ($__global_Data_List_NonEmpty_fromList)(($__global_Data_Interval_Duration_Iso_checkValidIsoDuration)($d));
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Just":
$errs = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($errs);
break;
case "Nothing":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($d);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($d);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_mkIsoDuration'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_mkIsoDuration';

