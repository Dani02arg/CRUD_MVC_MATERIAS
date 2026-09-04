<?php require_once __DIR__ . '/../layouts/header_admin.php'; ?>

<div class="header-actions">
    <h1>Agregar Nueva Materia</h1>
    <a href="index.php?action=materias_index" class="btn btn-secondary">← Volver al Listado</a>
</div>

<div class="card-form">
    <form action="index.php?action=store" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre de la Materia:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ej: Análisis Matemático I" required>
        </div>

        <div class="form-group">
            <label for="año">Año de Cursada:</label>
            <input type="text" id="año" name="año" class="form-control" placeholder="Ej: 1° Año" required>
        </div>

        <div class="form-group">
            <label for="estado">Estado Actual:</label>
            <select id="estado" name="estado" class="form-control">
                <option value="0">Pendiente</option>
                <option value="2">En curso</option>
                <option value="1">Aprobada</option>
            </select>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Guardar Materia</button>
            <a href="index.php?action=materias_index" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>