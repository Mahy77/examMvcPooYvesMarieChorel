<?php
class VehiculeController{
    public function home()
    {
        $vehiculeManager = new VehiculeManager();
        $vehicules = $vehiculeManager->selectAll();

        require 'View/home_view.php';
    }

    public function addForm(){
        require 'View/addForm.php';
    }

    public function addVehicule(){
        $vehicule = new Vehicule(null, $_POST['marque'], $_POST['model'], $_POST['energie'], $_POST['estAuto'], $_POST['image']);
        $vehiculeManager = new VehiculeManager();
        $vehiculeManager->addVehicule($vehicule);
        header('Location: /examMVCPoo/index.php?controller=vehicule&action=home');
       
    }

    public function detailVehicule($id){
        $vehiculeManager = new VehiculeManager();
        $vehicule = $vehiculeManager->detail($id);
        require 'View/detail.php';
    }
    
    public function deleteVehicule($id){
        $vehiculeManager = new VehiculeManager();
        $vehicule = $vehiculeManager->delete($id);
        header('Location: /examMVCPoo/index.php?controller=vehicule&action=home');
    }
    public function update($id){
        $vehiculeManager = new VehiculeManager();
        $vehicule = $vehiculeManager->detail($id);
        require 'View/updateForm.php';
    }
    public function editvehicule($id){
        
        $vehiculeManager = new VehiculeManager();
        $vehicule = $vehiculeManager->detail($id);
        
        $vehicule->setMarque($_POST['marque']);
        $vehicule->setModel($_POST['model']);
        $vehicule->setEnergie($_POST['energie']);
        $vehicule->setEstAuto($_POST['estAuto']);
        $vehicule->setImage($_POST['image']);
        
        $vehiculeManager->editVehicule($vehicule);
        header('Location: /examMVCPoo/index.php?controller=vehicule&action=home');
    }
}
