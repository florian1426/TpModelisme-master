<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Modelisme</title>

    <link rel="stylesheet" href="css/style.css">

 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  
    <link rel="stylesheet" href="css/fontawesome/css/all.css">

    <script src="js/main.js" defer></script>

</head>
<body class="w-100  ">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top  bg-success  ">
            
           

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addBons.php">Créer un bon de commande</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="commandes.php">Liste des Commandes</a>
                    </li>
                   
                </ul>
            </div>  
        </nav>
    </header>
    <main class="w-100 m-0 p-0 ">
        <?php include $template.".php"; ?>
    </main>
    
    <footer class="container-fluid bg-dark">        
      
        
        <div class="text-center py-1 mb-0 text-white bg-success">
            <small>© 2020 - Modelisme. </small>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>