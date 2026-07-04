<?php

namespace Data\Enum;

require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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
      case 'Data_Enum_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Enum_show': $v = ($GLOBALS['Data_Show_showIntImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showIntImpl')); break;
      case 'Data_Enum_lessThan': $v = (($GLOBALS['Data_Ord_lessThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThan')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Enum_top': $v = ($GLOBALS['Data_Bounded_topInt'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_topInt')); break;
      case 'Data_Enum_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_Enum_greaterThan': $v = (($GLOBALS['Data_Ord_greaterThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThan')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Enum_bottom': $v = ($GLOBALS['Data_Bounded_bottomInt'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottomInt')); break;
      case 'Data_Enum_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_Enum_voidLeft': $v = (($GLOBALS['Data_Functor_voidLeft'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_voidLeft')))(($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe'))); break;
      case 'Data_Enum_guard': $v = (($GLOBALS['Control_Alternative_guard'] ?? \Control\Alternative\phpurs_eval_thunk('Control_Alternative_guard')))(($GLOBALS['Data_Maybe_alternativeMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_alternativeMaybe'))); break;
      case 'Data_Enum_lessThanOrEq': $v = (($GLOBALS['Data_Ord_lessThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThanOrEq')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Enum_composeFlipped': $v = (($GLOBALS['Control_Semigroupoid_composeFlipped'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeFlipped')))(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Data_Enum_fromJust': $v = (($GLOBALS['Data_Maybe_fromJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromJust')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Enum_eq': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Enum_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Enum_greaterThanOrEq': $v = (($GLOBALS['Data_Ord_greaterThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThanOrEq')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Enum_bottom1': $v = ($GLOBALS['Data_Bounded_bottomChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottomChar')); break;
      case 'Data_Enum_top1': $v = ($GLOBALS['Data_Bounded_topChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_topChar')); break;
      case 'Data_Enum_showCardinality': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return (($GLOBALS['Data_Enum_append'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_append')))("(Cardinality ", (($GLOBALS['Data_Enum_append'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_append')))((($GLOBALS['Data_Enum_show'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_show')))($n), ")"));
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
})()]); break;
      case 'Data_Enum_ordCardinality': $v = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt')); break;
      case 'Data_Enum_newtypeCardinality': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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
      case 'Data_Enum_eqCardinality': $v = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt')); break;
      case 'Data_Enum_enumUnit': $v = (($GLOBALS['Data_Enum_Enum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Enum__dollar__Dict')))((object)["succ" => (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'))), "pred" => (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'))), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Ord_ordUnit'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordUnit'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Enum_enumOrdering': $v = (($GLOBALS['Data_Enum_Enum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Enum__dollar__Dict')))((object)["succ" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ')));
break;
case "EQ":
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT')));
break;
case "GT":
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
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
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
break;
case "EQ":
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT')));
break;
case "GT":
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ')));
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
    $__res = ($GLOBALS['Data_Ord_ordOrdering'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordOrdering'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Enum_enumInt': $v = (($GLOBALS['Data_Enum_Enum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Enum__dollar__Dict')))((object)["succ" => (function() {
  $__body = function($n) {
    $__case_0 = (($GLOBALS['Data_Enum_lessThan'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_lessThan')))($n, ($GLOBALS['Data_Enum_top'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_top')));
    if (($__case_0 === true)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Data_Enum_add'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_add')))($n, 1));
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($n) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($n);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "pred" => (function() {
  $__body = function($n) {
    $__case_0 = (($GLOBALS['Data_Enum_greaterThan'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_greaterThan')))($n, ($GLOBALS['Data_Enum_bottom'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_bottom')));
    if (($__case_0 === true)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Data_Enum_sub'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_sub')))($n, 1));
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($n) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($n);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Enum_enumBoolean': $v = (($GLOBALS['Data_Enum_Enum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Enum__dollar__Dict')))((object)["succ" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (($__case_0 === false)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(true);
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
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
    $__case_0 = $v;
    if (($__case_0 === true)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(false);
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
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
    $__res = ($GLOBALS['Data_Ord_ordBoolean'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordBoolean'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Enum_enumChar': $v = (($GLOBALS['Data_Enum_Enum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Enum__dollar__Dict')))((object)["succ" => (($GLOBALS['Data_Enum_defaultSucc'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_defaultSucc')))(($GLOBALS['Data_Enum_charToEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_charToEnum')), ($GLOBALS['Data_Enum_toCharCode'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toCharCode'))), "pred" => (($GLOBALS['Data_Enum_defaultPred'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_defaultPred')))(($GLOBALS['Data_Enum_charToEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_charToEnum')), ($GLOBALS['Data_Enum_toCharCode'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toCharCode'))), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Ord_ordChar'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordChar'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Enum_boundedEnumUnit': $v = (($GLOBALS['Data_Enum_BoundedEnum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_BoundedEnum__dollar__Dict')))((object)["cardinality" => (($GLOBALS['Data_Enum_Cardinality'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Cardinality')))(1), "toEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (($__case_0 === 0)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')));
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
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
})(), "fromEnum" => (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(0), "Bounded0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Bounded_boundedUnit'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_boundedUnit'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Enum1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Enum_enumUnit'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_enumUnit'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Enum_boundedEnumOrdering': $v = (($GLOBALS['Data_Enum_BoundedEnum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_BoundedEnum__dollar__Dict')))((object)["cardinality" => (($GLOBALS['Data_Enum_Cardinality'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Cardinality')))(3), "toEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (($__case_0 === 0)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT')));
} else {
if (($__case_0 === 1)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ')));
} else {
if (($__case_0 === 2)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT')));
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
};
};
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
})(), "fromEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return 0;
break;
case "EQ":
return 1;
break;
case "GT":
return 2;
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
})(), "Bounded0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Bounded_boundedOrdering'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_boundedOrdering'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Enum1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Enum_enumOrdering'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_enumOrdering'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Enum_boundedEnumChar': $v = (($GLOBALS['Data_Enum_BoundedEnum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_BoundedEnum__dollar__Dict')))((object)["cardinality" => (($GLOBALS['Data_Enum_Cardinality'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Cardinality')))((($GLOBALS['Data_Enum_sub'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_sub')))((($GLOBALS['Data_Enum_toCharCode'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toCharCode')))(($GLOBALS['Data_Enum_top1'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_top1'))), (($GLOBALS['Data_Enum_toCharCode'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toCharCode')))(($GLOBALS['Data_Enum_bottom1'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_bottom1'))))), "toEnum" => ($GLOBALS['Data_Enum_charToEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_charToEnum')), "fromEnum" => ($GLOBALS['Data_Enum_toCharCode'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toCharCode')), "Bounded0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Bounded_boundedChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_boundedChar'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Enum1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Enum_enumChar'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_enumChar'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Enum_boundedEnumBoolean': $v = (($GLOBALS['Data_Enum_BoundedEnum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_BoundedEnum__dollar__Dict')))((object)["cardinality" => (($GLOBALS['Data_Enum_Cardinality'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Cardinality')))(2), "toEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (($__case_0 === 0)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(false);
} else {
if (($__case_0 === 1)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(true);
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
};
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
})(), "fromEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (($__case_0 === false)) {
return 0;
} else {
if (($__case_0 === true)) {
return 1;
} else {
throw new \Exception("Pattern match failure");
};
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
})(), "Bounded0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Bounded_boundedBoolean'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_boundedBoolean'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Enum1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Enum_enumBoolean'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_enumBoolean'));
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


// Data_Enum_apply
function Data_Enum_apply($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_apply';
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
    $__res = ($f)($x, ($g)($x));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Enum_apply'] = __NAMESPACE__ . '\\Data_Enum_apply';




// Data_Enum_map
function Data_Enum_map($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_map';
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
$GLOBALS['Data_Enum_map'] = __NAMESPACE__ . '\\Data_Enum_map';

// Data_Enum_compose
function Data_Enum_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_compose';
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
$GLOBALS['Data_Enum_compose'] = __NAMESPACE__ . '\\Data_Enum_compose';






// Data_Enum_bind
function Data_Enum_bind($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_bind';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_0)->tag) {
case "Just":
$x = ($__case_0)->v0;
$k = $__case_1;
return ($k)($x);
break;
case "Nothing":
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v, $v1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Enum_bind'] = __NAMESPACE__ . '\\Data_Enum_bind';











// Data_Enum_Enum$Dict
function Data_Enum_Enum__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Enum__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Enum__dollar__Dict'] = __NAMESPACE__ . '\\Data_Enum_Enum__dollar__Dict';

// Data_Enum_Cardinality
function Data_Enum_Cardinality($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Cardinality';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Cardinality'] = __NAMESPACE__ . '\\Data_Enum_Cardinality';

// Data_Enum_BoundedEnum$Dict
function Data_Enum_BoundedEnum__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_BoundedEnum__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_BoundedEnum__dollar__Dict'] = __NAMESPACE__ . '\\Data_Enum_BoundedEnum__dollar__Dict';

// Data_Enum_toEnum
function Data_Enum_toEnum($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_toEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->toEnum;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_toEnum'] = __NAMESPACE__ . '\\Data_Enum_toEnum';

// Data_Enum_succ
function Data_Enum_succ($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_succ';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_succ'] = __NAMESPACE__ . '\\Data_Enum_succ';

// Data_Enum_upFromIncluding
function Data_Enum_upFromIncluding($dictEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_upFromIncluding';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$succ1 = (($GLOBALS['Data_Enum_succ'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_succ')))($dictEnum);
    $__res = (function() use ($succ1) {
  $__fn = function($dictUnfoldable1) use ($succ1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Unfoldable1_unfoldr1'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_unfoldr1')))($dictUnfoldable1, (($GLOBALS['Data_Enum_apply'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_apply')))(($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')), $succ1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_upFromIncluding'] = __NAMESPACE__ . '\\Data_Enum_upFromIncluding';


// Data_Enum_pred
function Data_Enum_pred($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_pred';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_pred'] = __NAMESPACE__ . '\\Data_Enum_pred';



// Data_Enum_fromEnum
function Data_Enum_fromEnum($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_fromEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->fromEnum;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_fromEnum'] = __NAMESPACE__ . '\\Data_Enum_fromEnum';

// Data_Enum_toEnumWithDefaults
function Data_Enum_toEnumWithDefaults($dictBoundedEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_toEnumWithDefaults';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$toEnum1 = (($GLOBALS['Data_Enum_toEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toEnum')))($dictBoundedEnum);
$fromEnum1 = (($GLOBALS['Data_Enum_fromEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_fromEnum')))($dictBoundedEnum);
$bottom2 = (($GLOBALS['Data_Bounded_bottom'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottom')))((($dictBoundedEnum)->Bounded0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($toEnum1, $fromEnum1, $bottom2) {
  $__body = function($low, $high, $x) use ($toEnum1, $fromEnum1, $bottom2) {
    $v = ($toEnum1)($x);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Just":
$enum = ($__case_0)->v0;
return $enum;
break;
case "Nothing":
$__case_0 = (($GLOBALS['Data_Enum_lessThan'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_lessThan')))($x, ($fromEnum1)($bottom2));
if (($__case_0 === true)) {
return $low;
} else {
if (true) {
return $high;
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
  $__fn = function($low, $high = null, $x = null) use ($toEnum1, $fromEnum1, $bottom2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($x) use ($low, $high, &$__fn) { return $__fn($low, $high, $x); };
    if ($__num === 1) return function($high, $x = null) use ($low, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($low, $high, $x);
      if ($__num2 === 1) return function($x) use ($low, $high, &$__fn) { return $__fn($low, $high, $x); };
      return phpurs_curry_fallback($__fn, [$low], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($low, $high, $x);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_toEnumWithDefaults'] = __NAMESPACE__ . '\\Data_Enum_toEnumWithDefaults';



// Data_Enum_enumTuple
function Data_Enum_enumTuple($dictEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_enumTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$succ1 = (($GLOBALS['Data_Enum_succ'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_succ')))($dictEnum);
$pred1 = (($GLOBALS['Data_Enum_pred'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_pred')))($dictEnum);
$ordTuple = (($GLOBALS['Data_Tuple_ordTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_ordTuple')))((($dictEnum)->Ord0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($ordTuple, $succ1, $pred1) {
  $__fn = function($dictBoundedEnum) use ($ordTuple, $succ1, $pred1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Bounded0 = (($dictBoundedEnum)->Bounded0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$bottom2 = (($GLOBALS['Data_Bounded_bottom'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottom')))($Bounded0);
$Enum1 = (($dictBoundedEnum)->Enum1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$succ2 = (($GLOBALS['Data_Enum_succ'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_succ')))($Enum1);
$top2 = (($GLOBALS['Data_Bounded_top'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_top')))($Bounded0);
$pred2 = (($GLOBALS['Data_Enum_pred'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_pred')))($Enum1);
$ordTuple1 = ($ordTuple)((($Enum1)->Ord0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Enum_Enum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Enum__dollar__Dict')))((object)["succ" => (function() use ($bottom2, $succ1, $succ2) {
  $__body = function($v) use ($bottom2, $succ1, $succ2) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
return (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))((($GLOBALS['Data_Enum_map'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_map')))((($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')), $bottom2), ($succ1)($a)), (($GLOBALS['Data_Enum_compose'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_compose')))(($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a)), ($succ2)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($bottom2, $succ1, $succ2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "pred" => (function() use ($top2, $pred1, $pred2) {
  $__body = function($v) use ($top2, $pred1, $pred2) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
return (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))((($GLOBALS['Data_Enum_map'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_map')))((($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')), $top2), ($pred1)($a)), (($GLOBALS['Data_Enum_compose'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_compose')))(($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a)), ($pred2)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($top2, $pred1, $pred2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Ord0" => (function() use ($ordTuple1) {
  $__fn = function($__dollar____unused) use ($ordTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ordTuple1;
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
$GLOBALS['Data_Enum_enumTuple'] = __NAMESPACE__ . '\\Data_Enum_enumTuple';


// Data_Enum_enumMaybe
function Data_Enum_enumMaybe($dictBoundedEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_enumMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bottom2 = (($GLOBALS['Data_Bounded_bottom'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottom')))((($dictBoundedEnum)->Bounded0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$Enum1 = (($dictBoundedEnum)->Enum1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$succ1 = (($GLOBALS['Data_Enum_succ'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_succ')))($Enum1);
$pred1 = (($GLOBALS['Data_Enum_pred'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_pred')))($Enum1);
$ordMaybe = (($GLOBALS['Data_Maybe_ordMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_ordMaybe')))((($Enum1)->Ord0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Enum_Enum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Enum__dollar__Dict')))((object)["succ" => (function() use ($bottom2, $succ1) {
  $__body = function($v) use ($bottom2, $succ1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nothing":
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($bottom2));
break;
case "Just":
$a = ($__case_0)->v0;
return (($GLOBALS['Data_Enum_map'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_map')))(($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), ($succ1)($a));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($bottom2, $succ1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "pred" => (function() use ($pred1) {
  $__body = function($v) use ($pred1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nothing":
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
break;
case "Just":
$a = ($__case_0)->v0;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($pred1)($a));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($pred1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Ord0" => (function() use ($ordMaybe) {
  $__fn = function($__dollar____unused) use ($ordMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ordMaybe;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_enumMaybe'] = __NAMESPACE__ . '\\Data_Enum_enumMaybe';


// Data_Enum_enumFromTo
function Data_Enum_enumFromTo($dictEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_enumFromTo';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Ord0 = (($dictEnum)->Ord0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$eq1 = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))((($Ord0)->Eq0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$lessThan1 = (($GLOBALS['Data_Ord_lessThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThan')))($Ord0);
$succ1 = (($GLOBALS['Data_Enum_succ'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_succ')))($dictEnum);
$lessThanOrEq1 = (($GLOBALS['Data_Ord_lessThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThanOrEq')))($Ord0);
$pred1 = (($GLOBALS['Data_Enum_pred'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_pred')))($dictEnum);
$greaterThanOrEq1 = (($GLOBALS['Data_Ord_greaterThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThanOrEq')))($Ord0);
    $__res = (function() {
  $__fn = function($dictUnfoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$singleton = (($GLOBALS['Data_Unfoldable1_singleton'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_singleton')))($dictUnfoldable1);
$unfoldr1 = (($GLOBALS['Data_Unfoldable1_unfoldr1'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_unfoldr1')))($dictUnfoldable1);
$go = (function() {
  $__fn = function($step, $op = null, $to = null, $a = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($a) use ($step, $op, $to, &$__fn) { return $__fn($step, $op, $to, $a); };
    if ($__num === 2) return function($to, $a = null) use ($step, $op, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($step, $op, $to, $a);
      if ($__num2 === 1) return function($a) use ($step, $op, $to, &$__fn) { return $__fn($step, $op, $to, $a); };
      return phpurs_curry_fallback($__fn, [$step, $op], 4);
    };
    if ($__num === 1) return function($op, $to = null, $a = null) use ($step, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($step, $op, $to, $a);
      if ($__num2 === 2) return function($a) use ($step, $op, $to, &$__fn) { return $__fn($step, $op, $to, $a); };
      if ($__num2 === 1) return function($to, $a = null) use ($step, $op, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($step, $op, $to, $a);
        if ($__num3 === 1) return function($a) use ($step, $op, $to, &$__fn) { return $__fn($step, $op, $to, $a); };
        return phpurs_curry_fallback($__fn, [$step, $op], 4);
      };
      return phpurs_curry_fallback($__fn, [$step], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a, (($GLOBALS['Data_Enum_bind'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_bind')))(($step)($a), (function() use ($op, $to) {
  $__fn = function($a__prime__) use ($op, $to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Enum_voidLeft'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_voidLeft')))((($GLOBALS['Data_Enum_guard'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_guard')))(($op)($a__prime__, $to)), $a__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$from = $__case_0;
$to = $__case_1;
return "/* Unsupported: Guards not supported */";
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
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_enumFromTo'] = __NAMESPACE__ . '\\Data_Enum_enumFromTo';

// Data_Enum_enumFromThenTo
function Data_Enum_enumFromThenTo($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_enumFromThenTo';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$unfoldr = (($GLOBALS['Data_Unfoldable_unfoldr'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_unfoldr')))($dictUnfoldable);
    $__res = (function() use ($unfoldr) {
  $__fn = function($dictFunctor) use ($unfoldr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (function() use ($map1, $unfoldr) {
  $__fn = function($dictBoundedEnum) use ($map1, $unfoldr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$fromEnum1 = (($GLOBALS['Data_Enum_fromEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_fromEnum')))($dictBoundedEnum);
$toEnum1 = (($GLOBALS['Data_Enum_toEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toEnum')))($dictBoundedEnum);
$go = (function() {
  $__body = function($step, $to, $e) {
    $__case_0 = $step;
    $__case_1 = $to;
    $__case_2 = $e;
    if (true) {
$step1 = $__case_0;
$to1 = $__case_1;
$e1 = $__case_2;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($step, $to = null, $e = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($e) use ($step, $to, &$__fn) { return $__fn($step, $to, $e); };
    if ($__num === 1) return function($to, $e = null) use ($step, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($step, $to, $e);
      if ($__num2 === 1) return function($e) use ($step, $to, &$__fn) { return $__fn($step, $to, $e); };
      return phpurs_curry_fallback($__fn, [$step], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($step, $to, $e);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = (($GLOBALS['Partial_Unsafe_unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafePartial')))((function() use ($fromEnum1, $map1, $toEnum1, $unfoldr, $go) {
  $__fn = function($__dollar____unused, $a = null, $b = null, $c = null) use ($fromEnum1, $map1, $toEnum1, $unfoldr, $go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($c) use ($__dollar____unused, $a, $b, &$__fn) { return $__fn($__dollar____unused, $a, $b, $c); };
    if ($__num === 2) return function($b, $c = null) use ($__dollar____unused, $a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($__dollar____unused, $a, $b, $c);
      if ($__num2 === 1) return function($c) use ($__dollar____unused, $a, $b, &$__fn) { return $__fn($__dollar____unused, $a, $b, $c); };
      return phpurs_curry_fallback($__fn, [$__dollar____unused, $a], 4);
    };
    if ($__num === 1) return function($a, $b = null, $c = null) use ($__dollar____unused, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($__dollar____unused, $a, $b, $c);
      if ($__num2 === 2) return function($c) use ($__dollar____unused, $a, $b, &$__fn) { return $__fn($__dollar____unused, $a, $b, $c); };
      if ($__num2 === 1) return function($b, $c = null) use ($__dollar____unused, $a, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($__dollar____unused, $a, $b, $c);
        if ($__num3 === 1) return function($c) use ($__dollar____unused, $a, $b, &$__fn) { return $__fn($__dollar____unused, $a, $b, $c); };
        return phpurs_curry_fallback($__fn, [$__dollar____unused, $a], 4);
      };
      return phpurs_curry_fallback($__fn, [$__dollar____unused], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
$c__prime__ = ($fromEnum1)($c);
$b__prime__ = ($fromEnum1)($b);
$a__prime__ = ($fromEnum1)($a);
    $__res = ($map1)((($GLOBALS['Data_Enum_composeFlipped'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_composeFlipped')))($toEnum1, ($GLOBALS['Data_Enum_fromJust'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_fromJust'))), ($unfoldr)(($go)((($GLOBALS['Data_Enum_sub'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_sub')))($b__prime__, $a__prime__), $c__prime__), $a__prime__));
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
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
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_enumFromThenTo'] = __NAMESPACE__ . '\\Data_Enum_enumFromThenTo';

// Data_Enum_enumEither
function Data_Enum_enumEither($dictBoundedEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_enumEither';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Enum1 = (($dictBoundedEnum)->Enum1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$succ1 = (($GLOBALS['Data_Enum_succ'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_succ')))($Enum1);
$pred1 = (($GLOBALS['Data_Enum_pred'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_pred')))($Enum1);
$top2 = (($GLOBALS['Data_Bounded_top'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_top')))((($dictBoundedEnum)->Bounded0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$ordEither = (($GLOBALS['Data_Either_ordEither'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_ordEither')))((($Enum1)->Ord0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($ordEither, $succ1, $pred1, $top2) {
  $__fn = function($dictBoundedEnum1) use ($ordEither, $succ1, $pred1, $top2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bottom2 = (($GLOBALS['Data_Bounded_bottom'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottom')))((($dictBoundedEnum1)->Bounded0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$Enum11 = (($dictBoundedEnum1)->Enum1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$succ2 = (($GLOBALS['Data_Enum_succ'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_succ')))($Enum11);
$pred2 = (($GLOBALS['Data_Enum_pred'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_pred')))($Enum11);
$ordEither1 = ($ordEither)((($Enum11)->Ord0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Enum_Enum__dollar__Dict'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Enum__dollar__Dict')))((object)["succ" => (function() use ($bottom2, $succ1, $succ2) {
  $__body = function($v) use ($bottom2, $succ1, $succ2) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Left":
$a = ($__case_0)->v0;
return (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))((($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')))($bottom2)), (($GLOBALS['Data_Enum_compose'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_compose')))(($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), ($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left'))), ($succ1)($a));
break;
case "Right":
$b = ($__case_0)->v0;
return (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')), (($GLOBALS['Data_Enum_compose'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_compose')))(($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), ($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right'))), ($succ2)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($bottom2, $succ1, $succ2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "pred" => (function() use ($pred1, $top2, $pred2) {
  $__body = function($v) use ($pred1, $top2, $pred2) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Left":
$a = ($__case_0)->v0;
return (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')), (($GLOBALS['Data_Enum_compose'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_compose')))(($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), ($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left'))), ($pred1)($a));
break;
case "Right":
$b = ($__case_0)->v0;
return (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))((($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')))($top2)), (($GLOBALS['Data_Enum_compose'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_compose')))(($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), ($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right'))), ($pred2)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($pred1, $top2, $pred2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Ord0" => (function() use ($ordEither1) {
  $__fn = function($__dollar____unused) use ($ordEither1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ordEither1;
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
$GLOBALS['Data_Enum_enumEither'] = __NAMESPACE__ . '\\Data_Enum_enumEither';


// Data_Enum_downFromIncluding
function Data_Enum_downFromIncluding($dictEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_downFromIncluding';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$pred1 = (($GLOBALS['Data_Enum_pred'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_pred')))($dictEnum);
    $__res = (function() use ($pred1) {
  $__fn = function($dictUnfoldable1) use ($pred1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Unfoldable1_unfoldr1'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_unfoldr1')))($dictUnfoldable1, (($GLOBALS['Data_Enum_apply'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_apply')))(($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')), $pred1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_downFromIncluding'] = __NAMESPACE__ . '\\Data_Enum_downFromIncluding';

// Data_Enum_diag
function Data_Enum_diag($a) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_diag';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a, $a);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_diag'] = __NAMESPACE__ . '\\Data_Enum_diag';

// Data_Enum_downFrom
function Data_Enum_downFrom($dictEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_downFrom';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$pred1 = (($GLOBALS['Data_Enum_pred'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_pred')))($dictEnum);
    $__res = (function() use ($pred1) {
  $__fn = function($dictUnfoldable) use ($pred1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Unfoldable_unfoldr'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_unfoldr')))($dictUnfoldable, (($GLOBALS['Data_Enum_compose'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_compose')))((($GLOBALS['Data_Enum_map'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_map')))(($GLOBALS['Data_Enum_diag'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_diag'))), $pred1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_downFrom'] = __NAMESPACE__ . '\\Data_Enum_downFrom';

// Data_Enum_upFrom
function Data_Enum_upFrom($dictEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_upFrom';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$succ1 = (($GLOBALS['Data_Enum_succ'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_succ')))($dictEnum);
    $__res = (function() use ($succ1) {
  $__fn = function($dictUnfoldable) use ($succ1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Unfoldable_unfoldr'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_unfoldr')))($dictUnfoldable, (($GLOBALS['Data_Enum_compose'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_compose')))((($GLOBALS['Data_Enum_map'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_map')))(($GLOBALS['Data_Enum_diag'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_diag'))), $succ1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_upFrom'] = __NAMESPACE__ . '\\Data_Enum_upFrom';

// Data_Enum_defaultToEnum
function Data_Enum_defaultToEnum($dictBounded) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_defaultToEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bottom2 = (($GLOBALS['Data_Bounded_bottom'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottom')))($dictBounded);
    $__res = (function() use ($bottom2) {
  $__fn = function($dictEnum) use ($bottom2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$succ1 = (($GLOBALS['Data_Enum_succ'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_succ')))($dictEnum);
    $__res = (function() use ($succ1, $bottom2) {
  $__body = function($i__prime__) use ($succ1, $bottom2) {
    $go = (function() use ($succ1, &$go) {
  $__fn = function($i, $x = null) use ($succ1, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($i, &$__fn) { return $__fn($i, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = (($GLOBALS['Data_Enum_eq'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_eq')))($i, 0);
if (($__case_0 === true)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($x);
} else {
if (true) {
$v = ($succ1)($x);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Just":
$x__prime__ = ($__case_0)->v0;
$__tco_tmp_0 = (($GLOBALS['Data_Enum_sub'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_sub')))($i, 1);
$__tco_tmp_1 = $x__prime__;
$i = $__tco_tmp_0;
$x = $__tco_tmp_1;
continue 2;
break;
case "Nothing":
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
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
    $__case_0 = (($GLOBALS['Data_Enum_lessThan'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_lessThan')))($i__prime__, 0);
    if (($__case_0 === true)) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
if (true) {
return ($go)($i__prime__, $bottom2);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($i__prime__) use ($succ1, $bottom2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($i__prime__);
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
$GLOBALS['Data_Enum_defaultToEnum'] = __NAMESPACE__ . '\\Data_Enum_defaultToEnum';

// Data_Enum_defaultSucc
function Data_Enum_defaultSucc($toEnum__prime__, $fromEnum__prime__ = null, $a = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_defaultSucc';
  if ($__num < 3) {
    if ($__num === 2) return function($a) use ($toEnum__prime__, $fromEnum__prime__, $__fn) { return $__fn($toEnum__prime__, $fromEnum__prime__, $a); };
    if ($__num === 1) return function($fromEnum__prime__, $a = null) use ($toEnum__prime__, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($toEnum__prime__, $fromEnum__prime__, $a);
      if ($__num2 === 1) return function($a) use ($toEnum__prime__, $fromEnum__prime__, $__fn) { return $__fn($toEnum__prime__, $fromEnum__prime__, $a); };
      return phpurs_curry_fallback($__fn, [$toEnum__prime__], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($toEnum__prime__)((($GLOBALS['Data_Enum_add'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_add')))(($fromEnum__prime__)($a), 1));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Enum_defaultSucc'] = __NAMESPACE__ . '\\Data_Enum_defaultSucc';

// Data_Enum_defaultPred
function Data_Enum_defaultPred($toEnum__prime__, $fromEnum__prime__ = null, $a = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_defaultPred';
  if ($__num < 3) {
    if ($__num === 2) return function($a) use ($toEnum__prime__, $fromEnum__prime__, $__fn) { return $__fn($toEnum__prime__, $fromEnum__prime__, $a); };
    if ($__num === 1) return function($fromEnum__prime__, $a = null) use ($toEnum__prime__, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($toEnum__prime__, $fromEnum__prime__, $a);
      if ($__num2 === 1) return function($a) use ($toEnum__prime__, $fromEnum__prime__, $__fn) { return $__fn($toEnum__prime__, $fromEnum__prime__, $a); };
      return phpurs_curry_fallback($__fn, [$toEnum__prime__], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($toEnum__prime__)((($GLOBALS['Data_Enum_sub'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_sub')))(($fromEnum__prime__)($a), 1));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Enum_defaultPred'] = __NAMESPACE__ . '\\Data_Enum_defaultPred';

// Data_Enum_defaultFromEnum
function Data_Enum_defaultFromEnum($dictEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_defaultFromEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$pred1 = (($GLOBALS['Data_Enum_pred'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_pred')))($dictEnum);
$go = (function() use ($pred1, &$go) {
  $__fn = function($i, $x = null) use ($pred1, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($i, &$__fn) { return $__fn($i, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($pred1)($x);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Just":
$x__prime__ = ($__case_0)->v0;
$__tco_tmp_0 = (($GLOBALS['Data_Enum_add'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_add')))($i, 1);
$__tco_tmp_1 = $x__prime__;
$i = $__tco_tmp_0;
$x = $__tco_tmp_1;
continue 2;
break;
case "Nothing":
return $i;
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
$GLOBALS['Data_Enum_defaultFromEnum'] = __NAMESPACE__ . '\\Data_Enum_defaultFromEnum';

// Data_Enum_defaultCardinality
function Data_Enum_defaultCardinality($dictBounded) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_defaultCardinality';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bottom2 = (($GLOBALS['Data_Bounded_bottom'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottom')))($dictBounded);
    $__res = (function() use ($bottom2) {
  $__fn = function($dictEnum) use ($bottom2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$succ1 = (($GLOBALS['Data_Enum_succ'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_succ')))($dictEnum);
$go = (function() use ($succ1, &$go) {
  $__fn = function($i, $x = null) use ($succ1, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($i, &$__fn) { return $__fn($i, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$v = ($succ1)($x);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Just":
$x__prime__ = ($__case_0)->v0;
$__tco_tmp_0 = (($GLOBALS['Data_Enum_add'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_add')))($i, 1);
$__tco_tmp_1 = $x__prime__;
$i = $__tco_tmp_0;
$x = $__tco_tmp_1;
continue 2;
break;
case "Nothing":
return $i;
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
    $__res = (($GLOBALS['Data_Enum_Cardinality'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Cardinality')))(($go)(1, $bottom2));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_defaultCardinality'] = __NAMESPACE__ . '\\Data_Enum_defaultCardinality';

// Data_Enum_charToEnum
function Data_Enum_charToEnum($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_charToEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_charToEnum'] = __NAMESPACE__ . '\\Data_Enum_charToEnum';


// Data_Enum_cardinality
function Data_Enum_cardinality($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_cardinality';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->cardinality;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_cardinality'] = __NAMESPACE__ . '\\Data_Enum_cardinality';





