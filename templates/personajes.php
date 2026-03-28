<table>
    <thead>
        <tr>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($personajes as $p): ?>
            <tr>
                <td><img src="<?= $p['image']; ?>" width="50"></td>
                <td><?= $p['name']; ?></td>
                <td><?= $p['species']; ?></td>
                <td><?= $p['status']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>