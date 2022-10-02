<?php
   if( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
   {
    $name=$_POST['prenom'];
    $phone=$_POST['phone'];
    $mail_id=$_POST['email'];
    $item=$_POST['sujet'];
    $address=$_POST['adresse'];
    $people_type=$_POST['postal'];
    $additional=$_POST['message'];

    $dbc = mysqli_connect('localhost','root','','project_exhibition')
            or die('Not connected to database.');

    $query="INSERT INTO demander (`name`, `phone_number`, `email_id`, `address`, `kind_of_item`, `people_date`, `additional`) 
    VALUES ('$name', '$phone', '$mail_id', '$address', '$item', '$people_type', '$additional')";

    $result=mysqli_query($dbc,$query)
            or die('Result failed');

    echo 'Thanks for submitting';
}
?>