<?php

namespace Data\FunctorWithIndex;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
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
      case 'Data_FunctorWithIndex_map3': $v = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))(($GLOBALS['Data_Maybe_Last_functorLast'] ?? \Data\Maybe\Last\phpurs_eval_thunk('Data_Maybe_Last_functorLast'))); break;
      case 'Data_FunctorWithIndex_map4': $v = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))(($GLOBALS['Data_Maybe_First_functorFirst'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_functorFirst'))); break;
      case 'Data_FunctorWithIndex_functorWithIndexTuple': $v = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FunctorWithIndex_map'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_map')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Tuple_functorTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_functorTuple'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FunctorWithIndex_functorWithIndexMultiplicative': $v = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FunctorWithIndex_map1'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_map1')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Monoid_Multiplicative_functorMultiplicative'] ?? \Data\Monoid\Multiplicative\phpurs_eval_thunk('Data_Monoid_Multiplicative_functorMultiplicative'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FunctorWithIndex_functorWithIndexMaybe': $v = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FunctorWithIndex_map2'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_map2')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FunctorWithIndex_functorWithIndexLast': $v = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FunctorWithIndex_map3'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_map3')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Maybe_Last_functorLast'] ?? \Data\Maybe\Last\phpurs_eval_thunk('Data_Maybe_Last_functorLast'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FunctorWithIndex_functorWithIndexIdentity': $v = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$a = $__case_1;
return (($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity')))(($f1)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), $a));
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
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Identity_functorIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_functorIdentity'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FunctorWithIndex_functorWithIndexFirst': $v = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FunctorWithIndex_map4'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_map4')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Maybe_First_functorFirst'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_functorFirst'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FunctorWithIndex_functorWithIndexEither': $v = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FunctorWithIndex_map5'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_map5')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Either_functorEither'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_functorEither'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FunctorWithIndex_functorWithIndexDual': $v = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FunctorWithIndex_map6'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_map6')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Monoid_Dual_functorDual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_functorDual'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FunctorWithIndex_functorWithIndexDisj': $v = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FunctorWithIndex_map7'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_map7')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Monoid_Disj_functorDisj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_functorDisj'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FunctorWithIndex_functorWithIndexConst': $v = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return (($GLOBALS['Data_Const_Const'] ?? \Data\Const\phpurs_eval_thunk('Data_Const_Const')))($x);
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
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Const_functorConst'] ?? \Data\Const\phpurs_eval_thunk('Data_Const_functorConst'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FunctorWithIndex_functorWithIndexConj': $v = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FunctorWithIndex_map8'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_map8')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Monoid_Conj_functorConj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_functorConj'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FunctorWithIndex_functorWithIndexArray': $v = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => ($GLOBALS['Data_FunctorWithIndex_mapWithIndexArray'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_mapWithIndexArray')), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Functor_functorArray'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_functorArray'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_FunctorWithIndex_functorWithIndexAdditive': $v = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_FunctorWithIndex_map9'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_map9')))(($f)(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Monoid_Additive_functorAdditive'] ?? \Data\Monoid\Additive\phpurs_eval_thunk('Data_Monoid_Additive_functorAdditive'));
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


// Data_FunctorWithIndex_map
function Data_FunctorWithIndex_map($f, $m = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FunctorWithIndex_map';
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($f, $__fn) { return $__fn($f, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $m) {
    $__case_0 = $m;
    switch (($__case_0)->tag) {
case "Tuple":
$v = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($v, ($f)($v1));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($f, $m);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_map'] = __NAMESPACE__ . '\\Data_FunctorWithIndex_map';

// Data_FunctorWithIndex_bimap
function Data_FunctorWithIndex_bimap($f, $g = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FunctorWithIndex_bimap';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $g, $__fn) { return $__fn($f, $g, $v); };
    if ($__num === 1) return function($g, $v = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $v);
      if ($__num2 === 1) return function($v) use ($f, $g, $__fn) { return $__fn($f, $g, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($f, $g, $v) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$g1 = $__case_1;
$x = ($__case_2)->v0;
$y = ($__case_2)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($f1)($x), ($g1)($y));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($f, $g, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_bimap'] = __NAMESPACE__ . '\\Data_FunctorWithIndex_bimap';

// Data_FunctorWithIndex_compose
function Data_FunctorWithIndex_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FunctorWithIndex_compose';
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
$GLOBALS['Data_FunctorWithIndex_compose'] = __NAMESPACE__ . '\\Data_FunctorWithIndex_compose';

// Data_FunctorWithIndex_map1
function Data_FunctorWithIndex_map1($f, $m = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FunctorWithIndex_map1';
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($f, $__fn) { return $__fn($f, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $m) {
    $__case_0 = $m;
    if (true) {
$v = $__case_0;
return (($GLOBALS['Data_Monoid_Multiplicative_Multiplicative'] ?? \Data\Monoid\Multiplicative\phpurs_eval_thunk('Data_Monoid_Multiplicative_Multiplicative')))(($f)($v));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $m);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_map1'] = __NAMESPACE__ . '\\Data_FunctorWithIndex_map1';

// Data_FunctorWithIndex_map2
function Data_FunctorWithIndex_map2($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FunctorWithIndex_map2';
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
$GLOBALS['Data_FunctorWithIndex_map2'] = __NAMESPACE__ . '\\Data_FunctorWithIndex_map2';



// Data_FunctorWithIndex_map5
function Data_FunctorWithIndex_map5($f, $m = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FunctorWithIndex_map5';
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($f, $__fn) { return $__fn($f, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $m) {
    $__case_0 = $m;
    switch (($__case_0)->tag) {
case "Left":
$v = ($__case_0)->v0;
return (($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')))($v);
break;
case "Right":
$v = ($__case_0)->v0;
return (($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')))(($f)($v));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($f, $m);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_map5'] = __NAMESPACE__ . '\\Data_FunctorWithIndex_map5';

// Data_FunctorWithIndex_map6
function Data_FunctorWithIndex_map6($f, $m = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FunctorWithIndex_map6';
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($f, $__fn) { return $__fn($f, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $m) {
    $__case_0 = $m;
    if (true) {
$v = $__case_0;
return (($GLOBALS['Data_Monoid_Dual_Dual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_Dual')))(($f)($v));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $m);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_map6'] = __NAMESPACE__ . '\\Data_FunctorWithIndex_map6';

// Data_FunctorWithIndex_map7
function Data_FunctorWithIndex_map7($f, $m = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FunctorWithIndex_map7';
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($f, $__fn) { return $__fn($f, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $m) {
    $__case_0 = $m;
    if (true) {
$v = $__case_0;
return (($GLOBALS['Data_Monoid_Disj_Disj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_Disj')))(($f)($v));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $m);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_map7'] = __NAMESPACE__ . '\\Data_FunctorWithIndex_map7';

// Data_FunctorWithIndex_bimap1
function Data_FunctorWithIndex_bimap1($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FunctorWithIndex_bimap1';
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "Left":
$f = $__case_0;
$l = ($__case_2)->v0;
return (($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')))(($f)($l));
break;
case "Right":
$g = $__case_1;
$r = ($__case_2)->v0;
return (($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')))(($g)($r));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v, $v1, $v2);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_bimap1'] = __NAMESPACE__ . '\\Data_FunctorWithIndex_bimap1';

// Data_FunctorWithIndex_map8
function Data_FunctorWithIndex_map8($f, $m = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FunctorWithIndex_map8';
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($f, $__fn) { return $__fn($f, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $m) {
    $__case_0 = $m;
    if (true) {
$v = $__case_0;
return (($GLOBALS['Data_Monoid_Conj_Conj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_Conj')))(($f)($v));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $m);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_map8'] = __NAMESPACE__ . '\\Data_FunctorWithIndex_map8';

// Data_FunctorWithIndex_map9
function Data_FunctorWithIndex_map9($f, $m = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FunctorWithIndex_map9';
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($f, $__fn) { return $__fn($f, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $m) {
    $__case_0 = $m;
    if (true) {
$v = $__case_0;
return (($GLOBALS['Data_Monoid_Additive_Additive'] ?? \Data\Monoid\Additive\phpurs_eval_thunk('Data_Monoid_Additive_Additive')))(($f)($v));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $m);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_map9'] = __NAMESPACE__ . '\\Data_FunctorWithIndex_map9';

// Data_FunctorWithIndex_FunctorWithIndex$Dict
function Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] = __NAMESPACE__ . '\\Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict';

// Data_FunctorWithIndex_mapWithIndex
function Data_FunctorWithIndex_mapWithIndex($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FunctorWithIndex_mapWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->mapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_mapWithIndex'] = __NAMESPACE__ . '\\Data_FunctorWithIndex_mapWithIndex';

// Data_FunctorWithIndex_mapDefault
function Data_FunctorWithIndex_mapDefault($dictFunctorWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FunctorWithIndex_mapDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mapWithIndex1 = (($GLOBALS['Data_FunctorWithIndex_mapWithIndex'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_mapWithIndex')))($dictFunctorWithIndex);
    $__res = (function() use ($mapWithIndex1) {
  $__fn = function($f) use ($mapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($mapWithIndex1)((($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_mapDefault'] = __NAMESPACE__ . '\\Data_FunctorWithIndex_mapDefault';


// Data_FunctorWithIndex_functorWithIndexProduct
function Data_FunctorWithIndex_functorWithIndexProduct($dictFunctorWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FunctorWithIndex_functorWithIndexProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mapWithIndex1 = (($GLOBALS['Data_FunctorWithIndex_mapWithIndex'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_mapWithIndex')))($dictFunctorWithIndex);
$functorProduct = (($GLOBALS['Data_Functor_Product_functorProduct'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_functorProduct')))((($dictFunctorWithIndex)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($functorProduct, $mapWithIndex1) {
  $__fn = function($dictFunctorWithIndex1) use ($functorProduct, $mapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mapWithIndex2 = (($GLOBALS['Data_FunctorWithIndex_mapWithIndex'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_mapWithIndex')))($dictFunctorWithIndex1);
$functorProduct1 = ($functorProduct)((($dictFunctorWithIndex1)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() use ($mapWithIndex1, $mapWithIndex2) {
  $__body = function($f, $v) use ($mapWithIndex1, $mapWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return (($GLOBALS['Data_Functor_Product_Product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_Product')))((($GLOBALS['Data_FunctorWithIndex_bimap'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_bimap')))(($mapWithIndex1)((($GLOBALS['Data_FunctorWithIndex_compose'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_compose')))($f1, ($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')))), ($mapWithIndex2)((($GLOBALS['Data_FunctorWithIndex_compose'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_compose')))($f1, ($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')))), $fga));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($mapWithIndex1, $mapWithIndex2, $__body, &$__fn) {
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
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_functorWithIndexProduct'] = __NAMESPACE__ . '\\Data_FunctorWithIndex_functorWithIndexProduct';









// Data_FunctorWithIndex_functorWithIndexCoproduct
function Data_FunctorWithIndex_functorWithIndexCoproduct($dictFunctorWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FunctorWithIndex_functorWithIndexCoproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mapWithIndex1 = (($GLOBALS['Data_FunctorWithIndex_mapWithIndex'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_mapWithIndex')))($dictFunctorWithIndex);
$functorCoproduct = (($GLOBALS['Data_Functor_Coproduct_functorCoproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_functorCoproduct')))((($dictFunctorWithIndex)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($functorCoproduct, $mapWithIndex1) {
  $__fn = function($dictFunctorWithIndex1) use ($functorCoproduct, $mapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mapWithIndex2 = (($GLOBALS['Data_FunctorWithIndex_mapWithIndex'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_mapWithIndex')))($dictFunctorWithIndex1);
$functorCoproduct1 = ($functorCoproduct)((($dictFunctorWithIndex1)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() use ($mapWithIndex1, $mapWithIndex2) {
  $__body = function($f, $v) use ($mapWithIndex1, $mapWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$e = $__case_1;
return (($GLOBALS['Data_Functor_Coproduct_Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_Coproduct')))((($GLOBALS['Data_FunctorWithIndex_bimap1'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_bimap1')))(($mapWithIndex1)((($GLOBALS['Data_FunctorWithIndex_compose'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_compose')))($f1, ($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')))), ($mapWithIndex2)((($GLOBALS['Data_FunctorWithIndex_compose'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_compose')))($f1, ($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')))), $e));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($mapWithIndex1, $mapWithIndex2, $__body, &$__fn) {
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
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_functorWithIndexCoproduct'] = __NAMESPACE__ . '\\Data_FunctorWithIndex_functorWithIndexCoproduct';



// Data_FunctorWithIndex_functorWithIndexCompose
function Data_FunctorWithIndex_functorWithIndexCompose($dictFunctorWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FunctorWithIndex_functorWithIndexCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mapWithIndex1 = (($GLOBALS['Data_FunctorWithIndex_mapWithIndex'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_mapWithIndex')))($dictFunctorWithIndex);
$functorCompose = (($GLOBALS['Data_Functor_Compose_functorCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_functorCompose')))((($dictFunctorWithIndex)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($functorCompose, $mapWithIndex1) {
  $__fn = function($dictFunctorWithIndex1) use ($functorCompose, $mapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mapWithIndex2 = (($GLOBALS['Data_FunctorWithIndex_mapWithIndex'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_mapWithIndex')))($dictFunctorWithIndex1);
$functorCompose1 = ($functorCompose)((($dictFunctorWithIndex1)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() use ($mapWithIndex1, $mapWithIndex2) {
  $__body = function($f, $v) use ($mapWithIndex1, $mapWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return (($GLOBALS['Data_Functor_Compose_Compose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_Compose')))(($mapWithIndex1)((($GLOBALS['Data_FunctorWithIndex_compose'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_compose')))($mapWithIndex2, (($GLOBALS['Data_Tuple_curry'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_curry')))($f1)), $fga));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($mapWithIndex1, $mapWithIndex2, $__body, &$__fn) {
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
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_functorWithIndexCompose'] = __NAMESPACE__ . '\\Data_FunctorWithIndex_functorWithIndexCompose';


// Data_FunctorWithIndex_functorWithIndexApp
function Data_FunctorWithIndex_functorWithIndexApp($dictFunctorWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FunctorWithIndex_functorWithIndexApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mapWithIndex1 = (($GLOBALS['Data_FunctorWithIndex_mapWithIndex'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_mapWithIndex')))($dictFunctorWithIndex);
$functorApp = (($GLOBALS['Data_Functor_App_functorApp'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_functorApp')))((($dictFunctorWithIndex)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict')))((object)["mapWithIndex" => (function() use ($mapWithIndex1) {
  $__body = function($f, $v) use ($mapWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return (($GLOBALS['Data_Functor_App_App'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_App')))(($mapWithIndex1)($f1, $x));
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
})(), "Functor0" => (function() use ($functorApp) {
  $__fn = function($__dollar____unused) use ($functorApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorApp;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_functorWithIndexApp'] = __NAMESPACE__ . '\\Data_FunctorWithIndex_functorWithIndexApp';


