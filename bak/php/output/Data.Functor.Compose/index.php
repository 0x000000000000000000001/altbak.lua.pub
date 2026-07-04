<?php

namespace Data\Functor\Compose;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
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
      case 'Data_Functor_Compose_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Functor_Compose_newtypeCompose': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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



// Data_Functor_Compose_compose
function Data_Functor_Compose_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_compose';
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
$GLOBALS['Data_Functor_Compose_compose'] = __NAMESPACE__ . '\\Data_Functor_Compose_compose';

// Data_Functor_Compose_Compose
function Data_Functor_Compose_Compose($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_Compose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Compose_Compose'] = __NAMESPACE__ . '\\Data_Functor_Compose_Compose';

// Data_Functor_Compose_showCompose
function Data_Functor_Compose_showCompose($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_showCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))($dictShow);
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if (true) {
$fga = $__case_0;
return (($GLOBALS['Data_Functor_Compose_append'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_append')))("(Compose ", (($GLOBALS['Data_Functor_Compose_append'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_append')))(($show)($fga), ")"));
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
$GLOBALS['Data_Functor_Compose_showCompose'] = __NAMESPACE__ . '\\Data_Functor_Compose_showCompose';


// Data_Functor_Compose_functorCompose
function Data_Functor_Compose_functorCompose($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_functorCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (function() use ($map) {
  $__fn = function($dictFunctor1) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map1 = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor1);
    $__res = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() use ($map, $map1) {
  $__body = function($f, $v) use ($map, $map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return (($GLOBALS['Data_Functor_Compose_Compose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_Compose')))(($map)(($map1)($f1), $fga));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $map1, $__body, &$__fn) {
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Compose_functorCompose'] = __NAMESPACE__ . '\\Data_Functor_Compose_functorCompose';

// Data_Functor_Compose_eqCompose
function Data_Functor_Compose_eqCompose($dictEq1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_eqCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq1 = (($GLOBALS['Data_Eq_eq1'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq1')))($dictEq1);
    $__res = (function() use ($eq1) {
  $__fn = function($dictEq11) use ($eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eqApp = (($GLOBALS['Data_Functor_App_eqApp'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_eqApp')))($dictEq11);
    $__res = (function() use ($eq1, $eqApp) {
  $__fn = function($dictEq) use ($eq1, $eqApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq11 = ($eq1)(($eqApp)($dictEq));
    $__res = (($GLOBALS['Data_Eq_Eq__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq__dollar__Dict')))((object)["eq" => (function() use ($eq11) {
  $__body = function($v, $v1) use ($eq11) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$fga1 = $__case_0;
$fga2 = $__case_1;
return ($eq11)((($GLOBALS['Data_Functor_App_hoistLiftApp'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_hoistLiftApp')))($fga1), (($GLOBALS['Data_Functor_App_hoistLiftApp'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_hoistLiftApp')))($fga2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($eq11, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Compose_eqCompose'] = __NAMESPACE__ . '\\Data_Functor_Compose_eqCompose';

// Data_Functor_Compose_ordCompose
function Data_Functor_Compose_ordCompose($dictOrd1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_ordCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare1 = (($GLOBALS['Data_Ord_compare1'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare1')))($dictOrd1);
$eqCompose1 = (($GLOBALS['Data_Functor_Compose_eqCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_eqCompose')))((($dictOrd1)->Eq10)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($eqCompose1, $compare1) {
  $__fn = function($dictOrd11) use ($eqCompose1, $compare1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$ordApp = (($GLOBALS['Data_Functor_App_ordApp'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_ordApp')))($dictOrd11);
$eqCompose2 = ($eqCompose1)((($dictOrd11)->Eq10)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($compare1, $ordApp, $eqCompose2) {
  $__fn = function($dictOrd) use ($compare1, $ordApp, $eqCompose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare11 = ($compare1)(($ordApp)($dictOrd));
$eqCompose3 = ($eqCompose2)((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ord_Ord__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord__dollar__Dict')))((object)["compare" => (function() use ($compare11) {
  $__body = function($v, $v1) use ($compare11) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$fga1 = $__case_0;
$fga2 = $__case_1;
return ($compare11)((($GLOBALS['Data_Functor_App_hoistLiftApp'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_hoistLiftApp')))($fga1), (($GLOBALS['Data_Functor_App_hoistLiftApp'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_hoistLiftApp')))($fga2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($compare11, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqCompose3) {
  $__fn = function($__dollar____unused) use ($eqCompose3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqCompose3;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Compose_ordCompose'] = __NAMESPACE__ . '\\Data_Functor_Compose_ordCompose';

// Data_Functor_Compose_eq1Compose
function Data_Functor_Compose_eq1Compose($dictEq1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_eq1Compose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eqCompose1 = (($GLOBALS['Data_Functor_Compose_eqCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_eqCompose')))($dictEq1);
    $__res = (function() use ($eqCompose1) {
  $__fn = function($dictEq11) use ($eqCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eqCompose2 = ($eqCompose1)($dictEq11);
    $__res = (($GLOBALS['Data_Eq_Eq1__dollar__Dict'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_Eq1__dollar__Dict')))((object)["eq1" => (function() use ($eqCompose2) {
  $__fn = function($dictEq) use ($eqCompose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Eq_eq'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eq')))(($eqCompose2)($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Compose_eq1Compose'] = __NAMESPACE__ . '\\Data_Functor_Compose_eq1Compose';

// Data_Functor_Compose_ord1Compose
function Data_Functor_Compose_ord1Compose($dictOrd1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_ord1Compose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$ordCompose1 = (($GLOBALS['Data_Functor_Compose_ordCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_ordCompose')))($dictOrd1);
$eq1Compose1 = (($GLOBALS['Data_Functor_Compose_eq1Compose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_eq1Compose')))((($dictOrd1)->Eq10)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($ordCompose1, $eq1Compose1) {
  $__fn = function($dictOrd11) use ($ordCompose1, $eq1Compose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$ordCompose2 = ($ordCompose1)($dictOrd11);
$eq1Compose2 = ($eq1Compose1)((($dictOrd11)->Eq10)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Ord_Ord1__dollar__Dict'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_Ord1__dollar__Dict')))((object)["compare1" => (function() use ($ordCompose2) {
  $__fn = function($dictOrd) use ($ordCompose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Ord_compare'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_compare')))(($ordCompose2)($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use ($eq1Compose2) {
  $__fn = function($__dollar____unused) use ($eq1Compose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eq1Compose2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Compose_ord1Compose'] = __NAMESPACE__ . '\\Data_Functor_Compose_ord1Compose';

// Data_Functor_Compose_bihoistCompose
function Data_Functor_Compose_bihoistCompose($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_bihoistCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (function() use ($map) {
  $__body = function($natF, $natG, $v) use ($map) {
    $__case_0 = $natF;
    $__case_1 = $natG;
    $__case_2 = $v;
    if (true) {
$natF1 = $__case_0;
$natG1 = $__case_1;
$fga = $__case_2;
return (($GLOBALS['Data_Functor_Compose_Compose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_Compose')))(($natF1)(($map)($natG1, $fga)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($natF, $natG = null, $v = null) use ($map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($natF, $natG, &$__fn) { return $__fn($natF, $natG, $v); };
    if ($__num === 1) return function($natG, $v = null) use ($natF, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($natF, $natG, $v);
      if ($__num2 === 1) return function($v) use ($natF, $natG, &$__fn) { return $__fn($natF, $natG, $v); };
      return phpurs_curry_fallback($__fn, [$natF], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($natF, $natG, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Compose_bihoistCompose'] = __NAMESPACE__ . '\\Data_Functor_Compose_bihoistCompose';

// Data_Functor_Compose_applyCompose
function Data_Functor_Compose_applyCompose($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_applyCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($dictApply);
$Functor0 = (($dictApply)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($Functor0);
$functorCompose1 = (($GLOBALS['Data_Functor_Compose_functorCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_functorCompose')))($Functor0);
    $__res = (function() use ($functorCompose1, $apply, $map) {
  $__fn = function($dictApply1) use ($functorCompose1, $apply, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$apply1 = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($dictApply1);
$functorCompose2 = ($functorCompose1)((($dictApply1)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => (function() use ($apply, $map, $apply1) {
  $__body = function($v, $v1) use ($apply, $map, $apply1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$x = $__case_1;
return (($GLOBALS['Data_Functor_Compose_Compose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_Compose')))(($apply)(($map)($apply1, $f), $x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($apply, $map, $apply1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorCompose2) {
  $__fn = function($__dollar____unused) use ($functorCompose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorCompose2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Compose_applyCompose'] = __NAMESPACE__ . '\\Data_Functor_Compose_applyCompose';

// Data_Functor_Compose_applicativeCompose
function Data_Functor_Compose_applicativeCompose($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_applicativeCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$pure = (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))($dictApplicative);
$applyCompose1 = (($GLOBALS['Data_Functor_Compose_applyCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_applyCompose')))((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($applyCompose1, $pure) {
  $__fn = function($dictApplicative1) use ($applyCompose1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applyCompose2 = ($applyCompose1)((($dictApplicative1)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => (($GLOBALS['Data_Functor_Compose_compose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_compose')))(($GLOBALS['Data_Functor_Compose_Compose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_Compose')), (($GLOBALS['Data_Functor_Compose_compose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_compose')))($pure, (($GLOBALS['Control_Applicative_pure'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_pure')))($dictApplicative1))), "Apply0" => (function() use ($applyCompose2) {
  $__fn = function($__dollar____unused) use ($applyCompose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyCompose2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Compose_applicativeCompose'] = __NAMESPACE__ . '\\Data_Functor_Compose_applicativeCompose';

// Data_Functor_Compose_altCompose
function Data_Functor_Compose_altCompose($dictAlt) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_altCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$alt = (($GLOBALS['Control_Alt_alt'] ?? \Control\Alt\phpurs_eval_thunk('Control_Alt_alt')))($dictAlt);
$functorCompose1 = (($GLOBALS['Data_Functor_Compose_functorCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_functorCompose')))((($dictAlt)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($functorCompose1, $alt) {
  $__fn = function($dictFunctor) use ($functorCompose1, $alt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$functorCompose2 = ($functorCompose1)($dictFunctor);
    $__res = (($GLOBALS['Control_Alt_Alt__dollar__Dict'] ?? \Control\Alt\phpurs_eval_thunk('Control_Alt_Alt__dollar__Dict')))((object)["alt" => (function() use ($alt) {
  $__body = function($v, $v1) use ($alt) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return (($GLOBALS['Data_Functor_Compose_Compose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_Compose')))(($alt)($a, $b));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($alt, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorCompose2) {
  $__fn = function($__dollar____unused) use ($functorCompose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorCompose2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Compose_altCompose'] = __NAMESPACE__ . '\\Data_Functor_Compose_altCompose';

// Data_Functor_Compose_plusCompose
function Data_Functor_Compose_plusCompose($dictPlus) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_plusCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$empty = (($GLOBALS['Control_Plus_empty'] ?? \Control\Plus\phpurs_eval_thunk('Control_Plus_empty')))($dictPlus);
$altCompose1 = (($GLOBALS['Data_Functor_Compose_altCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_altCompose')))((($dictPlus)->Alt0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($altCompose1, $empty) {
  $__fn = function($dictFunctor) use ($altCompose1, $empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$altCompose2 = ($altCompose1)($dictFunctor);
    $__res = (($GLOBALS['Control_Plus_Plus__dollar__Dict'] ?? \Control\Plus\phpurs_eval_thunk('Control_Plus_Plus__dollar__Dict')))((object)["empty" => (($GLOBALS['Data_Functor_Compose_Compose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_Compose')))($empty), "Alt0" => (function() use ($altCompose2) {
  $__fn = function($__dollar____unused) use ($altCompose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $altCompose2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Compose_plusCompose'] = __NAMESPACE__ . '\\Data_Functor_Compose_plusCompose';

// Data_Functor_Compose_alternativeCompose
function Data_Functor_Compose_alternativeCompose($dictAlternative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_alternativeCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeCompose1 = (($GLOBALS['Data_Functor_Compose_applicativeCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_applicativeCompose')))((($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$plusCompose1 = (($GLOBALS['Data_Functor_Compose_plusCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_plusCompose')))((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (function() use ($applicativeCompose1, $plusCompose1) {
  $__fn = function($dictApplicative) use ($applicativeCompose1, $plusCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeCompose2 = ($applicativeCompose1)($dictApplicative);
$plusCompose2 = ($plusCompose1)((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Alternative_Alternative__dollar__Dict'] ?? \Control\Alternative\phpurs_eval_thunk('Control_Alternative_Alternative__dollar__Dict')))((object)["Applicative0" => (function() use ($applicativeCompose2) {
  $__fn = function($__dollar____unused) use ($applicativeCompose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeCompose2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusCompose2) {
  $__fn = function($__dollar____unused) use ($plusCompose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $plusCompose2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Compose_alternativeCompose'] = __NAMESPACE__ . '\\Data_Functor_Compose_alternativeCompose';

