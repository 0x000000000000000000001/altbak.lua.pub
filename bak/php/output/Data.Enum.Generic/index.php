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
      case 'Data_Enum_Generic_unwrap': $v = (($GLOBALS['Data_Newtype_unwrap'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Enum_Generic_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_Enum_Generic_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Enum_Generic_greaterThanOrEq': $v = (($GLOBALS['Data_Ord_greaterThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThanOrEq')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Enum_Generic_lessThan': $v = (($GLOBALS['Data_Ord_lessThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThan')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Enum_Generic_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_Enum_Generic_mul': $v = ($GLOBALS['Data_Semiring_intMul'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intMul')); break;
      case 'Data_Enum_Generic_div': $v = ($GLOBALS['Data_EuclideanRing_intDiv'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_intDiv')); break;
      case 'Data_Enum_Generic_mod': $v = ($GLOBALS['Data_EuclideanRing_intMod'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_intMod')); break;
      case 'Data_Enum_Generic_eq': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Enum_Generic_genericEnumNoArguments': $v = (($GLOBALS['Data_Enum_Generic_GenericEnum__dollar__Dict'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_GenericEnum__dollar__Dict')))((object)["genericPred'" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericSucc'" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Enum_Generic_genericBoundedEnumNoArguments': $v = (($GLOBALS['Data_Enum_Generic_GenericBoundedEnum__dollar__Dict'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_GenericBoundedEnum__dollar__Dict')))((object)["genericCardinality'" => (($GLOBALS['Data_Enum_Cardinality'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Cardinality')))(1), "genericToEnum'" => (function() {
  $__body = function($i) {
    $__case_0 = (($GLOBALS['Data_Enum_Generic_eq'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_eq')))($i, 0);
    if (($__case_0 === true)) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($GLOBALS['Data_Generic_Rep_NoArguments'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_NoArguments')));
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
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
})()]); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Enum_Generic_compose
function Data_Enum_Generic_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_compose';
  if ($__num < 3) {
    if ($__num === 2) return function($x) use ($f, $g, $__fn) { return $__fn($f, $g, $x); };
    if ($__num === 1) return function($g, $x = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $x);
      if ($__num2 === 1) return function($x) use ($f, $g, $__fn) { return $__fn($f, $g, $x); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($f)(($g)($x));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Enum_Generic_compose'] = __NAMESPACE__ . '\\Data_Enum_Generic_compose';

// Data_Enum_Generic_map
function Data_Enum_Generic_map($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_map';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Just")) {
$fn = $__case_0;
$x = ($__case_1)->v0;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))(($fn)($x));
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
    $__res = $__body($v, $v1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Enum_Generic_map'] = __NAMESPACE__ . '\\Data_Enum_Generic_map';








// Data_Enum_Generic_apply
function Data_Enum_Generic_apply($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_apply';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_0)->tag) {
case "Just":
$fn = ($__case_0)->v0;
$x = $__case_1;
return (($GLOBALS['Data_Maybe_map'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_map')))($fn, $x);
break;
case "Nothing":
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v, $v1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Enum_Generic_apply'] = __NAMESPACE__ . '\\Data_Enum_Generic_apply';




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
$to = (($GLOBALS['Data_Generic_Rep_to'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_to')))($dictGeneric);
    $__res = (function() use ($to) {
  $__fn = function($dictGenericBoundedEnum) use ($to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Enum_Generic_compose'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_compose')))((($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map')))($to), (($GLOBALS['Data_Enum_Generic_genericToEnum__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericToEnum__prime__')))($dictGenericBoundedEnum));
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
$to = (($GLOBALS['Data_Generic_Rep_to'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_to')))($dictGeneric);
$from = (($GLOBALS['Data_Generic_Rep_from'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_from')))($dictGeneric);
    $__res = (function() use ($to, $from) {
  $__fn = function($dictGenericEnum) use ($to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Enum_Generic_compose'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_compose')))((($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map')))($to), (($GLOBALS['Data_Enum_Generic_compose'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_compose')))((($GLOBALS['Data_Enum_Generic_genericSucc__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericSucc__prime__')))($dictGenericEnum), $from));
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
$to = (($GLOBALS['Data_Generic_Rep_to'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_to')))($dictGeneric);
$from = (($GLOBALS['Data_Generic_Rep_from'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_from')))($dictGeneric);
    $__res = (function() use ($to, $from) {
  $__fn = function($dictGenericEnum) use ($to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Enum_Generic_compose'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_compose')))((($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map')))($to), (($GLOBALS['Data_Enum_Generic_compose'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_compose')))((($GLOBALS['Data_Enum_Generic_genericPred__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericPred__prime__')))($dictGenericEnum), $from));
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
$from = (($GLOBALS['Data_Generic_Rep_from'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_from')))($dictGeneric);
    $__res = (function() use ($from) {
  $__fn = function($dictGenericBoundedEnum) use ($from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Enum_Generic_compose'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_compose')))((($GLOBALS['Data_Enum_Generic_genericFromEnum__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericFromEnum__prime__')))($dictGenericBoundedEnum), $from);
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
$genericPred__prime__1 = (($GLOBALS['Data_Enum_Generic_genericPred__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericPred__prime__')))($dictGenericEnum);
$genericSucc__prime__1 = (($GLOBALS['Data_Enum_Generic_genericSucc__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericSucc__prime__')))($dictGenericEnum);
    $__res = (function() use ($genericPred__prime__1, $genericSucc__prime__1) {
  $__fn = function($dictGenericTop) use ($genericPred__prime__1, $genericSucc__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericTop__prime__ = (($GLOBALS['Data_Bounded_Generic_genericTop__prime__'] ?? \Data\Bounded\Generic\phpurs_eval_thunk('Data_Bounded_Generic_genericTop__prime__')))($dictGenericTop);
    $__res = (function() use ($genericPred__prime__1, $genericTop__prime__, $genericSucc__prime__1) {
  $__fn = function($dictGenericEnum1) use ($genericPred__prime__1, $genericTop__prime__, $genericSucc__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericPred__prime__2 = (($GLOBALS['Data_Enum_Generic_genericPred__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericPred__prime__')))($dictGenericEnum1);
$genericSucc__prime__2 = (($GLOBALS['Data_Enum_Generic_genericSucc__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericSucc__prime__')))($dictGenericEnum1);
    $__res = (function() use ($genericPred__prime__1, $genericPred__prime__2, $genericTop__prime__, $genericSucc__prime__1, $genericSucc__prime__2) {
  $__fn = function($dictGenericBottom) use ($genericPred__prime__1, $genericPred__prime__2, $genericTop__prime__, $genericSucc__prime__1, $genericSucc__prime__2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericBottom__prime__ = (($GLOBALS['Data_Bounded_Generic_genericBottom__prime__'] ?? \Data\Bounded\Generic\phpurs_eval_thunk('Data_Bounded_Generic_genericBottom__prime__')))($dictGenericBottom);
    $__res = (($GLOBALS['Data_Enum_Generic_GenericEnum__dollar__Dict'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_GenericEnum__dollar__Dict')))((object)["genericPred'" => (function() use ($genericPred__prime__1, $genericPred__prime__2, $genericTop__prime__) {
  $__body = function($v) use ($genericPred__prime__1, $genericPred__prime__2, $genericTop__prime__) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Inl":
$a = ($__case_0)->v0;
return (($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map')))(($GLOBALS['Data_Generic_Rep_Inl'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Inl')), ($genericPred__prime__1)($a));
break;
case "Inr":
$b = ($__case_0)->v0;
$v1 = ($genericPred__prime__2)($b);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Nothing":
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Data_Generic_Rep_Inl'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Inl')))($genericTop__prime__));
break;
case "Just":
$b__prime__ = ($__case_0)->v0;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Data_Generic_Rep_Inr'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Inr')))($b__prime__));
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
  $__fn = function($v) use ($genericPred__prime__1, $genericPred__prime__2, $genericTop__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericSucc'" => (function() use ($genericSucc__prime__1, $genericBottom__prime__, $genericSucc__prime__2) {
  $__body = function($v) use ($genericSucc__prime__1, $genericBottom__prime__, $genericSucc__prime__2) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Inl":
$a = ($__case_0)->v0;
$v1 = ($genericSucc__prime__1)($a);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Nothing":
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Data_Generic_Rep_Inr'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Inr')))($genericBottom__prime__));
break;
case "Just":
$a__prime__ = ($__case_0)->v0;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Data_Generic_Rep_Inl'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Inl')))($a__prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
case "Inr":
$b = ($__case_0)->v0;
return (($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map')))(($GLOBALS['Data_Generic_Rep_Inr'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Inr')), ($genericSucc__prime__2)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($genericSucc__prime__1, $genericBottom__prime__, $genericSucc__prime__2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
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
$genericPred__prime__1 = (($GLOBALS['Data_Enum_Generic_genericPred__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericPred__prime__')))($dictGenericEnum);
$genericSucc__prime__1 = (($GLOBALS['Data_Enum_Generic_genericSucc__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericSucc__prime__')))($dictGenericEnum);
    $__res = (function() use ($genericPred__prime__1, $genericSucc__prime__1) {
  $__fn = function($dictGenericTop, $dictGenericBottom = null, $dictGenericEnum1 = null) use ($genericPred__prime__1, $genericSucc__prime__1, &$__fn) {
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
$genericPred__prime__2 = (($GLOBALS['Data_Enum_Generic_genericPred__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericPred__prime__')))($dictGenericEnum1);
$genericSucc__prime__2 = (($GLOBALS['Data_Enum_Generic_genericSucc__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericSucc__prime__')))($dictGenericEnum1);
    $__res = (function() use ($genericPred__prime__2, $genericPred__prime__1, $genericSucc__prime__2, $genericSucc__prime__1) {
  $__fn = function($dictGenericTop1) use ($genericPred__prime__2, $genericPred__prime__1, $genericSucc__prime__2, $genericSucc__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericTop__prime__ = (($GLOBALS['Data_Bounded_Generic_genericTop__prime__'] ?? \Data\Bounded\Generic\phpurs_eval_thunk('Data_Bounded_Generic_genericTop__prime__')))($dictGenericTop1);
    $__res = (function() use ($genericPred__prime__2, $genericTop__prime__, $genericPred__prime__1, $genericSucc__prime__2, $genericSucc__prime__1) {
  $__fn = function($dictGenericBottom1) use ($genericPred__prime__2, $genericTop__prime__, $genericPred__prime__1, $genericSucc__prime__2, $genericSucc__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericBottom__prime__ = (($GLOBALS['Data_Bounded_Generic_genericBottom__prime__'] ?? \Data\Bounded\Generic\phpurs_eval_thunk('Data_Bounded_Generic_genericBottom__prime__')))($dictGenericBottom1);
    $__res = (($GLOBALS['Data_Enum_Generic_GenericEnum__dollar__Dict'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_GenericEnum__dollar__Dict')))((object)["genericPred'" => (function() use ($genericPred__prime__2, $genericTop__prime__, $genericPred__prime__1) {
  $__body = function($v) use ($genericPred__prime__2, $genericTop__prime__, $genericPred__prime__1) {
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
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Data_Generic_Rep_Product'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Product')))($a, $p));
break;
case "Nothing":
return (($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map')))((($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($GLOBALS['Data_Generic_Rep_Product'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Product')), $genericTop__prime__), ($genericPred__prime__1)($a));
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
  $__fn = function($v) use ($genericPred__prime__2, $genericTop__prime__, $genericPred__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericSucc'" => (function() use ($genericSucc__prime__2, $genericBottom__prime__, $genericSucc__prime__1) {
  $__body = function($v) use ($genericSucc__prime__2, $genericBottom__prime__, $genericSucc__prime__1) {
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
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Data_Generic_Rep_Product'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Product')))($a, $s));
break;
case "Nothing":
return (($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map')))((($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($GLOBALS['Data_Generic_Rep_Product'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Product')), $genericBottom__prime__), ($genericSucc__prime__1)($a));
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
  $__fn = function($v) use ($genericSucc__prime__2, $genericBottom__prime__, $genericSucc__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
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
$genericPred__prime__1 = (($GLOBALS['Data_Enum_Generic_genericPred__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericPred__prime__')))($dictGenericEnum);
$genericSucc__prime__1 = (($GLOBALS['Data_Enum_Generic_genericSucc__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericSucc__prime__')))($dictGenericEnum);
    $__res = (($GLOBALS['Data_Enum_Generic_GenericEnum__dollar__Dict'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_GenericEnum__dollar__Dict')))((object)["genericPred'" => (function() use ($genericPred__prime__1) {
  $__body = function($v) use ($genericPred__prime__1) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return (($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map')))(($GLOBALS['Data_Generic_Rep_Constructor'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Constructor')), ($genericPred__prime__1)($a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($genericPred__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericSucc'" => (function() use ($genericSucc__prime__1) {
  $__body = function($v) use ($genericSucc__prime__1) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return (($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map')))(($GLOBALS['Data_Generic_Rep_Constructor'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Constructor')), ($genericSucc__prime__1)($a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($genericSucc__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
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
$pred = (($GLOBALS['Data_Enum_pred'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_pred')))($dictEnum);
$succ = (($GLOBALS['Data_Enum_succ'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_succ')))($dictEnum);
    $__res = (($GLOBALS['Data_Enum_Generic_GenericEnum__dollar__Dict'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_GenericEnum__dollar__Dict')))((object)["genericPred'" => (function() use ($pred) {
  $__body = function($v) use ($pred) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return (($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map')))(($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument')), ($pred)($a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pred, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericSucc'" => (function() use ($succ) {
  $__body = function($v) use ($succ) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return (($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map')))(($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument')), ($succ)($a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($succ, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
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
    $__res = (($GLOBALS['Data_Enum_Cardinality'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Cardinality')))((($GLOBALS['Data_Enum_Generic_unwrap'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_unwrap')))((($GLOBALS['Data_Enum_Generic_genericCardinality__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericCardinality__prime__')))($dictGenericBoundedEnum)));
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
$genericCardinality__prime__1 = (($GLOBALS['Data_Enum_Generic_genericCardinality__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericCardinality__prime__')))($dictGenericBoundedEnum);
$genericToEnum__prime__1 = (($GLOBALS['Data_Enum_Generic_genericToEnum__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericToEnum__prime__')))($dictGenericBoundedEnum);
$genericFromEnum__prime__1 = (($GLOBALS['Data_Enum_Generic_genericFromEnum__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericFromEnum__prime__')))($dictGenericBoundedEnum);
    $__res = (function() use ($genericCardinality__prime__1, $genericFromEnum__prime__1) {
  $__fn = function($dictGenericBoundedEnum1) use ($genericCardinality__prime__1, $genericFromEnum__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericToEnum__prime__2 = (($GLOBALS['Data_Enum_Generic_genericToEnum__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericToEnum__prime__')))($dictGenericBoundedEnum1);
$genericFromEnum__prime__2 = (($GLOBALS['Data_Enum_Generic_genericFromEnum__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericFromEnum__prime__')))($dictGenericBoundedEnum1);
    $__res = (($GLOBALS['Data_Enum_Generic_GenericBoundedEnum__dollar__Dict'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_GenericBoundedEnum__dollar__Dict')))((object)["genericCardinality'" => (($GLOBALS['Data_Enum_Cardinality'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Cardinality')))((($GLOBALS['Data_Enum_Generic_add'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_add')))((($GLOBALS['Data_Enum_Generic_unwrap'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_unwrap')))($genericCardinality__prime__1), (($GLOBALS['Data_Enum_Generic_unwrap'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_unwrap')))((($GLOBALS['Data_Enum_Generic_genericCardinality__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericCardinality__prime__')))($dictGenericBoundedEnum1)))), "genericToEnum'" => (function() use ($genericCardinality__prime__1) {
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
})(), "genericFromEnum'" => (function() use ($genericFromEnum__prime__1, $genericFromEnum__prime__2, $genericCardinality__prime__1) {
  $__body = function($v) use ($genericFromEnum__prime__1, $genericFromEnum__prime__2, $genericCardinality__prime__1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Inl":
$a = ($__case_0)->v0;
return ($genericFromEnum__prime__1)($a);
break;
case "Inr":
$b = ($__case_0)->v0;
return (($GLOBALS['Data_Enum_Generic_add'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_add')))(($genericFromEnum__prime__2)($b), (($GLOBALS['Data_Enum_Generic_unwrap'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_unwrap')))($genericCardinality__prime__1));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($genericFromEnum__prime__1, $genericFromEnum__prime__2, $genericCardinality__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
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
$genericCardinality__prime__1 = (($GLOBALS['Data_Enum_Generic_genericCardinality__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericCardinality__prime__')))($dictGenericBoundedEnum);
$genericToEnum__prime__1 = (($GLOBALS['Data_Enum_Generic_genericToEnum__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericToEnum__prime__')))($dictGenericBoundedEnum);
$genericFromEnum__prime__1 = (($GLOBALS['Data_Enum_Generic_genericFromEnum__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericFromEnum__prime__')))($dictGenericBoundedEnum);
    $__res = (function() use ($genericCardinality__prime__1, $genericToEnum__prime__1, $genericFromEnum__prime__1) {
  $__fn = function($dictGenericBoundedEnum1) use ($genericCardinality__prime__1, $genericToEnum__prime__1, $genericFromEnum__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericCardinality__prime__2 = (($GLOBALS['Data_Enum_Generic_genericCardinality__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericCardinality__prime__')))($dictGenericBoundedEnum1);
$genericToEnum__prime__2 = (($GLOBALS['Data_Enum_Generic_genericToEnum__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericToEnum__prime__')))($dictGenericBoundedEnum1);
$genericFromEnum__prime__2 = (($GLOBALS['Data_Enum_Generic_genericFromEnum__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericFromEnum__prime__')))($dictGenericBoundedEnum1);
$from = (function() use ($genericFromEnum__prime__1, $genericFromEnum__prime__2) {
  $__body = function($v, $v1) use ($genericFromEnum__prime__1, $genericFromEnum__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "Product":
$cb = $__case_0;
$a = ($__case_1)->v0;
$b = ($__case_1)->v1;
return (($GLOBALS['Data_Enum_Generic_add'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_add')))((($GLOBALS['Data_Enum_Generic_mul'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_mul')))(($genericFromEnum__prime__1)($a), $cb), ($genericFromEnum__prime__2)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($genericFromEnum__prime__1, $genericFromEnum__prime__2, $__body, &$__fn) {
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
    $__res = (($GLOBALS['Data_Enum_Generic_GenericBoundedEnum__dollar__Dict'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_GenericBoundedEnum__dollar__Dict')))((object)["genericCardinality'" => (($GLOBALS['Data_Enum_Cardinality'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Cardinality')))((($GLOBALS['Data_Enum_Generic_mul'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_mul')))((($GLOBALS['Data_Enum_Generic_unwrap'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_unwrap')))($genericCardinality__prime__1), (($GLOBALS['Data_Enum_Generic_unwrap'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_unwrap')))($genericCardinality__prime__2))), "genericToEnum'" => (function() use ($genericToEnum__prime__1, $genericToEnum__prime__2, $genericCardinality__prime__2) {
  $__fn = function($n) use ($genericToEnum__prime__1, $genericToEnum__prime__2, $genericCardinality__prime__2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$to = (function() use ($genericToEnum__prime__1, $n, $genericToEnum__prime__2) {
  $__body = function($v) use ($genericToEnum__prime__1, $n, $genericToEnum__prime__2) {
    $__case_0 = $v;
    if (true) {
$cb = $__case_0;
return (($GLOBALS['Data_Enum_Generic_apply'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_apply')))((($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map')))(($GLOBALS['Data_Generic_Rep_Product'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Product')), ($genericToEnum__prime__1)((($GLOBALS['Data_Enum_Generic_div'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_div')))($n, $cb))), ($genericToEnum__prime__2)((($GLOBALS['Data_Enum_Generic_mod'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_mod')))($n, $cb)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($genericToEnum__prime__1, $n, $genericToEnum__prime__2, $__body, &$__fn) {
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
})(), "genericFromEnum'" => ($from)($genericCardinality__prime__2)]);
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
$genericToEnum__prime__1 = (($GLOBALS['Data_Enum_Generic_genericToEnum__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericToEnum__prime__')))($dictGenericBoundedEnum);
$genericFromEnum__prime__1 = (($GLOBALS['Data_Enum_Generic_genericFromEnum__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericFromEnum__prime__')))($dictGenericBoundedEnum);
    $__res = (($GLOBALS['Data_Enum_Generic_GenericBoundedEnum__dollar__Dict'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_GenericBoundedEnum__dollar__Dict')))((object)["genericCardinality'" => (($GLOBALS['Data_Enum_Cardinality'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Cardinality')))((($GLOBALS['Data_Enum_Generic_unwrap'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_unwrap')))((($GLOBALS['Data_Enum_Generic_genericCardinality__prime__'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_genericCardinality__prime__')))($dictGenericBoundedEnum))), "genericToEnum'" => (function() use ($genericToEnum__prime__1) {
  $__fn = function($i) use ($genericToEnum__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map')))(($GLOBALS['Data_Generic_Rep_Constructor'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Constructor')), ($genericToEnum__prime__1)($i));
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
})()]);
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
$toEnum = (($GLOBALS['Data_Enum_toEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toEnum')))($dictBoundedEnum);
$fromEnum = (($GLOBALS['Data_Enum_fromEnum'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_fromEnum')))($dictBoundedEnum);
    $__res = (($GLOBALS['Data_Enum_Generic_GenericBoundedEnum__dollar__Dict'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_GenericBoundedEnum__dollar__Dict')))((object)["genericCardinality'" => (($GLOBALS['Data_Enum_Cardinality'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_Cardinality')))((($GLOBALS['Data_Enum_Generic_unwrap'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_unwrap')))((($GLOBALS['Data_Enum_cardinality'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_cardinality')))($dictBoundedEnum))), "genericToEnum'" => (function() use ($toEnum) {
  $__fn = function($i) use ($toEnum, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map')))(($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument')), ($toEnum)($i));
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
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericBoundedEnumArgument'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericBoundedEnumArgument';

