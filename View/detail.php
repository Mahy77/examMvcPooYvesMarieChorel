<html>
    <head>
        <?php
        include 'Parts/stylesheets.html'
        ?>
    </head>

    <body>
    
    <div class="container mt-5 text-center">

<h2 class="display-3 text-warning" >voici <?php echo $vehicule->getModel()?></h2>

<img src="View/Parts/image/<?php echo $vehicule->getImage()?>" alt="<?php echo $vehicule->getModel()?>" class="rounded w-50" >
<br>

<a href="../examMVCPoo/index.php?controller=vehicule&action=home">
        <button style="margin-bottom:10px;" class="btn btn-warning rounded-pill shadow mt-3">Retour</button>
    </a>
</div>

</body>
</html>