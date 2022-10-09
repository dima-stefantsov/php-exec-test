<?php
$start = microtime(true);

$cmd = 'php output_5000_lines.php';
echo "$cmd\n";

exec($cmd, $output_lines, $result_code);

echo "done in ".number_format(microtime(true)-$start, 3)." seconds\n";
echo "lines: ".count($output_lines)."\n";
