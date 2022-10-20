<!DOCTYPE html>
<html>

<head>
    <?php define("TITLE", "I Still Believe");?>
    <style>
        body {
            overflow-x: hidden;
        }

    </style>

</head>

<!--    navigation header made by Rana178545 -->
<!--    Search bar made by ahmed154989 -->
<?php include('Includes/Header.php'); ?>
<!-- navigation code ends here -->

<body>

    <section class="rcr-sectionheight">
        <div class="change">
            <div class="title">
                <h1> Available Now </h1>
            </div><br><br><br>

            <div class="subvideo"> <iframe width="956" height="538" src="https://www.youtube.com/embed/pvHjuTVAw9E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </div><br><br>
            <hr class="dotline">


            <div class="rightto">
                <div class="RCR-stillbeleiveimg"><img onmouseover="ZOOMINImg(this)" onmouseout="normalImg(this)" border="0" src=" http://photo.elcinema.com.s3.amazonaws.com/uploads/_640x_fefc3d66e22bc1fc5603f037f1a6947ffd202c2d36d47918c27e05df04e976a6.jpg" alt="Istillbeleive" width="300" height="450" hspace="50" vspace="50"></div><br><br><br>

                <script>
                    function ZOOMINImg(x) {
                        x.style.height = "600px";
                        x.style.width = "500px";
                    }

                    function normalImg(x) {
                        x.style.height = "450PX";
                        x.style.width = "300PX";
                    }

                </script>

                <div class="size">
                    <b>Release Date:</b> <i>26 February 2020</i> <br><br>
                    <b>Director:</b> Andrew Erwin<br><br>
                    <b>Genre:</b> Biography <br><br>
                    <b>Language:</b> English<br><br>
                    <b>Subtitle(s):</b> Arabic<br><br>


                    The events revolve around the life story of Christian singer Jeremy Camp, his rise to success and the love that made him believe that everything is possible in life, through persistence and hope.<br><br>

                    <button class="RCR-time">9:00PM-11:00PM</button>
                    <button class="RCR-time">11:00PM-1:00PM</button>
                    <button class="RCR-time">1:00PM-3:00PM</button>
                    <button class="RCR-time">3:00PM-5:00PM</button>
                    <button class="RCR-time">5:00PM-7:00PM</button>
                    <button class="RCR-time">7:00PM-9:00PM</button>
                    <button class="RCR-time">9:00PM:10:00PM</button>
                    <button class="RCR-time">10:00PM-12:00AM</button>
                    <button class="RCR-time">12:00AM-2:00AM</button><br>

                    <a href="Booking.php"> <button class="RCR-book">Book Now</button> </a>

                    <br><br><br><br>

                </div>
            </div>
        </div>
    </section>
    <!--    Footer made by Omar175970-->
    <?php include('Includes/Footer.php'); ?>
    <!--    Footer Ends Here-->

    <button onclick="topFunction()" id="RCR-topBtn" title="Go to top"><i class='fas fa-angle-double-up'></i></button>
    <script type="text/javascript" src="Includes/Scripts.js"></script>

</body>

</html>
