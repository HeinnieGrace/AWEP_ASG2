<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Payment</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                    <a href="aboutus.php"><button>About Us</button></a>
                </div>
                <div class="menuButton">
                    <a href="contactus.php"><button>Contact Us</button></a>
                </div>
            </div>
        </div>
    <head>
    <?php
        if(isset($_POST['submit'])) {

            //get user detsils
            if(isset($_POST['fname']) && isset($_POST['stuID']) ) {
                $fullname = $_POST['fname'];
                $studentID = $_POST['stuID'];
            } else {
                $fullname = "null";
                $studentID = "null";
            }

            //find payment method
            if(isset($_POST['method'])) {

                $payMethod = $_POST['method']; //Cash or Online

                if($payMethod=="Cash") {

                    //alert
                    echo '<script type="text/javascript">'; 
                    echo 'alert("You have successfully book a locker!\nThe next page is your receipt. Please download the receipt and bring it together with your $20 deposit to retrieve your locker key. ");';
                    echo '</script>';

                    //cash message
                    $receiptMsg = "Please download this receipt and bring it together with your $20 deposit to the librarian in order to retrieve your locker key.";

                } else if ($payMethod=="Online") {

                    //online message
                    $receiptMsg = "Please download this receipt and bring it to the librarian to retrieve your locker key.";
                }
            }

            //one random letter
            //ref:[https://stackoverflow.com/a/31441519]
            $ranL1 = chr(rand(65,90)); //1
            $ranL2 = chr(rand(65,90)); //2
            $ranL3 = chr(rand(65,90)); //3

            //random number for receipt
            $ranN = rand(10000, 99999);

            //random item from array
            // echo $items[array_rand($items)];
            //ref:[https://stackoverflow.com/a/4233416]
            $location = array("Library","Level 4","Level 5","Level 6","Level 7","Level 8","Level 9");

            //for receipt
            $receiptID = $ranL1.$ranL2.$ranL3.$ranN;
            $lockerID = rand(1, 30); //total no. of locker is 50
            $lockerLocation = $location[array_rand($location)];
        }
    ?>
    <div id="payment">
        <div id="theReceipt">
            <div class="titleForm">
                <h1>Library Locker Management - Receipt</h1>
            </div>
            <div id="divide">
                <div id="userReceipt">
                    <p class="userReceiptD"><b>LOCKER BOOKING RECEIPT</b></p>
                    <br>
                    <p class="userReceiptD">Full Name: <b><?php echo $fullname; ?></b></p>
                    <p class="userReceiptD">Student ID: <b style="text-transform:uppercase"><?php echo $studentID; ?></b></p>
                    <br>
                    <p class="userReceiptD">Receipt ID: <b><?php echo $receiptID; ?></b></p>
                    <p class="userReceiptD">Locker ID: <b><?php echo $lockerID; ?></b></p>
                    <p class="userReceiptD">Locker Location: <b><?php echo $lockerLocation; ?></b></p>
                    <p class="userReceiptD">Payment Method: <b><?php echo $payMethod; ?></b></p>
                    <br>
                    <p class="userReceiptD"><?php echo $receiptMsg; ?></p>
                    <p class="userReceiptD">Thank you for using our service.</p>
                    <br><br>
                    <p class="userReceiptD">(2022) AWEP21S2-GP2 - Library Locker Management</p>
                </div>
                <div id="downloadButton">
                    <div id="importantReceipt">
                        <p class="userReceiptD">This receipt will not be generated again. Please store this receipt well for booking evidence.</p>
                    </div>
                    <div id="dlButtons">
                        <button id="download" onclick="dlReceipt()">Download</button>
                        <a href="index.php"><input id="cancelButton" type="button" value="Home"></a>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div id="wholePayment">
            <div class="titleForm">
                <h1>Library Locker Management - Online Payment</h1>
            </div>
            <form required="on">
            <div id="firstPay">
                <div class="fPay">
                    <h2 class="upText greyText">STUDENT DETAILS</h2>
                    <p class="userDetails">Full Name: <b><?php echo $fullname; ?></b></p>
                    <p class="userDetails">Student ID: <b style="text-transform:uppercase"><?php echo $studentID; ?></b></p>
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
                        <input id="submitForm" type="button" name="submitPay" value="Pay Now" onclick="blockCashJS()">
                    </div>
                </div>
            </div>
            </form>
        </div> <!--end of online payment-->
        <?php 
                //when payment method is online
                function blockPayment() {
                    echo "<script>document.getElementById(\"theReceipt\").style.display = \"none\";</script>";
                    echo "<script>document.getElementById(\"wholePayment\").style.display = \"block\";</script>";
                    echo "<script>console.log(\"Online\");";  
                }

                //when payment method is cash OR go to receipt after paying
                function blockCash() {
                    echo "<script>document.getElementById(\"theReceipt\").style.display = \"block\";</script>";
                    echo "<script>document.getElementById(\"wholePayment\").style.display = \"none\";</script>";
                    echo "<script>console.log(\"Cash/Receipt\");";  
                }

            //find payment method
            if(isset($_POST['method'])) {

                $payMethod = $_POST['method']; //Cash or Online

                if($payMethod=="Cash") {

                    //if cash payment, display receipt
                    blockCash();

                } else if ($payMethod=="Online") {

                    //if online payment, display payment
                    blockPayment();

                }
            }
        ?>

    </div>
    
    <footer>
        <div id="footer">
            <p>© 2022 - AWEP21S2-GP2 - All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
