<?php
$arr = array('a'=>'apple','b'=>'bible','c'=>'cat','d'=>'donkey','e'=>'ear','f'=>'fan','g'=>'ghost','h'=>'horse','i'=>'ink','j'=>'jockey','k'=>'key','l'=>'lemon','m'=>'monkey','n'=>'nose','o'=>'orange','p'=>'pen','q'=>'queen','r'=>'rust','s'=>'spin','t'=>'tomato','u'=>'umbrella','v'=>'violin','w'=>'work','x'=>'xylophone','y'=>'yellow','z'=>'zebra');
$name = "neelu";
for ($i=0; $i < strlen($name)-1; $i++) { 
    $letter = $name[$i];
    print($arr[$letter]."\n");
}
?>