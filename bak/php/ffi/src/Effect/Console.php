<?php

$Effect_Console_log = function($s) { return function() use(&$s) { print($s . "\n"); }; };