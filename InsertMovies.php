<?php 
session_start();
try{
    $hostname = 'localhost';
    $dbname = "convex";
    $conn = new mysqli($hostname, 1234, 1234, $dbname);


 if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $NAME = $_POST['Movie'];
        $DATE = $_POST['Date'];
        $LANG = $_POST['Lang'];
    
        $sql = ("INSERT INTO movie(name,released date,language) VALUES('$NAME','$DATE','$LANG')");
        $result = mysqli_query($conn,$sql);
        header("Location:Profile.php?Movie Inserted");
        $_SESSION['Username'] = $USERNAME;
    }
}
       catch(PDOException $error)
    {
        echo $error->getMessage();
    }

require 'Profile.php';
   
?>
