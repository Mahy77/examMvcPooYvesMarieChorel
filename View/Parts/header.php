
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="opacity: 0.8;">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="navbar-brand" title="Retour à l'accueil" href="../MVC/index.php?controller=default&action=home"><i class="fas fa-home"></i></a>
      </li>
      <li class="nav-item active">
        
          <?php
            if(isset($_SESSION['user'])){
                echo('
                <li class="navbar-brand">Bonjour '.$_SESSION['user']['surname'].'</li>
                <li class="nav-item"><a class="nav-link" href="add-photo.php">ajouter des photos</a></li>
                <li class="nav-item"><a class="nav-link" href="dashboard.php">voir toutes les photos</a></li>'); 
            }
            else{
            echo('<li class="nav-item"><a class="nav-link" href="dashboard.php">voir toutes les photos</a></li>'); 
            
            }
            ?>
      </li>
     
    
    </ul>
    
    <ul class="navbar-nav">
        <li class="nav-item text-center">
          <?php
             if(isset($_SESSION['user'])){
                 echo('<a href="monCompte.php" title="Mon compte" class="nav-link"><i class="fas fa-user"></i></a>');
                echo('<a href="../MVC/index.php?controller=user&action=logout" class="nav-link">Deconnexion</a>');
            
             }
             else{
                echo('<a href="../MVC/index.php?controller=user&action=login" class="nav-link">Se connecter</a>');
            
             }?>
        </li>
    </ul> 
  </div>
</nav>




