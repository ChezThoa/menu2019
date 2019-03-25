<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="formulaire.css">
        <div class="bigente">
            <p>
                <h1 class="tete">RESTAURANT CHEZ THOA </h1>
                <h2 class="sous-tete">LES GOÛTS DU VIETNAM DE TOUTES LES RÉGIONS</h2>
            </p>
        </div>
    </head>
    <body>
        <h1>Formulaire de contact</h1>
        <div class="contact-form">
            <form method='post' action='contactformulair.php'>
               <input type='text' name='prenom' id='prenom' placeholder="Votre Prénom" maxlength='20' class='contactcss' required></br>
                <span id='prenom_manquant'></span></br>
                        
                <input tpye='email' name='mail' id='mail' placeholder="Votre Email" class='contactcss' required></br>
            
                        
                <input type='tel' name='tel' id='tel' placeholder="Votre numéro de natel" class='contactcss' required></br>
            
                <textarea type='message' name='messages'id='message' rows='4' placeholder="Message" maxlength ='500'class='contactcss' required></textarea></br>
                        
                <input type='submit' class="confirm-contact" value='ENVOYER LE MESSAGE' id ='bouton_envoi' class='contactcss' required>
            </form>
            <script>
                var validation = document.getElementById('bouton_envoi');
                var prenom = document.getElementById('prenom');
                var prenom_m =document.getElementById('prenom_manquant');
                var prenom_v= /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï])?/;
                validation.addEventListener('click', f_valid);

                function f_valid(e){
                    if (prenom.validity.valueMissing){
                        e.preventDefault();
                        prenom_m.textContent = 'Prénom manquant';
                        prenom_m.style.color ='white';
                    }else if(prenom_v.test(prenom.value)== false){
                        event.preventDefault();
                        prenom_m.textContent ='Format incorrect';
                        prenom_m.style.color = 'white';
                    }

                }
            </script>
        </div>

    </body>
</html>