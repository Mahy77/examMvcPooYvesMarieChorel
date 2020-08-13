<?php
class Vehicule{

    private $idvehicule;
    private $marque;
    private $model;
    private $energie;
    private $estAuto;
    private $image;

    public function __construct($idvehicule= null, $marque, $model, $energie, $estAuto, $image)
    {
        $this ->idvehicule = $idvehicule;
        $this ->marque = $marque;
        $this ->model = $model; 
        $this ->energie = $energie;
        $this ->estAuto = $estAuto;
        $this ->image = $image;

    }

    /**
     * Get the value of idvehicule
     */ 
    public function getIdvehicule()
    {
        return $this->idvehicule;
    }

    /**
     * Set the value of idvehicule
     *
     * @return  self
     */ 
    public function setIdvehicule($idvehicule)
    {
        $this->idvehicule = $idvehicule;

        return $this;
    }

    /**
     * Get the value of marque
     */ 
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of model
     */ 
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of model
     *
     * @return  self
     */ 
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get the value of energie
     */ 
    public function getEnergie()
    {
        return $this->energie;
    }

    /**
     * Set the value of energie
     *
     * @return  self
     */ 
    public function setEnergie($energie)
    {
        $this->energie = $energie;

        return $this;
    }

    /**
     * Get the value of estAuto
     */ 
    public function getEstAuto()
    {
        return $this->estAuto;
    }

    /**
     * Set the value of estAuto
     *
     * @return  self
     */ 
    public function setEstAuto($estAuto)
    {
        $this->estAuto = $estAuto;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
    }