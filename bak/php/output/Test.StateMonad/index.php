<?php

namespace Test\StateMonad;

require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Test.StateMonad/index.php';

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
      case 'Test_StateMonad_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Test_StateMonad_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Test_StateMonad_get': $v = (($GLOBALS['Test_StateMonad_State'] ?? \Test\StateMonad\phpurs_eval_thunk('Test_StateMonad_State')))((function() {
  $__fn = function($s) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (object)["val" => $s, "state" => $s];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Test_StateMonad_describe': $v = (($GLOBALS['Effect_Console_log'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_log')))("State Monad (12M Binds, 6k Stack Depth):"); break;
      case 'Test_StateMonad_act': $v = (($GLOBALS['Effect_Console_logShow'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_logShow')))(($GLOBALS['Data_Show_showInt'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showInt')), (($GLOBALS['Test_StateMonad_runManyTimes'] ?? \Test\StateMonad\phpurs_eval_thunk('Test_StateMonad_runManyTimes')))(20, 0)); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };




// Test_StateMonad_State
function Test_StateMonad_State($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_StateMonad_State';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Test_StateMonad_State'] = __NAMESPACE__ . '\\Test_StateMonad_State';

// Test_StateMonad_runState
function Test_StateMonad_runState($v, $s = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_StateMonad_runState';
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($v, $__fn) { return $__fn($v, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $s) {
    $__case_0 = $v;
    $__case_1 = $s;
    if (true) {
$f = $__case_0;
$s1 = $__case_1;
return ($f)($s1);
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v, $s);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Test_StateMonad_runState'] = __NAMESPACE__ . '\\Test_StateMonad_runState';

// Test_StateMonad_put
function Test_StateMonad_put($s) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_StateMonad_put';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Test_StateMonad_State'] ?? \Test\StateMonad\phpurs_eval_thunk('Test_StateMonad_State')))((function() use ($s) {
  $__fn = function($v) use ($s, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (object)["val" => ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), "state" => $s];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Test_StateMonad_put'] = __NAMESPACE__ . '\\Test_StateMonad_put';

// Test_StateMonad_pureState
function Test_StateMonad_pureState($a) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_StateMonad_pureState';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Test_StateMonad_State'] ?? \Test\StateMonad\phpurs_eval_thunk('Test_StateMonad_State')))((function() use ($a) {
  $__fn = function($s) use ($a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (object)["val" => $a, "state" => $s];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Test_StateMonad_pureState'] = __NAMESPACE__ . '\\Test_StateMonad_pureState';



// Test_StateMonad_bindState
function Test_StateMonad_bindState($v, $g = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_StateMonad_bindState';
  if ($__num < 2) {
    if ($__num === 1) return function($g) use ($v, $__fn) { return $__fn($v, $g); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($v, $g) {
    $__case_0 = $v;
    $__case_1 = $g;
    if (true) {
$f = $__case_0;
$g1 = $__case_1;
return (($GLOBALS['Test_StateMonad_State'] ?? \Test\StateMonad\phpurs_eval_thunk('Test_StateMonad_State')))((function() use ($f, $g1) {
  $__body = function($s) use ($f, $g1) {
    $r1 = ($f)($s);
    $v1 = ($g1)(($r1)->val);
    $__case_0 = $v1;
    if (true) {
$g__prime__ = $__case_0;
return ($g__prime__)(($r1)->state);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($s) use ($f, $g1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($s);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($v, $g);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Test_StateMonad_bindState'] = __NAMESPACE__ . '\\Test_StateMonad_bindState';

// Test_StateMonad_modify
function Test_StateMonad_modify($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_StateMonad_modify';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Test_StateMonad_bindState'] ?? \Test\StateMonad\phpurs_eval_thunk('Test_StateMonad_bindState')))(($GLOBALS['Test_StateMonad_get'] ?? \Test\StateMonad\phpurs_eval_thunk('Test_StateMonad_get')), (function() use ($f) {
  $__fn = function($s) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Test_StateMonad_put'] ?? \Test\StateMonad\phpurs_eval_thunk('Test_StateMonad_put')))(($f)($s));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Test_StateMonad_modify'] = __NAMESPACE__ . '\\Test_StateMonad_modify';

// Test_StateMonad_chainModifications
function Test_StateMonad_chainModifications($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_StateMonad_chainModifications';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
if (($__case_0 === 0)) {
return (($GLOBALS['Test_StateMonad_pureState'] ?? \Test\StateMonad\phpurs_eval_thunk('Test_StateMonad_pureState')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')));
} else {
if (true) {
$n = $__case_0;
return (($GLOBALS['Test_StateMonad_bindState'] ?? \Test\StateMonad\phpurs_eval_thunk('Test_StateMonad_bindState')))((($GLOBALS['Test_StateMonad_modify'] ?? \Test\StateMonad\phpurs_eval_thunk('Test_StateMonad_modify')))((function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Test_StateMonad_add'] ?? \Test\StateMonad\phpurs_eval_thunk('Test_StateMonad_add')))($x, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($n) {
  $__fn = function($v1) use ($n, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Test_StateMonad_chainModifications'] ?? \Test\StateMonad\phpurs_eval_thunk('Test_StateMonad_chainModifications')))((($GLOBALS['Test_StateMonad_sub'] ?? \Test\StateMonad\phpurs_eval_thunk('Test_StateMonad_sub')))($n, 1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Test_StateMonad_chainModifications'] = __NAMESPACE__ . '\\Test_StateMonad_chainModifications';

// Test_StateMonad_runManyTimes
function Test_StateMonad_runManyTimes($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_StateMonad_runManyTimes';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (($__case_0 === 0)) {
$acc = $__case_1;
return $acc;
} else {
if (true) {
$n = $__case_0;
$acc = $__case_1;
$__tco_tmp_0 = (($GLOBALS['Test_StateMonad_sub'] ?? \Test\StateMonad\phpurs_eval_thunk('Test_StateMonad_sub')))($n, 1);
$__tco_tmp_1 = (($GLOBALS['Test_StateMonad_add'] ?? \Test\StateMonad\phpurs_eval_thunk('Test_StateMonad_add')))($acc, ((($GLOBALS['Test_StateMonad_runState'] ?? \Test\StateMonad\phpurs_eval_thunk('Test_StateMonad_runState')))((($GLOBALS['Test_StateMonad_chainModifications'] ?? \Test\StateMonad\phpurs_eval_thunk('Test_StateMonad_chainModifications')))(60), 0))->state);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Test_StateMonad_runManyTimes'] = __NAMESPACE__ . '\\Test_StateMonad_runManyTimes';


