<?php

namespace Data\Semiring;

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
      case 'Data_Semiring_semiringUnit': $v = (($GLOBALS['Data_Semiring_Semiring__dollar__Dict'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_Semiring__dollar__Dict')))((object)["add" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = $__global_Data_Unit_unit;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "zero" => ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), "mul" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = $__global_Data_Unit_unit;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "one" => ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))]); break;
      case 'Data_Semiring_semiringRecordNil': $v = (($GLOBALS['Data_Semiring_SemiringRecord__dollar__Dict'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_SemiringRecord__dollar__Dict')))((object)["addRecord" => (function() {
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
})(), "mulRecord" => (function() {
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
})(), "oneRecord" => (function() {
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
})(), "zeroRecord" => (function() {
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
})()]); break;
      case 'Data_Semiring_semiringProxy': $v = (($GLOBALS['Data_Semiring_Semiring__dollar__Dict'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_Semiring__dollar__Dict')))((object)["add" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Type_Proxy_Proxy = ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'));
    $__res = $__global_Type_Proxy_Proxy;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "mul" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Type_Proxy_Proxy = ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'));
    $__res = $__global_Type_Proxy_Proxy;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "one" => ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')), "zero" => ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'))]); break;
      case 'Data_Semiring_semiringNumber': $v = (($GLOBALS['Data_Semiring_Semiring__dollar__Dict'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_Semiring__dollar__Dict')))((object)["add" => ($GLOBALS['Data_Semiring_numAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_numAdd')), "zero" => 0.0, "mul" => ($GLOBALS['Data_Semiring_numMul'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_numMul')), "one" => 1.0]); break;
      case 'Data_Semiring_semiringInt': $v = (($GLOBALS['Data_Semiring_Semiring__dollar__Dict'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_Semiring__dollar__Dict')))((object)["add" => ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')), "zero" => 0, "mul" => ($GLOBALS['Data_Semiring_intMul'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intMul')), "one" => 1]); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Semiring_SemiringRecord$Dict
function Data_Semiring_SemiringRecord__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_SemiringRecord__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_SemiringRecord__dollar__Dict'] = __NAMESPACE__ . '\\Data_Semiring_SemiringRecord__dollar__Dict';

// Data_Semiring_Semiring$Dict
function Data_Semiring_Semiring__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Semiring__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Semiring__dollar__Dict'] = __NAMESPACE__ . '\\Data_Semiring_Semiring__dollar__Dict';

// Data_Semiring_zeroRecord
function Data_Semiring_zeroRecord($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_zeroRecord';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->zeroRecord;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_zeroRecord'] = __NAMESPACE__ . '\\Data_Semiring_zeroRecord';

// Data_Semiring_zero
function Data_Semiring_zero($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_zero';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->zero;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_zero'] = __NAMESPACE__ . '\\Data_Semiring_zero';






// Data_Semiring_oneRecord
function Data_Semiring_oneRecord($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_oneRecord';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->oneRecord;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_oneRecord'] = __NAMESPACE__ . '\\Data_Semiring_oneRecord';

// Data_Semiring_one
function Data_Semiring_one($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_one';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->one;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_one'] = __NAMESPACE__ . '\\Data_Semiring_one';

// Data_Semiring_mulRecord
function Data_Semiring_mulRecord($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_mulRecord';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->mulRecord;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_mulRecord'] = __NAMESPACE__ . '\\Data_Semiring_mulRecord';

// Data_Semiring_mul
function Data_Semiring_mul($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_mul';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->mul;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_mul'] = __NAMESPACE__ . '\\Data_Semiring_mul';

// Data_Semiring_addRecord
function Data_Semiring_addRecord($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_addRecord';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->addRecord;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_addRecord'] = __NAMESPACE__ . '\\Data_Semiring_addRecord';

// Data_Semiring_semiringRecord
function Data_Semiring_semiringRecord($__dollar____unused, $dictSemiringRecord = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_semiringRecord';
  if ($__num < 2) {
    if ($__num === 1) return function($dictSemiringRecord) use ($__dollar____unused, $__fn) { return $__fn($__dollar____unused, $dictSemiringRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Semiring_Semiring__dollar__Dict = ($GLOBALS['Data_Semiring_Semiring__dollar__Dict'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_Semiring__dollar__Dict'));
$__global_Type_Proxy_Proxy = ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'));
    $__res = ($__global_Data_Semiring_Semiring__dollar__Dict)((object)["add" => (($dictSemiringRecord)->addRecord)($__global_Type_Proxy_Proxy), "mul" => (($dictSemiringRecord)->mulRecord)($__global_Type_Proxy_Proxy), "one" => (($dictSemiringRecord)->oneRecord)($__global_Type_Proxy_Proxy, $__global_Type_Proxy_Proxy), "zero" => (($dictSemiringRecord)->zeroRecord)($__global_Type_Proxy_Proxy, $__global_Type_Proxy_Proxy)]);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Semiring_semiringRecord'] = __NAMESPACE__ . '\\Data_Semiring_semiringRecord';

// Data_Semiring_add
function Data_Semiring_add($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_add';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_add'] = __NAMESPACE__ . '\\Data_Semiring_add';

// Data_Semiring_semiringFn
function Data_Semiring_semiringFn($dictSemiring) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_semiringFn';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Semiring_Semiring__dollar__Dict = ($GLOBALS['Data_Semiring_Semiring__dollar__Dict'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_Semiring__dollar__Dict'));
$add1 = ($dictSemiring)->add;
$zero1 = ($dictSemiring)->zero;
$mul1 = ($dictSemiring)->mul;
$one1 = ($dictSemiring)->one;
    $__res = ($__global_Data_Semiring_Semiring__dollar__Dict)((object)["add" => (function() use ($add1) {
  $__fn = function($f, $g = null, $x = null) use ($add1, &$__fn) {
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
    $__res = ($add1)(($f)($x), ($g)($x));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "zero" => (function() use ($zero1) {
  $__fn = function($v) use ($zero1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $zero1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "mul" => (function() use ($mul1) {
  $__fn = function($f, $g = null, $x = null) use ($mul1, &$__fn) {
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
    $__res = ($mul1)(($f)($x), ($g)($x));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "one" => (function() use ($one1) {
  $__fn = function($v) use ($one1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $one1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_semiringFn'] = __NAMESPACE__ . '\\Data_Semiring_semiringFn';

// Data_Semiring_semiringRecordCons
function Data_Semiring_semiringRecordCons($dictIsSymbol) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_semiringRecordCons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Semiring_SemiringRecord__dollar__Dict = ($GLOBALS['Data_Semiring_SemiringRecord__dollar__Dict'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_SemiringRecord__dollar__Dict'));
$__global_Type_Proxy_Proxy = ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'));
$__global_Record_Unsafe_unsafeSet = ($GLOBALS['Record_Unsafe_unsafeSet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeSet'));
$__global_Record_Unsafe_unsafeGet = ($GLOBALS['Record_Unsafe_unsafeGet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeGet'));
$reflectSymbol = ($dictIsSymbol)->reflectSymbol;
    $__res = (function() use ($__global_Data_Semiring_SemiringRecord__dollar__Dict, $__global_Type_Proxy_Proxy, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet) {
  $__fn = function($__dollar____unused, $dictSemiringRecord = null) use ($__global_Data_Semiring_SemiringRecord__dollar__Dict, $__global_Type_Proxy_Proxy, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dictSemiringRecord) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $dictSemiringRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$addRecord1 = ($dictSemiringRecord)->addRecord;
$mulRecord1 = ($dictSemiringRecord)->mulRecord;
$oneRecord1 = ($dictSemiringRecord)->oneRecord;
$zeroRecord1 = ($dictSemiringRecord)->zeroRecord;
    $__res = (function() use ($__global_Data_Semiring_SemiringRecord__dollar__Dict, $addRecord1, $__global_Type_Proxy_Proxy, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, $mulRecord1, $oneRecord1, $zeroRecord1) {
  $__fn = function($dictSemiring) use ($__global_Data_Semiring_SemiringRecord__dollar__Dict, $addRecord1, $__global_Type_Proxy_Proxy, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, $mulRecord1, $oneRecord1, $zeroRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$add1 = ($dictSemiring)->add;
$mul1 = ($dictSemiring)->mul;
$one1 = ($dictSemiring)->one;
$zero1 = ($dictSemiring)->zero;
    $__res = ($__global_Data_Semiring_SemiringRecord__dollar__Dict)((object)["addRecord" => (function() use ($addRecord1, $__global_Type_Proxy_Proxy, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, $add1) {
  $__fn = function($v, $ra = null, $rb = null) use ($addRecord1, $__global_Type_Proxy_Proxy, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, $add1, &$__fn) {
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
$tail = ($addRecord1)($__global_Type_Proxy_Proxy, $ra, $rb);
$key = ($reflectSymbol)($__global_Type_Proxy_Proxy);
$insert = ($__global_Record_Unsafe_unsafeSet)($key);
$get = ($__global_Record_Unsafe_unsafeGet)($key);
    $__res = ($insert)(($add1)(($get)($ra), ($get)($rb)), $tail);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "mulRecord" => (function() use ($mulRecord1, $__global_Type_Proxy_Proxy, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, $mul1) {
  $__fn = function($v, $ra = null, $rb = null) use ($mulRecord1, $__global_Type_Proxy_Proxy, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $__global_Record_Unsafe_unsafeGet, $mul1, &$__fn) {
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
$tail = ($mulRecord1)($__global_Type_Proxy_Proxy, $ra, $rb);
$key = ($reflectSymbol)($__global_Type_Proxy_Proxy);
$insert = ($__global_Record_Unsafe_unsafeSet)($key);
$get = ($__global_Record_Unsafe_unsafeGet)($key);
    $__res = ($insert)(($mul1)(($get)($ra), ($get)($rb)), $tail);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "oneRecord" => (function() use ($oneRecord1, $__global_Type_Proxy_Proxy, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $one1) {
  $__fn = function($v, $v1 = null) use ($oneRecord1, $__global_Type_Proxy_Proxy, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $one1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$tail = ($oneRecord1)($__global_Type_Proxy_Proxy, $__global_Type_Proxy_Proxy);
$key = ($reflectSymbol)($__global_Type_Proxy_Proxy);
$insert = ($__global_Record_Unsafe_unsafeSet)($key);
    $__res = ($insert)($one1, $tail);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "zeroRecord" => (function() use ($zeroRecord1, $__global_Type_Proxy_Proxy, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $zero1) {
  $__fn = function($v, $v1 = null) use ($zeroRecord1, $__global_Type_Proxy_Proxy, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $zero1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$tail = ($zeroRecord1)($__global_Type_Proxy_Proxy, $__global_Type_Proxy_Proxy);
$key = ($reflectSymbol)($__global_Type_Proxy_Proxy);
$insert = ($__global_Record_Unsafe_unsafeSet)($key);
    $__res = ($insert)($zero1, $tail);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
$GLOBALS['Data_Semiring_semiringRecordCons'] = __NAMESPACE__ . '\\Data_Semiring_semiringRecordCons';

