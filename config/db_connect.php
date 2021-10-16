<?php

//connect to database
$conn = mysqli_connect('localhost','Andrew','first','mama_pizza');

//check connection
if(!$conn){
    echo 'connection error'.mysqli_connect_error();
}

?>