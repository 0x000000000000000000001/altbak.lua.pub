<?php

namespace Data\Bounded;

require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
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
      case 'Data_Bounded_ordRecord': $v = (($GLOBALS['Data_Ord_ordRecord'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordRecord')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Bounded_boundedUnit': $v = (object)["top" => ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), "bottom" => ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ord_ordUnit = ($GLOBALS['Data_Ord_ordUnit'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordUnit'));
    $__res = $__global_Data_Ord_ordUnit;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Bounded_boundedRecordNil': $v = (object)["topRecord" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (object)[];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "bottomRecord" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (object)[];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "OrdRecord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ord_ordRecordNil = ($GLOBALS['Data_Ord_ordRecordNil'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordRecordNil'));
    $__res = $__global_Data_Ord_ordRecordNil;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Bounded_boundedProxy': $v = (object)["bottom" => ($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")), "top" => ($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ord_ordProxy = ($GLOBALS['Data_Ord_ordProxy'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordProxy'));
    $__res = $__global_Data_Ord_ordProxy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Bounded_boundedOrdering': $v = (object)["top" => ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT")), "bottom" => ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT")), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ord_ordOrdering = ($GLOBALS['Data_Ord_ordOrdering'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordOrdering'));
    $__res = $__global_Data_Ord_ordOrdering;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Bounded_boundedNumber': $v = (object)["top" => ($GLOBALS['Data_Bounded_topNumber'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_topNumber')), "bottom" => ($GLOBALS['Data_Bounded_bottomNumber'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottomNumber')), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ord_ordNumber = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'));
    $__res = $__global_Data_Ord_ordNumber;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Bounded_boundedInt': $v = (object)["top" => ($GLOBALS['Data_Bounded_topInt'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_topInt')), "bottom" => ($GLOBALS['Data_Bounded_bottomInt'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottomInt')), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ord_ordInt = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
    $__res = $__global_Data_Ord_ordInt;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Bounded_boundedChar': $v = (object)["top" => ($GLOBALS['Data_Bounded_topChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_topChar')), "bottom" => ($GLOBALS['Data_Bounded_bottomChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottomChar')), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ord_ordChar = ($GLOBALS['Data_Ord_ordChar'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordChar'));
    $__res = $__global_Data_Ord_ordChar;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Bounded_boundedBoolean': $v = (object)["top" => true, "bottom" => false, "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ord_ordBoolean = ($GLOBALS['Data_Ord_ordBoolean'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordBoolean'));
    $__res = $__global_Data_Ord_ordBoolean;
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
$Data_Bounded_topInt = 2147483647;
$Data_Bounded_bottomInt = -2147483648;
$Data_Bounded_topChar = "\u{10FFFF}";
$Data_Bounded_bottomChar = "\u{0000}";
$Data_Bounded_topNumber = INF;
$Data_Bounded_bottomNumber = -INF;


// Data_Bounded_BoundedRecord$Dict
function Data_Bounded_BoundedRecord__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_BoundedRecord__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_BoundedRecord__dollar__Dict'] = __NAMESPACE__ . '\\Data_Bounded_BoundedRecord__dollar__Dict';

// Data_Bounded_Bounded$Dict
function Data_Bounded_Bounded__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_Bounded__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_Bounded__dollar__Dict'] = __NAMESPACE__ . '\\Data_Bounded_Bounded__dollar__Dict';

// Data_Bounded_topRecord
function Data_Bounded_topRecord($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_topRecord';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->topRecord;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_topRecord'] = __NAMESPACE__ . '\\Data_Bounded_topRecord';

// Data_Bounded_top
function Data_Bounded_top($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_top';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->top;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_top'] = __NAMESPACE__ . '\\Data_Bounded_top';









// Data_Bounded_bottomRecord
function Data_Bounded_bottomRecord($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_bottomRecord';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bottomRecord;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_bottomRecord'] = __NAMESPACE__ . '\\Data_Bounded_bottomRecord';

// Data_Bounded_boundedRecord
function Data_Bounded_boundedRecord($__dollar____unused, $dictBoundedRecord = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_boundedRecord';
  if ($__num < 2) {
    if ($__num === 1) return function($dictBoundedRecord) use ($__dollar____unused, $__fn) { return $__fn($__dollar____unused, $dictBoundedRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Bounded_ordRecord = ($GLOBALS['Data_Bounded_ordRecord'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_ordRecord'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$ordRecord1 = ($__global_Data_Bounded_ordRecord)((($dictBoundedRecord)->OrdRecord0)($__global_Prim_undefined));
$__case_0 = $dictBoundedRecord;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->topRecord;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dictBoundedRecord;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bottomRecord;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["top" => ($__case_res_0)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")), ($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy"))), "bottom" => ($__case_res_1)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")), ($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy"))), "Ord0" => (function() use ($ordRecord1) {
  $__fn = function($__dollar____unused) use ($ordRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ordRecord1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Bounded_boundedRecord'] = __NAMESPACE__ . '\\Data_Bounded_boundedRecord';

// Data_Bounded_bottom
function Data_Bounded_bottom($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_bottom';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_bottom'] = __NAMESPACE__ . '\\Data_Bounded_bottom';

// Data_Bounded_boundedRecordCons
function Data_Bounded_boundedRecordCons($dictIsSymbol) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_boundedRecordCons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Record_Unsafe_unsafeGet = ($GLOBALS['Record_Unsafe_unsafeGet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeGet'));
$__global_Data_Eq_conj = ($GLOBALS['Data_Eq_conj'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_conj'));
$__global_Data_Ord_notEq = ($GLOBALS['Data_Ord_notEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_notEq'));
$__global_Record_Unsafe_unsafeSet = ($GLOBALS['Record_Unsafe_unsafeSet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeSet'));
$__case_0 = $dictIsSymbol;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->reflectSymbol;
} else {
throw new \Exception("Pattern match failure");
};
$reflectSymbol = $__case_res_0;
    $__res = (function() use ($__global_Prim_undefined, $dict, $__global_Record_Unsafe_unsafeGet, $__global_Data_Eq_conj, $__global_Data_Ord_notEq, $dictIsSymbol, $reflectSymbol, $__global_Record_Unsafe_unsafeSet) {
  $__fn = function($dictBounded) use ($__global_Prim_undefined, $dict, $__global_Record_Unsafe_unsafeGet, $__global_Data_Eq_conj, $__global_Data_Ord_notEq, $dictIsSymbol, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictBounded;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->top;
} else {
throw new \Exception("Pattern match failure");
};
$top1 = $__case_res_1;
$__case_0 = $dictBounded;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bottom;
} else {
throw new \Exception("Pattern match failure");
};
$bottom1 = $__case_res_2;
$Ord0 = (($dictBounded)->Ord0)($__global_Prim_undefined);
    $__res = (function() use ($dict, $__global_Record_Unsafe_unsafeGet, $__global_Data_Eq_conj, $__global_Prim_undefined, $__global_Data_Ord_notEq, $dictIsSymbol, &$Ord0, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $top1, $bottom1) {
  $__fn = function($__dollar____unused_, $__dollar____unused = null, $dictBoundedRecord = null) use ($dict, $__global_Record_Unsafe_unsafeGet, $__global_Data_Eq_conj, $__global_Prim_undefined, $__global_Data_Ord_notEq, $dictIsSymbol, &$Ord0, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $top1, $bottom1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($dictBoundedRecord) use ($__dollar____unused_, $__dollar____unused, &$__fn) { return $__fn($__dollar____unused_, $__dollar____unused, $dictBoundedRecord); };
    if ($__num === 1) return function($__dollar____unused, $dictBoundedRecord = null) use ($__dollar____unused_, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($__dollar____unused_, $__dollar____unused, $dictBoundedRecord);
      if ($__num2 === 1) return function($dictBoundedRecord) use ($__dollar____unused_, $__dollar____unused, &$__fn) { return $__fn($__dollar____unused_, $__dollar____unused, $dictBoundedRecord); };
      return phpurs_curry_fallback($__fn, [$__dollar____unused_], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__case_0 = $dictBoundedRecord;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->topRecord;
} else {
throw new \Exception("Pattern match failure");
};
$topRecord1 = $__case_res_3;
$__case_0 = $dictBoundedRecord;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->bottomRecord;
} else {
throw new \Exception("Pattern match failure");
};
$bottomRecord1 = $__case_res_4;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->compareRecord;
} else {
throw new \Exception("Pattern match failure");
};
$compareRecord1 = $__case_res_5;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->eqRecord;
} else {
throw new \Exception("Pattern match failure");
};
$eqRecord1 = $__case_res_6;
$eqRowCons = ((function() use ($eqRecord1, $__global_Record_Unsafe_unsafeGet, $__global_Data_Eq_conj) {
  $__fn = function($__dollar____unused, $dictIsSymbol = null) use ($eqRecord1, $__global_Record_Unsafe_unsafeGet, $__global_Data_Eq_conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dictIsSymbol) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $dictIsSymbol); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__case_0 = $dictIsSymbol;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->reflectSymbol;
} else {
throw new \Exception("Pattern match failure");
};
$reflectSymbol = $__case_res_7;
    $__res = (function() use ($eqRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeGet, $__global_Data_Eq_conj) {
  $__fn = function($dictEq) use ($eqRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeGet, $__global_Data_Eq_conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictEq;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq3 = $__case_res_8;
    $__res = (object)["eqRecord" => (function() use ($eqRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeGet, $__global_Data_Eq_conj, $eq3) {
  $__fn = function($v, $ra = null, $rb = null) use ($eqRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeGet, $__global_Data_Eq_conj, $eq3, &$__fn) {
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
$tail = ($eqRecord1)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")), $ra, $rb);
$key = ($reflectSymbol)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")));
$get = ($__global_Record_Unsafe_unsafeGet)($key);
    $__res = ($__global_Data_Eq_conj)(($eq3)(($get)($ra), ($get)($rb)), $tail);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($__global_Prim_undefined);
$ordRecordCons = ((function() use ($eqRowCons, $__global_Prim_undefined, $__global_Record_Unsafe_unsafeGet, $__global_Data_Ord_notEq, $compareRecord1) {
  $__fn = function($__dollar____unused, $dictIsSymbol = null) use ($eqRowCons, $__global_Prim_undefined, $__global_Record_Unsafe_unsafeGet, $__global_Data_Ord_notEq, $compareRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dictIsSymbol) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $dictIsSymbol); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__case_0 = $dictIsSymbol;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->reflectSymbol;
} else {
throw new \Exception("Pattern match failure");
};
$reflectSymbol = $__case_res_9;
$eqRowCons1 = ($eqRowCons)($dictIsSymbol);
    $__res = (function() use ($eqRowCons1, $__global_Prim_undefined, $__global_Record_Unsafe_unsafeGet, $reflectSymbol, $__global_Data_Ord_notEq, $compareRecord1) {
  $__fn = function($dictOrd) use ($eqRowCons1, $__global_Prim_undefined, $__global_Record_Unsafe_unsafeGet, $reflectSymbol, $__global_Data_Ord_notEq, $compareRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictOrd;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_10;
$eqRowCons2 = ($eqRowCons1)((($dictOrd)->Eq0)($__global_Prim_undefined));
    $__res = (object)["compareRecord" => (function() use ($__global_Record_Unsafe_unsafeGet, $reflectSymbol, $compare3, $__global_Data_Ord_notEq, $compareRecord1) {
  $__body = function($v, $ra, $rb) use ($__global_Record_Unsafe_unsafeGet, $reflectSymbol, $compare3, $__global_Data_Ord_notEq, $compareRecord1) {
    $unsafeGet__prime__ = $__global_Record_Unsafe_unsafeGet;
    $key = ($reflectSymbol)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")));
    $left = ($compare3)(($__global_Record_Unsafe_unsafeGet)($key, $ra), ($__global_Record_Unsafe_unsafeGet)($key, $rb));
    $__case_0 = ($__global_Data_Ord_notEq)($left, ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ")));
    switch ($__case_0) {
case true:
return $left;
break;
default:
return ($compareRecord1)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")), $ra, $rb);
break;
};
  };
  $__fn = function($v, $ra = null, $rb = null) use ($__global_Record_Unsafe_unsafeGet, $reflectSymbol, $compare3, $__global_Data_Ord_notEq, $compareRecord1, $__body, &$__fn) {
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
    $__res = $__body($v, $ra, $rb);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "EqRecord0" => (function() use ($eqRowCons2) {
  $__fn = function($__dollar____unused) use ($eqRowCons2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqRowCons2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($__global_Prim_undefined, $dictIsSymbol, $Ord0);
    $__res = (object)["topRecord" => (function() use ($topRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $top1) {
  $__fn = function($v, $rowProxy = null) use ($topRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $top1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($rowProxy) use ($v, &$__fn) { return $__fn($v, $rowProxy); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$tail = ($topRecord1)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")), $rowProxy);
$key = ($reflectSymbol)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")));
$insert = ($__global_Record_Unsafe_unsafeSet)($key);
    $__res = ($insert)($top1, $tail);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "bottomRecord" => (function() use ($bottomRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $bottom1) {
  $__fn = function($v, $rowProxy = null) use ($bottomRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $bottom1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($rowProxy) use ($v, &$__fn) { return $__fn($v, $rowProxy); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$tail = ($bottomRecord1)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")), $rowProxy);
$key = ($reflectSymbol)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")));
$insert = ($__global_Record_Unsafe_unsafeSet)($key);
    $__res = ($insert)($bottom1, $tail);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "OrdRecord0" => (function() use ($ordRecordCons) {
  $__fn = function($__dollar____unused) use ($ordRecordCons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ordRecordCons;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_boundedRecordCons'] = __NAMESPACE__ . '\\Data_Bounded_boundedRecordCons';

