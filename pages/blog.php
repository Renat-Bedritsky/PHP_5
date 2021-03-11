<?php
require_once '../elements/header.php';
require_once '../data/pageData.php';
?>

<div class="blog">
    <div class="container">

        <h2>BLOG<h2/>

        <?php if (empty($_GET)) :
        
        foreach ($arrBlog as $key => $value): ?>
        <h2><a href="?post=<?= $key ?>"><?= $value['title'] ?></a></h2>
        <p><?= $value['text'] ?></p>
        <?php endforeach;
        
        else:

        $key = $_GET['post']; ?>

        <h2><?= $arrBlog[$key]['title']; ?></h2>
        <p><?= $arrBlog[$key]['text']; ?></p>

        <?php endif; ?>

    </div>
</div>

<?php
require_once '../elements/footer.php';
?>