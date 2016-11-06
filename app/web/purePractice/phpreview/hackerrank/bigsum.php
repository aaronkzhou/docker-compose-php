<?PHP
function bigintsum($a,$b){
    //$a = '123456789';
    //$b = '111111111234453452345234523451111101';
    //echo $a;
    //echo $b;
    $m = strlen($a);
    $n = strlen($b);
    $num = $m>$n?$m:$n;
    $result = '';
    $flag = 0;
    while($num--){
        $t1 = 0;
        $t2 = 0;
        if($m>0){
            $t1 = $a[--$m];
        }
        if($n>0){
            $t2 = $b[--$n];
        }
        $t = $t1+$t2+$flag;
        $flag = $t/10;
        $result = ($t%10).$result;

    }
    $result=intval($result);
    return $result;
    //echo $result."\n";
    //echo "\r\n";
    //echo $a+$b;
}
//bigintsum('112312','21111');
//$a='1212312231232312312312312312';
//$b='2312341234123412123123424353245';
//echo $a*$b."\n";
$handle=fopen("php://stdin","r");
$arr_tem=fgets($handle);
$arr=explode(" ", $arr_tem);
$count=count($arr);
//var_dump($arr);
//echo $count;
$sum=1;

while($count){
    //echo $count;
    $accumulate=$arr[--$count];
    //echo $accumulate;
    $sum=bigintsum($sum,$accumulate);
    echo $sum."\n";
}
//echo $sum;
?>
