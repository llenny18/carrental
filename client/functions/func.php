<?php
include "../../db/include.php";
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'reg' :
	regUser();
	break;
	
  case 'login' :
    logUser();
    break;

	
}

function regUser(){
    $uid = strtoupper(uniqid());
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uemail = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
   $cnum = $_POST['cnum'];
   $address = $_POST['address'];
   $occupation = $_POST['occupation'];
   $udender = $_POST['gender'];
    $conn = new db();
    $select_query = "Select * from useraccounts where userEmail  = '$uemail'" ;
   
    $result_select = mysqli_query($conn->set_db(), $select_query);
    $number = mysqli_num_rows($result_select);
    if($number>0){
      echo "<script>alert('This Student is already present in the database!')</script>";
    }
    else{
        $insert_query = "insert into useraccounts (uniqueID,userEmail,userPassword,firstName,lastName,userContact,userAddress,userOccupation,userType,userGender) values ( '$uid','$uemail', '$pass2','$fname', '$lname',  '$cnum', '$address','$occupation','Client','$udender')";

        $result = mysqli_query($conn->set_db(), $insert_query);
    
        if ($result){
          echo "<script>alert('Enrolled successfully!')</script>";
        }
        }


    

}


function logUser(){
  $uemail = $_POST['email'];
  $pass = $_POST['pass'];

  $conn = new db();
    $select_query = "Select * from useraccounts where userEmail  = '$uemail' and userPassword='$pass'" ;
   
    $result_select = mysqli_query($conn->set_db(), $select_query);
    $number = mysqli_num_rows($result_select);
    if($number>0){
      echo "<script>correctLogin();</script>";
    }
    else{
      echo "<script>wrongLogin();</script>";
      }
    }



?>