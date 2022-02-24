<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Payment</title>
    <link rel="stylesheet" href="css/index.css">
    <!-- <script src="js/index.js"></script> -->
    <style>
        iframe {
            display: none;
        }
    </style>
</head>
<body>
    <head>
        <div id="menu">
            <div id="logo">
                <p>POLITEKNIK BRUNEI</p>
            </div>
            <div id="allButtons">
                <div class="menuButton">
                    <a href="index.php"><button onclick="backToHome()">Home</button></a>
                </div>
                <div class="menuButton">
                    <a href="index.php#toRules"><button onclick="backToHome()">Rules</button></a>
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
        <form method="post" action="" required="on" target="frame">
            <div id="firstPay">
                <div class="fPay">
                    <h2 class="upText greyText">STUDENT DETAILS</h2>
                    <?php 
                        if(isset($_POST['fname']) && isset($_POST['email'])) {
                            $fullname = $_POST['fname'];
                            $theEmail = $_POST['email'];
                        } else {
                            $fullname = "null";
                            $theEmail = "null";
                        }
                    ?>
                    <p class="userDetails">Full Name: <b><?php echo $fullname; ?></b></p>
                    <p class="userDetails">Email: <b><?php echo $theEmail; ?></b></p>
                </div>
                <div class="fPay">
                    <h2 class="upText greyText">Card information</h2>
                    <div>
                        <label for="cardNo">Card No.<span class="require">*</span></label><br>
                        <input id="cardNo" class="inputForm longInput" type="tel" inputmode="numeric" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" maxlength="19" placeholder="0000-0000-0000-0000" required>
                    </div>
                        <label for="exMonth">Expiration date<span class="require">*</span></label><br>
                        <input id="exMonth" class="inputForm shortInput" type="tel" inputmode="numeric" maxlength="2" placeholder="Month" required>
                        <input id="exYear" class="inputForm shortInput" type="tel" inputmode="numeric" maxlength="2" placeholder="Year" required>
                    <div>
                        <label for="scrtNo">Security No.<span class="require">*</span></label><br>
                        <input id="scrtNo" class="inputForm shortInput" type="tel" inputmode="numeric" maxlength="3" placeholder="CVV" required>
                    </div>
                </div>
            </div>
            <div id="secPay">
                <div id="paymentType">
                    <h2 class="upText greyText">Card information</h2>
                    <div id="lastPay">
                        <label>Payment amount: <b>$20</b></label>
                    </div>
                    <div id="buttonForm">
                        <a href="index.php"><input id="cancelButton" type="button" value="Cancel"></a>
                        <input id="submitForm" type="submit" name="submit" value="Pay Now">
                        
                        <?php
                            if(isset($_POST['submit'])) {
                                echo "<script>alert('You have successfully book a locker!');</script>";
                                header("index.php");
                            }
                        ?>
                    </div>
                </div>
            </div>
        </form>
        
        </div>
        <iframe name="frame"></iframe><!-- ref:[https://stackoverflow.com/a/10382461] -->
    </div>
    
    <footer>
        <div id="footer">
            <p>© 2022 - AWEP21S2-GP2 - All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
