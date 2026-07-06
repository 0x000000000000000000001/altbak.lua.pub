<?php

namespace Data\Set\NonEmpty;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty.Internal/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.List.NonEmpty/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Set/index.php';
require_once __DIR__ . '/../Data.Set.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Safe.Coerce/index.php';

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
      case 'Data_Set_NonEmpty_coerce': $v = (($GLOBALS['Safe_Coerce_coerce'] ?? \Safe\Coerce\phpurs_eval_thunk('Safe_Coerce_coerce')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Set_NonEmpty_compose': $v = (function() {
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
      case 'Data_Set_NonEmpty_map1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Tuple_functorTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_functorTuple'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->map;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Set_NonEmpty_append': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semigroup_semigroupString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupString'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Set_NonEmpty_fromJust': $v = (($GLOBALS['Data_Maybe_fromJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromJust')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Set_NonEmpty_foldMap1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_foldable1NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldable1NonEmptyList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Set_NonEmpty_foldr1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_foldable1NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldable1NonEmptyList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldr1;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Set_NonEmpty_foldl1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_List_Types_foldable1NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldable1NonEmptyList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl1;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Set_NonEmpty_toUnfoldable11': $v = (function() {
  $stepNext = (($GLOBALS['Data_Map_Internal_stepAscCps'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAscCps')))((($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3')))((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
    if ($__num === 1) return function($v, $next = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $next);
      if ($__num2 === 1) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(((function() {
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
})())($k, $next));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  $stepHead = (($GLOBALS['Data_Map_Internal_stepAscCps'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAscCps')))((($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3')))((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
    if ($__num === 1) return function($v, $next = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $next);
      if ($__num2 === 1) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ((function() {
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
})())($k, $next);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Partial_Unsafe_unsafeCrashWith = ($GLOBALS['Partial_Unsafe_unsafeCrashWith'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafeCrashWith'));
    $__res = ($__global_Partial_Unsafe_unsafeCrashWith)("toUnfoldable1: impossible");
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  $__case_0 = ($GLOBALS['Data_Unfoldable1_unfoldable1Array'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_unfoldable1Array'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->unfoldr1;
} else {
throw new \Exception("Pattern match failure");
};
  return (($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose')))(($__case_res_0)((function() use ($stepNext) {
  $__fn = function($v) use ($stepNext, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_NonEmpty_map1 = ($GLOBALS['Data_Set_NonEmpty_map1'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_map1'));
    $__res = ($__global_Data_Set_NonEmpty_map1)($stepNext, $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose')))($stepHead, (($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose')))(($GLOBALS['Data_Map_Internal_toMapIter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_toMapIter')), (($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose')))(($GLOBALS['Data_Set_toMap'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toMap')), ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'))))));
})(); break;
      case 'Data_Set_NonEmpty_toUnfoldable12': $v = (function() {
  $stepNext = (($GLOBALS['Data_Map_Internal_stepAscCps'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAscCps')))((($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3')))((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
    if ($__num === 1) return function($v, $next = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $next);
      if ($__num2 === 1) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(((function() {
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
})())($k, $next));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  $stepHead = (($GLOBALS['Data_Map_Internal_stepAscCps'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAscCps')))((($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3')))((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
    if ($__num === 1) return function($v, $next = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $next);
      if ($__num2 === 1) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ((function() {
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
})())($k, $next);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Partial_Unsafe_unsafeCrashWith = ($GLOBALS['Partial_Unsafe_unsafeCrashWith'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafeCrashWith'));
    $__res = ($__global_Partial_Unsafe_unsafeCrashWith)("toUnfoldable1: impossible");
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  $__case_0 = ($GLOBALS['Data_List_Types_unfoldable1NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_unfoldable1NonEmptyList'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->unfoldr1;
} else {
throw new \Exception("Pattern match failure");
};
  return (($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose')))(($__case_res_0)((function() use ($stepNext) {
  $__fn = function($v) use ($stepNext, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_NonEmpty_map1 = ($GLOBALS['Data_Set_NonEmpty_map1'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_map1'));
    $__res = ($__global_Data_Set_NonEmpty_map1)($stepNext, $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose')))($stepHead, (($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose')))(($GLOBALS['Data_Map_Internal_toMapIter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_toMapIter')), (($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose')))(($GLOBALS['Data_Set_toMap'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toMap')), ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'))))));
})(); break;
      case 'Data_Set_NonEmpty_size': $v = (($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce')))(($GLOBALS['Data_Set_size'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_size'))); break;
      case 'Data_Set_NonEmpty_singleton': $v = (($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce')))(($GLOBALS['Data_Set_singleton'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_singleton'))); break;
      case 'Data_Set_NonEmpty_ord1NonEmptySet': $v = ($GLOBALS['Data_Set_ord1Set'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_ord1Set')); break;
      case 'Data_Set_NonEmpty_foldableNonEmptySet': $v = ($GLOBALS['Data_Set_foldableSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldableSet')); break;
      case 'Data_Set_NonEmpty_foldable1NonEmptySet': $v = (object)["foldMap1" => (function() {
  $__fn = function($dictSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_NonEmpty_foldMap1 = ($GLOBALS['Data_Set_NonEmpty_foldMap1'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_foldMap1'));
$__global_Data_Set_NonEmpty_compose = ($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose'));
$__global_Data_Set_NonEmpty_toUnfoldable12 = ($GLOBALS['Data_Set_NonEmpty_toUnfoldable12'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_toUnfoldable12'));
$foldMap11 = ($__global_Data_Set_NonEmpty_foldMap1)($dictSemigroup);
    $__res = (function() use ($__global_Data_Set_NonEmpty_compose, $foldMap11, $__global_Data_Set_NonEmpty_toUnfoldable12) {
  $__fn = function($f) use ($__global_Data_Set_NonEmpty_compose, $foldMap11, $__global_Data_Set_NonEmpty_toUnfoldable12, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Set_NonEmpty_compose)(($foldMap11)($f), $__global_Data_Set_NonEmpty_toUnfoldable12);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldr1" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_NonEmpty_compose = ($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose'));
$__global_Data_Set_NonEmpty_foldr1 = ($GLOBALS['Data_Set_NonEmpty_foldr1'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_foldr1'));
$__global_Data_Set_NonEmpty_toUnfoldable12 = ($GLOBALS['Data_Set_NonEmpty_toUnfoldable12'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_toUnfoldable12'));
    $__res = ($__global_Data_Set_NonEmpty_compose)(($__global_Data_Set_NonEmpty_foldr1)($f), $__global_Data_Set_NonEmpty_toUnfoldable12);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldl1" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_NonEmpty_compose = ($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose'));
$__global_Data_Set_NonEmpty_foldl1 = ($GLOBALS['Data_Set_NonEmpty_foldl1'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_foldl1'));
$__global_Data_Set_NonEmpty_toUnfoldable12 = ($GLOBALS['Data_Set_NonEmpty_toUnfoldable12'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_toUnfoldable12'));
    $__res = ($__global_Data_Set_NonEmpty_compose)(($__global_Data_Set_NonEmpty_foldl1)($f), $__global_Data_Set_NonEmpty_toUnfoldable12);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_foldableSet = ($GLOBALS['Data_Set_foldableSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldableSet'));
    $__res = $__global_Data_Set_foldableSet;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Set_NonEmpty_eq1NonEmptySet': $v = ($GLOBALS['Data_Set_eq1Set'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_eq1Set')); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };










// Data_Set_NonEmpty_NonEmptySet
function Data_Set_NonEmpty_NonEmptySet($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_NonEmptySet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_NonEmptySet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_NonEmptySet';

// Data_Set_NonEmpty_unionSet
function Data_Set_NonEmpty_unionSet($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_unionSet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Set_NonEmpty_coerce)($__case_res_0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_unionSet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_unionSet';

// Data_Set_NonEmpty_toUnfoldable1
function Data_Set_NonEmpty_toUnfoldable1($dictUnfoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_toUnfoldable1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_stepAscCps = ($GLOBALS['Data_Map_Internal_stepAscCps'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAscCps'));
$__global_Data_Function_Uncurried_mkFn3 = ($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3'));
$__global_Partial_Unsafe_unsafeCrashWith = ($GLOBALS['Partial_Unsafe_unsafeCrashWith'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafeCrashWith'));
$__global_Data_Set_NonEmpty_compose = ($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose'));
$__global_Data_Set_NonEmpty_map1 = ($GLOBALS['Data_Set_NonEmpty_map1'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_map1'));
$__global_Data_Map_Internal_toMapIter = ($GLOBALS['Data_Map_Internal_toMapIter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_toMapIter'));
$__global_Data_Set_toMap = ($GLOBALS['Data_Set_toMap'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toMap'));
$__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
$stepNext = ($__global_Data_Map_Internal_stepAscCps)(($__global_Data_Function_Uncurried_mkFn3)((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
    if ($__num === 1) return function($v, $next = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $next);
      if ($__num2 === 1) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(((function() {
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
})())($k, $next));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
$stepHead = ($__global_Data_Map_Internal_stepAscCps)(($__global_Data_Function_Uncurried_mkFn3)((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
    if ($__num === 1) return function($v, $next = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $next);
      if ($__num2 === 1) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ((function() {
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
})())($k, $next);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), (function() use ($__global_Partial_Unsafe_unsafeCrashWith) {
  $__fn = function($v) use ($__global_Partial_Unsafe_unsafeCrashWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Partial_Unsafe_unsafeCrashWith)("toUnfoldable1: impossible");
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
$__case_0 = $dictUnfoldable1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->unfoldr1;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Set_NonEmpty_compose)(($__case_res_0)((function() use ($__global_Data_Set_NonEmpty_map1, $stepNext) {
  $__fn = function($v) use ($__global_Data_Set_NonEmpty_map1, $stepNext, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Set_NonEmpty_map1)($stepNext, $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($__global_Data_Set_NonEmpty_compose)($stepHead, ($__global_Data_Set_NonEmpty_compose)($__global_Data_Map_Internal_toMapIter, ($__global_Data_Set_NonEmpty_compose)($__global_Data_Set_toMap, $__global_Data_Set_NonEmpty_coerce))));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_toUnfoldable1'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_toUnfoldable1';



// Data_Set_NonEmpty_toUnfoldable
function Data_Set_NonEmpty_toUnfoldable($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_toUnfoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
$__global_Data_Set_compose = ($GLOBALS['Data_Set_compose'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_compose'));
$__global_Data_List_map = ($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map'));
$__global_Data_List_uncons = ($GLOBALS['Data_List_uncons'] ?? \Data\List\phpurs_eval_thunk('Data_List_uncons'));
$__global_Data_Set_toList = ($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList'));
$__case_0 = $dictUnfoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->unfoldr;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Set_NonEmpty_coerce)(($__global_Data_Set_compose)(($__case_res_0)((function() use ($__global_Data_List_map, $__global_Data_List_uncons) {
  $__fn = function($xs) use ($__global_Data_List_map, $__global_Data_List_uncons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_List_map)((function() {
  $__fn = function($rec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ((function() {
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
})())(($rec)->head, ($rec)->tail);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_List_uncons)($xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $__global_Data_Set_toList));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_toUnfoldable'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_toUnfoldable';

// Data_Set_NonEmpty_toSet
function Data_Set_NonEmpty_toSet($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_toSet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return $s;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_toSet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_toSet';

// Data_Set_NonEmpty_subset
function Data_Set_NonEmpty_subset($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_subset';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
$__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
$__global_Data_Map_Internal_unsafeDifference = ($GLOBALS['Data_Map_Internal_unsafeDifference'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeDifference'));
$__global_Data_Set_isEmpty = ($GLOBALS['Data_Set_isEmpty'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_isEmpty'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$difference1 = ($__global_Data_Set_coerce)((function() use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeDifference, $compare) {
  $__fn = function($m1, $m2 = null) use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeDifference, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m2) use ($m1, &$__fn) { return $__fn($m1, $m2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeDifference, $compare, $m1, $m2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    $__res = ($__global_Data_Set_NonEmpty_coerce)((function() use ($__global_Data_Set_isEmpty, $difference1) {
  $__fn = function($s1, $s2 = null) use ($__global_Data_Set_isEmpty, $difference1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s2) use ($s1, &$__fn) { return $__fn($s1, $s2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Set_isEmpty)(($difference1)($s1, $s2));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_subset'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_subset';



// Data_Set_NonEmpty_showNonEmptySet
function Data_Set_NonEmpty_showNonEmptySet($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_showNonEmptySet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_NonEmpty_append = ($GLOBALS['Data_Set_NonEmpty_append'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_append'));
$__global_Data_Set_NonEmpty_toUnfoldable11 = ($GLOBALS['Data_Set_NonEmpty_toUnfoldable11'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_toUnfoldable11'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show = $__case_res_0;
    $__res = (object)["show" => (function() use ($__global_Data_Set_NonEmpty_append, $show, $__global_Data_Set_NonEmpty_toUnfoldable11) {
  $__fn = function($s) use ($__global_Data_Set_NonEmpty_append, $show, $__global_Data_Set_NonEmpty_toUnfoldable11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Set_NonEmpty_append)("(fromFoldable1 ", ($__global_Data_Set_NonEmpty_append)(($show)(($__global_Data_Set_NonEmpty_toUnfoldable11)($s)), ")"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_showNonEmptySet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_showNonEmptySet';

// Data_Set_NonEmpty_semigroupNonEmptySet
function Data_Set_NonEmpty_semigroupNonEmptySet($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_semigroupNonEmptySet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = (object)["append" => ($__global_Data_Set_coerce)(((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeUnionWith, $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($__global_Data_Function_const))];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_semigroupNonEmptySet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_semigroupNonEmptySet';

// Data_Set_NonEmpty_properSubset
function Data_Set_NonEmpty_properSubset($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_properSubset';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
$__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
$__global_Data_Map_Internal_unsafeDifference = ($GLOBALS['Data_Map_Internal_unsafeDifference'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeDifference'));
$__global_Data_Set_isEmpty = ($GLOBALS['Data_Set_isEmpty'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_isEmpty'));
$__global_Data_Set_conj = ($GLOBALS['Data_Set_conj'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_conj'));
$__global_Data_Set_notEq = ($GLOBALS['Data_Set_notEq'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_notEq'));
$__global_Data_Set_size = ($GLOBALS['Data_Set_size'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_size'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$difference1 = ($__global_Data_Set_coerce)((function() use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeDifference, $compare) {
  $__fn = function($m1, $m2 = null) use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeDifference, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m2) use ($m1, &$__fn) { return $__fn($m1, $m2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeDifference, $compare, $m1, $m2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
$subset1 = (function() use ($__global_Data_Set_isEmpty, $difference1) {
  $__fn = function($s1, $s2 = null) use ($__global_Data_Set_isEmpty, $difference1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s2) use ($s1, &$__fn) { return $__fn($s1, $s2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Set_isEmpty)(($difference1)($s1, $s2));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Data_Set_NonEmpty_coerce)((function() use ($__global_Data_Set_conj, $__global_Data_Set_notEq, $__global_Data_Set_size, $subset1) {
  $__fn = function($s1, $s2 = null) use ($__global_Data_Set_conj, $__global_Data_Set_notEq, $__global_Data_Set_size, $subset1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s2) use ($s1, &$__fn) { return $__fn($s1, $s2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Set_conj)(($__global_Data_Set_notEq)(($__global_Data_Set_size)($s1), ($__global_Data_Set_size)($s2)), ($subset1)($s1, $s2));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_properSubset'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_properSubset';

// Data_Set_NonEmpty_ordNonEmptySet
function Data_Set_NonEmpty_ordNonEmptySet($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_ordNonEmptySet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_toList = ($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList'));
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$__case_0 = $dict;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq = $__case_res_1;
$eqSet1 = (object)["eq" => (function() use ($eq) {
  $__body = function($v, $v1) use ($eq) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m1 = $__case_0;
$m2 = $__case_1;
return ($eq)($m1, $m2);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($eq, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
    $__res = (object)["compare" => (function() use ($compare, $__global_Data_Set_toList) {
  $__fn = function($s1, $s2 = null) use ($compare, $__global_Data_Set_toList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s2) use ($s1, &$__fn) { return $__fn($s1, $s2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($compare)(($__global_Data_Set_toList)($s1), ($__global_Data_Set_toList)($s2));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqSet1) {
  $__fn = function($__dollar____unused) use ($eqSet1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqSet1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_ordNonEmptySet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_ordNonEmptySet';


// Data_Set_NonEmpty_min
function Data_Set_NonEmpty_min($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_min';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
    $__global_Data_Set_NonEmpty_fromJust = ($GLOBALS['Data_Set_NonEmpty_fromJust'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_fromJust'));
    $__global_Data_Set_findMin = ($GLOBALS['Data_Set_findMin'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_findMin'));
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return ($__global_Partial_Unsafe__unsafePartial)((function() use ($__global_Data_Set_NonEmpty_fromJust, $__global_Data_Set_findMin, $s) {
  $__fn = function($__dollar____unused) use ($__global_Data_Set_NonEmpty_fromJust, $__global_Data_Set_findMin, $s, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Set_NonEmpty_fromJust)(($__global_Data_Set_findMin)($s));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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
$GLOBALS['Data_Set_NonEmpty_min'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_min';

// Data_Set_NonEmpty_member
function Data_Set_NonEmpty_member($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_member';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
    $__res = ($__global_Data_Set_NonEmpty_coerce)(($__global_Data_Set_coerce)((function() use ($compare) {
  $__fn = function($k) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($compare, $k, &$go) {
  $__fn = function($v) use ($compare, $k, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return false;
break;
case "Node":
$mk = ($__case_0)->v2;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue 3;
break;
case "GT":
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue 3;
break;
case "EQ":
return true;
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
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_member'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_member';

// Data_Set_NonEmpty_max
function Data_Set_NonEmpty_max($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_max';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
    $__global_Data_Set_NonEmpty_fromJust = ($GLOBALS['Data_Set_NonEmpty_fromJust'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_fromJust'));
    $__global_Data_Set_findMax = ($GLOBALS['Data_Set_findMax'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_findMax'));
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return ($__global_Partial_Unsafe__unsafePartial)((function() use ($__global_Data_Set_NonEmpty_fromJust, $__global_Data_Set_findMax, $s) {
  $__fn = function($__dollar____unused) use ($__global_Data_Set_NonEmpty_fromJust, $__global_Data_Set_findMax, $s, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Set_NonEmpty_fromJust)(($__global_Data_Set_findMax)($s));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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
$GLOBALS['Data_Set_NonEmpty_max'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_max';

// Data_Set_NonEmpty_mapMaybe
function Data_Set_NonEmpty_mapMaybe($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_mapMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
$__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Data_Set_foldr1 = ($GLOBALS['Data_Set_foldr1'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldr1'));
$__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$insert1 = (function() use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode) {
  $__fn = function($k, $v = null) use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($k, &$__fn) { return $__fn($k, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go) {
  $__fn = function($v1) use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Leaf":
return ($__global_Data_Map_Internal_singleton)($k, $v);
break;
case "Node":
$mh = ($__case_0)->v0;
$ms = ($__case_0)->v1;
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "LT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
break;
case "GT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
break;
case "EQ":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($mh, $ms, $k, $v, $ml, $mr);
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
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$insert1 = (function() use ($insert1, $__global_Data_Unit_unit) {
  $__body = function($a, $v) use ($insert1, $__global_Data_Unit_unit) {
    $__case_0 = $a;
    $__case_1 = $v;
    if (true) {
$a1 = $__case_0;
$m = $__case_1;
return ($insert1)($a1, $__global_Data_Unit_unit, $m);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v = null) use ($insert1, $__global_Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($a, &$__fn) { return $__fn($a, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Data_Set_NonEmpty_coerce)((function() use ($__global_Data_Set_foldr1, $__global_Data_Maybe_maybe, $insert1) {
  $__fn = function($f) use ($__global_Data_Set_foldr1, $__global_Data_Maybe_maybe, $insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Set_foldr1)((function() use ($__global_Data_Maybe_maybe, $insert1, $f) {
  $__fn = function($a, $acc = null) use ($__global_Data_Maybe_maybe, $insert1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($a, &$__fn) { return $__fn($a, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Maybe_maybe)($acc, (function() use ($insert1, $acc) {
  $__fn = function($b) use ($insert1, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($insert1)($b, $acc);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($f)($a));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_mapMaybe'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_mapMaybe';

// Data_Set_NonEmpty_map
function Data_Set_NonEmpty_map($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_map';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
$__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Data_Set_foldl1 = ($GLOBALS['Data_Set_foldl1'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldl1'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$insert1 = (function() use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode) {
  $__fn = function($k, $v = null) use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($k, &$__fn) { return $__fn($k, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go) {
  $__fn = function($v1) use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Leaf":
return ($__global_Data_Map_Internal_singleton)($k, $v);
break;
case "Node":
$mh = ($__case_0)->v0;
$ms = ($__case_0)->v1;
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "LT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
break;
case "GT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
break;
case "EQ":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($mh, $ms, $k, $v, $ml, $mr);
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
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$insert1 = (function() use ($insert1, $__global_Data_Unit_unit) {
  $__body = function($a, $v) use ($insert1, $__global_Data_Unit_unit) {
    $__case_0 = $a;
    $__case_1 = $v;
    if (true) {
$a1 = $__case_0;
$m = $__case_1;
return ($insert1)($a1, $__global_Data_Unit_unit, $m);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v = null) use ($insert1, $__global_Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($a, &$__fn) { return $__fn($a, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Data_Set_NonEmpty_coerce)((function() use ($__global_Data_Set_foldl1, $insert1) {
  $__fn = function($f) use ($__global_Data_Set_foldl1, $insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Set_foldl1)((function() use ($insert1, $f) {
  $__fn = function($m, $a = null) use ($insert1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($m, &$__fn) { return $__fn($m, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($insert1)(($f)($a), $m);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_map'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_map';

// Data_Set_NonEmpty_insert
function Data_Set_NonEmpty_insert($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_insert';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
$__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$insert1 = (function() use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode) {
  $__fn = function($k, $v = null) use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($k, &$__fn) { return $__fn($k, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go) {
  $__fn = function($v1) use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Leaf":
return ($__global_Data_Map_Internal_singleton)($k, $v);
break;
case "Node":
$mh = ($__case_0)->v0;
$ms = ($__case_0)->v1;
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "LT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
break;
case "GT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
break;
case "EQ":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($mh, $ms, $k, $v, $ml, $mr);
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
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Data_Set_NonEmpty_coerce)((function() use ($insert1, $__global_Data_Unit_unit) {
  $__body = function($a, $v) use ($insert1, $__global_Data_Unit_unit) {
    $__case_0 = $a;
    $__case_1 = $v;
    if (true) {
$a1 = $__case_0;
$m = $__case_1;
return ($insert1)($a1, $__global_Data_Unit_unit, $m);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v = null) use ($insert1, $__global_Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($a, &$__fn) { return $__fn($a, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_insert'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_insert';

// Data_Set_NonEmpty_fromSet
function Data_Set_NonEmpty_fromSet($s) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_fromSet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($s) {
    $__global_Data_Set_isEmpty = ($GLOBALS['Data_Set_isEmpty'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_isEmpty'));
    $__case_0 = ($__global_Data_Set_isEmpty)($s);
    switch ($__case_0) {
case true:
return ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
default:
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($s);
break;
};
  };
    $__res = $__body($s);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_fromSet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_fromSet';

// Data_Set_NonEmpty_intersection
function Data_Set_NonEmpty_intersection($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_intersection';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeIntersectionWith = ($GLOBALS['Data_Map_Internal_unsafeIntersectionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeIntersectionWith'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Data_Set_NonEmpty_fromSet = ($GLOBALS['Data_Set_NonEmpty_fromSet'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_fromSet'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$intersection1 = ($__global_Data_Set_coerce)(((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeIntersectionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeIntersectionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeIntersectionWith, $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($__global_Data_Function_const));
    $__res = (function() use ($__global_Data_Set_NonEmpty_fromSet, $intersection1) {
  $__body = function($v, $v1) use ($__global_Data_Set_NonEmpty_fromSet, $intersection1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$s1 = $__case_0;
$s2 = $__case_1;
return ($__global_Data_Set_NonEmpty_fromSet)(($intersection1)($s1, $s2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($__global_Data_Set_NonEmpty_fromSet, $intersection1, $__body, &$__fn) {
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
$GLOBALS['Data_Set_NonEmpty_intersection'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_intersection';

// Data_Set_NonEmpty_fromFoldable1
function Data_Set_NonEmpty_fromFoldable1($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_fromFoldable1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$__global_Data_Set_NonEmpty_singleton = ($GLOBALS['Data_Set_NonEmpty_singleton'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_singleton'));
$__case_0 = $dictFoldable1;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldMap1;
} else {
throw new \Exception("Pattern match failure");
};
$foldMap11 = $__case_res_0;
    $__res = (function() use ($foldMap11, $__global_Data_Set_coerce, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $__global_Data_Function_const, $__global_Data_Set_NonEmpty_singleton) {
  $__fn = function($dictOrd) use ($foldMap11, $__global_Data_Set_coerce, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $__global_Data_Function_const, $__global_Data_Set_NonEmpty_singleton, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictOrd;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_1;
    $__res = ($foldMap11)((object)["append" => ($__global_Data_Set_coerce)(((function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeUnionWith, $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())($__global_Data_Function_const))], $__global_Data_Set_NonEmpty_singleton);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_fromFoldable1'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_fromFoldable1';

// Data_Set_NonEmpty_fromFoldable
function Data_Set_NonEmpty_fromFoldable($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_fromFoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Data_Set_NonEmpty_compose = ($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose'));
$__global_Data_Set_NonEmpty_fromSet = ($GLOBALS['Data_Set_NonEmpty_fromSet'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_fromSet'));
$__case_0 = $dictFoldable;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->foldl;
} else {
throw new \Exception("Pattern match failure");
};
$foldl2 = $__case_res_0;
$fromFoldable2 = (function() use ($__global_Data_Map_Internal_singleton, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Unit_unit, $foldl2) {
  $__fn = function($dictOrd) use ($__global_Data_Map_Internal_singleton, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Unit_unit, $foldl2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictOrd;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_1;
$insert1 = (function() use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode) {
  $__fn = function($k, $v = null) use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($k, &$__fn) { return $__fn($k, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go) {
  $__fn = function($v1) use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Leaf":
return ($__global_Data_Map_Internal_singleton)($k, $v);
break;
case "Node":
$mh = ($__case_0)->v0;
$ms = ($__case_0)->v1;
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "LT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
break;
case "GT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
break;
case "EQ":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($mh, $ms, $k, $v, $ml, $mr);
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
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$insert1 = (function() use ($insert1, $__global_Data_Unit_unit) {
  $__body = function($a, $v) use ($insert1, $__global_Data_Unit_unit) {
    $__case_0 = $a;
    $__case_1 = $v;
    if (true) {
$a1 = $__case_0;
$m = $__case_1;
return ($insert1)($a1, $__global_Data_Unit_unit, $m);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v = null) use ($insert1, $__global_Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($a, &$__fn) { return $__fn($a, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($foldl2)((function() use ($insert1) {
  $__fn = function($m, $a = null) use ($insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($m, &$__fn) { return $__fn($m, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($insert1)($a, $m);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($__global_Data_Set_NonEmpty_compose, $__global_Data_Set_NonEmpty_fromSet, $fromFoldable2) {
  $__fn = function($dictOrd) use ($__global_Data_Set_NonEmpty_compose, $__global_Data_Set_NonEmpty_fromSet, $fromFoldable2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Set_NonEmpty_compose)($__global_Data_Set_NonEmpty_fromSet, ($fromFoldable2)($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_fromFoldable'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_fromFoldable';



// Data_Set_NonEmpty_filter
function Data_Set_NonEmpty_filter($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_filter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
    $__res = ($__global_Data_Set_NonEmpty_coerce)(($__global_Data_Set_coerce)((function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
return "/* Unsupported: Guards not supported */";
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_filter'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_filter';

// Data_Set_NonEmpty_eqNonEmptySet
function Data_Set_NonEmpty_eqNonEmptySet($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_eqNonEmptySet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dict;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq = $__case_res_0;
    $__res = (object)["eq" => (function() use ($eq) {
  $__body = function($v, $v1) use ($eq) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m1 = $__case_0;
$m2 = $__case_1;
return ($eq)($m1, $m2);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($eq, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_eqNonEmptySet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_eqNonEmptySet';


// Data_Set_NonEmpty_difference
function Data_Set_NonEmpty_difference($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_difference';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
$__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
$__global_Data_Map_Internal_unsafeDifference = ($GLOBALS['Data_Map_Internal_unsafeDifference'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeDifference'));
$__global_Data_Set_NonEmpty_fromSet = ($GLOBALS['Data_Set_NonEmpty_fromSet'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_fromSet'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$difference1 = ($__global_Data_Set_coerce)((function() use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeDifference, $compare) {
  $__fn = function($m1, $m2 = null) use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeDifference, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m2) use ($m1, &$__fn) { return $__fn($m1, $m2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeDifference, $compare, $m1, $m2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    $__res = (function() use ($__global_Data_Set_NonEmpty_fromSet, $difference1) {
  $__body = function($v, $v1) use ($__global_Data_Set_NonEmpty_fromSet, $difference1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$s1 = $__case_0;
$s2 = $__case_1;
return ($__global_Data_Set_NonEmpty_fromSet)(($difference1)($s1, $s2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($__global_Data_Set_NonEmpty_fromSet, $difference1, $__body, &$__fn) {
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
$GLOBALS['Data_Set_NonEmpty_difference'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_difference';

// Data_Set_NonEmpty_delete
function Data_Set_NonEmpty_delete($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_delete';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
$__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
$__global_Data_Set_NonEmpty_fromSet = ($GLOBALS['Data_Set_NonEmpty_fromSet'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_fromSet'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$delete1 = ($__global_Data_Set_coerce)((function() use ($compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($k) use ($compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($compare, $k, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($v) use ($compare, $k, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
return ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
break;
case "GT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
break;
case "EQ":
return ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, $ml, $mr);
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
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    $__res = (function() use ($__global_Data_Set_NonEmpty_fromSet, $delete1) {
  $__body = function($a, $v) use ($__global_Data_Set_NonEmpty_fromSet, $delete1) {
    $__case_0 = $a;
    $__case_1 = $v;
    if (true) {
$a1 = $__case_0;
$s = $__case_1;
return ($__global_Data_Set_NonEmpty_fromSet)(($delete1)($a1, $s));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v = null) use ($__global_Data_Set_NonEmpty_fromSet, $delete1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($a, &$__fn) { return $__fn($a, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_delete'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_delete';

// Data_Set_NonEmpty_cons
function Data_Set_NonEmpty_cons($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_cons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
$__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
$__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
$__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__case_0 = $dictOrd;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compare;
} else {
throw new \Exception("Pattern match failure");
};
$compare = $__case_res_0;
$insert1 = (function() use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode) {
  $__fn = function($k, $v = null) use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($k, &$__fn) { return $__fn($k, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go) {
  $__fn = function($v1) use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Leaf":
return ($__global_Data_Map_Internal_singleton)($k, $v);
break;
case "Node":
$mh = ($__case_0)->v0;
$ms = ($__case_0)->v1;
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "LT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
break;
case "GT":
return ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
break;
case "EQ":
return ((function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})())($mh, $ms, $k, $v, $ml, $mr);
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
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Data_Set_NonEmpty_coerce)((function() use ($insert1, $__global_Data_Unit_unit) {
  $__body = function($a, $v) use ($insert1, $__global_Data_Unit_unit) {
    $__case_0 = $a;
    $__case_1 = $v;
    if (true) {
$a1 = $__case_0;
$m = $__case_1;
return ($insert1)($a1, $__global_Data_Unit_unit, $m);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v = null) use ($insert1, $__global_Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($a, &$__fn) { return $__fn($a, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_cons'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_cons';

