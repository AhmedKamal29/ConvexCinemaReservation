<!DOCTYPE html>
<html>

<head>
    <?php define("TITLE", "SpongeBob");?>
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

            <div class="subvideo"><iframe width="956" height="538" src="https://www.youtube.com/embed/HfiH_526qhY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </div><br><br>
            <hr class="dotline">
            <div class="rightto">
                <div class="spongeimg"><img onmouseover="ZOOMINImg(this)" onmouseout="normalImg(this)" border="0" src="https://assets.voxcinemas.com/posters/P_HO00007832.jpg" alt="sponge" width="300" height="400" hspace="50" vspace="50"></div><br><br><br><br>

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
                    <b>Genre:</b> Animation<br><br>
                    <b>Release Date:</b> <i>22 May 2020</i> <br><br>
                    <b>Starring:</b> Keanu Reeves, Clancy Brown<br><br>
                    <b>Language:</b> English<br><br>
                    <b>Subtitle(s):</b> Arabic<br>

                    <p>After SpongeBob's beloved pet snail Gary is snail-napped, he and Patrick embark on an epic adventure to The Lost City of Atlantic City to bring Gary home.</p>
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
