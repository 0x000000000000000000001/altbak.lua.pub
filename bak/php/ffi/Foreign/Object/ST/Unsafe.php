<?php

$Foreign_Object_ST_Unsafe_unsafeFreeze = function($m) {
    return function() use ($m) {
        return $m;
    };
};
