<?php

namespace Data\Bitraversable;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Data.Bifoldable/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Bitraversable/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Clown/index.php';
require_once __DIR__ . '/../Data.Functor.Flip/index.php';
require_once __DIR__ . '/../Data.Functor.Joker/index.php';
require_once __DIR__ . '/../Data.Functor.Product2/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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
      case 'Data_Bitraversable_identity': $v = (function() {
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
      case 'Data_Bitraversable_bitraversableTuple': $v = (object)["bitraverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
$__case_0 = $Apply0;
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
$map = $__case_res_1;
    $__res = (function() use ($apply, $map) {
  $__body = function($f, $g, $v) use ($apply, $map) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$g1 = $__case_1;
$a = ($__case_2)->v0;
$b = ($__case_2)->v1;
return ($apply)(($map)((function() {
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
})(), ($f1)($a)), ($g1)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $g = null, $v = null) use ($apply, $map, $__body, &$__fn) {
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
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
$__case_0 = $Apply0;
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
    $__res = (function() use ($apply, $map) {
  $__body = function($v) use ($apply, $map) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
return ($apply)(($map)((function() {
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
})(), $a), $b);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($apply, $map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Bifunctor_bifunctorTuple = ($GLOBALS['Data_Bifunctor_bifunctorTuple'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bifunctorTuple'));
    $__res = $__global_Data_Bifunctor_bifunctorTuple;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Bifoldable_bifoldableTuple = ($GLOBALS['Data_Bifoldable_bifoldableTuple'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldableTuple'));
    $__res = $__global_Data_Bifoldable_bifoldableTuple;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Bitraversable_bitraversableEither': $v = (object)["bitraverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_0;
    $__res = (function() use ($map) {
  $__body = function($v, $v1, $v2) use ($map) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "Left":
$f = $__case_0;
$a = ($__case_2)->v0;
return ($map)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($f)($a));
break;
case "Right":
$g = $__case_1;
$b = ($__case_2)->v0;
return ($map)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($g)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($map, $__body, &$__fn) {
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
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
    $__res = (function() use ($map) {
  $__body = function($v) use ($map) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Left":
$a = ($__case_0)->v0;
return ($map)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $a);
break;
case "Right":
$b = ($__case_0)->v0;
return ($map)((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $b);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Bifunctor_bifunctorEither = ($GLOBALS['Data_Bifunctor_bifunctorEither'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bifunctorEither'));
    $__res = $__global_Data_Bifunctor_bifunctorEither;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Bifoldable_bifoldableEither = ($GLOBALS['Data_Bifoldable_bifoldableEither'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldableEither'));
    $__res = $__global_Data_Bifoldable_bifoldableEither;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Bitraversable_bitraversableConst': $v = (object)["bitraverse" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Const_Const = ($GLOBALS['Data_Const_Const'] ?? \Data\Const\phpurs_eval_thunk('Data_Const_Const'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_0;
    $__res = (function() use ($map, $__global_Data_Const_Const) {
  $__body = function($f, $v, $v1) use ($map, $__global_Data_Const_Const) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$a = $__case_2;
return ($map)($__global_Data_Const_Const, ($f1)($a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null, $v1 = null) use ($map, $__global_Data_Const_Const, $__body, &$__fn) {
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
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Const_Const = ($GLOBALS['Data_Const_Const'] ?? \Data\Const\phpurs_eval_thunk('Data_Const_Const'));
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
    $__res = (function() use ($map, $__global_Data_Const_Const) {
  $__body = function($v) use ($map, $__global_Data_Const_Const) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($map)($__global_Data_Const_Const, $a);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $__global_Data_Const_Const, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Bifunctor_bifunctorConst = ($GLOBALS['Data_Bifunctor_bifunctorConst'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bifunctorConst'));
    $__res = $__global_Data_Bifunctor_bifunctorConst;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Bifoldable_bifoldableConst = ($GLOBALS['Data_Bifoldable_bifoldableConst'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldableConst'));
    $__res = $__global_Data_Bifoldable_bifoldableConst;
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



// Data_Bitraversable_Bitraversable$Dict
function Data_Bitraversable_Bitraversable__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_Bitraversable__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_Bitraversable__dollar__Dict'] = __NAMESPACE__ . '\\Data_Bitraversable_Bitraversable__dollar__Dict';

// Data_Bitraversable_bitraverse
function Data_Bitraversable_bitraverse($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bitraverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bitraverse;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bitraverse'] = __NAMESPACE__ . '\\Data_Bitraversable_bitraverse';

// Data_Bitraversable_lfor
function Data_Bitraversable_lfor($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_lfor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictBitraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bitraverse;
} else {
throw new \Exception("Pattern match failure");
};
$bitraverse1 = $__case_res_0;
    $__res = (function() use ($bitraverse1) {
  $__fn = function($dictApplicative) use ($bitraverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bitraverse2 = ($bitraverse1)($dictApplicative);
$__case_0 = $dictApplicative;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_1;
    $__res = (function() use ($bitraverse2, $pure) {
  $__fn = function($t, $f = null) use ($bitraverse2, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($t, &$__fn) { return $__fn($t, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bitraverse2)($f, $pure, $t);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_lfor'] = __NAMESPACE__ . '\\Data_Bitraversable_lfor';

// Data_Bitraversable_ltraverse
function Data_Bitraversable_ltraverse($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_ltraverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictBitraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bitraverse;
} else {
throw new \Exception("Pattern match failure");
};
$bitraverse1 = $__case_res_0;
    $__res = (function() use ($bitraverse1) {
  $__fn = function($dictApplicative) use ($bitraverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bitraverse2 = ($bitraverse1)($dictApplicative);
$__case_0 = $dictApplicative;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_1;
    $__res = (function() use ($bitraverse2, $pure) {
  $__fn = function($f) use ($bitraverse2, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bitraverse2)($f, $pure);
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
$GLOBALS['Data_Bitraversable_ltraverse'] = __NAMESPACE__ . '\\Data_Bitraversable_ltraverse';

// Data_Bitraversable_rfor
function Data_Bitraversable_rfor($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_rfor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictBitraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bitraverse;
} else {
throw new \Exception("Pattern match failure");
};
$bitraverse1 = $__case_res_0;
    $__res = (function() use ($bitraverse1) {
  $__fn = function($dictApplicative) use ($bitraverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bitraverse2 = ($bitraverse1)($dictApplicative);
$__case_0 = $dictApplicative;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_1;
    $__res = (function() use ($bitraverse2, $pure) {
  $__fn = function($t, $f = null) use ($bitraverse2, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($t, &$__fn) { return $__fn($t, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($bitraverse2)($pure, $f, $t);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_rfor'] = __NAMESPACE__ . '\\Data_Bitraversable_rfor';

// Data_Bitraversable_rtraverse
function Data_Bitraversable_rtraverse($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_rtraverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictBitraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bitraverse;
} else {
throw new \Exception("Pattern match failure");
};
$bitraverse1 = $__case_res_0;
    $__res = (function() use ($bitraverse1) {
  $__fn = function($dictApplicative) use ($bitraverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictApplicative;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($bitraverse1)($dictApplicative, $__case_res_1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_rtraverse'] = __NAMESPACE__ . '\\Data_Bitraversable_rtraverse';


// Data_Bitraversable_bitraversableJoker
function Data_Bitraversable_bitraversableJoker($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bitraversableJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_Joker_Joker = ($GLOBALS['Data_Functor_Joker_Joker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_Joker'));
$__case_0 = $dictTraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse = $__case_res_0;
$__case_0 = $dictTraversable;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->sequence;
} else {
throw new \Exception("Pattern match failure");
};
$sequence = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
$bifunctorJoker = (object)["bimap" => (function() use ($map) {
  $__body = function($v, $g, $v1) use ($map) {
    $__case_0 = $v;
    $__case_1 = $g;
    $__case_2 = $v1;
    if (true) {
$g1 = $__case_1;
$a = $__case_2;
return ($map)($g1, $a);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $g = null, $v1 = null) use ($map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($v, $g, &$__fn) { return $__fn($v, $g, $v1); };
    if ($__num === 1) return function($g, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $g, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $g, &$__fn) { return $__fn($v, $g, $v1); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($v, $g, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl = $__case_res_4;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap = $__case_res_5;
$bifoldableJoker = (object)["bifoldr" => (function() use ($foldr) {
  $__body = function($v, $r, $u, $v1) use ($foldr) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $u;
    $__case_3 = $v1;
    if (true) {
$r1 = $__case_1;
$u1 = $__case_2;
$f = $__case_3;
return ($foldr)($r1, $u1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $r = null, $u = null, $v1 = null) use ($foldr, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
    if ($__num === 2) return function($u, $v1 = null) use ($v, $r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $r, $u, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
      return phpurs_curry_fallback($__fn, [$v, $r], 4);
    };
    if ($__num === 1) return function($r, $u = null, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($v, $r, $u, $v1);
      if ($__num2 === 2) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
      if ($__num2 === 1) return function($u, $v1 = null) use ($v, $r, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($v, $r, $u, $v1);
        if ($__num3 === 1) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
        return phpurs_curry_fallback($__fn, [$v, $r], 4);
      };
      return phpurs_curry_fallback($__fn, [$v], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($v, $r, $u, $v1);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use ($foldl) {
  $__body = function($v, $r, $u, $v1) use ($foldl) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $u;
    $__case_3 = $v1;
    if (true) {
$r1 = $__case_1;
$u1 = $__case_2;
$f = $__case_3;
return ($foldl)($r1, $u1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $r = null, $u = null, $v1 = null) use ($foldl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
    if ($__num === 2) return function($u, $v1 = null) use ($v, $r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $r, $u, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
      return phpurs_curry_fallback($__fn, [$v, $r], 4);
    };
    if ($__num === 1) return function($r, $u = null, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($v, $r, $u, $v1);
      if ($__num2 === 2) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
      if ($__num2 === 1) return function($u, $v1 = null) use ($v, $r, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($v, $r, $u, $v1);
        if ($__num3 === 1) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
        return phpurs_curry_fallback($__fn, [$v, $r], 4);
      };
      return phpurs_curry_fallback($__fn, [$v], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($v, $r, $u, $v1);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() use ($foldMap) {
  $__fn = function($dictMonoid) use ($foldMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap1 = ($foldMap)($dictMonoid);
    $__res = (function() use ($foldMap1) {
  $__body = function($v, $r, $v1) use ($foldMap1) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $v1;
    if (true) {
$r1 = $__case_1;
$f = $__case_2;
return ($foldMap1)($r1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $r = null, $v1 = null) use ($foldMap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($v, $r, &$__fn) { return $__fn($v, $r, $v1); };
    if ($__num === 1) return function($r, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $r, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $r, &$__fn) { return $__fn($v, $r, $v1); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($v, $r, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["bitraverse" => (function() use ($dict, $traverse, $__global_Data_Functor_Joker_Joker) {
  $__fn = function($dictApplicative) use ($dict, $traverse, $__global_Data_Functor_Joker_Joker, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_6;
$traverse1 = ($traverse)($dictApplicative);
    $__res = (function() use ($map, $__global_Data_Functor_Joker_Joker, $traverse1) {
  $__body = function($v, $r, $v1) use ($map, $__global_Data_Functor_Joker_Joker, $traverse1) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $v1;
    if (true) {
$r1 = $__case_1;
$f = $__case_2;
return ($map)($__global_Data_Functor_Joker_Joker, ($traverse1)($r1, $f));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $r = null, $v1 = null) use ($map, $__global_Data_Functor_Joker_Joker, $traverse1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($v, $r, &$__fn) { return $__fn($v, $r, $v1); };
    if ($__num === 1) return function($r, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $r, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $r, &$__fn) { return $__fn($v, $r, $v1); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($v, $r, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() use ($dict, $sequence, $__global_Data_Functor_Joker_Joker) {
  $__fn = function($dictApplicative) use ($dict, $sequence, $__global_Data_Functor_Joker_Joker, &$__fn) {
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
$map = $__case_res_7;
$sequence1 = ($sequence)($dictApplicative);
    $__res = (function() use ($map, $__global_Data_Functor_Joker_Joker, $sequence1) {
  $__body = function($v) use ($map, $__global_Data_Functor_Joker_Joker, $sequence1) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($map)($__global_Data_Functor_Joker_Joker, ($sequence1)($f));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $__global_Data_Functor_Joker_Joker, $sequence1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() use ($bifunctorJoker) {
  $__fn = function($__dollar____unused) use ($bifunctorJoker, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bifunctorJoker;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() use ($bifoldableJoker) {
  $__fn = function($__dollar____unused) use ($bifoldableJoker, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bifoldableJoker;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bitraversableJoker'] = __NAMESPACE__ . '\\Data_Bitraversable_bitraversableJoker';



// Data_Bitraversable_bitraversableClown
function Data_Bitraversable_bitraversableClown($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bitraversableClown';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_Clown_Clown = ($GLOBALS['Data_Functor_Clown_Clown'] ?? \Data\Functor\Clown\phpurs_eval_thunk('Data_Functor_Clown_Clown'));
$__case_0 = $dictTraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse = $__case_res_0;
$__case_0 = $dictTraversable;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->sequence;
} else {
throw new \Exception("Pattern match failure");
};
$sequence = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
$bifunctorClown = (object)["bimap" => (function() use ($map) {
  $__body = function($f, $v, $v1) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$a = $__case_2;
return ($map)($f1, $a);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null, $v1 = null) use ($map, $__body, &$__fn) {
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
})()];
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl = $__case_res_4;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap = $__case_res_5;
$bifoldableClown = (object)["bifoldr" => (function() use ($foldr) {
  $__body = function($l, $v, $u, $v1) use ($foldr) {
    $__case_0 = $l;
    $__case_1 = $v;
    $__case_2 = $u;
    $__case_3 = $v1;
    if (true) {
$l1 = $__case_0;
$u1 = $__case_2;
$f = $__case_3;
return ($foldr)($l1, $u1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($l, $v = null, $u = null, $v1 = null) use ($foldr, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
    if ($__num === 2) return function($u, $v1 = null) use ($l, $v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $v, $u, $v1);
      if ($__num2 === 1) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
      return phpurs_curry_fallback($__fn, [$l, $v], 4);
    };
    if ($__num === 1) return function($v, $u = null, $v1 = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($l, $v, $u, $v1);
      if ($__num2 === 2) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
      if ($__num2 === 1) return function($u, $v1 = null) use ($l, $v, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($l, $v, $u, $v1);
        if ($__num3 === 1) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
        return phpurs_curry_fallback($__fn, [$l, $v], 4);
      };
      return phpurs_curry_fallback($__fn, [$l], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($l, $v, $u, $v1);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use ($foldl) {
  $__body = function($l, $v, $u, $v1) use ($foldl) {
    $__case_0 = $l;
    $__case_1 = $v;
    $__case_2 = $u;
    $__case_3 = $v1;
    if (true) {
$l1 = $__case_0;
$u1 = $__case_2;
$f = $__case_3;
return ($foldl)($l1, $u1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($l, $v = null, $u = null, $v1 = null) use ($foldl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
    if ($__num === 2) return function($u, $v1 = null) use ($l, $v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $v, $u, $v1);
      if ($__num2 === 1) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
      return phpurs_curry_fallback($__fn, [$l, $v], 4);
    };
    if ($__num === 1) return function($v, $u = null, $v1 = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($l, $v, $u, $v1);
      if ($__num2 === 2) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
      if ($__num2 === 1) return function($u, $v1 = null) use ($l, $v, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($l, $v, $u, $v1);
        if ($__num3 === 1) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
        return phpurs_curry_fallback($__fn, [$l, $v], 4);
      };
      return phpurs_curry_fallback($__fn, [$l], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($l, $v, $u, $v1);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() use ($foldMap) {
  $__fn = function($dictMonoid) use ($foldMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap1 = ($foldMap)($dictMonoid);
    $__res = (function() use ($foldMap1) {
  $__body = function($l, $v, $v1) use ($foldMap1) {
    $__case_0 = $l;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$l1 = $__case_0;
$f = $__case_2;
return ($foldMap1)($l1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($l, $v = null, $v1 = null) use ($foldMap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($l, $v, &$__fn) { return $__fn($l, $v, $v1); };
    if ($__num === 1) return function($v, $v1 = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($l, $v, &$__fn) { return $__fn($l, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$l], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($l, $v, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["bitraverse" => (function() use ($dict, $traverse, $__global_Data_Functor_Clown_Clown) {
  $__fn = function($dictApplicative) use ($dict, $traverse, $__global_Data_Functor_Clown_Clown, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_6;
$traverse1 = ($traverse)($dictApplicative);
    $__res = (function() use ($map, $__global_Data_Functor_Clown_Clown, $traverse1) {
  $__body = function($l, $v, $v1) use ($map, $__global_Data_Functor_Clown_Clown, $traverse1) {
    $__case_0 = $l;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$l1 = $__case_0;
$f = $__case_2;
return ($map)($__global_Data_Functor_Clown_Clown, ($traverse1)($l1, $f));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($l, $v = null, $v1 = null) use ($map, $__global_Data_Functor_Clown_Clown, $traverse1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($l, $v, &$__fn) { return $__fn($l, $v, $v1); };
    if ($__num === 1) return function($v, $v1 = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($l, $v, &$__fn) { return $__fn($l, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$l], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($l, $v, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() use ($dict, $sequence, $__global_Data_Functor_Clown_Clown) {
  $__fn = function($dictApplicative) use ($dict, $sequence, $__global_Data_Functor_Clown_Clown, &$__fn) {
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
$map = $__case_res_7;
$sequence1 = ($sequence)($dictApplicative);
    $__res = (function() use ($map, $__global_Data_Functor_Clown_Clown, $sequence1) {
  $__body = function($v) use ($map, $__global_Data_Functor_Clown_Clown, $sequence1) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($map)($__global_Data_Functor_Clown_Clown, ($sequence1)($f));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $__global_Data_Functor_Clown_Clown, $sequence1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() use ($bifunctorClown) {
  $__fn = function($__dollar____unused) use ($bifunctorClown, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bifunctorClown;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() use ($bifoldableClown) {
  $__fn = function($__dollar____unused) use ($bifoldableClown, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bifoldableClown;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bitraversableClown'] = __NAMESPACE__ . '\\Data_Bitraversable_bitraversableClown';

// Data_Bitraversable_bisequenceDefault
function Data_Bitraversable_bisequenceDefault($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bisequenceDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Bitraversable_identity = ($GLOBALS['Data_Bitraversable_identity'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_identity'));
$__case_0 = $dictBitraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bitraverse;
} else {
throw new \Exception("Pattern match failure");
};
$bitraverse1 = $__case_res_0;
    $__res = (function() use ($bitraverse1, $__global_Data_Bitraversable_identity) {
  $__fn = function($dictApplicative) use ($bitraverse1, $__global_Data_Bitraversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bitraverse1)($dictApplicative, $__global_Data_Bitraversable_identity, $__global_Data_Bitraversable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bisequenceDefault'] = __NAMESPACE__ . '\\Data_Bitraversable_bisequenceDefault';

// Data_Bitraversable_bisequence
function Data_Bitraversable_bisequence($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bisequence';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bisequence;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bisequence'] = __NAMESPACE__ . '\\Data_Bitraversable_bisequence';

// Data_Bitraversable_bitraversableFlip
function Data_Bitraversable_bitraversableFlip($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bitraversableFlip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_Flip_Flip = ($GLOBALS['Data_Functor_Flip_Flip'] ?? \Data\Functor\Flip\phpurs_eval_thunk('Data_Functor_Flip_Flip'));
$__case_0 = $dictBitraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bitraverse;
} else {
throw new \Exception("Pattern match failure");
};
$bitraverse1 = $__case_res_0;
$__case_0 = $dictBitraversable;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bisequence;
} else {
throw new \Exception("Pattern match failure");
};
$bisequence1 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bimap;
} else {
throw new \Exception("Pattern match failure");
};
$bimap = $__case_res_2;
$bifunctorFlip = (object)["bimap" => (function() use ($bimap) {
  $__body = function($f, $g, $v) use ($bimap) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$g1 = $__case_1;
$a = $__case_2;
return ($bimap)($g1, $f1, $a);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $g = null, $v = null) use ($bimap, $__body, &$__fn) {
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
})()];
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->bifoldr;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldr1 = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->bifoldl;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldl1 = $__case_res_4;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->bifoldMap;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldMap1 = $__case_res_5;
$bifoldableFlip = (object)["bifoldr" => (function() use ($bifoldr1) {
  $__body = function($r, $l, $u, $v) use ($bifoldr1) {
    $__case_0 = $r;
    $__case_1 = $l;
    $__case_2 = $u;
    $__case_3 = $v;
    if (true) {
$r1 = $__case_0;
$l1 = $__case_1;
$u1 = $__case_2;
$p = $__case_3;
return ($bifoldr1)($l1, $r1, $u1, $p);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($r, $l = null, $u = null, $v = null) use ($bifoldr1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
    if ($__num === 2) return function($u, $v = null) use ($r, $l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($r, $l, $u, $v);
      if ($__num2 === 1) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
      return phpurs_curry_fallback($__fn, [$r, $l], 4);
    };
    if ($__num === 1) return function($l, $u = null, $v = null) use ($r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($r, $l, $u, $v);
      if ($__num2 === 2) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
      if ($__num2 === 1) return function($u, $v = null) use ($r, $l, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($r, $l, $u, $v);
        if ($__num3 === 1) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
        return phpurs_curry_fallback($__fn, [$r, $l], 4);
      };
      return phpurs_curry_fallback($__fn, [$r], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($r, $l, $u, $v);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use ($bifoldl1) {
  $__body = function($r, $l, $u, $v) use ($bifoldl1) {
    $__case_0 = $r;
    $__case_1 = $l;
    $__case_2 = $u;
    $__case_3 = $v;
    if (true) {
$r1 = $__case_0;
$l1 = $__case_1;
$u1 = $__case_2;
$p = $__case_3;
return ($bifoldl1)($l1, $r1, $u1, $p);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($r, $l = null, $u = null, $v = null) use ($bifoldl1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
    if ($__num === 2) return function($u, $v = null) use ($r, $l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($r, $l, $u, $v);
      if ($__num2 === 1) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
      return phpurs_curry_fallback($__fn, [$r, $l], 4);
    };
    if ($__num === 1) return function($l, $u = null, $v = null) use ($r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($r, $l, $u, $v);
      if ($__num2 === 2) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
      if ($__num2 === 1) return function($u, $v = null) use ($r, $l, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($r, $l, $u, $v);
        if ($__num3 === 1) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
        return phpurs_curry_fallback($__fn, [$r, $l], 4);
      };
      return phpurs_curry_fallback($__fn, [$r], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $__body($r, $l, $u, $v);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() use ($bifoldMap1) {
  $__fn = function($dictMonoid) use ($bifoldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bifoldMap2 = ($bifoldMap1)($dictMonoid);
    $__res = (function() use ($bifoldMap2) {
  $__body = function($r, $l, $v) use ($bifoldMap2) {
    $__case_0 = $r;
    $__case_1 = $l;
    $__case_2 = $v;
    if (true) {
$r1 = $__case_0;
$l1 = $__case_1;
$p = $__case_2;
return ($bifoldMap2)($l1, $r1, $p);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($r, $l = null, $v = null) use ($bifoldMap2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($r, $l, &$__fn) { return $__fn($r, $l, $v); };
    if ($__num === 1) return function($l, $v = null) use ($r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($r, $l, $v);
      if ($__num2 === 1) return function($v) use ($r, $l, &$__fn) { return $__fn($r, $l, $v); };
      return phpurs_curry_fallback($__fn, [$r], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($r, $l, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["bitraverse" => (function() use ($dict, $bitraverse1, $__global_Data_Functor_Flip_Flip) {
  $__fn = function($dictApplicative) use ($dict, $bitraverse1, $__global_Data_Functor_Flip_Flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_6;
$bitraverse2 = ($bitraverse1)($dictApplicative);
    $__res = (function() use ($map, $__global_Data_Functor_Flip_Flip, $bitraverse2) {
  $__body = function($r, $l, $v) use ($map, $__global_Data_Functor_Flip_Flip, $bitraverse2) {
    $__case_0 = $r;
    $__case_1 = $l;
    $__case_2 = $v;
    if (true) {
$r1 = $__case_0;
$l1 = $__case_1;
$p = $__case_2;
return ($map)($__global_Data_Functor_Flip_Flip, ($bitraverse2)($l1, $r1, $p));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($r, $l = null, $v = null) use ($map, $__global_Data_Functor_Flip_Flip, $bitraverse2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($r, $l, &$__fn) { return $__fn($r, $l, $v); };
    if ($__num === 1) return function($l, $v = null) use ($r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($r, $l, $v);
      if ($__num2 === 1) return function($v) use ($r, $l, &$__fn) { return $__fn($r, $l, $v); };
      return phpurs_curry_fallback($__fn, [$r], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($r, $l, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() use ($dict, $bisequence1, $__global_Data_Functor_Flip_Flip) {
  $__fn = function($dictApplicative) use ($dict, $bisequence1, $__global_Data_Functor_Flip_Flip, &$__fn) {
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
$map = $__case_res_7;
$bisequence2 = ($bisequence1)($dictApplicative);
    $__res = (function() use ($map, $__global_Data_Functor_Flip_Flip, $bisequence2) {
  $__body = function($v) use ($map, $__global_Data_Functor_Flip_Flip, $bisequence2) {
    $__case_0 = $v;
    if (true) {
$p = $__case_0;
return ($map)($__global_Data_Functor_Flip_Flip, ($bisequence2)($p));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $__global_Data_Functor_Flip_Flip, $bisequence2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() use ($bifunctorFlip) {
  $__fn = function($__dollar____unused) use ($bifunctorFlip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bifunctorFlip;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() use ($bifoldableFlip) {
  $__fn = function($__dollar____unused) use ($bifoldableFlip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bifoldableFlip;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bitraversableFlip'] = __NAMESPACE__ . '\\Data_Bitraversable_bitraversableFlip';

// Data_Bitraversable_bitraversableProduct2
function Data_Bitraversable_bitraversableProduct2($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bitraversableProduct2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Bifoldable_monoidEndo = ($GLOBALS['Data_Bifoldable_monoidEndo'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_monoidEndo'));
$__global_Data_Bifoldable_unwrap = ($GLOBALS['Data_Bifoldable_unwrap'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_unwrap'));
$__global_Data_Bifoldable_compose = ($GLOBALS['Data_Bifoldable_compose'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_compose'));
$__global_Data_Monoid_Endo_Endo = ($GLOBALS['Data_Monoid_Endo_Endo'] ?? \Data\Monoid\Endo\phpurs_eval_thunk('Data_Monoid_Endo_Endo'));
$__global_Data_Bifoldable_monoidDual = ($GLOBALS['Data_Bifoldable_monoidDual'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_monoidDual'));
$__global_Data_Monoid_Dual_Dual = ($GLOBALS['Data_Monoid_Dual_Dual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_Dual'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__case_0 = $dictBitraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bitraverse;
} else {
throw new \Exception("Pattern match failure");
};
$bitraverse1 = $__case_res_0;
$__case_0 = $dictBitraversable;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bisequence;
} else {
throw new \Exception("Pattern match failure");
};
$bisequence1 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->bimap;
} else {
throw new \Exception("Pattern match failure");
};
$bimap = $__case_res_2;
$bifunctorProduct2 = (function() use ($bimap) {
  $__fn = function($dictBifunctor1) use ($bimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictBifunctor1;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->bimap;
} else {
throw new \Exception("Pattern match failure");
};
$bimap1 = $__case_res_3;
    $__res = (object)["bimap" => (function() use ($bimap, $bimap1) {
  $__body = function($f, $g, $v) use ($bimap, $bimap1) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Product2":
$f1 = $__case_0;
$g1 = $__case_1;
$x = ($__case_2)->v0;
$y = ($__case_2)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Product2", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($bimap)($f1, $g1, $x), ($bimap1)($f1, $g1, $y));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $g = null, $v = null) use ($bimap, $bimap1, $__body, &$__fn) {
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
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->bifoldMap;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldMap1 = $__case_res_4;
$bifoldableProduct2 = (function() use ($dict, $__global_Data_Bifoldable_monoidEndo, $__global_Data_Bifoldable_unwrap, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Endo_Endo, $__global_Data_Bifoldable_monoidDual, $__global_Data_Monoid_Dual_Dual, $__global_Data_Function_flip, $bifoldMap1) {
  $__fn = function($dictBifoldable1) use ($dict, $__global_Data_Bifoldable_monoidEndo, $__global_Data_Bifoldable_unwrap, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Endo_Endo, $__global_Data_Bifoldable_monoidDual, $__global_Data_Monoid_Dual_Dual, $__global_Data_Function_flip, $bifoldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictBifoldable1;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->bifoldMap;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldMap2 = $__case_res_5;
    $__res = (object)["bifoldr" => (function() use ($dict, $__global_Data_Bifoldable_monoidEndo, $__global_Data_Bifoldable_unwrap, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Endo_Endo) {
  $__fn = function($l, $r = null, $u = null, $m = null) use ($dict, $__global_Data_Bifoldable_monoidEndo, $__global_Data_Bifoldable_unwrap, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Endo_Endo, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
    if ($__num === 2) return function($u, $m = null) use ($l, $r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $r, $u, $m);
      if ($__num2 === 1) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
      return phpurs_curry_fallback($__fn, [$l, $r], 4);
    };
    if ($__num === 1) return function($r, $u = null, $m = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($l, $r, $u, $m);
      if ($__num2 === 2) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
      if ($__num2 === 1) return function($u, $m = null) use ($l, $r, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($l, $r, $u, $m);
        if ($__num3 === 1) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
        return phpurs_curry_fallback($__fn, [$l, $r], 4);
      };
      return phpurs_curry_fallback($__fn, [$l], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->bifoldMap;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldMap1 = ($__case_res_6)($__global_Data_Bifoldable_monoidEndo);
    $__res = ((function() use ($__global_Data_Bifoldable_unwrap, $bifoldMap1, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Endo_Endo) {
  $__fn = function($f, $g = null, $z = null, $p = null) use ($__global_Data_Bifoldable_unwrap, $bifoldMap1, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Endo_Endo, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
    if ($__num === 2) return function($z, $p = null) use ($f, $g, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $z, $p);
      if ($__num2 === 1) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
      return phpurs_curry_fallback($__fn, [$f, $g], 4);
    };
    if ($__num === 1) return function($g, $z = null, $p = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $g, $z, $p);
      if ($__num2 === 2) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
      if ($__num2 === 1) return function($z, $p = null) use ($f, $g, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $g, $z, $p);
        if ($__num3 === 1) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
        return phpurs_curry_fallback($__fn, [$f, $g], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = ($__global_Data_Bifoldable_unwrap)(($bifoldMap1)(($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Endo_Endo, $f), ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Endo_Endo, $g), $p), $z);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})())($l, $r, $u, $m);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use ($dict, $__global_Data_Bifoldable_monoidDual, $__global_Data_Bifoldable_unwrap, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Dual_Dual, $__global_Data_Monoid_Endo_Endo, $__global_Data_Function_flip) {
  $__fn = function($l, $r = null, $u = null, $m = null) use ($dict, $__global_Data_Bifoldable_monoidDual, $__global_Data_Bifoldable_unwrap, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Dual_Dual, $__global_Data_Monoid_Endo_Endo, $__global_Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
    if ($__num === 2) return function($u, $m = null) use ($l, $r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $r, $u, $m);
      if ($__num2 === 1) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
      return phpurs_curry_fallback($__fn, [$l, $r], 4);
    };
    if ($__num === 1) return function($r, $u = null, $m = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($l, $r, $u, $m);
      if ($__num2 === 2) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
      if ($__num2 === 1) return function($u, $m = null) use ($l, $r, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($l, $r, $u, $m);
        if ($__num3 === 1) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
        return phpurs_curry_fallback($__fn, [$l, $r], 4);
      };
      return phpurs_curry_fallback($__fn, [$l], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->bifoldMap;
} else {
throw new \Exception("Pattern match failure");
};
$bifoldMap1 = ($__case_res_7)($__global_Data_Bifoldable_monoidDual);
    $__res = ((function() use ($__global_Data_Bifoldable_unwrap, $bifoldMap1, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Dual_Dual, $__global_Data_Monoid_Endo_Endo, $__global_Data_Function_flip) {
  $__fn = function($f, $g = null, $z = null, $p = null) use ($__global_Data_Bifoldable_unwrap, $bifoldMap1, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Dual_Dual, $__global_Data_Monoid_Endo_Endo, $__global_Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
    if ($__num === 2) return function($z, $p = null) use ($f, $g, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $z, $p);
      if ($__num2 === 1) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
      return phpurs_curry_fallback($__fn, [$f, $g], 4);
    };
    if ($__num === 1) return function($g, $z = null, $p = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $g, $z, $p);
      if ($__num2 === 2) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
      if ($__num2 === 1) return function($z, $p = null) use ($f, $g, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $g, $z, $p);
        if ($__num3 === 1) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
        return phpurs_curry_fallback($__fn, [$f, $g], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = ($__global_Data_Bifoldable_unwrap)(($__global_Data_Bifoldable_unwrap)(($bifoldMap1)(($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Dual_Dual, ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Endo_Endo, ($__global_Data_Function_flip)($f))), ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Dual_Dual, ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Endo_Endo, ($__global_Data_Function_flip)($g))), $p)), $z);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})())($l, $r, $u, $m);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() use ($dict, $bifoldMap1, $bifoldMap2) {
  $__fn = function($dictMonoid) use ($dict, $bifoldMap1, $bifoldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_8;
$bifoldMap3 = ($bifoldMap1)($dictMonoid);
$bifoldMap4 = ($bifoldMap2)($dictMonoid);
    $__res = (function() use ($append, $bifoldMap3, $bifoldMap4) {
  $__body = function($l, $r, $v) use ($append, $bifoldMap3, $bifoldMap4) {
    $__case_0 = $l;
    $__case_1 = $r;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Product2":
$l1 = $__case_0;
$r1 = $__case_1;
$f = ($__case_2)->v0;
$g = ($__case_2)->v1;
return ($append)(($bifoldMap3)($l1, $r1, $f), ($bifoldMap4)($l1, $r1, $g));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($l, $r = null, $v = null) use ($append, $bifoldMap3, $bifoldMap4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($l, $r, &$__fn) { return $__fn($l, $r, $v); };
    if ($__num === 1) return function($r, $v = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $r, $v);
      if ($__num2 === 1) return function($v) use ($l, $r, &$__fn) { return $__fn($l, $r, $v); };
      return phpurs_curry_fallback($__fn, [$l], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($l, $r, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($bifunctorProduct2, $__global_Prim_undefined, $bifoldableProduct2, $dict, $bitraverse1, $bisequence1) {
  $__fn = function($dictBitraversable1) use ($bifunctorProduct2, $__global_Prim_undefined, $bifoldableProduct2, $dict, $bitraverse1, $bisequence1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictBitraversable1;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->bitraverse;
} else {
throw new \Exception("Pattern match failure");
};
$bitraverse2 = $__case_res_9;
$__case_0 = $dictBitraversable1;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->bisequence;
} else {
throw new \Exception("Pattern match failure");
};
$bisequence2 = $__case_res_10;
$bifunctorProduct21 = ($bifunctorProduct2)((($dictBitraversable1)->Bifunctor0)($__global_Prim_undefined));
$bifoldableProduct21 = ($bifoldableProduct2)((($dictBitraversable1)->Bifoldable1)($__global_Prim_undefined));
    $__res = (object)["bitraverse" => (function() use ($__global_Prim_undefined, $dict, $bitraverse1, $bitraverse2) {
  $__fn = function($dictApplicative) use ($__global_Prim_undefined, $dict, $bitraverse1, $bitraverse2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
$__case_0 = $Apply0;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_11;
$__case_0 = $dict;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_12;
$bitraverse3 = ($bitraverse1)($dictApplicative);
$bitraverse4 = ($bitraverse2)($dictApplicative);
    $__res = (function() use ($apply, $map, $bitraverse3, $bitraverse4) {
  $__body = function($l, $r, $v) use ($apply, $map, $bitraverse3, $bitraverse4) {
    $__case_0 = $l;
    $__case_1 = $r;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Product2":
$l1 = $__case_0;
$r1 = $__case_1;
$f = ($__case_2)->v0;
$g = ($__case_2)->v1;
return ($apply)(($map)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Product2", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($bitraverse3)($l1, $r1, $f)), ($bitraverse4)($l1, $r1, $g));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($l, $r = null, $v = null) use ($apply, $map, $bitraverse3, $bitraverse4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($l, $r, &$__fn) { return $__fn($l, $r, $v); };
    if ($__num === 1) return function($r, $v = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $r, $v);
      if ($__num2 === 1) return function($v) use ($l, $r, &$__fn) { return $__fn($l, $r, $v); };
      return phpurs_curry_fallback($__fn, [$l], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($l, $r, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() use ($__global_Prim_undefined, $dict, $bisequence1, $bisequence2) {
  $__fn = function($dictApplicative) use ($__global_Prim_undefined, $dict, $bisequence1, $bisequence2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
$__case_0 = $Apply0;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply = $__case_res_13;
$__case_0 = $dict;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_14;
$bisequence3 = ($bisequence1)($dictApplicative);
$bisequence4 = ($bisequence2)($dictApplicative);
    $__res = (function() use ($apply, $map, $bisequence3, $bisequence4) {
  $__body = function($v) use ($apply, $map, $bisequence3, $bisequence4) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Product2":
$f = ($__case_0)->v0;
$g = ($__case_0)->v1;
return ($apply)(($map)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Product2", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($bisequence3)($f)), ($bisequence4)($g));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($apply, $map, $bisequence3, $bisequence4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() use ($bifunctorProduct21) {
  $__fn = function($__dollar____unused) use ($bifunctorProduct21, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bifunctorProduct21;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() use ($bifoldableProduct21) {
  $__fn = function($__dollar____unused) use ($bifoldableProduct21, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bifoldableProduct21;
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
$GLOBALS['Data_Bitraversable_bitraversableProduct2'] = __NAMESPACE__ . '\\Data_Bitraversable_bitraversableProduct2';

// Data_Bitraversable_bitraverseDefault
function Data_Bitraversable_bitraverseDefault($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bitraverseDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictBitraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bisequence;
} else {
throw new \Exception("Pattern match failure");
};
$bisequence1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->bimap;
} else {
throw new \Exception("Pattern match failure");
};
$bimap = $__case_res_1;
    $__res = (function() use ($bisequence1, $bimap) {
  $__fn = function($dictApplicative) use ($bisequence1, $bimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bisequence2 = ($bisequence1)($dictApplicative);
    $__res = (function() use ($bisequence2, $bimap) {
  $__fn = function($f, $g = null, $t = null) use ($bisequence2, $bimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($t) use ($f, $g, &$__fn) { return $__fn($f, $g, $t); };
    if ($__num === 1) return function($g, $t = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $t);
      if ($__num2 === 1) return function($t) use ($f, $g, &$__fn) { return $__fn($f, $g, $t); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($bisequence2)(($bimap)($f, $g, $t));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bitraverseDefault'] = __NAMESPACE__ . '\\Data_Bitraversable_bitraverseDefault';

// Data_Bitraversable_bifor
function Data_Bitraversable_bifor($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bifor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictBitraversable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bitraverse;
} else {
throw new \Exception("Pattern match failure");
};
$bitraverse1 = $__case_res_0;
    $__res = (function() use ($bitraverse1) {
  $__fn = function($dictApplicative) use ($bitraverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bitraverse2 = ($bitraverse1)($dictApplicative);
    $__res = (function() use ($bitraverse2) {
  $__fn = function($t, $f = null, $g = null) use ($bitraverse2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($g) use ($t, $f, &$__fn) { return $__fn($t, $f, $g); };
    if ($__num === 1) return function($f, $g = null) use ($t, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($t, $f, $g);
      if ($__num2 === 1) return function($g) use ($t, $f, &$__fn) { return $__fn($t, $f, $g); };
      return phpurs_curry_fallback($__fn, [$t], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($bitraverse2)($f, $g, $t);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bifor'] = __NAMESPACE__ . '\\Data_Bitraversable_bifor';

