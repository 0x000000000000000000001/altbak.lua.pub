<?php

namespace Data\Show;

require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Data.Void/index.php';
require_once __DIR__ . '/../Record.Unsafe/index.php';
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
      case 'Data_Show_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Show_showVoid': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => ($GLOBALS['Data_Void_absurd'] ?? \Data\Void\phpurs_eval_thunk('Data_Void_absurd'))]); break;
      case 'Data_Show_showUnit': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = "unit";
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Show_showString': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => ($GLOBALS['Data_Show_showStringImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showStringImpl'))]); break;
      case 'Data_Show_showRecordFieldsNil': $v = (($GLOBALS['Data_Show_ShowRecordFields__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_ShowRecordFields__dollar__Dict')))((object)["showRecordFields" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = "";
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Show_showProxy': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = "Proxy";
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Show_showNumber': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => ($GLOBALS['Data_Show_showNumberImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showNumberImpl'))]); break;
      case 'Data_Show_showInt': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => ($GLOBALS['Data_Show_showIntImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showIntImpl'))]); break;
      case 'Data_Show_showChar': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => ($GLOBALS['Data_Show_showCharImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showCharImpl'))]); break;
      case 'Data_Show_showBoolean': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (($__case_0 === true)) {
return "true";
} else {
if (($__case_0 === false)) {
return "false";
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
})()]); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };



// Data_Show_ShowRecordFields$Dict
function Data_Show_ShowRecordFields__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Show_ShowRecordFields__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Show_ShowRecordFields__dollar__Dict'] = __NAMESPACE__ . '\\Data_Show_ShowRecordFields__dollar__Dict';

// Data_Show_Show$Dict
function Data_Show_Show__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Show_Show__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Show_Show__dollar__Dict'] = __NAMESPACE__ . '\\Data_Show_Show__dollar__Dict';





// Data_Show_showRecordFields
function Data_Show_showRecordFields($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Show_showRecordFields';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->showRecordFields;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Show_showRecordFields'] = __NAMESPACE__ . '\\Data_Show_showRecordFields';

// Data_Show_showRecord
function Data_Show_showRecord($__dollar____unused_, $__dollar____unused = null, $dictShowRecordFields = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Show_showRecord';
  if ($__num < 3) {
    if ($__num === 2) return function($dictShowRecordFields) use ($__dollar____unused_, $__dollar____unused, $__fn) { return $__fn($__dollar____unused_, $__dollar____unused, $dictShowRecordFields); };
    if ($__num === 1) return function($__dollar____unused, $dictShowRecordFields = null) use ($__dollar____unused_, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($__dollar____unused_, $__dollar____unused, $dictShowRecordFields);
      if ($__num2 === 1) return function($dictShowRecordFields) use ($__dollar____unused_, $__dollar____unused, $__fn) { return $__fn($__dollar____unused_, $__dollar____unused, $dictShowRecordFields); };
      return phpurs_curry_fallback($__fn, [$__dollar____unused_], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Data_Show_Show__dollar__Dict = ($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict'));
$__global_Type_Proxy_Proxy = ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'));
$showRecordFields1 = ($dictShowRecordFields)->showRecordFields;
    $__res = ($__global_Data_Show_Show__dollar__Dict)((object)["show" => (function() use ($showRecordFields1, $__global_Type_Proxy_Proxy) {
  $__fn = function($record) use ($showRecordFields1, $__global_Type_Proxy_Proxy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ("{" . (($showRecordFields1)($__global_Type_Proxy_Proxy, $record) . "}"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Show_showRecord'] = __NAMESPACE__ . '\\Data_Show_showRecord';






// Data_Show_show
function Data_Show_show($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Show_show';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Show_show'] = __NAMESPACE__ . '\\Data_Show_show';

// Data_Show_showArray
function Data_Show_showArray($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Show_showArray';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Show_Show__dollar__Dict = ($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict'));
$__global_Data_Show_showArrayImpl = ($GLOBALS['Data_Show_showArrayImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showArrayImpl'));
    $__res = ($__global_Data_Show_Show__dollar__Dict)((object)["show" => ($__global_Data_Show_showArrayImpl)(($dictShow)->show)]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Show_showArray'] = __NAMESPACE__ . '\\Data_Show_showArray';

// Data_Show_showRecordFieldsCons
function Data_Show_showRecordFieldsCons($dictIsSymbol) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Show_showRecordFieldsCons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Show_ShowRecordFields__dollar__Dict = ($GLOBALS['Data_Show_ShowRecordFields__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_ShowRecordFields__dollar__Dict'));
$__global_Type_Proxy_Proxy = ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'));
$__global_Record_Unsafe_unsafeGet = ($GLOBALS['Record_Unsafe_unsafeGet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeGet'));
$reflectSymbol = ($dictIsSymbol)->reflectSymbol;
    $__res = (function() use ($__global_Data_Show_ShowRecordFields__dollar__Dict, $__global_Type_Proxy_Proxy, $reflectSymbol, $__global_Record_Unsafe_unsafeGet) {
  $__fn = function($dictShowRecordFields) use ($__global_Data_Show_ShowRecordFields__dollar__Dict, $__global_Type_Proxy_Proxy, $reflectSymbol, $__global_Record_Unsafe_unsafeGet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$showRecordFields1 = ($dictShowRecordFields)->showRecordFields;
    $__res = (function() use ($__global_Data_Show_ShowRecordFields__dollar__Dict, $showRecordFields1, $__global_Type_Proxy_Proxy, $reflectSymbol, $__global_Record_Unsafe_unsafeGet) {
  $__fn = function($dictShow) use ($__global_Data_Show_ShowRecordFields__dollar__Dict, $showRecordFields1, $__global_Type_Proxy_Proxy, $reflectSymbol, $__global_Record_Unsafe_unsafeGet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show1 = ($dictShow)->show;
    $__res = ($__global_Data_Show_ShowRecordFields__dollar__Dict)((object)["showRecordFields" => (function() use ($showRecordFields1, $__global_Type_Proxy_Proxy, $reflectSymbol, $__global_Record_Unsafe_unsafeGet, $show1) {
  $__fn = function($v, $record = null) use ($showRecordFields1, $__global_Type_Proxy_Proxy, $reflectSymbol, $__global_Record_Unsafe_unsafeGet, $show1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($record) use ($v, &$__fn) { return $__fn($v, $record); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$tail = ($showRecordFields1)($__global_Type_Proxy_Proxy, $record);
$key = ($reflectSymbol)($__global_Type_Proxy_Proxy);
$focus = ($__global_Record_Unsafe_unsafeGet)($key, $record);
    $__res = (" " . ($key . (": " . (($show1)($focus) . ("," . $tail)))));
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
$GLOBALS['Data_Show_showRecordFieldsCons'] = __NAMESPACE__ . '\\Data_Show_showRecordFieldsCons';

// Data_Show_showRecordFieldsConsNil
function Data_Show_showRecordFieldsConsNil($dictIsSymbol) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Show_showRecordFieldsConsNil';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Show_ShowRecordFields__dollar__Dict = ($GLOBALS['Data_Show_ShowRecordFields__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_ShowRecordFields__dollar__Dict'));
$__global_Type_Proxy_Proxy = ($GLOBALS['Type_Proxy_Proxy'] ?? \Type\Proxy\phpurs_eval_thunk('Type_Proxy_Proxy'));
$__global_Record_Unsafe_unsafeGet = ($GLOBALS['Record_Unsafe_unsafeGet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeGet'));
$reflectSymbol = ($dictIsSymbol)->reflectSymbol;
    $__res = (function() use ($__global_Data_Show_ShowRecordFields__dollar__Dict, $reflectSymbol, $__global_Type_Proxy_Proxy, $__global_Record_Unsafe_unsafeGet) {
  $__fn = function($dictShow) use ($__global_Data_Show_ShowRecordFields__dollar__Dict, $reflectSymbol, $__global_Type_Proxy_Proxy, $__global_Record_Unsafe_unsafeGet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show1 = ($dictShow)->show;
    $__res = ($__global_Data_Show_ShowRecordFields__dollar__Dict)((object)["showRecordFields" => (function() use ($reflectSymbol, $__global_Type_Proxy_Proxy, $__global_Record_Unsafe_unsafeGet, $show1) {
  $__fn = function($v, $record = null) use ($reflectSymbol, $__global_Type_Proxy_Proxy, $__global_Record_Unsafe_unsafeGet, $show1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($record) use ($v, &$__fn) { return $__fn($v, $record); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$key = ($reflectSymbol)($__global_Type_Proxy_Proxy);
$focus = ($__global_Record_Unsafe_unsafeGet)($key, $record);
    $__res = (" " . ($key . (": " . (($show1)($focus) . " "))));
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
$GLOBALS['Data_Show_showRecordFieldsConsNil'] = __NAMESPACE__ . '\\Data_Show_showRecordFieldsConsNil';

