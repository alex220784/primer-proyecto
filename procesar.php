<?php
$nombre= $_GET['nombre'];
$asunto= $_GET['asunto'];
$mensaje= $_GET['mensaje'];
echo "<h2>Informacion Recibida desde PHP</h2>";
echo "El nombre recibido es:" . $nombre . "<br/><br/>";
echo "El asunto recibido es:" . $asunto . "<br/><br/>";
echo "El mensaje recibido es:" . $mensaje . "<br/>";
?>