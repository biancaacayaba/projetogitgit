    <meta charset="UTF-8">

<?php
include('conexao.php');
$sql = "select * from livros";
$resultado = mysql_query($sql,$conexao);
$linha = mysql_num_rows($resultado);
	if($linha == 0)
	{
		include('fecha.php');
		die('table livros vazia');
	}
echo 
'<table border="1">
<th>Código</th>
<th>Nome</th>
<th>Autor</th>
<th>Gênero</th>
</tr>';
for ($x=0; $x < $linha ; $x++)
{
	$codigo = mysql_result($resultado, $x, 'codigo');
	$nome=mysql_result($resultado, $x, 'nome');
	$autor = mysql_result($resultado,$x, 'autor');
	$genero = mysql_result($resultado,$x, 'genero');
	echo 
	"<tr>
	<td>$codigo</td>
	<td>$nome</td>
	<td>$autor</td>
	<td>$genero</td>
	</tr>";
}
echo '</table>';
?>