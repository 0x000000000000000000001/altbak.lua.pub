<?php

namespace Control\Parallel\Class;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Except.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Maybe.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Trans/index.php';
require_once __DIR__ . '/../Control.Parallel.Class/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Costar/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Profunctor.Star/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Effect.Ref/index.php';
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
      case 'Control_Parallel_Class_compose': $v = (function() {
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
      case 'Control_Parallel_Class_composeFlipped': $v = (function() {
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
      case 'Control_Parallel_Class_discard': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Bind_discardUnit'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_discardUnit'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->discard;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Control_Parallel_Class_newtypeParCont': $v = (object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
    $__res = $__global_Prim_undefined;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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





// Control_Parallel_Class_Parallel$Dict
function Control_Parallel_Class_Parallel__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_Parallel__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_Parallel__dollar__Dict'] = __NAMESPACE__ . '\\Control_Parallel_Class_Parallel__dollar__Dict';

// Control_Parallel_Class_ParCont
function Control_Parallel_Class_ParCont($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_ParCont';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_ParCont'] = __NAMESPACE__ . '\\Control_Parallel_Class_ParCont';

// Control_Parallel_Class_sequential
function Control_Parallel_Class_sequential($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_sequential';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_sequential'] = __NAMESPACE__ . '\\Control_Parallel_Class_sequential';

// Control_Parallel_Class_parallel
function Control_Parallel_Class_parallel($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_parallel';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_parallel'] = __NAMESPACE__ . '\\Control_Parallel_Class_parallel';


// Control_Parallel_Class_monadParWriterT
function Control_Parallel_Class_monadParWriterT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_monadParWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_Writer_Trans_mapWriterT = ($GLOBALS['Control_Monad_Writer_Trans_mapWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_mapWriterT'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_0;
$applyWriterT = (function() use ($__global_Prim_undefined, $__global_Control_Monad_Writer_Trans_mapWriterT, $append) {
  $__fn = function($dictApply) use ($__global_Prim_undefined, $__global_Control_Monad_Writer_Trans_mapWriterT, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictApply;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_1;
$Functor0 = (($dictApply)->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
$__case_0 = $Functor0;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_3;
$functorWriterT1 = (object)["map" => (function() use ($__global_Control_Monad_Writer_Trans_mapWriterT, $map) {
  $__fn = function($f) use ($__global_Control_Monad_Writer_Trans_mapWriterT, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Writer_Trans_mapWriterT)(($map)((function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$w = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f)($a), $w);
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
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["apply" => (function() use ($append, $apply, $map) {
  $__body = function($v, $v1) use ($append, $apply, $map) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$v2 = $__case_1;
$k = (function() use ($append) {
  $__body = function($v3, $v4) use ($append) {
    $__case_0 = $v3;
    $__case_1 = $v4;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$a = ($__case_0)->v0;
$w = ($__case_0)->v1;
$b = ($__case_1)->v0;
$w__prime__ = ($__case_1)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($a)($b), ($append)($w, $w__prime__));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v3, $v4 = null) use ($append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v4) use ($v3, &$__fn) { return $__fn($v3, $v4); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v3, $v4);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return ($apply)(($map)($k, $f), $v2);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($append, $apply, $map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorWriterT1) {
  $__fn = function($__dollar____unused) use ($functorWriterT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorWriterT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($applyWriterT, $__global_Prim_undefined, $__global_Control_Monad_Writer_Trans_mapWriterT) {
  $__fn = function($dictParallel) use ($applyWriterT, $__global_Prim_undefined, $__global_Control_Monad_Writer_Trans_mapWriterT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applyWriterT1 = ($applyWriterT)((($dictParallel)->Apply0)($__global_Prim_undefined));
$applyWriterT2 = ($applyWriterT)((($dictParallel)->Apply1)($__global_Prim_undefined));
$__case_0 = $dictParallel;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dictParallel;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["parallel" => ($__global_Control_Monad_Writer_Trans_mapWriterT)($__case_res_4), "sequential" => ($__global_Control_Monad_Writer_Trans_mapWriterT)($__case_res_5), "Apply0" => (function() use ($applyWriterT1) {
  $__fn = function($__dollar____unused) use ($applyWriterT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyWriterT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use ($applyWriterT2) {
  $__fn = function($__dollar____unused) use ($applyWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyWriterT2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_monadParWriterT'] = __NAMESPACE__ . '\\Control_Parallel_Class_monadParWriterT';

// Control_Parallel_Class_monadParStar
function Control_Parallel_Class_monadParStar($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_monadParStar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Profunctor_Star_compose = ($GLOBALS['Data_Profunctor_Star_compose'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_compose'));
$__global_Control_Parallel_Class_compose = ($GLOBALS['Control_Parallel_Class_compose'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_compose'));
$__case_0 = $dictParallel;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$parallel1 = $__case_res_0;
$__case_0 = $dictParallel;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
$sequential1 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_3;
$functorStar1 = (object)["map" => (function() use ($__global_Data_Profunctor_Star_compose, $map) {
  $__body = function($f, $v) use ($__global_Data_Profunctor_Star_compose, $map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
return ($__global_Data_Profunctor_Star_compose)(($map)($f1), $g);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__global_Data_Profunctor_Star_compose, $map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
$applyStar = (object)["apply" => (function() use ($apply) {
  $__body = function($v, $v1) use ($apply) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$g = $__case_1;
return (function() use ($apply, $f, $g) {
  $__fn = function($a) use ($apply, $f, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($apply)(($f)($a), ($g)($a));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($apply, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorStar1) {
  $__fn = function($__dollar____unused) use ($functorStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorStar1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_4;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_5;
$functorStar1 = (object)["map" => (function() use ($__global_Data_Profunctor_Star_compose, $map) {
  $__body = function($f, $v) use ($__global_Data_Profunctor_Star_compose, $map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
return ($__global_Data_Profunctor_Star_compose)(($map)($f1), $g);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__global_Data_Profunctor_Star_compose, $map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
$applyStar1 = (object)["apply" => (function() use ($apply) {
  $__body = function($v, $v1) use ($apply) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$g = $__case_1;
return (function() use ($apply, $f, $g) {
  $__fn = function($a) use ($apply, $f, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($apply)(($f)($a), ($g)($a));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($apply, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorStar1) {
  $__fn = function($__dollar____unused) use ($functorStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorStar1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["parallel" => (function() use ($__global_Control_Parallel_Class_compose, $parallel1) {
  $__body = function($v) use ($__global_Control_Parallel_Class_compose, $parallel1) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($__global_Control_Parallel_Class_compose)($parallel1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__global_Control_Parallel_Class_compose, $parallel1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequential" => (function() use ($__global_Control_Parallel_Class_compose, $sequential1) {
  $__body = function($v) use ($__global_Control_Parallel_Class_compose, $sequential1) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($__global_Control_Parallel_Class_compose)($sequential1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__global_Control_Parallel_Class_compose, $sequential1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyStar) {
  $__fn = function($__dollar____unused) use ($applyStar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyStar;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use ($applyStar1) {
  $__fn = function($__dollar____unused) use ($applyStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyStar1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_monadParStar'] = __NAMESPACE__ . '\\Control_Parallel_Class_monadParStar';

// Control_Parallel_Class_monadParReaderT
function Control_Parallel_Class_monadParReaderT($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_monadParReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Reader_Trans_compose = ($GLOBALS['Control_Monad_Reader_Trans_compose'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_compose'));
$__global_Control_Monad_Reader_Trans_mapReaderT = ($GLOBALS['Control_Monad_Reader_Trans_mapReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_mapReaderT'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$functorReaderT1 = (object)["map" => ($__global_Control_Monad_Reader_Trans_compose)($__global_Control_Monad_Reader_Trans_mapReaderT, $__case_res_1)];
$applyReaderT = (object)["apply" => (function() use ($apply) {
  $__body = function($v, $v1) use ($apply) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$v2 = $__case_1;
return (function() use ($apply, $f, $v2) {
  $__fn = function($r) use ($apply, $f, $v2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($apply)(($f)($r), ($v2)($r));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($apply, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorReaderT1) {
  $__fn = function($__dollar____unused) use ($functorReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$functorReaderT1 = (object)["map" => ($__global_Control_Monad_Reader_Trans_compose)($__global_Control_Monad_Reader_Trans_mapReaderT, $__case_res_3)];
$applyReaderT1 = (object)["apply" => (function() use ($apply) {
  $__body = function($v, $v1) use ($apply) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$v2 = $__case_1;
return (function() use ($apply, $f, $v2) {
  $__fn = function($r) use ($apply, $f, $v2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($apply)(($f)($r), ($v2)($r));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($apply, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorReaderT1) {
  $__fn = function($__dollar____unused) use ($functorReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dictParallel;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dictParallel;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["parallel" => ($__global_Control_Monad_Reader_Trans_mapReaderT)($__case_res_4), "sequential" => ($__global_Control_Monad_Reader_Trans_mapReaderT)($__case_res_5), "Apply0" => (function() use ($applyReaderT) {
  $__fn = function($__dollar____unused) use ($applyReaderT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyReaderT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use ($applyReaderT1) {
  $__fn = function($__dollar____unused) use ($applyReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_monadParReaderT'] = __NAMESPACE__ . '\\Control_Parallel_Class_monadParReaderT';

// Control_Parallel_Class_monadParMaybeT
function Control_Parallel_Class_monadParMaybeT($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_monadParMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Maybe_applyMaybe = ($GLOBALS['Data_Maybe_applyMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_applyMaybe'));
$__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
$__case_0 = $dictParallel;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$parallel1 = $__case_res_0;
$__case_0 = $dictParallel;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
$sequential1 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_2;
$Functor0 = (($dictApply)->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_3;
$__case_0 = $Functor0;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_4;
$functorCompose1 = (function() use ($map) {
  $__fn = function($dictFunctor1) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctor1;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_5;
    $__res = (object)["map" => (function() use ($map, $map1) {
  $__body = function($f, $v) use ($map, $map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($map)(($map1)($f1), $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$applyCompose = ((function() use ($functorCompose1, $__global_Prim_undefined, $apply, $map) {
  $__fn = function($dictApply1) use ($functorCompose1, $__global_Prim_undefined, $apply, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictApply1;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_6;
$functorCompose2 = ($functorCompose1)((($dictApply1)->Functor0)($__global_Prim_undefined));
    $__res = (object)["apply" => (function() use ($apply, $map, $apply1) {
  $__body = function($v, $v1) use ($apply, $map, $apply1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$x = $__case_1;
return ($apply)(($map)($apply1, $f), $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($apply, $map, $apply1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorCompose2) {
  $__fn = function($__dollar____unused) use ($functorCompose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorCompose2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Data_Maybe_applyMaybe);
    $__res = (function() use ($dict, $__global_Control_Monad_Maybe_Trans_map, $parallel1, $sequential1, $applyCompose) {
  $__fn = function($dictMonad) use ($dict, $__global_Control_Monad_Maybe_Trans_map, $parallel1, $sequential1, $applyCompose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_7;
$functorMaybeT1 = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use ($map1, $__global_Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_8;
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_9;
$applyMaybeT = (object)["apply" => (function() use ($bind, $pure) {
  $__fn = function($f, $a = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)($f, (function() use ($bind, $a, $pure) {
  $__fn = function($f__prime__) use ($bind, $a, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($a, (function() use ($pure, $f__prime__) {
  $__fn = function($a__prime__) use ($pure, $f__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(($f__prime__)($a__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorMaybeT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["parallel" => (function() use ($parallel1) {
  $__body = function($v) use ($parallel1) {
    $__case_0 = $v;
    if (true) {
$ma = $__case_0;
return ($parallel1)($ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($parallel1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequential" => (function() use ($sequential1) {
  $__body = function($v) use ($sequential1) {
    $__case_0 = $v;
    if (true) {
$fa = $__case_0;
return ($sequential1)($fa);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($sequential1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyMaybeT) {
  $__fn = function($__dollar____unused) use ($applyMaybeT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyMaybeT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use ($applyCompose) {
  $__fn = function($__dollar____unused) use ($applyCompose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyCompose;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_monadParMaybeT'] = __NAMESPACE__ . '\\Control_Parallel_Class_monadParMaybeT';

// Control_Parallel_Class_monadParExceptT
function Control_Parallel_Class_monadParExceptT($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_monadParExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Either_applyEither = ($GLOBALS['Data_Either_applyEither'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_applyEither'));
$__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
$__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
$__case_0 = $dictParallel;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$parallel1 = $__case_res_0;
$__case_0 = $dictParallel;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
$sequential1 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_2;
$Functor0 = (($dictApply)->Functor0)($__global_Prim_undefined);
$__case_0 = $Functor0;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_3;
$__case_0 = $Functor0;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_4;
$functorCompose1 = (function() use ($map) {
  $__fn = function($dictFunctor1) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctor1;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_5;
    $__res = (object)["map" => (function() use ($map, $map1) {
  $__body = function($f, $v) use ($map, $map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($map)(($map1)($f1), $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$applyCompose = ((function() use ($functorCompose1, $__global_Prim_undefined, $apply, $map) {
  $__fn = function($dictApply1) use ($functorCompose1, $__global_Prim_undefined, $apply, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictApply1;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_6;
$functorCompose2 = ($functorCompose1)((($dictApply1)->Functor0)($__global_Prim_undefined));
    $__res = (object)["apply" => (function() use ($apply, $map, $apply1) {
  $__body = function($v, $v1) use ($apply, $map, $apply1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$x = $__case_1;
return ($apply)(($map)($apply1, $f), $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($apply, $map, $apply1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorCompose2) {
  $__fn = function($__dollar____unused) use ($functorCompose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorCompose2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Data_Either_applyEither);
    $__res = (function() use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, $parallel1, $sequential1, $applyCompose) {
  $__fn = function($dictMonad) use ($dict, $__global_Control_Monad_Except_Trans_mapExceptT, $__global_Control_Monad_Except_Trans_map, $parallel1, $sequential1, $applyCompose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_7;
$functorExceptT1 = (object)["map" => (function() use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__fn = function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_8;
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_9;
$applyExceptT = (object)["apply" => (function() use ($bind, $pure) {
  $__fn = function($f, $a = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bind)($f, (function() use ($bind, $a, $pure) {
  $__fn = function($f__prime__) use ($bind, $a, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($a, (function() use ($pure, $f__prime__) {
  $__fn = function($a__prime__) use ($pure, $f__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)(($f__prime__)($a__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["parallel" => (function() use ($parallel1) {
  $__body = function($v) use ($parallel1) {
    $__case_0 = $v;
    if (true) {
$ma = $__case_0;
return ($parallel1)($ma);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($parallel1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequential" => (function() use ($sequential1) {
  $__body = function($v) use ($sequential1) {
    $__case_0 = $v;
    if (true) {
$fa = $__case_0;
return ($sequential1)($fa);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($sequential1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyExceptT) {
  $__fn = function($__dollar____unused) use ($applyExceptT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyExceptT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use ($applyCompose) {
  $__fn = function($__dollar____unused) use ($applyCompose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyCompose;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_monadParExceptT'] = __NAMESPACE__ . '\\Control_Parallel_Class_monadParExceptT';

// Control_Parallel_Class_monadParCostar
function Control_Parallel_Class_monadParCostar($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_monadParCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Parallel_Class_composeFlipped = ($GLOBALS['Control_Parallel_Class_composeFlipped'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_composeFlipped'));
$__global_Data_Functor_Costar_applyCostar = ($GLOBALS['Data_Functor_Costar_applyCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_applyCostar'));
$__case_0 = $dictParallel;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
$sequential1 = $__case_res_0;
$__case_0 = $dictParallel;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$parallel1 = $__case_res_1;
    $__res = (object)["parallel" => (function() use ($__global_Control_Parallel_Class_composeFlipped, $sequential1) {
  $__body = function($v) use ($__global_Control_Parallel_Class_composeFlipped, $sequential1) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($__global_Control_Parallel_Class_composeFlipped)($sequential1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__global_Control_Parallel_Class_composeFlipped, $sequential1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequential" => (function() use ($__global_Control_Parallel_Class_composeFlipped, $parallel1) {
  $__body = function($v) use ($__global_Control_Parallel_Class_composeFlipped, $parallel1) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($__global_Control_Parallel_Class_composeFlipped)($parallel1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__global_Control_Parallel_Class_composeFlipped, $parallel1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($__global_Data_Functor_Costar_applyCostar) {
  $__fn = function($__dollar____unused) use ($__global_Data_Functor_Costar_applyCostar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__global_Data_Functor_Costar_applyCostar;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use ($__global_Data_Functor_Costar_applyCostar) {
  $__fn = function($__dollar____unused) use ($__global_Data_Functor_Costar_applyCostar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__global_Data_Functor_Costar_applyCostar;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_monadParCostar'] = __NAMESPACE__ . '\\Control_Parallel_Class_monadParCostar';

// Control_Parallel_Class_monadParParCont
function Control_Parallel_Class_monadParParCont($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_monadParParCont';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Parallel_Class_ParCont = ($GLOBALS['Control_Parallel_Class_ParCont'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_ParCont'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Parallel_Class_discard = ($GLOBALS['Control_Parallel_Class_discard'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_discard'));
$__global_Effect_Ref__new = ($GLOBALS['Effect_Ref__new'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref__new'));
$__global_Control_Monad_Cont_Trans_runContT = ($GLOBALS['Control_Monad_Cont_Trans_runContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_runContT'));
$__global_Effect_Ref_read = ($GLOBALS['Effect_Ref_read'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_read'));
$__global_Effect_Ref_write = ($GLOBALS['Effect_Ref_write'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_write'));
$__global_Control_Parallel_Class_compose = ($GLOBALS['Control_Parallel_Class_compose'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_compose'));
while (true) {
$functorContT1 = (object)["map" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return (function() use ($m, $f1) {
  $__fn = function($k) use ($m, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($m)((function() use ($k, $f1) {
  $__fn = function($a) use ($k, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($k)(($f1)($a));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
$applyContT = (object)["apply" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$v2 = $__case_1;
return (function() use ($f, $v2) {
  $__fn = function($k) use ($f, $v2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)((function() use ($v2, $k) {
  $__fn = function($g) use ($v2, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v2)((function() use ($k, $g) {
  $__fn = function($a) use ($k, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($k)(($g)($a));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorContT1) {
  $__fn = function($__dollar____unused) use ($functorContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorContT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
return (object)["parallel" => $__global_Control_Parallel_Class_ParCont, "sequential" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$ma = $__case_0;
return $ma;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyContT) {
  $__fn = function($__dollar____unused) use ($applyContT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyContT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use ($dictMonadEffect, $__global_Prim_undefined, $__global_Control_Parallel_Class_discard, $__global_Effect_Ref__new, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $dict, $__global_Control_Parallel_Class_compose) {
  $__fn = function($__dollar____unused) use ($dictMonadEffect, $__global_Prim_undefined, $__global_Control_Parallel_Class_discard, $__global_Effect_Ref__new, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $dict, $__global_Control_Parallel_Class_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Bind1 = (((($dictMonadEffect)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined);
$__case_0 = $Bind1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_0;
$__case_0 = $dictMonadEffect;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->liftEffect;
} else {
throw new \Exception("Pattern match failure");
};
$liftEffect = $__case_res_1;
$discard1 = ($__global_Control_Parallel_Class_discard)($Bind1);
    $__res = (object)["apply" => (function() use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $__global_Effect_Ref_write) {
  $__body = function($v, $v1) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $__global_Effect_Ref_write) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$ca = $__case_0;
$cb = $__case_1;
return (function() use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $cb) {
  $__fn = function($k) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $cb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref__new)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")))), (function() use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $k, $cb) {
  $__fn = function($ra) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $k, $cb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref__new)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")))), (function() use ($discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $bind, $liftEffect, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $ra, $k, $cb) {
  $__fn = function($rb) use ($discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $bind, $liftEffect, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $ra, $k, $cb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($discard1)(($__global_Control_Monad_Cont_Trans_runContT)($ca, (function() use ($bind, $liftEffect, $__global_Effect_Ref_read, $rb, $__global_Effect_Ref_write, $ra, $k) {
  $__fn = function($a) use ($bind, $liftEffect, $__global_Effect_Ref_read, $rb, $__global_Effect_Ref_write, $ra, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref_read)($rb)), (function() use ($liftEffect, $__global_Effect_Ref_write, $a, $ra, $k) {
  $__body = function($mb) use ($liftEffect, $__global_Effect_Ref_write, $a, $ra, $k) {
    $__case_0 = $mb;
    switch (($__case_0)->tag) {
case "Nothing":
return ($liftEffect)(($__global_Effect_Ref_write)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($a), $ra));
break;
case "Just":
$b = ($__case_0)->v0;
return ($k)(($a)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($mb) use ($liftEffect, $__global_Effect_Ref_write, $a, $ra, $k, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($mb);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($__global_Control_Monad_Cont_Trans_runContT, $cb, $bind, $liftEffect, $__global_Effect_Ref_read, $ra, $__global_Effect_Ref_write, $rb, $k) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Cont_Trans_runContT, $cb, $bind, $liftEffect, $__global_Effect_Ref_read, $ra, $__global_Effect_Ref_write, $rb, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Cont_Trans_runContT)($cb, (function() use ($bind, $liftEffect, $__global_Effect_Ref_read, $ra, $__global_Effect_Ref_write, $rb, $k) {
  $__fn = function($b) use ($bind, $liftEffect, $__global_Effect_Ref_read, $ra, $__global_Effect_Ref_write, $rb, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref_read)($ra)), (function() use ($liftEffect, $__global_Effect_Ref_write, $b, $rb, $k) {
  $__body = function($ma) use ($liftEffect, $__global_Effect_Ref_write, $b, $rb, $k) {
    $__case_0 = $ma;
    switch (($__case_0)->tag) {
case "Nothing":
return ($liftEffect)(($__global_Effect_Ref_write)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($b), $rb));
break;
case "Just":
$a = ($__case_0)->v0;
return ($k)(($a)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($ma) use ($liftEffect, $__global_Effect_Ref_write, $b, $rb, $k, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($ma);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($dict, $__global_Control_Parallel_Class_compose) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Parallel_Class_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
    $__res = (object)["map" => (function() use ($__global_Control_Parallel_Class_compose, $dict, $map) {
  $__fn = function($f) use ($__global_Control_Parallel_Class_compose, $dict, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Control_Parallel_Class_compose)($__case_res_3, ($__global_Control_Parallel_Class_compose)(($map)($f), $__case_res_4));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_monadParParCont'] = __NAMESPACE__ . '\\Control_Parallel_Class_monadParParCont';

// Control_Parallel_Class_functorParCont
function Control_Parallel_Class_functorParCont($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_functorParCont';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Parallel_Class_compose = ($GLOBALS['Control_Parallel_Class_compose'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_compose'));
while (true) {
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_0;
return (object)["map" => (function() use ($__global_Control_Parallel_Class_compose, $dict, $map) {
  $__fn = function($f) use ($__global_Control_Parallel_Class_compose, $dict, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Control_Parallel_Class_compose)($__case_res_1, ($__global_Control_Parallel_Class_compose)(($map)($f), $__case_res_2));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_functorParCont'] = __NAMESPACE__ . '\\Control_Parallel_Class_functorParCont';

// Control_Parallel_Class_applyParCont
function Control_Parallel_Class_applyParCont($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_applyParCont';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Parallel_Class_discard = ($GLOBALS['Control_Parallel_Class_discard'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_discard'));
$__global_Effect_Ref__new = ($GLOBALS['Effect_Ref__new'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref__new'));
$__global_Control_Monad_Cont_Trans_runContT = ($GLOBALS['Control_Monad_Cont_Trans_runContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_runContT'));
$__global_Effect_Ref_read = ($GLOBALS['Effect_Ref_read'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_read'));
$__global_Effect_Ref_write = ($GLOBALS['Effect_Ref_write'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_write'));
$__global_Control_Parallel_Class_compose = ($GLOBALS['Control_Parallel_Class_compose'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_compose'));
while (true) {
$Bind1 = (((($dictMonadEffect)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined);
$__case_0 = $Bind1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_0;
$__case_0 = $dictMonadEffect;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->liftEffect;
} else {
throw new \Exception("Pattern match failure");
};
$liftEffect = $__case_res_1;
$discard1 = ($__global_Control_Parallel_Class_discard)($Bind1);
return (object)["apply" => (function() use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $__global_Effect_Ref_write) {
  $__body = function($v, $v1) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $__global_Effect_Ref_write) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$ca = $__case_0;
$cb = $__case_1;
return (function() use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $cb) {
  $__fn = function($k) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $cb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref__new)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")))), (function() use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $k, $cb) {
  $__fn = function($ra) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $k, $cb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref__new)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")))), (function() use ($discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $bind, $liftEffect, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $ra, $k, $cb) {
  $__fn = function($rb) use ($discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $bind, $liftEffect, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $ra, $k, $cb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($discard1)(($__global_Control_Monad_Cont_Trans_runContT)($ca, (function() use ($bind, $liftEffect, $__global_Effect_Ref_read, $rb, $__global_Effect_Ref_write, $ra, $k) {
  $__fn = function($a) use ($bind, $liftEffect, $__global_Effect_Ref_read, $rb, $__global_Effect_Ref_write, $ra, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref_read)($rb)), (function() use ($liftEffect, $__global_Effect_Ref_write, $a, $ra, $k) {
  $__body = function($mb) use ($liftEffect, $__global_Effect_Ref_write, $a, $ra, $k) {
    $__case_0 = $mb;
    switch (($__case_0)->tag) {
case "Nothing":
return ($liftEffect)(($__global_Effect_Ref_write)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($a), $ra));
break;
case "Just":
$b = ($__case_0)->v0;
return ($k)(($a)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($mb) use ($liftEffect, $__global_Effect_Ref_write, $a, $ra, $k, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($mb);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($__global_Control_Monad_Cont_Trans_runContT, $cb, $bind, $liftEffect, $__global_Effect_Ref_read, $ra, $__global_Effect_Ref_write, $rb, $k) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Cont_Trans_runContT, $cb, $bind, $liftEffect, $__global_Effect_Ref_read, $ra, $__global_Effect_Ref_write, $rb, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Cont_Trans_runContT)($cb, (function() use ($bind, $liftEffect, $__global_Effect_Ref_read, $ra, $__global_Effect_Ref_write, $rb, $k) {
  $__fn = function($b) use ($bind, $liftEffect, $__global_Effect_Ref_read, $ra, $__global_Effect_Ref_write, $rb, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref_read)($ra)), (function() use ($liftEffect, $__global_Effect_Ref_write, $b, $rb, $k) {
  $__body = function($ma) use ($liftEffect, $__global_Effect_Ref_write, $b, $rb, $k) {
    $__case_0 = $ma;
    switch (($__case_0)->tag) {
case "Nothing":
return ($liftEffect)(($__global_Effect_Ref_write)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($b), $rb));
break;
case "Just":
$a = ($__case_0)->v0;
return ($k)(($a)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($ma) use ($liftEffect, $__global_Effect_Ref_write, $b, $rb, $k, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($ma);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($dict, $__global_Control_Parallel_Class_compose) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Parallel_Class_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
    $__res = (object)["map" => (function() use ($__global_Control_Parallel_Class_compose, $dict, $map) {
  $__fn = function($f) use ($__global_Control_Parallel_Class_compose, $dict, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Control_Parallel_Class_compose)($__case_res_3, ($__global_Control_Parallel_Class_compose)(($map)($f), $__case_res_4));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_applyParCont'] = __NAMESPACE__ . '\\Control_Parallel_Class_applyParCont';

// Control_Parallel_Class_applicativeParCont
function Control_Parallel_Class_applicativeParCont($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_applicativeParCont';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Parallel_Class_discard = ($GLOBALS['Control_Parallel_Class_discard'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_discard'));
$__global_Effect_Ref__new = ($GLOBALS['Effect_Ref__new'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref__new'));
$__global_Control_Monad_Cont_Trans_runContT = ($GLOBALS['Control_Monad_Cont_Trans_runContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_runContT'));
$__global_Effect_Ref_read = ($GLOBALS['Effect_Ref_read'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_read'));
$__global_Effect_Ref_write = ($GLOBALS['Effect_Ref_write'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_write'));
$__global_Control_Parallel_Class_compose = ($GLOBALS['Control_Parallel_Class_compose'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_compose'));
$Bind1 = (((($dictMonadEffect)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined);
$__case_0 = $Bind1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_0;
$__case_0 = $dictMonadEffect;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->liftEffect;
} else {
throw new \Exception("Pattern match failure");
};
$liftEffect = $__case_res_1;
$discard1 = ($__global_Control_Parallel_Class_discard)($Bind1);
$applyParCont1 = (object)["apply" => (function() use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $__global_Effect_Ref_write) {
  $__body = function($v, $v1) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $__global_Effect_Ref_write) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$ca = $__case_0;
$cb = $__case_1;
return (function() use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $cb) {
  $__fn = function($k) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $cb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref__new)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")))), (function() use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $k, $cb) {
  $__fn = function($ra) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $k, $cb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref__new)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")))), (function() use ($discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $bind, $liftEffect, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $ra, $k, $cb) {
  $__fn = function($rb) use ($discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $bind, $liftEffect, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $ra, $k, $cb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($discard1)(($__global_Control_Monad_Cont_Trans_runContT)($ca, (function() use ($bind, $liftEffect, $__global_Effect_Ref_read, $rb, $__global_Effect_Ref_write, $ra, $k) {
  $__fn = function($a) use ($bind, $liftEffect, $__global_Effect_Ref_read, $rb, $__global_Effect_Ref_write, $ra, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref_read)($rb)), (function() use ($liftEffect, $__global_Effect_Ref_write, $a, $ra, $k) {
  $__body = function($mb) use ($liftEffect, $__global_Effect_Ref_write, $a, $ra, $k) {
    $__case_0 = $mb;
    switch (($__case_0)->tag) {
case "Nothing":
return ($liftEffect)(($__global_Effect_Ref_write)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($a), $ra));
break;
case "Just":
$b = ($__case_0)->v0;
return ($k)(($a)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($mb) use ($liftEffect, $__global_Effect_Ref_write, $a, $ra, $k, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($mb);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($__global_Control_Monad_Cont_Trans_runContT, $cb, $bind, $liftEffect, $__global_Effect_Ref_read, $ra, $__global_Effect_Ref_write, $rb, $k) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Cont_Trans_runContT, $cb, $bind, $liftEffect, $__global_Effect_Ref_read, $ra, $__global_Effect_Ref_write, $rb, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Cont_Trans_runContT)($cb, (function() use ($bind, $liftEffect, $__global_Effect_Ref_read, $ra, $__global_Effect_Ref_write, $rb, $k) {
  $__fn = function($b) use ($bind, $liftEffect, $__global_Effect_Ref_read, $ra, $__global_Effect_Ref_write, $rb, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref_read)($ra)), (function() use ($liftEffect, $__global_Effect_Ref_write, $b, $rb, $k) {
  $__body = function($ma) use ($liftEffect, $__global_Effect_Ref_write, $b, $rb, $k) {
    $__case_0 = $ma;
    switch (($__case_0)->tag) {
case "Nothing":
return ($liftEffect)(($__global_Effect_Ref_write)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($b), $rb));
break;
case "Just":
$a = ($__case_0)->v0;
return ($k)(($a)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($ma) use ($liftEffect, $__global_Effect_Ref_write, $b, $rb, $k, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($ma);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($dict, $__global_Control_Parallel_Class_compose) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Parallel_Class_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
    $__res = (object)["map" => (function() use ($__global_Control_Parallel_Class_compose, $dict, $map) {
  $__fn = function($f) use ($__global_Control_Parallel_Class_compose, $dict, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Control_Parallel_Class_compose)($__case_res_3, ($__global_Control_Parallel_Class_compose)(($map)($f), $__case_res_4));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = (object)["pure" => ($__global_Control_Parallel_Class_compose)($__case_res_5, $__case_res_6), "Apply0" => (function() use ($applyParCont1) {
  $__fn = function($__dollar____unused) use ($applyParCont1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyParCont1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_applicativeParCont'] = __NAMESPACE__ . '\\Control_Parallel_Class_applicativeParCont';

// Control_Parallel_Class_altParCont
function Control_Parallel_Class_altParCont($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_altParCont';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Parallel_Class_discard = ($GLOBALS['Control_Parallel_Class_discard'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_discard'));
$__global_Control_Parallel_Class_compose = ($GLOBALS['Control_Parallel_Class_compose'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_compose'));
$__global_Effect_Ref__new = ($GLOBALS['Effect_Ref__new'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref__new'));
$__global_Control_Monad_Cont_Trans_runContT = ($GLOBALS['Control_Monad_Cont_Trans_runContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_runContT'));
$__global_Effect_Ref_read = ($GLOBALS['Effect_Ref_read'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_read'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Effect_Ref_write = ($GLOBALS['Effect_Ref_write'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_write'));
$Monad0 = (($dictMonadEffect)->Monad0)($__global_Prim_undefined);
$Bind1 = (($Monad0)->Bind1)($__global_Prim_undefined);
$__case_0 = $Bind1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_0;
$__case_0 = $dictMonadEffect;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->liftEffect;
} else {
throw new \Exception("Pattern match failure");
};
$liftEffect = $__case_res_1;
$discard1 = ($__global_Control_Parallel_Class_discard)($Bind1);
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_3;
$functorParCont1 = (object)["map" => (function() use ($__global_Control_Parallel_Class_compose, $dict, $map) {
  $__fn = function($f) use ($__global_Control_Parallel_Class_compose, $dict, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Control_Parallel_Class_compose)($__case_res_4, ($__global_Control_Parallel_Class_compose)(($map)($f), $__case_res_5));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["alt" => (function() use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write) {
  $__body = function($v, $v1) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$c1 = $__case_0;
$c2 = $__case_1;
return (function() use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $c1, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write, $c2) {
  $__fn = function($k) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $c1, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write, $c2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref__new)(false)), (function() use ($discard1, $__global_Control_Monad_Cont_Trans_runContT, $c1, $bind, $liftEffect, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write, $k, $c2) {
  $__fn = function($done) use ($discard1, $__global_Control_Monad_Cont_Trans_runContT, $c1, $bind, $liftEffect, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write, $k, $c2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($discard1)(($__global_Control_Monad_Cont_Trans_runContT)($c1, (function() use ($bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k) {
  $__fn = function($a) use ($bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref_read)($done)), (function() use ($pure, $__global_Data_Unit_unit, $discard1, $liftEffect, $__global_Effect_Ref_write, $done, $k, $a) {
  $__body = function($b) use ($pure, $__global_Data_Unit_unit, $discard1, $liftEffect, $__global_Effect_Ref_write, $done, $k, $a) {
    $__case_0 = $b;
    switch ($__case_0) {
case true:
return ($pure)($__global_Data_Unit_unit);
break;
default:
return ($discard1)(($liftEffect)(($__global_Effect_Ref_write)(true, $done)), (function() use ($k, $a) {
  $__fn = function($__dollar____unused) use ($k, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($k)($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
};
  };
  $__fn = function($b) use ($pure, $__global_Data_Unit_unit, $discard1, $liftEffect, $__global_Effect_Ref_write, $done, $k, $a, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($__global_Control_Monad_Cont_Trans_runContT, $c2, $bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Cont_Trans_runContT, $c2, $bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Cont_Trans_runContT)($c2, (function() use ($bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k) {
  $__fn = function($a) use ($bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref_read)($done)), (function() use ($pure, $__global_Data_Unit_unit, $discard1, $liftEffect, $__global_Effect_Ref_write, $done, $k, $a) {
  $__body = function($b) use ($pure, $__global_Data_Unit_unit, $discard1, $liftEffect, $__global_Effect_Ref_write, $done, $k, $a) {
    $__case_0 = $b;
    switch ($__case_0) {
case true:
return ($pure)($__global_Data_Unit_unit);
break;
default:
return ($discard1)(($liftEffect)(($__global_Effect_Ref_write)(true, $done)), (function() use ($k, $a) {
  $__fn = function($__dollar____unused) use ($k, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($k)($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
};
  };
  $__fn = function($b) use ($pure, $__global_Data_Unit_unit, $discard1, $liftEffect, $__global_Effect_Ref_write, $done, $k, $a, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorParCont1) {
  $__fn = function($__dollar____unused) use ($functorParCont1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorParCont1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_altParCont'] = __NAMESPACE__ . '\\Control_Parallel_Class_altParCont';

// Control_Parallel_Class_plusParCont
function Control_Parallel_Class_plusParCont($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_plusParCont';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Parallel_Class_discard = ($GLOBALS['Control_Parallel_Class_discard'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_discard'));
$__global_Control_Parallel_Class_compose = ($GLOBALS['Control_Parallel_Class_compose'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_compose'));
$__global_Effect_Ref__new = ($GLOBALS['Effect_Ref__new'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref__new'));
$__global_Control_Monad_Cont_Trans_runContT = ($GLOBALS['Control_Monad_Cont_Trans_runContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_runContT'));
$__global_Effect_Ref_read = ($GLOBALS['Effect_Ref_read'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_read'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Effect_Ref_write = ($GLOBALS['Effect_Ref_write'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_write'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_0;
$Monad0 = (($dictMonadEffect)->Monad0)($__global_Prim_undefined);
$Bind1 = (($Monad0)->Bind1)($__global_Prim_undefined);
$__case_0 = $Bind1;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_1;
$__case_0 = $dictMonadEffect;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->liftEffect;
} else {
throw new \Exception("Pattern match failure");
};
$liftEffect = $__case_res_2;
$discard1 = ($__global_Control_Parallel_Class_discard)($Bind1);
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_4;
$functorParCont1 = (object)["map" => (function() use ($__global_Control_Parallel_Class_compose, $dict, $map) {
  $__fn = function($f) use ($__global_Control_Parallel_Class_compose, $dict, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Control_Parallel_Class_compose)($__case_res_5, ($__global_Control_Parallel_Class_compose)(($map)($f), $__case_res_6));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$altParCont1 = (object)["alt" => (function() use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write) {
  $__body = function($v, $v1) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$c1 = $__case_0;
$c2 = $__case_1;
return (function() use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $c1, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write, $c2) {
  $__fn = function($k) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $c1, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write, $c2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref__new)(false)), (function() use ($discard1, $__global_Control_Monad_Cont_Trans_runContT, $c1, $bind, $liftEffect, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write, $k, $c2) {
  $__fn = function($done) use ($discard1, $__global_Control_Monad_Cont_Trans_runContT, $c1, $bind, $liftEffect, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write, $k, $c2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($discard1)(($__global_Control_Monad_Cont_Trans_runContT)($c1, (function() use ($bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k) {
  $__fn = function($a) use ($bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref_read)($done)), (function() use ($pure, $__global_Data_Unit_unit, $discard1, $liftEffect, $__global_Effect_Ref_write, $done, $k, $a) {
  $__body = function($b) use ($pure, $__global_Data_Unit_unit, $discard1, $liftEffect, $__global_Effect_Ref_write, $done, $k, $a) {
    $__case_0 = $b;
    switch ($__case_0) {
case true:
return ($pure)($__global_Data_Unit_unit);
break;
default:
return ($discard1)(($liftEffect)(($__global_Effect_Ref_write)(true, $done)), (function() use ($k, $a) {
  $__fn = function($__dollar____unused) use ($k, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($k)($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
};
  };
  $__fn = function($b) use ($pure, $__global_Data_Unit_unit, $discard1, $liftEffect, $__global_Effect_Ref_write, $done, $k, $a, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($__global_Control_Monad_Cont_Trans_runContT, $c2, $bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Cont_Trans_runContT, $c2, $bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Cont_Trans_runContT)($c2, (function() use ($bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k) {
  $__fn = function($a) use ($bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref_read)($done)), (function() use ($pure, $__global_Data_Unit_unit, $discard1, $liftEffect, $__global_Effect_Ref_write, $done, $k, $a) {
  $__body = function($b) use ($pure, $__global_Data_Unit_unit, $discard1, $liftEffect, $__global_Effect_Ref_write, $done, $k, $a) {
    $__case_0 = $b;
    switch ($__case_0) {
case true:
return ($pure)($__global_Data_Unit_unit);
break;
default:
return ($discard1)(($liftEffect)(($__global_Effect_Ref_write)(true, $done)), (function() use ($k, $a) {
  $__fn = function($__dollar____unused) use ($k, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($k)($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
};
  };
  $__fn = function($b) use ($pure, $__global_Data_Unit_unit, $discard1, $liftEffect, $__global_Effect_Ref_write, $done, $k, $a, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorParCont1) {
  $__fn = function($__dollar____unused) use ($functorParCont1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorParCont1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["empty" => (function() use ($pure, $__global_Data_Unit_unit) {
  $__fn = function($v) use ($pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)($__global_Data_Unit_unit);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Alt0" => (function() use ($altParCont1) {
  $__fn = function($__dollar____unused) use ($altParCont1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $altParCont1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_plusParCont'] = __NAMESPACE__ . '\\Control_Parallel_Class_plusParCont';

// Control_Parallel_Class_alternativeParCont
function Control_Parallel_Class_alternativeParCont($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_alternativeParCont';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Parallel_Class_discard = ($GLOBALS['Control_Parallel_Class_discard'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_discard'));
$__global_Effect_Ref__new = ($GLOBALS['Effect_Ref__new'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref__new'));
$__global_Control_Monad_Cont_Trans_runContT = ($GLOBALS['Control_Monad_Cont_Trans_runContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_runContT'));
$__global_Effect_Ref_read = ($GLOBALS['Effect_Ref_read'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_read'));
$__global_Effect_Ref_write = ($GLOBALS['Effect_Ref_write'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_write'));
$__global_Control_Parallel_Class_compose = ($GLOBALS['Control_Parallel_Class_compose'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_compose'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$Bind1 = (((($dictMonadEffect)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined);
$__case_0 = $Bind1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_0;
$__case_0 = $dictMonadEffect;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->liftEffect;
} else {
throw new \Exception("Pattern match failure");
};
$liftEffect = $__case_res_1;
$discard1 = ($__global_Control_Parallel_Class_discard)($Bind1);
$applyParCont1 = (object)["apply" => (function() use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $__global_Effect_Ref_write) {
  $__body = function($v, $v1) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $__global_Effect_Ref_write) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$ca = $__case_0;
$cb = $__case_1;
return (function() use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $cb) {
  $__fn = function($k) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $cb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref__new)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")))), (function() use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $k, $cb) {
  $__fn = function($ra) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $k, $cb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref__new)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")))), (function() use ($discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $bind, $liftEffect, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $ra, $k, $cb) {
  $__fn = function($rb) use ($discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $bind, $liftEffect, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $ra, $k, $cb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($discard1)(($__global_Control_Monad_Cont_Trans_runContT)($ca, (function() use ($bind, $liftEffect, $__global_Effect_Ref_read, $rb, $__global_Effect_Ref_write, $ra, $k) {
  $__fn = function($a) use ($bind, $liftEffect, $__global_Effect_Ref_read, $rb, $__global_Effect_Ref_write, $ra, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref_read)($rb)), (function() use ($liftEffect, $__global_Effect_Ref_write, $a, $ra, $k) {
  $__body = function($mb) use ($liftEffect, $__global_Effect_Ref_write, $a, $ra, $k) {
    $__case_0 = $mb;
    switch (($__case_0)->tag) {
case "Nothing":
return ($liftEffect)(($__global_Effect_Ref_write)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($a), $ra));
break;
case "Just":
$b = ($__case_0)->v0;
return ($k)(($a)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($mb) use ($liftEffect, $__global_Effect_Ref_write, $a, $ra, $k, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($mb);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($__global_Control_Monad_Cont_Trans_runContT, $cb, $bind, $liftEffect, $__global_Effect_Ref_read, $ra, $__global_Effect_Ref_write, $rb, $k) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Cont_Trans_runContT, $cb, $bind, $liftEffect, $__global_Effect_Ref_read, $ra, $__global_Effect_Ref_write, $rb, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Cont_Trans_runContT)($cb, (function() use ($bind, $liftEffect, $__global_Effect_Ref_read, $ra, $__global_Effect_Ref_write, $rb, $k) {
  $__fn = function($b) use ($bind, $liftEffect, $__global_Effect_Ref_read, $ra, $__global_Effect_Ref_write, $rb, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref_read)($ra)), (function() use ($liftEffect, $__global_Effect_Ref_write, $b, $rb, $k) {
  $__body = function($ma) use ($liftEffect, $__global_Effect_Ref_write, $b, $rb, $k) {
    $__case_0 = $ma;
    switch (($__case_0)->tag) {
case "Nothing":
return ($liftEffect)(($__global_Effect_Ref_write)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($b), $rb));
break;
case "Just":
$a = ($__case_0)->v0;
return ($k)(($a)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($ma) use ($liftEffect, $__global_Effect_Ref_write, $b, $rb, $k, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($ma);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($dict, $__global_Control_Parallel_Class_compose) {
  $__fn = function($__dollar____unused) use ($dict, $__global_Control_Parallel_Class_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
    $__res = (object)["map" => (function() use ($__global_Control_Parallel_Class_compose, $dict, $map) {
  $__fn = function($f) use ($__global_Control_Parallel_Class_compose, $dict, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Control_Parallel_Class_compose)($__case_res_3, ($__global_Control_Parallel_Class_compose)(($map)($f), $__case_res_4));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$applicativeParCont1 = (object)["pure" => ($__global_Control_Parallel_Class_compose)($__case_res_5, $__case_res_6), "Apply0" => (function() use ($applyParCont1) {
  $__fn = function($__dollar____unused) use ($applyParCont1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyParCont1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_7;
$Monad0 = (($dictMonadEffect)->Monad0)($__global_Prim_undefined);
$Bind1 = (($Monad0)->Bind1)($__global_Prim_undefined);
$__case_0 = $Bind1;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
$bind = $__case_res_8;
$__case_0 = $dictMonadEffect;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->liftEffect;
} else {
throw new \Exception("Pattern match failure");
};
$liftEffect = $__case_res_9;
$discard1 = ($__global_Control_Parallel_Class_discard)($Bind1);
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_10;
$__case_0 = $dict;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_11;
$functorParCont1 = (object)["map" => (function() use ($__global_Control_Parallel_Class_compose, $dict, $map) {
  $__fn = function($f) use ($__global_Control_Parallel_Class_compose, $dict, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dict;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Control_Parallel_Class_compose)($__case_res_12, ($__global_Control_Parallel_Class_compose)(($map)($f), $__case_res_13));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$altParCont1 = (object)["alt" => (function() use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write) {
  $__body = function($v, $v1) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$c1 = $__case_0;
$c2 = $__case_1;
return (function() use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $c1, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write, $c2) {
  $__fn = function($k) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $c1, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write, $c2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref__new)(false)), (function() use ($discard1, $__global_Control_Monad_Cont_Trans_runContT, $c1, $bind, $liftEffect, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write, $k, $c2) {
  $__fn = function($done) use ($discard1, $__global_Control_Monad_Cont_Trans_runContT, $c1, $bind, $liftEffect, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write, $k, $c2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($discard1)(($__global_Control_Monad_Cont_Trans_runContT)($c1, (function() use ($bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k) {
  $__fn = function($a) use ($bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref_read)($done)), (function() use ($pure, $__global_Data_Unit_unit, $discard1, $liftEffect, $__global_Effect_Ref_write, $done, $k, $a) {
  $__body = function($b) use ($pure, $__global_Data_Unit_unit, $discard1, $liftEffect, $__global_Effect_Ref_write, $done, $k, $a) {
    $__case_0 = $b;
    switch ($__case_0) {
case true:
return ($pure)($__global_Data_Unit_unit);
break;
default:
return ($discard1)(($liftEffect)(($__global_Effect_Ref_write)(true, $done)), (function() use ($k, $a) {
  $__fn = function($__dollar____unused) use ($k, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($k)($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
};
  };
  $__fn = function($b) use ($pure, $__global_Data_Unit_unit, $discard1, $liftEffect, $__global_Effect_Ref_write, $done, $k, $a, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($__global_Control_Monad_Cont_Trans_runContT, $c2, $bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Cont_Trans_runContT, $c2, $bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Cont_Trans_runContT)($c2, (function() use ($bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k) {
  $__fn = function($a) use ($bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($liftEffect)(($__global_Effect_Ref_read)($done)), (function() use ($pure, $__global_Data_Unit_unit, $discard1, $liftEffect, $__global_Effect_Ref_write, $done, $k, $a) {
  $__body = function($b) use ($pure, $__global_Data_Unit_unit, $discard1, $liftEffect, $__global_Effect_Ref_write, $done, $k, $a) {
    $__case_0 = $b;
    switch ($__case_0) {
case true:
return ($pure)($__global_Data_Unit_unit);
break;
default:
return ($discard1)(($liftEffect)(($__global_Effect_Ref_write)(true, $done)), (function() use ($k, $a) {
  $__fn = function($__dollar____unused) use ($k, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($k)($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
};
  };
  $__fn = function($b) use ($pure, $__global_Data_Unit_unit, $discard1, $liftEffect, $__global_Effect_Ref_write, $done, $k, $a, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorParCont1) {
  $__fn = function($__dollar____unused) use ($functorParCont1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorParCont1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$plusParCont1 = (object)["empty" => (function() use ($pure, $__global_Data_Unit_unit) {
  $__fn = function($v) use ($pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)($__global_Data_Unit_unit);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Alt0" => (function() use ($altParCont1) {
  $__fn = function($__dollar____unused) use ($altParCont1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $altParCont1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["Applicative0" => (function() use ($applicativeParCont1) {
  $__fn = function($__dollar____unused) use ($applicativeParCont1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeParCont1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusParCont1) {
  $__fn = function($__dollar____unused) use ($plusParCont1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $plusParCont1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_alternativeParCont'] = __NAMESPACE__ . '\\Control_Parallel_Class_alternativeParCont';

