<?php

namespace Control\Monad\ST\Internal;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Internal/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
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
      case 'Control_Monad_ST_Internal_modify__prime__': $v = ($GLOBALS['Control_Monad_ST_Internal_modifyImpl'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_modifyImpl')); break;
      case 'Control_Monad_ST_Internal_functorST': $v = (($GLOBALS['Data_Functor_Functor__dollar__Dict'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_Functor__dollar__Dict')))((object)["map" => ($GLOBALS['Control_Monad_ST_Internal_map_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_map_'))]); break;
      case 'Control_Monad_ST_Internal_map': $v = ($GLOBALS['Control_Monad_ST_Internal_map_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_map_')); break;
      case 'Control_Monad_ST_Internal_void': $v = (($GLOBALS['Data_Functor_void'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_void')))(($GLOBALS['Control_Monad_ST_Internal_functorST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_functorST'))); break;
      case 'Control_Monad_ST_Internal_monadST': $v = (($GLOBALS['Control_Monad_Monad__dollar__Dict'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_Monad__dollar__Dict')))((object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Control_Monad_ST_Internal_applicativeST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_applicativeST'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Control_Monad_ST_Internal_bindST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bindST'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Control_Monad_ST_Internal_bindST': $v = (($GLOBALS['Control_Bind_Bind__dollar__Dict'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_Bind__dollar__Dict')))((object)["bind" => ($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bind_')), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Control_Monad_ST_Internal_applyST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_applyST'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Control_Monad_ST_Internal_applicativeST': $v = (($GLOBALS['Control_Applicative_Applicative__dollar__Dict'] ?? \Control\Applicative\phpurs_eval_thunk('Control_Applicative_Applicative__dollar__Dict')))((object)["pure" => ($GLOBALS['Control_Monad_ST_Internal_pure_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_pure_')), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Control_Monad_ST_Internal_applyST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_applyST'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Control_Monad_ST_Internal_applyST': $v = (($GLOBALS['Control_Apply_Apply__dollar__Dict'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_Apply__dollar__Dict')))((object)["apply" => (($GLOBALS['Control_Monad_ap'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_ap')))(($GLOBALS['Control_Monad_ST_Internal_monadST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_monadST'))), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Control_Monad_ST_Internal_functorST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_functorST'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Control_Monad_ST_Internal_lift2': $v = (($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2')))(($GLOBALS['Control_Monad_ST_Internal_applyST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_applyST'))); break;
      case 'Control_Monad_ST_Internal_bind': $v = ($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bind_')); break;
      case 'Control_Monad_ST_Internal_bindFlipped': $v = (($GLOBALS['Control_Bind_bindFlipped'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bindFlipped')))(($GLOBALS['Control_Monad_ST_Internal_bindST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bindST'))); break;
      case 'Control_Monad_ST_Internal_discard': $v = ((function() {
  $__fn = function($dictBind) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))($dictBind);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($GLOBALS['Control_Monad_ST_Internal_bindST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bindST'))); break;
      case 'Control_Monad_ST_Internal_pure': $v = ($GLOBALS['Control_Monad_ST_Internal_pure_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_pure_')); break;
      case 'Control_Monad_ST_Internal_monadRecST': $v = (($GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_MonadRec__dollar__Dict')))((object)["tailRecM" => (function() {
  $__fn = function($f, $a = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$isLooping = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Loop")) {
return true;
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$fromDone = (($GLOBALS['Partial_Unsafe_unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafePartial')))((function() {
  $__fn = function($__dollar____unused, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ((function() use ($v) {
  $__body = function($__dollar____unused) use ($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Done":
$b = ($__case_0)->v0;
return $b;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($__dollar____unused) use ($v, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($__dollar____unused);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    $__res = (($GLOBALS['Control_Monad_ST_Internal_bind'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bind')))((($GLOBALS['Control_Monad_ST_Internal_bindFlipped'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bindFlipped')))(($GLOBALS['Control_Monad_ST_Internal_new'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_new')), ($f)($a)), (function() use ($isLooping, $f, $fromDone) {
  $__fn = function($r) use ($isLooping, $f, $fromDone, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_ST_Internal_discard'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_discard')))((($GLOBALS['Control_Monad_ST_Internal_while'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_while')))((($GLOBALS['Control_Monad_ST_Internal_map'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_map')))($isLooping, (($GLOBALS['Control_Monad_ST_Internal_read'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_read')))($r)), (($GLOBALS['Control_Monad_ST_Internal_bind'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bind')))((($GLOBALS['Control_Monad_ST_Internal_read'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_read')))($r), (function() use ($f, $r) {
  $__body = function($v) use ($f, $r) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Loop":
$a__prime__ = ($__case_0)->v0;
return (($GLOBALS['Control_Monad_ST_Internal_bind'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bind')))(($f)($a__prime__), (function() use ($r) {
  $__fn = function($e) use ($r, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_ST_Internal_void'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_void')))((($GLOBALS['Control_Monad_ST_Internal_write'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_write')))($e, $r));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
case "Done":
return (($GLOBALS['Control_Monad_ST_Internal_pure'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_pure')))(($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $r, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), (function() use ($fromDone, $r) {
  $__fn = function($__dollar____unused) use ($fromDone, $r, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_ST_Internal_map'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_map')))($fromDone, (($GLOBALS['Control_Monad_ST_Internal_read'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_read')))($r));
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
})(), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Control_Monad_ST_Internal_monadST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_monadST'));
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
if (!function_exists('phpurs_uncurry2')) {
function phpurs_uncurry2($fn) {
    return function($a, $b = null) use ($fn) {
        if (func_num_args() < 2) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry2($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b);
    };
}
function phpurs_uncurry3($fn) {
    return function($a, $b = null, $c = null) use ($fn) {
        if (func_num_args() < 3) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry3($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c);
    };
}
function phpurs_uncurry4($fn) {
    return function($a, $b = null, $c = null, $d = null) use ($fn) {
        if (func_num_args() < 4) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry4($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d);
    };
}
function phpurs_uncurry5($fn) {
    return function($a, $b = null, $c = null, $d = null, $e = null) use ($fn) {
        if (func_num_args() < 5) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry5($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d)($e);
    };
}
}



$Control_Monad_ST_Internal_map_ = phpurs_uncurry2(function($f) { return function($a) use(&$f) { return function() use(&$f, &$a) { return $f($a()); }; }; });
$Control_Monad_ST_Internal_bind_ = phpurs_uncurry2(function($a) { return function($f) use(&$a) { return function() use(&$a, &$f) { return $f($a())(); }; }; });
$Control_Monad_ST_Internal_pure_ = function($a) { return function() use(&$a) { return $a; }; };
$Control_Monad_ST_Internal_new = function($val) { return function() use(&$val) { return (object)['value' => $val]; }; };
$Control_Monad_ST_Internal_read = function($ref) { return function() use(&$ref) { return $ref->value; }; };
$Control_Monad_ST_Internal_modifyImpl = phpurs_uncurry2(function($f) { return function($ref) use(&$f) { return function() use(&$f, &$ref) { $t = $f($ref->value); $ref->value = $t->state; return $t->value; }; }; });
$Control_Monad_ST_Internal_write = phpurs_uncurry2(function($val) { return function($ref) use(&$val) { return function() use(&$val, &$ref) { $ref->value = $val; return $val; }; }; });
$Control_Monad_ST_Internal_run = function($f) { return $f(); };
$Control_Monad_ST_Internal_while = phpurs_uncurry2(function($f) { return function($a) use(&$f) { return function() use(&$f, &$a) { while ($f()) { $a(); } return null; }; }; });
$Control_Monad_ST_Internal_for = phpurs_uncurry3(function($lo) { return function($hi) use(&$lo) { return function($f) use(&$lo, &$hi) { return function() use(&$lo, &$hi, &$f) { for ($i = $lo; $i < $hi; $i++) { $f($i)(); } return null; }; }; }; });
$Control_Monad_ST_Internal_foreach = phpurs_uncurry2(function($as) { return function($f) use(&$as) { return function() use(&$as, &$f) { foreach ($as as $a) { $f($a)(); } return null; }; }; });


// Control_Monad_ST_Internal_modify
function Control_Monad_ST_Internal_modify($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_ST_Internal_modify';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Monad_ST_Internal_modify__prime__'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_modify__prime__')))((function() use ($f) {
  $__fn = function($s) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$s__prime__ = ($f)($s);
    $__res = (object)["state" => $s__prime__, "value" => $s__prime__];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_ST_Internal_modify'] = __NAMESPACE__ . '\\Control_Monad_ST_Internal_modify';













// Control_Monad_ST_Internal_semigroupST
function Control_Monad_ST_Internal_semigroupST($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_ST_Internal_semigroupST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (($GLOBALS['Control_Monad_ST_Internal_lift2'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_lift2')))((($GLOBALS['Data_Semigroup_append'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_append')))($dictSemigroup))]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_ST_Internal_semigroupST'] = __NAMESPACE__ . '\\Control_Monad_ST_Internal_semigroupST';


// Control_Monad_ST_Internal_monoidST
function Control_Monad_ST_Internal_monoidST($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_ST_Internal_monoidST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$semigroupST1 = (($GLOBALS['Control_Monad_ST_Internal_semigroupST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_semigroupST')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
    $__res = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Control_Monad_ST_Internal_pure'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_pure')))((($GLOBALS['Data_Monoid_mempty'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_mempty')))($dictMonoid)), "Semigroup0" => (function() use ($semigroupST1) {
  $__fn = function($__dollar____unused) use ($semigroupST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_ST_Internal_monoidST'] = __NAMESPACE__ . '\\Control_Monad_ST_Internal_monoidST';

