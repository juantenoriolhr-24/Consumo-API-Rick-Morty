<div style="margin-top:20px;">

    <?php if ($page > 1): ?>
        <a href="?page=<?= $page - 1; ?>">⬅ Anterior</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="?page=<?= $i; ?>"
           style="margin: 0 5px; <?= $i == $page ? 'font-weight:bold;' : '' ?>">
           <?= $i; ?>
        </a>
    <?php endfor; ?>

    <?php if ($page < $totalPages): ?>
        <a href="?page=<?= $page + 1; ?>">Siguiente ➡</a>
    <?php endif; ?>

</div>