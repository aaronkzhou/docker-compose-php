<?php

interface readCSVInterface{
    protected $test;
}
class readCSV{

    public $File;
    public function __construct($csvFile){
        $file = new SplFileObject($csvFile);
        while (!$file->eof()) {
            $csv[] = $file->fgetcsv();
        }
        $this->File=$csv;
    }
        //get max value
    public function maxArray(){
        foreach ($this->File as $key => $value) {
            if(isset($value[2])) $murderNum[]=$value[2];
        }
        unset($murderNum[0]);
        try {
            return max($murderNum);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    //get min value
    public function minArray(){
        foreach ($this->File as $key => $value) {
            if(isset($value[2])) $murderNum[]=$value[2];

        }
        try {
            return min($murderNum);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    //get meanArray
    public function rangeArray(){
        try {
            return $this->maxArray($this->File)-$this->minArray($this->File);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    //get avgArray
    public function meanArray(){
        foreach ($this->File as $key => $value) {
            if(isset($value[2])) $murderNum[]=$value[2];
        }
        unset($murderNum[0]);
        try {
            return array_sum($murderNum) / count($murderNum);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    //get standard deviation
    public function standardArray(){
         $csv=$this->File;
         $avg = $this->meanArray($csv);
         $standard_deviation=0;
         for ($i=1; $i < count($csv) ; $i++) {
             if(isset($csv[$i][2])) $standard_deviation = $standard_deviation + ($csv[$i][2]-$avg) * ($csv[$i][2]-$avg);
         }

        try {
            return sqrt($standard_deviation/(count($csv)-1));
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
$read=new readCSV('undead.csv');
$max = $read->maxArray();
$min = $read->minArray();
$range = $read->rangeArray();
$mean = $read->meanArray();
$standard = $read->standardArray();
?>