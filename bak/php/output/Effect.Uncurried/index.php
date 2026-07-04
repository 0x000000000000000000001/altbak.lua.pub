<?php

namespace Effect\Uncurried;

require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Uncurried/index.php';

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


// Effect_Uncurried_semigroupEffectFn9
function Effect_Uncurried_semigroupEffectFn9($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_semigroupEffectFn9';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($GLOBALS['Effect_semigroupEffect'] ?? \Effect\phpurs_eval_thunk('Effect_semigroupEffect')))($dictSemigroup));
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() use ($append) {
  $__fn = function($f1, $f2 = null) use ($append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f2) use ($f1, &$__fn) { return $__fn($f1, $f2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Effect_Uncurried_mkEffectFn9'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn9')))((function() use ($append, $f1, $f2) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null) use ($append, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 9) {
    return phpurs_curry_fallback($__fn, func_get_args(), 9);
  }
    $__res = ($append)((($GLOBALS['Effect_Uncurried_runEffectFn9'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn9')))($f1, $a, $b, $c, $d, $e, $f, $g, $h, $i), (($GLOBALS['Effect_Uncurried_runEffectFn9'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn9')))($f2, $a, $b, $c, $d, $e, $f, $g, $h, $i));
  return $__num > 9 ? $__res(...array_slice(func_get_args(), 9)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_semigroupEffectFn9'] = __NAMESPACE__ . '\\Effect_Uncurried_semigroupEffectFn9';

// Effect_Uncurried_semigroupEffectFn8
function Effect_Uncurried_semigroupEffectFn8($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_semigroupEffectFn8';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($GLOBALS['Effect_semigroupEffect'] ?? \Effect\phpurs_eval_thunk('Effect_semigroupEffect')))($dictSemigroup));
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() use ($append) {
  $__fn = function($f1, $f2 = null) use ($append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f2) use ($f1, &$__fn) { return $__fn($f1, $f2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Effect_Uncurried_mkEffectFn8'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn8')))((function() use ($append, $f1, $f2) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null) use ($append, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 8) {
    return phpurs_curry_fallback($__fn, func_get_args(), 8);
  }
    $__res = ($append)((($GLOBALS['Effect_Uncurried_runEffectFn8'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn8')))($f1, $a, $b, $c, $d, $e, $f, $g, $h), (($GLOBALS['Effect_Uncurried_runEffectFn8'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn8')))($f2, $a, $b, $c, $d, $e, $f, $g, $h));
  return $__num > 8 ? $__res(...array_slice(func_get_args(), 8)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_semigroupEffectFn8'] = __NAMESPACE__ . '\\Effect_Uncurried_semigroupEffectFn8';

// Effect_Uncurried_semigroupEffectFn7
function Effect_Uncurried_semigroupEffectFn7($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_semigroupEffectFn7';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($GLOBALS['Effect_semigroupEffect'] ?? \Effect\phpurs_eval_thunk('Effect_semigroupEffect')))($dictSemigroup));
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() use ($append) {
  $__fn = function($f1, $f2 = null) use ($append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f2) use ($f1, &$__fn) { return $__fn($f1, $f2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Effect_Uncurried_mkEffectFn7'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn7')))((function() use ($append, $f1, $f2) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null) use ($append, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 7) {
    return phpurs_curry_fallback($__fn, func_get_args(), 7);
  }
    $__res = ($append)((($GLOBALS['Effect_Uncurried_runEffectFn7'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn7')))($f1, $a, $b, $c, $d, $e, $f, $g), (($GLOBALS['Effect_Uncurried_runEffectFn7'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn7')))($f2, $a, $b, $c, $d, $e, $f, $g));
  return $__num > 7 ? $__res(...array_slice(func_get_args(), 7)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_semigroupEffectFn7'] = __NAMESPACE__ . '\\Effect_Uncurried_semigroupEffectFn7';

// Effect_Uncurried_semigroupEffectFn6
function Effect_Uncurried_semigroupEffectFn6($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_semigroupEffectFn6';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($GLOBALS['Effect_semigroupEffect'] ?? \Effect\phpurs_eval_thunk('Effect_semigroupEffect')))($dictSemigroup));
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() use ($append) {
  $__fn = function($f1, $f2 = null) use ($append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f2) use ($f1, &$__fn) { return $__fn($f1, $f2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Effect_Uncurried_mkEffectFn6'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn6')))((function() use ($append, $f1, $f2) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null) use ($append, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = ($append)((($GLOBALS['Effect_Uncurried_runEffectFn6'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn6')))($f1, $a, $b, $c, $d, $e, $f), (($GLOBALS['Effect_Uncurried_runEffectFn6'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn6')))($f2, $a, $b, $c, $d, $e, $f));
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_semigroupEffectFn6'] = __NAMESPACE__ . '\\Effect_Uncurried_semigroupEffectFn6';

// Effect_Uncurried_semigroupEffectFn5
function Effect_Uncurried_semigroupEffectFn5($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_semigroupEffectFn5';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($GLOBALS['Effect_semigroupEffect'] ?? \Effect\phpurs_eval_thunk('Effect_semigroupEffect')))($dictSemigroup));
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() use ($append) {
  $__fn = function($f1, $f2 = null) use ($append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f2) use ($f1, &$__fn) { return $__fn($f1, $f2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Effect_Uncurried_mkEffectFn5'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn5')))((function() use ($append, $f1, $f2) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null) use ($append, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
    $__res = ($append)((($GLOBALS['Effect_Uncurried_runEffectFn5'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn5')))($f1, $a, $b, $c, $d, $e), (($GLOBALS['Effect_Uncurried_runEffectFn5'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn5')))($f2, $a, $b, $c, $d, $e));
  return $__num > 5 ? $__res(...array_slice(func_get_args(), 5)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_semigroupEffectFn5'] = __NAMESPACE__ . '\\Effect_Uncurried_semigroupEffectFn5';

// Effect_Uncurried_semigroupEffectFn4
function Effect_Uncurried_semigroupEffectFn4($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_semigroupEffectFn4';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($GLOBALS['Effect_semigroupEffect'] ?? \Effect\phpurs_eval_thunk('Effect_semigroupEffect')))($dictSemigroup));
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() use ($append) {
  $__fn = function($f1, $f2 = null) use ($append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f2) use ($f1, &$__fn) { return $__fn($f1, $f2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Effect_Uncurried_mkEffectFn4'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn4')))((function() use ($append, $f1, $f2) {
  $__fn = function($a, $b = null, $c = null, $d = null) use ($append, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($d) use ($a, $b, $c, &$__fn) { return $__fn($a, $b, $c, $d); };
    if ($__num === 2) return function($c, $d = null) use ($a, $b, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $b, $c, $d);
      if ($__num2 === 1) return function($d) use ($a, $b, $c, &$__fn) { return $__fn($a, $b, $c, $d); };
      return phpurs_curry_fallback($__fn, [$a, $b], 4);
    };
    if ($__num === 1) return function($b, $c = null, $d = null) use ($a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($a, $b, $c, $d);
      if ($__num2 === 2) return function($d) use ($a, $b, $c, &$__fn) { return $__fn($a, $b, $c, $d); };
      if ($__num2 === 1) return function($c, $d = null) use ($a, $b, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($a, $b, $c, $d);
        if ($__num3 === 1) return function($d) use ($a, $b, $c, &$__fn) { return $__fn($a, $b, $c, $d); };
        return phpurs_curry_fallback($__fn, [$a, $b], 4);
      };
      return phpurs_curry_fallback($__fn, [$a], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = ($append)((($GLOBALS['Effect_Uncurried_runEffectFn4'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn4')))($f1, $a, $b, $c, $d), (($GLOBALS['Effect_Uncurried_runEffectFn4'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn4')))($f2, $a, $b, $c, $d));
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_semigroupEffectFn4'] = __NAMESPACE__ . '\\Effect_Uncurried_semigroupEffectFn4';

// Effect_Uncurried_semigroupEffectFn3
function Effect_Uncurried_semigroupEffectFn3($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_semigroupEffectFn3';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($GLOBALS['Effect_semigroupEffect'] ?? \Effect\phpurs_eval_thunk('Effect_semigroupEffect')))($dictSemigroup));
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() use ($append) {
  $__fn = function($f1, $f2 = null) use ($append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f2) use ($f1, &$__fn) { return $__fn($f1, $f2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Effect_Uncurried_mkEffectFn3'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn3')))((function() use ($append, $f1, $f2) {
  $__fn = function($a, $b = null, $c = null) use ($append, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($c) use ($a, $b, &$__fn) { return $__fn($a, $b, $c); };
    if ($__num === 1) return function($b, $c = null) use ($a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $b, $c);
      if ($__num2 === 1) return function($c) use ($a, $b, &$__fn) { return $__fn($a, $b, $c); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($append)((($GLOBALS['Effect_Uncurried_runEffectFn3'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn3')))($f1, $a, $b, $c), (($GLOBALS['Effect_Uncurried_runEffectFn3'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn3')))($f2, $a, $b, $c));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_semigroupEffectFn3'] = __NAMESPACE__ . '\\Effect_Uncurried_semigroupEffectFn3';

// Effect_Uncurried_semigroupEffectFn2
function Effect_Uncurried_semigroupEffectFn2($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_semigroupEffectFn2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($GLOBALS['Effect_semigroupEffect'] ?? \Effect\phpurs_eval_thunk('Effect_semigroupEffect')))($dictSemigroup));
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() use ($append) {
  $__fn = function($f1, $f2 = null) use ($append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f2) use ($f1, &$__fn) { return $__fn($f1, $f2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Effect_Uncurried_mkEffectFn2'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn2')))((function() use ($append, $f1, $f2) {
  $__fn = function($a, $b = null) use ($append, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($append)((($GLOBALS['Effect_Uncurried_runEffectFn2'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn2')))($f1, $a, $b), (($GLOBALS['Effect_Uncurried_runEffectFn2'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn2')))($f2, $a, $b));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_semigroupEffectFn2'] = __NAMESPACE__ . '\\Effect_Uncurried_semigroupEffectFn2';

// Effect_Uncurried_semigroupEffectFn10
function Effect_Uncurried_semigroupEffectFn10($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_semigroupEffectFn10';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($GLOBALS['Effect_semigroupEffect'] ?? \Effect\phpurs_eval_thunk('Effect_semigroupEffect')))($dictSemigroup));
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() use ($append) {
  $__fn = function($f1, $f2 = null) use ($append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f2) use ($f1, &$__fn) { return $__fn($f1, $f2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Effect_Uncurried_mkEffectFn10'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn10')))((function() use ($append, $f1, $f2) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null) use ($append, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 10) {
    return phpurs_curry_fallback($__fn, func_get_args(), 10);
  }
    $__res = ($append)((($GLOBALS['Effect_Uncurried_runEffectFn10'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn10')))($f1, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j), (($GLOBALS['Effect_Uncurried_runEffectFn10'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn10')))($f2, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j));
  return $__num > 10 ? $__res(...array_slice(func_get_args(), 10)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_semigroupEffectFn10'] = __NAMESPACE__ . '\\Effect_Uncurried_semigroupEffectFn10';

// Effect_Uncurried_semigroupEffectFn1
function Effect_Uncurried_semigroupEffectFn1($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_semigroupEffectFn1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = (($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))((($GLOBALS['Effect_semigroupEffect'] ?? \Effect\phpurs_eval_thunk('Effect_semigroupEffect')))($dictSemigroup));
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() use ($append) {
  $__fn = function($f1, $f2 = null) use ($append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f2) use ($f1, &$__fn) { return $__fn($f1, $f2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Effect_Uncurried_mkEffectFn1'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn1')))((function() use ($append, $f1, $f2) {
  $__fn = function($a) use ($append, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($append)((($GLOBALS['Effect_Uncurried_runEffectFn1'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn1')))($f1, $a), (($GLOBALS['Effect_Uncurried_runEffectFn1'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn1')))($f2, $a));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_semigroupEffectFn1'] = __NAMESPACE__ . '\\Effect_Uncurried_semigroupEffectFn1';

// Effect_Uncurried_monoidEffectFn9
function Effect_Uncurried_monoidEffectFn9($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_monoidEffectFn9';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))((($GLOBALS['Effect_monoidEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monoidEffect')))($dictMonoid));
$semigroupEffectFn91 = (($GLOBALS['Effect_Uncurried_semigroupEffectFn9'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_semigroupEffectFn9')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Effect_Uncurried_mkEffectFn9'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn9')))((function() use ($mempty) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null, $v5 = null, $v6 = null, $v7 = null, $v8 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 9) {
    return phpurs_curry_fallback($__fn, func_get_args(), 9);
  }
    $__res = $mempty;
  return $__num > 9 ? $__res(...array_slice(func_get_args(), 9)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupEffectFn91) {
  $__fn = function($__dollar____unused) use ($semigroupEffectFn91, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupEffectFn91;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_monoidEffectFn9'] = __NAMESPACE__ . '\\Effect_Uncurried_monoidEffectFn9';

// Effect_Uncurried_monoidEffectFn8
function Effect_Uncurried_monoidEffectFn8($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_monoidEffectFn8';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))((($GLOBALS['Effect_monoidEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monoidEffect')))($dictMonoid));
$semigroupEffectFn81 = (($GLOBALS['Effect_Uncurried_semigroupEffectFn8'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_semigroupEffectFn8')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Effect_Uncurried_mkEffectFn8'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn8')))((function() use ($mempty) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null, $v5 = null, $v6 = null, $v7 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 8) {
    return phpurs_curry_fallback($__fn, func_get_args(), 8);
  }
    $__res = $mempty;
  return $__num > 8 ? $__res(...array_slice(func_get_args(), 8)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupEffectFn81) {
  $__fn = function($__dollar____unused) use ($semigroupEffectFn81, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupEffectFn81;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_monoidEffectFn8'] = __NAMESPACE__ . '\\Effect_Uncurried_monoidEffectFn8';

// Effect_Uncurried_monoidEffectFn7
function Effect_Uncurried_monoidEffectFn7($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_monoidEffectFn7';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))((($GLOBALS['Effect_monoidEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monoidEffect')))($dictMonoid));
$semigroupEffectFn71 = (($GLOBALS['Effect_Uncurried_semigroupEffectFn7'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_semigroupEffectFn7')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Effect_Uncurried_mkEffectFn7'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn7')))((function() use ($mempty) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null, $v5 = null, $v6 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 7) {
    return phpurs_curry_fallback($__fn, func_get_args(), 7);
  }
    $__res = $mempty;
  return $__num > 7 ? $__res(...array_slice(func_get_args(), 7)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupEffectFn71) {
  $__fn = function($__dollar____unused) use ($semigroupEffectFn71, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupEffectFn71;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_monoidEffectFn7'] = __NAMESPACE__ . '\\Effect_Uncurried_monoidEffectFn7';

// Effect_Uncurried_monoidEffectFn6
function Effect_Uncurried_monoidEffectFn6($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_monoidEffectFn6';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))((($GLOBALS['Effect_monoidEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monoidEffect')))($dictMonoid));
$semigroupEffectFn61 = (($GLOBALS['Effect_Uncurried_semigroupEffectFn6'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_semigroupEffectFn6')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Effect_Uncurried_mkEffectFn6'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn6')))((function() use ($mempty) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null, $v5 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
    $__res = $mempty;
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupEffectFn61) {
  $__fn = function($__dollar____unused) use ($semigroupEffectFn61, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupEffectFn61;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_monoidEffectFn6'] = __NAMESPACE__ . '\\Effect_Uncurried_monoidEffectFn6';

// Effect_Uncurried_monoidEffectFn5
function Effect_Uncurried_monoidEffectFn5($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_monoidEffectFn5';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))((($GLOBALS['Effect_monoidEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monoidEffect')))($dictMonoid));
$semigroupEffectFn51 = (($GLOBALS['Effect_Uncurried_semigroupEffectFn5'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_semigroupEffectFn5')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Effect_Uncurried_mkEffectFn5'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn5')))((function() use ($mempty) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
    $__res = $mempty;
  return $__num > 5 ? $__res(...array_slice(func_get_args(), 5)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupEffectFn51) {
  $__fn = function($__dollar____unused) use ($semigroupEffectFn51, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupEffectFn51;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_monoidEffectFn5'] = __NAMESPACE__ . '\\Effect_Uncurried_monoidEffectFn5';

// Effect_Uncurried_monoidEffectFn4
function Effect_Uncurried_monoidEffectFn4($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_monoidEffectFn4';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))((($GLOBALS['Effect_monoidEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monoidEffect')))($dictMonoid));
$semigroupEffectFn41 = (($GLOBALS['Effect_Uncurried_semigroupEffectFn4'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_semigroupEffectFn4')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Effect_Uncurried_mkEffectFn4'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn4')))((function() use ($mempty) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v3) use ($v, $v1, $v2, &$__fn) { return $__fn($v, $v1, $v2, $v3); };
    if ($__num === 2) return function($v2, $v3 = null) use ($v, $v1, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2, $v3);
      if ($__num2 === 1) return function($v3) use ($v, $v1, $v2, &$__fn) { return $__fn($v, $v1, $v2, $v3); };
      return phpurs_curry_fallback($__fn, [$v, $v1], 4);
    };
    if ($__num === 1) return function($v1, $v2 = null, $v3 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($v, $v1, $v2, $v3);
      if ($__num2 === 2) return function($v3) use ($v, $v1, $v2, &$__fn) { return $__fn($v, $v1, $v2, $v3); };
      if ($__num2 === 1) return function($v2, $v3 = null) use ($v, $v1, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($v, $v1, $v2, $v3);
        if ($__num3 === 1) return function($v3) use ($v, $v1, $v2, &$__fn) { return $__fn($v, $v1, $v2, $v3); };
        return phpurs_curry_fallback($__fn, [$v, $v1], 4);
      };
      return phpurs_curry_fallback($__fn, [$v], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = $mempty;
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupEffectFn41) {
  $__fn = function($__dollar____unused) use ($semigroupEffectFn41, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupEffectFn41;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_monoidEffectFn4'] = __NAMESPACE__ . '\\Effect_Uncurried_monoidEffectFn4';

// Effect_Uncurried_monoidEffectFn3
function Effect_Uncurried_monoidEffectFn3($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_monoidEffectFn3';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))((($GLOBALS['Effect_monoidEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monoidEffect')))($dictMonoid));
$semigroupEffectFn31 = (($GLOBALS['Effect_Uncurried_semigroupEffectFn3'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_semigroupEffectFn3')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Effect_Uncurried_mkEffectFn3'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn3')))((function() use ($mempty) {
  $__fn = function($v, $v1 = null, $v2 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $mempty;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupEffectFn31) {
  $__fn = function($__dollar____unused) use ($semigroupEffectFn31, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupEffectFn31;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_monoidEffectFn3'] = __NAMESPACE__ . '\\Effect_Uncurried_monoidEffectFn3';

// Effect_Uncurried_monoidEffectFn2
function Effect_Uncurried_monoidEffectFn2($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_monoidEffectFn2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))((($GLOBALS['Effect_monoidEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monoidEffect')))($dictMonoid));
$semigroupEffectFn21 = (($GLOBALS['Effect_Uncurried_semigroupEffectFn2'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_semigroupEffectFn2')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Effect_Uncurried_mkEffectFn2'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn2')))((function() use ($mempty) {
  $__fn = function($v, $v1 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $mempty;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupEffectFn21) {
  $__fn = function($__dollar____unused) use ($semigroupEffectFn21, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupEffectFn21;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_monoidEffectFn2'] = __NAMESPACE__ . '\\Effect_Uncurried_monoidEffectFn2';

// Effect_Uncurried_monoidEffectFn10
function Effect_Uncurried_monoidEffectFn10($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_monoidEffectFn10';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))((($GLOBALS['Effect_monoidEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monoidEffect')))($dictMonoid));
$semigroupEffectFn101 = (($GLOBALS['Effect_Uncurried_semigroupEffectFn10'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_semigroupEffectFn10')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Effect_Uncurried_mkEffectFn10'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn10')))((function() use ($mempty) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null, $v5 = null, $v6 = null, $v7 = null, $v8 = null, $v9 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 10) {
    return phpurs_curry_fallback($__fn, func_get_args(), 10);
  }
    $__res = $mempty;
  return $__num > 10 ? $__res(...array_slice(func_get_args(), 10)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupEffectFn101) {
  $__fn = function($__dollar____unused) use ($semigroupEffectFn101, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupEffectFn101;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_monoidEffectFn10'] = __NAMESPACE__ . '\\Effect_Uncurried_monoidEffectFn10';

// Effect_Uncurried_monoidEffectFn1
function Effect_Uncurried_monoidEffectFn1($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_monoidEffectFn1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = (($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))((($GLOBALS['Effect_monoidEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monoidEffect')))($dictMonoid));
$semigroupEffectFn11 = (($GLOBALS['Effect_Uncurried_semigroupEffectFn1'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_semigroupEffectFn1')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Effect_Uncurried_mkEffectFn1'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn1')))((function() use ($mempty) {
  $__fn = function($v) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $mempty;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupEffectFn11) {
  $__fn = function($__dollar____unused) use ($semigroupEffectFn11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupEffectFn11;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_monoidEffectFn1'] = __NAMESPACE__ . '\\Effect_Uncurried_monoidEffectFn1';

