function init() {
    document.getElementById("sampleForm").addEventListener("submit", checkForEmptyFields);    
}

window.addEventListener("load", init);

function checkForEmptyFields(e) {  

    checkEmail();
	
	var errorArea = document.getElementById("errors");
    errorArea.className = "hidden";

    var cssSelector = "input[type=text],input[type=password]";
    var fields = document.querySelectorAll(cssSelector);

    // loop thru the input elements looking for empty values
    var fieldList = [];

    for (i=0; i<fields.length; i++) {
        if (fields[i].value == null || fields[i].value == "") {
            // since a field is empty prevent the form submission
            e.preventDefault();
            fieldList.push(fields[i]);
        }
    }
    // now set up the error message
    var msg = "The following fields can't be empty: ";
    if (fieldList.length > 0) {
        for (i=0; i<fieldList.length; i++) {
            msg += fieldList[i].id + ",";
        }

 		errorArea.innerHTML = "<p>" + msg + "</p>";
        errorArea.className = "visible";    
	}

}

/*validate email */
function checkEmail() {
	var email = document.getElementById('email');
	var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
	if (!filter.test(email.value)) {
		alert('Please provide a valid email address');
		email.focus;
		return false;
	}
}