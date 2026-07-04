<?php

namespace Data\Ord;

require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
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
      case 'Data_Ord_eqRec': $v = (($GLOBALS['Data_Eq_eqRec'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqRec')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Ord_negate': $v = (($GLOBALS['Data_Ring_negate'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_negate')))(($GLOBALS['Data_Ring_ringInt'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringInt'))); break;
      case 'Data_Ord_notEq': $v = (($GLOBALS['Data_Eq_notEq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_notEq')))(($GLOBALS['Data_Ordering_eqOrdering'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_eqOrdering'))); break;
      case 'Data_Ord_ordVoid': $v = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Ordering_EQ = ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
    $__res = $__global_Data_Ordering_EQ;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Eq_eqVoid = ($GLOBALS['Data_Eq_eqVoid'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqVoid'));
    $__res = $__global_Data_Eq_eqVoid;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Ord_ordUnit': $v = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Ordering_EQ = ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
    $__res = $__global_Data_Ordering_EQ;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Eq_eqUnit = ($GLOBALS['Data_Eq_eqUnit'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqUnit'));
    $__res = $__global_Data_Eq_eqUnit;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Ord_ordString': $v = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (($GLOBALS['Data_Ord_ordStringImpl'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordStringImpl')))(($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT')), ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ')), ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'))), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Eq_eqString = ($GLOBALS['Data_Eq_eqString'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqString'));
    $__res = $__global_Data_Eq_eqString;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Ord_ordRecordNil': $v = (($GLOBALS['Data_Ord_OrdRecord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_OrdRecord__dollar__Dict')))((object)["compareRecord" => (function() {
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
$__global_Data_Ordering_EQ = ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
    $__res = $__global_Data_Ordering_EQ;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "EqRecord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Eq_eqRowNil = ($GLOBALS['Data_Eq_eqRowNil'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqRowNil'));
    $__res = $__global_Data_Eq_eqRowNil;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Ord_ordProxy': $v = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Ordering_EQ = ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
    $__res = $__global_Data_Ordering_EQ;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Eq_eqProxy = ($GLOBALS['Data_Eq_eqProxy'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqProxy'));
    $__res = $__global_Data_Eq_eqProxy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Ord_ordOrdering': $v = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() {
  $__body = function($v, $v1) {
    $__global_Data_Ordering_EQ = ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
    $__global_Data_Ordering_LT = ($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT'));
    $__global_Data_Ordering_GT = ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'));
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "LT") && (($__case_1)->tag === "LT"))) {
return $__global_Data_Ordering_EQ;
} else {
if (((($__case_0)->tag === "EQ") && (($__case_1)->tag === "EQ"))) {
return $__global_Data_Ordering_EQ;
} else {
if (((($__case_0)->tag === "GT") && (($__case_1)->tag === "GT"))) {
return $__global_Data_Ordering_EQ;
} else {
if ((($__case_0)->tag === "LT")) {
return $__global_Data_Ordering_LT;
} else {
if (((($__case_0)->tag === "EQ") && (($__case_1)->tag === "LT"))) {
return $__global_Data_Ordering_GT;
} else {
if (((($__case_0)->tag === "EQ") && (($__case_1)->tag === "GT"))) {
return $__global_Data_Ordering_LT;
} else {
switch (($__case_0)->tag) {
case "GT":
return $__global_Data_Ordering_GT;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
};
};
};
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ordering_eqOrdering = ($GLOBALS['Data_Ordering_eqOrdering'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_eqOrdering'));
    $__res = $__global_Data_Ordering_eqOrdering;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Ord_ordNumber': $v = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (($GLOBALS['Data_Ord_ordNumberImpl'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumberImpl')))(($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT')), ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ')), ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'))), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Eq_eqNumber = ($GLOBALS['Data_Eq_eqNumber'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqNumber'));
    $__res = $__global_Data_Eq_eqNumber;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Ord_ordInt': $v = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (($GLOBALS['Data_Ord_ordIntImpl'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordIntImpl')))(($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT')), ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ')), ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'))), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Eq_eqInt = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt'));
    $__res = $__global_Data_Eq_eqInt;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Ord_ordChar': $v = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (($GLOBALS['Data_Ord_ordCharImpl'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordCharImpl')))(($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT')), ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ')), ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'))), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Eq_eqChar = ($GLOBALS['Data_Eq_eqChar'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqChar'));
    $__res = $__global_Data_Eq_eqChar;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Ord_ordBoolean': $v = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (($GLOBALS['Data_Ord_ordBooleanImpl'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordBooleanImpl')))(($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT')), ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ')), ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'))), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Eq_eqBoolean = ($GLOBALS['Data_Eq_eqBoolean'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqBoolean'));
    $__res = $__global_Data_Eq_eqBoolean;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Ord_compare2': $v = (($GLOBALS['Data_Ord_ordIntImpl'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordIntImpl')))(($GLOBALS['Data_Ordering_LT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_LT')), ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ')), ($GLOBALS['Data_Ordering_GT'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_GT'))); break;
      case 'Data_Ord_ord1Array': $v = (($GLOBALS['Data_Ord_Ord1__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord1__dollar__Dict')))((object)["compare1" => (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ord_ordArray = ($GLOBALS['Data_Ord_ordArray'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordArray'));
    $__res = (($__global_Data_Ord_ordArray)($dictOrd))->compare;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Eq10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Eq_eq1Array = ($GLOBALS['Data_Eq_eq1Array'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq1Array'));
    $__res = $__global_Data_Eq_eq1Array;
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





// Data_Ord_OrdRecord$Dict
function Data_Ord_OrdRecord__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_OrdRecord__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_OrdRecord__dollar__Dict'] = __NAMESPACE__ . '\\Data_Ord_OrdRecord__dollar__Dict';

// Data_Ord_Ord$Dict
function Data_Ord_Ord__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_Ord__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_Ord__dollar__Dict'] = __NAMESPACE__ . '\\Data_Ord_Ord__dollar__Dict';

// Data_Ord_Ord1$Dict
function Data_Ord_Ord1__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_Ord1__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_Ord1__dollar__Dict'] = __NAMESPACE__ . '\\Data_Ord_Ord1__dollar__Dict';











// Data_Ord_compareRecord
function Data_Ord_compareRecord($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_compareRecord';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->compareRecord;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_compareRecord'] = __NAMESPACE__ . '\\Data_Ord_compareRecord';

// Data_Ord_ordRecord
function Data_Ord_ordRecord($__dollar____unused, $dictOrdRecord = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_ordRecord';
  if ($__num < 2) {
    if ($__num === 1) return function($dictOrdRecord) use ($__dollar____unused, $__fn) { return $__fn($__dollar____unused, $dictOrdRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Ord_eqRec = ($GLOBALS['Data_Ord_eqRec'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_eqRec'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Ord_Ord__dollar__Dict = ($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict'));
$__global_Type_Proxy_Proxy = ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'));
$eqRec1 = ($__global_Data_Ord_eqRec)((($dictOrdRecord)->EqRecord0)($__global_Prim_undefined));
    $__res = ($__global_Data_Ord_Ord__dollar__Dict)((object)["compare" => (($dictOrdRecord)->compareRecord)($__global_Type_Proxy_Proxy), "Eq0" => (function() use ($eqRec1) {
  $__fn = function($__dollar____unused) use ($eqRec1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqRec1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Ord_ordRecord'] = __NAMESPACE__ . '\\Data_Ord_ordRecord';

// Data_Ord_compare1
function Data_Ord_compare1($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_compare1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->compare1;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_compare1'] = __NAMESPACE__ . '\\Data_Ord_compare1';

// Data_Ord_compare
function Data_Ord_compare($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_compare';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_compare'] = __NAMESPACE__ . '\\Data_Ord_compare';


// Data_Ord_comparing
function Data_Ord_comparing($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_comparing';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare3 = ($dictOrd)->compare;
    $__res = (function() use ($compare3) {
  $__fn = function($f, $x = null, $y = null) use ($compare3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($y) use ($f, $x, &$__fn) { return $__fn($f, $x, $y); };
    if ($__num === 1) return function($x, $y = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $x, $y);
      if ($__num2 === 1) return function($y) use ($f, $x, &$__fn) { return $__fn($f, $x, $y); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($compare3)(($f)($x), ($f)($y));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_comparing'] = __NAMESPACE__ . '\\Data_Ord_comparing';

// Data_Ord_greaterThan
function Data_Ord_greaterThan($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_greaterThan';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare3 = ($dictOrd)->compare;
    $__res = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    if ((($__case_0)->tag === "GT")) {
return true;
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_greaterThan'] = __NAMESPACE__ . '\\Data_Ord_greaterThan';

// Data_Ord_greaterThanOrEq
function Data_Ord_greaterThanOrEq($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_greaterThanOrEq';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare3 = ($dictOrd)->compare;
    $__res = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    if ((($__case_0)->tag === "LT")) {
return false;
} else {
if (true) {
return true;
} else {
throw new \Exception("Pattern match failure");
};
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_greaterThanOrEq'] = __NAMESPACE__ . '\\Data_Ord_greaterThanOrEq';

// Data_Ord_lessThan
function Data_Ord_lessThan($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_lessThan';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare3 = ($dictOrd)->compare;
    $__res = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    if ((($__case_0)->tag === "LT")) {
return true;
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_lessThan'] = __NAMESPACE__ . '\\Data_Ord_lessThan';

// Data_Ord_signum
function Data_Ord_signum($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_signum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ord_lessThan = ($GLOBALS['Data_Ord_lessThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThan'));
$__global_Data_Ord_greaterThan = ($GLOBALS['Data_Ord_greaterThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThan'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Ring_negate = ($GLOBALS['Data_Ring_negate'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_negate'));
$lessThan1 = ($__global_Data_Ord_lessThan)($dictOrd);
$greaterThan1 = ($__global_Data_Ord_greaterThan)($dictOrd);
    $__res = (function() use ($__global_Prim_undefined, $__global_Data_Ring_negate, $lessThan1, $greaterThan1) {
  $__fn = function($dictRing) use ($__global_Prim_undefined, $__global_Data_Ring_negate, $lessThan1, $greaterThan1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Semiring0 = (($dictRing)->Semiring0)($__global_Prim_undefined);
$zero = ($Semiring0)->zero;
$negate1 = ($__global_Data_Ring_negate)($dictRing);
$one = ($Semiring0)->one;
    $__res = (function() use ($lessThan1, $zero, $negate1, $one, $greaterThan1) {
  $__body = function($x) use ($lessThan1, $zero, $negate1, $one, $greaterThan1) {
    $__case_0 = ($lessThan1)($x, $zero);
    if (($__case_0 === true)) {
return ($negate1)($one);
} else {
if (true) {
$__case_0 = ($greaterThan1)($x, $zero);
if (($__case_0 === true)) {
return $one;
} else {
if (true) {
return $x;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($x) use ($lessThan1, $zero, $negate1, $one, $greaterThan1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($x);
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
$GLOBALS['Data_Ord_signum'] = __NAMESPACE__ . '\\Data_Ord_signum';

// Data_Ord_lessThanOrEq
function Data_Ord_lessThanOrEq($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_lessThanOrEq';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare3 = ($dictOrd)->compare;
    $__res = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    if ((($__case_0)->tag === "GT")) {
return false;
} else {
if (true) {
return true;
} else {
throw new \Exception("Pattern match failure");
};
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_lessThanOrEq'] = __NAMESPACE__ . '\\Data_Ord_lessThanOrEq';

// Data_Ord_max
function Data_Ord_max($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_max';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare3 = ($dictOrd)->compare;
    $__res = (function() use ($compare3) {
  $__body = function($x, $y) use ($compare3) {
    $v = ($compare3)($x, $y);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return $y;
break;
case "EQ":
return $x;
break;
case "GT":
return $x;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($x, $y = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_max'] = __NAMESPACE__ . '\\Data_Ord_max';

// Data_Ord_min
function Data_Ord_min($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_min';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare3 = ($dictOrd)->compare;
    $__res = (function() use ($compare3) {
  $__body = function($x, $y) use ($compare3) {
    $v = ($compare3)($x, $y);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "LT":
return $x;
break;
case "EQ":
return $x;
break;
case "GT":
return $y;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($x, $y = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_min'] = __NAMESPACE__ . '\\Data_Ord_min';

// Data_Ord_ordArray
function Data_Ord_ordArray($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_ordArray';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Eq_eqArray = ($GLOBALS['Data_Eq_eqArray'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqArray'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Ord_Ord__dollar__Dict = ($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict'));
$__global_Data_Ord_negate = ($GLOBALS['Data_Ord_negate'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_negate'));
$__global_Data_Ord_compare2 = ($GLOBALS['Data_Ord_compare2'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare2'));
$__global_Data_Ord_ordArrayImpl = ($GLOBALS['Data_Ord_ordArrayImpl'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordArrayImpl'));
$compare3 = ($dictOrd)->compare;
$eqArray = ($__global_Data_Eq_eqArray)((($dictOrd)->Eq0)($__global_Prim_undefined));
$toDelta = (function() use ($compare3, $__global_Data_Ord_negate) {
  $__body = function($x, $y) use ($compare3, $__global_Data_Ord_negate) {
    $v = ($compare3)($x, $y);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "EQ":
return 0;
break;
case "LT":
return 1;
break;
case "GT":
return ($__global_Data_Ord_negate)(1);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($x, $y = null) use ($compare3, $__global_Data_Ord_negate, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use ($__global_Data_Ord_compare2, $__global_Data_Ord_ordArrayImpl, $toDelta) {
  $__fn = function($xs, $ys = null) use ($__global_Data_Ord_compare2, $__global_Data_Ord_ordArrayImpl, $toDelta, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Ord_compare2)(0, ($__global_Data_Ord_ordArrayImpl)($toDelta, $xs, $ys));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqArray) {
  $__fn = function($__dollar____unused) use ($eqArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqArray;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_ordArray'] = __NAMESPACE__ . '\\Data_Ord_ordArray';


// Data_Ord_ordRecordCons
function Data_Ord_ordRecordCons($dictOrdRecord) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_ordRecordCons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Eq_eqRowCons = ($GLOBALS['Data_Eq_eqRowCons'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqRowCons'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Ord_OrdRecord__dollar__Dict = ($GLOBALS['Data_Ord_OrdRecord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_OrdRecord__dollar__Dict'));
$__global_Record_Unsafe_unsafeGet = ($GLOBALS['Record_Unsafe_unsafeGet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeGet'));
$__global_Type_Proxy_Proxy = ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'));
$__global_Data_Ord_notEq = ($GLOBALS['Data_Ord_notEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_notEq'));
$__global_Data_Ordering_EQ = ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ'));
$compareRecord1 = ($dictOrdRecord)->compareRecord;
$eqRowCons = ($__global_Data_Eq_eqRowCons)((($dictOrdRecord)->EqRecord0)($__global_Prim_undefined), $__global_Prim_undefined);
    $__res = (function() use ($eqRowCons, $__global_Prim_undefined, $__global_Data_Ord_OrdRecord__dollar__Dict, $__global_Record_Unsafe_unsafeGet, $__global_Type_Proxy_Proxy, $__global_Data_Ord_notEq, $__global_Data_Ordering_EQ, $compareRecord1) {
  $__fn = function($__dollar____unused, $dictIsSymbol = null) use ($eqRowCons, $__global_Prim_undefined, $__global_Data_Ord_OrdRecord__dollar__Dict, $__global_Record_Unsafe_unsafeGet, $__global_Type_Proxy_Proxy, $__global_Data_Ord_notEq, $__global_Data_Ordering_EQ, $compareRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dictIsSymbol) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $dictIsSymbol); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$reflectSymbol = ($dictIsSymbol)->reflectSymbol;
$eqRowCons1 = ($eqRowCons)($dictIsSymbol);
    $__res = (function() use ($eqRowCons1, $__global_Prim_undefined, $__global_Data_Ord_OrdRecord__dollar__Dict, $__global_Record_Unsafe_unsafeGet, $reflectSymbol, $__global_Type_Proxy_Proxy, $__global_Data_Ord_notEq, $__global_Data_Ordering_EQ, $compareRecord1) {
  $__fn = function($dictOrd) use ($eqRowCons1, $__global_Prim_undefined, $__global_Data_Ord_OrdRecord__dollar__Dict, $__global_Record_Unsafe_unsafeGet, $reflectSymbol, $__global_Type_Proxy_Proxy, $__global_Data_Ord_notEq, $__global_Data_Ordering_EQ, $compareRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare3 = ($dictOrd)->compare;
$eqRowCons2 = ($eqRowCons1)((($dictOrd)->Eq0)($__global_Prim_undefined));
    $__res = ($__global_Data_Ord_OrdRecord__dollar__Dict)((object)["compareRecord" => (function() use ($__global_Record_Unsafe_unsafeGet, $reflectSymbol, $__global_Type_Proxy_Proxy, $compare3, $__global_Data_Ord_notEq, $__global_Data_Ordering_EQ, $compareRecord1) {
  $__body = function($v, $ra, $rb) use ($__global_Record_Unsafe_unsafeGet, $reflectSymbol, $__global_Type_Proxy_Proxy, $compare3, $__global_Data_Ord_notEq, $__global_Data_Ordering_EQ, $compareRecord1) {
    $unsafeGet__prime__ = $__global_Record_Unsafe_unsafeGet;
    $key = ($reflectSymbol)($__global_Type_Proxy_Proxy);
    $left = ($compare3)(($unsafeGet__prime__)($key, $ra), ($unsafeGet__prime__)($key, $rb));
    $__case_0 = ($__global_Data_Ord_notEq)($left, $__global_Data_Ordering_EQ);
    if (($__case_0 === true)) {
return $left;
} else {
if (true) {
return ($compareRecord1)($__global_Type_Proxy_Proxy, $ra, $rb);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $ra = null, $rb = null) use ($__global_Record_Unsafe_unsafeGet, $reflectSymbol, $__global_Type_Proxy_Proxy, $compare3, $__global_Data_Ord_notEq, $__global_Data_Ordering_EQ, $compareRecord1, $__body, &$__fn) {
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
$GLOBALS['Data_Ord_ordRecordCons'] = __NAMESPACE__ . '\\Data_Ord_ordRecordCons';

// Data_Ord_clamp
function Data_Ord_clamp($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_clamp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ord_min = ($GLOBALS['Data_Ord_min'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_min'));
$__global_Data_Ord_max = ($GLOBALS['Data_Ord_max'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_max'));
$min1 = ($__global_Data_Ord_min)($dictOrd);
$max1 = ($__global_Data_Ord_max)($dictOrd);
    $__res = (function() use ($min1, $max1) {
  $__fn = function($low, $hi = null, $x = null) use ($min1, $max1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($x) use ($low, $hi, &$__fn) { return $__fn($low, $hi, $x); };
    if ($__num === 1) return function($hi, $x = null) use ($low, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($low, $hi, $x);
      if ($__num2 === 1) return function($x) use ($low, $hi, &$__fn) { return $__fn($low, $hi, $x); };
      return phpurs_curry_fallback($__fn, [$low], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($min1)($hi, ($max1)($low, $x));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_clamp'] = __NAMESPACE__ . '\\Data_Ord_clamp';

// Data_Ord_between
function Data_Ord_between($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_between';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ord_lessThan = ($GLOBALS['Data_Ord_lessThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThan'));
$__global_Data_Ord_greaterThan = ($GLOBALS['Data_Ord_greaterThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThan'));
$lessThan1 = ($__global_Data_Ord_lessThan)($dictOrd);
$greaterThan1 = ($__global_Data_Ord_greaterThan)($dictOrd);
    $__res = (function() {
  $__body = function($low, $hi, $x) {
    $__case_0 = $low;
    $__case_1 = $hi;
    $__case_2 = $x;
    if (true) {
$low1 = $__case_0;
$hi1 = $__case_1;
$x1 = $__case_2;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($low, $hi = null, $x = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($x) use ($low, $hi, &$__fn) { return $__fn($low, $hi, $x); };
    if ($__num === 1) return function($hi, $x = null) use ($low, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($low, $hi, $x);
      if ($__num2 === 1) return function($x) use ($low, $hi, &$__fn) { return $__fn($low, $hi, $x); };
      return phpurs_curry_fallback($__fn, [$low], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($low, $hi, $x);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Ord_between'] = __NAMESPACE__ . '\\Data_Ord_between';

// Data_Ord_abs
function Data_Ord_abs($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Ord_abs';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ord_greaterThanOrEq = ($GLOBALS['Data_Ord_greaterThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThanOrEq'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Ring_negate = ($GLOBALS['Data_Ring_negate'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_negate'));
$greaterThanOrEq1 = ($__global_Data_Ord_greaterThanOrEq)($dictOrd);
    $__res = (function() use ($__global_Prim_undefined, $__global_Data_Ring_negate, $greaterThanOrEq1) {
  $__fn = function($dictRing) use ($__global_Prim_undefined, $__global_Data_Ring_negate, $greaterThanOrEq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$zero = ((($dictRing)->Semiring0)($__global_Prim_undefined))->zero;
$negate1 = ($__global_Data_Ring_negate)($dictRing);
    $__res = (function() use ($greaterThanOrEq1, $zero, $negate1) {
  $__body = function($x) use ($greaterThanOrEq1, $zero, $negate1) {
    $__case_0 = ($greaterThanOrEq1)($x, $zero);
    if (($__case_0 === true)) {
return $x;
} else {
if (true) {
return ($negate1)($x);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($x) use ($greaterThanOrEq1, $zero, $negate1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($x);
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
$GLOBALS['Data_Ord_abs'] = __NAMESPACE__ . '\\Data_Ord_abs';

