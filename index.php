<!DOCTYPE html>
<html>
<head>
	<title>Dadus-Fakuldade</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Dadus Fakuldade</h1>
	
	<fieldset>
		<legend> ::
			<button type="button" onclick="location.href='form.php?assaun=aumenta'">Aumenta</button> ::
		</legend><br>
	<table>
		<thead>
		<tr><th>No.</th> <th>ID</th><th>FAKULDADE</th> 
			<th>INICIAL</th><TH>OBSERVASAUN</TH>
			<th>ASSAUN</th>	
		</tr>
		</thead>
		<tbody>
	<?php 
		include_once 'config/conn.php';
		$Qf=$mietib->query("SELECT * FROM t_fakuldade");
		if($Qf->rowCount()>0){
			$no=0;	
			while ($Df=$Qf->fetch(PDO::FETCH_LAZY)) {
				$no++;
				echo "<tr>";
				echo "<td align='center'>$no.</td>";
				echo "<td align='center'>$Df[0] </td>";
				echo "<td>$Df[nrn_fakuldade] </td>";
				echo "<td align='center'>$Df->inc_fakuldade </td>";
				echo "<td>$Df->obs_fakuldade </td>";
		echo "<td align='center'>
		<button type='button' onclick=\"location.href='form.php?assaun=renova&id=$Df[0]'\">Renova</button> 
		<button type='button' onclick=\"var a=confirm('Apaga Dadus ne\'e??'); 
		if(a==true){location.href='prosesu.php?sobre=apaga&id=$Df[0]';}\">Apaga</button></td>";
				echo "</tr>";
			}
		}else{
			echo "<tr><td align='center' colspan='6'> ** Seidauk iha Dadus iha Base de Dadus.!</td></tr>";
		}
	?>
	</tbody>
	<tfoot>
		<tr><th colspan="6" align="left"> :: Total Dadus <?=$no;?> ::</th>
	</tfoot>
</table>
	</fieldset>

</body>
</html>