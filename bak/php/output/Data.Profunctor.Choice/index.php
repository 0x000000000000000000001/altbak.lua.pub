<?php

namespace Data\Profunctor\Choice;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Profunctor.Choice/index.php';
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
      case 'Data_Profunctor_Choice_choiceFn': $v = (($GLOBALS['Data_Profunctor_Choice_Choice__dollar__Dict'] ?? \Data\Profunctor\Choice\phpurs_eval_thunk('Data_Profunctor_Choice_Choice__dollar__Dict')))((object)["left" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "Left":
$a2b = $__case_0;
$a = ($__case_1)->v0;
return (($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')))(($a2b)($a));
break;
case "Right":
$c = ($__case_1)->v0;
return (($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')))($c);
break;
default:
throw new \Exception("Pattern match failure");
break;
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
})(), "right" => (function() {
  $__body = function($f, $m) {
    $__case_0 = $m;
    switch (($__case_0)->tag) {
case "Left":
$v = ($__case_0)->v0;
return (($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')))($v);
break;
case "Right":
$v = ($__case_0)->v0;
return (($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')))(($f)($v));
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


// Data_Profunctor_Choice_identity
function Data_Profunctor_Choice_identity($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Choice_identity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Choice_identity'] = __NAMESPACE__ . '\\Data_Profunctor_Choice_identity';

// Data_Profunctor_Choice_Choice$Dict
function Data_Profunctor_Choice_Choice__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Choice_Choice__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Choice_Choice__dollar__Dict'] = __NAMESPACE__ . '\\Data_Profunctor_Choice_Choice__dollar__Dict';

// Data_Profunctor_Choice_right
function Data_Profunctor_Choice_right($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Choice_right';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->right;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Choice_right'] = __NAMESPACE__ . '\\Data_Profunctor_Choice_right';

// Data_Profunctor_Choice_left
function Data_Profunctor_Choice_left($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Choice_left';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->left;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Choice_left'] = __NAMESPACE__ . '\\Data_Profunctor_Choice_left';

// Data_Profunctor_Choice_splitChoice
function Data_Profunctor_Choice_splitChoice($dictSemigroupoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Choice_splitChoice';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$composeFlipped = (($GLOBALS['Control_Semigroupoid_composeFlipped'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeFlipped')))($dictSemigroupoid);
    $__res = (function() use ($composeFlipped) {
  $__fn = function($dictChoice) use ($composeFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$left1 = (($GLOBALS['Data_Profunctor_Choice_left'] ?? \Data\Profunctor\Choice\phpurs_eval_thunk('Data_Profunctor_Choice_left')))($dictChoice);
$right1 = (($GLOBALS['Data_Profunctor_Choice_right'] ?? \Data\Profunctor\Choice\phpurs_eval_thunk('Data_Profunctor_Choice_right')))($dictChoice);
    $__res = (function() use ($composeFlipped, $left1, $right1) {
  $__fn = function($l, $r = null) use ($composeFlipped, $left1, $right1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($r) use ($l, &$__fn) { return $__fn($l, $r); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($composeFlipped)(($left1)($l), ($right1)($r));
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
$GLOBALS['Data_Profunctor_Choice_splitChoice'] = __NAMESPACE__ . '\\Data_Profunctor_Choice_splitChoice';

// Data_Profunctor_Choice_fanin
function Data_Profunctor_Choice_fanin($dictSemigroupoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Choice_fanin';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$splitChoice1 = (($GLOBALS['Data_Profunctor_Choice_splitChoice'] ?? \Data\Profunctor\Choice\phpurs_eval_thunk('Data_Profunctor_Choice_splitChoice')))($dictSemigroupoid);
    $__res = (function() use ($splitChoice1) {
  $__fn = function($dictChoice) use ($splitChoice1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$rmap = (($GLOBALS['Data_Profunctor_rmap'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_rmap')))((($dictChoice)->Profunctor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$splitChoice2 = ($splitChoice1)($dictChoice);
    $__res = (function() use ($rmap, $splitChoice2) {
  $__fn = function($l, $r = null) use ($rmap, $splitChoice2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($r) use ($l, &$__fn) { return $__fn($l, $r); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($rmap)((($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either')))(($GLOBALS['Data_Profunctor_Choice_identity'] ?? \Data\Profunctor\Choice\phpurs_eval_thunk('Data_Profunctor_Choice_identity')), ($GLOBALS['Data_Profunctor_Choice_identity'] ?? \Data\Profunctor\Choice\phpurs_eval_thunk('Data_Profunctor_Choice_identity'))), ($splitChoice2)($l, $r));
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
$GLOBALS['Data_Profunctor_Choice_fanin'] = __NAMESPACE__ . '\\Data_Profunctor_Choice_fanin';


