<?php

namespace Data\Map\Gen;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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


// Data_Map_Gen_genMap
function Data_Map_Gen_genMap($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Gen_genMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$unfoldable = (($GLOBALS['Control_Monad_Gen_unfoldable'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_unfoldable')))($dictMonadRec);
    $__res = (function() use ($unfoldable) {
  $__fn = function($dictMonadGen) use ($unfoldable, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$sized = (($GLOBALS['Control_Monad_Gen_Class_sized'] ?? \Control\Monad\Gen\Class\phpurs_eval_thunk('Control_Monad_Gen_Class_sized')))($dictMonadGen);
$Bind1 = (((($dictMonadGen)->Monad0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))))->Bind1)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$bind = (($GLOBALS['Control_Bind_bind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bind')))($Bind1);
$chooseInt = (($GLOBALS['Control_Monad_Gen_Class_chooseInt'] ?? \Control\Monad\Gen\Class\phpurs_eval_thunk('Control_Monad_Gen_Class_chooseInt')))($dictMonadGen);
$resize = (($GLOBALS['Control_Monad_Gen_Class_resize'] ?? \Control\Monad\Gen\Class\phpurs_eval_thunk('Control_Monad_Gen_Class_resize')))($dictMonadGen);
$Apply0 = (($Bind1)->Apply0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')));
$map = (($GLOBALS['Data_Functor_map'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_map')))((($Apply0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))));
$unfoldable1 = ($unfoldable)($dictMonadGen, ($GLOBALS['Data_List_Types_unfoldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_unfoldableList')));
$apply = (($GLOBALS['Control_Apply_apply'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_apply')))($Apply0);
    $__res = (function() use ($sized, $bind, $chooseInt, $resize, $map, $unfoldable1, $apply) {
  $__fn = function($dictOrd) use ($sized, $bind, $chooseInt, $resize, $map, $unfoldable1, $apply, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$fromFoldable = (($GLOBALS['Data_Map_Internal_fromFoldable'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_fromFoldable')))($dictOrd, ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList')));
    $__res = (function() use ($sized, $bind, $chooseInt, $resize, $map, $fromFoldable, $unfoldable1, $apply) {
  $__fn = function($genKey, $genValue = null) use ($sized, $bind, $chooseInt, $resize, $map, $fromFoldable, $unfoldable1, $apply, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($genValue) use ($genKey, &$__fn) { return $__fn($genKey, $genValue); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($sized)((function() use ($bind, $chooseInt, $resize, $map, $fromFoldable, $unfoldable1, $apply, $genKey, $genValue) {
  $__fn = function($size) use ($bind, $chooseInt, $resize, $map, $fromFoldable, $unfoldable1, $apply, $genKey, $genValue, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($bind)(($chooseInt)(0, $size), (function() use ($resize, $map, $fromFoldable, $unfoldable1, $apply, $genKey, $genValue) {
  $__fn = function($newSize) use ($resize, $map, $fromFoldable, $unfoldable1, $apply, $genKey, $genValue, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($resize)((($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))($newSize), ($map)($fromFoldable, ($unfoldable1)(($apply)(($map)(($GLOBALS['Data_Tuple_Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_Tuple')), $genKey), $genValue))));
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
$GLOBALS['Data_Map_Gen_genMap'] = __NAMESPACE__ . '\\Data_Map_Gen_genMap';

