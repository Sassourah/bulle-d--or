<?php
// retenir l'email de la personne connectée pendant 1 an
setcookie(
    'LOGGED_USER',
    'utilisateur@exemple.com',
    [
        'expires' => time() + 365*24*3600,
        'secure' => true,
        'httponly' => true,
    ]
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="bulle d'or.css">
    <title>Bulle d'or</title>
</head>
<body>
<header>
  <div id="joie">
  <p>Tel:(509)0000-0000</p>

  </div>
  <div id="info">
    
     <h1>Bulle d'or</h1>
    <p>L'harmonie du naturel</p> 
    </div> 
    <div id="lien">
      <nav>
        <a href="bulle d'or.php">Bulle d'or</a>
        <a href="galerie.php">Galerie</a>
        <a href="contact.php">Contact</a>
      </nav>
    </div>
   
 
  
</header>  
