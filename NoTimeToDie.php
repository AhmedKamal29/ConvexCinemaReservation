<!DOCTYPE html>
<html>

<head>
    <?php define("TITLE", "No Time To Die");?>
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

            <div class="subvideo"><iframe width="956" height="538" src="https://www.youtube.com/embed/BIhNsAtPbPI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </div><br><br>
            <hr class="dotline">

            <div class="rightto">
                <div class="RCR-notimeimg"><img onmouseover="ZOOMINImg(this)" onmouseout="normalImg(this)" border="0" src="https://assets.voxcinemas.com/posters/P_HO00007621.jpg" alt="no time to die" width="300" height="400" hspace="50" vspace="50"></div><br><br><br><br>
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
                    <b>Release Date:</b> <i>05 November 2020</i> <br><br>
                    <b>Starring:</b>Daniel Craig, Rami Malek, Ana de Armas<br><br>
                    <b>Language:</b> English<br><br>
                    <b>Subtitle(s):</b> Arabic<br><br>

                    Bond has left active service. His peace is short-lived when his old friend Felix Leiter from the CIA turns up asking for help, leading Bond onto the trail of a mysterious villain armed with dangerous new technology.</div>
            </div><br>
        </div>
    </section>
    <!--    Footer made by Omar175970-->
    <?php include('Includes/Footer.php'); ?>
    <!--    Footer Ends Here-->

    <button onclick="topFunction()" id="RCR-topBtn" title="Go to top"><i class='fas fa-angle-double-up'></i></button>
    <script type="text/javascript" src="Includes/Scripts.js"></script>
</body>

</html>
