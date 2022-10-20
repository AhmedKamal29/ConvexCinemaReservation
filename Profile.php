<!--This page is made by youssef 178800-->

<html lang="en">

<head>
    <?php define("TITLE", "Login/SignUp");?>
    <style>
        * {
            box-sizing: border-box;
        }

    </style>
</head>

<!--    navigation header made by Rana178545 -->
<!--    Search bar made by ahmed154989 -->
<?php include('Includes/Header.php'); ?>
<!-- navigation code ends here -->

<body class="ycr-loginbody">

    <section class="ycr-pagecontainer">

        <div class="RCR-profcenter">

            <div class="RCR-profcenter">
                <form action="DeleteAcc.php" method="post">
                    <button onclick=Delete(); class="RCR-profbtn">Delete Account</button><br><br>
                    <input id="ACR-deleteuser" class="ACR-inputs" type="text" name="Username" placeholder="Enter a Username" autocomplete="name" style="display:none;" required />
                </form>
                <br><br>

                <form action="InsertMovies.php" method="post">
                    <button onclick=Insert(); class="RCR-profbtn">Insert</button><br><br>
                    <div id="ACR-InsertMovie" style="display:none;">
                        <input id="ACR-InsertMovie" class="ACR-inputs" type="text" name="Movie" placeholder="Enter Movie Name" autocomplete="name" required />

                        <input class="ACR-inputs" type="text" name="Date" placeholder="Enter release date" autocomplete="name" required />

                        <input class="ACR-inputs" type="text" name="Lang" placeholder="Enter language" autocomplete="name" required />
                    </div>
                </form>
                <br><br>

                <form action="DeleteAcc.php" method="post">
                    <button onclick=Update(); class="RCR-profbtn">Update</button><br><br>
                    <input id="ACR-deleteuser" class="ACR-inputs" type="text" name="Username" placeholder="Enter a Username" autocomplete="name" style="margin-bottom: 0%; display:none;" required />
                </form>
                <br><br>
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
