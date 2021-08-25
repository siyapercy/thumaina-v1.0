<?php
// Establish Connection to Database
function connect() {
    static $conn;
    if ($conn === NULL){ 
        $conn = mysqli_connect('remotemysql.com','1SFzjpKben','K6r2D9wwEy','1SFzjpKben');
    }
    return $conn;
}

?>