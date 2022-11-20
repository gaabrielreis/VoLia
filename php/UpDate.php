<?php
require_once('conexao.php');
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('America/Sao_Paulo');
header('Content-Type: text/plain');
setlocale(LC_ALL,'pt_BR.UTF8');
header('Content-Type: text/html; charset=UTF-8');

//api de abastecimento do BD GABRIEL HENRQIUE DOS REIS 24/11/2020.
// O mensageiro - GDS - 150822
//VoLia 191122

//$Data = date("Y-m-d H:i:s");	
//$Hora = date('H:i:s');

error_reporting(1);
//ini_set(“display_errors”, 1);
error_reporting(E_ALL);
//ini_set(“display_errors”, 1);
ini_set('default_charset','UTF-8');

$IID = $_GET["IID"];
$NewStatus = $_GET["NewStatus"];

$sql = "SELECT * FROM `mesa` WHERE 1 = 1;";
$query = mysqli_query($con,$sql);

if ($query){
	while ($row = $query->fetch_assoc()){
		$Id = $row["Id"];
		$Status= $row["Status"];
}

$sql = "UPDATE `mesa` SET `Status`= $NewStatus WHERE `Id` = $IID;";
$query = mysqli_query($con,$sql);

}else{
	echo "Erro";
}

$con->close();
?>