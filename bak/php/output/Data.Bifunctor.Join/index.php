<?php

namespace Data\Bifunctor\Join;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Biapplicative/index.php';
require_once __DIR__ . '/../Control.Biapply/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Bifunctor.Join/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
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
      case 'Data_Bifunctor_Join_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Bifunctor_Join_newtypeJoin': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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



// Data_Bifunctor_Join_Join
function Data_Bifunctor_Join_Join($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifunctor_Join_Join';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifunctor_Join_Join'] = __NAMESPACE__ . '\\Data_Bifunctor_Join_Join';

// Data_Bifunctor_Join_showJoin
function Data_Bifunctor_Join_showJoin($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifunctor_Join_showJoin';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))($dictShow);
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return (($GLOBALS['Data_Bifunctor_Join_append'] ?? \Data\Bifunctor\Join\phpurs_eval_thunk('Data_Bifunctor_Join_append')))("(Join ", (($GLOBALS['Data_Bifunctor_Join_append'] ?? \Data\Bifunctor\Join\phpurs_eval_thunk('Data_Bifunctor_Join_append')))(($show)($x), ")"));
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
$GLOBALS['Data_Bifunctor_Join_showJoin'] = __NAMESPACE__ . '\\Data_Bifunctor_Join_showJoin';

// Data_Bifunctor_Join_ordJoin
function Data_Bifunctor_Join_ordJoin($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifunctor_Join_ordJoin';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictOrd;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifunctor_Join_ordJoin'] = __NAMESPACE__ . '\\Data_Bifunctor_Join_ordJoin';


// Data_Bifunctor_Join_eqJoin
function Data_Bifunctor_Join_eqJoin($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifunctor_Join_eqJoin';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $dictEq;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifunctor_Join_eqJoin'] = __NAMESPACE__ . '\\Data_Bifunctor_Join_eqJoin';

// Data_Bifunctor_Join_bifunctorJoin
function Data_Bifunctor_Join_bifunctorJoin($dictBifunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifunctor_Join_bifunctorJoin';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bimap = (($GLOBALS['Data_Bifunctor_bimap'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bimap')))($dictBifunctor);
    $__res = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => (function() use ($bimap) {
  $__body = function($f, $v) use ($bimap) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$a = $__case_1;
return (($GLOBALS['Data_Bifunctor_Join_Join'] ?? \Data\Bifunctor\Join\phpurs_eval_thunk('Data_Bifunctor_Join_Join')))(($bimap)($f1, $f1, $a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($bimap, $__body, &$__fn) {
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
$GLOBALS['Data_Bifunctor_Join_bifunctorJoin'] = __NAMESPACE__ . '\\Data_Bifunctor_Join_bifunctorJoin';

// Data_Bifunctor_Join_biapplyJoin
function Data_Bifunctor_Join_biapplyJoin($dictBiapply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifunctor_Join_biapplyJoin';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$biapply = (($GLOBALS['Control_Biapply_biapply'] ?? \Control\Biapply\phpurs_eval_thunk('Control_Biapply_biapply')))($dictBiapply);
$bifunctorJoin1 = (($GLOBALS['Data_Bifunctor_Join_bifunctorJoin'] ?? \Data\Bifunctor\Join\phpurs_eval_thunk('Data_Bifunctor_Join_bifunctorJoin')))((($dictBiapply)->Bifunctor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => (function() use ($biapply) {
  $__body = function($v, $v1) use ($biapply) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$a = $__case_1;
return (($GLOBALS['Data_Bifunctor_Join_Join'] ?? \Data\Bifunctor\Join\phpurs_eval_thunk('Data_Bifunctor_Join_Join')))(($biapply)($f, $a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($biapply, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($bifunctorJoin1) {
  $__fn = function($__dollar____unused) use ($bifunctorJoin1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bifunctorJoin1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifunctor_Join_biapplyJoin'] = __NAMESPACE__ . '\\Data_Bifunctor_Join_biapplyJoin';

// Data_Bifunctor_Join_biapplicativeJoin
function Data_Bifunctor_Join_biapplicativeJoin($dictBiapplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifunctor_Join_biapplicativeJoin';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bipure = (($GLOBALS['Control_Biapplicative_bipure'] ?? \Control\Biapplicative\phpurs_eval_thunk('Control_Biapplicative_bipure')))($dictBiapplicative);
$biapplyJoin1 = (($GLOBALS['Data_Bifunctor_Join_biapplyJoin'] ?? \Data\Bifunctor\Join\phpurs_eval_thunk('Data_Bifunctor_Join_biapplyJoin')))((($dictBiapplicative)->Biapply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => (function() use ($bipure) {
  $__fn = function($a) use ($bipure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Bifunctor_Join_Join'] ?? \Data\Bifunctor\Join\phpurs_eval_thunk('Data_Bifunctor_Join_Join')))(($bipure)($a, $a));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($biapplyJoin1) {
  $__fn = function($__dollar____unused) use ($biapplyJoin1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $biapplyJoin1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifunctor_Join_biapplicativeJoin'] = __NAMESPACE__ . '\\Data_Bifunctor_Join_biapplicativeJoin';

