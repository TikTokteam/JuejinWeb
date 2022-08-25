<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:GET');
header('Content-Type:text/html;charset=utf-8');
date_default_timezone_set('PRC');

$link=@mysqli_connect('localhost','root','202019cs') or die('数据库连接失败!');
mysqli_select_db($link,'vue') or die('数据库选择错误!');
mysqli_query($link,"set names utf8");

$sql = "select * from text";
$result=mysqli_query($link,$sql) or die('查询语句错误3!');
$li = mysqli_fetch_array($result);
$arr = array();

for($i = 0 ;$li = mysqli_fetch_array($result);$i++){
    $arr[$i] = $li;
}
echo json_encode($arr);
?>