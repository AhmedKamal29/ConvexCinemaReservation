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
        <div class="ycr-container" id="ycr-container">

            <div class="ycr-form-container ycr-signup-container">
                <form action="Sign Up.php" id="authForm" method="post">
                    <h1 class="ycr-h1">Create Account</h1>
                    <input type="text" placeholder="Name" name="name" required />
                    <input type="text" placeholder="Username" name="Username" required />
                    <input type="email" placeholder="Email" name="Email" required />
                    <input type="password" name="password" placeholder="Password" required />
                    <button type="submit" class="ycr-btn">Submit</button>
                </form>
            </div>
            <div class="ycr-form-container ycr-signin-container">
                <form action="Logging in.php" method="post">

                    <h1 class="ycr-h1">Sign in</h1>
                    <input type="text" name="Username" placeholder="Username" required />
                    <input type="password" name="password" placeholder="password" required />
                    <button class="ycr-btn">Log in</button>
                </form>
            </div>
            <div class="ycr-overlay-container">
                <div class="ycr-overlay">
                    <div class="ycr-overlay-panel ycr-overlay-left">
                        <h1 class="ycr-h1">Welcome Back</h1>
                        <p class="ycr-text">To see our content please login</p>
                        <button class="ycr-btn ycr-ghost" id="signin">Sign in</button>
                    </div>

                    <div class="ycr-overlay-panel ycr-overlay-right">

                        <h1 class="ycr-h1">Welcome to our website</h1>
                        <p class="ycr-text">Enter personal details to create account</p>
                        <button class="ycr-btn ycr-ghost" id="signup">Sign up</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    Footer made by Omar175970-->
    <?php include('Includes/Footer.php'); ?>
    <!--    Footer Ends Here-->
    <button onclick="topFunction()" id="RCR-topBtn" title="Go to top"><i class='fas fa-angle-double-up'></i></button>
    <script>
        const signUpButton = document.getElementById('signup');
        const signInButton = document.getElementById('signin');
        const container = document.getElementById('ycr-container');

        signUpButton.addEventListener('click', function() {
            container.classList.add("ycr-right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("ycr-right-panel-active");

        })

    </script>
    <script type="text/javascript" src="Includes/Scripts.js"></script>
</body>

</html>
