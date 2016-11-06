<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>just test session existense</title>
</head>
<body>
<?php
//echo session variables that were set on previous page;
echo "Favorite color is : " . $_SESSION["favcolor"]."<br>";
print_r($_SESSION);
echo "<br>";
var_dump($_SESSION);
?>
</body>
</html>