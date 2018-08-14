    <meta charset="UTF-8">
			<img src="https://pbs.twimg.com/profile_images/503696801161953281/IyV59ozo_400x400.png" width="200px" height="150px">
				<link rel="stylesheet" type="text/css" href="livro.css">
				<style type="text/css">
					  table{
        	background-color: white;
        	}
				</style>
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
'<table border="1" id="banana"><br><br>
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