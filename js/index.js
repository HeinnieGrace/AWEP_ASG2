//hide homepage, show form 
//ref:[https://www.javascripttutorial.net/dom/events/add-an-event-handler/]
//ref:[https://www.w3schools.com/howto/howto_js_toggle_hide_show.asp]
// var mainDiv = document.getElementById("main");
// var formDiv = document.getElementById("forForm");
function bookALocker() {
    document.getElementById("main").style.display = "none";
    document.getElementById("forForm").style.display = "block";
    console.log("Form");
}

//hide form, show homepage
function backToHome() {
    document.getElementById("main").style.display = "block";
    document.getElementById("forForm").style.display = "none";
    console.log("Home");
}

//when payment method is cash OR go to receipt after paying
function blockCashJS() {
    alert("You have successfully book a locker!\nThe next page is your receipt. Please download the receipt and bring it together with your $10 deposit to retrieve your locker key. ");
    document.getElementById("theReceipt").style.display = "block";
    document.getElementById("wholePayment").style.display = "none";
    console.log("Cash/Receipt");  
}
//clear the contact us fields
function clearFields() {
    document.getElementById("fullname").value=""
    document.getElementById("phone").value=""
    document.getElementById("email").value=""
    document.getElementById("description").value=""
}
//when submit on ContactUs
function submitContact() {
	alert("Thank you for contacting us. We will respond to you soon.");
    clearFields();
}
