<?php 
session_start();
try{
    $hostname = 'localhost';
    $dbname = "convex";
    $conn = new mysqli($hostname, 1234, 1234, $dbname);


 if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $USERNAME = $_POST['Username'];
        $PASSWORD = $_POST['password'];
    
        $sql = ("SELECT Username FROM user WHERE Username =     '$USERNAME' AND password = '$PASSWORD'");
    
        $result = mysqli_query($conn,$sql);
        $value = mysqli_fetch_row($result);
     
     if ($value[0] == "admin"){
           header("Location:Profile.php?Loggedin=success");
     }
     else{
        header("Location:Home.php?Loggedin=success");
     }
        
        $_SESSION['$USERNAME'] = $_POST['Username'];

    }
}
       catch(PDOException $error)
    {
        echo $error->getMessage();
    }

require 'Login.php';
   
?>
