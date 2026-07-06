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
      case 'Data_Semiring_Generic_genericSemiringNoArguments': $v = (object)["genericAdd'" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($GLOBALS['__phpurs_data0_NoArguments'] ??= new Phpurs_Data0("NoArguments"));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericZero'" => ($GLOBALS['__phpurs_data0_NoArguments'] ??= new Phpurs_Data0("NoArguments")), "genericMul'" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($GLOBALS['__phpurs_data0_NoArguments'] ??= new Phpurs_Data0("NoArguments"));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericOne'" => ($GLOBALS['__phpurs_data0_NoArguments'] ??= new Phpurs_Data0("NoArguments"))]; break;
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
$__case_0 = $dictGeneric;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->to;
} else {
throw new \Exception("Pattern match failure");
};
$to = $__case_res_0;
    $__res = (function() use ($to) {
  $__fn = function($dictGenericSemiring) use ($to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericSemiring;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->genericZero__prime__;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($to)($__case_res_1);
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
$__case_0 = $dictSemiring;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
$add = $__case_res_0;
$__case_0 = $dictSemiring;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->mul;
} else {
throw new \Exception("Pattern match failure");
};
$mul = $__case_res_1;
$__case_0 = $dictSemiring;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->zero;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dictSemiring;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->one;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["genericAdd'" => (function() use ($add) {
  $__body = function($v, $v1) use ($add) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($add)($x, $y);
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
})(), "genericZero'" => $__case_res_2, "genericMul'" => (function() use ($mul) {
  $__body = function($v, $v1) use ($mul) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($mul)($x, $y);
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
})(), "genericOne'" => $__case_res_3];
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
$__case_0 = $dictGeneric;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->to;
} else {
throw new \Exception("Pattern match failure");
};
$to = $__case_res_0;
    $__res = (function() use ($to) {
  $__fn = function($dictGenericSemiring) use ($to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericSemiring;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->genericOne__prime__;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($to)($__case_res_1);
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
$__case_0 = $dictGeneric;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->to;
} else {
throw new \Exception("Pattern match failure");
};
$to = $__case_res_0;
$__case_0 = $dictGeneric;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->from;
} else {
throw new \Exception("Pattern match failure");
};
$from = $__case_res_1;
    $__res = (function() use ($to, $from) {
  $__fn = function($dictGenericSemiring) use ($to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericSemiring;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->genericMul__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericMul__prime__1 = $__case_res_2;
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
$__case_0 = $dictGenericSemiring;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->genericAdd__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericAdd__prime__1 = $__case_res_0;
$__case_0 = $dictGenericSemiring;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->genericMul__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericMul__prime__1 = $__case_res_1;
$__case_0 = $dictGenericSemiring;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->genericZero__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dictGenericSemiring;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->genericOne__prime__;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["genericAdd'" => (function() use ($genericAdd__prime__1) {
  $__body = function($v, $v1) use ($genericAdd__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($genericAdd__prime__1)($a1, $a2);
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
})(), "genericZero'" => $__case_res_2, "genericMul'" => (function() use ($genericMul__prime__1) {
  $__body = function($v, $v1) use ($genericMul__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($genericMul__prime__1)($a1, $a2);
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
})(), "genericOne'" => $__case_res_3];
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
$__case_0 = $dictGenericSemiring;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->genericAdd__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericAdd__prime__1 = $__case_res_0;
$__case_0 = $dictGenericSemiring;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->genericZero__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericZero__prime__1 = $__case_res_1;
$__case_0 = $dictGenericSemiring;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->genericMul__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericMul__prime__1 = $__case_res_2;
$__case_0 = $dictGenericSemiring;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->genericOne__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericOne__prime__1 = $__case_res_3;
    $__res = (function() use ($genericAdd__prime__1, $genericZero__prime__1, $genericMul__prime__1, $genericOne__prime__1) {
  $__fn = function($dictGenericSemiring1) use ($genericAdd__prime__1, $genericZero__prime__1, $genericMul__prime__1, $genericOne__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericSemiring1;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->genericAdd__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericAdd__prime__2 = $__case_res_4;
$__case_0 = $dictGenericSemiring1;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->genericMul__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericMul__prime__2 = $__case_res_5;
$__case_0 = $dictGenericSemiring1;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->genericZero__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dictGenericSemiring1;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->genericOne__prime__;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["genericAdd'" => (function() use ($genericAdd__prime__1, $genericAdd__prime__2) {
  $__body = function($v, $v1) use ($genericAdd__prime__1, $genericAdd__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->v0;
$b1 = ($__case_0)->v1;
$a2 = ($__case_1)->v0;
$b2 = ($__case_1)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Product", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($genericAdd__prime__1)($a1, $a2), ($genericAdd__prime__2)($b1, $b2));
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
})(), "genericZero'" => ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Product", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($genericZero__prime__1, $__case_res_6), "genericMul'" => (function() use ($genericMul__prime__1, $genericMul__prime__2) {
  $__body = function($v, $v1) use ($genericMul__prime__1, $genericMul__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->v0;
$b1 = ($__case_0)->v1;
$a2 = ($__case_1)->v0;
$b2 = ($__case_1)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Product", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($genericMul__prime__1)($a1, $a2), ($genericMul__prime__2)($b1, $b2));
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
})(), "genericOne'" => ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Product", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($genericOne__prime__1, $__case_res_7)];
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
$__case_0 = $dictGeneric;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->to;
} else {
throw new \Exception("Pattern match failure");
};
$to = $__case_res_0;
$__case_0 = $dictGeneric;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->from;
} else {
throw new \Exception("Pattern match failure");
};
$from = $__case_res_1;
    $__res = (function() use ($to, $from) {
  $__fn = function($dictGenericSemiring) use ($to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericSemiring;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->genericAdd__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericAdd__prime__1 = $__case_res_2;
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

