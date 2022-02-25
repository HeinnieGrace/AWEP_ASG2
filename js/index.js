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

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}

//clear the contact us fields
function clearFields() {
    document.getElementById("fullname").value=""
    document.getElementById("phone").value=""
    document.getElementById("phone").value=""
    document.getElementById("description").value=""
}
//validate contact us
var submitForm = document.getElementById("submitForm");
	
	submitForm.addEventListener("click", function(){

		checkfield();
	});

	var fullname = document.getElementById("fullname");
	var phone = document.getElementById("phone");
	var fullname= document.getElementById("fullname");
    var email = document.getElementById("email");
    var description = document.getElementById("description");

	fullname.addEventListener("keyup", function(){
		checkInput(this.value,0);
	});
	phone.addEventListener("keyup", function(){
		checkInput(this.value,1);
	});
	fullname.addEventListener("keyup", function(){
		checkInput(this.value,2);
	});
    email.addEventListener("keyup", function(){
		checkInput(this.value,3);
	});
    description.addEventListener("keyup", function(){
		checkInput(this.value,4);
	});


function checkfield(){

		var userinput = document.getElementsByTagfullname("input");
		var error = document.getElementsByTagfullname("span");
		var output = document.getElementById("output");

		output.innerHTML="";

		for (var i = 0; i < userinput.length; i++){
			if(!userinput[i].value){
				error[i].style.visibility="visible";
			}
			else{
				error[i].style.visibility="hidden";
			}

			output.innerHTML = output.innerHTML + (userinput[i].value? userinput[i].value + "<br>": "");
		}
}
