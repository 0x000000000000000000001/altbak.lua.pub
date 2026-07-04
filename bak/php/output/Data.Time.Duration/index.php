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
      case 'Data_Time_Duration_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Time_Duration_show': $v = ($GLOBALS['Data_Show_showNumberImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showNumberImpl')); break;
      case 'Data_Time_Duration_add': $v = ($GLOBALS['Data_Semiring_numAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_numAdd')); break;
      case 'Data_Time_Duration_over': $v = (($GLOBALS['Data_Newtype_over'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_over')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Time_Duration_negate': $v = (($GLOBALS['Data_Ring_negate'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_negate')))(($GLOBALS['Data_Ring_ringNumber'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringNumber'))); break;
      case 'Data_Time_Duration_mul': $v = ($GLOBALS['Data_Semiring_numMul'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_numMul')); break;
      case 'Data_Time_Duration_div': $v = ($GLOBALS['Data_EuclideanRing_numDiv'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_numDiv')); break;
      case 'Data_Time_Duration_showSeconds': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return (($GLOBALS['Data_Time_Duration_append'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_append')))("(Seconds ", (($GLOBALS['Data_Time_Duration_append'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_append')))((($GLOBALS['Data_Time_Duration_show'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_show')))($n), ")"));
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
})()]); break;
      case 'Data_Time_Duration_showMinutes': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return (($GLOBALS['Data_Time_Duration_append'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_append')))("(Minutes ", (($GLOBALS['Data_Time_Duration_append'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_append')))((($GLOBALS['Data_Time_Duration_show'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_show')))($n), ")"));
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
})()]); break;
      case 'Data_Time_Duration_showMilliseconds': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return (($GLOBALS['Data_Time_Duration_append'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_append')))("(Milliseconds ", (($GLOBALS['Data_Time_Duration_append'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_append')))((($GLOBALS['Data_Time_Duration_show'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_show')))($n), ")"));
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
})()]); break;
      case 'Data_Time_Duration_showHours': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return (($GLOBALS['Data_Time_Duration_append'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_append')))("(Hours ", (($GLOBALS['Data_Time_Duration_append'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_append')))((($GLOBALS['Data_Time_Duration_show'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_show')))($n), ")"));
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
})()]); break;
      case 'Data_Time_Duration_showDays': $v = (($GLOBALS['Data_Show_Show__dollar__Dict'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_Show__dollar__Dict')))((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return (($GLOBALS['Data_Time_Duration_append'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_append')))("(Days ", (($GLOBALS['Data_Time_Duration_append'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_append')))((($GLOBALS['Data_Time_Duration_show'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_show')))($n), ")"));
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
})()]); break;
      case 'Data_Time_Duration_semigroupSeconds': $v = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return (($GLOBALS['Data_Time_Duration_Seconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Seconds')))((($GLOBALS['Data_Time_Duration_add'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_add')))($x, $y));
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
})()]); break;
      case 'Data_Time_Duration_semigroupMinutes': $v = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return (($GLOBALS['Data_Time_Duration_Minutes'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Minutes')))((($GLOBALS['Data_Time_Duration_add'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_add')))($x, $y));
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
})()]); break;
      case 'Data_Time_Duration_semigroupMilliseconds': $v = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return (($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds')))((($GLOBALS['Data_Time_Duration_add'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_add')))($x, $y));
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
})()]); break;
      case 'Data_Time_Duration_semigroupHours': $v = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return (($GLOBALS['Data_Time_Duration_Hours'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Hours')))((($GLOBALS['Data_Time_Duration_add'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_add')))($x, $y));
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
})()]); break;
      case 'Data_Time_Duration_semigroupDays': $v = (($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_Semigroup__dollar__Dict')))((object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return (($GLOBALS['Data_Time_Duration_Days'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Days')))((($GLOBALS['Data_Time_Duration_add'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_add')))($x, $y));
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
})()]); break;
      case 'Data_Time_Duration_ordSeconds': $v = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber')); break;
      case 'Data_Time_Duration_ordMinutes': $v = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber')); break;
      case 'Data_Time_Duration_ordMilliseconds': $v = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber')); break;
      case 'Data_Time_Duration_ordHours': $v = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber')); break;
      case 'Data_Time_Duration_ordDays': $v = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber')); break;
      case 'Data_Time_Duration_newtypeSeconds': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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
      case 'Data_Time_Duration_newtypeMinutes': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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
      case 'Data_Time_Duration_newtypeMilliseconds': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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
      case 'Data_Time_Duration_newtypeHours': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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
      case 'Data_Time_Duration_newtypeDays': $v = (($GLOBALS['Data_Newtype_Newtype__dollar__Dict'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_Newtype__dollar__Dict')))((object)["Coercible0" => (function() {
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
      case 'Data_Time_Duration_monoidSeconds': $v = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Data_Time_Duration_Seconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Seconds')))(0.0), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Time_Duration_semigroupSeconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_semigroupSeconds'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Time_Duration_monoidMinutes': $v = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Data_Time_Duration_Minutes'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Minutes')))(0.0), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Time_Duration_semigroupMinutes'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_semigroupMinutes'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Time_Duration_monoidMilliseconds': $v = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds')))(0.0), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Time_Duration_semigroupMilliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_semigroupMilliseconds'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Time_Duration_monoidHours': $v = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Data_Time_Duration_Hours'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Hours')))(0.0), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Time_Duration_semigroupHours'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_semigroupHours'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Time_Duration_monoidDays': $v = (($GLOBALS['Data_Monoid_Monoid__dollar__Dict'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_Monoid__dollar__Dict')))((object)["mempty" => (($GLOBALS['Data_Time_Duration_Days'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Days')))(0.0), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($GLOBALS['Data_Time_Duration_semigroupDays'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_semigroupDays'));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]); break;
      case 'Data_Time_Duration_eqSeconds': $v = ($GLOBALS['Data_Eq_eqNumber'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqNumber')); break;
      case 'Data_Time_Duration_eqMinutes': $v = ($GLOBALS['Data_Eq_eqNumber'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqNumber')); break;
      case 'Data_Time_Duration_eqMilliseconds': $v = ($GLOBALS['Data_Eq_eqNumber'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqNumber')); break;
      case 'Data_Time_Duration_eqHours': $v = ($GLOBALS['Data_Eq_eqNumber'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqNumber')); break;
      case 'Data_Time_Duration_eqDays': $v = ($GLOBALS['Data_Eq_eqNumber'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqNumber')); break;
      case 'Data_Time_Duration_durationSeconds': $v = (($GLOBALS['Data_Time_Duration_Duration__dollar__Dict'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Duration__dollar__Dict')))((object)["fromDuration" => (($GLOBALS['Data_Time_Duration_over'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_over')))(($GLOBALS['Data_Time_Duration_Seconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Seconds')), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Time_Duration_mul'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_mul')))($v, 1000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "toDuration" => (($GLOBALS['Data_Time_Duration_over'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_over')))(($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds')), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Time_Duration_div'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_div')))($v, 1000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())]); break;
      case 'Data_Time_Duration_durationMinutes': $v = (($GLOBALS['Data_Time_Duration_Duration__dollar__Dict'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Duration__dollar__Dict')))((object)["fromDuration" => (($GLOBALS['Data_Time_Duration_over'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_over')))(($GLOBALS['Data_Time_Duration_Minutes'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Minutes')), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Time_Duration_mul'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_mul')))($v, 60000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "toDuration" => (($GLOBALS['Data_Time_Duration_over'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_over')))(($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds')), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Time_Duration_div'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_div')))($v, 60000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())]); break;
      case 'Data_Time_Duration_durationMilliseconds': $v = (($GLOBALS['Data_Time_Duration_Duration__dollar__Dict'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Duration__dollar__Dict')))((object)["fromDuration" => ($GLOBALS['Data_Time_Duration_identity'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_identity')), "toDuration" => ($GLOBALS['Data_Time_Duration_identity'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_identity'))]); break;
      case 'Data_Time_Duration_durationHours': $v = (($GLOBALS['Data_Time_Duration_Duration__dollar__Dict'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Duration__dollar__Dict')))((object)["fromDuration" => (($GLOBALS['Data_Time_Duration_over'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_over')))(($GLOBALS['Data_Time_Duration_Hours'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Hours')), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Time_Duration_mul'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_mul')))($v, 3600000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "toDuration" => (($GLOBALS['Data_Time_Duration_over'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_over')))(($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds')), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Time_Duration_div'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_div')))($v, 3600000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())]); break;
      case 'Data_Time_Duration_durationDays': $v = (($GLOBALS['Data_Time_Duration_Duration__dollar__Dict'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Duration__dollar__Dict')))((object)["fromDuration" => (($GLOBALS['Data_Time_Duration_over'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_over')))(($GLOBALS['Data_Time_Duration_Days'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Days')), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Time_Duration_mul'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_mul')))($v, 86400000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "toDuration" => (($GLOBALS['Data_Time_Duration_over'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_over')))(($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds')), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Time_Duration_div'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_div')))($v, 86400000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())]); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };





// Data_Time_Duration_compose
function Data_Time_Duration_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Duration_compose';
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
$GLOBALS['Data_Time_Duration_compose'] = __NAMESPACE__ . '\\Data_Time_Duration_compose';





// Data_Time_Duration_identity
function Data_Time_Duration_identity($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Duration_identity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_Duration_identity'] = __NAMESPACE__ . '\\Data_Time_Duration_identity';

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
    $__res = (($GLOBALS['Data_Time_Duration_compose'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_compose')))((($GLOBALS['Data_Time_Duration_toDuration'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_toDuration')))($dictDuration), (($GLOBALS['Data_Time_Duration_compose'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_compose')))((($GLOBALS['Data_Time_Duration_over'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_over')))(($GLOBALS['Data_Time_Duration_Milliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Milliseconds')), ($GLOBALS['Data_Time_Duration_negate'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_negate'))), (($GLOBALS['Data_Time_Duration_fromDuration'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_fromDuration')))($dictDuration)));
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
$fromDuration1 = (($GLOBALS['Data_Time_Duration_fromDuration'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_fromDuration')))($dictDuration);
    $__res = (function() use ($fromDuration1) {
  $__fn = function($dictDuration1) use ($fromDuration1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Data_Time_Duration_compose'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_compose')))((($GLOBALS['Data_Time_Duration_toDuration'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_toDuration')))($dictDuration1), $fromDuration1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_Duration_convertDuration'] = __NAMESPACE__ . '\\Data_Time_Duration_convertDuration';

