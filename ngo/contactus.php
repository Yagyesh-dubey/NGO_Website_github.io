<?php
   if( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
   {
    $first_name=$_POST['Name'];
    $last_name=$_POST['LastName'];
    $mail_id=$_POST['Sender'];
    $contact_number=$_POST['Number'];
    $text_area=$_POST['Message'];


    $dbc = mysqli_connect('localhost','root','','project_exhibition')
            or die('Not connected to database.');

    $query="INSERT INTO contact_us (`first_name`, `last_name`,`contact_number`, `mail_id`, `text_area`) 
            VALUES ('$first_name', '$last_name','$contact_number', '$mail_id', '$text_area')";

    $result=mysqli_query($dbc,$query)
            or die('Result failed');

    echo 'Thanks for submitting';
   }
?>