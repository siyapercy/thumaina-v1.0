<?php
// Establish Connection to Database
function connect() {
    static $conn;
    if ($conn === NULL){ 
        $conn = mysqli_connect('remotemysql.com','iVyN3ENrNP','brv22HaQHg','iVyN3ENrNP');
    }
    return $conn;
}

?>