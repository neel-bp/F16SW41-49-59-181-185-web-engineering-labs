<?php
$ExpireTime = time() + (7 * 60 * 60 * 24); # Adding
setcookie("Name", "Neel", $ExpireTime);
setcookie("Age", "Unknown", $ExpireTime); ?>
<?php
$ExpireTimeUnset = time() - (7 * 60 * 60 * 24); # subtracing.
setcookie("Name", "Neel", $ExpireTimeUnset);
setcookie("Name", "", $ExpireTimeUnset);
setcookie("Name", null);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Unsetting Cookie</title>
</head>

<body>

    <?php
    echo $_COOKIE["Name"] . '<br>';
    echo 'My name is: ' . $_COOKIE['Name'] . ' and my age is: ' . $_COOKIE['Age'];
    ?>

</body>

</html>