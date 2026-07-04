<?php

namespace Data\Semiring\Generic;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Semiring.Generic/index.php';
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
      case 'Data_Semiring_Generic_genericSemiringNoArguments': $v = (($GLOBALS['Data_Semiring_Generic_GenericSemiring__dollar__Dict'] ?? \Data\Semiring\Generic\phpurs_eval_thunk('Data_Semiring_Generic_GenericSemiring__dollar__Dict')))((object)["genericAdd'" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($GLOBALS['Data_Generic_Rep_NoArguments'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_NoArguments'));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericZero'" => ($GLOBALS['Data_Generic_Rep_NoArguments'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_NoArguments')), "genericMul'" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($GLOBALS['Data_Generic_Rep_NoArguments'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_NoArguments'));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericOne'" => ($GLOBALS['Data_Generic_Rep_NoArguments'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_NoArguments'))]); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Semiring_Generic_GenericSemiring$Dict
function Data_Semiring_Generic_GenericSemiring__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_GenericSemiring__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Generic_GenericSemiring__dollar__Dict'] = __NAMESPACE__ . '\\Data_Semiring_Generic_GenericSemiring__dollar__Dict';

// Data_Semiring_Generic_genericZero'
function Data_Semiring_Generic_genericZero__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericZero__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericZero__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Generic_genericZero__prime__'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericZero__prime__';

// Data_Semiring_Generic_genericZero
function Data_Semiring_Generic_genericZero($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericZero';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$to = (($GLOBALS['Data_Generic_Rep_to'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_to')))($dictGeneric);
    $__res = (function() use ($to) {
  $__fn = function($dictGenericSemiring) use ($to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($to)((($GLOBALS['Data_Semiring_Generic_genericZero__prime__'] ?? \Data\Semiring\Generic\phpurs_eval_thunk('Data_Semiring_Generic_genericZero__prime__')))($dictGenericSemiring));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Generic_genericZero'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericZero';


// Data_Semiring_Generic_genericSemiringArgument
function Data_Semiring_Generic_genericSemiringArgument($dictSemiring) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericSemiringArgument';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$add = (($GLOBALS['Data_Semiring_add'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_add')))($dictSemiring);
$mul = (($GLOBALS['Data_Semiring_mul'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_mul')))($dictSemiring);
    $__res = (($GLOBALS['Data_Semiring_Generic_GenericSemiring__dollar__Dict'] ?? \Data\Semiring\Generic\phpurs_eval_thunk('Data_Semiring_Generic_GenericSemiring__dollar__Dict')))((object)["genericAdd'" => (function() use ($add) {
  $__body = function($v, $v1) use ($add) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return (($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument')))(($add)($x, $y));
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
})(), "genericZero'" => (($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument')))((($GLOBALS['Data_Semiring_zero'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_zero')))($dictSemiring)), "genericMul'" => (function() use ($mul) {
  $__body = function($v, $v1) use ($mul) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return (($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument')))(($mul)($x, $y));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($mul, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericOne'" => (($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument')))((($GLOBALS['Data_Semiring_one'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_one')))($dictSemiring))]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Generic_genericSemiringArgument'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericSemiringArgument';

// Data_Semiring_Generic_genericOne'
function Data_Semiring_Generic_genericOne__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericOne__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericOne__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Generic_genericOne__prime__'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericOne__prime__';

// Data_Semiring_Generic_genericOne
function Data_Semiring_Generic_genericOne($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericOne';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$to = (($GLOBALS['Data_Generic_Rep_to'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_to')))($dictGeneric);
    $__res = (function() use ($to) {
  $__fn = function($dictGenericSemiring) use ($to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($to)((($GLOBALS['Data_Semiring_Generic_genericOne__prime__'] ?? \Data\Semiring\Generic\phpurs_eval_thunk('Data_Semiring_Generic_genericOne__prime__')))($dictGenericSemiring));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Generic_genericOne'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericOne';

// Data_Semiring_Generic_genericMul'
function Data_Semiring_Generic_genericMul__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericMul__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericMul__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Generic_genericMul__prime__'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericMul__prime__';

// Data_Semiring_Generic_genericMul
function Data_Semiring_Generic_genericMul($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericMul';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$to = (($GLOBALS['Data_Generic_Rep_to'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_to')))($dictGeneric);
$from = (($GLOBALS['Data_Generic_Rep_from'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_from')))($dictGeneric);
    $__res = (function() use ($to, $from) {
  $__fn = function($dictGenericSemiring) use ($to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericMul__prime__1 = (($GLOBALS['Data_Semiring_Generic_genericMul__prime__'] ?? \Data\Semiring\Generic\phpurs_eval_thunk('Data_Semiring_Generic_genericMul__prime__')))($dictGenericSemiring);
    $__res = (function() use ($to, $genericMul__prime__1, $from) {
  $__fn = function($x, $y = null) use ($to, $genericMul__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($to)(($genericMul__prime__1)(($from)($x), ($from)($y)));
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
$GLOBALS['Data_Semiring_Generic_genericMul'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericMul';

// Data_Semiring_Generic_genericAdd'
function Data_Semiring_Generic_genericAdd__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericAdd__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericAdd__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Generic_genericAdd__prime__'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericAdd__prime__';

// Data_Semiring_Generic_genericSemiringConstructor
function Data_Semiring_Generic_genericSemiringConstructor($dictGenericSemiring) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericSemiringConstructor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericAdd__prime__1 = (($GLOBALS['Data_Semiring_Generic_genericAdd__prime__'] ?? \Data\Semiring\Generic\phpurs_eval_thunk('Data_Semiring_Generic_genericAdd__prime__')))($dictGenericSemiring);
$genericMul__prime__1 = (($GLOBALS['Data_Semiring_Generic_genericMul__prime__'] ?? \Data\Semiring\Generic\phpurs_eval_thunk('Data_Semiring_Generic_genericMul__prime__')))($dictGenericSemiring);
    $__res = (($GLOBALS['Data_Semiring_Generic_GenericSemiring__dollar__Dict'] ?? \Data\Semiring\Generic\phpurs_eval_thunk('Data_Semiring_Generic_GenericSemiring__dollar__Dict')))((object)["genericAdd'" => (function() use ($genericAdd__prime__1) {
  $__body = function($v, $v1) use ($genericAdd__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return (($GLOBALS['Data_Generic_Rep_Constructor'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Constructor')))(($genericAdd__prime__1)($a1, $a2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericAdd__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericZero'" => (($GLOBALS['Data_Generic_Rep_Constructor'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Constructor')))((($GLOBALS['Data_Semiring_Generic_genericZero__prime__'] ?? \Data\Semiring\Generic\phpurs_eval_thunk('Data_Semiring_Generic_genericZero__prime__')))($dictGenericSemiring)), "genericMul'" => (function() use ($genericMul__prime__1) {
  $__body = function($v, $v1) use ($genericMul__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return (($GLOBALS['Data_Generic_Rep_Constructor'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Constructor')))(($genericMul__prime__1)($a1, $a2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericMul__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericOne'" => (($GLOBALS['Data_Generic_Rep_Constructor'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Constructor')))((($GLOBALS['Data_Semiring_Generic_genericOne__prime__'] ?? \Data\Semiring\Generic\phpurs_eval_thunk('Data_Semiring_Generic_genericOne__prime__')))($dictGenericSemiring))]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Generic_genericSemiringConstructor'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericSemiringConstructor';

// Data_Semiring_Generic_genericSemiringProduct
function Data_Semiring_Generic_genericSemiringProduct($dictGenericSemiring) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericSemiringProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericAdd__prime__1 = (($GLOBALS['Data_Semiring_Generic_genericAdd__prime__'] ?? \Data\Semiring\Generic\phpurs_eval_thunk('Data_Semiring_Generic_genericAdd__prime__')))($dictGenericSemiring);
$genericZero__prime__1 = (($GLOBALS['Data_Semiring_Generic_genericZero__prime__'] ?? \Data\Semiring\Generic\phpurs_eval_thunk('Data_Semiring_Generic_genericZero__prime__')))($dictGenericSemiring);
$genericMul__prime__1 = (($GLOBALS['Data_Semiring_Generic_genericMul__prime__'] ?? \Data\Semiring\Generic\phpurs_eval_thunk('Data_Semiring_Generic_genericMul__prime__')))($dictGenericSemiring);
$genericOne__prime__1 = (($GLOBALS['Data_Semiring_Generic_genericOne__prime__'] ?? \Data\Semiring\Generic\phpurs_eval_thunk('Data_Semiring_Generic_genericOne__prime__')))($dictGenericSemiring);
    $__res = (function() use ($genericAdd__prime__1, $genericZero__prime__1, $genericMul__prime__1, $genericOne__prime__1) {
  $__fn = function($dictGenericSemiring1) use ($genericAdd__prime__1, $genericZero__prime__1, $genericMul__prime__1, $genericOne__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericAdd__prime__2 = (($GLOBALS['Data_Semiring_Generic_genericAdd__prime__'] ?? \Data\Semiring\Generic\phpurs_eval_thunk('Data_Semiring_Generic_genericAdd__prime__')))($dictGenericSemiring1);
$genericMul__prime__2 = (($GLOBALS['Data_Semiring_Generic_genericMul__prime__'] ?? \Data\Semiring\Generic\phpurs_eval_thunk('Data_Semiring_Generic_genericMul__prime__')))($dictGenericSemiring1);
    $__res = (($GLOBALS['Data_Semiring_Generic_GenericSemiring__dollar__Dict'] ?? \Data\Semiring\Generic\phpurs_eval_thunk('Data_Semiring_Generic_GenericSemiring__dollar__Dict')))((object)["genericAdd'" => (function() use ($genericAdd__prime__1, $genericAdd__prime__2) {
  $__body = function($v, $v1) use ($genericAdd__prime__1, $genericAdd__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->v0;
$b1 = ($__case_0)->v1;
$a2 = ($__case_1)->v0;
$b2 = ($__case_1)->v1;
return (($GLOBALS['Data_Generic_Rep_Product'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Product')))(($genericAdd__prime__1)($a1, $a2), ($genericAdd__prime__2)($b1, $b2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericAdd__prime__1, $genericAdd__prime__2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericZero'" => (($GLOBALS['Data_Generic_Rep_Product'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Product')))($genericZero__prime__1, (($GLOBALS['Data_Semiring_Generic_genericZero__prime__'] ?? \Data\Semiring\Generic\phpurs_eval_thunk('Data_Semiring_Generic_genericZero__prime__')))($dictGenericSemiring1)), "genericMul'" => (function() use ($genericMul__prime__1, $genericMul__prime__2) {
  $__body = function($v, $v1) use ($genericMul__prime__1, $genericMul__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->v0;
$b1 = ($__case_0)->v1;
$a2 = ($__case_1)->v0;
$b2 = ($__case_1)->v1;
return (($GLOBALS['Data_Generic_Rep_Product'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Product')))(($genericMul__prime__1)($a1, $a2), ($genericMul__prime__2)($b1, $b2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericMul__prime__1, $genericMul__prime__2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericOne'" => (($GLOBALS['Data_Generic_Rep_Product'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Product')))($genericOne__prime__1, (($GLOBALS['Data_Semiring_Generic_genericOne__prime__'] ?? \Data\Semiring\Generic\phpurs_eval_thunk('Data_Semiring_Generic_genericOne__prime__')))($dictGenericSemiring1))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Generic_genericSemiringProduct'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericSemiringProduct';

// Data_Semiring_Generic_genericAdd
function Data_Semiring_Generic_genericAdd($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericAdd';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$to = (($GLOBALS['Data_Generic_Rep_to'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_to')))($dictGeneric);
$from = (($GLOBALS['Data_Generic_Rep_from'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_from')))($dictGeneric);
    $__res = (function() use ($to, $from) {
  $__fn = function($dictGenericSemiring) use ($to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericAdd__prime__1 = (($GLOBALS['Data_Semiring_Generic_genericAdd__prime__'] ?? \Data\Semiring\Generic\phpurs_eval_thunk('Data_Semiring_Generic_genericAdd__prime__')))($dictGenericSemiring);
    $__res = (function() use ($to, $genericAdd__prime__1, $from) {
  $__fn = function($x, $y = null) use ($to, $genericAdd__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($to)(($genericAdd__prime__1)(($from)($x), ($from)($y)));
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
$GLOBALS['Data_Semiring_Generic_genericAdd'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericAdd';

