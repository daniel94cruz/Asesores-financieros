<php?
 require'$conexion.php';

 $nombre= $_POST["Nombre y apellido"];
 $correo= $_POST["Email"];
 $celular= $_POST["telefono"];
 $mensaje= $_POST["mensaje"];
 $ciudad= $_POST["ciudad"];


 $insertat="insert into clientes values ('$nombre,$correo,$celular,$mensaje,$ciudad')";
 $query=mysql_query($conexion,$insertat);

