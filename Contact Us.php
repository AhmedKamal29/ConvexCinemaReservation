<!--this page is made by ahmed154989-->
<!DOCTYPE html>
<html>

<head>
    <?php define("TITLE", "Contact Us");?>
</head>

<!--    navigation header made by Rana178545 -->
<!--    Search bar made by ahmed154989 -->
<?php include('Includes/Header.php'); ?>
<!-- navigation code ends here -->

<body class="ocr-body">

    <section class="ocr-pagecontainer">
        <section class="ocr-contactus">
            <form action="Contactphp.php" method="post">

                <div id="ocr-name">
                    <input id="ocr-nameinput" class="ocr-inputs" name="Name" autocomplete="name" placeholder="Name" required>
                </div>

                <div id="ocr-email">
                    <input id="ocr-emailinput" class="ocr-inputs" name="Email" autocomplete="email" placeholder="Email" required>
                </div>

                <div id="ocr-phone">
                    <input id="ocr-phoneinput" class="ocr-inputs" name="phone" placeholder="Phone Number" required>
                </div>

                <div id="ocr-massage">
                    <textarea id="ocr-massageinput" class="ocr-inputs" name="massage" required placeholder="Massage"></textarea>
                </div>
                <button type="submit" id="ocr-sendbtn">Send</button>
            </form>
        </section>

        <section class="ocr-leftimgsection">
            <div id="ocr-contactimg">
                <img src="Images/Pages Related Imgs/Contact Us.png" class="ocr-contactimg">
            </div>
        </section>
    </section>
    <!--    Footer made by Omar175970-->
    <?php include('Includes/Footer.php'); ?>
    <!--    Footer Ends Here-->
    <button onclick="topFunction()" id="RCR-topBtn" title="Go to top"><i class='fas fa-angle-double-up'></i></button>
    <script type="text/javascript" src="Includes/Scripts.js"></script>
</body>

</html>
