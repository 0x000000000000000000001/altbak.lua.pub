<?php

namespace Data\Functor\Joker;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Biapplicative/index.php';
require_once __DIR__ . '/../Control.Biapply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Joker/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Profunctor.Choice/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
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
      case 'Data_Functor_Joker_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Functor_Joker_composeFlipped': $v = (($GLOBALS['Control_Semigroupoid_composeFlipped'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeFlipped')))(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Data_Functor_Joker_un': $v = (($GLOBALS['Data_Newtype_un'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_un')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Functor_Joker_newtypeJoker': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
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





// Data_Functor_Joker_compose
function Data_Functor_Joker_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_compose';
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
$GLOBALS['Data_Functor_Joker_compose'] = __NAMESPACE__ . '\\Data_Functor_Joker_compose';

// Data_Functor_Joker_Joker
function Data_Functor_Joker_Joker($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_Joker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_Joker'] = __NAMESPACE__ . '\\Data_Functor_Joker_Joker';

// Data_Functor_Joker_showJoker
function Data_Functor_Joker_showJoker($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_showJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))($dictShow);
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return (($GLOBALS['Data_Functor_Joker_append'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_append')))("(Joker ", (($GLOBALS['Data_Functor_Joker_append'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_append')))(($show)($x), ")"));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($show, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_showJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_showJoker';

// Data_Functor_Joker_profunctorJoker
function Data_Functor_Joker_profunctorJoker($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_profunctorJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (($GLOBALS['Data_Profunctor_Profunctor__dollar__Dict'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_Profunctor__dollar__Dict')))((object)["dimap" => (function() use ($map) {
  $__body = function($v, $g, $v1) use ($map) {
    $__case_0 = $v;
    $__case_1 = $g;
    $__case_2 = $v1;
    if (true) {
$g1 = $__case_1;
$a = $__case_2;
return (($GLOBALS['Data_Functor_Joker_Joker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_Joker')))(($map)($g1, $a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $g = null, $v1 = null) use ($map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($v, $g, &$__fn) { return $__fn($v, $g, $v1); };
    if ($__num === 1) return function($g, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $g, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $g, &$__fn) { return $__fn($v, $g, $v1); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($v, $g, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_profunctorJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_profunctorJoker';

// Data_Functor_Joker_ordJoker
function Data_Functor_Joker_ordJoker($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_ordJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictOrd;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_ordJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_ordJoker';


// Data_Functor_Joker_hoistJoker
function Data_Functor_Joker_hoistJoker($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_hoistJoker';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$a = $__case_1;
return (($GLOBALS['Data_Functor_Joker_Joker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_Joker')))(($f1)($a));
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($f, $v);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Joker_hoistJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_hoistJoker';

// Data_Functor_Joker_functorJoker
function Data_Functor_Joker_functorJoker($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_functorJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$a = $__case_1;
return (($GLOBALS['Data_Functor_Joker_Joker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_Joker')))(($map)($f1, $a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_functorJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_functorJoker';

// Data_Functor_Joker_eqJoker
function Data_Functor_Joker_eqJoker($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_eqJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictEq;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_eqJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_eqJoker';

// Data_Functor_Joker_choiceJoker
function Data_Functor_Joker_choiceJoker($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_choiceJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
$profunctorJoker1 = (($GLOBALS['Data_Functor_Joker_profunctorJoker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_profunctorJoker')))($dictFunctor);
    $__res = (($GLOBALS['Data_Profunctor_Choice_Choice__dollar__Dict'] ?? \Data\Profunctor\Choice\phpurs_eval_thunk('Data_Profunctor_Choice_Choice__dollar__Dict')))((object)["left" => (function() use ($map) {
  $__body = function($v) use ($map) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return (($GLOBALS['Data_Functor_Joker_Joker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_Joker')))(($map)(($GLOBALS['Data_Either_Left'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Left')), $f));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "right" => (function() use ($map) {
  $__body = function($v) use ($map) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return (($GLOBALS['Data_Functor_Joker_Joker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_Joker')))(($map)(($GLOBALS['Data_Either_Right'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_Right')), $f));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Profunctor0" => (function() use ($profunctorJoker1) {
  $__fn = function($__dollar____unused) use ($profunctorJoker1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $profunctorJoker1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_choiceJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_choiceJoker';

// Data_Functor_Joker_bifunctorJoker
function Data_Functor_Joker_bifunctorJoker($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_bifunctorJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (($GLOBALS['Data_Bifunctor_Bifunctor__dollar__Dict'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_Bifunctor__dollar__Dict')))((object)["bimap" => (function() use ($map) {
  $__body = function($v, $g, $v1) use ($map) {
    $__case_0 = $v;
    $__case_1 = $g;
    $__case_2 = $v1;
    if (true) {
$g1 = $__case_1;
$a = $__case_2;
return (($GLOBALS['Data_Functor_Joker_Joker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_Joker')))(($map)($g1, $a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $g = null, $v1 = null) use ($map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($v, $g, &$__fn) { return $__fn($v, $g, $v1); };
    if ($__num === 1) return function($g, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $g, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $g, &$__fn) { return $__fn($v, $g, $v1); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($v, $g, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_bifunctorJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_bifunctorJoker';

// Data_Functor_Joker_biapplyJoker
function Data_Functor_Joker_biapplyJoker($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_biapplyJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($dictApply);
$bifunctorJoker1 = (($GLOBALS['Data_Functor_Joker_bifunctorJoker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_bifunctorJoker')))((($dictApply)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Biapply_Biapply__dollar__Dict'] ?? \Control\Biapply\phpurs_eval_thunk('Control_Biapply_Biapply__dollar__Dict')))((object)["biapply" => (function() use ($apply) {
  $__body = function($v, $v1) use ($apply) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$fg = $__case_0;
$xy = $__case_1;
return (($GLOBALS['Data_Functor_Joker_Joker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_Joker')))(($apply)($fg, $xy));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($apply, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() use ($bifunctorJoker1) {
  $__fn = function($__dollar____unused) use ($bifunctorJoker1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bifunctorJoker1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_biapplyJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_biapplyJoker';

// Data_Functor_Joker_biapplicativeJoker
function Data_Functor_Joker_biapplicativeJoker($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_biapplicativeJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))($dictApplicative);
$biapplyJoker1 = (($GLOBALS['Data_Functor_Joker_biapplyJoker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_biapplyJoker')))((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Biapplicative_Biapplicative__dollar__Dict'] ?? \Control\Biapplicative\phpurs_eval_thunk('Control_Biapplicative_Biapplicative__dollar__Dict')))((object)["bipure" => (function() use ($pure) {
  $__fn = function($v, $b = null) use ($pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($v, &$__fn) { return $__fn($v, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Functor_Joker_Joker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_Joker')))(($pure)($b));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Biapply0" => (function() use ($biapplyJoker1) {
  $__fn = function($__dollar____unused) use ($biapplyJoker1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $biapplyJoker1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_biapplicativeJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_biapplicativeJoker';

// Data_Functor_Joker_applyJoker
function Data_Functor_Joker_applyJoker($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_applyJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($dictApply);
$functorJoker1 = (($GLOBALS['Data_Functor_Joker_functorJoker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_functorJoker')))((($dictApply)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => (function() use ($apply) {
  $__body = function($v, $v1) use ($apply) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$g = $__case_1;
return (($GLOBALS['Data_Functor_Joker_Joker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_Joker')))(($apply)($f, $g));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($apply, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorJoker1) {
  $__fn = function($__dollar____unused) use ($functorJoker1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorJoker1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_applyJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_applyJoker';

// Data_Functor_Joker_bindJoker
function Data_Functor_Joker_bindJoker($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_bindJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))($dictBind);
$applyJoker1 = (($GLOBALS['Data_Functor_Joker_applyJoker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_applyJoker')))((($dictBind)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Bind_Bind__dollar__Dict'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_Bind__dollar__Dict')))((object)["bind" => (function() use ($bind) {
  $__body = function($v, $amb) use ($bind) {
    $__case_0 = $v;
    $__case_1 = $amb;
    if (true) {
$ma = $__case_0;
$amb1 = $__case_1;
return (($GLOBALS['Data_Functor_Joker_Joker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_Joker')))(($bind)($ma, (($GLOBALS['Data_Functor_Joker_composeFlipped'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_composeFlipped')))($amb1, (($GLOBALS['Data_Functor_Joker_un'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_un')))(($GLOBALS['Data_Functor_Joker_Joker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_Joker'))))));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $amb = null) use ($bind, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($amb) use ($v, &$__fn) { return $__fn($v, $amb); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $amb);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyJoker1) {
  $__fn = function($__dollar____unused) use ($applyJoker1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyJoker1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_bindJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_bindJoker';

// Data_Functor_Joker_applicativeJoker
function Data_Functor_Joker_applicativeJoker($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_applicativeJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applyJoker1 = (($GLOBALS['Data_Functor_Joker_applyJoker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_applyJoker')))((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => (($GLOBALS['Data_Functor_Joker_compose'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_compose')))(($GLOBALS['Data_Functor_Joker_Joker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_Joker')), (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))($dictApplicative)), "Apply0" => (function() use ($applyJoker1) {
  $__fn = function($__dollar____unused) use ($applyJoker1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyJoker1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_applicativeJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_applicativeJoker';

// Data_Functor_Joker_monadJoker
function Data_Functor_Joker_monadJoker($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_monadJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeJoker1 = (($GLOBALS['Data_Functor_Joker_applicativeJoker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_applicativeJoker')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$bindJoker1 = (($GLOBALS['Data_Functor_Joker_bindJoker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_bindJoker')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Monad_Monad__dollar__Dict'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_Monad__dollar__Dict')))((object)["Applicative0" => (function() use ($applicativeJoker1) {
  $__fn = function($__dollar____unused) use ($applicativeJoker1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeJoker1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindJoker1) {
  $__fn = function($__dollar____unused) use ($bindJoker1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bindJoker1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_monadJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_monadJoker';

