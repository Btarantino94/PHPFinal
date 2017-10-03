
function myForm(){
	event.preventDefault();
	console.log("myForm activated");
	//i made a function for my form on the contact page to validate weather of not the person has properly filled out the form section correctly.
	//each if statement is for each form section to see weather or not the form is true of false.
	var valid = true;
	
	if (document.getElementById("fname").value == "" || null){
	alert("Please enter your first name");
	valid = false;
	console.log("failed fname");
	}

	if (document.getElementById("lname").value == "" || null){
	alert("Please enter your last name");
	valid = false;
	console.log("failed lname");
	}

	if (document.getElementById("num").value == "" || null){
	alert("Please enter your phone number");
	valid = false;
	console.log("failed num");
	}

	if (document.getElementById("mail").value == "" || null){
	alert("Please enter your email");
	valid = false;
	console.log("failed mail");
	}

	if (document.getElementById("comment").value == "" || null){
	alert("Please enter your questions or comments");
	valid = false;
	console.log("failed comment");
	}
	
	return valid;

	console.log("form success");
}
  
myForm(); //called my function.
//form js ends

