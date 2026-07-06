<?php

namespace Data\Enum\Generic;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded.Generic/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Enum.Generic/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
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
      case 'Data_Enum_Generic_compose': $v = (function() {
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
      case 'Data_Enum_Generic_map': $v = (function() {
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
      case 'Data_Enum_Generic_unwrap': $v = (($GLOBALS['Data_Newtype_unwrap'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Enum_Generic_add': $v = (function() {
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
      case 'Data_Enum_Generic_conj': $v = (function() {
  $__case_0 = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->conj;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Enum_Generic_greaterThanOrEq': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  $compare3 = $__case_res_0;
  return (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return false;
break;
default:
return true;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Enum_Generic_lessThan': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  $compare3 = $__case_res_0;
  return (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return true;
break;
default:
return false;
break;
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a2) use ($a1, &$__fn) { return $__fn($a1, $a2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Enum_Generic_sub': $v = (function() {
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
      case 'Data_Enum_Generic_mul': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semiring_semiringInt'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->mul;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Enum_Generic_apply': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Maybe_applyMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_applyMaybe'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Enum_Generic_div': $v = (function() {
  $__case_0 = ($GLOBALS['Data_EuclideanRing_euclideanRingInt'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_euclideanRingInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->div;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Enum_Generic_mod': $v = (function() {
  $__case_0 = ($GLOBALS['Data_EuclideanRing_euclideanRingInt'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_euclideanRingInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->mod;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Enum_Generic_eq': $v = (function() {
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
      case 'Data_Enum_Generic_genericEnumNoArguments': $v = (object)["genericPred'" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericSucc'" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Enum_Generic_genericBoundedEnumNoArguments': $v = (object)["genericCardinality'" => 1, "genericToEnum'" => (function() {
  $__body = function($i) {
    $__global_Data_Enum_Generic_eq = ($GLOBALS['Data_Enum_Generic_eq'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_eq'));
    $__case_0 = ($__global_Data_Enum_Generic_eq)($i, 0);
    switch ($__case_0) {
case true:
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
})())(($GLOBALS['__phpurs_data0_NoArguments'] ??= new Phpurs_Data0("NoArguments")));
break;
default:
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
};
  };
  $__fn = function($i) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($i);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericFromEnum'" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = 0;
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















// Data_Enum_Generic_GenericEnum$Dict
function Data_Enum_Generic_GenericEnum__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_GenericEnum__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_GenericEnum__dollar__Dict'] = __NAMESPACE__ . '\\Data_Enum_Generic_GenericEnum__dollar__Dict';

// Data_Enum_Generic_GenericBoundedEnum$Dict
function Data_Enum_Generic_GenericBoundedEnum__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_GenericBoundedEnum__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_GenericBoundedEnum__dollar__Dict'] = __NAMESPACE__ . '\\Data_Enum_Generic_GenericBoundedEnum__dollar__Dict';

// Data_Enum_Generic_genericToEnum'
function Data_Enum_Generic_genericToEnum__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericToEnum__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericToEnum__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericToEnum__prime__'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericToEnum__prime__';

// Data_Enum_Generic_genericToEnum
function Data_Enum_Generic_genericToEnum($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericToEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_Generic_compose = ($GLOBALS['Data_Enum_Generic_compose'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_compose'));
$__global_Data_Enum_Generic_map = ($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map'));
$__case_0 = $dictGeneric;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->to;
} else {
throw new \Exception("Pattern match failure");
};
$to = $__case_res_0;
    $__res = (function() use ($__global_Data_Enum_Generic_compose, $__global_Data_Enum_Generic_map, $to) {
  $__fn = function($dictGenericBoundedEnum) use ($__global_Data_Enum_Generic_compose, $__global_Data_Enum_Generic_map, $to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericBoundedEnum;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->genericToEnum__prime__;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Enum_Generic_compose)(($__global_Data_Enum_Generic_map)($to), $__case_res_1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericToEnum'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericToEnum';

// Data_Enum_Generic_genericSucc'
function Data_Enum_Generic_genericSucc__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericSucc__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericSucc__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericSucc__prime__'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericSucc__prime__';

// Data_Enum_Generic_genericSucc
function Data_Enum_Generic_genericSucc($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericSucc';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_Generic_compose = ($GLOBALS['Data_Enum_Generic_compose'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_compose'));
$__global_Data_Enum_Generic_map = ($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map'));
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
    $__res = (function() use ($__global_Data_Enum_Generic_compose, $__global_Data_Enum_Generic_map, $to, $from) {
  $__fn = function($dictGenericEnum) use ($__global_Data_Enum_Generic_compose, $__global_Data_Enum_Generic_map, $to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericEnum;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->genericSucc__prime__;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Enum_Generic_compose)(($__global_Data_Enum_Generic_map)($to), ($__global_Data_Enum_Generic_compose)($__case_res_2, $from));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericSucc'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericSucc';

// Data_Enum_Generic_genericPred'
function Data_Enum_Generic_genericPred__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericPred__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericPred__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericPred__prime__'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericPred__prime__';

// Data_Enum_Generic_genericPred
function Data_Enum_Generic_genericPred($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericPred';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_Generic_compose = ($GLOBALS['Data_Enum_Generic_compose'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_compose'));
$__global_Data_Enum_Generic_map = ($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map'));
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
    $__res = (function() use ($__global_Data_Enum_Generic_compose, $__global_Data_Enum_Generic_map, $to, $from) {
  $__fn = function($dictGenericEnum) use ($__global_Data_Enum_Generic_compose, $__global_Data_Enum_Generic_map, $to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericEnum;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->genericPred__prime__;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Enum_Generic_compose)(($__global_Data_Enum_Generic_map)($to), ($__global_Data_Enum_Generic_compose)($__case_res_2, $from));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericPred'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericPred';

// Data_Enum_Generic_genericFromEnum'
function Data_Enum_Generic_genericFromEnum__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericFromEnum__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericFromEnum__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericFromEnum__prime__'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericFromEnum__prime__';

// Data_Enum_Generic_genericFromEnum
function Data_Enum_Generic_genericFromEnum($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericFromEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_Generic_compose = ($GLOBALS['Data_Enum_Generic_compose'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_compose'));
$__case_0 = $dictGeneric;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->from;
} else {
throw new \Exception("Pattern match failure");
};
$from = $__case_res_0;
    $__res = (function() use ($__global_Data_Enum_Generic_compose, $from) {
  $__fn = function($dictGenericBoundedEnum) use ($__global_Data_Enum_Generic_compose, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericBoundedEnum;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->genericFromEnum__prime__;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Enum_Generic_compose)($__case_res_1, $from);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericFromEnum'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericFromEnum';

// Data_Enum_Generic_genericEnumSum
function Data_Enum_Generic_genericEnumSum($dictGenericEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericEnumSum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_Generic_map = ($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map'));
$__case_0 = $dictGenericEnum;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->genericPred__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericPred__prime__1 = $__case_res_0;
$__case_0 = $dictGenericEnum;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->genericSucc__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericSucc__prime__1 = $__case_res_1;
    $__res = (function() use ($__global_Data_Enum_Generic_map, $genericPred__prime__1, $genericSucc__prime__1) {
  $__fn = function($dictGenericTop) use ($__global_Data_Enum_Generic_map, $genericPred__prime__1, $genericSucc__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericTop;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->genericTop__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericTop__prime__ = $__case_res_2;
    $__res = (function() use ($__global_Data_Enum_Generic_map, $genericPred__prime__1, $genericTop__prime__, $genericSucc__prime__1) {
  $__fn = function($dictGenericEnum1) use ($__global_Data_Enum_Generic_map, $genericPred__prime__1, $genericTop__prime__, $genericSucc__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericEnum1;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->genericPred__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericPred__prime__2 = $__case_res_3;
$__case_0 = $dictGenericEnum1;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->genericSucc__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericSucc__prime__2 = $__case_res_4;
    $__res = (function() use ($__global_Data_Enum_Generic_map, $genericPred__prime__1, $genericPred__prime__2, $genericTop__prime__, $genericSucc__prime__1, $genericSucc__prime__2) {
  $__fn = function($dictGenericBottom) use ($__global_Data_Enum_Generic_map, $genericPred__prime__1, $genericPred__prime__2, $genericTop__prime__, $genericSucc__prime__1, $genericSucc__prime__2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericBottom;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->genericBottom__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericBottom__prime__ = $__case_res_5;
    $__res = (object)["genericPred'" => (function() use ($__global_Data_Enum_Generic_map, $genericPred__prime__1, $genericPred__prime__2, $genericTop__prime__) {
  $__body = function($v) use ($__global_Data_Enum_Generic_map, $genericPred__prime__1, $genericPred__prime__2, $genericTop__prime__) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Inl":
$a = ($__case_0)->v0;
return ($__global_Data_Enum_Generic_map)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Inl", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($genericPred__prime__1)($a));
break;
case "Inr":
$b = ($__case_0)->v0;
$v1 = ($genericPred__prime__2)($b);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Nothing":
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
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Inl", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($genericTop__prime__));
break;
case "Just":
$b__prime__ = ($__case_0)->v0;
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
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Inr", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($b__prime__));
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
  $__fn = function($v) use ($__global_Data_Enum_Generic_map, $genericPred__prime__1, $genericPred__prime__2, $genericTop__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericSucc'" => (function() use ($genericSucc__prime__1, $genericBottom__prime__, $__global_Data_Enum_Generic_map, $genericSucc__prime__2) {
  $__body = function($v) use ($genericSucc__prime__1, $genericBottom__prime__, $__global_Data_Enum_Generic_map, $genericSucc__prime__2) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Inl":
$a = ($__case_0)->v0;
$v1 = ($genericSucc__prime__1)($a);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Nothing":
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
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Inr", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($genericBottom__prime__));
break;
case "Just":
$a__prime__ = ($__case_0)->v0;
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
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Inl", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($a__prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
case "Inr":
$b = ($__case_0)->v0;
return ($__global_Data_Enum_Generic_map)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Inr", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($genericSucc__prime__2)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($genericSucc__prime__1, $genericBottom__prime__, $__global_Data_Enum_Generic_map, $genericSucc__prime__2, $__body, &$__fn) {
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
$GLOBALS['Data_Enum_Generic_genericEnumSum'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericEnumSum';

// Data_Enum_Generic_genericEnumProduct
function Data_Enum_Generic_genericEnumProduct($dictGenericEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericEnumProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_Generic_map = ($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__case_0 = $dictGenericEnum;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->genericPred__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericPred__prime__1 = $__case_res_0;
$__case_0 = $dictGenericEnum;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->genericSucc__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericSucc__prime__1 = $__case_res_1;
    $__res = (function() use ($__global_Data_Enum_Generic_map, $__global_Data_Function_flip, $genericPred__prime__1, $genericSucc__prime__1) {
  $__fn = function($dictGenericTop, $dictGenericBottom = null, $dictGenericEnum1 = null) use ($__global_Data_Enum_Generic_map, $__global_Data_Function_flip, $genericPred__prime__1, $genericSucc__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($dictGenericEnum1) use ($dictGenericTop, $dictGenericBottom, &$__fn) { return $__fn($dictGenericTop, $dictGenericBottom, $dictGenericEnum1); };
    if ($__num === 1) return function($dictGenericBottom, $dictGenericEnum1 = null) use ($dictGenericTop, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictGenericTop, $dictGenericBottom, $dictGenericEnum1);
      if ($__num2 === 1) return function($dictGenericEnum1) use ($dictGenericTop, $dictGenericBottom, &$__fn) { return $__fn($dictGenericTop, $dictGenericBottom, $dictGenericEnum1); };
      return phpurs_curry_fallback($__fn, [$dictGenericTop], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__case_0 = $dictGenericEnum1;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->genericPred__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericPred__prime__2 = $__case_res_2;
$__case_0 = $dictGenericEnum1;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->genericSucc__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericSucc__prime__2 = $__case_res_3;
    $__res = (function() use ($genericPred__prime__2, $__global_Data_Enum_Generic_map, $__global_Data_Function_flip, $genericPred__prime__1, $genericSucc__prime__2, $genericSucc__prime__1) {
  $__fn = function($dictGenericTop1) use ($genericPred__prime__2, $__global_Data_Enum_Generic_map, $__global_Data_Function_flip, $genericPred__prime__1, $genericSucc__prime__2, $genericSucc__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericTop1;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->genericTop__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericTop__prime__ = $__case_res_4;
    $__res = (function() use ($genericPred__prime__2, $__global_Data_Enum_Generic_map, $__global_Data_Function_flip, $genericTop__prime__, $genericPred__prime__1, $genericSucc__prime__2, $genericSucc__prime__1) {
  $__fn = function($dictGenericBottom1) use ($genericPred__prime__2, $__global_Data_Enum_Generic_map, $__global_Data_Function_flip, $genericTop__prime__, $genericPred__prime__1, $genericSucc__prime__2, $genericSucc__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericBottom1;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->genericBottom__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericBottom__prime__ = $__case_res_5;
    $__res = (object)["genericPred'" => (function() use ($genericPred__prime__2, $__global_Data_Enum_Generic_map, $__global_Data_Function_flip, $genericTop__prime__, $genericPred__prime__1) {
  $__body = function($v) use ($genericPred__prime__2, $__global_Data_Enum_Generic_map, $__global_Data_Function_flip, $genericTop__prime__, $genericPred__prime__1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Product":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
$v1 = ($genericPred__prime__2)($b);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Just":
$p = ($__case_0)->v0;
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
    $__res = new Phpurs_Data2("Product", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, $p));
break;
case "Nothing":
return ($__global_Data_Enum_Generic_map)(($__global_Data_Function_flip)((function() {
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
})(), $genericTop__prime__), ($genericPred__prime__1)($a));
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
  $__fn = function($v) use ($genericPred__prime__2, $__global_Data_Enum_Generic_map, $__global_Data_Function_flip, $genericTop__prime__, $genericPred__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericSucc'" => (function() use ($genericSucc__prime__2, $__global_Data_Enum_Generic_map, $__global_Data_Function_flip, $genericBottom__prime__, $genericSucc__prime__1) {
  $__body = function($v) use ($genericSucc__prime__2, $__global_Data_Enum_Generic_map, $__global_Data_Function_flip, $genericBottom__prime__, $genericSucc__prime__1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Product":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
$v1 = ($genericSucc__prime__2)($b);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Just":
$s = ($__case_0)->v0;
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
    $__res = new Phpurs_Data2("Product", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a, $s));
break;
case "Nothing":
return ($__global_Data_Enum_Generic_map)(($__global_Data_Function_flip)((function() {
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
})(), $genericBottom__prime__), ($genericSucc__prime__1)($a));
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
  $__fn = function($v) use ($genericSucc__prime__2, $__global_Data_Enum_Generic_map, $__global_Data_Function_flip, $genericBottom__prime__, $genericSucc__prime__1, $__body, &$__fn) {
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericEnumProduct'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericEnumProduct';


// Data_Enum_Generic_genericEnumConstructor
function Data_Enum_Generic_genericEnumConstructor($dictGenericEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericEnumConstructor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_Generic_map = ($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map'));
$__global_Data_Generic_Rep_Constructor = ($GLOBALS['Data_Generic_Rep_Constructor'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Constructor'));
$__case_0 = $dictGenericEnum;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->genericPred__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericPred__prime__1 = $__case_res_0;
$__case_0 = $dictGenericEnum;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->genericSucc__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericSucc__prime__1 = $__case_res_1;
    $__res = (object)["genericPred'" => (function() use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Constructor, $genericPred__prime__1) {
  $__body = function($v) use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Constructor, $genericPred__prime__1) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($__global_Data_Enum_Generic_map)($__global_Data_Generic_Rep_Constructor, ($genericPred__prime__1)($a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Constructor, $genericPred__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericSucc'" => (function() use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Constructor, $genericSucc__prime__1) {
  $__body = function($v) use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Constructor, $genericSucc__prime__1) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($__global_Data_Enum_Generic_map)($__global_Data_Generic_Rep_Constructor, ($genericSucc__prime__1)($a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Constructor, $genericSucc__prime__1, $__body, &$__fn) {
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
$GLOBALS['Data_Enum_Generic_genericEnumConstructor'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericEnumConstructor';

// Data_Enum_Generic_genericEnumArgument
function Data_Enum_Generic_genericEnumArgument($dictEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericEnumArgument';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_Generic_map = ($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map'));
$__global_Data_Generic_Rep_Argument = ($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument'));
$__case_0 = $dictEnum;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pred;
} else {
throw new \Exception("Pattern match failure");
};
$pred = $__case_res_0;
$__case_0 = $dictEnum;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->succ;
} else {
throw new \Exception("Pattern match failure");
};
$succ = $__case_res_1;
    $__res = (object)["genericPred'" => (function() use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Argument, $pred) {
  $__body = function($v) use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Argument, $pred) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($__global_Data_Enum_Generic_map)($__global_Data_Generic_Rep_Argument, ($pred)($a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Argument, $pred, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericSucc'" => (function() use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Argument, $succ) {
  $__body = function($v) use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Argument, $succ) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($__global_Data_Enum_Generic_map)($__global_Data_Generic_Rep_Argument, ($succ)($a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Argument, $succ, $__body, &$__fn) {
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
$GLOBALS['Data_Enum_Generic_genericEnumArgument'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericEnumArgument';

// Data_Enum_Generic_genericCardinality'
function Data_Enum_Generic_genericCardinality__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericCardinality__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericCardinality__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericCardinality__prime__'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericCardinality__prime__';

// Data_Enum_Generic_genericCardinality
function Data_Enum_Generic_genericCardinality($dictGeneric, $dictGenericBoundedEnum = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericCardinality';
  if ($__num < 2) {
    if ($__num === 1) return function($dictGenericBoundedEnum) use ($dictGeneric, $__fn) { return $__fn($dictGeneric, $dictGenericBoundedEnum); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Enum_Generic_unwrap = ($GLOBALS['Data_Enum_Generic_unwrap'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_unwrap'));
$__case_0 = $dictGenericBoundedEnum;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->genericCardinality__prime__;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Enum_Generic_unwrap)($__case_res_0);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericCardinality'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericCardinality';

// Data_Enum_Generic_genericBoundedEnumSum
function Data_Enum_Generic_genericBoundedEnumSum($dictGenericBoundedEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericBoundedEnumSum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_Generic_add = ($GLOBALS['Data_Enum_Generic_add'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_add'));
$__global_Data_Enum_Generic_unwrap = ($GLOBALS['Data_Enum_Generic_unwrap'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_unwrap'));
$__case_0 = $dictGenericBoundedEnum;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->genericCardinality__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericCardinality__prime__1 = $__case_res_0;
$__case_0 = $dictGenericBoundedEnum;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->genericToEnum__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericToEnum__prime__1 = $__case_res_1;
$__case_0 = $dictGenericBoundedEnum;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->genericFromEnum__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericFromEnum__prime__1 = $__case_res_2;
    $__res = (function() use ($__global_Data_Enum_Generic_add, $__global_Data_Enum_Generic_unwrap, $genericCardinality__prime__1, $genericFromEnum__prime__1) {
  $__fn = function($dictGenericBoundedEnum1) use ($__global_Data_Enum_Generic_add, $__global_Data_Enum_Generic_unwrap, $genericCardinality__prime__1, $genericFromEnum__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericBoundedEnum1;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->genericToEnum__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericToEnum__prime__2 = $__case_res_3;
$__case_0 = $dictGenericBoundedEnum1;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->genericFromEnum__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericFromEnum__prime__2 = $__case_res_4;
$__case_0 = $dictGenericBoundedEnum1;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->genericCardinality__prime__;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["genericCardinality'" => ($__global_Data_Enum_Generic_add)(($__global_Data_Enum_Generic_unwrap)($genericCardinality__prime__1), ($__global_Data_Enum_Generic_unwrap)($__case_res_5)), "genericToEnum'" => (function() use ($genericCardinality__prime__1) {
  $__fn = function($n) use ($genericCardinality__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$to = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$ca = $__case_0;
return "/* Unsupported: Guards not supported */";
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
})();
    $__res = ($to)($genericCardinality__prime__1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericFromEnum'" => (function() use ($genericFromEnum__prime__1, $__global_Data_Enum_Generic_add, $genericFromEnum__prime__2, $__global_Data_Enum_Generic_unwrap, $genericCardinality__prime__1) {
  $__body = function($v) use ($genericFromEnum__prime__1, $__global_Data_Enum_Generic_add, $genericFromEnum__prime__2, $__global_Data_Enum_Generic_unwrap, $genericCardinality__prime__1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Inl":
$a = ($__case_0)->v0;
return ($genericFromEnum__prime__1)($a);
break;
case "Inr":
$b = ($__case_0)->v0;
return ($__global_Data_Enum_Generic_add)(($genericFromEnum__prime__2)($b), ($__global_Data_Enum_Generic_unwrap)($genericCardinality__prime__1));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($genericFromEnum__prime__1, $__global_Data_Enum_Generic_add, $genericFromEnum__prime__2, $__global_Data_Enum_Generic_unwrap, $genericCardinality__prime__1, $__body, &$__fn) {
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
$GLOBALS['Data_Enum_Generic_genericBoundedEnumSum'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericBoundedEnumSum';

// Data_Enum_Generic_genericBoundedEnumProduct
function Data_Enum_Generic_genericBoundedEnumProduct($dictGenericBoundedEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericBoundedEnumProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_Generic_mul = ($GLOBALS['Data_Enum_Generic_mul'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_mul'));
$__global_Data_Enum_Generic_unwrap = ($GLOBALS['Data_Enum_Generic_unwrap'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_unwrap'));
$__global_Data_Enum_Generic_apply = ($GLOBALS['Data_Enum_Generic_apply'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_apply'));
$__global_Data_Enum_Generic_map = ($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map'));
$__global_Data_Enum_Generic_div = ($GLOBALS['Data_Enum_Generic_div'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_div'));
$__global_Data_Enum_Generic_mod = ($GLOBALS['Data_Enum_Generic_mod'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_mod'));
$__global_Data_Enum_Generic_add = ($GLOBALS['Data_Enum_Generic_add'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_add'));
$__case_0 = $dictGenericBoundedEnum;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->genericCardinality__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericCardinality__prime__1 = $__case_res_0;
$__case_0 = $dictGenericBoundedEnum;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->genericToEnum__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericToEnum__prime__1 = $__case_res_1;
$__case_0 = $dictGenericBoundedEnum;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->genericFromEnum__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericFromEnum__prime__1 = $__case_res_2;
    $__res = (function() use ($__global_Data_Enum_Generic_mul, $__global_Data_Enum_Generic_unwrap, $genericCardinality__prime__1, $__global_Data_Enum_Generic_apply, $__global_Data_Enum_Generic_map, $genericToEnum__prime__1, $__global_Data_Enum_Generic_div, $__global_Data_Enum_Generic_mod, $__global_Data_Enum_Generic_add, $genericFromEnum__prime__1) {
  $__fn = function($dictGenericBoundedEnum1) use ($__global_Data_Enum_Generic_mul, $__global_Data_Enum_Generic_unwrap, $genericCardinality__prime__1, $__global_Data_Enum_Generic_apply, $__global_Data_Enum_Generic_map, $genericToEnum__prime__1, $__global_Data_Enum_Generic_div, $__global_Data_Enum_Generic_mod, $__global_Data_Enum_Generic_add, $genericFromEnum__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictGenericBoundedEnum1;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->genericCardinality__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericCardinality__prime__2 = $__case_res_3;
$__case_0 = $dictGenericBoundedEnum1;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->genericToEnum__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericToEnum__prime__2 = $__case_res_4;
$__case_0 = $dictGenericBoundedEnum1;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->genericFromEnum__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericFromEnum__prime__2 = $__case_res_5;
$from = (function() use ($__global_Data_Enum_Generic_add, $__global_Data_Enum_Generic_mul, $genericFromEnum__prime__1, $genericFromEnum__prime__2) {
  $__body = function($v, $v1) use ($__global_Data_Enum_Generic_add, $__global_Data_Enum_Generic_mul, $genericFromEnum__prime__1, $genericFromEnum__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "Product":
$cb = $__case_0;
$a = ($__case_1)->v0;
$b = ($__case_1)->v1;
return ($__global_Data_Enum_Generic_add)(($__global_Data_Enum_Generic_mul)(($genericFromEnum__prime__1)($a), $cb), ($genericFromEnum__prime__2)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($__global_Data_Enum_Generic_add, $__global_Data_Enum_Generic_mul, $genericFromEnum__prime__1, $genericFromEnum__prime__2, $__body, &$__fn) {
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
    $__res = (object)["genericCardinality'" => ($__global_Data_Enum_Generic_mul)(($__global_Data_Enum_Generic_unwrap)($genericCardinality__prime__1), ($__global_Data_Enum_Generic_unwrap)($genericCardinality__prime__2)), "genericToEnum'" => (function() use ($__global_Data_Enum_Generic_apply, $__global_Data_Enum_Generic_map, $genericToEnum__prime__1, $__global_Data_Enum_Generic_div, $genericToEnum__prime__2, $__global_Data_Enum_Generic_mod, $genericCardinality__prime__2) {
  $__fn = function($n) use ($__global_Data_Enum_Generic_apply, $__global_Data_Enum_Generic_map, $genericToEnum__prime__1, $__global_Data_Enum_Generic_div, $genericToEnum__prime__2, $__global_Data_Enum_Generic_mod, $genericCardinality__prime__2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$to = (function() use ($__global_Data_Enum_Generic_apply, $__global_Data_Enum_Generic_map, $genericToEnum__prime__1, $__global_Data_Enum_Generic_div, $n, $genericToEnum__prime__2, $__global_Data_Enum_Generic_mod) {
  $__body = function($v) use ($__global_Data_Enum_Generic_apply, $__global_Data_Enum_Generic_map, $genericToEnum__prime__1, $__global_Data_Enum_Generic_div, $n, $genericToEnum__prime__2, $__global_Data_Enum_Generic_mod) {
    $__case_0 = $v;
    if (true) {
$cb = $__case_0;
return ($__global_Data_Enum_Generic_apply)(($__global_Data_Enum_Generic_map)((function() {
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
})(), ($genericToEnum__prime__1)(($__global_Data_Enum_Generic_div)($n, $cb))), ($genericToEnum__prime__2)(($__global_Data_Enum_Generic_mod)($n, $cb)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__global_Data_Enum_Generic_apply, $__global_Data_Enum_Generic_map, $genericToEnum__prime__1, $__global_Data_Enum_Generic_div, $n, $genericToEnum__prime__2, $__global_Data_Enum_Generic_mod, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($to)($genericCardinality__prime__2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericFromEnum'" => ($from)($genericCardinality__prime__2)];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericBoundedEnumProduct'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericBoundedEnumProduct';


// Data_Enum_Generic_genericBoundedEnumConstructor
function Data_Enum_Generic_genericBoundedEnumConstructor($dictGenericBoundedEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericBoundedEnumConstructor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_Generic_unwrap = ($GLOBALS['Data_Enum_Generic_unwrap'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_unwrap'));
$__global_Data_Enum_Generic_map = ($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map'));
$__global_Data_Generic_Rep_Constructor = ($GLOBALS['Data_Generic_Rep_Constructor'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Constructor'));
$__case_0 = $dictGenericBoundedEnum;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->genericToEnum__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericToEnum__prime__1 = $__case_res_0;
$__case_0 = $dictGenericBoundedEnum;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->genericFromEnum__prime__;
} else {
throw new \Exception("Pattern match failure");
};
$genericFromEnum__prime__1 = $__case_res_1;
$__case_0 = $dictGenericBoundedEnum;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->genericCardinality__prime__;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["genericCardinality'" => ($__global_Data_Enum_Generic_unwrap)($__case_res_2), "genericToEnum'" => (function() use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Constructor, $genericToEnum__prime__1) {
  $__fn = function($i) use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Constructor, $genericToEnum__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Enum_Generic_map)($__global_Data_Generic_Rep_Constructor, ($genericToEnum__prime__1)($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericFromEnum'" => (function() use ($genericFromEnum__prime__1) {
  $__body = function($v) use ($genericFromEnum__prime__1) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($genericFromEnum__prime__1)($a);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($genericFromEnum__prime__1, $__body, &$__fn) {
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
$GLOBALS['Data_Enum_Generic_genericBoundedEnumConstructor'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericBoundedEnumConstructor';

// Data_Enum_Generic_genericBoundedEnumArgument
function Data_Enum_Generic_genericBoundedEnumArgument($dictBoundedEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericBoundedEnumArgument';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Enum_Generic_unwrap = ($GLOBALS['Data_Enum_Generic_unwrap'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_unwrap'));
$__global_Data_Enum_Generic_map = ($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map'));
$__global_Data_Generic_Rep_Argument = ($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument'));
$__case_0 = $dictBoundedEnum;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->toEnum;
} else {
throw new \Exception("Pattern match failure");
};
$toEnum = $__case_res_0;
$__case_0 = $dictBoundedEnum;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->fromEnum;
} else {
throw new \Exception("Pattern match failure");
};
$fromEnum = $__case_res_1;
$__case_0 = $dictBoundedEnum;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->cardinality;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["genericCardinality'" => ($__global_Data_Enum_Generic_unwrap)($__case_res_2), "genericToEnum'" => (function() use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Argument, $toEnum) {
  $__fn = function($i) use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Argument, $toEnum, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Enum_Generic_map)($__global_Data_Generic_Rep_Argument, ($toEnum)($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericFromEnum'" => (function() use ($fromEnum) {
  $__body = function($v) use ($fromEnum) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($fromEnum)($a);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($fromEnum, $__body, &$__fn) {
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
$GLOBALS['Data_Enum_Generic_genericBoundedEnumArgument'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericBoundedEnumArgument';

