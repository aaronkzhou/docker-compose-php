<?php
function walk1($btree){
	$traverse_data=array();
	$queue=array();
	array_unshift($queue, $btree);
	while (!empty($queue)) {
		$cnode=array_pop($queue);
		$traverse_data[]=$cnode->data;
		if($cnode->left!==null){
			array_unshift($queue, $left);
		}
		if($cnode->right!==null){
			array_unshift($queue,$right);
		}
	}
	return $traverse_data;
}
function fish($A,$B){
	$downstreamfish=array();
	$alivefishcounter=0;
	for($i=0;$i<count($A);$i++){
		if($B[$i]===1){
			$downstreamfish[$i]=$A[$i];
		}
		else{
			$fishhasbeeneaten=false;
			while($fishhasbeeneaten===false&&count($downstreamfish!==0)){
				end($downstreamfish);
				$dfp=key($downstreamfish);
				if($downstreamfish[$dfp]<$A[$i]){
					unset($downstreamfish[$i]);
				}
				else{
					$fishhasbeeneaten=true
				}
				if(count($downstreamfish===0)){
					$alivefishcounter=$alivefishcounter+1;
				}
			}
		}
	}
	$alivefishcounter=$alivefishcounter+count($downstreamfish);
	return $alivefishcounter;
}
function Nesting($S){
	$stack=array();
	$array=str_split($S);
	foreach ($array as $key => $value) {
		if ($value==='(') {
			$stack[]=$value;
		}
		else{
			if(empty($stack)){
				return 0;
			}
			$stackend=end($stack);
			if($stackend=='('){
				array_pop($stack);
			}
		}
	}
	if(count($stack)==0){
		return 1;
	}
	else{
		return 0;
	}
}
function Brackets()





















