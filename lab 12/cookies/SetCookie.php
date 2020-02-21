<?php
$ExpireTime = time() + (7 * 60 * 60 * 24);
setcookie("Name", "Neel", $ExpireTime);
setcookie("Age", "Unknown", $ExpireTime); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Setting Cookie</title>
</head>

<body>

    <?php
    echo $_COOKIE["Name"] . '<br>';
    echo 'My name is: ' . $_COOKIE['Name'] . ' and my age is: ' . $_COOKIE['Age'];
    ?>

</body>

</html>