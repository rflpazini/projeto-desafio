<?php 
include 'connect.php';
include 'functions.php';

var_dump($_POST);
add($_REQUEST['modelo'], $_REQUEST['preco'], $_REQUEST['cavalos'], $_REQUEST['consumo-etanol'], $_REQUEST['consumo-gas'], $$_REQUEST['revisao'], $_REQUEST['seguro'], $_REQUEST['url']);
?>