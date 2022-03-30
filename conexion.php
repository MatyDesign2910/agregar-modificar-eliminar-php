<?php

  $conexion = mysql_connect("localhost","root","");
  mysql_select_db("mi_negocio",$conexion);
  
  mysql_query("SET NAMES 'utf8'");

?>