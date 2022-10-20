<!--this page is made by ahmed154989-->
<!DOCTYPE html>
<html>

<head>
    <?php define("TITLE", "Convex");?>
</head>

<!--    navigation header made by Rana178545 -->
<!--    Search bar made by ahmed154989 -->
<?php include('Includes/Header.php'); ?>
<!-- navigation code ends here -->

<body class="ACR-container">



    <section class="ACR-introImage">
        <div class="ACR-Introtext">

            <img src="Images/Logo/Logo%20(Dark%20O).png" class="ACR-introLogo">
            <p class="ACR-websiteSlogan">Your best destination for a perfect movie reservation</p>
        </div>
    </section>

    <section class="ACR-Content">
        <section class="ACR-Movies">
            <div id="ACR-Sectionheading">
                <p id="ACR-title">Movies</p>
                <p id="ACR-Subtitle">Select the movie you want to view</p>
                <button onclick="Soon()" class="ACR-listbtn">Soon In Theater</button>
                <button onclick="NewReleases()" class="ACR-listbtn">New Releases</button>
            </div>

            <div class="ACR-NewReleases" id="ACR-NewReleases">
                <div class="ACR-MovieBox">
                    <img src="Images/Movies/Bad%20Boys%20for%20Life%20.jpg" alt="Bad Boys For Life" class="ACR-Poster">
                    <div class="ACR-Overlay">
                        <div class="ACR-MovieReview">
                            <i class="fas fa-star ACR-rateStar"></i>
                            <p>7.1/10</p>
                            <p>Bad Boys For Life</p>
                            <a href="Booking.php" class="ACR-bookbtn">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="ACR-MovieBox">
                    <img src="Images/Movies/DoLittle.jpg" alt="Dolittle" class="ACR-Poster">
                    <div class="ACR-Overlay">
                        <div class="ACR-MovieReview">
                            <i class="fas fa-star ACR-rateStar"></i>
                            <p>5.5/10</p>
                            <p>Dolittle</p>
                            <a href="Booking.php" class="ACR-bookbtn">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="ACR-MovieBox">
                    <img src="Images/Movies/Birds%20of%20Prey.jpg" alt="Birds Of Prey" class="ACR-Poster">
                    <div class="ACR-Overlay">
                        <div class="ACR-MovieReview">
                            <i class="fas fa-star ACR-rateStar"></i>
                            <p>6.3/10</p>
                            <p>Birds of Prey</p>
                            <a href="Booking.php" class="ACR-bookbtn">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="ACR-MovieBox">
                    <img src="Images/Movies/Spies%20in%20disguise.jpg" alt="Spies In Disguise" class="ACR-Poster">
                    <div class="ACR-Overlay">
                        <div class="ACR-MovieReview">
                            <i class="fas fa-star ACR-rateStar"></i>
                            <p>6.8/10</p>
                            <p>Spies In Disguise</p>
                            <a href="Booking.php" class="ACR-bookbtn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!--        New releases section ends here -->


            <!--        coming soon section begins here -->
            <div class="ACR-SoonInTheater" id="ACR-SoonInTheater">
                <div class="ACR-MovieBox">
                    <img src="Images/Movies/No%20time%20to%20die.jpg" alt="No Time To die" class="ACR-Poster">
                    <div class="ACR-Overlay">
                        <div class="ACR-MovieReview">
                            <i class="fas fa-star ACR-rateStar"></i>
                            <p>-/10</p>
                            <p>No time to die</p>
                            <a href="Booking.php" class="ACR-bookbtn">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="ACR-MovieBox">
                    <img src="Images/Movies/Top%20Gun.jpg" alt="Top Gun: Maverick" class="ACR-Poster">
                    <div class="ACR-Overlay">
                        <div class="ACR-MovieReview">
                            <i class="fas fa-star ACR-rateStar"></i>
                            <p>-/10</p>
                            <p>Top Gun: Maverick</p>
                            <a href="Booking.php" class="ACR-bookbtn">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="ACR-MovieBox">
                    <img src="Images/Movies/Black%20Widow.jpg" alt="Black Widow" class="ACR-Poster">
                    <div class="ACR-Overlay">
                        <div class="ACR-MovieReview">
                            <i class="fas fa-star ACR-rateStar"></i>
                            <p>-/10</p>
                            <p>Black Widow</p>
                            <a href="Booking.php" class="ACR-bookbtn">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="ACR-MovieBox">
                    <img src="Images/Movies/SpongeBob.jpg" alt="Spongebob Movie:Sponge On The Run" class="ACR-Poster">
                    <div class="ACR-Overlay">
                        <div class="ACR-MovieReview">
                            <i class="fas fa-star ACR-rateStar"></i>
                            <p>-/10</p>
                            <p>Spongebob Movie:Sponge On The Run</p>
                            <a href="Booking.php" class="ACR-bookbtn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


        </section>
        <section class="ACR-Cinemas">
            <div id="ACR-Sectionheading">
                <p id="ACR-title">Theater</p>
                <p id="ACR-Subtitle">More fun, More Everything</p>
                <button onclick="THREED()" class="ACR-listbtn">3D</button>
                <button onclick="IMAX()" class="ACR-listbtn">IMAX</button>
                <button onclick="DBOX()" class="ACR-listbtn">D-Box</button>
            </div>


            <div class="ACR-D-Box" id="ACR-D-Box">
                <img src="Images/Cinemas/Dbox.jpg" alt="DBox Theater" class="ACR-Cinemaimg">
                <div>
                    <p class="ACR-CinemaDescritpion">D-Box Theater is an advanced 3D Theater equped with special chairs that makes the experiance of the movie exceeds your imagination by moving and simulating what happens inside the move for the best experiance.<br><br> <span class="ACR-Cinemalocation"><i class="fas fa-map-marker-alt ACR-LocationIcon"></i>Avilable At: City Stars Cinema</span><br><br>
                        <a href="#" class="ACR-ViewMore">View Movies</a></p>
                </div>
            </div>

            <div class="ACR-3D" id="ACR-3D">
                <img src="Images/Cinemas/3D.jpg" alt="3D Theater" class="ACR-Cinemaimg" style="width: 500px; height: 300px;">
                <div>
                    <p class="ACR-CinemaDescritpion">3D showing is an advanced type of movie screening that allow thw audiance to see the movie in an interactive way. Every person in the theater should be equiped with a speical pair of glassess in order to have the best experiance in the 3D theater.<br><br><span class="ACR-Cinemalocation"><i class="fas fa-map-marker-alt ACR-LocationIcon"></i>Avilable At: Galaxy Cinema CFC</span><br><br>
                        <a href="#" class="ACR-ViewMore">View Movies</a></p>

                </div>
            </div>


            <div class="ACR-Imax" id="ACR-Imax">
                <img src="Images/Cinemas/Imax.jpeg" alt="IMax Theater" class="ACR-Cinemaimg" style="width: 500px; height: 300px;">
                <div>
                    <p class="ACR-CinemaDescritpion">IMAX are special theaters equiped with a high resolution screen that grantes the audiance an advanced resoultion and a better experiance to enjoy a movie. <br><br> <span class="ACR-Cinemalocation"><i class="fas fa-map-marker-alt ACR-LocationIcon"></i>Avilable At: Point 90</span><br><br>
                        <a href="#" class="ACR-ViewMore">View Movies</a></p>
                </div>
            </div>

            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


        </section>

        <section class="ACR-Signup">
            <h2 id="ACR-Signtitle">Sign up Now</h2>
            <p id="ACR-SigntitleP">And Enjoy your Movie</p>
            <a href="Login.php" class="ACR-SignUpbtn">Sign Up</a>
        </section>
    </section>

    <!--    Footer made by Omar175970-->
    <?php include('Includes/Footer.php'); ?>
    <!--    Footer Ends Here-->

    <button onclick="topFunction()" id="RCR-topBtn" title="Go to top"><i class='fas fa-angle-double-up'></i></button>
    <script type="text/javascript" src="Includes/Scripts.js"></script>
</body>

</html>
