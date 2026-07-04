<?php

namespace Data\List\Lazy\NonEmpty;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy.NonEmpty/index.php';
require_once __DIR__ . '/../Data.List.Lazy.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
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
      case 'Data_List_Lazy_NonEmpty_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_List_Lazy_NonEmpty_concatMap': $v = (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))((function() {
  $__body = function($v, $f) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$nel = $__case_0;
$f1 = $__case_1;
$v1 = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($nel);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$a = ($__case_0)->v0;
$as = ($__case_0)->v1;
$v2 = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))((($GLOBALS['Data_List_Lazy_Types_unwrap'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unwrap')))(($f1)($a)));
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "NonEmpty":
$b = ($__case_0)->v0;
$bs = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($b, $bs, $as, $f1) {
  $__fn = function($v3) use ($b, $bs, $as, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')))($b, (($GLOBALS['Data_List_Lazy_Types_append1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append1')))($bs, (($GLOBALS['Data_List_Lazy_Types_bind'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_bind')))($as, (($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose')))(($GLOBALS['Data_List_Lazy_Types_toList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_toList')), $f1))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_List_Lazy_NonEmpty_compose
function Data_List_Lazy_NonEmpty_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_compose';
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
$GLOBALS['Data_List_Lazy_NonEmpty_compose'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_compose';

// Data_List_Lazy_NonEmpty_map
function Data_List_Lazy_NonEmpty_map($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_map';
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
$GLOBALS['Data_List_Lazy_NonEmpty_map'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_map';


// Data_List_Lazy_NonEmpty_append
function Data_List_Lazy_NonEmpty_append($xs, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_append';
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
$GLOBALS['Data_List_Lazy_NonEmpty_append'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_append';

// Data_List_Lazy_NonEmpty_uncons
function Data_List_Lazy_NonEmpty_uncons($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_uncons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($nel);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return (object)["head" => $x, "tail" => $xs];
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_uncons'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_uncons';

// Data_List_Lazy_NonEmpty_toList
function Data_List_Lazy_NonEmpty_toList($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_toList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($nel);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($x, $xs);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_toList'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_toList';

// Data_List_Lazy_NonEmpty_toUnfoldable
function Data_List_Lazy_NonEmpty_toUnfoldable($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_toUnfoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_NonEmpty_compose'] ?? \Data\List\Lazy\NonEmpty\phpurs_eval_thunk('Data_List_Lazy_NonEmpty_compose')))((($GLOBALS['Data_Unfoldable_unfoldr'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_unfoldr')))($dictUnfoldable, (function() {
  $__fn = function($xs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_NonEmpty_map'] ?? \Data\List\Lazy\NonEmpty\phpurs_eval_thunk('Data_List_Lazy_NonEmpty_map')))((function() {
  $__fn = function($rec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($rec)->head, ($rec)->tail);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_List_Lazy_uncons'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_uncons')))($xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($GLOBALS['Data_List_Lazy_NonEmpty_toList'] ?? \Data\List\Lazy\NonEmpty\phpurs_eval_thunk('Data_List_Lazy_NonEmpty_toList')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_toUnfoldable'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_toUnfoldable';

// Data_List_Lazy_NonEmpty_tail
function Data_List_Lazy_NonEmpty_tail($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_tail';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($nel);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$xs = ($__case_0)->v1;
return $xs;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_tail'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_tail';

// Data_List_Lazy_NonEmpty_singleton
function Data_List_Lazy_NonEmpty_singleton($a) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_singleton';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($a) {
  $__fn = function($v) use ($a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_singleton'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_singleton')))($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_singleton'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_singleton';

// Data_List_Lazy_NonEmpty_repeat
function Data_List_Lazy_NonEmpty_repeat($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_repeat';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($x) {
  $__fn = function($v) use ($x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')))($x, (($GLOBALS['Data_List_Lazy_repeat'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_repeat')))($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_repeat'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_repeat';

// Data_List_Lazy_NonEmpty_length
function Data_List_Lazy_NonEmpty_length($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_length';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($nel);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$xs = ($__case_0)->v1;
return (($GLOBALS['Data_List_Lazy_NonEmpty_add'] ?? \Data\List\Lazy\NonEmpty\phpurs_eval_thunk('Data_List_Lazy_NonEmpty_add')))(1, (($GLOBALS['Data_List_Lazy_length'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_length')))($xs));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_length'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_length';

// Data_List_Lazy_NonEmpty_last
function Data_List_Lazy_NonEmpty_last($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_last';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($nel);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return (($GLOBALS['Data_Maybe_fromMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromMaybe')))($x, (($GLOBALS['Data_List_Lazy_last'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_last')))($xs));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_last'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_last';

// Data_List_Lazy_NonEmpty_iterate
function Data_List_Lazy_NonEmpty_iterate($f, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_iterate';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, $__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($x, $f) {
  $__fn = function($v) use ($x, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')))($x, (($GLOBALS['Data_List_Lazy_iterate'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_iterate')))($f, ($f)($x)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_iterate'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_iterate';

// Data_List_Lazy_NonEmpty_init
function Data_List_Lazy_NonEmpty_init($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_init';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($nel);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return (($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe')))(($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')), (function() use ($x) {
  $__fn = function($v2) use ($x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($x, $v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (($GLOBALS['Data_List_Lazy_init'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_init')))($xs));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_init'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_init';

// Data_List_Lazy_NonEmpty_head
function Data_List_Lazy_NonEmpty_head($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_head';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($nel);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
return $x;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_head'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_head';

// Data_List_Lazy_NonEmpty_fromList
function Data_List_Lazy_NonEmpty_fromList($l) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_fromList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($l) {
    $v = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')))($l);
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['Data_Maybe_Nothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Nothing'));
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return (($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')))((($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($x, $xs) {
  $__fn = function($v1) use ($x, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')))($x, $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($l);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_fromList'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_fromList';

// Data_List_Lazy_NonEmpty_fromFoldable
function Data_List_Lazy_NonEmpty_fromFoldable($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_fromFoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_List_Lazy_NonEmpty_compose'] ?? \Data\List\Lazy\NonEmpty\phpurs_eval_thunk('Data_List_Lazy_NonEmpty_compose')))(($GLOBALS['Data_List_Lazy_NonEmpty_fromList'] ?? \Data\List\Lazy\NonEmpty\phpurs_eval_thunk('Data_List_Lazy_NonEmpty_fromList')), (($GLOBALS['Data_List_Lazy_fromFoldable'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_fromFoldable')))($dictFoldable));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_fromFoldable'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_fromFoldable';

// Data_List_Lazy_NonEmpty_cons
function Data_List_Lazy_NonEmpty_cons($y, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_cons';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($y, $__fn) { return $__fn($y, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($y, $v) {
    $__case_0 = $y;
    $__case_1 = $v;
    if (true) {
$y1 = $__case_0;
$nel = $__case_1;
return (($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($nel, $y1) {
  $__body = function($v1) use ($nel, $y1) {
    $v2 = (($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')))($nel);
    $__case_0 = $v2;
    switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return (($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')))($y1, (($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons')))($x, $xs));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($nel, $y1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($y, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_cons'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_cons';


// Data_List_Lazy_NonEmpty_appendFoldable
function Data_List_Lazy_NonEmpty_appendFoldable($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_appendFoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$fromFoldable1 = (($GLOBALS['Data_List_Lazy_fromFoldable'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_fromFoldable')))($dictFoldable);
    $__res = (function() use ($fromFoldable1) {
  $__fn = function($nel, $ys = null) use ($fromFoldable1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($nel, &$__fn) { return $__fn($nel, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_List_Lazy_Types_NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_NonEmptyList')))((($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))((function() use ($nel, $fromFoldable1, $ys) {
  $__fn = function($v) use ($nel, $fromFoldable1, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_NonEmpty')))((($GLOBALS['Data_List_Lazy_NonEmpty_head'] ?? \Data\List\Lazy\NonEmpty\phpurs_eval_thunk('Data_List_Lazy_NonEmpty_head')))($nel), (($GLOBALS['Data_List_Lazy_NonEmpty_append'] ?? \Data\List\Lazy\NonEmpty\phpurs_eval_thunk('Data_List_Lazy_NonEmpty_append')))((($GLOBALS['Data_List_Lazy_NonEmpty_tail'] ?? \Data\List\Lazy\NonEmpty\phpurs_eval_thunk('Data_List_Lazy_NonEmpty_tail')))($nel), ($fromFoldable1)($ys)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_appendFoldable'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_appendFoldable';

