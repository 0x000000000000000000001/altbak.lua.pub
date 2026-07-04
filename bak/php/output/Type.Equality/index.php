<?php

namespace Type\Equality;

require_once __DIR__ . '/../Type.Equality/index.php';

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
      case 'Type_Equality_refl': $v = (($GLOBALS['Type_Equality_TypeEquals__dollar__Dict'] ?? \Type\Equality\phpurs_eval_thunk('Type_Equality_TypeEquals__dollar__Dict')))((object)["proof" => (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $a;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
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


// Type_Equality_TypeEquals$Dict
function Type_Equality_TypeEquals__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Type_Equality_TypeEquals__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Type_Equality_TypeEquals__dollar__Dict'] = __NAMESPACE__ . '\\Type_Equality_TypeEquals__dollar__Dict';

// Type_Equality_To
function Type_Equality_To($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Type_Equality_To';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Type_Equality_To'] = __NAMESPACE__ . '\\Type_Equality_To';

// Type_Equality_From
function Type_Equality_From($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Type_Equality_From';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Type_Equality_From'] = __NAMESPACE__ . '\\Type_Equality_From';


// Type_Equality_proof
function Type_Equality_proof($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Type_Equality_proof';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->proof;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Type_Equality_proof'] = __NAMESPACE__ . '\\Type_Equality_proof';

// Type_Equality_to
function Type_Equality_to($dictTypeEquals) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Type_Equality_to';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dictTypeEquals) {
    $v = (($GLOBALS['Type_Equality_proof'] ?? \Type\Equality\phpurs_eval_thunk('Type_Equality_proof')))($dictTypeEquals, (($GLOBALS['Type_Equality_To'] ?? \Type\Equality\phpurs_eval_thunk('Type_Equality_To')))((function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $a;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return $f;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dictTypeEquals);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Type_Equality_to'] = __NAMESPACE__ . '\\Type_Equality_to';

// Type_Equality_from
function Type_Equality_from($dictTypeEquals) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Type_Equality_from';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dictTypeEquals) {
    $v = (($GLOBALS['Type_Equality_proof'] ?? \Type\Equality\phpurs_eval_thunk('Type_Equality_proof')))($dictTypeEquals, (($GLOBALS['Type_Equality_From'] ?? \Type\Equality\phpurs_eval_thunk('Type_Equality_From')))((function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $a;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return $f;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dictTypeEquals);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Type_Equality_from'] = __NAMESPACE__ . '\\Type_Equality_from';

