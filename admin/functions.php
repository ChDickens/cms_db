<?php

function redirect($location){


    return header("Location:" . $location);

}


function escape($string) {

global $connection;

return mysqli_real_escape_string($connection, trim($string));

}



function set_message($msg){

    if(!$msg) {

    $_SESSION['message']= $msg;

    } else {

    $msg = "";


        }

}


function display_message() {

    if(isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }


}