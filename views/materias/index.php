<?php require_once __DIR__ . '/../layouts/header_admin.php'; ?>

<div class="header-actions">
    <div>
        <h1>Gestión de Materias</h1>
        <p>Administra las materias de tu plan de estudios.</p>
    </div>
    <a href="index.php?action=materia_create" class="btn btn-primary">+ Nueva Materia</a>
</div>

<div style="margin-bottom: 15px;">
    <input type="text" id="searchMateria" placeholder="🔍 Buscar materia..." style="padding: 8px 12px; width: 100%; max-width: 300px; border-radius: 6px; border: 1px solid #444; background: #1f293d; color: #fff;">
</div>

<div class="tabla-container">
    <table class="tabla-admin">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Año</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($materias)): ?>
                <?php foreach ($materias as $row): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['idMaterias']) ?></td>
                        <td><strong><?= htmlspecialchars($row['nombre']) ?></strong></td>
                        <td><?= htmlspecialchars($row['año']) ?></td>
                        <td>
                            <?php
                            switch ((int)$row['estado']) {
                                case 1:
                                    echo '<span class="badge badge-aprobada">Aprobada</span>';
                                    break;
                                case 2:
                                    echo '<span class="badge badge-encurso">En curso</span>';
                                    break;
                                default:
                                    echo '<span class="badge badge-pendiente">Pendiente</span>';
                                    break;
                            }
                            ?>
                        </td>
                        <td class="acciones-cell">
                            <a href="index.php?action=materia_edit&id=<?= $row['idMaterias'] ?>" class="btn btn-secondary">Editar</a>
                            <a href="index.php?action=materia_delete&id=<?= $row['idMaterias'] ?>" 
                               class="btn btn-danger" 
                               onclick="return confirm('¿Estás segura de eliminar esta materia?');">
                               Eliminar
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" style="text-align: center; padding: 20px;">No hay materias registradas.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>