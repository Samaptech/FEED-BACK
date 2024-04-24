<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "dj";


$con = mysqli_connect($server , $user , $password , $database);

 if(!$con){
     die("Connection failed". mysqli_connect_error());}
 else{
  echo "Successfully Connected";
 }

 if(isset($_POST['Submit'])){
     $Name = $_POST['Name'];
     $Email = $_POST['Email'];
     $Phone = $_POST['Phone'];
     $Address = $_POST['Address'];
     $Description = $_POST['Description'];


    $query =  "INSERT INTO `feed back` (`Name`, `Email`, `Phone`, `Address`, `Description`) VALUES ('$Name', '$Email', '$Phone', '$Address', '$Description')";

  $res = mysqli_query($con , $query);
     if($res){
         echo "Successfully Submitted";
     }
     else{
         echo "Error";
     }

    }
    ?>