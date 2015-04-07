<?php
class dbCon {
    public function __construct($host, $user, $pass, $db_name) {
    $mysqli = new mysqli($host, $user, $pass, $db_name);
        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') ');
        }
        else{
            echo 'Connected To Database';
        }
    }
    function __destruct(){
    $mysqli->close();
    }
}
?>
