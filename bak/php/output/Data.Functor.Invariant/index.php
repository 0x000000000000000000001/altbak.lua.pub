<?php

namespace Data\Functor\Invariant;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Monoid.Alternate/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Endo/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';

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
      case 'Data_Functor_Invariant_invariantMultiplicative': $v = (($GLOBALS['Data_Functor_Invariant_Invariant__dollar__Dict'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_Invariant__dollar__Dict')))((object)["imap" => (function() {
  $__body = function($f, $v, $v1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$x = $__case_2;
return (($GLOBALS['Data_Monoid_Multiplicative_Multiplicative'] ?? \Data\Monoid\Multiplicative\phpurs_eval_thunk('Data_Monoid_Multiplicative_Multiplicative')))(($f1)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
    if ($__num === 1) return function($v, $v1 = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $v, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Functor_Invariant_invariantEndo': $v = (($GLOBALS['Data_Functor_Invariant_Invariant__dollar__Dict'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_Invariant__dollar__Dict')))((object)["imap" => (function() {
  $__body = function($ab, $ba, $v) {
    $__case_0 = $ab;
    $__case_1 = $ba;
    $__case_2 = $v;
    if (true) {
$ab1 = $__case_0;
$ba1 = $__case_1;
$f = $__case_2;
return (($GLOBALS['Data_Monoid_Endo_Endo'] ?? \Data\Monoid\Endo\phpurs_eval_thunk('Data_Monoid_Endo_Endo')))((($GLOBALS['Data_Functor_Invariant_compose'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_compose')))($ab1, (($GLOBALS['Data_Functor_Invariant_compose'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_compose')))($f, $ba1)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($ab, $ba = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($ab, $ba, &$__fn) { return $__fn($ab, $ba, $v); };
    if ($__num === 1) return function($ba, $v = null) use ($ab, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($ab, $ba, $v);
      if ($__num2 === 1) return function($v) use ($ab, $ba, &$__fn) { return $__fn($ab, $ba, $v); };
      return phpurs_curry_fallback($__fn, [$ab], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($ab, $ba, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Functor_Invariant_invariantDual': $v = (($GLOBALS['Data_Functor_Invariant_Invariant__dollar__Dict'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_Invariant__dollar__Dict')))((object)["imap" => (function() {
  $__body = function($f, $v, $v1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$x = $__case_2;
return (($GLOBALS['Data_Monoid_Dual_Dual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_Dual')))(($f1)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
    if ($__num === 1) return function($v, $v1 = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $v, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Functor_Invariant_invariantDisj': $v = (($GLOBALS['Data_Functor_Invariant_Invariant__dollar__Dict'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_Invariant__dollar__Dict')))((object)["imap" => (function() {
  $__body = function($f, $v, $v1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$x = $__case_2;
return (($GLOBALS['Data_Monoid_Disj_Disj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_Disj')))(($f1)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
    if ($__num === 1) return function($v, $v1 = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $v, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Functor_Invariant_invariantConj': $v = (($GLOBALS['Data_Functor_Invariant_Invariant__dollar__Dict'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_Invariant__dollar__Dict')))((object)["imap" => (function() {
  $__body = function($f, $v, $v1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$x = $__case_2;
return (($GLOBALS['Data_Monoid_Conj_Conj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_Conj')))(($f1)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
    if ($__num === 1) return function($v, $v1 = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $v, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Functor_Invariant_invariantAdditive': $v = (($GLOBALS['Data_Functor_Invariant_Invariant__dollar__Dict'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_Invariant__dollar__Dict')))((object)["imap" => (function() {
  $__body = function($f, $v, $v1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$x = $__case_2;
return (($GLOBALS['Data_Monoid_Additive_Additive'] ?? \Data\Monoid\Additive\phpurs_eval_thunk('Data_Monoid_Additive_Additive')))(($f1)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
    if ($__num === 1) return function($v, $v1 = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $v, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Functor_Invariant_invariantArray': $v = (($GLOBALS['Data_Functor_Invariant_Invariant__dollar__Dict'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_Invariant__dollar__Dict')))((object)["imap" => (($GLOBALS['Data_Functor_Invariant_imapF'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_imapF')))(($GLOBALS['Data_Functor_functorArray'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_functorArray')))]); break;
      case 'Data_Functor_Invariant_invariantFn': $v = (($GLOBALS['Data_Functor_Invariant_Invariant__dollar__Dict'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_Invariant__dollar__Dict')))((object)["imap" => (($GLOBALS['Data_Functor_Invariant_imapF'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_imapF')))(($GLOBALS['Data_Functor_functorFn'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_functorFn')))]); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Functor_Invariant_compose
function Data_Functor_Invariant_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Invariant_compose';
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
$GLOBALS['Data_Functor_Invariant_compose'] = __NAMESPACE__ . '\\Data_Functor_Invariant_compose';

// Data_Functor_Invariant_Invariant$Dict
function Data_Functor_Invariant_Invariant__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Invariant_Invariant__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Invariant_Invariant__dollar__Dict'] = __NAMESPACE__ . '\\Data_Functor_Invariant_Invariant__dollar__Dict';







// Data_Functor_Invariant_imapF
function Data_Functor_Invariant_imapF($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Invariant_imapF';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))($dictFunctor);
    $__res = (function() use ($map) {
  $__fn = function($f, $v = null) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($map)($f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Invariant_imapF'] = __NAMESPACE__ . '\\Data_Functor_Invariant_imapF';



// Data_Functor_Invariant_imap
function Data_Functor_Invariant_imap($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Invariant_imap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->imap;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Invariant_imap'] = __NAMESPACE__ . '\\Data_Functor_Invariant_imap';

// Data_Functor_Invariant_invariantAlternate
function Data_Functor_Invariant_invariantAlternate($dictInvariant) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Invariant_invariantAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$imap1 = (($GLOBALS['Data_Functor_Invariant_imap'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_imap')))($dictInvariant);
    $__res = (($GLOBALS['Data_Functor_Invariant_Invariant__dollar__Dict'] ?? \Data\Functor\Invariant\phpurs_eval_thunk('Data_Functor_Invariant_Invariant__dollar__Dict')))((object)["imap" => (function() use ($imap1) {
  $__body = function($f, $g, $v) use ($imap1) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$g1 = $__case_1;
$x = $__case_2;
return (($GLOBALS['Data_Monoid_Alternate_Alternate'] ?? \Data\Monoid\Alternate\phpurs_eval_thunk('Data_Monoid_Alternate_Alternate')))(($imap1)($f1, $g1, $x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $g = null, $v = null) use ($imap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $g, &$__fn) { return $__fn($f, $g, $v); };
    if ($__num === 1) return function($g, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $v);
      if ($__num2 === 1) return function($v) use ($f, $g, &$__fn) { return $__fn($f, $g, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $g, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Invariant_invariantAlternate'] = __NAMESPACE__ . '\\Data_Functor_Invariant_invariantAlternate';

