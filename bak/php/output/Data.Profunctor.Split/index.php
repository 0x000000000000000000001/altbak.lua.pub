<?php

namespace Data\Profunctor\Split;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Exists/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Profunctor.Split/index.php';
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
      case 'Data_Profunctor_Split_profunctorSplit': $v = (($GLOBALS['Data_Profunctor_Profunctor__dollar__Dict'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_Profunctor__dollar__Dict')))((object)["dimap" => (function() {
  $__fn = function($f, $g = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($g) use ($f, &$__fn) { return $__fn($f, $g); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Profunctor_Split_unSplit'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_unSplit')))((function() use ($f, $g) {
  $__fn = function($h, $i = null) use ($f, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($i) use ($h, &$__fn) { return $__fn($h, $i); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Profunctor_Split_split'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_split')))((($GLOBALS['Data_Profunctor_Split_compose'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_compose')))($h, $f), (($GLOBALS['Data_Profunctor_Split_compose'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_compose')))($g, $i));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Profunctor_Split_liftSplit': $v = (($GLOBALS['Data_Profunctor_Split_split'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_split')))(($GLOBALS['Data_Profunctor_Split_identity'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_identity')), ($GLOBALS['Data_Profunctor_Split_identity'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_identity'))); break;
      case 'Data_Profunctor_Split_functorSplit': $v = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Profunctor_Split_unSplit'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_unSplit')))((function() use ($f) {
  $__fn = function($g, $h = null, $fx = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($fx) use ($g, $h, &$__fn) { return $__fn($g, $h, $fx); };
    if ($__num === 1) return function($h, $fx = null) use ($g, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($g, $h, $fx);
      if ($__num2 === 1) return function($fx) use ($g, $h, &$__fn) { return $__fn($g, $h, $fx); };
      return phpurs_curry_fallback($__fn, [$g], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = (($GLOBALS['Data_Profunctor_Split_split'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_split')))($g, (($GLOBALS['Data_Profunctor_Split_compose'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_compose')))($f, $h), $fx);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})());
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


// Data_Profunctor_Split_compose
function Data_Profunctor_Split_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Split_compose';
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
$GLOBALS['Data_Profunctor_Split_compose'] = __NAMESPACE__ . '\\Data_Profunctor_Split_compose';

// Data_Profunctor_Split_identity
function Data_Profunctor_Split_identity($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Split_identity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Split_identity'] = __NAMESPACE__ . '\\Data_Profunctor_Split_identity';

// Data_Profunctor_Split_SplitF
function Data_Profunctor_Split_SplitF($value0, $value1 = null, $value2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Split_SplitF';
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = new Phpurs_Data3("SplitF", $value0, $value1, $value2);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Profunctor_Split_SplitF'] = __NAMESPACE__ . '\\Data_Profunctor_Split_SplitF';

// Data_Profunctor_Split_Split
function Data_Profunctor_Split_Split($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Split_Split';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Split_Split'] = __NAMESPACE__ . '\\Data_Profunctor_Split_Split';

// Data_Profunctor_Split_unSplit
function Data_Profunctor_Split_unSplit($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Split_unSplit';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$e = $__case_1;
return (($GLOBALS['Data_Exists_runExists'] ?? \Data\Exists\phpurs_eval_thunk('Data_Exists_runExists')))((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "SplitF":
$g = ($__case_0)->v0;
$h = ($__case_0)->v1;
$fx = ($__case_0)->v2;
return ($f1)($g, $h, $fx);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $e);
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Profunctor_Split_unSplit'] = __NAMESPACE__ . '\\Data_Profunctor_Split_unSplit';

// Data_Profunctor_Split_split
function Data_Profunctor_Split_split($f, $g = null, $fx = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Split_split';
  if ($__num < 3) {
    if ($__num === 2) return function($fx) use ($f, $g, $__fn) { return $__fn($f, $g, $fx); };
    if ($__num === 1) return function($g, $fx = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $fx);
      if ($__num2 === 1) return function($fx) use ($f, $g, $__fn) { return $__fn($f, $g, $fx); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = (($GLOBALS['Data_Profunctor_Split_Split'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_Split')))((($GLOBALS['Data_Exists_mkExists'] ?? \Data\Exists\phpurs_eval_thunk('Data_Exists_mkExists')))((($GLOBALS['Data_Profunctor_Split_SplitF'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_SplitF')))($f, $g, $fx)));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Profunctor_Split_split'] = __NAMESPACE__ . '\\Data_Profunctor_Split_split';


// Data_Profunctor_Split_lowerSplit
function Data_Profunctor_Split_lowerSplit($dictInvariant) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Split_lowerSplit';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Profunctor_Split_unSplit'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_unSplit')))((($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))((($GLOBALS['Data_Functor_Invariant_imap'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_imap')))($dictInvariant)));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Split_lowerSplit'] = __NAMESPACE__ . '\\Data_Profunctor_Split_lowerSplit';


// Data_Profunctor_Split_hoistSplit
function Data_Profunctor_Split_hoistSplit($nat) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Split_hoistSplit';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Profunctor_Split_unSplit'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_unSplit')))((function() use ($nat) {
  $__fn = function($f, $g = null) use ($nat, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($g) use ($f, &$__fn) { return $__fn($f, $g); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Profunctor_Split_compose'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_compose')))((($GLOBALS['Data_Profunctor_Split_split'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_split')))($f, $g), $nat);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Split_hoistSplit'] = __NAMESPACE__ . '\\Data_Profunctor_Split_hoistSplit';


