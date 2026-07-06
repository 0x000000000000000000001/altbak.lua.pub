<?php
// Option 4 (CPS / Trampoline) Proof of Concept for StateMonad

class Thunk {
    public $fn;
    public $args;
    public function __construct($fn, $args) {
        $this->fn = $fn;
        $this->args = $args;
    }
}

function trampoline($t) {
    while ($t instanceof Thunk) {
        $t = ($t->fn)(...$t->args);
    }
    return $t;
}

// PureState in CPS
function pureState($a) {
    return function($s, $k) use ($a) {
        return new Thunk($k, [(object)['val' => $a, 'state' => $s]]);
    };
}

// BindState in CPS
function bindState($state_f, $g) {
    return function($s, $k) use ($state_f, $g) {
        // state_f takes ($s, $k_inner)
        return new Thunk($state_f, [$s, function($r1) use ($g, $k) {
            // g($r1->val) returns a state function g_prime
            $g_prime = $g($r1->val);
            return new Thunk($g_prime, [$r1->state, $k]);
        }]);
    };
}

// Get in CPS
function get() {
    return function($s, $k) {
        return new Thunk($k, [(object)['val' => $s, 'state' => $s]]);
    };
}

// Put in CPS
function put($s) {
    return function($_, $k) use ($s) {
        return new Thunk($k, [(object)['val' => null, 'state' => $s]]);
    };
}

// Modify in CPS
function modify($f) {
    return bindState(get(), function($s) use ($f) {
        return put($f($s));
    });
}

function chainModifications($n) {
    if ($n === 0) return pureState(null);
    return bindState(modify(function($x) { return $x + 1; }), function() use ($n) {
        return chainModifications($n - 1);
    });
}

function runManyTimes($n, $acc) {
    if ($n === 0) return $acc;
    
    // Evaluate chainModifications(6000)
    $stateFn = chainModifications(6000);
    
    $final_state = trampoline(new Thunk($stateFn, [0, function($res) {
        return $res;
    }]));
    
    return runManyTimes($n - 1, $acc + $final_state->state);
}

$start = microtime(true);
$res = runManyTimes(2000, 0);
echo "Result: $res\n";
echo "Time: " . (microtime(true) - $start) . "s\n";
