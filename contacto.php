<?php

include_once 'conexion.php';
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];

$mensaje=$_POST['mensaje'];


$sql= "INSERT INTO contacto(nombre,edad,mensaje) VALUES ('$nombre','$edad','$mensaje')";
if(mysqli_query($conexion,$sql)){
	echo  '<script>
                        window.location.href = "contactanos.html";
                        alert("Su mensaje a sido enviado, en breve lo atendemos")
                    </script>';
}
else{
	echo "No se pudo".mysqli_error($conexion);
}


mysqli_close($conexion);
?>