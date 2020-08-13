<html>
<head>
    <?php
    include 'Parts/stylesheets.html'
    ?>
</head>

<body>

<div class="container mt-5">
<h3>Editer un nouveau véhicule</h3>

<div class="row">
      <div class="col-sm-9 col-md-7 col-lg-9 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">  

<form method="post" action="index.php?controller=vehicule&action=editVehicule&id=<?php echo $vehicule->getIdvehicule()?>" class="form-signin" enctype="multipart/form-data">
<div class="form-label-group">
<input type="text" id="marque" name="marque" value="<?php echo $vehicule->getMarque()?>" class="form-control" placeholder="Marque" required autofocus>
<label for="marque">Marque</label>
</div>
<div class="form-label-group">
<input type="text" id="model" name="model" value="<?php echo $vehicule->getModel()?>" class="form-control" placeholder="Modele" required autofocus>
<label for="model">Modèle</label>
</div>
<label for="">Type d'énergie</label>
<select name="energie" id="energie" class="form-control mb-3">
<option value="essence">Essence</option>
<option value="diesel">Diesel</option>
<option value="electrique">Electrique</option>
<option value="hybride">Hybride</option>
</select>
<label for="">Type de boite de vitesse</label>
<select name="estAuto" id="estAuto" class="form-control mb-3">
<option value="0" >Boite Manuelle</option>
<option value="1" >Boite Automatique</option>


<div class="form-label-group">
<input type="text" id="image" name="image" value="<?php echo $vehicule->getImage()?>" class="form-control" placeholder="Image" autofocus>
<label for="image">Image</label>
</div>

<div class="text-center">
    <input class="btn btn-submit btn-lg mt-2 rounded-pill shadow" type="submit" value="valider">
    <a href="../examMVCPoo/index.php?controller=vehicule&action=home">
    <input class="btn btn-danger btn-lg mt-2 rounded-pill shadow" value="Annuler" type="button">
    </a>
</div>
</form>
          </div>
          </div>
          </div>
          </div>
</div>
<?php
 include 'Parts/scripts.html'
?>
</body>
</html>
