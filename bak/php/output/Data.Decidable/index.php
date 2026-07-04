<?php

namespace Data\Decidable;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Data.Comparison/index.php';
require_once __DIR__ . '/../Data.Decidable/index.php';
require_once __DIR__ . '/../Data.Decide/index.php';
require_once __DIR__ . '/../Data.Divisible/index.php';
require_once __DIR__ . '/../Data.Equivalence/index.php';
require_once __DIR__ . '/../Data.Op/index.php';
require_once __DIR__ . '/../Data.Predicate/index.php';
require_once __DIR__ . '/../Data.Void/index.php';
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
      case 'Data_Decidable_decidablePredicate': $v = (($GLOBALS['Data_Decidable_Decidable__dollar__Dict'] ?? \Data\Decidable\phpurs_eval_thunk('Data_Decidable_Decidable__dollar__Dict')))((object)["lose" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Predicate_Predicate'] ?? \Data\Predicate\phpurs_eval_thunk('Data_Predicate_Predicate')))((function() use ($f) {
  $__fn = function($a) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Void_absurd'] ?? \Data\Void\phpurs_eval_thunk('Data_Void_absurd')))(($f)($a));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Decide0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Decide_choosePredicate'] ?? \Data\Decide\phpurs_eval_thunk('Data_Decide_choosePredicate'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Divisible1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Divisible_divisiblePredicate'] ?? \Data\Divisible\phpurs_eval_thunk('Data_Divisible_divisiblePredicate'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Decidable_decidableEquivalence': $v = (($GLOBALS['Data_Decidable_Decidable__dollar__Dict'] ?? \Data\Decidable\phpurs_eval_thunk('Data_Decidable_Decidable__dollar__Dict')))((object)["lose" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Equivalence_Equivalence'] ?? \Data\Equivalence\phpurs_eval_thunk('Data_Equivalence_Equivalence')))((function() use ($f) {
  $__fn = function($a) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Void_absurd'] ?? \Data\Void\phpurs_eval_thunk('Data_Void_absurd')))(($f)($a));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Decide0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Decide_chooseEquivalence'] ?? \Data\Decide\phpurs_eval_thunk('Data_Decide_chooseEquivalence'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Divisible1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Divisible_divisibleEquivalence'] ?? \Data\Divisible\phpurs_eval_thunk('Data_Divisible_divisibleEquivalence'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Decidable_decidableComparison': $v = (($GLOBALS['Data_Decidable_Decidable__dollar__Dict'] ?? \Data\Decidable\phpurs_eval_thunk('Data_Decidable_Decidable__dollar__Dict')))((object)["lose" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Comparison_Comparison'] ?? \Data\Comparison\phpurs_eval_thunk('Data_Comparison_Comparison')))((function() use ($f) {
  $__fn = function($a, $v = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($a, &$__fn) { return $__fn($a, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Data_Void_absurd'] ?? \Data\Void\phpurs_eval_thunk('Data_Void_absurd')))(($f)($a));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Decide0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Decide_chooseComparison'] ?? \Data\Decide\phpurs_eval_thunk('Data_Decide_chooseComparison'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Divisible1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Divisible_divisibleComparison'] ?? \Data\Divisible\phpurs_eval_thunk('Data_Divisible_divisibleComparison'));
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


// Data_Decidable_identity
function Data_Decidable_identity($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Decidable_identity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Decidable_identity'] = __NAMESPACE__ . '\\Data_Decidable_identity';

// Data_Decidable_Decidable$Dict
function Data_Decidable_Decidable__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Decidable_Decidable__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Decidable_Decidable__dollar__Dict'] = __NAMESPACE__ . '\\Data_Decidable_Decidable__dollar__Dict';

// Data_Decidable_lose
function Data_Decidable_lose($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Decidable_lose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->lose;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Decidable_lose'] = __NAMESPACE__ . '\\Data_Decidable_lose';

// Data_Decidable_lost
function Data_Decidable_lost($dictDecidable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Decidable_lost';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Decidable_lose'] ?? \Data\Decidable\phpurs_eval_thunk('Data_Decidable_lose')))($dictDecidable, ($GLOBALS['Data_Decidable_identity'] ?? \Data\Decidable\phpurs_eval_thunk('Data_Decidable_identity')));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Decidable_lost'] = __NAMESPACE__ . '\\Data_Decidable_lost';


// Data_Decidable_decidableOp
function Data_Decidable_decidableOp($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Decidable_decidableOp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$chooseOp = (($GLOBALS['Data_Decide_chooseOp'] ?? \Data\Decide\phpurs_eval_thunk('Data_Decide_chooseOp')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$divisibleOp = (($GLOBALS['Data_Divisible_divisibleOp'] ?? \Data\Divisible\phpurs_eval_thunk('Data_Divisible_divisibleOp')))($dictMonoid);
    $__res = (($GLOBALS['Data_Decidable_Decidable__dollar__Dict'] ?? \Data\Decidable\phpurs_eval_thunk('Data_Decidable_Decidable__dollar__Dict')))((object)["lose" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Op_Op'] ?? \Data\Op\phpurs_eval_thunk('Data_Op_Op')))((function() use ($f) {
  $__fn = function($a) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Void_absurd'] ?? \Data\Void\phpurs_eval_thunk('Data_Void_absurd')))(($f)($a));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Decide0" => (function() use ($chooseOp) {
  $__fn = function($__dollar____unused) use ($chooseOp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $chooseOp;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Divisible1" => (function() use ($divisibleOp) {
  $__fn = function($__dollar____unused) use ($divisibleOp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $divisibleOp;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Decidable_decidableOp'] = __NAMESPACE__ . '\\Data_Decidable_decidableOp';



