<?php
	include("../../../php/conex_bd.php"); //conexion con bd

	$nuevocodigo = $_POST["nuevoCodigo"];
	$titu_serv= $_POST['nombre_serv'];
	$subnombre_serv= $_POST['subnombre_serv'];
	$desc_serv= $_POST['desc_serv'];

	$fot1_serv=$_FILES['fot1_serv']['name']; //obtiene nombre de img
	$archivo1 = $_FILES["fot1_serv"]["tmp_name"]; //contiene el archivo

	$fot2_serv=$_FILES['fot2_serv']['name']; //obtiene nombre de img
	$archivo2 = $_FILES["fot2_serv"]["tmp_name"]; //contiene el archivo

	$fot3_serv=$_FILES['fot3_serv']['name']; //obtiene nombre de img
	$archivo3 = $_FILES["fot3_serv"]["tmp_name"]; //contiene el archivo

	$fot4_serv=$_FILES['fot4_serv']['name']; //obtiene nombre de img
	$archivo4 = $_FILES["fot4_serv"]["tmp_name"]; //contiene el archivo

	$fot_caractserv=$_FILES['fot_caractserv']['name']; //obtiene nombre de img
	$archivo5 = $_FILES["fot_caractserv"]["tmp_name"]; //contiene el archivo


	$directorio = "../../../img/productos/".$nuevocodigo;
	mkdir($directorio, 0700);

	$ruta1 = "../../../img/productos/".$nuevocodigo."/".$_FILES['fot1_serv']['name'];
	move_uploaded_file($archivo1, $ruta1);

	$ruta2 = "../../../img/productos/".$nuevocodigo."/".$_FILES['fot2_serv']['name'];
	move_uploaded_file($archivo2, $ruta2);

	$ruta3 = "../../../img/productos/".$nuevocodigo."/".$_FILES['fot3_serv']['name'];
	move_uploaded_file($archivo3, $ruta3);

	$ruta4 = "../../../img/productos/".$nuevocodigo."/".$_FILES['fot4_serv']['name'];
	move_uploaded_file($archivo4, $ruta4);

	$ruta5 = "../../../img/productos/".$nuevocodigo."/".$_FILES['fot_caractserv']['name'];
	move_uploaded_file($archivo5, $ruta5);


	$registro = "INSERT INTO servicios VALUES('$nuevocodigo','$titu_serv','$subnombre_serv','$desc_serv','$fot1_serv','$fot2_serv','$fot3_serv','$fot4_serv','$fot_caractserv')"; //query de registro

	$query = mysqli_query($conexion, $registro);

	if ($query) {
		echo "<script>alert('PRODUCTO REGISTRADO CORRECTAMENTE');
							location.href='../menu_servicios.php';
						</script>";
	}else{
		echo "<script>alert('Error');</script>". mysqli_error($conexion);
	}
?>	
