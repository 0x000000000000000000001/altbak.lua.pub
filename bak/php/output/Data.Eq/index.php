<?php

namespace Data\Eq;

require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Data.Void/index.php';
require_once __DIR__ . '/../Record.Unsafe/index.php';
require_once __DIR__ . '/../Type.Proxy/index.php';

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
      case 'Data_Eq_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Eq_eqVoid': $v = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() {
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
      case 'Data_Eq_eqUnit': $v = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() {
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
      case 'Data_Eq_eqString': $v = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => ($GLOBALS['Data_Eq_eqStringImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqStringImpl'))]); break;
      case 'Data_Eq_eqRowNil': $v = (($GLOBALS['Data_Eq_EqRecord__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_EqRecord__dollar__Dict')))((object)["eqRecord" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = true;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Eq_eqProxy': $v = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() {
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
      case 'Data_Eq_eqNumber': $v = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => ($GLOBALS['Data_Eq_eqNumberImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqNumberImpl'))]); break;
      case 'Data_Eq_eqInt': $v = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl'))]); break;
      case 'Data_Eq_eqChar': $v = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => ($GLOBALS['Data_Eq_eqCharImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqCharImpl'))]); break;
      case 'Data_Eq_eqBoolean': $v = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => ($GLOBALS['Data_Eq_eqBooleanImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqBooleanImpl'))]); break;
      case 'Data_Eq_eq2': $v = ($GLOBALS['Data_Eq_eqBooleanImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqBooleanImpl')); break;
      case 'Data_Eq_eq1Array': $v = (($GLOBALS['Data_Eq_Eq1__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq1__dollar__Dict')))((object)["eq1" => (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))((($GLOBALS['Data_Eq_eqArray'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqArray')))($dictEq));
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




$Data_Eq_eqIntImpl = phpurs_uncurry2(function($a) { return function($b) use(&$a) { return $a === $b; }; });
$Data_Eq_eqStringImpl = $Data_Eq_eqIntImpl;
$Data_Eq_eqNumberImpl = $Data_Eq_eqIntImpl;
$Data_Eq_eqCharImpl = $Data_Eq_eqIntImpl;
$Data_Eq_eqBooleanImpl = $Data_Eq_eqIntImpl;


// Data_Eq_EqRecord$Dict
function Data_Eq_EqRecord__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Eq_EqRecord__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Eq_EqRecord__dollar__Dict'] = __NAMESPACE__ . '\\Data_Eq_EqRecord__dollar__Dict';

// Data_Eq_Eq$Dict
function Data_Eq_Eq__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Eq_Eq__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Eq_Eq__dollar__Dict'] = __NAMESPACE__ . '\\Data_Eq_Eq__dollar__Dict';

// Data_Eq_Eq1$Dict
function Data_Eq_Eq1__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Eq_Eq1__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Eq_Eq1__dollar__Dict'] = __NAMESPACE__ . '\\Data_Eq_Eq1__dollar__Dict';





// Data_Eq_eqRecord
function Data_Eq_eqRecord($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Eq_eqRecord';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->eqRecord;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Eq_eqRecord'] = __NAMESPACE__ . '\\Data_Eq_eqRecord';

// Data_Eq_eqRec
function Data_Eq_eqRec($__dollar____unused, $dictEqRecord = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Eq_eqRec';
  if ($__num < 2) {
    if ($__num === 1) return function($dictEqRecord) use ($__dollar____unused, $__fn) { return $__fn($__dollar____unused, $dictEqRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (($GLOBALS['Data_Eq_eqRecord'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqRecord')))($dictEqRecord, ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')))]);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Eq_eqRec'] = __NAMESPACE__ . '\\Data_Eq_eqRec';






// Data_Eq_eq1
function Data_Eq_eq1($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Eq_eq1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->eq1;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Eq_eq1'] = __NAMESPACE__ . '\\Data_Eq_eq1';

// Data_Eq_eq
function Data_Eq_eq($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Eq_eq';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Eq_eq'] = __NAMESPACE__ . '\\Data_Eq_eq';


// Data_Eq_eqArray
function Data_Eq_eqArray($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Eq_eqArray';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (($GLOBALS['Data_Eq_eqArrayImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqArrayImpl')))((($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq))]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Eq_eqArray'] = __NAMESPACE__ . '\\Data_Eq_eqArray';


// Data_Eq_eqRowCons
function Data_Eq_eqRowCons($dictEqRecord) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Eq_eqRowCons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eqRecord1 = (($GLOBALS['Data_Eq_eqRecord'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqRecord')))($dictEqRecord);
    $__res = (function() use ($eqRecord1) {
  $__fn = function($__dollar____unused, $dictIsSymbol = null) use ($eqRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dictIsSymbol) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $dictIsSymbol); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$reflectSymbol = (($GLOBALS['Data_Symbol_reflectSymbol'] ?? \Data\Symbol\phpurs_eval_thunk('Data_Symbol_reflectSymbol')))($dictIsSymbol);
    $__res = (function() use ($eqRecord1, $reflectSymbol) {
  $__fn = function($dictEq) use ($eqRecord1, $reflectSymbol, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq3 = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq);
    $__res = (($GLOBALS['Data_Eq_EqRecord__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_EqRecord__dollar__Dict')))((object)["eqRecord" => (function() use ($eqRecord1, $reflectSymbol, $eq3) {
  $__fn = function($v, $ra = null, $rb = null) use ($eqRecord1, $reflectSymbol, $eq3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($rb) use ($v, $ra, &$__fn) { return $__fn($v, $ra, $rb); };
    if ($__num === 1) return function($ra, $rb = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $ra, $rb);
      if ($__num2 === 1) return function($rb) use ($v, $ra, &$__fn) { return $__fn($v, $ra, $rb); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$tail = ($eqRecord1)(($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')), $ra, $rb);
$key = ($reflectSymbol)(($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')));
$get = (($GLOBALS['Record_Unsafe_unsafeGet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeGet')))($key);
    $__res = (($GLOBALS['Data_Eq_conj'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_conj')))(($eq3)(($get)($ra), ($get)($rb)), $tail);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Eq_eqRowCons'] = __NAMESPACE__ . '\\Data_Eq_eqRowCons';

// Data_Eq_notEq
function Data_Eq_notEq($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Eq_notEq';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq3 = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq);
    $__res = (function() use ($eq3) {
  $__fn = function($x, $y = null) use ($eq3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Eq_eq2'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq2')))(($eq3)($x, $y), false);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Eq_notEq'] = __NAMESPACE__ . '\\Data_Eq_notEq';

// Data_Eq_notEq1
function Data_Eq_notEq1($dictEq1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Eq_notEq1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq11 = (($GLOBALS['Data_Eq_eq1'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq1')))($dictEq1);
    $__res = (function() use ($eq11) {
  $__fn = function($dictEq) use ($eq11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq12 = ($eq11)($dictEq);
    $__res = (function() use ($eq12) {
  $__fn = function($x, $y = null) use ($eq12, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Eq_eq2'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq2')))(($eq12)($x, $y), false);
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
$GLOBALS['Data_Eq_notEq1'] = __NAMESPACE__ . '\\Data_Eq_notEq1';

