<?php

namespace Data\Distributive;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Distributive/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';
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
      case 'Data_Distributive_compose': $v = (function() {
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
      case 'Data_Distributive_unwrap': $v = (($GLOBALS['Data_Newtype_unwrap'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Distributive_identity': $v = (function() {
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
      case 'Data_Distributive_distributiveIdentity': $v = (object)["distribute" => (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Distributive_compose = ($GLOBALS['Data_Distributive_compose'] ?? \Data\Distributive\phpurs_eval_thunk('Data_Distributive_compose'));
$__global_Data_Identity_Identity = ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity'));
$__global_Data_Distributive_unwrap = ($GLOBALS['Data_Distributive_unwrap'] ?? \Data\Distributive\phpurs_eval_thunk('Data_Distributive_unwrap'));
$__case_0 = $dictFunctor;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Distributive_compose)($__global_Data_Identity_Identity, ($__case_res_0)($__global_Data_Distributive_unwrap));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "collect" => (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Distributive_compose = ($GLOBALS['Data_Distributive_compose'] ?? \Data\Distributive\phpurs_eval_thunk('Data_Distributive_compose'));
$__global_Data_Identity_Identity = ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity'));
$__global_Data_Distributive_unwrap = ($GLOBALS['Data_Distributive_unwrap'] ?? \Data\Distributive\phpurs_eval_thunk('Data_Distributive_unwrap'));
$__case_0 = $dictFunctor;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
    $__res = (function() use ($__global_Data_Distributive_compose, $__global_Data_Identity_Identity, $map, $__global_Data_Distributive_unwrap) {
  $__fn = function($f) use ($__global_Data_Distributive_compose, $__global_Data_Identity_Identity, $map, $__global_Data_Distributive_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Distributive_compose)($__global_Data_Identity_Identity, ($map)(($__global_Data_Distributive_compose)($__global_Data_Distributive_unwrap, $f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Identity_functorIdentity = ($GLOBALS['Data_Identity_functorIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_functorIdentity'));
    $__res = $__global_Data_Identity_functorIdentity;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Distributive_distributiveFunction': $v = (object)["distribute" => (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctor;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_0;
    $__res = (function() use ($map) {
  $__fn = function($a, $e = null) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($e) use ($a, &$__fn) { return $__fn($a, $e); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)((function() use ($e) {
  $__fn = function($v) use ($e, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v)($e);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $a);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "collect" => (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Distributive_compose = ($GLOBALS['Data_Distributive_compose'] ?? \Data\Distributive\phpurs_eval_thunk('Data_Distributive_compose'));
$__global_Data_Distributive_distributiveFunction = ($GLOBALS['Data_Distributive_distributiveFunction'] ?? \Data\Distributive\phpurs_eval_thunk('Data_Distributive_distributiveFunction'));
$__case_0 = $dictFunctor;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
    $__res = (function() use ($__global_Data_Distributive_compose, $__global_Data_Distributive_distributiveFunction, $dictFunctor, $map) {
  $__fn = function($f) use ($__global_Data_Distributive_compose, $__global_Data_Distributive_distributiveFunction, $dictFunctor, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $__global_Data_Distributive_distributiveFunction;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->distribute;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Distributive_compose)(($__case_res_2)($dictFunctor), ($map)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_functorFn = ($GLOBALS['Data_Functor_functorFn'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_functorFn'));
    $__res = $__global_Data_Functor_functorFn;
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





// Data_Distributive_Distributive$Dict
function Data_Distributive_Distributive__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Distributive_Distributive__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Distributive_Distributive__dollar__Dict'] = __NAMESPACE__ . '\\Data_Distributive_Distributive__dollar__Dict';


// Data_Distributive_distribute
function Data_Distributive_distribute($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Distributive_distribute';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->distribute;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Distributive_distribute'] = __NAMESPACE__ . '\\Data_Distributive_distribute';


// Data_Distributive_cotraverse
function Data_Distributive_cotraverse($dictDistributive) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Distributive_cotraverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Distributive_compose = ($GLOBALS['Data_Distributive_compose'] ?? \Data\Distributive\phpurs_eval_thunk('Data_Distributive_compose'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_0;
$__case_0 = $dictDistributive;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->distribute;
} else {
throw new \Exception("Pattern match failure");
};
$distribute1 = $__case_res_1;
    $__res = (function() use ($distribute1, $__global_Data_Distributive_compose, $map) {
  $__fn = function($dictFunctor) use ($distribute1, $__global_Data_Distributive_compose, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$distribute2 = ($distribute1)($dictFunctor);
    $__res = (function() use ($__global_Data_Distributive_compose, $map, $distribute2) {
  $__fn = function($f) use ($__global_Data_Distributive_compose, $map, $distribute2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Distributive_compose)(($map)($f), $distribute2);
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
$GLOBALS['Data_Distributive_cotraverse'] = __NAMESPACE__ . '\\Data_Distributive_cotraverse';

// Data_Distributive_collectDefault
function Data_Distributive_collectDefault($dictDistributive) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Distributive_collectDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Distributive_compose = ($GLOBALS['Data_Distributive_compose'] ?? \Data\Distributive\phpurs_eval_thunk('Data_Distributive_compose'));
$__case_0 = $dictDistributive;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->distribute;
} else {
throw new \Exception("Pattern match failure");
};
$distribute1 = $__case_res_0;
    $__res = (function() use ($distribute1, $__global_Data_Distributive_compose) {
  $__fn = function($dictFunctor) use ($distribute1, $__global_Data_Distributive_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$distribute2 = ($distribute1)($dictFunctor);
$__case_0 = $dictFunctor;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
    $__res = (function() use ($__global_Data_Distributive_compose, $distribute2, $map) {
  $__fn = function($f) use ($__global_Data_Distributive_compose, $distribute2, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Distributive_compose)($distribute2, ($map)($f));
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
$GLOBALS['Data_Distributive_collectDefault'] = __NAMESPACE__ . '\\Data_Distributive_collectDefault';

// Data_Distributive_distributiveTuple
function Data_Distributive_distributiveTuple($dictTypeEquals) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Distributive_distributiveTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Distributive_compose = ($GLOBALS['Data_Distributive_compose'] ?? \Data\Distributive\phpurs_eval_thunk('Data_Distributive_compose'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
$__global_Data_Tuple_functorTuple = ($GLOBALS['Data_Tuple_functorTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_functorTuple'));
while (true) {
$__case_0 = $dictTypeEquals;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->proof;
} else {
throw new \Exception("Pattern match failure");
};
$v = ($__case_res_0)((function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $a;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
$__case_0 = $v;
$__case_res_1 = null;
if (true) {
$f = $__case_0;
$__case_res_1 = $f;
} else {
throw new \Exception("Pattern match failure");
};
$from = $__case_res_1;
return (object)["collect" => (function() use ($dict, $__global_Data_Distributive_compose) {
  $__fn = function($dictFunctor) use ($dict, $__global_Data_Distributive_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->distribute;
} else {
throw new \Exception("Pattern match failure");
};
$distribute1 = $__case_res_2;
    $__res = ((function() use ($distribute1, $__global_Data_Distributive_compose) {
  $__fn = function($dictFunctor) use ($distribute1, $__global_Data_Distributive_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$distribute2 = ($distribute1)($dictFunctor);
$__case_0 = $dictFunctor;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_3;
    $__res = (function() use ($__global_Data_Distributive_compose, $distribute2, $map) {
  $__fn = function($f) use ($__global_Data_Distributive_compose, $distribute2, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Distributive_compose)($distribute2, ($map)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($dictFunctor);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "distribute" => (function() use ($__global_Data_Distributive_compose, $from, $__global_Data_Unit_unit, $__global_Data_Tuple_snd) {
  $__fn = function($dictFunctor) use ($__global_Data_Distributive_compose, $from, $__global_Data_Unit_unit, $__global_Data_Tuple_snd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctor;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Distributive_compose)(((function() {
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
})())(($from)($__global_Data_Unit_unit)), ($__case_res_4)($__global_Data_Tuple_snd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($__global_Data_Tuple_functorTuple) {
  $__fn = function($__dollar____unused) use ($__global_Data_Tuple_functorTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__global_Data_Tuple_functorTuple;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Distributive_distributiveTuple'] = __NAMESPACE__ . '\\Data_Distributive_distributiveTuple';

// Data_Distributive_collect
function Data_Distributive_collect($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Distributive_collect';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->collect;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Distributive_collect'] = __NAMESPACE__ . '\\Data_Distributive_collect';

// Data_Distributive_distributeDefault
function Data_Distributive_distributeDefault($dictDistributive) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Distributive_distributeDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Distributive_identity = ($GLOBALS['Data_Distributive_identity'] ?? \Data\Distributive\phpurs_eval_thunk('Data_Distributive_identity'));
$__case_0 = $dictDistributive;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->collect;
} else {
throw new \Exception("Pattern match failure");
};
$collect1 = $__case_res_0;
    $__res = (function() use ($collect1, $__global_Data_Distributive_identity) {
  $__fn = function($dictFunctor) use ($collect1, $__global_Data_Distributive_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($collect1)($dictFunctor, $__global_Data_Distributive_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Distributive_distributeDefault'] = __NAMESPACE__ . '\\Data_Distributive_distributeDefault';

