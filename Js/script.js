function autoSlide()
{
	var counter = 2;
	setInterval(function autoSlide(){
		document.getElementById("radio" + counter).checked = true;
		counter++;
		if(counter > 4)
		{
			counter = 1;
		}

	},4500);
}

autoSlide();

function enableButton() {
    var username = document.getElementById("uname").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var repassword = document.getElementById("repassword").value;
    var submitButton = document.getElementById("sub");

    // Validate username
    if (username.length < 3) {
        alert("Username must be at least 3 characters long.");
        submitButton.disabled = true;
        return;
    }

    // Validate email
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Invalid email format.");
        submitButton.disabled = true;
        return;
    }

    // Validate password
    if (password.length < 8 || password !== repassword) {
        alert("Password must be at least 8 characters long and match the re-entered password.");
        submitButton.disabled = true;
        return;
    }

    // All fields are valid, enable the submit button
    submitButton.disabled = false;
}


/*
// script.js
function enableButton() 
{
    if (document.getElementById("checkbox").checked) 
	{
        document.getElementById("subBtn").disabled = false;
    } else 
	{
        document.getElementById("subBtn").disabled = true;
    }


	
}
*

/*faq script*/
function faqanswer(id) {
    var answer = document.getElementById(id);
    answer.classList.toggle("show");
  }


