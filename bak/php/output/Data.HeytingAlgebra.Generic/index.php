<?php

namespace Data\HeytingAlgebra\Generic;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra.Generic/index.php';
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
      case 'Data_HeytingAlgebra_Generic_genericHeytingAlgebraNoArguments': $v = (object)["genericFF'" => ($GLOBALS['__phpurs_data0_NoArguments'] ??= new Phpurs_Data0("NoArguments")), "genericTT'" => ($GLOBALS['__phpurs_data0_NoArguments'] ??= new Phpurs_Data0("NoArguments")), "genericImplies'" => (function() {
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
})(), "genericConj'" => (function() {
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
})(), "genericDisj'" => (function() {
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
})(), "genericNot'" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['__phpurs_data0_NoArguments'] ??= new Phpurs_Data0("NoArguments"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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


// Data_HeytingAlgebra_Generic_GenericHeytingAlgebra$Dict
function Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict';

// Data_HeytingAlgebra_Generic_genericTT'
function Data_HeytingAlgebra_Generic_genericTT__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericTT__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericTT__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericTT__prime__'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericTT__prime__';

// Data_HeytingAlgebra_Generic_genericTT
function Data_HeytingAlgebra_Generic_genericTT($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericTT';
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
  $__fn = function($dictGenericHeytingAlgebra) use ($to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericHeytingAlgebra;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->genericTT__prime__;
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericTT'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericTT';

// Data_HeytingAlgebra_Generic_genericNot'
function Data_HeytingAlgebra_Generic_genericNot__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericNot__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericNot__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericNot__prime__'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericNot__prime__';

// Data_HeytingAlgebra_Generic_genericNot
function Data_HeytingAlgebra_Generic_genericNot($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericNot';
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
  $__fn = function($dictGenericHeytingAlgebra) use ($to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericHeytingAlgebra;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->genericNot__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericNot__prime__1 = $__case_res_2;
    $__res = (function() use ($to, $genericNot__prime__1, $from) {
  $__fn = function($x) use ($to, $genericNot__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($to)(($genericNot__prime__1)(($from)($x)));
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericNot'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericNot';

// Data_HeytingAlgebra_Generic_genericImplies'
function Data_HeytingAlgebra_Generic_genericImplies__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericImplies__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericImplies__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericImplies__prime__'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericImplies__prime__';

// Data_HeytingAlgebra_Generic_genericImplies
function Data_HeytingAlgebra_Generic_genericImplies($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericImplies';
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
  $__fn = function($dictGenericHeytingAlgebra) use ($to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericHeytingAlgebra;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->genericImplies__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericImplies__prime__1 = $__case_res_2;
    $__res = (function() use ($to, $genericImplies__prime__1, $from) {
  $__fn = function($x, $y = null) use ($to, $genericImplies__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($to)(($genericImplies__prime__1)(($from)($x), ($from)($y)));
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericImplies'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericImplies';


// Data_HeytingAlgebra_Generic_genericHeytingAlgebraArgument
function Data_HeytingAlgebra_Generic_genericHeytingAlgebraArgument($dictHeytingAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericHeytingAlgebraArgument';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictHeytingAlgebra;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->implies;
} else {
throw new \Exception("Pattern match failure");
};
$implies = $__case_res_0;
$__case_0 = $dictHeytingAlgebra;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->conj;
} else {
throw new \Exception("Pattern match failure");
};
$conj = $__case_res_1;
$__case_0 = $dictHeytingAlgebra;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->disj;
} else {
throw new \Exception("Pattern match failure");
};
$disj = $__case_res_2;
$__case_0 = $dictHeytingAlgebra;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->not;
} else {
throw new \Exception("Pattern match failure");
};
$not = $__case_res_3;
$__case_0 = $dictHeytingAlgebra;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->ff;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dictHeytingAlgebra;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->tt;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["genericFF'" => $__case_res_4, "genericTT'" => $__case_res_5, "genericImplies'" => (function() use ($implies) {
  $__body = function($v, $v1) use ($implies) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($implies)($x, $y);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($implies, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericConj'" => (function() use ($conj) {
  $__body = function($v, $v1) use ($conj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($conj)($x, $y);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($conj, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericDisj'" => (function() use ($disj) {
  $__body = function($v, $v1) use ($disj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($disj)($x, $y);
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
})(), "genericNot'" => (function() use ($not) {
  $__body = function($v) use ($not) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($not)($x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($not, $__body, &$__fn) {
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericHeytingAlgebraArgument'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericHeytingAlgebraArgument';

// Data_HeytingAlgebra_Generic_genericFF'
function Data_HeytingAlgebra_Generic_genericFF__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericFF__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericFF__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericFF__prime__'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericFF__prime__';

// Data_HeytingAlgebra_Generic_genericFF
function Data_HeytingAlgebra_Generic_genericFF($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericFF';
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
  $__fn = function($dictGenericHeytingAlgebra) use ($to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericHeytingAlgebra;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->genericFF__prime__;
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericFF'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericFF';

// Data_HeytingAlgebra_Generic_genericDisj'
function Data_HeytingAlgebra_Generic_genericDisj__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericDisj__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericDisj__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericDisj__prime__'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericDisj__prime__';

// Data_HeytingAlgebra_Generic_genericDisj
function Data_HeytingAlgebra_Generic_genericDisj($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericDisj';
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
  $__fn = function($dictGenericHeytingAlgebra) use ($to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericHeytingAlgebra;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->genericDisj__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericDisj__prime__1 = $__case_res_2;
    $__res = (function() use ($to, $genericDisj__prime__1, $from) {
  $__fn = function($x, $y = null) use ($to, $genericDisj__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($to)(($genericDisj__prime__1)(($from)($x), ($from)($y)));
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericDisj'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericDisj';

// Data_HeytingAlgebra_Generic_genericConj'
function Data_HeytingAlgebra_Generic_genericConj__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericConj__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericConj__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericConj__prime__'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericConj__prime__';

// Data_HeytingAlgebra_Generic_genericHeytingAlgebraConstructor
function Data_HeytingAlgebra_Generic_genericHeytingAlgebraConstructor($dictGenericHeytingAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericHeytingAlgebraConstructor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericHeytingAlgebra;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->genericImplies__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericImplies__prime__1 = $__case_res_0;
$__case_0 = $dictGenericHeytingAlgebra;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->genericConj__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericConj__prime__1 = $__case_res_1;
$__case_0 = $dictGenericHeytingAlgebra;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->genericDisj__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericDisj__prime__1 = $__case_res_2;
$__case_0 = $dictGenericHeytingAlgebra;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->genericNot__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericNot__prime__1 = $__case_res_3;
$__case_0 = $dictGenericHeytingAlgebra;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->genericFF__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dictGenericHeytingAlgebra;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->genericTT__prime__;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["genericFF'" => $__case_res_4, "genericTT'" => $__case_res_5, "genericImplies'" => (function() use ($genericImplies__prime__1) {
  $__body = function($v, $v1) use ($genericImplies__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($genericImplies__prime__1)($a1, $a2);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericImplies__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericConj'" => (function() use ($genericConj__prime__1) {
  $__body = function($v, $v1) use ($genericConj__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($genericConj__prime__1)($a1, $a2);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericConj__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericDisj'" => (function() use ($genericDisj__prime__1) {
  $__body = function($v, $v1) use ($genericDisj__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($genericDisj__prime__1)($a1, $a2);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericDisj__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericNot'" => (function() use ($genericNot__prime__1) {
  $__body = function($v) use ($genericNot__prime__1) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($genericNot__prime__1)($a);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($genericNot__prime__1, $__body, &$__fn) {
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericHeytingAlgebraConstructor'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericHeytingAlgebraConstructor';

// Data_HeytingAlgebra_Generic_genericHeytingAlgebraProduct
function Data_HeytingAlgebra_Generic_genericHeytingAlgebraProduct($dictGenericHeytingAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericHeytingAlgebraProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericHeytingAlgebra;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->genericFF__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericFF__prime__1 = $__case_res_0;
$__case_0 = $dictGenericHeytingAlgebra;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->genericTT__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericTT__prime__1 = $__case_res_1;
$__case_0 = $dictGenericHeytingAlgebra;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->genericImplies__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericImplies__prime__1 = $__case_res_2;
$__case_0 = $dictGenericHeytingAlgebra;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->genericConj__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericConj__prime__1 = $__case_res_3;
$__case_0 = $dictGenericHeytingAlgebra;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->genericDisj__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericDisj__prime__1 = $__case_res_4;
$__case_0 = $dictGenericHeytingAlgebra;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->genericNot__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericNot__prime__1 = $__case_res_5;
    $__res = (function() use ($genericFF__prime__1, $genericTT__prime__1, $genericImplies__prime__1, $genericConj__prime__1, $genericDisj__prime__1, $genericNot__prime__1) {
  $__fn = function($dictGenericHeytingAlgebra1) use ($genericFF__prime__1, $genericTT__prime__1, $genericImplies__prime__1, $genericConj__prime__1, $genericDisj__prime__1, $genericNot__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericHeytingAlgebra1;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->genericImplies__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericImplies__prime__2 = $__case_res_6;
$__case_0 = $dictGenericHeytingAlgebra1;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->genericConj__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericConj__prime__2 = $__case_res_7;
$__case_0 = $dictGenericHeytingAlgebra1;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->genericDisj__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericDisj__prime__2 = $__case_res_8;
$__case_0 = $dictGenericHeytingAlgebra1;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->genericNot__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericNot__prime__2 = $__case_res_9;
$__case_0 = $dictGenericHeytingAlgebra1;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->genericFF__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dictGenericHeytingAlgebra1;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->genericTT__prime__;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["genericFF'" => ((function() {
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
})())($genericFF__prime__1, $__case_res_10), "genericTT'" => ((function() {
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
})())($genericTT__prime__1, $__case_res_11), "genericImplies'" => (function() use ($genericImplies__prime__1, $genericImplies__prime__2) {
  $__body = function($v, $v1) use ($genericImplies__prime__1, $genericImplies__prime__2) {
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
})())(($genericImplies__prime__1)($a1, $a2), ($genericImplies__prime__2)($b1, $b2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericImplies__prime__1, $genericImplies__prime__2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericConj'" => (function() use ($genericConj__prime__1, $genericConj__prime__2) {
  $__body = function($v, $v1) use ($genericConj__prime__1, $genericConj__prime__2) {
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
})())(($genericConj__prime__1)($a1, $a2), ($genericConj__prime__2)($b1, $b2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericConj__prime__1, $genericConj__prime__2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericDisj'" => (function() use ($genericDisj__prime__1, $genericDisj__prime__2) {
  $__body = function($v, $v1) use ($genericDisj__prime__1, $genericDisj__prime__2) {
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
})())(($genericDisj__prime__1)($a1, $a2), ($genericDisj__prime__2)($b1, $b2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericDisj__prime__1, $genericDisj__prime__2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericNot'" => (function() use ($genericNot__prime__1, $genericNot__prime__2) {
  $__body = function($v) use ($genericNot__prime__1, $genericNot__prime__2) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Product":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
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
})())(($genericNot__prime__1)($a), ($genericNot__prime__2)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($genericNot__prime__1, $genericNot__prime__2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericHeytingAlgebraProduct'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericHeytingAlgebraProduct';

// Data_HeytingAlgebra_Generic_genericConj
function Data_HeytingAlgebra_Generic_genericConj($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericConj';
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
  $__fn = function($dictGenericHeytingAlgebra) use ($to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericHeytingAlgebra;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->genericConj__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericConj__prime__1 = $__case_res_2;
    $__res = (function() use ($to, $genericConj__prime__1, $from) {
  $__fn = function($x, $y = null) use ($to, $genericConj__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($to)(($genericConj__prime__1)(($from)($x), ($from)($y)));
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericConj'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericConj';

