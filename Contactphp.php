<?php 
$max = 999999999;
$min = 100000000;
try{
    $hostname = 'localhost';
    $dbname = "convex";
    $conn = new mysqli($hostname, 1234, 1234, $dbname);

 if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $NAME = $_POST['Name'];
        $EMAIL = $_POST['Email'];
        $PHONE = $_POST['phone'];
        $MASSAGE = $_POST['massage'];
        $ID = rand($min,$max);
    
    
        $sql = ("INSERT INTO contacts(Name,Email,Phone Number,Massage,ContactID) VALUES('$NAME','$EMAIL','$PHONE','$MASSAGE','$ID')");
        $result = mysqli_query($conn,$sql);
        header("Location:Contact Us.php");
    }
}
       catch(PDOException $error)
    {
        echo $error->getMessage();
    }

require 'Contact Us.php';
   
?>
