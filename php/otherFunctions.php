<?php

    //initial number
    $bookedLocker = 0;

    //if submit form
    if(!isset($_POST['submitForm'])) {
        $bookedLocker++; //increment by 1
    }

    //output number of booked locker
    echo "<p>$bookedlocker</p>";


?>

<?php
        if(isset($_POST['submitPay'])) {
            //all message for online
            $forOnlineReceipt = $receiptID."\n".$lockerID."\n".$location."\n".$payMethod."\n".$onlineMsg."\n".$thanks;
            $forOnlineReceipt = wordwrap($forOnlineReceipt,70);
            mail($theEmail,$subject,$forCashReceipt);

            echo '<script type="text/javascript">'; 
            echo 'alert("You have successfully book a locker!\nAn email containing your receipt and locker ID has been sent to your inbox. Please show that receipt to the librarian in order to retrieve your locker key.");';
            // echo 'window.location.href = "index.php";';
            echo '</script>';
        }
    ?>