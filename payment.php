<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Payment</title>
    <link rel="stylesheet" href="css/index.css">
    <!-- <script src="js/index.js"></script> -->
</head>
<body>
    <head>
        <div id="menu">
            <div id="logo">
                <p>POLITEKNIK BRUNEI</p>
            </div>
            <div id="allButtons">
                <div class="menuButton">
                    <a href="#"><button onclick="backToHome()">Home</button></a>
                </div>
                <div class="menuButton">
                    <a href="#toRules"><button onclick="backToHome()">Rules</button></a>
                </div>
                <div class="menuButton">
                    <a href="#"><button>About Us</button></a>
                </div>
                <div class="menuButton">
                    <a href="#"><button>Contact Us</button></a>
                </div>
            </div>
        </div>
    <head>
    <div id="payment">
        <div class="titleForm">
            <h1>Library Locker Management - Online Payment</h1>
        </div>
        <div id="wholePayment">
            <div id="firstPay">
                <div class="fPay">
                    <h2 class="upText greyText">STUDENT DETAILS</h2>
                    <?php 
                        if(isset($_POST['fname']) && isset($_POST['email'])) {
                            $fullname = "Full Name: ".$_POST['fname'];
                            $theEmail = "Email: ".$_POST['email'];
                        } else {
                            echo "null";
                        }
                        echo "<p>".$fullname."</p>";
                        echo "<p>".$theEmail."</p>"; 
                    ?>
                </div>
                <div class="fPay">
                    <h2 class="upText greyText">Card information</h2>

                </div>
            </div>
            <div id="secPay">

            </div>
        </div>
    </div>
    
    <footer>
        <div id="footer">
            <p>© 2022 - AWEP21S2-GP2 - All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>