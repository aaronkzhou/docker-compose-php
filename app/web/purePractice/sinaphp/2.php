<?php

//显示客户端I
function get_client_ip() {#
if(getenv('HTTP_CLIENT_IP')) {
$client_ip = getenv('HTTP_CLIENT_IP');
} elseif(getenv('HTTP_X_FORWARDED_FOR')) {
$client_ip = getenv('HTTP_X_FORWARDED_FOR');
} elseif(getenv('REMOTE_ADDR')) {
$client_ip = getenv('REMOTE_ADDR');
} else {
$client_ip = $HTTP_SERVER_VAR['REMOTE_ADDR'];
}
return $client_ip;
}
//服务器IP
function get_server_ip(){
if (isset($_SERVER))
{
if($_SERVER['SERVER_ADDR']) $huoqu_ip=$_SERVER['SERVER_ADDR'];
else $huoqu_ip=$_SERVER['LOCAL_ADDR'];
}
else
{
$huoqu_ip=getenv('SERVER_ADDR');
}
return $huoqu_ip;
}
