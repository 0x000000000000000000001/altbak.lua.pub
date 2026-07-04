<?php

namespace Data\Eq\Generic;

require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Eq.Generic/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
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
      case 'Data_Eq_Generic_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Eq_Generic_genericEqNoConstructors': $v = (($GLOBALS['Data_Eq_Generic_GenericEq__dollar__Dict'] ?? \Data\Eq\Generic\phpurs_eval_thunk('Data_Eq_Generic_GenericEq__dollar__Dict')))((object)["genericEq'" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = true;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Eq_Generic_genericEqNoArguments': $v = (($GLOBALS['Data_Eq_Generic_GenericEq__dollar__Dict'] ?? \Data\Eq\Generic\phpurs_eval_thunk('Data_Eq_Generic_GenericEq__dollar__Dict')))((object)["genericEq'" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = true;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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



// Data_Eq_Generic_GenericEq$Dict
function Data_Eq_Generic_GenericEq__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Eq_Generic_GenericEq__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Eq_Generic_GenericEq__dollar__Dict'] = __NAMESPACE__ . '\\Data_Eq_Generic_GenericEq__dollar__Dict';



// Data_Eq_Generic_genericEqArgument
function Data_Eq_Generic_genericEqArgument($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Eq_Generic_genericEqArgument';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq);
    $__res = (($GLOBALS['Data_Eq_Generic_GenericEq__dollar__Dict'] ?? \Data\Eq\Generic\phpurs_eval_thunk('Data_Eq_Generic_GenericEq__dollar__Dict')))((object)["genericEq'" => (function() use ($eq) {
  $__body = function($v, $v1) use ($eq) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($eq)($a1, $a2);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($eq, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Eq_Generic_genericEqArgument'] = __NAMESPACE__ . '\\Data_Eq_Generic_genericEqArgument';

// Data_Eq_Generic_genericEq'
function Data_Eq_Generic_genericEq__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Eq_Generic_genericEq__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericEq__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Eq_Generic_genericEq__prime__'] = __NAMESPACE__ . '\\Data_Eq_Generic_genericEq__prime__';

// Data_Eq_Generic_genericEqConstructor
function Data_Eq_Generic_genericEqConstructor($dictGenericEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Eq_Generic_genericEqConstructor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericEq__prime__1 = (($GLOBALS['Data_Eq_Generic_genericEq__prime__'] ?? \Data\Eq\Generic\phpurs_eval_thunk('Data_Eq_Generic_genericEq__prime__')))($dictGenericEq);
    $__res = (($GLOBALS['Data_Eq_Generic_GenericEq__dollar__Dict'] ?? \Data\Eq\Generic\phpurs_eval_thunk('Data_Eq_Generic_GenericEq__dollar__Dict')))((object)["genericEq'" => (function() use ($genericEq__prime__1) {
  $__body = function($v, $v1) use ($genericEq__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($genericEq__prime__1)($a1, $a2);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericEq__prime__1, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Eq_Generic_genericEqConstructor'] = __NAMESPACE__ . '\\Data_Eq_Generic_genericEqConstructor';

// Data_Eq_Generic_genericEqProduct
function Data_Eq_Generic_genericEqProduct($dictGenericEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Eq_Generic_genericEqProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericEq__prime__1 = (($GLOBALS['Data_Eq_Generic_genericEq__prime__'] ?? \Data\Eq\Generic\phpurs_eval_thunk('Data_Eq_Generic_genericEq__prime__')))($dictGenericEq);
    $__res = (function() use ($genericEq__prime__1) {
  $__fn = function($dictGenericEq1) use ($genericEq__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericEq__prime__2 = (($GLOBALS['Data_Eq_Generic_genericEq__prime__'] ?? \Data\Eq\Generic\phpurs_eval_thunk('Data_Eq_Generic_genericEq__prime__')))($dictGenericEq1);
    $__res = (($GLOBALS['Data_Eq_Generic_GenericEq__dollar__Dict'] ?? \Data\Eq\Generic\phpurs_eval_thunk('Data_Eq_Generic_GenericEq__dollar__Dict')))((object)["genericEq'" => (function() use ($genericEq__prime__1, $genericEq__prime__2) {
  $__body = function($v, $v1) use ($genericEq__prime__1, $genericEq__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->v0;
$b1 = ($__case_0)->v1;
$a2 = ($__case_1)->v0;
$b2 = ($__case_1)->v1;
return (($GLOBALS['Data_Eq_Generic_conj'] ?? \Data\Eq\Generic\phpurs_eval_thunk('Data_Eq_Generic_conj')))(($genericEq__prime__1)($a1, $a2), ($genericEq__prime__2)($b1, $b2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericEq__prime__1, $genericEq__prime__2, $__body, &$__fn) {
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
$GLOBALS['Data_Eq_Generic_genericEqProduct'] = __NAMESPACE__ . '\\Data_Eq_Generic_genericEqProduct';

// Data_Eq_Generic_genericEqSum
function Data_Eq_Generic_genericEqSum($dictGenericEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Eq_Generic_genericEqSum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericEq__prime__1 = (($GLOBALS['Data_Eq_Generic_genericEq__prime__'] ?? \Data\Eq\Generic\phpurs_eval_thunk('Data_Eq_Generic_genericEq__prime__')))($dictGenericEq);
    $__res = (function() use ($genericEq__prime__1) {
  $__fn = function($dictGenericEq1) use ($genericEq__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericEq__prime__2 = (($GLOBALS['Data_Eq_Generic_genericEq__prime__'] ?? \Data\Eq\Generic\phpurs_eval_thunk('Data_Eq_Generic_genericEq__prime__')))($dictGenericEq1);
    $__res = (($GLOBALS['Data_Eq_Generic_GenericEq__dollar__Dict'] ?? \Data\Eq\Generic\phpurs_eval_thunk('Data_Eq_Generic_GenericEq__dollar__Dict')))((object)["genericEq'" => (function() use ($genericEq__prime__1, $genericEq__prime__2) {
  $__body = function($v, $v1) use ($genericEq__prime__1, $genericEq__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Inl") && (($__case_1)->tag === "Inl"))) {
$a1 = ($__case_0)->v0;
$a2 = ($__case_1)->v0;
return ($genericEq__prime__1)($a1, $a2);
} else {
if (((($__case_0)->tag === "Inr") && (($__case_1)->tag === "Inr"))) {
$b1 = ($__case_0)->v0;
$b2 = ($__case_1)->v0;
return ($genericEq__prime__2)($b1, $b2);
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v, $v1 = null) use ($genericEq__prime__1, $genericEq__prime__2, $__body, &$__fn) {
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
$GLOBALS['Data_Eq_Generic_genericEqSum'] = __NAMESPACE__ . '\\Data_Eq_Generic_genericEqSum';

// Data_Eq_Generic_genericEq
function Data_Eq_Generic_genericEq($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Eq_Generic_genericEq';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$from = (($GLOBALS['Data_Generic_Rep_from'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_from')))($dictGeneric);
    $__res = (function() use ($from) {
  $__fn = function($dictGenericEq) use ($from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericEq__prime__1 = (($GLOBALS['Data_Eq_Generic_genericEq__prime__'] ?? \Data\Eq\Generic\phpurs_eval_thunk('Data_Eq_Generic_genericEq__prime__')))($dictGenericEq);
    $__res = (function() use ($genericEq__prime__1, $from) {
  $__fn = function($x, $y = null) use ($genericEq__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($genericEq__prime__1)(($from)($x), ($from)($y));
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
$GLOBALS['Data_Eq_Generic_genericEq'] = __NAMESPACE__ . '\\Data_Eq_Generic_genericEq';

