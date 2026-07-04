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
      case 'Data_List_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_List_tailRecM2': $v = (($GLOBALS['Control_Monad_Rec_Class_tailRecM2'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRecM2')))(($GLOBALS['Control_Monad_Rec_Class_monadRecMaybe'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_monadRecMaybe'))); break;
      case 'Data_List_notEq': $v = (($GLOBALS['Data_Eq_notEq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_notEq')))(($GLOBALS['Data_Ordering_eqOrdering'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_eqOrdering'))); break;
      case 'Data_List_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_List_lessThan': $v = (($GLOBALS['Data_Ord_lessThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThan')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_List_eq1': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_List_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_List_greaterThan': $v = (($GLOBALS['Data_Ord_greaterThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThan')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_List_negate': $v = (($GLOBALS['Data_Ring_negate'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_negate')))(($GLOBALS['Data_Ring_ringInt'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringInt'))); break;
      case 'Data_List_any': $v = (($GLOBALS['Data_Foldable_any'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_any')))(($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList')), ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'))); break;
      case 'Data_List_not': $v = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot')); break;
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
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))((($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($a, $as), (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($b, $bs));
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
})(), (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil')), ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil')))); break;
      case 'Data_List_reverse': $v = ($go = (function() use (&$go) {
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
$__tco_tmp_0 = (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($x, $acc);
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
return ($go)(($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil')));)(); break;
      case 'Data_List_take': $v = ($go = (function() use (&$go) {
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
return (($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse')))($acc);
break;
case "Cons":
$acc = $__case_0;
$n = $__case_1;
$x = ($__case_2)->v0;
$xs = ($__case_2)->v1;
$__tco_tmp_0 = (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($x, $acc);
$__tco_tmp_1 = (($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub')))($n, 1);
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
return ($go)(($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil')));)(); break;
      case 'Data_List_zip': $v = (($GLOBALS['Data_List_zipWith'] ?? \Data\List\phpurs_eval_thunk('Data_List_zipWith')))(($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple'))); break;
      case 'Data_List_newtypePattern': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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
      case 'Data_List_length': $v = (($GLOBALS['Data_List_foldl'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldl')))((function() {
  $__fn = function($acc, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($acc, &$__fn) { return $__fn($acc, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_List_add'] ?? \Data\List\phpurs_eval_thunk('Data_List_add')))($acc, 1);
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


// Data_List_map
function Data_List_map($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_map';
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
$GLOBALS['Data_List_map'] = __NAMESPACE__ . '\\Data_List_map';


// Data_List_foldr
function Data_List_foldr($f, $b = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_foldr';
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, $__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
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
$__tco_tmp_0 = (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($x, $acc);
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
$rev = ($go)(($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil')));
    $__res = (($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose')))((($GLOBALS['Data_Foldable_foldl'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl')))(($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList')), (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))($f), $b), $rev);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_foldr'] = __NAMESPACE__ . '\\Data_List_foldr';


// Data_List_eq
function Data_List_eq($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_eq';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "LT") && (($__case_1)->tag === "LT"))) {
return true;
} else {
if (((($__case_0)->tag === "GT") && (($__case_1)->tag === "GT"))) {
return true;
} else {
if (((($__case_0)->tag === "EQ") && (($__case_1)->tag === "EQ"))) {
return true;
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
    $__res = $__body($v, $v1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_eq'] = __NAMESPACE__ . '\\Data_List_eq';


// Data_List_compose
function Data_List_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_compose';
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
$GLOBALS['Data_List_compose'] = __NAMESPACE__ . '\\Data_List_compose';



// Data_List_sequence
function Data_List_sequence($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_sequence';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Traversable_traverse'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traverse')))(($GLOBALS['Data_List_Types_traversableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_traversableList')), $dictApplicative, ($GLOBALS['Data_List_Types_identity'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_identity')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_sequence'] = __NAMESPACE__ . '\\Data_List_sequence';





// Data_List_bimap
function Data_List_bimap($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_bimap';
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
case "Loop":
$f = $__case_0;
$a = ($__case_2)->v0;
return (($GLOBALS['Control_Monad_Rec_Class_Loop'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Loop')))(($f)($a));
break;
case "Done":
$g = $__case_1;
$b = ($__case_2)->v0;
return (($GLOBALS['Control_Monad_Rec_Class_Done'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Done')))(($g)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v, $v1, $v2);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_bimap'] = __NAMESPACE__ . '\\Data_List_bimap';

// Data_List_foldl
function Data_List_foldl($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_foldl';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use (&$go, $f) {
  $__fn = function($b, $v = null) use (&$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($b, &$__fn) { return $__fn($b, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Nil":
return $b;
break;
case "Cons":
$a = ($__case_0)->v0;
$as = ($__case_0)->v1;
$__tco_tmp_0 = ($f)($b, $a);
$__tco_tmp_1 = $as;
$b = $__tco_tmp_0;
$v = $__tco_tmp_1;
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
    $__res = $go;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_foldl'] = __NAMESPACE__ . '\\Data_List_foldl';



// Data_List_append1
function Data_List_append1($xs, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_append1';
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, $__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_List_Types_foldr'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldr')))(($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')), $ys, $xs);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_append1'] = __NAMESPACE__ . '\\Data_List_append1';

// Data_List_bind
function Data_List_bind($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_bind';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil'));
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$f = $__case_1;
return (($GLOBALS['Data_List_Types_append1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_append1')))(($f)($x), (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))(($GLOBALS['Data_List_Types_bindList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_bindList')), $xs, $f));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v, $v1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_bind'] = __NAMESPACE__ . '\\Data_List_bind';

// Data_List_identity
function Data_List_identity($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_identity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_identity'] = __NAMESPACE__ . '\\Data_List_identity';

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
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_0 === 0) && (($__case_2)->tag === "Cons"))) {
$x = $__case_1;
$xs = ($__case_2)->v1;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($x, $xs));
} else {
if ((($__case_2)->tag === "Cons")) {
$n = $__case_0;
$x = $__case_1;
$x1 = ($__case_2)->v0;
$xs = ($__case_2)->v1;
return (($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map')))((function() use ($x1) {
  $__fn = function($v3) use ($x1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($x1, $v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_List_updateAt'] ?? \Data\List\phpurs_eval_thunk('Data_List_updateAt')))((($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub')))($n, 1), $x, $xs));
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
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
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((object)["head" => $x, "tail" => $xs]);
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
    $__res = (($GLOBALS['Data_Unfoldable_unfoldr'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_unfoldr')))($dictUnfoldable, (function() {
  $__fn = function($xs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map')))((function() {
  $__fn = function($rec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($rec)->head, ($rec)->tail);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_List_uncons'] ?? \Data\List\phpurs_eval_thunk('Data_List_uncons')))($xs));
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
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
break;
case "Cons":
$xs = ($__case_0)->v1;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($xs);
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
$eq2 = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq);
    $__res = (function() {
  $__body = function($v, $s) {
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
if ((($__case_0)->tag === "Nil")) {
$is = $__case_1;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Control_Monad_Rec_Class_Done'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Done')))($is));
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
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
return (($GLOBALS['Data_List_tailRecM2'] ?? \Data\List\phpurs_eval_thunk('Data_List_tailRecM2')))($go, $p__prime__, $s1);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $s = null) use ($__body, &$__fn) {
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
if ((($__case_1)->tag === "Cons")) {
$p = $__case_0;
$x = ($__case_1)->v0;
$xs__prime__ = ($__case_1)->v1;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
$xs = $__case_1;
return (object)["init" => ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil')), "rest" => $xs];
} else {
throw new \Exception("Pattern match failure");
};
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
    $__res = (($GLOBALS['Data_List_foldr'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldr')))(($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')), (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($x, ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil'))), $xs);
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
    $__res = (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($a, ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil')));
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
return (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))(($merge)($a, $b), ($mergePairs)($xs));
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
continue;
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
$sequences = (function() {
  $__fn = function($v) use (&$__fn) {
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
return (($GLOBALS['Data_List_singleton'] ?? \Data\List\phpurs_eval_thunk('Data_List_singleton')))($xs);
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
if ((($__case_2)->tag === "Cons")) {
$a = $__case_0;
$as = $__case_1;
$b = ($__case_2)->v0;
$bs = ($__case_2)->v1;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
$a = $__case_0;
$as = $__case_1;
$bs = $__case_2;
return (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))((($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($a, $as), ($sequences)($bs));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
$ascending = (function() use (&$sequences) {
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
if ((($__case_2)->tag === "Cons")) {
$a = $__case_0;
$as = $__case_1;
$b = ($__case_2)->v0;
$bs = ($__case_2)->v1;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
$a = $__case_0;
$as = $__case_1;
$bs = $__case_2;
return (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))(($as)((($GLOBALS['Data_List_singleton'] ?? \Data\List\phpurs_eval_thunk('Data_List_singleton')))($a)), ($sequences)($bs));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = (($GLOBALS['Data_List_compose'] ?? \Data\List\phpurs_eval_thunk('Data_List_compose')))($mergeAll, $sequences);
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
$compare = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($xs) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_sortBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_sortBy')))($compare, $xs);
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
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Nil":
return (($GLOBALS['Data_List_singleton'] ?? \Data\List\phpurs_eval_thunk('Data_List_singleton')))(($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil')));
break;
case "Cons":
$list = $__case_0;
$tl = ($__case_0)->v1;
return (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($list, (($GLOBALS['Data_List_tails'] ?? \Data\List\phpurs_eval_thunk('Data_List_tails')))($tl));
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
$show = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))((($GLOBALS['Data_List_Types_showList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_showList')))($dictShow));
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return (($GLOBALS['Data_List_append'] ?? \Data\List\phpurs_eval_thunk('Data_List_append')))("(Pattern ", (($GLOBALS['Data_List_append'] ?? \Data\List\phpurs_eval_thunk('Data_List_append')))(($show)($s), ")"));
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
$GLOBALS['Data_List_showPattern'] = __NAMESPACE__ . '\\Data_List_showPattern';



// Data_List_takeWhile
function Data_List_takeWhile($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_takeWhile';
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
if ((($__case_1)->tag === "Cons")) {
$acc = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
$acc = $__case_0;
return (($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse')))($acc);
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)(($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil')));
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
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v1)->tag === "Nil"))) {
$x = ($__case_0)->v0;
$acc = $__case_1;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((object)["revInit" => $acc, "last" => $x]);
} else {
switch (($__case_0)->tag) {
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$acc = $__case_1;
$__tco_tmp_0 = $xs;
$__tco_tmp_1 = (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($x, $acc);
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
    $__res = (($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map')))((function() {
  $__fn = function($h) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (object)["init" => (($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse')))(($h)->revInit), "last" => ($h)->last];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($go)($lst, ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil'))));
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
$__tco_tmp_2 = (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))(($f)($a, $b), $acc);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue;
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
    $__res = (($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse')))(($go)($xs, $ys, ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil'))));
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
$sequence1 = (($GLOBALS['Data_List_sequence'] ?? \Data\List\phpurs_eval_thunk('Data_List_sequence')))($dictApplicative);
    $__res = (function() use ($sequence1) {
  $__fn = function($f, $xs = null, $ys = null) use ($sequence1, &$__fn) {
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
    $__res = ($sequence1)((($GLOBALS['Data_List_zipWith'] ?? \Data\List\phpurs_eval_thunk('Data_List_zipWith')))($f, $xs, $ys));
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
$select = (function() use ($p) {
  $__body = function($x, $v) use ($p) {
    $__case_0 = $x;
    $__case_1 = $v;
    if ((is_object)($__case_1)) {
$x1 = $__case_0;
$no = ($__case_1)->no;
$yes = ($__case_1)->yes;
$__case_0 = ($p)($x1);
if (($__case_0 === true)) {
return (object)["no" => $no, "yes" => (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($x1, $yes)];
} else {
if (true) {
return (object)["no" => (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($x1, $no), "yes" => $yes];
} else {
throw new \Exception("Pattern match failure");
};
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
    $__res = (($GLOBALS['Data_List_foldr'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldr')))($select, (object)["no" => ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil')), "yes" => ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil'))], $xs);
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
    if ((($__case_0)->tag === "Nil")) {
return true;
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
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
$go = (function() use ($p, &$go) {
  $__fn = function($v, $v1 = null, $v2 = null) use ($p, &$go, &$__fn) {
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
$v3 = (($GLOBALS['Data_List_Internal_insertAndLookupBy'] ?? \Data\List\Internal\phpurs_eval_thunk('Data_List_Internal_insertAndLookupBy')))($p, $a, $s);
$__case_0 = $v3;
if ((is_object)($__case_0)) {
$found = ($__case_0)->found;
$s__prime__ = ($__case_0)->result;
$__case_0 = $found;
if (($__case_0 === true)) {
$__tco_tmp_0 = $s__prime__;
$__tco_tmp_1 = $acc;
$__tco_tmp_2 = $as;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue 2;
} else {
if (true) {
$__tco_tmp_0 = $s__prime__;
$__tco_tmp_1 = (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($a, $acc);
$__tco_tmp_2 = $as;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue 2;
} else {
throw new \Exception("Pattern match failure");
};
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
    $__res = (($GLOBALS['Data_List_compose'] ?? \Data\List\phpurs_eval_thunk('Data_List_compose')))(($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse')), ($go)(($GLOBALS['Data_List_Internal_emptySet'] ?? \Data\List\Internal\phpurs_eval_thunk('Data_List_Internal_emptySet')), ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil'))));
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
    $__res = (($GLOBALS['Data_List_nubBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_nubBy')))((($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))($dictOrd));
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
$go = (function() use ($f, &$go) {
  $__fn = function($v, $v1 = null) use ($f, &$go, &$__fn) {
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
return (($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse')))($acc);
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
continue 2;
break;
case "Just":
$y = ($__case_0)->v0;
$__tco_tmp_0 = (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($y, $acc);
$__tco_tmp_1 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
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
    $__res = ($go)(($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil')));
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
$bind1 = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((((($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$tailRecM = (($GLOBALS['Control_Monad_Rec_Class_tailRecM'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRecM')))($dictMonadRec);
    $__res = (function() use ($bind1, $tailRecM) {
  $__fn = function($dictAlternative) use ($bind1, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Alt0 = (((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Alt0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$alt = (($GLOBALS['Control_Alt_alt'] ?? \Control\Alt\phpurs_eval_thunk('Control_Alt_alt')))($Alt0);
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($Alt0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($bind1, $alt, $map1, $pure, $tailRecM) {
  $__fn = function($p) use ($bind1, $alt, $map1, $pure, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($bind1, $alt, $map1, $p, $pure) {
  $__fn = function($acc) use ($bind1, $alt, $map1, $p, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind1)(($alt)(($map1)(($GLOBALS['Control_Monad_Rec_Class_Loop'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Loop')), $p), ($pure)((($GLOBALS['Control_Monad_Rec_Class_Done'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_Done')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))))), (function() use ($pure, $acc) {
  $__fn = function($aa) use ($pure, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)((($GLOBALS['Data_List_bimap'] ?? \Data\List\phpurs_eval_thunk('Data_List_bimap')))((function() use ($acc) {
  $__fn = function($v) use ($acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($v, $acc);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (function() use ($acc) {
  $__fn = function($v) use ($acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse')))($acc);
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
    $__res = ($tailRecM)($go, ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil')));
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
$manyRec1 = (($GLOBALS['Data_List_manyRec'] ?? \Data\List\phpurs_eval_thunk('Data_List_manyRec')))($dictMonadRec);
    $__res = (function() use ($manyRec1) {
  $__fn = function($dictAlternative) use ($manyRec1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))((((($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Alt0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$manyRec2 = ($manyRec1)($dictAlternative);
    $__res = (function() use ($apply, $map1, $manyRec2) {
  $__fn = function($v) use ($apply, $map1, $manyRec2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($apply)(($map1)(($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')), $v), ($manyRec2)($v));
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
while (true) {
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))((((($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Alt0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
return (function() use ($apply, $map1, $dictAlternative) {
  $__fn = function($dictLazy) use ($apply, $map1, $dictAlternative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$defer = (($GLOBALS['Control_Lazy_defer'] ?? \Control\Lazy\phpurs_eval_thunk('Control_Lazy_defer')))($dictLazy);
    $__res = (function() use ($apply, $map1, $defer, $dictAlternative, $dictLazy) {
  $__fn = function($v) use ($apply, $map1, $defer, $dictAlternative, $dictLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($apply)(($map1)(($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')), $v), ($defer)((function() use ($dictAlternative, $dictLazy, $v) {
  $__fn = function($v1) use ($dictAlternative, $dictLazy, $v, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_many'] ?? \Data\List\phpurs_eval_thunk('Data_List_many')))($dictAlternative, $dictLazy, $v);
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
while (true) {
$alt = (($GLOBALS['Control_Alt_alt'] ?? \Control\Alt\phpurs_eval_thunk('Control_Alt_alt')))((((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Alt0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
return (function() use ($alt, $dictAlternative, $pure) {
  $__fn = function($dictLazy, $v = null) use ($alt, $dictAlternative, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($dictLazy, &$__fn) { return $__fn($dictLazy, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($alt)((($GLOBALS['Data_List_some'] ?? \Data\List\phpurs_eval_thunk('Data_List_some')))($dictAlternative, $dictLazy, $v), ($pure)(($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil'))));
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
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($x);
} else {
if ((($__case_0)->tag === "Cons")) {
$xs = ($__case_0)->v1;
$__tco_tmp_0 = $xs;
$v = $__tco_tmp_0;
continue;
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
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
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
switch (($__case_2)->tag) {
case "Nil":
$x = $__case_1;
return (($GLOBALS['Data_List_singleton'] ?? \Data\List\phpurs_eval_thunk('Data_List_singleton')))($x);
break;
case "Cons":
$cmp = $__case_0;
$x = $__case_1;
$ys = $__case_2;
$y = ($__case_2)->v0;
$ys__prime__ = ($__case_2)->v1;
$v3 = ($cmp)($x, $y);
$__case_0 = $v3;
if ((($__case_0)->tag === "GT")) {
return (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($y, (($GLOBALS['Data_List_insertBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_insertBy')))($cmp, $x, $ys__prime__));
} else {
if (true) {
return (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($x, $ys);
} else {
throw new \Exception("Pattern match failure");
};
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
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if (($__case_0 === 0)) {
$x = $__case_1;
$xs = $__case_2;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($x, $xs));
} else {
if ((($__case_2)->tag === "Cons")) {
$n = $__case_0;
$x = $__case_1;
$y = ($__case_2)->v0;
$ys = ($__case_2)->v1;
return (($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map')))((function() use ($y) {
  $__fn = function($v3) use ($y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($y, $v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_List_insertAt'] ?? \Data\List\phpurs_eval_thunk('Data_List_insertAt')))((($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub')))($n, 1), $x, $ys));
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
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
    $__res = (($GLOBALS['Data_List_insertBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_insertBy')))((($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))($dictOrd));
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
    $__res = (($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map')))((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v)->init;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_List_unsnoc'] ?? \Data\List\phpurs_eval_thunk('Data_List_unsnoc')))($lst));
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
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_0)->tag === "Nil")) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
if (((($__case_0)->tag === "Cons") && ($__case_1 === 0))) {
$a = ($__case_0)->v0;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($a);
} else {
switch (($__case_0)->tag) {
case "Cons":
$as = ($__case_0)->v1;
$i = $__case_1;
$__tco_tmp_0 = $as;
$__tco_tmp_1 = (($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub')))($i, 1);
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
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
break;
case "Cons":
$x = ($__case_0)->v0;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($x);
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
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Nil")) {
return ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil'));
} else {
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v0)->tag === "Nil"))) {
$xss = ($__case_0)->v1;
$__tco_tmp_0 = $xss;
$v = $__tco_tmp_0;
continue;
} else {
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v0)->tag === "Cons"))) {
$x = (($__case_0)->v0)->v0;
$xs = (($__case_0)->v0)->v1;
$xss = ($__case_0)->v1;
return (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))((($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($x, (($GLOBALS['Data_List_mapMaybe'] ?? \Data\List\phpurs_eval_thunk('Data_List_mapMaybe')))(($GLOBALS['Data_List_head'] ?? \Data\List\phpurs_eval_thunk('Data_List_head')), $xss)), (($GLOBALS['Data_List_transpose'] ?? \Data\List\phpurs_eval_thunk('Data_List_transpose')))((($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($xs, (($GLOBALS['Data_List_mapMaybe'] ?? \Data\List\phpurs_eval_thunk('Data_List_mapMaybe')))(($GLOBALS['Data_List_tail'] ?? \Data\List\phpurs_eval_thunk('Data_List_tail')), $xss))));
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
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_1)->tag) {
case "Nil":
return ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil'));
break;
case "Cons":
$eq2 = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
$v2 = (($GLOBALS['Data_List_span'] ?? \Data\List\phpurs_eval_thunk('Data_List_span')))(($eq2)($x), $xs);
$__case_0 = $v2;
if ((is_object)($__case_0)) {
$ys = ($__case_0)->init;
$zs = ($__case_0)->rest;
return (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))((($GLOBALS['Data_List_Types_NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_NonEmptyList')))((($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')))($x, $ys)), (($GLOBALS['Data_List_groupBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_groupBy')))($eq2, $zs));
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
    $__res = (($GLOBALS['Data_List_compose'] ?? \Data\List\phpurs_eval_thunk('Data_List_compose')))((($GLOBALS['Data_List_groupBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_groupBy')))((function() use ($p) {
  $__fn = function($x, $y = null) use ($p, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_List_eq'] ?? \Data\List\phpurs_eval_thunk('Data_List_eq')))(($p)($x, $y), ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ')));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), (($GLOBALS['Data_List_sortBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_sortBy')))($p));
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
    $__res = (($GLOBALS['Data_List_groupBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_groupBy')))((($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq));
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
    $__res = (($GLOBALS['Data_List_compose'] ?? \Data\List\phpurs_eval_thunk('Data_List_compose')))((($GLOBALS['Data_List_group'] ?? \Data\List\phpurs_eval_thunk('Data_List_group')))((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')))), (($GLOBALS['Data_List_sort'] ?? \Data\List\phpurs_eval_thunk('Data_List_sort')))($dictOrd));
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
    $__res = (($GLOBALS['Data_Foldable_foldr'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldr')))($dictFoldable, ($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')), ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil')));
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
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$bind1 = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
return (function() use ($pure, $bind1, $dictMonad) {
  $__body = function($v, $v1, $v2) use ($pure, $bind1, $dictMonad) {
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
return ($bind1)(($f)($b, $a), (function() use ($dictMonad, $f, $as) {
  $__fn = function($b__prime__) use ($dictMonad, $f, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_foldM'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldM')))($dictMonad, $f, $b__prime__, $as);
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
  $__fn = function($v, $v1 = null, $v2 = null) use ($pure, $bind1, $dictMonad, $__body, &$__fn) {
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
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
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
    $__res = (($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map')))((function() use ($xs) {
  $__fn = function($v) use ($xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub')))((($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub')))((($GLOBALS['Data_List_length'] ?? \Data\List\phpurs_eval_thunk('Data_List_length')))($xs), 1), $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_List_findIndex'] ?? \Data\List\phpurs_eval_thunk('Data_List_findIndex')))($fn, (($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse')))($xs)));
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
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$bind1 = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
return (function() use ($pure, $bind1, $dictMonad) {
  $__body = function($v, $v1) use ($pure, $bind1, $dictMonad) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "Nil":
return ($pure)(($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil')));
break;
case "Cons":
$p = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
return ($bind1)(($p)($x), (function() use ($bind1, $dictMonad, $p, $xs, $pure, $x) {
  $__fn = function($b) use ($bind1, $dictMonad, $p, $xs, $pure, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind1)((($GLOBALS['Data_List_filterM'] ?? \Data\List\phpurs_eval_thunk('Data_List_filterM')))($dictMonad, $p, $xs), (function() use ($pure, $b, $x) {
  $__fn = function($xs__prime__) use ($pure, $b, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $b;
$__case_res_0 = null;
if (($__case_0 === true)) {
$__case_res_0 = (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($x, $xs__prime__);
} else {
if (true) {
$__case_res_0 = $xs__prime__;
} else {
throw new \Exception("Pattern match failure");
};
};
    $__res = ($pure)($__case_res_0);
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
  $__fn = function($v, $v1 = null) use ($pure, $bind1, $dictMonad, $__body, &$__fn) {
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
case "Nil":
$acc = $__case_0;
return (($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse')))($acc);
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
    $__res = ($go)(($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil')));
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
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_1)->tag === "Nil")) {
return ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil'));
} else {
if ((($__case_2)->tag === "Nil")) {
return ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil'));
} else {
if (true) {
$eq2 = $__case_0;
$xs = $__case_1;
$ys = $__case_2;
return (($GLOBALS['Data_List_filter'] ?? \Data\List\phpurs_eval_thunk('Data_List_filter')))((function() use ($eq2, $ys) {
  $__fn = function($x) use ($eq2, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_any'] ?? \Data\List\phpurs_eval_thunk('Data_List_any')))(($eq2)($x), $ys);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs);
} else {
throw new \Exception("Pattern match failure");
};
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
    $__res = (($GLOBALS['Data_List_intersectBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_intersectBy')))((($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq));
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
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_1)->tag) {
case "Nil":
return ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil'));
break;
case "Cons":
$eq__prime__ = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
return (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($x, (($GLOBALS['Data_List_nubByEq'] ?? \Data\List\phpurs_eval_thunk('Data_List_nubByEq')))($eq__prime__, (($GLOBALS['Data_List_filter'] ?? \Data\List\phpurs_eval_thunk('Data_List_filter')))((function() use ($eq__prime__, $x) {
  $__fn = function($y) use ($eq__prime__, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_not'] ?? \Data\List\phpurs_eval_thunk('Data_List_not')))(($eq__prime__)($x, $y));
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
    $__res = (($GLOBALS['Data_List_nubByEq'] ?? \Data\List\phpurs_eval_thunk('Data_List_nubByEq')))((($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq));
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
$eq2 = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))((($GLOBALS['Data_List_Types_eqList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_eqList')))($dictEq));
    $__res = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() use ($eq2) {
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
})()]);
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
$compare = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))((($GLOBALS['Data_List_Types_ordList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_ordList')))($dictOrd));
$eqPattern1 = (($GLOBALS['Data_List_eqPattern'] ?? \Data\List\phpurs_eval_thunk('Data_List_eqPattern')))((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() use ($compare) {
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
})()]);
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
$eq2 = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq);
    $__res = (function() use ($eq2) {
  $__fn = function($x) use ($eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_findLastIndex'] ?? \Data\List\phpurs_eval_thunk('Data_List_findLastIndex')))((function() use ($eq2, $x) {
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
$eq2 = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq);
    $__res = (function() use ($eq2) {
  $__fn = function($x) use ($eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_findIndex'] ?? \Data\List\phpurs_eval_thunk('Data_List_findIndex')))((function() use ($eq2, $x) {
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
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return "/* Unsupported: Guards not supported */";
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
    $__res = (($GLOBALS['Data_List_take'] ?? \Data\List\phpurs_eval_thunk('Data_List_take')))((($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub')))((($GLOBALS['Data_List_length'] ?? \Data\List\phpurs_eval_thunk('Data_List_length')))($xs), $n), $xs);
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
return ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil'));
break;
case "Cons":
$n = $__case_0;
$xs = ($__case_1)->v1;
$__tco_tmp_0 = (($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub')))($n, 1);
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
    $__res = (($GLOBALS['Data_List_take'] ?? \Data\List\phpurs_eval_thunk('Data_List_take')))((($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub')))($end, $start), (($GLOBALS['Data_List_drop'] ?? \Data\List\phpurs_eval_thunk('Data_List_drop')))($start, $xs));
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
    $__res = (($GLOBALS['Data_List_drop'] ?? \Data\List\phpurs_eval_thunk('Data_List_drop')))((($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub')))((($GLOBALS['Data_List_length'] ?? \Data\List\phpurs_eval_thunk('Data_List_length')))($xs), $n), $xs);
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
return ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil'));
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
return (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($y, (($GLOBALS['Data_List_deleteBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_deleteBy')))($eq__prime__, $x, $ys));
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
    $__res = (($GLOBALS['Data_List_append1'] ?? \Data\List\phpurs_eval_thunk('Data_List_append1')))($xs, (($GLOBALS['Data_List_foldl'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldl')))((($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))((($GLOBALS['Data_List_deleteBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_deleteBy')))($eq2)), (($GLOBALS['Data_List_nubByEq'] ?? \Data\List\phpurs_eval_thunk('Data_List_nubByEq')))($eq2, $ys), $xs));
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
    $__res = (($GLOBALS['Data_List_unionBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_unionBy')))((($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq));
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
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_0 === 0) && (($__case_1)->tag === "Cons"))) {
$ys = ($__case_1)->v1;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($ys);
} else {
if ((($__case_1)->tag === "Cons")) {
$n = $__case_0;
$y = ($__case_1)->v0;
$ys = ($__case_1)->v1;
return (($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map')))((function() use ($y) {
  $__fn = function($v2) use ($y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($y, $v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_List_deleteAt'] ?? \Data\List\phpurs_eval_thunk('Data_List_deleteAt')))((($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub')))($n, 1), $ys));
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
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
    $__res = (($GLOBALS['Data_List_deleteBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_deleteBy')))((($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq));
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
    $__res = (($GLOBALS['Data_List_foldl'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldl')))((($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))((($GLOBALS['Data_List_delete'] ?? \Data\List\phpurs_eval_thunk('Data_List_delete')))($dictEq)));
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
    $__res = (($GLOBALS['Data_List_bind'] ?? \Data\List\phpurs_eval_thunk('Data_List_bind')))($v, ($GLOBALS['Data_List_identity'] ?? \Data\List\phpurs_eval_thunk('Data_List_identity')));
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
$__case_res_0 = (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($y__prime__, $ys);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($__case_res_0);
} else {
if ((($__case_2)->tag === "Cons")) {
$n = $__case_0;
$f = $__case_1;
$y = ($__case_2)->v0;
$ys = ($__case_2)->v1;
return (($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map')))((function() use ($y) {
  $__fn = function($v3) use ($y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Types_Cons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Cons')))($y, $v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_List_alterAt'] ?? \Data\List\phpurs_eval_thunk('Data_List_alterAt')))((($GLOBALS['Data_List_sub'] ?? \Data\List\phpurs_eval_thunk('Data_List_sub')))($n, 1), $f, $ys));
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
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
    $__res = (($GLOBALS['Data_List_alterAt'] ?? \Data\List\phpurs_eval_thunk('Data_List_alterAt')))($n, (($GLOBALS['Data_List_compose'] ?? \Data\List\phpurs_eval_thunk('Data_List_compose')))(($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), $f));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_modifyAt'] = __NAMESPACE__ . '\\Data_List_modifyAt';

