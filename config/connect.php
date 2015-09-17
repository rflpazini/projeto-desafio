<?php

$db['server'] = 'localhost';
$db['user'] = 'root';
$db['pw'] = '';
$db['name'] = 'Desafio';

$connect = mysql_connect($db['server'], $db['user'], $db['pw']) or print(mysql_error());
mysql_select_db($db['name'], $connect) or print(mysql_error());
?>