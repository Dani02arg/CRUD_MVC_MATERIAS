<?php require_once __DIR__ . "/../layouts/header_admin.php"; ?>

<div class="header-actions">
    <div>
        <h1>Editar Materia</h1>
        <p>Modifica los datos de la materia seleccionada.</p>
    </div>
    <a href="index.php?action=index" class="btn btn-secondary">← Volver al listado</a>
</div>

<div class="card-form">
    <form action="index.php?action=update" method="POST">
        <!-- Campo oculto obligatorio para pasar el ID al controlador -->
        <input type="hidden" name="id" value="<?= htmlspecialchars($materia['idMaterias'] ?? $materia['id'] ?? '') ?>">

        <div class="form-group">
            <label for="nombre">Materia:</label>
            <input type="text"
                id="nombre"
                name="nombre"
                class="form-control"
                value="<?= htmlspecialchars($materia['nombre'] ?? $materia['materia'] ?? '') ?>"
                required>
        </div>

        <div class="form-group">
            <label for="año">Año de Cursada:</label>
            <input type="text"
                id="año"
                name="año"
                class="form-control"
                value="<?= htmlspecialchars($materia['año'] ?? $materia['anio'] ?? '') ?>"
                required>
        </div>

        <div class="form-group">
            <label for="estado">Estado:</label>
            <select id="estado" name="estado" class="form-control">
                <option value="0" <?= (int)($materia['estado'] ?? 0) === 0 ? 'selected' : '' ?>>Inactiva / Pendiente</option>
                <option value="2" <?= (int)($materia['estado'] ?? 0) === 2 ? 'selected' : '' ?>>En curso</option>
                <option value="1" <?= (int)($materia['estado'] ?? 0) === 1 ? 'selected' : '' ?>>Aprobada</option>
            </select>
        </div>

        <div class="form-actions" style="margin-top: 20px; display: flex; gap: 10px;">
            <button type="submit" class="btn btn-primary">Actualizar Materia</button>
            <a href="index.php?action=index" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>