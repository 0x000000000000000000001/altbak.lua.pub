<?php

namespace Test\Primes;

require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Test.Primes/index.php';

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
      case 'Test_Primes_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Test_Primes_lessThan': $v = (($GLOBALS['Data_Ord_lessThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThan')))(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Test_Primes_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Test_Primes_notEq': $v = (($GLOBALS['Data_Eq_notEq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_notEq')))(($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt'))); break;
      case 'Test_Primes_mod': $v = ($GLOBALS['Data_EuclideanRing_intMod'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_intMod')); break;
      case 'Test_Primes_Nil': $v = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")); break;
      case 'Test_Primes_describe': $v = (($GLOBALS['Effect_Console_log'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_log')))("Prime Sieve (sum primes up to 500):"); break;
      case 'Test_Primes_act': $v = (($GLOBALS['Effect_Console_logShow'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_logShow')))(($GLOBALS['Data_Show_showInt'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showInt')), (($GLOBALS['Test_Primes_sumList'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_sumList')))((($GLOBALS['Test_Primes_sieve'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_sieve')))((($GLOBALS['Test_Primes_range'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_range')))(2, 500)))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };








// Test_Primes_Cons
function Test_Primes_Cons($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_Primes_Cons';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Cons", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Test_Primes_Cons'] = __NAMESPACE__ . '\\Test_Primes_Cons';

// Test_Primes_sumList
function Test_Primes_sumList($lst) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_Primes_sumList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_0)->tag) {
case "Nil":
$acc = $__case_1;
return $acc;
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$acc = $__case_1;
$__tco_tmp_0 = $xs;
$__tco_tmp_1 = (($GLOBALS['Test_Primes_add'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_add')))($acc, $x);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)($lst, 0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Test_Primes_sumList'] = __NAMESPACE__ . '\\Test_Primes_sumList';

// Test_Primes_reverse
function Test_Primes_reverse($lst) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_Primes_reverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_0)->tag) {
case "Nil":
$acc = $__case_1;
return $acc;
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$acc = $__case_1;
$__tco_tmp_0 = $xs;
$__tco_tmp_1 = (($GLOBALS['Test_Primes_Cons'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_Cons')))($x, $acc);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)($lst, ($GLOBALS['Test_Primes_Nil'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_Nil')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Test_Primes_reverse'] = __NAMESPACE__ . '\\Test_Primes_reverse';

// Test_Primes_range
function Test_Primes_range($start, $end = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_Primes_range';
  if ($__num < 2) {
    if ($__num === 1) return function($end) use ($start, $__fn) { return $__fn($start, $end); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($start, &$go) {
  $__fn = function($curr, $acc = null) use ($start, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($curr, &$__fn) { return $__fn($curr, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = (($GLOBALS['Test_Primes_lessThan'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_lessThan')))($curr, $start);
if (($__case_0 === true)) {
return $acc;
} else {
if (true) {
$__tco_tmp_0 = (($GLOBALS['Test_Primes_sub'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_sub')))($curr, 1);
$__tco_tmp_1 = (($GLOBALS['Test_Primes_Cons'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_Cons')))($curr, $acc);
$curr = $__tco_tmp_0;
$acc = $__tco_tmp_1;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)($end, ($GLOBALS['Test_Primes_Nil'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_Nil')));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Test_Primes_range'] = __NAMESPACE__ . '\\Test_Primes_range';

// Test_Primes_filter
function Test_Primes_filter($p, $lst = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_Primes_filter';
  if ($__num < 2) {
    if ($__num === 1) return function($lst) use ($p, $__fn) { return $__fn($p, $lst); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$go = (function() use ($p, &$go) {
  $__fn = function($v, $v1 = null) use ($p, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_0)->tag) {
case "Nil":
$acc = $__case_1;
return (($GLOBALS['Test_Primes_reverse'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_reverse')))($acc);
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$acc = $__case_1;
$__case_0 = ($p)($x);
if (($__case_0 === true)) {
$__tco_tmp_0 = $xs;
$__tco_tmp_1 = (($GLOBALS['Test_Primes_Cons'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_Cons')))($x, $acc);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
} else {
if (true) {
$__tco_tmp_0 = $xs;
$__tco_tmp_1 = $acc;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
} else {
throw new \Exception("Pattern match failure");
};
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)($lst, ($GLOBALS['Test_Primes_Nil'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_Nil')));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Test_Primes_filter'] = __NAMESPACE__ . '\\Test_Primes_filter';

// Test_Primes_sieve
function Test_Primes_sieve($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_Primes_sieve';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Nil":
return ($GLOBALS['Test_Primes_Nil'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_Nil'));
break;
case "Cons":
$p = ($__case_0)->v0;
$xs = ($__case_0)->v1;
return (($GLOBALS['Test_Primes_Cons'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_Cons')))($p, (($GLOBALS['Test_Primes_sieve'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_sieve')))((($GLOBALS['Test_Primes_filter'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_filter')))((function() use ($p) {
  $__fn = function($x) use ($p, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Test_Primes_notEq'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_notEq')))((($GLOBALS['Test_Primes_mod'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_mod')))($x, $p), 0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Test_Primes_sieve'] = __NAMESPACE__ . '\\Test_Primes_sieve';



