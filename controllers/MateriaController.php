<?php
require_once __DIR__ . "/../config/database.php";
require_once __DIR__ . "/../models/materia.php";

class MateriaController
{
    private $materiaModel;

    public function __construct()
    {
        global $conexion;
        $this->materiaModel = new Materia($conexion);
    }

    public function index()
    {
        $materias = $this->materiaModel->getAll();
        require __DIR__ . "/../views/materias/index.php";
    }

    public function create()
    {
        require __DIR__ . "/../views/materias/create.php";
    }

public function store()
{
    // Captura 'nombre' o 'materia' según cómo venga del formulario
    $materia = trim($_POST["nombre"] ?? $_POST["materia"] ?? "");

    // Obtener el valor de 'año' o 'anio'
    $rawAnio = $_POST["año"] ?? $_POST["anio"] ?? "";
    
    // Extrae solo los dígitos numéricos (ej: de "1° Año" obtiene 1)
    $anio = (int) preg_replace('/[^0-9]/', '', $rawAnio);

    $estado = isset($_POST["estado"]) ? (int)$_POST["estado"] : 1;

    // Validación
    if ($materia === "" || $anio <= 0) {
        die("La materia y el año son obligatorios.");
    }

    $this->materiaModel->create($materia, $anio, $estado);
    header("Location: index.php?action=index");
    exit;
}

    public function edit()
    {
        $id = (int)($_GET["id"] ?? 0);
        if ($id <= 0) die("ID inválido.");

        $materia = $this->materiaModel->getById($id);
        if (!$materia) die("Materia no encontrada.");

        require __DIR__ . "/../views/materias/edit.php";
    }

public function update()
{
    $id = (int)($_POST["id"] ?? $_POST["idMaterias"] ?? 0);
    $materia = trim($_POST["nombre"] ?? $_POST["materia"] ?? "");
    
    $rawAnio = $_POST["año"] ?? $_POST["anio"] ?? "";
    $anio = (int) preg_replace('/[^0-9]/', '', $rawAnio);
    
    $estado = (int)($_POST["estado"] ?? 1);

    if ($id <= 0 || $materia === "" || $anio <= 0) {
        die("Datos inválidos.");
    }

    $this->materiaModel->update($id, $materia, $anio, $estado);
    header("Location: index.php?action=index");
    exit;
}

    public function delete()
    {
        $id = (int)($_GET["id"] ?? 0);
        if ($id > 0) {
            // Ejecuta el borrado lógico (UPDATE materias SET estado=0) definido en el Modelo
            $this->materiaModel->delete($id);
        }
        header("Location: index.php?action=index");
        exit;
    }
}