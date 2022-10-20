<?php
try 
{
   $hostname = 'localhost';
    $dbname = "convex";
    $conn = new mysqli($hostname, 1234, 1234, $dbname);

    
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $NAME = $_POST['Username'];
        $sql = ("SELECT Username FROM user WHERE Username = '$NAME'");
        $result = mysqli_query($conn,$sql);
        $value = mysqli_fetch_row($result);
        if(!empty($value))
        {   
        $sql = ("DELETE FROM user WHERE Username = '$NAME'");
        $result = mysqli_query($conn,$sql);
        }
    }
}
catch(PDOException $error)
    {
    echo $error->getMessage();
    }

require 'Profile.php';
?>
