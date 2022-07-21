<php?
 function conectar(){
  $usuario="administrador";
  $contraseña = "";
  $servidor="";
  $db="clientes";

  $conexion=mysql_connect(&servidor,$usuario,$contraseña) or die ("error al conectar");
   mysql_select_db($db,$conexion);
 }

>