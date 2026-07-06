<?php

namespace Control\Parallel;

require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Parallel/index.php';
require_once __DIR__ . '/../Control.Parallel.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
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
      case 'Control_Parallel_compose': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compose;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Control_Parallel_identity': $v = (function() {
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
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };




// Control_Parallel_parTraverse_
function Control_Parallel_parTraverse_($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parTraverse_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Apply_identity = ($GLOBALS['Control_Apply_identity'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_identity'));
$__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Control_Parallel_compose = ($GLOBALS['Control_Parallel_compose'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_compose'));
$__case_0 = $dictParallel;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
$sequential = $__case_res_0;
$__case_0 = $dictParallel;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$parallel = $__case_res_1;
    $__res = (function() use ($dict, $__global_Data_Function_const, $__global_Control_Apply_identity, $__global_Data_Foldable_compose, $__global_Data_Unit_unit, $__global_Control_Parallel_compose, $sequential, $parallel) {
  $__fn = function($dictApplicative) use ($dict, $__global_Data_Function_const, $__global_Control_Apply_identity, $__global_Data_Foldable_compose, $__global_Data_Unit_unit, $__global_Control_Parallel_compose, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_3;
$applySecond = (function() use ($apply1, $map, $__global_Data_Function_const, $__global_Control_Apply_identity) {
  $__fn = function($a, $b = null) use ($apply1, $map, $__global_Data_Function_const, $__global_Control_Apply_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($apply1)(($map)(($__global_Data_Function_const)($__global_Control_Apply_identity), $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictApplicative;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_4;
$traverse_ = (function() use ($__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit) {
  $__fn = function($dictFoldable) use ($__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_5;
    $__res = (function() use ($foldr3, $__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($foldr3, $__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldr3)(($__global_Data_Foldable_compose)($applySecond, $f), ($pure)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($traverse_, $__global_Control_Parallel_compose, $sequential, $parallel) {
  $__fn = function($dictFoldable) use ($traverse_, $__global_Control_Parallel_compose, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverse_1 = ($traverse_)($dictFoldable);
    $__res = (function() use ($__global_Control_Parallel_compose, $sequential, $traverse_1, $parallel) {
  $__fn = function($f) use ($__global_Control_Parallel_compose, $sequential, $traverse_1, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Parallel_compose)($sequential, ($traverse_1)(($__global_Control_Parallel_compose)($parallel, $f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
$GLOBALS['Control_Parallel_parTraverse_'] = __NAMESPACE__ . '\\Control_Parallel_parTraverse_';

// Control_Parallel_parTraverse
function Control_Parallel_parTraverse($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parTraverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Parallel_compose = ($GLOBALS['Control_Parallel_compose'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_compose'));
$__case_0 = $dictParallel;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
$sequential = $__case_res_0;
$__case_0 = $dictParallel;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$parallel = $__case_res_1;
    $__res = (function() use ($__global_Control_Parallel_compose, $sequential, $parallel) {
  $__fn = function($dictApplicative, $dictTraversable = null) use ($__global_Control_Parallel_compose, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dictTraversable) use ($dictApplicative, &$__fn) { return $__fn($dictApplicative, $dictTraversable); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__case_0 = $dictTraversable;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse = ($__case_res_2)($dictApplicative);
    $__res = (function() use ($__global_Control_Parallel_compose, $sequential, $traverse, $parallel) {
  $__fn = function($f) use ($__global_Control_Parallel_compose, $sequential, $traverse, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Parallel_compose)($sequential, ($traverse)(($__global_Control_Parallel_compose)($parallel, $f)));
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
$GLOBALS['Control_Parallel_parTraverse'] = __NAMESPACE__ . '\\Control_Parallel_parTraverse';

// Control_Parallel_parSequence_
function Control_Parallel_parSequence_($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parSequence_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Control_Apply_identity = ($GLOBALS['Control_Apply_identity'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_identity'));
$__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Control_Parallel_compose = ($GLOBALS['Control_Parallel_compose'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_compose'));
$__global_Control_Parallel_identity = ($GLOBALS['Control_Parallel_identity'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_identity'));
$__case_0 = $dictParallel;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
$sequential = $__case_res_0;
$__case_0 = $dictParallel;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$parallel = $__case_res_1;
$parTraverse_1 = (function() use ($dict, $__global_Data_Function_const, $__global_Control_Apply_identity, $__global_Data_Foldable_compose, $__global_Data_Unit_unit, $__global_Control_Parallel_compose, $sequential, $parallel) {
  $__fn = function($dictApplicative) use ($dict, $__global_Data_Function_const, $__global_Control_Apply_identity, $__global_Data_Foldable_compose, $__global_Data_Unit_unit, $__global_Control_Parallel_compose, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_3;
$applySecond = (function() use ($apply1, $map, $__global_Data_Function_const, $__global_Control_Apply_identity) {
  $__fn = function($a, $b = null) use ($apply1, $map, $__global_Data_Function_const, $__global_Control_Apply_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($apply1)(($map)(($__global_Data_Function_const)($__global_Control_Apply_identity), $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dictApplicative;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_4;
$traverse_ = (function() use ($__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit) {
  $__fn = function($dictFoldable) use ($__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_5;
    $__res = (function() use ($foldr3, $__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($foldr3, $__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldr3)(($__global_Data_Foldable_compose)($applySecond, $f), ($pure)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($traverse_, $__global_Control_Parallel_compose, $sequential, $parallel) {
  $__fn = function($dictFoldable) use ($traverse_, $__global_Control_Parallel_compose, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverse_1 = ($traverse_)($dictFoldable);
    $__res = (function() use ($__global_Control_Parallel_compose, $sequential, $traverse_1, $parallel) {
  $__fn = function($f) use ($__global_Control_Parallel_compose, $sequential, $traverse_1, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Parallel_compose)($sequential, ($traverse_1)(($__global_Control_Parallel_compose)($parallel, $f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($parTraverse_1, $__global_Control_Parallel_identity) {
  $__fn = function($dictApplicative) use ($parTraverse_1, $__global_Control_Parallel_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$parTraverse_2 = ($parTraverse_1)($dictApplicative);
    $__res = (function() use ($parTraverse_2, $__global_Control_Parallel_identity) {
  $__fn = function($dictFoldable) use ($parTraverse_2, $__global_Control_Parallel_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($parTraverse_2)($dictFoldable, $__global_Control_Parallel_identity);
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
$GLOBALS['Control_Parallel_parSequence_'] = __NAMESPACE__ . '\\Control_Parallel_parSequence_';

// Control_Parallel_parSequence
function Control_Parallel_parSequence($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parSequence';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Parallel_compose = ($GLOBALS['Control_Parallel_compose'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_compose'));
$__global_Control_Parallel_identity = ($GLOBALS['Control_Parallel_identity'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_identity'));
$__case_0 = $dictParallel;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
$sequential = $__case_res_0;
$__case_0 = $dictParallel;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$parallel = $__case_res_1;
$parTraverse1 = (function() use ($__global_Control_Parallel_compose, $sequential, $parallel) {
  $__fn = function($dictApplicative, $dictTraversable = null) use ($__global_Control_Parallel_compose, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dictTraversable) use ($dictApplicative, &$__fn) { return $__fn($dictApplicative, $dictTraversable); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__case_0 = $dictTraversable;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse = ($__case_res_2)($dictApplicative);
    $__res = (function() use ($__global_Control_Parallel_compose, $sequential, $traverse, $parallel) {
  $__fn = function($f) use ($__global_Control_Parallel_compose, $sequential, $traverse, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Parallel_compose)($sequential, ($traverse)(($__global_Control_Parallel_compose)($parallel, $f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($parTraverse1, $__global_Control_Parallel_identity) {
  $__fn = function($dictApplicative) use ($parTraverse1, $__global_Control_Parallel_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$parTraverse2 = ($parTraverse1)($dictApplicative);
    $__res = (function() use ($parTraverse2, $__global_Control_Parallel_identity) {
  $__fn = function($dictTraversable) use ($parTraverse2, $__global_Control_Parallel_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($parTraverse2)($dictTraversable, $__global_Control_Parallel_identity);
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
$GLOBALS['Control_Parallel_parSequence'] = __NAMESPACE__ . '\\Control_Parallel_parSequence';

// Control_Parallel_parOneOfMap
function Control_Parallel_parOneOfMap($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parOneOfMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
$__global_Control_Parallel_compose = ($GLOBALS['Control_Parallel_compose'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_compose'));
$__case_0 = $dictParallel;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
$sequential = $__case_res_0;
$__case_0 = $dictParallel;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$parallel = $__case_res_1;
    $__res = (function() use ($__global_Prim_undefined, $dict, $__global_Data_Foldable_compose, $__global_Control_Parallel_compose, $sequential, $parallel) {
  $__fn = function($dictAlternative) use ($__global_Prim_undefined, $dict, $__global_Data_Foldable_compose, $__global_Control_Parallel_compose, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Plus1 = (($dictAlternative)->Plus1)($__global_Prim_undefined);
    $__res = (function() use ($dict, $__global_Data_Foldable_compose, &$Plus1, $__global_Control_Parallel_compose, $sequential, $parallel) {
  $__fn = function($dictFoldable) use ($dict, $__global_Data_Foldable_compose, &$Plus1, $__global_Control_Parallel_compose, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_2;
$oneOfMap = ((function() use ($dict, $foldr3, $__global_Data_Foldable_compose) {
  $__fn = function($dictPlus) use ($dict, $foldr3, $__global_Data_Foldable_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->alt;
} else {
throw new \Exception("Pattern match failure");
};
$alt = $__case_res_3;
$__case_0 = $dictPlus;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->empty;
} else {
throw new \Exception("Pattern match failure");
};
$empty = $__case_res_4;
    $__res = (function() use ($foldr3, $__global_Data_Foldable_compose, $alt, $empty) {
  $__fn = function($f) use ($foldr3, $__global_Data_Foldable_compose, $alt, $empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldr3)(($__global_Data_Foldable_compose)($alt, $f), $empty);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($Plus1);
    $__res = (function() use ($__global_Control_Parallel_compose, $sequential, $oneOfMap, $parallel) {
  $__fn = function($dictFunctor, $f = null) use ($__global_Control_Parallel_compose, $sequential, $oneOfMap, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($dictFunctor, &$__fn) { return $__fn($dictFunctor, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Control_Parallel_compose)($sequential, ($oneOfMap)(($__global_Control_Parallel_compose)($parallel, $f)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
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
$GLOBALS['Control_Parallel_parOneOfMap'] = __NAMESPACE__ . '\\Control_Parallel_parOneOfMap';

// Control_Parallel_parOneOf
function Control_Parallel_parOneOf($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parOneOf';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
$__global_Control_Parallel_compose = ($GLOBALS['Control_Parallel_compose'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_compose'));
$__case_0 = $dictParallel;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
$sequential = $__case_res_0;
$__case_0 = $dictParallel;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$parallel = $__case_res_1;
    $__res = (function() use ($__global_Prim_undefined, $dict, $__global_Data_Foldable_compose, $__global_Control_Parallel_compose, $sequential, $parallel) {
  $__fn = function($dictAlternative) use ($__global_Prim_undefined, $dict, $__global_Data_Foldable_compose, $__global_Control_Parallel_compose, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Plus1 = (($dictAlternative)->Plus1)($__global_Prim_undefined);
    $__res = (function() use ($dict, $__global_Data_Foldable_compose, &$Plus1, $__global_Control_Parallel_compose, $sequential, $parallel) {
  $__fn = function($dictFoldable) use ($dict, $__global_Data_Foldable_compose, &$Plus1, $__global_Control_Parallel_compose, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_2;
$oneOfMap = ((function() use ($dict, $foldr3, $__global_Data_Foldable_compose) {
  $__fn = function($dictPlus) use ($dict, $foldr3, $__global_Data_Foldable_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->alt;
} else {
throw new \Exception("Pattern match failure");
};
$alt = $__case_res_3;
$__case_0 = $dictPlus;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->empty;
} else {
throw new \Exception("Pattern match failure");
};
$empty = $__case_res_4;
    $__res = (function() use ($foldr3, $__global_Data_Foldable_compose, $alt, $empty) {
  $__fn = function($f) use ($foldr3, $__global_Data_Foldable_compose, $alt, $empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldr3)(($__global_Data_Foldable_compose)($alt, $f), $empty);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($Plus1);
    $__res = (function() use ($__global_Control_Parallel_compose, $sequential, $oneOfMap, $parallel) {
  $__fn = function($dictFunctor) use ($__global_Control_Parallel_compose, $sequential, $oneOfMap, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Parallel_compose)($sequential, ($oneOfMap)($parallel));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
$GLOBALS['Control_Parallel_parOneOf'] = __NAMESPACE__ . '\\Control_Parallel_parOneOf';

// Control_Parallel_parApply
function Control_Parallel_parApply($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parApply';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictParallel;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
$sequential = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_1;
$__case_0 = $dictParallel;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$parallel = $__case_res_2;
    $__res = (function() use ($sequential, $apply, $parallel) {
  $__fn = function($mf, $ma = null) use ($sequential, $apply, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ma) use ($mf, &$__fn) { return $__fn($mf, $ma); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($sequential)(($apply)(($parallel)($mf), ($parallel)($ma)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_parApply'] = __NAMESPACE__ . '\\Control_Parallel_parApply';

