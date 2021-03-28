<?php
// echo "Merci" . $_POST['firstname'] . $_POST['name'] . " de nous avoir contacté à propos de " . $_POST['avengers'] . 
// " : Un de nos conseiller vous contactera soit à l'adresse " . $_POST['email'] . " ou par téléphone au". $_POST['phone'] . " dans les plus brefs délais pour traiter votre demande : " 
// . $_POST['message'] . " . " ;






$firstname = $name = $avengers = $email = $phone = $message = "";

$error= [];

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlentities($data);
    return $data;
  }
  

    if (empty($_POST["firstname"])) {
    $error[] = "firstname is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
  }

    if (empty($_POST["name"])) {
    $error[] = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }


  if (empty($_POST["avengers"])) {
    $error[] = "avengers is required";
  } else {
    $avengers = test_input($_POST["avengers"]);
  }

  if (empty($_POST["email"])) {
    $error[] = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error[] = "L'adresse mail n'est pas valide";
   }
   

  if (empty($_POST["phone"])) {
    $error[] = "phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
  }

  if (empty($_POST["message"])) {
    $error[] = "message is required";
  } else {
    $message = test_input($_POST["message"]);
  }

  if (!empty($error)) {
      var_dump($error);
  } else {
    echo  'Merci '. $firstname . ' ' . $name . ' de nous avoir contacté à propos de ' . $avengers . ' ,
Un de nos conseiller vous contactera soit à l\'adresse ' . $email . ' ou par téléphone au ' . $phone . ' dans les plus brefs délais pour traiter votre demande : ' . $message;
  }

?>





