<!DOCTYPE html>
<html>
<head>
	<title>Form Dadus-Fakuldade</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	include 'config/conn.php';
	if(isset($_GET["assaun"]) && $_GET["assaun"]=="aumenta"){
		$id				= "";
		$naran 		= "";
		$inicial	= "";
		$obs			= "";
		$sobre 		= "foun";
	}else{
		$Qf=$mietib->query("SELECT * FROM t_fakuldade WHERE id_fakuldade ='$_GET[id]'");
		$Df=$Qf->fetch(PDO::FETCH_BOTH);
		$id				= $Df["id_fakuldade"];
		$naran 		= $Df["nrn_fakuldade"];
		$inicial	= $Df["inc_fakuldade"];
		$obs			= $Df["obs_fakuldade"];
		$sobre 		= "renova";

	}
?>
<h1>Form Input & Renova Dadus Fakuldade</h1>
<fieldset>
	<legend>Detallu Field Fakuldade	</legend>

	<form action="prosesu.php" method="POST">
		<input type="hidden" name="txtIdE" value="<?=$id;?>"><br>
		<input type="hidden" name="sobre" value="<?=$sobre;?>"><br>
		<label>ID Fakuldade</label>
		<input type="text" name="txtId" maxlength="1" required="required" value="<?=$id;?>"><br>
		<label>Naran Fakuldade</label>
		<textarea name="txtNrn" cols="40"  required="required"><?=$naran;?></textarea><br>
		<label>Inicial Fakuldade</label>
		<input type="text" name="txtInc" size="51"  required="required" maxlength="25" value="<?=$inicial;?>"><br>
		<label>Observasaun</label>
		<textarea name="txtObs" cols="40"><?=$obs;?></textarea> <br>
		<br>
		<br>

			<input type="submit" name="submit" value="Prosesu">
			<input type="reset" name="reset" value="Reset">
				<input type="button" name="cancel" value="Cancela" onClick="window.history.back();" style="float: right">
	</form>
</fieldset>
</body>
</html>