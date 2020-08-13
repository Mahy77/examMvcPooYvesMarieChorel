<?php
include 'include.php';
if (empty($_GET)) {
    $vehiculeController = new VehiculeController();
    $vehiculeController->home();
}
else if($_GET['controller'] === 'vehicule' && $_GET['action'] === 'home'){
    $vehiculeController = new VehiculeController();
    $vehiculeController->home();
}
else if($_GET['controller'] === 'vehicule' && $_GET['action'] === 'addForm'){
    $vehiculeController = new VehiculeController();
    $vehiculeController->addForm();
}
else if($_GET['controller'] === 'vehicule' && $_GET['action'] === 'detail' && isset($_GET['id'])){
    $vehiculeController = new VehiculeController();
    $vehiculeController->detailVehicule($_GET['id']);
}
else if($_GET['controller'] === 'vehicule' && $_GET['action'] === 'addVehicule'){
    $vehiculeController = new VehiculeController();
    $vehiculeController->addVehicule();
}
else if($_GET['controller'] === 'vehicule' && $_GET['action'] === 'delete' && isset($_GET['id'])){
    $vehiculeController = new VehiculeController();
    $vehiculeController->deleteVehicule($_GET['id']);
}
else if($_GET['controller'] === 'vehicule' && $_GET['action'] === 'update' && isset($_GET['id'])){
    $vehiculeController = new VehiculeController();
    $vehiculeController->update($_GET['id']);
}
else if($_GET['controller'] === 'vehicule' && $_GET['action'] === 'editVehicule' && isset($_GET['id'])){
    $vehiculeController = new VehiculeController();
    $vehiculeController->editVehicule($_GET['id']);
}