<?php

namespace Data\Unfoldable;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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
      case 'Data_Unfoldable_fromJust': $v = (($GLOBALS['Data_Maybe_fromJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromJust')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Unfoldable_lessThanOrEq': $v = (($GLOBALS['Data_Ord_lessThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThanOrEq')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Unfoldable_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_Unfoldable_unfoldableMaybe': $v = (($GLOBALS['Data_Unfoldable_Unfoldable__dollar__Dict'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_Unfoldable__dollar__Dict')))((object)["unfoldr" => (function() {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Unfoldable_map'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_map')))(($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst')), ($f)($b));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Unfoldable10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Unfoldable1_unfoldable1Maybe'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_unfoldable1Maybe'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Unfoldable_unfoldableArray': $v = (($GLOBALS['Data_Unfoldable_Unfoldable__dollar__Dict'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_Unfoldable__dollar__Dict')))((object)["unfoldr" => (($GLOBALS['Data_Unfoldable_unfoldrArrayImpl'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_unfoldrArrayImpl')))(($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')), (($GLOBALS['Partial_Unsafe_unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafePartial')))((function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Unfoldable_fromJust'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_fromJust'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst')), ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'))), "Unfoldable10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Unfoldable1_unfoldable1Array'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_unfoldable1Array'));
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


// Data_Unfoldable_map
function Data_Unfoldable_map($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Unfoldable_map';
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
$GLOBALS['Data_Unfoldable_map'] = __NAMESPACE__ . '\\Data_Unfoldable_map';




// Data_Unfoldable_Unfoldable$Dict
function Data_Unfoldable_Unfoldable__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Unfoldable_Unfoldable__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Unfoldable_Unfoldable__dollar__Dict'] = __NAMESPACE__ . '\\Data_Unfoldable_Unfoldable__dollar__Dict';

// Data_Unfoldable_unfoldr
function Data_Unfoldable_unfoldr($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Unfoldable_unfoldr';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->unfoldr;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Unfoldable_unfoldr'] = __NAMESPACE__ . '\\Data_Unfoldable_unfoldr';



// Data_Unfoldable_replicate
function Data_Unfoldable_replicate($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Unfoldable_replicate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$unfoldr1 = (($GLOBALS['Data_Unfoldable_unfoldr'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_unfoldr')))($dictUnfoldable);
    $__res = (function() use ($unfoldr1) {
  $__fn = function($n, $v = null) use ($unfoldr1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($n, &$__fn) { return $__fn($n, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$step = (function() use ($v) {
  $__body = function($i) use ($v) {
    $__case_0 = (($GLOBALS['Data_Unfoldable_lessThanOrEq'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_lessThanOrEq')))($i, 0);
    if (($__case_0 === true)) {
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
} else {
if (true) {
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($v, (($GLOBALS['Data_Unfoldable_sub'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_sub')))($i, 1)));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($i) use ($v, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($i);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($unfoldr1)($step, $n);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Unfoldable_replicate'] = __NAMESPACE__ . '\\Data_Unfoldable_replicate';

// Data_Unfoldable_replicateA
function Data_Unfoldable_replicateA($dictApplicative, $dictUnfoldable = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Unfoldable_replicateA';
  if ($__num < 2) {
    if ($__num === 1) return function($dictUnfoldable) use ($dictApplicative, $__fn) { return $__fn($dictApplicative, $dictUnfoldable); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$replicate1 = (($GLOBALS['Data_Unfoldable_replicate'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_replicate')))($dictUnfoldable);
    $__res = (function() use ($dictApplicative, $replicate1) {
  $__fn = function($dictTraversable) use ($dictApplicative, $replicate1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sequence = (($GLOBALS['Data_Traversable_sequence'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_sequence')))($dictTraversable, $dictApplicative);
    $__res = (function() use ($sequence, $replicate1) {
  $__fn = function($n, $m = null) use ($sequence, $replicate1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($n, &$__fn) { return $__fn($n, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($sequence)(($replicate1)($n, $m));
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
$GLOBALS['Data_Unfoldable_replicateA'] = __NAMESPACE__ . '\\Data_Unfoldable_replicateA';

// Data_Unfoldable_none
function Data_Unfoldable_none($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Unfoldable_none';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Unfoldable_unfoldr'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_unfoldr')))($dictUnfoldable, (($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'))), ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Unfoldable_none'] = __NAMESPACE__ . '\\Data_Unfoldable_none';

// Data_Unfoldable_fromMaybe
function Data_Unfoldable_fromMaybe($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Unfoldable_fromMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Unfoldable_unfoldr'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_unfoldr')))($dictUnfoldable, (function() {
  $__fn = function($b) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Unfoldable_map'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_map')))((($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))(($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')), ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'))), $b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Unfoldable_fromMaybe'] = __NAMESPACE__ . '\\Data_Unfoldable_fromMaybe';

