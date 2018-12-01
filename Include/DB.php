<?php

$con = mysqli_connect('localhost', 'root', '', 'phpcms');

if(mysqli_connect_errno()){
    
    echo "Unable to connect to DB " . mysqli_connect_errno();
}

?>