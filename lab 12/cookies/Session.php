<?php
session_start();
?>
<?php
$_SESSION['Name'] = 'Neel';
$Name = $_SESSION['Name'];
echo $Name;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Session</title>
</head>

<body>
</body>

</html>