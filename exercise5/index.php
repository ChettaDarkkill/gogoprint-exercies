<?php
class FileOwners
{
    public static function groupByOwners($files)
    {

       $arr = [];
       
       foreach ($files as $key => $value) {
            !array_key_exists($value, $arr) ? $arr[$value] = [$key] : array_push($arr[$value], $key) ;
       }

       return $arr;

    }
}

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);

var_dump(FileOwners::groupByOwners($files));
