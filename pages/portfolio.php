<?php
require_once '../elements/header.php';
?>

<div class="container">
    <div class="portfolio">
        <?php if (!empty($arrPhoto)):

        foreach ($arrPhoto as $key => $value): ?>
        <img src="<?= $value ?>" alt="House<?= $key ?>">
        <?php endforeach;
        
        endif; ?>
    </div>
</div>

<?php
require_once '../elements/footer.php';
?>