<?php

    $conn = new mysqli('localhost', 'root', 'root', 'teldewebcamp');

    if($conn->connect_error){
        echo $error-> $conn->connect_error;
    }

?>