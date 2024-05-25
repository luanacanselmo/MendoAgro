<?php
$conexion= new mysqli("localhost:3307", "root", "", "mendoagro");

if ($conexion == false){
    echo "error";
}else{
    echo"correcto";
}