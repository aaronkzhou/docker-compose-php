<?php
$tmp=0;
function swap($a,$b){
	$tmp=$a;
	$a=$b;
	$b=$tmp;
}
function bubble($string){
	$tmp=0;
	$array=explode(" ", trim($string));
	$countarray=count($array);
	for ($i=0; $i < $countarray; $i++) {
		for ($j=$i; $j < $countarray; $j++) {
			if ($array[$j]>$array[$j+1]){
				$x=$array[$j];
				$array[$j]=$array[$j+1];
				$array[$j+1]=$tmp;
			}
		}
	}
	return $array;
}
function insertion($string){
	$array=explode(" ", trim($sting));
	$countarray=count($array);
	for($i=0;$i<$countarray;$i++){
		$tmp=$array[$i];
		for ($j=$i-1; $j >0 ; $j--) {
			if($tmp<$array[$j]){
				$array[$j+1]=$array[$j];
				$array[$j]=$tmp;
			}
			else{
				break;
			}
		}
	}
	return $array;
}
function selection($array){
	$newarray=array();
	for ($i=0; $i < $countarray; $i++) { 
		$minarray=min($array);
		$newarray[]=$minarray;
		unset($array[$minarray]);
	}
return $newarray;
}

function quicksort($seq)
{
 if(!count($seq)) return $seq;
 $k = $seq[0];
 $x = $y = array();
 for($i=count($seq); --$i;)
 {
  if($seq[$i] <= $k)
  {
   $x[] = $seq[$i];
  }
  else
  {
   $y[] = $seq[$i];
  }
 }
 return array_merge(quicksort($x),array($k),quicksort($y));
}






