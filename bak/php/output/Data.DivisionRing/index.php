<?php

namespace Data\DivisionRing;

require_once __DIR__ . '/../Data.DivisionRing/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';

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
      case 'Data_DivisionRing_div': $v = ($GLOBALS['Data_EuclideanRing_numDiv'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_numDiv')); break;
      case 'Data_DivisionRing_divisionringNumber': $v = (($GLOBALS['Data_DivisionRing_DivisionRing__dollar__Dict'] ?? \Data\DivisionRing\phpurs_eval_thunk('Data_DivisionRing_DivisionRing__dollar__Dict')))((object)["recip" => (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_DivisionRing_div'] ?? \Data\DivisionRing\phpurs_eval_thunk('Data_DivisionRing_div')))(1.0, $x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Ring0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Ring_ringNumber'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringNumber'));
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



// Data_DivisionRing_DivisionRing$Dict
function Data_DivisionRing_DivisionRing__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DivisionRing_DivisionRing__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DivisionRing_DivisionRing__dollar__Dict'] = __NAMESPACE__ . '\\Data_DivisionRing_DivisionRing__dollar__Dict';

// Data_DivisionRing_recip
function Data_DivisionRing_recip($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DivisionRing_recip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->recip;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DivisionRing_recip'] = __NAMESPACE__ . '\\Data_DivisionRing_recip';

// Data_DivisionRing_rightDiv
function Data_DivisionRing_rightDiv($dictDivisionRing) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DivisionRing_rightDiv';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mul = (($GLOBALS['Data_Semiring_mul'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_mul')))((((($dictDivisionRing)->Ring0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Semiring0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$recip1 = (($GLOBALS['Data_DivisionRing_recip'] ?? \Data\DivisionRing\phpurs_eval_thunk('Data_DivisionRing_recip')))($dictDivisionRing);
    $__res = (function() use ($mul, $recip1) {
  $__fn = function($a, $b = null) use ($mul, $recip1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($mul)($a, ($recip1)($b));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DivisionRing_rightDiv'] = __NAMESPACE__ . '\\Data_DivisionRing_rightDiv';

// Data_DivisionRing_leftDiv
function Data_DivisionRing_leftDiv($dictDivisionRing) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DivisionRing_leftDiv';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mul = (($GLOBALS['Data_Semiring_mul'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_mul')))((((($dictDivisionRing)->Ring0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Semiring0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$recip1 = (($GLOBALS['Data_DivisionRing_recip'] ?? \Data\DivisionRing\phpurs_eval_thunk('Data_DivisionRing_recip')))($dictDivisionRing);
    $__res = (function() use ($mul, $recip1) {
  $__fn = function($a, $b = null) use ($mul, $recip1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($mul)(($recip1)($b), $a);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DivisionRing_leftDiv'] = __NAMESPACE__ . '\\Data_DivisionRing_leftDiv';


