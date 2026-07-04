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
      case 'Data_Monoid_semigroupRecord': $v = (($GLOBALS['Data_Semigroup_semigroupRecord'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupRecord')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Monoid_lessThanOrEq': $v = (($GLOBALS['Data_Ord_lessThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThanOrEq')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Monoid_eq': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Monoid_mod': $v = ($GLOBALS['Data_EuclideanRing_intMod'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_intMod')); break;
      case 'Data_Monoid_div': $v = ($GLOBALS['Data_EuclideanRing_intDiv'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_intDiv')); break;
      case 'Data_Monoid_monoidUnit': $v = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Semigroup_semigroupUnit'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupUnit'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Monoid_monoidString': $v = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => "", "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Semigroup_semigroupString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupString'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Monoid_monoidRecordNil': $v = (($GLOBALS['Data_Monoid_MonoidRecord__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_MonoidRecord__dollar__Dict')))((object)["memptyRecord" => (function() {
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
    $__res = ($GLOBALS['Data_Semigroup_semigroupRecordNil'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupRecordNil'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Monoid_monoidOrdering': $v = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ')), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Ordering_semigroupOrdering'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_semigroupOrdering'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Monoid_monoidArray': $v = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => [], "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Semigroup_semigroupArray'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupArray'));
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
$semigroupRecord1 = (($GLOBALS['Data_Monoid_semigroupRecord'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_semigroupRecord')))((($dictMonoidRecord)->SemigroupRecord0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Data_Monoid_memptyRecord'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_memptyRecord')))($dictMonoidRecord, ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'))), "Semigroup0" => (function() use ($semigroupRecord1) {
  $__fn = function($__dollar____unused) use ($semigroupRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupRecord1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
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
$mempty1 = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
$semigroupFn = (($GLOBALS['Data_Semigroup_semigroupFn'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupFn')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (function() use ($mempty1) {
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
})()]);
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
$reflectSymbol = (($GLOBALS['Data_Symbol_reflectSymbol'] ?? \Data\Symbol\phpurs_eval_thunk('Data_Symbol_reflectSymbol')))($dictIsSymbol);
$semigroupRecordCons = (($GLOBALS['Data_Semigroup_semigroupRecordCons'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupRecordCons')))($dictIsSymbol, ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
    $__res = (function() use ($semigroupRecordCons, $reflectSymbol) {
  $__fn = function($dictMonoid) use ($semigroupRecordCons, $reflectSymbol, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty1 = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
$Semigroup0 = (($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
    $__res = (function() use ($semigroupRecordCons, &$Semigroup0, $reflectSymbol, $mempty1) {
  $__fn = function($__dollar____unused, $dictMonoidRecord = null) use ($semigroupRecordCons, &$Semigroup0, $reflectSymbol, $mempty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dictMonoidRecord) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $dictMonoidRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$memptyRecord1 = (($GLOBALS['Data_Monoid_memptyRecord'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_memptyRecord')))($dictMonoidRecord);
$semigroupRecordCons1 = ($semigroupRecordCons)((($dictMonoidRecord)->SemigroupRecord0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))), $Semigroup0);
    $__res = (($GLOBALS['Data_Monoid_MonoidRecord__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_MonoidRecord__dollar__Dict')))((object)["memptyRecord" => (function() use ($memptyRecord1, $reflectSymbol, $mempty1) {
  $__fn = function($v) use ($memptyRecord1, $reflectSymbol, $mempty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$tail = ($memptyRecord1)(($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')));
$key = ($reflectSymbol)(($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')));
$insert = (($GLOBALS['Record_Unsafe_unsafeSet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeSet')))($key);
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
})()]);
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
$mempty1 = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
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
$mempty1 = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid);
    $__res = (function() use ($mempty1) {
  $__body = function($v, $v1) use ($mempty1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (($__case_0 === true)) {
$a = $__case_1;
return $a;
} else {
if (($__case_0 === false)) {
return $mempty1;
} else {
throw new \Exception("Pattern match failure");
};
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

