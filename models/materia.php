<?php
class Materia
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    // Obtener todas las materias
    public function getAll()
    {
        return $this->conexion->query("SELECT * FROM materias ORDER BY idMaterias DESC");
    }

    // Obtener solo materias activas
    public function getActive()
    {
        return $this->conexion->query("SELECT * FROM materias WHERE estado = 1 ORDER BY idMaterias DESC");
    }

    // Obtener una materia por idMaterias
    public function getById($id)
    {
        $s = $this->conexion->prepare("SELECT * FROM materias WHERE idMaterias = ?");
        $s->bind_param("i", $id);
        $s->execute();
        return $s->get_result()->fetch_assoc();
    }

    // Crear una materia
    public function create($nombre, $anio, $estado = 1)
    {
        $s = $this->conexion->prepare("INSERT INTO materias (nombre, año, estado) VALUES (?, ?, ?)");
        $s->bind_param("sii", $nombre, $anio, $estado);
        return $s->execute();
    }

    // Actualizar una materia
    public function update($id, $nombre, $anio, $estado)
    {
        $s = $this->conexion->prepare("UPDATE materias SET nombre = ?, año = ?, estado = ? WHERE idMaterias = ?");
        $s->bind_param("siii", $nombre, $anio, $estado, $id);
        return $s->execute();
    }

    // Borrado Lógico: cambia el estado a 0 (desactivada)
    public function delete($id)
    {
        $s = $this->conexion->prepare("UPDATE materias SET estado = 0 WHERE idMaterias = ?");
        $s->bind_param("i", $id);
        return $s->execute();
    }
}