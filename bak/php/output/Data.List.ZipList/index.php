<?php

namespace Data\List\ZipList;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.List.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy.Types/index.php';
require_once __DIR__ . '/../Data.List.ZipList/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
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
      case 'Data_List_ZipList_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_List_ZipList_traversableZipList': $v = ($GLOBALS['Data_List_Lazy_Types_traversableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traversableList')); break;
      case 'Data_List_ZipList_semigroupZipList': $v = ($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_semigroupList')); break;
      case 'Data_List_ZipList_newtypeZipList': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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
      case 'Data_List_ZipList_monoidZipList': $v = ($GLOBALS['Data_List_Lazy_Types_monoidList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_monoidList')); break;
      case 'Data_List_ZipList_functorZipList': $v = ($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorList')); break;
      case 'Data_List_ZipList_foldableZipList': $v = ($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableList')); break;
      case 'Data_List_ZipList_applyZipList': $v = (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$fs = $__case_0;
$xs = $__case_1;
return (($GLOBALS['Data_List_ZipList_ZipList'] ?? \Data\List\ZipList\phpurs_eval_thunk('Data_List_ZipList_ZipList')))((($GLOBALS['Data_List_Lazy_zipWith'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_zipWith')))(($GLOBALS['Data_Function_apply'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_apply')), $fs, $xs));
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
    $__res = ($GLOBALS['Data_List_ZipList_functorZipList'] ?? \Data\List\ZipList\phpurs_eval_thunk('Data_List_ZipList_functorZipList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_ZipList_applicativeZipList': $v = (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => ((function() {
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
})())(($GLOBALS['Data_List_ZipList_ZipList'] ?? \Data\List\ZipList\phpurs_eval_thunk('Data_List_ZipList_ZipList')), ($GLOBALS['Data_List_Lazy_repeat'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_repeat'))), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_ZipList_applyZipList'] ?? \Data\List\ZipList\phpurs_eval_thunk('Data_List_ZipList_applyZipList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_ZipList_altZipList': $v = (($GLOBALS['Control_Alt_Alt__dollar__Dict'] ?? \Control\Alt\phpurs_eval_thunk('Control_Alt_Alt__dollar__Dict')))((object)["alt" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$xs = $__case_0;
$ys = $__case_1;
return (($GLOBALS['Data_List_ZipList_ZipList'] ?? \Data\List\ZipList\phpurs_eval_thunk('Data_List_ZipList_ZipList')))((($GLOBALS['Data_List_ZipList_append1'] ?? \Data\List\ZipList\phpurs_eval_thunk('Data_List_ZipList_append1')))($xs, (($GLOBALS['Data_List_Lazy_drop'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_drop')))((($GLOBALS['Data_List_Lazy_length'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_length')))($xs), $ys)));
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
    $__res = ($GLOBALS['Data_List_ZipList_functorZipList'] ?? \Data\List\ZipList\phpurs_eval_thunk('Data_List_ZipList_functorZipList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_ZipList_plusZipList': $v = (($GLOBALS['Control_Plus_Plus__dollar__Dict'] ?? \Control\Plus\phpurs_eval_thunk('Control_Plus_Plus__dollar__Dict')))((object)["empty" => (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))(($GLOBALS['Data_List_ZipList_monoidZipList'] ?? \Data\List\ZipList\phpurs_eval_thunk('Data_List_ZipList_monoidZipList'))), "Alt0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_ZipList_altZipList'] ?? \Data\List\ZipList\phpurs_eval_thunk('Data_List_ZipList_altZipList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_List_ZipList_alternativeZipList': $v = (($GLOBALS['Control_Alternative_Alternative__dollar__Dict'] ?? \Control\Alternative\phpurs_eval_thunk('Control_Alternative_Alternative__dollar__Dict')))((object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_ZipList_applicativeZipList'] ?? \Data\List\ZipList\phpurs_eval_thunk('Data_List_ZipList_applicativeZipList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_ZipList_plusZipList'] ?? \Data\List\ZipList\phpurs_eval_thunk('Data_List_ZipList_plusZipList'));
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



// Data_List_ZipList_append1
function Data_List_ZipList_append1($xs, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_ZipList_append1';
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, $__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($ys) {
  $__body = function($v) use ($ys) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($ys);
break;
case "Cons":
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_Cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_Cons')))($x, (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))(($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_semigroupList')), $xs__prime__, $ys));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($ys, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List')))((($GLOBALS['Data_List_Lazy_Types_map'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_map')))($go, (($GLOBALS['Data_List_Lazy_Types_unwrap'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unwrap')))($xs)));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_ZipList_append1'] = __NAMESPACE__ . '\\Data_List_ZipList_append1';

// Data_List_ZipList_ZipList
function Data_List_ZipList_ZipList($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_ZipList_ZipList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_ZipList_ZipList'] = __NAMESPACE__ . '\\Data_List_ZipList_ZipList';


// Data_List_ZipList_showZipList
function Data_List_ZipList_showZipList($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_ZipList_showZipList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))((($GLOBALS['Data_List_Lazy_Types_showList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_showList')))($dictShow));
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if (true) {
$xs = $__case_0;
return (($GLOBALS['Data_List_ZipList_append'] ?? \Data\List\ZipList\phpurs_eval_thunk('Data_List_ZipList_append')))("(ZipList ", (($GLOBALS['Data_List_ZipList_append'] ?? \Data\List\ZipList\phpurs_eval_thunk('Data_List_ZipList_append')))(($show)($xs), ")"));
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
$GLOBALS['Data_List_ZipList_showZipList'] = __NAMESPACE__ . '\\Data_List_ZipList_showZipList';


// Data_List_ZipList_ordZipList
function Data_List_ZipList_ordZipList($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_ZipList_ordZipList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_ordList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_ordList')))($dictOrd);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_ZipList_ordZipList'] = __NAMESPACE__ . '\\Data_List_ZipList_ordZipList';





// Data_List_ZipList_eqZipList
function Data_List_ZipList_eqZipList($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_ZipList_eqZipList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_eqList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eqList')))($dictEq);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_ZipList_eqZipList'] = __NAMESPACE__ . '\\Data_List_ZipList_eqZipList';


// Data_List_ZipList_zipListIsNotBind
function Data_List_ZipList_zipListIsNotBind($__dollar____unused) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_ZipList_zipListIsNotBind';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Bind_Bind__dollar__Dict'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_Bind__dollar__Dict')))((object)["bind" => (($GLOBALS['Partial_Unsafe_unsafeCrashWith'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafeCrashWith')))("bind: unreachable"), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_List_ZipList_applyZipList'] ?? \Data\List\ZipList\phpurs_eval_thunk('Data_List_ZipList_applyZipList'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_ZipList_zipListIsNotBind'] = __NAMESPACE__ . '\\Data_List_ZipList_zipListIsNotBind';





