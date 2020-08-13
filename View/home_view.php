<html>
    <head>
        <?php
        include 'Parts/stylesheets.html';
        ?>
    </head>

    <body>

    

    <h1 class="display-1 text-warning text-center">Tous nos véhicules</h1>
    <div class="container mt-5 p-2 shadow p-3 mb-5 rounded-lg">
    

    <a href="../examMVCPoo/index.php?controller=vehicule&action=addForm">
        <button class="btn btn-warning m-2 rounded-pill shadow">Ajouter un véhicule</button>
    </a>
    <table class="table">
        <thead>
            <td>Marque</td>
            <td>Modèle</td>
            <td>Energie</td>
            <td>Type de boite</td>
            <td>Image</td>
            <td>Action</td>
        </thead>

        <tbody>
            <?php
                foreach ($vehicules as $vehicule) {
                    ?>
                    <tr>
                        <td><?php echo $vehicule->getMarque()?></td>
                        <td><?php echo $vehicule->getModel()?></td>
                        <td><?php echo $vehicule->getEnergie()?></td>
                        <td><?php if($vehicule->getEstAuto()){
                            echo('Automatique');
                        }else{
                            echo('Manuelle');
                        }?></td>
                        <td><img src="View/Parts/image/<?php echo $vehicule->getImage()?>" alt="<?php echo $vehicule->getModel()?>" width="200px"></td>
                        <td>
                            <a class="d-flex m-2" title="Supprimer" href="../examMVCPoo/index.php?controller=vehicule&action=delete&id=<?php echo $vehicule->getIdvehicule()?>">supprimer</a>
                            <a class="d-flex m-2" title="Modifier" href="../examMVCPoo/index.php?controller=vehicule&action=update&id=<?php echo $vehicule->getIdvehicule()?>">Editer</a>
                            <a class="d-flex m-2" title="Voir le détail" href="../examMVCPoo/index.php?controller=vehicule&action=detail&id=<?php echo $vehicule->getIdvehicule()?>">Détail</a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
    

    </div>
    <?php
    include 'Parts/scripts.html'
    ?>
    </body>
</html>