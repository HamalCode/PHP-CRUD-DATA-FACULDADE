<?php
	include 'config/conn.php';

	$id 				= $_POST["txtId"];
	$naran 			= $_POST["txtNrn"];
	$inc 				= $_POST["txtInc"];
	$obs 				= $_POST["txtObs"];
	$sobre 			= $_POST["sobre"];

	if($sobre=="foun"){
		$Qf=$mietib->query("SELECT * FROM t_fakuldade WHERE id_fakuldade='$id'");
		if($Qf->rowCount()>0){
			echo "<script>alert('Dadus ho Id ida ne\'e registu ona.');</script>";
			echo "<script>window.history.back()</script>";
			return false; 
		} else{
		$Qf=$mietib->query("INSERT INTO t_fakuldade SET 
			id_fakuldade 		= '$id',
			nrn_fakuldade 	= '$naran',
			inc_fakuldade 	= '$inc',
			obs_fakuldade 	= '$obs'");
		}
	}
	if($sobre=="renova"){
		$Qf=$mietib->query("UPDATE t_fakuldade SET 
			id_fakuldade	= '$id',
			nrn_fakuldade 	= '$naran',
			inc_fakuldade 	= '$inc',
			obs_fakuldade 	= '$obs' WHERE id_fakuldade ='$_POST[txtIdE]'");
	}

	if(isset($_GET["sobre"]) && $_GET["sobre"]=="apaga"){
		$Qf=$mietib->query("DELETE FROM t_fakuldade  WHERE id_fakuldade ='$_GET[id]'");
	}

	header('location:index.php');
?>
