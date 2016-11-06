<?php
date_default_timezone_set("Asia/Shanghai");
$cookie_name="justacookie2";
$cookie_value="Aaron Chou";
setcookie($cookie_name,$cookie_value,time() + (86400*30),"/");
?>
<!DOCTYPE html>
<html>
<head>
	<title>just test my cookie</title>
</head>
<body>
<?php
//echo $cookie_name;
echo $_COOKIE[$cookie_name];
if(!isset($_COOKIE[$cookie_name]))
{
	echo "Cookie named '".$cookie_name."'is not set";
}
else
{
	echo "Cookie named '".$_COOKIE[$cookie_name]."'has been set";
	//echo "Value is:".$cookie_value;
}

?>
</body>
</html>

