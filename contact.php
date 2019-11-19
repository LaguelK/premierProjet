<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <title>Me contacter</title>
  </head>
  
  <body>
    
      
    <!-- THIS IS THE HEADER, WITH HIS NAVBAR -->

    <?php include("header.php"); ?>
   
    <br/>
    <br/>
    <br/><br/>
    <br/>
    <br/><br/>
    <br/>
    
    <h1> Contactez moi via le formulaire et je vous répondrais dans les plus brefs délais </h1>


    
<form action="action.php" method="post">
                <div class="form-group">
                            <label for="exampleInputPassword1">Votre nom </label>
                            <input type="text" class="form-control" name="name" placeholder="Votre nom (requis)">
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Votre adresse E-mail (requis)">
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Le sujet</label>
                            <input type="email" class="form-control" name="subject"  placeholder="Ex: Idée amelioration de ton site">
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Ton message</label>
                            <input type="email" class="form-control" name="message"  placeholder="Ton message (requis)">
                </div>

                            <button type="submit" class="btn btn-primary">Envoyer</button>
</form>












      




             <!-- THIS IS  MY FOOTER -->
            <?php include("footer.php"); ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
    