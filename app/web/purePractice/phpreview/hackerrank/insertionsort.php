<?php
function insertion1($str,$strlen){
	$arr=explode(" ", $str);
	for($i=1;$i<$strlen; $i++) {
        $tmp = $arr[$i];
        //内层循环控制，比较并插入
        for($j=$i-1;$j>=0;$j--) {
            if($tmp < $arr[$j]) {
                //发现插入的元素要小，交换位置，将后边的元素与前面的元素互换
                $arr[$j+1] = $arr[$j];
                $arr[$j] = $tmp;
            } else {
                //如果碰到不需要移动的元素，由于是已经排序好是数组，则前面的就不需要再次比较了。
                break;
            }
        }
    }
    var_dump($arr);
}
$handle=fopen("php://stdin", "r");
$strlen=fgets($handle);
$str=fgets($handle);
fclose($handle);
insertion1($str,$strlen);
