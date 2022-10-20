<!DOCTYPE html>
<html>

<head>
    <?php define("TITLE", "Scoob");?>
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
                <h1> COMING SOON </h1>
            </div><br><br><br>

            <div class="subvideo"><iframe width="940" height="530" src="https://www.youtube.com/embed/VvQWp6qD5b4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </div><br><br>
            <hr class="dotline">

            <div class="rightto">
                <div class="scoobimg"><img onmouseover="ZOOMINImg(this)" onmouseout="normalImg(this)" border="0" src="https://assets.voxcinemas.com/posters/P_HO00007693.jpg" alt="sponge" width="300" height="400" hspace="50" vspace="50"></div><br><br><br><br>

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
                    <b>Genre:</b> Mystery<br><br>
                    <b>Release Date:</b> 21 May 2020 <br><br>
                    <b>Starring:</b> Zac Efron, Kiersey Clemons, Will Forte<br><br>
                    <b>Language:</b> English<br><br>
                    <b>Subtitle(s):</b> Arabic<br>

                    <p>“SCOOB!” reveals how lifelong friends Scooby and Shaggy first met and how they joined with young detectives Fred, Velma and Daphne to form the famous Mystery Inc. Now, with hundreds of cases solved and adventures shared, Scooby and the gang face their biggest, most challenging mystery ever: a plot to unleash the ghost dog Cerberus upon the world. As they race to stop this global “Dogpocalypse,” the gang discovers that Scooby has a secret legacy and an epic destiny greater than anyone imagined.</p>
                </div><br><br>


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
