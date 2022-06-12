<?php
$db = array (
		'server' => 'localhost',
		'port' => '3306',
		'username' => 'php',
		'password' => '123456',
		'database' => 'db_student' 
);


$conn = @mysql_connect($db['server'].':'.$db['port'],$db['username'],$db['password']);
if (! $conn) {
	echo "服务器不能连�?" . mysql_error();
} else {
	// 声明字�?�集
	mysql_set_charset('utf8', $conn);
	// 选择数据�?
	mysql_select_db($db['database'], $conn);
}