<?php
/**
*class for practice 
*/
class SportObject{

	public $name;
	public $test1;
	public $test2;
	//public $height;
	//public $avoirdupois;
	function __construct($test1,$test2)
	{
		echo $this->test1=$test1;
		$this->test2=$test2;
	}
	public function __invoke(){
        echo "test3";
    }
	function beatbasketball($name,$height,$age,$avoirdupois,$sex){
		//echo $name;
		$this->name=$name;
		$this->height=$height;
		$this->avoirdupois=$avoirdupois;
		if($height>180 and $avoirdupois<=100){
			echo "he is OK for basketball";
		}
		else{
			echo "he isn't Ok for basketball"."\n";
		}
	}

}

$sport=new SportObject(99,88);
$sport();
//$sport->beatbasketball('aaron','173','23','100','male');
//echo $sport->name;
//echo $SportObject::$name;
