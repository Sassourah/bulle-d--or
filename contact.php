<?php include('header.php') ?>

<?php


try
{
	$db = new PDO('mysql:host=localhost;dbname=bulle;charset=utf8','root','');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


?>

<?php

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $nom = $_POST['nom'];
  $texte = $_POST['texte'];
}
  $servname = 'localhost';
            $dbname = 'bulle';
            $user = 'root';
            
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$sth = $dbco->prepare("
                INSERT INTO contact(email,nom,texte)
            VALUES(:email, :nom, :texte)");
        $sth->bindParam(':email',$email);
        $sth->bindParam(':nom',$nom);
        $sth->bindParam(':texte',$texte);
        
        $sth->execute();
        
        //On renvoie l'utilisateur vers la page de remerciement
        //header("Location:form-merci.html");
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>





<br> <br>
   
   <form action="" method="post" id="formulaire">
       <div class="form-group"> 
         <div>
          <label for="mail">Entrez votre email</label>
         </div>
           <input type="text" name="email"  placeholder="exemple@gmail.com">
        </div>
    
        <div class="form-group"> 
         <div>
          <label for="nom">Nom</label>
         </div>
           <input type="text" name="nom" placeholder="Veuillez saisir votre nom">
        </div>
        
        <div class="form-group"> 
         <div>
          <label for="message">Ecrivez votre message</label>
         </div>
           <input type="text" name="texte" placeholder="Entrez...">
        </div>
         <br> <br>


       <button name="submit">Envoyer</button>
       <br> <br>
   </form> 
  

  
<?php include('footer.php') ?>
</body>
</html>

 <!-- <?php
if (
  (!isset($_GET['email']) || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL))
  || (!isset($_GET['texte']) || empty($_GET['texte']))
  )
{
echo('Il faut un email et un texte valides pour soumettre le formulaire.');
  return;
}
?> -->






