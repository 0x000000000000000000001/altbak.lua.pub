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
      case 'Data_TraversableWithIndex_traversableWithIndexTuple': $v = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$x = ($__case_1)->v0;
$y = ($__case_1)->v1;
return ($map)((($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($x), ($f1)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), $y));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($map, $__body, &$__fn) {
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
    $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexTuple'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexTuple'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexTuple'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexTuple'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Traversable_traversableTuple'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableTuple'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_TraversableWithIndex_traversableWithIndexMultiplicative': $v = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverse8 = (($GLOBALS['Data_TraversableWithIndex_traverse'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse')))($dictApplicative);
    $__res = (function() use ($traverse8) {
  $__fn = function($f) use ($traverse8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse8)(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
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
    $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexMultiplicative'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexMultiplicative'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexMultiplicative'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexMultiplicative'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Traversable_traversableMultiplicative'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableMultiplicative'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_TraversableWithIndex_traversableWithIndexMaybe': $v = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverse8 = (($GLOBALS['Data_TraversableWithIndex_traverse1'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse1')))($dictApplicative);
    $__res = (function() use ($traverse8) {
  $__fn = function($f) use ($traverse8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse8)(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
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
    $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexMaybe'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexMaybe'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexMaybe'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexMaybe'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Traversable_traversableMaybe'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableMaybe'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_TraversableWithIndex_traversableWithIndexLast': $v = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverse8 = (($GLOBALS['Data_TraversableWithIndex_traverse2'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse2')))($dictApplicative);
    $__res = (function() use ($traverse8) {
  $__fn = function($f) use ($traverse8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse8)(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
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
    $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexLast'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexLast'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexLast'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexLast'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Traversable_traversableLast'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableLast'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_TraversableWithIndex_traversableWithIndexIdentity': $v = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)(($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity')), ($f1)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), $x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__body, &$__fn) {
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
    $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexIdentity'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexIdentity'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexIdentity'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexIdentity'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Traversable_traversableIdentity'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableIdentity'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_TraversableWithIndex_traversableWithIndexFirst': $v = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverse8 = (($GLOBALS['Data_TraversableWithIndex_traverse3'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse3')))($dictApplicative);
    $__res = (function() use ($traverse8) {
  $__fn = function($f) use ($traverse8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse8)(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
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
    $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexFirst'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexFirst'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexFirst'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexFirst'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Traversable_traversableFirst'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableFirst'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_TraversableWithIndex_traversableWithIndexEither': $v = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))($dictApplicative);
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($pure, $map) {
  $__body = function($v, $v1) use ($pure, $map) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "Left":
$x = ($__case_1)->v0;
return ($pure)((($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')))($x));
break;
case "Right":
$f = $__case_0;
$x = ($__case_1)->v0;
return ($map)(($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')), ($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), $x));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($pure, $map, $__body, &$__fn) {
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
    $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexEither'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexEither'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexEither'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexEither'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Traversable_traversableEither'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableEither'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_TraversableWithIndex_traversableWithIndexDual': $v = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverse8 = (($GLOBALS['Data_TraversableWithIndex_traverse4'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse4')))($dictApplicative);
    $__res = (function() use ($traverse8) {
  $__fn = function($f) use ($traverse8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse8)(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
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
    $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexDual'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexDual'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexDual'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexDual'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Traversable_traversableDual'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableDual'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_TraversableWithIndex_traversableWithIndexDisj': $v = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverse8 = (($GLOBALS['Data_TraversableWithIndex_traverse5'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse5')))($dictApplicative);
    $__res = (function() use ($traverse8) {
  $__fn = function($f) use ($traverse8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse8)(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
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
    $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexDisj'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexDisj'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexDisj'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexDisj'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Traversable_traversableDisj'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableDisj'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_TraversableWithIndex_traversableWithIndexConst': $v = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))($dictApplicative);
    $__res = (function() use ($pure) {
  $__body = function($v, $v1) use ($pure) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return ($pure)((($GLOBALS['Data_Const_Const'] ?? \Data\Const\phpurs_eval_thunk('Data_Const_Const')))($x));
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
    $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexConst'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexConst'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexConst'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexConst'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Traversable_traversableConst'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableConst'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_TraversableWithIndex_traversableWithIndexConj': $v = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverse8 = (($GLOBALS['Data_TraversableWithIndex_traverse6'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse6')))($dictApplicative);
    $__res = (function() use ($traverse8) {
  $__fn = function($f) use ($traverse8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse8)(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
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
    $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexConj'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexConj'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexConj'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexConj'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Traversable_traversableConj'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableConj'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_TraversableWithIndex_traversableWithIndexArray': $v = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_TraversableWithIndex_traverseWithIndexDefault'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverseWithIndexDefault')))(($GLOBALS['Data_TraversableWithIndex_traversableWithIndexArray'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traversableWithIndexArray')), $dictApplicative);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexArray'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexArray'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexArray'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexArray'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Traversable_traversableArray'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableArray'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_TraversableWithIndex_traversableWithIndexAdditive': $v = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverse8 = (($GLOBALS['Data_TraversableWithIndex_traverse7'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse7')))($dictApplicative);
    $__res = (function() use ($traverse8) {
  $__fn = function($f) use ($traverse8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverse8)(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
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
    $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexAdditive'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexAdditive'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexAdditive'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexAdditive'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Traversable_traversableAdditive'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableAdditive'));
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


// Data_TraversableWithIndex_compose
function Data_TraversableWithIndex_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_compose';
  if ($__num < 3) {
    if ($__num === 2) return function($x) use ($f, $g, $__fn) { return $__fn($f, $g, $x); };
    if ($__num === 1) return function($g, $x = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $x);
      if ($__num2 === 1) return function($x) use ($f, $g, $__fn) { return $__fn($f, $g, $x); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($f)(($g)($x));
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_compose'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_compose';

// Data_TraversableWithIndex_traverse
function Data_TraversableWithIndex_traverse($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)(($GLOBALS['Data_Monoid_Multiplicative_Multiplicative'] ?? \Data\Monoid\Multiplicative\phpurs_eval_thunk('Data_Monoid_Multiplicative_Multiplicative')), ($f1)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_traverse'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traverse';

// Data_TraversableWithIndex_traverse1
function Data_TraversableWithIndex_traverse1($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traverse1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))($dictApplicative);
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($pure, $map) {
  $__body = function($v, $v1) use ($pure, $map) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "Nothing":
return ($pure)(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing')));
break;
case "Just":
$f = $__case_0;
$x = ($__case_1)->v0;
return ($map)(($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')), ($f)($x));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($pure, $map, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_traverse1'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traverse1';

// Data_TraversableWithIndex_traverse2
function Data_TraversableWithIndex_traverse2($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traverse2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traverse2 = (($GLOBALS['Data_Traversable_traverse1'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traverse1')))($dictApplicative);
    $__res = (function() use ($map, $traverse2) {
  $__body = function($f, $v) use ($map, $traverse2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)(($GLOBALS['Data_Maybe_Last_Last'] ?? \Data\Maybe\Last\phpurs_eval_thunk('Data_Maybe_Last_Last')), ($traverse2)($f1, $x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $traverse2, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_traverse2'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traverse2';

// Data_TraversableWithIndex_traverse3
function Data_TraversableWithIndex_traverse3($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traverse3';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traverse2 = (($GLOBALS['Data_Traversable_traverse1'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traverse1')))($dictApplicative);
    $__res = (function() use ($map, $traverse2) {
  $__body = function($f, $v) use ($map, $traverse2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)(($GLOBALS['Data_Maybe_First_First'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_First')), ($traverse2)($f1, $x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $traverse2, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_traverse3'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traverse3';

// Data_TraversableWithIndex_traverse4
function Data_TraversableWithIndex_traverse4($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traverse4';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)(($GLOBALS['Data_Monoid_Dual_Dual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_Dual')), ($f1)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_traverse4'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traverse4';

// Data_TraversableWithIndex_traverse5
function Data_TraversableWithIndex_traverse5($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traverse5';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)(($GLOBALS['Data_Monoid_Disj_Disj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_Disj')), ($f1)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_traverse5'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traverse5';

// Data_TraversableWithIndex_traverse6
function Data_TraversableWithIndex_traverse6($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traverse6';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)(($GLOBALS['Data_Monoid_Conj_Conj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_Conj')), ($f1)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_traverse6'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traverse6';

// Data_TraversableWithIndex_traverse7
function Data_TraversableWithIndex_traverse7($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traverse7';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)(($GLOBALS['Data_Monoid_Additive_Additive'] ?? \Data\Monoid\Additive\phpurs_eval_thunk('Data_Monoid_Additive_Additive')), ($f1)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__body, &$__fn) {
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
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_traverse7'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traverse7';

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
$sequence = (($GLOBALS['Data_Traversable_sequence'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_sequence')))((($dictTraversableWithIndex)->Traversable2)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$mapWithIndex = (($GLOBALS['Data_FunctorWithIndex_mapWithIndex'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_mapWithIndex')))((($dictTraversableWithIndex)->FunctorWithIndex0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($sequence, $mapWithIndex) {
  $__fn = function($dictApplicative) use ($sequence, $mapWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sequence1 = ($sequence)($dictApplicative);
    $__res = (function() use ($sequence1, $mapWithIndex) {
  $__fn = function($f) use ($sequence1, $mapWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_TraversableWithIndex_compose'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_compose')))($sequence1, ($mapWithIndex)($f));
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
$traverseWithIndex1 = (($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverseWithIndex')))($dictTraversableWithIndex);
    $__res = (function() use ($traverseWithIndex1) {
  $__fn = function($dictApplicative) use ($traverseWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverseWithIndex2 = ($traverseWithIndex1)($dictApplicative);
    $__res = (function() use ($traverseWithIndex2) {
  $__fn = function($f) use ($traverseWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($traverseWithIndex2)((($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))($f));
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
$traverseWithIndex1 = (($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverseWithIndex')))($dictTraversableWithIndex);
$functorWithIndexProduct = (($GLOBALS['Data_FunctorWithIndex_functorWithIndexProduct'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexProduct')))((($dictTraversableWithIndex)->FunctorWithIndex0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$foldableWithIndexProduct = (($GLOBALS['Data_FoldableWithIndex_foldableWithIndexProduct'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexProduct')))((($dictTraversableWithIndex)->FoldableWithIndex1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traversableProduct = (($GLOBALS['Data_Traversable_traversableProduct'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableProduct')))((($dictTraversableWithIndex)->Traversable2)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($functorWithIndexProduct, $foldableWithIndexProduct, $traversableProduct, $traverseWithIndex1) {
  $__fn = function($dictTraversableWithIndex1) use ($functorWithIndexProduct, $foldableWithIndexProduct, $traversableProduct, $traverseWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverseWithIndex2 = (($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverseWithIndex')))($dictTraversableWithIndex1);
$functorWithIndexProduct1 = ($functorWithIndexProduct)((($dictTraversableWithIndex1)->FunctorWithIndex0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$foldableWithIndexProduct1 = ($foldableWithIndexProduct)((($dictTraversableWithIndex1)->FoldableWithIndex1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traversableProduct1 = ($traversableProduct)((($dictTraversableWithIndex1)->Traversable2)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() use ($traverseWithIndex1, $traverseWithIndex2) {
  $__fn = function($dictApplicative) use ($traverseWithIndex1, $traverseWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$lift2 = (($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2')))((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traverseWithIndex3 = ($traverseWithIndex1)($dictApplicative);
$traverseWithIndex4 = ($traverseWithIndex2)($dictApplicative);
    $__res = (function() use ($lift2, $traverseWithIndex3, $traverseWithIndex4) {
  $__body = function($f, $v) use ($lift2, $traverseWithIndex3, $traverseWithIndex4) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$fa = ($__case_1)->v0;
$ga = ($__case_1)->v1;
return ($lift2)(($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product')), ($traverseWithIndex3)((($GLOBALS['Data_TraversableWithIndex_compose'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_compose')))($f1, ($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left'))), $fa), ($traverseWithIndex4)((($GLOBALS['Data_TraversableWithIndex_compose'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_compose')))($f1, ($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right'))), $ga));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($lift2, $traverseWithIndex3, $traverseWithIndex4, $__body, &$__fn) {
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
})()]);
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
$traverseWithIndex1 = (($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverseWithIndex')))($dictTraversableWithIndex);
$functorWithIndexCoproduct = (($GLOBALS['Data_FunctorWithIndex_functorWithIndexCoproduct'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexCoproduct')))((($dictTraversableWithIndex)->FunctorWithIndex0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$foldableWithIndexCoproduct = (($GLOBALS['Data_FoldableWithIndex_foldableWithIndexCoproduct'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexCoproduct')))((($dictTraversableWithIndex)->FoldableWithIndex1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traversableCoproduct = (($GLOBALS['Data_Traversable_traversableCoproduct'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableCoproduct')))((($dictTraversableWithIndex)->Traversable2)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($functorWithIndexCoproduct, $foldableWithIndexCoproduct, $traversableCoproduct, $traverseWithIndex1) {
  $__fn = function($dictTraversableWithIndex1) use ($functorWithIndexCoproduct, $foldableWithIndexCoproduct, $traversableCoproduct, $traverseWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverseWithIndex2 = (($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverseWithIndex')))($dictTraversableWithIndex1);
$functorWithIndexCoproduct1 = ($functorWithIndexCoproduct)((($dictTraversableWithIndex1)->FunctorWithIndex0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$foldableWithIndexCoproduct1 = ($foldableWithIndexCoproduct)((($dictTraversableWithIndex1)->FoldableWithIndex1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traversableCoproduct1 = ($traversableCoproduct)((($dictTraversableWithIndex1)->Traversable2)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() use ($traverseWithIndex1, $traverseWithIndex2) {
  $__fn = function($dictApplicative) use ($traverseWithIndex1, $traverseWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traverseWithIndex3 = ($traverseWithIndex1)($dictApplicative);
$traverseWithIndex4 = ($traverseWithIndex2)($dictApplicative);
    $__res = (function() use ($map, $traverseWithIndex3, $traverseWithIndex4) {
  $__fn = function($f) use ($map, $traverseWithIndex3, $traverseWithIndex4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Functor_Coproduct_coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_coproduct')))((($GLOBALS['Data_TraversableWithIndex_compose'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_compose')))(($map)((($GLOBALS['Data_TraversableWithIndex_compose'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_compose')))(($GLOBALS['Data_Functor_Coproduct_Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_Coproduct')), ($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')))), ($traverseWithIndex3)((($GLOBALS['Data_TraversableWithIndex_compose'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_compose')))($f, ($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left'))))), (($GLOBALS['Data_TraversableWithIndex_compose'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_compose')))(($map)((($GLOBALS['Data_TraversableWithIndex_compose'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_compose')))(($GLOBALS['Data_Functor_Coproduct_Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_Coproduct')), ($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')))), ($traverseWithIndex4)((($GLOBALS['Data_TraversableWithIndex_compose'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_compose')))($f, ($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right'))))));
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
})()]);
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
$traverseWithIndex1 = (($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverseWithIndex')))($dictTraversableWithIndex);
$functorWithIndexCompose = (($GLOBALS['Data_FunctorWithIndex_functorWithIndexCompose'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexCompose')))((($dictTraversableWithIndex)->FunctorWithIndex0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$foldableWithIndexCompose = (($GLOBALS['Data_FoldableWithIndex_foldableWithIndexCompose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexCompose')))((($dictTraversableWithIndex)->FoldableWithIndex1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traversableCompose = (($GLOBALS['Data_Traversable_traversableCompose'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableCompose')))((($dictTraversableWithIndex)->Traversable2)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($functorWithIndexCompose, $foldableWithIndexCompose, $traversableCompose, $traverseWithIndex1) {
  $__fn = function($dictTraversableWithIndex1) use ($functorWithIndexCompose, $foldableWithIndexCompose, $traversableCompose, $traverseWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverseWithIndex2 = (($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverseWithIndex')))($dictTraversableWithIndex1);
$functorWithIndexCompose1 = ($functorWithIndexCompose)((($dictTraversableWithIndex1)->FunctorWithIndex0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$foldableWithIndexCompose1 = ($foldableWithIndexCompose)((($dictTraversableWithIndex1)->FoldableWithIndex1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traversableCompose1 = ($traversableCompose)((($dictTraversableWithIndex1)->Traversable2)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() use ($traverseWithIndex1, $traverseWithIndex2) {
  $__fn = function($dictApplicative) use ($traverseWithIndex1, $traverseWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traverseWithIndex3 = ($traverseWithIndex1)($dictApplicative);
$traverseWithIndex4 = ($traverseWithIndex2)($dictApplicative);
    $__res = (function() use ($map, $traverseWithIndex3, $traverseWithIndex4) {
  $__body = function($f, $v) use ($map, $traverseWithIndex3, $traverseWithIndex4) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($map)(($GLOBALS['Data_Functor_Compose_Compose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_Compose')), ($traverseWithIndex3)((($GLOBALS['Data_TraversableWithIndex_compose'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_compose')))($traverseWithIndex4, (($GLOBALS['Data_Tuple_curry'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_curry')))($f1)), $fga));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $traverseWithIndex3, $traverseWithIndex4, $__body, &$__fn) {
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
})()]);
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
$traverseWithIndex1 = (($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverseWithIndex')))($dictTraversableWithIndex);
$functorWithIndexApp = (($GLOBALS['Data_FunctorWithIndex_functorWithIndexApp'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexApp')))((($dictTraversableWithIndex)->FunctorWithIndex0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$foldableWithIndexApp = (($GLOBALS['Data_FoldableWithIndex_foldableWithIndexApp'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexApp')))((($dictTraversableWithIndex)->FoldableWithIndex1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traversableApp = (($GLOBALS['Data_Traversable_traversableApp'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableApp')))((($dictTraversableWithIndex)->Traversable2)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict')))((object)["traverseWithIndex" => (function() use ($traverseWithIndex1) {
  $__fn = function($dictApplicative) use ($traverseWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$traverseWithIndex2 = ($traverseWithIndex1)($dictApplicative);
    $__res = (function() use ($map, $traverseWithIndex2) {
  $__body = function($f, $v) use ($map, $traverseWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)(($GLOBALS['Data_Functor_App_App'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_App')), ($traverseWithIndex2)($f1, $x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $traverseWithIndex2, $__body, &$__fn) {
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
})()]);
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
$traverseWithIndex1 = (($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverseWithIndex')))($dictTraversableWithIndex, ($GLOBALS['Data_Traversable_Accum_Internal_applicativeStateR'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_applicativeStateR')));
    $__res = (function() use ($traverseWithIndex1) {
  $__fn = function($f, $s0 = null, $xs = null) use ($traverseWithIndex1, &$__fn) {
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
    $__res = (($GLOBALS['Data_Traversable_Accum_Internal_stateR'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_stateR')))(($traverseWithIndex1)((function() use ($f) {
  $__fn = function($i, $a = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($i, &$__fn) { return $__fn($i, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Traversable_Accum_Internal_StateR'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_StateR')))((function() use ($f, $i, $a) {
  $__fn = function($s) use ($f, $i, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)($i, $s, $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
$mapAccumRWithIndex1 = (($GLOBALS['Data_TraversableWithIndex_mapAccumRWithIndex'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_mapAccumRWithIndex')))($dictTraversableWithIndex);
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
$traverseWithIndex1 = (($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverseWithIndex')))($dictTraversableWithIndex, ($GLOBALS['Data_Traversable_Accum_Internal_applicativeStateL'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_applicativeStateL')));
    $__res = (function() use ($traverseWithIndex1) {
  $__fn = function($f, $s0 = null, $xs = null) use ($traverseWithIndex1, &$__fn) {
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
    $__res = (($GLOBALS['Data_Traversable_Accum_Internal_stateL'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_stateL')))(($traverseWithIndex1)((function() use ($f) {
  $__fn = function($i, $a = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($i, &$__fn) { return $__fn($i, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Traversable_Accum_Internal_StateL'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_StateL')))((function() use ($f, $i, $a) {
  $__fn = function($s) use ($f, $i, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)($i, $s, $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
$mapAccumLWithIndex1 = (($GLOBALS['Data_TraversableWithIndex_mapAccumLWithIndex'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_mapAccumLWithIndex')))($dictTraversableWithIndex);
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
    $__res = (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))((($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverseWithIndex')))($dictTraversableWithIndex, $dictApplicative));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_forWithIndex'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_forWithIndex';

