jQuery.validator.setDefaults({
    debug: true,
    success: 'valid'
});

// // Ajoute la classe "help-block" de boostrap au label d'erreur de validation
// $.validator.setDefaults({
//     //    errorClass: 'help-block'
//     errorClass: 'alert-danger'
// });


//Méthode qui permet de vérifier dans le champs nom, si la chaine de caractère saisi par l'utilisateur correspond à un nom.(accepte tous caractères sauf les chiffres)
$.validator.addMethod("checkName", function (value, element) {
    return this.optional(element) || /^[^0-9]+$/i.test(value);
}, "Veuillez seulement entrer des lettres");

//Méthode qui permet de vérifier dans le champs téléphone, si la chaine de caractère saisi par l'utilisateur correspond à un numéro de téléphone. (accepte seulement les numéros qui commence par 01-09, le numéro doit respecter un nombre de 10 chiffres)
$.validator.addMethod("checkMobile", function (phone_number, element) {
    //	phone_number = phone_number.replace( /\(|\)|\s+|-/g, "" );
    return this.optional(element) || phone_number.length == 10 &&
        phone_number.match(/^0[1-9][0-9]{8}$/);
}, "Veuillez entrer un numéro de téléphone valide.");

//affectation du formulaire dans une variable
var validation = $('#myContactForm');

//Evenement éffectué sur le click du bouton "envoyer"
$('#envoyer').click(function () {

    //vérification du formulaire
    validation.validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            nom: {
                required: true,
                checkName: true,
            },
            prenom: {
                required: true,
                checkName: true,
            },
            sujet: {
                required: true,
            },
            message: {
                required: false
            }
        },
        messages: {
            email: {
                required: 'Veuillez entrer une adresse email.',
                email: 'Cette adresse email est invalide.'
            },
            nom: {
                required: "Veuillez entrer un nom.",
                lettersonly: " Veuillez entrer seulement des lettres."
            },
            prenom: {
                required: "Veuillez entrer un prénom.",
                lettersonly: " Veuillez entrer seulement des lettres."
            },
            sujet: {
                required: "Veuillez remplir ce champs s'il vous plaît."
            }
        }
    });

    //si la vérification du formulaire est juste alors on entre dans la boucle
    if (validation.valid() == true) {

        //affectation des données du formulaire dans des variables
        var nom = $('#nom').val();
        var prenom = $('#prenom').val();
        var email = $('#email').val();
        var sujet = $('#sujet').val();
        var message = $('#message').val();

        

        //vérifie si les variables sont vides ou null
        if (nom != "" && nom != null && prenom != "" && prenom != null && email != "" && email != null  && sujet != "" && sujet != null) {

            // console.log(nom);
            // console.log(prenom);
            // console.log(email);
            // console.log(sujet);
            // console.log(message);

            // apelle de l'ajax pour envoyer les données au php
            $.ajax({
                url: 'asset/php/mail.php',
                type: 'POST',
                dataType: 'html',
                data: {
                    nom: nom,
                    prenom: prenom,
                    email: email,
                    sujet: sujet,
                    message: message
                },
                cache: false,
                success: function (data) {

                    // //réception des résultats du traitement PHP
                    $('#result').html(data);

                    console.log($('#myContactForm'));

                    // //réinitialisation des champs du formulaire à zéro
                    $('#myContactForm')[0].reset();
                    // $('#myContactForm')[1].reset();
                    // $('#myContactForm')[2].reset();
                    // $('#myContactForm')[3].reset();

                },
                error: function () {
                    console.log($('#myContactForm'));

                    $('#result').html('<strong style=\"color:#a94442;\">La requête n\'a pas abouti.</strong>');
                }
            });
        } 
        else {
            //      
            $('#result').html("<strong style=\"color:#a94442;\">Le formulaire que vous avez envoyé est invalide</strong>");
        }


    } else {
        $('#result').html("<strong style=\"color:#a94442;\">Le formulaire est mal rempli. Veuillez réessayer</strong>");

    }


});
