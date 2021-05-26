<html>
<body>

<?php
 
 $nombre= $_POST["nombre"];
 $contra= $_POST["contra"];

if($nombre == "SEPTIEMO" && $contra == "Murialdo12")
{
    echo "Has ingresado al sistema";
}
else
{
    echo "Error: El nombre o la contraseña son incorrectos";
}


?>
    
</body>
</html>
