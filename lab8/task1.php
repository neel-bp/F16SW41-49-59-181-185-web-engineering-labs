<?php
$url = "http://sw.muet.edu.pk/faculty/cvs/sample.pdf";
echo "url: $url\n";
echo "scheme: ".parse_url($url, PHP_URL_SCHEME)."\n";
echo "host: ".parse_url($url, PHP_URL_HOST)."\n";
echo "path: ".parse_url($url, PHP_URL_PATH)."\n";
?>
