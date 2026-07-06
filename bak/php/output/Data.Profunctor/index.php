<?php

namespace Data\Profunctor;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
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
      case 'Data_Profunctor_composeFlipped': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compose;
} else {
throw new \Exception("Pattern match failure");
};
  $compose1 = $__case_res_0;
  return (function() use ($compose1) {
  $__fn = function($f, $g = null) use ($compose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($g) use ($f, &$__fn) { return $__fn($f, $g); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($compose1)($g, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Profunctor_identity': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->identity;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Profunctor_wrap': $v = (($GLOBALS['Data_Newtype_wrap'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_wrap')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Profunctor_unwrap': $v = (($GLOBALS['Data_Newtype_unwrap'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Profunctor_profunctorFn': $v = (object)["dimap" => (function() {
  $__fn = function($a2b, $c2d = null, $b2c = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($b2c) use ($a2b, $c2d, &$__fn) { return $__fn($a2b, $c2d, $b2c); };
    if ($__num === 1) return function($c2d, $b2c = null) use ($a2b, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a2b, $c2d, $b2c);
      if ($__num2 === 1) return function($b2c) use ($a2b, $c2d, &$__fn) { return $__fn($a2b, $c2d, $b2c); };
      return phpurs_curry_fallback($__fn, [$a2b], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_Profunctor_composeFlipped = ($GLOBALS['Data_Profunctor_composeFlipped'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_composeFlipped'));
    $__res = ($__global_Data_Profunctor_composeFlipped)($a2b, ($__global_Data_Profunctor_composeFlipped)($b2c, $c2d));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };






// Data_Profunctor_Profunctor$Dict
function Data_Profunctor_Profunctor__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Profunctor__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Profunctor__dollar__Dict'] = __NAMESPACE__ . '\\Data_Profunctor_Profunctor__dollar__Dict';


// Data_Profunctor_dimap
function Data_Profunctor_dimap($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_dimap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->dimap;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_dimap'] = __NAMESPACE__ . '\\Data_Profunctor_dimap';

// Data_Profunctor_lcmap
function Data_Profunctor_lcmap($dictProfunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_lcmap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Profunctor_identity = ($GLOBALS['Data_Profunctor_identity'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_identity'));
$__case_0 = $dictProfunctor;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->dimap;
} else {
throw new \Exception("Pattern match failure");
};
$dimap1 = $__case_res_0;
    $__res = (function() use ($dimap1, $__global_Data_Profunctor_identity) {
  $__fn = function($a2b) use ($dimap1, $__global_Data_Profunctor_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($dimap1)($a2b, $__global_Data_Profunctor_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_lcmap'] = __NAMESPACE__ . '\\Data_Profunctor_lcmap';

// Data_Profunctor_rmap
function Data_Profunctor_rmap($dictProfunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_rmap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Profunctor_identity = ($GLOBALS['Data_Profunctor_identity'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_identity'));
$__case_0 = $dictProfunctor;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->dimap;
} else {
throw new \Exception("Pattern match failure");
};
$dimap1 = $__case_res_0;
    $__res = (function() use ($dimap1, $__global_Data_Profunctor_identity) {
  $__fn = function($b2c) use ($dimap1, $__global_Data_Profunctor_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($dimap1)($__global_Data_Profunctor_identity, $b2c);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_rmap'] = __NAMESPACE__ . '\\Data_Profunctor_rmap';

// Data_Profunctor_unwrapIso
function Data_Profunctor_unwrapIso($dictProfunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_unwrapIso';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Profunctor_wrap = ($GLOBALS['Data_Profunctor_wrap'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_wrap'));
$__global_Data_Profunctor_unwrap = ($GLOBALS['Data_Profunctor_unwrap'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_unwrap'));
$__case_0 = $dictProfunctor;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->dimap;
} else {
throw new \Exception("Pattern match failure");
};
$dimap1 = $__case_res_0;
    $__res = (function() use ($dimap1, $__global_Data_Profunctor_wrap, $__global_Data_Profunctor_unwrap) {
  $__fn = function($__dollar____unused) use ($dimap1, $__global_Data_Profunctor_wrap, $__global_Data_Profunctor_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($dimap1)($__global_Data_Profunctor_wrap, $__global_Data_Profunctor_unwrap);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_unwrapIso'] = __NAMESPACE__ . '\\Data_Profunctor_unwrapIso';

// Data_Profunctor_wrapIso
function Data_Profunctor_wrapIso($dictProfunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_wrapIso';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Profunctor_unwrap = ($GLOBALS['Data_Profunctor_unwrap'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_unwrap'));
$__global_Data_Profunctor_wrap = ($GLOBALS['Data_Profunctor_wrap'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_wrap'));
$__case_0 = $dictProfunctor;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->dimap;
} else {
throw new \Exception("Pattern match failure");
};
$dimap1 = $__case_res_0;
    $__res = (function() use ($dimap1, $__global_Data_Profunctor_unwrap, $__global_Data_Profunctor_wrap) {
  $__fn = function($__dollar____unused, $v = null) use ($dimap1, $__global_Data_Profunctor_unwrap, $__global_Data_Profunctor_wrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($dimap1)($__global_Data_Profunctor_unwrap, $__global_Data_Profunctor_wrap);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_wrapIso'] = __NAMESPACE__ . '\\Data_Profunctor_wrapIso';

// Data_Profunctor_arr
function Data_Profunctor_arr($dictCategory) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_arr';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Profunctor_identity = ($GLOBALS['Data_Profunctor_identity'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_identity'));
$__case_0 = $dictCategory;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->identity;
} else {
throw new \Exception("Pattern match failure");
};
$identity1 = $__case_res_0;
    $__res = (function() use ($__global_Data_Profunctor_identity, $identity1) {
  $__fn = function($dictProfunctor) use ($__global_Data_Profunctor_identity, $identity1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictProfunctor;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->dimap;
} else {
throw new \Exception("Pattern match failure");
};
$dimap1 = $__case_res_1;
$rmap1 = (function() use ($dimap1, $__global_Data_Profunctor_identity) {
  $__fn = function($b2c) use ($dimap1, $__global_Data_Profunctor_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($dimap1)($__global_Data_Profunctor_identity, $b2c);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($rmap1, $identity1) {
  $__fn = function($f) use ($rmap1, $identity1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($rmap1)($f, $identity1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_arr'] = __NAMESPACE__ . '\\Data_Profunctor_arr';

