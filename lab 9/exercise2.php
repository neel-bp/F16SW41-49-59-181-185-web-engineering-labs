<?php
for ($i=0; $i < 50; $i++) { 
    if ($i%3==0 && $i%5==0) {
        echo ("StarStruck\n");
    } elseif ($i%3==0) {
        echo ("star\n");
    } elseif ($i%5==0) {
        echo ("struck\n");
    } else {
        echo ($i);
    }
}

?>