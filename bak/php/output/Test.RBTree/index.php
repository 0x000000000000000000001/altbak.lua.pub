<?php

namespace Test\RBTree;

require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Test.RBTree/index.php';

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
      case 'Test_RBTree_greaterThan': $v = (($GLOBALS['Data_Ord_greaterThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThan')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Test_RBTree_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Test_RBTree_lessThan': $v = (($GLOBALS['Data_Ord_lessThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThan')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Test_RBTree_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Test_RBTree_R': $v = ($GLOBALS['__phpurs_data0_R'] ??= new Phpurs_Data0("R")); break;
      case 'Test_RBTree_B': $v = ($GLOBALS['__phpurs_data0_B'] ??= new Phpurs_Data0("B")); break;
      case 'Test_RBTree_E': $v = ($GLOBALS['__phpurs_data0_E'] ??= new Phpurs_Data0("E")); break;
      case 'Test_RBTree_describe': $v = (($GLOBALS['Effect_Console_log'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_log')))("Red-Black Tree (100k Worst-Case Insertions):"); break;
      case 'Test_RBTree_act': $v = (($GLOBALS['Effect_Console_logShow'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_logShow')))(($GLOBALS['Data_Show_showInt'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showInt')), (($GLOBALS['Test_RBTree_depth'] ?? \Test\RBTree\phpurs_eval_thunk('Test_RBTree_depth')))((($GLOBALS['Test_RBTree_buildTree'] ?? \Test\RBTree\phpurs_eval_thunk('Test_RBTree_buildTree')))(100000, ($GLOBALS['__phpurs_data0_E'] ??= new Phpurs_Data0("E"))))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };









// Test_RBTree_T
function Test_RBTree_T($value0, $value1 = null, $value2 = null, $value3 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_RBTree_T';
  if ($__num < 4) {
    if ($__num === 3) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
    if ($__num === 2) return function($value2, $value3 = null) use ($value0, $value1, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2, $value3);
      if ($__num2 === 1) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
      return phpurs_curry_fallback($__fn, [$value0, $value1], 4);
    };
    if ($__num === 1) return function($value1, $value2 = null, $value3 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($value0, $value1, $value2, $value3);
      if ($__num2 === 2) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
      if ($__num2 === 1) return function($value2, $value3 = null) use ($value0, $value1, $__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($value0, $value1, $value2, $value3);
        if ($__num3 === 1) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
        return phpurs_curry_fallback($__fn, [$value0, $value1], 4);
      };
      return phpurs_curry_fallback($__fn, [$value0], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = new Phpurs_Data4("T", $value0, $value1, $value2, $value3);
    return 4 < $__num ? $__res(...array_slice(func_get_args(), 4)) : $__res;
}
$GLOBALS['Test_RBTree_T'] = __NAMESPACE__ . '\\Test_RBTree_T';

// Test_RBTree_max
function Test_RBTree_max($x, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_RBTree_max';
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, $__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($x, $y) {
    $__global_Test_RBTree_greaterThan = ($GLOBALS['Test_RBTree_greaterThan'] ?? \Test\RBTree\phpurs_eval_thunk('Test_RBTree_greaterThan'));
    $__case_0 = ($__global_Test_RBTree_greaterThan)($x, $y);
    switch ($__case_0) {
case true:
return $x;
break;
default:
return $y;
break;
};
  };
    $__res = $__body($x, $y);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Test_RBTree_max'] = __NAMESPACE__ . '\\Test_RBTree_max';


// Test_RBTree_depth
function Test_RBTree_depth($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_RBTree_depth';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Test_RBTree_max = ($GLOBALS['Test_RBTree_max'] ?? \Test\RBTree\phpurs_eval_thunk('Test_RBTree_max'));
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "E":
return 0;
break;
case "T":
$a = ($__case_0)->v1;
$b = ($__case_0)->v3;
return (1 + ($__global_Test_RBTree_max)((($GLOBALS['Test_RBTree_depth'] ?? \Test\RBTree\phpurs_eval_thunk('Test_RBTree_depth')))($a), (($GLOBALS['Test_RBTree_depth'] ?? \Test\RBTree\phpurs_eval_thunk('Test_RBTree_depth')))($b)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Test_RBTree_depth'] = __NAMESPACE__ . '\\Test_RBTree_depth';

// Test_RBTree_balance
function Test_RBTree_balance($v, $v1 = null, $v2 = null, $v3 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_RBTree_balance';
  if ($__num < 4) {
    if ($__num === 3) return function($v3) use ($v, $v1, $v2, $__fn) { return $__fn($v, $v1, $v2, $v3); };
    if ($__num === 2) return function($v2, $v3 = null) use ($v, $v1, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2, $v3);
      if ($__num2 === 1) return function($v3) use ($v, $v1, $v2, $__fn) { return $__fn($v, $v1, $v2, $v3); };
      return phpurs_curry_fallback($__fn, [$v, $v1], 4);
    };
    if ($__num === 1) return function($v1, $v2 = null, $v3 = null) use ($v, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($v, $v1, $v2, $v3);
      if ($__num2 === 2) return function($v3) use ($v, $v1, $v2, $__fn) { return $__fn($v, $v1, $v2, $v3); };
      if ($__num2 === 1) return function($v2, $v3 = null) use ($v, $v1, $__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($v, $v1, $v2, $v3);
        if ($__num3 === 1) return function($v3) use ($v, $v1, $v2, $__fn) { return $__fn($v, $v1, $v2, $v3); };
        return phpurs_curry_fallback($__fn, [$v, $v1], 4);
      };
      return phpurs_curry_fallback($__fn, [$v], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__body = function($v, $v1, $v2, $v3) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    $__case_3 = $v3;
    if (((($__case_0)->tag === "B") && (((($__case_1)->tag === "T") && ((($__case_1)->v0)->tag === "R")) && (((($__case_1)->v1)->tag === "T") && (((($__case_1)->v1)->v0)->tag === "R"))))) {
$a = (($__case_1)->v1)->v1;
$x = (($__case_1)->v1)->v2;
$b = (($__case_1)->v1)->v3;
$y = ($__case_1)->v2;
$c = ($__case_1)->v3;
$z = $__case_2;
$d = $__case_3;
return new Phpurs_Data4("T", ($GLOBALS['__phpurs_data0_R'] ??= new Phpurs_Data0("R")), new Phpurs_Data4("T", ($GLOBALS['__phpurs_data0_B'] ??= new Phpurs_Data0("B")), $a, $x, $b), $y, new Phpurs_Data4("T", ($GLOBALS['__phpurs_data0_B'] ??= new Phpurs_Data0("B")), $c, $z, $d));
} else {
if (((($__case_0)->tag === "B") && (((($__case_1)->tag === "T") && ((($__case_1)->v0)->tag === "R")) && (((($__case_1)->v3)->tag === "T") && (((($__case_1)->v3)->v0)->tag === "R"))))) {
$a = ($__case_1)->v1;
$x = ($__case_1)->v2;
$b = (($__case_1)->v3)->v1;
$y = (($__case_1)->v3)->v2;
$c = (($__case_1)->v3)->v3;
$z = $__case_2;
$d = $__case_3;
return new Phpurs_Data4("T", ($GLOBALS['__phpurs_data0_R'] ??= new Phpurs_Data0("R")), new Phpurs_Data4("T", ($GLOBALS['__phpurs_data0_B'] ??= new Phpurs_Data0("B")), $a, $x, $b), $y, new Phpurs_Data4("T", ($GLOBALS['__phpurs_data0_B'] ??= new Phpurs_Data0("B")), $c, $z, $d));
} else {
if (((($__case_0)->tag === "B") && (((($__case_3)->tag === "T") && ((($__case_3)->v0)->tag === "R")) && (((($__case_3)->v1)->tag === "T") && (((($__case_3)->v1)->v0)->tag === "R"))))) {
$a = $__case_1;
$x = $__case_2;
$b = (($__case_3)->v1)->v1;
$y = (($__case_3)->v1)->v2;
$c = (($__case_3)->v1)->v3;
$z = ($__case_3)->v2;
$d = ($__case_3)->v3;
return new Phpurs_Data4("T", ($GLOBALS['__phpurs_data0_R'] ??= new Phpurs_Data0("R")), new Phpurs_Data4("T", ($GLOBALS['__phpurs_data0_B'] ??= new Phpurs_Data0("B")), $a, $x, $b), $y, new Phpurs_Data4("T", ($GLOBALS['__phpurs_data0_B'] ??= new Phpurs_Data0("B")), $c, $z, $d));
} else {
if (((($__case_0)->tag === "B") && (((($__case_3)->tag === "T") && ((($__case_3)->v0)->tag === "R")) && (((($__case_3)->v3)->tag === "T") && (((($__case_3)->v3)->v0)->tag === "R"))))) {
$a = $__case_1;
$x = $__case_2;
$b = ($__case_3)->v1;
$y = ($__case_3)->v2;
$c = (($__case_3)->v3)->v1;
$z = (($__case_3)->v3)->v2;
$d = (($__case_3)->v3)->v3;
return new Phpurs_Data4("T", ($GLOBALS['__phpurs_data0_R'] ??= new Phpurs_Data0("R")), new Phpurs_Data4("T", ($GLOBALS['__phpurs_data0_B'] ??= new Phpurs_Data0("B")), $a, $x, $b), $y, new Phpurs_Data4("T", ($GLOBALS['__phpurs_data0_B'] ??= new Phpurs_Data0("B")), $c, $z, $d));
} else {
if (true) {
$color = $__case_0;
$a = $__case_1;
$x = $__case_2;
$b = $__case_3;
return new Phpurs_Data4("T", $color, $a, $x, $b);
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
  };
    $__res = $__body($v, $v1, $v2, $v3);
    return 4 < $__num ? $__res(...array_slice(func_get_args(), 4)) : $__res;
}
$GLOBALS['Test_RBTree_balance'] = __NAMESPACE__ . '\\Test_RBTree_balance';

// Test_RBTree_insert
function Test_RBTree_insert($x, $s = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_RBTree_insert';
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($x, $__fn) { return $__fn($x, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Test_RBTree_lessThan = ($GLOBALS['Test_RBTree_lessThan'] ?? \Test\RBTree\phpurs_eval_thunk('Test_RBTree_lessThan'));
$__global_Test_RBTree_balance = ($GLOBALS['Test_RBTree_balance'] ?? \Test\RBTree\phpurs_eval_thunk('Test_RBTree_balance'));
$__global_Test_RBTree_greaterThan = ($GLOBALS['Test_RBTree_greaterThan'] ?? \Test\RBTree\phpurs_eval_thunk('Test_RBTree_greaterThan'));
$makeBlack = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "T":
$a = ($__case_0)->v1;
$y = ($__case_0)->v2;
$b = ($__case_0)->v3;
return new Phpurs_Data4("T", ($GLOBALS['__phpurs_data0_B'] ??= new Phpurs_Data0("B")), $a, $y, $b);
break;
case "E":
return ($GLOBALS['__phpurs_data0_E'] ??= new Phpurs_Data0("E"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$ins = (function() use ($x, $__global_Test_RBTree_lessThan, $__global_Test_RBTree_balance, &$ins, $__global_Test_RBTree_greaterThan) {
  $__fn = function($v) use ($x, $__global_Test_RBTree_lessThan, $__global_Test_RBTree_balance, &$ins, $__global_Test_RBTree_greaterThan, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "E":
return new Phpurs_Data4("T", ($GLOBALS['__phpurs_data0_R'] ??= new Phpurs_Data0("R")), ($GLOBALS['__phpurs_data0_E'] ??= new Phpurs_Data0("E")), $x, ($GLOBALS['__phpurs_data0_E'] ??= new Phpurs_Data0("E")));
break;
case "T":
$color = ($__case_0)->v0;
$a = ($__case_0)->v1;
$y = ($__case_0)->v2;
$b = ($__case_0)->v3;
$__case_0 = ($__global_Test_RBTree_lessThan)($x, $y);
switch ($__case_0) {
case true:
return ($__global_Test_RBTree_balance)($color, ($ins)($a), $y, $b);
break;
default:
$__case_0 = ($__global_Test_RBTree_greaterThan)($x, $y);
switch ($__case_0) {
case true:
return ($__global_Test_RBTree_balance)($color, $a, $y, ($ins)($b));
break;
default:
return new Phpurs_Data4("T", $color, $a, $y, $b);
break;
};
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
    $__res = ($makeBlack)(($ins)($s));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Test_RBTree_insert'] = __NAMESPACE__ . '\\Test_RBTree_insert';

// Test_RBTree_buildTree
function Test_RBTree_buildTree($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_RBTree_buildTree';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Test_RBTree_insert = ($GLOBALS['Test_RBTree_insert'] ?? \Test\RBTree\phpurs_eval_thunk('Test_RBTree_insert'));
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch ($__case_0) {
case 0:
$acc = $__case_1;
return $acc;
break;
default:
$n = $__case_0;
$acc = $__case_1;
$__tco_tmp_0 = ($n - 1);
$__tco_tmp_1 = ($__global_Test_RBTree_insert)($n, $acc);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
break;
};
};
    $__res = null;
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Test_RBTree_buildTree'] = __NAMESPACE__ . '\\Test_RBTree_buildTree';


