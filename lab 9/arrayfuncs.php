<?php
$arr = array(1,2,3);
$arrpadded = array_pad($arr,4,5);
$revaarr = array_reverse($arr);
$strarr = array('one','two','three');
print(array_search("two",$strarr));
$sortedarr = $revaarr;
sort($sortedarr,SORT_NUMERIC);
print_r($sortedarr);
$kv = array('one'=>'poop','two'=>'shit');
asort($kv);
print_r($kv);
print_r(array_values($kv));
print(array_key_exists('one',$kv)."\n");
print(in_array('poop',$kv));
?>