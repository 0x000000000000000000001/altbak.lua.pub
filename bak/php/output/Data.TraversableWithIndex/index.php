<?php

namespace Data\TraversableWithIndex;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Maybe.First/index.php';
require_once __DIR__ . '/../Data.Maybe.Last/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Traversable.Accum/index.php';
require_once __DIR__ . '/../Data.Traversable.Accum.Internal/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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
      case 'Data_TraversableWithIndex_compose': $v = (function() {
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
      case 'Data_TraversableWithIndex_traverse': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Traversable_traversableMultiplicative'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableMultiplicative'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_TraversableWithIndex_traverse1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Traversable_traversableMaybe'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableMaybe'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_TraversableWithIndex_traverse2': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Traversable_traversableLast'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableLast'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_TraversableWithIndex_traverse3': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Traversable_traversableFirst'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableFirst'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_TraversableWithIndex_traverse4': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Traversable_traversableDual'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableDual'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_TraversableWithIndex_traverse5': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Traversable_traversableDisj'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableDisj'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_TraversableWithIndex_traverse6': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Traversable_traversableConj'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableConj'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_TraversableWithIndex_traverse7': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Traversable_traversableAdditive'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableAdditive'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_TraversableWithIndex_traversableWithIndexTuple': $v = (object)["traverseWithIndex" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_0;
    $__res = (function() use ($map, $__global_Data_Unit_unit) {
  $__body = function($f, $v) use ($map, $__global_Data_Unit_unit) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$x = ($__case_1)->v0;
$y = ($__case_1)->v1;
return ($map)(((function() {
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
})())($x), ($f1)($__global_Data_Unit_unit, $y));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($map, $__global_Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FunctorWithIndex_functorWithIndexTuple = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexTuple'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexTuple'));
    $__res = $__global_Data_FunctorWithIndex_functorWithIndexTuple;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldableWithIndexTuple = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexTuple'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexTuple'));
    $__res = $__global_Data_FoldableWithIndex_foldableWithIndexTuple;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_traversableTuple = ($GLOBALS['Data_Traversable_traversableTuple'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableTuple'));
    $__res = $__global_Data_Traversable_traversableTuple;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexMultiplicative': $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_TraversableWithIndex_traverse = ($GLOBALS['Data_TraversableWithIndex_traverse'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$traverse8 = ($__global_Data_TraversableWithIndex_traverse)($dictApplicative);
    $__res = (function() use ($traverse8, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($traverse8, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse8)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FunctorWithIndex_functorWithIndexMultiplicative = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexMultiplicative'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexMultiplicative'));
    $__res = $__global_Data_FunctorWithIndex_functorWithIndexMultiplicative;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldableWithIndexMultiplicative = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexMultiplicative'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexMultiplicative'));
    $__res = $__global_Data_FoldableWithIndex_foldableWithIndexMultiplicative;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_traversableMultiplicative = ($GLOBALS['Data_Traversable_traversableMultiplicative'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableMultiplicative'));
    $__res = $__global_Data_Traversable_traversableMultiplicative;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexMaybe': $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_TraversableWithIndex_traverse1 = ($GLOBALS['Data_TraversableWithIndex_traverse1'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse1'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$traverse8 = ($__global_Data_TraversableWithIndex_traverse1)($dictApplicative);
    $__res = (function() use ($traverse8, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($traverse8, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse8)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FunctorWithIndex_functorWithIndexMaybe = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexMaybe'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexMaybe'));
    $__res = $__global_Data_FunctorWithIndex_functorWithIndexMaybe;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldableWithIndexMaybe = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexMaybe'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexMaybe'));
    $__res = $__global_Data_FoldableWithIndex_foldableWithIndexMaybe;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_traversableMaybe = ($GLOBALS['Data_Traversable_traversableMaybe'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableMaybe'));
    $__res = $__global_Data_Traversable_traversableMaybe;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexLast': $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_TraversableWithIndex_traverse2 = ($GLOBALS['Data_TraversableWithIndex_traverse2'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse2'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$traverse8 = ($__global_Data_TraversableWithIndex_traverse2)($dictApplicative);
    $__res = (function() use ($traverse8, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($traverse8, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse8)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FunctorWithIndex_functorWithIndexLast = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexLast'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexLast'));
    $__res = $__global_Data_FunctorWithIndex_functorWithIndexLast;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldableWithIndexLast = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexLast'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexLast'));
    $__res = $__global_Data_FoldableWithIndex_foldableWithIndexLast;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_traversableLast = ($GLOBALS['Data_Traversable_traversableLast'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableLast'));
    $__res = $__global_Data_Traversable_traversableLast;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexIdentity': $v = (object)["traverseWithIndex" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Identity_Identity = ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_0;
    $__res = (function() use ($map, $__global_Data_Identity_Identity, $__global_Data_Unit_unit) {
  $__body = function($f, $v) use ($map, $__global_Data_Identity_Identity, $__global_Data_Unit_unit) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($__global_Data_Identity_Identity, ($f1)($__global_Data_Unit_unit, $x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__global_Data_Identity_Identity, $__global_Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FunctorWithIndex_functorWithIndexIdentity = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexIdentity'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexIdentity'));
    $__res = $__global_Data_FunctorWithIndex_functorWithIndexIdentity;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldableWithIndexIdentity = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexIdentity'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexIdentity'));
    $__res = $__global_Data_FoldableWithIndex_foldableWithIndexIdentity;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_traversableIdentity = ($GLOBALS['Data_Traversable_traversableIdentity'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableIdentity'));
    $__res = $__global_Data_Traversable_traversableIdentity;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexFirst': $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_TraversableWithIndex_traverse3 = ($GLOBALS['Data_TraversableWithIndex_traverse3'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse3'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$traverse8 = ($__global_Data_TraversableWithIndex_traverse3)($dictApplicative);
    $__res = (function() use ($traverse8, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($traverse8, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse8)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FunctorWithIndex_functorWithIndexFirst = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexFirst'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexFirst'));
    $__res = $__global_Data_FunctorWithIndex_functorWithIndexFirst;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldableWithIndexFirst = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexFirst'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexFirst'));
    $__res = $__global_Data_FoldableWithIndex_foldableWithIndexFirst;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_traversableFirst = ($GLOBALS['Data_Traversable_traversableFirst'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableFirst'));
    $__res = $__global_Data_Traversable_traversableFirst;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexEither': $v = (object)["traverseWithIndex" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__case_0 = $dictApplicative;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_1;
    $__res = (function() use ($pure, $map, $__global_Data_Unit_unit) {
  $__body = function($v, $v1) use ($pure, $map, $__global_Data_Unit_unit) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "Left":
$x = ($__case_1)->v0;
return ($pure)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($x));
break;
case "Right":
$f = $__case_0;
$x = ($__case_1)->v0;
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
})(), ($f)($__global_Data_Unit_unit, $x));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($pure, $map, $__global_Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FunctorWithIndex_functorWithIndexEither = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexEither'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexEither'));
    $__res = $__global_Data_FunctorWithIndex_functorWithIndexEither;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldableWithIndexEither = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexEither'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexEither'));
    $__res = $__global_Data_FoldableWithIndex_foldableWithIndexEither;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_traversableEither = ($GLOBALS['Data_Traversable_traversableEither'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableEither'));
    $__res = $__global_Data_Traversable_traversableEither;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexDual': $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_TraversableWithIndex_traverse4 = ($GLOBALS['Data_TraversableWithIndex_traverse4'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse4'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$traverse8 = ($__global_Data_TraversableWithIndex_traverse4)($dictApplicative);
    $__res = (function() use ($traverse8, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($traverse8, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse8)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FunctorWithIndex_functorWithIndexDual = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexDual'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexDual'));
    $__res = $__global_Data_FunctorWithIndex_functorWithIndexDual;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldableWithIndexDual = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexDual'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexDual'));
    $__res = $__global_Data_FoldableWithIndex_foldableWithIndexDual;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_traversableDual = ($GLOBALS['Data_Traversable_traversableDual'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableDual'));
    $__res = $__global_Data_Traversable_traversableDual;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexDisj': $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_TraversableWithIndex_traverse5 = ($GLOBALS['Data_TraversableWithIndex_traverse5'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse5'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$traverse8 = ($__global_Data_TraversableWithIndex_traverse5)($dictApplicative);
    $__res = (function() use ($traverse8, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($traverse8, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse8)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FunctorWithIndex_functorWithIndexDisj = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexDisj'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexDisj'));
    $__res = $__global_Data_FunctorWithIndex_functorWithIndexDisj;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldableWithIndexDisj = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexDisj'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexDisj'));
    $__res = $__global_Data_FoldableWithIndex_foldableWithIndexDisj;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_traversableDisj = ($GLOBALS['Data_Traversable_traversableDisj'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableDisj'));
    $__res = $__global_Data_Traversable_traversableDisj;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexConst': $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictApplicative;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
$pure = $__case_res_0;
    $__res = (function() use ($pure) {
  $__body = function($v, $v1) use ($pure) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return ($pure)($x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FunctorWithIndex_functorWithIndexConst = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexConst'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexConst'));
    $__res = $__global_Data_FunctorWithIndex_functorWithIndexConst;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldableWithIndexConst = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexConst'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexConst'));
    $__res = $__global_Data_FoldableWithIndex_foldableWithIndexConst;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_traversableConst = ($GLOBALS['Data_Traversable_traversableConst'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableConst'));
    $__res = $__global_Data_Traversable_traversableConst;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexConj': $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_TraversableWithIndex_traverse6 = ($GLOBALS['Data_TraversableWithIndex_traverse6'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse6'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$traverse8 = ($__global_Data_TraversableWithIndex_traverse6)($dictApplicative);
    $__res = (function() use ($traverse8, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($traverse8, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse8)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FunctorWithIndex_functorWithIndexConj = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexConj'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexConj'));
    $__res = $__global_Data_FunctorWithIndex_functorWithIndexConj;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldableWithIndexConj = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexConj'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexConj'));
    $__res = $__global_Data_FoldableWithIndex_foldableWithIndexConj;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_traversableConj = ($GLOBALS['Data_Traversable_traversableConj'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableConj'));
    $__res = $__global_Data_Traversable_traversableConj;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexArray': $v = (object)["traverseWithIndex" => (function() use ($dict) {
  $__fn = function($dictApplicative) use ($dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_TraversableWithIndex_compose = ($GLOBALS['Data_TraversableWithIndex_compose'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_compose'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sequence;
} else {
throw new \Exception("Pattern match failure");
};
$sequence = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->mapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$mapWithIndex = $__case_res_1;
    $__res = ((function() use ($sequence, $__global_Data_TraversableWithIndex_compose, $mapWithIndex) {
  $__fn = function($dictApplicative) use ($sequence, $__global_Data_TraversableWithIndex_compose, $mapWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sequence1 = ($sequence)($dictApplicative);
    $__res = (function() use ($__global_Data_TraversableWithIndex_compose, $sequence1, $mapWithIndex) {
  $__fn = function($f) use ($__global_Data_TraversableWithIndex_compose, $sequence1, $mapWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_TraversableWithIndex_compose)($sequence1, ($mapWithIndex)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($dictApplicative);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FunctorWithIndex_functorWithIndexArray = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexArray'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexArray'));
    $__res = $__global_Data_FunctorWithIndex_functorWithIndexArray;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldableWithIndexArray = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexArray'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexArray'));
    $__res = $__global_Data_FoldableWithIndex_foldableWithIndexArray;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_traversableArray = ($GLOBALS['Data_Traversable_traversableArray'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableArray'));
    $__res = $__global_Data_Traversable_traversableArray;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexAdditive': $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_TraversableWithIndex_traverse7 = ($GLOBALS['Data_TraversableWithIndex_traverse7'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse7'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$traverse8 = ($__global_Data_TraversableWithIndex_traverse7)($dictApplicative);
    $__res = (function() use ($traverse8, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($traverse8, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse8)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FunctorWithIndex_functorWithIndexAdditive = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexAdditive'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexAdditive'));
    $__res = $__global_Data_FunctorWithIndex_functorWithIndexAdditive;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldableWithIndexAdditive = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexAdditive'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexAdditive'));
    $__res = $__global_Data_FoldableWithIndex_foldableWithIndexAdditive;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_traversableAdditive = ($GLOBALS['Data_Traversable_traversableAdditive'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableAdditive'));
    $__res = $__global_Data_Traversable_traversableAdditive;
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











// Data_TraversableWithIndex_TraversableWithIndex$Dict
function Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict';

// Data_TraversableWithIndex_traverseWithIndexDefault
function Data_TraversableWithIndex_traverseWithIndexDefault($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traverseWithIndexDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_TraversableWithIndex_compose = ($GLOBALS['Data_TraversableWithIndex_compose'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_compose'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sequence;
} else {
throw new \Exception("Pattern match failure");
};
$sequence = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->mapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$mapWithIndex = $__case_res_1;
    $__res = (function() use ($sequence, $__global_Data_TraversableWithIndex_compose, $mapWithIndex) {
  $__fn = function($dictApplicative) use ($sequence, $__global_Data_TraversableWithIndex_compose, $mapWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sequence1 = ($sequence)($dictApplicative);
    $__res = (function() use ($__global_Data_TraversableWithIndex_compose, $sequence1, $mapWithIndex) {
  $__fn = function($f) use ($__global_Data_TraversableWithIndex_compose, $sequence1, $mapWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_TraversableWithIndex_compose)($sequence1, ($mapWithIndex)($f));
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
$GLOBALS['Data_TraversableWithIndex_traverseWithIndexDefault'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traverseWithIndexDefault';

// Data_TraversableWithIndex_traverseWithIndex
function Data_TraversableWithIndex_traverseWithIndex($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traverseWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->traverseWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_traverseWithIndex'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traverseWithIndex';

// Data_TraversableWithIndex_traverseDefault
function Data_TraversableWithIndex_traverseDefault($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traverseDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__case_0 = $dictTraversableWithIndex;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverseWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$traverseWithIndex1 = $__case_res_0;
    $__res = (function() use ($traverseWithIndex1, $__global_Data_Function_const) {
  $__fn = function($dictApplicative) use ($traverseWithIndex1, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverseWithIndex2 = ($traverseWithIndex1)($dictApplicative);
    $__res = (function() use ($traverseWithIndex2, $__global_Data_Function_const) {
  $__fn = function($f) use ($traverseWithIndex2, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverseWithIndex2)(($__global_Data_Function_const)($f));
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
$GLOBALS['Data_TraversableWithIndex_traverseDefault'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traverseDefault';


// Data_TraversableWithIndex_traversableWithIndexProduct
function Data_TraversableWithIndex_traversableWithIndexProduct($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traversableWithIndexProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_Product_bimap = ($GLOBALS['Data_Functor_Product_bimap'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_bimap'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_FunctorWithIndex_bimap = ($GLOBALS['Data_FunctorWithIndex_bimap'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_bimap'));
$__global_Data_FunctorWithIndex_compose = ($GLOBALS['Data_FunctorWithIndex_compose'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_compose'));
$__global_Data_FoldableWithIndex_compose = ($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose'));
$__global_Data_Functor_Product_product = ($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product'));
$__global_Data_TraversableWithIndex_compose = ($GLOBALS['Data_TraversableWithIndex_compose'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_compose'));
$__case_0 = $dictTraversableWithIndex;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverseWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$traverseWithIndex1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->mapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$mapWithIndex1 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
$functorProduct = (function() use ($__global_Data_Functor_Product_bimap, $map) {
  $__fn = function($dictFunctor1) use ($__global_Data_Functor_Product_bimap, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctor1;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_3;
    $__res = (object)["map" => (function() use ($__global_Data_Functor_Product_bimap, $map, $map1) {
  $__body = function($f, $v) use ($__global_Data_Functor_Product_bimap, $map, $map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($__global_Data_Functor_Product_bimap)(($map)($f1), ($map1)($f1), $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__global_Data_Functor_Product_bimap, $map, $map1, $__body, &$__fn) {
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
$functorWithIndexProduct = (function() use ($functorProduct, $__global_Prim_undefined, $__global_Data_FunctorWithIndex_bimap, $mapWithIndex1, $__global_Data_FunctorWithIndex_compose) {
  $__fn = function($dictFunctorWithIndex1) use ($functorProduct, $__global_Prim_undefined, $__global_Data_FunctorWithIndex_bimap, $mapWithIndex1, $__global_Data_FunctorWithIndex_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctorWithIndex1;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->mapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$mapWithIndex2 = $__case_res_4;
$functorProduct1 = ($functorProduct)((($dictFunctorWithIndex1)->Functor0)($__global_Prim_undefined));
    $__res = (object)["mapWithIndex" => (function() use ($__global_Data_FunctorWithIndex_bimap, $mapWithIndex1, $__global_Data_FunctorWithIndex_compose, $mapWithIndex2) {
  $__body = function($f, $v) use ($__global_Data_FunctorWithIndex_bimap, $mapWithIndex1, $__global_Data_FunctorWithIndex_compose, $mapWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($__global_Data_FunctorWithIndex_bimap)(($mapWithIndex1)(($__global_Data_FunctorWithIndex_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($mapWithIndex2)(($__global_Data_FunctorWithIndex_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__global_Data_FunctorWithIndex_bimap, $mapWithIndex1, $__global_Data_FunctorWithIndex_compose, $mapWithIndex2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorProduct1) {
  $__fn = function($__dollar____unused) use ($functorProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorProduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->foldrWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldrWithIndex1 = $__case_res_5;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->foldlWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldlWithIndex1 = $__case_res_6;
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->foldMapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldMapWithIndex1 = $__case_res_7;
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_8;
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_9;
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_10;
$foldableProduct = (function() use ($foldr3, $foldl3, $dict, $foldMap2) {
  $__fn = function($dictFoldable1) use ($foldr3, $foldl3, $dict, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable1;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr4 = $__case_res_11;
$__case_0 = $dictFoldable1;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl4 = $__case_res_12;
$__case_0 = $dictFoldable1;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap3 = $__case_res_13;
    $__res = (object)["foldr" => (function() use ($foldr3, $foldr4) {
  $__body = function($f, $z, $v) use ($foldr3, $foldr4) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->v0;
$ga = ($__case_2)->v1;
return ($foldr3)($f1, ($foldr4)($f1, $z1, $ga), $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldr3, $foldr4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($foldl4, $foldl3) {
  $__body = function($f, $z, $v) use ($foldl4, $foldl3) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->v0;
$ga = ($__case_2)->v1;
return ($foldl4)($f1, ($foldl3)($f1, $z1, $fa), $ga);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldl4, $foldl3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($dict, $foldMap2, $foldMap3) {
  $__fn = function($dictMonoid) use ($dict, $foldMap2, $foldMap3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_14;
$foldMap4 = ($foldMap2)($dictMonoid);
$foldMap5 = ($foldMap3)($dictMonoid);
    $__res = (function() use ($append, $foldMap4, $foldMap5) {
  $__body = function($f, $v) use ($append, $foldMap4, $foldMap5) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$fa = ($__case_1)->v0;
$ga = ($__case_1)->v1;
return ($append)(($foldMap4)($f1, $fa), ($foldMap5)($f1, $ga));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($append, $foldMap4, $foldMap5, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
$foldableWithIndexProduct = (function() use ($foldableProduct, $__global_Prim_undefined, $foldrWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex1, $dict, $foldMapWithIndex1) {
  $__fn = function($dictFoldableWithIndex1) use ($foldableProduct, $__global_Prim_undefined, $foldrWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex1, $dict, $foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldableWithIndex1;
$__case_res_15 = null;
if (true) {
$v = $__case_0;
$__case_res_15 = ($v)->foldrWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldrWithIndex2 = $__case_res_15;
$__case_0 = $dictFoldableWithIndex1;
$__case_res_16 = null;
if (true) {
$v = $__case_0;
$__case_res_16 = ($v)->foldlWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldlWithIndex2 = $__case_res_16;
$__case_0 = $dictFoldableWithIndex1;
$__case_res_17 = null;
if (true) {
$v = $__case_0;
$__case_res_17 = ($v)->foldMapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldMapWithIndex2 = $__case_res_17;
$foldableProduct1 = ($foldableProduct)((($dictFoldableWithIndex1)->Foldable0)($__global_Prim_undefined));
    $__res = (object)["foldrWithIndex" => (function() use ($foldrWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldrWithIndex2) {
  $__body = function($f, $z, $v) use ($foldrWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldrWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->v0;
$ga = ($__case_2)->v1;
return ($foldrWithIndex1)(($__global_Data_FoldableWithIndex_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($foldrWithIndex2)(($__global_Data_FoldableWithIndex_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $z1, $ga), $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldrWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldrWithIndex2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use ($foldlWithIndex2, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex1) {
  $__body = function($f, $z, $v) use ($foldlWithIndex2, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->v0;
$ga = ($__case_2)->v1;
return ($foldlWithIndex2)(($__global_Data_FoldableWithIndex_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($foldlWithIndex1)(($__global_Data_FoldableWithIndex_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $z1, $fa), $ga);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldlWithIndex2, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($dict, $foldMapWithIndex1, $foldMapWithIndex2, $__global_Data_FoldableWithIndex_compose) {
  $__fn = function($dictMonoid) use ($dict, $foldMapWithIndex1, $foldMapWithIndex2, $__global_Data_FoldableWithIndex_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_18 = null;
if (true) {
$v = $__case_0;
$__case_res_18 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_18;
$foldMapWithIndex3 = ($foldMapWithIndex1)($dictMonoid);
$foldMapWithIndex4 = ($foldMapWithIndex2)($dictMonoid);
    $__res = (function() use ($append, $foldMapWithIndex3, $__global_Data_FoldableWithIndex_compose, $foldMapWithIndex4) {
  $__body = function($f, $v) use ($append, $foldMapWithIndex3, $__global_Data_FoldableWithIndex_compose, $foldMapWithIndex4) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$fa = ($__case_1)->v0;
$ga = ($__case_1)->v1;
return ($append)(($foldMapWithIndex3)(($__global_Data_FoldableWithIndex_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $fa), ($foldMapWithIndex4)(($__global_Data_FoldableWithIndex_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $ga));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($append, $foldMapWithIndex3, $__global_Data_FoldableWithIndex_compose, $foldMapWithIndex4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() use ($foldableProduct1) {
  $__fn = function($__dollar____unused) use ($foldableProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableProduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_19 = null;
if (true) {
$v = $__case_0;
$__case_res_19 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse2 = $__case_res_19;
$__case_0 = $dict;
$__case_res_20 = null;
if (true) {
$v = $__case_0;
$__case_res_20 = ($v)->sequence;
} else {
throw new \Exception("Pattern match failure");
};
$sequence2 = $__case_res_20;
$__case_0 = $dict;
$__case_res_21 = null;
if (true) {
$v = $__case_0;
$__case_res_21 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_21;
$functorProduct = (function() use ($__global_Data_Functor_Product_bimap, $map) {
  $__fn = function($dictFunctor1) use ($__global_Data_Functor_Product_bimap, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctor1;
$__case_res_22 = null;
if (true) {
$v = $__case_0;
$__case_res_22 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_22;
    $__res = (object)["map" => (function() use ($__global_Data_Functor_Product_bimap, $map, $map1) {
  $__body = function($f, $v) use ($__global_Data_Functor_Product_bimap, $map, $map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($__global_Data_Functor_Product_bimap)(($map)($f1), ($map1)($f1), $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__global_Data_Functor_Product_bimap, $map, $map1, $__body, &$__fn) {
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
$__case_0 = $dict;
$__case_res_23 = null;
if (true) {
$v = $__case_0;
$__case_res_23 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_23;
$__case_0 = $dict;
$__case_res_24 = null;
if (true) {
$v = $__case_0;
$__case_res_24 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_24;
$__case_0 = $dict;
$__case_res_25 = null;
if (true) {
$v = $__case_0;
$__case_res_25 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_25;
$foldableProduct = (function() use ($foldr3, $foldl3, $dict, $foldMap2) {
  $__fn = function($dictFoldable1) use ($foldr3, $foldl3, $dict, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable1;
$__case_res_26 = null;
if (true) {
$v = $__case_0;
$__case_res_26 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr4 = $__case_res_26;
$__case_0 = $dictFoldable1;
$__case_res_27 = null;
if (true) {
$v = $__case_0;
$__case_res_27 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl4 = $__case_res_27;
$__case_0 = $dictFoldable1;
$__case_res_28 = null;
if (true) {
$v = $__case_0;
$__case_res_28 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap3 = $__case_res_28;
    $__res = (object)["foldr" => (function() use ($foldr3, $foldr4) {
  $__body = function($f, $z, $v) use ($foldr3, $foldr4) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->v0;
$ga = ($__case_2)->v1;
return ($foldr3)($f1, ($foldr4)($f1, $z1, $ga), $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldr3, $foldr4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($foldl4, $foldl3) {
  $__body = function($f, $z, $v) use ($foldl4, $foldl3) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->v0;
$ga = ($__case_2)->v1;
return ($foldl4)($f1, ($foldl3)($f1, $z1, $fa), $ga);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldl4, $foldl3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($dict, $foldMap2, $foldMap3) {
  $__fn = function($dictMonoid) use ($dict, $foldMap2, $foldMap3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_29 = null;
if (true) {
$v = $__case_0;
$__case_res_29 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
$append = $__case_res_29;
$foldMap4 = ($foldMap2)($dictMonoid);
$foldMap5 = ($foldMap3)($dictMonoid);
    $__res = (function() use ($append, $foldMap4, $foldMap5) {
  $__body = function($f, $v) use ($append, $foldMap4, $foldMap5) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$fa = ($__case_1)->v0;
$ga = ($__case_1)->v1;
return ($append)(($foldMap4)($f1, $fa), ($foldMap5)($f1, $ga));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($append, $foldMap4, $foldMap5, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
$traversableProduct = (function() use ($functorProduct, $__global_Prim_undefined, $foldableProduct, $dict, $traverse2, $__global_Data_Functor_Product_product, $sequence2) {
  $__fn = function($dictTraversable1) use ($functorProduct, $__global_Prim_undefined, $foldableProduct, $dict, $traverse2, $__global_Data_Functor_Product_product, $sequence2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictTraversable1;
$__case_res_30 = null;
if (true) {
$v = $__case_0;
$__case_res_30 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse3 = $__case_res_30;
$__case_0 = $dictTraversable1;
$__case_res_31 = null;
if (true) {
$v = $__case_0;
$__case_res_31 = ($v)->sequence;
} else {
throw new \Exception("Pattern match failure");
};
$sequence3 = $__case_res_31;
$functorProduct1 = ($functorProduct)((($dictTraversable1)->Functor0)($__global_Prim_undefined));
$foldableProduct1 = ($foldableProduct)((($dictTraversable1)->Foldable1)($__global_Prim_undefined));
    $__res = (object)["traverse" => (function() use ($dict, $traverse2, $traverse3, $__global_Data_Functor_Product_product) {
  $__fn = function($dictApplicative) use ($dict, $traverse2, $traverse3, $__global_Data_Functor_Product_product, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_32 = null;
if (true) {
$v = $__case_0;
$__case_res_32 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_32;
$__case_0 = $dict;
$__case_res_33 = null;
if (true) {
$v = $__case_0;
$__case_res_33 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_33;
$lift2 = (function() use ($apply1, $map) {
  $__fn = function($f, $a = null, $b = null) use ($apply1, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
    if ($__num === 1) return function($a, $b = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $b);
      if ($__num2 === 1) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($apply1)(($map)($f, $a), $b);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
$traverse4 = ($traverse2)($dictApplicative);
$traverse5 = ($traverse3)($dictApplicative);
    $__res = (function() use ($lift2, $__global_Data_Functor_Product_product, $traverse4, $traverse5) {
  $__body = function($f, $v) use ($lift2, $__global_Data_Functor_Product_product, $traverse4, $traverse5) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$fa = ($__case_1)->v0;
$ga = ($__case_1)->v1;
return ($lift2)($__global_Data_Functor_Product_product, ($traverse4)($f1, $fa), ($traverse5)($f1, $ga));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($lift2, $__global_Data_Functor_Product_product, $traverse4, $traverse5, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequence" => (function() use ($dict, $sequence2, $sequence3, $__global_Data_Functor_Product_product) {
  $__fn = function($dictApplicative) use ($dict, $sequence2, $sequence3, $__global_Data_Functor_Product_product, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_34 = null;
if (true) {
$v = $__case_0;
$__case_res_34 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_34;
$__case_0 = $dict;
$__case_res_35 = null;
if (true) {
$v = $__case_0;
$__case_res_35 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_35;
$lift2 = (function() use ($apply1, $map) {
  $__fn = function($f, $a = null, $b = null) use ($apply1, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
    if ($__num === 1) return function($a, $b = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $b);
      if ($__num2 === 1) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($apply1)(($map)($f, $a), $b);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
$sequence4 = ($sequence2)($dictApplicative);
$sequence5 = ($sequence3)($dictApplicative);
    $__res = (function() use ($lift2, $__global_Data_Functor_Product_product, $sequence4, $sequence5) {
  $__body = function($v) use ($lift2, $__global_Data_Functor_Product_product, $sequence4, $sequence5) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$fa = ($__case_0)->v0;
$ga = ($__case_0)->v1;
return ($lift2)($__global_Data_Functor_Product_product, ($sequence4)($fa), ($sequence5)($ga));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($lift2, $__global_Data_Functor_Product_product, $sequence4, $sequence5, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorProduct1) {
  $__fn = function($__dollar____unused) use ($functorProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorProduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use ($foldableProduct1) {
  $__fn = function($__dollar____unused) use ($foldableProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableProduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($functorWithIndexProduct, $__global_Prim_undefined, $foldableWithIndexProduct, $traversableProduct, $dict, $traverseWithIndex1, $__global_Data_Functor_Product_product, $__global_Data_TraversableWithIndex_compose) {
  $__fn = function($dictTraversableWithIndex1) use ($functorWithIndexProduct, $__global_Prim_undefined, $foldableWithIndexProduct, $traversableProduct, $dict, $traverseWithIndex1, $__global_Data_Functor_Product_product, $__global_Data_TraversableWithIndex_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictTraversableWithIndex1;
$__case_res_36 = null;
if (true) {
$v = $__case_0;
$__case_res_36 = ($v)->traverseWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$traverseWithIndex2 = $__case_res_36;
$functorWithIndexProduct1 = ($functorWithIndexProduct)((($dictTraversableWithIndex1)->FunctorWithIndex0)($__global_Prim_undefined));
$foldableWithIndexProduct1 = ($foldableWithIndexProduct)((($dictTraversableWithIndex1)->FoldableWithIndex1)($__global_Prim_undefined));
$traversableProduct1 = ($traversableProduct)((($dictTraversableWithIndex1)->Traversable2)($__global_Prim_undefined));
    $__res = (object)["traverseWithIndex" => (function() use ($dict, $traverseWithIndex1, $traverseWithIndex2, $__global_Data_Functor_Product_product, $__global_Data_TraversableWithIndex_compose) {
  $__fn = function($dictApplicative) use ($dict, $traverseWithIndex1, $traverseWithIndex2, $__global_Data_Functor_Product_product, $__global_Data_TraversableWithIndex_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_37 = null;
if (true) {
$v = $__case_0;
$__case_res_37 = ($v)->apply;
} else {
throw new \Exception("Pattern match failure");
};
$apply1 = $__case_res_37;
$__case_0 = $dict;
$__case_res_38 = null;
if (true) {
$v = $__case_0;
$__case_res_38 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_38;
$lift2 = (function() use ($apply1, $map) {
  $__fn = function($f, $a = null, $b = null) use ($apply1, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
    if ($__num === 1) return function($a, $b = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $b);
      if ($__num2 === 1) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($apply1)(($map)($f, $a), $b);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
$traverseWithIndex3 = ($traverseWithIndex1)($dictApplicative);
$traverseWithIndex4 = ($traverseWithIndex2)($dictApplicative);
    $__res = (function() use ($lift2, $__global_Data_Functor_Product_product, $traverseWithIndex3, $__global_Data_TraversableWithIndex_compose, $traverseWithIndex4) {
  $__body = function($f, $v) use ($lift2, $__global_Data_Functor_Product_product, $traverseWithIndex3, $__global_Data_TraversableWithIndex_compose, $traverseWithIndex4) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$fa = ($__case_1)->v0;
$ga = ($__case_1)->v1;
return ($lift2)($__global_Data_Functor_Product_product, ($traverseWithIndex3)(($__global_Data_TraversableWithIndex_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $fa), ($traverseWithIndex4)(($__global_Data_TraversableWithIndex_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $ga));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($lift2, $__global_Data_Functor_Product_product, $traverseWithIndex3, $__global_Data_TraversableWithIndex_compose, $traverseWithIndex4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() use ($functorWithIndexProduct1) {
  $__fn = function($__dollar____unused) use ($functorWithIndexProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorWithIndexProduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use ($foldableWithIndexProduct1) {
  $__fn = function($__dollar____unused) use ($foldableWithIndexProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableWithIndexProduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use ($traversableProduct1) {
  $__fn = function($__dollar____unused) use ($traversableProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $traversableProduct1;
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
$GLOBALS['Data_TraversableWithIndex_traversableWithIndexProduct'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traversableWithIndexProduct';









// Data_TraversableWithIndex_traversableWithIndexCoproduct
function Data_TraversableWithIndex_traversableWithIndexCoproduct($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traversableWithIndexCoproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_Coproduct_bimap = ($GLOBALS['Data_Functor_Coproduct_bimap'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_bimap'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_FunctorWithIndex_bimap1 = ($GLOBALS['Data_FunctorWithIndex_bimap1'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_bimap1'));
$__global_Data_FunctorWithIndex_compose = ($GLOBALS['Data_FunctorWithIndex_compose'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_compose'));
$__global_Data_Functor_Coproduct_coproduct = ($GLOBALS['Data_Functor_Coproduct_coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_coproduct'));
$__global_Data_FoldableWithIndex_compose = ($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose'));
$__global_Data_Traversable_compose = ($GLOBALS['Data_Traversable_compose'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_compose'));
$__global_Data_Functor_Coproduct_Coproduct = ($GLOBALS['Data_Functor_Coproduct_Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_Coproduct'));
$__global_Data_TraversableWithIndex_compose = ($GLOBALS['Data_TraversableWithIndex_compose'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_compose'));
$__case_0 = $dictTraversableWithIndex;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverseWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$traverseWithIndex1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->mapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$mapWithIndex1 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
$functorCoproduct = (function() use ($__global_Data_Functor_Coproduct_bimap, $map) {
  $__fn = function($dictFunctor1) use ($__global_Data_Functor_Coproduct_bimap, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctor1;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_3;
    $__res = (object)["map" => (function() use ($__global_Data_Functor_Coproduct_bimap, $map, $map1) {
  $__body = function($f, $v) use ($__global_Data_Functor_Coproduct_bimap, $map, $map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$e = $__case_1;
return ($__global_Data_Functor_Coproduct_bimap)(($map)($f1), ($map1)($f1), $e);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__global_Data_Functor_Coproduct_bimap, $map, $map1, $__body, &$__fn) {
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
$functorWithIndexCoproduct = (function() use ($functorCoproduct, $__global_Prim_undefined, $__global_Data_FunctorWithIndex_bimap1, $mapWithIndex1, $__global_Data_FunctorWithIndex_compose) {
  $__fn = function($dictFunctorWithIndex1) use ($functorCoproduct, $__global_Prim_undefined, $__global_Data_FunctorWithIndex_bimap1, $mapWithIndex1, $__global_Data_FunctorWithIndex_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctorWithIndex1;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->mapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$mapWithIndex2 = $__case_res_4;
$functorCoproduct1 = ($functorCoproduct)((($dictFunctorWithIndex1)->Functor0)($__global_Prim_undefined));
    $__res = (object)["mapWithIndex" => (function() use ($__global_Data_FunctorWithIndex_bimap1, $mapWithIndex1, $__global_Data_FunctorWithIndex_compose, $mapWithIndex2) {
  $__body = function($f, $v) use ($__global_Data_FunctorWithIndex_bimap1, $mapWithIndex1, $__global_Data_FunctorWithIndex_compose, $mapWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$e = $__case_1;
return ($__global_Data_FunctorWithIndex_bimap1)(($mapWithIndex1)(($__global_Data_FunctorWithIndex_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($mapWithIndex2)(($__global_Data_FunctorWithIndex_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), $e);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__global_Data_FunctorWithIndex_bimap1, $mapWithIndex1, $__global_Data_FunctorWithIndex_compose, $mapWithIndex2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorCoproduct1) {
  $__fn = function($__dollar____unused) use ($functorCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorCoproduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->foldrWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldrWithIndex1 = $__case_res_5;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->foldlWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldlWithIndex1 = $__case_res_6;
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->foldMapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldMapWithIndex1 = $__case_res_7;
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_8;
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_9;
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_10;
$foldableCoproduct = (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldl3, $foldMap2) {
  $__fn = function($dictFoldable1) use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldl3, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable1;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr4 = $__case_res_11;
$__case_0 = $dictFoldable1;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl4 = $__case_res_12;
$__case_0 = $dictFoldable1;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap3 = $__case_res_13;
    $__res = (object)["foldr" => (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldr4) {
  $__fn = function($f, $z = null) use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldr4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldr3)($f, $z), ($foldr4)($f, $z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldl3, $foldl4) {
  $__fn = function($f, $z = null) use ($__global_Data_Functor_Coproduct_coproduct, $foldl3, $foldl4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldl3)($f, $z), ($foldl4)($f, $z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap2, $foldMap3, $__global_Data_Functor_Coproduct_coproduct) {
  $__fn = function($dictMonoid) use ($foldMap2, $foldMap3, $__global_Data_Functor_Coproduct_coproduct, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap4 = ($foldMap2)($dictMonoid);
$foldMap5 = ($foldMap3)($dictMonoid);
    $__res = (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldMap4, $foldMap5) {
  $__fn = function($f) use ($__global_Data_Functor_Coproduct_coproduct, $foldMap4, $foldMap5, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldMap4)($f), ($foldMap5)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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
$foldableWithIndexCoproduct = (function() use ($foldableCoproduct, $__global_Prim_undefined, $__global_Data_Functor_Coproduct_coproduct, $foldrWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex1, $foldMapWithIndex1) {
  $__fn = function($dictFoldableWithIndex1) use ($foldableCoproduct, $__global_Prim_undefined, $__global_Data_Functor_Coproduct_coproduct, $foldrWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex1, $foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldableWithIndex1;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->foldrWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldrWithIndex2 = $__case_res_14;
$__case_0 = $dictFoldableWithIndex1;
$__case_res_15 = null;
if (true) {
$v = $__case_0;
$__case_res_15 = ($v)->foldlWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldlWithIndex2 = $__case_res_15;
$__case_0 = $dictFoldableWithIndex1;
$__case_res_16 = null;
if (true) {
$v = $__case_0;
$__case_res_16 = ($v)->foldMapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldMapWithIndex2 = $__case_res_16;
$foldableCoproduct1 = ($foldableCoproduct)((($dictFoldableWithIndex1)->Foldable0)($__global_Prim_undefined));
    $__res = (object)["foldrWithIndex" => (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldrWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldrWithIndex2) {
  $__fn = function($f, $z = null) use ($__global_Data_Functor_Coproduct_coproduct, $foldrWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldrWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldrWithIndex1)(($__global_Data_FoldableWithIndex_compose)($f, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $z), ($foldrWithIndex2)(($__global_Data_FoldableWithIndex_compose)($f, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldlWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex2) {
  $__fn = function($f, $z = null) use ($__global_Data_Functor_Coproduct_coproduct, $foldlWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldlWithIndex1)(($__global_Data_FoldableWithIndex_compose)($f, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $z), ($foldlWithIndex2)(($__global_Data_FoldableWithIndex_compose)($f, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($foldMapWithIndex1, $foldMapWithIndex2, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_FoldableWithIndex_compose) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, $foldMapWithIndex2, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_FoldableWithIndex_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex3 = ($foldMapWithIndex1)($dictMonoid);
$foldMapWithIndex4 = ($foldMapWithIndex2)($dictMonoid);
    $__res = (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldMapWithIndex3, $__global_Data_FoldableWithIndex_compose, $foldMapWithIndex4) {
  $__fn = function($f) use ($__global_Data_Functor_Coproduct_coproduct, $foldMapWithIndex3, $__global_Data_FoldableWithIndex_compose, $foldMapWithIndex4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldMapWithIndex3)(($__global_Data_FoldableWithIndex_compose)($f, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($foldMapWithIndex4)(($__global_Data_FoldableWithIndex_compose)($f, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() use ($foldableCoproduct1) {
  $__fn = function($__dollar____unused) use ($foldableCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableCoproduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_17 = null;
if (true) {
$v = $__case_0;
$__case_res_17 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse2 = $__case_res_17;
$__case_0 = $dict;
$__case_res_18 = null;
if (true) {
$v = $__case_0;
$__case_res_18 = ($v)->sequence;
} else {
throw new \Exception("Pattern match failure");
};
$sequence2 = $__case_res_18;
$__case_0 = $dict;
$__case_res_19 = null;
if (true) {
$v = $__case_0;
$__case_res_19 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_19;
$functorCoproduct = (function() use ($__global_Data_Functor_Coproduct_bimap, $map) {
  $__fn = function($dictFunctor1) use ($__global_Data_Functor_Coproduct_bimap, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctor1;
$__case_res_20 = null;
if (true) {
$v = $__case_0;
$__case_res_20 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_20;
    $__res = (object)["map" => (function() use ($__global_Data_Functor_Coproduct_bimap, $map, $map1) {
  $__body = function($f, $v) use ($__global_Data_Functor_Coproduct_bimap, $map, $map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$e = $__case_1;
return ($__global_Data_Functor_Coproduct_bimap)(($map)($f1), ($map1)($f1), $e);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__global_Data_Functor_Coproduct_bimap, $map, $map1, $__body, &$__fn) {
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
$__case_0 = $dict;
$__case_res_21 = null;
if (true) {
$v = $__case_0;
$__case_res_21 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_21;
$__case_0 = $dict;
$__case_res_22 = null;
if (true) {
$v = $__case_0;
$__case_res_22 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_22;
$__case_0 = $dict;
$__case_res_23 = null;
if (true) {
$v = $__case_0;
$__case_res_23 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_23;
$foldableCoproduct = (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldl3, $foldMap2) {
  $__fn = function($dictFoldable1) use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldl3, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable1;
$__case_res_24 = null;
if (true) {
$v = $__case_0;
$__case_res_24 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr4 = $__case_res_24;
$__case_0 = $dictFoldable1;
$__case_res_25 = null;
if (true) {
$v = $__case_0;
$__case_res_25 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl4 = $__case_res_25;
$__case_0 = $dictFoldable1;
$__case_res_26 = null;
if (true) {
$v = $__case_0;
$__case_res_26 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap3 = $__case_res_26;
    $__res = (object)["foldr" => (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldr4) {
  $__fn = function($f, $z = null) use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldr4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldr3)($f, $z), ($foldr4)($f, $z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldl3, $foldl4) {
  $__fn = function($f, $z = null) use ($__global_Data_Functor_Coproduct_coproduct, $foldl3, $foldl4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldl3)($f, $z), ($foldl4)($f, $z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap2, $foldMap3, $__global_Data_Functor_Coproduct_coproduct) {
  $__fn = function($dictMonoid) use ($foldMap2, $foldMap3, $__global_Data_Functor_Coproduct_coproduct, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap4 = ($foldMap2)($dictMonoid);
$foldMap5 = ($foldMap3)($dictMonoid);
    $__res = (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldMap4, $foldMap5) {
  $__fn = function($f) use ($__global_Data_Functor_Coproduct_coproduct, $foldMap4, $foldMap5, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldMap4)($f), ($foldMap5)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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
$traversableCoproduct = (function() use ($functorCoproduct, $__global_Prim_undefined, $foldableCoproduct, $dict, $traverse2, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_Traversable_compose, $__global_Data_Functor_Coproduct_Coproduct, $sequence2) {
  $__fn = function($dictTraversable1) use ($functorCoproduct, $__global_Prim_undefined, $foldableCoproduct, $dict, $traverse2, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_Traversable_compose, $__global_Data_Functor_Coproduct_Coproduct, $sequence2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictTraversable1;
$__case_res_27 = null;
if (true) {
$v = $__case_0;
$__case_res_27 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse3 = $__case_res_27;
$__case_0 = $dictTraversable1;
$__case_res_28 = null;
if (true) {
$v = $__case_0;
$__case_res_28 = ($v)->sequence;
} else {
throw new \Exception("Pattern match failure");
};
$sequence3 = $__case_res_28;
$functorCoproduct1 = ($functorCoproduct)((($dictTraversable1)->Functor0)($__global_Prim_undefined));
$foldableCoproduct1 = ($foldableCoproduct)((($dictTraversable1)->Foldable1)($__global_Prim_undefined));
    $__res = (object)["traverse" => (function() use ($dict, $traverse2, $traverse3, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_Traversable_compose, $__global_Data_Functor_Coproduct_Coproduct) {
  $__fn = function($dictApplicative) use ($dict, $traverse2, $traverse3, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_Traversable_compose, $__global_Data_Functor_Coproduct_Coproduct, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_29 = null;
if (true) {
$v = $__case_0;
$__case_res_29 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_29;
$traverse4 = ($traverse2)($dictApplicative);
$traverse5 = ($traverse3)($dictApplicative);
    $__res = (function() use ($__global_Data_Functor_Coproduct_coproduct, $__global_Data_Traversable_compose, $map, $__global_Data_Functor_Coproduct_Coproduct, $traverse4, $traverse5) {
  $__fn = function($f) use ($__global_Data_Functor_Coproduct_coproduct, $__global_Data_Traversable_compose, $map, $__global_Data_Functor_Coproduct_Coproduct, $traverse4, $traverse5, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($__global_Data_Traversable_compose)(($map)(($__global_Data_Traversable_compose)($__global_Data_Functor_Coproduct_Coproduct, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($traverse4)($f)), ($__global_Data_Traversable_compose)(($map)(($__global_Data_Traversable_compose)($__global_Data_Functor_Coproduct_Coproduct, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($traverse5)($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequence" => (function() use ($dict, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_Traversable_compose, $__global_Data_Functor_Coproduct_Coproduct, $sequence2, $sequence3) {
  $__fn = function($dictApplicative) use ($dict, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_Traversable_compose, $__global_Data_Functor_Coproduct_Coproduct, $sequence2, $sequence3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_30 = null;
if (true) {
$v = $__case_0;
$__case_res_30 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_30;
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($__global_Data_Traversable_compose)(($map)(($__global_Data_Traversable_compose)($__global_Data_Functor_Coproduct_Coproduct, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($sequence2)($dictApplicative)), ($__global_Data_Traversable_compose)(($map)(($__global_Data_Traversable_compose)($__global_Data_Functor_Coproduct_Coproduct, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($sequence3)($dictApplicative)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorCoproduct1) {
  $__fn = function($__dollar____unused) use ($functorCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorCoproduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use ($foldableCoproduct1) {
  $__fn = function($__dollar____unused) use ($foldableCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableCoproduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($functorWithIndexCoproduct, $__global_Prim_undefined, $foldableWithIndexCoproduct, $traversableCoproduct, $dict, $traverseWithIndex1, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_TraversableWithIndex_compose, $__global_Data_Functor_Coproduct_Coproduct) {
  $__fn = function($dictTraversableWithIndex1) use ($functorWithIndexCoproduct, $__global_Prim_undefined, $foldableWithIndexCoproduct, $traversableCoproduct, $dict, $traverseWithIndex1, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_TraversableWithIndex_compose, $__global_Data_Functor_Coproduct_Coproduct, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictTraversableWithIndex1;
$__case_res_31 = null;
if (true) {
$v = $__case_0;
$__case_res_31 = ($v)->traverseWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$traverseWithIndex2 = $__case_res_31;
$functorWithIndexCoproduct1 = ($functorWithIndexCoproduct)((($dictTraversableWithIndex1)->FunctorWithIndex0)($__global_Prim_undefined));
$foldableWithIndexCoproduct1 = ($foldableWithIndexCoproduct)((($dictTraversableWithIndex1)->FoldableWithIndex1)($__global_Prim_undefined));
$traversableCoproduct1 = ($traversableCoproduct)((($dictTraversableWithIndex1)->Traversable2)($__global_Prim_undefined));
    $__res = (object)["traverseWithIndex" => (function() use ($dict, $traverseWithIndex1, $traverseWithIndex2, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_TraversableWithIndex_compose, $__global_Data_Functor_Coproduct_Coproduct) {
  $__fn = function($dictApplicative) use ($dict, $traverseWithIndex1, $traverseWithIndex2, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_TraversableWithIndex_compose, $__global_Data_Functor_Coproduct_Coproduct, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_32 = null;
if (true) {
$v = $__case_0;
$__case_res_32 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_32;
$traverseWithIndex3 = ($traverseWithIndex1)($dictApplicative);
$traverseWithIndex4 = ($traverseWithIndex2)($dictApplicative);
    $__res = (function() use ($__global_Data_Functor_Coproduct_coproduct, $__global_Data_TraversableWithIndex_compose, $map, $__global_Data_Functor_Coproduct_Coproduct, $traverseWithIndex3, $traverseWithIndex4) {
  $__fn = function($f) use ($__global_Data_Functor_Coproduct_coproduct, $__global_Data_TraversableWithIndex_compose, $map, $__global_Data_Functor_Coproduct_Coproduct, $traverseWithIndex3, $traverseWithIndex4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($__global_Data_TraversableWithIndex_compose)(($map)(($__global_Data_TraversableWithIndex_compose)($__global_Data_Functor_Coproduct_Coproduct, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($traverseWithIndex3)(($__global_Data_TraversableWithIndex_compose)($f, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()))), ($__global_Data_TraversableWithIndex_compose)(($map)(($__global_Data_TraversableWithIndex_compose)($__global_Data_Functor_Coproduct_Coproduct, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($traverseWithIndex4)(($__global_Data_TraversableWithIndex_compose)($f, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() use ($functorWithIndexCoproduct1) {
  $__fn = function($__dollar____unused) use ($functorWithIndexCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorWithIndexCoproduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use ($foldableWithIndexCoproduct1) {
  $__fn = function($__dollar____unused) use ($foldableWithIndexCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableWithIndexCoproduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use ($traversableCoproduct1) {
  $__fn = function($__dollar____unused) use ($traversableCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $traversableCoproduct1;
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
$GLOBALS['Data_TraversableWithIndex_traversableWithIndexCoproduct'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traversableWithIndexCoproduct';



// Data_TraversableWithIndex_traversableWithIndexCompose
function Data_TraversableWithIndex_traversableWithIndexCompose($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traversableWithIndexCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_FunctorWithIndex_compose = ($GLOBALS['Data_FunctorWithIndex_compose'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_compose'));
$__global_Data_Tuple_curry = ($GLOBALS['Data_Tuple_curry'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_curry'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__global_Data_FoldableWithIndex_compose = ($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose'));
$__global_Data_Functor_Compose_Compose = ($GLOBALS['Data_Functor_Compose_Compose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_Compose'));
$__global_Data_Traversable_identity = ($GLOBALS['Data_Traversable_identity'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_identity'));
$__global_Data_TraversableWithIndex_compose = ($GLOBALS['Data_TraversableWithIndex_compose'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_compose'));
$__case_0 = $dictTraversableWithIndex;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverseWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$traverseWithIndex1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->mapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$mapWithIndex1 = $__case_res_1;
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_2;
$functorCompose = (function() use ($map) {
  $__fn = function($dictFunctor1) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctor1;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_3;
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
$functorWithIndexCompose = (function() use ($functorCompose, $__global_Prim_undefined, $mapWithIndex1, $__global_Data_FunctorWithIndex_compose, $__global_Data_Tuple_curry) {
  $__fn = function($dictFunctorWithIndex1) use ($functorCompose, $__global_Prim_undefined, $mapWithIndex1, $__global_Data_FunctorWithIndex_compose, $__global_Data_Tuple_curry, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctorWithIndex1;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->mapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$mapWithIndex2 = $__case_res_4;
$functorCompose1 = ($functorCompose)((($dictFunctorWithIndex1)->Functor0)($__global_Prim_undefined));
    $__res = (object)["mapWithIndex" => (function() use ($mapWithIndex1, $__global_Data_FunctorWithIndex_compose, $mapWithIndex2, $__global_Data_Tuple_curry) {
  $__body = function($f, $v) use ($mapWithIndex1, $__global_Data_FunctorWithIndex_compose, $mapWithIndex2, $__global_Data_Tuple_curry) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($mapWithIndex1)(($__global_Data_FunctorWithIndex_compose)($mapWithIndex2, ($__global_Data_Tuple_curry)($f1)), $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($mapWithIndex1, $__global_Data_FunctorWithIndex_compose, $mapWithIndex2, $__global_Data_Tuple_curry, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorCompose1) {
  $__fn = function($__dollar____unused) use ($functorCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorCompose1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->foldrWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldrWithIndex1 = $__case_res_5;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->foldlWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldlWithIndex1 = $__case_res_6;
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->foldMapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldMapWithIndex1 = $__case_res_7;
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_8;
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_9;
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_10;
$foldableCompose = (function() use ($foldr3, $__global_Data_Function_flip, $foldl3, $foldMap2) {
  $__fn = function($dictFoldable1) use ($foldr3, $__global_Data_Function_flip, $foldl3, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable1;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr4 = $__case_res_11;
$__case_0 = $dictFoldable1;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl4 = $__case_res_12;
$__case_0 = $dictFoldable1;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap3 = $__case_res_13;
    $__res = (object)["foldr" => (function() use ($foldr3, $__global_Data_Function_flip, $foldr4) {
  $__body = function($f, $i, $v) use ($foldr3, $__global_Data_Function_flip, $foldr4) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
return ($foldr3)(($__global_Data_Function_flip)(($foldr4)($f1)), $i1, $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldr3, $__global_Data_Function_flip, $foldr4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($foldl3, $foldl4) {
  $__body = function($f, $i, $v) use ($foldl3, $foldl4) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
return ($foldl3)(($foldl4)($f1), $i1, $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldl3, $foldl4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap2, $foldMap3) {
  $__fn = function($dictMonoid) use ($foldMap2, $foldMap3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap4 = ($foldMap2)($dictMonoid);
$foldMap5 = ($foldMap3)($dictMonoid);
    $__res = (function() use ($foldMap4, $foldMap5) {
  $__body = function($f, $v) use ($foldMap4, $foldMap5) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($foldMap4)(($foldMap5)($f1), $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMap4, $foldMap5, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
$foldableWithIndexCompose = (function() use ($foldableCompose, $__global_Prim_undefined, $foldrWithIndex1, $__global_Data_Function_flip, $__global_Data_Tuple_curry, $foldlWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldMapWithIndex1) {
  $__fn = function($dictFoldableWithIndex1) use ($foldableCompose, $__global_Prim_undefined, $foldrWithIndex1, $__global_Data_Function_flip, $__global_Data_Tuple_curry, $foldlWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldableWithIndex1;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->foldrWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldrWithIndex2 = $__case_res_14;
$__case_0 = $dictFoldableWithIndex1;
$__case_res_15 = null;
if (true) {
$v = $__case_0;
$__case_res_15 = ($v)->foldlWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldlWithIndex2 = $__case_res_15;
$__case_0 = $dictFoldableWithIndex1;
$__case_res_16 = null;
if (true) {
$v = $__case_0;
$__case_res_16 = ($v)->foldMapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldMapWithIndex2 = $__case_res_16;
$foldableCompose1 = ($foldableCompose)((($dictFoldableWithIndex1)->Foldable0)($__global_Prim_undefined));
    $__res = (object)["foldrWithIndex" => (function() use ($foldrWithIndex1, $__global_Data_Function_flip, $foldrWithIndex2, $__global_Data_Tuple_curry) {
  $__body = function($f, $i, $v) use ($foldrWithIndex1, $__global_Data_Function_flip, $foldrWithIndex2, $__global_Data_Tuple_curry) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
return ($foldrWithIndex1)((function() use ($__global_Data_Function_flip, $foldrWithIndex2, $__global_Data_Tuple_curry, $f1) {
  $__fn = function($a) use ($__global_Data_Function_flip, $foldrWithIndex2, $__global_Data_Tuple_curry, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Function_flip)(($foldrWithIndex2)(($__global_Data_Tuple_curry)($f1, $a)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $i1, $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldrWithIndex1, $__global_Data_Function_flip, $foldrWithIndex2, $__global_Data_Tuple_curry, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use ($foldlWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex2, $__global_Data_Tuple_curry) {
  $__body = function($f, $i, $v) use ($foldlWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex2, $__global_Data_Tuple_curry) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
return ($foldlWithIndex1)(($__global_Data_FoldableWithIndex_compose)($foldlWithIndex2, ($__global_Data_Tuple_curry)($f1)), $i1, $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldlWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex2, $__global_Data_Tuple_curry, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($foldMapWithIndex1, $foldMapWithIndex2, $__global_Data_FoldableWithIndex_compose, $__global_Data_Tuple_curry) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, $foldMapWithIndex2, $__global_Data_FoldableWithIndex_compose, $__global_Data_Tuple_curry, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex3 = ($foldMapWithIndex1)($dictMonoid);
$foldMapWithIndex4 = ($foldMapWithIndex2)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex3, $__global_Data_FoldableWithIndex_compose, $foldMapWithIndex4, $__global_Data_Tuple_curry) {
  $__body = function($f, $v) use ($foldMapWithIndex3, $__global_Data_FoldableWithIndex_compose, $foldMapWithIndex4, $__global_Data_Tuple_curry) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($foldMapWithIndex3)(($__global_Data_FoldableWithIndex_compose)($foldMapWithIndex4, ($__global_Data_Tuple_curry)($f1)), $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMapWithIndex3, $__global_Data_FoldableWithIndex_compose, $foldMapWithIndex4, $__global_Data_Tuple_curry, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() use ($foldableCompose1) {
  $__fn = function($__dollar____unused) use ($foldableCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableCompose1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$__case_0 = $dict;
$__case_res_17 = null;
if (true) {
$v = $__case_0;
$__case_res_17 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse2 = $__case_res_17;
$__case_0 = $dict;
$__case_res_18 = null;
if (true) {
$v = $__case_0;
$__case_res_18 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_18;
$functorCompose = (function() use ($map) {
  $__fn = function($dictFunctor1) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFunctor1;
$__case_res_19 = null;
if (true) {
$v = $__case_0;
$__case_res_19 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map1 = $__case_res_19;
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
$__case_0 = $dict;
$__case_res_20 = null;
if (true) {
$v = $__case_0;
$__case_res_20 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_20;
$__case_0 = $dict;
$__case_res_21 = null;
if (true) {
$v = $__case_0;
$__case_res_21 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_21;
$__case_0 = $dict;
$__case_res_22 = null;
if (true) {
$v = $__case_0;
$__case_res_22 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_22;
$foldableCompose = (function() use ($foldr3, $__global_Data_Function_flip, $foldl3, $foldMap2) {
  $__fn = function($dictFoldable1) use ($foldr3, $__global_Data_Function_flip, $foldl3, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictFoldable1;
$__case_res_23 = null;
if (true) {
$v = $__case_0;
$__case_res_23 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr4 = $__case_res_23;
$__case_0 = $dictFoldable1;
$__case_res_24 = null;
if (true) {
$v = $__case_0;
$__case_res_24 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl4 = $__case_res_24;
$__case_0 = $dictFoldable1;
$__case_res_25 = null;
if (true) {
$v = $__case_0;
$__case_res_25 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap3 = $__case_res_25;
    $__res = (object)["foldr" => (function() use ($foldr3, $__global_Data_Function_flip, $foldr4) {
  $__body = function($f, $i, $v) use ($foldr3, $__global_Data_Function_flip, $foldr4) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
return ($foldr3)(($__global_Data_Function_flip)(($foldr4)($f1)), $i1, $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldr3, $__global_Data_Function_flip, $foldr4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($foldl3, $foldl4) {
  $__body = function($f, $i, $v) use ($foldl3, $foldl4) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
return ($foldl3)(($foldl4)($f1), $i1, $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldl3, $foldl4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap2, $foldMap3) {
  $__fn = function($dictMonoid) use ($foldMap2, $foldMap3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap4 = ($foldMap2)($dictMonoid);
$foldMap5 = ($foldMap3)($dictMonoid);
    $__res = (function() use ($foldMap4, $foldMap5) {
  $__body = function($f, $v) use ($foldMap4, $foldMap5) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($foldMap4)(($foldMap5)($f1), $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMap4, $foldMap5, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
$traversableCompose = (function() use ($functorCompose, $__global_Prim_undefined, $foldableCompose, $dict, $traverse2, $__global_Data_Functor_Compose_Compose, $__global_Data_Traversable_identity) {
  $__fn = function($dictTraversable1) use ($functorCompose, $__global_Prim_undefined, $foldableCompose, $dict, $traverse2, $__global_Data_Functor_Compose_Compose, $__global_Data_Traversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictTraversable1;
$__case_res_26 = null;
if (true) {
$v = $__case_0;
$__case_res_26 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse3 = $__case_res_26;
$functorCompose1 = ($functorCompose)((($dictTraversable1)->Functor0)($__global_Prim_undefined));
$foldableCompose1 = ($foldableCompose)((($dictTraversable1)->Foldable1)($__global_Prim_undefined));
    $__res = (object)["traverse" => (function() use ($dict, $traverse2, $traverse3, $__global_Data_Functor_Compose_Compose) {
  $__fn = function($dictApplicative) use ($dict, $traverse2, $traverse3, $__global_Data_Functor_Compose_Compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_27 = null;
if (true) {
$v = $__case_0;
$__case_res_27 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_27;
$traverse4 = ($traverse2)($dictApplicative);
$traverse5 = ($traverse3)($dictApplicative);
    $__res = (function() use ($map, $__global_Data_Functor_Compose_Compose, $traverse4, $traverse5) {
  $__body = function($f, $v) use ($map, $__global_Data_Functor_Compose_Compose, $traverse4, $traverse5) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($map)($__global_Data_Functor_Compose_Compose, ($traverse4)(($traverse5)($f1), $fga));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__global_Data_Functor_Compose_Compose, $traverse4, $traverse5, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequence" => (function() use ($dict, $__global_Data_Traversable_identity) {
  $__fn = function($dictApplicative) use ($dict, $__global_Data_Traversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_28 = null;
if (true) {
$v = $__case_0;
$__case_res_28 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__case_res_28)($dictApplicative, $__global_Data_Traversable_identity);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorCompose1) {
  $__fn = function($__dollar____unused) use ($functorCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorCompose1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use ($foldableCompose1) {
  $__fn = function($__dollar____unused) use ($foldableCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableCompose1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($functorWithIndexCompose, $__global_Prim_undefined, $foldableWithIndexCompose, $traversableCompose, $dict, $traverseWithIndex1, $__global_Data_Functor_Compose_Compose, $__global_Data_TraversableWithIndex_compose, $__global_Data_Tuple_curry) {
  $__fn = function($dictTraversableWithIndex1) use ($functorWithIndexCompose, $__global_Prim_undefined, $foldableWithIndexCompose, $traversableCompose, $dict, $traverseWithIndex1, $__global_Data_Functor_Compose_Compose, $__global_Data_TraversableWithIndex_compose, $__global_Data_Tuple_curry, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictTraversableWithIndex1;
$__case_res_29 = null;
if (true) {
$v = $__case_0;
$__case_res_29 = ($v)->traverseWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$traverseWithIndex2 = $__case_res_29;
$functorWithIndexCompose1 = ($functorWithIndexCompose)((($dictTraversableWithIndex1)->FunctorWithIndex0)($__global_Prim_undefined));
$foldableWithIndexCompose1 = ($foldableWithIndexCompose)((($dictTraversableWithIndex1)->FoldableWithIndex1)($__global_Prim_undefined));
$traversableCompose1 = ($traversableCompose)((($dictTraversableWithIndex1)->Traversable2)($__global_Prim_undefined));
    $__res = (object)["traverseWithIndex" => (function() use ($dict, $traverseWithIndex1, $traverseWithIndex2, $__global_Data_Functor_Compose_Compose, $__global_Data_TraversableWithIndex_compose, $__global_Data_Tuple_curry) {
  $__fn = function($dictApplicative) use ($dict, $traverseWithIndex1, $traverseWithIndex2, $__global_Data_Functor_Compose_Compose, $__global_Data_TraversableWithIndex_compose, $__global_Data_Tuple_curry, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_30 = null;
if (true) {
$v = $__case_0;
$__case_res_30 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_30;
$traverseWithIndex3 = ($traverseWithIndex1)($dictApplicative);
$traverseWithIndex4 = ($traverseWithIndex2)($dictApplicative);
    $__res = (function() use ($map, $__global_Data_Functor_Compose_Compose, $traverseWithIndex3, $__global_Data_TraversableWithIndex_compose, $traverseWithIndex4, $__global_Data_Tuple_curry) {
  $__body = function($f, $v) use ($map, $__global_Data_Functor_Compose_Compose, $traverseWithIndex3, $__global_Data_TraversableWithIndex_compose, $traverseWithIndex4, $__global_Data_Tuple_curry) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($map)($__global_Data_Functor_Compose_Compose, ($traverseWithIndex3)(($__global_Data_TraversableWithIndex_compose)($traverseWithIndex4, ($__global_Data_Tuple_curry)($f1)), $fga));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__global_Data_Functor_Compose_Compose, $traverseWithIndex3, $__global_Data_TraversableWithIndex_compose, $traverseWithIndex4, $__global_Data_Tuple_curry, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() use ($functorWithIndexCompose1) {
  $__fn = function($__dollar____unused) use ($functorWithIndexCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorWithIndexCompose1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use ($foldableWithIndexCompose1) {
  $__fn = function($__dollar____unused) use ($foldableWithIndexCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableWithIndexCompose1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use ($traversableCompose1) {
  $__fn = function($__dollar____unused) use ($traversableCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $traversableCompose1;
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
$GLOBALS['Data_TraversableWithIndex_traversableWithIndexCompose'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traversableWithIndexCompose';


// Data_TraversableWithIndex_traversableWithIndexApp
function Data_TraversableWithIndex_traversableWithIndexApp($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traversableWithIndexApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_App_App = ($GLOBALS['Data_Functor_App_App'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_App'));
$__case_0 = $dictTraversableWithIndex;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverseWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$traverseWithIndex1 = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->mapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$mapWithIndex1 = $__case_res_1;
$functorApp = $dictFunctor;
$functorWithIndexApp = (object)["mapWithIndex" => (function() use ($mapWithIndex1) {
  $__body = function($f, $v) use ($mapWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($mapWithIndex1)($f1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($mapWithIndex1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($dictFunctor) {
  $__fn = function($__dollar____unused) use ($dictFunctor, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictFunctor;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_2 = null;
if (true) {
$v = $__case_0;
$__case_res_2 = ($v)->foldrWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldrWithIndex1 = $__case_res_2;
$__case_0 = $dict;
$__case_res_3 = null;
if (true) {
$v = $__case_0;
$__case_res_3 = ($v)->foldlWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldlWithIndex1 = $__case_res_3;
$__case_0 = $dict;
$__case_res_4 = null;
if (true) {
$v = $__case_0;
$__case_res_4 = ($v)->foldMapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$foldMapWithIndex1 = $__case_res_4;
$__case_0 = $dict;
$__case_res_5 = null;
if (true) {
$v = $__case_0;
$__case_res_5 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_5;
$__case_0 = $dict;
$__case_res_6 = null;
if (true) {
$v = $__case_0;
$__case_res_6 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_6;
$__case_0 = $dict;
$__case_res_7 = null;
if (true) {
$v = $__case_0;
$__case_res_7 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_7;
$foldableApp = (object)["foldr" => (function() use ($foldr3) {
  $__body = function($f, $i, $v) use ($foldr3) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$x = $__case_2;
return ($foldr3)($f1, $i1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldr3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($foldl3) {
  $__body = function($f, $i, $v) use ($foldl3) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$x = $__case_2;
return ($foldl3)($f1, $i1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldl3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap2) {
  $__fn = function($dictMonoid) use ($foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap3 = ($foldMap2)($dictMonoid);
    $__res = (function() use ($foldMap3) {
  $__body = function($f, $v) use ($foldMap3) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($foldMap3)($f1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMap3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$foldableWithIndexApp = (object)["foldrWithIndex" => (function() use ($foldrWithIndex1) {
  $__body = function($f, $z, $v) use ($foldrWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($foldrWithIndex1)($f1, $z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldrWithIndex1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use ($foldlWithIndex1) {
  $__body = function($f, $z, $v) use ($foldlWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($foldlWithIndex1)($f1, $z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldlWithIndex1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($foldMapWithIndex1) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex2 = ($foldMapWithIndex1)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex2) {
  $__body = function($f, $v) use ($foldMapWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($foldMapWithIndex2)($f1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMapWithIndex2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() use ($foldableApp) {
  $__fn = function($__dollar____unused) use ($foldableApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableApp;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$__case_0 = $dict;
$__case_res_8 = null;
if (true) {
$v = $__case_0;
$__case_res_8 = ($v)->traverse;
} else {
throw new \Exception("Pattern match failure");
};
$traverse2 = $__case_res_8;
$__case_0 = $dict;
$__case_res_9 = null;
if (true) {
$v = $__case_0;
$__case_res_9 = ($v)->sequence;
} else {
throw new \Exception("Pattern match failure");
};
$sequence2 = $__case_res_9;
$functorApp = $dictFunctor;
$__case_0 = $dict;
$__case_res_10 = null;
if (true) {
$v = $__case_0;
$__case_res_10 = ($v)->foldr;
} else {
throw new \Exception("Pattern match failure");
};
$foldr3 = $__case_res_10;
$__case_0 = $dict;
$__case_res_11 = null;
if (true) {
$v = $__case_0;
$__case_res_11 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl3 = $__case_res_11;
$__case_0 = $dict;
$__case_res_12 = null;
if (true) {
$v = $__case_0;
$__case_res_12 = ($v)->foldMap;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap2 = $__case_res_12;
$foldableApp = (object)["foldr" => (function() use ($foldr3) {
  $__body = function($f, $i, $v) use ($foldr3) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$x = $__case_2;
return ($foldr3)($f1, $i1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldr3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($foldl3) {
  $__body = function($f, $i, $v) use ($foldl3) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$x = $__case_2;
return ($foldl3)($f1, $i1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldl3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap2) {
  $__fn = function($dictMonoid) use ($foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMap3 = ($foldMap2)($dictMonoid);
    $__res = (function() use ($foldMap3) {
  $__body = function($f, $v) use ($foldMap3) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($foldMap3)($f1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMap3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
$traversableApp = (object)["traverse" => (function() use ($dict, $traverse2, $__global_Data_Functor_App_App) {
  $__fn = function($dictApplicative) use ($dict, $traverse2, $__global_Data_Functor_App_App, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_13 = null;
if (true) {
$v = $__case_0;
$__case_res_13 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_13;
$traverse3 = ($traverse2)($dictApplicative);
    $__res = (function() use ($map, $__global_Data_Functor_App_App, $traverse3) {
  $__body = function($f, $v) use ($map, $__global_Data_Functor_App_App, $traverse3) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($__global_Data_Functor_App_App, ($traverse3)($f1, $x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__global_Data_Functor_App_App, $traverse3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequence" => (function() use ($dict, $sequence2, $__global_Data_Functor_App_App) {
  $__fn = function($dictApplicative) use ($dict, $sequence2, $__global_Data_Functor_App_App, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_14 = null;
if (true) {
$v = $__case_0;
$__case_res_14 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_14;
$sequence3 = ($sequence2)($dictApplicative);
    $__res = (function() use ($map, $__global_Data_Functor_App_App, $sequence3) {
  $__body = function($v) use ($map, $__global_Data_Functor_App_App, $sequence3) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($map)($__global_Data_Functor_App_App, ($sequence3)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $__global_Data_Functor_App_App, $sequence3, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($dictFunctor) {
  $__fn = function($__dollar____unused) use ($dictFunctor, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictFunctor;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use ($foldableApp) {
  $__fn = function($__dollar____unused) use ($foldableApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableApp;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["traverseWithIndex" => (function() use ($dict, $traverseWithIndex1, $__global_Data_Functor_App_App) {
  $__fn = function($dictApplicative) use ($dict, $traverseWithIndex1, $__global_Data_Functor_App_App, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_15 = null;
if (true) {
$v = $__case_0;
$__case_res_15 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
$map = $__case_res_15;
$traverseWithIndex2 = ($traverseWithIndex1)($dictApplicative);
    $__res = (function() use ($map, $__global_Data_Functor_App_App, $traverseWithIndex2) {
  $__body = function($f, $v) use ($map, $__global_Data_Functor_App_App, $traverseWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($__global_Data_Functor_App_App, ($traverseWithIndex2)($f1, $x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__global_Data_Functor_App_App, $traverseWithIndex2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() use ($functorWithIndexApp) {
  $__fn = function($__dollar____unused) use ($functorWithIndexApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorWithIndexApp;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use ($foldableWithIndexApp) {
  $__fn = function($__dollar____unused) use ($foldableWithIndexApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableWithIndexApp;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use ($traversableApp) {
  $__fn = function($__dollar____unused) use ($traversableApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $traversableApp;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_traversableWithIndexApp'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traversableWithIndexApp';


// Data_TraversableWithIndex_mapAccumRWithIndex
function Data_TraversableWithIndex_mapAccumRWithIndex($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_mapAccumRWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_Accum_Internal_applicativeStateR = ($GLOBALS['Data_Traversable_Accum_Internal_applicativeStateR'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_applicativeStateR'));
$__global_Data_Traversable_Accum_Internal_stateR = ($GLOBALS['Data_Traversable_Accum_Internal_stateR'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_stateR'));
$__case_0 = $dictTraversableWithIndex;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverseWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$traverseWithIndex1 = ($__case_res_0)($__global_Data_Traversable_Accum_Internal_applicativeStateR);
    $__res = (function() use ($__global_Data_Traversable_Accum_Internal_stateR, $traverseWithIndex1) {
  $__fn = function($f, $s0 = null, $xs = null) use ($__global_Data_Traversable_Accum_Internal_stateR, $traverseWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $s0, &$__fn) { return $__fn($f, $s0, $xs); };
    if ($__num === 1) return function($s0, $xs = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $s0, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $s0, &$__fn) { return $__fn($f, $s0, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Traversable_Accum_Internal_stateR)(($traverseWithIndex1)((function() use ($f) {
  $__fn = function($i, $a = null, $s = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($i, $a, &$__fn) { return $__fn($i, $a, $s); };
    if ($__num === 1) return function($a, $s = null) use ($i, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $a, $s);
      if ($__num2 === 1) return function($s) use ($i, $a, &$__fn) { return $__fn($i, $a, $s); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($f)($i, $s, $a);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $xs), $s0);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_mapAccumRWithIndex'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_mapAccumRWithIndex';

// Data_TraversableWithIndex_scanrWithIndex
function Data_TraversableWithIndex_scanrWithIndex($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_scanrWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_Accum_Internal_applicativeStateR = ($GLOBALS['Data_Traversable_Accum_Internal_applicativeStateR'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_applicativeStateR'));
$__global_Data_Traversable_Accum_Internal_stateR = ($GLOBALS['Data_Traversable_Accum_Internal_stateR'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_stateR'));
$__case_0 = $dictTraversableWithIndex;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverseWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$traverseWithIndex1 = ($__case_res_0)($__global_Data_Traversable_Accum_Internal_applicativeStateR);
$mapAccumRWithIndex1 = (function() use ($__global_Data_Traversable_Accum_Internal_stateR, $traverseWithIndex1) {
  $__fn = function($f, $s0 = null, $xs = null) use ($__global_Data_Traversable_Accum_Internal_stateR, $traverseWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $s0, &$__fn) { return $__fn($f, $s0, $xs); };
    if ($__num === 1) return function($s0, $xs = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $s0, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $s0, &$__fn) { return $__fn($f, $s0, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Traversable_Accum_Internal_stateR)(($traverseWithIndex1)((function() use ($f) {
  $__fn = function($i, $a = null, $s = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($i, $a, &$__fn) { return $__fn($i, $a, $s); };
    if ($__num === 1) return function($a, $s = null) use ($i, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $a, $s);
      if ($__num2 === 1) return function($s) use ($i, $a, &$__fn) { return $__fn($i, $a, $s); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($f)($i, $s, $a);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $xs), $s0);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($mapAccumRWithIndex1) {
  $__fn = function($f, $b0 = null, $xs = null) use ($mapAccumRWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $b0, &$__fn) { return $__fn($f, $b0, $xs); };
    if ($__num === 1) return function($b0, $xs = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b0, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $b0, &$__fn) { return $__fn($f, $b0, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = (($mapAccumRWithIndex1)((function() use ($f) {
  $__fn = function($i, $b = null, $a = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($a) use ($i, $b, &$__fn) { return $__fn($i, $b, $a); };
    if ($__num === 1) return function($b, $a = null) use ($i, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $b, $a);
      if ($__num2 === 1) return function($a) use ($i, $b, &$__fn) { return $__fn($i, $b, $a); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$b__prime__ = ($f)($i, $a, $b);
    $__res = (object)["accum" => $b__prime__, "value" => $b__prime__];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $b0, $xs))->value;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_scanrWithIndex'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_scanrWithIndex';

// Data_TraversableWithIndex_mapAccumLWithIndex
function Data_TraversableWithIndex_mapAccumLWithIndex($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_mapAccumLWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_Accum_Internal_applicativeStateL = ($GLOBALS['Data_Traversable_Accum_Internal_applicativeStateL'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_applicativeStateL'));
$__global_Data_Traversable_Accum_Internal_stateL = ($GLOBALS['Data_Traversable_Accum_Internal_stateL'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_stateL'));
$__case_0 = $dictTraversableWithIndex;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverseWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$traverseWithIndex1 = ($__case_res_0)($__global_Data_Traversable_Accum_Internal_applicativeStateL);
    $__res = (function() use ($__global_Data_Traversable_Accum_Internal_stateL, $traverseWithIndex1) {
  $__fn = function($f, $s0 = null, $xs = null) use ($__global_Data_Traversable_Accum_Internal_stateL, $traverseWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $s0, &$__fn) { return $__fn($f, $s0, $xs); };
    if ($__num === 1) return function($s0, $xs = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $s0, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $s0, &$__fn) { return $__fn($f, $s0, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Traversable_Accum_Internal_stateL)(($traverseWithIndex1)((function() use ($f) {
  $__fn = function($i, $a = null, $s = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($i, $a, &$__fn) { return $__fn($i, $a, $s); };
    if ($__num === 1) return function($a, $s = null) use ($i, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $a, $s);
      if ($__num2 === 1) return function($s) use ($i, $a, &$__fn) { return $__fn($i, $a, $s); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($f)($i, $s, $a);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $xs), $s0);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_mapAccumLWithIndex'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_mapAccumLWithIndex';

// Data_TraversableWithIndex_scanlWithIndex
function Data_TraversableWithIndex_scanlWithIndex($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_scanlWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Traversable_Accum_Internal_applicativeStateL = ($GLOBALS['Data_Traversable_Accum_Internal_applicativeStateL'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_applicativeStateL'));
$__global_Data_Traversable_Accum_Internal_stateL = ($GLOBALS['Data_Traversable_Accum_Internal_stateL'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_stateL'));
$__case_0 = $dictTraversableWithIndex;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverseWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
$traverseWithIndex1 = ($__case_res_0)($__global_Data_Traversable_Accum_Internal_applicativeStateL);
$mapAccumLWithIndex1 = (function() use ($__global_Data_Traversable_Accum_Internal_stateL, $traverseWithIndex1) {
  $__fn = function($f, $s0 = null, $xs = null) use ($__global_Data_Traversable_Accum_Internal_stateL, $traverseWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $s0, &$__fn) { return $__fn($f, $s0, $xs); };
    if ($__num === 1) return function($s0, $xs = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $s0, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $s0, &$__fn) { return $__fn($f, $s0, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Traversable_Accum_Internal_stateL)(($traverseWithIndex1)((function() use ($f) {
  $__fn = function($i, $a = null, $s = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($i, $a, &$__fn) { return $__fn($i, $a, $s); };
    if ($__num === 1) return function($a, $s = null) use ($i, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $a, $s);
      if ($__num2 === 1) return function($s) use ($i, $a, &$__fn) { return $__fn($i, $a, $s); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($f)($i, $s, $a);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $xs), $s0);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($mapAccumLWithIndex1) {
  $__fn = function($f, $b0 = null, $xs = null) use ($mapAccumLWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $b0, &$__fn) { return $__fn($f, $b0, $xs); };
    if ($__num === 1) return function($b0, $xs = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b0, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $b0, &$__fn) { return $__fn($f, $b0, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = (($mapAccumLWithIndex1)((function() use ($f) {
  $__fn = function($i, $b = null, $a = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($a) use ($i, $b, &$__fn) { return $__fn($i, $b, $a); };
    if ($__num === 1) return function($b, $a = null) use ($i, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $b, $a);
      if ($__num2 === 1) return function($a) use ($i, $b, &$__fn) { return $__fn($i, $b, $a); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$b__prime__ = ($f)($i, $b, $a);
    $__res = (object)["accum" => $b__prime__, "value" => $b__prime__];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $b0, $xs))->value;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_scanlWithIndex'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_scanlWithIndex';

// Data_TraversableWithIndex_forWithIndex
function Data_TraversableWithIndex_forWithIndex($dictApplicative, $dictTraversableWithIndex = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_forWithIndex';
  if ($__num < 2) {
    if ($__num === 1) return function($dictTraversableWithIndex) use ($dictApplicative, $__fn) { return $__fn($dictApplicative, $dictTraversableWithIndex); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__case_0 = $dictTraversableWithIndex;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->traverseWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Function_flip)(($__case_res_0)($dictApplicative));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_forWithIndex'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_forWithIndex';

