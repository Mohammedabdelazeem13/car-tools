<?php
$Firstname=$_REQUEST['First name'];
$Lastname=$_REQUEST['Last name'];
$Email=$_REQUEST['Email'];
$Gender=$_REQUEST['Gender'];
$Password=$_REQUEST['Password'];
$Birthday=$_REQUEST['Birthday'];
$checkbox=$_REQUEST['checkbox'];


if(isset($_POST['btn']))
{
    $host="localhost";
    $user="root";
    $password="";
    $db="car-tools";

    $conn = mysqli_connect($host,$user,$password,$db);


    mysqli_select_db($conn,$db);

    $insert="INSERT into form values('$Firstname', '$Lastname', '$Email', '$Gender', '$Password', '$Birthday', '$checkbox')";
    
    $result= mysqli_query($conn,$insert);

if($result){

    print("Done");
}else{

  print("Not Done");

}

mysqli_close($conn);

}















?>