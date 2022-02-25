<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Payment</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js"></script>
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
        <?php 
            if(isset($_POST['submit'])) {

                if(isset($_POST['fname']) && isset($_POST['email']) && isset($_POST['stuID']) ) {
                    $fullname = $_POST['fname'];
                    $theEmail = $_POST['email'];
                    $studentID = $_POST['stuID'];
                } else {
                    $fullname = "null";
                    $theEmail = "null";
                    $studentID = "null";
                }

                //one random letter
                //ref:[https://stackoverflow.com/a/31441519]
                $ranL = chr(rand(65,90));

                //random number for receipt
                $ranN = rand(10000, 99999);

                //for receipt email
                $subject = "Library Locker Management";
                $receiptID = $ranL.$ranL.$ranL.$ranN;
                $lockerID = rand(1, 30); //total no. of locker is 50
                $location = "Library";
                //---payment method here---
                $cashMsg = "Please show this receipt and pay the $20 deposit to the librarian before retrieving your locker key.";
                $onlineMsg = "Please show this recipe to the librarian before retrieving your locker key.";
                $thanks = "Thank you for using our service.";
                //ref:[https://www.w3schools.com/php/func_mail_mail.asp]

                if(isset($_POST['method'])) {

                    $payMethod = $_POST['method'];

                    if($payMethod=="Cash") {

                        //all message for cash
                        $forCashReceipt = $receiptID."\n".$lockerID."\n".$location."\n".$payMethod."\n".$cashMsg."\n".$thanks;
                        $forCashReceipt = wordwrap($forCashReceipt,70); //warp the words when more than 70 chars

                        //send email
                        mail($theEmail,$subject,$forCashReceipt);

                        echo '<script type="text/javascript">'; 
                        echo 'alert("You have successfully book a locker!\nAn email containing your receipt and locker ID has been sent to your inbox. Please show that receipt and pay the cash deposit to the librarian in order to retrieve your locker key.");';
                        echo 'window.location.href = "index.php";';
                        echo '</script>';
                        //ref:[https://stackoverflow.com/a/55648833]
                    }
                }

                function doneOnlinePay() {
                    //all message for online
                    $forOnlineReceipt = $receiptID."\n".$lockerID."\n".$location."\n".$payMethod."\n".$onlineMsg."\n".$thanks;
                    $forOnlineReceipt = wordwrap($forOnlineReceipt,70);
                    mail($theEmail,$subject,$forCashReceipt);

                    echo '<script type="text/javascript">'; 
                    echo 'alert("You have successfully book a locker!\nAn email containing your receipt and locker ID has been sent to your inbox. Please show that receipt to the librarian in order to retrieve your locker key.");';
                    echo 'window.location.href = "index.php";';
                    echo '</script>';
                }
            }
        ?>

        <div class="titleForm">
            <h1>Library Locker Management - Online Payment</h1>
        </div>
        <div id="wholePayment">
        <form method="post" action="payment.php" required="on">
            <div id="firstPay">
                <div class="fPay">
                    <h2 class="upText greyText">STUDENT DETAILS</h2>
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
                        <input id="submitForm" type="submit" name="submit" value="Pay Now" onclick="doneOnlinePay()">
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
