<?php

namespace Data\Date;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Date/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Int/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
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
      case 'Data_Date_fromEnum': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_Component_boundedEnumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumMonth'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->fromEnum;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_eq': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_fromJust': $v = (($GLOBALS['Data_Maybe_fromJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromJust')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Date_toEnum': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_Component_boundedEnumWeekday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumWeekday'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->toEnum;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_append': $v = (function() {
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
      case 'Data_Date_show': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_Component_showYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_showYear'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_show1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_Component_showMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_showMonth'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_show2': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_Component_showDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_showDay'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_fromEnum1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_Component_boundedEnumYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumYear'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->fromEnum;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_conj': $v = (function() {
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
      case 'Data_Date_mod': $v = (function() {
  $__case_0 = ($GLOBALS['Data_EuclideanRing_euclideanRingInt'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_euclideanRingInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->mod;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_disj': $v = (function() {
  $__case_0 = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->disj;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_not': $v = (function() {
  $__case_0 = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->not;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_compose': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compose;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_toEnum1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_Component_boundedEnumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumDay'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->toEnum;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_eq1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_eq2': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_Component_eqMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_eqMonth'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_eq3': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_compare': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_compare1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_Component_ordMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_ordMonth'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_compare2': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_succ': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_Component_enumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_enumMonth'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_succ1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_Component_enumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_enumDay'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_greaterThan': $v = (function() {
  $__case_0 = $dict;
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
      case 'Data_Date_succ2': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_Component_enumYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_enumYear'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_apply': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Maybe_applyMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_applyMaybe'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_map': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_pure': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Maybe_applicativeMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_applicativeMaybe'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_pred': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_Component_enumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_enumMonth'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_pred1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_Component_enumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_enumDay'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_pred2': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_Component_enumYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_enumYear'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_toEnum2': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_Component_boundedEnumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumMonth'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->toEnum;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_add': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semiring_semiringInt'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_fromEnum2': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_Component_boundedEnumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumDay'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->fromEnum;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_lessThan': $v = (function() {
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
case "LT":
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
      case 'Data_Date_greaterThan1': $v = (function() {
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
      case 'Data_Date_sub': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ring_ringInt'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sub;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_bindFlipped': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Maybe_bindMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_bindMaybe'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
  return (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))($__case_res_0);
})(); break;
      case 'Data_Date_bind': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Maybe_bindMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_bindMaybe'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_weekday': $v = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial')))((function() {
  $__body = function($__dollar____unused, $v) {
    $__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
    $__global_Data_Date_calcWeekday = ($GLOBALS['Data_Date_calcWeekday'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_calcWeekday'));
    $__global_Data_Date_fromEnum = ($GLOBALS['Data_Date_fromEnum'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromEnum'));
    $__global_Data_Date_eq = ($GLOBALS['Data_Date_eq'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eq'));
    $__global_Data_Date_fromJust = ($GLOBALS['Data_Date_fromJust'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromJust'));
    $__global_Data_Date_toEnum = ($GLOBALS['Data_Date_toEnum'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_toEnum'));
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Date":
$y = ($__case_0)->v0;
$m = ($__case_0)->v1;
$d = ($__case_0)->v2;
$n = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Date_calcWeekday, $y, ($__global_Data_Date_fromEnum)($m), $d);
$__case_0 = ($__global_Data_Date_eq)($n, 0);
switch ($__case_0) {
case true:
return ($__global_Data_Date_fromJust)(($__global_Data_Date_toEnum)(7));
break;
default:
return ($__global_Data_Date_fromJust)(($__global_Data_Date_toEnum)($n));
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($__dollar____unused, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($__dollar____unused, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Date_showDate': $v = (object)["show" => (function() {
  $__body = function($v) {
    $__global_Data_Date_append = ($GLOBALS['Data_Date_append'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_append'));
    $__global_Data_Date_show = ($GLOBALS['Data_Date_show'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_show'));
    $__global_Data_Date_show1 = ($GLOBALS['Data_Date_show1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_show1'));
    $__global_Data_Date_show2 = ($GLOBALS['Data_Date_show2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_show2'));
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Date":
$y = ($__case_0)->v0;
$m = ($__case_0)->v1;
$d = ($__case_0)->v2;
return ($__global_Data_Date_append)("(Date ", ($__global_Data_Date_append)(($__global_Data_Date_show)($y), ($__global_Data_Date_append)(" ", ($__global_Data_Date_append)(($__global_Data_Date_show1)($m), ($__global_Data_Date_append)(" ", ($__global_Data_Date_append)(($__global_Data_Date_show2)($d), ")"))))));
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
      case 'Data_Date_eqDate': $v = (object)["eq" => (function() {
  $__body = function($x, $y) {
    $__global_Data_Date_conj = ($GLOBALS['Data_Date_conj'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_conj'));
    $__global_Data_Date_eq1 = ($GLOBALS['Data_Date_eq1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eq1'));
    $__global_Data_Date_eq2 = ($GLOBALS['Data_Date_eq2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eq2'));
    $__global_Data_Date_eq3 = ($GLOBALS['Data_Date_eq3'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eq3'));
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Date") && (($__case_1)->tag === "Date"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$l2 = ($__case_0)->v2;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$r2 = ($__case_1)->v2;
return ($__global_Data_Date_conj)(($__global_Data_Date_conj)(($__global_Data_Date_eq1)($l, $r), ($__global_Data_Date_eq2)($l1, $r1)), ($__global_Data_Date_eq3)($l2, $r2));
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
      case 'Data_Date_eq4': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_eqDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eqDate'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_ordDate': $v = (object)["compare" => (function() {
  $__body = function($x, $y) {
    $__global_Data_Date_compare = ($GLOBALS['Data_Date_compare'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_compare'));
    $__global_Data_Date_compare1 = ($GLOBALS['Data_Date_compare1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_compare1'));
    $__global_Data_Date_compare2 = ($GLOBALS['Data_Date_compare2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_compare2'));
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Date") && (($__case_1)->tag === "Date"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$l2 = ($__case_0)->v2;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$r2 = ($__case_1)->v2;
$v = ($__global_Data_Date_compare)($l, $r);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "LT":
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
case "GT":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
$v1 = ($__global_Data_Date_compare1)($l1, $r1);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
break;
case "GT":
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
break;
default:
return ($__global_Data_Date_compare2)($l2, $r2);
break;
};
break;
};
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
$__global_Data_Date_eqDate = ($GLOBALS['Data_Date_eqDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eqDate'));
    $__res = $__global_Data_Date_eqDate;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Date_enumDate': $v = (object)["succ" => (function() {
  $__body = function($v) {
    $__global_Data_Date_succ = ($GLOBALS['Data_Date_succ'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_succ'));
    $__global_Data_Date_lastDayOfMonth = ($GLOBALS['Data_Date_lastDayOfMonth'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_lastDayOfMonth'));
    $__global_Data_Date_succ1 = ($GLOBALS['Data_Date_succ1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_succ1'));
    $__global_Data_Date_greaterThan = ($GLOBALS['Data_Date_greaterThan'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_greaterThan'));
    $__global_Data_Maybe_isNothing = ($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing'));
    $__global_Data_Maybe_fromMaybe = ($GLOBALS['Data_Maybe_fromMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromMaybe'));
    $__global_Data_Date_conj = ($GLOBALS['Data_Date_conj'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_conj'));
    $__global_Data_Date_succ2 = ($GLOBALS['Data_Date_succ2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_succ2'));
    $__global_Data_Date_toEnum1 = ($GLOBALS['Data_Date_toEnum1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_toEnum1'));
    $__global_Data_Date_apply = ($GLOBALS['Data_Date_apply'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_apply'));
    $__global_Data_Date_map = ($GLOBALS['Data_Date_map'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_map'));
    $__global_Data_Date_pure = ($GLOBALS['Data_Date_pure'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pure'));
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Date":
$y = ($__case_0)->v0;
$m = ($__case_0)->v1;
$d = ($__case_0)->v2;
$sm = ($__global_Data_Date_succ)($m);
$l = ($__global_Data_Date_lastDayOfMonth)($y, $m);
$v1 = ($__global_Data_Date_succ1)($d);
$__case_0 = ($__global_Data_Date_greaterThan)($v1, ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($l));
$__case_res_0 = null;
switch ($__case_0) {
case true:
$__case_res_0 = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
default:
$__case_res_0 = $v1;
break;
};
$sd = $__case_res_0;
$__case_0 = ($__global_Data_Maybe_isNothing)($sd);
$__case_res_1 = null;
switch ($__case_0) {
case true:
$__case_res_1 = ($__global_Data_Maybe_fromMaybe)(($GLOBALS['__phpurs_data0_January'] ??= new Phpurs_Data0("January")), $sm);
break;
default:
$__case_res_1 = $m;
break;
};
$m__prime__ = $__case_res_1;
$__case_0 = ($__global_Data_Date_conj)(($__global_Data_Maybe_isNothing)($sd), ($__global_Data_Maybe_isNothing)($sm));
$__case_res_2 = null;
switch ($__case_0) {
case true:
$__case_res_2 = ($__global_Data_Date_succ2)($y);
break;
default:
$__case_res_2 = ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($y);
break;
};
$y__prime__ = $__case_res_2;
$__case_0 = ($__global_Data_Maybe_isNothing)($sd);
$__case_res_3 = null;
switch ($__case_0) {
case true:
$__case_res_3 = ($__global_Data_Date_toEnum1)(1);
break;
default:
$__case_res_3 = $sd;
break;
};
$d__prime__ = $__case_res_3;
return ($__global_Data_Date_apply)(($__global_Data_Date_apply)(($__global_Data_Date_map)((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("Date", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $y__prime__), ($__global_Data_Date_pure)($m__prime__)), $d__prime__);
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
})(), "pred" => (function() {
  $__body = function($v) {
    $__global_Data_Date_pred = ($GLOBALS['Data_Date_pred'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pred'));
    $__global_Data_Date_pred1 = ($GLOBALS['Data_Date_pred1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pred1'));
    $__global_Data_Date_conj = ($GLOBALS['Data_Date_conj'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_conj'));
    $__global_Data_Maybe_isNothing = ($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing'));
    $__global_Data_Date_pred2 = ($GLOBALS['Data_Date_pred2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pred2'));
    $__global_Data_Maybe_fromMaybe = ($GLOBALS['Data_Maybe_fromMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromMaybe'));
    $__global_Data_Date_lastDayOfMonth = ($GLOBALS['Data_Date_lastDayOfMonth'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_lastDayOfMonth'));
    $__global_Data_Date_apply = ($GLOBALS['Data_Date_apply'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_apply'));
    $__global_Data_Date_map = ($GLOBALS['Data_Date_map'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_map'));
    $__global_Data_Date_pure = ($GLOBALS['Data_Date_pure'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pure'));
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Date":
$y = ($__case_0)->v0;
$m = ($__case_0)->v1;
$d = ($__case_0)->v2;
$pm = ($__global_Data_Date_pred)($m);
$pd = ($__global_Data_Date_pred1)($d);
$__case_0 = ($__global_Data_Date_conj)(($__global_Data_Maybe_isNothing)($pd), ($__global_Data_Maybe_isNothing)($pm));
$__case_res_4 = null;
switch ($__case_0) {
case true:
$__case_res_4 = ($__global_Data_Date_pred2)($y);
break;
default:
$__case_res_4 = ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($y);
break;
};
$y__prime__ = $__case_res_4;
$__case_0 = ($__global_Data_Maybe_isNothing)($pd);
$__case_res_5 = null;
switch ($__case_0) {
case true:
$__case_res_5 = ($__global_Data_Maybe_fromMaybe)(($GLOBALS['__phpurs_data0_December'] ??= new Phpurs_Data0("December")), $pm);
break;
default:
$__case_res_5 = $m;
break;
};
$m__prime__ = $__case_res_5;
$l = ($__global_Data_Date_lastDayOfMonth)($y, $m__prime__);
$__case_0 = ($__global_Data_Maybe_isNothing)($pd);
$__case_res_6 = null;
switch ($__case_0) {
case true:
$__case_res_6 = ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($l);
break;
default:
$__case_res_6 = $pd;
break;
};
$d__prime__ = $__case_res_6;
return ($__global_Data_Date_apply)(($__global_Data_Date_apply)(($__global_Data_Date_map)((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("Date", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $y__prime__), ($__global_Data_Date_pure)($m__prime__)), $d__prime__);
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
})(), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Date_ordDate = ($GLOBALS['Data_Date_ordDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_ordDate'));
    $__res = $__global_Data_Date_ordDate;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Date_pred3': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_enumDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_enumDate'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_succ3': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_enumDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_enumDate'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Date_boundedDate': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Date_Component_boundedYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedYear'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
  $__case_0 = ($GLOBALS['Data_Date_Component_boundedMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedMonth'));
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
  $__case_0 = ($GLOBALS['Data_Date_Component_boundedDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedDay'));
  $__case_res_2 = null;
  if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
  $__case_0 = ($GLOBALS['Data_Date_Component_boundedYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedYear'));
  $__case_res_3 = null;
  if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->top;
} else {
throw new \Exception("Pattern match failure");
};
  $__case_0 = ($GLOBALS['Data_Date_Component_boundedMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedMonth'));
  $__case_res_4 = null;
  if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->top;
} else {
throw new \Exception("Pattern match failure");
};
  $__case_0 = ($GLOBALS['Data_Date_Component_boundedDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedDay'));
  $__case_res_5 = null;
  if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->top;
} else {
throw new \Exception("Pattern match failure");
};
  return (object)["bottom" => ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("Date", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($__case_res_0, $__case_res_1, $__case_res_2), "top" => ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("Date", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($__case_res_3, $__case_res_4, $__case_res_5), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Date_ordDate = ($GLOBALS['Data_Date_ordDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_ordDate'));
    $__res = $__global_Data_Date_ordDate;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
})(); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };









































// Data_Date_Date
function Data_Date_Date($value0, $value1 = null, $value2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_Date';
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("Date", $value0, $value1, $value2);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Date_Date'] = __NAMESPACE__ . '\\Data_Date_Date';

// Data_Date_year
function Data_Date_year($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_year';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Date":
$y = ($__case_0)->v0;
return $y;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_year'] = __NAMESPACE__ . '\\Data_Date_year';



// Data_Date_month
function Data_Date_month($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_month';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Date":
$m = ($__case_0)->v1;
return $m;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_month'] = __NAMESPACE__ . '\\Data_Date_month';

// Data_Date_isLeapYear
function Data_Date_isLeapYear($y) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_isLeapYear';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Date_fromEnum1 = ($GLOBALS['Data_Date_fromEnum1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromEnum1'));
$__global_Data_Date_conj = ($GLOBALS['Data_Date_conj'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_conj'));
$__global_Data_Date_eq = ($GLOBALS['Data_Date_eq'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eq'));
$__global_Data_Date_mod = ($GLOBALS['Data_Date_mod'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_mod'));
$__global_Data_Date_disj = ($GLOBALS['Data_Date_disj'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_disj'));
$__global_Data_Date_not = ($GLOBALS['Data_Date_not'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_not'));
$y__prime__ = ($__global_Data_Date_fromEnum1)($y);
    $__res = ($__global_Data_Date_conj)(($__global_Data_Date_eq)(($__global_Data_Date_mod)($y__prime__, 4), 0), ($__global_Data_Date_disj)(($__global_Data_Date_eq)(($__global_Data_Date_mod)($y__prime__, 400), 0), ($__global_Data_Date_not)(($__global_Data_Date_eq)(($__global_Data_Date_mod)($y__prime__, 100), 0))));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_isLeapYear'] = __NAMESPACE__ . '\\Data_Date_isLeapYear';

// Data_Date_lastDayOfMonth
function Data_Date_lastDayOfMonth($y, $m = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_lastDayOfMonth';
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($y, $__fn) { return $__fn($y, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($y, $m) {
    $__global_Data_Date_compose = ($GLOBALS['Data_Date_compose'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_compose'));
    $__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
    $__global_Data_Date_fromJust = ($GLOBALS['Data_Date_fromJust'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromJust'));
    $__global_Data_Date_toEnum1 = ($GLOBALS['Data_Date_toEnum1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_toEnum1'));
    $unsafeDay = ($__global_Data_Date_compose)(($__global_Partial_Unsafe__unsafePartial)((function() use ($__global_Data_Date_fromJust) {
  $__fn = function($__dollar____unused) use ($__global_Data_Date_fromJust, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__global_Data_Date_fromJust;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $__global_Data_Date_toEnum1);
    $__case_0 = $m;
    switch (($__case_0)->tag) {
case "January":
return ($unsafeDay)(31);
break;
case "February":
return "/* Unsupported: Guards not supported */";
break;
case "March":
return ($unsafeDay)(31);
break;
case "April":
return ($unsafeDay)(30);
break;
case "May":
return ($unsafeDay)(31);
break;
case "June":
return ($unsafeDay)(30);
break;
case "July":
return ($unsafeDay)(31);
break;
case "August":
return ($unsafeDay)(31);
break;
case "September":
return ($unsafeDay)(30);
break;
case "October":
return ($unsafeDay)(31);
break;
case "November":
return ($unsafeDay)(30);
break;
case "December":
return ($unsafeDay)(31);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($y, $m);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Date_lastDayOfMonth'] = __NAMESPACE__ . '\\Data_Date_lastDayOfMonth';







// Data_Date_diff
function Data_Date_diff($dictDuration) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_diff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_Uncurried_runFn6 = ($GLOBALS['Data_Function_Uncurried_runFn6'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn6'));
$__global_Data_Date_calcDiff = ($GLOBALS['Data_Date_calcDiff'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_calcDiff'));
$__global_Data_Date_fromEnum = ($GLOBALS['Data_Date_fromEnum'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromEnum'));
$__case_0 = $dictDuration;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->toDuration;
} else {
throw new \Exception("Pattern match failure");
};
$toDuration = $__case_res_0;
    $__res = (function() use ($toDuration, $__global_Data_Function_Uncurried_runFn6, $__global_Data_Date_calcDiff, $__global_Data_Date_fromEnum) {
  $__body = function($v, $v1) use ($toDuration, $__global_Data_Function_Uncurried_runFn6, $__global_Data_Date_calcDiff, $__global_Data_Date_fromEnum) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Date") && (($__case_1)->tag === "Date"))) {
$y1 = ($__case_0)->v0;
$m1 = ($__case_0)->v1;
$d1 = ($__case_0)->v2;
$y2 = ($__case_1)->v0;
$m2 = ($__case_1)->v1;
$d2 = ($__case_1)->v2;
return ($toDuration)(($__global_Data_Function_Uncurried_runFn6)($__global_Data_Date_calcDiff, $y1, ($__global_Data_Date_fromEnum)($m1), $d1, $y2, ($__global_Data_Date_fromEnum)($m2), $d2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($toDuration, $__global_Data_Function_Uncurried_runFn6, $__global_Data_Date_calcDiff, $__global_Data_Date_fromEnum, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_diff'] = __NAMESPACE__ . '\\Data_Date_diff';

// Data_Date_day
function Data_Date_day($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_day';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Date":
$d = ($__case_0)->v2;
return $d;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_day'] = __NAMESPACE__ . '\\Data_Date_day';

// Data_Date_canonicalDate
function Data_Date_canonicalDate($y, $m = null, $d = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_canonicalDate';
  if ($__num < 3) {
    if ($__num === 2) return function($d) use ($y, $m, $__fn) { return $__fn($y, $m, $d); };
    if ($__num === 1) return function($m, $d = null) use ($y, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($y, $m, $d);
      if ($__num2 === 1) return function($d) use ($y, $m, $__fn) { return $__fn($y, $m, $d); };
      return phpurs_curry_fallback($__fn, [$y], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
$__global_Data_Date_fromJust = ($GLOBALS['Data_Date_fromJust'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromJust'));
$__global_Data_Date_toEnum2 = ($GLOBALS['Data_Date_toEnum2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_toEnum2'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Date_canonicalDateImpl = ($GLOBALS['Data_Date_canonicalDateImpl'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_canonicalDateImpl'));
$__global_Data_Date_fromEnum = ($GLOBALS['Data_Date_fromEnum'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromEnum'));
$mkDate = ($__global_Partial_Unsafe__unsafePartial)((function() use ($__global_Data_Date_fromJust, $__global_Data_Date_toEnum2) {
  $__fn = function($__dollar____unused, $y__prime__ = null, $m__prime__ = null, $d__prime__ = null) use ($__global_Data_Date_fromJust, $__global_Data_Date_toEnum2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($d__prime__) use ($__dollar____unused, $y__prime__, $m__prime__, &$__fn) { return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__); };
    if ($__num === 2) return function($m__prime__, $d__prime__ = null) use ($__dollar____unused, $y__prime__, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__);
      if ($__num2 === 1) return function($d__prime__) use ($__dollar____unused, $y__prime__, $m__prime__, &$__fn) { return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__); };
      return phpurs_curry_fallback($__fn, [$__dollar____unused, $y__prime__], 4);
    };
    if ($__num === 1) return function($y__prime__, $m__prime__ = null, $d__prime__ = null) use ($__dollar____unused, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__);
      if ($__num2 === 2) return function($d__prime__) use ($__dollar____unused, $y__prime__, $m__prime__, &$__fn) { return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__); };
      if ($__num2 === 1) return function($m__prime__, $d__prime__ = null) use ($__dollar____unused, $y__prime__, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__);
        if ($__num3 === 1) return function($d__prime__) use ($__dollar____unused, $y__prime__, $m__prime__, &$__fn) { return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__); };
        return phpurs_curry_fallback($__fn, [$__dollar____unused, $y__prime__], 4);
      };
      return phpurs_curry_fallback($__fn, [$__dollar____unused], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("Date", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($y__prime__, ($__global_Data_Date_fromJust)(($__global_Data_Date_toEnum2)($m__prime__)), $d__prime__);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})());
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Date_canonicalDateImpl, $mkDate, $y, ($__global_Data_Date_fromEnum)($m), $d);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Date_canonicalDate'] = __NAMESPACE__ . '\\Data_Date_canonicalDate';

// Data_Date_exactDate
function Data_Date_exactDate($y, $m = null, $d = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_exactDate';
  if ($__num < 3) {
    if ($__num === 2) return function($d) use ($y, $m, $__fn) { return $__fn($y, $m, $d); };
    if ($__num === 1) return function($m, $d = null) use ($y, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($y, $m, $d);
      if ($__num2 === 1) return function($d) use ($y, $m, $__fn) { return $__fn($y, $m, $d); };
      return phpurs_curry_fallback($__fn, [$y], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($y, $m, $d) {
    $__global_Data_Date_eq4 = ($GLOBALS['Data_Date_eq4'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eq4'));
    $__global_Data_Date_canonicalDate = ($GLOBALS['Data_Date_canonicalDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_canonicalDate'));
    $dt = ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("Date", $value0, $value1, $value2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($y, $m, $d);
    $__case_0 = ($__global_Data_Date_eq4)(($__global_Data_Date_canonicalDate)($y, $m, $d), $dt);
    switch ($__case_0) {
case true:
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
})())($dt);
break;
default:
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
};
  };
    $__res = $__body($y, $m, $d);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Date_exactDate'] = __NAMESPACE__ . '\\Data_Date_exactDate';


// Data_Date_adjust
function Data_Date_adjust($v, $date = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_adjust';
  if ($__num < 2) {
    if ($__num === 1) return function($date) use ($v, $__fn) { return $__fn($v, $date); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $date) {
    $__global_Data_Date_add = ($GLOBALS['Data_Date_add'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_add'));
    $__global_Data_Date_fromEnum2 = ($GLOBALS['Data_Date_fromEnum2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromEnum2'));
    $__global_Data_Date_lessThan = ($GLOBALS['Data_Date_lessThan'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_lessThan'));
    $__global_Data_Date_lastDayOfMonth = ($GLOBALS['Data_Date_lastDayOfMonth'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_lastDayOfMonth'));
    $__global_Data_Maybe_fromMaybe = ($GLOBALS['Data_Maybe_fromMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromMaybe'));
    $__global_Data_Date_pred = ($GLOBALS['Data_Date_pred'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pred'));
    $__global_Data_Date_greaterThan1 = ($GLOBALS['Data_Date_greaterThan1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_greaterThan1'));
    $__global_Data_Date_bindFlipped = ($GLOBALS['Data_Date_bindFlipped'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_bindFlipped'));
    $__global_Data_Date_bind = ($GLOBALS['Data_Date_bind'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_bind'));
    $__global_Data_Int_fromNumber = ($GLOBALS['Data_Int_fromNumber'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_fromNumber'));
    $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
    $__case_0 = $v;
    $__case_1 = $date;
    if (true) {
$n = $__case_0;
$date1 = $__case_1;
$adj = (function() use ($__global_Data_Date_add, $__global_Data_Date_fromEnum2, $__global_Data_Date_lessThan, $__global_Data_Date_lastDayOfMonth, $__global_Data_Maybe_fromMaybe, $__global_Data_Date_pred, $__global_Data_Date_greaterThan1, $__global_Data_Date_bindFlipped, &$adj) {
  $__fn = function($v1, $v2 = null) use ($__global_Data_Date_add, $__global_Data_Date_fromEnum2, $__global_Data_Date_lessThan, $__global_Data_Date_lastDayOfMonth, $__global_Data_Maybe_fromMaybe, $__global_Data_Date_pred, $__global_Data_Date_greaterThan1, $__global_Data_Date_bindFlipped, &$adj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v2) use ($v1, &$__fn) { return $__fn($v1, $v2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v1;
$__case_1 = $v2;
if (($__case_0 === 0)) {
$dt = $__case_1;
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
})())($dt);
} else {
switch (($__case_1)->tag) {
case "Date":
$i = $__case_0;
$y = ($__case_1)->v0;
$m = ($__case_1)->v1;
$d = ($__case_1)->v2;
$j = ($__global_Data_Date_add)($i, ($__global_Data_Date_fromEnum2)($d));
$low = ($__global_Data_Date_lessThan)($j, 1);
$__case_0 = $low;
$__case_res_0 = null;
switch ($__case_0) {
case true:
$__case_res_0 = ($__global_Data_Maybe_fromMaybe)(($GLOBALS['__phpurs_data0_December'] ??= new Phpurs_Data0("December")), ($__global_Data_Date_pred)($m));
break;
default:
$__case_res_0 = $m;
break;
};
$l = ($__global_Data_Date_lastDayOfMonth)($y, $__case_res_0);
$hi = ($__global_Data_Date_greaterThan1)($j, ($__global_Data_Date_fromEnum2)($l));
$__case_res_1 = null;
if (true) {
$__case_res_1 = "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
$i__prime__ = $__case_res_1;
$__case_res_2 = null;
if (true) {
$__case_res_2 = "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
$dt__prime__ = $__case_res_2;
return ($__global_Data_Date_bindFlipped)(($adj)($i__prime__), $dt__prime__);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return ($__global_Data_Date_bind)(($__global_Data_Int_fromNumber)($n), ($__global_Data_Function_flip)($adj, $date1));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v, $date);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Date_adjust'] = __NAMESPACE__ . '\\Data_Date_adjust';

