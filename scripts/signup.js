var $form = $('form');
var $p0 = $('#p0');
var $p1 = $('#p1');
var $p2 = $('#p2');
var $p3 = $('#p3');

var $inputs = {
    username : $form.find('#username input'),
    email : $form.find('#email input'),
    password : $form.find('#password input'),
    verifypassword : $form.find('#verifypassword input'),
}

$form.submit(function(event){
    event.preventDefault();

    // USERNAME
    var username = $inputs.username.val();
    if(username.length < 4){
        $inputs.username.css("border", "1px solid red");
        $p0.text("Votre pseudo doit contenir au moins 4 caractères");
    }

    else if(username.length > 30){
        $inputs.username.css("border", "1px solid red");
        $p0.text("Votre pseudo doit contenir moins de 30 caractères");
    }
    else{
        $inputs.username.css("border", "1px solid green");
        $p0.text("");
    }


    // EMAIL
    var email = $inputs.email.val();
    var n = email_check(email, "@");
    if(n ==- 1){
        $inputs.email.css("border", "1px solid red");
        $p1.text("Merci d'entrer une adresse email valide");
    }
    var n = email_check(email, ".");
    if(n ==- 1){
        $inputs.email.css("border", "1px solid red");
        $p1.text("Merci d'entrer une adresse email valide");
    }

    else{
        $inputs.email.css("border", "1px solid green");
        $p1.text("");
    }


    // PASSWORD
    var password = $inputs.password.val();
    var verifypassword = $inputs.verifypassword.val();
    if(password != verifypassword){
        $inputs.password.css("border", "1px solid red");
        $inputs.verifypassword.css("border", "1px solid red");
        $p2.text("Merci d'entrer le même mot de passe");
    }

    if(password.length < 8){
        $inputs.password.css("border", "1px solid red");
        $inputs.verifypassword.css("border", "1px solid red");
        $p3.text("Votre mot de passe doit contenir au moins 8 caractères");
    }

    else{
        $inputs.password.css("border", "1px solid green");
        $inputs.verifypassword.css("border", "1px solid green");
        $p2.text("");
        $p3.text("");
    }
})

function email_check(message, motclef){
    var str = message;
    var n = str.search(motclef);
        
    return n;
}