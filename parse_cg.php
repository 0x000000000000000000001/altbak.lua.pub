<?php
$file = $argv[1];
$handle = fopen($file, "r");
$funcs = [];
$current_fn = "";
$current_cost = 0;

while (($line = fgets($handle)) !== false) {
    if (strncmp($line, "fn=", 3) === 0) {
        $current_fn = trim(substr($line, 3));
        if (!isset($funcs[$current_fn])) {
            $funcs[$current_fn] = ['cost' => 0, 'calls' => 0];
        }
        $funcs[$current_fn]['calls']++;
    } elseif (preg_match('/^\d+\s+(\d+)/', $line, $matches)) {
        if ($current_fn) {
            $funcs[$current_fn]['cost'] += (int)$matches[1];
        }
    }
}
fclose($handle);

uasort($funcs, function($a, $b) {
    return $b['cost'] <=> $a['cost'];
});

$i = 0;
echo "Top 20 functions by inclusive cost:\n";
foreach ($funcs as $name => $data) {
    if ($i++ > 20) break;
    printf("%-60s %12s ticks %10s calls\n", substr($name, 0, 60), number_format($data['cost']), number_format($data['calls']));
}
