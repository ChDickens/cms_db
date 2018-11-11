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

function confirmQuery($result) {
    if (!$result) {
        die("Запрос не удался" . mysqli_error());
    }
}

function is_admin($username) {

    global $connection; 

    $query = "SELECT user_role FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);

    $row = mysqli_fetch_array($result);


    if($row['user_role'] == 'admin'){

        return true;

    }else {


        return false;
    }

}
function login_user($username, $password){

    global $connection;

    $username = trim($username);
    $password = trim($password);

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    
    
    $query = "SELECT * FROM users WHERE username = '{$username}' ";
    $select_user_query = mysqli_query($connection, $query);
    if(!$select_user_query) {

        die("QUERY FAILED". mysqli_error($connection));

    }
    
    
    
      while($row = mysqli_fetch_array($select_user_query)) {
          
          $db_user_id = $row['user_id'];
          $db_username = $row['username'];
          $db_user_password = $row['user_password'];
          $db_user_firstname = $row['user_firstname'];
          $db_user_lastname = $row['user_lastname'];
          $db_user_role = $row['user_role'];
      
      } 


    if (password_verify($password,$db_user_password)) {
           
        $_SESSION['username'] = $db_username;
        $_SESSION['firstname'] = $db_user_firstname;
        $_SESSION['lastname'] = $db_user_lastname;
        $_SESSION['user_role'] = $db_user_role;
            
            

        redirect("/admin");


        } else {




        redirect("/index.php");

        }
        


 }