<?php
/**
* construct practice
*/
class SportObject
{
	public $name;
	public $age;
	public $avoirdupois;
	public function __construct($name,$age,$avoirdupois){
		$this->name=$name;
		$this->age=$age;
		$this->avoirdupois=$avoirdupois;
	}
	function showme(){
		echo "this will not be print";
	}
}
class Beatbasketball extends SportObject{
	public $height;
	function __construct($name,$height){
		$this->name=$name;
		$this->height=$height;
	}
	function showme(){
		if($this->height>185){
			return $this->name."ok for basketball";
		}
		else{
			return $this->name."not ok for basketball";
		}
	}
}
class weightlifting extends SportObject{
	function showme(){
		if ($this->avoirdupois>85){
			echo $this->name."is ok for weightlifting";
		}else{
			echo $this->name."is not ok for weightlifting";
		}
	}
}
$basketball=new Beatbasketball("aaron","190","55");
$weightlifting=new weightlifting("yvonne","18","55");
echo $basketball->showme()."\n";
echo $weightlifting->showme()."\n";

