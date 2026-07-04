<?php

namespace Data\Maybe\First;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Maybe.First/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
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
      case 'Data_Maybe_First_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Maybe_First_semigroupFirst': $v = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Just")) {
$first = $__case_0;
return $first;
} else {
if (true) {
$second = $__case_1;
return $second;
} else {
throw new \Exception("Pattern match failure");
};
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
      case 'Data_Maybe_First_ord1First': $v = ($GLOBALS['Data_Maybe_ord1Maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_ord1Maybe')); break;
      case 'Data_Maybe_First_newtypeFirst': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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
      case 'Data_Maybe_First_monoidFirst': $v = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Data_Maybe_First_First'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_First')))(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'))), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Maybe_First_semigroupFirst'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_semigroupFirst'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Maybe_First_monadFirst': $v = ($GLOBALS['Data_Maybe_monadMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_monadMaybe')); break;
      case 'Data_Maybe_First_invariantFirst': $v = ($GLOBALS['Data_Maybe_invariantMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_invariantMaybe')); break;
      case 'Data_Maybe_First_functorFirst': $v = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe')); break;
      case 'Data_Maybe_First_extendFirst': $v = ($GLOBALS['Data_Maybe_extendMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_extendMaybe')); break;
      case 'Data_Maybe_First_eq1First': $v = ($GLOBALS['Data_Maybe_eq1Maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_eq1Maybe')); break;
      case 'Data_Maybe_First_bindFirst': $v = ($GLOBALS['Data_Maybe_bindMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_bindMaybe')); break;
      case 'Data_Maybe_First_applyFirst': $v = ($GLOBALS['Data_Maybe_applyMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_applyMaybe')); break;
      case 'Data_Maybe_First_applicativeFirst': $v = ($GLOBALS['Data_Maybe_applicativeMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_applicativeMaybe')); break;
      case 'Data_Maybe_First_altFirst': $v = (($GLOBALS['Control_Alt_Alt__dollar__Dict'] ?? \Control\Alt\phpurs_eval_thunk('Control_Alt_Alt__dollar__Dict')))((object)["alt" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Just")) {
$first = $__case_0;
return $first;
} else {
if (true) {
$second = $__case_1;
return $second;
} else {
throw new \Exception("Pattern match failure");
};
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
    $__res = ($GLOBALS['Data_Maybe_First_functorFirst'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_functorFirst'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Maybe_First_plusFirst': $v = (($GLOBALS['Control_Plus_Plus__dollar__Dict'] ?? \Control\Plus\phpurs_eval_thunk('Control_Plus_Plus__dollar__Dict')))((object)["empty" => (($GLOBALS['Data_Maybe_First_First'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_First')))(($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'))), "Alt0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Maybe_First_altFirst'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_altFirst'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Maybe_First_alternativeFirst': $v = (($GLOBALS['Control_Alternative_Alternative__dollar__Dict'] ?? \Control\Alternative\phpurs_eval_thunk('Control_Alternative_Alternative__dollar__Dict')))((object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Maybe_First_applicativeFirst'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_applicativeFirst'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Maybe_First_plusFirst'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_plusFirst'));
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



// Data_Maybe_First_First
function Data_Maybe_First_First($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Maybe_First_First';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Maybe_First_First'] = __NAMESPACE__ . '\\Data_Maybe_First_First';

// Data_Maybe_First_showFirst
function Data_Maybe_First_showFirst($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Maybe_First_showFirst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))((($GLOBALS['Data_Maybe_showMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_showMaybe')))($dictShow));
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return (($GLOBALS['Data_Maybe_First_append'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_append')))("First (", (($GLOBALS['Data_Maybe_First_append'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_append')))(($show)($a), ")"));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($show, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Maybe_First_showFirst'] = __NAMESPACE__ . '\\Data_Maybe_First_showFirst';


// Data_Maybe_First_ordFirst
function Data_Maybe_First_ordFirst($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Maybe_First_ordFirst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Maybe_ordMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_ordMaybe')))($dictOrd);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Maybe_First_ordFirst'] = __NAMESPACE__ . '\\Data_Maybe_First_ordFirst';








// Data_Maybe_First_eqFirst
function Data_Maybe_First_eqFirst($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Maybe_First_eqFirst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Maybe_eqMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_eqMaybe')))($dictEq);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Maybe_First_eqFirst'] = __NAMESPACE__ . '\\Data_Maybe_First_eqFirst';


// Data_Maybe_First_boundedFirst
function Data_Maybe_First_boundedFirst($dictBounded) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Maybe_First_boundedFirst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Maybe_boundedMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_boundedMaybe')))($dictBounded);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Maybe_First_boundedFirst'] = __NAMESPACE__ . '\\Data_Maybe_First_boundedFirst';







