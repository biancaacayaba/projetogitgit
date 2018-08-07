<?php
include('conexao.php');
$nome=$_POST['nome'];
$autor=$_POST['autor'];
$genero=$_POST['genero'];
$isbn=$_POST['isbn'];
$sql = "insert into livros (nome,autor,genero,isbn) values ('$nome','$autor','$genero','$isbn')";
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
echo"<script>self.location='index.php'</script>";