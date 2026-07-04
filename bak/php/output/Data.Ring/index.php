<?php

namespace Data\Ring;

require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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
      case 'Data_Ring_semiringRecord': $v = (($GLOBALS['Data_Semiring_semiringRecord'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringRecord')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Ring_ringUnit': $v = (($GLOBALS['Data_Ring_Ring__dollar__Dict'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_Ring__dollar__Dict')))((object)["sub" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Semiring0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Semiring_semiringUnit'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringUnit'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Ring_ringRecordNil': $v = (($GLOBALS['Data_Ring_RingRecord__dollar__Dict'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_RingRecord__dollar__Dict')))((object)["subRecord" => (function() {
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
    $__res = (object)[];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "SemiringRecord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Semiring_semiringRecordNil'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringRecordNil'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Ring_ringProxy': $v = (($GLOBALS['Data_Ring_Ring__dollar__Dict'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_Ring__dollar__Dict')))((object)["sub" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Semiring0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Semiring_semiringProxy'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringProxy'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Ring_ringNumber': $v = (($GLOBALS['Data_Ring_Ring__dollar__Dict'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_Ring__dollar__Dict')))((object)["sub" => ($GLOBALS['Data_Ring_numSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_numSub')), "Semiring0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Semiring_semiringNumber'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringNumber'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Ring_ringInt': $v = (($GLOBALS['Data_Ring_Ring__dollar__Dict'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_Ring__dollar__Dict')))((object)["sub" => ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')), "Semiring0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Semiring_semiringInt'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringInt'));
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




$Data_Ring_intSub = phpurs_uncurry2(function($a) { return function($b) use(&$a) { return $a - $b; }; });
$Data_Ring_numSub = $Data_Ring_intSub;


// Data_Ring_RingRecord$Dict
function Data_Ring_RingRecord__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ring_RingRecord__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ring_RingRecord__dollar__Dict'] = __NAMESPACE__ . '\\Data_Ring_RingRecord__dollar__Dict';

// Data_Ring_Ring$Dict
function Data_Ring_Ring__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ring_Ring__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ring_Ring__dollar__Dict'] = __NAMESPACE__ . '\\Data_Ring_Ring__dollar__Dict';

// Data_Ring_subRecord
function Data_Ring_subRecord($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ring_subRecord';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->subRecord;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ring_subRecord'] = __NAMESPACE__ . '\\Data_Ring_subRecord';

// Data_Ring_sub
function Data_Ring_sub($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ring_sub';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->sub;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ring_sub'] = __NAMESPACE__ . '\\Data_Ring_sub';



// Data_Ring_ringRecordCons
function Data_Ring_ringRecordCons($dictIsSymbol) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ring_ringRecordCons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$reflectSymbol = (($GLOBALS['Data_Symbol_reflectSymbol'] ?? \Data\Symbol\phpurs_eval_thunk('Data_Symbol_reflectSymbol')))($dictIsSymbol);
$semiringRecordCons = (($GLOBALS['Data_Semiring_semiringRecordCons'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringRecordCons')))($dictIsSymbol, ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
    $__res = (function() use ($semiringRecordCons, $reflectSymbol) {
  $__fn = function($__dollar____unused, $dictRingRecord = null) use ($semiringRecordCons, $reflectSymbol, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dictRingRecord) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $dictRingRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$subRecord1 = (($GLOBALS['Data_Ring_subRecord'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_subRecord')))($dictRingRecord);
$semiringRecordCons1 = ($semiringRecordCons)((($dictRingRecord)->SemiringRecord0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($semiringRecordCons1, $subRecord1, $reflectSymbol) {
  $__fn = function($dictRing) use ($semiringRecordCons1, $subRecord1, $reflectSymbol, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sub1 = (($GLOBALS['Data_Ring_sub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_sub')))($dictRing);
$semiringRecordCons2 = ($semiringRecordCons1)((($dictRing)->Semiring0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ring_RingRecord__dollar__Dict'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_RingRecord__dollar__Dict')))((object)["subRecord" => (function() use ($subRecord1, $reflectSymbol, $sub1) {
  $__fn = function($v, $ra = null, $rb = null) use ($subRecord1, $reflectSymbol, $sub1, &$__fn) {
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
$tail = ($subRecord1)(($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')), $ra, $rb);
$key = ($reflectSymbol)(($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')));
$insert = (($GLOBALS['Record_Unsafe_unsafeSet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeSet')))($key);
$get = (($GLOBALS['Record_Unsafe_unsafeGet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeGet')))($key);
    $__res = ($insert)(($sub1)(($get)($ra), ($get)($rb)), $tail);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "SemiringRecord0" => (function() use ($semiringRecordCons2) {
  $__fn = function($__dollar____unused) use ($semiringRecordCons2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semiringRecordCons2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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
$GLOBALS['Data_Ring_ringRecordCons'] = __NAMESPACE__ . '\\Data_Ring_ringRecordCons';

// Data_Ring_ringRecord
function Data_Ring_ringRecord($__dollar____unused, $dictRingRecord = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ring_ringRecord';
  if ($__num < 2) {
    if ($__num === 1) return function($dictRingRecord) use ($__dollar____unused, $__fn) { return $__fn($__dollar____unused, $dictRingRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$semiringRecord1 = (($GLOBALS['Data_Ring_semiringRecord'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_semiringRecord')))((($dictRingRecord)->SemiringRecord0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ring_Ring__dollar__Dict'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_Ring__dollar__Dict')))((object)["sub" => (($GLOBALS['Data_Ring_subRecord'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_subRecord')))($dictRingRecord, ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'))), "Semiring0" => (function() use ($semiringRecord1) {
  $__fn = function($__dollar____unused) use ($semiringRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semiringRecord1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Ring_ringRecord'] = __NAMESPACE__ . '\\Data_Ring_ringRecord';




// Data_Ring_ringFn
function Data_Ring_ringFn($dictRing) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ring_ringFn';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sub1 = (($GLOBALS['Data_Ring_sub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_sub')))($dictRing);
$semiringFn = (($GLOBALS['Data_Semiring_semiringFn'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringFn')))((($dictRing)->Semiring0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ring_Ring__dollar__Dict'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_Ring__dollar__Dict')))((object)["sub" => (function() use ($sub1) {
  $__fn = function($f, $g = null, $x = null) use ($sub1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($x) use ($f, $g, &$__fn) { return $__fn($f, $g, $x); };
    if ($__num === 1) return function($g, $x = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $x);
      if ($__num2 === 1) return function($x) use ($f, $g, &$__fn) { return $__fn($f, $g, $x); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($sub1)(($f)($x), ($g)($x));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Semiring0" => (function() use ($semiringFn) {
  $__fn = function($__dollar____unused) use ($semiringFn, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semiringFn;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ring_ringFn'] = __NAMESPACE__ . '\\Data_Ring_ringFn';

// Data_Ring_negate
function Data_Ring_negate($dictRing) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ring_negate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sub1 = (($GLOBALS['Data_Ring_sub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_sub')))($dictRing);
$zero = (($GLOBALS['Data_Semiring_zero'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_zero')))((($dictRing)->Semiring0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($sub1, $zero) {
  $__fn = function($a) use ($sub1, $zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($sub1)($zero, $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ring_negate'] = __NAMESPACE__ . '\\Data_Ring_negate';

