<?php

namespace Data\Divide;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Data.Comparison/index.php';
require_once __DIR__ . '/../Data.Divide/index.php';
require_once __DIR__ . '/../Data.Equivalence/index.php';
require_once __DIR__ . '/../Data.Functor.Contravariant/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Op/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Predicate/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
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
      case 'Data_Divide_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Divide_dividePredicate': $v = (($GLOBALS['Data_Divide_Divide__dollar__Dict'] ?? \Data\Divide\phpurs_eval_thunk('Data_Divide_Divide__dollar__Dict')))((object)["divide" => (function() {
  $__body = function($f, $v, $v1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
$h = $__case_2;
return (($GLOBALS['Data_Predicate_Predicate'] ?? \Data\Predicate\phpurs_eval_thunk('Data_Predicate_Predicate')))((function() use ($f1, $g, $h) {
  $__body = function($a) use ($f1, $g, $h) {
    $v2 = ($f1)($a);
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "Tuple":
$b = ($__case_0)->v0;
$c = ($__case_0)->v1;
return (($GLOBALS['Data_Divide_conj'] ?? \Data\Divide\phpurs_eval_thunk('Data_Divide_conj')))(($g)($b), ($h)($c));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($a) use ($f1, $g, $h, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
    if ($__num === 1) return function($v, $v1 = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $v, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Contravariant0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Predicate_contravariantPredicate'] ?? \Data\Predicate\phpurs_eval_thunk('Data_Predicate_contravariantPredicate'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Divide_divideEquivalence': $v = (($GLOBALS['Data_Divide_Divide__dollar__Dict'] ?? \Data\Divide\phpurs_eval_thunk('Data_Divide_Divide__dollar__Dict')))((object)["divide" => (function() {
  $__body = function($f, $v, $v1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
$h = $__case_2;
return (($GLOBALS['Data_Equivalence_Equivalence'] ?? \Data\Equivalence\phpurs_eval_thunk('Data_Equivalence_Equivalence')))((function() use ($f1, $g, $h) {
  $__body = function($a, $b) use ($f1, $g, $h) {
    $v2 = ($f1)($a);
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "Tuple":
$a__prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$v3 = ($f1)($b);
$__case_0 = $v3;
switch (($__case_0)->tag) {
case "Tuple":
$b__prime__ = ($__case_0)->v0;
$b__prime____prime__ = ($__case_0)->v1;
return (($GLOBALS['Data_Divide_conj'] ?? \Data\Divide\phpurs_eval_thunk('Data_Divide_conj')))(($g)($a__prime__, $b__prime__), ($h)($a__prime____prime__, $b__prime____prime__));
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
  $__fn = function($a, $b = null) use ($f1, $g, $h, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a, $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
    if ($__num === 1) return function($v, $v1 = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $v, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Contravariant0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Equivalence_contravariantEquivalence'] ?? \Data\Equivalence\phpurs_eval_thunk('Data_Equivalence_contravariantEquivalence'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Divide_divideComparison': $v = (($GLOBALS['Data_Divide_Divide__dollar__Dict'] ?? \Data\Divide\phpurs_eval_thunk('Data_Divide_Divide__dollar__Dict')))((object)["divide" => (function() {
  $__body = function($f, $v, $v1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
$h = $__case_2;
return (($GLOBALS['Data_Comparison_Comparison'] ?? \Data\Comparison\phpurs_eval_thunk('Data_Comparison_Comparison')))((function() use ($f1, $g, $h) {
  $__body = function($a, $b) use ($f1, $g, $h) {
    $v2 = ($f1)($a);
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "Tuple":
$a__prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$v3 = ($f1)($b);
$__case_0 = $v3;
switch (($__case_0)->tag) {
case "Tuple":
$b__prime__ = ($__case_0)->v0;
$b__prime____prime__ = ($__case_0)->v1;
return (($GLOBALS['Data_Divide_append'] ?? \Data\Divide\phpurs_eval_thunk('Data_Divide_append')))(($g)($a__prime__, $b__prime__), ($h)($a__prime____prime__, $b__prime____prime__));
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
  $__fn = function($a, $b = null) use ($f1, $g, $h, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a, $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
    if ($__num === 1) return function($v, $v1 = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $v, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Contravariant0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Comparison_contravariantComparison'] ?? \Data\Comparison\phpurs_eval_thunk('Data_Comparison_contravariantComparison'));
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



// Data_Divide_append
function Data_Divide_append($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Divide_append';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_0)->tag) {
case "LT":
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
break;
case "GT":
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
break;
case "EQ":
$y = $__case_1;
return $y;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v, $v1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Divide_append'] = __NAMESPACE__ . '\\Data_Divide_append';

// Data_Divide_identity
function Data_Divide_identity($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Divide_identity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Divide_identity'] = __NAMESPACE__ . '\\Data_Divide_identity';

// Data_Divide_Divide$Dict
function Data_Divide_Divide__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Divide_Divide__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Divide_Divide__dollar__Dict'] = __NAMESPACE__ . '\\Data_Divide_Divide__dollar__Dict';


// Data_Divide_divideOp
function Data_Divide_divideOp($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Divide_divideOp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append1 = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))($dictSemigroup);
    $__res = (($GLOBALS['Data_Divide_Divide__dollar__Dict'] ?? \Data\Divide\phpurs_eval_thunk('Data_Divide_Divide__dollar__Dict')))((object)["divide" => (function() use ($append1) {
  $__body = function($f, $v, $v1) use ($append1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
$h = $__case_2;
return (($GLOBALS['Data_Op_Op'] ?? \Data\Op\phpurs_eval_thunk('Data_Op_Op')))((function() use ($f1, $append1, $g, $h) {
  $__body = function($a) use ($f1, $append1, $g, $h) {
    $v2 = ($f1)($a);
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "Tuple":
$b = ($__case_0)->v0;
$c = ($__case_0)->v1;
return ($append1)(($g)($b), ($h)($c));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($a) use ($f1, $append1, $g, $h, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null, $v1 = null) use ($append1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
    if ($__num === 1) return function($v, $v1 = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $v, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Contravariant0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Op_contravariantOp'] ?? \Data\Op\phpurs_eval_thunk('Data_Op_contravariantOp'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Divide_divideOp'] = __NAMESPACE__ . '\\Data_Divide_divideOp';



// Data_Divide_divide
function Data_Divide_divide($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Divide_divide';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->divide;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Divide_divide'] = __NAMESPACE__ . '\\Data_Divide_divide';

// Data_Divide_divided
function Data_Divide_divided($dictDivide) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Divide_divided';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Divide_divide'] ?? \Data\Divide\phpurs_eval_thunk('Data_Divide_divide')))($dictDivide, ($GLOBALS['Data_Divide_identity'] ?? \Data\Divide\phpurs_eval_thunk('Data_Divide_identity')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Divide_divided'] = __NAMESPACE__ . '\\Data_Divide_divided';

