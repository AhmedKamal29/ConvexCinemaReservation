<?php 
session_start();
try{
    $hostname = 'localhost';
    $dbname = "convex";
    $conn = new mysqli($hostname, 1234, 1234, $dbname);


 if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $NAME = $_POST['name'];
        $USERNAME = $_POST['Username'];
        $EMAIL = $_POST['Email'];
        $PASSWORD = $_POST['password'];
    
        $sql = ("INSERT INTO user(Name,Username,Email, password) VALUES('$NAME','$USERNAME','$EMAIL','$PASSWORD')");
        $result = mysqli_query($conn,$sql);
        header("Location:Home.php?signup=success");
        $_SESSION['Username'] = $USERNAME;
    }
}
       catch(PDOException $error)
    {
        echo $error->getMessage();
    }

require 'Login.php';
   
?>
