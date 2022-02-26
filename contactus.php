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
    <div id="main"> 
        <form>
            <h1 style="color:#8888">DO YOU HAVE ANY ENQUIRES?</h1>
            <table class="enquires">
                <tr>
                    <td><label for="fullname">Fullname:<span class="require">*</span></label></td>
                    <td><input type="text" id="fullname" class="inputForm" name="fullname" placeholder="Enter your name"><span class='msg' id='name-error'></span></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone Number:<span class="require">*</span></label></td>
                    <td><input type="tel" id="phone" class="inputForm" name="phone" pattern="(2|3|4|5|7|8){1}[0-9]{6}" maxlength='7' placeholder="Eg: 8888888"><span class='msg' id='phone-error'></span></td>
                </tr>
                <tr>
                    <td><label for="email">Email:<span class="require">*</span></label></td>
                    <td><input type="email" id="email" class="inputForm" name="email" placeholder="Enter your Email"><span class='msg' id='email-error'></span></td>
                </tr>
                <tr>
                    <td><label for='description'>Description</label><span class="require">*</span></td>
                    <td><textarea rows="10" cols="100" id='description' class="inputForm" name='description'></textarea><span class='msg' id='description-error'></span></td>
                </tr>
            </table>
            <div id="buttonForm">
                <input id="cancelButton" type="button" onclick="clearFields()" value="Clear">
                <input id="submitform" type="button" onclick="submitIt()" value="Submit"><span class='msg' id='submit-error'></span>
            </div>
            <div id="output"></div>
        </form>
    </div>
    <div>
        
    </div>
</body>
</html>