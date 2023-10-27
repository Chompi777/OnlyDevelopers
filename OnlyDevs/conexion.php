<?php

echo "<p><b>Prueba de Conexión</b></p>";
$db = pg_connect("host=localhost port=5432 dbname=db_prueba user=postgres password=postgres");

 if (!$db) 

  echo "<p><b>Ocurrio un error conectando a la base de datos:.</b></p>";

 else

 echo "<p><b>Conexión Exitosa</b></p>";

?>