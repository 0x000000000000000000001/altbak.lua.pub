<?php

namespace Data\Equivalence;

require_once __DIR__ . '/../Data.Comparison/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Equivalence/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor.Contravariant/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
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
      case 'Data_Equivalence_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Equivalence_semigroupEquivalence': $v = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$p = $__case_0;
$q = $__case_1;
return (($GLOBALS['Data_Equivalence_Equivalence'] ?? \Data\Equivalence\phpurs_eval_thunk('Data_Equivalence_Equivalence')))((function() use ($p, $q) {
  $__fn = function($a, $b = null) use ($p, $q, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Equivalence_conj'] ?? \Data\Equivalence\phpurs_eval_thunk('Data_Equivalence_conj')))(($p)($a, $b), ($q)($a, $b));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
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
})()]); break;
      case 'Data_Equivalence_newtypeEquivalence': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Equivalence_monoidEquivalence': $v = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Data_Equivalence_Equivalence'] ?? \Data\Equivalence\phpurs_eval_thunk('Data_Equivalence_Equivalence')))((function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = true;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Equivalence_semigroupEquivalence'] ?? \Data\Equivalence\phpurs_eval_thunk('Data_Equivalence_semigroupEquivalence'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Equivalence_contravariantEquivalence': $v = (($GLOBALS['Data_Functor_Contravariant_Contravariant__dollar__Dict'] ?? \Data\Functor\Contravariant\phpurs_eval_thunk('Data_Functor_Contravariant_Contravariant__dollar__Dict')))((object)["cmap" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
return (($GLOBALS['Data_Equivalence_Equivalence'] ?? \Data\Equivalence\phpurs_eval_thunk('Data_Equivalence_Equivalence')))((($GLOBALS['Data_Function_on'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_on')))($g, $f1));
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
})()]); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };



// Data_Equivalence_eq
function Data_Equivalence_eq($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Equivalence_eq';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "LT") && (($__case_1)->tag === "LT"))) {
return true;
} else {
if (((($__case_0)->tag === "GT") && (($__case_1)->tag === "GT"))) {
return true;
} else {
if (((($__case_0)->tag === "EQ") && (($__case_1)->tag === "EQ"))) {
return true;
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
  };
    $__res = $__body($v, $v1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Equivalence_eq'] = __NAMESPACE__ . '\\Data_Equivalence_eq';

// Data_Equivalence_Equivalence
function Data_Equivalence_Equivalence($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Equivalence_Equivalence';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Equivalence_Equivalence'] = __NAMESPACE__ . '\\Data_Equivalence_Equivalence';




// Data_Equivalence_defaultEquivalence
function Data_Equivalence_defaultEquivalence($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Equivalence_defaultEquivalence';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Equivalence_Equivalence'] ?? \Data\Equivalence\phpurs_eval_thunk('Data_Equivalence_Equivalence')))((($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))($dictEq));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Equivalence_defaultEquivalence'] = __NAMESPACE__ . '\\Data_Equivalence_defaultEquivalence';


// Data_Equivalence_comparisonEquivalence
function Data_Equivalence_comparisonEquivalence($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Equivalence_comparisonEquivalence';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$p = $__case_0;
return (($GLOBALS['Data_Equivalence_Equivalence'] ?? \Data\Equivalence\phpurs_eval_thunk('Data_Equivalence_Equivalence')))((function() use ($p) {
  $__fn = function($a, $b = null) use ($p, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Equivalence_eq'] ?? \Data\Equivalence\phpurs_eval_thunk('Data_Equivalence_eq')))(($p)($a, $b), ($GLOBALS['Data_Ordering_EQ'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_EQ')));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Equivalence_comparisonEquivalence'] = __NAMESPACE__ . '\\Data_Equivalence_comparisonEquivalence';

