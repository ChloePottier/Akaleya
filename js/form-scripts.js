$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Avez-vous remplit tous les champs du formulaire ?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var nom = $("#nom").val();
    var prenom = $("#prenom").val();
    var societe = $("#societe").val();
    var telephone = $("#telephone").val();
    var email = $("#email").val();
    var message = $("#message").val();
    var captcha = $("#g-recaptcha-response").val();
    

    $.ajax({
        type: "POST",
        url: "php/form-process.php",
        data: "nom=" + nom + "&prenom=" + prenom + "&societe=" + societe + "&telephone=" + telephone + "&email=" + email + "&message=" + message + "&captcha=" + captcha,
        success : function(text){
            if (text == "Message envoyé !"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#contactForm")[0].reset();
    submitMSG(true, "Message envoyé !")
}

function formError(){
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}