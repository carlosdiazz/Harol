<?php
    $mysqli = new mysqli("localhost", "root", "", "diseno_sistema");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MYSQL:";
    }
?>