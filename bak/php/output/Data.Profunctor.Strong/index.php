<?php

namespace Data\Profunctor\Strong;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Profunctor.Strong/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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
      case 'Data_Profunctor_Strong_strongFn': $v = (($GLOBALS['Data_Profunctor_Strong_Strong__dollar__Dict'] ?? \Data\Profunctor\Strong\phpurs_eval_thunk('Data_Profunctor_Strong_Strong__dollar__Dict')))((object)["first" => (function() {
  $__body = function($a2b, $v) {
    $__case_0 = $a2b;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$a2b1 = $__case_0;
$a = ($__case_1)->v0;
$c = ($__case_1)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))(($a2b1)($a), $c);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($a2b, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($a2b, &$__fn) { return $__fn($a2b, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($a2b, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "second" => (function() {
  $__body = function($f, $m) {
    $__case_0 = $m;
    switch (($__case_0)->tag) {
case "Tuple":
$v = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
return (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($v, ($f)($v1));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $m = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($f, &$__fn) { return $__fn($f, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $m);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Profunctor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Profunctor_profunctorFn'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_profunctorFn'));
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


// Data_Profunctor_Strong_Strong$Dict
function Data_Profunctor_Strong_Strong__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Strong_Strong__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Strong_Strong__dollar__Dict'] = __NAMESPACE__ . '\\Data_Profunctor_Strong_Strong__dollar__Dict';


// Data_Profunctor_Strong_second
function Data_Profunctor_Strong_second($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Strong_second';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->second;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Strong_second'] = __NAMESPACE__ . '\\Data_Profunctor_Strong_second';

// Data_Profunctor_Strong_first
function Data_Profunctor_Strong_first($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Strong_first';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->first;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Strong_first'] = __NAMESPACE__ . '\\Data_Profunctor_Strong_first';

// Data_Profunctor_Strong_splitStrong
function Data_Profunctor_Strong_splitStrong($dictSemigroupoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Strong_splitStrong';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$composeFlipped = (($GLOBALS['Control_Semigroupoid_composeFlipped'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeFlipped')))($dictSemigroupoid);
    $__res = (function() use ($composeFlipped) {
  $__fn = function($dictStrong) use ($composeFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$first1 = (($GLOBALS['Data_Profunctor_Strong_first'] ?? \Data\Profunctor\Strong\phpurs_eval_thunk('Data_Profunctor_Strong_first')))($dictStrong);
$second1 = (($GLOBALS['Data_Profunctor_Strong_second'] ?? \Data\Profunctor\Strong\phpurs_eval_thunk('Data_Profunctor_Strong_second')))($dictStrong);
    $__res = (function() use ($composeFlipped, $first1, $second1) {
  $__fn = function($l, $r = null) use ($composeFlipped, $first1, $second1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($r) use ($l, &$__fn) { return $__fn($l, $r); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($composeFlipped)(($first1)($l), ($second1)($r));
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
$GLOBALS['Data_Profunctor_Strong_splitStrong'] = __NAMESPACE__ . '\\Data_Profunctor_Strong_splitStrong';

// Data_Profunctor_Strong_fanout
function Data_Profunctor_Strong_fanout($dictSemigroupoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Strong_fanout';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$splitStrong1 = (($GLOBALS['Data_Profunctor_Strong_splitStrong'] ?? \Data\Profunctor\Strong\phpurs_eval_thunk('Data_Profunctor_Strong_splitStrong')))($dictSemigroupoid);
    $__res = (function() use ($splitStrong1) {
  $__fn = function($dictStrong) use ($splitStrong1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$lcmap = (($GLOBALS['Data_Profunctor_lcmap'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_lcmap')))((($dictStrong)->Profunctor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$splitStrong2 = ($splitStrong1)($dictStrong);
    $__res = (function() use ($lcmap, $splitStrong2) {
  $__fn = function($l, $r = null) use ($lcmap, $splitStrong2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($r) use ($l, &$__fn) { return $__fn($l, $r); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($lcmap)((function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')))($a, $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($splitStrong2)($l, $r));
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
$GLOBALS['Data_Profunctor_Strong_fanout'] = __NAMESPACE__ . '\\Data_Profunctor_Strong_fanout';

