<?php
//start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>just test my sessions</title>
</head>
<body>
<?php
//set session variable.
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables has been set";
?>

</body>
</html>
