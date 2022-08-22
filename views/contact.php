<!doctype html>
<html lang="fr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  



  <title>Contact</title>
 
</head>

<body>
  
  <div class="container">
    <div class="">
      <?php include('controllers/menu.php'); ?>
    </div>

   
<div class="row">


    <form action="" method="POST" class="col-6" id="formulaire">
      <div class="form-group">
         <h1>Contact</h1>
      </div> 
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" placeholder="Enter email">
  </div>
  <div class="form-group">
    <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="telephone" name="tel"   pattern="[0-9]{10}">
  </div>
  <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" placeholder="Votre message"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>


<?php 
                   if(!empty($serveur) && $serveur ===200){
                    echo"</br>";
                    echo '<p id="resultat"  class="p-3 mb-2 bg-success text-white">"';
                      ?>
                        <script>
                            document.getElementById('resultat').innerHTML=('Message envoyées avec succès');
                        </script>
                      <?php
                   }
                        
            ?>
</div> 

 
</body>

</html>
