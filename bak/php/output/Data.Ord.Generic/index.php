<?php

namespace Data\Ord\Generic;

require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ord.Generic/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
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
      case 'Data_Ord_Generic_genericOrdNoConstructors': $v = (object)["genericCompare'" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Ord_Generic_genericOrdNoArguments': $v = (object)["genericCompare'" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Ord_Generic_GenericOrd$Dict
function Data_Ord_Generic_GenericOrd__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_Generic_GenericOrd__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_Generic_GenericOrd__dollar__Dict'] = __NAMESPACE__ . '\\Data_Ord_Generic_GenericOrd__dollar__Dict';



// Data_Ord_Generic_genericOrdArgument
function Data_Ord_Generic_genericOrdArgument($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_Generic_genericOrdArgument';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (object)["genericCompare'" => (function() use ($compare) {
  $__body = function($v, $v1) use ($compare) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($compare)($a1, $a2);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($compare, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_Generic_genericOrdArgument'] = __NAMESPACE__ . '\\Data_Ord_Generic_genericOrdArgument';

// Data_Ord_Generic_genericCompare'
function Data_Ord_Generic_genericCompare__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_Generic_genericCompare__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericCompare__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_Generic_genericCompare__prime__'] = __NAMESPACE__ . '\\Data_Ord_Generic_genericCompare__prime__';

// Data_Ord_Generic_genericOrdConstructor
function Data_Ord_Generic_genericOrdConstructor($dictGenericOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_Generic_genericOrdConstructor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->genericCompare__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericCompare__prime__1 = $__case_res_0;
    $__res = (object)["genericCompare'" => (function() use ($genericCompare__prime__1) {
  $__body = function($v, $v1) use ($genericCompare__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($genericCompare__prime__1)($a1, $a2);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericCompare__prime__1, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_Generic_genericOrdConstructor'] = __NAMESPACE__ . '\\Data_Ord_Generic_genericOrdConstructor';

// Data_Ord_Generic_genericOrdProduct
function Data_Ord_Generic_genericOrdProduct($dictGenericOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_Generic_genericOrdProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->genericCompare__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericCompare__prime__1 = $__case_res_0;
    $__res = (function() use ($genericCompare__prime__1) {
  $__fn = function($dictGenericOrd1) use ($genericCompare__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericOrd1;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->genericCompare__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericCompare__prime__2 = $__case_res_1;
    $__res = (object)["genericCompare'" => (function() use ($genericCompare__prime__1, $genericCompare__prime__2) {
  $__body = function($v, $v1) use ($genericCompare__prime__1, $genericCompare__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->v0;
$b1 = ($__case_0)->v1;
$a2 = ($__case_1)->v0;
$b2 = ($__case_1)->v1;
$v2 = ($genericCompare__prime__1)($a1, $a2);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "EQ":
return ($genericCompare__prime__2)($b1, $b2);
break;
default:
$other = $__case_0;
return $other;
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericCompare__prime__1, $genericCompare__prime__2, $__body, &$__fn) {
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_Generic_genericOrdProduct'] = __NAMESPACE__ . '\\Data_Ord_Generic_genericOrdProduct';

// Data_Ord_Generic_genericOrdSum
function Data_Ord_Generic_genericOrdSum($dictGenericOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_Generic_genericOrdSum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->genericCompare__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericCompare__prime__1 = $__case_res_0;
    $__res = (function() use ($genericCompare__prime__1) {
  $__fn = function($dictGenericOrd1) use ($genericCompare__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericOrd1;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->genericCompare__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericCompare__prime__2 = $__case_res_1;
    $__res = (object)["genericCompare'" => (function() use ($genericCompare__prime__1, $genericCompare__prime__2) {
  $__body = function($v, $v1) use ($genericCompare__prime__1, $genericCompare__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Inl") && (($__case_1)->tag === "Inl"))) {
$a1 = ($__case_0)->v0;
$a2 = ($__case_1)->v0;
return ($genericCompare__prime__1)($a1, $a2);
} else {
if (((($__case_0)->tag === "Inr") && (($__case_1)->tag === "Inr"))) {
$b1 = ($__case_0)->v0;
$b2 = ($__case_1)->v0;
return ($genericCompare__prime__2)($b1, $b2);
} else {
if (((($__case_0)->tag === "Inl") && (($__case_1)->tag === "Inr"))) {
return ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
} else {
if (((($__case_0)->tag === "Inr") && (($__case_1)->tag === "Inl"))) {
return ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
  };
  $__fn = function($v, $v1 = null) use ($genericCompare__prime__1, $genericCompare__prime__2, $__body, &$__fn) {
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_Generic_genericOrdSum'] = __NAMESPACE__ . '\\Data_Ord_Generic_genericOrdSum';

// Data_Ord_Generic_genericCompare
function Data_Ord_Generic_genericCompare($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_Generic_genericCompare';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGeneric;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->from;
} else {
throw new \Exception("Pattern match failure");
};
$from = $__case_res_0;
    $__res = (function() use ($from) {
  $__fn = function($dictGenericOrd) use ($from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericOrd;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->genericCompare__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericCompare__prime__1 = $__case_res_1;
    $__res = (function() use ($genericCompare__prime__1, $from) {
  $__fn = function($x, $y = null) use ($genericCompare__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($genericCompare__prime__1)(($from)($x), ($from)($y));
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
$GLOBALS['Data_Ord_Generic_genericCompare'] = __NAMESPACE__ . '\\Data_Ord_Generic_genericCompare';

