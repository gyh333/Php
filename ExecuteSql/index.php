<?php
//��ȡ�ļ�����
$_sql = file_get_contents('test.sql');

$_arr = explode(';', $_sql); //�ָ��ַ���
$_mysqli = new mysqli("localhost","root","123456");
if (mysqli_connect_errno()) { //�������һ�����ӵ��õĴ�����롣
    exit('�������ݿ����');
}
//ִ��sql���
foreach ($_arr as $_value) {
    $_mysqli->query($_value.';');
}
$_mysqli->close();
$_mysqli = null;
?>