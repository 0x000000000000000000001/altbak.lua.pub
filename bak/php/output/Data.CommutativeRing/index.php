<?php

namespace Data\CommutativeRing;

require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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
      case 'Data_CommutativeRing_ringRecord': $v = (($GLOBALS['Data_Ring_ringRecord'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringRecord')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_CommutativeRing_commutativeRingUnit': $v = (($GLOBALS['Data_CommutativeRing_CommutativeRing__dollar__Dict'] ?? \Data\CommutativeRing\phpurs_eval_thunk('Data_CommutativeRing_CommutativeRing__dollar__Dict')))((object)["Ring0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ring_ringUnit = ($GLOBALS['Data_Ring_ringUnit'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringUnit'));
    $__res = $__global_Data_Ring_ringUnit;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_CommutativeRing_commutativeRingRecordNil': $v = (($GLOBALS['Data_CommutativeRing_CommutativeRingRecord__dollar__Dict'] ?? \Data\CommutativeRing\phpurs_eval_thunk('Data_CommutativeRing_CommutativeRingRecord__dollar__Dict')))((object)["RingRecord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ring_ringRecordNil = ($GLOBALS['Data_Ring_ringRecordNil'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringRecordNil'));
    $__res = $__global_Data_Ring_ringRecordNil;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_CommutativeRing_commutativeRingProxy': $v = (($GLOBALS['Data_CommutativeRing_CommutativeRing__dollar__Dict'] ?? \Data\CommutativeRing\phpurs_eval_thunk('Data_CommutativeRing_CommutativeRing__dollar__Dict')))((object)["Ring0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ring_ringProxy = ($GLOBALS['Data_Ring_ringProxy'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringProxy'));
    $__res = $__global_Data_Ring_ringProxy;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_CommutativeRing_commutativeRingNumber': $v = (($GLOBALS['Data_CommutativeRing_CommutativeRing__dollar__Dict'] ?? \Data\CommutativeRing\phpurs_eval_thunk('Data_CommutativeRing_CommutativeRing__dollar__Dict')))((object)["Ring0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ring_ringNumber = ($GLOBALS['Data_Ring_ringNumber'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringNumber'));
    $__res = $__global_Data_Ring_ringNumber;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_CommutativeRing_commutativeRingInt': $v = (($GLOBALS['Data_CommutativeRing_CommutativeRing__dollar__Dict'] ?? \Data\CommutativeRing\phpurs_eval_thunk('Data_CommutativeRing_CommutativeRing__dollar__Dict')))((object)["Ring0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ring_ringInt = ($GLOBALS['Data_Ring_ringInt'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringInt'));
    $__res = $__global_Data_Ring_ringInt;
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



// Data_CommutativeRing_CommutativeRingRecord$Dict
function Data_CommutativeRing_CommutativeRingRecord__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_CommutativeRing_CommutativeRingRecord__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_CommutativeRing_CommutativeRingRecord__dollar__Dict'] = __NAMESPACE__ . '\\Data_CommutativeRing_CommutativeRingRecord__dollar__Dict';

// Data_CommutativeRing_CommutativeRing$Dict
function Data_CommutativeRing_CommutativeRing__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_CommutativeRing_CommutativeRing__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_CommutativeRing_CommutativeRing__dollar__Dict'] = __NAMESPACE__ . '\\Data_CommutativeRing_CommutativeRing__dollar__Dict';



// Data_CommutativeRing_commutativeRingRecordCons
function Data_CommutativeRing_commutativeRingRecordCons($dictIsSymbol) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_CommutativeRing_commutativeRingRecordCons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ring_ringRecordCons = ($GLOBALS['Data_Ring_ringRecordCons'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringRecordCons'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_CommutativeRing_CommutativeRingRecord__dollar__Dict = ($GLOBALS['Data_CommutativeRing_CommutativeRingRecord__dollar__Dict'] ?? \Data\CommutativeRing\phpurs_eval_thunk('Data_CommutativeRing_CommutativeRingRecord__dollar__Dict'));
$ringRecordCons = ($__global_Data_Ring_ringRecordCons)($dictIsSymbol, $__global_Prim_undefined);
    $__res = (function() use ($ringRecordCons, $__global_Prim_undefined, $__global_Data_CommutativeRing_CommutativeRingRecord__dollar__Dict) {
  $__fn = function($__dollar____unused, $dictCommutativeRingRecord = null) use ($ringRecordCons, $__global_Prim_undefined, $__global_Data_CommutativeRing_CommutativeRingRecord__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dictCommutativeRingRecord) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $dictCommutativeRingRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$ringRecordCons1 = ($ringRecordCons)((($dictCommutativeRingRecord)->RingRecord0)($__global_Prim_undefined));
    $__res = (function() use ($ringRecordCons1, $__global_Prim_undefined, $__global_Data_CommutativeRing_CommutativeRingRecord__dollar__Dict) {
  $__fn = function($dictCommutativeRing) use ($ringRecordCons1, $__global_Prim_undefined, $__global_Data_CommutativeRing_CommutativeRingRecord__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$ringRecordCons2 = ($ringRecordCons1)((($dictCommutativeRing)->Ring0)($__global_Prim_undefined));
    $__res = ($__global_Data_CommutativeRing_CommutativeRingRecord__dollar__Dict)((object)["RingRecord0" => (function() use ($ringRecordCons2) {
  $__fn = function($__dollar____unused) use ($ringRecordCons2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ringRecordCons2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_CommutativeRing_commutativeRingRecordCons'] = __NAMESPACE__ . '\\Data_CommutativeRing_commutativeRingRecordCons';

// Data_CommutativeRing_commutativeRingRecord
function Data_CommutativeRing_commutativeRingRecord($__dollar____unused, $dictCommutativeRingRecord = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_CommutativeRing_commutativeRingRecord';
  if ($__num < 2) {
    if ($__num === 1) return function($dictCommutativeRingRecord) use ($__dollar____unused, $__fn) { return $__fn($__dollar____unused, $dictCommutativeRingRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_CommutativeRing_ringRecord = ($GLOBALS['Data_CommutativeRing_ringRecord'] ?? \Data\CommutativeRing\phpurs_eval_thunk('Data_CommutativeRing_ringRecord'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_CommutativeRing_CommutativeRing__dollar__Dict = ($GLOBALS['Data_CommutativeRing_CommutativeRing__dollar__Dict'] ?? \Data\CommutativeRing\phpurs_eval_thunk('Data_CommutativeRing_CommutativeRing__dollar__Dict'));
$ringRecord1 = ($__global_Data_CommutativeRing_ringRecord)((($dictCommutativeRingRecord)->RingRecord0)($__global_Prim_undefined));
    $__res = ($__global_Data_CommutativeRing_CommutativeRing__dollar__Dict)((object)["Ring0" => (function() use ($ringRecord1) {
  $__fn = function($__dollar____unused) use ($ringRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ringRecord1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_CommutativeRing_commutativeRingRecord'] = __NAMESPACE__ . '\\Data_CommutativeRing_commutativeRingRecord';




// Data_CommutativeRing_commutativeRingFn
function Data_CommutativeRing_commutativeRingFn($dictCommutativeRing) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_CommutativeRing_commutativeRingFn';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Ring_ringFn = ($GLOBALS['Data_Ring_ringFn'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringFn'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_CommutativeRing_CommutativeRing__dollar__Dict = ($GLOBALS['Data_CommutativeRing_CommutativeRing__dollar__Dict'] ?? \Data\CommutativeRing\phpurs_eval_thunk('Data_CommutativeRing_CommutativeRing__dollar__Dict'));
$ringFn = ($__global_Data_Ring_ringFn)((($dictCommutativeRing)->Ring0)($__global_Prim_undefined));
    $__res = ($__global_Data_CommutativeRing_CommutativeRing__dollar__Dict)((object)["Ring0" => (function() use ($ringFn) {
  $__fn = function($__dollar____unused) use ($ringFn, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $ringFn;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_CommutativeRing_commutativeRingFn'] = __NAMESPACE__ . '\\Data_CommutativeRing_commutativeRingFn';

