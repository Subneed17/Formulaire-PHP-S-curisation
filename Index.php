<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <section class="contact">
            
    <form id="contact_form" action="thanks.php" method="POST" enctype="multipart/form-data">
        <div>
            <label class="name" for="name"> Nom  :</label>
            <input id="name" class="input" name="name" type="text" placeholder="Nom "  required />
            <span id="name_validation" class="error_message"></span>
        </div>
                
        
        <div>
            <label class="firstname" for="firstname"> Prénom  :</label>
            <input id="firstname" class="input" name="firstname" type="text" placeholder="Prénom"  required />
            <span id="firstname_validation" class="error_message"></span>
        </div>

        <div>
            <label class="email" for="email"> Email :</label>
            <input id="email" class="input" name="email" type="email" placeholder="Example@example.com" required />
            <?php
                filter_var('bobexemple@exemple.com', FILTER_VALIDATE_EMAIL);
            ?>
        </div>
                
        <div>
            <label class="phone" for="phone"> Numéro de téléphone :</label>
            <input id="phone" class="input" name="phone" type="text" placeholder="Votre numéro"  required />
            <span id="phone_validation" class="error_message"></span>
        </div>
              
        

        <div>
            <label class="avengers" for="avengers">Sujet :</label>
                <select name="avengers" id="avengers" required >
                    <option value="Iron Man">Iron Man</option>
                    <option value="Thor">Thor</option>
                    <option value="Captain America">Captain America</option>
                    <option value="Hulk">Hulk</option>
                </select>
        </div>
               

        <div>
            <label class="message" for="message"> Message :</label>
            <textarea id="message" class="input" name="message" placeholder="Votre message" rows="5" cols="30" required ></textarea>
            <span id="message_validation" class="error_message"></span>
        </div>
        <div>
                <input id="submit" type="submit" value="Envoyer" />
        </div>
            
            </form>
    </section>
</body>
</html>