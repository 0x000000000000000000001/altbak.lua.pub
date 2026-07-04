<?php

namespace Data\HeytingAlgebra\Generic;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra.Generic/index.php';
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
      case 'Data_HeytingAlgebra_Generic_genericHeytingAlgebraNoArguments': $v = (($GLOBALS['Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict')))((object)["genericFF'" => ($GLOBALS['Data_Generic_Rep_NoArguments'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_NoArguments')), "genericTT'" => ($GLOBALS['Data_Generic_Rep_NoArguments'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_NoArguments')), "genericImplies'" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($GLOBALS['Data_Generic_Rep_NoArguments'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_NoArguments'));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericConj'" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($GLOBALS['Data_Generic_Rep_NoArguments'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_NoArguments'));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericDisj'" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($GLOBALS['Data_Generic_Rep_NoArguments'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_NoArguments'));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericNot'" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Generic_Rep_NoArguments'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_NoArguments'));
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


// Data_HeytingAlgebra_Generic_GenericHeytingAlgebra$Dict
function Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict';

// Data_HeytingAlgebra_Generic_genericTT'
function Data_HeytingAlgebra_Generic_genericTT__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericTT__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericTT__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericTT__prime__'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericTT__prime__';

// Data_HeytingAlgebra_Generic_genericTT
function Data_HeytingAlgebra_Generic_genericTT($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericTT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$to = (($GLOBALS['Data_Generic_Rep_to'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_to')))($dictGeneric);
    $__res = (function() use ($to) {
  $__fn = function($dictGenericHeytingAlgebra) use ($to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($to)((($GLOBALS['Data_HeytingAlgebra_Generic_genericTT__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericTT__prime__')))($dictGenericHeytingAlgebra));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericTT'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericTT';

// Data_HeytingAlgebra_Generic_genericNot'
function Data_HeytingAlgebra_Generic_genericNot__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericNot__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericNot__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericNot__prime__'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericNot__prime__';

// Data_HeytingAlgebra_Generic_genericNot
function Data_HeytingAlgebra_Generic_genericNot($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericNot';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$to = (($GLOBALS['Data_Generic_Rep_to'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_to')))($dictGeneric);
$from = (($GLOBALS['Data_Generic_Rep_from'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_from')))($dictGeneric);
    $__res = (function() use ($to, $from) {
  $__fn = function($dictGenericHeytingAlgebra) use ($to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericNot__prime__1 = (($GLOBALS['Data_HeytingAlgebra_Generic_genericNot__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericNot__prime__')))($dictGenericHeytingAlgebra);
    $__res = (function() use ($to, $genericNot__prime__1, $from) {
  $__fn = function($x) use ($to, $genericNot__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($to)(($genericNot__prime__1)(($from)($x)));
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericNot'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericNot';

// Data_HeytingAlgebra_Generic_genericImplies'
function Data_HeytingAlgebra_Generic_genericImplies__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericImplies__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericImplies__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericImplies__prime__'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericImplies__prime__';

// Data_HeytingAlgebra_Generic_genericImplies
function Data_HeytingAlgebra_Generic_genericImplies($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericImplies';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$to = (($GLOBALS['Data_Generic_Rep_to'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_to')))($dictGeneric);
$from = (($GLOBALS['Data_Generic_Rep_from'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_from')))($dictGeneric);
    $__res = (function() use ($to, $from) {
  $__fn = function($dictGenericHeytingAlgebra) use ($to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericImplies__prime__1 = (($GLOBALS['Data_HeytingAlgebra_Generic_genericImplies__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericImplies__prime__')))($dictGenericHeytingAlgebra);
    $__res = (function() use ($to, $genericImplies__prime__1, $from) {
  $__fn = function($x, $y = null) use ($to, $genericImplies__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($to)(($genericImplies__prime__1)(($from)($x), ($from)($y)));
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericImplies'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericImplies';


// Data_HeytingAlgebra_Generic_genericHeytingAlgebraArgument
function Data_HeytingAlgebra_Generic_genericHeytingAlgebraArgument($dictHeytingAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericHeytingAlgebraArgument';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$implies = (($GLOBALS['Data_HeytingAlgebra_implies'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_implies')))($dictHeytingAlgebra);
$conj = (($GLOBALS['Data_HeytingAlgebra_conj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_conj')))($dictHeytingAlgebra);
$disj = (($GLOBALS['Data_HeytingAlgebra_disj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_disj')))($dictHeytingAlgebra);
$not = (($GLOBALS['Data_HeytingAlgebra_not'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_not')))($dictHeytingAlgebra);
    $__res = (($GLOBALS['Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict')))((object)["genericFF'" => (($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument')))((($GLOBALS['Data_HeytingAlgebra_ff'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_ff')))($dictHeytingAlgebra)), "genericTT'" => (($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument')))((($GLOBALS['Data_HeytingAlgebra_tt'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_tt')))($dictHeytingAlgebra)), "genericImplies'" => (function() use ($implies) {
  $__body = function($v, $v1) use ($implies) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return (($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument')))(($implies)($x, $y));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($implies, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericConj'" => (function() use ($conj) {
  $__body = function($v, $v1) use ($conj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return (($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument')))(($conj)($x, $y));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($conj, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericDisj'" => (function() use ($disj) {
  $__body = function($v, $v1) use ($disj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return (($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument')))(($disj)($x, $y));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($disj, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericNot'" => (function() use ($not) {
  $__body = function($v) use ($not) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return (($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument')))(($not)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($not, $__body, &$__fn) {
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericHeytingAlgebraArgument'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericHeytingAlgebraArgument';

// Data_HeytingAlgebra_Generic_genericFF'
function Data_HeytingAlgebra_Generic_genericFF__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericFF__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericFF__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericFF__prime__'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericFF__prime__';

// Data_HeytingAlgebra_Generic_genericFF
function Data_HeytingAlgebra_Generic_genericFF($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericFF';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$to = (($GLOBALS['Data_Generic_Rep_to'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_to')))($dictGeneric);
    $__res = (function() use ($to) {
  $__fn = function($dictGenericHeytingAlgebra) use ($to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($to)((($GLOBALS['Data_HeytingAlgebra_Generic_genericFF__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericFF__prime__')))($dictGenericHeytingAlgebra));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericFF'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericFF';

// Data_HeytingAlgebra_Generic_genericDisj'
function Data_HeytingAlgebra_Generic_genericDisj__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericDisj__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericDisj__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericDisj__prime__'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericDisj__prime__';

// Data_HeytingAlgebra_Generic_genericDisj
function Data_HeytingAlgebra_Generic_genericDisj($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericDisj';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$to = (($GLOBALS['Data_Generic_Rep_to'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_to')))($dictGeneric);
$from = (($GLOBALS['Data_Generic_Rep_from'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_from')))($dictGeneric);
    $__res = (function() use ($to, $from) {
  $__fn = function($dictGenericHeytingAlgebra) use ($to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericDisj__prime__1 = (($GLOBALS['Data_HeytingAlgebra_Generic_genericDisj__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericDisj__prime__')))($dictGenericHeytingAlgebra);
    $__res = (function() use ($to, $genericDisj__prime__1, $from) {
  $__fn = function($x, $y = null) use ($to, $genericDisj__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($to)(($genericDisj__prime__1)(($from)($x), ($from)($y)));
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericDisj'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericDisj';

// Data_HeytingAlgebra_Generic_genericConj'
function Data_HeytingAlgebra_Generic_genericConj__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericConj__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericConj__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericConj__prime__'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericConj__prime__';

// Data_HeytingAlgebra_Generic_genericHeytingAlgebraConstructor
function Data_HeytingAlgebra_Generic_genericHeytingAlgebraConstructor($dictGenericHeytingAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericHeytingAlgebraConstructor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericImplies__prime__1 = (($GLOBALS['Data_HeytingAlgebra_Generic_genericImplies__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericImplies__prime__')))($dictGenericHeytingAlgebra);
$genericConj__prime__1 = (($GLOBALS['Data_HeytingAlgebra_Generic_genericConj__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericConj__prime__')))($dictGenericHeytingAlgebra);
$genericDisj__prime__1 = (($GLOBALS['Data_HeytingAlgebra_Generic_genericDisj__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericDisj__prime__')))($dictGenericHeytingAlgebra);
$genericNot__prime__1 = (($GLOBALS['Data_HeytingAlgebra_Generic_genericNot__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericNot__prime__')))($dictGenericHeytingAlgebra);
    $__res = (($GLOBALS['Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict')))((object)["genericFF'" => (($GLOBALS['Data_Generic_Rep_Constructor'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Constructor')))((($GLOBALS['Data_HeytingAlgebra_Generic_genericFF__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericFF__prime__')))($dictGenericHeytingAlgebra)), "genericTT'" => (($GLOBALS['Data_Generic_Rep_Constructor'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Constructor')))((($GLOBALS['Data_HeytingAlgebra_Generic_genericTT__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericTT__prime__')))($dictGenericHeytingAlgebra)), "genericImplies'" => (function() use ($genericImplies__prime__1) {
  $__body = function($v, $v1) use ($genericImplies__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return (($GLOBALS['Data_Generic_Rep_Constructor'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Constructor')))(($genericImplies__prime__1)($a1, $a2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericImplies__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericConj'" => (function() use ($genericConj__prime__1) {
  $__body = function($v, $v1) use ($genericConj__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return (($GLOBALS['Data_Generic_Rep_Constructor'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Constructor')))(($genericConj__prime__1)($a1, $a2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericConj__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericDisj'" => (function() use ($genericDisj__prime__1) {
  $__body = function($v, $v1) use ($genericDisj__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return (($GLOBALS['Data_Generic_Rep_Constructor'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Constructor')))(($genericDisj__prime__1)($a1, $a2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericDisj__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericNot'" => (function() use ($genericNot__prime__1) {
  $__body = function($v) use ($genericNot__prime__1) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return (($GLOBALS['Data_Generic_Rep_Constructor'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Constructor')))(($genericNot__prime__1)($a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($genericNot__prime__1, $__body, &$__fn) {
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericHeytingAlgebraConstructor'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericHeytingAlgebraConstructor';

// Data_HeytingAlgebra_Generic_genericHeytingAlgebraProduct
function Data_HeytingAlgebra_Generic_genericHeytingAlgebraProduct($dictGenericHeytingAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericHeytingAlgebraProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericFF__prime__1 = (($GLOBALS['Data_HeytingAlgebra_Generic_genericFF__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericFF__prime__')))($dictGenericHeytingAlgebra);
$genericTT__prime__1 = (($GLOBALS['Data_HeytingAlgebra_Generic_genericTT__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericTT__prime__')))($dictGenericHeytingAlgebra);
$genericImplies__prime__1 = (($GLOBALS['Data_HeytingAlgebra_Generic_genericImplies__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericImplies__prime__')))($dictGenericHeytingAlgebra);
$genericConj__prime__1 = (($GLOBALS['Data_HeytingAlgebra_Generic_genericConj__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericConj__prime__')))($dictGenericHeytingAlgebra);
$genericDisj__prime__1 = (($GLOBALS['Data_HeytingAlgebra_Generic_genericDisj__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericDisj__prime__')))($dictGenericHeytingAlgebra);
$genericNot__prime__1 = (($GLOBALS['Data_HeytingAlgebra_Generic_genericNot__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericNot__prime__')))($dictGenericHeytingAlgebra);
    $__res = (function() use ($genericFF__prime__1, $genericTT__prime__1, $genericImplies__prime__1, $genericConj__prime__1, $genericDisj__prime__1, $genericNot__prime__1) {
  $__fn = function($dictGenericHeytingAlgebra1) use ($genericFF__prime__1, $genericTT__prime__1, $genericImplies__prime__1, $genericConj__prime__1, $genericDisj__prime__1, $genericNot__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericImplies__prime__2 = (($GLOBALS['Data_HeytingAlgebra_Generic_genericImplies__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericImplies__prime__')))($dictGenericHeytingAlgebra1);
$genericConj__prime__2 = (($GLOBALS['Data_HeytingAlgebra_Generic_genericConj__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericConj__prime__')))($dictGenericHeytingAlgebra1);
$genericDisj__prime__2 = (($GLOBALS['Data_HeytingAlgebra_Generic_genericDisj__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericDisj__prime__')))($dictGenericHeytingAlgebra1);
$genericNot__prime__2 = (($GLOBALS['Data_HeytingAlgebra_Generic_genericNot__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericNot__prime__')))($dictGenericHeytingAlgebra1);
    $__res = (($GLOBALS['Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict')))((object)["genericFF'" => (($GLOBALS['Data_Generic_Rep_Product'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Product')))($genericFF__prime__1, (($GLOBALS['Data_HeytingAlgebra_Generic_genericFF__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericFF__prime__')))($dictGenericHeytingAlgebra1)), "genericTT'" => (($GLOBALS['Data_Generic_Rep_Product'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Product')))($genericTT__prime__1, (($GLOBALS['Data_HeytingAlgebra_Generic_genericTT__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericTT__prime__')))($dictGenericHeytingAlgebra1)), "genericImplies'" => (function() use ($genericImplies__prime__1, $genericImplies__prime__2) {
  $__body = function($v, $v1) use ($genericImplies__prime__1, $genericImplies__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->v0;
$b1 = ($__case_0)->v1;
$a2 = ($__case_1)->v0;
$b2 = ($__case_1)->v1;
return (($GLOBALS['Data_Generic_Rep_Product'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Product')))(($genericImplies__prime__1)($a1, $a2), ($genericImplies__prime__2)($b1, $b2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericImplies__prime__1, $genericImplies__prime__2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericConj'" => (function() use ($genericConj__prime__1, $genericConj__prime__2) {
  $__body = function($v, $v1) use ($genericConj__prime__1, $genericConj__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->v0;
$b1 = ($__case_0)->v1;
$a2 = ($__case_1)->v0;
$b2 = ($__case_1)->v1;
return (($GLOBALS['Data_Generic_Rep_Product'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Product')))(($genericConj__prime__1)($a1, $a2), ($genericConj__prime__2)($b1, $b2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericConj__prime__1, $genericConj__prime__2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericDisj'" => (function() use ($genericDisj__prime__1, $genericDisj__prime__2) {
  $__body = function($v, $v1) use ($genericDisj__prime__1, $genericDisj__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->v0;
$b1 = ($__case_0)->v1;
$a2 = ($__case_1)->v0;
$b2 = ($__case_1)->v1;
return (($GLOBALS['Data_Generic_Rep_Product'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Product')))(($genericDisj__prime__1)($a1, $a2), ($genericDisj__prime__2)($b1, $b2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericDisj__prime__1, $genericDisj__prime__2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericNot'" => (function() use ($genericNot__prime__1, $genericNot__prime__2) {
  $__body = function($v) use ($genericNot__prime__1, $genericNot__prime__2) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Product":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
return (($GLOBALS['Data_Generic_Rep_Product'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Product')))(($genericNot__prime__1)($a), ($genericNot__prime__2)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($genericNot__prime__1, $genericNot__prime__2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericHeytingAlgebraProduct'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericHeytingAlgebraProduct';

// Data_HeytingAlgebra_Generic_genericConj
function Data_HeytingAlgebra_Generic_genericConj($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericConj';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$to = (($GLOBALS['Data_Generic_Rep_to'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_to')))($dictGeneric);
$from = (($GLOBALS['Data_Generic_Rep_from'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_from')))($dictGeneric);
    $__res = (function() use ($to, $from) {
  $__fn = function($dictGenericHeytingAlgebra) use ($to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$genericConj__prime__1 = (($GLOBALS['Data_HeytingAlgebra_Generic_genericConj__prime__'] ?? \Data\HeytingAlgebra\Generic\phpurs_eval_thunk('Data_HeytingAlgebra_Generic_genericConj__prime__')))($dictGenericHeytingAlgebra);
    $__res = (function() use ($to, $genericConj__prime__1, $from) {
  $__fn = function($x, $y = null) use ($to, $genericConj__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($to)(($genericConj__prime__1)(($from)($x), ($from)($y)));
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericConj'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericConj';

