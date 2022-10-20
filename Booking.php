<!--this page is made by ahmed154989-->
<!DOCTYPE html>
<html>

<head>
    <?php define("TITLE", "Booking");?>
</head>

<!--    navigation header made by Rana178545 -->
<!--    Search bar made by ahmed154989 -->
<?php include('Includes/Header.php'); ?>
<!-- navigation code ends here -->


<body class="ACR-container">

    <section class="ACR-introbackground">
        <div class="ACR-Introtext">
            <p class="ACR-Booknow">Book Your Seat Now<br>
                <spna><i class="ACR-DownArrow fas fa-chevron-down"></i></spna>
            </p>
        </div>
    </section>


    <section class="ACR-bookingContainer">
        <form name="ACR-BookingForm" class="ACR-BookingForm" action="Bookseat.php" method="post" onsubmit="ValidateForm()">
            <section class="ACR-FormContainer">
                <div class="ACR-name">
                    <label for="Name">Name</label>
                    <br>
                    <input id="ACR-Nameinput" class="ACR-inputs" name="Name" autocomplete="name">
                </div>


                <div class="ACR-email">
                    <label for="Email">Email</label>
                    <br>
                    <input id="ACR-Emailinput" class="ACR-inputs" name="Email" autocomplete="email">
                </div>


                <div class="ACR-cinema">
                    <label for="Cinema">Cinema</label>
                    <br>
                    <select id="ACR-CinemaInput" class="ACR-inputs" name="Cinema">
                        <option value="Galaxy cinema Cairo Festival City">Galaxy cinema Cairo Festival City</option>
                        <option value="City Stars Cinema">City Stars Cinema</option>
                        <option value="Galaxy Cinema Mall of Arabia ">Galaxy Cinema Mall of Arabia </option>
                    </select>
                </div>


                <div class="ACR-movie">
                    <label for="Movie">Movie</label>
                    <br>
                    <input id="ACR-Movieinput" class="ACR-inputs" type="text" name="Movie">
                </div>


                <div class="ACR-date">
                    <label for="Date">Date</label>
                    <br>
                    <input id="ACR-Dateinput" class="ACR-inputs" type="date">
                </div>

                <div class="ACR-time">
                    <label for="Time">Time</label>
                    <br>
                    <input id="ACR-TimeInput" class="ACR-inputs" type="time">
                </div>


                <div class="ACR-seattype">
                    <label for="Name">Seat Type</label>
                    <br>
                    <select id="ACR-SeatType" class="ACR-inputs" name="Seat type">
                        <option value="Normal">Normal</option>
                        <option value="VIP">VIP</option>
                        <option value="D-box">D-Box</option>
                    </select>
                </div>
            </section>

            <!-------------------------------dont edit------------------------------>
            <!--
            ------------------------------------------------
            ------------------------------------------------
            ------------------------------------------------
-->



            <section class="ACR-SBcontainer">

                <!-- seat availabilty list -->
                <ul class="ACR-AVSeats">
                    <li class="ACR-SelectedSeat ACR-List"> <i class="fas fa-volume-off ACR-AVSI"></i>Selected Seat</li>

                    <li class="ACR-ReservedSeat ACR-List"><i class="fas fa-volume-off ACR-AVSI"></i>Reserved Seat</li>

                    <li class="ACR-EmptySeat ACR-List"><i class="fas fa-volume-off ACR-AVSI"></i>Empty Seat</li>
                </ul>
                <!-- seat availabilty list -->

                <div>
                    <table class="ACR-SeatTable">
                        <tr>
                            <td></td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td></td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td class="ACR-RowLetter">A</td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="A1"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="A2"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="A3"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="A4"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="A5"></i></button>
                            </td>
                            <td class="ACR-SeatGapV"></td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="A6"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="A7"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="A8"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="A9"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="A10"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="A11"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="A12"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td class="ACR-RowLetter">B</td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="B1"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="B2"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="B3"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="B4"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="B5"></i></button>
                            </td>
                            <td></td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="B6"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="B7"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="B8"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="B9"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="B10"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="B11"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="B12"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td class="ACR-RowLetter">C</td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="C1"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="C2"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="C3"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="C4"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="C5"></i></button>
                            </td>
                            <td></td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="C6"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="C7"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="C8"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="C9"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="C10"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="C11"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="C12"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td class="ACR-RowLetter">D</td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="D1"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="D2"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="D3"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="D4"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="D5"></i></button>
                            </td>
                            <td></td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="D6"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="D7"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="D8"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="D9"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="D10"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="D11"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="D12"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td class="ACR-RowLetter">E</td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="E1"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="E2"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="E3"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="E4"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="E5"></i></button>
                            </td>
                            <td></td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="E6"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-ReservedSeatt" title="E7"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="E8"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-ReservedSeatt" title="E9"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-ReservedSeatt" title="E10"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="E11"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="E12"></i></button>
                            </td>
                        </tr>

                        <tr class="ACR-SeatGapH"></tr>

                        <tr>
                            <td class="ACR-RowLetter">F</td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="F1"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="F2"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-ReservedSeatt" title="F3"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="F4"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="F5"></i></button>
                            </td>
                            <td></td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="F6"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="F7"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="F8"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="F9"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="F10"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="F11"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="F12"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td class="ACR-RowLetter">G</td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-ReservedSeatt" title="G1"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-ReservedSeatt" title="G2"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-ReservedSeatt" title="G3"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="G4"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="G5"></i></button>
                            </td>
                            <td></td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="G6"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-ReservedSeatt" title="G7"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="G8"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="G9"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="G10"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="G11"></i></button>
                            </td>
                            <td>
                                <button onclick="SelectSeat()" class="ACR-Seatsbtn"><i id="ACR-Seatsicon" class="fas fa-volume-off ACR-Seatsicon ACR-ReservedSeatt" title="G12"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td class="ACR-RowLetter">H</td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="H1"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="H2"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="H3"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="H4"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="A12"></i></button>
                            </td>
                            <td></td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="H6"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="H7"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="H8"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="H9"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="H10"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="H11"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="H12"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td class="ACR-RowLetter">I</td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="I1"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="I2"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="I3"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="I4"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="I5"></i></button>
                            </td>
                            <td></td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="I6"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="I7"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="I8"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="I9"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="I10"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="I11"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="I12"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td class="ACR-RowLetter">J</td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="J1"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="J2"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="J3"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="J4"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="J5"></i></button>
                            </td>
                            <td></td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="J6"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="J7"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="J8"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="J9"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="J10"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="J11"></i></button>
                            </td>
                            <td>
                                <button class="ACR-Seatsbtn"><i class="fas fa-volume-off ACR-Seatsicon ACR-EmptySeatt" title="J12"></i></button>
                            </td>
                        </tr>
                    </table>
                    <div class="ACR-Screen">
                        <h2>Screen this way</h2>
                    </div>

                </div>
                <div class="Submitbtn">
                    <button onclick="nameValidation() emailValidation() movieValidation()" type="submit" id="ACR-Submit" class="ACR-button" value="Submit">Submit</button>
                </div>
            </section>

            <br>
            <br>
            <br>
            <br>

        </form>
    </section>
    <!--    Footer made by Omar175970-->
    <?php include('Includes/Footer.php'); ?>
    <!--    Footer Ends Here-->
    <button onclick="topFunction()" id="RCR-topBtn" title="Go to top"><i class='fas fa-angle-double-up'></i></button>
    <script type="text/javascript" src="Includes/Scripts.js"></script>
</body>

</html>
