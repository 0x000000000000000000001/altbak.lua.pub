<?php

namespace Data\Unfoldable1;

require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
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
      case 'Data_Unfoldable1_fromJust': $v = (($GLOBALS['Data_Maybe_fromJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromJust')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Unfoldable1_lessThanOrEq': $v = (($GLOBALS['Data_Ord_lessThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThanOrEq')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Unfoldable1_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_Unfoldable1_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_Unfoldable1_eq': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Unfoldable1_greaterThanOrEq': $v = (($GLOBALS['Data_Ord_greaterThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThanOrEq')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Unfoldable1_negate': $v = (($GLOBALS['Data_Ring_negate'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_negate')))(($GLOBALS['Data_Ring_ringInt'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringInt'))); break;
      case 'Data_Unfoldable1_greaterThan': $v = (($GLOBALS['Data_Ord_greaterThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThan')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Unfoldable1_unfoldable1Maybe': $v = (($GLOBALS['Data_Unfoldable1_Unfoldable1__dollar__Dict'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_Unfoldable1__dollar__Dict')))((object)["unfoldr1" => (function() {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst')))(($f)($b)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Unfoldable1_unfoldable1Array': $v = (($GLOBALS['Data_Unfoldable1_Unfoldable1__dollar__Dict'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_Unfoldable1__dollar__Dict')))((object)["unfoldr1" => (($GLOBALS['Data_Unfoldable1_unfoldr1ArrayImpl'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_unfoldr1ArrayImpl')))(($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')), (($GLOBALS['Partial_Unsafe_unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafePartial')))((function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Unfoldable1_fromJust'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_fromJust'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst')), ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd')))]); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };










// Data_Unfoldable1_Unfoldable1$Dict
function Data_Unfoldable1_Unfoldable1__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Unfoldable1_Unfoldable1__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Unfoldable1_Unfoldable1__dollar__Dict'] = __NAMESPACE__ . '\\Data_Unfoldable1_Unfoldable1__dollar__Dict';

// Data_Unfoldable1_unfoldr1
function Data_Unfoldable1_unfoldr1($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Unfoldable1_unfoldr1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->unfoldr1;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Unfoldable1_unfoldr1'] = __NAMESPACE__ . '\\Data_Unfoldable1_unfoldr1';



// Data_Unfoldable1_replicate1
function Data_Unfoldable1_replicate1($dictUnfoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Unfoldable1_replicate1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$unfoldr11 = (($GLOBALS['Data_Unfoldable1_unfoldr1'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_unfoldr1')))($dictUnfoldable1);
    $__res = (function() use ($unfoldr11) {
  $__fn = function($n, $v = null) use ($unfoldr11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($n, &$__fn) { return $__fn($n, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$step = (function() {
  $__body = function($i) {
    $__case_0 = $i;
    if (true) {
$i1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
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
})();
    $__res = ($unfoldr11)($step, (($GLOBALS['Data_Unfoldable1_sub'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_sub')))($n, 1));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Unfoldable1_replicate1'] = __NAMESPACE__ . '\\Data_Unfoldable1_replicate1';

// Data_Unfoldable1_replicate1A
function Data_Unfoldable1_replicate1A($dictApply, $dictUnfoldable1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Unfoldable1_replicate1A';
  if ($__num < 2) {
    if ($__num === 1) return function($dictUnfoldable1) use ($dictApply, $__fn) { return $__fn($dictApply, $dictUnfoldable1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$replicate11 = (($GLOBALS['Data_Unfoldable1_replicate1'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_replicate1')))($dictUnfoldable1);
    $__res = (function() use ($dictApply, $replicate11) {
  $__fn = function($dictTraversable1) use ($dictApply, $replicate11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sequence1 = (($GLOBALS['Data_Semigroup_Traversable_sequence1'] ?? \Data\Semigroup\Traversable\phpurs_eval_thunk('Data_Semigroup_Traversable_sequence1')))($dictTraversable1, $dictApply);
    $__res = (function() use ($sequence1, $replicate11) {
  $__fn = function($n, $m = null) use ($sequence1, $replicate11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($n, &$__fn) { return $__fn($n, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($sequence1)(($replicate11)($n, $m));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Unfoldable1_replicate1A'] = __NAMESPACE__ . '\\Data_Unfoldable1_replicate1A';

// Data_Unfoldable1_singleton
function Data_Unfoldable1_singleton($dictUnfoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Unfoldable1_singleton';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Unfoldable1_replicate1'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_replicate1')))($dictUnfoldable1, 1);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Unfoldable1_singleton'] = __NAMESPACE__ . '\\Data_Unfoldable1_singleton';

// Data_Unfoldable1_range
function Data_Unfoldable1_range($dictUnfoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Unfoldable1_range';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$unfoldr11 = (($GLOBALS['Data_Unfoldable1_unfoldr1'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_unfoldr1')))($dictUnfoldable1);
    $__res = (function() use ($unfoldr11) {
  $__fn = function($start, $end = null) use ($unfoldr11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($end) use ($start, &$__fn) { return $__fn($start, $end); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($end) {
  $__fn = function($delta, $i = null) use ($end, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($i) use ($delta, &$__fn) { return $__fn($delta, $i); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$i__prime__ = (($GLOBALS['Data_Unfoldable1_add'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_add')))($i, $delta);
$__case_0 = (($GLOBALS['Data_Unfoldable1_eq'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_eq')))($i, $end);
$__case_res_0 = null;
if (($__case_0 === true)) {
$__case_res_0 = ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
if (true) {
$__case_res_0 = (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))($i__prime__);
} else {
throw new \Exception("Pattern match failure");
};
};
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($i, $__case_res_0);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = (($GLOBALS['Data_Unfoldable1_greaterThanOrEq'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_greaterThanOrEq')))($end, $start);
$__case_res_1 = null;
if (($__case_0 === true)) {
$__case_res_1 = 1;
} else {
if (true) {
$__case_res_1 = (($GLOBALS['Data_Unfoldable1_negate'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_negate')))(1);
} else {
throw new \Exception("Pattern match failure");
};
};
$delta = $__case_res_1;
    $__res = ($unfoldr11)(($go)($delta), $start);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Unfoldable1_range'] = __NAMESPACE__ . '\\Data_Unfoldable1_range';

// Data_Unfoldable1_iterateN
function Data_Unfoldable1_iterateN($dictUnfoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Unfoldable1_iterateN';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$unfoldr11 = (($GLOBALS['Data_Unfoldable1_unfoldr1'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_unfoldr1')))($dictUnfoldable1);
    $__res = (function() use ($unfoldr11) {
  $__fn = function($n, $f = null, $s = null) use ($unfoldr11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($n, $f, &$__fn) { return $__fn($n, $f, $s); };
    if ($__num === 1) return function($f, $s = null) use ($n, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($n, $f, $s);
      if ($__num2 === 1) return function($s) use ($n, $f, &$__fn) { return $__fn($n, $f, $s); };
      return phpurs_curry_fallback($__fn, [$n], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$go = (function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$x = ($__case_0)->v0;
$n__prime__ = ($__case_0)->v1;
$__case_0 = (($GLOBALS['Data_Unfoldable1_greaterThan'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_greaterThan')))($n__prime__, 0);
$__case_res_0 = null;
if (($__case_0 === true)) {
$__case_res_0 = (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($f)($x), (($GLOBALS['Data_Unfoldable1_sub'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_sub')))($n__prime__, 1)));
} else {
if (true) {
$__case_res_0 = ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
throw new \Exception("Pattern match failure");
};
};
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($x, $__case_res_0);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($unfoldr11)($go, (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($s, (($GLOBALS['Data_Unfoldable1_sub'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_sub')))($n, 1)));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Unfoldable1_iterateN'] = __NAMESPACE__ . '\\Data_Unfoldable1_iterateN';

