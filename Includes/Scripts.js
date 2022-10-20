// Top button function ... ccoded by Rana178545

var topbutton = document.getElementById("RCR-topBtn");


window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        topbutton.style.display = "block";
    } else {
        topbutton.style.display = "none";
    }
}


function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

//Movies btn function(Home page) ... Coded by ahmed154989

var soon = document.getElementById("ACR-SoonInTheater");
var NewMovies = document.getElementById("ACR-NewReleases");

function NewReleases() {
    NewMovies.style.display = "block";
    soon.style.display = "none";
}

function Soon() {
    soon.style.display = "block";
    NewMovies.style.display = "none";

}





//profile btn function(profile page) 

var del = document.getElementById("ACR-deleteuser");
var ins = document.getElementById("ACR-InsertMovie");
var up = document.getElementById("ACR-NewReleases");

function Delete() {
    del.style.display = "block";
    ins.style.display = "none";
    up.style.display = "none";
}

function Insert() {
    del.style.display = "none";
    ins.style.display = "block";
    up.style.display = "none";


}

function Update() {
    up.style.display = "block";
    del.style.display = "none";
    ins.style.display = "none";
}


//Cinema Data btn function(Home page) ... Coded by ahmed154989
var ThreeD = document.getElementById("ACR-3D");
var Imax = document.getElementById("ACR-Imax");
var Dbox = document.getElementById("ACR-D-Box");

function THREED() {
    ThreeD.style.display = "block";
    Imax.style.display = "none";
    Dbox.style.display = "none";
}

function IMAX() {
    Imax.style.display = "block";
    ThreeD.style.display = "none";
    Dbox.style.display = "none";
}

function DBOX() {
    Dbox.style.display = "block";
    ThreeD.style.display = "none";
    Imax.style.display = "none";
}


//Form Validation (Booking page) ... Coded by ahmed154989

var UserName = document.forms["ACR-BookingForm"]["Name"].value;
var Email = document.forms["ACR-BookingForm"]["Email"].value;
var Movie = document.forms["ACR-BookingForm"]["Movie"].value;

function nameValidation() {
    var Namepattern = /^A-Za-z/;

    if (Namepattern.test(UserName) == false) {
        alert("Plaese enter a valid name");
    }

}

function emailValidation() {

    var emailpattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;


    if (emailpattern.test(Email) == false) {
        alert("Plaese enter a valid email");
        document.getElementById("Error").innerHTML = "invalid Email formate";
    }
}

function movieValidation() {
    var moviepattern = /^a-zA-Z0-9\s/;

    if (moviepattern.test(Movie) == false) {
        alert("Plaese enter a valid movie name");
    }
}

//Required Fields
document.getElementById("ACR-Nameinput").setAttribute("required", "");

document.getElementById("ACR-Emailinput").setAttribute("required", "");

document.getElementById("ACR-Movieinput").setAttribute("required", "");

document.getElementById("ACR-Dateinput").setAttribute("required", "");

document.getElementById("ACR-TimeInput").setAttribute("required", "");
//Required Fields


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


$(document).ready(function () {
    $("#flip1").click(function () {
        $("#panel1").fadeToggle("slow");
    });
});
