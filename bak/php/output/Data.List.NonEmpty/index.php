<?php

namespace Data\List\NonEmpty;

require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.NonEmpty/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
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
      case 'Data_List_NonEmpty_sequence1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_traversable1NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_traversable1NonEmptyList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sequence1;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_NonEmpty_append': $v = (function() {
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
      case 'Data_List_NonEmpty_eq': $v = (function() {
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
      case 'Data_List_NonEmpty_map': $v = (function() {
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
      case 'Data_List_NonEmpty_compose': $v = (function() {
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
      case 'Data_List_NonEmpty_sub': $v = (function() {
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
      case 'Data_List_NonEmpty_map1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_functorNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorNonEmptyList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_NonEmpty_add': $v = (function() {
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
      case 'Data_List_NonEmpty_bind': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_bindNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_bindNonEmptyList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_List_NonEmpty_identity': $v = (function() {
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
      case 'Data_List_NonEmpty_append1': $v = (function() {
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
      case 'Data_List_NonEmpty_zip': $v = (($GLOBALS['Data_List_NonEmpty_zipWith'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_zipWith')))((function() {
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
      case 'Data_List_NonEmpty_unionBy': $v = (($GLOBALS['Data_List_NonEmpty_compose'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_compose')))((($GLOBALS['Data_List_NonEmpty_wrappedOperation2'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_wrappedOperation2')))("unionBy"), ($GLOBALS['Data_List_unionBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_unionBy'))); break;
      case 'Data_List_NonEmpty_sortBy': $v = (($GLOBALS['Data_List_NonEmpty_compose'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_compose')))((($GLOBALS['Data_List_NonEmpty_wrappedOperation'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_wrappedOperation')))("sortBy"), ($GLOBALS['Data_List_sortBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_sortBy'))); break;
      case 'Data_List_NonEmpty_singleton': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_plusList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_plusList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->empty;
} else {
throw new \Exception("Pattern match failure");
};
  $empty = $__case_res_0;
  return (($GLOBALS['Data_List_NonEmpty_compose'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_compose')))(($GLOBALS['Data_List_Types_NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_NonEmptyList')), (function() use ($empty) {
  $__fn = function($a) use ($empty, &$__fn) {
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
    $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, $empty);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
})(); break;
      case 'Data_List_NonEmpty_reverse': $v = (($GLOBALS['Data_List_NonEmpty_wrappedOperation'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_wrappedOperation')))("reverse", ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'))); break;
      case 'Data_List_NonEmpty_nubByEq': $v = (($GLOBALS['Data_List_NonEmpty_compose'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_compose')))((($GLOBALS['Data_List_NonEmpty_wrappedOperation'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_wrappedOperation')))("nubByEq"), ($GLOBALS['Data_List_nubByEq'] ?? \Data\List\phpurs_eval_thunk('Data_List_nubByEq'))); break;
      case 'Data_List_NonEmpty_nubBy': $v = (($GLOBALS['Data_List_NonEmpty_compose'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_compose')))((($GLOBALS['Data_List_NonEmpty_wrappedOperation'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_wrappedOperation')))("nubBy"), ($GLOBALS['Data_List_nubBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_nubBy'))); break;
      case 'Data_List_NonEmpty_mapMaybe': $v = (($GLOBALS['Data_List_NonEmpty_compose'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_compose')))(($GLOBALS['Data_List_NonEmpty_lift'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_lift')), ($GLOBALS['Data_List_mapMaybe'] ?? \Data\List\phpurs_eval_thunk('Data_List_mapMaybe'))); break;
      case 'Data_List_NonEmpty_partition': $v = (($GLOBALS['Data_List_NonEmpty_compose'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_compose')))(($GLOBALS['Data_List_NonEmpty_lift'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_lift')), ($GLOBALS['Data_List_partition'] ?? \Data\List\phpurs_eval_thunk('Data_List_partition'))); break;
      case 'Data_List_NonEmpty_span': $v = (($GLOBALS['Data_List_NonEmpty_compose'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_compose')))(($GLOBALS['Data_List_NonEmpty_lift'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_lift')), ($GLOBALS['Data_List_span'] ?? \Data\List\phpurs_eval_thunk('Data_List_span'))); break;
      case 'Data_List_NonEmpty_take': $v = (($GLOBALS['Data_List_NonEmpty_compose'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_compose')))(($GLOBALS['Data_List_NonEmpty_lift'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_lift')), ($GLOBALS['Data_List_take'] ?? \Data\List\phpurs_eval_thunk('Data_List_take'))); break;
      case 'Data_List_NonEmpty_takeWhile': $v = (($GLOBALS['Data_List_NonEmpty_compose'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_compose')))(($GLOBALS['Data_List_NonEmpty_lift'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_lift')), ($GLOBALS['Data_List_takeWhile'] ?? \Data\List\phpurs_eval_thunk('Data_List_takeWhile'))); break;
      case 'Data_List_NonEmpty_intersectBy': $v = (($GLOBALS['Data_List_NonEmpty_compose'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_compose')))((($GLOBALS['Data_List_NonEmpty_wrappedOperation2'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_wrappedOperation2')))("intersectBy"), ($GLOBALS['Data_List_intersectBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_intersectBy'))); break;
      case 'Data_List_NonEmpty_groupBy': $v = (($GLOBALS['Data_List_NonEmpty_compose'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_compose')))((($GLOBALS['Data_List_NonEmpty_wrappedOperation'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_wrappedOperation')))("groupBy"), ($GLOBALS['Data_List_groupBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_groupBy'))); break;
      case 'Data_List_NonEmpty_groupAllBy': $v = (($GLOBALS['Data_List_NonEmpty_compose'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_compose')))((($GLOBALS['Data_List_NonEmpty_wrappedOperation'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_wrappedOperation')))("groupAllBy"), ($GLOBALS['Data_List_groupAllBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_groupAllBy'))); break;
      case 'Data_List_NonEmpty_filter': $v = (($GLOBALS['Data_List_NonEmpty_compose'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_compose')))(($GLOBALS['Data_List_NonEmpty_lift'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_lift')), ($GLOBALS['Data_List_filter'] ?? \Data\List\phpurs_eval_thunk('Data_List_filter'))); break;
      case 'Data_List_NonEmpty_dropWhile': $v = (($GLOBALS['Data_List_NonEmpty_compose'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_compose')))(($GLOBALS['Data_List_NonEmpty_lift'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_lift')), ($GLOBALS['Data_List_dropWhile'] ?? \Data\List\phpurs_eval_thunk('Data_List_dropWhile'))); break;
      case 'Data_List_NonEmpty_drop': $v = (($GLOBALS['Data_List_NonEmpty_compose'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_compose')))(($GLOBALS['Data_List_NonEmpty_lift'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_lift')), ($GLOBALS['Data_List_drop'] ?? \Data\List\phpurs_eval_thunk('Data_List_drop'))); break;
      case 'Data_List_NonEmpty_concatMap': $v = (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($GLOBALS['Data_List_NonEmpty_bind'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_bind'))); break;
      case 'Data_List_NonEmpty_catMaybes': $v = (($GLOBALS['Data_List_NonEmpty_lift'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_lift')))(($GLOBALS['Data_List_catMaybes'] ?? \Data\List\phpurs_eval_thunk('Data_List_catMaybes'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };













// Data_List_NonEmpty_zipWith
function Data_List_NonEmpty_zipWith($f, $v = null, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_zipWith';
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($f, $v, $__fn) { return $__fn($f, $v, $v1); };
    if ($__num === 1) return function($v, $v1 = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($f, $v, $__fn) { return $__fn($f, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($f, $v, $v1) {
    $__global_Data_List_zipWith = ($GLOBALS['Data_List_zipWith'] ?? \Data\List\phpurs_eval_thunk('Data_List_zipWith'));
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (((($__case_1)->tag === "NonEmpty") && (($__case_2)->tag === "NonEmpty"))) {
$f1 = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
$y = ($__case_2)->v0;
$ys = ($__case_2)->v1;
return ((function() {
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
})())(($f1)($x, $y), ($__global_Data_List_zipWith)($f1, $xs, $ys));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $v, $v1);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_zipWith'] = __NAMESPACE__ . '\\Data_List_NonEmpty_zipWith';

// Data_List_NonEmpty_zipWithA
function Data_List_NonEmpty_zipWithA($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_zipWithA';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_NonEmpty_sequence1 = ($GLOBALS['Data_List_NonEmpty_sequence1'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_sequence1'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_List_NonEmpty_zipWith = ($GLOBALS['Data_List_NonEmpty_zipWith'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_zipWith'));
$sequence11 = ($__global_Data_List_NonEmpty_sequence1)((($dictApplicative)->Apply0)($__global_Prim_undefined));
    $__res = (function() use ($sequence11, $__global_Data_List_NonEmpty_zipWith) {
  $__fn = function($f, $xs = null, $ys = null) use ($sequence11, $__global_Data_List_NonEmpty_zipWith, &$__fn) {
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
    $__res = ($sequence11)(($__global_Data_List_NonEmpty_zipWith)($f, $xs, $ys));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_zipWithA'] = __NAMESPACE__ . '\\Data_List_NonEmpty_zipWithA';


// Data_List_NonEmpty_wrappedOperation2
function Data_List_NonEmpty_wrappedOperation2($name, $f = null, $v = null, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_wrappedOperation2';
  if ($__num < 4) {
    if ($__num === 3) return function($v1) use ($name, $f, $v, $__fn) { return $__fn($name, $f, $v, $v1); };
    if ($__num === 2) return function($v, $v1 = null) use ($name, $f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($name, $f, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($name, $f, $v, $__fn) { return $__fn($name, $f, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$name, $f], 4);
    };
    if ($__num === 1) return function($f, $v = null, $v1 = null) use ($name, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($name, $f, $v, $v1);
      if ($__num2 === 2) return function($v1) use ($name, $f, $v, $__fn) { return $__fn($name, $f, $v, $v1); };
      if ($__num2 === 1) return function($v, $v1 = null) use ($name, $f, $__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($name, $f, $v, $v1);
        if ($__num3 === 1) return function($v1) use ($name, $f, $v, $__fn) { return $__fn($name, $f, $v, $v1); };
        return phpurs_curry_fallback($__fn, [$name, $f], 4);
      };
      return phpurs_curry_fallback($__fn, [$name], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__body = function($name, $f, $v, $v1) {
    $__global_Partial_Unsafe_unsafeCrashWith = ($GLOBALS['Partial_Unsafe_unsafeCrashWith'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafeCrashWith'));
    $__global_Data_List_NonEmpty_append = ($GLOBALS['Data_List_NonEmpty_append'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_append'));
    $__case_0 = $name;
    $__case_1 = $f;
    $__case_2 = $v;
    $__case_3 = $v1;
    if (((($__case_2)->tag === "NonEmpty") && (($__case_3)->tag === "NonEmpty"))) {
$name1 = $__case_0;
$f1 = $__case_1;
$x = ($__case_2)->v0;
$xs = ($__case_2)->v1;
$y = ($__case_3)->v0;
$ys = ($__case_3)->v1;
$v2 = ($f1)(((function() {
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
})())($x, $xs), ((function() {
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
})())($y, $ys));
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Cons":
$x__prime__ = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
return ((function() {
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
})())($x__prime__, $xs__prime__);
break;
case "Nil":
return ($__global_Partial_Unsafe_unsafeCrashWith)(($__global_Data_List_NonEmpty_append)("Impossible: empty list in NonEmptyList ", $name1));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($name, $f, $v, $v1);
    return 4 < $__num ? $__res(...array_slice(func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_wrappedOperation2'] = __NAMESPACE__ . '\\Data_List_NonEmpty_wrappedOperation2';

// Data_List_NonEmpty_wrappedOperation
function Data_List_NonEmpty_wrappedOperation($name, $f = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_wrappedOperation';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($name, $f, $__fn) { return $__fn($name, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($name, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($name, $f, $v);
      if ($__num2 === 1) return function($v) use ($name, $f, $__fn) { return $__fn($name, $f, $v); };
      return phpurs_curry_fallback($__fn, [$name], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($name, $f, $v) {
    $__global_Partial_Unsafe_unsafeCrashWith = ($GLOBALS['Partial_Unsafe_unsafeCrashWith'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafeCrashWith'));
    $__global_Data_List_NonEmpty_append = ($GLOBALS['Data_List_NonEmpty_append'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_append'));
    $__case_0 = $name;
    $__case_1 = $f;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$name1 = $__case_0;
$f1 = $__case_1;
$x = ($__case_2)->v0;
$xs = ($__case_2)->v1;
$v1 = ($f1)(((function() {
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
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Cons":
$x__prime__ = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
return ((function() {
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
})())($x__prime__, $xs__prime__);
break;
case "Nil":
return ($__global_Partial_Unsafe_unsafeCrashWith)(($__global_Data_List_NonEmpty_append)("Impossible: empty list in NonEmptyList ", $name1));
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
    $__res = $__body($name, $f, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_wrappedOperation'] = __NAMESPACE__ . '\\Data_List_NonEmpty_wrappedOperation';

// Data_List_NonEmpty_updateAt
function Data_List_NonEmpty_updateAt($i, $a = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_updateAt';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($i, $a, $__fn) { return $__fn($i, $a, $v); };
    if ($__num === 1) return function($a, $v = null) use ($i, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $a, $v);
      if ($__num2 === 1) return function($v) use ($i, $a, $__fn) { return $__fn($i, $a, $v); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($i, $a, $v) {
    $__case_0 = $i;
    $__case_1 = $a;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$i1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->v0;
$xs = ($__case_2)->v1;
return "/* Unsupported: Guards not supported */";
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($i, $a, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_updateAt'] = __NAMESPACE__ . '\\Data_List_NonEmpty_updateAt';

// Data_List_NonEmpty_unzip
function Data_List_NonEmpty_unzip($ts) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_unzip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_NonEmpty_map1 = ($GLOBALS['Data_List_NonEmpty_map1'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_map1'));
$__global_Data_Tuple_fst = ($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst'));
$__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
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
})())(($__global_Data_List_NonEmpty_map1)($__global_Data_Tuple_fst, $ts), ($__global_Data_List_NonEmpty_map1)($__global_Data_Tuple_snd, $ts));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_unzip'] = __NAMESPACE__ . '\\Data_List_NonEmpty_unzip';

// Data_List_NonEmpty_unsnoc
function Data_List_NonEmpty_unsnoc($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_unsnoc';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__global_Data_List_unsnoc = ($GLOBALS['Data_List_unsnoc'] ?? \Data\List\phpurs_eval_thunk('Data_List_unsnoc'));
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$v1 = ($__global_Data_List_unsnoc)($xs);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Nothing":
return (object)["init" => ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), "last" => $x];
break;
case "Just":
$un = ($__case_0)->v0;
return (object)["init" => ((function() {
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
})())($x, ($un)->init), "last" => ($un)->last];
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
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_unsnoc'] = __NAMESPACE__ . '\\Data_List_NonEmpty_unsnoc';


// Data_List_NonEmpty_union
function Data_List_NonEmpty_union($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_union';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_NonEmpty_wrappedOperation2 = ($GLOBALS['Data_List_NonEmpty_wrappedOperation2'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_wrappedOperation2'));
$__global_Data_List_unionBy = ($GLOBALS['Data_List_unionBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_unionBy'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_List_NonEmpty_wrappedOperation2)("union", ($__global_Data_List_unionBy)($__case_res_0));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_union'] = __NAMESPACE__ . '\\Data_List_NonEmpty_union';

// Data_List_NonEmpty_uncons
function Data_List_NonEmpty_uncons($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_uncons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return (object)["head" => $x, "tail" => $xs];
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_uncons'] = __NAMESPACE__ . '\\Data_List_NonEmpty_uncons';

// Data_List_NonEmpty_toList
function Data_List_NonEmpty_toList($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_toList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
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
})())($x, $xs);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_toList'] = __NAMESPACE__ . '\\Data_List_NonEmpty_toList';

// Data_List_NonEmpty_toUnfoldable
function Data_List_NonEmpty_toUnfoldable($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_toUnfoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_NonEmpty_compose = ($GLOBALS['Data_List_NonEmpty_compose'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_compose'));
$__global_Data_List_NonEmpty_map = ($GLOBALS['Data_List_NonEmpty_map'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_map'));
$__global_Data_List_uncons = ($GLOBALS['Data_List_uncons'] ?? \Data\List\phpurs_eval_thunk('Data_List_uncons'));
$__global_Data_List_NonEmpty_toList = ($GLOBALS['Data_List_NonEmpty_toList'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_toList'));
$__case_0 = $dictUnfoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->unfoldr;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_List_NonEmpty_compose)(($__case_res_0)((function() use ($__global_Data_List_NonEmpty_map, $__global_Data_List_uncons) {
  $__fn = function($xs) use ($__global_Data_List_NonEmpty_map, $__global_Data_List_uncons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_NonEmpty_map)((function() {
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
})()), $__global_Data_List_NonEmpty_toList);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_toUnfoldable'] = __NAMESPACE__ . '\\Data_List_NonEmpty_toUnfoldable';

// Data_List_NonEmpty_tail
function Data_List_NonEmpty_tail($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_tail';
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
$GLOBALS['Data_List_NonEmpty_tail'] = __NAMESPACE__ . '\\Data_List_NonEmpty_tail';


// Data_List_NonEmpty_sort
function Data_List_NonEmpty_sort($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_sort';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_NonEmpty_sortBy = ($GLOBALS['Data_List_NonEmpty_sortBy'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_sortBy'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (function() use ($__global_Data_List_NonEmpty_sortBy, $compare) {
  $__fn = function($xs) use ($__global_Data_List_NonEmpty_sortBy, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_NonEmpty_sortBy)($compare, $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_sort'] = __NAMESPACE__ . '\\Data_List_NonEmpty_sort';

// Data_List_NonEmpty_snoc
function Data_List_NonEmpty_snoc($v, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_snoc';
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($v, $__fn) { return $__fn($v, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $y) {
    $__global_Data_List_snoc = ($GLOBALS['Data_List_snoc'] ?? \Data\List\phpurs_eval_thunk('Data_List_snoc'));
    $__case_0 = $v;
    $__case_1 = $y;
    switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$y1 = $__case_1;
return ((function() {
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
})())($x, ($__global_Data_List_snoc)($xs, $y1));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v, $y);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_snoc'] = __NAMESPACE__ . '\\Data_List_NonEmpty_snoc';


// Data_List_NonEmpty_snoc'
function Data_List_NonEmpty_snoc__prime__($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_snoc__prime__';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__global_Data_List_snoc = ($GLOBALS['Data_List_snoc'] ?? \Data\List\phpurs_eval_thunk('Data_List_snoc'));
    $__global_Data_List_NonEmpty_singleton = ($GLOBALS['Data_List_NonEmpty_singleton'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_singleton'));
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_0)->tag) {
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$y = $__case_1;
return ((function() {
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
})())($x, ($__global_Data_List_snoc)($xs, $y));
break;
case "Nil":
$y = $__case_1;
return ($__global_Data_List_NonEmpty_singleton)($y);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v, $v1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_snoc__prime__'] = __NAMESPACE__ . '\\Data_List_NonEmpty_snoc__prime__';


// Data_List_NonEmpty_nubEq
function Data_List_NonEmpty_nubEq($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_nubEq';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_NonEmpty_wrappedOperation = ($GLOBALS['Data_List_NonEmpty_wrappedOperation'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_wrappedOperation'));
$__global_Data_List_nubByEq = ($GLOBALS['Data_List_nubByEq'] ?? \Data\List\phpurs_eval_thunk('Data_List_nubByEq'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_List_NonEmpty_wrappedOperation)("nubEq", ($__global_Data_List_nubByEq)($__case_res_0));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_nubEq'] = __NAMESPACE__ . '\\Data_List_NonEmpty_nubEq';



// Data_List_NonEmpty_nub
function Data_List_NonEmpty_nub($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_nub';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_NonEmpty_wrappedOperation = ($GLOBALS['Data_List_NonEmpty_wrappedOperation'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_wrappedOperation'));
$__global_Data_List_nubBy = ($GLOBALS['Data_List_nubBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_nubBy'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_List_NonEmpty_wrappedOperation)("nub", ($__global_Data_List_nubBy)($__case_res_0));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_nub'] = __NAMESPACE__ . '\\Data_List_NonEmpty_nub';

// Data_List_NonEmpty_modifyAt
function Data_List_NonEmpty_modifyAt($i, $f = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_modifyAt';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($i, $f, $__fn) { return $__fn($i, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($i, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $f, $v);
      if ($__num2 === 1) return function($v) use ($i, $f, $__fn) { return $__fn($i, $f, $v); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($i, $f, $v) {
    $__case_0 = $i;
    $__case_1 = $f;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$i1 = $__case_0;
$f1 = $__case_1;
$x = ($__case_2)->v0;
$xs = ($__case_2)->v1;
return "/* Unsupported: Guards not supported */";
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($i, $f, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_modifyAt'] = __NAMESPACE__ . '\\Data_List_NonEmpty_modifyAt';

// Data_List_NonEmpty_lift
function Data_List_NonEmpty_lift($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_lift';
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
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
return ($f1)(((function() {
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
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_lift'] = __NAMESPACE__ . '\\Data_List_NonEmpty_lift';






// Data_List_NonEmpty_length
function Data_List_NonEmpty_length($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_length';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__global_Data_List_NonEmpty_add = ($GLOBALS['Data_List_NonEmpty_add'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_add'));
    $__global_Data_List_length = ($GLOBALS['Data_List_length'] ?? \Data\List\phpurs_eval_thunk('Data_List_length'));
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "NonEmpty":
$xs = ($__case_0)->v1;
return ($__global_Data_List_NonEmpty_add)(1, ($__global_Data_List_length)($xs));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_length'] = __NAMESPACE__ . '\\Data_List_NonEmpty_length';

// Data_List_NonEmpty_last
function Data_List_NonEmpty_last($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_last';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__global_Data_Maybe_fromMaybe = ($GLOBALS['Data_Maybe_fromMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromMaybe'));
    $__global_Data_List_last = ($GLOBALS['Data_List_last'] ?? \Data\List\phpurs_eval_thunk('Data_List_last'));
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return ($__global_Data_Maybe_fromMaybe)($x, ($__global_Data_List_last)($xs));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_last'] = __NAMESPACE__ . '\\Data_List_NonEmpty_last';


// Data_List_NonEmpty_intersect
function Data_List_NonEmpty_intersect($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_intersect';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_NonEmpty_wrappedOperation2 = ($GLOBALS['Data_List_NonEmpty_wrappedOperation2'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_wrappedOperation2'));
$__global_Data_List_intersectBy = ($GLOBALS['Data_List_intersectBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_intersectBy'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_List_NonEmpty_wrappedOperation2)("intersect", ($__global_Data_List_intersectBy)($__case_res_0));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_intersect'] = __NAMESPACE__ . '\\Data_List_NonEmpty_intersect';

// Data_List_NonEmpty_insertAt
function Data_List_NonEmpty_insertAt($i, $a = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_insertAt';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($i, $a, $__fn) { return $__fn($i, $a, $v); };
    if ($__num === 1) return function($a, $v = null) use ($i, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $a, $v);
      if ($__num2 === 1) return function($v) use ($i, $a, $__fn) { return $__fn($i, $a, $v); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($i, $a, $v) {
    $__case_0 = $i;
    $__case_1 = $a;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$i1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->v0;
$xs = ($__case_2)->v1;
return "/* Unsupported: Guards not supported */";
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($i, $a, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_insertAt'] = __NAMESPACE__ . '\\Data_List_NonEmpty_insertAt';

// Data_List_NonEmpty_init
function Data_List_NonEmpty_init($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_init';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
    $__global_Data_List_init = ($GLOBALS['Data_List_init'] ?? \Data\List\phpurs_eval_thunk('Data_List_init'));
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return ($__global_Data_Maybe_maybe)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), (function() use ($x) {
  $__fn = function($v1) use ($x, &$__fn) {
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
})())($x, $v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_List_init)($xs));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_init'] = __NAMESPACE__ . '\\Data_List_NonEmpty_init';

// Data_List_NonEmpty_index
function Data_List_NonEmpty_index($v, $i = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_index';
  if ($__num < 2) {
    if ($__num === 1) return function($i) use ($v, $__fn) { return $__fn($v, $i); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $i) {
    $__case_0 = $v;
    $__case_1 = $i;
    switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$i1 = $__case_1;
return "/* Unsupported: Guards not supported */";
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v, $i);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_index'] = __NAMESPACE__ . '\\Data_List_NonEmpty_index';

// Data_List_NonEmpty_head
function Data_List_NonEmpty_head($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_head';
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
$GLOBALS['Data_List_NonEmpty_head'] = __NAMESPACE__ . '\\Data_List_NonEmpty_head';



// Data_List_NonEmpty_groupAll
function Data_List_NonEmpty_groupAll($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_groupAll';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_NonEmpty_wrappedOperation = ($GLOBALS['Data_List_NonEmpty_wrappedOperation'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_wrappedOperation'));
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
    $__res = ($__global_Data_List_NonEmpty_wrappedOperation)("groupAll", ($__global_Data_List_compose)(($__global_Data_List_groupBy)($__case_res_0), (function() use ($__global_Data_List_sortBy, $compare) {
  $__fn = function($xs) use ($__global_Data_List_sortBy, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_sortBy)($compare, $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_groupAll'] = __NAMESPACE__ . '\\Data_List_NonEmpty_groupAll';

// Data_List_NonEmpty_group
function Data_List_NonEmpty_group($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_group';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_NonEmpty_wrappedOperation = ($GLOBALS['Data_List_NonEmpty_wrappedOperation'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_wrappedOperation'));
$__global_Data_List_groupBy = ($GLOBALS['Data_List_groupBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_groupBy'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_List_NonEmpty_wrappedOperation)("group", ($__global_Data_List_groupBy)($__case_res_0));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_group'] = __NAMESPACE__ . '\\Data_List_NonEmpty_group';

// Data_List_NonEmpty_fromList
function Data_List_NonEmpty_fromList($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_fromList';
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
})())($x, $xs));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_fromList'] = __NAMESPACE__ . '\\Data_List_NonEmpty_fromList';

// Data_List_NonEmpty_fromFoldable
function Data_List_NonEmpty_fromFoldable($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_fromFoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_NonEmpty_compose = ($GLOBALS['Data_List_NonEmpty_compose'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_compose'));
$__global_Data_List_NonEmpty_fromList = ($GLOBALS['Data_List_NonEmpty_fromList'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_fromList'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_List_NonEmpty_compose)($__global_Data_List_NonEmpty_fromList, ($__case_res_0)((function() {
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
})(), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_fromFoldable'] = __NAMESPACE__ . '\\Data_List_NonEmpty_fromFoldable';

// Data_List_NonEmpty_foldM
function Data_List_NonEmpty_foldM($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_foldM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_foldM = ($GLOBALS['Data_List_foldM'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldM'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind1 = $__case_res_2;
$foldM1 = (function() use ($pure, $bind1, $__global_Data_List_foldM, $dictMonad) {
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
})();
    $__res = (function() use ($bind1, $foldM1) {
  $__body = function($f, $b, $v) use ($bind1, $foldM1) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$as = ($__case_2)->v1;
return ($bind1)(($f1)($b1, $a), (function() use ($foldM1, $f1, $as) {
  $__fn = function($b__prime__) use ($foldM1, $f1, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldM1)($f1, $b__prime__, $as);
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
  $__fn = function($f, $b = null, $v = null) use ($bind1, $foldM1, $__body, &$__fn) {
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
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_foldM'] = __NAMESPACE__ . '\\Data_List_NonEmpty_foldM';

// Data_List_NonEmpty_findLastIndex
function Data_List_NonEmpty_findLastIndex($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_findLastIndex';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $v) {
    $__global_Data_List_findLastIndex = ($GLOBALS['Data_List_findLastIndex'] ?? \Data\List\phpurs_eval_thunk('Data_List_findLastIndex'));
    $__global_Data_List_NonEmpty_add = ($GLOBALS['Data_List_NonEmpty_add'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_add'));
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
$v1 = ($__global_Data_List_findLastIndex)($f1, $xs);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Just":
$i = ($__case_0)->v0;
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
})())(($__global_Data_List_NonEmpty_add)($i, 1));
break;
case "Nothing":
return "/* Unsupported: Guards not supported */";
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
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_findLastIndex'] = __NAMESPACE__ . '\\Data_List_NonEmpty_findLastIndex';

// Data_List_NonEmpty_findIndex
function Data_List_NonEmpty_findIndex($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_findIndex';
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
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
return "/* Unsupported: Guards not supported */";
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_findIndex'] = __NAMESPACE__ . '\\Data_List_NonEmpty_findIndex';

// Data_List_NonEmpty_filterM
function Data_List_NonEmpty_filterM($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_filterM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_NonEmpty_compose = ($GLOBALS['Data_List_NonEmpty_compose'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_compose'));
$__global_Data_List_NonEmpty_lift = ($GLOBALS['Data_List_NonEmpty_lift'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_lift'));
$__global_Data_List_filterM = ($GLOBALS['Data_List_filterM'] ?? \Data\List\phpurs_eval_thunk('Data_List_filterM'));
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
    $__res = ($__global_Data_List_NonEmpty_compose)($__global_Data_List_NonEmpty_lift, (function() use ($pure, $bind1, $__global_Data_List_filterM, $dictMonad) {
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
$__case_res_2 = null;
switch ($__case_0) {
case true:
$__case_res_2 = ((function() {
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
$__case_res_2 = $xs__prime__;
break;
};
    $__res = ($pure)($__case_res_2);
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
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_filterM'] = __NAMESPACE__ . '\\Data_List_NonEmpty_filterM';


// Data_List_NonEmpty_elemLastIndex
function Data_List_NonEmpty_elemLastIndex($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_elemLastIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_NonEmpty_findLastIndex = ($GLOBALS['Data_List_NonEmpty_findLastIndex'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_findLastIndex'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_0;
    $__res = (function() use ($__global_Data_List_NonEmpty_findLastIndex, $eq1) {
  $__fn = function($x) use ($__global_Data_List_NonEmpty_findLastIndex, $eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_NonEmpty_findLastIndex)((function() use ($eq1, $x) {
  $__fn = function($v) use ($eq1, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($eq1)($v, $x);
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
$GLOBALS['Data_List_NonEmpty_elemLastIndex'] = __NAMESPACE__ . '\\Data_List_NonEmpty_elemLastIndex';

// Data_List_NonEmpty_elemIndex
function Data_List_NonEmpty_elemIndex($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_elemIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_NonEmpty_findIndex = ($GLOBALS['Data_List_NonEmpty_findIndex'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_findIndex'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_0;
    $__res = (function() use ($__global_Data_List_NonEmpty_findIndex, $eq1) {
  $__fn = function($x) use ($__global_Data_List_NonEmpty_findIndex, $eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_NonEmpty_findIndex)((function() use ($eq1, $x) {
  $__fn = function($v) use ($eq1, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($eq1)($v, $x);
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
$GLOBALS['Data_List_NonEmpty_elemIndex'] = __NAMESPACE__ . '\\Data_List_NonEmpty_elemIndex';



// Data_List_NonEmpty_cons'
function Data_List_NonEmpty_cons__prime__($x, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_cons__prime__';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($x, $__fn) { return $__fn($x, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ((function() {
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
})())($x, $xs);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_cons__prime__'] = __NAMESPACE__ . '\\Data_List_NonEmpty_cons__prime__';

// Data_List_NonEmpty_cons
function Data_List_NonEmpty_cons($y, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_cons';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($y, $__fn) { return $__fn($y, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($y, $v) {
    $__case_0 = $y;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "NonEmpty":
$y1 = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
return ((function() {
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
})())($y1, ((function() {
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
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($y, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_cons'] = __NAMESPACE__ . '\\Data_List_NonEmpty_cons';


// Data_List_NonEmpty_concat
function Data_List_NonEmpty_concat($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_concat';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_NonEmpty_bind = ($GLOBALS['Data_List_NonEmpty_bind'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_bind'));
$__global_Data_List_NonEmpty_identity = ($GLOBALS['Data_List_NonEmpty_identity'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_identity'));
    $__res = ($__global_Data_List_NonEmpty_bind)($v, $__global_Data_List_NonEmpty_identity);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_concat'] = __NAMESPACE__ . '\\Data_List_NonEmpty_concat';


// Data_List_NonEmpty_appendFoldable
function Data_List_NonEmpty_appendFoldable($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_NonEmpty_appendFoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_List_NonEmpty_append1 = ($GLOBALS['Data_List_NonEmpty_append1'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_append1'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$fromFoldable1 = ($__case_res_0)((function() {
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
    $__res = (function() use ($__global_Data_List_NonEmpty_append1, $fromFoldable1) {
  $__body = function($v, $ys) use ($__global_Data_List_NonEmpty_append1, $fromFoldable1) {
    $__case_0 = $v;
    $__case_1 = $ys;
    switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$ys1 = $__case_1;
return ((function() {
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
})())($x, ($__global_Data_List_NonEmpty_append1)($xs, ($fromFoldable1)($ys1)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $ys = null) use ($__global_Data_List_NonEmpty_append1, $fromFoldable1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($v, &$__fn) { return $__fn($v, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $ys);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_NonEmpty_appendFoldable'] = __NAMESPACE__ . '\\Data_List_NonEmpty_appendFoldable';

