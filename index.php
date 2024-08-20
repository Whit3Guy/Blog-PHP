<?php

include_once("templates/header.php");


?>
    <div class="title-container">
        <h1>Blog codar</h1>
        <p>O seu blog de programação</p>
    </div>
    <div class="posts-container">
    <?php 
    foreach($posts as $post):
    ?>
    <div class="post-box">
        <img src="<?= $BASE_URL?>/img/<?= $post['img']?>" alt="">
        <h2 class="post-title">
            <a class="" href="<?= $BASE_URL?>post.php?id=<?= $post['id']?>">
                <?= $post['title']?>
        </a>
        <div class="post-description">
            <p><?= $post['description']?></p>
        </div>
        <div class="tags-container">
        <?php 
            foreach($post['tags'] as $tags):
        ?>
        <a href="#"><?=$tags?></a>
        <?php
         endforeach
        ?>
        </div>
    </h2>


    </div>
    <?php endforeach?>

    </div>


<?php

include_once("templates/footer.php")

?>