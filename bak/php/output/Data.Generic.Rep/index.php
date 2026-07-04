<?php

namespace Data\Generic\Rep;

require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Void/index.php';
require_once __DIR__ . '/../Type.Proxy/index.php';

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
      case 'Data_Generic_Rep_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Generic_Rep_show': $v = ($GLOBALS['Data_Show_showStringImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showStringImpl')); break;
      case 'Data_Generic_Rep_NoArguments': $v = ($GLOBALS['__phpurs_data0_NoArguments'] ??= new Phpurs_Data0("NoArguments")); break;
      case 'Data_Generic_Rep_showNoArguments': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = "NoArguments";
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




// Data_Generic_Rep_Inl
function Data_Generic_Rep_Inl($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Generic_Rep_Inl';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Inl", $value0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Generic_Rep_Inl'] = __NAMESPACE__ . '\\Data_Generic_Rep_Inl';

// Data_Generic_Rep_Inr
function Data_Generic_Rep_Inr($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Generic_Rep_Inr';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Inr", $value0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Generic_Rep_Inr'] = __NAMESPACE__ . '\\Data_Generic_Rep_Inr';

// Data_Generic_Rep_Product
function Data_Generic_Rep_Product($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Generic_Rep_Product';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Product", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Generic_Rep_Product'] = __NAMESPACE__ . '\\Data_Generic_Rep_Product';

// Data_Generic_Rep_NoConstructors
function Data_Generic_Rep_NoConstructors($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Generic_Rep_NoConstructors';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Generic_Rep_NoConstructors'] = __NAMESPACE__ . '\\Data_Generic_Rep_NoConstructors';


// Data_Generic_Rep_Generic$Dict
function Data_Generic_Rep_Generic__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Generic_Rep_Generic__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Generic_Rep_Generic__dollar__Dict'] = __NAMESPACE__ . '\\Data_Generic_Rep_Generic__dollar__Dict';

// Data_Generic_Rep_Constructor
function Data_Generic_Rep_Constructor($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Generic_Rep_Constructor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Generic_Rep_Constructor'] = __NAMESPACE__ . '\\Data_Generic_Rep_Constructor';

// Data_Generic_Rep_Argument
function Data_Generic_Rep_Argument($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Generic_Rep_Argument';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Generic_Rep_Argument'] = __NAMESPACE__ . '\\Data_Generic_Rep_Argument';

// Data_Generic_Rep_to
function Data_Generic_Rep_to($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Generic_Rep_to';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->to;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Generic_Rep_to'] = __NAMESPACE__ . '\\Data_Generic_Rep_to';

// Data_Generic_Rep_showSum
function Data_Generic_Rep_showSum($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Generic_Rep_showSum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show1 = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))($dictShow);
    $__res = (function() use ($show1) {
  $__fn = function($dictShow1) use ($show1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show2 = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))($dictShow1);
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show1, $show2) {
  $__body = function($v) use ($show1, $show2) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Inl":
$a = ($__case_0)->v0;
return (($GLOBALS['Data_Generic_Rep_append'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_append')))("(Inl ", (($GLOBALS['Data_Generic_Rep_append'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_append')))(($show1)($a), ")"));
break;
case "Inr":
$b = ($__case_0)->v0;
return (($GLOBALS['Data_Generic_Rep_append'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_append')))("(Inr ", (($GLOBALS['Data_Generic_Rep_append'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_append')))(($show2)($b), ")"));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($show1, $show2, $__body, &$__fn) {
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
$GLOBALS['Data_Generic_Rep_showSum'] = __NAMESPACE__ . '\\Data_Generic_Rep_showSum';

// Data_Generic_Rep_showProduct
function Data_Generic_Rep_showProduct($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Generic_Rep_showProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show1 = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))($dictShow);
    $__res = (function() use ($show1) {
  $__fn = function($dictShow1) use ($show1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show2 = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))($dictShow1);
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show1, $show2) {
  $__body = function($v) use ($show1, $show2) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Product":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
return (($GLOBALS['Data_Generic_Rep_append'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_append')))("(Product ", (($GLOBALS['Data_Generic_Rep_append'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_append')))(($show1)($a), (($GLOBALS['Data_Generic_Rep_append'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_append')))(" ", (($GLOBALS['Data_Generic_Rep_append'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_append')))(($show2)($b), ")"))));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($show1, $show2, $__body, &$__fn) {
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
$GLOBALS['Data_Generic_Rep_showProduct'] = __NAMESPACE__ . '\\Data_Generic_Rep_showProduct';


// Data_Generic_Rep_showConstructor
function Data_Generic_Rep_showConstructor($dictIsSymbol) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Generic_Rep_showConstructor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$reflectSymbol = (($GLOBALS['Data_Symbol_reflectSymbol'] ?? \Data\Symbol\phpurs_eval_thunk('Data_Symbol_reflectSymbol')))($dictIsSymbol);
    $__res = (function() use ($reflectSymbol) {
  $__fn = function($dictShow) use ($reflectSymbol, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show1 = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))($dictShow);
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($reflectSymbol, $show1) {
  $__body = function($v) use ($reflectSymbol, $show1) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return (($GLOBALS['Data_Generic_Rep_append'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_append')))("(Constructor @", (($GLOBALS['Data_Generic_Rep_append'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_append')))((($GLOBALS['Data_Generic_Rep_show'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_show')))(($reflectSymbol)(($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy')))), (($GLOBALS['Data_Generic_Rep_append'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_append')))(" ", (($GLOBALS['Data_Generic_Rep_append'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_append')))(($show1)($a), ")"))));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($reflectSymbol, $show1, $__body, &$__fn) {
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
$GLOBALS['Data_Generic_Rep_showConstructor'] = __NAMESPACE__ . '\\Data_Generic_Rep_showConstructor';

// Data_Generic_Rep_showArgument
function Data_Generic_Rep_showArgument($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Generic_Rep_showArgument';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show1 = (($GLOBALS['Data_Show_show'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_show')))($dictShow);
    $__res = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() use ($show1) {
  $__body = function($v) use ($show1) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return (($GLOBALS['Data_Generic_Rep_append'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_append')))("(Argument ", (($GLOBALS['Data_Generic_Rep_append'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_append')))(($show1)($a), ")"));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($show1, $__body, &$__fn) {
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
$GLOBALS['Data_Generic_Rep_showArgument'] = __NAMESPACE__ . '\\Data_Generic_Rep_showArgument';

// Data_Generic_Rep_repOf
function Data_Generic_Rep_repOf($dictGeneric, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Generic_Rep_repOf';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($dictGeneric, $__fn) { return $__fn($dictGeneric, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'));
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Generic_Rep_repOf'] = __NAMESPACE__ . '\\Data_Generic_Rep_repOf';

// Data_Generic_Rep_from
function Data_Generic_Rep_from($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Generic_Rep_from';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->from;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Generic_Rep_from'] = __NAMESPACE__ . '\\Data_Generic_Rep_from';

