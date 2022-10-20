<!--this page is made by ahmed154989-->
<!DOCTYPE html>
<html>

<head>
    <?php define("TITLE", "About Us");?>
</head>

<!--    navigation header made by Rana178545 -->
<!--    Search bar made by ahmed154989 -->
<?php include('Includes/Header.php'); ?>
<!-- navigation code ends here -->

<body class="ocr-body">
    <section class="ocr-aboutcontainer">
        <div class="ocr-width">
            <button onclick="AboutTeam()" class="ocr-expand">
                <div class="ocr-column">
                    <div class="ocr-card">
                        <div class="ocr-container C1">
                            <img id="ocr-1" src="Images/Pages Related Imgs/About Us.jpg" alt="About the team">
                            <h2>About Us <i class="fas fa-chevron-right"></i></h2>
                        </div>
                    </div>
                </div>
            </button>

            <button onclick="OurVision()" class="ocr-expand">
                <div class="ocr-column">
                    <div class="ocr-card">
                        <div class="ocr-container C2">
                            <img id="ocr-2" src="Images/Pages Related Imgs/Our Vision.jpg" alt="Our Vision">

                            <h2>Our Vision <i class="fas fa-chevron-right"></i></h2>
                        </div>
                    </div>
                </div>
            </button>

            <button onclick="Achievements()" class="ocr-expand">
                <div class="ocr-column">
                    <div class="ocr-card">
                        <div class="ocr-container C3">
                            <img id="ocr-3" src="Images/Pages Related Imgs/Achievements.jpg" alt="Achievements">
                            <h2>Achievements <i class="fas fa-chevron-right"></i></h2>
                        </div>
                    </div>
                </div>
            </button>

            <div class="ocr-describtionsection" id="ocr-Aboutus">
                <div class="ocr-describtionbox">
                    <div class="ocr-row">
                        <div class="ocr-teamcolumn">
                            <div class="ocr-teamcard">
                                <img src="Images/Team/Ahmed.jpg" alt="Ahmed" style="width:100%">
                                <div class="ocr-teamcontainer">
                                    <h3>Ahmed Mohamed Kamal</h3>
                                    <p>Ahmed154989@bue.edu.eg</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ocr-row">
                        <div class="ocr-teamcolumn">
                            <div class="ocr-teamcard">
                                <img src="Images/Team/Rana.jpeg" alt="Rana" style="width:100%">
                                <div class="ocr-teamcontainer">
                                    <h3>Rana Ayman</h3>
                                    <p>Rana178545@bue.edu.eg</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ocr-row">
                        <div class="ocr-teamcolumn">
                            <div class="ocr-teamcard">
                                <img src="Images/Team/Youssef.jpeg" alt="Youssef" style="width:100%;">
                                <div class="ocr-teamcontainer">
                                    <h3>Youssef Khaled</h3>
                                    <p>Youssef178800@bue.edu.eg</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ocr-row">
                        <div class="ocr-teamcolumn">
                            <div class="ocr-teamcard">
                                <img src="Images/Team/Omar.jpeg" alt="Omar" style="width:100%">
                                <div class="ocr-teamcontainer">
                                    <h3>Omar Negm</h3>
                                    <p>Omar175970@bue.deu.eg</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ocr-describtionsection" id="ocr-Ourvision">
                <div class="ocr-describtionbox">
                    <h1>Our vision is to make cinema reservation easier for everybody. With our websites lunching you cinema seat is just one click awy from you and our goal is not just being a local website in one country but to be a service available in all countries around the globe. </h1>
                </div>
            </div>

            <div class="ocr-describtionsection" id="ocr-Achievments">
                <div class="ocr-describtionbox">
                    <h1>Our Achievements are successfuly developing a full website that is truly capable to reserve your cineam theater seat and know all the latest new about your favorite movies .. all of this is available only on our website.</h1>
                </div>
            </div>

        </div>
    </section>
    <!--    Footer made by Omar175970-->
    <?php include('Includes/Footer.php'); ?>
    <!--    Footer Ends Here-->





    <button onclick="topFunction()" id="RCR-topBtn" title="Go to top"><i class='fas fa-angle-double-up'></i></button>
    <script type="text/javascript" src="Includes/Scripts.js"></script>

    <script>
        var about = document.getElementById("ocr-Aboutus");
        var vision = document.getElementById("ocr-Ourvision");
        var achiev = document.getElementById("ocr-Achievments");

        function AboutTeam() {
            about.style.display = "block";
            vision.style.display = "none";
            achiev.style.display = "none";
        }

        function OurVision() {
            vision.style.display = "block";
            about.style.display = "none";
            achiev.style.display = "none";
        }

        function Achievements() {
            achiev.style.display = "block";
            about.style.display = "none";
            vision.style.display = "none";
        }

    </script>
</body>


</html>
