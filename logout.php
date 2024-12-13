<?php
/**
 * 
 *
 * @author Eloy
 *
 * @version 1.0
 *
 */

ini_set('session.name','sesionEloy');
ini_set('session.cookie_httponly',1);
ini_set('session.cache_expire', 5);
session_start();


// Se tiene que cerrar la sesión
$_SESSION['name']='';


// Una vez cerrada la sesión se redirige a index
header ('location: /');