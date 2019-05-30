<?php

include("../classe/conexao.php");

$valor = $_POST['valor'];

$consulta = "SELECT * FROM loja_doce where valor_doce=$valor ";


$con = $mysqli->query($consulta) or die ($mysqli->error);
?>
<html>
	<head>
		<meta charset='utf8'>
	</head>
	<body>
		<table border="1">
			<tr>
				<td> ID </td>
				<td> Nome </td>
				<td> Quantidade </td>
				<td> Valor </td>
			</tr>
			<?php while($dado = $con->fetch_array()){ ?>
			<tr>
				<td><?php echo $dado['id_doce']; ?></td>
				<td><?php echo $dado['nome_doce']; ?></td>
				<td><?php echo $dado['quant_doce']; ?></td>
				<td><?php echo $dado['valor_doce']; ?></td>
				
				 

				<td><a href="usu_editar.php?codigo=<?php echo $dado['usu_codigo']; ?>"> Editar </a> | 
					<a href="usu_excluir.php?codigo=<?php echo $dado['usu_codigo']; ?>"> Excluir </a> 
			</tr>
			<?php } ?>
		</table>
	</body>
</html>