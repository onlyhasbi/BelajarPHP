<?php

// goto a;
// echo "ini b".PHP_EOL;

// a:
// echo "ini a".PHP_EOL;

// echo "ini c".PHP_EOL;

$counter=0;
while(true) :
    if($counter==11) goto end;
    echo "While Loop $counter".PHP_EOL;
    $counter++;
endwhile;

end:
echo "End Loop";