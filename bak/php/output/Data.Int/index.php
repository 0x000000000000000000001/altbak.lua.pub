<?php

namespace Data\Int;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.DivisionRing/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Int/index.php';
require_once __DIR__ . '/../Data.Int.Bits/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Number/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
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
      case 'Data_Int_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Int_greaterThanOrEq': $v = (($GLOBALS['Data_Ord_greaterThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThanOrEq')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Int_lessThanOrEq': $v = (($GLOBALS['Data_Ord_lessThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThanOrEq')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Int_notEq': $v = (($GLOBALS['Data_Eq_notEq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_notEq')))(($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt'))); break;
      case 'Data_Int_not': $v = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot')); break;
      case 'Data_Int_greaterThanOrEq1': $v = (($GLOBALS['Data_Ord_greaterThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThanOrEq')))(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      case 'Data_Int_top': $v = ($GLOBALS['Data_Bounded_topInt'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_topInt')); break;
      case 'Data_Int_lessThanOrEq1': $v = (($GLOBALS['Data_Ord_lessThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThanOrEq')))(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      case 'Data_Int_bottom': $v = ($GLOBALS['Data_Bounded_bottomInt'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottomInt')); break;
      case 'Data_Int_eq': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Int_Even': $v = ($GLOBALS['__phpurs_data0_Even'] ??= new Phpurs_Data0("Even")); break;
      case 'Data_Int_Odd': $v = ($GLOBALS['__phpurs_data0_Odd'] ??= new Phpurs_Data0("Odd")); break;
      case 'Data_Int_showParity': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Even":
return "Even";
break;
case "Odd":
return "Odd";
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
})()]); break;
      case 'Data_Int_octal': $v = (($GLOBALS['Data_Int_Radix'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_Radix')))(8); break;
      case 'Data_Int_hexadecimal': $v = (($GLOBALS['Data_Int_Radix'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_Radix')))(16); break;
      case 'Data_Int_fromStringAs': $v = (($GLOBALS['Data_Int_fromStringAsImpl'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_fromStringAsImpl')))(($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'))); break;
      case 'Data_Int_fromString': $v = (($GLOBALS['Data_Int_fromStringAs'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_fromStringAs')))((($GLOBALS['Data_Int_Radix'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_Radix')))(10)); break;
      case 'Data_Int_fromNumber': $v = (($GLOBALS['Data_Int_fromNumberImpl'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_fromNumberImpl')))(($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'))); break;
      case 'Data_Int_round': $v = (($GLOBALS['Data_Int_compose'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_compose')))(($GLOBALS['Data_Int_unsafeClamp'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_unsafeClamp')), ($GLOBALS['Data_Number_round'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_round'))); break;
      case 'Data_Int_trunc': $v = (($GLOBALS['Data_Int_compose'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_compose')))(($GLOBALS['Data_Int_unsafeClamp'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_unsafeClamp')), ($GLOBALS['Data_Number_trunc'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_trunc'))); break;
      case 'Data_Int_floor': $v = (($GLOBALS['Data_Int_compose'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_compose')))(($GLOBALS['Data_Int_unsafeClamp'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_unsafeClamp')), ($GLOBALS['Data_Number_floor'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_floor'))); break;
      case 'Data_Int_eqParity': $v = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Even") && (($__case_1)->tag === "Even"))) {
return true;
} else {
if (((($__case_0)->tag === "Odd") && (($__case_1)->tag === "Odd"))) {
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
})()]); break;
      case 'Data_Int_ordParity': $v = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Even") && (($__case_1)->tag === "Even"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
if ((($__case_0)->tag === "Even")) {
return ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
} else {
if ((($__case_1)->tag === "Even")) {
return ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
} else {
if (((($__case_0)->tag === "Odd") && (($__case_1)->tag === "Odd"))) {
return ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
} else {
throw new \Exception("Pattern match failure");
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
    $__res = ($GLOBALS['Data_Int_eqParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_eqParity'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Int_semiringParity': $v = (($GLOBALS['Data_Semiring_Semiring__dollar__Dict'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_Semiring__dollar__Dict')))((object)["zero" => ($GLOBALS['Data_Int_Even'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_Even')), "add" => (function() {
  $__body = function($x, $y) {
    $__case_0 = (($GLOBALS['Data_Int_eq1'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_eq1')))($x, $y);
    if (($__case_0 === true)) {
return ($GLOBALS['Data_Int_Even'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_Even'));
} else {
if (true) {
return ($GLOBALS['Data_Int_Odd'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_Odd'));
} else {
throw new \Exception("Pattern match failure");
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
})(), "one" => ($GLOBALS['Data_Int_Odd'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_Odd')), "mul" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Odd") && (($__case_1)->tag === "Odd"))) {
return ($GLOBALS['Data_Int_Odd'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_Odd'));
} else {
if (true) {
return ($GLOBALS['Data_Int_Even'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_Even'));
} else {
throw new \Exception("Pattern match failure");
};
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
      case 'Data_Int_ringParity': $v = (($GLOBALS['Data_Ring_Ring__dollar__Dict'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_Ring__dollar__Dict')))((object)["sub" => (function() {
  $__body = function($x, $y) {
    $__case_0 = (($GLOBALS['Data_Int_eq1'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_eq1')))($x, $y);
    if (($__case_0 === true)) {
return ($GLOBALS['Data_Int_Even'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_Even'));
} else {
if (true) {
return ($GLOBALS['Data_Int_Odd'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_Odd'));
} else {
throw new \Exception("Pattern match failure");
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
})(), "Semiring0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Int_semiringParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_semiringParity'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Int_divisionRingParity': $v = (($GLOBALS['Data_DivisionRing_DivisionRing__dollar__Dict'] ?? \Data\DivisionRing\phpurs_eval_thunk('Data_DivisionRing_DivisionRing__dollar__Dict')))((object)["recip" => (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Ring0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Int_ringParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_ringParity'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Int_decimal': $v = (($GLOBALS['Data_Int_Radix'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_Radix')))(10); break;
      case 'Data_Int_commutativeRingParity': $v = (($GLOBALS['Data_CommutativeRing_CommutativeRing__dollar__Dict'] ?? \Data\CommutativeRing\phpurs_eval_thunk('Data_CommutativeRing_CommutativeRing__dollar__Dict')))((object)["Ring0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Int_ringParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_ringParity'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Int_euclideanRingParity': $v = (($GLOBALS['Data_EuclideanRing_EuclideanRing__dollar__Dict'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_EuclideanRing__dollar__Dict')))((object)["degree" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Even":
return 0;
break;
case "Odd":
return 1;
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
})(), "div" => (function() {
  $__fn = function($x, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($x, &$__fn) { return $__fn($x, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $x;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "mod" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($GLOBALS['Data_Int_Even'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_Even'));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "CommutativeRing0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Int_commutativeRingParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_commutativeRingParity'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Int_ceil': $v = (($GLOBALS['Data_Int_compose'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_compose')))(($GLOBALS['Data_Int_unsafeClamp'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_unsafeClamp')), ($GLOBALS['Data_Number_ceil'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_ceil'))); break;
      case 'Data_Int_boundedParity': $v = (($GLOBALS['Data_Bounded_Bounded__dollar__Dict'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_Bounded__dollar__Dict')))((object)["bottom" => ($GLOBALS['Data_Int_Even'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_Even')), "top" => ($GLOBALS['Data_Int_Odd'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_Odd')), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Int_ordParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_ordParity'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Int_binary': $v = (($GLOBALS['Data_Int_Radix'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_Radix')))(2); break;
      case 'Data_Int_base36': $v = (($GLOBALS['Data_Int_Radix'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_Radix')))(36); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };











// Data_Int_compose
function Data_Int_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Int_compose';
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
$GLOBALS['Data_Int_compose'] = __NAMESPACE__ . '\\Data_Int_compose';


// Data_Int_Radix
function Data_Int_Radix($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Int_Radix';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Int_Radix'] = __NAMESPACE__ . '\\Data_Int_Radix';




// Data_Int_radix
function Data_Int_radix($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Int_radix';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($n) {
    $__case_0 = $n;
    if (true) {
$n1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($n);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Int_radix'] = __NAMESPACE__ . '\\Data_Int_radix';

// Data_Int_odd
function Data_Int_odd($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Int_odd';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Int_notEq'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_notEq')))((($GLOBALS['Data_Int_Bits_and'] ?? \Data\Int\Bits\phpurs_eval_thunk('Data_Int_Bits_and')))($x, 1), 0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Int_odd'] = __NAMESPACE__ . '\\Data_Int_odd';






// Data_Int_unsafeClamp
function Data_Int_unsafeClamp($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Int_unsafeClamp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($x) {
    $__case_0 = $x;
    if (true) {
$x1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($x);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Int_unsafeClamp'] = __NAMESPACE__ . '\\Data_Int_unsafeClamp';




// Data_Int_even
function Data_Int_even($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Int_even';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Int_eq'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_eq')))((($GLOBALS['Data_Int_Bits_and'] ?? \Data\Int\Bits\phpurs_eval_thunk('Data_Int_Bits_and')))($x, 1), 0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Int_even'] = __NAMESPACE__ . '\\Data_Int_even';

// Data_Int_parity
function Data_Int_parity($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Int_parity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($n) {
    $__case_0 = (($GLOBALS['Data_Int_even'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_even')))($n);
    if (($__case_0 === true)) {
return ($GLOBALS['Data_Int_Even'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_Even'));
} else {
if (true) {
return ($GLOBALS['Data_Int_Odd'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_Odd'));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
    $__res = $__body($n);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Int_parity'] = __NAMESPACE__ . '\\Data_Int_parity';


// Data_Int_eq1
function Data_Int_eq1($x, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Int_eq1';
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, $__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Even") && (($__case_1)->tag === "Even"))) {
return true;
} else {
if (((($__case_0)->tag === "Odd") && (($__case_1)->tag === "Odd"))) {
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
    $__res = $__body($x, $y);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Int_eq1'] = __NAMESPACE__ . '\\Data_Int_eq1';












