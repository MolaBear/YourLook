<?php
 session_start();
 include "db_conn.php";
 if(isset($_POST['username']) && isset($_POST['password'])) {
 function validate($data){
 $data = trim($data);
 $data = stripcslashes($data);
 $data = htmlspecialchars($data);
 return $data;
 }
 $uname=validate($_POST['username']);
 $pass=validate($_POST['password']);
 
 if(empty($uname)){
 header("Location:/YourLook/index.php?error=Username is required");
 } elseif(empty($pass)){
 header("Location:/YourLook/index.php?error=Password is required");
 } else{
 $sql = "SELECT *FROM users WHERE username='$uname' AND password='$pass'";
 
 $result = mysqli_query($conn, $sql);
 if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result); 
    if($row['username'] === $uname && $row['password'] ===$pass ){
        $_SESSION['id'] = $row ['id'];
        $_SESSION['username'] = $row ['username'];
        $_SESSION['gender'] = $row ['gender'];
        header("Location:/YourLook/users/home.php");
        exit();
        
    } else{
        header("Location:index.php?error=Incorrect Username or Password");
        exit();
 }
 }else{
 header("Location:index.php?error=Incorrect Username or Password");
 exit();
 }
 } 
 
 
 }else{
 header("Location:/YourLook/index.php");
 exit();
 }
 
 
?>