<?php

namespace Data\Map;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Map/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Set/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
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
      case 'Data_Map_traversableWithIndexSemigroupMap': $v = ($GLOBALS['Data_Map_Internal_traversableWithIndexMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_traversableWithIndexMap')); break;
      case 'Data_Map_traversableSemigroupMap': $v = ($GLOBALS['Data_Map_Internal_traversableMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_traversableMap')); break;
      case 'Data_Map_newtypeSemigroupMap': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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
      case 'Data_Map_keys': $v = ((function() {
  $__fn = function($f, $g = null, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($x) use ($f, $g, &$__fn) { return $__fn($f, $g, $x); };
    if ($__num === 1) return function($g, $x = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $x);
      if ($__num2 === 1) return function($x) use ($f, $g, &$__fn) { return $__fn($f, $g, $x); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($f)(($g)($x));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())(($GLOBALS['Data_Set_fromMap'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_fromMap')), (($GLOBALS['Data_Functor_void'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_void')))(($GLOBALS['Data_Map_Internal_functorMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorMap')))); break;
      case 'Data_Map_functorWithIndexSemigroupMap': $v = ($GLOBALS['Data_Map_Internal_functorWithIndexMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorWithIndexMap')); break;
      case 'Data_Map_functorSemigroupMap': $v = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorMap')); break;
      case 'Data_Map_foldableWithIndexSemigroupMap': $v = ($GLOBALS['Data_Map_Internal_foldableWithIndexMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_foldableWithIndexMap')); break;
      case 'Data_Map_foldableSemigroupMap': $v = ($GLOBALS['Data_Map_Internal_foldableMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_foldableMap')); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Map_SemigroupMap
function Data_Map_SemigroupMap($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_SemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_SemigroupMap'] = __NAMESPACE__ . '\\Data_Map_SemigroupMap';



// Data_Map_showSemigroupMap
function Data_Map_showSemigroupMap($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_showSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$showMap = (($GLOBALS['Data_Map_Internal_showMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_showMap')))($dictShow);
    $__res = (function() use ($showMap) {
  $__fn = function($dictShow1) use ($showMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($showMap)($dictShow1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_showSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_showSemigroupMap';

// Data_Map_semigroupSemigroupMap
function Data_Map_semigroupSemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_semigroupSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$unionWith = (($GLOBALS['Data_Map_Internal_unionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unionWith')))($dictOrd);
    $__res = (function() use ($unionWith) {
  $__fn = function($dictSemigroup) use ($unionWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))($dictSemigroup);
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() use ($unionWith, $append) {
  $__body = function($v, $v1) use ($unionWith, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return (($GLOBALS['Data_Map_SemigroupMap'] ?? \Data\Map\phpurs_eval_thunk('Data_Map_SemigroupMap')))(($unionWith)($append, $l, $r));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($unionWith, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_semigroupSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_semigroupSemigroupMap';

// Data_Map_plusSemigroupMap
function Data_Map_plusSemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_plusSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Map_Internal_plusMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_plusMap')))($dictOrd);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_plusSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_plusSemigroupMap';

// Data_Map_ordSemigroupMap
function Data_Map_ordSemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_ordSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$ordMap = (($GLOBALS['Data_Map_Internal_ordMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_ordMap')))($dictOrd);
    $__res = (function() use ($ordMap) {
  $__fn = function($dictOrd1) use ($ordMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($ordMap)($dictOrd1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_ordSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_ordSemigroupMap';

// Data_Map_ord1SemigroupMap
function Data_Map_ord1SemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_ord1SemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Map_Internal_ord1Map'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_ord1Map')))($dictOrd);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_ord1SemigroupMap'] = __NAMESPACE__ . '\\Data_Map_ord1SemigroupMap';


// Data_Map_monoidSemigroupMap
function Data_Map_monoidSemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_monoidSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$semigroupSemigroupMap1 = (($GLOBALS['Data_Map_semigroupSemigroupMap'] ?? \Data\Map\phpurs_eval_thunk('Data_Map_semigroupSemigroupMap')))($dictOrd);
    $__res = (function() use ($semigroupSemigroupMap1) {
  $__fn = function($dictSemigroup) use ($semigroupSemigroupMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$semigroupSemigroupMap2 = ($semigroupSemigroupMap1)($dictSemigroup);
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Data_Map_SemigroupMap'] ?? \Data\Map\phpurs_eval_thunk('Data_Map_SemigroupMap')))(($GLOBALS['Data_Map_Internal_empty'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_empty'))), "Semigroup0" => (function() use ($semigroupSemigroupMap2) {
  $__fn = function($__dollar____unused) use ($semigroupSemigroupMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupSemigroupMap2;
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
$GLOBALS['Data_Map_monoidSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_monoidSemigroupMap';






// Data_Map_eqSemigroupMap
function Data_Map_eqSemigroupMap($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_eqSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eqMap = (($GLOBALS['Data_Map_Internal_eqMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_eqMap')))($dictEq);
    $__res = (function() use ($eqMap) {
  $__fn = function($dictEq1) use ($eqMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($eqMap)($dictEq1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_eqSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_eqSemigroupMap';

// Data_Map_eq1SemigroupMap
function Data_Map_eq1SemigroupMap($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_eq1SemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Map_Internal_eq1Map'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_eq1Map')))($dictEq);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_eq1SemigroupMap'] = __NAMESPACE__ . '\\Data_Map_eq1SemigroupMap';

// Data_Map_bindSemigroupMap
function Data_Map_bindSemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_bindSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Map_Internal_bindMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_bindMap')))($dictOrd);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_bindSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_bindSemigroupMap';

// Data_Map_applySemigroupMap
function Data_Map_applySemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_applySemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Map_Internal_applyMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_applyMap')))($dictOrd);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_applySemigroupMap'] = __NAMESPACE__ . '\\Data_Map_applySemigroupMap';

// Data_Map_altSemigroupMap
function Data_Map_altSemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_altSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Map_Internal_altMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_altMap')))($dictOrd);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_altSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_altSemigroupMap';

