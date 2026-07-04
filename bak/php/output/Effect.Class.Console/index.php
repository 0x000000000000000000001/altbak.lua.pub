<?php

namespace Effect\Class\Console;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Effect.Class.Console/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';

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

      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Effect_Class_Console_compose
function Effect_Class_Console_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_compose';
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
$GLOBALS['Effect_Class_Console_compose'] = __NAMESPACE__ . '\\Effect_Class_Console_compose';

// Effect_Class_Console_discard
function Effect_Class_Console_discard($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_discard';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))($dictBind);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_discard'] = __NAMESPACE__ . '\\Effect_Class_Console_discard';

// Effect_Class_Console_warnShow
function Effect_Class_Console_warnShow($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_warnShow';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$liftEffect = (($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect);
    $__res = (function() use ($liftEffect) {
  $__fn = function($dictShow) use ($liftEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose')))($liftEffect, (($GLOBALS['Effect_Console_warnShow'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_warnShow')))($dictShow));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_warnShow'] = __NAMESPACE__ . '\\Effect_Class_Console_warnShow';

// Effect_Class_Console_warn
function Effect_Class_Console_warn($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_warn';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose')))((($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect), ($GLOBALS['Effect_Console_warn'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_warn')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_warn'] = __NAMESPACE__ . '\\Effect_Class_Console_warn';

// Effect_Class_Console_timeLog
function Effect_Class_Console_timeLog($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_timeLog';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose')))((($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect), ($GLOBALS['Effect_Console_timeLog'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_timeLog')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_timeLog'] = __NAMESPACE__ . '\\Effect_Class_Console_timeLog';

// Effect_Class_Console_timeEnd
function Effect_Class_Console_timeEnd($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_timeEnd';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose')))((($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect), ($GLOBALS['Effect_Console_timeEnd'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_timeEnd')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_timeEnd'] = __NAMESPACE__ . '\\Effect_Class_Console_timeEnd';

// Effect_Class_Console_time
function Effect_Class_Console_time($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_time';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose')))((($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect), ($GLOBALS['Effect_Console_time'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_time')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_time'] = __NAMESPACE__ . '\\Effect_Class_Console_time';

// Effect_Class_Console_logShow
function Effect_Class_Console_logShow($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_logShow';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$liftEffect = (($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect);
    $__res = (function() use ($liftEffect) {
  $__fn = function($dictShow) use ($liftEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose')))($liftEffect, (($GLOBALS['Effect_Console_logShow'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_logShow')))($dictShow));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_logShow'] = __NAMESPACE__ . '\\Effect_Class_Console_logShow';

// Effect_Class_Console_log
function Effect_Class_Console_log($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_log';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose')))((($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect), ($GLOBALS['Effect_Console_log'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_log')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_log'] = __NAMESPACE__ . '\\Effect_Class_Console_log';

// Effect_Class_Console_infoShow
function Effect_Class_Console_infoShow($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_infoShow';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$liftEffect = (($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect);
    $__res = (function() use ($liftEffect) {
  $__fn = function($dictShow) use ($liftEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose')))($liftEffect, (($GLOBALS['Effect_Console_infoShow'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_infoShow')))($dictShow));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_infoShow'] = __NAMESPACE__ . '\\Effect_Class_Console_infoShow';

// Effect_Class_Console_info
function Effect_Class_Console_info($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_info';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose')))((($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect), ($GLOBALS['Effect_Console_info'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_info')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_info'] = __NAMESPACE__ . '\\Effect_Class_Console_info';

// Effect_Class_Console_groupEnd
function Effect_Class_Console_groupEnd($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_groupEnd';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect, ($GLOBALS['Effect_Console_groupEnd'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_groupEnd')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_groupEnd'] = __NAMESPACE__ . '\\Effect_Class_Console_groupEnd';

// Effect_Class_Console_groupCollapsed
function Effect_Class_Console_groupCollapsed($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_groupCollapsed';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose')))((($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect), ($GLOBALS['Effect_Console_groupCollapsed'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_groupCollapsed')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_groupCollapsed'] = __NAMESPACE__ . '\\Effect_Class_Console_groupCollapsed';

// Effect_Class_Console_group
function Effect_Class_Console_group($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_group';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose')))((($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect), ($GLOBALS['Effect_Console_group'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_group')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_group'] = __NAMESPACE__ . '\\Effect_Class_Console_group';

// Effect_Class_Console_grouped
function Effect_Class_Console_grouped($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_grouped';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Monad0 = (($dictMonadEffect)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$Bind1 = (($Monad0)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$discard1 = (($GLOBALS['Effect_Class_Console_discard'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_discard')))($Bind1);
$group1 = (($GLOBALS['Effect_Class_Console_group'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_group')))($dictMonadEffect);
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))($Bind1);
$groupEnd1 = (($GLOBALS['Effect_Class_Console_groupEnd'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_groupEnd')))($dictMonadEffect);
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))((($Monad0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($discard1, $group1, $bind, $groupEnd1, $pure) {
  $__fn = function($name, $inner = null) use ($discard1, $group1, $bind, $groupEnd1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($inner) use ($name, &$__fn) { return $__fn($name, $inner); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($discard1)(($group1)($name), (function() use ($bind, $inner, $discard1, $groupEnd1, $pure) {
  $__fn = function($__dollar____unused) use ($bind, $inner, $discard1, $groupEnd1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)($inner, (function() use ($discard1, $groupEnd1, $pure) {
  $__fn = function($result) use ($discard1, $groupEnd1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($discard1)($groupEnd1, (function() use ($pure, $result) {
  $__fn = function($__dollar____unused) use ($pure, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($pure)($result);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_grouped'] = __NAMESPACE__ . '\\Effect_Class_Console_grouped';

// Effect_Class_Console_errorShow
function Effect_Class_Console_errorShow($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_errorShow';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$liftEffect = (($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect);
    $__res = (function() use ($liftEffect) {
  $__fn = function($dictShow) use ($liftEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose')))($liftEffect, (($GLOBALS['Effect_Console_errorShow'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_errorShow')))($dictShow));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_errorShow'] = __NAMESPACE__ . '\\Effect_Class_Console_errorShow';

// Effect_Class_Console_error
function Effect_Class_Console_error($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_error';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose')))((($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect), ($GLOBALS['Effect_Console_error'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_error')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_error'] = __NAMESPACE__ . '\\Effect_Class_Console_error';

// Effect_Class_Console_debugShow
function Effect_Class_Console_debugShow($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_debugShow';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$liftEffect = (($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect);
    $__res = (function() use ($liftEffect) {
  $__fn = function($dictShow) use ($liftEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose')))($liftEffect, (($GLOBALS['Effect_Console_debugShow'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_debugShow')))($dictShow));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_debugShow'] = __NAMESPACE__ . '\\Effect_Class_Console_debugShow';

// Effect_Class_Console_debug
function Effect_Class_Console_debug($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_debug';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose')))((($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect), ($GLOBALS['Effect_Console_debug'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_debug')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_debug'] = __NAMESPACE__ . '\\Effect_Class_Console_debug';

// Effect_Class_Console_clear
function Effect_Class_Console_clear($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_clear';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Effect_Class_liftEffect'] ?? \Effect\Class\phpurs_eval_thunk('Effect_Class_liftEffect')))($dictMonadEffect, ($GLOBALS['Effect_Console_clear'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_clear')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_clear'] = __NAMESPACE__ . '\\Effect_Class_Console_clear';

