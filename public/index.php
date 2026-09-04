<?php
require_once __DIR__ . "/../controllers/MateriaController.php";

if (file_exists(__DIR__ . "/../controllers/PorfolioController.php")) {
    require_once __DIR__ . "/../controllers/PorfolioController.php";
}

$controller = new MateriaController();
$action = $_GET["action"] ?? "index";

switch ($action) {
    case "porfolio":
        if (class_exists('PorfolioController')) {
            $porfolioController = new PorfolioController();
            $porfolioController->index();
        }
        break;

    case "index":
    case "materias_index":
        $controller->index();
        break;

    case "create":
    case "materia_create":
        $controller->create();
        break;

    case "store":

        if ($_SERVER["REQUEST_METHOD"] !== "POST") die("Método no permitido.");
        $controller->store();
        break;

    case "edit":
    case "materia_edit":
        $controller->edit();
        break;

    case "update":
        if ($_SERVER["REQUEST_METHOD"] !== "POST") die("Método no permitido.");
        $controller->update();
        break;

    case "delete":
    case "materia_delete":
        $controller->delete();
        break;

    default:
        die("Acción no encontrada: " . htmlspecialchars($action));
}