<?php
   if( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
   {
    $first_name=$_POST['first_name'];
    $last_name=$_POST['Last_name'];
    $mobile_number=$_POST['mobile'];
    $mail_id=$_POST['email'];
    $password=$_POST['password'];


    $dbc = mysqli_connect('localhost','root','','project_exhibition')
            or die('Not connected to database.');

    $query="INSERT INTO sign_in (`first_name`,`last_name`,`mobile_number`, `mail_id`, `password`) 
            VALUES ('$first_name', '$last_name','$mobile_number','$mail_id', '$password')";

    $result=mysqli_query($dbc,$query)
            or die('Result failed');

    echo 'You are successfully registered 👍';
   }
?>