<?php

/**
 * Sesion: Almacenar y persistir datos del usuario mientras navega en un sitio web
 * hasta que cierre la sesión o del navegador
 */


 //Iniciar sesión
 session_start();

 //Variable local
 $variable_normal = "Cadena de texto";

 //Variable de sesión
 $_SESSION['variable_persistente'] = "Session activa";

 echo $variable_normal."<br>";
 echo $_SESSION['variable_persistente'];