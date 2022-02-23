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