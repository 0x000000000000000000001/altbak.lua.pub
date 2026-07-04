<?php

namespace Data\Array\ST\Iterator;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.ST/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Internal/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Ref/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array.ST/index.php';
require_once __DIR__ . '/../Data.Array.ST.Iterator/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
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
      case 'Data_Array_ST_Iterator_bind': $v = ($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bind_')); break;
      case 'Data_Array_ST_Iterator_pure': $v = ($GLOBALS['Control_Monad_ST_Internal_pure_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_pure_')); break;
      case 'Data_Array_ST_Iterator_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_Array_ST_Iterator_map': $v = ($GLOBALS['Control_Monad_ST_Internal_map_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_map_')); break;
      case 'Data_Array_ST_Iterator_not': $v = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot')); break;
      case 'Data_Array_ST_Iterator_void': $v = (($GLOBALS['Data_Functor_void'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_void')))(($GLOBALS['Control_Monad_ST_Internal_functorST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_functorST'))); break;
      case 'Data_Array_ST_Iterator_pushAll': $v = (($GLOBALS['Data_Array_ST_Iterator_pushWhile'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_pushWhile')))((($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(true)); break;
      case 'Data_Array_ST_Iterator_exhausted': $v = ((function() {
  $__fn = function($f, $g = null, $x = null) use (&$__fn) {
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
    $__res = ($f)(($g)($x));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())((($GLOBALS['Data_Array_ST_Iterator_map'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_map')))(($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing'))), ($GLOBALS['Data_Array_ST_Iterator_peek'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_peek'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };








// Data_Array_ST_Iterator_Iterator
function Data_Array_ST_Iterator_Iterator($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_ST_Iterator_Iterator';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Iterator", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_ST_Iterator_Iterator'] = __NAMESPACE__ . '\\Data_Array_ST_Iterator_Iterator';

// Data_Array_ST_Iterator_peek
function Data_Array_ST_Iterator_peek($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_ST_Iterator_peek';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Iterator":
$f = ($__case_0)->v0;
$currentIndex = ($__case_0)->v1;
return (($GLOBALS['Data_Array_ST_Iterator_bind'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_bind')))((($GLOBALS['Control_Monad_ST_Internal_read'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_read')))($currentIndex), (function() use ($f) {
  $__fn = function($i) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_ST_Iterator_pure'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_pure')))(($f)($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_ST_Iterator_peek'] = __NAMESPACE__ . '\\Data_Array_ST_Iterator_peek';

// Data_Array_ST_Iterator_next
function Data_Array_ST_Iterator_next($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_ST_Iterator_next';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Iterator":
$f = ($__case_0)->v0;
$currentIndex = ($__case_0)->v1;
return (($GLOBALS['Data_Array_ST_Iterator_bind'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_bind')))((($GLOBALS['Control_Monad_ST_Internal_read'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_read')))($currentIndex), (function() use ($currentIndex, $f) {
  $__fn = function($i) use ($currentIndex, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_ST_Iterator_bind'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_bind')))((($GLOBALS['Control_Monad_ST_Internal_modify'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_modify')))((function() {
  $__fn = function($v1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_ST_Iterator_add'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_add')))($v1, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $currentIndex), (function() use ($f, $i) {
  $__fn = function($__dollar____unused) use ($f, $i, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_ST_Iterator_pure'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_pure')))(($f)($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_ST_Iterator_next'] = __NAMESPACE__ . '\\Data_Array_ST_Iterator_next';

// Data_Array_ST_Iterator_pushWhile
function Data_Array_ST_Iterator_pushWhile($p, $iter = null, $array = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_ST_Iterator_pushWhile';
  if ($__num < 3) {
    if ($__num === 2) return function($array) use ($p, $iter, $__fn) { return $__fn($p, $iter, $array); };
    if ($__num === 1) return function($iter, $array = null) use ($p, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($p, $iter, $array);
      if ($__num2 === 1) return function($array) use ($p, $iter, $__fn) { return $__fn($p, $iter, $array); };
      return phpurs_curry_fallback($__fn, [$p], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = (($GLOBALS['Data_Array_ST_Iterator_bind'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_bind')))((($GLOBALS['Control_Monad_ST_Internal_new'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_new')))(false), (function() use ($iter) {
  $__fn = function($break) use ($iter, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_ST_Internal_while'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_while')))((($GLOBALS['Data_Array_ST_Iterator_map'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_map')))(($GLOBALS['Data_Array_ST_Iterator_not'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_not')), (($GLOBALS['Control_Monad_ST_Internal_read'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_read')))($break)), (($GLOBALS['Data_Array_ST_Iterator_bind'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_bind')))((($GLOBALS['Data_Array_ST_Iterator_peek'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_peek')))($iter), (function() use ($break) {
  $__body = function($mx) use ($break) {
    $__case_0 = $mx;
    if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->v0;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return (($GLOBALS['Data_Array_ST_Iterator_void'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_void')))((($GLOBALS['Control_Monad_ST_Internal_write'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_write')))(true, $break));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($mx) use ($break, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($mx);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Array_ST_Iterator_pushWhile'] = __NAMESPACE__ . '\\Data_Array_ST_Iterator_pushWhile';


// Data_Array_ST_Iterator_iterator
function Data_Array_ST_Iterator_iterator($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_ST_Iterator_iterator';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Array_ST_Iterator_map'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_map')))((($GLOBALS['Data_Array_ST_Iterator_Iterator'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_Iterator')))($f), (($GLOBALS['Control_Monad_ST_Internal_new'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_new')))(0));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_ST_Iterator_iterator'] = __NAMESPACE__ . '\\Data_Array_ST_Iterator_iterator';

// Data_Array_ST_Iterator_iterate
function Data_Array_ST_Iterator_iterate($iter, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_ST_Iterator_iterate';
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($iter, $__fn) { return $__fn($iter, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Array_ST_Iterator_bind'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_bind')))((($GLOBALS['Control_Monad_ST_Internal_new'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_new')))(false), (function() use ($iter, $f) {
  $__fn = function($break) use ($iter, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_ST_Internal_while'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_while')))((($GLOBALS['Data_Array_ST_Iterator_map'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_map')))(($GLOBALS['Data_Array_ST_Iterator_not'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_not')), (($GLOBALS['Control_Monad_ST_Internal_read'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_read')))($break)), (($GLOBALS['Data_Array_ST_Iterator_bind'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_bind')))((($GLOBALS['Data_Array_ST_Iterator_next'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_next')))($iter), (function() use ($f, $break) {
  $__body = function($mx) use ($f, $break) {
    $__case_0 = $mx;
    switch (($__case_0)->tag) {
case "Just":
$x = ($__case_0)->v0;
return ($f)($x);
break;
case "Nothing":
return (($GLOBALS['Data_Array_ST_Iterator_void'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_void')))((($GLOBALS['Control_Monad_ST_Internal_write'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_write')))(true, $break));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($mx) use ($f, $break, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($mx);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_ST_Iterator_iterate'] = __NAMESPACE__ . '\\Data_Array_ST_Iterator_iterate';


