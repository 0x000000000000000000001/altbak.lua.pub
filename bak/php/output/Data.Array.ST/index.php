<?php

namespace Data\Array\ST;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.ST/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Internal/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Uncurried/index.php';
require_once __DIR__ . '/../Data.Array.ST/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
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
    $missing = $expected - count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num > 1) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...array_slice($merged, 0, $expected));
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
      case 'Data_Array_ST_bind': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Monad_ST_Internal_bindST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bindST'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Array_ST_negate': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ring_ringInt'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringInt'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sub;
} else {
throw new \Exception("Pattern match failure");
};
  $sub1 = $__case_res_0;
  $__case_0 = $dict;
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->zero;
} else {
throw new \Exception("Pattern match failure");
};
  $zero = $__case_res_1;
  return (function() use ($sub1, $zero) {
  $__fn = function($a) use ($sub1, $zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($sub1)($zero, $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Array_ST_pure': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Monad_ST_Internal_applicativeST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_applicativeST'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Array_ST_unshiftAll': $v = (($GLOBALS['Control_Monad_ST_Uncurried_runSTFn2'] ?? \Control\Monad\ST\Uncurried\phpurs_eval_thunk('Control_Monad_ST_Uncurried_runSTFn2')))(($GLOBALS['Data_Array_ST_unshiftAllImpl'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_unshiftAllImpl'))); break;
      case 'Data_Array_ST_unsafeThaw': $v = (($GLOBALS['Control_Monad_ST_Uncurried_runSTFn1'] ?? \Control\Monad\ST\Uncurried\phpurs_eval_thunk('Control_Monad_ST_Uncurried_runSTFn1')))(($GLOBALS['Data_Array_ST_unsafeThawImpl'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_unsafeThawImpl'))); break;
      case 'Data_Array_ST_unsafeFreeze': $v = (($GLOBALS['Control_Monad_ST_Uncurried_runSTFn1'] ?? \Control\Monad\ST\Uncurried\phpurs_eval_thunk('Control_Monad_ST_Uncurried_runSTFn1')))(($GLOBALS['Data_Array_ST_unsafeFreezeImpl'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_unsafeFreezeImpl'))); break;
      case 'Data_Array_ST_toAssocArray': $v = (($GLOBALS['Control_Monad_ST_Uncurried_runSTFn1'] ?? \Control\Monad\ST\Uncurried\phpurs_eval_thunk('Control_Monad_ST_Uncurried_runSTFn1')))(($GLOBALS['Data_Array_ST_toAssocArrayImpl'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_toAssocArrayImpl'))); break;
      case 'Data_Array_ST_thaw': $v = (($GLOBALS['Control_Monad_ST_Uncurried_runSTFn1'] ?? \Control\Monad\ST\Uncurried\phpurs_eval_thunk('Control_Monad_ST_Uncurried_runSTFn1')))(($GLOBALS['Data_Array_ST_thawImpl'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_thawImpl'))); break;
      case 'Data_Array_ST_splice': $v = (($GLOBALS['Control_Monad_ST_Uncurried_runSTFn4'] ?? \Control\Monad\ST\Uncurried\phpurs_eval_thunk('Control_Monad_ST_Uncurried_runSTFn4')))(($GLOBALS['Data_Array_ST_spliceImpl'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_spliceImpl'))); break;
      case 'Data_Array_ST_shift': $v = (($GLOBALS['Control_Monad_ST_Uncurried_runSTFn3'] ?? \Control\Monad\ST\Uncurried\phpurs_eval_thunk('Control_Monad_ST_Uncurried_runSTFn3')))(($GLOBALS['Data_Array_ST_shiftImpl'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_shiftImpl')), (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))); break;
      case 'Data_Array_ST_pushAll': $v = (($GLOBALS['Control_Monad_ST_Uncurried_runSTFn2'] ?? \Control\Monad\ST\Uncurried\phpurs_eval_thunk('Control_Monad_ST_Uncurried_runSTFn2')))(($GLOBALS['Data_Array_ST_pushAllImpl'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_pushAllImpl'))); break;
      case 'Data_Array_ST_push': $v = (($GLOBALS['Control_Monad_ST_Uncurried_runSTFn2'] ?? \Control\Monad\ST\Uncurried\phpurs_eval_thunk('Control_Monad_ST_Uncurried_runSTFn2')))(($GLOBALS['Data_Array_ST_pushImpl'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_pushImpl'))); break;
      case 'Data_Array_ST_pop': $v = (($GLOBALS['Control_Monad_ST_Uncurried_runSTFn3'] ?? \Control\Monad\ST\Uncurried\phpurs_eval_thunk('Control_Monad_ST_Uncurried_runSTFn3')))(($GLOBALS['Data_Array_ST_popImpl'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_popImpl')), (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))); break;
      case 'Data_Array_ST_poke': $v = (($GLOBALS['Control_Monad_ST_Uncurried_runSTFn3'] ?? \Control\Monad\ST\Uncurried\phpurs_eval_thunk('Control_Monad_ST_Uncurried_runSTFn3')))(($GLOBALS['Data_Array_ST_pokeImpl'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_pokeImpl'))); break;
      case 'Data_Array_ST_peek': $v = (($GLOBALS['Control_Monad_ST_Uncurried_runSTFn4'] ?? \Control\Monad\ST\Uncurried\phpurs_eval_thunk('Control_Monad_ST_Uncurried_runSTFn4')))(($GLOBALS['Data_Array_ST_peekImpl'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_peekImpl')), (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))); break;
      case 'Data_Array_ST_length': $v = (($GLOBALS['Control_Monad_ST_Uncurried_runSTFn1'] ?? \Control\Monad\ST\Uncurried\phpurs_eval_thunk('Control_Monad_ST_Uncurried_runSTFn1')))(($GLOBALS['Data_Array_ST_lengthImpl'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_lengthImpl'))); break;
      case 'Data_Array_ST_freeze': $v = (($GLOBALS['Control_Monad_ST_Uncurried_runSTFn1'] ?? \Control\Monad\ST\Uncurried\phpurs_eval_thunk('Control_Monad_ST_Uncurried_runSTFn1')))(($GLOBALS['Data_Array_ST_freezeImpl'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_freezeImpl'))); break;
      case 'Data_Array_ST_clone': $v = (($GLOBALS['Control_Monad_ST_Uncurried_runSTFn1'] ?? \Control\Monad\ST\Uncurried\phpurs_eval_thunk('Control_Monad_ST_Uncurried_runSTFn1')))(($GLOBALS['Data_Array_ST_cloneImpl'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_cloneImpl'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };






// Data_Array_ST_unshift
function Data_Array_ST_unshift($a) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_ST_unshift';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_ST_Uncurried_runSTFn2 = ($GLOBALS['Control_Monad_ST_Uncurried_runSTFn2'] ?? \Control\Monad\ST\Uncurried\phpurs_eval_thunk('Control_Monad_ST_Uncurried_runSTFn2'));
$__global_Data_Array_ST_unshiftAllImpl = ($GLOBALS['Data_Array_ST_unshiftAllImpl'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_unshiftAllImpl'));
    $__res = ($__global_Control_Monad_ST_Uncurried_runSTFn2)($__global_Data_Array_ST_unshiftAllImpl, [$a]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_ST_unshift'] = __NAMESPACE__ . '\\Data_Array_ST_unshift';





// Data_Array_ST_withArray
function Data_Array_ST_withArray($f, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_ST_withArray';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($f, $__fn) { return $__fn($f, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Array_ST_bind = ($GLOBALS['Data_Array_ST_bind'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_bind'));
$__global_Data_Array_ST_thaw = ($GLOBALS['Data_Array_ST_thaw'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_thaw'));
$__global_Data_Array_ST_unsafeFreeze = ($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_unsafeFreeze'));
    $__res = ($__global_Data_Array_ST_bind)(($__global_Data_Array_ST_thaw)($xs), (function() use ($__global_Data_Array_ST_bind, $f, $__global_Data_Array_ST_unsafeFreeze) {
  $__fn = function($result) use ($__global_Data_Array_ST_bind, $f, $__global_Data_Array_ST_unsafeFreeze, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_ST_bind)(($f)($result), (function() use ($__global_Data_Array_ST_unsafeFreeze, $result) {
  $__fn = function($__dollar____unused) use ($__global_Data_Array_ST_unsafeFreeze, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_ST_unsafeFreeze)($result);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_ST_withArray'] = __NAMESPACE__ . '\\Data_Array_ST_withArray';


// Data_Array_ST_sortBy
function Data_Array_ST_sortBy($comp) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_ST_sortBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_ST_Uncurried_runSTFn3 = ($GLOBALS['Control_Monad_ST_Uncurried_runSTFn3'] ?? \Control\Monad\ST\Uncurried\phpurs_eval_thunk('Control_Monad_ST_Uncurried_runSTFn3'));
$__global_Data_Array_ST_sortByImpl = ($GLOBALS['Data_Array_ST_sortByImpl'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_sortByImpl'));
$__global_Data_Array_ST_negate = ($GLOBALS['Data_Array_ST_negate'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_negate'));
    $__res = ($__global_Control_Monad_ST_Uncurried_runSTFn3)($__global_Data_Array_ST_sortByImpl, $comp, (function() use ($__global_Data_Array_ST_negate) {
  $__body = function($v) use ($__global_Data_Array_ST_negate) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "GT":
return 1;
break;
case "EQ":
return 0;
break;
case "LT":
return ($__global_Data_Array_ST_negate)(1);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Data_Array_ST_negate, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_ST_sortBy'] = __NAMESPACE__ . '\\Data_Array_ST_sortBy';

// Data_Array_ST_sortWith
function Data_Array_ST_sortWith($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_ST_sortWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_ST_sortBy = ($GLOBALS['Data_Array_ST_sortBy'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_sortBy'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare3 = $__case_res_0;
$comparing = (function() use ($compare3) {
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
    $__res = (function() use ($__global_Data_Array_ST_sortBy, $comparing) {
  $__fn = function($f) use ($__global_Data_Array_ST_sortBy, $comparing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Array_ST_sortBy)(($comparing)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_ST_sortWith'] = __NAMESPACE__ . '\\Data_Array_ST_sortWith';

// Data_Array_ST_sort
function Data_Array_ST_sort($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_ST_sort';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Array_ST_sortBy = ($GLOBALS['Data_Array_ST_sortBy'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_sortBy'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Array_ST_sortBy)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_ST_sort'] = __NAMESPACE__ . '\\Data_Array_ST_sort';


// Data_Array_ST_run
function Data_Array_ST_run($st) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_ST_run';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_ST_Internal_run = ($GLOBALS['Control_Monad_ST_Internal_run'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_run'));
$__global_Data_Array_ST_bind = ($GLOBALS['Data_Array_ST_bind'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_bind'));
$__global_Data_Array_ST_unsafeFreeze = ($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_unsafeFreeze'));
    $__res = ($__global_Control_Monad_ST_Internal_run)(($__global_Data_Array_ST_bind)($st, $__global_Data_Array_ST_unsafeFreeze));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_ST_run'] = __NAMESPACE__ . '\\Data_Array_ST_run';






// Data_Array_ST_modify
function Data_Array_ST_modify($i, $f = null, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_ST_modify';
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($i, $f, $__fn) { return $__fn($i, $f, $xs); };
    if ($__num === 1) return function($f, $xs = null) use ($i, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $f, $xs);
      if ($__num2 === 1) return function($xs) use ($i, $f, $__fn) { return $__fn($i, $f, $xs); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_Array_ST_bind = ($GLOBALS['Data_Array_ST_bind'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_bind'));
$__global_Data_Array_ST_peek = ($GLOBALS['Data_Array_ST_peek'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_peek'));
$__global_Data_Array_ST_poke = ($GLOBALS['Data_Array_ST_poke'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_poke'));
$__global_Data_Array_ST_pure = ($GLOBALS['Data_Array_ST_pure'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_pure'));
    $__res = ($__global_Data_Array_ST_bind)(($__global_Data_Array_ST_peek)($i, $xs), (function() use ($__global_Data_Array_ST_poke, $i, $f, $xs, $__global_Data_Array_ST_pure) {
  $__body = function($entry) use ($__global_Data_Array_ST_poke, $i, $f, $xs, $__global_Data_Array_ST_pure) {
    $__case_0 = $entry;
    switch (($__case_0)->tag) {
case "Just":
$x = ($__case_0)->v0;
return ($__global_Data_Array_ST_poke)($i, ($f)($x), $xs);
break;
case "Nothing":
return ($__global_Data_Array_ST_pure)(false);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($entry) use ($__global_Data_Array_ST_poke, $i, $f, $xs, $__global_Data_Array_ST_pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($entry);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Array_ST_modify'] = __NAMESPACE__ . '\\Data_Array_ST_modify';




