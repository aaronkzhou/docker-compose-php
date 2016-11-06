<?php
class readCSV{

	//get max value
	public function maxArray($File){
		foreach ($File as $key => $value) {
			$array[]=$value[1];
		}
		unset($array[0]);
		return max($array);
	}
	//get min value
	public function minArray($File){
		foreach ($File as $key => $value) {
			$array[]=$value[1];
		}
		return min($array);
	}
	//get meanArray
	public function meanArray($File){
		return $this->maxArray($File)-$this->minArray($File);
	}
	//get avgArray
	public function avgArray($File){
		foreach ($File as $key => $value) {
			$array[]=$value[1];
		}
		unset($array[0]);
		return array_sum($array) / count($array);
	}
	//get standard deviation
	public function standardArray($File){
		 $avg = $this->avgArray($File);
		 $standard_deviation=0;
		 for ($i=1; $i < count($File) ; $i++) {
		 	$standard_deviation = $standard_deviation + ($File[$i][1]-$avg) * ($File[$i][1]-$avg);
		 }
		 return sqrt($standard_deviation/(count($File)-1));
	}
}
$File=getdata('./test.csv');
function getdata($File){
	    $handle = fopen($File, 'r');
	    while (!feof($handle) ) {
	        $csv[] = fgetcsv($handle);
	    }
	    fclose($handle);
	    return $csv;
}
$read=new readCSV();
$max = $read->maxArray($File);
$min = $read->minArray($File);
$mean = $read->meanArray($File);
$avg = $read->avgArray($File);
$standard = $read->standardArray($File);
?>