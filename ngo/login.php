<!DOCTYPE html>
<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $_email=$_POST['Email'];
    $_password=$_POST['password'];
    $conn = mysqli_connect("localhost", "root", "","project_exhibition");
    $sql = "SELECT * FROM `sign_in` WHERE `mail_id` LIKE '$_email'";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    $num = mysqli_num_rows($result);
    if($num>0){
      if($row["password"]==$_password){
        session_start();
        $_SESSION['login'] = true;
        header("Location: http://localhost/ngo/home.html");
      }
      else{
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Password Incorrect!</strong> You should check the password.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      }
    }
    else{
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Email Not Present !</strong> You should singup first.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    } 
  }  
?>