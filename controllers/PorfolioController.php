<?php
require_once __DIR__ . "/../config/database.php";
require_once __DIR__ . "/../models/Materia.php";

class PorfolioController
{
    private $materiaModel;

    public function __construct()
    {
        global $conexion;
        $this->materiaModel = new Materia($conexion);
    }

    public function index()
    {
        // Trae únicamente las materias activas usando el modelo
        $materias = $this->materiaModel->getActive(); 
        
        // Carga la vista del portafolio pasándole la variable $materias
        require __DIR__ . "/../views/porfolio/index.php";
    }
}