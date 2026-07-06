<?php

namespace Data\BooleanAlgebra;

require_once __DIR__ . '/../Data.BooleanAlgebra/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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
      case 'Data_BooleanAlgebra_heytingAlgebraRecord': $v = (($GLOBALS['Data_HeytingAlgebra_heytingAlgebraRecord'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraRecord')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_BooleanAlgebra_booleanAlgebraUnit': $v = (object)["HeytingAlgebra0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_HeytingAlgebra_heytingAlgebraUnit = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraUnit'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraUnit'));
    $__res = $__global_Data_HeytingAlgebra_heytingAlgebraUnit;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_BooleanAlgebra_booleanAlgebraRecordNil': $v = (object)["HeytingAlgebraRecord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_HeytingAlgebra_heytingAlgebraRecordNil = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraRecordNil'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraRecordNil'));
    $__res = $__global_Data_HeytingAlgebra_heytingAlgebraRecordNil;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_BooleanAlgebra_booleanAlgebraProxy': $v = (object)["HeytingAlgebra0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_HeytingAlgebra_heytingAlgebraProxy = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraProxy'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraProxy'));
    $__res = $__global_Data_HeytingAlgebra_heytingAlgebraProxy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_BooleanAlgebra_booleanAlgebraBoolean': $v = (object)["HeytingAlgebra0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_HeytingAlgebra_heytingAlgebraBoolean = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'));
    $__res = $__global_Data_HeytingAlgebra_heytingAlgebraBoolean;
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



// Data_BooleanAlgebra_BooleanAlgebraRecord$Dict
function Data_BooleanAlgebra_BooleanAlgebraRecord__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_BooleanAlgebra_BooleanAlgebraRecord__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_BooleanAlgebra_BooleanAlgebraRecord__dollar__Dict'] = __NAMESPACE__ . '\\Data_BooleanAlgebra_BooleanAlgebraRecord__dollar__Dict';

// Data_BooleanAlgebra_BooleanAlgebra$Dict
function Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict'] = __NAMESPACE__ . '\\Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict';



// Data_BooleanAlgebra_booleanAlgebraRecordCons
function Data_BooleanAlgebra_booleanAlgebraRecordCons($dictIsSymbol) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_BooleanAlgebra_booleanAlgebraRecordCons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Record_Unsafe_unsafeSet = ($GLOBALS['Record_Unsafe_unsafeSet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeSet'));
$__global_Record_Unsafe_unsafeGet = ($GLOBALS['Record_Unsafe_unsafeGet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeGet'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__case_0 = $dictIsSymbol;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->reflectSymbol;
} else {
throw new \Exception("Pattern match failure");
};
$reflectSymbol = $__case_res_0;
$heytingAlgebraRecordCons = ((function() use ($reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet) {
  $__fn = function($__dollar____unused, $dictHeytingAlgebraRecord = null) use ($reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dictHeytingAlgebraRecord) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $dictHeytingAlgebraRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__case_0 = $dictHeytingAlgebraRecord;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->conjRecord;
} else {
throw new \Exception("Pattern match failure");
};
$conjRecord1 = $__case_res_1;
$__case_0 = $dictHeytingAlgebraRecord;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->disjRecord;
} else {
throw new \Exception("Pattern match failure");
};
$disjRecord1 = $__case_res_2;
$__case_0 = $dictHeytingAlgebraRecord;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->impliesRecord;
} else {
throw new \Exception("Pattern match failure");
};
$impliesRecord1 = $__case_res_3;
$__case_0 = $dictHeytingAlgebraRecord;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->ffRecord;
} else {
throw new \Exception("Pattern match failure");
};
$ffRecord1 = $__case_res_4;
$__case_0 = $dictHeytingAlgebraRecord;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->notRecord;
} else {
throw new \Exception("Pattern match failure");
};
$notRecord1 = $__case_res_5;
$__case_0 = $dictHeytingAlgebraRecord;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->ttRecord;
} else {
throw new \Exception("Pattern match failure");
};
$ttRecord1 = $__case_res_6;
    $__res = (function() use ($conjRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, $disjRecord1, $impliesRecord1, $ffRecord1, $notRecord1, $ttRecord1) {
  $__fn = function($dictHeytingAlgebra) use ($conjRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, $disjRecord1, $impliesRecord1, $ffRecord1, $notRecord1, $ttRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictHeytingAlgebra;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->conj;
} else {
throw new \Exception("Pattern match failure");
};
$conj1 = $__case_res_7;
$__case_0 = $dictHeytingAlgebra;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->disj;
} else {
throw new \Exception("Pattern match failure");
};
$disj1 = $__case_res_8;
$__case_0 = $dictHeytingAlgebra;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->implies;
} else {
throw new \Exception("Pattern match failure");
};
$implies1 = $__case_res_9;
$__case_0 = $dictHeytingAlgebra;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->ff;
} else {
throw new \Exception("Pattern match failure");
};
$ff1 = $__case_res_10;
$__case_0 = $dictHeytingAlgebra;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->not;
} else {
throw new \Exception("Pattern match failure");
};
$not1 = $__case_res_11;
$__case_0 = $dictHeytingAlgebra;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->tt;
} else {
throw new \Exception("Pattern match failure");
};
$tt1 = $__case_res_12;
    $__res = (object)["conjRecord" => (function() use ($conjRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, $conj1) {
  $__fn = function($v, $ra = null, $rb = null) use ($conjRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, $conj1, &$__fn) {
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
$tail = ($conjRecord1)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")), $ra, $rb);
$key = ($reflectSymbol)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")));
$insert = ($__global_Record_Unsafe_unsafeSet)($key);
$get = ($__global_Record_Unsafe_unsafeGet)($key);
    $__res = ($insert)(($conj1)(($get)($ra), ($get)($rb)), $tail);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "disjRecord" => (function() use ($disjRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, $disj1) {
  $__fn = function($v, $ra = null, $rb = null) use ($disjRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, $disj1, &$__fn) {
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
$tail = ($disjRecord1)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")), $ra, $rb);
$key = ($reflectSymbol)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")));
$insert = ($__global_Record_Unsafe_unsafeSet)($key);
$get = ($__global_Record_Unsafe_unsafeGet)($key);
    $__res = ($insert)(($disj1)(($get)($ra), ($get)($rb)), $tail);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "impliesRecord" => (function() use ($impliesRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, $implies1) {
  $__fn = function($v, $ra = null, $rb = null) use ($impliesRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, $implies1, &$__fn) {
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
$tail = ($impliesRecord1)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")), $ra, $rb);
$key = ($reflectSymbol)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")));
$insert = ($__global_Record_Unsafe_unsafeSet)($key);
$get = ($__global_Record_Unsafe_unsafeGet)($key);
    $__res = ($insert)(($implies1)(($get)($ra), ($get)($rb)), $tail);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "ffRecord" => (function() use ($ffRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $ff1) {
  $__fn = function($v, $row = null) use ($ffRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $ff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($row) use ($v, &$__fn) { return $__fn($v, $row); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$tail = ($ffRecord1)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")), $row);
$key = ($reflectSymbol)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")));
$insert = ($__global_Record_Unsafe_unsafeSet)($key);
    $__res = ($insert)($ff1, $tail);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "notRecord" => (function() use ($notRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, $not1) {
  $__fn = function($v, $row = null) use ($notRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, $not1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($row) use ($v, &$__fn) { return $__fn($v, $row); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$tail = ($notRecord1)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")), $row);
$key = ($reflectSymbol)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")));
$insert = ($__global_Record_Unsafe_unsafeSet)($key);
$get = ($__global_Record_Unsafe_unsafeGet)($key);
    $__res = ($insert)(($not1)(($get)($row)), $tail);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ttRecord" => (function() use ($ttRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $tt1) {
  $__fn = function($v, $row = null) use ($ttRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $tt1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($row) use ($v, &$__fn) { return $__fn($v, $row); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$tail = ($ttRecord1)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")), $row);
$key = ($reflectSymbol)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")));
$insert = ($__global_Record_Unsafe_unsafeSet)($key);
    $__res = ($insert)($tt1, $tail);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
    $__res = (function() use ($heytingAlgebraRecordCons, $__global_Prim_undefined) {
  $__fn = function($__dollar____unused, $dictBooleanAlgebraRecord = null) use ($heytingAlgebraRecordCons, $__global_Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dictBooleanAlgebraRecord) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $dictBooleanAlgebraRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$heytingAlgebraRecordCons1 = ($heytingAlgebraRecordCons)((($dictBooleanAlgebraRecord)->HeytingAlgebraRecord0)($__global_Prim_undefined));
    $__res = (function() use ($heytingAlgebraRecordCons1, $__global_Prim_undefined) {
  $__fn = function($dictBooleanAlgebra) use ($heytingAlgebraRecordCons1, $__global_Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$heytingAlgebraRecordCons2 = ($heytingAlgebraRecordCons1)((($dictBooleanAlgebra)->HeytingAlgebra0)($__global_Prim_undefined));
    $__res = (object)["HeytingAlgebraRecord0" => (function() use ($heytingAlgebraRecordCons2) {
  $__fn = function($__dollar____unused) use ($heytingAlgebraRecordCons2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $heytingAlgebraRecordCons2;
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
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_BooleanAlgebra_booleanAlgebraRecordCons'] = __NAMESPACE__ . '\\Data_BooleanAlgebra_booleanAlgebraRecordCons';

// Data_BooleanAlgebra_booleanAlgebraRecord
function Data_BooleanAlgebra_booleanAlgebraRecord($__dollar____unused, $dictBooleanAlgebraRecord = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_BooleanAlgebra_booleanAlgebraRecord';
  if ($__num < 2) {
    if ($__num === 1) return function($dictBooleanAlgebraRecord) use ($__dollar____unused, $__fn) { return $__fn($__dollar____unused, $dictBooleanAlgebraRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_BooleanAlgebra_heytingAlgebraRecord = ($GLOBALS['Data_BooleanAlgebra_heytingAlgebraRecord'] ?? \Data\BooleanAlgebra\phpurs_eval_thunk('Data_BooleanAlgebra_heytingAlgebraRecord'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$heytingAlgebraRecord1 = ($__global_Data_BooleanAlgebra_heytingAlgebraRecord)((($dictBooleanAlgebraRecord)->HeytingAlgebraRecord0)($__global_Prim_undefined));
    $__res = (object)["HeytingAlgebra0" => (function() use ($heytingAlgebraRecord1) {
  $__fn = function($__dollar____unused) use ($heytingAlgebraRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $heytingAlgebraRecord1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_BooleanAlgebra_booleanAlgebraRecord'] = __NAMESPACE__ . '\\Data_BooleanAlgebra_booleanAlgebraRecord';


// Data_BooleanAlgebra_booleanAlgebraFn
function Data_BooleanAlgebra_booleanAlgebraFn($dictBooleanAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_BooleanAlgebra_booleanAlgebraFn';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->ff;
} else {
throw new \Exception("Pattern match failure");
};
$ff1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->tt;
} else {
throw new \Exception("Pattern match failure");
};
$tt1 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->implies;
} else {
throw new \Exception("Pattern match failure");
};
$implies1 = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->conj;
} else {
throw new \Exception("Pattern match failure");
};
$conj1 = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->disj;
} else {
throw new \Exception("Pattern match failure");
};
$disj1 = $__case_res_4;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->not;
} else {
throw new \Exception("Pattern match failure");
};
$not1 = $__case_res_5;
$heytingAlgebraFunction = (object)["ff" => (function() use ($ff1) {
  $__fn = function($v) use ($ff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ff1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "tt" => (function() use ($tt1) {
  $__fn = function($v) use ($tt1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $tt1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "implies" => (function() use ($implies1) {
  $__fn = function($f, $g = null, $a = null) use ($implies1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($a) use ($f, $g, &$__fn) { return $__fn($f, $g, $a); };
    if ($__num === 1) return function($g, $a = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $a);
      if ($__num2 === 1) return function($a) use ($f, $g, &$__fn) { return $__fn($f, $g, $a); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($implies1)(($f)($a), ($g)($a));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "conj" => (function() use ($conj1) {
  $__fn = function($f, $g = null, $a = null) use ($conj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($a) use ($f, $g, &$__fn) { return $__fn($f, $g, $a); };
    if ($__num === 1) return function($g, $a = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $a);
      if ($__num2 === 1) return function($a) use ($f, $g, &$__fn) { return $__fn($f, $g, $a); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($conj1)(($f)($a), ($g)($a));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "disj" => (function() use ($disj1) {
  $__fn = function($f, $g = null, $a = null) use ($disj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($a) use ($f, $g, &$__fn) { return $__fn($f, $g, $a); };
    if ($__num === 1) return function($g, $a = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $a);
      if ($__num2 === 1) return function($a) use ($f, $g, &$__fn) { return $__fn($f, $g, $a); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($disj1)(($f)($a), ($g)($a));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "not" => (function() use ($not1) {
  $__fn = function($f, $a = null) use ($not1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($not1)(($f)($a));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["HeytingAlgebra0" => (function() use ($heytingAlgebraFunction) {
  $__fn = function($__dollar____unused) use ($heytingAlgebraFunction, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $heytingAlgebraFunction;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_BooleanAlgebra_booleanAlgebraFn'] = __NAMESPACE__ . '\\Data_BooleanAlgebra_booleanAlgebraFn';


