<?php
include('conexao.php');
$nome=$_POST['nome'];
$autor=$_POST['autor'];
$genero=$_POST['genero'];
$sql = "insert into livros (nome,autor,genero) values ('$nome','$autor','$genero')";
if(mysql_query($sql,$conexao))
{
	echo"<script>alert('Registro incluido')</script>";
	

}
else
{
	echo mysql_error($conexao);
	echo"<script>alert('Problema na inclusao')</script>";
	die("<p>$sql</p>");
}
include('fecha.php');
echo"<script>self.location='tabela.php'</script>";