<?php

// will output 1 GB of text, in 5000 lines
//
// php output_5000_lines.php > out.txt
for ($i=1; $i <= 5000; $i++) {
    echo "$i ".str_repeat('0123456789', 20000)."\n";
}
