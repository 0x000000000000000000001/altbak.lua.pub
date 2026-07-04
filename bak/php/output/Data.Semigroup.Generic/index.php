<?php

namespace Data\Semigroup\Generic;

require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Generic/index.php';
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
      case 'Data_Semigroup_Generic_genericSemigroupNoConstructors': $v = (($GLOBALS['Data_Semigroup_Generic_GenericSemigroup__dollar__Dict'] ?? \Data\Semigroup\Generic\phpurs_eval_thunk('Data_Semigroup_Generic_GenericSemigroup__dollar__Dict')))((object)["genericAppend'" => (function() {
  $__fn = function($a, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($a, &$__fn) { return $__fn($a, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $a;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Semigroup_Generic_genericSemigroupNoArguments': $v = (($GLOBALS['Data_Semigroup_Generic_GenericSemigroup__dollar__Dict'] ?? \Data\Semigroup\Generic\phpurs_eval_thunk('Data_Semigroup_Generic_GenericSemigroup__dollar__Dict')))((object)["genericAppend'" => (function() {
  $__fn = function($a, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($a, &$__fn) { return $__fn($a, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $a;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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


// Data_Semigroup_Generic_GenericSemigroup$Dict
function Data_Semigroup_Generic_GenericSemigroup__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Generic_GenericSemigroup__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Generic_GenericSemigroup__dollar__Dict'] = __NAMESPACE__ . '\\Data_Semigroup_Generic_GenericSemigroup__dollar__Dict';



// Data_Semigroup_Generic_genericSemigroupArgument
function Data_Semigroup_Generic_genericSemigroupArgument($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Generic_genericSemigroupArgument';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))($dictSemigroup);
    $__res = (($GLOBALS['Data_Semigroup_Generic_GenericSemigroup__dollar__Dict'] ?? \Data\Semigroup\Generic\phpurs_eval_thunk('Data_Semigroup_Generic_GenericSemigroup__dollar__Dict')))((object)["genericAppend'" => (function() use ($append) {
  $__body = function($v, $v1) use ($append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return (($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument')))(($append)($a1, $a2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Generic_genericSemigroupArgument'] = __NAMESPACE__ . '\\Data_Semigroup_Generic_genericSemigroupArgument';

// Data_Semigroup_Generic_genericAppend'
function Data_Semigroup_Generic_genericAppend__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Generic_genericAppend__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericAppend__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Generic_genericAppend__prime__'] = __NAMESPACE__ . '\\Data_Semigroup_Generic_genericAppend__prime__';

// Data_Semigroup_Generic_genericSemigroupConstructor
function Data_Semigroup_Generic_genericSemigroupConstructor($dictGenericSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Generic_genericSemigroupConstructor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericAppend__prime__1 = (($GLOBALS['Data_Semigroup_Generic_genericAppend__prime__'] ?? \Data\Semigroup\Generic\phpurs_eval_thunk('Data_Semigroup_Generic_genericAppend__prime__')))($dictGenericSemigroup);
    $__res = (($GLOBALS['Data_Semigroup_Generic_GenericSemigroup__dollar__Dict'] ?? \Data\Semigroup\Generic\phpurs_eval_thunk('Data_Semigroup_Generic_GenericSemigroup__dollar__Dict')))((object)["genericAppend'" => (function() use ($genericAppend__prime__1) {
  $__body = function($v, $v1) use ($genericAppend__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return (($GLOBALS['Data_Generic_Rep_Constructor'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Constructor')))(($genericAppend__prime__1)($a1, $a2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericAppend__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Generic_genericSemigroupConstructor'] = __NAMESPACE__ . '\\Data_Semigroup_Generic_genericSemigroupConstructor';

// Data_Semigroup_Generic_genericSemigroupProduct
function Data_Semigroup_Generic_genericSemigroupProduct($dictGenericSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Generic_genericSemigroupProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericAppend__prime__1 = (($GLOBALS['Data_Semigroup_Generic_genericAppend__prime__'] ?? \Data\Semigroup\Generic\phpurs_eval_thunk('Data_Semigroup_Generic_genericAppend__prime__')))($dictGenericSemigroup);
    $__res = (function() use ($genericAppend__prime__1) {
  $__fn = function($dictGenericSemigroup1) use ($genericAppend__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericAppend__prime__2 = (($GLOBALS['Data_Semigroup_Generic_genericAppend__prime__'] ?? \Data\Semigroup\Generic\phpurs_eval_thunk('Data_Semigroup_Generic_genericAppend__prime__')))($dictGenericSemigroup1);
    $__res = (($GLOBALS['Data_Semigroup_Generic_GenericSemigroup__dollar__Dict'] ?? \Data\Semigroup\Generic\phpurs_eval_thunk('Data_Semigroup_Generic_GenericSemigroup__dollar__Dict')))((object)["genericAppend'" => (function() use ($genericAppend__prime__1, $genericAppend__prime__2) {
  $__body = function($v, $v1) use ($genericAppend__prime__1, $genericAppend__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->v0;
$b1 = ($__case_0)->v1;
$a2 = ($__case_1)->v0;
$b2 = ($__case_1)->v1;
return (($GLOBALS['Data_Generic_Rep_Product'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Product')))(($genericAppend__prime__1)($a1, $a2), ($genericAppend__prime__2)($b1, $b2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericAppend__prime__1, $genericAppend__prime__2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Generic_genericSemigroupProduct'] = __NAMESPACE__ . '\\Data_Semigroup_Generic_genericSemigroupProduct';

// Data_Semigroup_Generic_genericAppend
function Data_Semigroup_Generic_genericAppend($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Generic_genericAppend';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$to = (($GLOBALS['Data_Generic_Rep_to'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_to')))($dictGeneric);
$from = (($GLOBALS['Data_Generic_Rep_from'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_from')))($dictGeneric);
    $__res = (function() use ($to, $from) {
  $__fn = function($dictGenericSemigroup) use ($to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericAppend__prime__1 = (($GLOBALS['Data_Semigroup_Generic_genericAppend__prime__'] ?? \Data\Semigroup\Generic\phpurs_eval_thunk('Data_Semigroup_Generic_genericAppend__prime__')))($dictGenericSemigroup);
    $__res = (function() use ($to, $genericAppend__prime__1, $from) {
  $__fn = function($x, $y = null) use ($to, $genericAppend__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($to)(($genericAppend__prime__1)(($from)($x), ($from)($y)));
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
$GLOBALS['Data_Semigroup_Generic_genericAppend'] = __NAMESPACE__ . '\\Data_Semigroup_Generic_genericAppend';

