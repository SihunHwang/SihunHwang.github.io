var password = 'youfoundit';

var submitButton = document.getElementById("submit"); 

submitButton.addEventListener("click", function() {
    var enteredPassword = document.getElementById("password").value;
    if (enteredPassword === password){
        document.getElementsByClassName("hidden").style.display = "block"
    }
});