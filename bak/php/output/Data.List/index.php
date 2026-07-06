<?php

namespace Data\List;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.Internal/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
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
      case 'Data_List_map': $v = (function() {
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
      case 'Data_List_sub': $v = (function() {
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
      case 'Data_List_foldr': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_tailRecM2': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Monad_Rec_Class_monadRecMaybe'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_monadRecMaybe'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->tailRecM;
} else {
throw new \Exception("Pattern match failure");
};
  $tailRecM1 = $__case_res_0;
  return (function() use ($tailRecM1) {
  $__fn = function($f, $a = null, $b = null) use ($tailRecM1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
    if ($__num === 1) return function($a, $b = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $b);
      if ($__num2 === 1) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($tailRecM1)((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)(($o)->a, ($o)->b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b]);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_List_eq': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ordering_eqOrdering'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_eqOrdering'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_notEq': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ordering_eqOrdering'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_eqOrdering'));
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
      case 'Data_List_compose': $v = (function() {
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
      case 'Data_List_append': $v = (function() {
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
      case 'Data_List_lessThan': $v = (function() {
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
      case 'Data_List_sequence': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_traversableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_traversableList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sequence;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_eq1': $v = (function() {
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
      case 'Data_List_add': $v = (function() {
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
      case 'Data_List_greaterThan': $v = (function() {
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
      case 'Data_List_negate': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ring_ringInt'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sub;
} else {
throw new \Exception("Pattern match failure");
};
  $sub1 = $__case_res_0;
  $__case_0 = $dict;
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->zero;
} else {
throw new \Exception("Pattern match failure");
};
  $zero = $__case_res_1;
  return (function() use ($sub1, $zero) {
  $__fn = function($a) use ($sub1, $zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($sub1)($zero, $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_List_bimap': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Monad_Rec_Class_bifunctorStep'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_bifunctorStep'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bimap;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_foldl': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_any': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
  $foldMap2 = $__case_res_0;
  return ((function() use ($foldMap2) {
  $__fn = function($dictHeytingAlgebra) use ($foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_alaF = ($GLOBALS['Data_Foldable_alaF'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_alaF'));
$__global_Data_Monoid_Disj_Disj = ($GLOBALS['Data_Monoid_Disj_Disj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_Disj'));
$__case_0 = $dictHeytingAlgebra;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->disj;
} else {
throw new \Exception("Pattern match failure");
};
$disj = $__case_res_1;
$semigroupDisj1 = (object)["append" => (function() use ($disj) {
  $__body = function($v, $v1) use ($disj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($disj)($a, $b);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($disj, $__body, &$__fn) {
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
$__case_0 = $dictHeytingAlgebra;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->ff;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Foldable_alaF)($__global_Data_Monoid_Disj_Disj, ($foldMap2)((object)["mempty" => $__case_res_2, "Semigroup0" => (function() use ($semigroupDisj1) {
  $__fn = function($__dollar____unused) use ($semigroupDisj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupDisj1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean')));
})(); break;
      case 'Data_List_not': $v = (function() {
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
      case 'Data_List_append1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_semigroupList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_semigroupList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_bind': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_bindList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_bindList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_identity': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->identity;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_unzip': $v = (($GLOBALS['Data_List_foldr'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldr')))((function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
return (function() use ($a, $b) {
  $__body = function($v1) use ($a, $b) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Tuple":
$as = ($__case_0)->v0;
$bs = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, $as), ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($b, $bs));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($a, $b, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
})(), ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")))); break;
      case 'Data_List_reverse': $v = (function() {
  $go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_1)->tag) {
case "Nil":
$acc = $__case_0;
return $acc;
break;
case "Cons":
$acc = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
$__tco_tmp_0 = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($x, $acc);
$__tco_tmp_1 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return ($go)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
})(); break;
      case 'Data_List_take': $v = (function() {
  $go = (function() use (&$go) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$go, &$__fn) {
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
$__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
$__global_Data_List_sub = ($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub'));
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if (true) {
$acc = $__case_0;
$n = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
switch (($__case_2)->tag) {
case "Nil":
$acc = $__case_0;
return ($__global_Data_List_reverse)($acc);
break;
case "Cons":
$acc = $__case_0;
$n = $__case_1;
$x = ($__case_2)->v0;
$xs = ($__case_2)->v1;
$__tco_tmp_0 = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($x, $acc);
$__tco_tmp_1 = ($__global_Data_List_sub)($n, 1);
$__tco_tmp_2 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue 2;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return ($go)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
})(); break;
      case 'Data_List_zip': $v = (($GLOBALS['Data_List_zipWith'] ?? \Data\List\phpurs_eval_thunk('Data_List_zipWith')))((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_List_newtypePattern': $v = (object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
    $__res = $__global_Prim_undefined;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_length': $v = (($GLOBALS['Data_List_foldl'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldl')))((function() {
  $__fn = function($acc, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($acc, &$__fn) { return $__fn($acc, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_List_add = ($GLOBALS['Data_List_add'] ?? \Data\List\phpurs_eval_thunk('Data_List_add'));
    $__res = ($__global_Data_List_add)($acc, 1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), 0); break;
      case 'Data_List_concatMap': $v = (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($GLOBALS['Data_List_bind'] ?? \Data\List\phpurs_eval_thunk('Data_List_bind'))); break;
      case 'Data_List_catMaybes': $v = (($GLOBALS['Data_List_mapMaybe'] ?? \Data\List\phpurs_eval_thunk('Data_List_mapMaybe')))(($GLOBALS['Data_List_identity'] ?? \Data\List\phpurs_eval_thunk('Data_List_identity'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };























// Data_List_Pattern
function Data_List_Pattern($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Pattern';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Pattern'] = __NAMESPACE__ . '\\Data_List_Pattern';

// Data_List_updateAt
function Data_List_updateAt($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_updateAt';
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
$__global_Data_List_map = ($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map'));
$__global_Data_List_sub = ($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub'));
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_0 === 0) && (($__case_2)->tag === "Cons"))) {
$x = $__case_1;
$xs = ($__case_2)->v1;
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
})())(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($x, $xs));
} else {
switch (($__case_2)->tag) {
case "Cons":
$n = $__case_0;
$x = $__case_1;
$x1 = ($__case_2)->v0;
$xs = ($__case_2)->v1;
return ($__global_Data_List_map)((function() use ($x1) {
  $__fn = function($v3) use ($x1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($x1, $v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_List_updateAt'] ?? \Data\List\phpurs_eval_thunk('Data_List_updateAt')))(($__global_Data_List_sub)($n, 1), $x, $xs));
break;
default:
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
};
};
};
    $__res = null;
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_updateAt'] = __NAMESPACE__ . '\\Data_List_updateAt';


// Data_List_uncons
function Data_List_uncons($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_uncons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
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
})())((object)["head" => $x, "tail" => $xs]);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_uncons'] = __NAMESPACE__ . '\\Data_List_uncons';

// Data_List_toUnfoldable
function Data_List_toUnfoldable($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_toUnfoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_map = ($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map'));
$__global_Data_List_uncons = ($GLOBALS['Data_List_uncons'] ?? \Data\List\phpurs_eval_thunk('Data_List_uncons'));
$__case_0 = $dictUnfoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->unfoldr;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_0)((function() use ($__global_Data_List_map, $__global_Data_List_uncons) {
  $__fn = function($xs) use ($__global_Data_List_map, $__global_Data_List_uncons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_map)((function() {
  $__fn = function($rec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($rec)->head, ($rec)->tail);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_List_uncons)($xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_toUnfoldable'] = __NAMESPACE__ . '\\Data_List_toUnfoldable';

// Data_List_tail
function Data_List_tail($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_tail';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
case "Cons":
$xs = ($__case_0)->v1;
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
})())($xs);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_tail'] = __NAMESPACE__ . '\\Data_List_tail';

// Data_List_stripPrefix
function Data_List_stripPrefix($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_stripPrefix';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_tailRecM2 = ($GLOBALS['Data_List_tailRecM2'] ?? \Data\List\phpurs_eval_thunk('Data_List_tailRecM2'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_0;
    $__res = (function() use ($__global_Data_List_tailRecM2) {
  $__body = function($v, $s) use ($__global_Data_List_tailRecM2) {
    $__case_0 = $v;
    $__case_1 = $s;
    if (true) {
$p__prime__ = $__case_0;
$s1 = $__case_1;
$go = (function() {
  $__body = function($prefix, $input) {
    $__case_0 = $prefix;
    $__case_1 = $input;
    if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$p = ($__case_0)->v0;
$ps = ($__case_0)->v1;
$i = ($__case_1)->v0;
$is = ($__case_1)->v1;
return "/* Unsupported: Guards not supported */";
} else {
switch (($__case_0)->tag) {
case "Nil":
$is = $__case_1;
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
})())(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Done", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($is));
break;
default:
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
};
};
  };
  $__fn = function($prefix, $input = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($input) use ($prefix, &$__fn) { return $__fn($prefix, $input); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($prefix, $input);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return ($__global_Data_List_tailRecM2)($go, $p__prime__, $s1);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $s = null) use ($__global_Data_List_tailRecM2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($v, &$__fn) { return $__fn($v, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $s);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_stripPrefix'] = __NAMESPACE__ . '\\Data_List_stripPrefix';

// Data_List_span
function Data_List_span($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_span';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_1)->tag) {
case "Cons":
$p = $__case_0;
$x = ($__case_1)->v0;
$xs__prime__ = ($__case_1)->v1;
return "/* Unsupported: Guards not supported */";
break;
default:
$xs = $__case_1;
return (object)["init" => ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), "rest" => $xs];
break;
};
};
    $__res = null;
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_span'] = __NAMESPACE__ . '\\Data_List_span';

// Data_List_snoc
function Data_List_snoc($xs, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_snoc';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($xs, $__fn) { return $__fn($xs, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_List_foldr = ($GLOBALS['Data_List_foldr'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldr'));
    $__res = ($__global_Data_List_foldr)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($x, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))), $xs);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_snoc'] = __NAMESPACE__ . '\\Data_List_snoc';

// Data_List_singleton
function Data_List_singleton($a) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_singleton';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_singleton'] = __NAMESPACE__ . '\\Data_List_singleton';

// Data_List_sortBy
function Data_List_sortBy($cmp) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_sortBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_singleton = ($GLOBALS['Data_List_singleton'] ?? \Data\List\phpurs_eval_thunk('Data_List_singleton'));
$__global_Data_List_compose = ($GLOBALS['Data_List_compose'] ?? \Data\List\phpurs_eval_thunk('Data_List_compose'));
$merge = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$as = $__case_0;
$a = ($__case_0)->v0;
$as__prime__ = ($__case_0)->v1;
$bs = $__case_1;
$b = ($__case_1)->v0;
$bs__prime__ = ($__case_1)->v1;
return "/* Unsupported: Guards not supported */";
} else {
if ((($__case_0)->tag === "Nil")) {
$bs = $__case_1;
return $bs;
} else {
switch (($__case_1)->tag) {
case "Nil":
$as = $__case_0;
return $as;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$mergePairs = (function() use (&$merge, &$mergePairs) {
  $__fn = function($v) use (&$merge, &$mergePairs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v1)->tag === "Cons"))) {
$a = ($__case_0)->v0;
$b = (($__case_0)->v1)->v0;
$xs = (($__case_0)->v1)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($merge)($a, $b), ($mergePairs)($xs));
} else {
if (true) {
$xs = $__case_0;
return $xs;
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$mergeAll = (function() use (&$mergeAll, &$mergePairs) {
  $__fn = function($v) use (&$mergeAll, &$mergePairs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v1)->tag === "Nil"))) {
$x = ($__case_0)->v0;
return $x;
} else {
if (true) {
$xs = $__case_0;
$__tco_tmp_0 = ($mergePairs)($xs);
$v = $__tco_tmp_0;
continue ;
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$sequences = (function() use ($__global_Data_List_singleton) {
  $__fn = function($v) use ($__global_Data_List_singleton, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v1)->tag === "Cons"))) {
$a = ($__case_0)->v0;
$b = (($__case_0)->v1)->v0;
$xs = (($__case_0)->v1)->v1;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
$xs = $__case_0;
return ($__global_Data_List_singleton)($xs);
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$descending = (function() use (&$sequences) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$sequences, &$__fn) {
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
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
switch (($__case_2)->tag) {
case "Cons":
$a = $__case_0;
$as = $__case_1;
$b = ($__case_2)->v0;
$bs = ($__case_2)->v1;
return "/* Unsupported: Guards not supported */";
break;
default:
$a = $__case_0;
$as = $__case_1;
$bs = $__case_2;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, $as), ($sequences)($bs));
break;
};
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
$ascending = (function() use ($__global_Data_List_singleton, &$sequences) {
  $__fn = function($v, $v1 = null, $v2 = null) use ($__global_Data_List_singleton, &$sequences, &$__fn) {
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
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
switch (($__case_2)->tag) {
case "Cons":
$a = $__case_0;
$as = $__case_1;
$b = ($__case_2)->v0;
$bs = ($__case_2)->v1;
return "/* Unsupported: Guards not supported */";
break;
default:
$a = $__case_0;
$as = $__case_1;
$bs = $__case_2;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($as)(($__global_Data_List_singleton)($a)), ($sequences)($bs));
break;
};
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Data_List_compose)($mergeAll, $sequences);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_sortBy'] = __NAMESPACE__ . '\\Data_List_sortBy';

// Data_List_sort
function Data_List_sort($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_sort';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_sortBy = ($GLOBALS['Data_List_sortBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_sortBy'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (function() use ($__global_Data_List_sortBy, $compare) {
  $__fn = function($xs) use ($__global_Data_List_sortBy, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_sortBy)($compare, $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_sort'] = __NAMESPACE__ . '\\Data_List_sort';

// Data_List_tails
function Data_List_tails($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_tails';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_singleton = ($GLOBALS['Data_List_singleton'] ?? \Data\List\phpurs_eval_thunk('Data_List_singleton'));
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Nil":
return ($__global_Data_List_singleton)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
break;
case "Cons":
$list = $__case_0;
$tl = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($list, (($GLOBALS['Data_List_tails'] ?? \Data\List\phpurs_eval_thunk('Data_List_tails')))($tl));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_tails'] = __NAMESPACE__ . '\\Data_List_tails';

// Data_List_showPattern
function Data_List_showPattern($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_showPattern';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_append = ($GLOBALS['Data_List_append'] ?? \Data\List\phpurs_eval_thunk('Data_List_append'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show = $__case_res_0;
    $__res = (object)["show" => (function() use ($__global_Data_List_append, $show) {
  $__body = function($v) use ($__global_Data_List_append, $show) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return ($__global_Data_List_append)("(Pattern ", ($__global_Data_List_append)(($show)($s), ")"));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__global_Data_List_append, $show, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_showPattern'] = __NAMESPACE__ . '\\Data_List_showPattern';



// Data_List_takeWhile
function Data_List_takeWhile($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_takeWhile';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
$go = (function() use ($__global_Data_List_reverse) {
  $__fn = function($v, $v1 = null) use ($__global_Data_List_reverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_1)->tag) {
case "Cons":
$acc = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
return "/* Unsupported: Guards not supported */";
break;
default:
$acc = $__case_0;
return ($__global_Data_List_reverse)($acc);
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_takeWhile'] = __NAMESPACE__ . '\\Data_List_takeWhile';

// Data_List_unsnoc
function Data_List_unsnoc($lst) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_unsnoc';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_map = ($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map'));
$__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_0)->tag === "Nil")) {
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
} else {
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v1)->tag === "Nil"))) {
$x = ($__case_0)->v0;
$acc = $__case_1;
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
})())((object)["revInit" => $acc, "last" => $x]);
} else {
switch (($__case_0)->tag) {
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$acc = $__case_1;
$__tco_tmp_0 = $xs;
$__tco_tmp_1 = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($x, $acc);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Data_List_map)((function() use ($__global_Data_List_reverse) {
  $__fn = function($h) use ($__global_Data_List_reverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (object)["init" => ($__global_Data_List_reverse)(($h)->revInit), "last" => ($h)->last];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($go)($lst, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_unsnoc'] = __NAMESPACE__ . '\\Data_List_unsnoc';

// Data_List_zipWith
function Data_List_zipWith($f, $xs = null, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_zipWith';
  if ($__num < 3) {
    if ($__num === 2) return function($ys) use ($f, $xs, $__fn) { return $__fn($f, $xs, $ys); };
    if ($__num === 1) return function($xs, $ys = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $xs, $ys);
      if ($__num2 === 1) return function($ys) use ($f, $xs, $__fn) { return $__fn($f, $xs, $ys); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
$go = (function() use (&$go, $f) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$go, $f, &$__fn) {
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
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_0)->tag === "Nil")) {
$acc = $__case_2;
return $acc;
} else {
if ((($__case_1)->tag === "Nil")) {
$acc = $__case_2;
return $acc;
} else {
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$a = ($__case_0)->v0;
$as = ($__case_0)->v1;
$b = ($__case_1)->v0;
$bs = ($__case_1)->v1;
$acc = $__case_2;
$__tco_tmp_0 = $as;
$__tco_tmp_1 = $bs;
$__tco_tmp_2 = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a, $b), $acc);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue ;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Data_List_reverse)(($go)($xs, $ys, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_zipWith'] = __NAMESPACE__ . '\\Data_List_zipWith';


// Data_List_zipWithA
function Data_List_zipWithA($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_zipWithA';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_sequence = ($GLOBALS['Data_List_sequence'] ?? \Data\List\phpurs_eval_thunk('Data_List_sequence'));
$__global_Data_List_zipWith = ($GLOBALS['Data_List_zipWith'] ?? \Data\List\phpurs_eval_thunk('Data_List_zipWith'));
$sequence1 = ($__global_Data_List_sequence)($dictApplicative);
    $__res = (function() use ($sequence1, $__global_Data_List_zipWith) {
  $__fn = function($f, $xs = null, $ys = null) use ($sequence1, $__global_Data_List_zipWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($ys) use ($f, $xs, &$__fn) { return $__fn($f, $xs, $ys); };
    if ($__num === 1) return function($xs, $ys = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $xs, $ys);
      if ($__num2 === 1) return function($ys) use ($f, $xs, &$__fn) { return $__fn($f, $xs, $ys); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($sequence1)(($__global_Data_List_zipWith)($f, $xs, $ys));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_zipWithA'] = __NAMESPACE__ . '\\Data_List_zipWithA';

// Data_List_range
function Data_List_range($start, $end = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_range';
  if ($__num < 2) {
    if ($__num === 1) return function($end) use ($start, $__fn) { return $__fn($start, $end); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($start, $end) {
    $__case_0 = $start;
    $__case_1 = $end;
    if (true) {
$start1 = $__case_0;
$end1 = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($start, $end);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_range'] = __NAMESPACE__ . '\\Data_List_range';

// Data_List_partition
function Data_List_partition($p, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_partition';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($p, $__fn) { return $__fn($p, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_List_foldr = ($GLOBALS['Data_List_foldr'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldr'));
$select = (function() use ($p) {
  $__body = function($x, $v) use ($p) {
    $__case_0 = $x;
    $__case_1 = $v;
    if ((is_object)($__case_1)) {
$x1 = $__case_0;
$no = ($__case_1)->no;
$yes = ($__case_1)->yes;
$__case_0 = ($p)($x1);
switch ($__case_0) {
case true:
return (object)["no" => $no, "yes" => ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($x1, $yes)];
break;
default:
return (object)["no" => ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($x1, $no), "yes" => $yes];
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $v = null) use ($p, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($x, &$__fn) { return $__fn($x, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Data_List_foldr)($select, (object)["no" => ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), "yes" => ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))], $xs);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_partition'] = __NAMESPACE__ . '\\Data_List_partition';

// Data_List_null
function Data_List_null($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_null';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return true;
break;
default:
return false;
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_null'] = __NAMESPACE__ . '\\Data_List_null';

// Data_List_nubBy
function Data_List_nubBy($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_nubBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_Internal_insertAndLookupBy = ($GLOBALS['Data_List_Internal_insertAndLookupBy'] ?? \Data\List\Internal\phpurs_eval_thunk('Data_List_Internal_insertAndLookupBy'));
$__global_Data_List_compose = ($GLOBALS['Data_List_compose'] ?? \Data\List\phpurs_eval_thunk('Data_List_compose'));
$__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
$go = (function() use ($__global_Data_List_Internal_insertAndLookupBy, $p, &$go) {
  $__fn = function($v, $v1 = null, $v2 = null) use ($__global_Data_List_Internal_insertAndLookupBy, $p, &$go, &$__fn) {
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
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
switch (($__case_2)->tag) {
case "Nil":
$acc = $__case_1;
return $acc;
break;
case "Cons":
$s = $__case_0;
$acc = $__case_1;
$a = ($__case_2)->v0;
$as = ($__case_2)->v1;
$v3 = ($__global_Data_List_Internal_insertAndLookupBy)($p, $a, $s);
$__case_0 = $v3;
if ((is_object)($__case_0)) {
$found = ($__case_0)->found;
$s__prime__ = ($__case_0)->result;
$__case_0 = $found;
switch ($__case_0) {
case true:
$__tco_tmp_0 = $s__prime__;
$__tco_tmp_1 = $acc;
$__tco_tmp_2 = $as;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue 3;
break;
default:
$__tco_tmp_0 = $s__prime__;
$__tco_tmp_1 = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, $acc);
$__tco_tmp_2 = $as;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue 3;
break;
};
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Data_List_compose)($__global_Data_List_reverse, ($go)(($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_nubBy'] = __NAMESPACE__ . '\\Data_List_nubBy';

// Data_List_nub
function Data_List_nub($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_nub';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_nubBy = ($GLOBALS['Data_List_nubBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_nubBy'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_List_nubBy)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_nub'] = __NAMESPACE__ . '\\Data_List_nub';


// Data_List_mapMaybe
function Data_List_mapMaybe($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_mapMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
$go = (function() use ($__global_Data_List_reverse, $f, &$go) {
  $__fn = function($v, $v1 = null) use ($__global_Data_List_reverse, $f, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_1)->tag) {
case "Nil":
$acc = $__case_0;
return ($__global_Data_List_reverse)($acc);
break;
case "Cons":
$acc = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
$v2 = ($f)($x);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Nothing":
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 3;
break;
case "Just":
$y = ($__case_0)->v0;
$__tco_tmp_0 = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($y, $acc);
$__tco_tmp_1 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 3;
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
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_mapMaybe'] = __NAMESPACE__ . '\\Data_List_mapMaybe';

// Data_List_manyRec
function Data_List_manyRec($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_manyRec';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Data_List_bimap = ($GLOBALS['Data_List_bimap'] ?? \Data\List\phpurs_eval_thunk('Data_List_bimap'));
$__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind1 = $__case_res_0;
$__case_0 = $dictMonadRec;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->tailRecM;
} else {
throw new \Exception("Pattern match failure");
};
$tailRecM = $__case_res_1;
    $__res = (function() use ($__global_Prim_undefined, $dict, $bind1, $__global_Data_Unit_unit, $__global_Data_List_bimap, $__global_Data_List_reverse, $tailRecM) {
  $__fn = function($dictAlternative) use ($__global_Prim_undefined, $dict, $bind1, $__global_Data_Unit_unit, $__global_Data_List_bimap, $__global_Data_List_reverse, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Alt0 = (((($dictAlternative)->Plus1)($__global_Prim_undefined))->Alt0)($__global_Prim_undefined);
$__case_0 = $Alt0;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->alt;
} else {
throw new \Exception("Pattern match failure");
};
$alt = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_4;
    $__res = (function() use ($bind1, $alt, $map1, $pure, $__global_Data_Unit_unit, $__global_Data_List_bimap, $__global_Data_List_reverse, $tailRecM) {
  $__fn = function($p) use ($bind1, $alt, $map1, $pure, $__global_Data_Unit_unit, $__global_Data_List_bimap, $__global_Data_List_reverse, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($bind1, $alt, $map1, $p, $pure, $__global_Data_Unit_unit, $__global_Data_List_bimap, $__global_Data_List_reverse) {
  $__fn = function($acc) use ($bind1, $alt, $map1, $p, $pure, $__global_Data_Unit_unit, $__global_Data_List_bimap, $__global_Data_List_reverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind1)(($alt)(($map1)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Loop", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $p), ($pure)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Done", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Data_Unit_unit))), (function() use ($pure, $__global_Data_List_bimap, $acc, $__global_Data_List_reverse) {
  $__fn = function($aa) use ($pure, $__global_Data_List_bimap, $acc, $__global_Data_List_reverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(($__global_Data_List_bimap)((function() use ($acc) {
  $__fn = function($v) use ($acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($v, $acc);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (function() use ($__global_Data_List_reverse, $acc) {
  $__fn = function($v) use ($__global_Data_List_reverse, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_reverse)($acc);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $aa));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($tailRecM)($go, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
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
$GLOBALS['Data_List_manyRec'] = __NAMESPACE__ . '\\Data_List_manyRec';

// Data_List_someRec
function Data_List_someRec($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_someRec';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Data_List_bimap = ($GLOBALS['Data_List_bimap'] ?? \Data\List\phpurs_eval_thunk('Data_List_bimap'));
$__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind1 = $__case_res_0;
$__case_0 = $dictMonadRec;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->tailRecM;
} else {
throw new \Exception("Pattern match failure");
};
$tailRecM = $__case_res_1;
$manyRec1 = (function() use ($__global_Prim_undefined, $dict, $bind1, $__global_Data_Unit_unit, $__global_Data_List_bimap, $__global_Data_List_reverse, $tailRecM) {
  $__fn = function($dictAlternative) use ($__global_Prim_undefined, $dict, $bind1, $__global_Data_Unit_unit, $__global_Data_List_bimap, $__global_Data_List_reverse, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Alt0 = (((($dictAlternative)->Plus1)($__global_Prim_undefined))->Alt0)($__global_Prim_undefined);
$__case_0 = $Alt0;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->alt;
} else {
throw new \Exception("Pattern match failure");
};
$alt = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_4;
    $__res = (function() use ($bind1, $alt, $map1, $pure, $__global_Data_Unit_unit, $__global_Data_List_bimap, $__global_Data_List_reverse, $tailRecM) {
  $__fn = function($p) use ($bind1, $alt, $map1, $pure, $__global_Data_Unit_unit, $__global_Data_List_bimap, $__global_Data_List_reverse, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($bind1, $alt, $map1, $p, $pure, $__global_Data_Unit_unit, $__global_Data_List_bimap, $__global_Data_List_reverse) {
  $__fn = function($acc) use ($bind1, $alt, $map1, $p, $pure, $__global_Data_Unit_unit, $__global_Data_List_bimap, $__global_Data_List_reverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind1)(($alt)(($map1)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Loop", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $p), ($pure)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Done", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Data_Unit_unit))), (function() use ($pure, $__global_Data_List_bimap, $acc, $__global_Data_List_reverse) {
  $__fn = function($aa) use ($pure, $__global_Data_List_bimap, $acc, $__global_Data_List_reverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(($__global_Data_List_bimap)((function() use ($acc) {
  $__fn = function($v) use ($acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($v, $acc);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (function() use ($__global_Data_List_reverse, $acc) {
  $__fn = function($v) use ($__global_Data_List_reverse, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_reverse)($acc);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $aa));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($tailRecM)($go, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($dict, $manyRec1) {
  $__fn = function($dictAlternative) use ($dict, $manyRec1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_5;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_6;
$manyRec2 = ($manyRec1)($dictAlternative);
    $__res = (function() use ($apply, $map1, $manyRec2) {
  $__fn = function($v) use ($apply, $map1, $manyRec2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($apply)(($map1)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $v), ($manyRec2)($v));
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
$GLOBALS['Data_List_someRec'] = __NAMESPACE__ . '\\Data_List_someRec';

// Data_List_some
function Data_List_some($dictAlternative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_some';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_many = ($GLOBALS['Data_List_many'] ?? \Data\List\phpurs_eval_thunk('Data_List_many'));
while (true) {
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_1;
return (function() use ($apply, $map1, $dict, $__global_Data_List_many, $dictAlternative) {
  $__fn = function($dictLazy) use ($apply, $map1, $dict, $__global_Data_List_many, $dictAlternative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictLazy;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->defer;
} else {
throw new \Exception("Pattern match failure");
};
$defer = $__case_res_2;
    $__res = (function() use ($apply, $map1, $defer, $dict, $__global_Data_List_many, $dictAlternative, $dictLazy) {
  $__fn = function($v) use ($apply, $map1, $defer, $dict, $__global_Data_List_many, $dictAlternative, $dictLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($apply)(($map1)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $v), ($defer)((function() use ($dict, $__global_Data_List_many, $dictAlternative, $dictLazy, $v) {
  $__fn = function($v1) use ($dict, $__global_Data_List_many, $dictAlternative, $dictLazy, $v, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->alt;
} else {
throw new \Exception("Pattern match failure");
};
$alt = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_4;
    $__res = ((function() use ($alt, $dict, $__global_Data_List_many, $dictAlternative, $pure) {
  $__fn = function($dictLazy, $v = null) use ($alt, $dict, $__global_Data_List_many, $dictAlternative, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($dictLazy, &$__fn) { return $__fn($dictLazy, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_5;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_6;
    $__res = ($alt)(((function() use ($apply, $map1, $__global_Data_List_many, $dictAlternative) {
  $__fn = function($dictLazy) use ($apply, $map1, $__global_Data_List_many, $dictAlternative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictLazy;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->defer;
} else {
throw new \Exception("Pattern match failure");
};
$defer = $__case_res_7;
    $__res = (function() use ($apply, $map1, $defer, $__global_Data_List_many, $dictAlternative, $dictLazy) {
  $__fn = function($v) use ($apply, $map1, $defer, $__global_Data_List_many, $dictAlternative, $dictLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($apply)(($map1)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $v), ($defer)((function() use ($__global_Data_List_many, $dictAlternative, $dictLazy, $v) {
  $__fn = function($v1) use ($__global_Data_List_many, $dictAlternative, $dictLazy, $v, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_many)($dictAlternative, $dictLazy, $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($dictLazy, $v), ($pure)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($dictLazy, $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_some'] = __NAMESPACE__ . '\\Data_List_some';

// Data_List_many
function Data_List_many($dictAlternative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_many';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_some = ($GLOBALS['Data_List_some'] ?? \Data\List\phpurs_eval_thunk('Data_List_some'));
while (true) {
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->alt;
} else {
throw new \Exception("Pattern match failure");
};
$alt = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_1;
return (function() use ($alt, $dict, $__global_Data_List_some, $dictAlternative, $pure) {
  $__fn = function($dictLazy, $v = null) use ($alt, $dict, $__global_Data_List_some, $dictAlternative, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($dictLazy, &$__fn) { return $__fn($dictLazy, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_3;
    $__res = ($alt)(((function() use ($apply, $map1, $dict, $__global_Data_List_some, $dictAlternative) {
  $__fn = function($dictLazy) use ($apply, $map1, $dict, $__global_Data_List_some, $dictAlternative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictLazy;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->defer;
} else {
throw new \Exception("Pattern match failure");
};
$defer = $__case_res_4;
    $__res = (function() use ($apply, $map1, $defer, $dict, $__global_Data_List_some, $dictAlternative, $dictLazy) {
  $__fn = function($v) use ($apply, $map1, $defer, $dict, $__global_Data_List_some, $dictAlternative, $dictLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($apply)(($map1)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $v), ($defer)((function() use ($dict, $__global_Data_List_some, $dictAlternative, $dictLazy, $v) {
  $__fn = function($v1) use ($dict, $__global_Data_List_some, $dictAlternative, $dictLazy, $v, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->alt;
} else {
throw new \Exception("Pattern match failure");
};
$alt = $__case_res_5;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_6;
    $__res = ((function() use ($alt, $__global_Data_List_some, $dictAlternative, $pure) {
  $__fn = function($dictLazy, $v = null) use ($alt, $__global_Data_List_some, $dictAlternative, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($dictLazy, &$__fn) { return $__fn($dictLazy, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($alt)(($__global_Data_List_some)($dictAlternative, $dictLazy, $v), ($pure)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($dictLazy, $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($dictLazy, $v), ($pure)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_many'] = __NAMESPACE__ . '\\Data_List_many';


// Data_List_last
function Data_List_last($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_last';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v1)->tag === "Nil"))) {
$x = ($__case_0)->v0;
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
})())($x);
} else {
switch (($__case_0)->tag) {
case "Cons":
$xs = ($__case_0)->v1;
$__tco_tmp_0 = $xs;
$v = $__tco_tmp_0;
continue 2;
break;
default:
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
};
};
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_last'] = __NAMESPACE__ . '\\Data_List_last';

// Data_List_insertBy
function Data_List_insertBy($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_insertBy';
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
$__global_Data_List_singleton = ($GLOBALS['Data_List_singleton'] ?? \Data\List\phpurs_eval_thunk('Data_List_singleton'));
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
switch (($__case_2)->tag) {
case "Nil":
$x = $__case_1;
return ($__global_Data_List_singleton)($x);
break;
case "Cons":
$cmp = $__case_0;
$x = $__case_1;
$ys = $__case_2;
$y = ($__case_2)->v0;
$ys__prime__ = ($__case_2)->v1;
$v3 = ($cmp)($x, $y);
$__case_0 = $v3;
switch (($__case_0)->tag) {
case "GT":
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($y, (($GLOBALS['Data_List_insertBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_insertBy')))($cmp, $x, $ys__prime__));
break;
default:
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($x, $ys);
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_insertBy'] = __NAMESPACE__ . '\\Data_List_insertBy';

// Data_List_insertAt
function Data_List_insertAt($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_insertAt';
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
$__global_Data_List_map = ($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map'));
$__global_Data_List_sub = ($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub'));
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if (($__case_0 === 0)) {
$x = $__case_1;
$xs = $__case_2;
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
})())(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($x, $xs));
} else {
switch (($__case_2)->tag) {
case "Cons":
$n = $__case_0;
$x = $__case_1;
$y = ($__case_2)->v0;
$ys = ($__case_2)->v1;
return ($__global_Data_List_map)((function() use ($y) {
  $__fn = function($v3) use ($y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($y, $v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_List_insertAt'] ?? \Data\List\phpurs_eval_thunk('Data_List_insertAt')))(($__global_Data_List_sub)($n, 1), $x, $ys));
break;
default:
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
};
};
};
    $__res = null;
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_insertAt'] = __NAMESPACE__ . '\\Data_List_insertAt';

// Data_List_insert
function Data_List_insert($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_insert';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_insertBy = ($GLOBALS['Data_List_insertBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_insertBy'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_List_insertBy)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_insert'] = __NAMESPACE__ . '\\Data_List_insert';

// Data_List_init
function Data_List_init($lst) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_init';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_map = ($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map'));
$__global_Data_List_unsnoc = ($GLOBALS['Data_List_unsnoc'] ?? \Data\List\phpurs_eval_thunk('Data_List_unsnoc'));
    $__res = ($__global_Data_List_map)((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v)->init;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_List_unsnoc)($lst));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_init'] = __NAMESPACE__ . '\\Data_List_init';

// Data_List_index
function Data_List_index($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_index';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_List_sub = ($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub'));
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_0)->tag === "Nil")) {
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
} else {
if (((($__case_0)->tag === "Cons") && ($__case_1 === 0))) {
$a = ($__case_0)->v0;
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
})())($a);
} else {
switch (($__case_0)->tag) {
case "Cons":
$as = ($__case_0)->v1;
$i = $__case_1;
$__tco_tmp_0 = $as;
$__tco_tmp_1 = ($__global_Data_List_sub)($i, 1);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
};
    $__res = null;
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_index'] = __NAMESPACE__ . '\\Data_List_index';

// Data_List_head
function Data_List_head($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_head';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
case "Cons":
$x = ($__case_0)->v0;
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
})())($x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_head'] = __NAMESPACE__ . '\\Data_List_head';

// Data_List_transpose
function Data_List_transpose($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_transpose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_mapMaybe = ($GLOBALS['Data_List_mapMaybe'] ?? \Data\List\phpurs_eval_thunk('Data_List_mapMaybe'));
$__global_Data_List_head = ($GLOBALS['Data_List_head'] ?? \Data\List\phpurs_eval_thunk('Data_List_head'));
$__global_Data_List_tail = ($GLOBALS['Data_List_tail'] ?? \Data\List\phpurs_eval_thunk('Data_List_tail'));
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Nil")) {
return ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
} else {
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v0)->tag === "Nil"))) {
$xss = ($__case_0)->v1;
$__tco_tmp_0 = $xss;
$v = $__tco_tmp_0;
continue ;
} else {
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v0)->tag === "Cons"))) {
$x = (($__case_0)->v0)->v0;
$xs = (($__case_0)->v0)->v1;
$xss = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($x, ($__global_Data_List_mapMaybe)($__global_Data_List_head, $xss)), (($GLOBALS['Data_List_transpose'] ?? \Data\List\phpurs_eval_thunk('Data_List_transpose')))(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($xs, ($__global_Data_List_mapMaybe)($__global_Data_List_tail, $xss))));
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_transpose'] = __NAMESPACE__ . '\\Data_List_transpose';

// Data_List_groupBy
function Data_List_groupBy($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_groupBy';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_List_span = ($GLOBALS['Data_List_span'] ?? \Data\List\phpurs_eval_thunk('Data_List_span'));
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_1)->tag) {
case "Nil":
return ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
break;
case "Cons":
$eq2 = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
$v2 = ($__global_Data_List_span)(($eq2)($x), $xs);
$__case_0 = $v2;
if ((is_object)($__case_0)) {
$ys = ($__case_0)->init;
$zs = ($__case_0)->rest;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($x, $ys), (($GLOBALS['Data_List_groupBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_groupBy')))($eq2, $zs));
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_groupBy'] = __NAMESPACE__ . '\\Data_List_groupBy';

// Data_List_groupAllBy
function Data_List_groupAllBy($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_groupAllBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_compose = ($GLOBALS['Data_List_compose'] ?? \Data\List\phpurs_eval_thunk('Data_List_compose'));
$__global_Data_List_groupBy = ($GLOBALS['Data_List_groupBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_groupBy'));
$__global_Data_List_eq = ($GLOBALS['Data_List_eq'] ?? \Data\List\phpurs_eval_thunk('Data_List_eq'));
$__global_Data_List_sortBy = ($GLOBALS['Data_List_sortBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_sortBy'));
    $__res = ($__global_Data_List_compose)(($__global_Data_List_groupBy)((function() use ($__global_Data_List_eq, $p) {
  $__fn = function($x, $y = null) use ($__global_Data_List_eq, $p, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_List_eq)(($p)($x, $y), ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ")));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), ($__global_Data_List_sortBy)($p));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_groupAllBy'] = __NAMESPACE__ . '\\Data_List_groupAllBy';

// Data_List_group
function Data_List_group($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_group';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_groupBy = ($GLOBALS['Data_List_groupBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_groupBy'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_List_groupBy)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_group'] = __NAMESPACE__ . '\\Data_List_group';

// Data_List_groupAll
function Data_List_groupAll($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_groupAll';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_compose = ($GLOBALS['Data_List_compose'] ?? \Data\List\phpurs_eval_thunk('Data_List_compose'));
$__global_Data_List_groupBy = ($GLOBALS['Data_List_groupBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_groupBy'));
$__global_Data_List_sortBy = ($GLOBALS['Data_List_sortBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_sortBy'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dictOrd;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_1;
    $__res = ($__global_Data_List_compose)(($__global_Data_List_groupBy)($__case_res_0), (function() use ($__global_Data_List_sortBy, $compare) {
  $__fn = function($xs) use ($__global_Data_List_sortBy, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_sortBy)($compare, $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_groupAll'] = __NAMESPACE__ . '\\Data_List_groupAll';

// Data_List_fromFoldable
function Data_List_fromFoldable($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_fromFoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_0)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_fromFoldable'] = __NAMESPACE__ . '\\Data_List_fromFoldable';

// Data_List_foldM
function Data_List_foldM($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_foldM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind1 = $__case_res_1;
return (function() use ($pure, $bind1, $dict, $dictMonad) {
  $__body = function($v, $v1, $v2) use ($pure, $bind1, $dict, $dictMonad) {
    $__global_Data_List_foldM = ($GLOBALS['Data_List_foldM'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldM'));
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "Nil":
$b = $__case_1;
return ($pure)($b);
break;
case "Cons":
$f = $__case_0;
$b = $__case_1;
$a = ($__case_2)->v0;
$as = ($__case_2)->v1;
return ($bind1)(($f)($b, $a), (function() use ($dict, $__global_Data_List_foldM, $dictMonad, $f, $as) {
  $__fn = function($b__prime__) use ($dict, $__global_Data_List_foldM, $dictMonad, $f, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind1 = $__case_res_3;
    $__res = ((function() use ($pure, $bind1, $__global_Data_List_foldM, $dictMonad) {
  $__body = function($v, $v1, $v2) use ($pure, $bind1, $__global_Data_List_foldM, $dictMonad) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "Nil":
$b = $__case_1;
return ($pure)($b);
break;
case "Cons":
$f = $__case_0;
$b = $__case_1;
$a = ($__case_2)->v0;
$as = ($__case_2)->v1;
return ($bind1)(($f)($b, $a), (function() use ($__global_Data_List_foldM, $dictMonad, $f, $as) {
  $__fn = function($b__prime__) use ($__global_Data_List_foldM, $dictMonad, $f, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_foldM)($dictMonad, $f, $b__prime__, $as);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($pure, $bind1, $__global_Data_List_foldM, $dictMonad, $__body, &$__fn) {
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
})())($f, $b__prime__, $as);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($pure, $bind1, $dict, $dictMonad, $__body, &$__fn) {
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
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_foldM'] = __NAMESPACE__ . '\\Data_List_foldM';

// Data_List_findIndex
function Data_List_findIndex($fn) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_findIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_1)->tag) {
case "Cons":
$n = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
return "/* Unsupported: Guards not supported */";
break;
case "Nil":
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)(0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_findIndex'] = __NAMESPACE__ . '\\Data_List_findIndex';

// Data_List_findLastIndex
function Data_List_findLastIndex($fn, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_findLastIndex';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($fn, $__fn) { return $__fn($fn, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_List_map = ($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map'));
$__global_Data_List_sub = ($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub'));
$__global_Data_List_length = ($GLOBALS['Data_List_length'] ?? \Data\List\phpurs_eval_thunk('Data_List_length'));
$__global_Data_List_findIndex = ($GLOBALS['Data_List_findIndex'] ?? \Data\List\phpurs_eval_thunk('Data_List_findIndex'));
$__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
    $__res = ($__global_Data_List_map)((function() use ($__global_Data_List_sub, $__global_Data_List_length, $xs) {
  $__fn = function($v) use ($__global_Data_List_sub, $__global_Data_List_length, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_sub)(($__global_Data_List_sub)(($__global_Data_List_length)($xs), 1), $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_List_findIndex)($fn, ($__global_Data_List_reverse)($xs)));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_findLastIndex'] = __NAMESPACE__ . '\\Data_List_findLastIndex';

// Data_List_filterM
function Data_List_filterM($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_filterM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind1 = $__case_res_1;
return (function() use ($pure, $bind1, $dict, $dictMonad) {
  $__body = function($v, $v1) use ($pure, $bind1, $dict, $dictMonad) {
    $__global_Data_List_filterM = ($GLOBALS['Data_List_filterM'] ?? \Data\List\phpurs_eval_thunk('Data_List_filterM'));
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "Nil":
return ($pure)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
break;
case "Cons":
$p = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
return ($bind1)(($p)($x), (function() use ($bind1, $dict, $__global_Data_List_filterM, $dictMonad, $p, $xs, $pure, $x) {
  $__fn = function($b) use ($bind1, $dict, $__global_Data_List_filterM, $dictMonad, $p, $xs, $pure, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind1 = $__case_res_3;
    $__res = ($bind1)(((function() use ($pure, $bind1, $__global_Data_List_filterM, $dictMonad) {
  $__body = function($v, $v1) use ($pure, $bind1, $__global_Data_List_filterM, $dictMonad) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "Nil":
return ($pure)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
break;
case "Cons":
$p = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
return ($bind1)(($p)($x), (function() use ($bind1, $__global_Data_List_filterM, $dictMonad, $p, $xs, $pure, $x) {
  $__fn = function($b) use ($bind1, $__global_Data_List_filterM, $dictMonad, $p, $xs, $pure, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind1)(($__global_Data_List_filterM)($dictMonad, $p, $xs), (function() use ($pure, $b, $x) {
  $__fn = function($xs__prime__) use ($pure, $b, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $b;
$__case_res_4 = null;
switch ($__case_0) {
case true:
$__case_res_4 = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($x, $xs__prime__);
break;
default:
$__case_res_4 = $xs__prime__;
break;
};
    $__res = ($pure)($__case_res_4);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($pure, $bind1, $__global_Data_List_filterM, $dictMonad, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($p, $xs), (function() use ($pure, $b, $x) {
  $__fn = function($xs__prime__) use ($pure, $b, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $b;
$__case_res_5 = null;
switch ($__case_0) {
case true:
$__case_res_5 = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($x, $xs__prime__);
break;
default:
$__case_res_5 = $xs__prime__;
break;
};
    $__res = ($pure)($__case_res_5);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($pure, $bind1, $dict, $dictMonad, $__body, &$__fn) {
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
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_filterM'] = __NAMESPACE__ . '\\Data_List_filterM';

// Data_List_filter
function Data_List_filter($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_filter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
$go = (function() use ($__global_Data_List_reverse) {
  $__fn = function($v, $v1 = null) use ($__global_Data_List_reverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_1)->tag) {
case "Nil":
$acc = $__case_0;
return ($__global_Data_List_reverse)($acc);
break;
case "Cons":
$acc = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
return "/* Unsupported: Guards not supported */";
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_filter'] = __NAMESPACE__ . '\\Data_List_filter';

// Data_List_intersectBy
function Data_List_intersectBy($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_intersectBy';
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
    $__global_Data_List_filter = ($GLOBALS['Data_List_filter'] ?? \Data\List\phpurs_eval_thunk('Data_List_filter'));
    $__global_Data_List_any = ($GLOBALS['Data_List_any'] ?? \Data\List\phpurs_eval_thunk('Data_List_any'));
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_1)->tag === "Nil")) {
return ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
} else {
switch (($__case_2)->tag) {
case "Nil":
return ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
break;
default:
$eq2 = $__case_0;
$xs = $__case_1;
$ys = $__case_2;
return ($__global_Data_List_filter)((function() use ($__global_Data_List_any, $eq2, $ys) {
  $__fn = function($x) use ($__global_Data_List_any, $eq2, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_any)(($eq2)($x), $ys);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs);
break;
};
};
  };
    $__res = $__body($v, $v1, $v2);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_intersectBy'] = __NAMESPACE__ . '\\Data_List_intersectBy';

// Data_List_intersect
function Data_List_intersect($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_intersect';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_intersectBy = ($GLOBALS['Data_List_intersectBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_intersectBy'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_List_intersectBy)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_intersect'] = __NAMESPACE__ . '\\Data_List_intersect';

// Data_List_nubByEq
function Data_List_nubByEq($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_nubByEq';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_List_filter = ($GLOBALS['Data_List_filter'] ?? \Data\List\phpurs_eval_thunk('Data_List_filter'));
$__global_Data_List_not = ($GLOBALS['Data_List_not'] ?? \Data\List\phpurs_eval_thunk('Data_List_not'));
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_1)->tag) {
case "Nil":
return ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
break;
case "Cons":
$eq__prime__ = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($x, (($GLOBALS['Data_List_nubByEq'] ?? \Data\List\phpurs_eval_thunk('Data_List_nubByEq')))($eq__prime__, ($__global_Data_List_filter)((function() use ($__global_Data_List_not, $eq__prime__, $x) {
  $__fn = function($y) use ($__global_Data_List_not, $eq__prime__, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_not)(($eq__prime__)($x, $y));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_nubByEq'] = __NAMESPACE__ . '\\Data_List_nubByEq';

// Data_List_nubEq
function Data_List_nubEq($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_nubEq';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_nubByEq = ($GLOBALS['Data_List_nubByEq'] ?? \Data\List\phpurs_eval_thunk('Data_List_nubByEq'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_List_nubByEq)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_nubEq'] = __NAMESPACE__ . '\\Data_List_nubEq';

// Data_List_eqPattern
function Data_List_eqPattern($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_eqPattern';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_0;
    $__res = (object)["eq" => (function() use ($eq2) {
  $__body = function($x, $y) use ($eq2) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($eq2)($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($eq2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_eqPattern'] = __NAMESPACE__ . '\\Data_List_eqPattern';

// Data_List_ordPattern
function Data_List_ordPattern($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_ordPattern';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_1;
$eqPattern1 = (object)["eq" => (function() use ($eq2) {
  $__body = function($x, $y) use ($eq2) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($eq2)($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($eq2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["compare" => (function() use ($compare) {
  $__body = function($x, $y) use ($compare) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($compare)($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($compare, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqPattern1) {
  $__fn = function($__dollar____unused) use ($eqPattern1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqPattern1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_ordPattern'] = __NAMESPACE__ . '\\Data_List_ordPattern';

// Data_List_elemLastIndex
function Data_List_elemLastIndex($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_elemLastIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_findLastIndex = ($GLOBALS['Data_List_findLastIndex'] ?? \Data\List\phpurs_eval_thunk('Data_List_findLastIndex'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_0;
    $__res = (function() use ($__global_Data_List_findLastIndex, $eq2) {
  $__fn = function($x) use ($__global_Data_List_findLastIndex, $eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_findLastIndex)((function() use ($eq2, $x) {
  $__fn = function($v) use ($eq2, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($eq2)($v, $x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_elemLastIndex'] = __NAMESPACE__ . '\\Data_List_elemLastIndex';

// Data_List_elemIndex
function Data_List_elemIndex($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_elemIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_findIndex = ($GLOBALS['Data_List_findIndex'] ?? \Data\List\phpurs_eval_thunk('Data_List_findIndex'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq2 = $__case_res_0;
    $__res = (function() use ($__global_Data_List_findIndex, $eq2) {
  $__fn = function($x) use ($__global_Data_List_findIndex, $eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_findIndex)((function() use ($eq2, $x) {
  $__fn = function($v) use ($eq2, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($eq2)($v, $x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_elemIndex'] = __NAMESPACE__ . '\\Data_List_elemIndex';

// Data_List_dropWhile
function Data_List_dropWhile($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_dropWhile';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
break;
default:
$xs = $__case_0;
return $xs;
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_dropWhile'] = __NAMESPACE__ . '\\Data_List_dropWhile';

// Data_List_dropEnd
function Data_List_dropEnd($n, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_dropEnd';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($n, $__fn) { return $__fn($n, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_List_take = ($GLOBALS['Data_List_take'] ?? \Data\List\phpurs_eval_thunk('Data_List_take'));
$__global_Data_List_sub = ($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub'));
$__global_Data_List_length = ($GLOBALS['Data_List_length'] ?? \Data\List\phpurs_eval_thunk('Data_List_length'));
    $__res = ($__global_Data_List_take)(($__global_Data_List_sub)(($__global_Data_List_length)($xs), $n), $xs);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_dropEnd'] = __NAMESPACE__ . '\\Data_List_dropEnd';

// Data_List_drop
function Data_List_drop($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_drop';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_List_sub = ($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub'));
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (true) {
$n = $__case_0;
$xs = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
switch (($__case_1)->tag) {
case "Nil":
return ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
break;
case "Cons":
$n = $__case_0;
$xs = ($__case_1)->v1;
$__tco_tmp_0 = ($__global_Data_List_sub)($n, 1);
$__tco_tmp_1 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
    $__res = null;
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_drop'] = __NAMESPACE__ . '\\Data_List_drop';

// Data_List_slice
function Data_List_slice($start, $end = null, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_slice';
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($start, $end, $__fn) { return $__fn($start, $end, $xs); };
    if ($__num === 1) return function($end, $xs = null) use ($start, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($start, $end, $xs);
      if ($__num2 === 1) return function($xs) use ($start, $end, $__fn) { return $__fn($start, $end, $xs); };
      return phpurs_curry_fallback($__fn, [$start], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_List_take = ($GLOBALS['Data_List_take'] ?? \Data\List\phpurs_eval_thunk('Data_List_take'));
$__global_Data_List_sub = ($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub'));
$__global_Data_List_drop = ($GLOBALS['Data_List_drop'] ?? \Data\List\phpurs_eval_thunk('Data_List_drop'));
    $__res = ($__global_Data_List_take)(($__global_Data_List_sub)($end, $start), ($__global_Data_List_drop)($start, $xs));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_slice'] = __NAMESPACE__ . '\\Data_List_slice';

// Data_List_takeEnd
function Data_List_takeEnd($n, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_takeEnd';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($n, $__fn) { return $__fn($n, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_List_drop = ($GLOBALS['Data_List_drop'] ?? \Data\List\phpurs_eval_thunk('Data_List_drop'));
$__global_Data_List_sub = ($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub'));
$__global_Data_List_length = ($GLOBALS['Data_List_length'] ?? \Data\List\phpurs_eval_thunk('Data_List_length'));
    $__res = ($__global_Data_List_drop)(($__global_Data_List_sub)(($__global_Data_List_length)($xs), $n), $xs);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_takeEnd'] = __NAMESPACE__ . '\\Data_List_takeEnd';

// Data_List_deleteBy
function Data_List_deleteBy($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_deleteBy';
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
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
switch (($__case_2)->tag) {
case "Nil":
return ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
break;
case "Cons":
$eq__prime__ = $__case_0;
$x = $__case_1;
$y = ($__case_2)->v0;
$ys = ($__case_2)->v1;
return "/* Unsupported: Guards not supported */";
break;
case "Cons":
$eq__prime__ = $__case_0;
$x = $__case_1;
$y = ($__case_2)->v0;
$ys = ($__case_2)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($y, (($GLOBALS['Data_List_deleteBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_deleteBy')))($eq__prime__, $x, $ys));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_deleteBy'] = __NAMESPACE__ . '\\Data_List_deleteBy';

// Data_List_unionBy
function Data_List_unionBy($eq2, $xs = null, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_unionBy';
  if ($__num < 3) {
    if ($__num === 2) return function($ys) use ($eq2, $xs, $__fn) { return $__fn($eq2, $xs, $ys); };
    if ($__num === 1) return function($xs, $ys = null) use ($eq2, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($eq2, $xs, $ys);
      if ($__num2 === 1) return function($ys) use ($eq2, $xs, $__fn) { return $__fn($eq2, $xs, $ys); };
      return phpurs_curry_fallback($__fn, [$eq2], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_List_append1 = ($GLOBALS['Data_List_append1'] ?? \Data\List\phpurs_eval_thunk('Data_List_append1'));
$__global_Data_List_foldl = ($GLOBALS['Data_List_foldl'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldl'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__global_Data_List_deleteBy = ($GLOBALS['Data_List_deleteBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_deleteBy'));
$__global_Data_List_nubByEq = ($GLOBALS['Data_List_nubByEq'] ?? \Data\List\phpurs_eval_thunk('Data_List_nubByEq'));
    $__res = ($__global_Data_List_append1)($xs, ($__global_Data_List_foldl)(($__global_Data_Function_flip)(($__global_Data_List_deleteBy)($eq2)), ($__global_Data_List_nubByEq)($eq2, $ys), $xs));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_unionBy'] = __NAMESPACE__ . '\\Data_List_unionBy';

// Data_List_union
function Data_List_union($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_union';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_unionBy = ($GLOBALS['Data_List_unionBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_unionBy'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_List_unionBy)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_union'] = __NAMESPACE__ . '\\Data_List_union';

// Data_List_deleteAt
function Data_List_deleteAt($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_deleteAt';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_List_map = ($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map'));
$__global_Data_List_sub = ($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub'));
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_0 === 0) && (($__case_1)->tag === "Cons"))) {
$ys = ($__case_1)->v1;
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
})())($ys);
} else {
switch (($__case_1)->tag) {
case "Cons":
$n = $__case_0;
$y = ($__case_1)->v0;
$ys = ($__case_1)->v1;
return ($__global_Data_List_map)((function() use ($y) {
  $__fn = function($v2) use ($y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($y, $v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_List_deleteAt'] ?? \Data\List\phpurs_eval_thunk('Data_List_deleteAt')))(($__global_Data_List_sub)($n, 1), $ys));
break;
default:
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
};
};
};
    $__res = null;
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_deleteAt'] = __NAMESPACE__ . '\\Data_List_deleteAt';

// Data_List_delete
function Data_List_delete($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_delete';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_deleteBy = ($GLOBALS['Data_List_deleteBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_deleteBy'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_List_deleteBy)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_delete'] = __NAMESPACE__ . '\\Data_List_delete';

// Data_List_difference
function Data_List_difference($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_difference';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_foldl = ($GLOBALS['Data_List_foldl'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldl'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__global_Data_List_deleteBy = ($GLOBALS['Data_List_deleteBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_deleteBy'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_List_foldl)(($__global_Data_Function_flip)(($__global_Data_List_deleteBy)($__case_res_0)));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_difference'] = __NAMESPACE__ . '\\Data_List_difference';


// Data_List_concat
function Data_List_concat($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_concat';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_bind = ($GLOBALS['Data_List_bind'] ?? \Data\List\phpurs_eval_thunk('Data_List_bind'));
$__global_Data_List_identity = ($GLOBALS['Data_List_identity'] ?? \Data\List\phpurs_eval_thunk('Data_List_identity'));
    $__res = ($__global_Data_List_bind)($v, $__global_Data_List_identity);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_concat'] = __NAMESPACE__ . '\\Data_List_concat';


// Data_List_alterAt
function Data_List_alterAt($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_alterAt';
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
$__global_Data_List_map = ($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map'));
$__global_Data_List_sub = ($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub'));
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_0 === 0) && (($__case_2)->tag === "Cons"))) {
$f = $__case_1;
$y = ($__case_2)->v0;
$ys = ($__case_2)->v1;
$v3 = ($f)($y);
$__case_0 = $v3;
$__case_res_0 = null;
switch (($__case_0)->tag) {
case "Nothing":
$__case_res_0 = $ys;
break;
case "Just":
$y__prime__ = ($__case_0)->v0;
$__case_res_0 = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($y__prime__, $ys);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
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
})())($__case_res_0);
} else {
switch (($__case_2)->tag) {
case "Cons":
$n = $__case_0;
$f = $__case_1;
$y = ($__case_2)->v0;
$ys = ($__case_2)->v1;
return ($__global_Data_List_map)((function() use ($y) {
  $__fn = function($v3) use ($y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($y, $v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_List_alterAt'] ?? \Data\List\phpurs_eval_thunk('Data_List_alterAt')))(($__global_Data_List_sub)($n, 1), $f, $ys));
break;
default:
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
};
};
};
    $__res = null;
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_alterAt'] = __NAMESPACE__ . '\\Data_List_alterAt';

// Data_List_modifyAt
function Data_List_modifyAt($n, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_modifyAt';
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($n, $__fn) { return $__fn($n, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_List_alterAt = ($GLOBALS['Data_List_alterAt'] ?? \Data\List\phpurs_eval_thunk('Data_List_alterAt'));
$__global_Data_List_compose = ($GLOBALS['Data_List_compose'] ?? \Data\List\phpurs_eval_thunk('Data_List_compose'));
    $__res = ($__global_Data_List_alterAt)($n, ($__global_Data_List_compose)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $f));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_modifyAt'] = __NAMESPACE__ . '\\Data_List_modifyAt';

