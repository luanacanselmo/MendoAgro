<?php
$conexion= new mysqli("localhost:3307", "root", "", "mendoagro2");

if ($conexion == false){
    echo "error";
}