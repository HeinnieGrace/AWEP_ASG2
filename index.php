<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js"></script>
    <style>
        #main {
            display: block;
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
    <div id="main">
        <div id="homepage">
            <h2 class="upText greyText">Library Locker Management</h2>
            <div id="topHome">
                <div id="slogan">
                    <div id="bookTitle">
                        <p class="first">BOOK YOUR</p><p class="second">LOCKER</p><p class="first">NOW!</p>
                    </div>
                    <div id="littleSlogan">
                        <p>Why bring a lot of stuff everyday when you can keep it at school.</p>
                    </div>
                    <button onclick="bookALocker()">Book a Locker</button>
                </div>
                <div id="locker">
                    <div id="outside">
                        <div class="inside lock">
                            <img src="assets/unlock.png">
                            <p>00</p>
                        </div>
                        <div class="inside lock">
                            <img src="assets/locked.png">
                            <p>00</p>
                        </div>
                        <div class="inside line">
                            <img src="assets/lines.png">
                        </div>
                        <div class="inside line">
                            <img src="assets/lines.png">
                        </div>
                    </div>
                </div>
            </div>
            <div id="arrow">
                <div>
                    <img src="assets/arrow.png">
                    <p id="toRules" class="greyText">Terms and conditions</p>
                </div>
            </div>
            <div id="stepsRules">
                <p id="ruleTitle" class="first">The Steps & Rules</p>
                <div id="rules">
                    <div class="allRules">
                        <div>
                            <p><u>One</u> student can only borrow <u>one</u> locker.</p>
                        </div>
                        <div>
                            <p>Once the payment has successfully made, the receipt and a <u>random locker ID</u> that is currently available will be sent to the email given by the student.</p>
                        </div>
                        <div>
                            <p><u>No vandalism</u> such as applying paint or damaging any part of the locker is allowed.</p>
                        </div>
                        <div>
                            <p>Losing a locker key must be immediately reported and will result in student to lose their $20 deposit to cover the maintenance costs.</p>
                        </div>
                    </div>
                    <div class="allRules">
                        <div>
                            <p>A <u>deposit of $20</u> is needed to borrow a locker, and it will be given back to the student upon ending this subcription.</p>
                        </div>
                        <div>
                            <p>To retrieve the key to the locker, student must go to the library counter and show the receipt as evidence.</p>
                        </div>
                        <div>
                            <p>There’s is <u>no time limit</u> when borrowing a locker. However, student must end their subcription before they finished their studies in Politeknik Brunei, else, they will not be given back their $20 deposits.</p>
                        </div>
                    </div>
                </div>
                <div id="bottomButton">
                    <a href="forForm"><button onclick="bookALocker()">Book a Locker</button></a>
                </div>
            </div>
           <?php

            // for ($i=0; $i<100; $i++) {
            //     echo "<p>Hello world</p> ";
            // }

           ?>
        </div>
    </div>
    <div id="forForm">
<!--         <p>hello world</p> -->
        <div class="titleForm">
            <h1>Library Locker Management - Submission form</h1>
        </div>
        <div class="stuDetail">
            <h2 class="upText greyText">STUDENT DETAILS</h2>
            <table>
                <tr>
                    <td>Full Name</td>
                    <td><input type="text" id="name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" id="email"></td>
                </tr>
                <tr>
                    <td>Student ID</td>
                    <td><input type="text" id="stuID" maxlength="9" style='text-transform:uppercase'></td>
                </tr>
                <tr>
                    <td>IC No.</td>
                    <td><input type="ic" id="icNum" maxlength="8"></td>
                </tr>
                <tr>
                    <td>Phone No.</td>
                    <td><input type="phone" id="mobile" maxlength="7" pattern="[0-9]{4}-[0-9]{3}"></td>
                </tr>
            </table>
        </div>
    </div>

    <footer>
        <div id="footer">
            <p>© 2022 - AWEP21S2-GP2 - All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
