<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<title>Contact Us</title>
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
                    <a href="aboutus.php"><button>About Us</button></a>
                </div>
                <div class="menuButton">
                    <a href="contactus.php"><button>Contact Us</button></a>
                </div>
            </div>
        </div>
    <head>
    <div id="main" >
    <div class = "address1">
    <form required ="on">
    <h1 style="color:#8888">DO YOU HAVE ANY ENQUIRES?</h1>
    <table class="enquires">
        <tr>
            <td><label for="fullname">Fullname:<span class="require">*</span></label></td>
            <td><input type="text" id="fullname" class="inputForm" name="fullname" placeholder="Enter your name" required></td>
        </tr>
        <tr>
            <td><label for="phone">Phone Number:<span class="require">*</span></label></td>
            <td><input type="tel" id="phone" class="inputForm" name="phone" pattern="(2|3|4|5|7|8){1}[0-9]{6}" maxlength='7' placeholder="Eg: 8888888" required></td>
        </tr>
        <tr>
            <td><label for="email">Email:<span class="require">*</span></label></td>
            <td><input type="email" id="email" class="inputForm" name="email" placeholder="Enter your Email" required></td>
        </tr>
        <tr>
            <td><label for='description'>Description</label><span class="require">*</span></td>
            <td><textarea rows="4" cols="50" id='description' class="inputForm" name='description' required></textarea></td>
        </tr>
    </table>
    <?php
        if(isset($_POST['submitFormContact'])) {
            if(isset($_POST['fullname']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['description'])) {
                $fullname = $_POST['fullname'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $description = $_POST['description'];
            }
        }
    ?>
    <div id="buttonForm">
        <input id="cancelButton" type="button" onclick="clearFields()" value="Clear">
        <input id="submitForm" type="button" onclick="submitContact()" value="Submit">
    </div>
    <div id="output"></div>
    </form>
    </div>
    </div>
    <div class="address2">
        <h1>Contact Us</h1>
        <p>
        <img id="addressImg" src="assets/location.png">
            <span id="addressTxt"> Library and Learning Centre
                    <br />
                    Politeknik Brunei
                    <br />
                    Block 2 Level 3
                    <br />
                    Ong Sum Ping Condominium
                    <br />
                    Jalan Ong Sum Ping
                    <br />
                    Bandar Seri Begawan BA1311
                    <br />
                    Brunei Darussalam
            </span>
            </p>
            <p>
            <img id="addressImg" src="assets/phone-call.png">
                <span id="addressTxt"> +6732234466 ext 210 & 306</span>
            </p>
            <p>
            <img id="addressImg" src="assets/mail.png">
                <span id="addressTxt">library@pb.edu.bn</span>
            </p>
            </div>
        </div>
    </div>
</body>
</html>
