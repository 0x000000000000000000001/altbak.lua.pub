<?php

namespace Data\Bifunctor;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';

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
      case 'Data_Bifunctor_bifunctorTuple': $v = (($GLOBALS['Data_Bifunctor_Bifunctor__dollar__Dict'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_Bifunctor__dollar__Dict')))((object)["bimap" => (function() {
  $__body = function($f, $g, $v) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$g1 = $__case_1;
$x = ($__case_2)->v0;
$y = ($__case_2)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($f1)($x), ($g1)($y));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $g = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $g, &$__fn) { return $__fn($f, $g, $v); };
    if ($__num === 1) return function($g, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $v);
      if ($__num2 === 1) return function($v) use ($f, $g, &$__fn) { return $__fn($f, $g, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $g, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Bifunctor_bifunctorEither': $v = (($GLOBALS['Data_Bifunctor_Bifunctor__dollar__Dict'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_Bifunctor__dollar__Dict')))((object)["bimap" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "Left":
$f = $__case_0;
$l = ($__case_2)->v0;
return (($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')))(($f)($l));
break;
case "Right":
$g = $__case_1;
$r = ($__case_2)->v0;
return (($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')))(($g)($r));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($__body, &$__fn) {
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
    $__res = $__body($v, $v1, $v2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Bifunctor_bifunctorConst': $v = (($GLOBALS['Data_Bifunctor_Bifunctor__dollar__Dict'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_Bifunctor__dollar__Dict')))((object)["bimap" => (function() {
  $__body = function($f, $v, $v1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$a = $__case_2;
return (($GLOBALS['Data_Const_Const'] ?? \Data\Const\phpurs_eval_thunk('Data_Const_Const')))(($f1)($a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
    if ($__num === 1) return function($v, $v1 = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $v, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
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


// Data_Bifunctor_identity
function Data_Bifunctor_identity($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifunctor_identity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifunctor_identity'] = __NAMESPACE__ . '\\Data_Bifunctor_identity';

// Data_Bifunctor_Bifunctor$Dict
function Data_Bifunctor_Bifunctor__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifunctor_Bifunctor__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifunctor_Bifunctor__dollar__Dict'] = __NAMESPACE__ . '\\Data_Bifunctor_Bifunctor__dollar__Dict';

// Data_Bifunctor_bimap
function Data_Bifunctor_bimap($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifunctor_bimap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bimap;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifunctor_bimap'] = __NAMESPACE__ . '\\Data_Bifunctor_bimap';

// Data_Bifunctor_bivoid
function Data_Bifunctor_bivoid($dictBifunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifunctor_bivoid';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Bifunctor_bimap'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bimap')))($dictBifunctor, (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))), (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifunctor_bivoid'] = __NAMESPACE__ . '\\Data_Bifunctor_bivoid';

// Data_Bifunctor_lmap
function Data_Bifunctor_lmap($dictBifunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifunctor_lmap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bimap1 = (($GLOBALS['Data_Bifunctor_bimap'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bimap')))($dictBifunctor);
    $__res = (function() use ($bimap1) {
  $__fn = function($f) use ($bimap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bimap1)($f, ($GLOBALS['Data_Bifunctor_identity'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_identity')));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifunctor_lmap'] = __NAMESPACE__ . '\\Data_Bifunctor_lmap';

// Data_Bifunctor_rmap
function Data_Bifunctor_rmap($dictBifunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifunctor_rmap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Bifunctor_bimap'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bimap')))($dictBifunctor, ($GLOBALS['Data_Bifunctor_identity'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_identity')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifunctor_rmap'] = __NAMESPACE__ . '\\Data_Bifunctor_rmap';




