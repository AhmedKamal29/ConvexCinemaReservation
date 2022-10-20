<!DOCTYPE html>
<html>

<head>
    <?php define("TITLE", "Top Gun");?>
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

            <div class="subvideo"><iframe width="956" height="538" src="https://www.youtube.com/embed/g4U4BQW9OEk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </div><br><br>
            <hr class="dotline">

            <div class="rightto">
                <div class="topgunimg"><img onmouseover="ZOOMINImg(this)" onmouseout="normalImg(this)" border="0" src="https://assets.voxcinemas.com/posters/P_HO00007665.jpg" alt="topgun" width="300" height="400" hspace="50" vspace="50"></div><br><br><br><br>
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
                    <b>Release Date:</b> <i> 25 June 2020</i> <br><br>
                    <b>Starring:</b> Tom Cruise, Jon Hamm, Jennifer Connelly<br><br>
                    <b>Language:</b> English<br><br>
                    <b>Subtitle(s):</b> Arabic<br><br>

                    After more than thirty years of service as one of the Navy’s top aviators, Pete “Maverick” Mitchell is where he belongs, pushing the envelope as a courageous test pilot and dodging the advancement in rank that would ground him. When he finds himself training a detachment of Top Gun graduates for a specialized mission the likes of which no living pilot has ever seen, Maverick encounters Lt. Bradley Bradshaw, call sign: “Rooster,” the son of Maverick’s late friend and Radar Intercept Officer Lt. Nick Bradshaw, aka “Goose”. Facing an uncertain future and confronting the ghosts of his past, Maverick is drawn into a confrontation with his own deepest fears, culminating in a mission that demands the ultimate sacrifice from those who will be chosen to fly it.</div>
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
