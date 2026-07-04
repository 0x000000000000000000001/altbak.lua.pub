<?php

namespace Control\Parallel;

require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Parallel/index.php';
require_once __DIR__ . '/../Control.Parallel.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
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

      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Parallel_compose
function Control_Parallel_compose($f, $g = null, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_compose';
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
$GLOBALS['Control_Parallel_compose'] = __NAMESPACE__ . '\\Control_Parallel_compose';

// Control_Parallel_identity
function Control_Parallel_identity($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_identity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_identity'] = __NAMESPACE__ . '\\Control_Parallel_identity';

// Control_Parallel_parTraverse_
function Control_Parallel_parTraverse_($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parTraverse_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sequential = (($GLOBALS['Control_Parallel_Class_sequential'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_sequential')))($dictParallel);
$parallel = (($GLOBALS['Control_Parallel_Class_parallel'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_parallel')))($dictParallel);
    $__res = (function() use ($sequential, $parallel) {
  $__fn = function($dictApplicative) use ($sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverse_ = (($GLOBALS['Data_Foldable_traverse_'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_traverse_')))($dictApplicative);
    $__res = (function() use ($traverse_, $sequential, $parallel) {
  $__fn = function($dictFoldable) use ($traverse_, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$traverse_1 = ($traverse_)($dictFoldable);
    $__res = (function() use ($sequential, $traverse_1, $parallel) {
  $__fn = function($f) use ($sequential, $traverse_1, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Parallel_compose'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_compose')))($sequential, ($traverse_1)((($GLOBALS['Control_Parallel_compose'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_compose')))($parallel, $f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
$GLOBALS['Control_Parallel_parTraverse_'] = __NAMESPACE__ . '\\Control_Parallel_parTraverse_';

// Control_Parallel_parTraverse
function Control_Parallel_parTraverse($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parTraverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sequential = (($GLOBALS['Control_Parallel_Class_sequential'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_sequential')))($dictParallel);
$parallel = (($GLOBALS['Control_Parallel_Class_parallel'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_parallel')))($dictParallel);
    $__res = (function() use ($sequential, $parallel) {
  $__fn = function($dictApplicative, $dictTraversable = null) use ($sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dictTraversable) use ($dictApplicative, &$__fn) { return $__fn($dictApplicative, $dictTraversable); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$traverse = (($GLOBALS['Data_Traversable_traverse'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traverse')))($dictTraversable, $dictApplicative);
    $__res = (function() use ($sequential, $traverse, $parallel) {
  $__fn = function($f) use ($sequential, $traverse, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Parallel_compose'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_compose')))($sequential, ($traverse)((($GLOBALS['Control_Parallel_compose'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_compose')))($parallel, $f)));
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
$GLOBALS['Control_Parallel_parTraverse'] = __NAMESPACE__ . '\\Control_Parallel_parTraverse';

// Control_Parallel_parSequence_
function Control_Parallel_parSequence_($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parSequence_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$parTraverse_1 = (($GLOBALS['Control_Parallel_parTraverse_'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_parTraverse_')))($dictParallel);
    $__res = (function() use ($parTraverse_1) {
  $__fn = function($dictApplicative) use ($parTraverse_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$parTraverse_2 = ($parTraverse_1)($dictApplicative);
    $__res = (function() use ($parTraverse_2) {
  $__fn = function($dictFoldable) use ($parTraverse_2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($parTraverse_2)($dictFoldable, ($GLOBALS['Control_Parallel_identity'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_identity')));
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
$GLOBALS['Control_Parallel_parSequence_'] = __NAMESPACE__ . '\\Control_Parallel_parSequence_';

// Control_Parallel_parSequence
function Control_Parallel_parSequence($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parSequence';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$parTraverse1 = (($GLOBALS['Control_Parallel_parTraverse'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_parTraverse')))($dictParallel);
    $__res = (function() use ($parTraverse1) {
  $__fn = function($dictApplicative) use ($parTraverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$parTraverse2 = ($parTraverse1)($dictApplicative);
    $__res = (function() use ($parTraverse2) {
  $__fn = function($dictTraversable) use ($parTraverse2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($parTraverse2)($dictTraversable, ($GLOBALS['Control_Parallel_identity'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_identity')));
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
$GLOBALS['Control_Parallel_parSequence'] = __NAMESPACE__ . '\\Control_Parallel_parSequence';

// Control_Parallel_parOneOfMap
function Control_Parallel_parOneOfMap($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parOneOfMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sequential = (($GLOBALS['Control_Parallel_Class_sequential'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_sequential')))($dictParallel);
$parallel = (($GLOBALS['Control_Parallel_Class_parallel'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_parallel')))($dictParallel);
    $__res = (function() use ($sequential, $parallel) {
  $__fn = function($dictAlternative) use ($sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Plus1 = (($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
    $__res = (function() use (&$Plus1, $sequential, $parallel) {
  $__fn = function($dictFoldable) use (&$Plus1, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$oneOfMap = (($GLOBALS['Data_Foldable_oneOfMap'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_oneOfMap')))($dictFoldable, $Plus1);
    $__res = (function() use ($sequential, $oneOfMap, $parallel) {
  $__fn = function($dictFunctor, $f = null) use ($sequential, $oneOfMap, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($dictFunctor, &$__fn) { return $__fn($dictFunctor, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = (($GLOBALS['Control_Parallel_compose'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_compose')))($sequential, ($oneOfMap)((($GLOBALS['Control_Parallel_compose'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_compose')))($parallel, $f)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
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
$GLOBALS['Control_Parallel_parOneOfMap'] = __NAMESPACE__ . '\\Control_Parallel_parOneOfMap';

// Control_Parallel_parOneOf
function Control_Parallel_parOneOf($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parOneOf';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sequential = (($GLOBALS['Control_Parallel_Class_sequential'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_sequential')))($dictParallel);
$parallel = (($GLOBALS['Control_Parallel_Class_parallel'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_parallel')))($dictParallel);
    $__res = (function() use ($sequential, $parallel) {
  $__fn = function($dictAlternative) use ($sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$Plus1 = (($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
    $__res = (function() use (&$Plus1, $sequential, $parallel) {
  $__fn = function($dictFoldable) use (&$Plus1, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$oneOfMap = (($GLOBALS['Data_Foldable_oneOfMap'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_oneOfMap')))($dictFoldable, $Plus1);
    $__res = (function() use ($sequential, $oneOfMap, $parallel) {
  $__fn = function($dictFunctor) use ($sequential, $oneOfMap, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (($GLOBALS['Control_Parallel_compose'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_compose')))($sequential, ($oneOfMap)($parallel));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
$GLOBALS['Control_Parallel_parOneOf'] = __NAMESPACE__ . '\\Control_Parallel_parOneOf';

// Control_Parallel_parApply
function Control_Parallel_parApply($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parApply';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sequential = (($GLOBALS['Control_Parallel_Class_sequential'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_sequential')))($dictParallel);
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))((($dictParallel)->Apply1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$parallel = (($GLOBALS['Control_Parallel_Class_parallel'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_parallel')))($dictParallel);
    $__res = (function() use ($sequential, $apply, $parallel) {
  $__fn = function($mf, $ma = null) use ($sequential, $apply, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ma) use ($mf, &$__fn) { return $__fn($mf, $ma); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($sequential)(($apply)(($parallel)($mf), ($parallel)($ma)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_parApply'] = __NAMESPACE__ . '\\Control_Parallel_parApply';

