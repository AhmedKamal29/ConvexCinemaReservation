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
        $CINEMA = $_POST['Cinema'];
        $MOVIE = $_POST['Movie'];
        $DATE = $_POST['date'];
        $TIME = $_POST['time'];
        $SEAT = $_POST['Seat type'];
        $ID = rand($min,$max);
    
        $sql = ("INSERT INTO booking(Name,Email,Cinema,Movie,Date,Time,SeatType,BookID) VALUES('$NAME','$EMAIL','$CINEMA','$MOVIE','$DATE','$TIME','$SEAT','$ID')");
        $result = mysqli_query($conn,$sql);
        header("Location:Booking.php?booking=successfull");
    }
}
       catch(PDOException $error)
    {
        echo $error->getMessage();
    }

require 'Booking.php';
   
?>
