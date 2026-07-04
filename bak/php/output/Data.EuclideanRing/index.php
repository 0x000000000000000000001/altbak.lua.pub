<?php

namespace Data\EuclideanRing;

require_once __DIR__ . '/../Data.BooleanAlgebra/index.php';
require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';

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
      case 'Data_EuclideanRing_disj': $v = ($GLOBALS['Data_HeytingAlgebra_boolDisj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolDisj')); break;
      case 'Data_EuclideanRing_euclideanRingNumber': $v = (($GLOBALS['Data_EuclideanRing_EuclideanRing__dollar__Dict'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_EuclideanRing__dollar__Dict')))((object)["degree" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = 1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "div" => ($GLOBALS['Data_EuclideanRing_numDiv'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_numDiv')), "mod" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = 0.0;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "CommutativeRing0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_CommutativeRing_commutativeRingNumber'] ?? \Data\CommutativeRing\phpurs_eval_thunk('Data_CommutativeRing_commutativeRingNumber'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_EuclideanRing_euclideanRingInt': $v = (($GLOBALS['Data_EuclideanRing_EuclideanRing__dollar__Dict'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_EuclideanRing__dollar__Dict')))((object)["degree" => ($GLOBALS['Data_EuclideanRing_intDegree'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_intDegree')), "div" => ($GLOBALS['Data_EuclideanRing_intDiv'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_intDiv')), "mod" => ($GLOBALS['Data_EuclideanRing_intMod'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_intMod')), "CommutativeRing0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_CommutativeRing_commutativeRingInt'] ?? \Data\CommutativeRing\phpurs_eval_thunk('Data_CommutativeRing_commutativeRingInt'));
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
if (!function_exists('phpurs_uncurry2')) {
function phpurs_uncurry2($fn) {
    return function($a, $b = null) use ($fn) {
        if (func_num_args() < 2) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry2($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b);
    };
}
function phpurs_uncurry3($fn) {
    return function($a, $b = null, $c = null) use ($fn) {
        if (func_num_args() < 3) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry3($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c);
    };
}
function phpurs_uncurry4($fn) {
    return function($a, $b = null, $c = null, $d = null) use ($fn) {
        if (func_num_args() < 4) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry4($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d);
    };
}
function phpurs_uncurry5($fn) {
    return function($a, $b = null, $c = null, $d = null, $e = null) use ($fn) {
        if (func_num_args() < 5) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry5($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d)($e);
    };
}
}




$Data_EuclideanRing_intDegree = function($x) { return abs($x); };
$Data_EuclideanRing_intDiv = phpurs_uncurry2(function($x) { return function($y) use(&$x) { return (int)($x / $y); }; });
$Data_EuclideanRing_intMod = phpurs_uncurry2(function($x) { return function($y) use(&$x) { return $x % $y; }; });
$Data_EuclideanRing_numDiv = phpurs_uncurry2(function($x) { return function($y) use(&$x) { return $x / $y; }; });


// Data_EuclideanRing_EuclideanRing$Dict
function Data_EuclideanRing_EuclideanRing__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_EuclideanRing_EuclideanRing__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_EuclideanRing_EuclideanRing__dollar__Dict'] = __NAMESPACE__ . '\\Data_EuclideanRing_EuclideanRing__dollar__Dict';

// Data_EuclideanRing_mod
function Data_EuclideanRing_mod($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_EuclideanRing_mod';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->mod;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_EuclideanRing_mod'] = __NAMESPACE__ . '\\Data_EuclideanRing_mod';

// Data_EuclideanRing_gcd
function Data_EuclideanRing_gcd($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_EuclideanRing_gcd';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$eq = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq);
return (function() use ($eq, $dictEq) {
  $__fn = function($dictEuclideanRing) use ($eq, $dictEq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$zero = (($GLOBALS['Data_Semiring_zero'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_zero')))((((((($dictEuclideanRing)->CommutativeRing0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Ring0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Semiring0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$mod1 = (($GLOBALS['Data_EuclideanRing_mod'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_mod')))($dictEuclideanRing);
    $__res = (function() use ($eq, $zero, $dictEq, $dictEuclideanRing, $mod1) {
  $__body = function($a, $b) use ($eq, $zero, $dictEq, $dictEuclideanRing, $mod1) {
    $__case_0 = ($eq)($b, $zero);
    if (($__case_0 === true)) {
return $a;
} else {
if (true) {
return (($GLOBALS['Data_EuclideanRing_gcd'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_gcd')))($dictEq, $dictEuclideanRing, $b, ($mod1)($a, $b));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($a, $b = null) use ($eq, $zero, $dictEq, $dictEuclideanRing, $mod1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a, $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
$GLOBALS['Data_EuclideanRing_gcd'] = __NAMESPACE__ . '\\Data_EuclideanRing_gcd';



// Data_EuclideanRing_div
function Data_EuclideanRing_div($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_EuclideanRing_div';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->div;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_EuclideanRing_div'] = __NAMESPACE__ . '\\Data_EuclideanRing_div';

// Data_EuclideanRing_lcm
function Data_EuclideanRing_lcm($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_EuclideanRing_lcm';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq);
$gcd1 = (($GLOBALS['Data_EuclideanRing_gcd'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_gcd')))($dictEq);
    $__res = (function() use ($gcd1, $eq) {
  $__fn = function($dictEuclideanRing) use ($gcd1, $eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Semiring0 = (((((($dictEuclideanRing)->CommutativeRing0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Ring0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Semiring0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$zero = (($GLOBALS['Data_Semiring_zero'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_zero')))($Semiring0);
$div1 = (($GLOBALS['Data_EuclideanRing_div'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_div')))($dictEuclideanRing);
$mul = (($GLOBALS['Data_Semiring_mul'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_mul')))($Semiring0);
$gcd2 = ($gcd1)($dictEuclideanRing);
    $__res = (function() use ($eq, $zero, $div1, $mul, $gcd2) {
  $__body = function($a, $b) use ($eq, $zero, $div1, $mul, $gcd2) {
    $__case_0 = (($GLOBALS['Data_EuclideanRing_disj'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_disj')))(($eq)($a, $zero), ($eq)($b, $zero));
    if (($__case_0 === true)) {
return $zero;
} else {
if (true) {
return ($div1)(($mul)($a, $b), ($gcd2)($a, $b));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($a, $b = null) use ($eq, $zero, $div1, $mul, $gcd2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a, $b);
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
$GLOBALS['Data_EuclideanRing_lcm'] = __NAMESPACE__ . '\\Data_EuclideanRing_lcm';

// Data_EuclideanRing_degree
function Data_EuclideanRing_degree($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_EuclideanRing_degree';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->degree;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_EuclideanRing_degree'] = __NAMESPACE__ . '\\Data_EuclideanRing_degree';

