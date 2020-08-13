<?php
class VehiculeManager extends DbManager {
  public function __construct()
  {
      parent::__construct();
  }
  public function selectAll()
  {
      $vehicules = [];
      $sql =  'SELECT * FROM vehicule';
      foreach  ($this->pdo->query($sql) as $row) {
          $vehicules[] = new Vehicule($row['idvehicule'], $row['marque'], $row['model'], $row['energie'], $row['estAuto'], $row['image']);
      }

      return $vehicules;
      
  }

  public function addVehicule(Vehicule $vehicule){
    
    $marque = $vehicule->getMarque();
    $model = $vehicule->getModel();
    $energie = $vehicule->getEnergie();
    $estAuto = $vehicule->getEstAuto();
    $image = $vehicule->getImage();
    $requete = $this->pdo->prepare("INSERT INTO vehicule (marque, model, energie, estAuto, image) VALUES (?,?,?,?,?)");
    $requete->bindParam(1, $marque);
    $requete->bindParam(2, $model);
    $requete->bindParam(3, $energie);
    $requete->bindParam(4, $estAuto);
    $requete->bindParam(5, $image);
    $requete->execute();
    $vehicule->setIdvehicule($this->pdo->lastInsertId());

  }


  public function detail($id)
  {
    $requete = $this->pdo->prepare("SELECT * FROM vehicule WHERE idvehicule=?");
    $requete->bindParam(1, $id);
    $requete->execute();
    $res = $requete->fetch();
    
    $vehicule = new Vehicule($res['idvehicule'], $res['marque'], $res['model'], $res['energie'], $res['estAuto'], $res['image']);
   
    return $vehicule;
  }

  public function delete($id){
    $requete = $this->pdo->prepare("DELETE  FROM vehicule where idvehicule=?");
    $requete->bindParam(1, $id);
    $requete->execute();
  }

  public function editVehicule(Vehicule $vehicule){
    $id = $vehicule->getIdvehicule();
    $marque = $vehicule->getMarque();
    $model = $vehicule->getModel();
    $energie = $vehicule->getEnergie();
    $estAuto = $vehicule->getEstAuto();
    $image = $vehicule->getImage();
    $requete = $this->pdo->prepare("UPDATE vehicule SET marque=?, model=?, energie=?, estAuto=?, image=? WHERE idvehicule=?");
    $requete->bindParam(1, $marque);
    $requete->bindParam(2, $model);
    $requete->bindParam(3, $energie);
    $requete->bindParam(4, $estAuto);
    $requete->bindParam(5, $image);
    $requete->bindParam(6, $id);
    $requete->execute();
  }
}