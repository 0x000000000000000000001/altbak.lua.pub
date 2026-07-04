<?php

namespace Data\HeytingAlgebra;

require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
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
      case 'Data_HeytingAlgebra_heytingAlgebraUnit': $v = (($GLOBALS['Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict')))((object)["ff" => ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), "tt" => ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), "implies" => (function() {
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
})(), "conj" => (function() {
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
})(), "disj" => (function() {
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
})(), "not" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_HeytingAlgebra_heytingAlgebraRecordNil': $v = (($GLOBALS['Data_HeytingAlgebra_HeytingAlgebraRecord__dollar__Dict'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_HeytingAlgebraRecord__dollar__Dict')))((object)["conjRecord" => (function() {
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
})(), "disjRecord" => (function() {
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
})(), "ffRecord" => (function() {
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
})(), "impliesRecord" => (function() {
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
})(), "notRecord" => (function() {
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
})(), "ttRecord" => (function() {
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
      case 'Data_HeytingAlgebra_heytingAlgebraProxy': $v = (($GLOBALS['Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict')))((object)["conj" => (function() {
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
})(), "disj" => (function() {
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
})(), "implies" => (function() {
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
})(), "ff" => ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')), "not" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "tt" => ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'))]); break;
      case 'Data_HeytingAlgebra_heytingAlgebraBoolean': $v = (($GLOBALS['Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict')))((object)["ff" => false, "tt" => true, "implies" => (function() {
  $__fn = function($a, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_HeytingAlgebra_boolDisj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolDisj')))((($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot')))($a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "conj" => ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')), "disj" => ($GLOBALS['Data_HeytingAlgebra_boolDisj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolDisj')), "not" => ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot'))]); break;
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




$Data_HeytingAlgebra_boolConj = phpurs_uncurry2(function($a) { return function($b) use(&$a) { return $a && $b; }; });
$Data_HeytingAlgebra_boolDisj = phpurs_uncurry2(function($a) { return function($b) use(&$a) { return $a || $b; }; });
$Data_HeytingAlgebra_boolNot = function($a) { return !$a; };

// Data_HeytingAlgebra_HeytingAlgebraRecord$Dict
function Data_HeytingAlgebra_HeytingAlgebraRecord__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_HeytingAlgebraRecord__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_HeytingAlgebraRecord__dollar__Dict'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_HeytingAlgebraRecord__dollar__Dict';

// Data_HeytingAlgebra_HeytingAlgebra$Dict
function Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict';

// Data_HeytingAlgebra_ttRecord
function Data_HeytingAlgebra_ttRecord($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_ttRecord';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->ttRecord;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_ttRecord'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_ttRecord';

// Data_HeytingAlgebra_tt
function Data_HeytingAlgebra_tt($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_tt';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->tt;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_tt'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_tt';

// Data_HeytingAlgebra_notRecord
function Data_HeytingAlgebra_notRecord($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_notRecord';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->notRecord;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_notRecord'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_notRecord';

// Data_HeytingAlgebra_not
function Data_HeytingAlgebra_not($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_not';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->not;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_not'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_not';

// Data_HeytingAlgebra_impliesRecord
function Data_HeytingAlgebra_impliesRecord($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_impliesRecord';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->impliesRecord;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_impliesRecord'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_impliesRecord';

// Data_HeytingAlgebra_implies
function Data_HeytingAlgebra_implies($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_implies';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->implies;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_implies'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_implies';




// Data_HeytingAlgebra_ffRecord
function Data_HeytingAlgebra_ffRecord($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_ffRecord';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->ffRecord;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_ffRecord'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_ffRecord';

// Data_HeytingAlgebra_ff
function Data_HeytingAlgebra_ff($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_ff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->ff;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_ff'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_ff';

// Data_HeytingAlgebra_disjRecord
function Data_HeytingAlgebra_disjRecord($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_disjRecord';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->disjRecord;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_disjRecord'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_disjRecord';

// Data_HeytingAlgebra_disj
function Data_HeytingAlgebra_disj($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_disj';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->disj;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_disj'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_disj';


// Data_HeytingAlgebra_conjRecord
function Data_HeytingAlgebra_conjRecord($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_conjRecord';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->conjRecord;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_conjRecord'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_conjRecord';

// Data_HeytingAlgebra_heytingAlgebraRecord
function Data_HeytingAlgebra_heytingAlgebraRecord($__dollar____unused, $dictHeytingAlgebraRecord = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_heytingAlgebraRecord';
  if ($__num < 2) {
    if ($__num === 1) return function($dictHeytingAlgebraRecord) use ($__dollar____unused, $__fn) { return $__fn($__dollar____unused, $dictHeytingAlgebraRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict')))((object)["ff" => (($GLOBALS['Data_HeytingAlgebra_ffRecord'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_ffRecord')))($dictHeytingAlgebraRecord, ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')), ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'))), "tt" => (($GLOBALS['Data_HeytingAlgebra_ttRecord'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_ttRecord')))($dictHeytingAlgebraRecord, ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')), ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'))), "conj" => (($GLOBALS['Data_HeytingAlgebra_conjRecord'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_conjRecord')))($dictHeytingAlgebraRecord, ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'))), "disj" => (($GLOBALS['Data_HeytingAlgebra_disjRecord'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_disjRecord')))($dictHeytingAlgebraRecord, ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'))), "implies" => (($GLOBALS['Data_HeytingAlgebra_impliesRecord'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_impliesRecord')))($dictHeytingAlgebraRecord, ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'))), "not" => (($GLOBALS['Data_HeytingAlgebra_notRecord'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_notRecord')))($dictHeytingAlgebraRecord, ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')))]);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_heytingAlgebraRecord'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_heytingAlgebraRecord';

// Data_HeytingAlgebra_conj
function Data_HeytingAlgebra_conj($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_conj';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->conj;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_conj'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_conj';

// Data_HeytingAlgebra_heytingAlgebraFunction
function Data_HeytingAlgebra_heytingAlgebraFunction($dictHeytingAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_heytingAlgebraFunction';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$ff1 = (($GLOBALS['Data_HeytingAlgebra_ff'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_ff')))($dictHeytingAlgebra);
$tt1 = (($GLOBALS['Data_HeytingAlgebra_tt'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_tt')))($dictHeytingAlgebra);
$implies1 = (($GLOBALS['Data_HeytingAlgebra_implies'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_implies')))($dictHeytingAlgebra);
$conj1 = (($GLOBALS['Data_HeytingAlgebra_conj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_conj')))($dictHeytingAlgebra);
$disj1 = (($GLOBALS['Data_HeytingAlgebra_disj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_disj')))($dictHeytingAlgebra);
$not1 = (($GLOBALS['Data_HeytingAlgebra_not'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_not')))($dictHeytingAlgebra);
    $__res = (($GLOBALS['Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict')))((object)["ff" => (function() use ($ff1) {
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
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_heytingAlgebraFunction'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_heytingAlgebraFunction';

// Data_HeytingAlgebra_heytingAlgebraRecordCons
function Data_HeytingAlgebra_heytingAlgebraRecordCons($dictIsSymbol) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_heytingAlgebraRecordCons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$reflectSymbol = (($GLOBALS['Data_Symbol_reflectSymbol'] ?? \Data\Symbol\phpurs_eval_thunk('Data_Symbol_reflectSymbol')))($dictIsSymbol);
    $__res = (function() use ($reflectSymbol) {
  $__fn = function($__dollar____unused, $dictHeytingAlgebraRecord = null) use ($reflectSymbol, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dictHeytingAlgebraRecord) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $dictHeytingAlgebraRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$conjRecord1 = (($GLOBALS['Data_HeytingAlgebra_conjRecord'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_conjRecord')))($dictHeytingAlgebraRecord);
$disjRecord1 = (($GLOBALS['Data_HeytingAlgebra_disjRecord'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_disjRecord')))($dictHeytingAlgebraRecord);
$impliesRecord1 = (($GLOBALS['Data_HeytingAlgebra_impliesRecord'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_impliesRecord')))($dictHeytingAlgebraRecord);
$ffRecord1 = (($GLOBALS['Data_HeytingAlgebra_ffRecord'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_ffRecord')))($dictHeytingAlgebraRecord);
$notRecord1 = (($GLOBALS['Data_HeytingAlgebra_notRecord'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_notRecord')))($dictHeytingAlgebraRecord);
$ttRecord1 = (($GLOBALS['Data_HeytingAlgebra_ttRecord'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_ttRecord')))($dictHeytingAlgebraRecord);
    $__res = (function() use ($conjRecord1, $reflectSymbol, $disjRecord1, $impliesRecord1, $ffRecord1, $notRecord1, $ttRecord1) {
  $__fn = function($dictHeytingAlgebra) use ($conjRecord1, $reflectSymbol, $disjRecord1, $impliesRecord1, $ffRecord1, $notRecord1, $ttRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$conj1 = (($GLOBALS['Data_HeytingAlgebra_conj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_conj')))($dictHeytingAlgebra);
$disj1 = (($GLOBALS['Data_HeytingAlgebra_disj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_disj')))($dictHeytingAlgebra);
$implies1 = (($GLOBALS['Data_HeytingAlgebra_implies'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_implies')))($dictHeytingAlgebra);
$ff1 = (($GLOBALS['Data_HeytingAlgebra_ff'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_ff')))($dictHeytingAlgebra);
$not1 = (($GLOBALS['Data_HeytingAlgebra_not'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_not')))($dictHeytingAlgebra);
$tt1 = (($GLOBALS['Data_HeytingAlgebra_tt'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_tt')))($dictHeytingAlgebra);
    $__res = (($GLOBALS['Data_HeytingAlgebra_HeytingAlgebraRecord__dollar__Dict'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_HeytingAlgebraRecord__dollar__Dict')))((object)["conjRecord" => (function() use ($conjRecord1, $reflectSymbol, $conj1) {
  $__fn = function($v, $ra = null, $rb = null) use ($conjRecord1, $reflectSymbol, $conj1, &$__fn) {
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
$tail = ($conjRecord1)(($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')), $ra, $rb);
$key = ($reflectSymbol)(($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')));
$insert = (($GLOBALS['Record_Unsafe_unsafeSet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeSet')))($key);
$get = (($GLOBALS['Record_Unsafe_unsafeGet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeGet')))($key);
    $__res = ($insert)(($conj1)(($get)($ra), ($get)($rb)), $tail);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "disjRecord" => (function() use ($disjRecord1, $reflectSymbol, $disj1) {
  $__fn = function($v, $ra = null, $rb = null) use ($disjRecord1, $reflectSymbol, $disj1, &$__fn) {
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
$tail = ($disjRecord1)(($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')), $ra, $rb);
$key = ($reflectSymbol)(($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')));
$insert = (($GLOBALS['Record_Unsafe_unsafeSet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeSet')))($key);
$get = (($GLOBALS['Record_Unsafe_unsafeGet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeGet')))($key);
    $__res = ($insert)(($disj1)(($get)($ra), ($get)($rb)), $tail);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "impliesRecord" => (function() use ($impliesRecord1, $reflectSymbol, $implies1) {
  $__fn = function($v, $ra = null, $rb = null) use ($impliesRecord1, $reflectSymbol, $implies1, &$__fn) {
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
$tail = ($impliesRecord1)(($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')), $ra, $rb);
$key = ($reflectSymbol)(($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')));
$insert = (($GLOBALS['Record_Unsafe_unsafeSet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeSet')))($key);
$get = (($GLOBALS['Record_Unsafe_unsafeGet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeGet')))($key);
    $__res = ($insert)(($implies1)(($get)($ra), ($get)($rb)), $tail);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "ffRecord" => (function() use ($ffRecord1, $reflectSymbol, $ff1) {
  $__fn = function($v, $row = null) use ($ffRecord1, $reflectSymbol, $ff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($row) use ($v, &$__fn) { return $__fn($v, $row); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$tail = ($ffRecord1)(($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')), $row);
$key = ($reflectSymbol)(($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')));
$insert = (($GLOBALS['Record_Unsafe_unsafeSet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeSet')))($key);
    $__res = ($insert)($ff1, $tail);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "notRecord" => (function() use ($notRecord1, $reflectSymbol, $not1) {
  $__fn = function($v, $row = null) use ($notRecord1, $reflectSymbol, $not1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($row) use ($v, &$__fn) { return $__fn($v, $row); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$tail = ($notRecord1)(($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')), $row);
$key = ($reflectSymbol)(($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')));
$insert = (($GLOBALS['Record_Unsafe_unsafeSet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeSet')))($key);
$get = (($GLOBALS['Record_Unsafe_unsafeGet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeGet')))($key);
    $__res = ($insert)(($not1)(($get)($row)), $tail);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ttRecord" => (function() use ($ttRecord1, $reflectSymbol, $tt1) {
  $__fn = function($v, $row = null) use ($ttRecord1, $reflectSymbol, $tt1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($row) use ($v, &$__fn) { return $__fn($v, $row); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$tail = ($ttRecord1)(($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')), $row);
$key = ($reflectSymbol)(($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')));
$insert = (($GLOBALS['Record_Unsafe_unsafeSet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeSet')))($key);
    $__res = ($insert)($tt1, $tail);
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
$GLOBALS['Data_HeytingAlgebra_heytingAlgebraRecordCons'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_heytingAlgebraRecordCons';

