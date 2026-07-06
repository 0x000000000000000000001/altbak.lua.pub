<?php

namespace Data\Time\Duration;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
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
    $missing = $expected - count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num > 1) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...array_slice($merged, 0, $expected));
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
      case 'Data_Time_Duration_append': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semigroup_semigroupString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupString'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->append;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_Duration_show': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Show_showNumber'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->show;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_Duration_add': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semiring_semiringNumber'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->add;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_Duration_compose': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->compose;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_Duration_over': $v = (($GLOBALS['Data_Newtype_over'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_over')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Time_Duration_negate': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Ring_ringNumber'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->sub;
} else {
throw new \Exception("Pattern match failure");
};
  $sub1 = $__case_res_0;
  $__case_0 = $dict;
  $__case_res_1 = null;
  if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->zero;
} else {
throw new \Exception("Pattern match failure");
};
  $zero = $__case_res_1;
  return (function() use ($sub1, $zero) {
  $__fn = function($a) use ($sub1, $zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($sub1)($zero, $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
})(); break;
      case 'Data_Time_Duration_mul': $v = (function() {
  $__case_0 = ($GLOBALS['Data_Semiring_semiringNumber'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->mul;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_Duration_div': $v = (function() {
  $__case_0 = ($GLOBALS['Data_EuclideanRing_euclideanRingNumber'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_euclideanRingNumber'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->div;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_Duration_identity': $v = (function() {
  $__case_0 = ($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn'));
  $__case_res_0 = null;
  if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->identity;
} else {
throw new \Exception("Pattern match failure");
};
  return $__case_res_0;
})(); break;
      case 'Data_Time_Duration_showSeconds': $v = (object)["show" => (function() {
  $__body = function($v) {
    $__global_Data_Time_Duration_append = ($GLOBALS['Data_Time_Duration_append'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_append'));
    $__global_Data_Time_Duration_show = ($GLOBALS['Data_Time_Duration_show'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_show'));
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($__global_Data_Time_Duration_append)("(Seconds ", ($__global_Data_Time_Duration_append)(($__global_Data_Time_Duration_show)($n), ")"));
} else {
throw new \Exception("Pattern match failure");
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
})()]; break;
      case 'Data_Time_Duration_showMinutes': $v = (object)["show" => (function() {
  $__body = function($v) {
    $__global_Data_Time_Duration_append = ($GLOBALS['Data_Time_Duration_append'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_append'));
    $__global_Data_Time_Duration_show = ($GLOBALS['Data_Time_Duration_show'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_show'));
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($__global_Data_Time_Duration_append)("(Minutes ", ($__global_Data_Time_Duration_append)(($__global_Data_Time_Duration_show)($n), ")"));
} else {
throw new \Exception("Pattern match failure");
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
})()]; break;
      case 'Data_Time_Duration_showMilliseconds': $v = (object)["show" => (function() {
  $__body = function($v) {
    $__global_Data_Time_Duration_append = ($GLOBALS['Data_Time_Duration_append'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_append'));
    $__global_Data_Time_Duration_show = ($GLOBALS['Data_Time_Duration_show'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_show'));
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($__global_Data_Time_Duration_append)("(Milliseconds ", ($__global_Data_Time_Duration_append)(($__global_Data_Time_Duration_show)($n), ")"));
} else {
throw new \Exception("Pattern match failure");
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
})()]; break;
      case 'Data_Time_Duration_showHours': $v = (object)["show" => (function() {
  $__body = function($v) {
    $__global_Data_Time_Duration_append = ($GLOBALS['Data_Time_Duration_append'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_append'));
    $__global_Data_Time_Duration_show = ($GLOBALS['Data_Time_Duration_show'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_show'));
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($__global_Data_Time_Duration_append)("(Hours ", ($__global_Data_Time_Duration_append)(($__global_Data_Time_Duration_show)($n), ")"));
} else {
throw new \Exception("Pattern match failure");
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
})()]; break;
      case 'Data_Time_Duration_showDays': $v = (object)["show" => (function() {
  $__body = function($v) {
    $__global_Data_Time_Duration_append = ($GLOBALS['Data_Time_Duration_append'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_append'));
    $__global_Data_Time_Duration_show = ($GLOBALS['Data_Time_Duration_show'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_show'));
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($__global_Data_Time_Duration_append)("(Days ", ($__global_Data_Time_Duration_append)(($__global_Data_Time_Duration_show)($n), ")"));
} else {
throw new \Exception("Pattern match failure");
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
})()]; break;
      case 'Data_Time_Duration_semigroupSeconds': $v = (object)["append" => (function() {
  $__body = function($v, $v1) {
    $__global_Data_Time_Duration_add = ($GLOBALS['Data_Time_Duration_add'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_add'));
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($__global_Data_Time_Duration_add)($x, $y);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Time_Duration_semigroupMinutes': $v = (object)["append" => (function() {
  $__body = function($v, $v1) {
    $__global_Data_Time_Duration_add = ($GLOBALS['Data_Time_Duration_add'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_add'));
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($__global_Data_Time_Duration_add)($x, $y);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Time_Duration_semigroupMilliseconds': $v = (object)["append" => (function() {
  $__body = function($v, $v1) {
    $__global_Data_Time_Duration_add = ($GLOBALS['Data_Time_Duration_add'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_add'));
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($__global_Data_Time_Duration_add)($x, $y);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Time_Duration_semigroupHours': $v = (object)["append" => (function() {
  $__body = function($v, $v1) {
    $__global_Data_Time_Duration_add = ($GLOBALS['Data_Time_Duration_add'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_add'));
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($__global_Data_Time_Duration_add)($x, $y);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Time_Duration_semigroupDays': $v = (object)["append" => (function() {
  $__body = function($v, $v1) {
    $__global_Data_Time_Duration_add = ($GLOBALS['Data_Time_Duration_add'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_add'));
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($__global_Data_Time_Duration_add)($x, $y);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Time_Duration_ordSeconds': $v = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber')); break;
      case 'Data_Time_Duration_ordMinutes': $v = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber')); break;
      case 'Data_Time_Duration_ordMilliseconds': $v = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber')); break;
      case 'Data_Time_Duration_ordHours': $v = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber')); break;
      case 'Data_Time_Duration_ordDays': $v = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber')); break;
      case 'Data_Time_Duration_newtypeSeconds': $v = (object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
    $__res = $__global_Prim_undefined;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Time_Duration_newtypeMinutes': $v = (object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
    $__res = $__global_Prim_undefined;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Time_Duration_newtypeMilliseconds': $v = (object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
    $__res = $__global_Prim_undefined;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Time_Duration_newtypeHours': $v = (object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
    $__res = $__global_Prim_undefined;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Time_Duration_newtypeDays': $v = (object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
    $__res = $__global_Prim_undefined;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Time_Duration_monoidSeconds': $v = (object)["mempty" => 0.0, "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Time_Duration_semigroupSeconds = ($GLOBALS['Data_Time_Duration_semigroupSeconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_semigroupSeconds'));
    $__res = $__global_Data_Time_Duration_semigroupSeconds;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Time_Duration_monoidMinutes': $v = (object)["mempty" => 0.0, "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Time_Duration_semigroupMinutes = ($GLOBALS['Data_Time_Duration_semigroupMinutes'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_semigroupMinutes'));
    $__res = $__global_Data_Time_Duration_semigroupMinutes;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Time_Duration_monoidMilliseconds': $v = (object)["mempty" => 0.0, "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Time_Duration_semigroupMilliseconds = ($GLOBALS['Data_Time_Duration_semigroupMilliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_semigroupMilliseconds'));
    $__res = $__global_Data_Time_Duration_semigroupMilliseconds;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Time_Duration_monoidHours': $v = (object)["mempty" => 0.0, "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Time_Duration_semigroupHours = ($GLOBALS['Data_Time_Duration_semigroupHours'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_semigroupHours'));
    $__res = $__global_Data_Time_Duration_semigroupHours;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Time_Duration_monoidDays': $v = (object)["mempty" => 0.0, "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Time_Duration_semigroupDays = ($GLOBALS['Data_Time_Duration_semigroupDays'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_semigroupDays'));
    $__res = $__global_Data_Time_Duration_semigroupDays;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Time_Duration_eqSeconds': $v = ($GLOBALS['Data_Eq_eqNumber'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqNumber')); break;
      case 'Data_Time_Duration_eqMinutes': $v = ($GLOBALS['Data_Eq_eqNumber'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqNumber')); break;
      case 'Data_Time_Duration_eqMilliseconds': $v = ($GLOBALS['Data_Eq_eqNumber'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqNumber')); break;
      case 'Data_Time_Duration_eqHours': $v = ($GLOBALS['Data_Eq_eqNumber'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqNumber')); break;
      case 'Data_Time_Duration_eqDays': $v = ($GLOBALS['Data_Eq_eqNumber'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqNumber')); break;
      case 'Data_Time_Duration_durationSeconds': $v = (object)["fromDuration" => (($GLOBALS['Data_Time_Duration_over'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_over')))(($GLOBALS['Data_Time_Duration_Seconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Seconds')), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Time_Duration_mul = ($GLOBALS['Data_Time_Duration_mul'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_mul'));
    $__res = ($__global_Data_Time_Duration_mul)($v, 1000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "toDuration" => (($GLOBALS['Data_Time_Duration_over'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_over')))(($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds')), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Time_Duration_div = ($GLOBALS['Data_Time_Duration_div'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_div'));
    $__res = ($__global_Data_Time_Duration_div)($v, 1000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())]; break;
      case 'Data_Time_Duration_durationMinutes': $v = (object)["fromDuration" => (($GLOBALS['Data_Time_Duration_over'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_over')))(($GLOBALS['Data_Time_Duration_Minutes'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Minutes')), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Time_Duration_mul = ($GLOBALS['Data_Time_Duration_mul'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_mul'));
    $__res = ($__global_Data_Time_Duration_mul)($v, 60000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "toDuration" => (($GLOBALS['Data_Time_Duration_over'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_over')))(($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds')), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Time_Duration_div = ($GLOBALS['Data_Time_Duration_div'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_div'));
    $__res = ($__global_Data_Time_Duration_div)($v, 60000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())]; break;
      case 'Data_Time_Duration_durationMilliseconds': $v = (object)["fromDuration" => ($GLOBALS['Data_Time_Duration_identity'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_identity')), "toDuration" => ($GLOBALS['Data_Time_Duration_identity'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_identity'))]; break;
      case 'Data_Time_Duration_durationHours': $v = (object)["fromDuration" => (($GLOBALS['Data_Time_Duration_over'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_over')))(($GLOBALS['Data_Time_Duration_Hours'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Hours')), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Time_Duration_mul = ($GLOBALS['Data_Time_Duration_mul'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_mul'));
    $__res = ($__global_Data_Time_Duration_mul)($v, 3600000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "toDuration" => (($GLOBALS['Data_Time_Duration_over'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_over')))(($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds')), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Time_Duration_div = ($GLOBALS['Data_Time_Duration_div'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_div'));
    $__res = ($__global_Data_Time_Duration_div)($v, 3600000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())]; break;
      case 'Data_Time_Duration_durationDays': $v = (object)["fromDuration" => (($GLOBALS['Data_Time_Duration_over'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_over')))(($GLOBALS['Data_Time_Duration_Days'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Days')), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Time_Duration_mul = ($GLOBALS['Data_Time_Duration_mul'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_mul'));
    $__res = ($__global_Data_Time_Duration_mul)($v, 86400000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "toDuration" => (($GLOBALS['Data_Time_Duration_over'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_over')))(($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds')), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Time_Duration_div = ($GLOBALS['Data_Time_Duration_div'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_div'));
    $__res = ($__global_Data_Time_Duration_div)($v, 86400000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };











// Data_Time_Duration_Seconds
function Data_Time_Duration_Seconds($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Duration_Seconds';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_Duration_Seconds'] = __NAMESPACE__ . '\\Data_Time_Duration_Seconds';

// Data_Time_Duration_Minutes
function Data_Time_Duration_Minutes($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Duration_Minutes';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_Duration_Minutes'] = __NAMESPACE__ . '\\Data_Time_Duration_Minutes';

// Data_Time_Duration_Milliseconds
function Data_Time_Duration_Milliseconds($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Duration_Milliseconds';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_Duration_Milliseconds'] = __NAMESPACE__ . '\\Data_Time_Duration_Milliseconds';

// Data_Time_Duration_Hours
function Data_Time_Duration_Hours($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Duration_Hours';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_Duration_Hours'] = __NAMESPACE__ . '\\Data_Time_Duration_Hours';

// Data_Time_Duration_Duration$Dict
function Data_Time_Duration_Duration__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Duration_Duration__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_Duration_Duration__dollar__Dict'] = __NAMESPACE__ . '\\Data_Time_Duration_Duration__dollar__Dict';

// Data_Time_Duration_Days
function Data_Time_Duration_Days($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Duration_Days';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_Duration_Days'] = __NAMESPACE__ . '\\Data_Time_Duration_Days';

// Data_Time_Duration_toDuration
function Data_Time_Duration_toDuration($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Duration_toDuration';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->toDuration;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_Duration_toDuration'] = __NAMESPACE__ . '\\Data_Time_Duration_toDuration';


























// Data_Time_Duration_fromDuration
function Data_Time_Duration_fromDuration($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Duration_fromDuration';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->fromDuration;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_Duration_fromDuration'] = __NAMESPACE__ . '\\Data_Time_Duration_fromDuration';

// Data_Time_Duration_negateDuration
function Data_Time_Duration_negateDuration($dictDuration) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Duration_negateDuration';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Time_Duration_compose = ($GLOBALS['Data_Time_Duration_compose'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_compose'));
$__global_Data_Time_Duration_over = ($GLOBALS['Data_Time_Duration_over'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_over'));
$__global_Data_Time_Duration_Milliseconds = ($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds'));
$__global_Data_Time_Duration_negate = ($GLOBALS['Data_Time_Duration_negate'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_negate'));
$__case_0 = $dictDuration;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->toDuration;
} else {
throw new \Exception("Pattern match failure");
};
$__case_0 = $dictDuration;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->fromDuration;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Time_Duration_compose)($__case_res_0, ($__global_Data_Time_Duration_compose)(($__global_Data_Time_Duration_over)($__global_Data_Time_Duration_Milliseconds, $__global_Data_Time_Duration_negate), $__case_res_1));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_Duration_negateDuration'] = __NAMESPACE__ . '\\Data_Time_Duration_negateDuration';











// Data_Time_Duration_convertDuration
function Data_Time_Duration_convertDuration($dictDuration) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Duration_convertDuration';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Time_Duration_compose = ($GLOBALS['Data_Time_Duration_compose'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_compose'));
$__case_0 = $dictDuration;
$__case_res_0 = null;
if (true) {
$v = $__case_0;
$__case_res_0 = ($v)->fromDuration;
} else {
throw new \Exception("Pattern match failure");
};
$fromDuration1 = $__case_res_0;
    $__res = (function() use ($__global_Data_Time_Duration_compose, $fromDuration1) {
  $__fn = function($dictDuration1) use ($__global_Data_Time_Duration_compose, $fromDuration1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__case_0 = $dictDuration1;
$__case_res_1 = null;
if (true) {
$v = $__case_0;
$__case_res_1 = ($v)->toDuration;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($__global_Data_Time_Duration_compose)($__case_res_1, $fromDuration1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_Duration_convertDuration'] = __NAMESPACE__ . '\\Data_Time_Duration_convertDuration';

