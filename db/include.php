<?php
session_start();
class db {
    public $conn;
    function set_db() {
$conn = new mysqli('localhost','root','','carrental');
    if($conn->connect_error){
        die ("Connection failed: " .$conn->connect_error);
    }
    return $conn;
}
}
function redirect_to($location = NULL) {
    if($location != NULL){
        header("Location: {$location}");
        exit;
    }
}

function accAuthentication($U_USERNAME,$h_pass){
    global $mydb;
    $mydb->setQuery("SELECT * FROM `useraccounts` WHERE `ACCOUNT_USERNAME` = '". $U_USERNAME ."' and `ACCOUNT_PASSWORD` = '". $h_pass ."' AND ACCOUNT_TYPE='Student'");
      $row_count = $mydb->num_rows();//get the number of count
     if ($row_count > 0){
     $user_found = $mydb->loadSingleResult();
         $_SESSION['IDNO']	= $user_found->ACCOUNT_ID; 
       return true;
     }else{
         return false;
     }
}



?>