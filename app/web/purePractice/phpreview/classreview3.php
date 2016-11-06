<?php
class C{
	function __call($name,$num){
		echo "method name is: ".$name."<p>";
		echo "method quantity :".count($num)."<p>";
		if(count($num)==1){
			echo $this->list1($a);
		}
		if(count($num)==2){
			echo $this->list2($a,$b);
		}
	}
	public function list1($a){
		return "this is list1 function";
	}
	public function list2($a,$b){
		return "this is list2 funtion";
	}

}
$a=new C;
$a->listshow(1,2);