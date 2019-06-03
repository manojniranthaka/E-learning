function alphabeticFname() {

    var textValue = document.forms["RegForm"]["fname"].value;

    var exp = /^[a-zA-Z]+$/;

    if(textValue.match(exp))
    {
        document.getElementById('efname').innerHTML = "";
        return true;
    }
    else
    {
        document.getElementById('efname').innerHTML = "<i>*Enter only letters</i>";
        return false;
    }
}

function alphabeticLname() {

    var textValue = document.forms["RegForm"]["lname"].value;

    var exp = /^[a-zA-Z]+$/;

    if(textValue.match(exp))
    {
        document.getElementById('elname').innerHTML = "";
        return true;
    }
    else
    {
        document.getElementById('elname').innerHTML = "<i>*Enter only letters</i>";
        return false;
    }
}

function alphaNumericUser(){

    var textValue = document.forms["RegForm"]["uname"].value;

    var exp = /[0-9]/;
    var exp2 = /[a-zA-Z]/;

    if(textValue.match(exp) != null && textValue.match(exp2) != null)
    {
        document.getElementById('euname').innerHTML = "";
        return true;
    }
    else
    {
        document.getElementById('euname').innerHTML = "<i>*Enter a combination of Letters and Numbers</i>";
        return false;
    }
}

function checkPassword() {

    var pass = document.forms["RegForm"]["password"].value;


        var length = pass.length;
        if ( length >= 8 )
        {
            var exp1 = /[0-9]/;
            var exp2 = /[a-z]/;
            var exp3 = /[A-Z]/;
            var exp4 = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/
            if (( pass.match(exp1) != null ) && ( pass.match(exp2) != null ) && ( pass.match(exp3) != null) && ( pass.match(exp4) != null) )
            {
                document.getElementById('password').innerHTML = "";
                return true;
            }
            else
            {
                document.getElementById('password').innerHTML = "<i>*Enter a Combination of Uppercases, Lowercases, Digits, and Special Characters</i>";
                return false;
            }
        }
        else
        {
            document.getElementById('password').innerHTML = "<i>*Password should Contain at Least 8 Characters</i>";
            return false;
        }
}

function checkcPassword() {

    var pass = document.forms["RegForm"]["cpassword"].value;


    var length = pass.length;
    if ( length >= 8 )
    {
        var exp1 = /[0-9]/;
        var exp2 = /[a-z]/;
        var exp3 = /[A-Z]/;
        var exp4 = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/
        if (( pass.match(exp1) != null ) && ( pass.match(exp2) != null ) && ( pass.match(exp3) != null) && ( pass.match(exp4) != null) )
        {
            document.getElementById('cpassword').innerHTML = "";
            return true;
        }
        else
        {
            document.getElementById('cpassword').innerHTML = "<i>*Enter Combination of Uppercases, Lowercases, Digits, and Special Characters</i>";
            return false;
        }
    }
    else
    {
        document.getElementById('cpassword').innerHTML = "<i>*Password should Contain at Least 8 Characters</i>";
        return false;
    }
}