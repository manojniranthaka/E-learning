function formValidate() {

    var firstname = document.forms["RegForm"]["fname"].value;
    var lastname = document.forms["RegForm"]["lname"].value;
    var username = document.forms["RegForm"]["uname"].value;
    var password1 = document.forms["RegForm"]["password"].value;
    var password2 = document.forms["RegForm"]["cpassword"].value;

    if(alphabetic("First Name", firstname ))
        if( alphabetic("Last Name", lastname))
            if(alphaNumeric("Username", username))
                if (checkPassword("Password", password1, password2))
                    return true;
                else
                    return false;
            else
                return false;
        else
            return false;
    else
        return false;

}

function alphabetic(fieldName, textValue) {

    var exp = /^[a-zA-Z]+$/;

    if(textValue.match(exp))
    {
        return true;
    }
    else
    {
        alert("Enter only letters for "+ fieldName);
        return false;
    }
}

function alphaNumeric(fieldName, textValue){

    var exp = /[0-9]/;
    var exp2 = /[a-zA-Z]/;

    if(textValue.match(exp) != null && textValue.match(exp2) != null)
    {
        return true;
    }
    else
    {
        alert("Enter a combination of Letters and Numbers for "+ fieldName);
        return false;
    }
}

function checkPassword(fieldName, pass1, pass2) {

    if ( pass1.match(pass2) )
    {
        var length = pass1.length;
        if ( length >= 8 )
        {
            var exp1 = /[0-9]/;
            var exp2 = /[a-z]/;
            var exp3 = /[A-Z]/;
            var exp4 = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/
            if (( pass1.match(exp1) != null ) && ( pass1.match(exp2) != null ) && ( pass1.match(exp3) != null) && ( pass1.match(exp4) != null) )
            {
                return true;
            }
            else
            {
                alert("Your Password should Contain Combination of Uppercases, Lowercases, Digits, and Special Characters");
                return false;
            }
        }
        else
        {
            alert("Your Password should Contain at Least 8 Characters");
            return false;
        }
    }
    else
    {
        alert("Passwords You Entered does not Match");
        return false;
    }
}