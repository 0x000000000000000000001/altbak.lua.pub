<?php

namespace Data\Monoid;

require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
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
      case 'Data_Monoid_semigroupRecord': $v = (($GLOBALS['Data_Semigroup_semigroupRecord'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupRecord')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Monoid_lessThanOrEq': $v = (function() {
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
case "GT":
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
      case 'Data_Monoid_eq': $v = (function() {
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
      case 'Data_Monoid_mod': $v = (function() {
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
      case 'Data_Monoid_div': $v = (function() {
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
      case 'Data_Monoid_monoidUnit': $v = (object)["mempty" => ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Semigroup_semigroupUnit = ($GLOBALS['Data_Semigroup_semigroupUnit'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupUnit'));
    $__res = $__global_Data_Semigroup_semigroupUnit;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Monoid_monoidString': $v = (object)["mempty" => "", "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Semigroup_semigroupString = ($GLOBALS['Data_Semigroup_semigroupString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupString'));
    $__res = $__global_Data_Semigroup_semigroupString;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Monoid_monoidRecordNil': $v = (object)["memptyRecord" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (object)[];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "SemigroupRecord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Semigroup_semigroupRecordNil = ($GLOBALS['Data_Semigroup_semigroupRecordNil'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupRecordNil'));
    $__res = $__global_Data_Semigroup_semigroupRecordNil;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Monoid_monoidOrdering': $v = (object)["mempty" => ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ")), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ordering_semigroupOrdering = ($GLOBALS['Data_Ordering_semigroupOrdering'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_semigroupOrdering'));
    $__res = $__global_Data_Ordering_semigroupOrdering;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Monoid_monoidArray': $v = (object)["mempty" => [], "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Semigroup_semigroupArray = ($GLOBALS['Data_Semigroup_semigroupArray'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupArray'));
    $__res = $__global_Data_Semigroup_semigroupArray;
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







// Data_Monoid_MonoidRecord$Dict
function Data_Monoid_MonoidRecord__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_MonoidRecord__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_MonoidRecord__dollar__Dict'] = __NAMESPACE__ . '\\Data_Monoid_MonoidRecord__dollar__Dict';

// Data_Monoid_Monoid$Dict
function Data_Monoid_Monoid__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Monoid__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Monoid__dollar__Dict'] = __NAMESPACE__ . '\\Data_Monoid_Monoid__dollar__Dict';






// Data_Monoid_memptyRecord
function Data_Monoid_memptyRecord($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_memptyRecord';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->memptyRecord;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_memptyRecord'] = __NAMESPACE__ . '\\Data_Monoid_memptyRecord';

// Data_Monoid_monoidRecord
function Data_Monoid_monoidRecord($__dollar____unused, $dictMonoidRecord = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_monoidRecord';
  if ($__num < 2) {
    if ($__num === 1) return function($dictMonoidRecord) use ($__dollar____unused, $__fn) { return $__fn($__dollar____unused, $dictMonoidRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Monoid_semigroupRecord = ($GLOBALS['Data_Monoid_semigroupRecord'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_semigroupRecord'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$semigroupRecord1 = ($__global_Data_Monoid_semigroupRecord)((($dictMonoidRecord)->SemigroupRecord0)($__global_Prim_undefined));
$__case_0 = $dictMonoidRecord;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->memptyRecord;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["mempty" => ($__case_res_0)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy"))), "Semigroup0" => (function() use ($semigroupRecord1) {
  $__fn = function($__dollar____unused) use ($semigroupRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupRecord1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Monoid_monoidRecord'] = __NAMESPACE__ . '\\Data_Monoid_monoidRecord';

// Data_Monoid_mempty
function Data_Monoid_mempty($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_mempty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_mempty'] = __NAMESPACE__ . '\\Data_Monoid_mempty';

// Data_Monoid_monoidFn
function Data_Monoid_monoidFn($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_monoidFn';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append1 = $__case_res_1;
$semigroupFn = (object)["append" => (function() use ($append1) {
  $__fn = function($f, $g = null, $x = null) use ($append1, &$__fn) {
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
    $__res = ($append1)(($f)($x), ($g)($x));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["mempty" => (function() use ($mempty1) {
  $__fn = function($v) use ($mempty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $mempty1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Semigroup0" => (function() use ($semigroupFn) {
  $__fn = function($__dollar____unused) use ($semigroupFn, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupFn;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_monoidFn'] = __NAMESPACE__ . '\\Data_Monoid_monoidFn';

// Data_Monoid_monoidRecordCons
function Data_Monoid_monoidRecordCons($dictIsSymbol) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_monoidRecordCons';
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
$__case_0 = $dictIsSymbol;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->reflectSymbol;
} else {
throw new \Exception("Pattern match failure");
};
$reflectSymbol = $__case_res_1;
$semigroupRecordCons = ((function() use ($reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet) {
  $__fn = function($__dollar____unused, $dictSemigroupRecord = null) use ($reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dictSemigroupRecord) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $dictSemigroupRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__case_0 = $dictSemigroupRecord;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->appendRecord;
} else {
throw new \Exception("Pattern match failure");
};
$appendRecord1 = $__case_res_2;
    $__res = (function() use ($appendRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet) {
  $__fn = function($dictSemigroup) use ($appendRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictSemigroup;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append1 = $__case_res_3;
    $__res = (object)["appendRecord" => (function() use ($appendRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, $append1) {
  $__fn = function($v, $ra = null, $rb = null) use ($appendRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, $append1, &$__fn) {
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
$tail = ($appendRecord1)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")), $ra, $rb);
$key = ($reflectSymbol)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")));
$insert = ($__global_Record_Unsafe_unsafeSet)($key);
$get = ($__global_Record_Unsafe_unsafeGet)($key);
    $__res = ($insert)(($append1)(($get)($ra), ($get)($rb)), $tail);
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
    $__res = (function() use ($__global_Prim_undefined, $semigroupRecordCons, $reflectSymbol, $__global_Record_Unsafe_unsafeSet) {
  $__fn = function($dictMonoid) use ($__global_Prim_undefined, $semigroupRecordCons, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty1 = $__case_res_4;
$Semigroup0 = (($dictMonoid)->Semigroup0)($__global_Prim_undefined);
    $__res = (function() use ($semigroupRecordCons, $__global_Prim_undefined, &$Semigroup0, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $mempty1) {
  $__fn = function($__dollar____unused, $dictMonoidRecord = null) use ($semigroupRecordCons, $__global_Prim_undefined, &$Semigroup0, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $mempty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dictMonoidRecord) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $dictMonoidRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__case_0 = $dictMonoidRecord;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->memptyRecord;
} else {
throw new \Exception("Pattern match failure");
};
$memptyRecord1 = $__case_res_5;
$semigroupRecordCons1 = ($semigroupRecordCons)((($dictMonoidRecord)->SemigroupRecord0)($__global_Prim_undefined), $Semigroup0);
    $__res = (object)["memptyRecord" => (function() use ($memptyRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $mempty1) {
  $__fn = function($v) use ($memptyRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $mempty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$tail = ($memptyRecord1)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")));
$key = ($reflectSymbol)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")));
$insert = ($__global_Record_Unsafe_unsafeSet)($key);
    $__res = ($insert)($mempty1, $tail);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "SemigroupRecord0" => (function() use ($semigroupRecordCons1) {
  $__fn = function($__dollar____unused) use ($semigroupRecordCons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupRecordCons1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
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
$GLOBALS['Data_Monoid_monoidRecordCons'] = __NAMESPACE__ . '\\Data_Monoid_monoidRecordCons';

// Data_Monoid_power
function Data_Monoid_power($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_power';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_1;
    $__res = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() {
  $__fn = function($p) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $p;
if (true) {
$p1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_power'] = __NAMESPACE__ . '\\Data_Monoid_power';

// Data_Monoid_guard
function Data_Monoid_guard($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_guard';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictMonoid;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->mempty;
} else {
throw new \Exception("Pattern match failure");
};
$mempty1 = $__case_res_0;
    $__res = (function() use ($mempty1) {
  $__body = function($v, $v1) use ($mempty1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch ($__case_0) {
case true:
$a = $__case_1;
return $a;
break;
case false:
return $mempty1;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($mempty1, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_guard'] = __NAMESPACE__ . '\\Data_Monoid_guard';

