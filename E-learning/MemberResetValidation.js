function formPassValidate() {

    var password1 = document.forms["resetPass"]["npass1"].value;
    var password2 = document.forms["resetPass"]["npass2"].value;

    if (checkPasswords(password1, password2))
        return true;
    else
        return false;
}

function checkPasswords(pass1, pass2) {

    if ( pass1 === pass2 )
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
        alert("Passwords You entered does not Match");
        return false;
    }
}

function checkPassword1() {

    var pass = document.forms["resetPass"]["npass1"].value;


    var length = pass.length;
    if ( length >= 8 )
    {
        var exp1 = /[0-9]/;
        var exp2 = /[a-z]/;
        var exp3 = /[A-Z]/;
        var exp4 = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        if (( pass.match(exp1) != null ) && ( pass.match(exp2) != null ) && ( pass.match(exp3) != null) && ( pass.match(exp4) != null) )
        {
            document.getElementById('enpass1').innerHTML = "";
            return true;
        }
        else
        {
            document.getElementById('enpass1').innerHTML = "<i>*Enter a Combination of Uppercases, Lowercases, Digits, and Special Characters</i>";
            return false;
        }
    }
    else
    {
        document.getElementById('enpass1').innerHTML = "<i>*Password should Contain at Least 8 Characters</i>";
        return false;
    }
}

function checkPassword2() {

    var pass = document.forms["resetPass"]["npass2"].value;


    var length = pass.length;
    if ( length >= 8 )
    {
        var exp1 = /[0-9]/;
        var exp2 = /[a-z]/;
        var exp3 = /[A-Z]/;
        var exp4 = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        if (( pass.match(exp1) != null ) && ( pass.match(exp2) != null ) && ( pass.match(exp3) != null) && ( pass.match(exp4) != null) )
        {
            document.getElementById('enpass2').innerHTML = "";
            return true;
        }
        else
        {
            document.getElementById('enpass2').innerHTML = "<i>*Enter a Combination of Uppercases, Lowercases, Digits, and Special Characters</i>";
            return false;
        }
    }
    else
    {
        document.getElementById('enpass2').innerHTML = "<i>*Password should Contain at Least 8 Characters</i>";
        return false;
    }
}