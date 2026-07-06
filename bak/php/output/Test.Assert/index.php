<?php

namespace Test\Assert;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.Assert/index.php';

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
      case 'Test_Assert_append': $v = (function() {
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
      case 'Test_Assert_eq': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Eq_eqString'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqString'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Test_Assert_discard': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Bind_discardUnit'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_discardUnit'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->discard;
} else {
throw new \Exception("Pattern match failure");
};
  return ($__case_res_0)(($GLOBALS['Effect_bindEffect'] ?? \Effect\phpurs_eval_thunk('Effect_bindEffect')));
})(); break;
      case 'Test_Assert_unless': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_applicativeEffect'] ?? \Effect\phpurs_eval_thunk('Effect_applicativeEffect'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->pure;
} else {
throw new \Exception("Pattern match failure");
};
  $pure1 = $__case_res_0;
  return (function() use ($pure1) {
  $__body = function($v, $v1) use ($pure1) {
    $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__case_0 = $v;
    $__case_1 = $v1;
    switch ($__case_0) {
case false:
$m = $__case_1;
return $m;
break;
case true:
return ($pure1)($__global_Data_Unit_unit);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($pure1, $__body, &$__fn) {
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
})(); break;
      case 'Test_Assert_bindFlipped': $v = (function() {
  $__case_0 = ($GLOBALS['Effect_bindEffect'] ?? \Effect\phpurs_eval_thunk('Effect_bindEffect'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->bind;
} else {
throw new \Exception("Pattern match failure");
};
  return (($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip')))($__case_res_0);
})(); break;
      case 'Test_Assert_assert__prime__': $v = ($GLOBALS['Test_Assert_assertImpl'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_assertImpl')); break;
      case 'Test_Assert_assertEqual__prime__1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Eq_eqBoolean'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqBoolean'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  $eq1 = $__case_res_0;
  return ((function() use ($eq1) {
  $__fn = function($dictShow) use ($eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Test_Assert_append = ($GLOBALS['Test_Assert_append'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_append'));
$__global_Test_Assert_eq = ($GLOBALS['Test_Assert_eq'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_eq'));
$__global_Test_Assert_discard = ($GLOBALS['Test_Assert_discard'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_discard'));
$__global_Test_Assert_unless = ($GLOBALS['Test_Assert_unless'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_unless'));
$__global_Effect_Console_error = ($GLOBALS['Effect_Console_error'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_error'));
$__global_Test_Assert_assertImpl = ($GLOBALS['Test_Assert_assertImpl'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_assertImpl'));
$__case_0 = $dictShow;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show = $__case_res_1;
    $__res = (function() use ($eq1, $__global_Test_Assert_append, $__global_Test_Assert_eq, $show, $__global_Test_Assert_discard, $__global_Test_Assert_unless, $__global_Effect_Console_error, $__global_Test_Assert_assertImpl) {
  $__body = function($userMessage, $v) use ($eq1, $__global_Test_Assert_append, $__global_Test_Assert_eq, $show, $__global_Test_Assert_discard, $__global_Test_Assert_unless, $__global_Effect_Console_error, $__global_Test_Assert_assertImpl) {
    $__case_0 = $userMessage;
    $__case_1 = $v;
    if ((is_object)($__case_1)) {
$userMessage1 = $__case_0;
$actual = ($__case_1)->actual;
$expected = ($__case_1)->expected;
$result = ($eq1)($actual, $expected);
$__case_0 = ($__global_Test_Assert_eq)($userMessage1, "");
$__case_res_2 = null;
switch ($__case_0) {
case true:
$__case_res_2 = "";
break;
default:
$__case_res_2 = ($__global_Test_Assert_append)($userMessage1, "
");
break;
};
$message = ($__global_Test_Assert_append)($__case_res_2, ($__global_Test_Assert_append)("Expected: ", ($__global_Test_Assert_append)(($show)($expected), ($__global_Test_Assert_append)("
Actual:   ", ($show)($actual)))));
return ($__global_Test_Assert_discard)(($__global_Test_Assert_unless)($result, ($__global_Effect_Console_error)($message)), (function() use ($__global_Test_Assert_assertImpl, $message, $result) {
  $__fn = function($__dollar____unused) use ($__global_Test_Assert_assertImpl, $message, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Test_Assert_assertImpl)($message, $result);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($userMessage, $v = null) use ($eq1, $__global_Test_Assert_append, $__global_Test_Assert_eq, $show, $__global_Test_Assert_discard, $__global_Test_Assert_unless, $__global_Effect_Console_error, $__global_Test_Assert_assertImpl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($userMessage, &$__fn) { return $__fn($userMessage, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($userMessage, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($GLOBALS['Data_Show_showBoolean'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showBoolean')));
})(); break;
      case 'Test_Assert_assertEqual1': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Eq_eqBoolean'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqBoolean'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
  $eq1 = $__case_res_0;
  $assertEqual__prime__2 = (function() use ($eq1) {
  $__fn = function($dictShow) use ($eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Test_Assert_append = ($GLOBALS['Test_Assert_append'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_append'));
$__global_Test_Assert_eq = ($GLOBALS['Test_Assert_eq'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_eq'));
$__global_Test_Assert_discard = ($GLOBALS['Test_Assert_discard'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_discard'));
$__global_Test_Assert_unless = ($GLOBALS['Test_Assert_unless'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_unless'));
$__global_Effect_Console_error = ($GLOBALS['Effect_Console_error'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_error'));
$__global_Test_Assert_assertImpl = ($GLOBALS['Test_Assert_assertImpl'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_assertImpl'));
$__case_0 = $dictShow;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show = $__case_res_1;
    $__res = (function() use ($eq1, $__global_Test_Assert_append, $__global_Test_Assert_eq, $show, $__global_Test_Assert_discard, $__global_Test_Assert_unless, $__global_Effect_Console_error, $__global_Test_Assert_assertImpl) {
  $__body = function($userMessage, $v) use ($eq1, $__global_Test_Assert_append, $__global_Test_Assert_eq, $show, $__global_Test_Assert_discard, $__global_Test_Assert_unless, $__global_Effect_Console_error, $__global_Test_Assert_assertImpl) {
    $__case_0 = $userMessage;
    $__case_1 = $v;
    if ((is_object)($__case_1)) {
$userMessage1 = $__case_0;
$actual = ($__case_1)->actual;
$expected = ($__case_1)->expected;
$result = ($eq1)($actual, $expected);
$__case_0 = ($__global_Test_Assert_eq)($userMessage1, "");
$__case_res_2 = null;
switch ($__case_0) {
case true:
$__case_res_2 = "";
break;
default:
$__case_res_2 = ($__global_Test_Assert_append)($userMessage1, "
");
break;
};
$message = ($__global_Test_Assert_append)($__case_res_2, ($__global_Test_Assert_append)("Expected: ", ($__global_Test_Assert_append)(($show)($expected), ($__global_Test_Assert_append)("
Actual:   ", ($show)($actual)))));
return ($__global_Test_Assert_discard)(($__global_Test_Assert_unless)($result, ($__global_Effect_Console_error)($message)), (function() use ($__global_Test_Assert_assertImpl, $message, $result) {
  $__fn = function($__dollar____unused) use ($__global_Test_Assert_assertImpl, $message, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Test_Assert_assertImpl)($message, $result);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($userMessage, $v = null) use ($eq1, $__global_Test_Assert_append, $__global_Test_Assert_eq, $show, $__global_Test_Assert_discard, $__global_Test_Assert_unless, $__global_Effect_Console_error, $__global_Test_Assert_assertImpl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($userMessage, &$__fn) { return $__fn($userMessage, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($userMessage, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return ((function() use ($assertEqual__prime__2) {
  $__fn = function($dictShow) use ($assertEqual__prime__2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($assertEqual__prime__2)($dictShow, "");
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($GLOBALS['Data_Show_showBoolean'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showBoolean')));
})(); break;
      case 'Test_Assert_assertThrows': $v = (($GLOBALS['Test_Assert_assertThrows__prime__'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_assertThrows__prime__')))("Assertion failed: An error should have been thrown"); break;
      case 'Test_Assert_assert': $v = (($GLOBALS['Test_Assert_assertImpl'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_assertImpl')))("Assertion failed"); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };








// Test_Assert_assertEqual'
function Test_Assert_assertEqual__prime__($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_Assert_assertEqual__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Test_Assert_append = ($GLOBALS['Test_Assert_append'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_append'));
$__global_Test_Assert_eq = ($GLOBALS['Test_Assert_eq'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_eq'));
$__global_Test_Assert_discard = ($GLOBALS['Test_Assert_discard'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_discard'));
$__global_Test_Assert_unless = ($GLOBALS['Test_Assert_unless'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_unless'));
$__global_Effect_Console_error = ($GLOBALS['Effect_Console_error'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_error'));
$__global_Test_Assert_assertImpl = ($GLOBALS['Test_Assert_assertImpl'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_assertImpl'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_0;
    $__res = (function() use ($eq1, $__global_Test_Assert_append, $__global_Test_Assert_eq, $__global_Test_Assert_discard, $__global_Test_Assert_unless, $__global_Effect_Console_error, $__global_Test_Assert_assertImpl) {
  $__fn = function($dictShow) use ($eq1, $__global_Test_Assert_append, $__global_Test_Assert_eq, $__global_Test_Assert_discard, $__global_Test_Assert_unless, $__global_Effect_Console_error, $__global_Test_Assert_assertImpl, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictShow;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show = $__case_res_1;
    $__res = (function() use ($eq1, $__global_Test_Assert_append, $__global_Test_Assert_eq, $show, $__global_Test_Assert_discard, $__global_Test_Assert_unless, $__global_Effect_Console_error, $__global_Test_Assert_assertImpl) {
  $__body = function($userMessage, $v) use ($eq1, $__global_Test_Assert_append, $__global_Test_Assert_eq, $show, $__global_Test_Assert_discard, $__global_Test_Assert_unless, $__global_Effect_Console_error, $__global_Test_Assert_assertImpl) {
    $__case_0 = $userMessage;
    $__case_1 = $v;
    if ((is_object)($__case_1)) {
$userMessage1 = $__case_0;
$actual = ($__case_1)->actual;
$expected = ($__case_1)->expected;
$result = ($eq1)($actual, $expected);
$__case_0 = ($__global_Test_Assert_eq)($userMessage1, "");
$__case_res_2 = null;
switch ($__case_0) {
case true:
$__case_res_2 = "";
break;
default:
$__case_res_2 = ($__global_Test_Assert_append)($userMessage1, "
");
break;
};
$message = ($__global_Test_Assert_append)($__case_res_2, ($__global_Test_Assert_append)("Expected: ", ($__global_Test_Assert_append)(($show)($expected), ($__global_Test_Assert_append)("
Actual:   ", ($show)($actual)))));
return ($__global_Test_Assert_discard)(($__global_Test_Assert_unless)($result, ($__global_Effect_Console_error)($message)), (function() use ($__global_Test_Assert_assertImpl, $message, $result) {
  $__fn = function($__dollar____unused) use ($__global_Test_Assert_assertImpl, $message, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Test_Assert_assertImpl)($message, $result);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($userMessage, $v = null) use ($eq1, $__global_Test_Assert_append, $__global_Test_Assert_eq, $show, $__global_Test_Assert_discard, $__global_Test_Assert_unless, $__global_Effect_Console_error, $__global_Test_Assert_assertImpl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($userMessage, &$__fn) { return $__fn($userMessage, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($userMessage, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Test_Assert_assertEqual__prime__'] = __NAMESPACE__ . '\\Test_Assert_assertEqual__prime__';


// Test_Assert_assertEqual
function Test_Assert_assertEqual($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_Assert_assertEqual';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Test_Assert_append = ($GLOBALS['Test_Assert_append'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_append'));
$__global_Test_Assert_eq = ($GLOBALS['Test_Assert_eq'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_eq'));
$__global_Test_Assert_discard = ($GLOBALS['Test_Assert_discard'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_discard'));
$__global_Test_Assert_unless = ($GLOBALS['Test_Assert_unless'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_unless'));
$__global_Effect_Console_error = ($GLOBALS['Effect_Console_error'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_error'));
$__global_Test_Assert_assertImpl = ($GLOBALS['Test_Assert_assertImpl'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_assertImpl'));
$__case_0 = $dictEq;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->eq;
} else {
throw new \Exception("Pattern match failure");
};
$eq1 = $__case_res_0;
$assertEqual__prime__2 = (function() use ($eq1, $__global_Test_Assert_append, $__global_Test_Assert_eq, $__global_Test_Assert_discard, $__global_Test_Assert_unless, $__global_Effect_Console_error, $__global_Test_Assert_assertImpl) {
  $__fn = function($dictShow) use ($eq1, $__global_Test_Assert_append, $__global_Test_Assert_eq, $__global_Test_Assert_discard, $__global_Test_Assert_unless, $__global_Effect_Console_error, $__global_Test_Assert_assertImpl, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictShow;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
$show = $__case_res_1;
    $__res = (function() use ($eq1, $__global_Test_Assert_append, $__global_Test_Assert_eq, $show, $__global_Test_Assert_discard, $__global_Test_Assert_unless, $__global_Effect_Console_error, $__global_Test_Assert_assertImpl) {
  $__body = function($userMessage, $v) use ($eq1, $__global_Test_Assert_append, $__global_Test_Assert_eq, $show, $__global_Test_Assert_discard, $__global_Test_Assert_unless, $__global_Effect_Console_error, $__global_Test_Assert_assertImpl) {
    $__case_0 = $userMessage;
    $__case_1 = $v;
    if ((is_object)($__case_1)) {
$userMessage1 = $__case_0;
$actual = ($__case_1)->actual;
$expected = ($__case_1)->expected;
$result = ($eq1)($actual, $expected);
$__case_0 = ($__global_Test_Assert_eq)($userMessage1, "");
$__case_res_2 = null;
switch ($__case_0) {
case true:
$__case_res_2 = "";
break;
default:
$__case_res_2 = ($__global_Test_Assert_append)($userMessage1, "
");
break;
};
$message = ($__global_Test_Assert_append)($__case_res_2, ($__global_Test_Assert_append)("Expected: ", ($__global_Test_Assert_append)(($show)($expected), ($__global_Test_Assert_append)("
Actual:   ", ($show)($actual)))));
return ($__global_Test_Assert_discard)(($__global_Test_Assert_unless)($result, ($__global_Effect_Console_error)($message)), (function() use ($__global_Test_Assert_assertImpl, $message, $result) {
  $__fn = function($__dollar____unused) use ($__global_Test_Assert_assertImpl, $message, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Test_Assert_assertImpl)($message, $result);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($userMessage, $v = null) use ($eq1, $__global_Test_Assert_append, $__global_Test_Assert_eq, $show, $__global_Test_Assert_discard, $__global_Test_Assert_unless, $__global_Effect_Console_error, $__global_Test_Assert_assertImpl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($userMessage, &$__fn) { return $__fn($userMessage, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($userMessage, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() use ($assertEqual__prime__2) {
  $__fn = function($dictShow) use ($assertEqual__prime__2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($assertEqual__prime__2)($dictShow, "");
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Test_Assert_assertEqual'] = __NAMESPACE__ . '\\Test_Assert_assertEqual';


// Test_Assert_assertFalse
function Test_Assert_assertFalse($actual) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_Assert_assertFalse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Test_Assert_assertEqual1 = ($GLOBALS['Test_Assert_assertEqual1'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_assertEqual1'));
    $__res = ($__global_Test_Assert_assertEqual1)((object)["actual" => $actual, "expected" => false]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Test_Assert_assertFalse'] = __NAMESPACE__ . '\\Test_Assert_assertFalse';

// Test_Assert_assertTrue
function Test_Assert_assertTrue($actual) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_Assert_assertTrue';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Test_Assert_assertEqual1 = ($GLOBALS['Test_Assert_assertEqual1'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_assertEqual1'));
    $__res = ($__global_Test_Assert_assertEqual1)((object)["actual" => $actual, "expected" => true]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Test_Assert_assertTrue'] = __NAMESPACE__ . '\\Test_Assert_assertTrue';

// Test_Assert_assertFalse'
function Test_Assert_assertFalse__prime__($message, $actual = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_Assert_assertFalse__prime__';
  if ($__num < 2) {
    if ($__num === 1) return function($actual) use ($message, $__fn) { return $__fn($message, $actual); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Test_Assert_assertEqual__prime__1 = ($GLOBALS['Test_Assert_assertEqual__prime__1'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_assertEqual__prime__1'));
    $__res = ($__global_Test_Assert_assertEqual__prime__1)($message, (object)["actual" => $actual, "expected" => false]);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Test_Assert_assertFalse__prime__'] = __NAMESPACE__ . '\\Test_Assert_assertFalse__prime__';

// Test_Assert_assertTrue'
function Test_Assert_assertTrue__prime__($message, $actual = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_Assert_assertTrue__prime__';
  if ($__num < 2) {
    if ($__num === 1) return function($actual) use ($message, $__fn) { return $__fn($message, $actual); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Test_Assert_assertEqual__prime__1 = ($GLOBALS['Test_Assert_assertEqual__prime__1'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_assertEqual__prime__1'));
    $__res = ($__global_Test_Assert_assertEqual__prime__1)($message, (object)["actual" => $actual, "expected" => true]);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Test_Assert_assertTrue__prime__'] = __NAMESPACE__ . '\\Test_Assert_assertTrue__prime__';

// Test_Assert_assertThrows'
function Test_Assert_assertThrows__prime__($msg, $fn = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_Assert_assertThrows__prime__';
  if ($__num < 2) {
    if ($__num === 1) return function($fn) use ($msg, $__fn) { return $__fn($msg, $fn); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Test_Assert_bindFlipped = ($GLOBALS['Test_Assert_bindFlipped'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_bindFlipped'));
$__global_Test_Assert_assertImpl = ($GLOBALS['Test_Assert_assertImpl'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_assertImpl'));
$__global_Test_Assert_checkThrows = ($GLOBALS['Test_Assert_checkThrows'] ?? \Test\Assert\phpurs_eval_thunk('Test_Assert_checkThrows'));
    $__res = ($__global_Test_Assert_bindFlipped)(($__global_Test_Assert_assertImpl)($msg), ($__global_Test_Assert_checkThrows)($fn));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Test_Assert_assertThrows__prime__'] = __NAMESPACE__ . '\\Test_Assert_assertThrows__prime__';



