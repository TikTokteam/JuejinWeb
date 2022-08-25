<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:GET');
header('Content-Type:text/html;charset=utf-8');

$filename = "./text/arr.md";    
$fp = fopen($filename, "r");//open file in read mode    

$contents = fread($fp, filesize($filename));//read file    

echo json_encode($contents);
fclose($fp);//close file    

?>