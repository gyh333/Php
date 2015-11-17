<?php
//读取文件内容
$_sql = file_get_contents('test.sql');

$_arr = explode(';', $_sql); //分割字符串
$_mysqli = new mysqli("localhost","root","123456");
if (mysqli_connect_errno()) { //返回最后一次连接调用的错误代码。
    exit('连接数据库出错');
}
//执行sql语句
foreach ($_arr as $_value) {
    $_mysqli->query($_value.';');
}
$_mysqli->close();
$_mysqli = null;
?>