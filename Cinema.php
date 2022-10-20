<html lang="en">

<head>

    <?php define("TITLE", "Cinema");?>
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            font-size: 16px;
            font-family: monospace;
            background-color: gray;
        }

    </style>
</head>

<!--    navigation header made by Rana178545 -->
<!--    Search bar made by ahmed154989 -->
<?php include('Includes/Header.php'); ?>
<!-- navigation code ends here -->

<body>
    <section class="ycr-cinemapagecontainer">
        <ul class="ycr-card-list">
            <li class="ycr-card">
                <a class="ycr-card-image" href="What'sOn.php" style="background-image: url(https://images.unsplash.com/photo-1577382144834-8a80d92b925c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60); ">
                </a>
                <a class="ycr-card-description" href="#">
                    <h2>Suncity</h2>
                </a>
                <p>Address: El-Nasr Rd, Sheraton Al Matar, El Nozha, Cairo Governorate</p>
                <p>Phone: 0120 811 3590</p>
            </li>
            1
            <li class="ycr-card">
                <a class="ycr-card-image" href="What'sOn.php" style="background-image: url(https://images.unsplash.com/photo-1507924538820-ede94a04019d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60)">
                </a>
                <a class="ycr-card-description" href="#">
                    <h2>CityStars</h2>
                </a>
                <p>Address: Masaken Al Mohandesin, Nasr City, Cairo Governorate</p>
                <p> Phone: 02 24802014</p>
            </li>

            <li class="ycr-card">
                <a class="ycr-card-image" href="What'sOn.php" style="background-image: url(https://images.unsplash.com/photo-1502033491742-0e11fb057e16?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60)">

                </a>
                <a class="ycr-card-description" href="#">
                    <h2>Point90</h2>
                </a>
                <p>Address: 3F Point90 mall Fifth Settlement In front of the American University</p>
                <p>Phone: 0128 930 0032</p>
            </li>

            <li class="ycr-card">
                <a class="ycr-card-image" href="What'sOn.php" style="background-image: url(https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60)">
                </a>
                <a class="ycr-card-description" href="#">
                    <h2>Cairo Festival City</h2>
                </a>
                <p>Address: Nasr City, Cairo Governorate</p>
                <p>Phone: 02 26168241</p>
            </li>
        </ul>
    </section>
    <!--    Footer made by Omar175970-->
    <?php include('Includes/Footer.php'); ?>
    <!--    Footer Ends Here-->
    <button onclick="topFunction()" id="RCR-topBtn" title="Go to top"><i class='fas fa-angle-double-up'></i></button>
    <script type="text/javascript" src="Includes/Scripts.js"></script>
</body>

</html>
