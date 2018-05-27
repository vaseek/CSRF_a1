<?php

require_once 'token.php';


$val = $_POST["token"];


if(isset($_POST['updatepost'])){
	if(token::checkToken($val,$_COOKIE['sse1'])){
		echo "hello ".$_POST['updatepost'];		
	}
	else{
	echo "wrong".$_COOKIE['sse1'];
	}
}
?>