<?php
$conexao = mysql_connect('localhost', 'acayaba');
if($conexao)
{
	if (! mysql_select_db('biblioteca',$conexao)) {
		die('erro:' . mysql_error($conexao));
	}
}
else{
	die('problema na conexao');
}
//echo 'conexão estabelecida com sucesso';
?>
<!--https://aulagithub-acayaba.c9users.io/phpmyadmin/ -->