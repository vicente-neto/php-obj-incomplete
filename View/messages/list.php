<?php include __DIR__ . '/../header.php'; ?>
<ul class="list-group">
    <?php foreach ($messages as $message): ?>
    <div class="alert alert-<?=$message->getType()?>" role="alert">
        <?=$message->getText()?>
    </div>
    <?php endforeach; ?>
</ul>
<?php include __DIR__ . '/../footer.php'; ?>


